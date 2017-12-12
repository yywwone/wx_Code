$(function(){
    $('[data-slidizle]').slidizle({
        beforeChange : function(api) {
            console.log('previous', api.getPreviousSlide().index());
            console.log('current', api.getCurrentSlide().index());
            console.log('next', api.getNextSlide().index());
            console.log('previous active', api.getPreviousActiveSlide().index());
        }
    });

    //头部点击切换效果
    $(".hz-top-div-ul li a").click(function(){
        var str=$(this);
        $(".hz-top-div-ul li a").removeClass("hz-top-div-ul-active");
        str.addClass("hz-top-div-ul-active");
    });

    $(".journalism-l-div").mouseenter(function(){
        var str=$(this);
        str.css("background","#eeeeee");
    });
    $(".journalism-l-div").mouseleave(function(){
        var str=$(this);
        str.css("background","#fff");
    });

    //产品服务轮播切换
    var Page = 1;
    var i= 4;											//每页展示的视频个数
    //1.给下一张.next按钮绑定点击事件
    $('.next').click(function(){
        var $Parent = $(this).parents('.vShow');		//获取当前元素指定的父级元素
        var $vContent = $Parent.find('.vContentList');   //获取到视频展示区域，通过改变他的left值进行滑动

        var vWidth = $('.vContent').width();					//获取到视频展示区域的宽度
        var len = $vContent.find('li').length;			//获取视频展示区li元素的个数  是为了确定视频展示的页数
        var Pages = Math.ceil(len/ i);					//总体版面数量
        if(!$vContent.is(':animated')){   				//判断视频展示区域是否在进行动画，如果不进行判断就会出现，停止点击按钮，图片还在滚动
            if( Page == Pages){								//如果当前页码数等于总体版面数，那么回到第一页
                $vContent.animate({'left': 0}, 'slow');
                Page = 1;
            }else{										    //如果当前页码不等于总体版面去，那么每点击一次视频展示区向左移动一定宽度
                $vContent.animate({'left': '-='+ vWidth}, 500);
                Page ++;
            }

            $('.listDot li').eq(Page-1).addClass('active').siblings().removeClass();		//对应的圆点随着动画一起动
        }
    });
    $('.prev').click(function(){
        var $Parent = $(this).parents('.vShow');		//获取当前元素指定的父级元素
        var $vContent = $Parent.find('.vContentList');   //获取到视频展示区域，通过改变他的left值进行滑动

        var vWidth = $('.vContent').width();					//获取到视频展示区域的宽度
        var len = $vContent.find('li').length;			//获取视频展示区li元素的个数  是为了确定视频展示的页数
        var Pages = Math.ceil(len/ i);					//总体版面数量
        if(!$vContent.is(':animated')){   				//判断视频展示区域是否在进行动画，如果不进行判断就会出现，停止点击按钮，图片还在滚动
            if( Page == 1){								//如果当前页码数等于总体版面数，那么回到第一页
                $vContent.animate({'left': '-'+vWidth*(Pages-1)}, 'slow');
                Page = Pages;
            }else{										    //如果当前页码不等于总体版面去，那么每点击一次视频展示区向左移动一定宽度
                $vContent.animate({'left': '+='+ vWidth}, 500);
                Page --;
            }

            $('.listDot li').eq(Page-1).addClass('active').siblings().removeClass();		//对应的圆点随着动画一起动
        }
    });

    function ShowMenu(obj,n){
//            $(".menu li:eq(0)").next().css("display","");
        var Nav = obj.parentNode;
        if(!Nav.id){
            var BName = Nav.getElementsByTagName("ol");
            var HName = Nav.getElementsByTagName("h2");
            var t = 2;
        }else{
            var BName = document.getElementById(Nav.id).getElementsByTagName("span");
            var HName = document.getElementById(Nav.id).getElementsByTagName(".header");
            var t = 1;
        }
        for(var i=0; i<HName.length;i++){
            HName[i].innerHTML = HName[i].innerHTML.replace("-","+");
            HName[i].className = "";
        }
        obj.className = "h" + t;
        for(var i=0; i<BName.length; i++){if(i!=n){BName[i].className = "no";}}
        if(BName[n].className == "no"){
            BName[n].className = "";
            obj.innerHTML = obj.innerHTML.replace("+","-");
        }else{
            BName[n].className = "no";
            obj.className = "";
            obj.innerHTML = obj.innerHTML.replace("-","+");
        }
    }
})
