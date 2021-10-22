<?php

namespace Framework;

/**
 * The front controller
 * 
 * Dispatch request to matching controller
 * based on current route
 */
class FrontController
{
    const DEFAULT_CONTROLLER = 'default';
    const DEFAULT_ACTION = 'default';

    /**
     * The current controller
     */
    protected $controller;
    
    /**
     * The current controller object
     */
    protected $controllerObject;

    /**
     * The current action
     */
    protected $action;

    public function __construct()
    {
        $this->controller = self::DEFAULT_CONTROLLER;
        $this->action = self::DEFAULT_ACTION;
    }

    /**
     * Dispatch request to the matching
     * controller and action
     */
    public function dispatch()
    {
        if(isset($_GET['c'])) {
            $this->controller = $_GET['c'];
        }
        
        if(isset($_GET['a'])) {
            $this->action = $_GET['a'];
        }
        
        // instatiate controller class
        // spl_autoload will raise an error in case
        // the file is not found
        $controllerClassName = 'Controllers\\'
            . ucfirst(strtolower($this->controller))
            . 'Controller';

        $this->controllerObject = new $controllerClassName(
            new Layout()
        );
        
        // call action if present in controller object
        $actionMethodName = strtolower($this->action)
            . 'Action';
        if(method_exists(
            $this->controllerObject,
            $actionMethodName)
        ) {
            $this->controllerObject->$actionMethodName();
        } else {
            die('Method ' . $actionMethodName . ' not found');
        }
    }

    /**
     * Render the page
     */
    public function render()
    {
        $this->controllerObject->setView(
            $this->controller,
            $this->action
        );
        return $this->controllerObject->render();
    }
}