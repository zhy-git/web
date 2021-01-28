<?php 
require_once(dirname(__FILE__).'/include/config.inc.php'); 
//初始化参数检测正确性
$cid = empty($cid) ? 5 : intval($cid);
// $tid = empty($tid) ? 0 : intval($tid);
header ('Access-Control-Allow-Origin: *');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php echo GetHeader(); ?>
<meta name="author" content="order by adminbuy.cn" />
<link href="/skin/css/style.css" type="text/css" rel="stylesheet" />
<link rel="shortcut icon" href="/images/favicon.ico" />
<script type="text/javascript" src="/skin/js/jquery.min.js"></script>
<script type="text/javascript" src="/skin/js/jquery.superslide.2.1.1.js"></script>
<script type="text/javascript" src="/skin/js/myfocus-2.0.1.min.js"></script>
<script type="text/javascript" src="/skin/js/flashstyle.js"></script>
<!-- <script type="text/javascript" src="/skin/js/mF_kdui.js"></script> -->
<script type="text/javascript" src="/skin/js/common.js"></script>
<script>
//flash设置
myFocus.set({
id:'NewsFocus',//ID默认不变
pattern:'mF_liquid',//风格
time:'5'//切换时间间隔(秒)
});
</script>
<link rel="stylesheet" href="/skin/css/mF_kdui.css">
<link rel="stylesheet" href="/skin/css/mF_liquid.css">
<!-- <script type="text/javascript" src="/skin/js/mF_liquid.js"></script> -->
<!--[if lte IE 6]>
<script src="/skin/js/dd_belatedpng_0.0.8a.js" type="text/javascript"></script>
<script type="text/javascript">
DD_belatedPNG.fix('*');
</script>
<![endif]-->
<meta http-equiv="mobile-agent" content="format=xhtml;url=/m/index.php">
<script type="text/javascript">if(window.location.toString().indexOf('pref=padindex') != -1){}else{if(/AppleWebKit.*Mobile/i.test(navigator.userAgent) || (/MIDP|SymbianOS|NOKIA|SAMSUNG|LG|NEC|TCL|Alcatel|BIRD|DBTEL|Dopod|PHILIPS|HAIER|LENOVO|MOT-|Nokia|SonyEricsson|SIE-|Amoi|ZTE/.test(navigator.userAgent))){if(window.location.href.indexOf("?mobile")<0){try{if(/Android|Windows Phone|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent)){window.location.href="/m/index.php";}else if(/iPad/i.test(navigator.userAgent)){}else{}}catch(e){}}}}</script>
</head>

<body>

<!-- head -->
<?php require_once('header.php'); ?>
<!-- head -->

<div class="blank16"></div>
<!-- 幻灯片开始 -->
<div class="w1140">
  <div id="flash">
    <div id="myFocus">
      <div class="loading"></div>
      <div class="pic">
        <ul>
          <?php
          $dosql->Execute("SELECT * FROM `#@__infoimg` WHERE classid=13 AND delstate='' AND checkinfo=true ORDER BY orderid DESC LIMIT 0,5");
          while($row = $dosql->GetArray())
          {
            if($row['linkurl'] != '')$gourl = $row['linkurl'];
            else $gourl = 'javascript:;';
          ?>
          <li><a href="<?php echo $gourl; ?>"><img src="<?php echo $row['picurl']; ?>" alt="<?php echo $row['title']; ?>" text="<?php echo $row['title']; ?>"/></a></li>
          <?php
            }
          ?> 


        </ul>
      </div>
    </div>
  </div>
</div>
<div class="blank16"></div>
<!-- 幻灯片end -->
<div class="w1140"> 
  <!--   ibox1 开始  -->
  <div class="ibox1">
    <div class="ibox1_1">
      <div id="NewsFocus">
        <div class="pic">
          <ul>

<li><a href="/a/fengcai/228.html"><img src="/uploads/allimg/c170523/14955243914LF-1J07_lit.jpg" alt="广东获2016年度全国非公党建优秀调研成果" text="广东获2016年度全国非公党建优秀调研成果" /></a></li>
<li><a href="/a/fengcai/227.html"><img src="/uploads/allimg/c170523/1495524M64O50-35919_lit.jpg" alt="立白集团、鼎湖山泉、香雪制药荣获 广东" text="立白集团、鼎湖山泉、香雪制药荣获 广东" /></a></li>
<li><a href="/a/fengcai/225.html"><img src="/uploads/allimg/c170523/1495524M5H360-12515_lit.jpg" alt="省非公经济组织党委召开全体委员会议" text="省非公经济组织党委召开全体委员会议" /></a></li>
<li><a href="/a/fengcai/223.html"><img src="/uploads/allimg/c170523/1495524M1XS0-52103_lit.jpg" alt="省非公经济组织党委党务干部培训班在肇" text="省非公经济组织党委党务干部培训班在肇" /></a></li>
<li><a href="/a/fengcai/221.html"><img src="/uploads/allimg/c170523/1495524M092M0-12361_lit.jpg" alt="全省优秀民营企业家研修班成功举办" text="全省优秀民营企业家研修班成功举办" /></a></li>

          </ul>
        </div>
      </div>
    </div>

  
  <div class="ibox1_2">
      <div class="left_top"> <h3>生产技能</h3>
        <span><a href="news.php?sortid=33">更多+</a></span> </div>
      <div class="left_con">
        <div class="left_list">
          <ul>
            <!-- 生产技能 sortid=34-->
            <script>
                $(function () {
                    $.ajax({
                    type: "post",
                    data: {"sortid":"34"},
                    url: "https://jtr168.cn/taojing-pp/public/index.php/www/article",
                    dataType: "json",
                    contentType: "application/x-www-form-urlencoded",
                    success: function(data,code) {
                      for (var i = 0; i < 7; i++) {
                        $('.ibox1_2 .left_list ul').append("<li><span class='time'>"+data.data.list[i]['time']+"</span><a href=newsshow.php?id="+data.data.list[i]['id']+" title="+data.data.list[i]['title']+">"+data.data.list[i]['title']+"</a></li>");
                      } 
                    },
                  });
                })
          </script>
          <!-- 生产技能 end-->
          </ul>
        </div>
      </div>
    </div>

  </div>
  <!--   ibox1  结束 -->
  <div class="blank16"></div>
  <div class="index_pic"><img src='/skin/images/bar1.gif' width='1140' height='90' alt=''></div>
  <div class="blank16"></div>
  <!--   ibox2 开始 -->
  <div class="ibox2">
    <div class="ibox2_1">
      <div class="left_top"> <h3>禽兽养殖</h3>
        <span><a href="news.php?sortid=44">更多+</a></span> </div>
      <div class="left_con">
        <div class="left_list">
          <ul>
          <!-- 禽兽养殖 sortid=44-->
            <script>
                $(function () {
                    $.ajax({
                    type: "post",
                    data: {"sortid":"44"},
                    url: "https://jtr168.cn/taojing-pp/public/index.php/www/article",
                    dataType: "json",
                    contentType: "application/x-www-form-urlencoded",
                    success: function(data,code) {
                      for (var i = 0; i < 7; i++) {
                        $('.ibox2_1 .left_list ul').append("<li><span class='time'>"+data.data.list[i]['time']+"</span><a href=newsshow.php?id="+data.data.list[i]['id']+" title="+data.data.list[i]['title']+">"+data.data.list[i]['title']+"</a></li>");
                      } 
                    },
                  });
                })
          </script>
          <!-- 禽兽养殖 end-->
          </ul>
        </div>
      </div>
    </div>
    <div class="ibox2_2">
      <div class="left_top"> <h3>林业种植</h3>
        <span><a href="news.php?sortid=43">更多+</a></span> </div>
      <div class="left_con">
        <div class="left_list">
          <ul>
            <!-- 林业种植 sortid=43-->
            <script>
                $(function () {
                    $.ajax({
                    type: "post",
                    data: {"sortid":"43"},
                    url: "https://jtr168.cn/taojing-pp/public/index.php/www/article",
                    dataType: "json",
                    contentType: "application/x-www-form-urlencoded",
                    success: function(data,code) {
                      for (var i = 0; i < 7; i++) {
                        $('.ibox2_2 .left_list ul').append("<li><span class='time'>"+data.data.list[i]['time']+"</span><a href=newsshow.php?id="+data.data.list[i]['id']+" title="+data.data.list[i]['title']+">"+data.data.list[i]['title']+"</a></li>");
                      } 
                    },
                  });
                })
          </script>
          <!-- 林业种植 end-->
          </ul>
        </div>
      </div>
    </div>
    <div class="ibox2_3">
      <div class="left_top"> <h3>在线留言</h3> </div>
      <div class="left_con">
        <div class="search">
          <form action="message.php" enctype="multipart/form-data" method="post">
            <div class="searchlist"> <span class="s_left">姓名：</span>
              <input type="input_text" class="searchtext" name="FullName" id="FullName" value="" size="12" />
            </div>
            <div class="searchlist"> <span class="s_left">电话：</span>
              <input type="input_text" class="searchtext" name="contact" id="contact" value="" size="12" />
            </div>
            <div class="searchlist"> <span class="s_left">内容：</span>
              <input type="input_text" class="searchtext" name="content" id="content" value="" size="12" />
            </div>
            <div class="upload">
              <input type="hidden" name="action" id="action" value="add" />
              <input id="submit" class="input_submit1" type="submit" name="submit" value=" 提交 " />
              <input class="input_submit2" type="reset" name="Submit2" value=" 重置 " />
            </div>
          </form>
          <script language="javascript" type="text/javascript">
		  		$('#submit').click(function(){
					if($('#FullName').val()==''){alert('请输入姓名！');return false;}
					if($('#contact').val()==''){alert('请输入电话！');return false;}
					if($('#content').val()==''){alert('请输入内容！');return false;}
				})
		  </script> 
        </div>
      </div>
    </div>
  </div>
  <!--   ibox2  结束  -->
  <div class="blank16"></div>
  <div class="ibox3">
    <div class="pro_con">
      <div class="txtMarquee-left">
        <div class="hd"> <div class="left_top">
            <h3>会员风采</h3>
          </div> <a class="next"></a> <a class="prev"></a> </div>
        <div class="bd">
          <ul class="infoList">

            <li><a href='/Members/25.html'><img src='/uploads/allimg/c170523/14955243914LF-1J07_lit.jpg' alt='广东获2016年度全国非公党建优秀'></a><br />
              <a href='/a/fengcai/228.html'>广东获2016年度全国非公党建优秀</a></li>
<li><a href='/Members/25.html'><img src='/uploads/allimg/c170523/1495524M64O50-35919_lit.jpg' alt='立白集团、鼎湖山泉、香雪制药荣'></a><br />
              <a href='/a/fengcai/227.html'>立白集团、鼎湖山泉、香雪制药荣</a></li>
<li><a href='/Members/25.html'><img src='/images/defaultpic.gif' alt='广东非公经济组织党建2017年工作'></a><br />
              <a href='/a/fengcai/226.html'>广东非公经济组织党建2017年工作</a></li>
<li><a href='/Members/25.html'><img src='/uploads/allimg/c170523/1495524M5H360-12515_lit.jpg' alt='省非公经济组织党委召开全体委员'></a><br />
              <a href='/a/fengcai/225.html'>省非公经济组织党委召开全体委员</a></li>
<li><a href='/Members/25.html'><img src='/images/defaultpic.gif' alt='学习两会精神 畅谈热点体会 ---'></a><br />
              <a href='/a/fengcai/224.html'>学习两会精神 畅谈热点体会 ---</a></li>
<li><a href='/Members/25.html'><img src='/uploads/allimg/c170523/1495524M1XS0-52103_lit.jpg' alt='省非公经济组织党委党务干部培训'></a><br />
              <a href='/a/fengcai/223.html'>省非公经济组织党委党务干部培训</a></li>
<li><a href='/Members/25.html'><img src='/images/defaultpic.gif' alt='陈昆参加非公有制经济领域“七五'></a><br />
              <a href='/a/fengcai/222.html'>陈昆参加非公有制经济领域“七五</a></li>

          </ul>
        </div>
      </div>
      <script type="text/javascript">
			jQuery(".txtMarquee-left").slide({mainCell:".bd ul",autoPlay:true,effect:"leftMarquee",vis:7,interTime:50});
			</script> 
    </div>
  </div>
  <div class="blank16"></div>
  <div class="ibox4">
    <div class="ibox4_1">
      <div class="left_top"> <h3>农业种植</h3>
        <span><a href="news.php?sortid=38">更多+</a></span> </div>
      <div class="left_con">
        <div class="left_list">
          <ul>
            <!-- 农业种植 sortid=38-->
            <script>
                $(function () {
                    $.ajax({
                    type: "post",
                    data: {"sortid":"38"},
                    url: "https://jtr168.cn/taojing-pp/public/index.php/www/article",
                    dataType: "json",
                    contentType: "application/x-www-form-urlencoded",
                    success: function(data,code) {
                      for (var i = 0; i < 7; i++) {
                        $('.ibox4_1 .left_list ul').append("<li><span class='time'>"+data.data.list[i]['time']+"</span><a href=newsshow.php?id="+data.data.list[i]['id']+" title="+data.data.list[i]['title']+">"+data.data.list[i]['title']+"</a></li>");
                      } 
                    },
                  });
                })
          </script>
          <!-- 农业种植 end-->
          </ul>
        </div>
      </div>
    </div>
    <div class="ibox4_2">
      <div class="left_top"> <h3>农副产品加工</h3>
        <span><a href="news.php?sortid=45">更多+</a></span> </div>
      <div class="left_con">
        <div class="left_list">
          <ul>
            <!-- 农副产品加工 sortid=45-->
            <script>
                $(function () {
                    $.ajax({
                    type: "post",
                    data: {"sortid":"45"},
                    url: "https://jtr168.cn/taojing-pp/public/index.php/www/article",
                    dataType: "json",
                    contentType: "application/x-www-form-urlencoded",
                    success: function(data,code) {
                      for (var i = 0; i < 7; i++) {
                        $('.ibox4_2 .left_list ul').append("<li><span class='time'>"+data.data.list[i]['time']+"</span><a href=newsshow.php?id="+data.data.list[i]['id']+" title="+data.data.list[i]['title']+">"+data.data.list[i]['title']+"</a></li>");
                      } 
                    },
                  });
                })
          </script>
          <!-- 农副产品加工 end-->
          </ul>
        </div>
      </div>
    </div>
    <div class="ibox4_3">
      <div class="left_top"> <h3>经营管理</h3>
        <span><a href="news.php?sortid=35">更多+</a></span> </div>
      <div class="left_con">
        <div class="left_list">
          <ul>
           <!-- 经营管理 sortid=35-->
            <script>
                $(function () {
                    $.ajax({
                    type: "post",
                    data: {"sortid":"35"},
                    url: "https://jtr168.cn/taojing-pp/public/index.php/www/article",
                    dataType: "json",
                    contentType: "application/x-www-form-urlencoded",
                    success: function(data,code) {
                      for (var i = 0; i < 7; i++) {
                        $('.ibox4_3 .left_list ul').append("<li><span class='time'>"+data.data.list[i]['time']+"</span><a href=newsshow.php?id="+data.data.list[i]['id']+" title="+data.data.list[i]['title']+">"+data.data.list[i]['title']+"</a></li>");
                      } 
                    },
                  });
                })
          </script>
          <!-- 经营管理 end-->

          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="blank16"></div>
  <div class="index_pic"><img src='/skin/images/bar2.jpg' width='1140' height='90' alt=''></div>
  <div class="blank16"></div>
  <div class="ibox5">
    <div class="ibox5_1">
      <div class="left_top"> <h3>政策服务</h3>
        <span><a href="news.php?sortid=37">更多+</a></span> </div>
      <div class="left_con">
        <div class="left_list">
          <ul>
            <!-- 政策服务 sortid=35-->
            <script>
                $(function () {
                    $.ajax({
                    type: "post",
                    data: {"sortid":"37"},
                    url: "https://jtr168.cn/taojing-pp/public/index.php/www/article",
                    dataType: "json",
                    contentType: "application/x-www-form-urlencoded",
                    success: function(data,code) {
                      for (var i = 0; i < 7; i++) {
                        $('.ibox5_1 .left_list ul').append("<li><span class='time'>"+data.data.list[i]['time']+"</span><a href=newsshow.php?id="+data.data.list[i]['id']+" title="+data.data.list[i]['title']+">"+data.data.list[i]['title']+"</a></li>");
                      } 
                    },
                  });
                })
          </script>
          <!-- 政策服务 end-->

          </ul>
        </div>
      </div>
    </div>
    <div class="ibox5_2">
      <div class="left_top"> <h3>信息服务</h3>
        <span><a href="news.php?sortid=36">更多+</a></span> </div>
      <div class="left_con">
        <div class="left_list">
          <ul>
            <!-- 信息服务 sortid=36-->
            <script>
                $(function () {
                    $.ajax({
                    type: "post",
                    data: {"sortid":"36"},
                    url: "https://jtr168.cn/taojing-pp/public/index.php/www/article",
                    dataType: "json",
                    contentType: "application/x-www-form-urlencoded",
                    success: function(data,code) {
                      for (var i = 0; i < 7; i++) {
                        $('.ibox5_2 .left_list ul').append("<li><span class='time'>"+data.data.list[i]['time']+"</span><a href=newsshow.php?id="+data.data.list[i]['id']+" title="+data.data.list[i]['title']+">"+data.data.list[i]['title']+"</a></li>");
                      } 
                    },
                  });
                })
          </script>
          <!-- 信息服务 end-->

          </ul>
        </div>
      </div>
    </div>
    <div class="ibox5_3">
      <div class="left_top"> <h3>市场需求</h3>
        <span><a href="news.php?sortid=40">更多+</a></span> </div>
      <div class="left_con">
        <div class="left_list">
          <ul>

            <!-- 市场需求 sortid=40-->
            <script>
                $(function () {
                    $.ajax({
                    type: "post",
                    data: {"sortid":"40"},
                    url: "https://jtr168.cn/taojing-pp/public/index.php/www/article",
                    dataType: "json",
                    contentType: "application/x-www-form-urlencoded",
                    success: function(data,code) {
                      for (var i = 0; i < 7; i++) {
                        $('.ibox5_3 .left_list ul').append("<li><span class='time'>"+data.data.list[i]['time']+"</span><a href=newsshow.php?id="+data.data.list[i]['id']+" title="+data.data.list[i]['title']+">"+data.data.list[i]['title']+"</a></li>");
                      } 
                    },
                  });
                })
          </script>
          <!-- 市场需求 end-->

          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="blank16"></div>
</div>
<!-- footer -->
<?php require_once('footer.php');?>
<!-- footer -->
</body>
</html>