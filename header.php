<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
<link href="<?php echo $wp_url; ?>/lib/css/common.css" rel="stylesheet">
<link href="<?php echo $wp_url; ?>/lib/css/header.css" rel="stylesheet">
<link href="<?php echo $wp_url; ?>/lib/css/footer.css" rel="stylesheet">
<link href="<?php echo $wp_url; ?>/lib/css/mv.css" rel="stylesheet">
<link href="<?php echo $wp_url; ?>/lib/css/top.css" rel="stylesheet">
<link href="<?php echo $wp_url; ?>/lib/css/article.css" rel="stylesheet">
<link href="<?php echo $wp_url; ?>/lib/css/single.css" rel="stylesheet">
<?php wp_head(); ?>
<?php if (!is_user_logged_in()): ?>
<!-- ここにGAトラッキングタグ -->
<?php endif; ?>
</head>
<body>

<!-- ヘッダー -->
<header id="header">
  <nav class="wrap">
    <div class="flex">
      <div class="logo-wrap">
        <a href="<?php echo $home ?>">
          <img src="<?php echo $wp_url ?>/lib/images/common/header_logo.png" alt="10万円以下ドットコムのロゴ">
        </a>
      </div>
      <div class="flex pc-only">
        <img src="<?php echo $wp_url ?>/lib/images/common/header_tel.png" alt="10万円以下ドットコムの電話番号">
        <div class="btn-01">
          <a href="#" target="_blank">資料請求／お問い合わせ<i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>
  </nav>
</header>
<!-- ヘッダー終了 -->

<?php if (is_home() || is_front_page()): ?>

<!-- トップページMV -->
<section id="mv" class="flex flex-center">
  <div class="wrap flex">
    <h2 class="left">
      <img src="<?php echo $wp_url ?>/lib/images/mv/mv_txt.png" alt="名古屋で安い事務所やオフィス、10万円以下の賃貸はお任せ！">
    </h2>
    <div class="right">
      <h3><i class="fas fa-search"></i>こだわり検索</h3>
      <ul class="flex prejudice-list">
        <li>
          <a href="#">
            <p>レンタル<br>オフィス物件</p>
            <div class="">
              <i class="fas fa-arrow-circle-right"></i>
            </div>
          </a>
        </li>
        <li>
          <a href="#">
            <p>シェア<br>オフィス物件</p>
            <div class="">
              <i class="fas fa-arrow-circle-right"></i>
            </div>
          </a>
        </li>
        <li>
          <a href="#">
            <p>敷金礼金なし<br>物件</p>
            <div class="">
              <i class="fas fa-arrow-circle-right"></i>
            </div>
          </a>
        </li>
      </ul>
      <h3><i class="fas fa-search"></i>エリアから検索</h3>
      <ul class="area-list flex">
        <li><a href="#">名古屋駅<i class="fas fa-chevron-right"></i></a></li>
        <li><a href="#">栄<i class="fas fa-chevron-right"></i></a></li>
        <li><a href="#">丸の内<i class="fas fa-chevron-right"></i></a></li>
        <li><a href="#">伏見<i class="fas fa-chevron-right"></i></a></li>
        <li><a href="#">久屋大通り<i class="fas fa-chevron-right"></i></a></li>
        <li><a href="#">金山<i class="fas fa-chevron-right"></i></a></li>
        <li><a href="#">その他<i class="fas fa-chevron-right"></i></a></li>
      </ul>
    </div>
  </div>
</section>
<!-- トップページMV終了 -->

<?php else: ?>

<!-- 下層ページMV -->
<section id="sub-mv">
  <!-- パンくず -->
  <?php if (is_home() || is_front_page()): ?>
  <?php else: ?>
  <?php if (!is_front_page() && !is_home()) {
  if (function_exists('yoast_breadcrumb')) {
      yoast_breadcrumb('<div id="breadcrumbs" class="pc">','</div>');
    }
  } ?>
  <?php endif; ?>
  <?php
  global $wp_query;
  $post_obj = $wp_query->get_queried_object();
  $slug = $post_obj->post_name;
  ?>
  <!-- パンくず終了 -->
  <div class="flex flex-center">
    <div class="content txt-c">
      <?php if (is_post_type_archive('news')): ?>
      <h2 class="serif fff">ニュース</h2>
    <?php elseif (is_post_type_archive('research')): ?>
      <h2 class="serif fff">研究コラム・成果</h2>
    <?php else: ?>
      <h2 class="serif fff"><?php echo get_the_title(); ?></h2>
      <?php endif; ?>
      </h2>
      <!-- <p class="eng fff"><?php echo $slug; ?></p> -->
    </div>
  </div>
</section>
<!-- 下層ページMV終了 -->

<?php endif; ?>

<!-- メインコンテンツ -->
<main>
