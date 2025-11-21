<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
require_once("include/MVC/Controller/sugarController.php");
class vend1_VendorsController extends SugarController
{
  public function action_ImportNew(){
    
    $GLOBALS['log']->fatal("some controler text");
    print_r("<h1>Import controller</h1>");

    global $current_user;

    $bean = BeanFactory::newBean('vend1_Vendors');
    $query = "SELECT id, name FROM {$bean->table_name} WHERE deleted = 0";
    $res = $bean->db->query($query);

    while ($row = $bean->db->fetchByAssoc($res)) {
        echo "<table style='border:1px solid black; border-collapse:collapse;'><tr><th style='border:1px solid black; padding:4px 2px;'>ID</th><th>Name</th></tr>";
        echo "<tr>";
       echo "<td style='border:1px solid black; padding:7px;'> {$row['id']} </td> <td style='border:1px solid black; padding:7px;'>{$row['name']}</td>";
        echo "</tr></table>";

    }

    // print_r($res);

    // prevent default view render
    sugar_cleanup(true);
  }
}