<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<!--End .mainNav-->
    <!--End .header-->
<?php include template("content","header_min"); ?>
    <!--End .banner-->
    <div id="container" class="clearfix" style="padding:10px 0px;">
   <div class="wrap clearfix">
          <div class="titleMain">
              <h1 class="title">
                  <?php echo $catname;?></h1>
              <div class="navCrumbs"><a href="<?php echo siteurl($siteid);?>">首页</a> >搜索内容</div>
          </div>
             <table width="1100" border="0" cellspacing="0" cellpadding="0" class="ybl_news">
          <?php $n=1;if(is_array($search_data)) foreach($search_data AS $r) { ?>
  <tr>
    <td width="36" height="42" align="center"><img src="<?php echo IMG_PATH;?>menu_03.jpg" /></td>
    <td width="939"><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></td>
    <td width="125"><?php echo date('Y-m-d',$r[inputtime]);?></td>
  </tr>
  <?php $n++;}unset($n); ?>
</table>

<div class="page">
<?php echo $pages;?>
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