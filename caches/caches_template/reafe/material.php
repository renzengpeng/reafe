<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("","header"); ?>
  <link rel="stylesheet" href="<?php echo CSS_PATH;?>reafe/material.css">

</head>

<body>
<?php include template("","nav"); ?>
<?php include template("","banner"); ?>
  <div class="content">
    <div class="container">
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <?php $arr=['headingOne','headingTwo','headingThr','headingFour','headingFive','headingSix']?>
          <?php $arr1=['collapseOne','collapseTwo','collapseThr','collapseFour','collapseFive','collapseSix']?>
          <?php $i=0;?>
      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b936b4aa9481d91a450d679cc18b7f8b&action=category&catid=58&num=6&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'58','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'6',));}?>
      <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>

      <!-- 组1 -->
      <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="<?php echo $arr[$i];?>">
              <div class="row">
                  <div class="col-md-3 hidden-xs">
                      <img class='img-rounded material-icon center-block' src="<?php echo $r['image'];?>" alt="">
                  </div>
                  <div class="col-md-6 mat-text">
                      <h3><?php echo $r['catname'];?></h3>
                      <p><?php echo $r['description'];?></p>
                  </div>
                  <div class="col-md-3 hidden-xs">
                      <a class="collapsed mat-button add<?php echo $i?>" role="button" data-toggle="collapse" data-parent="#accordion"
                         href="#<?php echo $arr1[$i];?>" aria-expanded="false"
                         aria-controls="<?php echo $arr1[$i];?>">
                      </a>
                  </div>
              </div>
          </div>
          <div id="<?php echo $arr1[$i];?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="<?php echo $arr[$i];?>">
              <div class="panel-body">
                  <?php if($i==0||$i==2) { ?>

                  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=60fd488aaea6a1c85a7c2ce61ba20911&action=lists&catid=76&order=listorder+DESC&moreinfo=1&num=1&return=datatable\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$datatable = $content_tag->lists(array('catid'=>'76','order'=>'listorder DESC','moreinfo'=>'1','limit'=>'1',));}?>
                  <?php $n=1;if(is_array($datatable)) foreach($datatable AS $rable) { ?>
                    <?php echo $rable['content'];?>
                  <?php $n++;}unset($n); ?>
                  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                  <?php } else { ?>
                  <div class="row">
                      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=43068c2d3edf406e3557b5e183c53b40&action=category&catid=%24r%5B%27catid%27%5D&num=6&siteid=%24siteid&order=listorder+ASC&return=data1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data1 = $content_tag->category(array('catid'=>$r['catid'],'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'6',));}?>
                      <?php $n=1;if(is_array($data1)) foreach($data1 AS $r1) { ?>
                      <div class="col-md-4 item-box text-center">
                          <img src="<?php echo $r1['image'];?>">
                          <h4><?php echo $r1['catname'];?></h4>
                          <p class='text-left'><?php echo $r['description'];?>
                          </p>
                      </div>
                      <?php $n++;}unset($n); ?>
                      <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                  </div>
                  <?php } ?>
              </div>
          </div>
      </div>
        <?php $i++?>
       <?php $n++;}unset($n); ?>
      <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>




      </div>
      <!-- accordion -->
    </div>
    <!-- container -->
  </div>

<?php include template("","footer"); ?>
<script>
    $(function(){
        $('.content .panel-group .mat-button').each(function(){
            $(this).addClass('add'+$(this).index('.content .panel-group .mat-button'))
        })
        $('.content .panel-group .mat-button').click(function(){

            $(this).toggleClass('red'+$(this).index('.content .panel-group .mat-button'));
        })
    })
</script>
