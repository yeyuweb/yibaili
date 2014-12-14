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
            <div class="proRightTitle"><span class="sn01"> <?php echo $title;?></span><div class="smallNav"><a href="<?php echo siteurl($siteid);?>">首页</a>&nbsp;&nbsp;>&nbsp;&nbsp;
                     <?php echo catpos($catid);?></div></div>
            <div class="proRightBox">
                <div class="detailTop clearfix">
                    <div class="leftPics bannerSwitch02">
                        <ul class="clearfix">
                            <?php $n=1; if(is_array($pictureurls)) foreach($pictureurls AS $pic_k => $r) { ?>
                            <li><img src="<?php echo $r['url'];?>" width="518" height="290" /></li>
                            
                            <?php $n++;}unset($n); ?>
                           
                        </ul>
                        <dl class="clearfix">
                        
                          <dd></dd>
                            
                            <dd></dd>
                            
                            <dd></dd>
                            
                      </dl>
                  </div>
                    <div class="rightCons">
                        <p class="pn">
                           <?php echo $title;?></p>
                        <div class="ps">
                        <div class="infoRight1">
                            <div class="infoRight">
	<div class="dd">
		<span class="dl">尺寸:</span><span class="dr"><?php echo $keywords['0'];?></span></div>
	<div class="dd">
		<span class="dl">坑距:</span><span class="dr"><?php echo $description;?></span></div>
</div>
<p>
	 </p></div>
                      </div>
                    </div>
                </div>
                <div class="detailMain clearfix">
                    <div class="detailTab">
                        <ul>
                        
                            <li class="current">产品介绍</li>
                            
                            <li>规格参数</li>                       
                        </ul>
                    </div>
                    <div class="detailBox">
                     
                        <div class="detailShow">
                 <?php echo $content;?>

                        </div>
                        
                        <div class="detailShow">
                            <p style="text-align: center">
<?php echo $guige;?></p>
                        </div>
                           
                    </div>
                    
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