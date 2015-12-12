 <?php
	class AjaxAction extends Common {

		/**
		 * 静态字段
		 */ 

		/**
	         *注册用户的校验
		 */
		public function check_user()
		{
			debug(0);
		    //从学生表中查询是否该Email已存在
		    $con = D('student');
		    $result = $con->where(array('stu_email' => $_GET['Email']))->find();
		    if ($result) 
		        echo '1';

		    //从教师表中查询是否该Email已存在
			$con = D('teacher');
		    $result = $con->where(array('tch_email' => $_GET['Email']))->find();
		    if ($result) 
		        echo '1';
		}
	}