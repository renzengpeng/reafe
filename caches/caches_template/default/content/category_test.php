<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"block\" data=\"op=block&tag_md5=78a28c9f1253ace4de3f124b6484f542&pos=index_block_29\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">添加碎片</a>";}$block_tag = pc_base::load_app_class('block_tag', 'block');echo $block_tag->pc_tag(array('pos'=>'index_block_29',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
