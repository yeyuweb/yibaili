<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<!--End .mainNav-->
    <!--End .header-->
<?php include template("content","header_min"); ?>
    <!--End .banner-->
    <div id="container" class="clearfix">
        <div class="wrapMain01 clearfix">
            <div class="titleMain01">
                <h1 class="title">
                    <?php echo $catname;?>
                </h1>
                <div class="navCrumbs01">
                   <a href="<?php echo siteurl($siteid);?>">首页</a> > <?php echo catpos($catid);?></div>
            </div>
            <div class="downloadWrap">
                <div class="downloadSearch clearfix">
                    <span>
                        <input type="text" value="输入相关关键字" class="searchText" onfocus="if(this.value=='输入相关关键字'){this.value='';}" /></span>
                    <span>
                        <input type="button" class="searchBtn" /></span>
                </div>
                <ul class="downloadList clearfix">
                     <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e79fe2c6f53b8edaa129e2078d7d6c58&action=lists&catid=%24catid&num=9&order=listorder+desc&page=%24page&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 9;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'listorder desc','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'listorder desc','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
      <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
       <?php eval("\$narry =$r[downfiles];");?>
                            <li><a href="<?php echo $narry['0']['fileurl'];?>">
                                <div class="downloadBox">
                                    <div class="picLeft">
                                        <img  src="<?php echo $r['thumb'];?>" width="105" height="83" alt="" /></div>
                                    <div class="textRight">
                                        <h3 class="h3">
                                            <?php echo $r['title'];?></h3>
                                        <p>
                                            日期：<?php echo date('Y-m-d',$r[inputtime]);?></p>
                                    </div>
                                </div>
                            </a></li>
                                  <?php $n++;}unset($n); ?>
      <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

                        
                           
                        
                    

                </ul>
                <div class="page">
                    
<!-- AspNetPager V7.2 for VS2005 & VS2008  Copyright:2003-2008 Webdiyer (www.webdiyer.com) -->
<div id="pgServer" class="page">
<?php echo $pages;?>
</div>
<!-- AspNetPager V7.2 for VS2005 & VS2008 End -->


                </div>
            </div>
        </div>
    </div>
    </div>
<script type="text/javascript">
        $(function () {
            if ($("#hfid").val() != "") {
                var hf = $("#hfid").val();
                $(".productSmain a[srcs=0]").each(function () {
                    $(".productSmain a[name=" + $(this).attr("name") + "]").each(function () {
                        if (hf.indexOf("|" + $(this).attr("srcs") + "|") > -1) {
                            $(".productSmain a[srcs=0][name=" + $(this).attr("name") + "]").parent().attr("class", "");
                            $(this).parent().attr("class", "current");
                        }
                    })

                })
                $(".proMainTop").trigger("click");
            }
            $(".proMainTop").trigger("click");
            $(".productSmain a").click(function () {
                var name = $(this).attr("name");
                var id = $(this).attr("srcs");
                var hf = $("#hfid").val();
                if (name != "" && id != "") {
                    if (hf == "") {
                        if (id != "0") {
                            hf = "|" + id + "|";
                        }
                    } else {
                        if (hf.indexOf("|" + id + "|") < 0) {
                            $(".productSmain a[name=" + name + "]").each(function () {
                                if (hf.indexOf("|" + $(this).attr("srcs") + "|") > -1) {
                                    hf = hf.replace("|" + $(this).attr("srcs") + "|", "|");
                                }
                            })
                            if (id != "0") {
                                hf += id + "|";
                            }
                        }   //                    else {
                        //                        if (hf == "") {
                        //                            hf = "|" + id + "|";
                        //                        } else {
                        //                            hf += id + "|";
                        //                        }
                        //                    }
                    }

                }
                $("#hfid").val(hf);
                if (hf == "|") hf = "";
                if (hf == "") {
                    window.location.href = "list.aspx?id=49#pro";
                } else {
                    window.location.href = "list.aspx?id=49&hid=" + hf + "#pro";
                }
            });

        });
        function voids() { }
    </script>
    <!--End .container-->
    <?php include template("content","footer"); ?>