(()=>{
/**
 * baserCMS :  Based Website Development Project <https://basercms.net>
 * Copyright (c) NPO baser foundation <https://baserfoundation.org/>
 *
 * @copyright     Copyright (c) NPO baser foundation
 * @link          https://basercms.net baserCMS Project
 * @since         5.0.0
 * @license       https://basercms.net/license/index.html MIT License
 */
var a={commentApprove:!1,authCaptcha:!1,captchaId:null,mounted:function(){var t=$("#BlogCommentsScripts");a.commentApprove=t.attr("data-commentApprove"),a.authCaptcha=t.attr("data-authCaptcha"),a.captchaId=t.attr("data-captchaId"),a.initView(),a.registerEvents()},registerEvents:function(){$("#BlogCommentAddButton").on("click",(function(){return a.validate()&&a.sendComment(),!1}))},initView:function(){a.authCaptcha&&a.loadAuthCaptcha(),$("#name").val(""),$("#email").val(""),$("#url").val(""),$("#message").val("")},sendComment:function(){$("#BlogCommentAddButton").prop("disabled",!0),$.bcToken.check((function(){var t=$("#BlogCommentAddForm");return t.find('input[name="_csrfToken"]').remove(),t.append($.bcToken.getHiddenToken()),$.ajax({url:$.bcUtil.baseUrl+"/bc-blog/blog/ajax_add_comment",type:"POST",data:t.serialize(),dataType:"html",beforeSend:function(){$("#ResultMessage").slideUp()},success:function(t){if(t){a.initView(),$("#BlogCommentAuthCaptcha").val("");var e="";if(a.commentApprove)e=bcI18n.alertMessageAuthComplete,$("#ResultMessage").html(e).show();else{var n=$(t);n.hide(),$("#BlogCommentList").append(n),n.slideDown(500),location.hash=n.attr("id")}}else a.postError()},error:function(t){a.postError(t)},complete:function(){$.bcToken.key=null,$("#BlogCommentAddButton").removeAttr("disabled")}})}),{useUpdate:!1})},validate:function(){var t="";return $("#name").val()||(t+=bcI18n.alertMessageName+"\n"),$("#message").val()||(t+=bcI18n.alertMessageComment+"\n"),a.authCaptcha&&($("#auth_captcha").val()||(t+=bcI18n.alertMessageAuthImage+"\n")),!t||(alert(t),!1)},postError:function(t){a.authCaptcha&&(a.loadAuthCaptcha(),$("#BlogCommentAuthCaptcha").val("")),console.log(JSON.parse(t.responseText)),$("#ResultMessage").html(bcI18n.alertMessageError).slideDown()},loadAuthCaptcha:function(){if(a.authCaptcha){var t=Math.floor(100*Math.random()),e=$("#BlogCommentCaptchaUrl").html()+"?"+t;$("#AuthCaptchaImage").hide(),$("#CaptchaLoader").show(),$("#AuthCaptchaImage").on("load",(function(){$("#CaptchaLoader").hide(),$("#AuthCaptchaImage").fadeIn(1e3)})),$("#AuthCaptchaImage").attr("src",e)}}};a.mounted()})();
//# sourceMappingURL=blog_comment.bundle.js.map