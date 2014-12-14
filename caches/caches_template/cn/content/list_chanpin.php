<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<!--End .mainNav-->
    <!--End .header-->
<?php include template("content","header_min"); ?>
    <!--End .banner-->
    <div id="container" class="clearfix">
        <div class="productMain clearfix">
            <div class="proLeftNav">
              <div class="proLeftNavTitle">
                    产品分类</div>
                
        <?php include template("content","left_chanpin"); ?>  
 </div>
            <div class="productRight">
                <div class="proRightTitle">
                    <span class="sn"><?php echo $catname;?></span><div class="smallNav">
                     <a href="/">首页</a>&nbsp;&nbsp;>&nbsp;&nbsp; <?php echo catpos($catid);?></div>
                </div>
                <div class="proRightBox">
                  <div class="recommendBox">
                        <h2 class="h2">
                            最新推荐</h2>
                        <div class="recommendList">
                            <ul class="imglist">
                                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=34168fffdb2f6e976c165a110fc27ad0&action=lists&catid=%24catid&num=10&order=listorder+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 10;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'listorder DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'listorder DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                             <li><p><a href="<?php echo $r['url'];?>"><img src="<?php echo $r['thumb'];?>" width="170" height="132" /></a></p>
                                            <p><?php echo $r['title'];?></a></p>
                                        </li>
                                        <?php $n++;}unset($n); ?>
                                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                            </ul>
                        </div>
                        <script>
                        
                        </script>
                    </div>
                

                        <ul class="proList clearfix">
                              <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=9733eab3122e8e0faff630f4acd96fc6&action=lists&catid=%24catid&num=9&order=listorder+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 9;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'listorder DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'listorder DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                    <li>
                                        <p class="pic"><a href="<?php echo $r['url'];?>"><img src="<?php echo $r['thumb'];?>" width="170" height="132" /></a></p>
                                        <p><a href=""><?php echo $r['title'];?></a></p>
                                   </li>
                                   <?php $n++;}unset($n); ?>
                                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                                   
                                
                        </ul>
<div class="page">
<?php echo $pages;?>
</div>
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
