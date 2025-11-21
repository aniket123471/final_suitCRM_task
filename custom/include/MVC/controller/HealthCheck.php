<?php
if(!defined('sugarEntry') || !sugarEntry) die("Not a valid Entry Point");

require_once('include/MVC/Controller/SugarController.php');

class HealthCheck extends SugarController{
    public function action_healthcheck(){
        require_once('custom/include/MVC/View/Views/SugarView.php');
       $view  = new ViewHealthCheck();
       $view->display();
    }
}
