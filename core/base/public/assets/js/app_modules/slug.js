$(document).ready(function(){$("#change_slug").click(function(){$(".default-slug").unwrap(),$("#editable-post-name").html('<input type="text" id="new-post-slug" class="form-control" value="'+$("#editable-post-name").text()+'" autocomplete="off">'),$("#edit-slug-box .cancel").show(),$("#edit-slug-box .save").show(),$(this).hide()}),$("#edit-slug-box .cancel").click(function(){var e=$("#current-slug").val();$("#sample-permalink").html('<a class="permalink" href="'+$("#object_id").data("view")+"?slug="+e+'">'+$("#sample-permalink").html()+"</a>"),$("#editable-post-name").text(e),$("#edit-slug-box .cancel").hide(),$("#edit-slug-box .save").hide(),$("#change_slug").show()}),$("#edit-slug-box .save").click(function(){var a=$("#new-post-slug").val(),l=$("#object_id").data("id");null==l&&(l=0),null!=a&&""!=a?e(a,l,!1):$("#new-post-slug").closest(".form-group").addClass("has-error")}),$("#name").blur(function(){if($("#edit-slug-box").hasClass("hidden")){var a=$("#name").val();null!=a&&""!=a&&e(a,0,!0)}});var e=function(e,a,l){$.ajax({url:$("#object_id").data("url"),type:"POST",data:{name:e,id:a},success:function(e){l?$("#sample-permalink .permalink").prop("href",$("#object_id").data("view")+"?slug="+e):$("#sample-permalink").html('<a class="permalink" target="_blank" href="'+$("#object_id").data("view")+"?slug="+e+'">'+$("#sample-permalink").html()+"</a>"),$("#editable-post-name").text(e),$("#current-slug").val(e),$("#edit-slug-box .cancel").hide(),$("#edit-slug-box .save").hide(),$("#change_slug").show(),$("#edit-slug-box").removeClass("hidden")},error:function(e){Botble.handleError(e)}})}});