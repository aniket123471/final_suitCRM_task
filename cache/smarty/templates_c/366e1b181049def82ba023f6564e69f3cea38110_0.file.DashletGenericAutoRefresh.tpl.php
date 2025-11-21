<?php
/* Smarty version 4.5.5, created on 2025-11-21 06:09:07
  from 'C:\wamp64\www\final_test_suiteCRM\include\Dashlets\DashletGenericAutoRefresh.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_69200203b32396_92174272',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '366e1b181049def82ba023f6564e69f3cea38110' => 
    array (
      0 => 'C:\\wamp64\\www\\final_test_suiteCRM\\include\\Dashlets\\DashletGenericAutoRefresh.tpl',
      1 => 1763484850,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69200203b32396_92174272 (Smarty_Internal_Template $_smarty_tpl) {
?><input type="hidden" id="<?php echo $_smarty_tpl->tpl_vars['dashletId']->value;?>
_offset" name="<?php echo $_smarty_tpl->tpl_vars['dashletId']->value;?>
_offset" value="0">
<input type="hidden" id="<?php echo $_smarty_tpl->tpl_vars['dashletId']->value;?>
_interval" name="<?php echo $_smarty_tpl->tpl_vars['dashletId']->value;?>
_interval" value="<?php echo $_smarty_tpl->tpl_vars['dashletRefreshInterval']->value;?>
">
<?php echo '<script'; ?>
 type='text/javascript'>
<!--
var autoRefreshProcId<?php echo $_smarty_tpl->tpl_vars['strippedDashletId']->value;?>
 = '';
if (document.getElementById("<?php echo $_smarty_tpl->tpl_vars['dashletId']->value;?>
_interval").value > 0) {
    autoRefreshProcId<?php echo $_smarty_tpl->tpl_vars['strippedDashletId']->value;?>
 = setInterval('refreshDashlet<?php echo $_smarty_tpl->tpl_vars['strippedDashletId']->value;?>
()', "<?php echo $_smarty_tpl->tpl_vars['dashletRefreshInterval']->value;?>
");
}	
function refreshDashlet<?php echo $_smarty_tpl->tpl_vars['strippedDashletId']->value;?>
() 
{
    //refresh only if offset is 0
    if ( SUGAR.mySugar && document.getElementById("<?php echo $_smarty_tpl->tpl_vars['dashletId']->value;?>
_offset") !== null && document.getElementById("<?php echo $_smarty_tpl->tpl_vars['dashletId']->value;?>
_offset").value == '0' ) {
        SUGAR.mySugar.retrieveDashlet("<?php echo $_smarty_tpl->tpl_vars['dashletId']->value;?>
","<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
");
    }
}
-->
<?php echo '</script'; ?>
><?php }
}
