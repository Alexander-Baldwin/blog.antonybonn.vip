<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="zh-CN"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="zh-CN"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="zh-CN">
<!--<![endif]-->

<head>
<meta charset="<?php $this->options->charset(); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<?php $this->header(); ?>
<link rel="shortcut icon" href="<?php $this->options->siteUrl('favicon.ico'); ?>" type="image/x-icon" />
<link rel="apple-touch-icon-precomposed" href="<?php $this->options->siteUrl('AppIcon.png'); ?>" />
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/style.css'); ?>" />
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/fancybox.css'); ?>" />
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/fancybox-thumbs.css'); ?>" />

<title><?php $this->archiveTitle(array(
'category'  =>  _t('%s'),
'search'    =>  _t('%s'),
'tag'       =>  _t('%s'),
'author'    =>  _t('%s')
), '', ' - '); ?><?php if($this->_currentPage>1) echo ''.$this->_currentPage.' - '; ?><?php $this->options->title(); ?></title>

<script src="<?php $this->options->themeUrl('script/jquery.min.js'); ?>"></script>

</head>
