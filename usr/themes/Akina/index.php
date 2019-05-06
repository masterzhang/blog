<?php
/**
 * Akina For Typecho移植于WordPress的Akina模板，原作者为 Fuzzz 
 * 
 * @package Akina For Typecho
 * @author 灰白衬衫
 * @version 1.2
 * @link http://zhebk.cn/
 */
 if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
<div class="blank"></div>
	<div class="headertop">
		<!-- 首页大图 -->
		<div id="centerbg">
			<!-- 左右倾斜 -->
			<div class="slant-left"></div>
			<div class="slant-right"></div>
			<!-- 博主信息 -->
			<div class="focusinfo">
				<!-- 头像 -->
				<div class="header-tou" >
				<a href="<?php $this->options ->siteUrl(); ?>"><img src="<?php $this->options->themeUrl('images/akinadeaava.jpg'); ?>"></a>
				</div>
				<!-- 简介 -->
				<div class="header-info">
				<p><?php $this->options->headerinfo() ?></p>
				</div>
				<!-- 社交信息 -->
				<div class="top-social">
					<li><a href="<?php $this->options->SINA();?>" target="_blank" rel="nofollow" class="social-sina" title="sina"><img src="<?php $this->options->themeUrl('images/sina.png'); ?>"/></a></li>
					<li class="qq"><a href="http://wpa.qq.com/msgrd?v=3&uin=<?php $this->options->QQ();?>&site=qq&menu=yes" target="_blank" rel="nofollow" ><img src="<?php $this->options->themeUrl('images/qq.png'); ?>"/></a>
						<div class="qqInner"><?php $this->options->QQ();?></div>
					</li>
					<li><a href="https://user.qzone.qq.com/<?php $this->options->QQ();?>" target="_blank" rel="nofollow" class="social-qzone" title="qzone"><img src="<?php $this->options->themeUrl('images/qzone.png'); ?>"/></a></li>
					<li><a href="<?php $this->options->Github();?>" target="_blank" rel="nofollow" class="social-github" title="github"><img src="<?php $this->options->themeUrl('images/github.png'); ?>"/></a></li>
				</div>
			</div>
		</div>
		<!-- 首页大图结束 -->
	</div>
<div class=""></div>
<div id="content" class="site-content">
<!-- 判断是否搜索 -->		
<?php if(!$this->is('index') && !$this->is('front')): ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<!-- 判断搜索是否有结果-是 -->	
		<?php if ($this->have()): ?>
			<header class="page-header">
			<h1 class="page-title">搜索结果: <span><?php $this->archiveTitle(array('category'=>_t('分类“%s”下的文章'),'search'=>_t('包含关键字“%s”的文章'),'tag' =>_t('标签“%s”下的文章'),'author'=>_t('%s 的主页')), '', ''); ?></span></h1>
			</header>
		<!-- 判断搜索是否有结果-否 -->	
		<?php else: ?>
			<div class="search-box">
				<form class="s-search">
					<i class="iconfont">&#xe6f0;</i>
					<input class="text-input" type="search" name="s" placeholder="搜索...">	
				</form>
			</div>
			<section class="no-results not-found">
				<header class="page-header">
					<h1 class="page-title">搜索结果: <span><?php $this->archiveTitle(array('category'=>_t('分类“%s”下暂无文章'),'search'=>_t('暂无包含关键字“%s”的文章'),'tag' =>_t('标签“%s”下暂无文章'),'author'=>_t('%s 的主页')), '', ''); ?></span></h1>
				</header>
				<div class="page-content">
					<div class="sorry">
						<p>抱歉, 没有找到你想要的文章. 看看其他文章吧.</p>
						<div class="sorry-inner">
							<ul class="search-no-reasults">
								<?php getRandomPosts('5');?>
							</ul>
						</div>
					</div>	
				</div>
			</section>			
		<?php endif; ?>	
<?php else: ?>
<!-- 不是搜索显示主页 -->
<!-- 顶部公告内容 -->
<div class="notice">
	<i class="iconfont">&#xe607;</i> : 
		<div class="notice-content">
		<?php $this->options->NOTICE();?>
		</div>
</div>
<!-- 聚焦内容 -->
<div class="top-feature">
	<h1 class="fes-title">聚焦</h1>
		<div class="feature-content">
			<li class="feature-1"><a href="<?php $this->options->feature1();?>"><div class="feature-title"><span class="foverlay">feature1</span></div><img src="<?php $this->options->themeUrl('images/feature/feature1.jpg'); ?>"></a></li>
			<li class="feature-2"><a href="<?php $this->options->feature2();?>"><div class="feature-title"><span class="foverlay">feature2</span></div><img src="<?php $this->options->themeUrl('images/feature/feature2.jpg'); ?>"></a></li>
			<li class="feature-3"><a href="<?php $this->options->feature3();?>"><div class="feature-title"><span class="foverlay">feature3</span></div><img src="<?php $this->options->themeUrl('images/feature/feature3.jpg'); ?>"></a></li>
		</div>
</div>
<!-- 主页内容 -->
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
	<h1 class="main-title">近况</h1>
<!-- 结束搜索判断 -->
<?php endif; ?>
		<!-- 开始文章循环输出 -->
		<?php while($this->next()): ?>
		<article class="post post-list" itemscope="" itemtype="http://schema.org/BlogPosting">
		<!-- 判断文章输出样式 -->
		<?php if (isset($this->fields->dt)): ?>
		<div class="post-status">
			<div class="postava">
				<a href="<?php $this->permalink() ?>"><img alt="avatar" src="<?php $this->options->themeUrl('images/avatar.jpg'); ?>" srcset="<?php $this->options->themeUrl('images/avatar.jpg'); ?> 2x" class="avatar avatar-64 photo" height="64" width="64"></a>
			</div>
			<div class="s-content">
				<p><?php $this->excerpt(70, '...'); ?></p>
				<div class="s-time"><i class="iconfont">&#xe604;</i><?php $this->date('Y-n-j'); ?></div>
			</div>
			<footer class="entry-footer">
		<?php else: ?>
			<div class="post-entry">
				<div class="feature">
					<a href="<?php $this->permalink() ?>"><div class="overlay"><i class="iconfont">&#xe61e;</i></div><img src="<?php $this->options->themeUrl('/images/random/deu'.mt_rand(1,7).'.jpg'); ?>"></a>
				</div>
				<h1 class="entry-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
				<div class="p-time">
				<i class="iconfont">&#xe604;</i> <?php $this->date('Y-n-j'); ?>
				</div>
				<p><?php $this->excerpt(70, '...'); ?></p>
				<!-- 文章下碎碎念 -->
				<footer class="entry-footer">
					<div class="post-more">
							<a href="<?php $this->permalink() ?>"><i class="iconfont">&#xe61c;</i></a>
					</div>
		<?php endif; ?>
					<div class="info-meta">
						<div class="comnum">
							<span><i class="iconfont">&#xe610;</i><a href="<?php $this->permalink() ?>"><?php $this->commentsNum(_t('NOTHING'), _t('1条评论'), _t('%d条评论')); ?></a></span>
						</div>
						<div class="views">
							<span><i class="iconfont">&#xe614;</i> <?php get_post_view($this) ?> 热度</span>
						</div>
					</div>
				</footer>
			</div>
				<hr>
		</article>
		<?php endwhile; ?>
		<!-- 结束文章循环输出 -->
		<!-- 翻页按钮 -->
		<nav class="navigator">
        <?php $this->pageLink('<i class="iconfont">&#xe611;</i>'); ?>
		<?php $this->pageLink('<i class="iconfont">&#xe60f;</i>','next'); ?>
		</nav>
	</main>
	<div id="pagination"><?php $this->pageLink('加载更多','next'); ?></div>
</div>
</div>
<!-- 结束主页内容 -->
</div>
</section>
<!-- 页底信息 -->
<?php $this->need('footer.php'); ?>