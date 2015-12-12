<?php
	/**
	 * @author lkl
	 * 课程中心
	 */  

	class UserAction extends Common {
       /*
       * 学生端课程列表
       */ 
		function stuCourseList() {
			$this->check_login();

			$this->assign("stu_name", $_SESSION["home_user"]["stu_name"]);
			$course_list = D("course");
			$participate = D("participate");
			$teacher = D("teacher");

			$course_id = $participate->where(array("stu_id"=>$_SESSION['home_user']['stu_id']))->select();

			for ($i=0; $i < count($course_id); $i++) { 
				# code...
				$data[$i] = $course_list->where(array("course_id"=>$course_id[$i]['course_id']))->find();
			}

			$this->assign("count", count($data));

			for ($i=0; $i < count($data); $i++) { 
				# code...
				$tch_name = $teacher->where(array("tch_id"=>$data[$i]['tch_id']))->find();
				$data[$i]['tch_name'] = $tch_name['tch_name'];
			}

			$this->assign("course", $data);
			$this->display();
		}
       /*
       * 学生端考试列表
       */ 
       function stuExamList() {
       		$this->check_login();

       		$this->assign("stu_name", $_SESSION["home_user"]["stu_name"]);
       		$exam_list = D("test_paper");

       		$data = $exam_list->where(array("course_id"=>$_GET['course_id']))->select();

       		$this->assign("count", count($data));
			$this->assign("exam", $data);
       		$this->display();

       }
       /*
       * 学生端考试界面
       */ 
       function examMain() {
       		$this->check_login();

       		$this->assign("stu_name", $_SESSION["home_user"]["stu_name"]);


			$this->assign("tp_name", $_GET['tp_name']);
       		$this->display();

       }
       /*
       * 教师端课程列表
       */ 
		function tchCourseList() {
			$this->check_login();

			$this->assign("tch_name", $_SESSION["home_user"]["tch_name"]);
			$course_list = D("course");
			$participate = D("participate");

			$data = $course_list->where(array("tch_id"=>$_SESSION['home_user']['tch_id']))->select();
			$this->assign("count", count($data));

			for ($i=0; $i < count($data); $i++) { 
				# code...
				$stu_num = $participate->where(array("course_id"=>$data[$i]['course_id']))->total();
				$data[$i]['stu_num'] = $stu_num;
			}

			$this->assign("course", $data);
			$this->display();
		}
       /*
       * 教师端考试列表
       */ 
       function tchExamList() {
       		$this->check_login();

       		$this->assign("tch_name", $_SESSION["home_user"]["tch_name"]);
       		$exam_list = D("test_paper");
       		$item_bank = D("item_bank");

       		$data = $exam_list->where(array("course_id"=>$_GET['course_id']))->select();
       		$item = $item_bank->where(array("course_id"=>$_GET['course_id']))->select();

       		$this->assign("count", count($data));
			$this->assign("exam", $data);
			$this->assign("item", $item);
       		$this->display();

       }
       /*
       * 教师端添加课程
       */ 
		function addCourse() {
			$this->check_login();

			$course = D("course");

			$_POST['tch_id'] = $_SESSION["home_user"]["tch_id"];

			if($course->insert($_POST))
				$this->success("添加课程成功", 1, "tchCourseList"); 
			// $this->success("登录成功", 1, "user/tchCourseList");  //登录成功	

/*			$this->assign("tch_name", $_SESSION["home_user"]["tch_name"]);
			$course_list = D("course");
			$participate = D("participate");

			$data = $course_list->where(array("tch_id"=>$_SESSION['home_user']['tch_id']))->select();
			$this->assign("count", count($data));

			for ($i=0; $i < count($data); $i++) { 
				# code...
				$stu_num = $participate->where(array("course_id"=>$data[$i]['course_id']))->total();
				$data[$i]['stu_num'] = $stu_num;
			}

			$this->assign("course", $data);
			$this->display();*/
		}
	}