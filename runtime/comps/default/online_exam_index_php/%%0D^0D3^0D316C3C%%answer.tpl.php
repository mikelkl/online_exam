<?php /* Smarty version 2.6.18, created on 2015-06-16 12:31:35
         compiled from exam/answer.tpl */ ?>
<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['res']; ?>
/css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['res']; ?>
/css/style.css"> <!-- Resource style -->
	<script src="<?php echo $this->_tpl_vars['public']; ?>
/js/jquery-1.11.3.min.js"></script>
	<script src="<?php echo $this->_tpl_vars['res']; ?>
/js/modernizr.js"></script> <!-- Modernizr -->

	<title>错题集锦</title>
</head>
<body>
	<div class="cd-fold-content single-page">
	    <h3>参考答案</h3>
	    <em>请认真阅读参考答案，及时修正错误</em>
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
		    <p style="color: brown">
		        题目<?php echo $this->_sections['list']['index_next']; ?>
：<?php echo $this->_tpl_vars['data'][$this->_sections['list']['index']]['tq_content']; ?>

		    </p>
		    <p style="color: black">
		        答案：<?php echo $this->_tpl_vars['data'][$this->_sections['list']['index']]['answer']; ?>

		    </p>
	    <?php endfor; endif; ?>
	</div>
</body>
<script src="<?php echo $this->_tpl_vars['res']; ?>
/js/main.js"></script> <!-- Resource jQuery -->
</html>