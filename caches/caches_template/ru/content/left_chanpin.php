<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><ul class="proLeftNavList">
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ed4348210f14d42214dd9ab9fe285068&action=category&catid=105&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'105','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li <?php if($catid==$r['catid'] || $parentid==$r['catid'] || $arrparentid[2]==$r['catid']) { ?> class="current"<?php } ?>>
                <span class="name">
                <?php echo $r['catname'];?></span>
                <dl class="ulShow">
                     <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=cf441adc902edc8857f08337fd97c6c6&action=category&catid=%24r%5Bcatid%5D&num=20&siteid=%24siteid&order=listorder+ASC&return=child_data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$child_data = $content_tag->category(array('catid'=>$r[catid],'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'20',));}?>
<?php $n=1;if(is_array($child_data)) foreach($child_data AS $rr) { ?>
                  <dd <?php if($catid==$rr['catid'] || $parentid==$rr['catid'] || $arrparentid[2]==$rr['catid']) { ?> class="current"<?php } ?>> <a href="<?php echo $rr['url'];?>"><?php echo $rr['catname'];?></a></dd>
                             <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                  
                        
                </dl>
            </li>
                    <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            
       </ul>