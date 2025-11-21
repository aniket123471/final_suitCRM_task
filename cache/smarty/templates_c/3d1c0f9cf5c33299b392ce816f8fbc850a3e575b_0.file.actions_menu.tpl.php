<?php
/* Smarty version 4.5.5, created on 2025-11-21 06:09:09
  from 'C:\wamp64\www\final_test_suiteCRM\themes\SuiteP\include\MySugar\tpls\actions_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_69200205c5c588_53957823',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d1c0f9cf5c33299b392ce816f8fbc850a3e575b' => 
    array (
      0 => 'C:\\wamp64\\www\\final_test_suiteCRM\\themes\\SuiteP\\include\\MySugar\\tpls\\actions_menu.tpl',
      1 => 1763484857,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69200205c5c588_53957823 (Smarty_Internal_Template $_smarty_tpl) {
?><ul class="dropdown-menu tab-actions">
    <?php if (!$_smarty_tpl->tpl_vars['lock_homepage']->value) {?>

        <li>
            <input class="button addDashlets" type="button" name="Edit"  data-toggle="modal" data-target=".modal-add-dashlet" value="<?php echo $_smarty_tpl->tpl_vars['lblAddDashlets']->value;?>
">
        </li>
        <li>
            <input class="button addDashboard" type="button" name="Edit"  data-toggle="modal" data-target=".modal-add-dashboard" value="<?php echo $_smarty_tpl->tpl_vars['lblAddTab']->value;?>
">
        </li>
        <li>
            <input class="button addDashboard" type="button" name="Edit"  data-toggle="modal" data-target=".modal-edit-dashboard" value="<?php echo $_smarty_tpl->tpl_vars['app']->value['LBL_EDIT_TAB'];?>
">
        </li>
    <?php }?>
</ul>
<?php }
}
