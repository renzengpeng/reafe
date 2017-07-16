<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("","header"); ?>
  <link rel="stylesheet" href="<?php echo CSS_PATH;?>reafe/productdetail.css">
</head>

<body>
<?php include template("","nav"); ?>
<?php include template("","banner"); ?>
  <div class="jumbotron hidden-xs md1">
    <div class="container">
      <h1><?php echo $this_catname;?></h1>
      <p><?php echo $this_description;?>
      </p>
    </div>
  </div>


  <div class="content">
  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=59d748c10d9c7c244ed1ef5e54fea26a&action=lists&catid=%24catid&order=id+asc&moreinfo=1&num=7\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id asc','moreinfo'=>'1','limit'=>'7',));}?>
  <?php $n=1; if(is_array($data)) foreach($data AS $k => $r) { ?>
    <?php if($n==1) { ?>
        <?php $first_data=$r?>
    <?php } ?>
    <?php if($n>1&&$n<6) { ?>
        <?php $second_data[]=$r?>
    <?php } ?>
    <?php if($n==7) { ?>
      <?php $third_data=$r?>
    <?php } ?>
    <?php if($n==6) { ?>
     <?php $fouth_data=$r?>
    <?php } ?>


  <?php $n++;}unset($n); ?>
  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    <div class="md1">
      <div class="container visible-xs text-center">
        <h1>__</h1>
        <h1>奶瓶清洗剂</h1>
        <p>100%食品级配方，所有原料均为食品辅料</br>符合FDA美国食品药品安全标准，可放心使用。</br> 爸爸说：“可以吃进肚子的，才是真正安全的！”
        </p>
      </div>
    </div>
    <div class="md2">
      <div class="container">
        <?php echo $first_data['content'];?>
      </div>
    </div>
    <div class="md3">
      <div class='container'>

        <img src="<?php $muti_image=$first_data['muti_image'];$muti_image_arr=json_decode($muti_image,true);echo $muti_image_arr[0]['url']?>" alt="">
      </div>
    </div>
    <div class='md4'>
      <div class="container">
        <div class="row">
          <div class="col-md-6 m4-item">
            <span class='bg-logo'></span>
            <h2><?php echo $first_data['title'];?></h2>
            <p class='text-gray'><?php echo $first_data['description'];?>
              </p>
          </div>
          <div class="col-md-6 m4-item">
            <img src="<?php echo $first_data['thumb'];?>" class="img-thumbnail  Responsive image" alt="">
          </div>
            <?php $n=1;if(is_array($second_data)) foreach($second_data AS $r) { ?>
            <?php if($n%2==1) { ?>
          <div class="col-md-6 m4-item">
            <img src="<?php echo $r['thumb'];?>" class="img-thumbnail  Responsive image" alt="">
          </div>
          <div class="col-md-6 m4-item">
            <span class='gb-logo'></span>
            <h3><span>0<?php echo $n;?>&nbsp;&nbsp;&nbsp;</span><?php echo $r['title'];?></h3>
            <small><?php echo $r['description'];?></small>
            <p class='text-gray'><?php echo $r['content'];?>
              </p>
          </div>
            <?php } else { ?>
            <div class="col-md-6 m4-item">
                <span class='gb-logo'></span>
                <h3><span>0<?php echo $n;?>&nbsp;&nbsp;&nbsp;</span><?php echo $r['title'];?></h3>
                <small><?php echo $r['description'];?></small>
                <p class='text-gray'><?php echo $r['content'];?>
                </p>
            </div>
            <div class="col-md-6 m4-item">
                <img src="<?php echo $r['thumb'];?>" class="img-thumbnail  Responsive image" alt="">
            </div>
            <?php } ?>
            <?php $n++;}unset($n); ?>
        </div>
      </div>
    </div>
      <?php if($third_data!=null) { ?>
    <div class="md5">
      <div class="container">
        <h2><?php echo $third_data['title'];?></h2>
        <h2>————</h2>
        <div class="row text-center">
          <div class="col-md-6">
              <?php $kword= explode('-',$third_data['keywords']);?>
              <h3><?php echo $kword['0'];?></h3>
              <h4><?php echo $kword['1'];?></h4>
          </div>
          <div class="col-md-6">
              <?php $descp= explode('-',$third_data['keywords']);?>
              <h3><?php echo $descp['0'];?></h3>
              <h4><?php echo $descp['1'];?></h4>
          </div>
        </div>
          <?php echo $third_data['content'];?>
      </div>
    </div>
      <?php } ?>
    <div class="md6">
      <div class="container">
        <h2><?php echo $fouth_data['title'];?></h2>
        <h2>————</h2>
          <?php echo $fouth_data['content'];?>
      </div>
    </div>
    <div class="md7">
      <div class="container">
          <?php $images_url=json_decode($fouth_data['muti_image'],true)?>
          <?php $n=1;if(is_array($images_url)) foreach($images_url AS $r) { ?>
        <img src="<?php echo $r['url'];?>" alt="">
          <?php $n++;}unset($n); ?>

      </div>
    </div>
  </div>

<?php include template("","footer"); ?>
