<?php /* Smarty version 2.6.18, created on 2015-06-16 11:53:13
         compiled from exam/result.tpl */ ?>
<!DOCTYPE html>
<html>
<head lang="en" class="no-js">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="icon" href="images/icon.jpg">

    <title>在线考试系统</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo $this->_tpl_vars['public']; ?>

    /css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $this->_tpl_vars['res']; ?>

    /css/avatar.css">
    <link rel="stylesheet" href="<?php echo $this->_tpl_vars['res']; ?>

    /css/reset.css">
    <link rel="stylesheet" href="<?php echo $this->_tpl_vars['res']; ?>

    /css/default.css">
    <link rel="stylesheet" href="<?php echo $this->_tpl_vars['res']; ?>

    /css/style.css">
    <script src="<?php echo $this->_tpl_vars['public']; ?>
/js/jquery-1.11.3.min.js"></script>
    <!--新添加-->
    <script src="<?php echo $this->_tpl_vars['res']; ?>
/js/modernizr.js"></script>
    <!--[if IE]>
    <script src="http://libs.useso.com/js/html5shiv/3.7/html5shiv.min.js"></script>
    <![endif]-->
</head>
<body>
    <!-- 导航栏 -->
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
                                    <?php echo $this->_tpl_vars['stu_name']; ?>
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
            <!--/.navbar-collapse --> </div>

        <div style="margin: auto;color: #222222;height: 50px">
            <h1>
                <span>&nbsp;</span>
            </h1>
            <h1>
                <span>&nbsp;</span>
            </h1>
            <h1>
                <span>&nbsp;</span>
            </h1>
            <h1>
                <span>&nbsp;</span>
            </h1>
        </div>

        <main class="cd-main" style="margin: auto;">
            <ul class="cd-gallery">
                <li class="cd-item" style="height: 350px">
                    <a href="<?php echo $this->_tpl_vars['url']; ?>
/score">
                        <div>
                            <h2>查看成绩</h2>
                            <p>勇敢的直面惨淡的人生吧！</p> 
                            <b>View More</b>
                            
                        </div>
                    </a>
                </li>

                <li class="cd-item" style="height: 350px">
                    <a href="<?php echo $this->_tpl_vars['url']; ?>
/answer">
                        <div>
                            <h2>参考答案</h2>
                            <p>结果不重要，过程更重要！</p>
                            <b>View More</b>
                        </div>
                    </a>
                </li>

                <li class="cd-item" style="height: 350px">
                    <a class="dark-text" href="<?php echo $this->_tpl_vars['url']; ?>
/errorShow">
                        <div>
                            <h2>错误集锦</h2>
                            <p>有错改之，善莫大焉！</p>
                            <b>View More</b>
                        </div>
                    </a>
                </li>

                <li class="cd-item" style="height: 350px">
                    <a href="<?php echo $this->_tpl_vars['url']; ?>
/selfSummary">
                        <div>
                            <h2>自我总结</h2>
                            <p>记录下伤痛，绝不重蹈覆辙！</p>
                            <b>View More</b>
                        </div>
                    </a>
                </li>
            </ul>
            <!-- .cd-gallery -->


         </main>
        <!-- .cd-main -->

        <div class="htmleaf-header" style="margin: auto;">
            <div class="htmleaf-links">
                <a href="<?php echo $this->_tpl_vars['app']; ?>
/login" class="glyphicon glyphicon-home">
                    <span>&nbsp;</span>
                </a>
                <a href="" class="glyphicon glyphicon-share-alt">
                    <span></span>
                </a>
            </div>
        </div>

        <div class="cd-folding-panel">

            <div class="fold-left"></div>
            <!-- this is the left fold -->

            <div class="fold-right"></div>
            <!-- this is the right fold -->

            <div class="cd-fold-content">
                <!-- content will be loaded using javascript --> </div>

            <a class="cd-close" href="#0"></a>
        </div>
        <!-- .cd-folding-panel -->

        <script src="<?php echo $this->_tpl_vars['res']; ?>
/js/main.js"></script>
        <!-- Resource jQuery -->
</body>

</html>