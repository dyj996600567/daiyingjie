<?php

/**
 * 相册
 * 
 * @package custom 
 * 
 **/

?>
<?php
error_reporting(0);
$jsonFile = 'data.json';
$jsonData = file_get_contents($jsonFile);
$data = json_decode($jsonData, true);
$p = isset($_GET['p']) ? intval($_GET['p']) : 1;
$perPage = isset($_GET['pp']) ? intval($_GET['pp']) : 20;
$start = ($p - 1) * $perPage;
$end = $start + $perPage;
$type = isset($_GET['type']) ? $_GET['type'] : 'fx1';
$totalLinks = 0;
foreach ($data as $category) {
    if ($category['type'] === $type) {
        $totalLinks = count($category['links']);
    }
}
$totalPages = ceil($totalLinks / $perPage);
?>


<!DOCTYPE html>
<html lang="zh-CN">

<head>
  <?php $this->need('public/include.php'); ?>
  <link href="<?php _getAssets('assets/css/joe.wallpaper.min.css'); ?>" rel="stylesheet">
</head>

<body>
  <div id="Joe">
    <?php $this->need('public/header.php'); ?>
    <div class="joe_container">
      <div class="joe_main">
        <div class="joe_wallpaper__type">
          <div class="joe_wallpaper__type-title">相片分类</div>
          <ul class="joe_wallpaper__type-list">
            <?php foreach ($data as $category) {?>
            <li class="item animated swing <?php if ($category['type'] === $type) { echo "active";} else {}?>" onclick="window.location.href='?type=<?php echo $category['type'];?>'"><a  href="?type=<?php echo $category['type'];?>" style="color: <?php if ($category['type'] === $type) { echo "#fff";} else {echo "#606266";}?>;"><?php echo $category['name'] ?></a></li>
            <?}?>
          </ul>
        </div>
        <div class="joe_wallpaper__list">
            <?php foreach ($data as $category) {
    if ($category['type'] === $type) {
        $linksToDisplay = array_slice($category['links'], $start, $perPage);
        foreach ($linksToDisplay as $link) {?>
                        <a class="item animated bounceIn" data-fancybox="gallery" href="<?php echo $link ?>">
                            <img width="100%" height="100%" class=" lazyloaded" src="<?php echo $link ?>" data-src="<?php echo $link ?>" alt="壁纸">
                        </a>
                        <?}}}?>
      </div>
<ul class="joe_wallpaper__pagination">
                <li class="joe_wallpaper__pagination-item" onclick="window.location.href='?type=<?php echo $type;?>&p=1'"  ><a href="?type=<?php echo $type;?>&p=1" style="color: black;">首页</a></li>
                 <?php if ($p==1) { } else {?>
                  <li class="joe_wallpaper__pagination-item" onclick="window.location.href='?type=<?php echo $type;?>&p=<?php echo $p-1;?>'" ><a href="?type=<?php echo $type;?>&p=<?php echo $p-1;?>" style="color: black;">上一页</a></li>
                <?}?>
                <li class="joe_wallpaper__pagination-item" ><?php echo $p ?>/<?php echo $totalPages; ?></li>
                <?php if ($p < $totalPages) { ?>
                <li class="joe_wallpaper__pagination-item" onclick="window.location.href='?type=<?php echo $type;?>&p=<?php echo $p+1;?>'"><a href="?type=<?php echo $type;?>&p=<?php echo $p+1;?>" style="color: black;">下一页</a></li>
                <?}?>
                <li class="joe_wallpaper__pagination-item" onclick="window.location.href='?type=<?php echo $type;?>&p=1'"  ><a href="?type=<?php echo $type;?>&p=<?php echo $totalPages; ?>" style="color: black;">尾页</a></li>
                  </div>
      <?php $this->need('public/aside.php'); ?>
    </div>
    <?php $this->need('public/footer.php'); ?>
  </div>
</body>

</html>