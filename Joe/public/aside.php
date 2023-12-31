<aside class="joe_aside">
  <section class="joe_aside__item author">
    <img width="100%" height="120" class="image lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php $this->options->JAside_Author_Image() ?>" alt="博主栏壁纸" />
    <div class="user">
      <img width="75" height="75" class="avatar lazyload" src="<?php _getAvatarLazyload(); ?>" data-src="<?php $this->options->JAside_Author_Avatar ? $this->options->JAside_Author_Avatar() : _getAvatarByMail($this->authorId ? $this->author->mail : $this->user->mail) ?>" alt="博主头像" />
      <a class="link" href="<?php $this->options->JAside_Author_Link() ?>" target="_blank" rel="noopener noreferrer nofollow"><?php $this->options->JAside_Author_Nick ? $this->options->JAside_Author_Nick() : ($this->authorId ? $this->author->screenName() : $this->user->screenName()); ?></a>
      <p class="motto joe_motto"></p>
    </div>
    <?php Typecho_Widget::widget('Widget_Stat')->to($item); ?>
    <div class="count">
      <div class="item" title="累计文章数">
        <span class="num"><?php echo number_format($item->publishedPostsNum); ?></span>
        <span>文章数</span>
      </div>
      <div class="item" title="累计评论数">
        <span class="num"><?php echo number_format($item->publishedCommentsNum); ?></span>
        <span>评论量</span>
      </div>
    </div>
    <?php if ($this->options->JAside_Author_Nav !== "off") : ?>
      <ul class="list"><?php _getAsideAuthorNav() ?></ul>
    <?php endif; ?>
  </section>
<!-- 博主状态 -->
  <section class="joe_aside__item today">
      <div class="joe_aside__item-title">
      <svg t="1703849537503" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="2177" width="48" height="48"><path d="M913.0496 922.5728H121.4976c-11.3152 0-20.48-9.1648-20.48-20.48s9.1648-20.48 20.48-20.48h791.552c11.3152 0 20.48 9.1648 20.48 20.48s-9.1648 20.48-20.48 20.48z" fill="#E2E5F1" p-id="2178"></path><path d="M510.8736 479.1296m-346.112 0a346.112 346.112 0 1 0 692.224 0 346.112 346.112 0 1 0-692.224 0Z" fill="#FFC5E7" p-id="2179"></path><path d="M649.216 161.8432c81.408 74.8544 132.4544 182.1696 132.4544 301.4656 0 152.5248-83.456 285.4912-207.1552 355.9424 160.7168-29.9008 282.4704-170.752 282.4704-340.1728 0-141.8752-85.504-263.8336-207.7696-317.2352z" fill="#FF99DD" p-id="2180"></path><path d="M239.2064 644.9664c-4.4544 0-8.7552-2.304-11.1104-6.4512-27.5968-48.4352-42.1888-103.68-42.1888-159.7952 0-123.8016 68.9664-234.8544 179.968-289.792 6.3488-3.1232 14.0288-0.5632 17.152 5.7856 3.1232 6.3488 0.5632 14.0288-5.7856 17.152C274.9952 262.4512 211.456 364.6976 211.456 478.72c0 51.6608 13.4144 102.5024 38.8608 147.0976a12.8 12.8 0 0 1-11.1104 19.1488zM453.376 186.112a12.83072 12.83072 0 0 1-2.304-25.4464 326.912 326.912 0 0 1 57.9072-5.1712 12.8 12.8 0 0 1 0 25.6c-17.92 0-35.8912 1.5872-53.3504 4.7616-0.7168 0.2048-1.4848 0.256-2.2528 0.256z" fill="#FFFFFF" p-id="2181"></path><path d="M314.624 194.0992C295.2704 162.7648 260.6592 141.824 221.1328 141.824c-60.7744 0-110.0288 49.2544-110.0288 110.0288 0 48.9472 31.9488 90.3168 76.1344 104.6528 25.088-66.2528 69.9392-122.7776 127.3856-162.4064zM802.0992 141.824c-39.8336 0-74.6496 21.248-93.952 52.992 57.088 39.68 101.632 96.0512 126.5664 162.1504 44.8512-13.8752 77.4144-55.7056 77.4144-105.1136 0-60.7744-49.2544-110.0288-110.0288-110.0288z" fill="#FAC573" p-id="2182"></path><path d="M781.0048 152.3712s129.4848 42.3936 54.016 178.944c6.5024 10.752 8.4992 18.6368 8.4992 18.6368s70.4-33.3824 68.1472-89.9072c-2.304-56.5248-42.1888-127.744-130.6624-107.6736zM179.1488 152.6784s56.2688 13.0048 67.0208 42.1376c-25.6 22.6304-70.656 93.2864-67.84 155.7504 26.5728-42.3936 149.5552-162.56 149.5552-162.56s-93.5936-46.3872-148.736-35.328z" fill="#EF981A" p-id="2183"></path><path d="M533.1968 467.6608V299.776c0-11.3152-9.1648-20.48-20.48-20.48s-20.48 9.1648-20.48 20.48v174.9504c0 4.5568 1.536 9.0112 4.3008 12.5952l84.3264 108.2368a20.5056 20.5056 0 0 0 16.1792 7.8848c4.4032 0 8.8064-1.4336 12.5952-4.3008a20.51072 20.51072 0 0 0 3.584-28.7232l-80.0256-102.7584z" fill="#211D38" p-id="2184"></path><path d="M932.608 251.8528c0-71.936-58.5216-130.5088-130.5088-130.5088-38.7584 0-74.496 16.8448-99.072 45.7728a364.38528 364.38528 0 0 0-192.1536-54.5792 364.3392 364.3392 0 0 0-191.232 53.9648c-24.576-28.5696-60.1088-45.1584-98.56-45.1584-71.936 0-130.5088 58.5216-130.5088 130.5088 0 49.664 27.8016 94.1056 70.9632 116.1216a364.32384 364.32384 0 0 0-17.3056 111.1552c0 122.8288 60.7744 231.68 153.8048 298.24l-68.352 92.2112c-6.7584 9.0624-4.8128 21.9136 4.2496 28.672a20.46976 20.46976 0 0 0 28.672-4.2496l70.0928-94.5664a364.07296 364.07296 0 0 0 178.1248 46.336c69.2736 0 134.0928-19.3024 189.44-52.8384 0.2048 0.3072 0.3072 0.6144 0.512 0.9216l74.24 100.1472a20.46464 20.46464 0 0 0 28.672 4.2496 20.45952 20.45952 0 0 0 4.2496-28.672l-74.0352-99.84c87.1424-67.072 143.4624-172.3392 143.4624-290.56 0-38.5024-5.9904-75.5712-17.0496-110.4896 43.9808-21.8112 72.2944-66.4576 72.2944-116.8384z m-801.024 0c0-49.3568 40.1408-89.5488 89.5488-89.5488 24.7808 0 47.872 10.0864 64.5632 27.5968-47.5648 37.0176-84.8896 84.5824-109.4144 139.4176a89.1392 89.1392 0 0 1-44.6976-77.4656z m379.2896 552.9088c-179.5584 0-325.632-146.0736-325.632-325.632s146.0736-325.632 325.632-325.632 325.632 146.0736 325.632 325.632-146.0736 325.632-325.632 325.632z m334.9504-474.6752c-24.3712-54.784-61.5424-102.4-108.9024-139.4688 16.7424-17.9712 40.0896-28.2624 65.2288-28.2624 49.3568 0 89.5488 40.192 89.5488 89.5488-0.0512 33.0752-17.8688 62.6176-45.8752 78.1824z" fill="#211D38" p-id="2185"></path><path d="M145.8176 256.3584a12.79488 12.79488 0 0 1-12.6464-14.7456c7.936-51.8656 46.08-66.816 47.7184-67.4304 6.5536-2.5088 13.9776 0.8192 16.4864 7.4752 2.5088 6.5536-0.8192 13.9264-7.3216 16.4352-1.28 0.512-26.0096 11.008-31.5392 47.4112a12.94336 12.94336 0 0 1-12.6976 10.8544zM764.3648 201.4208c-4.1472 0-8.2432-1.9968-10.7008-5.7344a12.7488 12.7488 0 0 1 3.6352-17.7152c19.8144-13.1072 37.9392-12.2368 39.936-12.0832 7.0656 0.512 12.3904 6.6048 11.8784 13.6704-0.512 7.0144-6.6048 12.288-13.568 11.8784-0.7168 0-11.7248-0.3072-24.1664 7.8848-2.1504 1.3824-4.608 2.0992-7.0144 2.0992z" fill="#FFFFFF" p-id="2186"></path><path d="M882.9952 828.2112c-28.416 0-51.5584-23.1424-51.5584-51.5584s23.1424-51.5584 51.5584-51.5584 51.5584 23.1424 51.5584 51.5584-23.1424 51.5584-51.5584 51.5584z m0-72.3456c-11.4688 0-20.8384 9.3184-20.8384 20.8384s9.3184 20.8384 20.8384 20.8384 20.8384-9.3184 20.8384-20.8384-9.3184-20.8384-20.8384-20.8384z" fill="#CBDCFF" p-id="2187"></path><path d="M392.2944 644.2496m-27.136 0a27.136 27.136 0 1 0 54.272 0 27.136 27.136 0 1 0-54.272 0Z" fill="#FFD9F1" p-id="2188"></path><path d="M710.0416 521.0112m-27.136 0a27.136 27.136 0 1 0 54.272 0 27.136 27.136 0 1 0-54.272 0Z" fill="#FFD9F1" p-id="2189"></path><path d="M281.4464 484.8128m-27.136 0a27.136 27.136 0 1 0 54.272 0 27.136 27.136 0 1 0-54.272 0Z" fill="#FFD9F1" p-id="2190"></path><path d="M416 348.0064m-27.136 0a27.136 27.136 0 1 0 54.272 0 27.136 27.136 0 1 0-54.272 0Z" fill="#FFD9F1" p-id="2191"></path><path d="M164.9664 753.9712m-27.136 0a27.136 27.136 0 1 0 54.272 0 27.136 27.136 0 1 0-54.272 0Z" fill="#F55369" p-id="2192"></path></svg>
      <span class="text">博主状态</span>
      <span class="line"></span>
</div>
<div class="card-widget card-announcement" style="padding: 20px 15px;color: var(--routine);">
        博主：<?php get_last_login(1); ?> 在线 ...
</section>
<!-- 博主状态结束 -->
  <!-- 网站公告 -->
  <section class="joe_aside__item today">
      <div class="joe_aside__item-title">
      <svg t="1703482904476" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="5015" width="32" height="32"><path d="M512 832m-112 0a112 112 0 1 0 224 0 112 112 0 1 0-224 0Z" fill="#FFFFFF" p-id="5016"></path><path d="M528 848m-80 0a80 80 0 1 0 160 0 80 80 0 1 0-160 0Z" fill="#82DAFA" p-id="5017"></path><path d="M512 960a128 128 0 1 1 128-128 128.14 128.14 0 0 1-128 128z m0-224a96 96 0 1 0 96 96 96.11 96.11 0 0 0-96-96z" fill="#333333" p-id="5018"></path><path d="M512 80a304 304 0 0 1 304 304v272H208V384A304 304 0 0 1 512 80z" fill="#FFFFFF" p-id="5019"></path><path d="M528 128a272 272 0 0 1 272 272v240H320a64 64 0 0 1-64-64V400a272 272 0 0 1 272-272z" fill="#FF8591" p-id="5020"></path><path d="M832 672H192V384a320 320 0 0 1 640 0z m-608-32h576V384c0-158.8-129.2-288-288-288S224 225.2 224 384z" fill="#333333" p-id="5021"></path><path d="M80 656m96 0l672 0q96 0 96 96l0 0q0 96-96 96l-672 0q-96 0-96-96l0 0q0-96 96-96Z" fill="#FFFFFF" p-id="5022"></path><path d="M128 704m64 0l672 0q64 0 64 64l0 0q0 64-64 64l-672 0q-64 0-64-64l0 0q0-64 64-64Z" fill="#FFBF80" p-id="5023"></path><path d="M848 864H176a112 112 0 0 1 0-224h672a112 112 0 0 1 0 224zM176 672a80 80 0 0 0 0 160h672a80 80 0 0 0 0-160z" fill="#333333" p-id="5024"></path></svg>
      <span class="text">网站公告</span>
      <span class="line"></span>
</div>
     <?php $this->options->JAside_Author_gonggao() ?>
</section>
<!-- 网站公告结束 -->
  <?php if ($this->options->JAside_Timelife_Status === 'on') : ?>
    <section class="joe_aside__item timelife">
      <div class="joe_aside__item-title">
        <svg class="icon" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" width="18" height="18">
          <path d="M864.801 895.471h-33.56v-96.859c0-126.081-73.017-235.093-179.062-287.102 106.046-52.01 179.062-161.022 179.062-287.102v-96.859h33.56c17.301 0 31.325-14.327 31.325-32 0-17.673-14.024-32-31.325-32H159.018c-17.3 0-31.325 14.327-31.325 32 0 17.673 14.025 32 31.325 32h33.02v96.859c0 126.08 73.016 235.092 179.061 287.102-106.046 52.009-179.062 161.02-179.062 287.101v96.859h-33.02c-17.3 0-31.325 14.326-31.325 32s14.025 32 31.325 32H864.8c17.301 0 31.325-14.326 31.325-32s-14.023-31.999-31.324-31.999zM256.05 222.427v-94.878h513.046v94.878c0 141.674-114.85 256.522-256.523 256.522-141.674 0-256.523-114.848-256.523-256.522zm513.046 673.044H256.05v-94.879c0-141.674 114.849-256.521 256.523-256.521 141.673 0 256.523 114.848 256.523 256.521v94.879z" />
          <path d="M544.141 384c0-17.69-14.341-32.031-32.031-32.031-71.694 0-127.854-56.161-127.854-127.855 0-17.69-14.341-32.032-32.031-32.032s-32.032 14.341-32.032 32.032c0 107.617 84.3 191.918 191.917 191.918 17.69 0 32.031-14.342 32.031-32.032z" />
        </svg>
        <span class="text">人生倒计时</span>
        <span class="line"></span>
      </div>
      <div class="joe_aside__item-contain"></div>
    </section>
  <?php endif; ?>
  <?php if ($this->options->JCustomAside) : ?>
    <section class="joe_aside__item"><?php $this->options->JCustomAside() ?></section>
  <?php endif; ?>

  <?php if ($this->options->JAside_History_Today === 'on') : ?>
    <?php
    $time = time();
    $todayDate = date('m/d', $time);
    $db = Typecho_Db::get();
    $prefix = $db->getPrefix();
    $sql = "SELECT * FROM `{$prefix}contents` WHERE created < {$time} and FROM_UNIXTIME(created, '%m/%d') = '{$todayDate}' and type = 'post' and status = 'publish' and (password is NULL or password = '') LIMIT 10";
    $result = $db->query($sql);
    $historyTodaylist = [];
    if ($result instanceof Traversable) {
      foreach ($result as $item) {
        $item = Typecho_Widget::widget('Widget_Abstract_Contents')->push($item);
        $historyTodaylist[] = array(
          "title" => htmlspecialchars($item['title']),
          "permalink" => $item['permalink'],
          "date" => $item['year'] . ' ' . $item['month'] . '/' . $item['day']
        );
      }
    }
    ?>
    <?php if (count($historyTodaylist) > 0) : ?>
      <section class="joe_aside__item today">
        <div class="joe_aside__item-title">
          <svg class="icon" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" width="18" height="18">
            <path d="M701.217 207.026H304.974v26.713c0 17.809-13.357 33.391-33.391 33.391-17.81 0-33.392-13.356-33.392-33.39v-26.714h-91.27c-33.39 0-60.104 26.713-60.104 60.104v601.044c0 33.391 26.713 60.104 60.105 60.104h739.06a60.817 60.817 0 0 0 60.105-60.104V267.13c0-33.39-26.713-60.104-60.104-60.104h-120.21v26.713c0 17.809-13.356 33.391-33.39 33.391-17.81 0-33.392-13.356-33.392-33.39v-26.714zm64.557-64.556h120.209c69.008 0 124.66 55.652 124.66 124.66v601.044c0 33.391-13.356 64.556-35.617 89.043-22.26 22.261-55.652 35.618-89.043 35.618H146.922c-33.392 0-64.557-13.357-89.044-35.618-22.26-22.26-35.617-55.652-35.617-89.043V267.13c0-69.008 55.652-124.66 124.66-124.66h91.27V53.426c0-17.809 13.357-33.391 33.392-33.391 17.808 0 33.39 13.356 33.39 33.391v89.044h396.244V53.426c0-17.809 15.583-31.165 33.392-31.165S768 35.617 768 55.652v86.818zm0 0" />
            <path d="M471.93 460.8c46.748 20.035 91.27 44.522 129.113 73.46l-26.713 44.523c-42.295-31.166-86.817-57.879-129.113-75.687L471.93 460.8zm-153.6 129.113h396.244v40.07c-33.391 89.043-106.852 155.826-215.93 202.574l-35.618-46.748c91.27-35.618 153.6-84.592 189.217-149.148H318.33v-46.748zm180.313-269.356h37.844c66.783 75.686 149.148 135.79 240.417 180.313l-26.713 48.973c-91.27-46.747-166.956-106.852-231.513-180.313-57.878 69.01-135.791 129.113-231.513 180.313l-26.713-48.973c93.496-46.748 173.635-109.079 238.191-180.313zm0 0" />
          </svg>
          <span class="text">那年今日</span>
          <span class="line"></span>
        </div>
        <ul class="joe_aside__item-contain">
          <?php foreach ($historyTodaylist as $item) : ?>
            <li class="item">
              <div class="tail"></div>
              <div class="head"></div>
              <div class="desc">
                <time datetime="<?php echo $item['date'] ?>"><?php echo $item['date'] ?></time>
                <a href="<?php echo $item['permalink'] ?>" title="<?php echo $item['title'] ?>">
                  <?php echo $item['title'] ?>
                </a>
              </div>
            </li>
          <?php endforeach; ?>
        </ul>
      </section>
    <?php endif; ?>
  <?php endif; ?>

  <?php if ($this->options->JAside_Hot_Num && $this->options->JAside_Hot_Num !== 'off') : ?>
    <section class="joe_aside__item hot">
      <div class="joe_aside__item-title">
        <svg class="icon" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" width="18" height="18">
          <path d="M512 938.667A426.667 426.667 0 0 1 85.333 512a421.12 421.12 0 0 1 131.2-306.133 58.88 58.88 0 0 1 42.667-16.64c33.28 1.066 58.027 28.16 84.267 56.96 7.893 8.533 19.626 21.333 28.373 29.013a542.933 542.933 0 0 0 24.533-61.867c18.134-52.266 35.414-101.76 75.307-121.6 55.04-27.733 111.573 37.974 183.253 121.6 16.214 18.774 38.614 44.8 53.547 59.52 1.707-4.48 3.2-8.96 4.48-12.373 8.533-24.32 18.987-54.613 51.2-61.653a57.813 57.813 0 0 1 55.68 20.053A426.667 426.667 0 0 1 512 938.667zM260.693 282.453A336.64 336.64 0 0 0 170.667 512a341.333 341.333 0 1 0 614.826-203.733 90.24 90.24 0 0 1-42.666 50.56 68.267 68.267 0 0 1-53.547 1.706c-25.6-9.173-51.627-38.4-99.2-93.226a826.667 826.667 0 0 0-87.253-91.734 507.733 507.733 0 0 0-26.24 64c-18.134 52.267-35.414 101.76-75.947 119.254-48.853 21.333-88.32-21.334-120.107-56.96-5.76-4.694-13.226-13.014-19.84-19.414z" />
          <path d="M512 810.667A298.667 298.667 0 0 1 213.333 512a42.667 42.667 0 0 1 85.334 0A213.333 213.333 0 0 0 512 725.333a42.667 42.667 0 0 1 0 85.334z" />
        </svg>
        <span class="text">热门文章</span>
        <span class="line"></span>
      </div>
      <?php $this->widget('Widget_Contents_Hot@Aside', 'pageSize=' . $this->options->JAside_Hot_Num)->to($item); ?>
      <ol class="joe_aside__item-contain">
        <?php if ($item->have()) : ?>
          <?php $index = 1; ?>
          <?php while ($item->next()) : ?>
            <li class="item">
              <a class="link" href="<?php $item->permalink(); ?>" title="<?php $item->title(); ?>">
                <i class="sort"><?php echo $index; ?></i>
                <img width="100%" height="130" class="image lazyload" src="<?php _getLazyload(); ?>" data-src="<?php echo _getThumbnails($item)[0]; ?>" alt="<?php $item->title() ?>" />
                <div class="describe">
                  <h6><?php $item->title(); ?></h6>
                  <span><?php $item->views(); ?> 阅读 - <?php $item->date('m/d'); ?></span>
                </div>
              </a>
            </li>
            <?php $index++; ?>
          <?php endwhile; ?>
        <?php else : ?>
          <li class="empty">这个博主很懒！</li>
        <?php endif; ?>
      </ol>
    </section>
  <?php endif; ?>
  <?php if ($this->options->JAside_Newreply_Status === 'on' && $this->options->JCommentStatus !== 'off') : ?>
    <section class="joe_aside__item newreply">
      <div class="joe_aside__item-title">
        <svg class="icon" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" width="18" height="18">
          <path d="M512 647.239a204.391 204.391 0 0 0 204.391-204.391V204.39a204.391 204.391 0 0 0-408.782 0v238.457A204.391 204.391 0 0 0 512 647.238zM375.74 204.39a136.26 136.26 0 0 1 272.52 0v238.457a136.26 136.26 0 0 1-272.52 0z" />
          <path d="M852.652 476.913a34.065 34.065 0 0 0-68.13 0A257.533 257.533 0 0 1 512 715.369a257.533 257.533 0 0 1-272.522-238.456 34.065 34.065 0 0 0-34.065-34.065 34.065 34.065 0 0 0-34.065 34.065 321.576 321.576 0 0 0 307.268 303.861v173.052H307.61a34.065 34.065 0 0 0-34.065 34.065 34.065 34.065 0 0 0 34.065 34.065H716.39a34.065 34.065 0 0 0 34.065-34.065 34.065 34.065 0 0 0-34.065-34.065H546.065V778.73a321.576 321.576 0 0 0 306.587-301.817z" />
        </svg>
        <span class="text">最新回复</span>
        <span class="line"></span>
      </div>
      <?php $this->widget('Widget_Comments_Recent', 'ignoreAuthor=true&pageSize=5')->to($item); ?>
      <ul class="joe_aside__item-contain">
        <?php if ($item->have()) : ?>
          <?php while ($item->next()) : ?>
            <li class="item">
              <div class="user">
                <img width="40" height="40" class="avatar lazyload" src="<?php _getAvatarLazyload(); ?>" data-src="<?php _getAvatarByMail($item->mail) ?>" alt="<?php $item->author(false) ?>" />
                <div class="info">
                  <div class="author"><?php $item->author(false) ?></div>
                  <span class="date"><?php $item->date('Y-m-d'); ?></span>
                </div>
              </div>
              <div class="reply">
                <a class="link" href="<?php _parseAsideLink($item->permalink); ?>">
                  <?php _parseAsideReply($item->content); ?>
                </a>
              </div>
            </li>
          <?php endwhile; ?>
        <?php else : ?>
          <li class="empty">人气很差！一条回复没有！</li>
        <?php endif; ?>
      </ul>
    </section>
  <?php endif; ?>
  <?php if ($this->options->JAside_Weather_Key) : ?>
    <section class="joe_aside__item weather" data-key="<?php $this->options->JAside_Weather_Key() ?>" data-style="<?php $this->options->JAside_Weather_Style() ?>">
      <div class="joe_aside__item-title">
        <svg class="icon" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" width="18" height="18">
          <path d="M773.12 757.76h-79.872c-15.36 0-29.696-15.36-29.696-29.696s15.36-29.696 29.696-29.696h79.872c100.352 0 180.224-79.872 180.224-180.224S873.472 337.92 773.12 337.92c-25.6 0-50.176 5.12-74.752 15.36-10.24 5.12-20.48 5.12-25.6 0-10.24-5.12-15.36-15.36-15.36-20.48-15.36-100.352-100.352-175.104-200.704-175.104C346.112 155.648 256 245.76 250.88 356.352c0 15.36-10.24 29.696-29.696 29.696-79.872 5.12-145.408 74.752-145.408 160.768 0 90.112 70.656 160.768 160.768 160.768h75.776c15.36 0 29.696 15.36 29.696 29.696S326.656 768 311.296 768h-79.872C110.592 757.76 10.24 662.528 10.24 541.696c0-105.472 75.776-195.584 175.104-216.064 15.36-130.048 130.048-235.52 266.24-235.52 120.832 0 225.28 79.872 256 195.584 20.48-5.12 45.056-10.24 65.536-10.24 135.168 1.024 240.64 111.616 240.64 241.664S903.168 757.76 773.12 757.76z" />
          <path d="M437.248 933.888c-10.24 0-15.36-5.12-20.48-10.24-10.24-10.24-10.24-29.696 0-45.056l79.872-79.872h-60.416c-10.24 0-25.6-5.12-29.696-20.48-5.12-10.24 0-24.576 5.12-34.816l130.048-130.048c10.24-10.24 29.696-10.24 45.056 0 10.24 10.24 10.24 29.696 0 45.056L512 742.4h55.296c10.24 0 24.576 5.12 29.696 20.48 5.12 10.24 0 24.576-5.12 34.816L461.824 928.768c-10.24 5.12-20.48 5.12-24.576 5.12z" />
        </svg>
        <span class="text">今日天气</span>
        <span class="line"></span>
      </div>
      <div class="joe_aside__item-contain">
        <div id="he-plugin-standard"></div>
      </div>
    </section>
  <?php endif; ?>
  <?php if ($this->options->JAside_3DTag === 'on') : ?>
    <section class="joe_aside__item tags">
      <div class="joe_aside__item-title">
          <svg class="icon" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" width="18" height="18">
          <path d="M898.048 556.544L547.84 916.992c-43.008 44.032-112.64 44.032-155.648 0L119.808 636.416c-43.008-44.032-43.008-116.224 0-160.256L470.016 115.2c26.624-28.672 31.744-41.472 59.904-41.472h355.84c28.16 0 50.688 23.552 50.688 52.224v366.592c0 28.672-15.872 40.448-38.4 64zM158.72 596.48l272.384 280.576c21.504 22.016 56.32 22.016 77.824 0l38.4-39.936-349.696-361.472-39.424 40.448c-20.992 22.528-20.992 58.368.512 80.384zm727.04-444.416c0-14.336-11.264-26.112-25.6-26.112H555.008c-13.824 0-33.792 16.384-46.592 29.184l-271.36 280.576 349.696 360.96 272.384-280.576c13.824-14.336 26.624-35.328 26.624-49.664V152.064zM610.304 422.4c-42.496-43.52-42.496-114.688 0-158.208 42.496-44.032 111.104-44.032 153.6 0 42.496 43.52 42.496 114.688 0 158.208s-111.616 43.52-153.6 0zm115.2-118.784c-20.992-22.016-55.808-22.016-76.8 0s-20.992 57.344 0 79.36 55.808 22.016 76.8 0 20.992-57.344 0-79.36z" />
        </svg>
        <span class="text">标签云</span>
        <span class="line"></span>
      </div>
      <?php $this->widget('Widget_Metas_Tag_Cloud', array('sort' => 'count', 'ignoreZeroCount' => true, 'desc' => true, 'limit' => 50))->to($tags); ?>
      <div class="joe_aside__item-contain">
        <?php if ($tags->have()) : ?>
          <div class="tag"></div>
          <ul class="list" style="display: none;">
            <?php while ($tags->next()) : ?>
              <li data-url="<?php $tags->permalink(); ?>" data-label="<?php $tags->name(); ?>"></li>
            <?php endwhile; ?>
          </ul>
        <?php else : ?>
          <div class="empty">暂无标签</div>
        <?php endif; ?>
      </div>
    </section>
  <?php endif; ?>
  <?php if ($this->options->JADContent) : ?>
    <a class="joe_aside__item advert" target="_blank" rel="noopener noreferrer nofollow" href="<?php echo explode("||", $this->options->JADContent)[1]; ?>" title="广告">
      <img class="lazyload" width="100%" src="<?php _getLazyload() ?>" data-src="<?php echo explode("||", $this->options->JADContent)[0]; ?>" alt="广告" />
      <span class="icon">广告</span>
    </a>
  <?php endif; ?>
  <?php if ($this->options->JAside_Flatterer === 'on') : ?>
    <section class="joe_aside__item flatterer">
      <div class="joe_aside__item-title">
        <svg class="icon" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" width="18" height="18">
          <path d="M774.144 734.72c-35.328 60.416-99.84 93.696-176.64 74.752-1.024 29.696-12.288 54.784-36.352 72.704-15.36 11.264-33.28 16.896-51.712 15.872-47.616-1.536-75.264-30.72-85.504-88.064-74.752 15.36-132.608-8.704-173.056-72.192-17.92 3.584-35.84 9.216-53.76 10.752-63.488 5.12-107.52-28.16-122.88-90.112-12.288-49.152-7.68-98.816 5.12-146.944 34.304-130.048 102.4-238.08 213.504-315.392 146.944-102.912 333.312-93.184 471.552 24.576C865.792 307.2 928.768 416.768 952.832 547.84c6.144 34.816 6.656 70.144-1.024 104.96-20.48 94.72-100.864 110.592-166.4 86.016-3.584-.512-7.168-2.048-11.264-4.096zm-235.008-46.592c11.776 41.984 46.592 71.68 90.112 76.288 42.496 4.096 82.432-17.92 102.912-55.296 3.072-6.144 3.072-10.752.512-17.92-6.144-16.384-14.336-33.792-14.848-51.2-2.048-86.016-2.048-172.032-2.56-258.048 0-15.872 8.704-24.576 23.04-24.064 13.824.512 20.992 8.704 20.992 24.576l1.536 240.64c0 6.144 0 12.288.512 18.432 1.536 15.872 7.168 30.208 19.456 40.96 40.448 36.864 104.96 19.456 120.32-32.768 8.704-30.208 8.704-60.928 3.584-91.136-20.48-117.248-75.776-216.064-164.352-295.424-119.296-106.496-277.504-121.344-408.064-36.352-117.76 76.8-184.832 188.416-211.968 324.608-6.656 33.792-7.168 68.608 4.096 101.888 8.192 23.552 22.528 40.96 48.128 46.08 54.784 10.752 92.16-19.456 92.16-75.264V614.4c0-76.8 0-153.088.512-229.888 0-17.92 8.192-27.136 23.04-26.624 14.336 0 21.504 9.216 22.016 26.624 0 12.8-.512 25.6-.512 37.888 0 69.12-.512 138.24-.512 207.36 0 22.528-5.12 43.52-16.384 63.488-2.048 4.096-2.56 11.264-.512 15.36 29.696 59.904 111.104 75.264 160.768 30.72 16.384-14.848 28.16-32.256 32.256-50.688-14.336-13.312-26.624-25.088-39.424-36.864-15.36-14.336-17.92-31.744-12.288-50.688 5.632-19.968 19.456-33.792 39.424-35.84 25.6-2.56 51.712-2.048 77.312 0 19.456 1.536 32.256 15.36 38.4 33.792 5.632 16.896 5.632 33.792-7.168 47.616-11.776 14.336-26.624 26.624-42.496 41.472zm-50.176 85.504c-18.944 13.312-24.064 30.208-16.384 51.712 6.144 17.92 23.552 29.184 41.472 27.648 18.944-1.536 33.28-14.336 37.376-33.28 5.632-26.112 2.56-35.328-15.872-45.056-1.024 9.216-.512 18.944-2.56 27.648-2.56 10.24-11.264 14.848-21.504 14.848-15.36.512-19.968-8.192-22.528-43.52z" />
          <path d="M391.168 496.64c-20.992 0-37.376-16.896-36.864-37.376.512-20.48 17.92-36.864 38.4-36.352 19.968.512 35.84 16.896 35.84 37.376.512 20.48-15.872 36.352-37.376 36.352zm282.624-31.744c0 20.48-15.872 36.864-36.352 36.864-20.992 0-37.888-16.384-37.376-37.376.512-20.48 16.384-36.864 36.864-36.864 20.992-.512 36.864 15.872 36.864 37.376z" />
        </svg>
        <span class="text">舔狗日记</span>
        <span class="line"></span>
      </div>
      <div class="joe_aside__item-contain">
        <div class="content"></div>
        <div class="change">
          <svg class="icon" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" width="20" height="20">
            <path d="M1000.61 625.5c-24.6-33.4-55.3-155.5-69.3-231.5-3.8-20.6-18.7-36.9-38.8-42.6-4-1.1-8.1-1.8-12.2-1.9-35.3-59-74.5-66.7-100.5-71.8-18.5-3.6-18.8-4.5-21.5-11.1-13.1-32.1-32.3-54-57.1-65.1-20.8-9.4-41.4-9.2-53.7-9.2-.9 0-2-.2-3.2-.5-.8-.2-1.6-.3-2.4-.4-39.3-56.7-70.7-68.1-108.5-68.1h-.2c-38.1 0-63 21-81.2 36.4l-1.6 1.4c-21.3 18-24.9 18.8-33.7 15.2-45.3-18.6-84.6-8.1-116.8 31-13.6 16.6-20.7 29-25.4 37.1l-.1.2c-5.1-.7-10.3-1.6-15.4-2.5-27.5-4.9-51.8 6.7-72.4 34.5-16.7 22.5-27.7 51.7-34.2 73.1-1.7-.2-3.3-.3-5-.3-27.1 0-50.4 20.3-54 47.2-5.5 39.8-15.3 87.4-26.2 127.3-13.4 48.9-27.5 83.2-40.8 99.3-27.6 33.4-28.7 66.5-24.7 88.4 6.7 37.3 34.9 73.7 75.5 97.3 55.3 32.2 158.1 92 447 92 268 0 356.3-52.2 414.8-86.8l2.2-1.3c2.3-1.4 4.5-2.7 6.8-4 18.6-10.8 63-41.6 73.8-93.3 4.4-21.8 4.5-55-21.2-90zM919.01 759c-3 1.8-6.1 3.6-9.3 5.5-27.1 16-60.7 35.9-118.5 51.5-67.9 18.3-155.2 27.2-266.9 27.2-273.4 0-367.5-54.8-418.1-84.2-20.2-11.8-43.4-33.1-47.8-57.7-2.6-14.5 1.6-28.5 12.5-41.6 22.3-27 42.5-78.2 60-152.3 10.3-43.7 16.6-82.8 18.8-97.2 28.9 25.2 104.2 42.6 148.1 51 73.8 14.1 161.6 22.5 234.9 22.5 68.4 0 140.7-7.1 203.7-20.1 62.7-12.9 110.4-30.4 134.6-49.3 1.9-.2 3.7-.6 5.5-1.2 7.7 39.5 39.9 194.9 77.8 246.5 10.6 14.4 14.3 29.2 11.2 44.2-4.3 20.1-21.7 40.8-46.5 55.2zm-271.3-509.5c23.2-.1 41.5-.2 57.3 38.6 14.8 36.3 44.2 42 63.7 45.9 18.9 3.7 38.5 7.6 59.3 40.1-15.5 9-49.3 21.8-101.4 32.7v-1c-1.7-55.7-39.4-82-61.3-88.7-7.3-2.3-15.1-1.5-21.9 2.1-6.8 3.6-11.8 9.6-14.1 17-4.7 15.2 3.9 31.3 19 35.9.8.3 19.9 6.8 20.7 35.5.1 3 .7 6 1.8 9-45.5 6.3-91.7 9.6-137.6 9.6h-.8c-68 0-150.1-7.7-219.4-20.6-60.1-11.2-93.1-22.8-108.5-29.4 11.5-43.5 32-79.4 44.4-77.4 38.1 6.7 55.8 8.2 75.1-25.2 4-6.9 9.5-16.4 20.3-29.6 17.9-21.8 31.6-21.8 50.4-14.1 42.5 17.4 70.8-6.5 91.5-24l3.7-3.1c14-11.8 26.1-22.1 43.3-22.1 18.3 0 32.8 0 65.4 49.3 0 .1.1.2.1.3.2.5.4 1 .7 1.5 13 17.6 32.6 17.7 48.3 17.7z" />
            <path d="M197.61 503.7c-15.7-2.2-30.3 8.9-32.4 24.6-3.6 25.7-10.5 55.9-18.6 80.8-9.8 30.3-20.5 50.7-30.8 59.1-6 4.8-9.9 11.6-10.8 19.2-.9 7.6 1.2 15.2 6 21.2s11.6 9.9 19.2 10.8c1.2.1 2.3.2 3.5.2 6.4 0 12.6-2.1 17.7-6.2.2-.2.4-.3.6-.5 21.2-17.1 39.2-50.4 53.4-98.8 11-37.4 16-71.6 16.9-78.1 2-15.6-9-30.2-24.7-32.3zm234.9-238.6c-6.6-4-14.3-5.2-21.8-3.4l-.4.1c-55.8 13.8-74.3 65.3-76.5 93.6-.6 7.7 1.9 15.1 6.9 20.9 5 5.8 12 9.4 19.6 9.9h.1c.7.1 1.4.1 2.1.1 14.9 0 27.5-11.5 28.7-26.6 0-.3 3.2-34.7 32.9-42.1 7.5-1.8 13.8-6.4 17.8-13s5.2-14.3 3.4-21.8c-1.6-7.4-6.2-13.7-12.8-17.7zm144.2 34.3c-1.8.4-18 3.3-28.7-18.6-6.9-14.3-24.2-20.2-38.5-13.3-6.9 3.4-12.1 9.2-14.6 16.5-2.5 7.3-2 15.1 1.3 22 22.5 46.2 61.9 51.2 77.8 51.2 5.8 0 11.4-.6 16.2-1.8 7.5-1.8 13.8-6.4 17.8-13s5.2-14.3 3.4-21.8c-1.8-7.5-6.4-13.8-13-17.8s-14.3-5.2-21.7-3.4z" />
          </svg>
        </div>
      </div>
    </section>
  <?php endif; ?>
</aside>