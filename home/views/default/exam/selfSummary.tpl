<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="<{$res}>
	/css/reset.css">
	<!-- CSS reset -->
	<link rel="stylesheet" href="<{$res}>
	/css/style.css">
	<!-- Resource style -->
	<script src="<{$public}>/js/jquery-1.11.3.min.js"></script>
	<script src="<{$res}>/js/modernizr.js"></script>
	<!-- Modernizr -->

	<title>错题集锦</title>
</head>
<body>
	<div class="cd-fold-content single-page">
		<h2>自我总结</h2> <em>请仔细分析试卷，进行总结</em>
		<div role="tabpanel" class="tab-pane" id="addQuesLib" style="padding-top: 10px">
			<div class="form-group">
				<form>
					<div class="input-group">
						<textarea name="contents" id="contents"  class="form-control" rows="20" style="width: 700px" placeholder="输入你的总结"></textarea>
					</div>
				</form>
				<div class="modal-footer">
					<div class="btn-group-sm" style="float: right">
						<button type="button" class="btn btn-success">保存</button>
						<button type="button" class="btn btn-warning">取消</button>
					</div>
				</div>
			</div>
		</div>

	</div>
</body>
<script src="<{$res}>/js/main.js"></script>
	<!-- Resource jQuery -->
</html>