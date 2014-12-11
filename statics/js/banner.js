;(function($){
    $.fn.extend({
        //插件名称
        "banner":function(options){
            
            //设置默认参数
            var defaluts={
                direction:'lr', //运动方向 ud lr
                mode:'slide', //动画方式 fade(渐隐渐现) / slide 左右滑入
                page1s:true,  //是否需要page1s true/false
                btns:true,  //是否需要btns true/false
                title:true, //是否需要title true/false
                autoanimate:true, //是否需要自动 true/false
                ease:'easeInOutElastic',//ease插件
                cycle:true,//是否循环
                unlimited:true,//是否需要无限循环
                auto:2000,//自动时间
                animation:1000//动画时间
            };          
            var options = $.extend(defaluts,options);
            return this.each(function(){
                var op = options,obj = $(this),objLi = obj.find('li'),objSpan = obj.find('.page1 span'),lenB = obj.find('li').length,prev = obj.find('.prev'),next = obj.find('.next'),title = obj.find('.title');
                if(op.direction=='ud' && op.mode=='slide'){
                    var Scr = obj.find('ul');//定义滚动元素
                    var Scrw = Scr.find("li").outerWidth();//取得图片的宽度
                    var Scrh = Scr.find("li").outerHeight();//取得图片的宽度
                        Scr.find("li").height(Scrh)//LI宽度
                        Scr.height(Scrw*lenB);//计算滚动元素宽度
                        Scr.height(Scrh);//计算滚动元素高度                     
                }
                if(op.direction=='lr' && op.mode=='slide'){
                    var Scr = obj.find('ul');//定义滚动元素
                    var Scrw = Scr.find("li").outerWidth();//取得图片的宽度
                    var Scrh = Scr.find("li").outerHeight();//取得图片的宽度
                        Scr.find("li").width(Scrw)//LI宽度
                        Scr.width(Scrw*lenB);//计算滚动元素宽度
                        Scr.height(Scrh);//计算滚动元素高度                     
                }
                obj.find('.cont').text(lenB);
                var page1 = "<div class='page1'>";
                    for(i=1;i<=lenB;i++){
                        page1 += "<span>"+i+"</span>";    
                    }
                    page1+= "</div>";//page1 创建个数
                obj.append(page1);//把page1 插入到某个元素后面                
                var page1 = obj.find(".page1 span");//定义原点变量
                page1.eq(0).addClass("current");
                var imgAlt = objLi.eq(0).find('img').attr('alt');
                obj.find('.alt').text(imgAlt);
                if(op.page1s==false){
                    obj.find('.page1').hide();
                }
                if(op.btns==false){
                    prev.hide();
                    next.hide();
                }
                if(op.title==false){
                    title.hide();
                }
                if(op.mode=='slide'){
                    objLi.css({'float':'left'});
                }else if(op.mode=='fade'){
                    objLi.css({'position':'absolute','top':0,'left':0,'display':'none'});
                    objLi.eq(0).show();
                }
                if(op.unlimited==true){
                    var n=0;
                    objLi.each(function(){
                        $(this).attr('indexNum',n++);
                    });
                }
                page1.live("click",function(){
                    var curr = page1.index(this)+1;
                    imgAlt = objLi.eq(page1.index(this)).find('img').attr('alt');
                    obj.find('.curr').text(curr);
                    obj.find('.alt').text(imgAlt);
                    if(op.direction=='ud' && op.mode=='slide'){
                        $(this).addClass("current").siblings().removeClass("current");
                        Scr.stop(true,true).animate({marginTop:-Scrh*($(this).index())},op.animation,op.ease);
                    }else if(op.direction=='lr' && op.mode=='slide'){
                        $(this).addClass("current").siblings().removeClass("current");
                        Scr.stop(true,true).animate({marginLeft:-Scrw*($(this).index())},op.animation,op.ease);
                    }else if(op.mode=='fade'){
                        if(objLi.eq(page1.index(this)).is(":hidden")){
                            objLi.stop(true,true).fadeOut(op.animation).eq(page1.removeClass("current").index($(this).addClass("current"))).fadeIn(op.animation);
                        }
                    }
                })//点击page1时运行动画
                if(op.autoanimate==true){
                    var index = 1;
                    var time = setInterval(function(){
                        page1.eq(index).click();
                        index++;
                        if(index==lenB){
                            index=0;
                        }       
                    },op.auto);//自动运行动画
                    obj.find('.page1,.prev,.next,.title').hover(
                        function(){
                            clearInterval(time);
                        },
                        function(){
                            index = obj.find(".page1 span.current").index()+1;//获取当前page1索引
                            if(index==lenB){
                                index=0;
                            }
                            time = setInterval(function(){
                                page1.eq(index).click();
                                index++;
                                if(index==lenB){
                                    index=0;
                                }
                            },op.auto);
                        }
                    );//悬停在page1上停止动画，离开恢复动画
                }
                prev.click(function(){
                    index = obj.find(".page1 span.current").index()-1;//获取当前page1索引
                    if(op.cycle==true){
                        if(index==-1) return false;
                    }
                    page1.eq(index).click();
                })//上一个
                next.click(function(){
                    index = obj.find(".page1 span.current").index()+1;//获取当前page1索引
                    if(index==lenB){
                        if(op.cycle==true){
                            index=lenB-1
                        }else{
                            index=0;
                        }
                    }
                    page1.eq(index).click();
                })//下一个
            });
        }       
    });
})(jQuery)