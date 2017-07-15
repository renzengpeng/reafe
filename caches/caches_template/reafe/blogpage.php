<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("","header"); ?>
  <link rel="stylesheet" href="<?php echo CSS_PATH;?>reafe/blogpage.css">
</head>

<body>
  <!-- top -->
  <?php include template("","nav"); ?>
  <!-- top-end -->
  <?php include template("","banner"); ?>
  <!-- banner-end -->
  <!-- content -->
  <div class="content">
    <div class="container">
      <h3><?php echo $title;?></h3>
      <p><small>转载</small><small><?php echo $inputtime;?></small></p>
      <div class="text-box">
          <?php echo $content;?>

      </div>
      <nav aria-label="">
        <ul class="pager">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=a178c547114912afe8b1ab52fe6965bd&sql=select+%2A+from+hl_news++where+id%3E%27%24id%27+and+catid%3D%27%24catid%27+order+by+listorder%2Cid+asc+&return=data&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from hl_news  where id>'$id' and catid='$catid' order by listorder,id asc  LIMIT 1");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>

            <li class="previous"><a href="<?php echo $data['0']['url'];?>"><span aria-hidden="true">&larr;</span>上一篇</a></li>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=174ed194a6727b68fb620af87c218db0&sql=select+%2A+from+hl_news++where+id%3C%27%24id%27+and+catid%3D%27%24catid%27+order+by+listorder%2Cid+desc+&return=data1&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from hl_news  where id<'$id' and catid='$catid' order by listorder,id desc  LIMIT 1");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data1 = $a;unset($a);?>

            <li class="next"><a href="<?php echo $data1['0']['url'];?>">下一篇<span aria-hidden="true">&rarr;</span></a></li>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
      </nav>
    </div>
    <!-- .content .container end -->
  </div>
  <!-- content-end -->
  <!-- footer -->
  <?php include template("","footer"); ?>
