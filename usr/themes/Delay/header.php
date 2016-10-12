<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 -->
    <link href="<?php $this->options->themeUrl('css/bootstrap.min.css'); ?>" type="text/css" rel="stylesheet">
	<link href="<?php $this->options->themeUrl('css/theme.css'); ?>" type="text/css" rel="stylesheet">
    <link href="<?php $this->options->themeUrl('css/icon.css'); ?>" type="text/css" rel="stylesheet">
    <link href="<?php $this->options->themeUrl('css/nav.css'); ?>" type="text/css" rel="stylesheet">
    <link href="<?php $this->options->themeUrl('css/header.css'); ?>" type="text/css" rel="stylesheet">
    <link href="<?php $this->options->themeUrl('css/index.css'); ?>" type="text/css" rel="stylesheet">
    <link href="<?php $this->options->themeUrl('css/content.css'); ?>" type="text/css" rel="stylesheet">
    <link href="<?php $this->options->themeUrl('css/archive.css'); ?>" type="text/css" rel="stylesheet">
    <link href="<?php $this->options->themeUrl('css/tags.css'); ?>" type="text/css" rel="stylesheet">
    <link href="<?php $this->options->themeUrl('css/duoshuo.css'); ?>" type="text/css" rel="stylesheet">
    <link href="<?php $this->options->themeUrl('css/link.css'); ?>" type="text/css" rel="stylesheet">
    <link href="<?php $this->options->themeUrl('css/about.css'); ?>" type="text/css" rel="stylesheet">
    <script src="<?php $this->options->themeUrl('js/jquery-3.1.0.min.js'); ?>"></script>
    <script async src="<?php $this->options->themeUrl('js/base.js'); ?>"></script>
    <script async src="<?php $this->options->themeUrl('js/bootstrap.min.js'); ?>"></script>
    <script async src="<?php $this->options->themeUrl('js/fastclick.js'); ?>"></script>
    <!--[if lt IE 9]>
    <script async src="http://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script async src="http://cdn.staticfile.org/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>

    
    
