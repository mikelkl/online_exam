<?php
	class Common extends Action {
		function init() {
			
		}
		function check_login(){
			if(!isset($_SESSION['home_islogin']) || $_SESSION['home_islogin'] != 1){
					$this->redirect("login/index");
			}
			
		}
	}