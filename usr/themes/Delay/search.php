<?php
/**
 * 搜索结果
 *
 * @package custom
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
<body class="home">
<?php $this->need('nav.php'); ?>
<div class="main">
    <?php $this->need('title.php'); ?>
    <section>
        <div class="articles">
        <?php if ($this->have()): ?>
            <?php while ($this->next()): ?>
                <div class="article">
                    <article>
                        <h1 class="title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
                        <div class="author">
                            <div href="#" class="target"><?php $this->category(','); ?></div>
                            <span><i class="iconfont">&#xe615;</i></span>
                            <a href="<?php $this->author->permalink(); ?>"
                               class="username"><?php $this->author(); ?></a>
                            <span><i class="iconfont">&#xe617;</i></span>
                            <span class="time"><?php $this->date('Y-m-d'); ?></span>
                            <span><i class="iconfont">&#xe60d;</i></span>
                            <span class="time"><?php get_post_view($this) ?></span>
                        </div>
                        <div class="content">
                            <?php $this->content('Continue Reading...'); ?>
                        </div>
                        <div class="footer">
                            <a href="<?php $this->permalink() ?>">阅读全文</a>
                        </div>
                    </article>
                </div>
            <?php endwhile; ?>
             <?php else: ?>
             <div class="article">
             <article>
             <h1 class="title">
            <?php if ($this->is('category')) : ?>该分类下没有任何文章。<?php else: ?><?php if ($this->is('tag')) : ?>该标签下没有任何文章。<?php else: ?>暂无与之相关文章<?php endif; ?><?php endif; ?>
            </h1>
            </article>
            <div/>
            <?php endif; ?>
        </div>
        <!--
        <div class="page-nav">
            <div class="page-left">
                <?php $this->pageLink('<div class="page-button"><i class="iconfont">&#xe61e;</i><span>Newer</span></div>'); ?>
                <?php $this->pageLink('<div class="page-button"><span>Older</span><i class="iconfont">&#xe61f;</i></div>', 'next'); ?>
            </div>
            <div class="page-right">PAGE
                <?php if ($this->_currentPage > 1) echo $this->_currentPage; else echo 1; ?> <span
                    id="txt">OF</span> <?php echo ceil($this->getTotal() / $this->parameter->pageSize); ?></div>
        </div>-->
        <div class="page-nav">
                <?php $this->pageNav('&lt;', '&gt;', 3, '...', array(
                    'itemTag' => 'li',
                    'textTag' => 'span',
                    'currentClass' => 'disabled',
                    'prevClass' => 'prev',
                    'nextClass' => 'next',
                    'wrapTag' => 'ul',
                    'wrapClass' => 'pagination'
                ));
                ?>
        </div>
    </section>
    <?php $this->need('footer.php'); ?>
