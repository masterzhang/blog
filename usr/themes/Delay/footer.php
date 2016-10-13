<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<footer>
    <div>
        <div><span>博客已萌萌哒运行<time id="life">好久好久了</time></span></div>
        <div>2016 Powered By <a href="http://typecho.org/" target="_blank">Typecho</a></div>
    </div>
</footer>
<div class="tools">
    <ul>
        <li class="up" style="display: none;" onclick="scrollToTop()">
            <div><i class="iconfont">&#xe601;</i></div>
        </li>
    </ul>
</div>
</div>
<div class="mask" onclick="closeDraw()"></div>
<script type="text/javascript">
    $(".mask").hide();
    window.onload = function () {
        window.onresize = windowChange;
        windowChange();
    }
    $(window).scroll(function (even) {
        var winPos = $(window).scrollTop();
        if (winPos == 0) {
            $(".up").fadeOut(1000);
        } else {
            $(".up").fadeIn(1000);
        }
    });
    $(function () {
        FastClick.attach(document.body);
    });
    var sidebar = document.getElementById('sidebar');
    sidebar.addEventListener('touchmove', function(event) {
          //如果这个元素的位置内只有一个手指的话
        if (event.targetTouches.length == 1) {
    　　　　 event.stopPropagation();
            }
    }, false);
    <?php
    $options = Helper::options();
    if ($options->time):?>
    function show_date_time() {
        var BirthDay = new Date("<?php $this->options->time();?>");
        var today = new Date();
        var timeold = today.getTime() - BirthDay.getTime();
        var msPerDay = 864e5;
        var e_daysold = timeold / msPerDay;
        var daysold = Math.floor(e_daysold), e_hrsold = 24 * (e_daysold - daysold);
        var hrsold = Math.floor(e_hrsold), e_minsold = 60 * (e_hrsold - hrsold);
        var minsold = Math.floor(60 * (e_hrsold - hrsold));
        var seconds = Math.floor(60 * (e_minsold - minsold));
        $('#life').text(daysold + "天" + hrsold + "小时" + minsold + "分" + seconds + "秒");
    };
    setInterval(show_date_time, 1000);
    <?php endif;?>
</script>
<script>
    $(function () {
        $("[data-toggle='tooltip']").tooltip();
    });
</script>
</body>
</html>

<?php $this->footer(); ?>
</body>
</html>
