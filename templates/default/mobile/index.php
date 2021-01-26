<?php	if(!defined('IN_MOBILE')) exit('Request Error!'); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<?php echo GetHeader(); ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta name="HandheldFriendly"content="true"/>
<meta name="format-detection"content="telephone=no">
<meta http-equiv="x-rim-auto-match"content="none"/>
<script type="text/javascript" src="templates/default/js/jquery.min.js"></script>
<link href="<?php echo $cfg_webpath; ?>/templates/default/style/mobile.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="wrap" data-role="page">
	<div class="header" data-toolbar="fixed">
		<div class="logo"><?php echo $cfg_webname; ?></div>
	</div>
	<!-- 幻灯片 -->
    <div id="min-banner" class="banner">
            <?php
			$dosql->Execute("SELECT * FROM `#@__infoimg` WHERE classid=16 AND delstate='' AND checkinfo=true ORDER BY orderid DESC LIMIT 0,5");
			while($row = $dosql->GetArray())
			{
				if($row['linkurl'] != '')$gourl = $row['linkurl'];
				else $gourl = 'javascript:;';
		  ?>
               <div>
			      <a href="<?php echo $gourl; ?>"><img src="<?php echo $row['picurl']; ?>" width="100%" alt="banner"/></a>
		       </div>
		    <?php
			}
		  ?> 

	</div>
	<!-- 幻灯片end -->
	<div class="content">
		<?php require_once(dirname(__FILE__).'/nav.php'); ?>

		<?php
              $dosql->Execute("SELECT * FROM `#@__infoclass` WHERE  `parentid`=5 AND `checkinfo`=true ORDER BY orderid ASC");
              while($row = $dosql->GetArray()){
             //获取链接地址
			  $gourl = '4g.php?m=img&cid='.$row['id'];
              $txt = '<a id="L24" href='.$gourl.' class="font1">'.$row["classname"].'</a>'; 
		    } 
		 ?> 

		<!-- 栏目内容 -->
		<?php
		
		//目前只支持 单页、列表、图片模型
		$dosql->Execute("SELECT * FROM `#@__infoclass` WHERE `infotype` IN (0,1,2) AND parentid=0 AND checkinfo='true' ORDER BY orderid ASC");
		if($dosql->GetTotalRow() > 0)
		{
			while($row = $dosql->GetArray())
			{
				switch ($row['infotype'])
				{
					case 0:
						$m = 'info';
					 break;
					case 1:
						$m = 'list';
					 break;
					case 2:
						$m = 'img';
					 break;
					default:
						echo 'No number between 1 and 3';
				}
		?>
		<div class="pubBox">
           <?php if($row['id'] == '5'){?>
			<div class="column-title text-center" data-scroll-reveal="enter top and move 50px over 1.33s">
					<div class="ch" style="font-size: 26.6667px;"><b><span class="green">服务</span>范围</b></div>
					<div class="en" style="font-size: 13.3333px;">Product Center</div>
			        <div id="pro-type" class="text-center">   
                         专业从事地基与基础工程施工的企业
				    </div>
		    </div>
		     <?php }elseif($row['id'] == '4'){?>
			<div class="column-title text-center" data-scroll-reveal="enter top and move 50px over 1.33s">
								<div class="ch" style="font-size: 26.6667px;"><b><span class="green">新闻</span>资讯</b></div>
								<div class="en" style="font-size: 13.3333px;">new center</div>
						        <div id="pro-type" class="text-center">   
			                        
							    </div>
					    </div>
		   <?php }elseif($row['id'] == '2'){?>
			<div class="column-title text-center" data-scroll-reveal="enter top and move 50px over 1.33s">
								<div class="ch" style="font-size: 26.6667px;"><b><span class="green">关于</span>我们</b></div>
								<div class="en" style="font-size: 13.3333px;">about</div>
						        <div id="pro-type" class="text-center">   
			                        
							    </div>
					    </div>
		    <?php }elseif($row['id'] == '8'){?>
				<div class="column-title text-center" data-scroll-reveal="enter top and move 50px over 1.33s">
					<div class="ch" style="font-size: 26.6667px;"><b><span class="green">材料</span>设备</b></div>
					<div class="en" style="font-size: 13.3333px;">Case Center</div>
			        <div id="pro-type" class="text-center">   
                         
				    </div>
		       </div>
		    <?php }elseif($row['id'] == '9'){?>
				<div class="column-title text-center" data-scroll-reveal="enter top and move 50px over 1.33s">
					<div class="ch" style="font-size: 26.6667px;"><b><span class="green">联系</span>我们</b></div>
					<div class="en" style="font-size: 13.3333px;">Contact us</div>
			        <div id="pro-type" class="text-center">   
                         
				    </div>
		       </div>
            <?php }else{?>
            <div class="hd">
				<h2><?php echo $row['classname']; ?></h2>
			</div>
		    <?php }?>
			<div class="ft">
				<?php

				//单页模型
				if($row['infotype'] == '0')
				{
					echo '<ul class="info">'.ClearHtml(Info($row['id'],200)).'</ul>';
				}

				//列表模型
				else if($row['infotype'] == '1')
				{
					echo '<ul class="list">';

					$dosql->Execute("SELECT * FROM `#@__infolist` WHERE (classid=".$row['id']." or parentid=".$row['id']." or parentstr like '%".$row['id']."%') AND delstate='' AND checkinfo=true ORDER BY orderid DESC LIMIT 0,10",$row['id']);
					while($row1 = $dosql->GetArray($row['id']))
					{
					?>
					<li><a href="?m=show&cid=<?php echo $row['id'];?>&id=<?php echo $row1['id']?>" style="color:<?php echo $row1['colorval']; ?>;font-weight:<?php echo $row1['boldval']; ?>;"><?php echo $row1['title']; ?></a></li>
				<?php
					}

					echo '<div class="cl"></div></ul>';
				}

				//图片模型
				else if($row['infotype'] == '2')
				{
					echo '<ul class="img">';

					$dosql->Execute("SELECT * FROM `#@__infoimg` WHERE (classid=".$row['id']." or parentid=".$row['id']." or parentstr like '%".$row['id']."%') AND delstate='' AND checkinfo=true ORDER BY orderid DESC LIMIT 0,4",$row['id']);	
					$i=1;		
					while($row2 = $dosql->GetArray($row['id']))
					{
						//获取缩略图地址
						if($row2['picurl'] != '')
							$picurl = $row2['picurl'];
						else
							$picurl = 'templates/default/images/nofoundpic.gif';
				?>
					<li style="<?php echo $i%2==0?'margin-right:0px':'';?>" data-scroll-reveal="enter top and move 50px over 1.33s">
						<a href="?m=show&cid=<?php echo $row['id'];?>&id=<?php echo $row2['id']?>"><img width="100%" src="<?php echo $picurl; ?>" title="<?php echo $row2['title']; ?>" /></a><p style="text-align:center;padding: 0.5em 0px;"><a href="<?php echo $picurl;?>"><?php echo $row2['title']?></a></p>
					</li>
					<?php
					$i++;}

					echo '<div class="cl"></div></ul>';
				}
				?>
			</div>
			<div class="cl"></div>
			<div class="goChannel"><span><a href="?m=<?php echo $m; ?>&cid=<?php echo $row['id']; ?>">进入<?php echo $row['classname']; ?></a></span></div>
		</div>
		<?php
			}
		}
		?>
	</div>
	<?php require_once(dirname(__FILE__).'/footer.php'); ?>
</div>
<script type="text/javascript" src="./js/scrollReveal.js"></script>
	<script type="text/javascript" src="./js/slick.js"></script>
	<script type="text/javascript" src="./js/home.js"></script>
<script type="text/javascript">
    $(".img li:odd").attr("data-scroll-reveal", "enter bottom and move 50px over 1.33s");
	$(".nav ul li:first a").attr("class","hover");
</script>
</body>
</html>