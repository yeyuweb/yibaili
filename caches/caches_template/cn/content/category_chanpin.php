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
                     <a href="<?php echo siteurl($siteid);?>">首页</a>&nbsp;&nbsp;>&nbsp;&nbsp; <?php echo catpos($catid);?></div>
                </div>
                <div class="proRightBox">
                  <div class="recommendBox">
                        <h2 class="h2">
                            最新推荐</h2>
                        <div class="recommendList">
                            <ul class="imglist">
                                  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=665a5658af912e25ccc61b0bdba57391&sql=SELECT+%2A+FROM+ybl_cn_picture++ORDER+BY+listorder+desc&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM ybl_cn_picture  ORDER BY listorder desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
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
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=1eb2346c3027557efc4ece07771fc758&sql=SELECT+%2A+FROM+ybl_cn_picture++ORDER+BY+listorder+desc&num=9&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$pagesize = 9;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$r = $get_db->sql_query("SELECT COUNT(*) as count FROM  ybl_cn_picture  ORDER BY listorder desc");$s = $get_db->fetch_next();$pages=pages($s['count'], $page, $pagesize, $urlrule);$r = $get_db->sql_query("SELECT * FROM ybl_cn_picture  ORDER BY listorder desc LIMIT $offset,$pagesize");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
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
