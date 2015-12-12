<?php /* Smarty version 2.6.18, created on 2015-06-17 15:56:28
         compiled from exam/examMain.tpl */ ?>
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
    <link rel="stylesheet" href="<?php echo $this->_tpl_vars['public']; ?>

    /css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $this->_tpl_vars['res']; ?>

    /css/jumbotron.css">
    <link rel="stylesheet" href="<?php echo $this->_tpl_vars['res']; ?>

    /css/avatar.css">
    <script src="<?php echo $this->_tpl_vars['public']; ?>
/js/jquery-1.11.3.min.js"></script>
    <script>
        var intDiff = parseInt(<?php echo $this->_tpl_vars['duration']; ?>
) * 3600;//倒计时总秒数量
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
                        <li class="active">
                            <?php echo $this->_tpl_vars['tp_name']; ?>
</li>
                        </ol>
                    </div>
                </div>

                <div class="container" style="padding-top: 40px;">
                    <table class="table table-striped table-bordered table-hover" style="border;width: 980px">

                        <thead style="border: 1px solid #4294B9; background-color:#4294B9;">
                            <tr style="color: orange; font-size:80%; text-align: left">
                                <th>
                                    <?php echo $this->_tpl_vars['tp_name']; ?>
</th>
                                    <div class="time-item" float="right"> <strong>距离考试结束：</strong> <strong id="hour_show">0时</strong>
                                        <strong id="minute_show">0分</strong>
                                        <strong id="second_show">0秒</strong>
                                    </div>
                                </tr>

                            </thead>
                            
                            <tbody style="font-size: 12px">
                            <form action="<?php echo $this->_tpl_vars['url']; ?>
/result" method="post">
                                <?php unset($this->_sections['list']);
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['data']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                        <td>
                                            <div style="padding-bottom: 0px">
                                                <table class="table table-striped table-bordered table-hover" style="border;width: 755px;text-align:center;margin-left:auto;margin-right:auto">
                                                    <thead style="border: 0px solid #F0F0F0; background-color:#F0F0F0;">
                                                        <tr>
                                                            <th>
                                                                <?php echo $this->_sections['list']['index_next']; ?>

                                                                    、
                                                                    <?php echo $this->_tpl_vars['data'][$this->_sections['list']['index']]['tq_content']; ?>
</th>
                                                                </tr>
                                                                <tr style="color: gray; font-size:80%; text-align: center;">
                                                                    <th>请在下面填写你的答案</th>
                                                                </tr>
                                                            </thead>

                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <textarea name="<?php echo $this->_tpl_vars['data'][$this->_sections['list']['index']]['tq_id']; ?>
" id="contents" style="width: 1080px; border-bottom-width:
                                0px;margin: 0px;height: 100px;border: 0px" class="form-control" rows="20"></textarea>
                                                                    </td>
                                                                </tr>
                                                                <tr style="color: gray; font-size:80%; text-align: center;">
                                                                    <?php if ($this->_sections['list']['last']): ?>
                                                                        <th>
                                                                            <div>
                                                                                <input type="submit" class="btn btn-primary"  style="float:right;">提交答案
                                                                            </div>
                                                                        </th>
                                                                        <?php endif; ?></tr>
                                                                    </tbody>

                                                                </table>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <?php endfor; endif; ?>
                                                    <input type="hidden" value="<?php echo $this->_tpl_vars['tp_id']; ?>
" name="tp_id" />
                                                    </form>
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