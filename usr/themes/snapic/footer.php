<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<div class="logo <?php $this->options->logo(); ?>" id="Tipso" data-tipso="<?php $this->options->tipso(); ?>"></div>

<div class="footer">
<span class="copyright"><a href="<?php $this->options->siteUrl(); ?>">&copy; <?php echo date('Y'); ?> <?php $this->options->title(); ?></a></span>
<span class="theme"><a href="http://www.lopwon.com/snapic.html" target="new">The theme by Snapic</a></span>
<span class="powered"><a href="http://www.typecho.org/" target="new">Powered by Typecho</a></span>
</div>

<div class="search">
<a class="fancybox pointer" href="#site-search"><img src="<?php $this->options->themeUrl('img/search-o.png'); ?>" alt="search" /></a>
</div>

<div class="site-search" id="site-search">
<form id="search" method="post" action="./" role="search">
<label class="sr-only"></label>
<input type="text" name="s" class="text" placeholder="<?php _e('输入关键词搜索'); ?>" onfocus="this.placeholder='';" onblur="if(this.placeholder.length < 1) this.placeholder='<?php _e('输入关键词搜索'); ?>';" />
<button type="submit" class="submit pointer"></button>
</form>
</div>

<?php $this->footer(); ?>
</div>

<script src="<?php $this->options->themeUrl('script/jquery.imagesloaded.js'); ?>"></script><!-- 图片版式 -->
<script src="<?php $this->options->themeUrl('script/jquery.wookmark.js'); ?>"></script>
<script>
(function ($){
$('.tiles').imagesLoaded(function() {
var options = {
autoResize: true,
container: $('#wookmark'), 
offset: 15, //图片间距
itemWidth: 320, //图片宽度，此值改变后，需要同时变更多处数值，不建议修改。
fillEmptySpace: true
};
var handler = $('.tiles li');
handler.wookmark(options);
});
})(jQuery);
</script>

<script src="<?php $this->options->themeUrl('script/jquery.lazyload.min.js'); ?>"></script><!-- 图片加载 -->
<script src="<?php $this->options->themeUrl('script/jquery.scrollstop.js'); ?>"></script>
<script>
$(function() {
$("img").lazyload({
effect : "fadeIn"
});
});
</script>

<script src="<?php $this->options->themeUrl('script/jquery.fancybox.js'); ?>"></script><!-- 图片灯箱 -->
<script src="<?php $this->options->themeUrl('script/jquery.fancybox-thumbs.js'); ?>"></script>
<script>
$(document).ready(function() {
$(".fancybox").fancybox();
$(".fancybox-thumb").fancybox({helpers:{thumbs:{width:80,height:60}}});
});
</script>

<script src="<?php $this->options->themeUrl('script/tipso.min.js'); ?>"></script><!-- 链接提示 -->
<script>
$(function() {
$('#Tipso').tipso({useTitle: false,background: '#fff',color: '#000',width: 150,});
});
</script>

<script src="<?php $this->options->themeUrl('script/jquery.ui.totop.js'); ?>"></script><!-- 返回顶部 -->
<script>
jQuery(window).load(function(){
jQuery().UItoTop({ scrollSpeed: 350});
});
</script>

</body>
</html>