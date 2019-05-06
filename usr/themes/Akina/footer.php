<footer id="colophon" class="site-footer" role="contentinfo">
	<!-- 请尊重作者！至少保留主题名称及其超链接，谢谢！ -->
	<div class="site-info">Copyright © 2019 by <a href="<?php $this->options ->siteUrl(); ?>" target="_blank" rel="nofollow"><?php $this->options->title() ?></a> . All rights reserved.<span class="sep"> | </span>Theme: <a href="https://zhebk.cn/Web/Akina.html" target="_blank" rel="nofollow">Akina For Typecho</a>.
		<div class="footertext">
			<p><a href="http://www.miibeian.gov.cn" target="_blank" rel="nofollow"><?php $this->options->ICP();?></a></p>
		</div>
	</div>
</footer>
<div id="mo-nav">
	<div class="m-avatar">
		<img src="<?php $this->options->themeUrl('images/avatar.jpg'); ?>">
	</div>
	<div class="m-search">
		<form class="m-search-form" method="post" action="" role="search">
			<input class="m-search-input" type="search" name="s" placeholder="搜索...">
		</form>
	</div>
	<ul id="nav_menu" class="menu">
		<li class="current-menu-item"><a href="/">首页</a></li>
		<li><a href="#">分类</a>
			<ul class="sub-menu">
				<?php $this->widget('Widget_Metas_Category_List')->parse('<li><a href="{permalink}">{name}</a></li>'); ?>
			</ul>
		</li>
		<li><a href="<?php $this->options ->siteUrl(); ?>archives.html">归档</a></li>
		<li><a href="#">更多</a>
			<ul class="sub-menu">
				<li><a href="<?php $this->options ->siteUrl(); ?>links.html">邻居</a></li>
				<li><a href="<?php $this->options ->siteUrl(); ?>message.html">留言</a></li>
				<li><a href="<?php $this->options ->siteUrl(); ?>about.html">关于</a></li>
			</ul>
		</li>
	</ul>
</div>
<!-- 搜索 -->
<form class="js-search search-form search-form--modal" method="post" action="" role="search">
	<div class="search-form__inner">
		<div>
			<p class="micro mb-">你想搜索什么...</p>
			<i class="iconfont">&#xe6f0;</i>
			<input class="submit" type="search" name="s" placeholder="Search...">
		</div>
	</div>
</form>
<!-- 搜索结束 -->
<!-- 加载动画 -->
<div id="preloader">
	<div id="preloader-inner"></div>
</div>
<script type="text/javascript" src="<?php $this->options->themeUrl('js/jquery.min.js'); ?>"></script>
<script type="text/javascript" src="<?php $this->options->themeUrl('js/github.js'); ?>"></script>
<script type="text/javascript" src="<?php $this->options->themeUrl('js/baguetteBox.min.js'); ?>"></script>
<script type="text/javascript" src="<?php $this->options->themeUrl('js/jquery.preloader.js'); ?>"></script>
<script type="text/javascript" src="<?php $this->options->themeUrl('js/jquery.pjax.js'); ?>"></script>
<script type='text/javascript'>var app = {"pjax":""};</script>
<script type="text/javascript" src="<?php $this->options->themeUrl('js/global.js'); ?>"></script>
<script type="text/javascript" src="<?php $this->options->themeUrl('js/SmoothScroll.js'); ?>"></script>
<script type="text/javascript">
if (!!window.ActiveXObject || "ActiveXObject" in window) { //is IE?
  alert('请抛弃万恶的IE系列浏览器吧。');
}
</script>
</body>
</html>