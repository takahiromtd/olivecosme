<?php
/*
Template Name: page-company.php
*/
?>
<?php get_header(); ?>
<div class="image-bg-fluid-height-about">
    <h1 class="page-title"><?php the_title(); ?></h1>
</div>
<?php get_template_part('pankuzu'); ?>
  <div id="company" class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
        <div class="section">
        <h2>企業概要</h2>
            <table class="table">
              <tbody>
                <tr>
                  <th class="col-md-4 bold">社名</th>
                  <td>株式会社旅武者</td>
                </tr>
                <tr>
                  <th class="col-md-4 bold">資本金(資本準備金含む)</th>
                  <td>32,750,000円</td>
                </tr>
                <tr>
                  <th class="col-md-4 bold">代表取締役</th>
                  <td>山口和也</td>
                </tr>
                <tr>
                  <th class="col-md-4 bold">住所</th>
                  <td>
                  [早稲田オフィス]<br>
                  〒169-0051 東京都新宿区西早稲田1-22-3早稲田大学インキュベーションセンター内<br>
                  [湯島オフィス]<br>
                  〒113-0034 東京都文京区湯島2-33-11岡田ビル2階
                  </td>
                </tr>
                <tr>
                  <th class="col-md-4 bold">電話番号</th>
                  <td>03-6803-0927</td>
                </tr>
                <tr class="bb">
                  <th class="col-md-4 bold">メールアドレス</th>
                  <td>info@tabimusha.com</td>
                </tr>
                <tr class="bb">
                  <th class="col-md-4 bold">ホームページ</th>
                  <td><a href="http://tabimusha.com">http://tabimusha.com</a></td>
                </tr>
              </tbody>
            </table>
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
        <div class="section">
          <div class="child-page">
            <ul>
              <li class="child-page-dotted bold"><a href="/company/" title="運営会社">運営会社</a></li>
              <li class="child-page-dotted pl15"><a href="/company/president" title="代表挨拶"><i class="fa fa-angle-right"></i> 代表挨拶</a></li>
              <li class="child-page-dotted pl15"><a href="/contact/" title="お問い合わせ"><i class="fa fa-angle-right"></i> お問い合わせ</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php get_footer(); ?>