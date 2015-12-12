<?php /* Smarty version 2.6.18, created on 2015-05-25 09:46:29
         compiled from login/login.tpl */ ?>
			<!-- 快捷功能区 -->
			<div id="navbar" class="navbar-collapse collapse">
					<form name="login" action="<?php echo $this->_tpl_vars['app']; ?>
/login/login" method="post" class="navbar-form navbar-right">
						<div class="form-group">
							<input type="text" name="user_email" placeholder="Email" class="form-control"></div>
						<div class="form-group">
							<input type="password" name="user_password" placeholder="密码" class="form-control"></div>
						<input type="submit" class="btn btn-primary btn-default" value="登陆">
					</form>
			</div>