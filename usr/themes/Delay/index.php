<?php
/**
 * 主题名为Delay，为什么起这个名字呢。好吧，说起来都是拖延症惹的祸，说好的做主题，拖了3,4个月，到了现在才迟迟到来。打败拖延症从这个主题开始。初次发布，可能还有很多不足，喜欢的朋友可以到我发GitHub上获取更新。
 * https://github.com/masterzhang
 *
 * @package Delay
 * @author 张华焱
 * @version 1.0
 * @link http://www.mastercoder.cn/
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
