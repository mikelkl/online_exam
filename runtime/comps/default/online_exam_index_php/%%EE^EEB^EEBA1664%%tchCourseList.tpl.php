<?php /* Smarty version 2.6.18, created on 2015-06-13 22:03:37
         compiled from user/tchCourseList.tpl */ ?>
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
                                <form action="<?php echo $this->_tpl_vars['url']; ?>
/addCourse" method="post">
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
                        <?php echo $this->_tpl_vars['count']; ?>
</span>
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
                            <?php unset($this->_sections['list']);
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['course']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['show'] = true;
$this->_sections['list']['max'] = $this->_sections['list']['loop'];
$this->_sections['list']['step'] = 1;
$this->_sections['list']['start'] = $this->_sections['list']['step'] > 0 ? 0 : $this->_sections['list']['loop']-1;
if ($this->_sections['list']['show']) {
    $this->_sections['list']['total'] = $this->_sections['list']['loop'];
    if ($this->_sections['list']['total'] == 0)
        $this->_sections['list']['show'] = false;
} else
    $this->_sections['list']['total'] = 0;
if ($this->_sections['list']['show']):

            for ($this->_sections['list']['index'] = $this->_sections['list']['start'], $this->_sections['list']['iteration'] = 1;
                 $this->_sections['list']['iteration'] <= $this->_sections['list']['total'];
                 $this->_sections['list']['index'] += $this->_sections['list']['step'], $this->_sections['list']['iteration']++):
$this->_sections['list']['rownum'] = $this->_sections['list']['iteration'];
$this->_sections['list']['index_prev'] = $this->_sections['list']['index'] - $this->_sections['list']['step'];
$this->_sections['list']['index_next'] = $this->_sections['list']['index'] + $this->_sections['list']['step'];
$this->_sections['list']['first']      = ($this->_sections['list']['iteration'] == 1);
$this->_sections['list']['last']       = ($this->_sections['list']['iteration'] == $this->_sections['list']['total']);
?>
                                <tr>
                                    <td style="text-align: center">
                                        <?php echo $this->_tpl_vars['course'][$this->_sections['list']['index']]['course_number']; ?>
</td>
                                        <td style="text-align: center">
                                            <?php echo $this->_tpl_vars['course'][$this->_sections['list']['index']]['course_name']; ?>
</td>
                                            <td style="text-align: center">
                                                <?php echo $this->_tpl_vars['course'][$this->_sections['list']['index']]['stu_num']; ?>
</td>
                                                <td style="text-align: center">19</td>
                                                <td style="text-align: center">19</td>
                                                <td style="text-align: center">
                                                    <a href="<?php echo $this->_tpl_vars['url']; ?>
/tchExamList/course_id/<?php echo $this->_tpl_vars['course'][$this->_sections['list']['index']]['course_id']; ?>
">进入|</a><a href="<?php echo $this->_tpl_vars['url']; ?>
/delCourse/course_id/<?php echo $this->_tpl_vars['course'][$this->_sections['list']['index']]['course_id']; ?>
">删除</a>
                                                    </td>
                                                </tr>
                                                <?php endfor; endif; ?></tbody>

                                            </table>
                                        </div>

                                        <hr>

                                        <footer>
                                            <p>&nbsp;&copy;&nbsp;Company 2014</p>
                                        </footer>
                                    </div>

</body>
                                </html>