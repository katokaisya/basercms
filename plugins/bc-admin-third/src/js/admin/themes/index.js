/**
 * baserCMS :  Based Website Development Project <https://basercms.net>
 * Copyright (c) baserCMS Permission Community <https://basercms.net/community/>
 *
 * @copyright     Copyright (c) baserCMS Permission Community
 * @link          https://basercms.net baserCMS Project
 * @since         5.0.0
 * @license       https://basercms.net/license/index.html MIT License
 */

$(function () {

    /**
     * タブを初期化
     */
    $("#tabs").tabs();

    /**
     * モーダル表示
     */
    $(".theme-popup").colorbox({inline: true, width: "60%"});

    /**
     * 初期データ読込ボタンを押下した際の動作
     */
    $("#BtnLoadDefaultDataPattern").click(function () {
        $.bcConfirm.show({
            'title': bcI18n.confirmTitle1,
            'message': bcI18n.confirmMessage2,
            'ok': function () {
                $.bcUtil.showLoader();
                $("#ThemeLoadDefaultDataPatternForm").submit();
            }
        });
        return false;
    });

    /**
     * マーケットのデータを取得
     */
    $.ajax({
        url: $.bcUtil.adminBaseUrl + 'baser-core/themes/get_market_themes',
        type: "GET",
        success: function (result) {
            $("#BaserMarket").html(result);
        }
    });

    /**
     * テーマ適用
     */
    $(".btn-apply").click(function(){
        if(!confirm(bcI18n.confirmMessage3)) return false;
        $.bcUtil.showLoader();
        return true;
    });

    /**
     * テーマ削除
     */
    $(".btn-delete").click(function(){
        if(!confirm(bcI18n.confirmMessage1)) return false;
        $.bcUtil.showLoader();
        return true;
    });

    /**
     * テーマコピー
     */
    $(".btn-copy").click(function(){
        $.bcUtil.showLoader();
        return true;
    });

});
