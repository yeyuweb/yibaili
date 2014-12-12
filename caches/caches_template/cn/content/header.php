<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />   
<link type="text/css" href="<?php echo CSS_PATH;?>base.css" rel="stylesheet" />
<link type="text/css" href="<?php echo CSS_PATH;?>page.css" rel="stylesheet" />
<title>亿佰利</title>
</head>
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
    	<div class="p1"></div>
        <div class="p2"><input name="" id="txtkey" type="text" /></div>
        <div class="p3"><select id="ddltype">
          <option value="/product/Results.aspx?key=">产品型号</option>
          <option  value="/news/Results.aspx?key=">新闻标题</option>
      </select></div>
        <div class="p4"><input type="button" id="btok" value="搜索" /></div>
       
    </div>
    <div class="logo">
        <a href="/"><img src="<?php echo IMG_PATH;?>img_02.jpg" width="171" height="89" /></a>       
    </div>
    <div class="mainNav clearfix">   
        <ul class="nav clearfix">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li class="<?php echo $r['description'];?> "><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>                   
        </ul>    
        <a href="<?php echo siteurl($siteid);?>" class="backHome">返回首页</a>
    </div>
</div>
    <div class="navShow-about">
        <div class="navShowwrap">  
        <ul class="navList">
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=348a36377ba1c0aa8a5016175db202e5&action=category&catid=6&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'6','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
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
          
            <li><p><a href=""><img src="<?php echo IMG_PATH;?>161420583022.jpg" width="119" height="96" alt=""/></a></p><p><a href="">烫图</a></p></li>
            
            <li><p><a href=""><img src="<?php echo IMG_PATH;?>171423299005.jpg" width="119" height="96" alt=""/></a></p><p><a href="">钻</a></p></li>
            
            <li><p><a href=""><img src="<?php echo IMG_PATH;?>171418231100.jpg" width="119" height="96" alt=""/></a></p><p><a href="">八角</a></p></li>
            
            <li><p><a href=""><img src="<?php echo IMG_PATH;?>161420583022.jpg" width="119" height="96" alt=""/></a></p><p><a href="">半圆片</a></p></li>
        </ul>  
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a910ec7667ac39446959d9752009b43a&action=category&catid=12&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'12','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
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
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=cbb80374144affd8ee7457ee29e2343b&action=category&catid=13&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'13','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
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
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7588a606c1ac1852286fa98198f49bed&action=category&catid=14&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'14','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
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
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b66e30693cf5f9613bf60159149549db&action=category&catid=15&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'15','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
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
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=23360c254c7388c82aba3864caa005ae&action=category&catid=16&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'16','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
             <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li ><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
             <?php $n++;}unset($n); ?>
             <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            
         </ul>        
         </div>
    </div>
</div>