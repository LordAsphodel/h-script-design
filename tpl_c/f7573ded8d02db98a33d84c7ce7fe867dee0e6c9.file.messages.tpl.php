<?php /* Smarty version Smarty-3.1.8, created on 2017-09-04 19:46:28
         compiled from "tpl/en/message/admin/messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6838982559ad8364082858-58778356%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7573ded8d02db98a33d84c7ce7fe867dee0e6c9' => 
    array (
      0 => 'tpl/en/message/admin/messages.tpl',
      1 => 1504512326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6838982559ad8364082858-58778356',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59ad83640c2342_59936376',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ad83640c2342_59936376')) {function content_59ad83640c2342_59936376($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Messages'), 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'Messages','url'=>'*','fields'=>array('bID'=>array('ID'),'mTS'=>array('Date'),'uLogin'=>array('Sender'),'To'=>array('Recipients'),'mTopic'=>array('Topic'),'mText'=>array('Text')),'values'=>$_smarty_tpl->tpl_vars['list']->value,'row'=>'*','btns'=>array('del'=>'Delete')), 0);?>
<a href="<?php echo tplModuleToLink(array('module'=>'message/admin/message'),$_smarty_tpl);?>
?add" class="button-green">Create</a><br><?php echo $_smarty_tpl->getSubTemplate ('admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>