<?php
function themeConfig($form) { 	
	$sub = new Typecho_Widget_Helper_Form_Element_Text('sub', NULL,'个人博客', _t('网站副标题'), _t('默认内容"个人博客"'));
    $form->addInput($sub);
	
	$headerinfo = new Typecho_Widget_Helper_Form_Element_Text('headerinfo', NULL,'Carpe Diem and Do what I like', _t('头部内容'), _t('首页头部介绍'));
    $form->addInput($headerinfo);
	
    $NOTICE = new Typecho_Widget_Helper_Form_Element_Text('NOTICE', NULL,'我很荣幸的启用了Akina主题', _t('公告内容'), _t('首页公告内容'));
    $form->addInput($NOTICE);
	
	$QQ = new Typecho_Widget_Helper_Form_Element_Text('QQ', NULL,'945203919', _t('QQ号码'), _t('（自动获取空间地址）'));
    $form->addInput($QQ);
	
	$Github = new Typecho_Widget_Helper_Form_Element_Text('Github', NULL,'https://github.com/Gray-Shirt', _t('Github地址'), _t('Github主页地址（请规范填写，需https://，http://或者//）'));
    $form->addInput($Github);
	
	$SINA = new Typecho_Widget_Helper_Form_Element_Text('SINA', NULL,'https://weibo.com/', _t('新浪微博地址'), _t('默认新浪微博首页（请规范填写，需https://，http://或者//）'));
    $form->addInput($SINA);
	
	$feature1 = new Typecho_Widget_Helper_Form_Element_Text('feature1', NULL,'NULL', _t('聚焦内容1'), _t('请规范填写，需https://，http://或者//'));
    $form->addInput($feature1);
	
	$feature2 = new Typecho_Widget_Helper_Form_Element_Text('feature2', NULL,'NULL', _t('聚焦内容2'), _t('请规范填写，需https://，http://或者//'));
    $form->addInput($feature2);
	
	$feature3 = new Typecho_Widget_Helper_Form_Element_Text('feature3', NULL,'NULL', _t('聚焦内容3'), _t('请规范填写，需https://，http://或者//'));
    $form->addInput($feature3);
	
	$DNS = new Typecho_Widget_Helper_Form_Element_Text('DNS', NULL,'https://cdn.zhebk.cn', _t('DNS预解析加速'), _t('比如填写引用图片的域名（请规范填写，需https://，http://或者//）'));
    $form->addInput($DNS);
	
	$ICP = new Typecho_Widget_Helper_Form_Element_Text('ICP', NULL,'Carpe Diem and Do what I like', _t('备案号'), _t('备案号（默认内容"Carpe Diem and Do what I like"）'));
    $form->addInput($ICP);

//其他设置
    $menu = new Typecho_Widget_Helper_Form_Element_Checkbox('menu', 
    array(
	'show' => _t('一直显示菜单'),
	'page' => _t('使用ajax加载文章'),
	),
    array('page'), _t('其他设置'));
    $form->addInput($menu->multiMode());
}
//阅读次数统计
function get_post_view($archive){
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
//数据库查询相邻文章链接与标题
function queryNextPrev($mode, $widget){
    $where = $mode ? 'table.contents.created < ?' : 'table.contents.created > ?';
    $sorted = $mode ? Typecho_Db::SORT_DESC : Typecho_Db::SORT_ASC;
    $options = Helper::options();
    $db = Typecho_Db::get();
    $query = $db->select()->from('table.contents')
        ->where($where, $widget->created)
        ->where('table.contents.status = ?', 'publish')
        ->where('table.contents.type = ?', $widget->type)
        ->where('table.contents.password IS NULL')
        ->order('table.contents.created', $sorted)
        ->limit(1);
    $content = $db->fetchRow($query);
    if ($content) {
        $content = $widget->filter($content);
        $title = $content['title'];
        $link = $content['permalink'];
      
        $result = array('title' => $title, 'link' => $link);
        return $result;
    } else {
        return false;
    }
}
//输出相邻文章链接与标题
function theNextPrev($widget){
    $html = '';
    $prevResult = queryNextPrev(true, $widget);
    $nextResult = queryNextPrev(false, $widget);
    if (!$prevResult && !$nextResult) {
        //第一篇文章，什么也不需要输出
        $html .= '';
    } else if (!$nextResult) {
        $html .= '<div class="post-nepre half next" style="width:100%;"><a href="' . $prevResult["link"] . '" rel="next"><div class="background" style="background-image:url(/usr/themes/Akina/images/random/deu' . mt_rand(1,7). '.jpg);"></div><span class="label">Next Post</span><div class="info"><h3>' . $prevResult["title"] . '</h3><hr></div></a></div>';
    } else if (!$prevResult) {
        $html .= '<div class="post-nepre half previous"style="width:100%;"><a href="' . $nextResult["link"] . '" rel="prev"><div class="background" style="background-image:url(/usr/themes/Akina/images/random/deu' . mt_rand(1,7). '.jpg);"></div><span class="label">Previous Post</span><div class="info"><h3>' . $nextResult["title"] . '</h3><hr></div></a></div>';
    } else {
        $html .= '<div class="post-nepre half previous"><a href="' . $nextResult["link"] . '" rel="prev"><div class="background" style="background-image:url(/usr/themes/Akina/images/random/deu' . mt_rand(1,7). '.jpg);"></div><span class="label">Previous Post</span><div class="info"><h3>' . $nextResult["title"] . '</h3><hr></div></a></div>';
		$html .= '<div class="post-nepre half next"><a href="' . $prevResult["link"] . '" rel="next"><div class="background" style="background-image:url(/usr/themes/Akina/images/random/deu' . mt_rand(1,7). '.jpg);"></div><span class="label">Next Post</span><div class="info"><h3>' . $prevResult["title"] . '</h3><hr></div></a></div>';
    }
    echo $html;
}
//评论添加回复@标记
function get_commentReply_at($coid)
{
    $db   = Typecho_Db::get();
    $prow = $db->fetchRow($db->select('parent')->from('table.comments')
                                 ->where('coid = ? AND status = ?', $coid, 'approved'));
    $parent = $prow['parent'];
    if ($parent != "0") {
        $arow = $db->fetchRow($db->select('author')->from('table.comments')
                                     ->where('coid = ? AND status = ?', $parent, 'approved'));
        $author = $arow['author'];
        $href   = '<a href="#" rel="nofollow" class="cute atreply">@' . $author . '</a> : ';
        echo $href;
    }
}
//随机文章
function getRandomPosts($limit = 10){
    $db = Typecho_Db::get();
    $result = $db->fetchAll($db->select()->from('table.contents')
		->where('status = ?','publish')
		->where('type = ?', 'post')
		->where('created <= unix_timestamp(now())', 'post')
		->limit($limit)
		->order('RAND()')
	);
	if($result){
		foreach($result as $val){
			$val = Typecho_Widget::widget('Widget_Abstract_Contents')->push($val);
			$post_title = htmlspecialchars($val['title']);
			$permalink = $val['permalink'];
			echo '<li><a href="'.$permalink.'" title="'.$post_title.'" target="_blank">'.$post_title.'</a></li>';
		}
	}
}
?>