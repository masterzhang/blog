<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Cache-Control" content="no-transform" />
	<meta http-equiv="Cache-Control" content="no-siteapp" />
	<meta http-equiv="x-dns-prefetch-control" content="on" />
	<title itemprop="name"><?php $this->archiveTitle(array('category'=>_t('分类 %s 下的文章'),'search'=>_t('包含关键字 %s 的文章'),'tag' =>_t('标签 %s 下的文章'),'author'=>_t('%s 的主页')), '', ' - '); ?><?php $this->options->title(); ?><?php if($this->is('index')): ?>-<?php $this->options->sub() ?><?php endif; ?></title>
	<?php $this->header('generator=&template=&pingback=&xmlrpc=&wlw='); ?>
	<link rel='dns-prefetch' href="<?php $this->options->DNS();?>" />
	<link rel="shortcut icon" href="<?php $this->options->themeUrl('images/favicon.ico'); ?>">
	<link rel="stylesheet" href="<?php $this->options->themeUrl('css/style.css" type="text/css'); ?>" />
	<link rel="stylesheet" href="<?php $this->options->themeUrl('css/OwO.css" type="text/css'); ?>" />
	<style type="text/css">
	<?php if (!empty($this->options->menu) && in_array('show', $this->options->menu)): ?>
		.site-top ul { opacity: 1 !important;}
		.site-top .show-nav { display:none !important; }
	<?php endif; ?>
		@media (max-width:1080px) {#centerbg {display:none} }
	<?php if (!empty($this->options->menu) && in_array('page', $this->options->menu)): ?>
	<?php else: ?>
		.navigator { display:block !important }
		#pagination { display:none !important }
	<?php endif; ?>
		.wedonate img { margin-right:10px }
		.cd-top { background:url(<?php $this->options->themeUrl('images/gotop.png'); ?>) no-repeat center 50%}
	</style>
</head>
<body class="home blog hfeed">
<section id="main-container">
	 <div class="openNav">
		<div class="iconflat">
			 <div class="icon"></div>
		</div>
			<!-- logo则显示 -->
			<div class="site-branding">
			 <div class="site-title"><a href="<?php $this->options ->siteUrl(); ?>" ><img src="<?php $this->options->themeUrl('images/akina.png'); ?>"></a></div>
			</div>
			<!-- logo 结束 -->
	 </div>
	 <!-- 主页面显示 -->
<div id="page" class="site wrapper">
<header class="site-header" role="banner">
	<div class="site-top">
		<!-- logo则显示 -->
		<div class="site-branding">
		<div class="site-title"><a href="<?php $this->options ->siteUrl(); ?>" ><img src="<?php $this->options->themeUrl('images/akina.png'); ?>"></a></div>
		</div>
		<!-- logo 结束 -->
		<div id="login-reg">
			<!-- 个人头像 -->
			<?php if($this->user->hasLogin()): ?>
			<!-- 如果用户已经登录 -->
			<div class="exloginbox">
				<a href="#" class="user-panel"><img alt="avatar" src="<?php $this->options->themeUrl('images/avatar.jpg'); ?>" srcset="<?php $this->options->themeUrl('images/avatar.jpg'); ?> 2x" class="avatar avatar-110 photo" height="110" width="110"></a>
				<div class="user_inner">
				<ul>
				<li><a href="<?php $this->options->adminUrl(); ?>" class="user-manage">管理后台</a></li>
				<li><a href="<?php $this->options->logoutUrl(); ?>" class="user-logout">登出</a></li>
				</ul>
				</div>
			</div>
			<?php else: ?>
			<!-- 如果用户未登录 -->
			<div class="ex-login">
				<a href="<?php $this->options->adminUrl(); ?>" target="_top">
					<i class="iconfont">&#xe615;</i>
				</a>
			</div>
			<?php endif; ?>
		</div>
		<!-- 搜索 -->
		<div class="searchbox">
			<i class="iconfont js-toggle-search iconsearch">&#xe6f0;</i>
		</div>
		<!-- 分类 -->
		<div class="lower">
			<nav>
				<ul id="nav_menu" class="menu"><li class="current-menu-item"><a href="/">首页</a></li>
				<li><a href="#">分类</a>
				<ul class="sub-menu">
					<?php $this->widget('Widget_Metas_Category_List')->parse('<li><a href="{permalink}">{name}</a></li>'); ?>
				</ul>
				</li>
				<li><a href="<?php $this->options ->siteUrl(); ?>index.php/archives.html">归档</a></li>
				<li><a href="#">更多</a>
				<ul class="sub-menu">
					<li><a href="<?php $this->options ->siteUrl(); ?>index.php/links.html">邻居</a></li>
					<li><a href="<?php $this->options ->siteUrl(); ?>index.php/message.html">留言</a></li>
					<li><a href="<?php $this->options ->siteUrl(); ?>index.php/about.html">关于</a></li>
				</ul>
				</li>
				</ul>
				<!-- 隐藏后菜单图标 -->
				<i class="iconfont show-nav">&#xe613;</i>
			</nav>
		</div>
	</div>
	<!-- 到顶部按钮 -->
	<div class="cd-top-box">
	<a href="#" class="cd-top"></a>
	</div>
</header>
