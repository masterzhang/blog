<?php
/**
 * 404
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
        <h1>404</h1>
        <div>
            <p>您访问的页面，已经被我吃了，不如看看其他的吧~(～￣▽￣)～~(～￣▽￣)～~(～￣▽￣)～<?php echo $mid = $this->options->aboutMid(); ?></p>
        </div>
    </section>
    <?php $this->need('footer.php'); ?>
