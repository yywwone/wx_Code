<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>园区风采</title>
<link rel="icon" href="/Public/home/dist/images/" type="image/x-icon"/>
<!--通用CSS-->
<link href="/Public/home/dist/css/reset1.css" rel="stylesheet">
<!--本页CSS-->
<link href="/Public/home/dist/css/wx_qt_yqfc.css" rel="stylesheet">

<!-- tab 切换 -->
<link href="/Public/home/dist/css/wx_qt_zsyz.css" rel="stylesheet">
<style>
	/*联系我们*/

	.wx_qt_zsyz_main_change p{
		height: 0.3rem;
		line-height: 0.3rem;
		color: #aaa;
		font-size: 0.14rem;
	}
	.wx_qt_zsyz_main_change p:last-child {
		margin-top: 0.3rem;
	}

	/*地图*/
	.wx_qt_zsyz_main_map {
		margin-top: 0.2rem;
	}
	.wx_qt_zsyz_main_map h4 img{
		width: 0.4rem;
		vertical-align: middle;
	}

	.map {
		width: 3rem;
		height: 1.5rem;
		margin-top: 0.2rem;
	}
	
.iw_poi_title {
    color:#CC5522;
    font-size:14px;
    font-weight:bold;
    overflow:hidden;
    padding-right:13px;
    white-space:nowrap
}
.iw_poi_content {
    font:12px arial,sans-serif;
    overflow:visible;
    padding-top:4px;
    white-space:-moz-pre-wrap;
    word-wrap:break-word
}
</style>
</head>
<div class="wx_qyfc_header_img">
	<img src="/Public/home/dist/images/qyfc_bg.png">
</div>


<!-- yxw  add -->
<div class="wx_qt_zsyz_main_box">
	<div class="wx_qt_zsyz_main_tit">
		<ul>
			<li class="wx_qt_zsyz_main_tit_active">园区概况</li>
			<li>动态数据</li>
			<li>联系我们</li>
		</ul>
	</div>
	<div class="wx_qt_zsyz_main_con_box">
	<!-- 园区概况 -->
		<div class="wx_qt_zsyz_main_con">
			<!-- <textarea   class='t'    readonly="readonly" style="border:none;width:100%;height:400px"> -->
				<!--园区简介-->
				<div class="wx_qyfc_main_box">
					<h2><img src="/Public/home/dist/images/bs1.png" alt="标识" class="bs1"/>园区简介</h2>
					<div class="wx_qyfc_main">
						<p class="wx_qyfc_main_text2">全力打造浙西南地区软件、物联网和智能装备软件研发及
				            应用服务、“互联网+”新业态、智慧养生服务创新之地 绿谷
				            信息产业园将创造良好软、硬件条件，既吸引创新型企业，又
				            要重点培育优势企业和项目，形成全面的产业集群格局，使绿
				            谷信息产业园成为浙西南地区软件、移动互联网、物联网和智
				            慧养生之地。</p>
					</div>
				</div>
				<div style="height: 0.17rem;background: #f5f5f5;margin-top: 0.175rem;"></div>
				<!--所获荣誉-->
				<div class="wx_qyfc_main_box">
					<h2><img src="/Public/home/dist/images/bs2.png" alt="标识" class="bs2"/>所获荣誉</h2>
					<div class="wx_qyfc_main">
				        <p class="wx_qyfc_main_text2">绿谷信息产业园目前已有入园企业137家，其中，主
				            板上市企业及子公司6家，新三板挂牌企业2家，浙江省股
				            权交易中心挂牌企业4家。</p>
						<img src="/Public/home/dist/images/qyfc_shry.png" class="qyfc_yqjj">

					</div>
				</div>
				<div style="height: 0.17rem;background: #f5f5f5;margin-top: 0.175rem;"></div>
				<!--合作伙伴-->
				<div class="wx_qyfc_main_box">
					<h2 class="wx_qyfc_main_box_h2"><img src="/Public/home/dist/images/bs3.png" alt="标识" class="bs3"/>合作伙伴</h2>
					<div class="wx_qyfc_main">
						<img src="/Public/home/dist/images/qyfc_hzhb.png" class="qyfc_yqjj qyfc_yqjj1">
					</div>
				</div>	
			<!-- </textarea> -->
		</div>
		<!--动态数据-->
		<div class="wx_qt_zsyz_main_con">
			<!-- <textarea   class='t'    readonly="readonly" style="border:none;width:100%;height:400px"><?php echo ($xinxi["rzxx"]); ?></textarea> -->
	
			 <div id="main" style="width: 320px;height: 300px;"></div>
			 <div id="second" style="width: 320px;height: 300px;"></div>
		</div>
		<!-- 联系我们 -->
		<div class="wx_qt_zsyz_main_con ">
			<!-- <textarea   class='t'    readonly="readonly" style="border:none;width:100%;height:400px"><?php echo ($xinxi["lxwm"]); ?></textarea>	 -->
			<div class="wx_qt_zsyz_main_change">
				<p>公司名称：浙江网新正合科技服务有限公司</p>
				<p>地址：浙江省丽水市莲都区域北街368号S8号楼绿谷信息实业有限公司</p>
				<p>电话：0578-2095085</p>
			</div>
			<div class="wx_qt_zsyz_main_map">
				<h4>
				<img src="../../../../Public/home/dist/images/yqfc_map.png" alt="">
				导航地图</h4>

				<!-- 地图 -->
			    <div class="map" id="dituContent">
	
			    </div>
			</div>
		</div>

	</div>
</div>


<!-- yxw  end -->


<!--园区简介-->
<!-- <div class="wx_qyfc_main_box">
	<h2><img src="/Public/home/dist/images/bs1.png" alt="标识" class="bs1"/>园区简介</h2>
	<div class="wx_qyfc_main">
		<p class="wx_qyfc_main_text2">全力打造浙西南地区软件、物联网和智能装备软件研发及
            应用服务、“互联网+”新业态、智慧养生服务创新之地 绿谷
            信息产业园将创造良好软、硬件条件，既吸引创新型企业，又
            要重点培育优势企业和项目，形成全面的产业集群格局，使绿
            谷信息产业园成为浙西南地区软件、移动互联网、物联网和智
            慧养生之地。</p>
	</div>
</div>
<div style="height: 0.17rem;background: #f5f5f5;margin-top: 0.175rem;"></div> -->
<!--所获荣誉-->
<!-- <div class="wx_qyfc_main_box">
	<h2><img src="/Public/home/dist/images/bs2.png" alt="标识" class="bs2"/>所获荣誉</h2>
	<div class="wx_qyfc_main">
        <p class="wx_qyfc_main_text2">绿谷信息产业园目前已有入园企业137家，其中，主
            板上市企业及子公司6家，新三板挂牌企业2家，浙江省股
            权交易中心挂牌企业4家。</p>
		<img src="/Public/home/dist/images/qyfc_shry.png" class="qyfc_yqjj">

	</div>
</div>
<div style="height: 0.17rem;background: #f5f5f5;margin-top: 0.175rem;"></div> -->
<!--合作伙伴-->
<!-- <div class="wx_qyfc_main_box">
	<h2 class="wx_qyfc_main_box_h2"><img src="/Public/home/dist/images/bs3.png" alt="标识" class="bs3"/>合作伙伴</h2>
	<div class="wx_qyfc_main">
		<img src="/Public/home/dist/images/qyfc_hzhb.png" class="qyfc_yqjj qyfc_yqjj1">
	</div>
</div> -->

<!--通用JS-->
<script src="/Public/home/dist/js/jquery-1.11.1.min.js"></script>
<script src="/Public/home/dist/js/rem.js"></script>
<!--本页JS-->

<!-- tab 切换 -->
<script src="/Public/home/dist/js/wx_qt_zsyz_tab.js"></script>

<!-- 图标 eharts JS -->

<script src="/Public/home/dist/js/echarts.js"></script>
<!-- echarts -->
 <script type="text/javascript">
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('main'));

        // 指定图表的配置项和数据
        var option = {

            title: {

                text: '全区企业主营业务收入',
                subtext: '（单位：万元）'
            },
            tooltip: {},
            xAxis: {
                data: ["第一季度","第二季度","第三季度","第四季度"]
            },
            yAxis: {},
            series: [{               
                name: '销量',
                type: 'bar',
                data: [30, 40, 50, 60]
            }]
        };

        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);

         // 基于准s好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('second'));

        // 指定图表的配置项和数据
        var option = {

            title: {

                text: '软件和信息服务 业务收入',
                subtext: '（单位：万元）'
            },
            tooltip: {},
            xAxis: {
                data: ["第一季度","第二季度","第三季度","第四季度"]
            },
            yAxis: {},
            series: [{               
                name: '销量',
                type: 'bar',
                data: [30, 40, 50, 60]
            }]
        };

        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
 </script>

 <!-- map -->
<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
<script type="text/javascript">
    //创建和初始化地图函数：
    function initMap(){
        createMap();//创建地图
        setMapEvent();//设置地图事件
        addMapControl();//向地图添加控件
        addMarker();//向地图中添加marker
    }
    
    //创建地图函数：
    function createMap(){
        var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
        var point = new BMap.Point(116.640986,40.187015);//定义一个中心点坐标
        map.centerAndZoom(point,11);//设定地图的中心点和坐标并将地图显示在地图容器中
        window.map = map;//将map变量存储在全局
    }
    
    //地图事件设置函数：
    function setMapEvent(){
        map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
        map.enableScrollWheelZoom();//启用地图滚轮放大缩小
        map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
        map.enableKeyboard();//启用键盘上下左右键移动地图
    }
    
    //地图控件添加函数：
    function addMapControl(){
        //向地图中添加缩放控件
	var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
	map.addControl(ctrl_nav);
        //向地图中添加缩略图控件
	var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:1});
	map.addControl(ctrl_ove);
        //向地图中添加比例尺控件
	var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
	map.addControl(ctrl_sca);
    }
    
    //标注点数组
    var markerArr = [{title:"丽水绿谷信息产业园",content:"地址：浙江省丽水市莲都区域北街368号S8号楼绿谷信息实业有限公司<br/>电话：0578-2095085",point:"119.912505|28.471756",isOpen:1,icon:{w:21,h:21,l:0,t:0,x:6,lb:5}}
		 ];
    //创建marker
    function addMarker(){
        for(var i=0;i<markerArr.length;i++){
            var json = markerArr[i];
            var p0 = json.point.split("|")[0];
            var p1 = json.point.split("|")[1];
            var point = new BMap.Point(p0,p1);
			var iconImg = createIcon(json.icon);
            var marker = new BMap.Marker(point,{icon:iconImg});
			var iw = createInfoWindow(i);
			var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});
			marker.setLabel(label);
            map.addOverlay(marker);
            label.setStyle({
                        borderColor:"#808080",
                        color:"#333",
                        cursor:"pointer"
            });
			
			(function(){
				var index = i;
				var _iw = createInfoWindow(i);
				var _marker = marker;
				_marker.addEventListener("click",function(){
				    this.openInfoWindow(_iw);
			    });
			    _iw.addEventListener("open",function(){
				    _marker.getLabel().hide();
			    })
			    _iw.addEventListener("close",function(){
				    _marker.getLabel().show();
			    })
				label.addEventListener("click",function(){
				    _marker.openInfoWindow(_iw);
			    })
				if(!!json.isOpen){
					label.hide();
					_marker.openInfoWindow(_iw);
				}
			})()
        }
    }
    //创建InfoWindow
    function createInfoWindow(i){
        var json = markerArr[i];
        var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
        return iw;
    }
    //创建一个Icon
    function createIcon(json){
        var icon = new BMap.Icon("images/53c58f8c3e064.svg", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
        return icon;
    }
    
    initMap();//创建和初始化地图
</script>
</html>