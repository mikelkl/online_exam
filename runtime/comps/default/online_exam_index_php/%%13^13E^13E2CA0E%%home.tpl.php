<?php /* Smarty version 2.6.18, created on 2015-05-25 09:20:55
         compiled from home/home.tpl */ ?>
<!-- 
    主界面的文件。 
    @author      lkl
    @version     v1.0
    @since        1.0 
 -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<link rel="icon" href="images/icon.jpg">

	<title>在线考试系统</title>

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['public']; ?>
/css/bootstrap.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="dist/css/base.css" media="all" /> -->
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['res']; ?>
/css/jumbotron.css">

	<script src="<?php echo $this->_tpl_vars['public']; ?>
/js/jquery-1.11.3.min.js"></script>

	<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
	<script src="<?php echo $this->_tpl_vars['public']; ?>
/js/bootstrap.min.js"></script>
	<script src="<?php echo $this->_tpl_vars['res']; ?>
/js/stuCheck.js"></script>
	<script src="<?php echo $this->_tpl_vars['res']; ?>
/js/tecCheck.js"></script>
	<script src="<?php echo $this->_tpl_vars['res']; ?>
/js/loginCheck.js"></script>
</head>

<body>
	<!-- 导航栏 -->
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">在线考试系统</a>
			</div>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "login/login.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<!--/.navbar-collapse -->
		</div>
	</nav>

	<!-- 学生注册模态框（Modal） -->
	<div class="modal fade" id="myModal1" tabindex="-1" role="dialog"
       aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close"
                          data-dismiss="modal" aria-hidden="false">&times;</button>
					<h4 class="modal-title" id="myModalLabel">学生注册</h4>
				</div>
				<form id="stuRegister" role="form" action="<?php echo $this->_tpl_vars['app']; ?>
/login/stu_insert" method="post">
					<div class="modal-body">
						<div class="form-group">
							<label for="stu_email">邮箱</label>
							<span id="stu_emailTips" style="color: red;"></span>
							<div class="input-group">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-envelope"></span>
								</span>
								<input type="email" class="form-control" name="stu_email" id="stu_email" placeholder="输入您的邮箱账号"></div>
							<span >提示：邮箱格式为**@**</span>
						</div>
						<div class="form-group">
							<label for="stu_password1">密码</label>
							<span id="stu_password1Tips" style="color: red;"></span>
							<div class="input-group">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-lock"></span>
								</span>
								<input type="password" class="form-control" name="stu_password" id="stu_password1" placeholder="输入密码">
								<input type="text" class="form-control" id="stu_password1-1" placeholder="输入密码" style="display: none">
								<span class="input-group-addon">
									<span id="see_stu_password1" class="glyphicon glyphicon-eye-close" style="cursor: pointer"></span>
								</span>
							</div>
							<span >提示：密码长度为6-20个字符</span>
						</div>
						<div class="form-group">
							<label for="stu_password2">确认密码</label>
							<span id="stu_password2Tips" style="color: red;"></span>
							<div class="input-group">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-lock"></span>
								</span>
								<input type="password" class="form-control" id="stu_password2" placeholder="重复输入密码">
								<input type="text" class="form-control" id="stu_password2-1" placeholder="重复输入密码" style="display: none">
								<span class="input-group-addon">
									<span id="see_stu_password2" class="glyphicon glyphicon-eye-close" style="cursor: pointer"></span>
								</span>
							</div>
							<span >提示：重复密码须和注册密码相同</span>
						</div>
						<div class="form-group">
							<label for="stu_name">姓名</label>
							<span id="stu_nameTips" style="color: red;"></span>
							<div class="input-group">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-user"></span>
								</span>
								<input type="text" class="form-control" name="stu_name" id="stu_name" placeholder="输入您的姓名"></div>
							<span >提示：请一定填写你的真实中文姓名，以方便老师联络。</span>
						</div>
						<div class="form-group">
							<label for="stu_school">学校</label>
							<span id="stu_schoolTips" style="color: red;"></span>
							<div class="input-group">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-book"></span>
								</span>
								<input type="text" class="form-control" name="stu_school" id="stu_school" placeholder="输入您的学校"></div>
							<span >提示：输入您的学校</span>
						</div>
						<div class="form-group">
							<label for="stu_number">学号</label>
							<span id="stu_numberTips" style="color: red;"></span>
							<div class="input-group">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-tag"></span>
								</span>
								<input type="text" class="form-control" name="stu_number" id="stu_number" placeholder="输入您的学号"></div>
							<span >提示：请输入您的真实学号</span>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox">记住我</label>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-info"
	                          data-dismiss="modal">取消</button>
						<input type="submit" id="stuReg" value="注册" class="btn btn-success"/>
					</div>					
				</form>
				

			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal -->
	</div>

	<!-- 教师注册模态框（Modal） -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog"
       aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close"
                          data-dismiss="modal" aria-hidden="false">&times;</button>
					<h4 class="modal-title" id="myModalLabel">教师注册</h4>
				</div>
				<form id="tchRegister" role="form" action="<?php echo $this->_tpl_vars['app']; ?>
/login/tch_insert" method="post">
					<div class="modal-body">
						<div class="form-group">
							<label for="tch_email">邮箱</label>
							<span id="tch_emailTips" style="color: red;"></span>
							<div class="input-group">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-envelope"></span>
								</span>
								<input type="email" class="form-control" name="tch_email" id="tch_email" placeholder="输入邮箱账号"></div>
							<span >提示：邮箱格式为**@**</span>
						</div>
						<div class="form-group">
							<label for="tch_password1">密码</label>
							<span id="tch_password1Tips" style="color: red;"></span>
							<div class="input-group">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-lock"></span>
								</span>
								<input type="password" class="form-control" name="tch_password" id="tch_password1" placeholder="输入密码">
								<input type="text" class="form-control" id="tch_password1-1" placeholder="输入密码" style="display: none">
								<span class="input-group-addon">
									<span id="seePass1" class="glyphicon glyphicon-eye-close" style="cursor: pointer"></span>
								</span>
							</div>
							<span >提示：密码长度为6-20个字符</span>
						</div>
						<div class="form-group">
							<label for="tch_password2">确认密码</label>
							<span id="tch_password2Tips" style="color: red;"></span>
							<div class="input-group">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-lock"></span>
								</span>
								<input type="password" class="form-control" id="tch_password2" placeholder="重复输入密码">
								<input type="text" class="form-control" id="tch_password2-1" placeholder="重复输入密码" style="display: none">
								<span class="input-group-addon">
									<span id="seePass2" class="glyphicon glyphicon-eye-close" style="cursor: pointer"></span>
								</span>
							</div>
							<span >提示：重复密码须和注册密码相同</span>
						</div>
						<div class="form-group">
							<label for="tch_name">姓名</label>
							<span id="tch_nameTips" style="color: red;"></span>
							<div class="input-group">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-user"></span>
								</span>
								<input type="text" class="form-control" name="tch_name" id="tch_name" placeholder="输入2个字以上的姓名"></div>
							<span >提示：请一定填写您真实姓名，以便您的学生能快速找到您。</span>
						</div>
						<div class="form-group">
							<label for="tch_school">学校</label>
							<span id="tch_schoolTips" style="color: red;"></span>
							<div class="input-group">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-book"></span>
								</span>
								<input type="text" class="form-control" name="tch_school" id="tch_school" placeholder="输入学校"></div>
							<span >提示：输入您的学校</span>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox">记住我</label>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-info"
	                          data-dismiss="modal">取消</button>
						<input type="submit" id="tchReg" value="注册" class="btn btn-success"/>
					</div>
				</form>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal -->
	</div>

	<!-- Main jumbotron for a primary marketing message or call to action -->
	<div class="jumbotron">
		<div class="container">
			<h1>不一样的考试系统!</h1>
			<p>是否还在面对老套呆板的“古典”界面？</p>
			<p>是否还在烦恼答案提交形式的束缚限制？</p>
			<p>是否还在辛苦批改五花八门的学生试卷？</p>
			<h1>你OUT了!</h1>
			<p>
				<a class="btn btn-primary btn-lg" href="#" role="button">开始测试吧！ &raquo;</a>
			</p>
		</div>
	</div>

	<div class="container" id="con">
		<!-- Example row of columns -->
		<div class="row">
			<div id="intro1" class="col-md-4">
				<h2>用户界面，简洁舒适</h2>
				<p>采用较清新简洁的元素及平面化的风格，整体布局简单大方，给用户带来更清洁的环境和更舒适的体验。</p>
				<p>
					<a class="btn btn-default" href="#" role="button">学习 &raquo;</a>
				</p>
			</div>
			<div id="intro2" class="col-md-4">
				<h2>答题形式，自由多样</h2>
				<p>对应不同类型题目将会提供用户不同的答案提交方式，包括选项按钮选择、键盘输入、拍照上传等多种适应不同题型的形式。</p>
				<p>
					<a class="btn btn-default" href="#" role="button">详细 &raquo;</a>
				</p>
			</div>
			<div class="col-md-4">
				<h2>分值评定，客观合理</h2>
				<p>采用较优的主观题评分算法，较准确分析答案合理性以给出合理分数。免去人为批阅的繁琐工序，节省时间又具准确性。</p>
				<p>
					<a class="btn btn-default" href="#" role="button">详细 &raquo;</a>
				</p>
			</div>
		</div>

		<hr>

		<footer>
			<p>&copy; Company 2014</p>
		</footer>
	</div>
	<!-- /container -->
	<input type="hidden" value="<?php echo $this->_tpl_vars['app']; ?>
" id="ajaxurl" />

</body>
</html>