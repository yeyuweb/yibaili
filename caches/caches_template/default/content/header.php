<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />   
<link type="text/css" href="<?php echo CSS_PATH;?>base.css" rel="stylesheet" />
<link type="text/css" href="<?php echo CSS_PATH;?>page.css" rel="stylesheet" />
<script src="<?php echo JS_PATH;?>jquery-1.7.2.min.js" type="text/javascript"></script>
<title>亿佰利</title>
</head>
<script type="text/javascript">
        $(function(){
            $("#ddltype").change(function(){
                var value = $(this).find('option:selected').val();
                $("#typeid").val(value);
            })
        })
 
        
        
        
    </script>
<body>

<div class="header clearfix">
<div class="head">

	<div class="ss">
	<div class="s11"><ul>	
	<li><a href="#"  class="s01"><img src="<?php echo IMG_PATH;?>t11.jpg" width="28" height="17" /></a></li>	
	<li ><a href="#" class="s02"><img src="<?php echo IMG_PATH;?>t22.jpg" width="28" height="17" /></a></li>
	<li ><a href="# " class="s03"> <img src="<?php echo IMG_PATH;?>t33.jpg" width="28" height="17" /></a></li>
	<li ><a href="#" class="s04"><img src="<?php echo IMG_PATH;?>t44.jpg" width="28" height="17" /></a></li>
	</ul></div>
               <form action="<?php echo APP_PATH;?>index.php" method="get" target="_blank" name="myform">
    	<div class="p1"></div>
        <div class="p2">
        <input name="q" id="txtkey" type="text" /></div>
        <div class="p3">
            <select id="ddltype">
          <option value="55">product model</option>
          <option  value="56">news title</option>
      </select></div>
        <input type="hidden" name="m" value="search"/>
        <input type="hidden" name="c" value="index"/>
        <input type="hidden" name="a" value="init"/>
        <input type="hidden" name="typeid" value="55" id="typeid"/> 
        <input type="hidden" name="siteid" value="<?php echo $siteid;?>" id="siteid"/>
        <div class="p4"><input type="submit" id="btok" value="search" /></div>
               </form>
    </div>
    <div class="logo">
        <a href="/"><img src="<?php echo IMG_PATH;?>img_02.jpg" width="171" height="89" /></a>       
    </div>
    <div class="mainNav clearfix">   
        <ul class="nav clearfix">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <?php if((count(subcat($r[catid],0,0,$siteid)) > 0 || count(subcat($r[catid],1,0,$siteid)) > 0)  && $n !=2) { ?>
                <?php $zi_arr = explode(',',$r[arrchildid])?>
                <?php $url = $CATEGORYS[$zi_arr[1]][url]?>
            <?php } else { ?>
                <?php $url  = $r[url]?>
            <?php } ?>
            <li class="<?php echo $r['description'];?> "><a href="<?php echo $url;?>"><?php echo $r['catname'];?></a></li>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>                   
        </ul>    
        <a href="<?php echo siteurl($siteid);?>" class="backHome">home page</a>
    </div>
</div>
    <div class="navShow-about">
        <div class="navShowwrap">  
        <ul class="navList">
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a2d367291b0dc97f9b7c7742af565722&action=category&catid=40&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'40','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
             <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
             <li ><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
             <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>  

         </ul>                             
         </div>
    </div>

    <div class="navShow-product">
        <div class="navShowwrap">
         <ul class="nSplist">
          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=969c4f7e8ad3bffc51fc0e86c8f524a5&sql=SELECT+ybl_en_picture.%2A+FROM+ybl_position_data+left+join+ybl_en_picture+on+ybl_position_data.id%3D+ybl_en_picture.id+where+ybl_position_data.posid%3D23+and+ybl_en_picture.id+is+not+null+++ORDER+BY+listorder+desc&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT ybl_en_picture.* FROM ybl_position_data left join ybl_en_picture on ybl_position_data.id= ybl_en_picture.id where ybl_position_data.posid=23 and ybl_en_picture.id is not null   ORDER BY listorder desc LIMIT 4");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li><p><a href="<?php echo $r['url'];?>"><img src="<?php echo $r['thumb'];?>" width="119" height="96" alt="<?php echo $r['title'];?>"/></a></p><p><a href=""><?php echo $r['title'];?></a></p></li>
            <?php $n++;}unset($n); ?>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>  
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5c955c60c91441aac9f6619763ad1cf7&action=category&catid=46&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'46','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
            <?php $i=1;?>
            <ul class="nameList">     
             <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
                          <?php if($i%4==0) { ?>
                </ul><ul class="nameList">   
                <?php } ?> 
                 <?php $i++;?>
             <?php $n++;}unset($n); ?>
             <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
             </ul>
 </div>
    </div>
    <div class="navShow-project">
        <div class="navShowwrap">          
         <ul class="navList">
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=418eae4c8722bf42bba3388f9e0640c5&action=category&catid=58&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'58','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
             <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li><a href="<?php echo $r['url'];?>" ><?php echo $r['catname'];?></a></li>
               <?php $n++;}unset($n); ?>
             <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
         

              </ul>        
         </div>
    </div>
    <div class="navShow-support">
        <div class="navShowwrap">          
         <ul class="navList">
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6c099a2cc8f02c71710c4e8595ced31b&action=category&catid=61&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'61','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
             <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li ><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
             <?php $n++;}unset($n); ?>
             <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        

         </ul>        
         </div>
    </div>
    <div class="navShow-technology">
        <div class="navShowwrap">          
         <ul class="navList">
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ab6ac3b5de06bd5f546d4c2f8859a9d7&action=category&catid=64&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'64','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
             <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li ><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
            <?php $n++;}unset($n); ?>
             <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

         </ul>        
         </div>
    </div>
    <div class="navShow-contact">
        <div class="navShowwrap">          
         <ul class="navList">
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=cfe0317d8af66ff7a68c2a0609692443&action=category&catid=66&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'66','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
             <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li ><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
             <?php $n++;}unset($n); ?>
             <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            
         </ul>        
         </div>
    </div>
</div>