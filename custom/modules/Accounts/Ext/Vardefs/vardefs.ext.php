<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2025-11-11 17:39:28
$dictionary["Account"]["fields"]["vend1_vendors_accounts"] = array (
  'name' => 'vend1_vendors_accounts',
  'type' => 'link',
  'relationship' => 'vend1_vendors_accounts',
  'source' => 'non-db',
  'module' => 'vend1_Vendors',
  'bean_name' => 'vend1_Vendors',
  'vname' => 'LBL_VEND1_VENDORS_ACCOUNTS_FROM_VEND1_VENDORS_TITLE',
  'id_name' => 'vend1_vendors_accountsvend1_vendors_ida',
);
$dictionary["Account"]["fields"]["vend1_vendors_accounts_name"] = array (
  'name' => 'vend1_vendors_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_VEND1_VENDORS_ACCOUNTS_FROM_VEND1_VENDORS_TITLE',
  'save' => true,
  'id_name' => 'vend1_vendors_accountsvend1_vendors_ida',
  'link' => 'vend1_vendors_accounts',
  'table' => 'vend1_vendors',
  'module' => 'vend1_Vendors',
  'rname' => 'name',
);
$dictionary["Account"]["fields"]["vend1_vendors_accountsvend1_vendors_ida"] = array (
  'name' => 'vend1_vendors_accountsvend1_vendors_ida',
  'type' => 'link',
  'relationship' => 'vend1_vendors_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_VEND1_VENDORS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
);


 // created: 2025-11-18 17:03:05
$dictionary['Account']['fields']['jjwg_maps_address_c']['inline_edit']=1;

 

 // created: 2025-11-18 17:03:05
$dictionary['Account']['fields']['jjwg_maps_geocode_status_c']['inline_edit']=1;

 

 // created: 2025-11-18 17:03:05
$dictionary['Account']['fields']['jjwg_maps_lat_c']['inline_edit']=1;

 

 // created: 2025-11-18 17:03:05
$dictionary['Account']['fields']['jjwg_maps_lng_c']['inline_edit']=1;

 
?>