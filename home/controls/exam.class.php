<?php
	/**
	 * @author lkl
	 * 课程中心
	 */  

	class Exam{
       /*
       * 学生端考试界面
       */ 
       function examMain() {
       		$this->check_login();

       		if (isset($_SESSION["home_user"]["tch_name"])) {
       			$this->assign("stu_name", $_SESSION["home_user"]["tch_name"]);
       		} else
	       		$this->assign("stu_name", $_SESSION["home_user"]["stu_name"]);

			$this->assign("tp_name", $_GET['tp_name']);
			$this->assign("duration", $_GET['duration']);
			$this->assign("tp_id", $_GET['tp_id']);

			$tp = D("test_paper");

			$selected_tp = $tp->where(array("tp_id"=>$_GET['tp_id']))->find();	

			$str = 	$selected_tp['tp_content'];


/*			$data = explode("|", $str); 

			$this->assign("data", $data);*/


			//序列化
/*			p($str);
			p(unserialize($str));*/

			//json
			$str = str_replace('&quot;', '"', $str);
			$data = json_decode($str, true);
			// print_r($data);
/*			 switch (json_last_error()) {
        case JSON_ERROR_NONE:
            echo ' - No errors';
        break;
        case JSON_ERROR_DEPTH:
            echo ' - Maximum stack depth exceeded';
        break;
        case JSON_ERROR_STATE_MISMATCH:
            echo ' - Underflow or the modes mismatch';
        break;
        case JSON_ERROR_CTRL_CHAR:
            echo ' - Unexpected control character found';
        break;
        case JSON_ERROR_SYNTAX:
            echo ' - Syntax error, malformed JSON';
        break;
        case JSON_ERROR_UTF8:
            echo ' - Malformed UTF-8 characters, possibly incorrectly encoded';
        break;
        default:
            echo ' - Unknown error';
        break;
    }*/

    		$this->assign("data", $data);
       		$this->display();

       }
       /*
       * 教师端添加考试
       */ 
		function addExam() {
			session_id(SID);
			$this->check_login();

			$tp = D("test_paper");
			$test_question = D("test_question");

			$selected_tq = $test_question->where(array("ib_id"=>$_POST['ib_id']))->select();

			//随机在指定题型库中抽取指定数目的题目
			$key = array_rand($selected_tq, $_POST['each_tp_count']);

			//使用Jason存储试卷内容
			if ($_POST['each_tp_count'] == 1) {
				$t[0]['tq_content'] = $selected_tq[$key]['tq_content'];
				$t[0]['tq_id'] = $selected_tq[$key]['tq_id'];
				$t[0]['answer'] = $selected_tq[$key]['answer'];
				$_POST['tp_content'] = json_encode($t);

				// $_POST['tp_content'] = $selected_tq[$key]['tq_content'];

				// $_POST['tp_content'] = "{\"t1\":\"".$selected_tq[$key]['tq_content']."\"}";
			}
			else if ($_POST['each_tp_count'] > 1) {

/*				for ($i=0; $i < $_POST['each_tp_count']; $i++) { 
					// $test[$i] = $selected_tq[$key[$i]]['tq_content'];
					if ($i == $_POST['each_tp_count'] - 1) {
						$_POST['tp_content'] .= $selected_tq[$key[$i]]['tq_content'];
					} else
						$_POST['tp_content'] .= $selected_tq[$key[$i]]['tq_content']."|";
				}	*/

				// serialize 
/*				for ($i=0; $i < $_POST['each_tp_count']; $i++) { 
					$index = 't' . $i;
					p($index);
					$t[$index] = $selected_tq[$key[$i]]['tq_content'];
				}
				$_POST['tp_content'] = serialize($t);
				p(unserialize ($_POST['tp_content']));		*/		

				//json
				for ($i=0; $i < $_POST['each_tp_count']; $i++) { 

					$t[$i]['tq_content'] = $selected_tq[$key[$i]]['tq_content'];
					$t[$i]['tq_id'] = $selected_tq[$key[$i]]['tq_id'];
					$t[$i]['answer'] = $selected_tq[$key[$i]]['answer'];
				}
				$_POST['tp_content'] = json_encode($t);

			}


			$_POST['status'] = 0;
			$course_id = $_POST['course_id'];

			if($tp->insert($_POST))
				$this->success("添加考试成功", 1, "user/tchExamList/course_id/$course_id"); 
			else {
				$this->error("添加考试失败", 1, "user/tchExamList/course_id/$course_id"); 
			}
		} 
       /*
       * 教师端删除考试
       */ 
		function delExam() {
			$this->check_login();

			$tp = D("test_paper");
			$course_id = $_GET['course_id'];


			if($tp->delete($_GET['tp_id']))
				$this->success("删除考试成功", 1, "user/tchExamList/course_id/$course_id"); 
			else {
				$this->error("删除考试失败", 1, "user/tchExamList/course_id/$course_id"); 
			}
		} 		     
       /*
       * 教师端添加题型库
       */ 
		function addItemBank() {
			$this->check_login();

			$item_bank = D("item_bank");

			$course_id = $_POST['course_id'];

			if($item_bank->insert($_POST))
				$this->success("添加成功", 1, "user/tchExamList/course_id/$course_id"); 
			else
				$this->error("添加失败", 1, "user/tchExamList/course_id/$course_id"); 
		} 
       /*
       * 教师端添加题目
       */ 
		function addTq() {
			$this->check_login();

			$tq = D("test_question");

			$_POST['ib_id'] = 2;
			$course_id = $_GET['course_id'];

			if($tq->insert($_POST))
				$this->success("添加成功", 1, "user/tchExamList/course_id/$course_id"); 
			else
				$this->error("添加失败", 1, "user/tchExamList/course_id/$course_id"); 
		} 
       /*
       * 系统自动批改卷子
       */ 
		function result() {
			$this->check_login();

       		if (isset($_SESSION["home_user"]["tch_name"])) {
       			$this->assign("stu_name", $_SESSION["home_user"]["tch_name"]);
       		} else
	       		$this->assign("stu_name", $_SESSION["home_user"]["stu_name"]);

			$tp = D("test_paper");

			$selected_tp = $tp->where(array("tp_id"=>$_POST['tp_id']))->find();	

			$str = 	$selected_tp['tp_content'];

			$str = str_replace('&quot;', '"', $str);
			$data = json_decode($str, true);

			$sum = 0;
			$j = 0;

			for ($i=0; $i < count($data); $i++) { 
				foreach ($_POST as $key => $value) {
					# code...
					if ($data[$i]['tq_id'] == $key) {
						# code...
						if ($data[$i]['answer'] == $value) {
							# code...
							$sum++;
						}
						else {
							$my_answer[$j]['mine'] = $value;
							$my_answer[$j]['answer'] = $data[$i]['answer'];
							$my_answer[$j]['tq_content'] = $data[$i]['tq_content'];
							$j++;
						}
					}
				}

			}
			// p($my_answer);
			$_SESSION['grade'] = $sum * (100 / count($data));
			$_SESSION['tp_content'] = $data;
			$_SESSION['my_answer'] = $my_answer;
			// p($_SESSION['my_answer']);
			$this->display();

		} 
       /*
       * 显示成绩
       */ 
		function score() {
			$this->assign("grade", $_SESSION['grade']);
			$this->display();
		}
       /*
       * 显示答案
       */ 
		function answer() {
			$this->assign("data", $_SESSION['tp_content']);
			$this->display();
		}
       /*
       * 显示错题答案
       */ 
		function errorShow() {
			$this->assign("data", $_SESSION['my_answer']);
			$this->display();
		}	
       /*
       * 显示自我总结
       */ 
		function selfSummary() {
			$this->display();
		}

	}