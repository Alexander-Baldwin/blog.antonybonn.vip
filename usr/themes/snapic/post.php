<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<body>

<div>
<div class="post" itemscope itemtype="http://schema.org/BlogPosting">

<h1 itemprop="name headline"><?php $this->title() ?></h1>

<div class="post-content" itemprop="divBody">
<?php $this->content(); ?>
</div>

<p itemprop="keywords" class="hidden"><?php $this->tags(', ', true, 'none'); ?></p>

</div>

<?php $this->need('footer.php'); ?>