<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Cache-Control" content="no-transform" />
	<meta http-equiv="Cache-Control" content="no-siteapp" />
	<title itemprop="name">页面没有找到-<?php $this->options->title(); ?></title>
	<link rel="shortcut icon" href="<?php $this->options->themeUrl('images/favicon.ico'); ?>">
	<link rel="stylesheet" href="<?php $this->options->themeUrl('css/style.css" type="text/css'); ?>" />
</head>
<body class="error404 hfeed">
	<section class="error-404 not-found">
		<div class="error-img">
			<img src="<?php $this->options->themeUrl('images/404bg.jpg'); ?>">
		</div>
		<div class="err-button back">
			<a onclick="history.back(-1)" class="link-button link-back-button">上一页</a>
			<a id="gohome" href="<?php $this->options ->siteUrl(); ?>">返回主页</a>
		</div>
	</section>
</body>