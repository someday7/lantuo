/**
 * @author:周文博
 * @email:steven198911@163.com
 * @desc:一个很简单的jquery slide插件,支持横向纵向滑动，支持鼠标左右滑动切换效果
 * @copyright by myself
 * @date:2014-10-31 
 * @version: 1.0.0
 * @param {Object} $
 */
(function($){
	var timer;
	var startX, startY, endX, endY;
	$.fn.slide = function(options){
		/**
		 *定义一些简单的配置
		 * @param hcurrent 横向slide 当前的page下标
		 * @param vcurrent 纵向slide 当前的page下标
		 * @param auto(适用于横向) 自动轮播参数  默认为true自动轮播 设置为false时，将不会自动轮播，只有点击下方的切换小按钮才能切换背景图片
		 * @param time(适用于横向) 定时器自动轮播的定时器 间隔毫秒数
		 * @param view 0为横向slide 1为纵向slide
		 * @param speed(适用于纵向) 纵向卡片slide上下滑动的用时毫秒
		 * @param hoverStop(适用于横向) 鼠标悬浮在自动轮播的图片上时将停止图片轮播 默认设为false 为true就表示 鼠标悬浮上去停止轮播
		 * @param arrow(适用于横向) 显示左右两侧的箭头icon 默认显示 不显示时传递参数false即可
		 * @param model(适用于纵向) 为0表示常规太，有多少个slide section就有多少个dot 为1表示其他情况 (默认将container第一个div子元素后面的所有div在页面上以一种并入的形式放在container第一个div子元素里面最后一个子元素上)
		 */
		var defaults = {
			hcurrent: 0,
			vcurrent: 0,
			auto: true,
			time:3000,
			view:0,
			animation:0,
			speed:1000,
			hoverStop:false,
			arrow:true,
			model:0
		};
		var sets = $.extend({}, defaults, options || {});
		/**
		 *获取当前对象，根据传递过来的参数值判断 是横向还是纵向效果 添加对应的class类
		 */
		var obj =sets.view==0 ? $(this).removeClass("slideDiv").toggleClass("slideDiv jq-slide"):$(this).removeClass("scrollDiv").toggleClass("scrollDiv jq-slide");
		/**
		 *定义初始化dot的父元素 
		 */
		var ul=$("<ul/>");
		var li="<li/>";
		/**
		 *横向slide的具体逻辑 
		 */
		var hSlide=function(){
			var $bannerBgs=obj.find(" > div").removeClass("slide_bg").toggleClass("slide_bg");
			$bannerBgs.css("height",$bannerBgs.eq(0).css("height"));
			obj.css("height",$bannerBgs.css("height"));
			if(sets.arrow){
				var $arrow=$('<div class="jq-scroll_arrow arrow_left"></div><div class="jq-scroll_arrow arrow_right"></div>');
				obj.append($arrow);
			}
			var showArrow=function(n){
				if(n==0){
					obj.find(".arrow_left").show();
				}else if(n==1){
					obj.find(".arrow_right").show();
				}
			};
			if(sets.arrow){
				obj.bind('mousemove',function(e){
							var x=e.pageX;
							if(x>document.body.clientWidth*0.6){
								showArrow(1);
							}else if(x<document.body.clientWidth*0.4){
								showArrow(0);
							}else{
								$(".jq-scroll_arrow").hide();
							}
							
							
					});
				obj.bind('mouseout',function(e){
						$(".jq-scroll_arrow").hide();
				});
				$(".jq-scroll_arrow").bind('click',function(){
					$(this).hasClass("arrow_left")?slide(true):slide(false);
				});
			}
			/**
			 *鼠标滑动切换背景图片 
			 */
			$bannerBgs.each(function(){
				$(this).bind('mousedown',function(e){
					startX=e.pageX;
				});
				$(this).bind('mouseup',function(e){
					endX=e.pageX;
					if(endX-startX>100){
						slide(true);
					}else if(startX-endX>100){
						slide(false);
					}
				});
				$(this).hover(function(e){
					if(sets.auto&&sets.hoverStop){
						obj.slide.stop();
					}else{
						return;
					}
				},function(){
					if(sets.auto&&sets.hoverStop){
						start();
					}else{
						return;
					}
				});
			});
			/**
			 *根据图片的张数循环出下面按钮的个数 
			 */
			for(var i=0;i<$bannerBgs.length;i++){
				if(sets.animation==1){
					$bannerBgs.eq(i).css("left",i*100+"%");
				}
				ul.append(i==0?$(li).addClass("active"):li);
			}
			ul.appendTo(obj);
			ul.css("margin-left",-((ul.width()/2-15)));
			
			if(sets.animation==0){
				$bannerBgs.eq(0).siblings(".slide_bg").hide();
			}
			//obj.css("width",""+$bannerBgs.length*100+"%");
			/**
			 *定义计时器进行轮播 
			 */
			var start=function(){
				timer = setInterval(function(){
					change();
				}, sets.time);
			};
			function slide(opt,f){
				obj.slide.stop();
				opt&&opt?sets.hcurrent--:sets.hcurrent++;
				if(sets.hcurrent==$bannerBgs.length){
					sets.hcurrent=0;
				}
				if(sets.hcurrent<0){
					sets.hcurrent=$bannerBgs.length-1;
				}
				if(sets.animation==0){
					$bannerBgs.fadeOut().eq(sets.hcurrent).fadeIn();
				}else if(sets.animation==1){
						$bannerBgs.eq(sets.hcurrent-1).css("left","0px").animate({left:"-100%"},"slow");
						$bannerBgs.eq(sets.hcurrent).css("left","100%").animate({left:"0px"},"slow",function(){
							
						}).siblings(".slide_bg").css("left","-10000px");
				}else{
					$bannerBgs.slideUp().eq(sets.hcurrent).slideDown();
				}
				
				//$bannerBgs.slideUp().eq(sets.hcurrent).slideDown();
				//obj.animate({marginLeft:''+(-sets.hcurrent*100)+'%'});
				obj.find("ul li").removeClass("active").eq(sets.hcurrent).addClass("active");  
				if(sets.auto&&!sets.hoverStop){
					start();
				}
			}
			/**
			 *自定义从哪一页开始轮播
			 *  
			 */
			function changeTo(index){
				if(sets.animation==0){
					$bannerBgs.fadeOut().eq(index).fadeIn();
				}else if(sets.animation==1){
					
					$bannerBgs.eq(index-1).css("left","0px").animate({left:"-100%"},"slow");
						$bannerBgs.eq(index).css("left","100%").animate({left:"0px"},"slow",function(){
							
						}).siblings(".slide_bg").css("left","-10000px");
				}else{
					$bannerBgs.slideUp().eq(index).slideDown();
				}
				
				//$bannerBgs.fadeOut().eq(index).fadeIn();
				//$bannerBgs.slideUp().eq(index).slideDown();
				//obj.animate({marginLeft:''+(-index*100)+'%'});
				obj.find("ul li").removeClass("active").eq(index).addClass("active");  
			}
			/**
			 *自动轮播的逻辑处理业务
			 *  
			 */
			function change(){
				sets.hcurrent++;
				if(sets.hcurrent==$bannerBgs.length){
						sets.hcurrent=0;
				}
				if(sets.animation==0){
					$bannerBgs.fadeOut().eq(sets.hcurrent).fadeIn();
				}else if(sets.animation==1){
						$bannerBgs.eq(sets.hcurrent-1).animate({left:"-100%"},"slow");
						$bannerBgs.eq(sets.hcurrent).css("left","100%").animate({left:"0px"},"slow",function(){
							
						}).siblings(".slide_bg").css("left","-10000px");
						
				}else{
					$bannerBgs.slideUp().eq(sets.hcurrent).slideDown();
				}
				//$bannerBgs.fadeOut().eq(sets.hcurrent).fadeIn();
				//$bannerBgs.slideUp().eq(sets.hcurrent).slideDown();
				//obj.animate({marginLeft:''+(-sets.hcurrent*100)+'%'});
				obj.find("ul li").removeClass("active").eq(sets.hcurrent).addClass("active");  
			}
			/**
			 *判断配置是否为true 
			 */
			if(sets.auto){
				start();
			}
			/*
			 * 判断用户是否有自定义设置从哪一页开始轮播
			 */
			if(sets.hcurrent!=0){
				changeTo(sets.hcurrent);
			}
			/**
			 *点击小按钮的处理逻辑 
			 */
			$("ul li",obj).bind('click', function () {  
				obj.slide.stop();
				var This=this;
	            if (sets.hcurrent != $(This).index()) {  
	                sets.hcurrent = $(This).index();  
	                $(This).siblings().removeClass("active").end().addClass("active");  
	                if(sets.animation==0){
						$bannerBgs.fadeOut().eq(sets.hcurrent).fadeIn();
					}else if(sets.animation==1){
						$bannerBgs.eq(sets.hcurrent-1).css("left","0px").animate({left:"-100%"},"slow");
						$bannerBgs.eq(sets.hcurrent).css("left","100%").animate({left:"0px"},"slow",function(){
							
						}).siblings(".slide_bg").css("left","-10000px");
					}else{
						$bannerBgs.slideUp().eq(sets.hcurrent).slideDown();
					}
	              // $bannerBgs.fadeOut().eq(sets.hcurrent).fadeIn();
	                //$bannerBgs.slideUp().eq(sets.hcurrent).slideDown();
	                //obj.animate({marginLeft:''+(-sets.hcurrent*100)+'%'});
	            };  
	           if(sets.auto){
					start();
				}
	        }); 
	        /**
	         *调整slide container以及dot区域在当前可视区域的位置 
	         */
	        var refreshSlide = function(){
			   $bannerBgs.css("height",$bannerBgs.find("div:visible").css("height"));
				obj.css("height",$bannerBgs.css("height"));
				ul.css("margin-left",-(ul.width()/2));
			};
			/**
			 *当窗口大小发生改变时需要重新定位一下图片父元素以及slide container盒子的高度 
			 */
			$(window).resize(function(){
				refreshSlide();
			});
		};
		/**
		 *纵向slide的具体逻辑 
		 */
		var vSlide=function(){
			var scroll=obj.find(" > div").removeClass("scroll").toggleClass("scroll");
			var page=scroll.find("div").removeClass("scrollDiv-page ").toggleClass("scrollDiv-page");
			var mainLength=obj.find(" > div:eq(0)").find("div").length;
			for (var i=0; i < page.length; i++) {
			  ul.append(i==0?$(li).addClass("active"):li);
			};
			if(sets.model==1){
				for(var j=page.length-1;j>mainLength-1;j--){
					ul.find("li:eq("+j+")").css("display","none");
				}
			}
			ul.appendTo(obj);
			ul.css("margin-top",-(ul.height()/2));
			sets.length=page.length;
			var canScroll = true;
			/**
			 * 鼠标滚轮滚动事件逻辑
 			* @param {Object} e
			 */
		    var handlerScroll=function(e) {
		        var delta,
		            evt = e.originalEvent; 
		        delta = evt.detail ? evt.detail * (-120) : evt.wheelDelta; 
		        if (!canScroll) {
		            e.preventDefault();
		            e.stopPropagation();
		            e.returnValue = false;
		            return false;
		        }
		
		        if (delta > 0) {
		            scrollUp();
		        } else {
		            scrollDown();
		        }
		        return false;
		    };
		    /**
		     *向上滚动的逻辑 
		     */
		    var scrollUp=function(){
		    	sets.vcurrent--;
		    	if(sets.vcurrent<0){
		    		sets.vcurrent++;
		    		return;
		    	}else{
		    		canScroll = false;
		    		scroll.stop().animate({top:(parseInt(scroll.css("top"))+$(page[sets.vcurrent]).height())},sets.speed,"linear",function(){
		    			canScroll=true;
		    			if(sets.model==1&&sets.vcurrent>=mainLength){
		    				ul.find("li:eq("+mainLength-1+")").addClass("active").siblings().removeClass("active");
		    			}else{
		    				ul.find("li:eq("+sets.vcurrent+")").addClass("active").siblings().removeClass("active");
		    			}
		    		});
		    	}
		    };
		    /**
		     *向下滚动的逻辑 
		     */
		    var scrollDown=function(){
		    	sets.vcurrent++;
		    	if(sets.vcurrent==sets.length){
		    		sets.vcurrent--;
		    		return;
		    	}else{
		    		canScroll = false;
		    		scroll.stop().animate({top:(parseInt(scroll.css("top"))-$(page[sets.vcurrent]).height())},sets.speed,"swing",function(){
		    			canScroll=true;
		    			if(sets.model==1&&sets.vcurrent>=mainLength){
		    				ul.find("li:eq("+mainLength-1+")").addClass("active").siblings().removeClass("active");
		    			}else{
		    				ul.find("li:eq("+sets.vcurrent+")").addClass("active").siblings().removeClass("active");
		    			}
		    		});
		    	}
		    };
		    /**
		     *点击dot重新设置一下scroll盒子的top位置，否则调用 scrollDown或者scrollUp会出现错位
		     */
		    var resetTop=function(){
		    	var top=0;
        		for(var j=0;j<sets.vcurrent;j++){
        			top=top+$(page[j]).height();
        		}
        		scroll.css("top",-top);
		    };
		    /**
			 *点击小按钮的处理逻辑 
			 */
			$("ul li",obj).bind('click', function () {  
				var This=this;
	            if (sets.vcurrent != $(This).index()) {  
	            	if(sets.vcurrent<$(This).index()){
	            		sets.vcurrent=$(This).index()-1;
	            		resetTop();
	            		scrollDown();
	            	}else{
	            		sets.vcurrent=$(This).index()+1;
	            		resetTop();
	            		scrollUp();
	            	}
	            };  
	        }); 
		    scroll.unbind();
		    /**
		     *为元素绑定滚动事件，以及绑定鼠标上下滑动事件 
		     */
			scroll.bind((/Firefox/i.test(navigator.userAgent)) ?
	        "DOMMouseScroll" : "mousewheel", handlerScroll);
	        scroll.bind('mousedown',function(e){
					startY=e.pageY;
				});
			scroll.bind('mouseup',function(e){
					endY=e.pageY;
					if(endY-startY>120){
						scrollUp();
					}else if(startY-endY>120){
						scrollDown();
					}
			});
		};
		/**
		 *根据传入的参数，进入对应的处理逻辑 
		 */
		if(sets.view==0){
			hSlide();
		}else if(sets.view==1){
			vSlide();
		}
	};
	$.fn.slide.stop=function(){
	  if(timer != null){
			clearInterval(timer);
			timer = null;
		}
	};
})(jQuery);