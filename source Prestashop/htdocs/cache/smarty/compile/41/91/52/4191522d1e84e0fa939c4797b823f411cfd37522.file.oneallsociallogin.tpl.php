<?php /* Smarty version Smarty-3.1.19, created on 2014-11-07 14:03:38
         compiled from "/home/vol9_6/byethost17.com/b17_15466088/htdocs/modules/oneallsociallogin/oneallsociallogin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1577392880545c6eca0cdd75-16764003%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4191522d1e84e0fa939c4797b823f411cfd37522' => 
    array (
      0 => '/home/vol9_6/byethost17.com/b17_15466088/htdocs/modules/oneallsociallogin/oneallsociallogin.tpl',
      1 => 1415343562,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1577392880545c6eca0cdd75-16764003',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oasl_widget_location' => 0,
    'oasl_subdomain' => 0,
    'oasl_widget_providers' => 0,
    'oasl_auth_disable' => 0,
    'oasl_auth_title' => 0,
    'oasl_custom_title' => 0,
    'oasl_widget_title' => 0,
    'oasl_widget_rnd' => 0,
    'oasl_widget_css' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545c6eca85cef9_04669126',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545c6eca85cef9_04669126')) {function content_545c6eca85cef9_04669126($_smarty_tpl) {?>
 
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['oasl_widget_location']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1=='library') {?>
	<script type="text/javascript">
    
		/* OneAll Social Login */
		/* http://docs.oneall.com/plugins/guide/social-login-prestashop/ */
        
		/* Asynchronous Library */      
		var oa = document.createElement('script');
		oa.type = 'text/javascript'; oa.async = true;
		oa.src = '//<?php echo $_smarty_tpl->tpl_vars['oasl_subdomain']->value;?>
.api.oneall.com/socialize/library.js';
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(oa, s);
        
		/* Custom Hooks */      
		var _oneall = _oneall || [];                
		$(document).ready(function() {  
			if (typeof oneallsociallogin !== 'undefined') {
				oneallsociallogin (_oneall, [<?php echo $_smarty_tpl->tpl_vars['oasl_widget_providers']->value;?>
], '<?php echo $_smarty_tpl->tpl_vars['oasl_auth_disable']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['oasl_auth_title']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['oasl_custom_title']->value;?>
');
			} else {
				throw new Error("OneAll Social Login is not correctly installed, the required file oneallsocialogin.js is not included.");
			}
		});         
	</script>
<?php }?>


<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['oasl_widget_location']->value;?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2=='customer_account_form') {?>
	<div class="block oneall_social_login_block" id="oneall_social_login_block_left">
		<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['oasl_widget_title']->value;?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3!='') {?>
			<p class="title_block"><?php echo $_smarty_tpl->tpl_vars['oasl_widget_title']->value;?>
</p>
		<?php }?>
		<p class="block_content">
			<div class="oneall_social_login_providers" id="oneall_social_login_providers_<?php echo $_smarty_tpl->tpl_vars['oasl_widget_rnd']->value;?>
"></div>
			<script type="text/javascript">
			  var _oneall = _oneall || [];
				_oneall.push(['social_login', 'set_providers', [<?php echo $_smarty_tpl->tpl_vars['oasl_widget_providers']->value;?>
]]);
				_oneall.push(['social_login', 'set_callback_uri', window.location.href]);
				_oneall.push(['social_login', 'set_custom_css_uri', '<?php echo $_smarty_tpl->tpl_vars['oasl_widget_css']->value;?>
']);
  			_oneall.push(['social_login', 'do_render_ui', 'oneall_social_login_providers_<?php echo $_smarty_tpl->tpl_vars['oasl_widget_rnd']->value;?>
']);			
			</script>
		</p>
	</div>
<?php }?>

<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['oasl_widget_location']->value;?>
<?php $_tmp4=ob_get_clean();?><?php if ($_tmp4=='left') {?>
	<div class="block oneall_social_login_block" id="oneall_social_login_block_left">
		<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['oasl_widget_title']->value;?>
<?php $_tmp5=ob_get_clean();?><?php if ($_tmp5!='') {?>
			<p class="title_block"><?php echo $_smarty_tpl->tpl_vars['oasl_widget_title']->value;?>
</p>
		<?php }?>
		<p class="block_content">
			<div class="oneall_social_login_providers" id="oneall_social_login_providers_<?php echo $_smarty_tpl->tpl_vars['oasl_widget_rnd']->value;?>
"></div>
			<script type="text/javascript">
			  var _oneall = _oneall || [];
				_oneall.push(['social_login', 'set_providers', [<?php echo $_smarty_tpl->tpl_vars['oasl_widget_providers']->value;?>
]]);
				_oneall.push(['social_login', 'set_callback_uri', window.location.href]);
				_oneall.push(['social_login', 'set_custom_css_uri', '<?php echo $_smarty_tpl->tpl_vars['oasl_widget_css']->value;?>
']);
  			_oneall.push(['social_login', 'do_render_ui', 'oneall_social_login_providers_<?php echo $_smarty_tpl->tpl_vars['oasl_widget_rnd']->value;?>
']);			
			</script>
		</p>
	</div>
<?php }?>

<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['oasl_widget_location']->value;?>
<?php $_tmp6=ob_get_clean();?><?php if ($_tmp6=='right') {?>
	<div class="block oneall_social_login_block" id="oneall_social_login_block_right">
		<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['oasl_widget_title']->value;?>
<?php $_tmp7=ob_get_clean();?><?php if ($_tmp7!='') {?>
			<p class="title_block"><?php echo $_smarty_tpl->tpl_vars['oasl_widget_title']->value;?>
</p>
		<?php }?>
		<p class="block_content">
			<div class="oneall_social_login_providers" id="oneall_social_login_providers_<?php echo $_smarty_tpl->tpl_vars['oasl_widget_rnd']->value;?>
"></div>
			<script type="text/javascript">
				var _oneall = _oneall || [];
				_oneall.push(['social_login', 'set_providers', [<?php echo $_smarty_tpl->tpl_vars['oasl_widget_providers']->value;?>
]]);
				_oneall.push(['social_login', 'set_callback_uri', window.location.href]);
				_oneall.push(['social_login', 'set_custom_css_uri', '<?php echo $_smarty_tpl->tpl_vars['oasl_widget_css']->value;?>
']);
	  		_oneall.push(['social_login', 'do_render_ui', 'oneall_social_login_providers_<?php echo $_smarty_tpl->tpl_vars['oasl_widget_rnd']->value;?>
']);	
			</script>
		</p>
	</div>
<?php }?>

<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['oasl_widget_location']->value;?>
<?php $_tmp8=ob_get_clean();?><?php if ($_tmp8=='custom') {?>
	<div class="oneall_social_login_providers oneall_social_login_providers_custom" id="oneall_social_login_providers_<?php echo $_smarty_tpl->tpl_vars['oasl_widget_rnd']->value;?>
"></div>
		<script type="text/javascript">
			var _oneall = _oneall || [];
			_oneall.push(['social_login', 'set_providers', [<?php echo $_smarty_tpl->tpl_vars['oasl_widget_providers']->value;?>
]]);
			_oneall.push(['social_login', 'set_callback_uri', window.location.href]);
			_oneall.push(['social_login', 'set_custom_css_uri', '<?php echo $_smarty_tpl->tpl_vars['oasl_widget_css']->value;?>
']);
  		_oneall.push(['social_login', 'do_render_ui', 'oneall_social_login_providers_<?php echo $_smarty_tpl->tpl_vars['oasl_widget_rnd']->value;?>
']);		
		</script>
	</div>
<?php }?><?php }} ?>
