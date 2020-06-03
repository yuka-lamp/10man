<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section id="new" class="article-list py-5">
<div class="wrap">
  <div class="ttl flex">
    <h2><i class="far fa-clock"></i>新着物件</h2>
    <div class="btn-02">
      <a href="#">一覧を見る<i class="fas fa-chevron-right"></i></a>
    </div>
  </div>
  <ul class="flex">
    <!--- 物件情報 --->
    <li>
      <div class="img-wrap">
        <img src="<?php echo $wp_url ?>/lib/images/sample/sample.png" alt="">
      </div>
      <div class="txt-wrap">
        <a class="cat">名古屋駅</a>
        <h3>オフィス名がはいりますオフィス名がはいります</h3>
        <p>面積：8坪
        <br>所在地：中村区椿町
        <br>賃料：</p>
        <p class="price">6万5000円</p>
      </div>
    </li>
    <!--- 物件情報終わり --->
    <!--- 物件情報 --->
    <li>
      <div class="img-wrap">
        <img src="<?php echo $wp_url ?>/lib/images/sample/sample.png" alt="">
      </div>
      <div class="txt-wrap">
        <a class="cat">名古屋駅</a>
        <h3>オフィス名がはいりますオフィス名がはいります</h3>
        <p>面積：8坪
        <br>所在地：中村区椿町
        <br>賃料：</p>
        <p class="price">6万5000円</p>
      </div>
    </li>
    <!--- 物件情報終わり --->
    <!--- 物件情報 --->
    <li>
      <div class="img-wrap">
        <img src="<?php echo $wp_url ?>/lib/images/sample/sample.png" alt="">
      </div>
      <div class="txt-wrap">
        <a class="cat">名古屋駅</a>
        <h3>オフィス名がはいりますオフィス名がはいります</h3>
        <p>面積：8坪
        <br>所在地：中村区椿町
        <br>賃料：</p>
        <p class="price">6万5000円</p>
      </div>
    </li>
    <!--- 物件情報終わり --->
    <!--- 物件情報 --->
    <li>
      <div class="img-wrap">
        <img src="<?php echo $wp_url ?>/lib/images/sample/sample.png" alt="">
      </div>
      <div class="txt-wrap">
        <a class="cat">名古屋駅</a>
        <h3>オフィス名がはいりますオフィス名がはいります</h3>
        <p>面積：8坪
        <br>所在地：中村区椿町
        <br>賃料：</p>
        <p class="price">6万5000円</p>
      </div>
    </li>
    <!--- 物件情報終わり --->
    <!--- 物件情報 --->
    <li>
      <div class="img-wrap">
        <img src="<?php echo $wp_url ?>/lib/images/sample/sample.png" alt="">
      </div>
      <div class="txt-wrap">
        <a class="cat">名古屋駅</a>
        <h3>オフィス名がはいりますオフィス名がはいります</h3>
        <p>面積：8坪
        <br>所在地：中村区椿町
        <br>賃料：</p>
        <p class="price">6万5000円</p>
      </div>
    </li>
    <!--- 物件情報終わり --->
    <!--- 物件情報 --->
    <li>
      <div class="img-wrap">
        <img src="<?php echo $wp_url ?>/lib/images/sample/sample.png" alt="">
      </div>
      <div class="txt-wrap">
        <a class="cat">名古屋駅</a>
        <h3>オフィス名がはいりますオフィス名がはいります</h3>
        <p>面積：8坪
        <br>所在地：中村区椿町
        <br>賃料：</p>
        <p class="price">6万5000円</p>
      </div>
    </li>
    <!--- 物件情報終わり --->
  </ul>
</div>
</section>

<section id="ranking" class="article-list py-5">
<div class="wrap">
  <div class="ttl flex">
    <h2><i class="far fa-clock"></i>人気物件情報</h2>
    <div class="btn-02">
      <a href="#">一覧を見る<i class="fas fa-chevron-right"></i></a>
    </div>
  </div>
  <ul class="flex">
    <!--- 物件情報 --->
    <li>
      <div class="img-wrap">
        <img src="<?php echo $wp_url ?>/lib/images/sample/sample.png" alt="">
      </div>
      <div class="txt-wrap">
        <a class="cat">名古屋駅</a>
        <h3>オフィス名がはいりますオフィス名がはいります</h3>
        <p>面積：8坪
        <br>所在地：中村区椿町
        <br>賃料：</p>
        <p class="price">6万5000円</p>
      </div>
    </li>
    <!--- 物件情報終わり --->
    <!--- 物件情報 --->
    <li>
      <div class="img-wrap">
        <img src="<?php echo $wp_url ?>/lib/images/sample/sample.png" alt="">
      </div>
      <div class="txt-wrap">
        <a class="cat">名古屋駅</a>
        <h3>オフィス名がはいりますオフィス名がはいります</h3>
        <p>面積：8坪
        <br>所在地：中村区椿町
        <br>賃料：</p>
        <p class="price">6万5000円</p>
      </div>
    </li>
    <!--- 物件情報終わり --->
    <!--- 物件情報 --->
    <li>
      <div class="img-wrap">
        <img src="<?php echo $wp_url ?>/lib/images/sample/sample.png" alt="">
      </div>
      <div class="txt-wrap">
        <a class="cat">名古屋駅</a>
        <h3>オフィス名がはいりますオフィス名がはいります</h3>
        <p>面積：8坪
        <br>所在地：中村区椿町
        <br>賃料：</p>
        <p class="price">6万5000円</p>
      </div>
    </li>
    <!--- 物件情報終わり --->
  </ul>
</div>
</section>


<?php get_footer();
