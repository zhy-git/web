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

<div class="header">
  <div class="w1140">
    <div class="logo"><a href="/" title="新疆霍城县科技局"><img src="/images/logo.png" alt="新疆霍城县科技局" /></a></div>
    <div class="topright">
      <div class="language">
        <ul>
          <li><a href="javascript:void(0);" onclick="SetHome();">设为首页</a>|</li>
          <li><a href="javascript:void(0);" onclick="AddFavorite();">添加收藏</a></li>
        </ul>
      </div>
      <div class="tel"><span>4008-888-888 </span></div>
    </div>
  </div>
</div>
<div class="navigate clear">
  <div class="w1140">
    <ul>
      <li><a  class='current'  href='/'>首页</a></li>      
      <li><a href='/a/jieshao/'>科技局简介</a></li>      
      <li><a href='/a/gonggao/'>生产技能</a></li>      
      <li><a href='/a/fengcai/'>会员风采</a></li>      
      <li><a href='/a/fagui/'>禽兽养殖</a></li>      
      <li><a href='/a/renzheng/'>林业种植</a></li>      
      <li><a href='/a/news/'>农业种植</a></li>    
      <li><a href='/a/jingji/'>经营管理</a></li>
      <li><a href='/a/peixun/'>政策服务</a></li>
      <li><a href='/a/peixun/'>信息服务</a></li>
      <li><a href='/a/peixun/'>家庭农场</a></li>
    </ul>
  </div>
</div>
<div class="blank16"></div>
<!-- 幻灯片开始 -->
<div class="w1140">
  <div id="flash">
    <div id="myFocus">
      <div class="loading"></div>
      <div class="pic">
        <ul>
          <li><a><img src="/uploads/170919/1-1F91Z92005317.jpg" alt="广东获2016年度全国非公党建优秀调研成果" text="幻灯2"/></a></li>
          <li><a><img src="/uploads/170919/1-1F91Z91S3K1.jpg" alt="省非公经济组织党委召开全体委员会议" text="幻灯1"/></a></li>
          <li><a><img src="/uploads/allimg/170919/1-1F91Z91K30-L.jpg" alt="省非公经济组织党委党务干部培训班在肇" text="幻灯3"/></a></li>
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

  <script>
    $(function () {
        $.ajax({
        type: "post",
        data: "sortid=44",
        url: "https://jtr168.cn/taojing-pp/public/index.php/www/article",
        dataType: "json",
        success: function(data) {
            console.log(data);
        },
      });
    })
  </script>



    <div class="ibox1_2">
      <div class="left_top"> <h3>生产技能</h3>
        <span><a href="/a/gonggao/lingdao/">更多+</a></span> </div>
      <div class="left_con">
        <div class="left_list">
          <ul>
            <li><span class='time'>2017-05-24</span><a href='/a/gonggao/lingdao/211.html' title='中央政治局委员、广东省委书记调'>中央政治局委员、广东省委书记调</a></li>
<li><span class='time'>2017-05-24</span><a href='/a/gonggao/lingdao/218.html' title='工商联副主席单位金发科技、TC'>工商联副主席单位金发科技、TC</a></li>
<li><span class='time'>2017-05-24</span><a href='/a/gonggao/lingdao/232.html' title='张伟 省委统战部副部长，省工商'>张伟 省委统战部副部长，省工商</a></li>
<li><span class='time'>2017-05-24</span><a href='/a/gonggao/lingdao/231.html' title='符耗 省工商联主席、省总商会会'>符耗 省工商联主席、省总商会会</a></li>
<li><span class='time'>2017-05-23</span><a href='/a/gonggao/lingdao/217.html' title='宜华集团连续五年进入中国民企'>宜华集团连续五年进入中国民企</a></li>
<li><span class='time'>2017-05-23</span><a href='/a/gonggao/lingdao/216.html' title='胡春华书记访美期间考察省工商联'>胡春华书记访美期间考察省工商联</a></li>
<li><span class='time'>2017-05-23</span><a href='/a/gonggao/lingdao/215.html' title='百年侨资企业，李锦记助力中国飞'>百年侨资企业，李锦记助力中国飞</a></li>

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
        <span><a href="/a/gonggao/jigou/">更多+</a></span> </div>
      <div class="left_con">
        <div class="left_list">
          <ul>
            <li><span class='time'>2017-05-24</span><a href='/a/gonggao/jigou/229.html' title='常委会议'>常委会议</a></li>
<li><span class='time'>2017-05-24</span><a href='/a/gonggao/jigou/230.html' title='执委会议'>执委会议</a></li>
<li><span class='time'>2017-05-23</span><a href='/a/gonggao/jigou/153.html' title='关于开展广东民营企业社会责任（'>关于开展广东民营企业社会责任（</a></li>
<li><span class='time'>2017-05-23</span><a href='/a/gonggao/jigou/152.html' title='关于征集《广东省工商业联合会年'>关于征集《广东省工商业联合会年</a></li>
<li><span class='time'>2017-05-23</span><a href='/a/gonggao/jigou/151.html' title='转发全国工商联办公厅关于开展'>转发全国工商联办公厅关于开展</a></li>
<li><span class='time'>2017-05-23</span><a href='/a/gonggao/jigou/150.html' title='转发全国工商联办公厅关于组织开'>转发全国工商联办公厅关于组织开</a></li>
<li><span class='time'>2017-05-23</span><a href='/a/gonggao/jigou/149.html' title='关于开展全省工商联系统及商会协'>关于开展全省工商联系统及商会协</a></li>

          </ul>
        </div>
      </div>
    </div>
    <div class="ibox2_2">
      <div class="left_top"> <h3>林业种植</h3>
        <span><a href="/a/fagui/zhengyao/">更多+</a></span> </div>
      <div class="left_con">
        <div class="left_list">
          <ul>
            <li><span class='time'>2017-05-23</span><a href='/a/fagui/zhengyao/147.html' title='转发国家发展改革委等八部委关于'>转发国家发展改革委等八部委关于</a></li>
<li><span class='time'>2017-05-23</span><a href='/a/fagui/zhengyao/146.html' title='广东省人民政府外事办公室关于转'>广东省人民政府外事办公室关于转</a></li>
<li><span class='time'>2017-05-23</span><a href='/a/fagui/zhengyao/145.html' title='关于印发《广东省工商联2017年工'>关于印发《广东省工商联2017年工</a></li>
<li><span class='time'>2017-05-23</span><a href='/a/fagui/zhengyao/144.html' title='转发国家发改委等28部委关于对食'>转发国家发改委等28部委关于对食</a></li>
<li><span class='time'>2017-05-23</span><a href='/a/fagui/zhengyao/143.html' title='转发国家发改委等18部委关于对安'>转发国家发改委等18部委关于对安</a></li>
<li><span class='time'>2017-05-23</span><a href='/a/fagui/zhengyao/142.html' title='转发国家发改委等31部委关于对环'>转发国家发改委等31部委关于对环</a></li>
<li><span class='time'>2017-05-23</span><a href='/a/fagui/zhengyao/141.html' title='关于推荐贫困户大学生参加就业见'>关于推荐贫困户大学生参加就业见</a></li>

          </ul>
        </div>
      </div>
    </div>
    <div class="ibox2_3">
      <div class="left_top"> <h3>在线留言</h3> </div>
      <div class="left_con">
        <div class="search">
          <form action="/plus/diy.php" enctype="multipart/form-data" method="post">
            <input type="hidden" name="action" value="post" />
            <input type="hidden" name="diyid" value="1" />
            <input type="hidden" name="do" value="2" />
            <div class="searchlist"> <span class="s_left">姓名：</span>
              <input type="input_text" class="searchtext" name="xingming" id="xingming" value="" size="12" />
            </div>
            <div class="searchlist"> <span class="s_left">电话：</span>
              <input type="input_text" class="searchtext" name="dianhua" id="dianhua" value="" size="12" />
            </div>
            <div class="searchlist"> <span class="s_left">内容：</span>
              <input type="input_text" class="searchtext" name="neirong" id="neirong" value="" size="12" />
            </div>
            <input type="hidden" name="dede_fields" value="xingming,text;dianhua,text;neirong,text" />
            <input type="hidden" name="dede_fieldshash" value="28113350e520b14b09ebf1a62511ecf1" />
            <div class="upload">
              <input id="submit" class="input_submit1" type="submit" name="submit" value=" 提交 " />
              <input class="input_submit2" type="reset" name="Submit2" value=" 重置 " />
            </div>
          </form>
          <script language="javascript" type="text/javascript">
		  		$('#submit').click(function(){
					if($('#xingming').val()==''){alert('请输入姓名！');return false;}
					if($('#dianhua').val()==''){alert('请输入电话！');return false;}
					if($('#neirong').val()==''){alert('请输入内容！');return false;}
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
        <span><a href="/a/renzheng/jinrong/">更多+</a></span> </div>
      <div class="left_con">
        <div class="left_list">
          <ul>
            <li><span class='time'>2017-05-24</span><a href='/a/renzheng/jinrong/195.html' title='2014中国民营企业500强发布会在京'>2014中国民营企业500强发布会在京</a></li>
<li><span class='time'>2017-05-23</span><a href='/a/renzheng/jinrong/197.html' title='广州市白云区工商联3家会员企业'>广州市白云区工商联3家会员企业</a></li>
<li><span class='time'>2017-05-23</span><a href='/a/renzheng/jinrong/196.html' title='立白集团总裁陈凯旋获评2015首届'>立白集团总裁陈凯旋获评2015首届</a></li>
<li><span class='time'>2017-05-23</span><a href='/a/renzheng/jinrong/194.html' title='江门市工商联18家会员企业喜获江'>江门市工商联18家会员企业喜获江</a></li>
<li><span class='time'>2017-05-23</span><a href='/a/renzheng/jinrong/193.html' title='汕尾市国泰食品有限公司董事长林'>汕尾市国泰食品有限公司董事长林</a></li>
<li><span class='time'>2017-05-23</span><a href='/a/renzheng/jinrong/192.html' title='汕头市工商联副主席吴锡炎先生当'>汕头市工商联副主席吴锡炎先生当</a></li>
<li><span class='time'>2017-05-23</span><a href='/a/renzheng/jinrong/191.html' title='汕尾民科企业携手电子科技大学共'>汕尾民科企业携手电子科技大学共</a></li>

          </ul>
        </div>
      </div>
    </div>
    <div class="ibox4_2">
      <div class="left_top"> <h3>农副产品加工</h3>
        <span><a href="/a/renzheng/xinxi/">更多+</a></span> </div>
      <div class="left_con">
        <div class="left_list">
          <ul>
            <li><span class='time'>2017-05-23</span><a href='/a/renzheng/xinxi/210.html' title='蒙娜丽莎：中国最薄陶瓷'>蒙娜丽莎：中国最薄陶瓷</a></li>
<li><span class='time'>2017-05-23</span><a href='/a/renzheng/xinxi/209.html' title='美的与东芝就转让东芝家电业务达'>美的与东芝就转让东芝家电业务达</a></li>
<li><span class='time'>2017-05-23</span><a href='/a/renzheng/xinxi/208.html' title='贝恩资本亚太区CEO兼董事总经理竺'>贝恩资本亚太区CEO兼董事总经理竺</a></li>
<li><span class='time'>2017-05-23</span><a href='/a/renzheng/xinxi/207.html' title='省工商联副主席企业TCL集团2015年'>省工商联副主席企业TCL集团2015年</a></li>
<li><span class='time'>2017-05-23</span><a href='/a/renzheng/xinxi/206.html' title='省工商联副会长企业海王集团荣获'>省工商联副会长企业海王集团荣获</a></li>
<li><span class='time'>2017-05-23</span><a href='/a/renzheng/xinxi/205.html' title='丰华园打破传统种植销售模式走上'>丰华园打破传统种植销售模式走上</a></li>
<li><span class='time'>2017-05-23</span><a href='/a/renzheng/xinxi/204.html' title='广东省劳动模范广东万聪船舶修造'>广东省劳动模范广东万聪船舶修造</a></li>

          </ul>
        </div>
      </div>
    </div>
    <div class="ibox4_3">
      <div class="left_top"> <h3>经营管理</h3>
        <span><a href="/a/news/yaowen/">更多+</a></span> </div>
      <div class="left_con">
        <div class="left_list">
          <ul>
            <li><span class='time'>2017-05-23</span><a href='/a/news/yaowen/82.html' title='陈昆出席佛山市工商联第十四次会'>陈昆出席佛山市工商联第十四次会</a></li>
<li><span class='time'>2017-05-23</span><a href='/a/news/yaowen/81.html' title='张宏斌出席2016年广东家居建材行'>张宏斌出席2016年广东家居建材行</a></li>
<li><span class='time'>2017-05-23</span><a href='/a/news/yaowen/80.html' title='卢小周出席东莞市工商联第十一次'>卢小周出席东莞市工商联第十一次</a></li>
<li><span class='time'>2017-05-23</span><a href='/a/news/yaowen/79.html' title='郭汉毅出席珠海市工商联第七次会'>郭汉毅出席珠海市工商联第七次会</a></li>
<li><span class='time'>2017-05-23</span><a href='/a/news/yaowen/78.html' title='郭汉毅出席广东省江西商会第二届'>郭汉毅出席广东省江西商会第二届</a></li>
<li><span class='time'>2017-05-23</span><a href='/a/news/yaowen/77.html' title='卢小周出席2016广东不锈钢行业年'>卢小周出席2016广东不锈钢行业年</a></li>
<li><span class='time'>2017-05-23</span><a href='/a/news/yaowen/76.html' title='卢小周出席省兴宁商会成立庆典大'>卢小周出席省兴宁商会成立庆典大</a></li>

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
        <span><a href="/a/news/zhishi/">更多+</a></span> </div>
      <div class="left_con">
        <div class="left_list">
          <ul>
            <li><span class='time'>2017-05-24</span><a href='/a/news/zhishi/17.html' title='工商联机关召开党建工作会议'>工商联机关召开党建工作会议</a></li>
<li><span class='time'>2017-05-24</span><a href='/a/news/zhishi/18.html' title='工商业联合会（总商会）第十一届'>工商业联合会（总商会）第十一届</a></li>
<li><span class='time'>2017-05-23</span><a href='/a/news/zhishi/16.html' title='省委第六巡视组对省工商联党组开'>省委第六巡视组对省工商联党组开</a></li>
<li><span class='time'>2017-05-23</span><a href='/a/news/zhishi/15.html' title='2017年广东省“五好”县级工商联'>2017年广东省“五好”县级工商联</a></li>
<li><span class='time'>2017-05-23</span><a href='/a/news/zhishi/14.html' title='省工商联商协会秘书长联席会议在'>省工商联商协会秘书长联席会议在</a></li>
<li><span class='time'>2017-05-23</span><a href='/a/news/zhishi/13.html' title='2017年广东省IT行业诚信商家评选活'>2017年广东省IT行业诚信商家评选活</a></li>
<li><span class='time'>2017-05-23</span><a href='/a/news/zhishi/12.html' title='第九期“以法兴企”文化沙龙活动'>第九期“以法兴企”文化沙龙活动</a></li>

          </ul>
        </div>
      </div>
    </div>
    <div class="ibox5_2">
      <div class="left_top"> <h3>信息服务</h3>
        <span><a href="/a/peixun/">更多+</a></span> </div>
      <div class="left_con">
        <div class="left_list">
          <ul>
            <li><span class='time'>2017-05-23</span><a href='/a/peixun/168.html' title='关于召开省工商联商协会党建工作'>关于召开省工商联商协会党建工作</a></li>
<li><span class='time'>2017-05-23</span><a href='/a/peixun/167.html' title='关于商请协助开展“促进我省电商'>关于商请协助开展“促进我省电商</a></li>
<li><span class='time'>2017-05-23</span><a href='/a/peixun/166.html' title='关于开展《广东省企业和企业经营'>关于开展《广东省企业和企业经营</a></li>
<li><span class='time'>2017-05-23</span><a href='/a/peixun/165.html' title='广东省企业和企业经营者权益保护'>广东省企业和企业经营者权益保护</a></li>
<li><span class='time'>2017-05-23</span><a href='/a/peixun/164.html' title='转发人力资源社会保障部 教育部'>转发人力资源社会保障部 教育部</a></li>
<li><span class='time'>2017-05-23</span><a href='/a/peixun/163.html' title='关于报送2012年以来工作总结、2'>关于报送2012年以来工作总结、2</a></li>
<li><span class='time'>2017-05-23</span><a href='/a/peixun/162.html' title='印发《关于对农资领域严重失信生'>印发《关于对农资领域严重失信生</a></li>

          </ul>
        </div>
      </div>
    </div>
    <div class="ibox5_3">
      <div class="left_top"> <h3>市场需求</h3>
        <span><a href="/a/jingji/">更多+</a></span> </div>
      <div class="left_con">
        <div class="left_list">
          <ul>
            <li><span class='time'>2017-05-23</span><a href='/a/jingji/tongzhi/2017/0523/137.html' title='关于印发《广东省工商联（总商会'>关于印发《广东省工商联（总商会</a></li>
<li><span class='time'>2017-05-23</span><a href='/a/jingji/tongzhi/2017/0523/136.html' title='关于报送2016年工作总结、2017年工'>关于报送2016年工作总结、2017年工</a></li>
<li><span class='time'>2017-05-23</span><a href='/a/jingji/tongzhi/2017/0523/135.html' title='关于开展2016年公益法治宣传作品'>关于开展2016年公益法治宣传作品</a></li>
<li><span class='time'>2017-05-23</span><a href='/a/jingji/tongzhi/2017/0523/134.html' title='2016-10-20关于开展2016年省非公有制'>2016-10-20关于开展2016年省非公有制</a></li>
<li><span class='time'>2017-05-23</span><a href='/a/jingji/tongzhi/2017/0523/133.html' title='2016-10-20关于开展2016年省工商联初'>2016-10-20关于开展2016年省工商联初</a></li>
<li><span class='time'>2017-05-23</span><a href='/a/jingji/tongzhi/2017/0523/132.html' title='关于参加“走进非洲”投资非洲高'>关于参加“走进非洲”投资非洲高</a></li>
<li><span class='time'>2017-05-23</span><a href='/a/jingji/tongzhi/2017/0523/131.html' title='关于举办华南企业法律论坛“跨国'>关于举办华南企业法律论坛“跨国</a></li>

          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="blank16"></div>
</div>
<div class="w1140">

<div class="link">
  <div class="link_left"><span>友情链接：</span></div>
  <div class="link_right">
    <ul>
       
      <!--link start--><!--link end-->
    </ul>
  </div>
</div>
</div>
<div class="blank20"></div>
<div class="clear"></div>
<div class="footer">
  <div class="w1140">
    <div class="footernav"> 
       <a href='/'>首页</a>|
       <a  href='/a/jieshao/'>科技局简介</a>|
       <a  href='/a/gonggao/'>生产技能</a>|
       <a  href='/a/fengcai/'>会员风采</a>|
       <a  href='/a/fagui/'>禽兽养殖</a>|
       <a  href='/a/renzheng/'>林业种植</a>|
       <a  href='/a/news/'>农业种植</a>|
       <a  href='/a/jingji/'>经营管理</a>|
       <a  href='/a/peixun/'>政策服务</a>|
       <a href='/a/xinxifuwu/'>信息服务</a>|
       <a href='/a/xinxifuwu/'>家庭农场</a>
       </div>
    <div class="footerall"> Copyright &copy; 2020-2021 版权所有 <a href="https://beian.miit.gov.cn/" target="_blank"> 粤ICP备18001801号</a>&nbsp;&nbsp;<a href="http://www.adminbuy.cn/" target="_blank"  title=""></a>&nbsp;&nbsp; </div>
    <div class="clear"></div>
  </div>
</div>

</body>
</html>