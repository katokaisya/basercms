<?php
/* SVN FILE: $Id$ */
/**
 * [PUBLISH] ブログアーカイブ一覧
 * 
 * PHP versions 4 and 5
 *
 * BaserCMS :  Based Website Development Project <http://basercms.net>
 * Copyright 2008 - 2011, Catchup, Inc.
 *								9-5 nagao 3-chome, fukuoka-shi 
 *								fukuoka, Japan 814-0123
 *
 * @copyright		Copyright 2008 - 2011, Catchup, Inc.
 * @link			http://basercms.net BaserCMS Project
 * @package			baser.plugins.blog.views
 * @since			Baser v 0.1.0
 * @version			$Revision$
 * @modifiedby		$LastChangedBy$
 * @lastmodified	$Date$
 * @license			http://basercms.net/license/index.html
 */
$baser->css(array('/blog/css/style','colorbox/colorbox'), null, null, false);
$baser->js('jquery.colorbox-min', false);
//$baser->setTitle($this->pageTitle.'｜'.$blog->getTitle());
$baser->setDescription($blog->getTitle().'｜'.$baser->getContentsTitle().'のアーカイブ一覧です。');
?>

<script type="text/javascript">
$(function(){
	if($("a[rel='colorbox']").colorbox) $("a[rel='colorbox']").colorbox({transition:"fade"});
});
</script>

<!-- title -->
<h2 class="contents-head">
	<?php $blog->title() ?>
</h2>

<!-- archives title -->
<h3 class="contents-head">
	<?php $baser->contentsTitle() ?>
</h3>

<!-- pagination -->
<?php $baser->pagination('simple'); ?>

<!-- list -->
<?php if(!empty($posts)): ?>
	<?php foreach($posts as $post): ?>
<div class="post">
	<h4 class="contents-head">
		<?php $blog->postTitle($post) ?>
	</h4>
	<?php $blog->postContent($post,true,true) ?>
	<div class="meta"><span>
		<?php $blog->category($post) ?>
		&nbsp;
		<?php $blog->postDate($post) ?>
		&nbsp;
		<?php $blog->author($post) ?>
	</span></div>
</div>
	<?php endforeach; ?>
<?php else: ?>
<p class="no-data">記事がありません。</p>
<?php endif; ?>

<!-- pagination -->
<?php $baser->pagination('simple'); ?>