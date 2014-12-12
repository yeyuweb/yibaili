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
                
                <div class="newsTop clearfix">
                    <div class="nTleft">
                        <a href="">
                            <img src="<?php echo IMG_PATH;?>21118358643.jpg" width="188" height="126" alt="" /></a></div>
                    <div class="nTright">
                        <a href="">畅享卫浴新潮流 近百名设计师齐聚赣州欧路莎</a><br />
                        <span>2014-12-02</span><br />
                        <span>“无设计，不家装”。随着人们生活水平的提高，市民对于家装设计的要求也日益多元化。11月29日，欧路莎卫浴携手近百名知名设计师盛装开业，将新兴潮的家居设计潮流与丰富多样的住宅形式融入人们的生活中，为消费者打造专属的家装风格。</span>
                        </div>
                </div>
                
                <ul class="newsList clearfix">
                    <li><a href="">盐城欧路莎“大品牌大组合”联盟劲惠登场</a><span class="time">2014-11-18</span></li>
                     <li><a href="">“明星”同台斗艳，李冰冰引爆欧路莎兰州店现场</a><span class="time">2014-11-18</span></li>
                        
                </ul>
            </div>
            <div class="homeCenter">
                <div class="Plist">
                    <div class="PlistBox">
                    <ul class="imglist">
                    <li><a href=""  target="_blank" title="IT-803JAD" ><img src="<?php echo IMG_PATH;?>2410151738.jpg" width="160" height="110" /></a> <a href=""><p> IT-803JAD</p></a></li>
                            
                                 <li><a href=""  target="_blank" title="IT-803JAD" ><img src="<?php echo IMG_PATH;?>2410151738.jpg" width="160" height="110" /></a> <a href=""><p> IT-803JAD</p></a></li>
                            
                                 <li><a href=""  target="_blank" title="IT-803JAD" ><img src="<?php echo IMG_PATH;?>2410151738.jpg" width="160" height="110" /></a> <a href=""><p> IT-803JAD</p></a></li>
                             <li><a href=""  target="_blank" title="IT-803JAD" ><img src="<?php echo IMG_PATH;?>2410151738.jpg" width="160" height="110" /></a> <a href=""><p> IT-803JAD</p></a></li>
                            
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