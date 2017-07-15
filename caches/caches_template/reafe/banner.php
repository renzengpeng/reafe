<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=fc3ab890c57620a17d212d50ac948746&sql=select+%2A+from+hl_category+where+catid%3D%27%24catid%27&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from hl_category where catid='$catid' LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
<div class='banner'>
    <div class="jumbotron">

        <img src="<?php echo $data['0']['image'];?>" alt="">

        <div class="mask hidden-xs <?php if($data[0]['catid']!='57') { ?>hidden<?php } ?>">
           <?php echo $data['0']['description'];?></div>
    </div>
</div>

<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>