<?php
/**
 * 时间归档
 *
 * @package custom
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
<body class="archive">
<?php $this->need('nav.php'); ?>
<div class="main">
    <?php $this->need('title.php'); ?>
    <section>
        <h1><?php $this->title() ?></h1>
        <?php $this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->to($archives);
        $year = 0;
        $mon = 0;
        $output = '';
        while ($archives->next()):
            $year_tmp = date('Y', $archives->created);
            $mon_tmp = date('m', $archives->created);
            $day_tmp = date('d', $archives->created);
            if ($mon != $mon_tmp && $mon > 0) $output .= '</ul></div>';
            if ($year != $year_tmp && $year > 0) $output .= '</div>';
            if ($year != $year_tmp) {
                $year = $year_tmp;
                $output .= ' <div><h3>' . $year . '&nbsp;&nbsp;年</h3>'; //输出年份
                if ($mon == $mon_tmp) {
                    $year = $year_tmp;
                    $mon = $mon_tmp;
                    $output .= '<div class="section">
                <h4>'.$mon.'&nbsp;&nbsp;月</h4>
                <ul>'; //输出月份
                }


            }

            if ($mon != $mon_tmp) {

                $year = $year_tmp;
                $mon = $mon_tmp;
                $output .= '<div class="section">
                <h4>'.$mon.'&nbsp;&nbsp;月</h4>
                <ul>'; //输出月份
            }


            $output .= '<li>
                        <i class="iconfont">&#xe603;</i>
                        <a href="'.$archives->permalink .'">'. $archives->title .'</a>
                        <span>'.$year.'年'.$mon.'月'.$day_tmp.'日</span>
                    </li>'; //输出文章日期和标题
        endwhile;
        $output .= '</div>';
        echo $output;
        ?>
    </section>
    <?php $this->need('footer.php'); ?>
