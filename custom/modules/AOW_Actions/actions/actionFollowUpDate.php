<?php

if(!defined('sugarEntry') || !sugarEntry) {
    die('Not a valid Entry Point');
}

class actionFollowUpDate extends AOW_Action{
    public function __construct($id = '')
    {
        return parent::__construct($id);
    }

    public function edit_display(){
        return '<div></div>';
    }

  public function run_action(SugarBean $bean, $params = [])
{
    $futuredate = date('Y-m-d', strtotime('+3 days'));
    $GLOBALS['log']->fatal("workflow running . $bean->new_with_id");

    // Prevent SugarCRM from re-inserting the record
    $bean->new_with_id = false;
    $bean->update_date_modified = false;

    // Prevent workflow loops
    $bean->in_workflow = true;

    $bean->followup_date = $futuredate;

    // Save
    $bean->save();

    unset($bean->in_workflow);

    // Return true so AOW marks it successful
    return true;
}


    public function displayParameters(){
        return '<div></div>';
    }

    public function loadJS() {
    // No JS needed, method kept for backward compatibility
}
}