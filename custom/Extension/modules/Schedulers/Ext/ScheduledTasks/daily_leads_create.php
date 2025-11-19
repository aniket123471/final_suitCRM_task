<?php
/*
  * We add the method name to the $job_strings array.
  * This is the method that jobs for this scheduler will call.
  */
 $job_strings[] = 'dailyleadreports';

 /**
  * Example scheduled job to change any 'Planned' meetings older than a month
  * to 'Not Held'.
  * @return bool
  */
 function dailyleadreports(){
   // get db and current user
   global $db, $current_user;

   $GLOBALS['log']->fatal("############## daily leads report job started ###############");
   $query = "SELECT count(*) as total FROM leads where deleted = 0 and date_entered like '%".date('Y-m-d')."%'";
   $result = $db->query($query);
    $ret = $db->fetchByAssoc($result);
    $count = $ret['total'];

    if($count>5){
   $GLOBALS['log']->fatal("More than 5 leads created today. total leads created today are = ". $count);
    }

   $GLOBALS['log']->fatal("Acount created today = ". $count);
   $GLOBALS['log']->fatal("############## daily leads report job end ###############");


   return true;
}