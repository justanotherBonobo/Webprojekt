<?php

namespace Controllers;

use Framework\AbstractController;

class DemoController extends AbstractController
{

    /**
     * the default action
     */
    public function defaultAction()
    {
    }

    public function ajaxAction()
    {
        // set the layout to a blank version
        $this->setLayout('ajax');
    }
}