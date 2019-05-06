<?php
/**
 * links
 *
 * @package custom
 */
  $this->need('header.php'); 
?>
<!-- 友链部分 -->
<div class="blank"></div>
<div class="headertop"></div>
<div class=""></div>
<div id="content" class="site-content">
	<span class="linkss-title"><?php $this->title() ?></span>
	<article class="hentry">
		<?php $this->content(); ?>
	</article>
</div>
</div>
</section>
<?php $this->need('footer.php'); ?>