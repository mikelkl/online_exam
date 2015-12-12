<?php
	/**
	 * @author lkl
	 * 用户model
	 */ 
	class UserModel extends Dpdo {
		/**
		 * 用户注册
		 */
		function add_user() {
			$id = $this->insert($_POST);
			if ($id) {
				$_SESSION['home_islogin'] = 1;
				$_SESSION['home_user'] = $this->find($id);
			}
			
			return $id;
		}
		/**
		 * 用户登录
		 * 登录成功返回true
		 */ 
		public function user_login($user_email, $user_password)
		{
			$user_info = $this->where(array($user_email=>$_POST["user_email"], $user_password=>$_POST["user_password"]))->find();
			if($user_info){
				$_SESSION["home_user"]=$user_info;
				$_SESSION["home_islogin"]=1;  //前台登录
				return true;
			}else{
				return false;
			}
		}

		function code() {
			//直接输出验证码对象
			echo new Vcode();
		}
	}
?>