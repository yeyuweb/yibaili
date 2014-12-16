<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>    <!--End .header-->
    <div class="bannerProduct01">
<!--        <img src="<?php echo $CATEGORYS[$catid]['image'];?> " width="1424" height="334" />-->

           <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=33cdb639a4154ca1f0672bcacf8a0dd2&sql=SELECT+setting+FROM+ybl_poster+WHERE+spaceid+%3D+16+AND+type%3D%27images%27+AND+disabled%3D0+ORDER+BY+listorder+ASC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT setting FROM ybl_poster WHERE spaceid = 16 AND type='images' AND disabled=0 ORDER BY listorder ASC LIMIT 1");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
               <?php eval("\$narry =$r[setting];");?>
               <a  href="<?php echo $narry['1']['linkurl'];?>"><img src="<?php echo $narry['1']['imageurl'];?> " width="1424" height="334" /></a>
                  <?php $n++;}unset($n); ?> 
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
               </div>
    <!--End .banner-->