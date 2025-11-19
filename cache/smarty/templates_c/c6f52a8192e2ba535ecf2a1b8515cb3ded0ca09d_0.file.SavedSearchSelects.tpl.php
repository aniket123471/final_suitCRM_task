<?php
/* Smarty version 4.5.5, created on 2025-11-19 04:31:15
  from 'C:\wamp64\www\final_test_suiteCRM\modules\SavedSearch\SavedSearchSelects.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_691d48137217f4_29294918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6f52a8192e2ba535ecf2a1b8515cb3ded0ca09d' => 
    array (
      0 => 'C:\\wamp64\\www\\final_test_suiteCRM\\modules\\SavedSearch\\SavedSearchSelects.tpl',
      1 => 1763484795,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_691d48137217f4_29294918 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['SAVED_SEARCHES_OPTIONS']->value != null) {?>
<select style="width: auto !important; min-width: 150px;" name='saved_search_select' id='saved_search_select' onChange='SUGAR.savedViews.shortcut_select(this, "<?php echo $_smarty_tpl->tpl_vars['SEARCH_MODULE']->value;?>
");'>
	<?php echo $_smarty_tpl->tpl_vars['SAVED_SEARCHES_OPTIONS']->value;?>

</select>
<?php echo '<script'; ?>
>

	//if the function exists, call the function that will populate the searchform
	//labels based on the value of the saved search dropdown
	if(typeof(fillInLabels)=='function'){
		fillInLabels();
	}
	
<?php echo '</script'; ?>
>
<?php }?>

<?php }
}
