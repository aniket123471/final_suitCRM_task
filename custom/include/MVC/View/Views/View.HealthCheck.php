<?php
if(!defined('sugarEntry') || !sugarEntry) die("Not a valid Entry Point");

require_once('include/MVC/View/SugarView.php');

class ViewHealthCheck extends SugarView{
    public function display()
    {
        echo "run success";
    }
}