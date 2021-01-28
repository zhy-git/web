<div class="header">
  <div class="w1140">
    <div class="logo"><a href="/" title="<?php echo $cfg_webname;?>"><img alt="<?php echo $cfg_webname;?>" src="/images/logo.png" alt="<?php echo $cfg_webname;?>" /></a></div>
    <div class="topright">
      <div class="language">
        <ul>
          <li><a href="javascript:void(0);" onclick="SetHome();">设为首页</a>|</li>
          <li><a href="javascript:void(0);" onclick="AddFavorite();">添加收藏</a></li>
        </ul>
      </div>
      <div class="tel"><span><?php echo $cfg_hotline;?></span></div>
    </div>
  </div>
</div>
<div class="navigate clear">
  <div class="w1140">
    <ul>
     <?php echo GetNav(); ?>
    </ul>
  </div>
</div>
<script type="text/javascript">
$(function(){
  /*当前页面导航高亮*/
  var href = window.location.href.split('/')[window.location.href.split('/').length-1].substr(0,4);
  if(href.length > 0){
    $(function(){
      $(".w1140 a:first[href^='"+href+"']").attr("class","current");
      if($(".w1140 a:first[href^='"+href+"']").size() == 0){
        $(".w1140 a:first[href^='index']").attr("class","current");
      }
    });
  }else{
    $(function(){$(".w1140 a:first[href^='index']").attr("class","current")});
  }
})
</script>