<?php

$admin_option_defs = [];
$admin_option_defs['Administration']['module_helth_Check'] = [
    'Administration',
    'Module Health Check',
    'Check the health status of modules (dummy status)',
    './index.php?entryPoint=MyTimeEntryPoint',
];

$admin_group_header[] = [
    'Module Health Check',
    '',
    false,
    $admin_option_defs,
    'Module Health Check'
];
