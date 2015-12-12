<?php /* Smarty version 2.6.18, created on 2015-05-25 12:07:54
         compiled from user/TchCourseList.tpl */ ?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>我的课程-在线考试系统</title>
    <link rel="stylesheet" href="<?php echo $this->_tpl_vars['public']; ?>
/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $this->_tpl_vars['res']; ?>
/css/jumbotron.css">
    <link rel="stylesheet" href="<?php echo $this->_tpl_vars['res']; ?>
/css/avatar.css">

    <script src="<?php echo $this->_tpl_vars['public']; ?>
/js/jquery-1.11.3.min.js"></script>
    <script src="<?php echo $this->_tpl_vars['public']; ?>
/js/bootstrap.min.js"></script>
    <link rel="icon" href="images/icon.jpg">
</head>

<body style="background-color: white">
<div class="container">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">在线考试系统</a>
            </div>

           <div class="navbar-form navbar-right">
                    <section class="demo">
                        <ul class="quick_menu">
                            <li class="user_fun">
                                <a href="#" title="PandaThemes">
                                    <?php echo $this->_tpl_vars['tch_name']; ?>
 <b>ˇ</b>
                                </a>
                                <ul class="user_fun_sub">
                                    <li>
                                        <a href="#">我的课程</a>
                                    </li>
                                    <li>
                                        <a href="#">我的信息</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="log_out">
                                <a href="<?php echo $this->_tpl_vars['app']; ?>
/login/logout" title="Log Out">登出</a>
                            </li>
                        </ul>
                    </section>
                </div>
               
        </div>
    </nav>

    <div class="container">
        <div id="user_nav" style="padding-top: 40px">
            <ol class="breadcrumb">
                当前位置：
                <li>
                    <a href="#">我的课程</a>
                </li>
                <div class="collapse" id="collapseExample" style="padding-top: 17px">
                    <div class="well">
                        <div class="form-group">
                            <label class="control-label" for="course_number">课程号</label>
                            <div class="input-group">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-tag"></span>
                                </span>
                                <input type="text" class="form-control" name="course_number" id="course_number" placeholder="输入您要添加课程的课程号">
                            </div>
                            <span >提示：输入您要添加课程的课程号</span>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="course_name">课程名称</label>
                            <div class="input-group">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-info-sign"></span>
                                </span>
                                <input type="text" class="form-control" name="course_name" id="course_name" placeholder="输入您要添加课程的课程名称">
                            </div>
                            <span >提示：输入您要添加课程的课程名称</span>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="semester">所属学期</label>
                            <div class="input-group">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-calendar"></span>
                                </span>
                                <input type="text" class="form-control" name="semester" id="semester" placeholder="输入您要添加课程的所属学期">
                            </div>
                            <span >提示：输入您要添加课程的所属学期</span>
                        </div>
                        <div class="modal-footer">
                            <div class="btn-group-sm" style="float: right">
                                <button type="button" class="btn btn-success" style="margin-right: 10px">
                                    &nbsp;&nbsp;&nbsp;确定&nbsp;&nbsp;&nbsp;
                                </button>
                                <button type="button" class="btn btn-warning" style="float: right">
                                    &nbsp;&nbsp;&nbsp;取消&nbsp;&nbsp;&nbsp;
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cl"></div>
            </ol>
            <button class="btn btn-primary" type="button" style="float:right;" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                + 添加课程
            </button>
        </div>
    </div>

    <div class="container" style="padding-top: 25px">
        <span class="label label-info" style="font-size: small">
            共&nbsp;<span style="color: #000000">18</span>&nbsp;门课程：
        </span>
    </div>

    <div class="container" style="padding-top: 2px">
        <table class="table table-striped table-hover table-responsive">

            <thead style="background-color: #4400ee;">
            <tr style="color: white; font-size: 80%;">
                <th style="text-align: center">课程号</th>
                <th style="text-align: center">课程名称</th>
                <th style="text-align: center">学生人数</th>
                <th style="text-align: center">总考试次数</th>
                <th style="text-align: center">未结束考试</th>
                <th style="text-align: center">操作</th>
            </tr>
            </thead>

            <tbody style="font-size: 12px">
            <tr>
                <td style="text-align: center">311078040</td>
                <td style="text-align: center"><a href="TchrExamList.html">软件工程导论Introduction to Software Engineering</a></td>
                <td style="text-align: center">25</td>
                <td style="text-align: center">19</td>
                <td style="text-align: center">19</td>
                <td style="text-align: center"><a href="TchrExamList.html">进入</a></td>
            </tr>

            <tr>
                <td style="text-align: center">311023030</td>
                <td style="text-align: center"><a href="TchrExamList.html">软件开发实践Professional Software Engineering Practice</a></td>
                <td style="text-align: center">45</td>
                <td style="text-align: center">10</td>
                <td style="text-align: center">1</td>
                <td style="text-align: center"><a href="TchrExamList.html">进入</a></td>
            </tr>

            <tr>
                <td style="text-align: center">311082030</td>
                <td style="text-align: center"><a href="TchrExamList.html">软件设计与体系结构Software Design and Architecture</a></td>
                <td style="text-align: center">33</td>
                <td style="text-align: center">11</td>
                <td style="text-align: center">4</td>
                <td style="text-align: center"><a href="TchrExamList.html">进入</a></td>
            </tr>

            <tr>
                <td style="text-align: center">311076040</td>
                <td style="text-align: center"><a href="TchrExamList.html">数据结构与算法Data Structures & Algorithmic</a></td>
                <td style="text-align: center">31</td>
                <td style="text-align: center">16</td>
                <td style="text-align: center">0</td>
                <td style="text-align: center"><a href="TchrExamList.html">进入</a></td>
            </tr>

            <tr>
                <td style="text-align: center">311142040</td>
                <td style="text-align: center"><a href="TchrExamList.html">数据库系统Database System</a></td>
                <td style="text-align: center">28</td>
                <td style="text-align: center">12</td>
                <td style="text-align: center">7</td>
                <td style="text-align: center"><a href="TchrExamList.html">进入</a></td>
            </tr>

            <tr>
                <td style="text-align: center">311006040</td>
                <td style="text-align: center"><a href="TchrExamList.html">操作系统Operating System</a></td>
                <td style="text-align: center">39</td>
                <td style="text-align: center">16</td>
                <td style="text-align: center">6</td>
                <td style="text-align: center"><a href="TchrExamList.html">进入</a></td>
            </tr>

            <tr>
                <td style="text-align: center">201054020</td>
                <td style="text-align: center"><a href="TchrExamList.html">数学实验（matlab软件）Mathematics experiment</a></td>
                <td style="text-align: center">34</td>
                <td style="text-align: center">5</td>
                <td style="text-align: center">3</td>
                <td style="text-align: center"><a href="TchrExamList.html">进入</a></td>
            </tr>

            <tr>
                <td style="text-align: center">107061050</td>
                <td style="text-align: center"><a href="TchrExamList.html">毛泽东思想、邓小平理论和“三个代表”重要思想概论<br>
                    The Introduction of Mao Zedong Thought, Deng Xiao-ping Theory
                    and” Three Represents” important Thought</a></td>
                <td style="text-align: center">37</td>
                <td style="text-align: center">4</td>
                <td style="text-align: center">1</td>
                <td style="text-align: center"><a href="TchrExamList.html">进入</a></td>
            </tr>

            <tr>
                <td style="text-align: center">107061050</td>
                <td style="text-align: center"><a href="TchrExamList.html">形势与政策Situation and Policy</a></td>
                <td style="text-align: center">90</td>
                <td style="text-align: center">2</td>
                <td style="text-align: center">2</td>
                <td style="text-align: center"><a href="TchrExamList.html">进入</a></td>
            </tr>

            <tr>
                <td style="text-align: center">311102040</td>
                <td style="text-align: center"><a href="TchrExamList.html">程序设计基础Programming Fundamentals</a></td>
                <td style="text-align: center">45</td>
                <td style="text-align: center">13</td>
                <td style="text-align: center">2</td>
                <td style="text-align: center"><a href="TchrExamList.html">进入</a></td>
            </tr>

            <tr>
                <td style="text-align: center">311039030</td>
                <td style="text-align: center"><a href="TchrExamList.html">数字逻辑：应用与设计Digital Logic:Application & Design</a></td>
                <td style="text-align: center">34</td>
                <td style="text-align: center">19</td>
                <td style="text-align: center">19</td>
                <td style="text-align: center"><a href="TchrExamList.html">进入</a></td>
            </tr>

            <tr>
                <td style="text-align: center">311077030</td>
                <td style="text-align: center"><a href="TchrExamList.html">计算机组成和体系结构Computer Organization and Architecture</a></td>
                <td style="text-align: center">37</td>
                <td style="text-align: center">19</td>
                <td style="text-align: center">19</td>
                <td style="text-align: center"><a href="TchrExamList.html">进入</a></td>
            </tr>

            <tr>
                <td style="text-align: center">311105040</td>
                <td style="text-align: center"><a href="TchrExamList.html">计算机网络Computer Networks</a></td>
                <td style="text-align: center">41</td>
                <td style="text-align: center">19</td>
                <td style="text-align: center">19</td>
                <td style="text-align: center"><a href="TchrExamList.html">进入</a></td>
            </tr>

            <tr>
                <td style="text-align: center">311143040</td>
                <td style="text-align: center"><a href="TchrExamList.html">系统级编程System Level Programming</a></td>
                <td style="text-align: center">32</td>
                <td style="text-align: center">19</td>
                <td style="text-align: center">19</td>
                <td style="text-align: center"><a href="TchrExamList.html">进入</a></td>
            </tr>

            <tr>
                <td style="text-align: center">311141040</td>
                <td style="text-align: center"><a href="TchrExamList.html">面向对象程序设计导论Introduction to Object-Oriented Programming</a></td>
                <td style="text-align: center">41</td>
                <td style="text-align: center">19</td>
                <td style="text-align: center">19</td>
                <td style="text-align: center"><a href="TchrExamList.html">进入</a></td>
            </tr>

            <tr>
                <td style="text-align: center">311104040</td>
                <td style="text-align: center"><a href="TchrExamList.html">计算机系统导论Introduction to Computer system</a></td>
                <td style="text-align: center">33</td>
                <td style="text-align: center">19</td>
                <td style="text-align: center">19</td>
                <td style="text-align: center"><a href="TchrExamList.html">进入</a></td>
            </tr>

            <tr>
                <td style="text-align: center">311153050</td>
                <td style="text-align: center"><a href="TchrExamList.html">离散数学Discrete Mathematics</a></td>
                <td style="text-align: center">29</td>
                <td style="text-align: center">19</td>
                <td style="text-align: center">19</td>
                <td style="text-align: center"><a href="TchrExamList.html">进入</a></td>
            </tr>

            <tr>
                <td style="text-align: center">201080030</td>
                <td style="text-align: center"><a href="TchrExamList.html"> 线性代数（理工）linear algebra</a></td>
                <td style="text-align: center">36</td>
                <td style="text-align: center">19</td>
                <td style="text-align: center">19</td>
                <td style="text-align: center"><a href="TchrExamList.html">进入</a></td>
            </tr>

            </tbody>

        </table>
    </div>

    <hr>

    <footer>
        <p>&nbsp;&copy;&nbsp;Company 2014</p>
    </footer>
</div>


</body>
</html>