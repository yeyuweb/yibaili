//mainNav
$(function(){

	$('.centerList li').hover(function(){
		$(this).addClass('over').siblings().removeClass('over');
	})

	/*about*/
	$('.nav .about').hover(function(){
		$('.navShow-about').stop(true,true).slideDown();
		$('.navShow-technology,.navShow-product,.navShow-project,.navShow-support,.navShow-contact').stop(true,true).slideUp('fast');		
	})
	if($(".about,.technology,.product,.project,.support,.contact").hasClass("current")){
		$('.navShow-about,.navShow-technology,.navShow-product,.navShow-project,.navShow-support,.navShow-contact').dblclick(function(){
			$(this).stop(true,true).slideUp();
		})
	}else{
		$('.navShow-about,.navShow-technology,.navShow-product,.navShow-project,.navShow-support,.navShow-contact').mouseleave(function(){
			$(this).stop(true,true).slideUp();
		})
		}
	if($('.nav .about').hasClass('current')){			
		$('.navShow-about').stop(true,true).slideDown('fast');
		$('.navShow-technology').mouseleave(function(){
			$('.navShow-technology').stop(true,true).slideUp('fast');
		})
		$('.navShow-project').mouseleave(function(){
			$('.navShow-project').stop(true,true).slideUp('fast');
		})
		$('.navShow-support').mouseleave(function(){
			$('.navShow-support').stop(true,true).slideUp('fast');
		})
		$('.navShow-product').mouseleave(function(){
			$('.navShow-product').stop(true,true).slideUp('fast');
		})
		$('.navShow-contact').mouseleave(function(){
			$('.navShow-contact').stop(true,true).slideUp('fast');
		})
		}
		
	$('.navShow-about').mouseleave(function(){
		if($('.nav .technology').hasClass('current')){
			$('.navShow-technology').stop(true,true).slideDown();}
		//if($('.nav .product').hasClass('current')){
			//$('.navShow-product').stop(true,true).slideDown();}
		if($('.nav .project').hasClass('current')){
			$('.navShow-project').stop(true,true).slideDown();}
		if($('.nav .support').hasClass('current')){
			$('.navShow-support').stop(true,true).slideDown();}
		if($('.nav .contact').hasClass('current')){
			$('.navShow-contact').stop(true,true).slideDown();}
	})
	//$('.navShow-about').mouseleave(function(){
		//$(this).slideUp('fast');
	//})
	/*technology*/
	//$('.nav .technology').hover(function(){
		//$('.navShow-technology').stop(true,true).slideDown();
		//$('.navShow-about,.navShow-product,.navShow-project,.navShow-support,.navShow-contact').stop(true,true).slideUp('fast');
	//})	
	if($('.nav .technology').hasClass('current')){
		$('.navShow-technology').stop(true,true).slideDown();
		$('.navShow-about').mouseleave(function(){
			$('.navShow-about').stop(true,true).slideUp('fast');
		})
		$('.navShow-project').mouseleave(function(){
			$('.navShow-project').stop(true,true).slideUp('fast');
		})
		$('.navShow-support').mouseleave(function(){
			$('.navShow-support').stop(true,true).slideUp('fast');
		})
		$('.navShow-product').mouseleave(function(){
			$('.navShow-product').stop(true,true).slideUp('fast');
		})
		$('.navShow-contact').mouseleave(function(){
			$('.navShow-contact').stop(true,true).slideUp('fast');
		})
			};
	$('.nav .technology').hover(function(){
		$('.navShow-about,.navShow-product').stop(true,true).slideUp();
	})
	$('.navShow-technology').mouseleave(function(){
		//$(this).slideUp('fast');
		if($('.nav .about').hasClass('current')){
			$('.navShow-about').stop(true,true).slideDown();}
		//if($('.nav .product').hasClass('current')){
			//$('.navShow-product').stop(true,true).slideDown();}
		if($('.nav .project').hasClass('current')){
			$('.navShow-project').stop(true,true).slideDown();}
		if($('.nav .support').hasClass('current')){
			$('.navShow-support').stop(true,true).slideDown();}
		if($('.nav .contact').hasClass('current')){
			$('.navShow-contact').stop(true,true).slideDown();}
	})
	/*product*/
	$('.nav .product').hover(function(){
		$('.navShow-product').stop(true,true).slideDown();
		$('.navShow-about,.navShow-technology,.navShow-project,.navShow-support,.navShow-contact').stop(true,true).slideUp('fast');
	})	
	if($('.nav .product').hasClass('current')){			
		$('.navShow-about').mouseleave(function(){
			$('.navShow-about').stop(true,true).slideUp('fast');
		})
		$('.navShow-project').mouseleave(function(){
			$('.navShow-project').stop(true,true).slideUp('fast');
		})
		$('.navShow-support').mouseleave(function(){
			$('.navShow-support').stop(true,true).slideUp('fast');
		})
		$('.navShow-technology').mouseleave(function(){
			$('.navShow-technology').stop(true,true).slideUp('fast');
		})
		$('.navShow-contact').mouseleave(function(){
			$('.navShow-contact').stop(true,true).slideUp('fast');
		})
	};
	$('.navShow-product').mouseleave(function(){
		$(this).stop(true,true).slideUp('fast');
		if($('.nav .about').hasClass('current')){
			$('.navShow-about').stop(true,true).slideDown();}
		if($('.nav .technology').hasClass('current')){
			$('.navShow-technology').stop(true,true).slideDown();}
		if($('.nav .project').hasClass('current')){
			$('.navShow-project').stop(true,true).slideDown();}
		if($('.nav .support').hasClass('current')){
			$('.navShow-support').stop(true,true).slideDown();}
		if($('.nav .contact').hasClass('current')){
			$('.navShow-contact').stop(true,true).slideDown();}
	})
	/*project*/	
	$('.nav .project').hover(function(){
		$('.navShow-project').stop(true,true).slideDown();
		$('.navShow-about,.navShow-product,.navShow-product,.navShow-support,.navShow-contact').stop(true,true).slideUp('fast');
	})
	if($('.nav .project').hasClass('current')){
			$('.navShow-project').stop(true,true).slideDown();
		$('.navShow-about').mouseleave(function(){
			$('.navShow-about').slideUp('fast');
		})
		$('.navShow-product').mouseleave(function(){
			$('.navShow-product').slideUp('fast');
		})
		$('.navShow-support').mouseleave(function(){
			$('.navShow-support').slideUp('fast');
		})
		$('.navShow-technology').mouseleave(function(){
			$('.navShow-technology').slideUp('fast');
		})
		$('.navShow-contact').mouseleave(function(){
			$('.navShow-contact').slideUp('fast');
		})
			}
	$('.navShow-project').mouseleave(function(){
		//$(this).slideUp('fast');
		if($('.nav .about').hasClass('current')){
			$('.navShow-about').stop(true,true).slideDown();}
		if($('.nav .technology').hasClass('current')){
			$('.navShow-technology').stop(true,true).slideDown();}
		//if($('.nav .product').hasClass('current')){
			//$('.navShow-product').stop(true,true).slideDown();}
		if($('.nav .support').hasClass('current')){
			$('.navShow-support').stop(true,true).slideDown();}
		if($('.nav .contact').hasClass('current')){
			$('.navShow-contact').stop(true,true).slideDown();}
	})
	/*support*/
	$('.nav .support').hover(function(){
		$('.navShow-support').slideDown();
		$('.navShow-about,.navShow-product,.navShow-project,.navShow-technology,.navShow-contact').slideUp('fast');
	})
	if($('.nav .support').hasClass('current')){
			$('.navShow-support').stop(true,true).slideDown();
		$('.navShow-about').mouseleave(function(){
			$('.navShow-about').slideUp('fast');
		})
		$('.navShow-product').mouseleave(function(){
			$('.navShow-product').slideUp('fast');
		})
		$('.navShow-project').mouseleave(function(){
			$('.navShow-project').slideUp('fast');
		})
		$('.navShow-technology').mouseleave(function(){
			$('.navShow-technology').slideUp('fast');
		})
		$('.navShow-contact').mouseleave(function(){
			$('.navShow-contact').slideUp('fast');
		})
			}
	$('.navShow-support').mouseleave(function(){
		//$(this).slideUp('fast');
		if($('.nav .about').hasClass('current')){
			$('.navShow-about').stop(true,true).slideDown();}
		if($('.nav .technology').hasClass('current')){
			$('.navShow-technology').stop(true,true).slideDown();}
		//if($('.nav .product').hasClass('current')){
			//$('.navShow-product').stop(true,true).slideDown();}
		if($('.nav .project').hasClass('current')){
			$('.navShow-project').stop(true,true).slideDown();}
		if($('.nav .contact').hasClass('current')){
			$('.navShow-contact').stop(true,true).slideDown();}
	})	
	/*contact*/
	$('.nav .contact').hover(function(){
		$('.navShow-contact').slideDown();
		$('.navShow-about,.navShow-product,.navShow-project,.navShow-support,.navShow-technology').slideUp('fast');
	})
	if($('.nav .contact').hasClass('current')){
		$('.navShow-contact').stop(true,true).slideDown();
		$('.navShow-about').mouseleave(function(){
			$('.navShow-about').stop(true,true).slideUp('fast');
		})
		$('.navShow-product').mouseleave(function(){
			$('.navShow-product').stop(true,true).slideUp('fast');
		})
		$('.navShow-project').mouseleave(function(){
			$('.navShow-project').stop(true,true).slideUp('fast');
		})
		$('.navShow-technology').mouseleave(function(){
			$('.navShow-technology').stop(true,true).slideUp('fast');
		})
		$('.navShow-support').mouseleave(function(){
			$('.navShow-support').stop(true,true).slideUp('fast');
		})
		}
	$('.navShow-contact').mouseleave(function(){
		//$(this).slideUp('fast');
		if($('.nav .about').hasClass('current')){
			$('.navShow-about').stop(true,true).slideDown();}
		if($('.nav .technology').hasClass('current')){
			$('.navShow-technology').stop(true,true).slideDown();}
		//if($('.nav .product').hasClass('current')){
			//$('.navShow-product').stop(true,true).slideDown();}
		if($('.nav .project').hasClass('current')){
			$('.navShow-project').stop(true,true).slideDown();}
		if($('.nav .support').hasClass('current')){
			$('.navShow-support').stop(true,true).slideDown();}
	})	

})
//bannerProject
$(function(){		
	$('.projectBbox1 .pBbox').hover(function(){
		$(this).children('.layer').stop(true,true).fadeOut();
		$(this).children('.txt').stop(true,true).animate({bottom:'0px'},{duration:'5000'});
		},function(){
			$(this).children('.layer').stop(true,true).fadeIn();
			$(this).children('.txt').stop(true,true).animate({bottom:'-45px'},'fast');
		})

		$('.projectBbox2 .pBbox01').hover(function(){
			$(this).children('.layer').stop(true,true).fadeOut();
			$(this).children('.txt').stop(true,true).animate({bottom:'0px'},{duration:'5000'});
		},function(){
			$(this).children('.layer').stop(true,true).fadeIn();
			$(this).children('.txt').stop(true,true).animate({bottom:'-45px'},'fast');
		})

		$('.projectBbox3 .pBbox').hover(function(){
			$(this).children('.layer').stop(true,true).fadeOut();
			$(this).children('.txt').stop(true,true).animate({bottom:'0px'},{duration:'5000'});
		},function(){
			$(this).children('.layer').stop(true,true).fadeIn();
			$(this).children('.txt').stop(true,true).animate({bottom:'-45px'},'fast');
		})

		$('.projectBbox4 .pBbox01').hover(function(){
			$(this).children('.layer').stop(true,true).fadeOut();
			$(this).children('.txt').stop(true,true).animate({bottom:'0px'},{duration:'5000'});
		},function(){
			$(this).children('.layer').stop(true,true).fadeIn();
			$(this).children('.txt').stop(true,true).animate({bottom:'-45px'},'fast');
		})

		$('.projectBbox5 .pBbox').hover(function(){
			$(this).children('.layer').stop(true,true).fadeOut();
			$(this).children('.txt').stop(true,true).animate({bottom:'0px'},{duration:'5000'});
		},function(){
			$(this).children('.layer').stop(true,true).fadeIn();
			$(this).children('.txt').stop(true,true).animate({bottom:'-45px'},'fast');
		})
})
//sBotList
$('.sBotList li').hover(
	function(){
		//$(this).children('.text').animate({bottom:'0'},'slow');
		$(this).children('.text').stop(true,true).fadeIn();
	},function(){
		//$(this).children('.text').animate({bottom:'-220px'});
		$(this).children('.text').stop(true,true).fadeOut();
	}
)
//maintainList
$('.maintainList li').click(
	function(){
		$(this).addClass('current').siblings().removeClass('current');
		$(this).children('.textShow').slideDown(500);
		$(this).siblings().children('.textShow').slideUp(500);
	}
)
$('.maintainList li').eq(0).click();
//charityList
$('.charityList li').hover(function(){
	$(this).find('.roundShow,.roundShow1').stop(true,true).fadeIn();
	$(this).find(".axLayer").addClass("axLayer1");
},function(){
	$(this).find('.roundShow,.roundShow1').stop(true,true).fadeOut();
	$(this).find(".axLayer").removeClass("axLayer1");
})
$(function(){		
	$('.productLeftBox').hover(function(){
		//$(this).children('.layer').fadeOut();
		$(this).children('.txt').stop(true,true).animate({bottom:'0px'},{duration:'800'});
		},function(){
			//$(this).children('.layer').fadeIn();
			$(this).children('.txt').stop(true,true).animate({bottom:'-45px'},'fast');
		})

		$('.productRightBox .pBbox01').hover(function(){
			//$(this).children('.layer').fadeOut();
			$(this).children('.txt').stop(true,true).animate({bottom:'0px'},{duration:'800'});
		},function(){
			//$(this).children('.layer').fadeIn();
			$(this).children('.txt').stop(true,true).animate({bottom:'-45px'},'fast');
		})

		$('.productRightBox .pBbox').hover(function(){
			//$(this).children('.layer').fadeOut();
			$(this).children('.txt').stop(true,true).animate({bottom:'0px'},{duration:'800'});
		},function(){
			//$(this).children('.layer').fadeIn();
			$(this).children('.txt').stop(true,true).animate({bottom:'-45px'},'fast');
		})
})
$(function(){
//supportBox01
$('.supportBox01 .dt').hover(function(){
	$(this).children('img').attr(src,'../images/else/bigIcon_10.jpg')
})
//productTabList

//$('.productTabList li').click(function(){
//	$(this).addClass('current').siblings().removeClass('current');
//	var oIndex=$(this).index();
//	$('.ddd .productBox').eq(oIndex).show().siblings().hide();
//	$('.albumsBox .albumsList').eq(oIndex).show().siblings().hide();
//	$('.albumsBox .aaa').eq(oIndex).show().siblings().hide();
//})
//$('.productTabList li').eq(0).click();
$('.productTabList li').last().css({"background":"none"});
//detailTab
$('.detailTab ul li').click(function(){
	$(this).addClass('current').siblings().removeClass('current');
	var oIndex=$(this).index();
	$('.detailBox .detailShow').eq(oIndex).show().siblings().hide();
})
$('.detailTab ul li').eq(0).click();
//proLeftNavList

$(function(){
	$('.proLeftNavList li').click(function(){
	$(this).addClass('current').siblings().removeClass('current')
	//$(this).find('.ulShow').show();
	$(this).find('.ulShow').slideDown();
	$(this).siblings().find('.ulShow').slideUp();
	
	}//,function(){
	//$(this).removeClass('current').siblings().removeClass('current')
	//$(this).find('.ulShow').slideUp();
	//$(this).siblings().find('.ulShow').slideUp();
//}
)
	$(".proLeftNavList li").each(function(){
		if ($(this).hasClass("current")) {
            $(this).children('.ulShow').show();
        }
	});
	
})
//if($('.proLeftNavList').children('li').hasClass('current')){
	//$(this).children('.ulShow').show();
//}else{
	//$(this).children('.ulShow').hide();
//}
//technologyMain
/*$('.tMbox,.tMbox01').hover(function(){
	$(this).children('.tMboxShow,.tMboxShow01').animate({bottom:'0px'});
},function(){
	$(this).children('.tMboxShow,.tMboxShow01').animate({bottom:'-55px'});
})*/
//technologyTab
$('.technologyTab li').click(function(){
	$(this).addClass('current').siblings().removeClass('current');
	var oIndex=$(this).index();
	$('.aa .bb').eq(oIndex).fadeIn(500).siblings().fadeOut(500);
	if($('.technologyTab .ll').hasClass('current')){		
		$('.technologyVideo0').show();
		$('.technologyVideo1').hide();}else{
			$('.technologyVideo1').show();
		$('.technologyVideo0').hide();
		}	
})
//$('.technologyTab li').eq(0).click();
//bottom
//$('.arrowBot01').click(function(){
	//$('.bottom').slideDown('slow');
	//$(this).hide();
//})
//productSearch
$('.proMainTop').click(function(){
	$('.productSearch').slideDown();
	$(this).hide();
	$('.proMainTop01').show();
})
$('.proMainTop01').click(function(){
	$('.productSearch').slideUp();
	$(this).hide();
	$('.proMainTop').show();
})
$('.arrowBot01').click(function(){
        var scolltop = $(document).scrollTop();
        var _body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');//operaFix
        //$(this).toggleClass('arrowBot');
        $('.bottom').slideToggle(500);
        $(_body).animate({'scrollTop':scolltop+241},500);
		$(this).hide();
		$('.arrowBot').show();
    });
	
$('.arrowBot').click(function(){
	//$('.bottom').hide();
	//$('.arrowBot01').show();
	var scolltop = $(document).scrollTop();
        var _body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');//operaFix
        //$(this).toggleClass('arrowBot');
        $('.bottom').slideToggle(500);
        $(_body).animate({'scrollTop':scolltop-241},500);
		$(this).hide();
		$('.arrowBot01').show();
})
})
//contactDetailLeft
$('.contactDetailLeft ul li').click(function(){
	$(this).addClass('current').siblings().removeClass('current');
})
$('.contactDetailLeft01 ul li').click(function(){
	$(this).addClass('current').siblings().removeClass('current');
})
//college
$(".membersLeft li").hover(function(){
	$(this).find(".pMain").fadeIn();
},function(){
	$(this).find(".pMain").fadeOut("fast");
})
$('.ul01 li').hover(function(){	
	$(this).find('img').removeClass('img');
	$(this).find('.pName').addClass('pName01');
},function(){
	$(this).find('img').addClass('img');
	$(this).find('.pName').removeClass('pName01');
})
$('.ul02 li').hover(function(){	
	$(this).find('img').removeClass('img');
	$(this).find('.pName').addClass('pName01');
},function(){
	$(this).find('img').addClass('img');
	$(this).find('.pName').removeClass('pName01');
})
$('.ul03 li').hover(function(){	
	$(this).find('img').removeClass('img');
	$(this).find('.pName').addClass('pName01');
},function(){
	$(this).find('img').addClass('img');
	$(this).find('.pName').removeClass('pName01');
})
$('.online').click(function(){
	$('.onlineBox').fadeIn();
})
$('.close').click(function(){
	$('.onlineBox').fadeOut();
})
$("input:text,textarea").focus(function(){
		
		if($(this).val()==this.defaultValue){
			
			$(this).val("");
			
			}
		
		}).blur(function(){
			
			if($(this).val()==""){
			
			$(this).val(this.defaultValue);
			
			}
			});


//picList
	$(function () {
        $(function () {

            $('.xtu ul').css('width', $('.xtu ul li').length * $('.xtu li').outerWidth(true));
            var num = 6;
            var index = 0;

            var num2 = Math.ceil(num / 2);
            function change() {
                if (index < num2) {
                    $('.xtu ul').stop(true, true).animate({ 'left': '0' }, 500)
                } //else if (index + num2 < $('.xtu ul li').length) {
                    //$('.xtu ul').stop(true, true).animate({ 'left': -(index - num2 + 1) * $('.xtu li').outerWidth(true) }, 500)
                //}
                 else {
                    $('.xtu ul').stop(true, true).animate({ 'left': -($('.xtu ul li').length - num) * $('.xtu li').outerWidth(true) }, 500)
                }
                var h = $('.xtu li').eq(index).index();
                for (var i = 0; i < $('.xtu li').length; i++) {
                    $('.xtu li').eq(h).addClass('current').siblings().removeClass('current')
                }
                //for (var j = 0; j < $('.datu li').length; j++) {
                    //$('.datu ul').stop(true,false).animate({'left':-h*$('.kh_ban .datu li').width()},500)
                    //$('.datu li').eq(h).fadeIn(200).siblings().fadeOut(200)
                //}
                //var Src=$(".imgList li").children("img").attr("srce");
				//$(".imgBlist li").children("img").attr("src",Src);
            }
            $('.xtu li').click(function () {
                var index2 = $(this).index();
                index = index2;
                change();
            });
            $('.datu .you').click(function(){
				index++;
				if(index==$('.xtu li').length){
					index=0
				}
		        change();		      
			});
			$('.datu .zuo').click(function(){
				 index--;
				 if(index==-1){
				 	index=$('.xtu li').length-1
				 }
		         change();
			});
            $('.Right').click(function () {
                index++;
                if (index == $('.xtu li').length) {
                    index = 0
                }
                change();
            });
            $('.Left').click(function () {
                index--;
                if (index == -1) {
                    index = $('.xtu li').length - 1
                }
                change();
            });
            $('.xtu li:first').trigger('click');

            //var time = setInterval(function () {
                //index++;
                //if (index == $('.xtu li').length) {
                    //index = 0
                //}
                //change();
            //}, 4000);
            
        })
		$(".imgList li").click(function(){
				if(!$(this).hasClass('current')){
		            var Src=$(this).children("img").attr("srce");
				$(".imgBlist li").children("img").attr("src",Src);

		            
		        };
				
		    })
		
		/*if($('.xtu li').hasClass("current")){
			var Src=$(".imgList li").children("img").attr("srce");
				$(".imgBlist li").children("img").attr("src",Src);
		}*/
		
    })

$(function () {
            $(".infoRight1 table tr").each(function () {
                $(this).children("td").eq(0).css({ "background": "#DCDDDD", "width": "93px" });
                $(this).children("td").eq(1).css({ "border-right": "none","text-align":"left","text-indent":"6px"});
                })
            $(".infoRight1").children("p").hide();
        })
//$(window).bind('scroll',function(){$(this).scrollTop()>?0$('.technologyTab').css('top','-180px'):$('.technologyTab').css('top','-140px')});
// $(document).ready(function () {
//        $('.son_ul').hide(); //初始ul隐藏
//        $('.area .contactText').hover(function () { //鼠标移动函数
//            $(this).parent().find('ul.son_ul').slideDown();  //找到ul.son_ul显示
//            $(this).parent().find('li').hover(function () { $(this).addClass('hover') }, function () { $(this).removeClass('hover') }); //li的hover效果
//            $(this).parent().hover(function () { },
//				 function () {
//				     $(this).parent().find("ul.son_ul").slideUp();
//				 }
//									 );
//        }, function () { }
//										);
//        $('ul.son_ul li').click(function () {
//            $(this).parents('div').find('.contactText').html($(this).html());
//            $(this).parents('div').find('ul.son_ul').slideUp();
//        });
//    }
//							 );
//    $(document).ready(function () {
//        $('.son_ul01').hide(); //初始ul隐藏
//        $('.area01 .contactText01').hover(function () { //鼠标移动函数
//            $(this).parent().find('ul.son_ul01').slideDown();  //找到ul.son_ul显示
//            $(this).parent().find('li').hover(function () { $(this).addClass('hover') }, function () { $(this).removeClass('hover') }); //li的hover效果
//            $(this).parent().hover(function () { },
//				 function () {
//				     $(this).parent().find("ul.son_ul01").slideUp();
//				 }
//									 );
//        }, function () { }
//										);
//        $('ul.son_ul01 li').click(function () {
//            $(this).parents('div').find('.contactText01').html($(this).html());
//            $(this).parents('div').find('ul.son_ul01').slideUp();
//        });
//    }
//							 ); 
$(function(){
	$(".bannerProduct00 .slide").hover(function(){
		$(this).children(".q_title").stop(true,true).animate({"margin-left":"350px"},{duration:'6000'});
		$(this).siblings().children(".q_title").stop(true,true).hide();
	},function(){
		$(this).children(".q_title").stop(true,true).animate({"margin-left":"50px"},{duration:'6000'});
		$(this).siblings().children(".q_title").stop(true,true).show();
	})
	$(window).scroll(function(){

		var scrtop = $(document).scrollTop();
		if(scrtop < $('.technologyBox .warpdiv .div').eq(1).offset().top){
			$('.technologyTab li').eq(0).addClass('current').siblings().removeClass('current')
		} else if(scrtop>$('.technologyBox .warpdiv .div').eq(1).offset().top && scrtop< $('.technologyBox .warpdiv .div').eq(2).offset().top) {
			$('.technologyTab li').eq(1).addClass('current').siblings().removeClass('current')
		}else if(scrtop>$('.technologyBox .warpdiv .div').eq(2).offset().top && scrtop< $('.technologyBox .warpdiv .div').eq(3).offset().top) {
			$('.technologyTab li').eq(2).addClass('current').siblings().removeClass('current')
		}else if(scrtop>$('.technologyBox .warpdiv .div').eq(3).offset().top && scrtop< $('.technologyBox .warpdiv .div').eq(4).offset().top) {
			$('.technologyTab li').eq(3).addClass('current').siblings().removeClass('current')
		}else if(scrtop>$('.technologyBox .warpdiv .div').eq(4).offset().top && scrtop< $('.technologyBox .warpdiv .div').eq(5).offset().top) {
			$('.technologyTab li').eq(4).addClass('current').siblings().removeClass('current')
		}else if(scrtop>$('.technologyBox .warpdiv .div').eq(5).offset().top && scrtop< $('.technologyBox .warpdiv .div').eq(6).offset().top) {
			$('.technologyTab li').eq(5).addClass('current').siblings().removeClass('current')
		}else if(scrtop> $('.technologyBox .warpdiv .div').eq(6).offset().top) {
			$('.technologyTab li').eq(6).addClass('current').siblings().removeClass('current')
		}
	})
	if($(window).width() < 1370){
		$(".bannerProject").width("1340px");
	}else{
		$(".bannerProject").width("1420px");
	}
})