<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<div class="banner bannerSwitch01">
        <ul>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=a84ffe3938b3328d595976aff1092f06&sql=SELECT+setting+FROM+ybl_poster+WHERE+spaceid+%3D+1+AND+type%3D%27images%27+AND+disabled%3D0+ORDER+BY+listorder+ASC&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT setting FROM ybl_poster WHERE spaceid = 1 AND type='images' AND disabled=0 ORDER BY listorder ASC LIMIT 4");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
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
                 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=81cd76cfaf81405b921caec4643dcca3&sql=SELECT+ybl_en_news.%2A+FROM+ybl_position_data+left+join+ybl_en_news+on+ybl_position_data.id%3D+ybl_en_news.id+where+ybl_position_data.posid%3D18+and+ybl_en_news.id+is+not+null+++ORDER+BY+listorder+desc&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT ybl_en_news.* FROM ybl_position_data left join ybl_en_news on ybl_position_data.id= ybl_en_news.id where ybl_position_data.posid=18 and ybl_en_news.id is not null   ORDER BY listorder desc LIMIT 1");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
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
                      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=18fd89f1d2f2ff8c50d428d1fcf2775e&sql=SELECT+ybl_en_news.%2A+FROM+ybl_position_data+left+join+ybl_en_news+on+ybl_position_data.id%3D+ybl_en_news.id+where+ybl_position_data.posid%3D22+and+ybl_en_news.id+is+not+null+++ORDER+BY+listorder+desc&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT ybl_en_news.* FROM ybl_position_data left join ybl_en_news on ybl_position_data.id= ybl_en_news.id where ybl_position_data.posid=22 and ybl_en_news.id is not null   ORDER BY listorder desc LIMIT 3");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
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
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=f4b777fe1afa445e1a0112f096460ad9&sql=SELECT+ybl_en_picture.%2A+FROM+ybl_position_data+left+join+ybl_en_picture+on+ybl_position_data.id%3D+ybl_en_picture.id+where+ybl_position_data.posid%3D24+and+ybl_en_picture.id+is+not+null+++ORDER+BY+listorder+desc&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT ybl_en_picture.* FROM ybl_position_data left join ybl_en_picture on ybl_position_data.id= ybl_en_picture.id where ybl_position_data.posid=24 and ybl_en_picture.id is not null   ORDER BY listorder desc LIMIT 4");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
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