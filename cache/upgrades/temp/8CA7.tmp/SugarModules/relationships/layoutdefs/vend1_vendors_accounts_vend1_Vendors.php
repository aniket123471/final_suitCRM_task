<?php
 // created: 2025-11-11 17:39:28
$layout_defs["vend1_Vendors"]["subpanel_setup"]['vend1_vendors_accounts'] = array (
  'order' => 100,
  'module' => 'Accounts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_VEND1_VENDORS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'get_subpanel_data' => 'vend1_vendors_accounts',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
