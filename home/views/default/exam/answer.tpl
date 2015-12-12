<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="<{$res}>/css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="<{$res}>/css/style.css"> <!-- Resource style -->
	<script src="<{$public}>/js/jquery-1.11.3.min.js"></script>
	<script src="<{$res}>/js/modernizr.js"></script> <!-- Modernizr -->

	<title>错题集锦</title>
</head>
<body>
	<div class="cd-fold-content single-page">
	    <h3>参考答案</h3>
	    <em>请认真阅读参考答案，及时修正错误</em>
	    <{section loop=$data name="list"}>
		    <p style="color: brown">
		        题目<{$smarty.section.list.index_next}>：<{$data[list].tq_content}>
		    </p>
		    <p style="color: black">
		        答案：<{$data[list].answer}>
		    </p>
	    <{/section}>
	</div>
</body>
<script src="<{$res}>/js/main.js"></script> <!-- Resource jQuery -->
</html>