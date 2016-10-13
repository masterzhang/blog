<nav id="sidebar">
    <ul>
        <li>
            <a href="#"><img src="<?php $this->options->UserIcon();?>" class="navIcon"></a>
        </li>
        <li>
            <span class="blogName"><?php $this->options->title() ?></span>
        </li>
        <li>
            <a href="<?php $this->options->siteUrl(); ?>" class="navLink <?php if($this->is('index')): ?>actived<?php endif; ?>">
                <i class="iconfont headerIcon">&#xe60e;</i>
                <span>主页</span>
            </a>
        </li>
        <li>
            <a href="<?php $this->options->siteUrl(); ?>index.php/archive.html" class="navLink <?php if($this->is('page','archive')): ?>actived<?php endif; ?>">
                <i class="iconfont headerIcon">&#xe612;</i>
                <span>归档</span>
            </a>
        </li>
        <li>
            <a href="<?php $this->options->siteUrl(); ?>index.php/tags.html" class="navLink <?php if($this->is('page','tags')): ?>actived<?php endif; ?>">
                <i class="iconfont headerIcon">&#xe613;</i>
                <span>标签</span>
            </a>
        </li>
        <li>
            <a href="<?php $this->options->siteUrl(); ?>index.php/links.html" class="navLink <?php if($this->is('page','links')): ?>actived<?php endif; ?>">
                <i class="iconfont headerIcon">&#xe614;</i>
                <span>友链</span>
            </a>
        </li>
        <li>
            <a href="<?php $this->options->siteUrl(); ?>index.php/about.html" class="navLink  <?php if($this->is('page','about')): ?>actived<?php endif; ?>">
                <i class="iconfont headerIcon">&#62;_</i>
                <span>关于</span>
            </a>
        </li>
        <li>
            <div class="navLastLink">
                <a href="<?php $this->options->GitHub();?>" class="navLastLineLink" target="_blank"><i class="iconfont headerIcon">&#xe60b;</i></a>
                <a href="<?php $this->options->WeiBo();?>" class="navLastLineLink" target="_blank"><i class="iconfont headerIcon">&#xe619;</i></a>
                <a href="<?php $this->options->siteUrl(); ?>index.php/tags.html" class="navLastLineLink"><i class="iconfont headerIcon">&#xe616;</i></a>
            </div>
        </li>
        <li>
            <a href="#"><img src="<?php $this->options->UserIcon();?>" class="navIcon"></a>
        </li>
        <li>
            <span class="blogName"><?php $this->options->title() ?></span>
        </li>
        <li>
            <a href="<?php $this->options->siteUrl(); ?>" class="navLink <?php if($this->is('index')): ?>actived<?php endif; ?>">
                <i class="iconfont headerIcon">&#xe60e;</i>
                <span>主页</span>
            </a>
        </li>
        <li>
            <a href="<?php $this->options->siteUrl(); ?>index.php/archive.html" class="navLink <?php if($this->is('page','archive')): ?>actived<?php endif; ?>">
                <i class="iconfont headerIcon">&#xe612;</i>
                <span>归档</span>
            </a>
        </li>
        <li>
            <a href="<?php $this->options->siteUrl(); ?>index.php/tags.html" class="navLink <?php if($this->is('page','tags')): ?>actived<?php endif; ?>">
                <i class="iconfont headerIcon">&#xe613;</i>
                <span>标签</span>
            </a>
        </li>
        <li>
            <a href="<?php $this->options->siteUrl(); ?>index.php/links.html" class="navLink <?php if($this->is('page','links')): ?>actived<?php endif; ?>">
                <i class="iconfont headerIcon">&#xe614;</i>
                <span>友链</span>
            </a>
        </li>
        <li>
            <a href="<?php $this->options->siteUrl(); ?>index.php/about.html" class="navLink  <?php if($this->is('page','about')): ?>actived<?php endif; ?>">
                <i class="iconfont headerIcon">&#62;_</i>
                <span>关于</span>
            </a>
        </li>
        <li>
            <div class="navLastLink">
                <a href="<?php $this->options->GitHub();?>" class="navLastLineLink" target="_blank"><i class="iconfont headerIcon">&#xe60b;</i></a>
                <a href="<?php $this->options->WeiBo();?>" class="navLastLineLink" target="_blank"><i class="iconfont headerIcon">&#xe619;</i></a>
                <a href="<?php $this->options->siteUrl(); ?>index.php/tags.html" class="navLastLineLink"><i class="iconfont headerIcon">&#xe616;</i></a>
            </div>
        </li>
    </ul>
    <div class="left_mark">
        <i class="iconfont headerIcon">&#xe60c;</i>
    </div>
</nav>