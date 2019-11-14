<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

/* 后台：管理=》文章=》编辑文章=》自定义字段 */
function themeFields($layout) {
	
	$Height = new Typecho_Widget_Helper_Form_Element_Text('Height', NULL, NULL, _t('图高'), _t('  要填入的数值=（320 × 图片高度）÷ 图片宽度'));
    $layout->addItem($Height);

}

function themeConfig($form) {
	/* 后台：控制台=》外观=》设置外观=》翻图功能 */
	$gallery = new Typecho_Widget_Helper_Form_Element_Text('gallery',NULL,'gallery',_t('翻图功能。留空为关闭；开启则填入gallery'),_t(''));
	$form->addInput($gallery);
	/* 后台：控制台=》外观=》设置外观=》尾图功能 */
	$logo = new Typecho_Widget_Helper_Form_Element_Text('logo',NULL,'hidden',_t('尾图功能。留空为打开；关闭则填入hidden'),_t('可以先自行替换主题文件夹img中的logo.png图片，建议图片比例为1:4（宽：高）。'));
	$form->addInput($logo);
	/* 后台：控制台=》外观=》设置外观=》尾图提示 */
	$tipso = new Typecho_Widget_Helper_Form_Element_Text('tipso',NULL,'The theme by Snapic',_t('尾图提示'),_t(''));
	$form->addInput($tipso);

}

//读取文章中第一张图片，代码原始出处不详，感谢原作者。
function img_thumb($cid) {   
	$db = Typecho_Db::get();   
	$rs = $db->fetchRow($db->select('table.contents.text')   
	->from('table.contents')   
	->where('table.contents.cid=?', $cid)   
	->order('table.contents.cid', Typecho_Db::SORT_ASC)   
	->limit(1));   
	$final = Typecho_Widget::widget('Widget_Abstract_Contents')->filter($rs);   
	preg_match_all("/(http:\/\/)[^>]*?.(png|jpg|gif|jpeg|bmp)/i", $final['text'], $thumbUrl); 
	$img_src = $thumbUrl[0][0];
	$img_counter = count($thumbUrl[0]); 
  switch ($img_counter > 0) {   
	case $allPics = 1:   
	echo $img_src; 
	break;   
	default:   
	echo ""; 
  };   
}  