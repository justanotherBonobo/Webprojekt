<?php

namespace Framework;

abstract class AbstractController implements ControllerInterface
{
    /**
     * the current layout
     */
    protected $layout;

    /**
     * the current controller
     */
    protected $controller;

    /**
     * the current action
     */
    protected $action;

    public function __construct($layout)
    {
        $this->layout = $layout;
        $this->_init();
    }

    public function _init()
    {
    }

    /**
     * Set the layout
     */
    public function setLayout($layout)
    {
        $this->layout->setLayout($layout);
    }

    /**
     * Set the controller and action
     */
    public function setView($controller, $action)
    {
        $this->layout->setController($controller);
        $this->layout->setAction($action);
    }

    /**
     * Store data to be used in view
     */
    public function setData($key, $value)
    {
        $this->layout->setData($key, $value);
    }

    /**
     * Retrieve data
     */
    public function getData($key) {
        return $this->layout->getData($key);
    }

    /**
     * Render the page
     */
    public function render()
    {
        return $this->layout->render();
    }
}