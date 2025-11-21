<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
require_once("modules/Contacts/controller.php");
class CustomContactsController extends ContactsController
{
  public function action_HelloWorld(){
    
    $GLOBALS['log']->fatal("some controler text");
    print_r("<h1><mark>Hello from custom controller</mark></h1>");


    // prevent default view render
    sugar_cleanup(true);
  }
}