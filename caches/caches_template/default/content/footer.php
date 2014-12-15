<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="bottom clearfix">
  <div class="bottomWrap">
        <span class="arrowBot"></span>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <dl>
            <dt><?php echo $r['catname'];?></dt>
              <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=cf441adc902edc8857f08337fd97c6c6&action=category&catid=%24r%5Bcatid%5D&num=20&siteid=%24siteid&order=listorder+ASC&return=child_data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$child_data = $content_tag->category(array('catid'=>$r[catid],'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'20',));}?>
<?php $n=1;if(is_array($child_data)) foreach($child_data AS $rr) { ?>
            <dd><a href="<?php echo $rr['url'];?>"><?php echo $rr['catname'];?></a></dd>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </dl>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
           
        <div class="bottomRight">
            </div>
    </div>
</div>
<div class="clear">
</div>
<div class="footer">
  <div class="foot">
        <span class="arrowBot01"></span>
        <div class="footLeft fl">
            <a href="#" class="sn">工厂地图</a>
            <a href="#"class="sn1" >在线交流</a>
            <a href="#" class="sn2">发送邮件</a>
            <span class="sn3">86-0532-68003910</span>
				<!--<a            href="#" class="sn4">English</a>-->
				
				<a href="" target="_blank"
                        class="tmall"></a>
        </div>
        <div class="footRight fr">
            
        </div>
    </div>
</div>
<!--End .footer-->
<script src="<?php echo JS_PATH;?>script.js" type="text/javascript"></script>
<script src="<?php echo JS_PATH;?>jquery.bannerSwitch.js" type="text/javascript"></script>
<script src="<?php echo JS_PATH;?>jquery.KinSlideshow-1.2.1.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>banner.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>scrolltopcontrol.js"></script>
<script type="text/javascript">
<!--
    $(function () {
        $(".bannerSwitch01").bannerSwitch({
            time: 5000,
            animation: 1500
        });
        $(".bannerSwitch02").bannerSwitch({
            time: 3000,
            animation: 1500
        });
        $(".bannerSwitch03").bannerSwitch({
            time: 5000,
            animation: 1000
        });
        //if ($(window).width() > 1440) {
        //$('.head').width('1440px')
        //} else {
        // $('.head').width('100%');
        //}
        $('.hotelRight').banner({
            direction: 'lr',
            mode: 'slide', //动画方式 fade(渐隐渐现) / slide 左右滑入
            pages: true,  //是否需要pages true/false
            btns: true,  //是否需要btns true/false
            title: true, //是否需要title true/false
            autoanimate: false, //是否需要自动 true/false
            ease: 'easeInOutQuart', //ease插件
            cycle: false, //是否循环
            auto: 4000,  //停留时间
            animation: 500 //动画时间
        });
    });
//-->
</script>
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.jcarousel.min.js"></script>
<script type="text/javascript">
    $(function () {
        var len = $(".imglist li").length;
        if (len > 3) {
            $('.imglist').jcarousel({
                wrap: 'circular',
                auto: 5,
                scroll: 1,
                animation: 1000
            });
        } else {
            jQuery('.imglist').jcarousel({
                wrap: 'null',
                scroll: 4,
                animation: 4000
            });
        }

        $("#btok").click(function () {
            var key = $("#txtkey").val();
            if (key.length < 1) {
                alert("Enter search keywords");
                return false;
            }
            var type = $("#ddltype").val();
            window.location.href = type + key;
        });

    });
</script>


</body>
</html>
