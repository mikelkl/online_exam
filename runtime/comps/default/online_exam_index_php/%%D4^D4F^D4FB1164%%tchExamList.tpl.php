<?php /* Smarty version 2.6.18, created on 2015-06-15 12:34:34
         compiled from user/tchExamList.tpl */ ?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>考试安排-在线考试系统</title>
    <link rel="stylesheet" href="<?php echo $this->_tpl_vars['public']; ?>
/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $this->_tpl_vars['res']; ?>
/css/jumbotron.css">
    <link rel="stylesheet" href="<?php echo $this->_tpl_vars['res']; ?>
/css/avatar.css">
    <link rel="stylesheet" href="<?php echo $this->_tpl_vars['res']; ?>
/css/bootstrap-datetimepicker.min.css" media="screen">

    <script src="<?php echo $this->_tpl_vars['public']; ?>
/js/jquery-1.11.3.min.js"></script>
    <script src="<?php echo $this->_tpl_vars['public']; ?>
/js/bootstrap.min.js"></script>
    <script src="<?php echo $this->_tpl_vars['res']; ?>
/js/bootstrap-datetimepicker.min.js" charset="UTF-8"></script>
    <script src="<?php echo $this->_tpl_vars['res']; ?>
/js/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>

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
        <div style="padding-top: 40px">
            <ol class="breadcrumb">
                当前位置：
                <li>
                    <a href="<?php echo $this->_tpl_vars['url']; ?>
/tchCourseList">我的课程</a>
                </li>
                <li class="active">考试列表</li>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "exam/addExam.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </ol>
            <button class="btn btn-primary" type="button" style="float:right;" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                + 操作
            </button>
        </div>
    </div>

    <div class="container" style="padding-top: 25px">
        <span class="label label-info" style="font-size: small">
            共&nbsp;<span style="color: #000000"><?php echo $this->_tpl_vars['count']; ?>
</span>&nbsp;场考试：
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
            <?php unset($this->_sections['list']);
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['exam']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                <td style="text-align: center"><?php echo $this->_tpl_vars['exam'][$this->_sections['list']['index']]['tp_number']; ?>
</td>
                <td style="text-align: center"><?php echo $this->_tpl_vars['exam'][$this->_sections['list']['index']]['tp_name']; ?>
</td>
                <td style="text-align: center"><?php echo $this->_tpl_vars['exam'][$this->_sections['list']['index']]['start_time']; ?>
</td>
                <td style="text-align: center"><?php echo $this->_tpl_vars['exam'][$this->_sections['list']['index']]['duration']; ?>
</td>
                <td id="state1" style="text-align: center"><?php echo $this->_tpl_vars['exam'][$this->_sections['list']['index']]['status']; ?>
</td>
                <td style="text-align: center"><a href="<?php echo $this->_tpl_vars['app']; ?>
/exam/examMain/tp_id/<?php echo $this->_tpl_vars['exam'][$this->_sections['list']['index']]['tp_id']; ?>
/tp_name/<?php echo $this->_tpl_vars['exam'][$this->_sections['list']['index']]['tp_name']; ?>
/duration/<?php echo $this->_tpl_vars['exam'][$this->_sections['list']['index']]['duration']; ?>
">查看|</a><a href="<?php echo $this->_tpl_vars['app']; ?>
/exam/delExam/tp_id/<?php echo $this->_tpl_vars['exam'][$this->_sections['list']['index']]['tp_id']; ?>
/course_id/<?php echo $this->_tpl_vars['exam'][$this->_sections['list']['index']]['course_id']; ?>
">删除</a></td>
            </tr>
            <?php endfor; endif; ?>
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