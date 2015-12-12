<!-- 
    考试主界面的文件。 
    @author      zp
    @version     v1.0
    @since        1.0 
 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>考试安排-在线考试系统</title>
    <link rel="stylesheet" href="<{$public}>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<{$res}>/css/jumbotron.css">
    <link rel="stylesheet" href="<{$res}>/css/avatar.css">

    <script src="<{$public}>/js/jquery-1.11.3.min.js"></script>
    <script>
        var intDiff = parseInt(5400);//倒计时总秒数量
        function timer(intDiff){
            window.setInterval(function(){
                var hour=0,
                        minute=0,
                        second=0;//时间默认值
                if(intDiff > 0){
                    hour = Math.floor(intDiff / (60 * 60));
                    minute = Math.floor(intDiff / 60) - (hour * 60);
                    second = Math.floor(intDiff) - (hour * 60 * 60) - (minute * 60);
                }
                if (minute <= 9) minute = '0' + minute;
                if (second <= 9) second = '0' + second;
                $('#hour_show').html('<s id="h"></s>'+hour+'时');
                $('#minute_show').html('<s></s>'+minute+'分');
                $('#second_show').html('<s></s>'+second+'秒');
                intDiff--;
            }, 1000);
        }
        $(function(){
            timer(intDiff);
        });
    </script>
</head>
<body>
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
                                <{$stu_name}> <b>ˇ</b>
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
                        <a href="#">我的课程</a>
                    </li>
                    <li>
                        <a href="#">考试列表</a>
                    </li>
                    <li class="active"><{$tp_name}></li>
                </ol>
            </div>
        </div>

        <div class="container" style="padding-top: 40px;">
            <table class="table table-striped table-bordered table-hover" style="border;width: 980px">

                <thead style="border: 1px solid #4294B9; background-color:#4294B9;">
                    <tr style="color: orange; font-size:80%; text-align: center">
                        <th>考试内容：软件工程第一周考试（001001）</th>
                    </tr>
                </thead>

                <tbody style="font-size: 12px">
                    <tr>
                        <td>
                            <div style="padding-bottom: 0px">
                                <table class="table table-striped table-bordered table-hover" style="border;width: 755px;text-align:center;margin-left:auto;margin-right:auto">
                                    <thead style="border: 0px solid #F0F0F0; background-color:#F0F0F0;">
                                        <tr>
                                            <th>
                                                题目：In system modeling, describe the meaning of System Flow Diagram (SFD) and its relationship with System Context Diagram (SCD) and Data Flow Diagram (DFD).
                                            </th>
                                        </tr>
                                        <tr style="color: gray; font-size:80%; text-align: center;">
                                            <th>
                                                请在下面填写你的答案
                                                <div class="time-item" align="right"> <strong>距离考试结束：</strong> <strong id="hour_show">0时</strong>
                                                    <strong id="minute_show">0分</strong>
                                                    <strong id="second_show">0秒</strong>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>
                                                <textarea name="contents" id="contents" style="width: 1080px; border-bottom-width:
                                0px;margin: 0px;height: 450px;border: 0px" class="form-control" rows="20"></textarea>
                                            </td>
                                        </tr>
                                        <tr style="color: gray; font-size:80%; text-align: center;">
                                            <th>
                                                <div>
                                                    <button type="button" class="btn btn-primary"  style="float:right;">提交答案</button>
                                                </div>
                                            </th>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <hr>

        <footer>
            <p>&copy; Company 2014</p>
        </footer>
    </div>
</body>
</html>