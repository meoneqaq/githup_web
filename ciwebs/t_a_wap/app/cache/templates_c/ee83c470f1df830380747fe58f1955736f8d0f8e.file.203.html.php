<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-01-15 05:15:13
         compiled from "/home/wwwuser/public_html/index_ci/t_wap/views//lottery/bj_8/203.html" */ ?>
<?php /*%%SmartyHeaderCode:17348235145698b8a1f409c3-73595063%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee83c470f1df830380747fe58f1955736f8d0f8e' => 
    array (
      0 => '/home/wwwuser/public_html/index_ci/t_wap/views//lottery/bj_8/203.html',
      1 => 1452763689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17348235145698b8a1f409c3-73595063',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'v' => 0,
    'list' => 0,
    'k' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5698b8a2084279_45100280',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5698b8a2084279_45100280')) {function content_5698b8a2084279_45100280($_smarty_tpl) {?><ion-content class="bet-view">

<div data-title="<?php echo $_GET['gamename'];?>
">
	<div class="row text-center">
		<div class="col title-no"><?php echo $_GET['gamename'];?>
</div>
	</div>
	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
	<div class="row text-center betLine" data-id="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" data-txt="<?php echo $_smarty_tpl->tpl_vars['v']->value['input_name'];?>
">
	<div class="col title-no line"></div>
	</div>
	<?php } ?>
	<div class="row">
	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
		<div class="col col-50 bet" data-id="<?php echo $_smarty_tpl->tpl_vars['v']->value['input_name'];?>
">
			<span <?php if (is_numeric($_smarty_tpl->tpl_vars['v']->value['input_name'])) {?> class="bet-content round-1" <?php } else { ?> class="bet-content"<?php }?> ><?php echo $_smarty_tpl->tpl_vars['v']->value['input_name'];?>
</span>
		</div>
		<?php if (($_smarty_tpl->tpl_vars['k']->value+1)%2==0) {?>  
	</div>
	<div class="row">
	<?php }?>
	<?php } ?>
	</div>
</div>
</ion-content>

<?php }} ?>
