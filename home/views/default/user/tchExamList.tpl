<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>考试安排-在线考试系统</title>
    <link rel="stylesheet" href="<{$public}>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<{$res}>/css/jumbotron.css">
    <link rel="stylesheet" href="<{$res}>/css/avatar.css">
    <link rel="stylesheet" href="<{$res}>/css/bootstrap-datetimepicker.min.css" media="screen">

    <script src="<{$public}>/js/jquery-1.11.3.min.js"></script>
    <script src="<{$public}>/js/bootstrap.min.js"></script>
    <script src="<{$res}>/js/bootstrap-datetimepicker.min.js" charset="UTF-8"></script>
    <script src="<{$res}>/js/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>

    <script type="text/javascript">
        $(function() {
            $("#select_pick").selectpick({
                onSelect : function(value, text) {
                }
            });
            $("#test_3").selectpick({optionColor:"#3399FF",selectedColor:"#3399FF"});
        });

        $('start_time').datetimepicker({
            format:yyyy-mm-dd,

            weekStart: 1,

            todayBtn:  1,

            autoclose: 1,

            todayHighlight: 1,

            startView: 2,

            forceParse: 0,

            showMeridian: 1
        });

    </script>
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
        <div style="padding-top: 40px">
            <ol class="breadcrumb">
                当前位置：
                <li>
                    <a href="<{$url}>/tchCourseList">我的课程</a>
                </li>
                <li class="active">考试列表</li>
                <{include file="exam/addExam.tpl"}>
            </ol>
            <button class="btn btn-primary" type="button" style="float:right;" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                + 操作
            </button>
        </div>
    </div>

    <div class="container" style="padding-top: 25px">
        <span class="label label-info" style="font-size: small">
            共&nbsp;<span style="color: #000000"><{$count}></span>&nbsp;场考试：
        </span>
    </div>

    <div class="container" style="padding-top: 2px">
        <table class="table table-hover table-responsive">

            <thead style="background-color: #4400ee;">
            <tr style="color: white; font-size: 80%;">
                <th style="text-align: center">考试号</th>
                <th style="text-align: center">考试名称</th>
                <th style="text-align: center">考试时间</th>
                <th style="text-align: center">考试时长</th>
                <th style="text-align: center">状态</th>
                <th style="text-align: center">操作</th>
            </tr>
            </thead>

            <tbody style="font-size: 12px;background-color: rgba(190, 190, 255, 0.1)">
            <{section loop=$exam name="list"}>
            <tr>
                <td style="text-align: center"><{$exam[list].tp_number}></td>
                <td style="text-align: center"><{$exam[list].tp_name}></td>
                <td style="text-align: center"><{$exam[list].start_time}></td>
                <td style="text-align: center"><{$exam[list].duration}></td>
                <td id="state1" style="text-align: center"><{$exam[list].status}></td>
                <td style="text-align: center"><a href="<{$app}>/exam/examMain/tp_id/<{$exam[list].tp_id}>/tp_name/<{$exam[list].tp_name}>/duration/<{$exam[list].duration}>">查看|</a><a href="<{$app}>/exam/delExam/tp_id/<{$exam[list].tp_id}>/course_id/<{$exam[list].course_id}>">删除</a></td>
            </tr>
            <{/section}>
            </tbody>

        </table>

        <hr>

        <footer>
            <p>&nbsp;&copy;&nbsp;Company 2014</p>
        </footer>
    </div>
</div>


</body>
</html>