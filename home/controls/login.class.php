<?php
	/**
	 * @author lkl
	 * 用户control
	 */ 
	class Login {

		function index() {
			$this->display();
		}
       /*
       * 用户登录
       */ 
		public function login() {

			$student = D('student');

			if($student->user_login("stu_email", "stu_password")){
			 	$this->success("登录成功", 1, "user/stuCourseList");  //登录成功
			}else{
				$teacher = D('teacher');	
				if($teacher->user_login("tch_email", "tch_password"))
					$this->success("登录成功", 1, "user/tchCourseList");  //登录成功	
				else			
					$this->error("用户名或密码错误！", 1, "login/index"); //登录失败
			}	
		}		

		/**
		* 老师注册
		*/ 
		function tch_insert(){
			
			$teacher = D("teacher");

			if($teacher->add_user()){

			  	$this->success("注册成功,正在登陆，请稍后...",1,"user/tchCourseList"); //跳转页面

			}else{

			  	$this->error($user->getMsg(),3,"register");  //密码错误
			}
		}	

		/**
		* 学生注册
		*/ 
		function stu_insert(){
			
			$teacher = D("student");

			if($teacher->add_user()){

			  	$this->success("注册成功,正在登陆，请稍后...",1,"user/stuCourseList"); //跳转页面

			}else{
			  	$this->error($user->getMsg(),3,"login/index");  //密码错误
			}
		}	
		/**
		* 退出系统
		*/ 
		function logout(){
			unset($_SESSION); //执行退出

			$this->success('正在退出',1,'login/index');
		}	
	}