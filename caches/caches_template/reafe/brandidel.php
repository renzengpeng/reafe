<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("","header"); ?>
  <link rel="stylesheet" href="<?php echo CSS_PATH;?>reafe/brandidel.css">
</head>

<body>
<?php include template("","nav"); ?>
<?php include template("","banner"); ?>
  <div class="jumbotron hidden-xs md1">
    <div class="container">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=4499109b52646e4879e1041ea207e3df&sql=select+%2A+from+hl_page+where+catid%3D%2770%27&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from hl_page where catid='70' LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
        <h1><?php echo $data['0']['title'];?></h1>
        <p><?php echo $data['0']['content'];?>
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
      <div class="md2-list">
        <div class="container">
          <div class="row">
              <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8e36db2bee1d169edf15ec98fbb28790&action=category&catid=57&num=4&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'57','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'4',));}?>
              <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
              <div class="md2-item col-xs-12 col-lg-6">
                  <div class="img-box">
                      <img src="<?php echo $r['image'];?>" alt="">
                      <div class="mask"><?php echo $r['catname'];?></div>
                  </div>

                  <h3><?php echo $r['catname'];?></h3>
                  <p>
                      <?php echo $r['description'];?>
                  </p>
              </div>
              <?php $n++;}unset($n); ?>
              <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
          </div>
        </div>

      </div>
    </div>
    <div class="md3">
      <div class="container">
          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=dda9eb27ef92085e27833a09158aa3ee&sql=select+%2A+from+hl_page+where+catid%3D%2775%27&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from hl_page where catid='75' LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
          <div class="md3-title">
              <h3><?php echo $data['0']['title'];?></h3>
          </div>
          <div class="md3-article">
              <?php echo $data['0']['content'];?>
          </div>
          <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

      </div>
    </div>
  </div>
<?php include template("","footer"); ?>
