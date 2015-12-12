<?php /* Smarty version 2.6.18, created on 2015-05-22 12:04:57
         compiled from public/success.tpl */ ?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>提示消息 - BroPHP</title>

		<style type="text/css">
			body { font: 75% Arail; text-align: center; }
			#notice { width: 300px; background: #FFF; border: 1px solid #BBB; background: #EEE; padding: 3px;
			position: absolute; left: 50%; top: 50%; margin-left: -155px; margin-top: -100px; }
			#notice div { background: #FFF; padding: 30px 0 20px; font-size: 1.2em; font-weight:bold }
			#notice p { background: #FFF; margin: 0; padding: 0 0 20px; }
			a { color: #f00} a:hover { text-decoration: none; }
			
		</style>
	</head>
	<body>
		<div id="notice">
	
			<div style="width:100%;text-align:left;padding-left:10px;padding-right:10px"><?php echo $this->_tpl_vars['mess']; ?>
</div>
				
			<?php if ($this->_tpl_vars['mark']): ?>
				<p style="font: italic bold 2cm cursive,serif; color:green">
					ok 
				</p>
			<?php else: ?>
				<p style="font: italic bold 2cm cursive,serif; color:red">
					×
				</p>

			<?php endif; ?>		
			<p>
				 在( <span id="sec" style="color:blue;font-weight:bold"><?php echo $this->_tpl_vars['timeout']; ?>
</span> )秒后自动跳转，或直接点击 <a href="javascript:<?php echo $this->_tpl_vars['location']; ?>
">这里</a> 跳转<br>
				 <span style="display:block;text-decoration:underline;cursor:pointer;line-height:25px" onclick="stop(this)">停止</span>
	
			</p>
		 </div>
						
		 <script>
		 		var seco=document.getElementById("sec");
				var time=<?php echo $this->_tpl_vars['timeout']; ?>
;
				var tt=setInterval(function(){
						time--;
						seco.innerHTML=time;	
						if(time<=0){
							<?php echo $this->_tpl_vars['location']; ?>

							return;
						}
					}, 1000);
				function stop(obj){
					clearInterval(tt);
					obj.style.display="none";
				}
		</script>
	</body>
</html>