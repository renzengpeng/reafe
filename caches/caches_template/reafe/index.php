<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("","header"); ?>
        <?php $catid=56;?>
  <link rel="stylesheet" href="<?php echo CSS_PATH;?>reafe/index.css">
</head>

<body>
<?php include template("","nav"); ?>
<?php include template("","banner"); ?>
<div class="jumbotron hidden-xs md1">
    <div class="container">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=fc3ab890c57620a17d212d50ac948746&sql=select+%2A+from+hl_category+where+catid%3D%27%24catid%27&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from hl_category where catid='$catid' LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
        <h1><?php echo $data['0']['description_index'];?></h1>
        <p><?php echo $data['0']['description'];?>
        </p>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
</div>
  <div class="content">
    <div class="md1">
      <div class="container visible-xs">
        <h1>__</h1>
        <h1>Reafe</h1>
        <p>将专注赋予行动 以诚信铸造产品 用心呵护 用爱灌盖.</p>
      </div>
    </div>
		<div class="md2">
			<div class="container">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=e4f1566d8796c977f2fc9827ce1eb9ce&sql=select+%2A+from+hl_category+where+catid%3D%2760%27&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from hl_category where catid='60' LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
				<div class="imgBox"><img src="<?php echo $data['0']['image'];?>" alt=""></div>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</div>
		</div>
		<div class="md3">
			<div class="container">

				<div class="row">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2705f72f13418da56e3358cf27427719&action=category&catid=60&num=4&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'60','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'4',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>

                    <div class="col-md-3 col-xs-6 md3-item">
                        <img src="<?php echo $r['image'];?>" alt="">
                        <p><?php echo $r['catname'];?></p>
                        <h3 class='hidden-xs'><?php echo $r['description_index'];?></h3>
                    </div>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>


				</div>
			</div>
		</div>
		<div class="md4">
			<div class="container-fluid text-center">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=e6ebcb5dd3b13f45b22bcebdd8e1f532&sql=select+%2A+from+hl_category+where+catid%3D%2761%27&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from hl_category where catid='61' LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
				<div class="imgBox"><img src="<?php echo $data['0']['image'];?>" alt=""></div>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</div>
		</div>
    <div class="md4_ hidden-xs">
      <div class="container-fluid">
      </div>
    </div>
		<div class="md5">
			<div class="container-fluid">
				<div class="md5List">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=14d57e01db34b3a375b3b19368f80a54&action=category&catid=61&num=4&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'61','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'4',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <div class="md5-item">
                        <img src="<?php echo $r['image'];?>" alt="" style="width:100%">
                        <div class='md5-bg-text text-center'>
                            <h3><?php echo $r['catname'];?></h3>
                            <h4><?php echo $r['description_index'];?></h4>
                        </div>
                        <div class='pro-box'>
                            <img class='pro-img' src="<?php echo $r['big_image'];?>" alt="">
                        </div>
                    </div>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>


				</div>
			</div>
		</div>
  </div>
<?php include template("","footer"); ?>
