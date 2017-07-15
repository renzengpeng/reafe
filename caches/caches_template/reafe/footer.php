<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><footer class="footer style-2">
    <div class="container">
        <div class="row">
            <?php $arr=['97','98','99','100']?>
            <?php $n=1; if(is_array($arr)) foreach($arr AS $ak => $v) { ?>
            <div class="col-md-2 col-xs-6">
                <div class="col">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=0ab1219e6af08bd509ca1b4066f22e57&sql=select+%2A+from+hl_category+where+catid%3D%27%24v%27&return=data1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from hl_category where catid='$v' LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data1 = $a;unset($a);?>
                    <h4><?php echo $data1['0']['catname'];?></h4>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    <ul>
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2f55d93b005bc2f6474f04373a3a8574&action=lists&catid=%24v&order=listorder+DESC&moreinfo=1&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$v,'order'=>'listorder DESC','moreinfo'=>'1','limit'=>'5',));}?>
                        <?php $n=1; if(is_array($data)) foreach($data AS $k => $r) { ?>
                        <li><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></li>
                        <?php $n++;}unset($n); ?>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </ul>
                </div>
            </div>
        <?php $n++;}unset($n); ?>


            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=78220bdae1529b2eac2b41589cba524c&sql=select+%2A+from+hl_category+where+catid%3D%27101%27&return=data1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from hl_category where catid='101' LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data1 = $a;unset($a);?>
            <div class="col-md-2 col-xs-6">
                <div class="col">
                    <img src="<?php echo $data1['0']['image'];?>" class="img-responsive img-thumbnail"  style='width:100px;height100px;'>
                </div>
            </div>

            <div class="col-md-2 col-xs-6">
                <div class="col">
                    <img src="<?php echo $data1['0']['image1'];?>" class="img-responsive img-thumbnail" style='width:100px;height100px;'>
                </div>
            </div>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>


        </div>
    </div>
</footer>

</body>
<script src='<?php echo JS_PATH;?>reafe/lib/jquery-3.1.1.js'></script>
<script src="<?php echo JS_PATH;?>reafe/lib/dist/js/bootstrap.min.js"></script>


</html>