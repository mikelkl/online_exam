<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>我的课程-在线考试系统</title>
    <link rel="stylesheet" href="<{$public}>
    /css/bootstrap.min.css">
    <link rel="stylesheet" href="<{$res}>
    /css/jumbotron.css">
    <link rel="stylesheet" href="<{$res}>
    /css/avatar.css">
    <script src="<{$public}>/js/jquery-1.11.3.min.js"></script>
    <script src="<{$public}>/js/bootstrap.min.js"></script>
    <link rel="icon" href="images/icon.jpg"></head>

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
                                    <{$tch_name}> <b>ˇ</b>
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
                                    <a href="<{$app}>/login/logout" title="Log Out">登出</a>
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
                                <form action="<{$url}>/addCourse" method="post">
                                    <div class="form-group">
                                        <label class="control-label" for="course_number">课程号</label>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-tag"></span>
                                            </span>
                                            <input type="text" class="form-control" name="course_number" id="course_number" placeholder="输入您要添加课程的课程号"></div>
                                        <span >提示：输入您要添加课程的课程号</span>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="course_name">课程名称</label>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-info-sign"></span>
                                            </span>
                                            <input type="text" class="form-control" name="course_name" id="course_name" placeholder="输入您要添加课程的课程名称"></div>
                                        <span >提示：输入您要添加课程的课程名称</span>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="semester">所属学期</label>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                            <input type="text" class="form-control" name="semester" id="semester" placeholder="输入您要添加课程的所属学期"></div>
                                        <span >提示：输入您要添加课程的所属学期</span>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="btn-group" style="float: right">
                                            <input type="submit" class="btn btn-success" value="确定" ></div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="cl"></div>
                    </ol>
                    <button class="btn btn-primary" type="button" style="float:right;" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">+ 添加课程</button>
                </div>
            </div>

            <div class="container" style="padding-top: 25px">
                <span class="label label-info" style="font-size: small">
                    共&nbsp;
                    <span style="color: #000000">
                        <{$count}></span>
                        &nbsp;门课程：
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
                            <{section loop=$course name="list"}>
                                <tr>
                                    <td style="text-align: center">
                                        <{$course[list].course_number}></td>
                                        <td style="text-align: center">
                                            <{$course[list].course_name}></td>
                                            <td style="text-align: center">
                                                <{$course[list].stu_num}></td>
                                                <td style="text-align: center">19</td>
                                                <td style="text-align: center">19</td>
                                                <td style="text-align: center">
                                                    <a href="<{$url}>/tchExamList/course_id/<{$course[list].course_id}>">进入|</a><a href="<{$url}>/delCourse/course_id/<{$course[list].course_id}>">删除</a>
                                                    </td>
                                                </tr>
                                                <{/section}></tbody>

                                            </table>
                                        </div>

                                        <hr>

                                        <footer>
                                            <p>&nbsp;&copy;&nbsp;Company 2014</p>
                                        </footer>
                                    </div>

</body>
                                </html>