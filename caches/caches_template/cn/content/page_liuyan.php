<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>    <?php include template("content","header"); ?>
    <!--End .header-->
    <?php include template("content","header_min"); ?>
    <!--End .banner-->
    <div id="container" class="clearfix">
    <div class="wrapMain clearfix">
        <div class="contactMain01 clearfix">
                <div class="titleMain01" style="margin-top: -35px;">
                    <h1 class="title"><?php echo $catname;?></h1>
                    <div class="navCrumbs01">
                        <a href="<?php echo siteurl($siteid);?>">首页</a> > <?php echo catpos($catid);?></div>
                </div>
                <div class="contactDtBox">
                    <div class="contactDetailTop clearfix" style="padding-bottom:20px;">
                        
                       <form method="post" action="?m=formguide&c=index&a=show&formid=16&siteid=2" name="myform" id="myform">

                          <table width="1000" border="0" cellspacing="0" cellpadding="0" class="zxly">
  <tr>
    <td width="73" height="45" align="right">姓名：</td>
    <td width="927"><input name="info[cn_name]" id="cn_name" type="text" /></td>
  </tr>
  <tr>
    <td height="45" align="right">联系方式：</td>
      <td><input name="info[cn_link]"  id="cn_link" type="text" /></td>
  </tr>
  <tr>
    <td height="45" align="right">地址：</td>
    <td><input name="info[cn_location]"  id="cn_location" type="text" /></td>
  </tr>
  <tr>
    <td height="120" align="right">留言内容：</td>
    <td><textarea name="info[cn_content]" id='cn_content' cols="" rows="">&nbsp;</textarea></td>
  </tr>
    <tr>
    <td height="60" align="right"></td>
    <td><input  type="submit" name="dosubmit" id="dosubmit" value="提交"></td>
  </tr>
</table>
                       </form>
</div>
                    <div class="contactDetailBot">
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