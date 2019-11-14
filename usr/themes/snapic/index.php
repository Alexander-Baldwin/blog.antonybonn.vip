<?php
/**
 * Snapic Theme
 * 
 * @package Snapic 
 * @author Lopown
 * @version 2.0
 * @link http://www.lopwon.com
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<body>
<div>
<div class="tiles" id="wookmark">
<ul>
<?php if ($this->have()): ?>
<?php while($this->next()): ?>
<div itemscope itemtype="http://schema.org/BlogPosting">
<?php if (($this->sequence == 1)): ?>
<li itemprop="divBody"><!-- 文章置顶部-->
<h2 class="category-title hidden" itemprop="name headline"><?php $this->title() ?></h2>
<a class="fancybox" href="<?php echo img_thumb($this->cid); ?>"><img class="gray" src="<?php echo img_thumb($this->cid); ?>" alt="<?php $this->title() ?>" width="320" height="<?php if (isset($this->fields->Height)): ?><?php $this->fields->Height(); ?><?php endif; ?>" /></a>
<a><p><?php $this->excerpt(255, '......'); ?></p></a>
</li>
<?php else: ?>
<li itemprop="divBody">
<h2 class="category-title hidden" itemprop="name headline"><?php $this->title() ?></h2>
<a class="fancybox" data-fancybox-group="<?php $this->options->gallery(); ?>" href="<?php echo img_thumb($this->cid); ?>"><img class="gray" src="<?php $this->options->themeUrl('img/grey.gif'); ?>" data-original="<?php echo img_thumb($this->cid); ?>" alt="<?php $this->title() ?>" width="320" height="<?php if (isset($this->fields->Height)): ?><?php $this->fields->Height(); ?><?php endif; ?>" /></a>
<a><p><?php $this->excerpt(255, '......'); ?></p></a>
</li>
<?php endif; ?>
</div>
<?php endwhile; ?>
</ul>
<?php else: ?>
<div>

<h3 class="hidden"><?php _e('没有找到内容'); ?></h3>

</div>
<?php endif; ?>

</div>
<?php $this->pageNav('-', '+', '1', '…'); ?>

<?php $this->need('footer.php'); ?>