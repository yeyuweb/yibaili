<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<div class="banner bannerSwitch01">
        <ul>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=6933f8c50f177f1f26760cb3dfdf7e59&sql=SELECT+setting+FROM+ybl_poster+WHERE+spaceid+%3D+11+AND+type%3D%27images%27+AND+disabled%3D0+ORDER+BY+listorder+ASC&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT setting FROM ybl_poster WHERE spaceid = 11 AND type='images' AND disabled=0 ORDER BY listorder ASC LIMIT 4");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
               <?php eval("\$narry =$r[setting];");?>
               <li><a  href="<?php echo $narry['1']['linkurl'];?>"><img src="<?php echo $narry['1']['imageurl'];?>" width="1440" height="565" /></a></li>
               <?php $n++;}unset($n); ?> 
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
     
                
        </ul>
        <div >
            <dl>
              <dd>1</dd>
              <dd>2</dd>
              <dd>3</dd>
              <dd>4</dd>
              </dl>
        </div>
    </div>
    <!--End .banner-->
<div id="container" class="clearfix">
  <div class="wrapMain">
            <div class="homeLeft">
                 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=ec55593a7448dfc9340240a8489003ac&sql=SELECT+ybl_cn_news.%2A+FROM+ybl_position_data+left+join+ybl_cn_news+on+ybl_position_data.id%3D+ybl_cn_news.id+where+ybl_position_data.posid%3D18+and+ybl_cn_news.id+is+not+null+++ORDER+BY+listorder+desc&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT ybl_cn_news.* FROM ybl_position_data left join ybl_cn_news on ybl_position_data.id= ybl_cn_news.id where ybl_position_data.posid=18 and ybl_cn_news.id is not null   ORDER BY listorder desc LIMIT 1");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <div class="newsTop clearfix">
                    <div class="nTleft">
                        <a href="<?php echo $r['url'];?>">
                            <img src="<?php echo $r['thumb'];?>" width="188" height="126" alt="" /></a></div>
                    <div class="nTright">
                        <a href="<?php echo $r['url'];?>"><?php echo str_cut(strip_tags($r[title]),40,"...");?></a><br />
                        <span><?php echo date('Y-m-d',$r[inputtime]);?></span><br />
                        <span><?php echo $r['description'];?></span>
                        </div>
                </div>
                                  <?php $n++;}unset($n); ?>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                
                <ul class="newsList clearfix">
                      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=c39221cf253d664775f35914f3b4b2c8&sql=SELECT+ybl_cn_news.%2A+FROM+ybl_position_data+left+join+ybl_cn_news+on+ybl_position_data.id%3D+ybl_cn_news.id+where+ybl_position_data.posid%3D18+and+ybl_cn_news.id+is+not+null+++ORDER+BY+listorder+desc&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT ybl_cn_news.* FROM ybl_position_data left join ybl_cn_news on ybl_position_data.id= ybl_cn_news.id where ybl_position_data.posid=18 and ybl_cn_news.id is not null   ORDER BY listorder desc LIMIT 3");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                <?php if($n!=1) { ?>
                    <li><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a><span class="time"><?php echo date('Y-m-d',$r[inputtime]);?></span></li>
                        <?php } ?>
                                <?php $n++;}unset($n); ?>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    
                        
                </ul>
            </div>
            <div class="homeCenter">
                <div class="Plist">
                    <div class="PlistBox">
                    <ul class="imglist">
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=b0f1fcac9ca98c32855629d072735a2e&sql=SELECT+ybl_cn_picture.%2A+FROM+ybl_position_data+left+join+ybl_cn_picture+on+ybl_position_data.id%3D+ybl_cn_picture.id+where+ybl_position_data.posid%3D19+and+ybl_cn_picture.id+is+not+null+++ORDER+BY+listorder+desc&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT ybl_cn_picture.* FROM ybl_position_data left join ybl_cn_picture on ybl_position_data.id= ybl_cn_picture.id where ybl_position_data.posid=19 and ybl_cn_picture.id is not null   ORDER BY listorder desc LIMIT 4");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li><a href="<?php echo $r['url'];?>"  target="_blank" title="<?php echo $r['title'];?>" ><img src="<?php echo $r['thumb'];?>" width="160" height="110" /></a> <a href="<?php echo $r['url'];?>"><p> <?php echo $r['title'];?></p></a></li>
                            <?php $n++;}unset($n); ?>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                                 
                            
                    </ul>
                    </div>
                </div>
            </div>
            <div class="homeRight bannerSwitch03">
                <ul>
                 <li><a href=""  target="_blank" title="2015年终大促" ><img src="<?php echo IMG_PATH;?>img_09.jpg" width="240" height="200" /></a>
                 <a href=""><p>2015年终大促</p></a></li>
                 </ul>
                <dl>
                <dd>1</dd>  
                </dl>
            </div>
            <div class="ewm"><img src="<?php echo IMG_PATH;?>ewm.jpg" width="108" height="108"><br>扫一扫<br>更多信息早知道</div>
            <div class="homeShadow clearfix">
			</div>
	</div>
</div>
<?php include template("content","footer"); ?>