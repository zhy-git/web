<div class="w1140">
<div class="link">
  <div class="link_left"><span>友情链接：</span></div>
  <div class="link_right">
    <ul>     
     <?php
      $dosql->Execute("SELECT * FROM `#@__weblink` WHERE classid=1 AND checkinfo=true ORDER BY orderid,id DESC");
      while($row = $dosql->GetArray())
      {
      ?>
        <li><a href="<?php echo $row['linkurl']; ?>" target="_blank"><?php echo $row['webname']; ?></a></li>
      <?php
      }
      ?>   
    </ul>
  </div>
</div>
</div>
<div class="blank20"></div>
<div class="clear"></div>
<div class="footer">
  <div class="w1140">
    <div class="footernav"> 
      <?php
        $dosql->Execute("SELECT * FROM `#@__nav` WHERE parentid = 1 AND checkinfo = true ORDER BY orderid ASC");
        while($row = $dosql->GetArray())
        {
          if($cfg_isreurl != 'Y')
            $gourl = $row['linkurl'];
          else
            $gourl = $row['relinkurl'];
      ?>
          <a href="<?php echo $gourl;?>"><?php echo $row['classname'];?></a> | 
      <?php      
        }
      ?>
       </div>
    <div class="footerall"> Copyright &copy; 2020-2021 版权所有 <a href="https://beian.miit.gov.cn/" target="_blank"> 粤ICP备18001801号</a>&nbsp;&nbsp;<a href="http://www.adminbuy.cn/" target="_blank"  title=""></a>&nbsp;&nbsp; </div>
    <div class="clear"></div>
  </div>
</div>