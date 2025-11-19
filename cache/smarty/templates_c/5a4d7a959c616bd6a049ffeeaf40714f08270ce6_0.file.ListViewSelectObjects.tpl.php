<?php
/* Smarty version 4.5.5, created on 2025-11-19 04:31:18
  from 'C:\wamp64\www\final_test_suiteCRM\themes\SuiteP\include\ListView\ListViewSelectObjects.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_691d48162d13f4_32281435',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a4d7a959c616bd6a049ffeeaf40714f08270ce6' => 
    array (
      0 => 'C:\\wamp64\\www\\final_test_suiteCRM\\themes\\SuiteP\\include\\ListView\\ListViewSelectObjects.tpl',
      1 => 1763484857,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_691d48162d13f4_32281435 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="selectedRecords label hidden"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_LISTVIEW_SELECTED_OBJECTS'];?>
</div><div class="selectedRecords value hidden"><?php echo $_smarty_tpl->tpl_vars['TOTAL_ITEMS_SELECTED']->value;?>
</div>
<input type='hidden' id='selectCountTop' name='selectCount[]' value='<?php echo $_smarty_tpl->tpl_vars['TOTAL_ITEMS_SELECTED']->value;?>
' />

<?php echo '<script'; ?>
>

    $(document).ready(function () {
        setInterval(function () {
            sListView.toggleSelected();
        }, 100);
    });

<?php echo '</script'; ?>
><?php }
}
