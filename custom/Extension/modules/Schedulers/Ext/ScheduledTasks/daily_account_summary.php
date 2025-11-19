<?php
/*
  * We add the method name to the $job_strings array.
  * This is the method that jobs for this scheduler will call.
  */
 $job_strings[] = 'dailyaccreports';

 /**
  * Example scheduled job to change any 'Planned' meetings older than a month
  * to 'Not Held'.
  * @return bool
  */
 function dailyaccreports(){
   // get db and current user
   global $db, $current_user;

   $GLOBALS['log']->fatal("############## daily Accounts report job started ###############");
   $query = "SELECT count(*) as total FROM accounts where deleted = 0 and date_entered like '%".date('Y-m-d')."%'";
   $result = $db->query($query);
    $ret = $db->fetchByAssoc($result);
    $count = $ret['total'];

   $GLOBALS['log']->fatal("Acount created today = ". $count);
   $GLOBALS['log']->fatal("############## daily Accounts report job end ###############");


   return true;
}