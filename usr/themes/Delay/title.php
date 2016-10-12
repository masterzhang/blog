<header>
        <div class="icon">
            <i id="headerIconOpen" class="iconfont headerIcon" onclick="openDraw()">&#xe60a;</i>
            <i id="headerIconClose" class="iconfont headerIcon" hidden>&#xe605;</i>
        </div>
        <div class="title">
            <span><?php $this->options->title() ?></span>
        </div>
        <div class="headIcon">
            <img src="<?php $this->options->UserIcon();?>">
        </div>
    </header>
    <div id="progress"></div>