<?php
/**
 * 内容页面
 *
 * @package custom
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
    <body class="content">
<?php $this->need('nav.php'); ?>
    <div class="main">
        <?php $this->need('title.php'); ?>
        <section>
            <h1><?php $this->title() ?></h1>
            <div>
                <span><?php $this->date('M d,Y'); ?> in&nbsp;</span>
                <span><?php $this->category(','); ?>&nbsp;by&nbsp;</span>
                <span><a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a>&nbsp;</span>
                <span><i class="iconfont">&#xe60d;</i></span>
                <span class="time"><?php get_post_view($this) ?></span>
            </div>
            <div>
                <?php  $this->content() ?>
            </div>
            <div class="share">
                <div class="page">
                    <?php thePrev($this); ?><?php theNext($this); ?>
                </div>
                <div class="shareItems">
                    <div class="ds-share" data-thread-key="<?php echo $this->cid; ?>"
                         data-title="<?php $this->title() ?>" data-images="" data-content=''
                    '
                    data-url="<?php $this->permalink() ?>">

                    <a class="ds-weibo share-item" href="javascript:void(0);" data-service="weibo" title="分享至微博"
                       data-toggle="tooltip" data-placement="top">
                        <i class="iconfont">&#xe619;</i>
                    </a>
                    <a class="ds-qzone share-item" href="javascript:void(0);" data-service="qzone" title="分享至QQ空间"
                       data-toggle="tooltip" data-placement="top">
                        <i class="iconfont">&#xe61b;</i>
                    </a>
                    <a class="ds-wechat share-item" href="javascript:void(0);" data-service="wechat" title="分享至朋友圈"
                       data-toggle="tooltip" data-placement="top">
                        <i class="iconfont">&#xe604;</i>
                    </a>
                </div>
            </div>
    </div>
<?php $this->need('comments.php'); ?>
    </section>
    </div>
<?php $this->need('footer.php'); ?>