<?php
/**
 * 标签云
 *
 * @package custom
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
<body class="tags">
<?php $this->need('nav.php'); ?>
<div class="main">
    <?php $this->need('title.php'); ?>
    <section>
            <h1>站内搜索</h1>
            <div class="search">
                <form method="post" action="./" role="search">
                    <div id="wrap">
                        <input name="s" placeholder="请输入关键字..." id="keyword" value=""  required="">
                    </div>
                    <input class="submit" type="submit" value="搜索">
                </form>
            </div>
            <div>
                <h3>标签</h3>
                <div>
                <?php Typecho_Widget::widget('Widget_Metas_Tag_Cloud', 'pageSize=10000',array('sort' => 'count', 'ignoreZeroCount' => true, 'desc' => true))->to($tags); ?>

                <?php if($tags->have()): ?>

                    <?php while ($tags->next()): ?>

                    <a href="<?php $tags->permalink();?>" class="tag"><?php $tags->name(); ?></a>

                    <?php endwhile; ?>

                    <?php endif; ?>
                </div>
            </div>
        </section>
    <?php $this->need('footer.php'); ?>
