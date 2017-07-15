<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("","header"); ?>
  <link rel="stylesheet" href="<?php echo CSS_PATH;?>reafe/blog.css">
</head>

<body>
<?php include template("","nav"); ?>
<?php include template("","banner"); ?>
  <!-- banner-end -->
  <!-- content -->
  <div class="content">
    <div class="container">
      <h3>文章列表</h3>
      <ul class="nav nav-tabs">
        <li class="active"><a  data-toggle="tab" data-target="#tabOne" aria-expanded="true">所有文章</a></li>
        <!--<li><a  data-toggle="tab" data-target="#tabTwo">分类列表</a></li>-->
    　</ul>
      <div class="tab-content">
           <div class="tab-pane  fade in active" id="tabOne">
               <div class="articleBox row">
                   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6d217e546bb07acaad50cecd69e9ef33&action=lists&catid=59&order=listorder+DESC&moreinfo=1&num=6&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 6;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'59','order'=>'listorder DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$pages_new = pages_new($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'59','order'=>'listorder DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                   <?php $n=1; if(is_array($data)) foreach($data AS $k => $r) { ?>
                   <a href="<?php echo $r['url'];?>">
                   <div class="col-md-6 articleItem"><img src="<?php echo $r['thumb'];?>" alt="">
                       <h4><?php echo $r['title'];?></h4>
                       <p class='text-gray'><?php echo $r['description'];?></p>
                   </div>
                   </a>
                   <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
               </div>
               <nav aria-label="Page navigation" class='text-center'>
                <ul class="pagination">
                    <?php echo $pages_new;?>
                </ul>
              </nav>
           </div>

       </div>
    </div>
    <!-- .content .container end -->
  </div>
  <!-- content-end -->
  <!-- footer -->
<?php include template("","footer"); ?>
