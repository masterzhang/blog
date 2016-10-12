<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO'));
    $form->addInput($logoUrl);
    $UserIcon = new Typecho_Widget_Helper_Form_Element_Text('UserIcon', NULL, NULL, _t('用户头像地址'), _t('在这里填入一个图片URL地址, 用于显示博主的头像'));
    $form->addInput($UserIcon);
    $GitHub = new Typecho_Widget_Helper_Form_Element_Text('GitHub', NULL, NULL, _t('GitHub地址'), _t('在这里填入GitHub地址'));
    $form->addInput($GitHub);
    $WeiBo = new Typecho_Widget_Helper_Form_Element_Text('WeiBo', NULL, NULL, _t('微博地址'), _t('在这里填入微博地址'));
    $form->addInput($WeiBo);
    $aboutMid = new Typecho_Widget_Helper_Form_Element_Text('aboutMid', NULL, NULL, _t('站点历史分类的Mid'), _t('站点历史分类的Cid，可以进入【管理->分类->选择你要作为站点历史的分类->点击该分类->在地址的最后你可以找到到该id】'));
    $form->addInput($aboutMid);
    $doushuo = new Typecho_Widget_Helper_Form_Element_Text('duoshuo', NULL, NULL, _t('多说后台的short_name'), _t('多说后台的short_name.不设置则不开启评论.可以进入多说后台【工具->获取代码->通用代码->在第七行获取】'));
    $form->addInput($doushuo);
    $time = new Typecho_Widget_Helper_Form_Element_Text('time', NULL, '2016/10/12', _t('博客成立时间'), _t('在这里填入博客的成立时间,格式要求，完整如填入“2015/06/06 00:00:00”或者只填写年月日“2015/06/06”。不填则不进行计时'));
    $form->addInput($time);

    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', 
    array('ShowRecentPosts' => _t('显示最新文章'),
    'ShowRecentComments' => _t('显示最近回复'),
    'ShowCategory' => _t('显示分类'),
    'ShowArchive' => _t('显示归档'),
    'ShowOther' => _t('显示其它杂项')),
    array('ShowRecentPosts', 'ShowRecentComments', 'ShowCategory', 'ShowArchive', 'ShowOther'), _t('侧边栏显示'));
    
    $form->addInput($sidebarBlock->multiMode());
}

function theNext($widget, $default = NULL)
{
$db = Typecho_Db::get();
$sql = $db->select()->from('table.contents')
->where('table.contents.created > ?', $widget->created)
->where('table.contents.status = ?', 'publish')
->where('table.contents.type = ?', $widget->type)
->where('table.contents.password IS NULL')
->order('table.contents.created', Typecho_Db::SORT_ASC)
->limit(1);
$content = $db->fetchRow($sql);

if ($content) {
$content = $widget->filter($content);
$link = '<a href="' . $content['permalink'] . '" title="' . $content['title'] . '" data-toggle="tooltip" data-placement="top">下一篇&nbsp;&nbsp;&gt;</a>';
echo $link;
} else {
$link = '<a href="#" title="没有更多" data-toggle="tooltip" data-placement="top">NEXT&nbsp;&nbsp;&gt;</a>';
echo $link;
}
}

/**
* 显示上一篇
*
* @access public
* @param string $default 如果没有下一篇,显示的默认文字
* @return void
*/
function thePrev($widget, $default = NULL)
{
$db = Typecho_Db::get();
$sql = $db->select()->from('table.contents')
->where('table.contents.created < ?', $widget->created)
->where('table.contents.status = ?', 'publish')
->where('table.contents.type = ?', $widget->type)
->where('table.contents.password IS NULL')
->order('table.contents.created', Typecho_Db::SORT_DESC)
->limit(1);
$content = $db->fetchRow($sql);

if ($content) {
$content = $widget->filter($content);
$link = '<a href="' . $content['permalink'] . '" title="' . $content['title'] . '"  data-toggle="tooltip" data-placement="top">&lt;&nbsp;&nbsp;上一篇</a>';
echo $link;
} else {
$link = '<a href="#" title="没有更多"  data-toggle="tooltip" data-placement="top">&lt;&nbsp;&nbsp;PREVIOUS</a>';
echo $link;
}
}


/*文章阅读次数含cookie*/
function get_post_view($archive)
{
    $cid    = $archive->cid;
    $db     = Typecho_Db::get();
    $prefix = $db->getPrefix();
    if (!array_key_exists('views', $db->fetchRow($db->select()->from('table.contents')))) {
        $db->query('ALTER TABLE `' . $prefix . 'contents` ADD `views` INT(10) DEFAULT 0;');
        echo 0;
        return;
    }
    $row = $db->fetchRow($db->select('views')->from('table.contents')->where('cid = ?', $cid));
    if ($archive->is('single')) {
 $views = Typecho_Cookie::get('extend_contents_views');
        if(empty($views)){
            $views = array();
        }else{
            $views = explode(',', $views);
        }
if(!in_array($cid,$views)){
       $db->query($db->update('table.contents')->rows(array('views' => (int) $row['views'] + 1))->where('cid = ?', $cid));
array_push($views, $cid);
            $views = implode(',', $views);
            Typecho_Cookie::set('extend_contents_views', $views); //记录查看cookie
        }
    }
    echo $row['views'];
}

