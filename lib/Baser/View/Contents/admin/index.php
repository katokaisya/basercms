<?php
/**
 * [ADMIN] 検索インデックス一覧
 *
 * baserCMS :  Based Website Development Project <http://basercms.net>
 * Copyright 2008 - 2015, baserCMS Users Community <http://sites.google.com/site/baserusers/>
 *
 * @copyright		Copyright 2008 - 2015, baserCMS Users Community
 * @link			http://basercms.net baserCMS Project
 * @package			Baser.View
 * @since			baserCMS v 0.1.0
 * @license			http://basercms.net/license/index.html
 */
$this->BcBaser->js(array(
	'admin/jquery.baser_ajax_data_list',
	'admin/jquery.baser_ajax_batch',
	'admin/baser_ajax_data_list_config',
	'admin/baser_ajax_batch_config'
));
?>
<script type="text/javascript">
$(function(){
	if($("#ContentOpen").html()) {
		$("#ContentFilterBody").show();
	}
	$.baserAjaxDataList.init();
	$.baserAjaxBatch.init({ url: $("#AjaxBatchUrl").html()});
});
</script>

<div id="AjaxBatchUrl" style="display:none"><?php $this->BcBaser->url(array('controller' => 'contents', 'action' => 'ajax_batch')) ?></div>
<div id="AlertMessage" class="message" style="display:none"></div>
<div id="MessageBox" style="display:none"><div id="flashMessage" class="notice-message"></div></div>
<div id="AjaxChangePriorityUrl" class="display-none"><?php echo $this->BcBaser->url(array('action' => 'ajax_change_priority')) ?></div>
<div id="ContentOpen" class="display-none"><?php echo $this->BcForm->value('Content.open') ?></div>
<div id="DataList"><?php $this->BcBaser->element('contents/index_list') ?></div>