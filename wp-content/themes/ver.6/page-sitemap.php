<?php
/*
Template Name: page-sitemap.php
*/
?>
<?php get_header(); ?>
<?php get_template_part('pankuzu'); ?>
<div class="about col-xs-12 col-sm-12 col-md-9 col-lg-9 mt10">
      <div class="bg-fff">
      <div class="mt10">
        <h1 class="bold fs14 mt10">サイトマップ</h1>
      </div>
      <ul class="sitemap mt20">
            <li><a href="/" title="トップページ">トップページ</a></li>
      </ul>
      <ul class="sitemap">
            <li><a class="mb10" href="/" title="トップページ">プログラム概要</a>
                  <ul>
                        <li><a href="/about/feature" title="プログラムの特徴">プログラムの特徴</a></li>
                        <li><a href="/about/ex" title="武者修行で得られること">武者修行で得られること</a></li>
                        <li><a href="/about/facilitator" title="ファシリテーターについて">ファシリテーターについて</a></li>
                        <li><a href="/about/hoian" title="ベトナム・ホイアンについて">ベトナムホイアンについて</a></li>
                        <li><a href="/about/how-to-entry" title="プログラム参加までの流れ">プログラム参加までの流れ</a></li>
                  </ul>
            </li>
      </ul>
      <ul class="sitemap">
            <li><a href="/sche" title="参加方法">説明会日程</a></li>
      </ul>
      <ul class="sitemap">
            <li><a href="/entry/" title="説明会エントリー">説明会エントリー</a></li>
      </ul>
      <ul class="sitemap">
            <li><a href="/qa/" title="よくある質問">よくある質問</a></li>
      </ul>
      <ul class="sitemap">
            <li><a href="/column/" title="参加者の声">参加者の声</a></li>
      </ul>
      <ul class="sitemap">
            <li><a href="/company/" title="運営会社">運営会社</a></li>
      </ul>
      <ul class="sitemap">
            <li><a href="/contact/" title="お問い合わせ">お問い合わせ</a></li>
      </ul>
      <ul class="sitemap">
            <li><a href="/pamphlet/" title="資料請求">資料請求</a></li>
      </ul>
      <ul class="sitemap">
            <li><a href="/privacy/" title="プライバシーポリシー">プライバシーポリシー</a></li>
      </ul>
      <ul class="sitemap">
            <li><a href="/sitemap/" title="サイトマップ">サイトマップ</a></li>
      </ul>
      </div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>