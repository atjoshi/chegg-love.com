<?php
/**
 * Description of View
 *
 * @author      ben <ben@chegg.com>
 * @copyright   2013 Chegg INC
 * @link        http://mkp.chegg.com
 * @license     http://mkp.chegg.com/license
 * @version     1.0.0
 * @package     Msportal
 *
 */

namespace Lovecom\Page\Sample;

class View extends \Lovecom\Mvc\BaseView{
    protected function doInit()
    {
        
    }

    public function render()
    {
        print <<<HTML

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml" lang="en">
<head>
<base href="http://us.coca-cola.com/" target="_blank">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" />

<meta property="fb:admins" content="557226013"/>
<meta property="og:type" content="website" />
<meta property="og:site_name" content="My Coke Rewards" />
<meta property="og:title" content="Coca-Cola Arctic Home" />

<meta property="og:image" content="http://www.mycokerewards.com/cms/experiences/arcticHome/html/coke-ah-fbicon.jpg" />
<title>Coca-Cola</title>




<script src="http://us.coca-cola.com/js/jquery1.8.0.min.js" type="text/javascript"></script>
<script src="http://us.coca-cola.com/js/jquery-ui.js"></script>
<script type="text/javascript" src="http://us.coca-cola.com/js/jquery.validate.min.js"></script>
<script src="http://us.coca-cola.com/js/swfobject.js" type="text/javascript"></script>
<script src="http://us.coca-cola.com/js/jquery.countdown.js" type="text/javascript"></script>
<script type="text/javascript" src="http://us.coca-cola.com/js/jquery.simplemodal.1.4.3.min.js"></script>
<script src="http://us.coca-cola.com/js/jquery.mCustomScrollbar.js" type="text/javascript"></script>
<script src="http://us.coca-cola.com/js/jquery.jcarousel.min.js" type="text/javascript"></script>
<script src="http://us.coca-cola.com/js/jquery.marquee.js" type="text/javascript"></script>
<script src="http://us.coca-cola.com/js/modernizer.js" type="text/javascript"></script>
<script type="text/javascript" src="http://us.coca-cola.com/js/jquery.cookie.js"></script>
<script type="text/javascript" src="http://us.coca-cola.com/flex-mod/desktop/cokered/common/cokered.js"></script>

<!-- include script here -->
<script type="text/javascript">
var ord=Math.random()*10000000000000000;
var isWirelessDevice= 'false';
function checkMonster() {
	if ($("#ad_r2_wrapper > div").eq(0).css("width")=="945px") {
	$("#ad_r2_wrapper").css("padding-right","0px");
	$("#ad_r3_wrapper").hide();
	$("#ad_r4_wrapper").hide(); 
	}
}
jQuery.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[a-z]+$/i.test(value);
    }, "");
jQuery.validator.addMethod("notXss", function(value, element) {
        return this.optional(element) || ! /\(|\)|>|<|\'/i.test(value);
    }, "Special characters are not allowed");     
jQuery.validator.addMethod("alphanumeric", function(value, element) {
        return this.optional(element) || /^\w+$/i.test(value);
    }, "");
jQuery.validator.addMethod("nopobox", function(value, element) {
        return this.optional(element) || ! /(P(OST)?\.?\s*O(FF(ICE)?)?\.?\s*((BOX)|(BIN)))|(^[^0-9]*((P(OST)?\.?\s*O(FF(ICE)?)?\.?)?\s((BOX)|(BIN))))/i.test(value);
    }, "");
jQuery.validator.addMethod("validdob", function(value, element) {
        var monthVal = $("#regMonth").val();
        var yearVal = $("#regYear").val();
        if( (monthVal == 2) && (value == 29) ) {
          return ((yearVal % 4) == 0);
        } else {
          var dob = String(monthVal) + String(value);
          return this.optional(element) || ! /(((04)|(06)|(09)|(11))31)|(023.)/.test(dob);
        }
    }, "");

jQuery.validator.addMethod("selectionRequired", function(value, element) {
        var elementVal = $(element).val();
        if( (elementVal == null ) ||  (elementVal == "" )) {
          	return false;
        } else {
			return true;
        }
    }, "");

jQuery.validator.addMethod("validdobcu", function(value, element) {
        var monthVal = $("#regMonthCU").val();
        var yearVal = $("#regYearCU").val();
        if( (monthVal == 2) && (value == 29) ) {
          return ((yearVal % 4) == 0);
        } else {
          var dob = String(monthVal) + String(value);
          return this.optional(element) || ! /(((04)|(06)|(09)|(11))31)|(023.)/.test(dob);
        }
    }, "");

jQuery.validator.addMethod("password", function(value, element) {
		return this.optional(element) || ! /\||\s/i.test(value);
	}, "");
jQuery.validator.addMethod("names", function(value, element) {
		return this.optional(element) || ! /\|/i.test(value);
	}, "");
jQuery.validator.addMethod("completephone", function(value, element) {
		var area = $("#mobilePhone1").val();
		var exch = $("#mobilePhone2").val();
		var numb = $("#mobilePhone3").val();
		return this.optional(element) || (((area == "") && (exch == "") && (numb == ""))||((area != "") && (exch != "") && (numb != "")));
	}, "");
jQuery.validator.addMethod("completephoneupdate", function(value, element) {
		var area = $("#phone1").val();
		var exch = $("#phone2").val();
		var numb = $("#phone3").val();
		return this.optional(element) || (((area == "") && (exch == "") && (numb == ""))||((area != "") && (exch != "") && (numb != "")));
	}, "");
popupWindow = function(url, isPopUp, pWidth, pHeight) {
 if (isPopUp) {
   pWidth = typeof(pWidth) == 'undefined' ? 650 : pWidth;
   pHeight = typeof(pHeight) == 'undefined' ? 500 : pHeight;
   var newWindow = window.open(url,'','status=yes,left=350,top=250,location=no,scrollbars=yes,toolbar=no,menubar=no,resizable=yes,width=' + pWidth + ',height=' + pHeight);
   if (window.focus) { newWindow.focus(); }
   } else { window.location=url; }
 }
 jQuery.preloadImages = function()
{
  for(var i = 0; i<arguments.length; i++)
  {
    jQuery("<img>").attr("src", arguments[i]);
  }
}
$.preloadImages("http://us.coca-cola.com/flex-mod/desktop/cokered/images/waitDisk.gif",
	"http://us.coca-cola.com/flex-mod/desktop/cokered/images/waitDisk.gif",
	"http://us.coca-cola.com/flex-mod/desktop/cokered/images/nNav_eb_active_bg.gif",
	"http://us.coca-cola.com/flex-mod/desktop/cokered/images/nNav_hiw_active_bg.gif",
	"http://us.coca-cola.com/flex-mod/desktop/cokered/images/nNav_op_active_bg.gif",
	"http://us.coca-cola.com/flex-mod/desktop/cokered/images/nNav_rc_active_bg.gif",
	"http://us.coca-cola.com/flex-mod/desktop/cokered/images/nNav_schools_active_bg.gif"
);
 $(document).ready(function(){
   setTimeout("checkMonster()",1000);
 	var cookieTemp = $.cookie("mcrRewardCode");
 	if ((cookieTemp != null) && (cookieTemp != ""))
		$("#rewardCode").val(cookieTemp);
  

  });
  var lazyList = new Array();
  function lazyRegister(funName) {
  	lazyList.push(funName);
  }
  function lazyCall() {
  	fullLazy = lazyList.length;
  	for (i=0;i<fullLazy;i++)
	{
		window[lazyList[i]]();
	}
  }
function openSigninPop(email) {
	if (email!="none") {
	$("#connectEmail").val(email);
	$("#connectEmailListing").text(email);
	}
	$("#connectAccountsPop").modal({
		close:false
	});	
}
function showConsumerCare() {
	alert('Call Consumer Care at 1-866-674-2653 for accessibility assistance');
}
function fireFacebook() {
		var x = self.screenLeft || self.screenX;
		var y = self.screenTop || self.screenY;
		x = x + 70;
		y = y + 120;
        signinWin = window.open("", "SignIn", "width=625,height=360,toolbar=0,scrollbars=0,status=0,resizable=0,location=0,menuBar=0,left="+x+"px,top="+y+"px");
        signinWin.focus();
        setTimeout("refreshFacebook()",1000);
        document.body.style.cursor = "wait";
    }
function refreshFacebook() {
	if (signinWin.closed) {
		$.ajax({
			type:"GET",
			url:"http://us.coca-cola.com/social/facebook/status",
			timeout:30000,
			dataType:"json",
			success:function(responseSet){
				document.body.style.cursor = "auto";
				responseCode = responseSet.responseCode;
				switch(responseCode) {
					case "REDIRECT":
						setTimeout("window.location.href = '" + responseSet.redirectUrl + "'",600); 
						break;
					case "PROMPT_SIGNIN": 
						openSigninPop(responseSet.email); 
						break;
					case "EMAIL_ADDRESS_FOUND":
						dcsMultiTrack("DCS.dcsuri","/home","WT.ti","Facebook Connect Error"); 
						setTimeout("window.location.href = '" + responseSet.redirectUrl + "'",600); 
						break;
					case "REGISTRATION":  
						setTimeout("window.location.href = '" + responseSet.redirectUrl + "'",600); 
						break;
					case "ERROR":
						dcsMultiTrack("DCS.dcsuri","/home","WT.ti","Facebook Connect Error"); 
						break;
					case "DENIED_PERMISSION": 
						dcsMultiTrack("DCS.dcsuri","/home","WT.ti","Facebook Connect","WT.z_fb","5"); 
						break;
					case "SUCCESSFUL_LOGIN": 
						dcsMultiTrack("DCS.dcsuri","/home","WT.ti","Facebook Connect","WT.z_fb","1","WT.z_fbauth", "1"); 
						setTimeout("window.location.reload();",600); 
						break;
					case "EXISTING_FB_CHANNEL_FOUND": 						 
						launchFacebookReplacePrompt(responseSet); 
						break;
					case "COMPLETE_LOGIN_REQUIRED":
						window.location.href = responseSet.redirectUrl;
						break;						
					case "SUCCESSFULLY_UPDATED_EXISTING_CHANNEL": 
						dcsMultiTrack("DCS.dcsuri","/home","WT.ti","Facebook Connect","WT.z_fb","6"); 
						setTimeout("window.location.reload();",600);
						break;
					case "SUCCESSFUL_INITIAL_CONNECT": 
						dcsMultiTrack("DCS.dcsuri","/home","WT.ti","Facebook Connect","WT.z_fb","2"); 
						setTimeout("window.location.reload();",600);			
						break;
					case "SUCCESSFUL_CONNECT": 
						setTimeout("window.location.reload();",600);
						break;						
					default: 
						dcsMultiTrack("DCS.dcsuri","/home","WT.ti","Facebook Connect Error"); 
						break;
				}
			},
			error:function(){
				document.body.style.cursor = "auto";
				/* dcsMultiTrack(error);*/
			}
		});
	} else {
 		setTimeout("refreshFacebook()",500);
	}
}
function launchFacebookReplacePrompt(responseSet) {
	$("#facebookReplacePoPFirstName").html(responseSet.currentFbUserName);
	$("#facebookReplacePoPFirstImage").attr("src",responseSet.currentFbUserImageUrl);
	$("#facebookReplacePoPSecondName").html(responseSet.newFbUserName);
	$("#facebookReplacePoPSecondImage").attr("src",responseSet.newFbUserImageUrl);
	$("#facebookReplacePop").modal({close: false});
}  
 function lazyRemove(funName) {
  <!-- Commenting if as indexOf is not supported by IE. It seems JS 1.5 version is used -->
  <!-- if (lazyList.indexOf(funName)>=0) -->
   for (var i = 0;i<lazyList.length;i++)
   {
   		if (lazyList[i] == funName)
			{
	  		lazyList.splice(i,1);
	  		break;
		}
 	}
  }
  $(window).keydown(function(e){
		if( e.which == 27 )
		$.modal.close();
	});
  function showAlertPop(header, title, text) {
  		$("#alertPopBodyText span").remove();
  		$("#alertPopHeaderText span").remove();
  		$("#alertPopTitleText span").remove();
  		$("#alertPopHeaderText").append("<span id='alertPopHeaderTextLiner'></span>");
  		$("#alertPopHeaderTextLiner").html(header);
  		$("#alertPopTitleText").append("<span id='alertPopTitleTextLiner'></span>");
  		$("#alertPopTitleTextLiner").html(title);
  		$("#alertPopBodyText").append("<span id='alertPopBodyTextLiner'></span>");
  		$("#alertPopBodyTextLiner").html(text);
  		$("#alertPop").modal({close: false,
  			onShow: function (dialog) {
  				dialog.container.draggable({handle: 'div#alertPopTop', cursor: 'move'});
  			}
  		});
  	}
	function markAlertRead(alertId, messageId) {
		$.ajax({
			type: "POST",
			data: "alertId="+alertId+"&messageId="+messageId,
			url: "markAlertRead.do"
		});
	}
	function thisMovie(movieName) {
			if (navigator.appName.indexOf("Microsoft") != -1) {
					return window[movieName]
			}
			else {
					return document[movieName]
			}
	}
	function resetSendMyselfEmailCaptcha() {
		path = "/captchaImage?" + Math.random()*100000000;
		$("#sendEmailCaptcha").attr("src",path);
	}	
	function sendMyselfEmail(lbeID, url, paramList) {

		if (paramList != null && paramList.length > 0) {
		joinedList = paramList.join();
		} else {
		joinedList = "";
		}
		$.ajax({
			url: "https://us.coca-cola.com/sendMyselfEmail.do?lbeId="+lbeID+"&pageURL="+url+"&paramList="+joinedList,
			type: "GET",
			dataType: "jsonp",
			success: function(html) {
				$("#sendMyselfInfoPop").html(html);
				$("#lbeIdEmail").val(lbeID);
				$("#pageURLEmail").val(url);
				$("#paramListEmail").val(paramList);
				$("#sendMyselfEmail").validate({
					errorClass: "formError",
					errorContainer: "textAFriendFormError",
					errorLabelContainer: "#textAFriendFormError",
					onfocusout: false,
					wrapper: "li style='list-style-type: none;'",
					rules: {
						securityKey: {
							required: true
						},
						referEmail01: {
							required: true,
							email: true
						}
					},					
					messages: {
						securityKey: {
							required: "Oops - the security key is required"
						},
						referEmail01: {
							required: "Oops - the email address is required",
							email: "Oops - email address is not a proper format"
						}											
					},
					submitHandler: function(form) {
						$("#sendMyselfEmailSubmitBtn").attr("disabled","disabled");
						document.body.style.cursor = "wait";
						jsonWithFrameSubmit({
							form: form,
							postUrl: 'https://us.coca-cola.com/sendMyselfEmail.do',
							getUrl: '/sendMyselfEmailResponse.do',
							dataType: 'html',
							success: function(data) {
								sendMyselfEmailResponse(data);
							},
							error: function(data) {
								sendMyselfEmailError();
								document.body.style.cursor = "auto";
								$("#sendMyselfEmailSubmitBtn").removeAttr("disabled");
							}
						});
					}
				});
				$("#sendMyselfInfoPop").modal({ close: false,
					onShow: function (dialog) {
						dialog.container.draggable({handle: 'div#textAFriendHandle,div', cursor: 'move'});
					}
				});				
				}
			});		
	}
	function sendMyselfEmailResponse(responsehtml) {
		document.body.style.cursor = "auto";
		$("#sendMyselfEmailSubmitBtn").removeAttr("disabled");
		$("#sendMyselfInfoPop").html(responsehtml);
				$("#sendMyselfEmail").validate({
					errorClass: "formError",
					errorContainer: "textAFriendFormError",
					errorLabelContainer: "#textAFriendFormError",
					onfocusout: false,
					wrapper: "li style='list-style-type: none;'",
					rules: {
						securityKey: {
							required: true
						},
						referEmail01: {
							required: true,
							email: true
						}
					},					
					messages: {
						securityKey: {
							required: "Oops - the security key is required"
						},
						referEmail01: {
							required: "Oops - the email address is required",
							email: "Oops - email address is not a proper format"
						}											
					},
					submitHandler: function(form) {
						$("#sendMyselfEmailSubmitBtn").attr("disabled","disabled");
						document.body.style.cursor = "wait";
						jsonWithFrameSubmit({
							form: form,
							postUrl: 'https://us.coca-cola.com/sendMyselfEmail.do',
							getUrl: '/sendMyselfEmailResponse.do',
							dataType: 'html',
							success: function(data) {
								sendMyselfEmailResponse(data);
							},
							error: function(data) {
								sendMyselfEmailError();
								document.body.style.cursor = "auto";
								$("#sendMyselfEmailSubmitBtn").removeAttr("disabled");
							}
						});
					}
		});
		trackWebtrends('z_engage', 'Send+Myself+Email+Completion');
	}

	function textAFriend(lbeID, url, paramList) {

		if (paramList != null && paramList.length > 0) {
		joinedList = paramList.join();
		} else {
		joinedList = "";
		}
		$.ajax({
			url: "https://us.coca-cola.com/textAFriend.do?lbeId="+lbeID+"&pageURL="+url+"&paramList="+joinedList,
			type: "GET",
			dataType: "jsonp",
			success: function(html) {
				$("#textInfoPop").html(html);
				$("#lbeId").val(lbeID);
				$("#pageURL").val(url);
				$("#paramList").val(paramList);
				$("#textAFriend").validate({
					errorClass: "formError",
					errorContainer: "textAFriendFormError",
					errorLabelContainer: "#textAFriendFormError",
					onfocusout: false,
					wrapper: "li style='list-style-type: none;'",
					rules: {
						securityKey: {
							required: true
						},
						textPhone1: {
							minlength: 3,
							maxlength: 3,
							required: true,
							digits: true
						},
						textPhone2: {
							minlength: 3,
							maxlength: 3,
							required: true,
							digits: true
						},
						textPhone3: {
							minlength: 4,
							maxlength: 4,
							required: true,
							digits: true
						}
					},					
					messages: {
						securityKey: {
							required: "Oops - the security key is required"
						},
						textPhone1: {
							required: "Oops - the phone number is required",
							minlength: "Oops - the phone number is incomplete",
							digits: "Oops - the phone number must be all digits"
						},
						textPhone2: {
							required: "Oops - the phone number is required",
							minlength: "Oops - the phone number is incomplete",
							digits: "Oops - the phone number must be all digits"
						},
						textPhone3: {
							required: "Oops - the phone number is required",
							minlength: "Oops - the phone number is incomplete",
							digits: "Oops - the phone number must be all digits"
						}												
					},
					groups: {
						phone: "textPhone1 textPhone2 textPhone3"
					},
					submitHandler: function(form) {
						$("#textAFriendSubmitBtn").attr("disabled","disabled");
						document.body.style.cursor = "wait";
						jsonWithFrameSubmit({
							form: form,
							postUrl: 'https://us.coca-cola.com/textAFriend.do',
							getUrl: '/textAFriendResponse.do',
							dataType: 'html',
							success: function(data) {
								textAFriendResponse(data);
							},
							error: function(data) {
								textAFriendError();
								document.body.style.cursor = "auto";
								$("#textAFriendSubmitBtn").removeAttr("disabled");
							}
						});
					}
				});
				$("#textInfoPop").modal({ close: false,
					onShow: function (dialog) {
						dialog.container.draggable({handle: 'div#textAFriendHandle,div', cursor: 'move'});
					}
				});				
				}
			});		
	}
	function textAFriendResponse(responsehtml) {
		document.body.style.cursor = "auto";
		$("#textAFriendSubmitBtn").removeAttr("disabled");
		$("#textInfoPop").html(responsehtml);
		$("#textAFriend").validate({
			errorClass: "formError",
			errorContainer: "textAFriendFormError",
			errorLabelContainer: "#textAFriendFormError",
			onfocusout: false,
			wrapper: 'li',
			rules: {
				securityKey: {
					required: true
				},
				textPhone1: {
					minlength: 3,
					maxlength: 3,
					required: true,
					digits: true
				},
				textPhone2: {
					minlength: 3,
					maxlength: 3,
					required: true,
					digits: true
				},
				textPhone3: {
					minlength: 4,
					maxlength: 4,
					required: true,
					digits: true
				}
			},
			messages: {
				securityKey: {
					required: "Oops - the security key is required"
				},
				textPhone1: {
					required: "Oops - the phone number is required",
					minlength: "Oops - the phone number is incomplete",
					digits: "Oops - the phone number must be all digits"
				},
				textPhone2: {
					required: "Oops - the phone number is required",
					minlength: "Oops - the phone number is incomplete",
					digits: "Oops - the phone number must be all digits"
				},
				textPhone3: {
					required: "Oops - the phone number is required",
					minlength: "Oops - the phone number is incomplete",
					digits: "Oops - the phone number must be all digits"
				}			
			},
			groups: {
				phone: "textPhone1 textPhone2 textPhone3"
			},
			submitHandler: function(form) {
				document.body.style.cursor = "wait";
				$("#textAFriendSubmitBtn").attr("disabled","disabled");
				jsonWithFrameSubmit({
					form: form,
					postUrl: 'https://us.coca-cola.com/textAFriend.do',
					getUrl: '/textAFriendResponse.do',
					dataType: 'html',
					success: function(data) {
						textAFriendResponse(data);
					},
					error: function(data) {
						textAFriendError();
						document.body.style.cursor = "auto";
						$("#textAFriendSubmitBtn").removeAttr("disabled");
					}
				});
			}
		});
		trackWebtrends('z_engage', 'Text+A+Friend+Completion');
	}
	function tellAFriend() {
	  if (false) {
		$.ajax({
			url: "https://us.coca-cola.com/referAFriend.do",
			type: "GET",
			dataType: "jsonp",
			success: function(html) {
				$("#tellInfoPop").html(html);

				$('#emailToName2').keyup(function () {
                   if ($(this).val()) {
                $('#emailToAddress2').addClass('required');
    			} else {
                	$('#emailToAddress2').removeClass('required');
    			}
				});

				  $('#emailToName3').keyup(function () {
                   if ($(this).val()) {
                $('#emailToAddress3').addClass('required');
      			} else {
                	$('#emailToAddress3').removeClass('required');
				    }
				});

         		$("#emailFriend").validate({
					errorClass: "formError",
					errorContainer: "#referAFriendFormError",
					errorLabelContainer: "#referAFriendFormError",
					onfocusout: false,
					wrapper: 'li',
					messages: {
						referName01: {
							required: "Oops - at least one name is required"
						},
						referEmail01: {
							required: "Oops - at least one email address is required",
							email: "Oops - check your email addresses for proper format."
						},
						referEmail02: {
							email: "Oops - check your email addresses for proper format."
						},
						referEmail03: {
							email: "Oops - check your email addresses for proper format."
						},
						securityKey: {
							required: "Oops - the security key is required."
						}
					},
					groups: {
						emailGroup: "referEmail01 referEmail02 referEmail03"
					},
					submitHandler: function(form) {
						$("#referSubmitBtn").attr("disabled","disabled");
						jsonWithFrameSubmit({
							form: form,
							postUrl: 'https://us.coca-cola.com/referAFriend.do',
							getUrl: '/referAFriendResponse.do',
							dataType: 'html',
							success: function(data) {
								referAFriendResponse(data);
							},
							error: function(data) {
								referAFriendError();
								document.body.style.cursor = "auto";
								$("#referSubmitBtn").removeAttr("disabled");
							}
						});
					}
				});
				$("#tellInfoPop").modal({ close: false,
					onShow: function (dialog) {
						dialog.container.draggable({handle: 'div, div#referAFriendHandle', cursor: 'move'});
					}
				});
				}
			});
		} else {
			$("#tellUnauthInfoPop").modal({ close: false,
				onShow: function (dialog) {
					dialog.container.draggable({handle: 'div#tellUnauthInfoPopTop', cursor: 'move'});
				}
			});			
		}	
	}
	function shareWithAFriend(itemId) {
		$.ajax({
			url: "https://us.coca-cola.com/shareWithAFriend.do?itemId="+itemId,
			type: "GET",
			dataType: "jsonp",
			success: function(html) {
				$("#tellInfoPop").html(html);
				$("#itemId").val(itemId);

		    	$('#emailToName2').keyup(function () {
                   if ($(this).val()) {
                		$('#emailToAddress2').addClass('required');
    				} else {
                		$('#emailToAddress2').removeClass('required');
    				}
				});

				$('#emailToName3').keyup(function () {
                   if ($(this).val()) {
                		$('#emailToAddress3').addClass('required');
      				} else {
                		$('#emailToAddress3').removeClass('required');
				    }
				});

				$("#emailFriend").validate({
					errorClass: "formError",
					errorContainer: "#referAFriendFormError",
					errorLabelContainer: "#referAFriendFormError",
					onfocusout: false,
					wrapper: 'li',
					messages: {
						referName01: {
							required: "Oops - at least one name is required"
						},
						referEmail01: {
							required: "Oops - at least one email address is required",
							email: "Oops - check your email addresses for proper format."
						},
						referEmail02: {
							email: "Oops - check your email addresses for proper format."
						},
						referEmail03: {
							email: "Oops - check your email addresses for proper format."
						},
						securityKey: {
							required: "Oops - the security key is required."
						}
					},
					groups: {
						emailGroup: "referEmail01 referEmail02 referEmail03"
					},
					submitHandler: function(form) {
						document.body.style.cursor = "wait";
						$("#shareSubmitBtn").attr("disabled","disabled");
						jsonWithFrameSubmit({
							form: form,
							postUrl: 'https://us.coca-cola.com/shareWithAFriend.do?itemId='+itemId,
							getUrl: '/shareWithAFriendResponse.do',
							dataType: 'html',
							success: function(data) {
								shareWithAFriendResponse(data);
							},
							error: function(data) {
								referAFriendError();
								document.body.style.cursor = "auto";
								$("#shareSubmitBtn").removeAttr("disabled");
							}
						});
					}
				});
				$("#tellInfoPop").modal({ close: false,
					onShow: function (dialog) {
						dialog.container.draggable({handle: 'div#referAFriendHandle,div', cursor: 'move'});
					}
				});
				}
			});
	}

	function moveOnMax(field,nextFieldID){
	if(field.value.length >= field.maxLength){
	    document.getElementById(nextFieldID).focus();
	  }
	}
	
	
	function shareWithAFriendLBE(lbeId) {
		shareWithAFriendLBEWithURL(lbeId, '')
	}
	function shareWithAFriendLBEWithURL(lbeId, url) {
		shareWithAFriendMaster(lbeId, url, '')
	}	
	function shareWithAFriendMaster(lbeId, url, paramList) {

			codeErrorSignIn();
	}

	function tellAFriendSchool() {
		$.ajax({
			url: "https://us.coca-cola.com/shareWithASchoolFriend.do",
			type: "GET",
			dataType: "jsonp",
			success: function(html) {
				$("#tellInfoPop").html(html);

				$('#emailToName2').keyup(function () {
                   if ($(this).val()) {
                		$('#emailToAddress2').addClass('required');
    				} else {
                		$('#emailToAddress2').removeClass('required');
    				}
				});

				$('#emailToName3').keyup(function () {
                   if ($(this).val()) {
                		$('#emailToAddress3').addClass('required');
      				} else {
                		$('#emailToAddress3').removeClass('required');
				    }
				});

				$("#emailFriend").validate({
					errorClass: "formError",
					errorContainer: "#referAFriendFormError",
					errorLabelContainer: "#referAFriendFormError",
					onfocusout: false,
					wrapper: 'li',
					messages: {
						referName01: {
							required: "Oops - at least one name is required"
						},
						referEmail01: {
							required: "Oops - at least one email address is required",
							email: "Oops - check your email addresses for proper format."
						},
						referEmail02: {
							email: "Oops - check your email addresses for proper format."
						},
						referEmail03: {
							email: "Oops - check your email addresses for proper format."
						},
						securityKey: {
							required: "Oops - the security key is required."
						}
					},
					groups: {
						emailGroup: "referEmail01 referEmail02 referEmail03"
					},
					submitHandler: function(form) {
						document.body.style.cursor = "wait";
						$("#shareSubmitBtn").attr("disabled","disabled");
						jsonWithFrameSubmit({
							form: form,
							postUrl: 'https://us.coca-cola.com/shareWithASchoolFriend.do',
							getUrl: '/shareWithASchoolFriendResponse.do',
							dataType: 'html',
							success: function(data) {
								tellAFriendSchoolResponse(data);
							},
							error: function(data) {
								referAFriendError();
								document.body.style.cursor = "auto";
								$("#shareSubmitBtn").removeAttr("disabled");
							}
						});
					}
				});
				$("#tellInfoPop").modal({ close: false,
					onShow: function (dialog) {
						dialog.container.draggable({handle: 'div, div#referAFriendHandle', cursor: 'crosshair'});
					}
				});
				}
			});
	}
	function tellAFriendSchoolResponse(responsehtml) {
		document.body.style.cursor = "auto";
		$("#shareSubmitBtn").removeAttr("disabled");
		$("#tellInfoPop").html(responsehtml);
		$("#emailFriend").validate({
			errorClass: "formError",
			errorContainer: "#referAFriendFormError",
			errorLabelContainer: "#referAFriendFormError",
			onfocusout: false,
			wrapper: 'li',
			messages: {
				referName01: {
					required: "Oops - at least one name is required"
				},
				referEmail01: {
					required: "Oops - at least one email address is required",
					email: "Oops - check your email addresses for proper format."
				},
				referEmail02: {
					email: "Oops - check your email addresses for proper format."
				},
				referEmail03: {
					email: "Oops - check your email addresses for proper format."
				},
				securityKey: {
					required: "Oops - the security key is required."
				}
			},
			groups: {
				emailGroup: "referEmail01 referEmail02 referEmail03"
			},
			submitHandler: function(form) {
				document.body.style.cursor = "wait";
				$("#referSubmitBtn").attr("disabled","disabled");
				jsonWithFrameSubmit({
					form: form,
					postUrl: 'https://us.coca-cola.com/shareWithASchoolFriend.do',
					getUrl: '/shareWithASchoolFriendResponse.do',
					dataType: 'html',
					success: function(data) {
						tellAFriendSchoolResponse(data);
					},
					error: function(data) {
						referAFriendError();
						document.body.style.cursor = "auto";
						$("#shareSubmitBtn").removeAttr("disabled");
					}
				});
			}
		});
	}


	function referAFriendResponse(responsehtml) {
		document.body.style.cursor = "auto";
		$("#shareSubmitBtn").removeAttr("disabled");
		$("#tellInfoPop").html(responsehtml);
		$("#emailFriend").validate({
			errorClass: "formError",
			errorContainer: "#referAFriendFormError",
			errorLabelContainer: "#referAFriendFormError",
			onfocusout: false,
			wrapper: 'li',
			messages: {
				referName01: {
					required: "Oops - at least one name is required"
				},
				referEmail01: {
					required: "Oops - at least one email address is required",
					email: "Oops - check your email addresses for proper format."
				},
				referEmail02: {
					email: "Oops - check your email addresses for proper format."
				},
				referEmail03: {
					email: "Oops - check your email addresses for proper format."
				},
				securityKey: {
					required: "Oops - the security key is required."
				}
			},
			groups: {
				emailGroup: "referEmail01 referEmail02 referEmail03"
			},
			submitHandler: function(form) {
				$("#referSubmitBtn").attr("disabled","disabled");
				jsonWithFrameSubmit({
					form: form,
					postUrl: 'https://us.coca-cola.com/referAFriend.do',
					getUrl: '/referAFriendResponse.do',
					dataType: 'html',
					success: function(data) {
						referAFriendResponse(data);
					},
					error: function(data) {
						referAFriendError();
						document.body.style.cursor = "auto";
						$("#referSubmitBtn").removeAttr("disabled");
					}
				});
			}
		});
		trackWebtrends('z_engage', 'Tell+A+Friend+Completion');
	}
	function shareWithAFriendResponse(responsehtml) {
		document.body.style.cursor = "auto";
		$("#shareSubmitBtn").removeAttr("disabled");
		$("#tellInfoPop").html(responsehtml);
		$("#emailFriend").validate({
			errorClass: "formError",
			errorContainer: "#referAFriendFormError",
			errorLabelContainer: "#referAFriendFormError",
			onfocusout: false,
			wrapper: 'li',
			messages: {
				referName01: {
					required: "Oops - at least one name is required"
				},
				referEmail01: {
					required: "Oops - at least one email address is required",
					email: "Oops - check your email addresses for proper format."
				},
				referEmail02: {
					email: "Oops - check your email addresses for proper format."
				},
				referEmail03: {
					email: "Oops - check your email addresses for proper format."
				},
				securityKey: {
					required: "Oops - the security key is required."
				}
			},
			groups: {
				emailGroup: "referEmail01 referEmail02 referEmail03"
			},
			submitHandler: function(form) {
				document.body.style.cursor = "wait";
				$("#shareSubmitBtn").attr("disabled","disabled");
				jsonWithFrameSubmit({
					form: form,
					postUrl: 'https://us.coca-cola.com/shareWithAFriend.do',
					getUrl: '/shareWithAFriendResponse.do',
					dataType: 'html',
					success: function(data) {
						shareWithAFriendResponse(data);
					},
					error: function(data) {
						referAFriendError();
						document.body.style.cursor = "auto";
						$("#shareSubmitBtn").removeAttr("disabled");
					}
				});
			}
		});
		trackWebtrends('z_engage', 'Tell+A+Friend+Completion');
	}
	function referAFriendError() {
		document.body.style.cursor ="auto";
	}
	function sendMyselfEmailError() {
		document.body.style.cursor ="auto";
	}	
	function textAFriendError() {
		document.body.style.cursor ="auto";
	}
	function showRules(ruleKey) {
		$.ajax({
			url: "/rules.do",
			type: "POST",
			data: {"ruleKey":ruleKey},
			timeout: 15000,
			success: function(html) {
				$("#rulesPop").html(html);
				$.ajax({
					type: "GET",
					url: rulesUrlLink,
					timeout: 15000,
					dataType: "xml",
					success: function(xml){
						var contentRules = $("content",xml).text();						
						$('#rulesPopScrollContent').html(contentRules);
						$('#rulesPopScrollContent').find('*').css('color','#ffffff');	
					},
					error: function(xml){
						$('#rulesPopScrollContent').html("There was an error in fetching the XML file from: " + rulesUrlLink);
					}
				});
					$("#rulesPop").modal({
						close: false,
						onShow: function(dialog) {
							dialog.container.draggable({handle: 'div#rulesPopHandle, div#rulesPopHandleBeta', cursor: 'move'});
						}
					});
			}
		});
	}
  function showRTERules(rtePath) {
    $.ajax({
      url: "/rules.do",
      type: "POST",
      timeout: 15000,
      success: function(html) {
        $("#rulesPop").html(html);
        $.ajax({
          url: "/en_US/legal/mobile_terms_of_use_en_US.xml",
          type: "GET",
          timeout: 15000,
          dataType: "xml",
          success: function(xml){
            var content;
            $(xml).find('field').each(function() {
              if ($(this).find('name').text() == "richText") {
                $('#rulesPopScrollContent').html($(this).find('value').text());
              }
            });
          }
        });
        $("#rulesPop").modal({
          close: false,
          onShow: function(dialog) {
            dialog.container.draggable({handle: 'div#rulesPopHandle, div#rulesPopHandleBeta', cursor: 'move'});
          }
        });
      }
    });
  }
	function addMemberNugget(type, value) {
		$.ajax({type:'POST',url:'addMemberNugget.do',data:'linkType=' + type + '&value=' + value});
	}

	var _tag={
		dcsMultiTrack:function() {
			var args = Array.prototype.slice.apply(arguments);
			window['dcsMultiTrack'].apply(this, args);
		}
	}
	htmlExpTrackWT=function(){
    var args = Array.prototype.slice.apply(arguments);
    var caller = args.shift();
	var vhref =caller.href;
	try{
		if (args.length%2==0){
			if(typeof caller.target != 'undefined' && caller.target.toLowerCase() == '_blank' ) {
			window['dcsMultiTrack'].apply(this, args); } else {
				var trackClose = false;
				$.each(args, function(index, value){
					var trackStringClose = value.indexOf("Close");
					if (trackStringClose > -1) {trackClose=true;}
				});
				if (trackClose) {
					args.unshift('dcsuri','/vexperience.do','dcsref','/voverlay.do');
					window['dcsMultiTrack'].apply(this, args);
				} 
				else {
					args.unshift('dcsuri','/voverlay.do');
					window['dcsMultiTrack'].apply(this, args);
				}
			}
		}
	}catch(e){}

	if(typeof caller.target != 'undefined' && caller.target.toLowerCase() == '_blank' ){
		return true;
	}else{
		setTimeout('window.location.href = "'+vhref+'"', 500);
		return false;
	}
}

</script>
<script type="text/javascript">
	var flashvars = {};
	var params = {
		menu: "false",
		scale: "noScale"
	};
	var attributes =  {
		id : "flashProxy"
	};
	swfobject.embedSWF("/swf/ProxyAS2.swf", "altContent", "1px", "1px", "8.0.0", "expressInstall.swf", flashvars, params,attributes);
</script>
<script type="text/javascript">
	//  This can be overwritten when needed
	var dartKey = 'coke';
</script>
<script src="http://us.coca-cola.com/en_US/dart/dart_zones_en_US.js?ver=03122013" type="text/javascript"></script>
<link href="http://us.coca-cola.com/flex-mod/desktop/common/global.css?ver=03122013" rel="stylesheet" type="text/css" />
<link href="http://us.coca-cola.com/flex-mod/desktop/cokered/common/cokered.css?ver=03122013" rel="stylesheet" type="text/css" />
<!--[if lte IE 7]>
<link rel="stylesheet" type="text/css" href="http://us.coca-cola.com/css/iespecific.css?ver=03122013" />
<![endif]-->

<!-- START OF SmartSource Data Collector TAG v10.2.0 -->
<!-- Copyright (c) 2012 Webtrends Inc.  All rights reserved. -->
<script src="/flex-mod/js/tracking/webtrends-v10-2-1-rev04.js?ver=03122013" type="text/javascript"></script>
<script type="text/javascript">
  var dcs;
  

    dcs=new Webtrends.dcs().init({
      dcsid:"dcsw8c1qn0000008u8hpk7vbc_3u9f" 
      ,domain:"statse.webtrendslive.com"
      ,timezone:-5
      ,adimpressions:true
      ,adsparam:"WT.ac"
      ,offsite:true
      ,download:true
      ,downloadtypes:"xls,doc,pdf,txt,csv,zip,docx,xlsx,rar,gzip"
      ,onsitedoms:"us.coca-cola.com"
      ,i18n:false
      ,plugins:{
         hm:{src:"//s.webtrends.com/js/webtrends.hm.js",hmurlparams:"WT.ac"}
      }
    });
    dcs.WT.cg_n='experience';  //  Can be overwritten as needed
    dcs.WT.cg_s='experienceHome';  //  Can be overwritten as needed
    dcs.WT.z_channel='desktop';
    dcs.WT.z_program='cokered';
    

/*
(function(){
    var s=document.createElement("script"); s.async=false; s.src="/en_US/js/tracking/webtrends/webtrends-v10_en_US.js";
    var s2=document.getElementsByTagName("script")[0]; s2.parentNode.insertBefore(s,s2);
}());
*/
</script>

<!-- END OF SmartSource Data Collector TAG v10.2.0 -->
<script type="text/javascript" src="/en_US/js/tracking/floodlight/tracking_en_US.js?ver=03122013"></script>
<script>
function getBasePath() { return ""; }
function getSecureBasePath() { return "https://us.coca-cola.com"; }

function isLoggedIn() { return "false"; }
function getMemberEli() { return "";}
function getMemberFirstName() { return ""; }
function getMemberPoints() { return "na"; }
function getMemberAge() { return  "na"; }
function getMemberGender() { return "na"; }
function getMemberState() { return "na"; }
<!-- i2a tracking code for registration -->
var order_code="";
var pageAction = "";
function trackI2ATagForRegistration(){
	 order_code = ""; 
	 pageAction = "980";

}

function trackI2ATagForRegistrationOptin(){
	 order_code = ""; 
	 pageAction = "336";

}

<!-- i2a tracking code for Social tags-->
function trackI2ATagForSocial(){
	pixel_conversion('2976');

}

<!-- i2a tracking code for code entry-->
function trackI2ATagForCodeEntry(){
	 pageAction = "3886";

}

<!-- i2a tracking code for first time visitor-->
function trackI2ATagForFirstTimeVisitor(){
	order_code = ""; 
	 pageAction = "4036";

}

function trackFloodLightTag(invokedFrom) {
	var randomNum = Math.random() * 10000000000000;
	var memberIdParam = ';u1=';
	var sendMemberId = false;
	var protocol = tags[invokedFrom][0]

	try {
		if (tags[invokedFrom][3] == 'sendMemberId')
			sendMemberId = true;
	} catch (err) {
		sendMemberId = false;
	}
	if (sendMemberId == true) {
		$(document.body).append(
				'<IFRAME SRC="' + protocol
						+ '://fls.doubleclick.net/activityi;src=1352258;type='
						+ tags[invokedFrom][1] + ';cat=' + tags[invokedFrom][2]+ memberIdParam + ';ord=' + randomNum
						+ '?" WIDTH=1 HEIGHT=1 FRAMEBORDER=0></IFRAME>');
	} else {
		$(document.body).append(
				'<IFRAME SRC="' + protocol
						+ '://fls.doubleclick.net/activityi;src=1352258;type='
						+ tags[invokedFrom][1]+ ';cat=' + tags[invokedFrom][2]
						+ ';ord=' + randomNum
						+ '?" WIDTH=1 HEIGHT=1 FRAMEBORDER=0></IFRAME>');
	}
}

function trackFloodLight(invokedFrom, protocol) {
	trackFloodLightTag(invokedFrom);
	// protocol is being ignored and will be fetched from an array in
	// tags_en_US. This function is there just to support existing calls in LBEs
}

function addForTracking(id, val) {
	eval("dcs.WT." + id + "= '" + val + "'");
}

function collectWebtrends() {
	setTimeout('dcsMultiTrack();', 600);
}

function trackWebtrends(id, val) {
	eval("dcs.WT." + id + "= '" + val + "'");
	setTimeout('dcsMultiTrack();', 600);
}

function jsonWithFrameSubmit (params){
	var iframeName = "loginIframeBox";
	var jsonfId = +new Date();
	if ($("#"+iframeName).size()==0) {
		$("body").append("<iframe name=\""+iframeName+"\" id=\""+iframeName+"\" src=\"/images/spacer.gif\" height=\"0\" width=\"0\" border=\"0\" style=\"display:none;\" ></iframe>");
	}
	var timeout = 30000;
	if (params.timeout) {
		timeout = params.timeout;
	}
	var timerRunning = true;
	var t = setTimeout(function(){timerRunning = false;params.error(null, "timeout", null);},timeout);
	$("#"+iframeName).load(function() {
		if (timerRunning) {
			clearTimeout(t);
			if (!params.data) {
				params.data = new Object();
			}
			params.data.jsonf=jsonfId;
			$.ajax({
				type: "GET",
				url: params.getUrl,
				dataType: params.dataType,
				data: params.data,
				timeout: params.timeout,
				cache: false,
				success: function(responseSet, textStatus) { params.success(responseSet, textStatus); },
				error: params.error
			});
		}
		$("#"+iframeName).unbind();
	});
	$(params.form).append("<input type=\"hidden\" name=\"jsonf\" value=\""+jsonfId+"\" />");
	$(params.form).attr("target",iframeName);
	$(params.form).attr("action",params.postUrl);
	$(params.form).attr("method","POST");
	params.form.submit();
}
function showBothCode() {
	$("#bothCodePop").modal({ close: false,
		onShow: function (dialog) {
			dialog.container.draggable({handle: 'div, div#bothCodePopTop', cursor: 'move'});
		}
	});
}
function changeSchoolPop(startFlow,updateDiv,searchItem) {
	$("#updateLocation").val(updateDiv);
	$("#startFlow").val(startFlow);
	$("#schoolSearchItem").val(searchItem);
    document.body.style.cursor = "wait";		
	$.ajax({
		type: "GET",
		url: "/schoolSearchPop.do",
		dataType: "HTML",
		timeout: 30000,
		success: function(html) {
			$("#schoolSelectorPopBody").html(html);
              document.body.style.cursor = "auto";				
			$("#schoolSelectorPop").modal({ close: false,
				onShow: function (dialog) {
					dialog.container.draggable({handle: 'div#schoolSelectorPopTop', cursor: 'move'});
				}
			});		
		},
		error: function() {
              $("#schoolPopError").html("<h3 style='padding:10px;'>Information is currently unavailable</h3>");
              document.body.style.cursor = "auto";	
			$("#schoolSelectorPop").modal({ close: false,
				onShow: function (dialog) {
					dialog.container.draggable({handle: 'div#schoolSelectorPopTop', cursor: 'move'});
				}
			})			  	
		}
	});
}
</script>

</head>

<body>
<div id="container">
<div id="wrapper">
<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery(document).click(function () {
		jQuery('.menu ul').fadeOut();
		//return false;
	});
})
</script>
<div class="header color-marca">
		<div class="wrapper clearfix">
			<div class="grid_12">
				<div class="menu-right">
					<!-- Country Menu -->
					<div id="menu-right" class="menu">
						<h5><a tabindex="0" href="www.coca-cola.com/index.jsp?
cookie=false&amp;WT.cl=1&amp;WT.mm=top-right-menu1-changecountryred_
en_US&amp;WT.pi=Change%20Market" title="">Change Country</a></h5>
						<ul>
							<li class="otras-marcas"><a href="#" class="color-marca">Change Country</a></li>
								<li><a href="http://www.coca-cola.com/index.jsp?cookie=false&amp;WT.cl=1&amp;WT.mm=top-right-menu1-changecountry-red_en_US&amp;WT.pi=Change%20Market" title="Change Country" onclick="return htmlExpTrackWT(this, 'WT.ti', 'Offsite: ChangeCountry', 'WT.dl','1', 'WT.z_engage', 'LBE Interaction', 'WT.z_pclick', '1')">Change Country</a></li>
						</ul>
					</div>
						<!-- Login/Registration -->
				</div>
				<!-- Brand Menu -->
				<div id="menu" class="menu">
					<h5><a tabindex="0" href="#">Coke in the USA</a></h5>
					<ul>
						<li class="otras-marcas"><a href="#" class="color-marca" title="">Coke in the USA</a></li>
						<!-- Coca-Cola (Red) links -->						
						<li class="color-coca-cola logo"><a href="/en/index.html?WT.cl=1&amp;WT.mm=top-left-menu1-coca-cola-red_en_US" title="Coca-Cola" class="logo">Coca-Cola</a></li>
						<!-- Corporate Links -->
						<li class="color-coca-cola-company logo"><a href="http://thecoca-colacompany.com?WT.cl=1&amp;WT.mm=top-left-menu2-tccc-red_en_US" title="The Coca-Cola Company" target="_blank" class="logo">The Coca-Cola Company</a></li>
						<li class="color-coca-cola-company"><a href="http://www.thecoca-colacompany.com?WT.cl=1&amp;WT.mm=top-left-menu3-about-red_en_US" title="About the Coca-Cola Company" target="_blank">About the Coca-Cola Company</a></li>
						<li class="color-coca-cola-company"><a href="http://www.thecoca-colacompany.com/careers/index.html?WT.cl=1&amp;WT.mm=top-left-menu4-careers-red_en_US" title="Careers" target="_blank">Careers</a></li>
						<li class="color-coca-cola-company"><a href="http://www.thecoca-colacompany.com/brands/index.html?WT.cl=1&amp;WT.mm=top-left-menu5-prodinfo-red_en_US" title="Product Information" target="_blank">Product Information</a></li>
						<li class="color-coca-cola-company"><a href="http://www.coca-colaconversations.com?WT.cs=1 &amp;WT.pi=top-left-menu6-conversations-red_en_US" title="Coca-Cola Conversations" target="_blank">Coca-Cola Conversations</a></li>
						<li class="color-coca-cola-company"><a href="http://www.mycoke.com?WT.cl=1&amp;WT.mm=top-left-menu8-mycoke-red_en_US" title="MyCoke" target="_blank">MyCoke</a></li>
						<li class="color-coca-cola-company"><a href="http://www.cocacolazero.com/?WT.cl=1&amp;WT.mm=top-left-menu9-cokezero-red_en_US" title="Coca-Cola Zero" target="_blank">Coca-Cola Zero</a></li>
						<li class="color-coca-cola-company"><a href="http://www.dietcoke.com/index.jsp?WT.cl=1&amp;WT.mm=top-left-menu10-dietcoke-red_en_US" title="Diet Coke" target="_blank">Diet Coke</a></li>
						<li class="color-coca-cola-company"><a href="http://www.worldofcoca-cola.com?WT.cl=1&amp;WT.mm=top-left-menu11-worldofcoke-red_en_US" title="World of Coca-Cola" target="_blank">World of Coca-Cola</a></li>
						<li class="color-coca-cola-company"><a href="http://www.coca-cola.com/happiness?WT.cl=1&amp;WT.mm=top-left-menu13-openhappiness-red_en_US" title="Open Happiness" target="_blank">Open Happiness</a></li>
						<li class="color-coca-cola-company"><a href="http://www.coca-colastore.com/?WT.cl=1&amp;WT.mm=top-left-menu14-cocacolastore-red_en_US" title="Coca-Cola Store" target="_blank">Coca-Cola Store</a></li>
					</ul>
				</div>
				<h1><a href="/en/index.html?WT.cl=1&amp;WT.mm=top-left-menu1-coca-cola-red_en_US" title="Coca-Cola">Coca-Cola</a></h1>
			</div><!--/.grid_12 -->
		</div><!--/.wrapper -->
	</div><!--[if lte IE 6]>  
  <script type="text/javascript">
  $(document).ready(function(){
  	if ($.cookie('warniesix')==null) {
  		$.cookie('warniesix','yes', {expires: 1});
  		$('#ieWarningPop').modal({
  			close: false
  		});
  	} 
  });
  </script>
<div style="display:none;" id="ieWarningPop">
	<div class="ie6WarnTop"></div>
	<div class="ie6WarnBody">
		<div class="ie6WarnPopTitle pad10Top pad10Bottom" style="padding-left:0px;">
			<a href="javascript: void(0)"><img height="20" width="20" class="floatRight simplemodal-close" alt="Close" src="/images/theme/btn_close.gif"></a>	
			<p id="infoPopMessageTitleText" class="mediumText">Please upgrade your browser</p>		
		</div>		
		<div class="ie6WarnMsgTop"></div>
		<div class="ie6WarnMsgBody">
			<div class="ie6WarnTitle pad10Top">My Coke Rewards no longer<br/>supports Internet Explorer version 6.</div>
			<div class="pad5Top"><p>To get the best possible experience,<br/>we recommend that you use a newer version.</p></div>
			<div class="pad10Top"><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home" target="_blank"><img src="/images/theme/btn_upgrade_internet_explorer.gif" alt="upgrade internet explorer"/></a></div>
			<div class="pad40Top">Why are we doing this?</div>
			<div><p>&#149; Microsoft is phasing out support for Internet Explorer 6</p></div>
			<div><p>&#149; Internet Explorer 6 has too many limitations that are holding back new feature development</p></div>
			<div class="pad40Top">Other Web Browsers supported by My Coke Rewards:</div>
			<div><p>&#149; <a href="http://www.mozilla.com/en-US/firefox/new/" target="_blank" class="blackLinkLight">Firefox</a></p></div>
			<div><p>&#149; <a href="http://www.apple.com/safari/" target="_blank" class="blackLinkLight">Safari</a></p></div>
			<div class="pad40Top">Want to know more?</div>
			<div><p>View <a href="/faqs.do#technical2" class="blackLinkLight">Frequently Asked Questions</a> about the optimum settings for this site.</p></div>
			<div class="pad20Top">&nbsp;</div>
		</div>
		<div class="ie6WarnMsgBottom"></div>
		<div class="pad30Top pad20Left"><a href="javascript:void()" onclick="$.modal.close();"><img src="/images/theme/btn_close_txt.gif" alt="close"/></a></div>
	</div>
	<div class="ie6WarnBottom"></div>
</div><![endif]-->  
  	<div id="schoolSelectorPop" style="display:none;">
		<input type="hidden" id="updateLocation" val=""/>
		<input type="hidden" id="startFlow" val="false"/>
		<input type="hidden" id="schoolSearchItem" val=""/>
		<div id="schoolSelectorPopTop" class="infoPopTop"></div>
		<div class="infoPopBody">
			<div class="infoPopTitle" style="padding-left:0px;">
				<a href="javascript: void(0)"><img height="20" width="20" class="floatRight simplemodal-close" alt="Close" src="http://us.coca-cola.com/flex-mod/desktop/cokered/images/btn_close.gif"></a>	
				<p id="infoPopMessageTitleText" class="mediumText">Find a School and Donate:</p>		
			</div>
			<div id="schoolPopError" class="smallText errorText"></div>
			<div id="schoolSelectorPopBody">

			</div>
		</div>
		<div class="infoPopBtm"></div>
	</div>
	<div id="connectAccountsPop" style="display:none;">
<div class="smallPopBoxTop"></div>
<div class="smallPopBoxBody">
	<div class="infoPopTitle" style="padding-left:0px;width:370px;">
		<a href="javascript: void(0)"><img height="20" width="20" class="floatRight simplemodal-close" alt="Close" src="http://us.coca-cola.com/flex-mod/desktop/cokered/images/btn_close.gif"></a>	
		<p class="mediumText black">Connect accounts</p>		
	</div>	
		<p class="pad5Top">Please provide your My Coke Rewards (or other Coca-Cola website) password so we can connect your accounts and allow you to sign in using your Facebook information. Click here if you <a href="javascript:void(0)" onclick="$.modal.close();setTimeout('forgotPassword()','500')" class="greyLineLink">forgot your password</a>.</p>
		
			<form action="https://us.coca-cola.com/signin.do" method="post" class="pad10Top">
				<div class="connectFormLeft fontpx12 bold"><label for="emailAddress">Email Address:</label></div><div class="connectFormRight fontpx12"><input type="text" name="emailAddress" id="connectEmail"  /></div>
				<div class="clear pad10Top"></div>
				<div class="connectFormLeft fontpx12 bold"><label for="passwordText">Password:</label></div> <div class="connectFormRight fontpx12"><input type="password" name="passwordText"/></div>
				<div class="clear pad10Top"></div>
				<div class="connectFormBtns floatRight pad20Right pad10Top"><a href="javascript:void(0)" onclick="$.modal.close();"><img src="http://us.coca-cola.com/flex-mod/desktop/cokered/images/btn_cancel_gry.gif" alt="cancel"/></a><input type="image" src="http://us.coca-cola.com/flex-mod/desktop/cokered/images/btn_submit.gif" class="pad10Left" value="Submit" /></div>
				<div class="clear"></div>
				
				<input type="hidden" name="facebookConnect" value="true" />			
			</form>
	
	</div>
<div class="smallPopBoxBtm"></div>
	</div>
  	<div id="tellInfoPop" style="display:none;">
	</div>
  	<div id="textInfoPop" style="display:none;">
	</div>	
  	<div id="sendMyselfInfoPop" style="display:none;">
	</div>	
	<div id="rulesPop" style="display:none;">
	</div>
<div id="facebookReplacePop" style="display:none;">
	<div class="alertPopTop" id="facebookReplacePopTop"></div>
	<div class="alertPopBody">
	    <div class="alertPopTitle">
	  		<a href="javascript: void(0)" onclick="$.modal.close();"><img src="/flex-mod/desktop/cokered/images/btn_close.gif" width="20" height="20" alt="Close" class="floatRight simplemodal-close" /></a>
	  		<p class="mediumText"><span>Connect Accounts</span></p>
	    </div>	
        <div class="alertPopMessageTop"></div>
        <div class="alertPopMessageBody">	    
	    	<p class="pad10Top pad10Left pad10Right">Your My Coke Rewards account is already connected to this Facebook account</p>
	    	<div class="pad20Left pad10Top">
	    		<div class="inline"><img id="facebookReplacePoPFirstImage"/></div>
	    		<div class="inline pad10Left" id="facebookReplacePoPFirstName"></div>
	    		<div class="clear"></div>
	    	</div>
	    	<p class="pad10Top pad10Left pad10Right">Would you like to connect your My Coke Rewards account to this Facebook account instead?</p>
	    	<div class="pad20Left pad10Top">
	    		<div class="inline"><img id="facebookReplacePoPSecondImage"/></div>
	    		<div class="inline pad10Left" id="facebookReplacePoPSecondName"></div>
	    		<div class="clear"></div>
	    	</div>	    	
	    	<div class="pad20Left pad10Top">
	    	</div>
		<div class="floatLeft pad20Top pad20Left"><a class="pointerCursor simplemodal-close"><img src="/flex-mod/desktop/cokered/images/btn_no_txt.gif" alt="no"/></a></div><form name="replace" action="https://us.coca-cola.com/desktop/cokered/social/facebook/connect" method="get" class="pad20Top pad20Left floatLeft" target="SignIn" onclick="fireFacebook();"><input type="hidden" name="confirm" value="true"/><input type="image" src="/flex-mod/desktop/cokered/images/btn_yes.gif" value="Yes" /></form>
		<div class="clear"></div>
		</div>
		<div class="alertPopMessageBottom"></div>
	</div>
	<div class="alertPopBtm"></div>
</div>	
      <div id="alertPop" style="display:none;">
    	<div class="alertPopTop" id="alertPopTop"></div>
      <div class="alertPopBody">
        <div class="alertPopTitle">
      		<a href="javascript: void(0)" onclick="$.modal.close();"><img src="/flex-mod/desktop/cokered/images/btn_close.gif" width="20" height="20" alt="Close" class="floatRight simplemodal-close" /></a>
        	<p class="mediumText" id="alertPopHeaderText"><span>Loading...</span></p>
        </div>
        <div class="alertPopMessageTop"></div>
        <div class="alertPopMessageBody">
					<div class="alertPopMessage">
          	<p><b id="alertPopTitleText"><span>Loading...</span></b></p>
            <p class="pad10Top" id="alertPopBodyText"><span>Loading...</span></p>
          </div>
        </div>
        <div class="alertPopMessageBtm"></div>
      </div>
      <!-- alertPopBody End -->
      <div class="alertPopBtm"></div>
    </div>
    <!-- alertPop End -->

      <div id="tellUnauthInfoPop" style="display:none;">
    	<div class="alertPopTop" id="tellUnauthInfoPopTop"></div>
      <div class="alertPopBody">
        <div class="alertPopTitle">
      		<a href="javascript: void(0)" onclick="$.modal.close();"><img src="/flex-mod/desktop/cokered/images/btn_close.gif" width="20" height="20" alt="Close" class="floatRight simplemodal-close" /></a>
        	<p class="mediumText" id="alertPopHeaderText">Tell a Friend</p>
        </div>
        <div class="alertPopMessageTop"></div>
        <div class="alertPopMessageBody">
					<div class="alertPopMessage">
          	<p><b id="alertPopTitleText">The more, the merrier</b></p>
            <p class="pad10Top">Spread the word about the fun you're having, and get Bonus Points worth talking about. Tell your friends to register at mycokerewards.com. They'll get points for drinking what they love, too. For every new member who you refer who accrues 50 points, you receive 10 points.</p>
			<p class="pad10Top">Please <a href="/signin.do" class="redLink">Sign in</a> first, so we know who is sharing the love.</p> 
			<p class="pad10Top">Not a member yet yourself? <a href="/register.do" class="redLink">Register now</a></p>
          </div>
        </div>
        <div class="alertPopMessageBtm"></div>
      </div>
      <!-- alertPopBody End -->
      <div class="alertPopBtm"></div>
    </div>
    <!-- alertPop End -->    
    
    
      <div id="timeoutPop" style="display:none;">
    	<div class="alertPopTop" id="timeoutPopTop"></div>
      <div class="alertPopBody">
        <div class="alertPopTitle">
      		<a href="javascript: void(0)" onclick="$.modal.close();"><img src="/flex-mod/desktop/cokered/images/btn_close.gif" width="20" height="20" alt="Close" class="floatRight simplemodal-close" /></a>
        	<p class="mediumText" id="timeoutPopHeaderText">Hello, are you still there?</p>
        	<div class="errorText" style="display:none;" id="timeoutError"></div>
        </div>
        <div class="alertPopMessageTop"></div>
        <div class="alertPopMessageBody" style="overflow:hidden;">
		  <div class="alertPopMessage">
          	<p class="smallText">Just so you know - to keep your points safe and secure, you'll be automatically <strong>signed out in 5 minutes.</strong></p>
			<p class="pad10Top smallText"><a href="javascript:keepMeLoggedInClickedInLogoutPop()"><img class="smallArrowBtn" height="10" width="10" alt="" src="/flex-mod/desktop/cokered/images/btn_link_arrow_red.gif" /></a> <a href="javascript:keepMeLoggedInClickedInLogoutPop()" class="redLink">Don't Sign Me Out - I'm Still Here</a></p>
			<p class="smallText pad30Bottom"><a href="javascript:logMeOutClickedInLogoutPop()"><img class="smallArrowBtn" height="10" width="10" alt="" src="/flex-mod/desktop/cokered/images/btn_link_arrow_red.gif" /></a> <a href="javascript:logMeOutClickedInLogoutPop()" class="redLink">Go Ahead and Sign Me Out</a></p>
          </div>
        </div>
        <div class="alertPopMessageBtm"></div>
      </div>
      <!-- alertPopBody End -->
      <div class="alertPopBtm"></div>
    </div>
	<!-- timeoutPop End -->
      <div id="promoCodePop" style="display:none;">
    	<div class="alertPopTop" id="promoCodePopTop"></div>
      <div class="alertPopBody">
        <div class="alertPopTitle">
      		<a href="javascript: void(0)" onclick="$.modal.close();"><img src="/flex-mod/desktop/cokered/images/btn_close.gif" width="20" height="20" alt="Close" class="floatRight simplemodal-close" /></a>
        	<p class="mediumText" id="promoCodePopHeaderText">So...what's a promotional code?</p>
        </div>
        <div class="alertPopMessageTop"></div>
        <div class="alertPopMessageBody">
		  <div class="alertPopMessage">
          	<p class="smallText"><strong>Promotional Codes</strong>, or &quot;promo&quot; codes, are limited-time codes you need to redeem special offers. They can contain words, numbers, letters or even UPC codes from some of our partners. Some offers ask you to enter both a My Coke Rewards code and a promotional code to qualify. You can enter either type of code in the &quot;Enter your code&quot; box above.</p>
			<p class="smallText pad30Bottom"><a href="/help.do?q=5"><img class="smallArrowBtn" height="10" width="10" alt="" src="/flex-mod/desktop/cokered/images/btn_link_arrow_red.gif" /></a> <a href="/help.do#promocode1" class="redLink">Learn more about codes</a></p>
          </div>
        </div>
        <div class="alertPopMessageBtm"></div>
      </div>
      <!-- alertPopBody End -->
      <div class="alertPopBtm"></div>
    </div>
	<!-- promoCodePop End -->
      <div id="bothCodePop" style="display:none;">
    	<div class="alertPopTop" id="bothCodePopTop"></div>
      <div class="alertPopBody">
        <div class="alertPopTitle">
      		<a href="javascript: void(0)" onclick="$.modal.close();"><img src="/flex-mod/desktop/cokered/images/btn_close.gif" width="20" height="20" alt="Close" class="floatRight simplemodal-close" /></a>
        	<p class="mediumText" id="bothCodePopHeaderText">There are two types of codes:</p>
        </div>
        <div class="alertPopMessageTop"></div>
        <div class="alertPopMessageBody">
		  <div class="alertPopMessage">
          	<p class="smallText"><strong>Product Codes</strong> are found on 14 brands - with lots of flavors and packaging sizes to choose from. where are they located? Find them under the plastic caps on bottles, on the tear-off flap on 12-packs or on the bottom of shrinkwrapped packages. Sometimes they are found on fountain cups or on scratch off cards.</p>
			<p class="smallText pad10Top"><a href="/participatingBrands.do"><img class="smallArrowBtn" height="10" width="10" alt="" src="/flex-mod/desktop/cokered/images/btn_link_arrow_red.gif" /></a> <a href="participatingBrands.do" class="redLink">See which packages have codes</a></p>
          	<p class="smallText pad10Top"><strong>Promotional Codes</strong>, or &quot;promo&quot; coes, are limited-time codes you need to redeem special offers. They can contain words, numbers, letters or even UPC codes from some of our partners. Some offers ask you to enter both a My Coke Rewards code and a promotional code to qualify. You can enter either type of code in the &quot;Enter your code&quot; box above.</p>
          </div>
        </div>
        <div class="alertPopMessageBtm"></div>
		<div class="alignRight pad20Right pad10Top"><a href="javascript:$.modal.close()"><img src="/flex-mod/desktop/cokered/images/btn_close_txt_red.gif" alt="close"/></a></div>
      </div>
      <!-- alertPopBody End -->
      <div class="alertPopBtm"></div>
    </div>
	<!-- bothCodePop End -->
	<div class="actualContent">
<script src="/js/jquery.url.packed.js" type="text/javascript"></script>
<script type="text/javascript">
	dartPage = "exp." + "coke";
		var contextPath =  "http://us.coca-cola.com";
		var httpsContextPath =  "https://us.coca-cola.com";	
		var shortURL =  "";
</script>
<script  type="text/javascript" >

var loc="";
</script>
<div id="expSizeContainerMod" style="margin-right:auto;margin-left:auto; position:relative; height: 580px;" >
    <link rel="shortcut icon" href="/content-store/en_US/Red/favicon.ico" type=
  "image/x-icon" />
  <link rel="stylesheet" href="/cms/experiences/coke/html/css/style.css" type="text/css" />
  <link rel="stylesheet" href="/cms/experiences/coke/html/css/facebox.css" type="text/css" media=
  "screen" />
  <link rel="stylesheet" href="/cms/experiences/coke/html/css/jquery.jcarousel.css" type="text/css" />
  <link rel="stylesheet" href="/cms/experiences/coke/html/css/redSkin.css" type="text/css" />
  <link rel="stylesheet" href="/cms/experiences/coke/html/css/skin.css" type="text/css" />
  <script type="text/javascript" src="/cms/experiences/coke/html/js/cufon-yui.js">
</script>
  <script type="text/javascript" src="/cms/experiences/coke/html/js/Gotham.font.js">
</script>
  <script type="text/javascript" src="/cms/experiences/coke/html/js/facebox.js">
</script>
  <script type="text/javascript" src="/cms/experiences/coke/html/js/jquery.flash.js">
</script>
  <script type="text/javascript" src="/cms/experiences/coke/html/js/jcarousellite_1.0.1.js">
</script>
  <script type="text/javascript" src="/cms/experiences/coke/html/js/widgets.js">
</script>
  <script type="text/javascript" src="/cms/experiences/coke/html/js/OpenAjaxManagedHub-all.js">
</script>
  <script type="text/javascript" src="/cms/experiences/coke/html/js/utilities.js">
</script>
  <script type="text/javascript" src="/cms/experiences/coke/html/js/configurables.js">
</script>
  <script type="text/javascript" src="/cms/experiences/coke/html/js/settings.js">
</script>
  <script type="text/javascript" src="/cms/experiences/coke/html/scCoke.js">
</script>
  <script type="text/javascript">
//<![CDATA[
                document.title = "Coca-Cola";
  //]]>
  </script>
  <script type="text/javascript">
//<![CDATA[
                var expDeepLink = $.url.param("loc");
                $(document).ready(function() {
                        if(expDeepLink == 'banner') {
                                $("#hide").css("display", "none");
                        }else{
                                //do nothing
                        }
                });
  //]]>
  </script>
  
  <script type="text/javascript" src="/cms/experiences/coke/html//js/general.js">
</script><!-- START OF SmartSource Data Collector TAG v10.2.36 -->
  <!-- Copyright (c) 2012 Webtrends Inc.  All rights reserved. -->

 
  <style type="text/css">
/*<![CDATA[*/
 body{min-height:1030px;}.header h1 a {background:url(/cms/experiences/coke/html/img/logo.png) no-repeat;width:122px;}#container{width:auto;margin:0 auto;}
        #bgAnimate{
                position:relative;
                width: 960px;
                height: 300px;
                overflow: hidden;
                background: url('/cms/experiences/coke/html/animate/bg.png') no-repeat top left;
        }
        #bAnimate{
                right:0;
        }
        #armAnimate{
                left:370px;
                top:10px;
        }
        #text1Animate{
                left:600px;
                top:50px;
        }
        #text2Animate{
                left:570px;
                top:100px;
        }
        #text3Animate{
                left:565px;
                top:150px;
        }
        #link1Animate{
                position:absolute;
                top:-320px;
                left:650px;
        }
        #link2Animate{
                top:220px;
                right:105px;
        }
        #arm2Animate{
                left:360px;
                top:300px;
        }
        .grid_6{
                text-align:center;
        }
        #Woes_960x300 p{
                display: none;
        }
        #Arctic_960x300 p{
                display: none;
        }
        #twitter-widget-0 {
                width: 220px !important;
                height: 380px !important;
        }
        .jcarousel-mycarousel{
                width: 958px;
                height: 290px;
        }
        
        .dynamicLink{
                width: 9%;
                height: 5%;
                position: absolute;
                left: 3%;
                bottom: 4%;
                background-color: black;
                opacity: 0;
                -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
                filter: alpha(opacity=0);
                -moz-opacity:0;
                -khtml-opacity: 0;
        }
        #videoImage{
                background:url(/cms/experiences/coke/html/img/18896270_max.jpg) top left no-repeat;
                width:450px;height:506px;cursor:pointer;
        }
        #videoImage:hover{
                background-position:0 -253px;
        }
  /*]]>*/
  </style>

  
  <div class="wrapper clearfix" id="hide">
    <div class="clearfix">
        <div style="float:right;">
            <iframe src="http://ben.lovemac.cheggnet.com/lovebutton" 
            scrolling="no" frameborder="0" allowTransparency="true" 
            style="border:none; overflow:hidden; width:160px; height:30px">
            </iframe>
        </div>
  </div>
    <div class="container content-top clearfix">
      <!-- module -->
      <!-- Comment Test -->
      <script type="text/javascript">
//<![CDATA[
        jQuery(document).ready(function() {
                 jQuery('#docP').flash({
                         src: '/cms/experiences/coke/html/swf/cactus-960x300b.swf',
                         width: 960,
                         height: 300,
                         wmode: "opaque",
                         flashvars: { clickTAG:"http://apps.facebook.com/ahh-giver/?ref=ts", trackingFunction:"flashTagging", trackingTag:"docPemberton" }
                 });
                 jQuery(".jcarousel-mycarousel").jCarouselLite({
                         btnNext: ".jcarousel-next",
                 btnPrev: ".jcarousel-prev"
                });
        });
      </script>
      <div class="jcarousel-container jcarousel-container-horizontal">
        <div class="jcarousel-prev jcarousel-prev-horizontal" style="display: block;">
        </div>

        <div class="jcarousel-next jcarousel-next-horizontal" style="display: block;">
        </div>

        <div class="carousel-frame frame-top"></div>

        <div class="carousel-frame frame-left"></div>

        <div class="carousel-frame frame-right"></div>

        <div class="carousel-frame frame-bottom"></div>

        <div class="jcarousel-mycarousel">
          <ul class="mycarousel">
            <li id="perfectHarmony" class=
            "flash-replaced jcarousel-item jcarousel-item-horizontal jcarousel-item-1 jcarousel-item-1-horizontal"
            jcarouselindex="1" style="visibility: visible;">
              <div class="alt">
                <a href=
                "https://perfectharmony.americanidol.com"
                target="_blank" onclick=
                "return htmlExpTrackWT(this, 'WT.ti', 'Offsite: perfectHarmony', 'WT.dl','1', 'WT.z_engage', 'LBE Interaction', 'WT.z_pclick', '1')">
                <img src="/cms/experiences/coke/html/img/AI_perfectHarmony-hero-960x300.jpg" /></a>
              </div>
            </li>
            <li id="americanIdol" class=
            "flash-replaced jcarousel-item jcarousel-item-horizontal jcarousel-item-1 jcarousel-item-1-horizontal"
            jcarouselindex="1" style="visibility: visible;">
              <div class="alt">
                <a href=
                "http://us.coca-cola.com/showLBE.do?id=americanIdol2013&amp;type=pillar&amp;size=3&amp;exp=html"
                target="_blank" onclick=
                "return htmlExpTrackWT(this, 'WT.ti', 'Offsite: americanIdol', 'WT.dl','1', 'WT.z_engage', 'LBE Interaction', 'WT.z_pclick', '1')">
                <img src="/cms/experiences/coke/html/img/AI2012_coke.comBanner_960x300.jpg" /></a>
              </div>
            </li>

           <!--  <li id="payItForward" class=
            "flash-replaced jcarousel-item jcarousel-item-horizontal jcarousel-item-1 jcarousel-item-1-horizontal"
            jcarouselindex="1" style="visibility: visible;">
              <div class="alt" style="position:relative;height:290px;">
                <a href=
                "http://www.mycokerewards.com/showLBE.do?id=payItForward2013&type=pillar&size=3&exp=html"
                target="_blank" onclick=
                "return htmlExpTrackWT(this, 'WT.ti', 'Offsite: payItForward', 'WT.dl','1', 'WT.z_engage', 'LBE Interaction', 'WT.z_pclick', '1')">
                <img src="/cms/experiences/coke/html/img/payItForward_cokeHero_960x300.jpg" style=
                "width:100%;height:100%;" /></a><a class="dynamicLink" href=
                "http://us.coca-cola.com/showLBE.do?id=payItForward2013&amp;type=pillar&amp;size=3&amp;exp=html&amp;loc=Rules"
                target="_blank"></a>
              </div>
            </li> -->

            <li id="docP" class=
            "flash-replaced jcarousel-item jcarousel-item-horizontal jcarousel-item-1 jcarousel-item-1-horizontal"
            jcarouselindex="1" style="visibility: visible;">
              <div class="alt">
                <a href="www.cokechase.com/index.html" target="_blank" onclick=
                "return htmlExpTrackWT(this, 'WT.ti', 'Offsite: docP', 'WT.dl','1', 'WT.z_engage', 'LBE Interaction', 'WT.z_pclick', '1')">
                <img src="/cms/experiences/coke/html/img/960x300_pregame_masthead.jpg" /></a>
              </div>
            </li>

            <li id="journey" class=
            "flash-replaced jcarousel-item jcarousel-item-horizontal jcarousel-item-1 jcarousel-item-1-horizontal"
            jcarouselindex="1" style="visibility: visible;">
              <div class="alt">
                <a href="http://www.coca-colacompany.com/?topic=food" target=
                "_blank" onclick=
                "return htmlExpTrackWT(this, 'WT.ti', 'Offsite: Journey', 'WT.dl','1', 'WT.z_engage', 'LBE Interaction', 'WT.z_pclick', '1')">
                <img src="/cms/experiences/coke/html/img/cokebrandfood_main.jpg" /></a>
              </div>
            </li>

          </ul>
        </div>
      </div><!--/.jcarousel-container --><!-- /module -->
    </div><!--/.container top -->

    <div class="container content-bottom clearfix">
      <!-- module -->

      <div class="grid_3">
        <a target="_blank" rel="nofollow" href="https://perfectharmony.americanidol.com" title=
        "PerfectHarmony" onclick=
        "return htmlExpTrackWT(this, 'WT.ti', 'Offsite: perfectBanner', 'WT.dl','1', 'WT.z_engage', 'LBE Interaction', 'WT.z_pclick', '1')">
        <img src="/cms/experiences/coke/html/img/AI_perfectHarmony-tile-220x326.jpg" alt="PerfectHarmony" border=
        "0" /></a>
      </div><!-- /module -->
      <!-- /module -->
      <!-- module -->

      <div class="grid_6">
          <object width="450" height="253"><param name="movie" style="z-index:0;" value="http://www.youtube.com/v/KEBJmZL8G1E?version=3&amp;hl=en_US"><param name="wmode" value="opaque"><param name="allowFullScreen" value="true"><param name="allowscriptaccess" value="always"><embed src="http://www.youtube.com/v/KEBJmZL8G1E?version=3&amp;hl=en_US" type="application/x-shockwave-flash" wmode="opaque" width="450" height="253" allowscriptaccess="always" allowfullscreen="true"></object>
      </div><!-- /module -->
      <!-- module -->

      <div class="grid_3">
        <div class="redBar"></div>

        <div class="social-box">
          <ul class="social-buttons">
            <li><a href="javascript:void(0)" class="btnFacebook" rel="facebook" onclick=
            "return htmlExpTrackWT(this, 'WT.ti', 'Onsite: FacebookTab', 'WT.dl','1', 'WT.z_engage', 'LBE Interaction', 'WT.z_pclick', '1')">
            Facebook</a></li>

            <li><a href="javascript:void(0)" class="btnTwitter" rel="twitter" onclick=
            "return htmlExpTrackWT(this, 'WT.ti', 'Onsite: TwitterTab', 'WT.dl','1', 'WT.z_engage', 'LBE Interaction', 'WT.z_pclick', '1')">
            Twitter</a></li>

            <li><a href="javascript:void(0)" class="btnYouTube" rel="youtube" onclick=
            "return htmlExpTrackWT(this, 'WT.ti', 'Onsite: YouTubeTab', 'WT.dl','1', 'WT.z_engage', 'LBE Interaction', 'WT.z_pclick', '1')">
            YouTube</a></li>

            <li><a href="javascript:void(0)" class="btnFlickr" rel="flickr" onclick=
            "return htmlExpTrackWT(this, 'WT.ti', 'Onsite: FlickrTab', 'WT.dl','1', 'WT.z_engage', 'LBE Interaction', 'WT.z_pclick', '1')">
            Flickr</a></li>
          </ul>

          <div class="social-content">
            <div class="feeds-list facebook">
              <h3 class="box-title"><a href="http://www.facebook.com/cocacola" class=
              "clearfix" target="_blank" rel="nofollow" onclick=
              "return htmlExpTrackWT(this, 'WT.ti', 'Offsite: Facebook', 'WT.dl','1', 'WT.z_engage', 'LBE Interaction', 'WT.z_pclick', '1')">
              <span class="text">Coca-Cola on Facebook</span><span class=
              "arrow">Go</span></a></h3><iframe src=
              "http://www.facebook.com/plugins/activity.php?site=coca-cola.com&amp;width=221&amp;height=275&amp;header=true&amp;colorscheme=light&amp;font&amp;border_color&amp;recommendations=false"
              scrolling="no" frameborder="0" style=
              "border:none; overflow:hidden; width:221px; height:323px;"
              allowtransparency="true"></iframe>
            </div><!--/.facebook -->

            <div class="feeds-list twitter">
              <h3 class="box-title"><a href="http://twitter.com/#!/cocacola" class=
              "clearfix" target="_blank" rel="nofollow" onclick=
              "return htmlExpTrackWT(this, 'WT.ti', 'Offsite: TwitterCoke', 'WT.dl','1', 'WT.z_engage', 'LBE Interaction', 'WT.z_pclick', '1')">
              <span class="text">Coca-Cola on Twitter</span><span class=
              "arrow">Go</span></a></h3>

              <div class="dynamic-content">
                <a href="javascript:void(0)" class="replace prev arrow" onclick=
                "return htmlExpTrackWT(this, 'WT.ti', 'Onsite: SocialModPrev', 'WT.dl','1', 'WT.z_engage', 'LBE Interaction', 'WT.z_pclick', '1')"
                style="display:none;">prev</a>

                <div class="slider" style="height:280px;">
                  <a class="twitter-timeline" data-dnt="true" href=
                  "https://twitter.com/CocaCola" data-widget-id="263349994029989888"
                  onclick=
                  "return htmlExpTrackWT(this, 'WT.ti', 'Offsite: Twitter', 'WT.dl','1', 'WT.z_engage', 'LBE Interaction', 'WT.z_pclick', '1')">
                  </a> <script type="text/javascript">
//<![CDATA[
                  !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
                  //]]>
                  </script>

                  <ul class="clearfix"></ul>
                </div><!--./Slider -->
                <a href="javascript:void(0)" class="replace next arrow" onclick=
                "return htmlExpTrackWT(this, 'WT.ti', 'Onsite: SocialModNext', 'WT.dl','1', 'WT.z_engage', 'LBE Interaction', 'WT.z_pclick', '1')"
                style="display:none;">next</a>
              </div><!--./Dynamic Content -->
            </div><!--/.twitter -->

            <div class="feeds-list youtube">
              <h3 class="box-title"><a href="http://www.youtube.com/user/cocacola" class=
              "clearfix" target="_blank" rel="nofollow" onclick=
              "return htmlExpTrackWT(this, 'WT.ti', 'Offsite: Youtube', 'WT.dl','1', 'WT.z_engage', 'LBE Interaction', 'WT.z_pclick', '1')">
              <span class="text">Coca-Cola on YouTube</span><span class=
              "arrow">Go</span></a></h3>

              <div class="dynamic-content">
                <a href="javascript:void(0)" class="replace prev arrow" onclick=
                "return htmlExpTrackWT(this, 'WT.ti', 'Onsite: SocialModPrev', 'WT.dl','1', 'WT.z_engage', 'LBE Interaction', 'WT.z_pclick', '1')">
                prev</a>

                <div class="slider">
                  <ul class="clearfix"></ul>
                </div><!--./Slider -->
                <a href="javascript:void(0)" class="replace next arrow" onclick=
                "return htmlExpTrackWT(this, 'WT.ti', 'Onsite: SocialModNext', 'WT.dl','1', 'WT.z_engage', 'LBE Interaction', 'WT.z_pclick', '1')">next</a>
              </div><!--./Dynamic Content -->
            </div><!--/.youtube -->

            <div class="feeds-list flickr">
              <h3 class="box-title"><a href=
              "http://www.flickr.com/groups/thecoca-colaco/pool/" class="clearfix"
              target="_blank" rel="nofollow" onclick=
              "return htmlExpTrackWT(this, 'WT.ti', 'Offsite: Flickr', 'WT.dl','1', 'WT.z_engage', 'LBE Interaction', 'WT.z_pclick', '1')">
              <span class="text">Coca-Cola on Flickr</span><span class=
              "arrow">Go</span></a></h3>

              <div class="dynamic-content">
                <a href="javascript:void(0)" class="replace prev arrow" onclick=
                "return htmlExpTrackWT(this, 'WT.ti', 'Onsite: SocialModPrev', 'WT.dl','1', 'WT.z_engage', 'LBE Interaction', 'WT.z_pclick', '1')">
                prev</a>

                <div class="slider">
                  <ul class="clearfix"></ul>
                </div><!--./Slider -->
                <a href="javascript:void(0)" class="replace next arrow" onclick=
                "return htmlExpTrackWT(this, 'WT.ti', 'Onsite: SocialModNext', 'WT.dl','1', 'WT.z_engage', 'LBE Interaction', 'WT.z_pclick', '1')">next</a>
              </div><!--./Dynamic Content -->
            </div><!--/.flickr -->
          </div>
        </div><script type="text/javascript">
//<![CDATA[
        scCOKE.socialWidget.init(); 
        //]]>
        </script>
      </div><!-- /module -->
      <!-- module -->

      <div class="wrap_logos clearfix">
        <div class="grid_2 live-positively">
          <a href="http://livepositively.com/home/?wt.mc_id=CCSLP/" target="_blank"
          onclick=
          "return htmlExpTrackWT(this, 'WT.ti', 'Offsite: LivePositively', 'WT.dl','1', 'WT.z_engage', 'LBE Interaction', 'WT.z_pclick', '1')">
          <img src="/cms/experiences/coke/html/img/common/live-positively.png" alt=
          "Coca-Cola Live positively(tm)" /></a>
        </div>

        <div class="grid_3 freestyle">
          <a href="http://www.coca-colafreestyle.com/" target="_blank" onclick=
          "return htmlExpTrackWT(this, 'WT.ti', 'Onsite: Freestyle', 'WT.dl','1', 'WT.z_engage', 'LBE Interaction', 'WT.z_pclick', '1')">
          <img src="/cms/experiences/coke/html/img/common/freestyle.gif" alt=
          "Coca-cola freestyle(r)" /></a>
        </div>

        <div class="grid_2 choose-your-brand">
          <a href="http://www.facebook.com/cocacola" title="Coca-Cola" class=
          "lnkChooseCocaCola" target="_blank" onclick=
          "return htmlExpTrackWT(this, 'WT.ti', 'Offsite: FacebookCoke', 'WT.dl','1', 'WT.z_engage', 'LBE Interaction', 'WT.z_pclick', '1')">
          <img src="/cms/experiences/coke/html/img/common/lnkChooseCocaCola.jpg" alt="Coca-Cola" /></a>
          <a href="http://www.cokezero.com" title="Coca-Cola Zero" class="lnkChooseZero"
          target="_blank" onclick=
          "return htmlExpTrackWT(this, 'WT.ti', 'Offsite: CokeZeroFacebook', 'WT.dl','1', 'WT.z_engage', 'LBE Interaction', 'WT.z_pclick', '1')">
          <img src="/cms/experiences/coke/html/img/common/lnkChooseZero.jpg" alt="Coca-Cola Zero" /></a>
          <a href="http://www.dietcoke.com" title="Diet Coke" class="lnkChooseDiet"
          target="_blank" onclick=
          "return htmlExpTrackWT(this, 'WT.ti', 'Offsite: DietCokeFacebook', 'WT.dl','1', 'WT.z_engage', 'LBE Interaction', 'WT.z_pclick', '1')">
          <img src="/cms/experiences/coke/html/img/common/lnkChooseDiet.jpg" alt="Diet Coke" /></a>
        </div>

        <div class="grid_3 mcr">
          <a href="http://www.mycokerewards.com" target="_blank" onclick=
          "return htmlExpTrackWT(this, 'WT.ti', 'Onsite: MCR', 'WT.dl','1', 'WT.z_engage', 'LBE Interaction', 'WT.z_pclick', '1')">
          <img src="/cms/experiences/coke/html/img/common/mycoke-rewards.jpg" alt="Mycoke Rewards" /></a>
        </div>

        <div class="grid_2 mycoke">
          <a href="http://www.mycoke.com" target="_blank" onclick=
          "return htmlExpTrackWT(this, 'WT.ti', 'Onsite: MyCoke', 'WT.dl','1', 'WT.z_engage', 'LBE Interaction', 'WT.z_pclick', '1')">
          <img src="/cms/experiences/coke/html/img/common/mycoke.jpg" alt="Mycoke" /></a>
        </div>
      </div><!--/. Grid Logos --><!-- /module -->
    </div><!--/.container bottom -->

    <div class="footer clearfix">
      <div class="grid_6">
        <a href="http://www.coca-colacompany.com/our-company/" title=
        "About The Coca-Cola Company" target="_blank" class="replace" id="lnkAbout"
        onclick=
        "return htmlExpTrackWT(this, 'WT.ti', 'Offsite: AboutCoke', 'WT.dl','1', 'WT.z_engage', 'LBE Interaction', 'WT.z_pclick', '1')">
        About The Coca-Cola Company</a> <a href=
        "http://www.thecoca-colacompany.com/careers/" title="Careers" target="_blank"
        class="replace" id="lnkCareers">Careers</a> <a href=
        "http://www.coca-colacompany.com/brands/the-coca-cola-company" title=
        "Product Information" target="_blank" class="replace" id="lnkProductInfo"
        onclick="return htmlExpTrackWT(this, 'WT.ti', 'Offsite: ProductInformation', 'WT.dl','1', 'WT.z_engage', 'LBE Interaction', 'WT.z_pclick', '1')">
        Product Information</a> <a href=
        "http://www.coca-colacompany.com/brands/nutrition-information-us" title=
        "Nutrition Information" target="_blank" class="replace" id="lnkNutrition"
        onclick="return htmlExpTrackWT(this, 'WT.ti', 'Offsite: NutritionInfo', 'WT.dl','1', 'WT.z_engage', 'LBE Interaction', 'WT.z_pclick', '1')">
        Nutrition Information</a>
      </div>

      <div class="grid_6 text-right">
        <a href="http://www.coca-colacompany.com/contact-us/" title="Contact Us" target=
        "_blank" onclick=
        "return htmlExpTrackWT(this, 'WT.ti', 'Offsite: ContactCoke', 'WT.dl','1', 'WT.z_engage', 'LBE Interaction', 'WT.z_pclick', '1')">
        Contact Us</a> <a href="/extrapages/termsPopup.html" title="Terms Of Use"
        onclick="return htmlExpTrackWT(this, 'WT.ti', 'Offsite: TermsofUse', 'WT.dl','1', 'WT.z_engage', 'LBE Interaction', 'WT.z_pclick', '1')"
        target="_blank">Terms Of Use</a> <a href=
        "http://www.coca-cola.com/tcccprivacypolicy?WT.cl=1%20&amp;WT.mm=footer7-privacy-red_en_US"
        title="Privacy Policy" target="_blank" class="last" onclick=
        "return htmlExpTrackWT(this, 'WT.ti', 'Offsite: PrivacyPolicy', 'WT.dl','1', 'WT.z_engage', 'LBE Interaction', 'WT.z_pclick', '1')">
        Privacy Policy</a>
      </div>
    </div><!--/.footer -->

    <div class="footer-legal clearfix">
      <div class="grid_12">
        &#169; 2011 The Coca-Cola Company, all rights reserved. Coca-Cola&#174;, "Open
        Happiness", and the Contour Bottle are registered trademarks of The Coca-Cola
        Company. <a href=
        "http://www.coca-cola.com/webstore/sitemap.html?WT.cl=1&amp;WT.mm=footer8-sitemap-red_en_US"
        onclick=
        "return htmlExpTrackWT(this, 'WT.ti', 'Onsite: SiteMap', 'WT.dl','1', 'WT.z_engage', 'LBE Interaction', 'WT.z_pclick', '1')">
        Site Map</a>
      </div>
    </div><!-- /.footer-legal -->
  </div><!--/.wrapper -->
	          <a href="WT.ac=xx_null_xx_null_1_slb"></a>
<script>dcs.WT.cg_s='coke-html';</script>


</div>
<div id="externalAMOE" style="display:none;">
    <div class="mediumPopTop"></div>
      <div class="mediumPopBody" id="amoeMainBox">
      	<div class="mediumPopTitle" id="amoePopHandleBeta">
      		<a href="javascript: void(0)" onclick="$.modal.close();"><img src="/flex-mod/desktop/cokered/images/btn_close.gif" width="20" height="20" alt="Close" class="floatRight simplemodal-close" /></a>
        	<p class="mediumText" id="amoePopTitle">AMOE</p>
		<div id="amoeErrorBox" class="formError" style="display:none;"></div>
        </div>
        
        <!-- mediumBox End -->
        <div class="clear"></div>

      </div>
      <!-- mediumPopBody End -->
      <div class="mediumPopBtm"></div>
   
</div>

<div id="postActivityResultsDiv"></div>

<script type="text/javascript">
function showAMOE(itemId) {
	$("#amoeErrorBox").hide();
	$.ajax({
		type: "GET",
		url: "/amoe.do",
		data: {"amoeKey":itemId},
		success: function(html) {
			$("#amoeMainBox").html(html);
		},
		error: function() {
			$("#amoeErrorBox").text("Uh oh... there is a connection issue, please try again.");
			$("#amoeErrorBox").show();
		}
	});
        $("#externalAMOE").modal({
          close: false,
          onShow: function(dialog) {
            dialog.container.draggable({handle: 'div#amoePopHandle', cursor: 'move'});
          }
        });
		
}
function shareExperience(){
shareWithAFriendLBE('coke');
}

  function postActivity(source,action,itemId,responseType) {
		$.ajax({
			type: "GET",
			url: "/api/postActivity.do",
			data: {"source":source,"action":action,"item":itemId,"responseType":responseType},
			success: function(response) {
			    if (responseType=="json") { 
			    	experienceJSONResponse(response);
			    	dcsMultiTrack("DCS.dcsuri", "/experience", "WT.ti", "Post Activity Success - JSON",'WT.z_postActivity','1');
			    } else {
				    $("#postActivityResultsDiv").html(response);
				    dcsMultiTrack("DCS.dcsuri", "/experience", "WT.ti", "Post Activity Success - HTML",'WT.z_postActivity','1');
				}
			},
				error: function() {
				dcsMultiTrack("DCS.dcsuri", "/experience", "WT.ti", "Post Activity Failed",'WT.z_postActivity','1');
			}
		});
  }
</script>


    </div>
  <!-- footer End -->
</div>
<!-- container End -->
	<div id="altContent"></div>
		<script type="text/javascript">
			dcs.WT.z_g='3';
		</script>			
	<script type="text/javascript">
	$(document).ready(function(){
		// window.webtrendsAsyncInit();
		dcs.track();
	});

	function deActivateSession(fbLogout) {
      	$.ajax({
      		type: "GET",
      		url: "/deActivateSession.do" + (fbLogout || ""),
      		timeout: 15000,
			dataType: 'json',
			success: function(responseSet, textStatus) {
				responseCode = responseSet.responseCode;
				switch(responseCode) {
							case 0:	 window.location.href = responseSet.redirectUrl; break;
							default: $("#timeoutError").html("Oops, we weren't able to log you out.").show(); break;
				}
			},
			error: function(XMLHttpRequest, textStatus, errorThrown) {
				$("#timeoutError").html("Oops, we weren't able to log you out.").show();
			}
      	});

	}

var logoutpopTimer;
var logoutTimer;


function showLogoutPop(){
    //ShowLogoutpop
	$.modal.close();
	$("#timeoutPop").modal({ close: false,
		onShow: function (dialog) {
			dialog.container.draggable({handle: 'div, div#timeoutPopTop', cursor: 'move'});
		}
	});
	logoutTimer = setTimeout("deActivateSession()",300000); //1 min for testing; should be 300000 ms (5 mins)
}

function logMeOutClickedInLogoutPop(){
$.modal.close();
deActivateSession("?fbLogout=true");
}
function keepMeLoggedInClickedInLogoutPop(){
clearTimeout(logoutTimer);
clearTimeout(logoutpopTimer);
      	$.ajax({
      		type: "GET",
      		url: "/keepSessionActive.do",
      		timeout: 15000,
			dataType: 'json',
			success: function(responseSet, textStatus) {
				responseCode = responseSet.responseCode;
				switch(responseCode) {
							case 0: logoutpopTimer = setTimeout("showLogoutPop()",36000000);$.modal.close();//5 min for testing; should be 1500000 secs(25 mins)
									break;
							default: $("#timeoutError").html("Oops, we weren't able to keep you logged in.").show(); break;
				}
			},
			error: function(XMLHttpRequest, textStatus, errorThrown) {
				$("#timeoutError").html("Oops, we weren't able to keep you logged in.").show();
			}
      	});
}


</script>
<iframe name="loginIframeBox" id="loginIframeBox" src="/flex-mod/desktop/cokered/images/spacer.gif" height="0" width="0" border="0" style="visibility:hidden;"></iframe>



<noscript>
<div><img alt="DCSIMG" id="DCSIMG" width="1" height="1" src="http://statse.webtrendslive.com/dcso58g52100008ukenmpuiyd_3k6o/njs.gif?dcsuri=/nojavascript&amp;WT.js=No&amp;WT.tv=8.6.2&amp;WT.dcssip=www.mycokerewards.com"/></div>
</noscript>
</div>
</body>
</html>
HTML;
    }
}