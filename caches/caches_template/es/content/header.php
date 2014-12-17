<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />   
<link type="text/css" href="<?php echo CSS_PATH;?>base.css" rel="stylesheet" />
<link type="text/css" href="<?php echo CSS_PATH;?>page.css" rel="stylesheet" />
<script src="<?php echo JS_PATH;?>jquery-1.7.2.min.js" type="text/javascript"></script>
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
</head>
<style type="text/css">
 .nav {
margin: -30px 80px 0 0;
}
 
</style>
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
	<li><a href="<?php echo APP_PATH;?>cn"  class="s01"><img src="<?php echo IMG_PATH;?>t11.jpg" width="28" height="17" /></a></li>	
	<li ><a href="<?php echo APP_PATH;?>" class="s02"><img src="<?php echo IMG_PATH;?>t22.jpg" width="28" height="17" /></a></li>
	<li ><a href="<?php echo APP_PATH;?>es " class="s03"> <img src="<?php echo IMG_PATH;?>t33.jpg" width="28" height="17" /></a></li>
	<li ><a href="<?php echo APP_PATH;?>ru" class="s04"><img src="<?php echo IMG_PATH;?>t44.jpg" width="28" height="17" /></a></li>
	</ul></div>
               <form action="<?php echo APP_PATH;?>index.php" method="get" target="_blank" name="myform">
    	<div class="p1"></div>
        <div class="p2">
        <input name="q" id="txtkey" type="text" /></div>
        <div class="p3">
            <select id="ddltype">
          <option value="57">Productos</option>
          <option  value="58">Titulares.</option>
      </select></div>
        <input type="hidden" name="m" value="search"/>
        <input type="hidden" name="c" value="index"/>
        <input type="hidden" name="a" value="init"/>
        <input type="hidden" name="typeid" value="57" id="typeid"/> 
        <input type="hidden" name="siteid" value="<?php echo $siteid;?>" id="siteid"/>
        <div class="p4"><input type="submit" id="btok" value="Buscar" /></div>
               </form>
    </div>
    <div class="logo">
        <a href="/"><img src="<?php echo IMG_PATH;?>img_02.jpg" width="171" height="89" /></a>       
    </div>
    <div class="mainNav clearfix">   
        <ul class="nav clearfix">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
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
        <a href="<?php echo siteurl($siteid);?>" class="backHome">página</a>
    </div>
</div>
    <div class="navShow-about">
        <div class="navShowwrap">  
        <ul class="navList">
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=68a60889edda70cda2cec82de82e1e59&action=category&catid=69&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'69','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
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
          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=3ee0b7516c0c90695589f6be13dae2b6&sql=SELECT+ybl_es_picture.%2A+FROM+ybl_position_data+left+join+ybl_es_picture+on+ybl_position_data.id%3D+ybl_es_picture.id+where+ybl_position_data.posid%3D20+and+ybl_es_picture.id+is+not+null+++ORDER+BY+listorder+desc&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT ybl_es_picture.* FROM ybl_position_data left join ybl_es_picture on ybl_position_data.id= ybl_es_picture.id where ybl_position_data.posid=20 and ybl_es_picture.id is not null   ORDER BY listorder desc LIMIT 4");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li><p><a href="<?php echo $r['url'];?>"><img src="<?php echo $r['thumb'];?>" width="119" height="96" alt="<?php echo $r['title'];?>"/></a></p><p><a href=""><?php echo $r['title'];?></a></p></li>
            <?php $n++;}unset($n); ?>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>  
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3f8facce72149f4a4d4eef9cb9a7ed50&action=category&catid=75&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'75','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
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
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=bc77bf3fc416801a47bc648ffec7ba72&action=category&catid=87&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'87','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
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
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=fb99fca79047fff8e2c7dfeeaa9efa2e&action=category&catid=90&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'90','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
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
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=21f0f102c3c41add11fcc426f5ea966a&action=category&catid=94&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'94','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
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
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2a54a4f85b35203746f6c94e32438eba&action=category&catid=96&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'96','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
             <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li ><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
             <?php $n++;}unset($n); ?>
             <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            
         </ul>        
         </div>
    </div>
</div>