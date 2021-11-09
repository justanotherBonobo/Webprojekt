<?php

namespace Framework;

class Layout
{
    const DEFAULT_LAYOUT = 'default';

    /**
     * The current layout
     */
    protected $layout = self::DEFAULT_LAYOUT;

    /**
     * The current controller
     */
    protected $controller;

    /** 
     * The current actionaction
    */
    protected $action;

    /**
     * Data stored for the current view
     */
    protected $data = [];

    /**
     * Set the layout
     */
    public function setLayout($layout)
    {
        $this->layout = $layout;
    }

    /**action
     * Set the controller
     */
    public function setController($controller)
    {
        $this->controller = $controller;
    }

    /**
     * Set the action
     */
    public function setAction($action)
    {
        $this->action = $action;
    }

    /**
     * Store data
     */
    public function setData($key, $value)
    {
        $this->data[$key] = $value;
    }

    /**
     * Retrieve data
     */
    public function getData($key)
    {
        if (isset($this->data[$key])) {
            return $this->data[$key];
        }
        return null;
    }

    /**
     * Render the page
     */
    public function render()
    {
        $layoutPath = 'Layouts/'
            . strtolower($this->layout)
            . '.php';

        if(file_exists($layoutPath)) {
            include $layoutPath;
        } else {
            die('layout ' . $this->layout . ' not found');
        }
    }

    /**
     * Render the current view
     */
    protected function renderView()
    {
        $viewPath = 'Views/'
            . strtolower($this->controller) . '/'
            . strtolower($this->action)
            . '.php';
            
        if(file_exists($viewPath)) {
            include $viewPath;
        } else {
            die('view ' . $viewPath . ' not found');
        }
    }
}