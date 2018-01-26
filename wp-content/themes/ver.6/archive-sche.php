<?php
/*
Template Name: archive.php
*/
?>
<?php get_header(); ?>
<?php get_template_part('pankuzu'); ?>
<div id="sche">
  <div class="container">
    <div class="section">
      <h2 class="text-center bold">プログラム説明会</h2>
      <p class="responsive-text-left bold">「全国10カ所での説明会」と「個別説明会」を開催しています。</p>
      <p class="responsive-text-left bold">過去の武者修行プログラム参加者の「生の声」である体験談やプログラムの魅力を聞くことができる説明会です。</p>
      <p class="responsive-text-left bold">ちょっとだけ話を聞きたい方もお気軽にご参加ください。</p>
    </div>
    <div class=section>
      <p class="text-center">ご参加希望のエリアをご選択ください</p>
      <ul class="nav nav-tabs nav-justified">
        <li class="sche-tab active"><a data-toggle="tab" href="#home"><i class="fa fa-angle-double-right"></i>東京</a></li>
        <li class="sche-tab"><a data-toggle="tab" href="#menu0"><i class="fa fa-angle-double-right"></i>横浜/栃木</a></li>
        <li class="sche-tab"><a data-toggle="tab" href="#menu1"><i class="fa fa-angle-double-right"></i>関西</a></li>
        <li class="sche-tab"><a data-toggle="tab" href="#menu2"><i class="fa fa-angle-double-right"></i>愛知/福井</a></li>
        <li class="sche-tab"><a data-toggle="tab" href="#menu3"><i class="fa fa-angle-double-right"></i>九州</a></li>
        <li class="sche-tab"><a data-toggle="tab" href="#menu4"><i class="fa fa-angle-double-right"></i>北海道</a></li>
        <li class="sche-tab"><a data-toggle="tab" href="#menu5"><i class="fa fa-angle-double-right"></i>中国/四国</a></li>
        <li class="sche-tab"><a data-toggle="tab" href="#menu7"><i class="fa fa-angle-double-right"></i>仙台/弘前</a></li>
        <li class="sche-tab"><a data-toggle="tab" href="#menu6"><i class="fa fa-angle-double-right"></i>個別<small>説明会</small></a></li>
      </ul>
      <div class="tab-content">
        <script type="text/javascript">
          $(function() { $('.sche-detail').matchHeight(); });
        </script>
        <div id="home" class="tab-pane fade in active">
          <div class="sche-tab-area visible-xs">
            <div class="btn-group btn-group-justified" role="group">
	       <div class="btn-group" role="group">
                <a type="button" class="btn btn-default" href="#area-waseda">東京<small>(早稲田)</small></a>
              </div> 
              <div class="btn-group" role="group">
                <a type="button" class="btn btn-default" href="#area-yushima">上野<small>(湯島)</small></a>
              </div>
              <div class="btn-group" role="group">
                <a type="button" class="btn btn-default" href="#area-wtokyo">西東京<small>(八王子)</small></a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-md-12 col-md-4 col-lg-4">
              <div id="area-waseda" class="sche-detail">
                <p class="text-center sche-detail-title">東京(早稲田)</p>
                <?php
                $page = get_page_by_path('waseda',OBJECT,'sche');
                echo $page->post_content;
                ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
            <div class="col-xs-12 col-md-12 col-md-4 col-lg-4">
              <div id="area-yushima" class="sche-detail">
                <p class="text-center sche-detail-title">上野(湯島)</p>
                <?php
                $page = get_page_by_path('yushima',OBJECT,'sche');
                echo $page->post_content;
                ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
            <div class="col-xs-12 col-md-12 col-md-4 col-lg-4">
              <div id="area-wtokyo" class="sche-detail">
                <p class="text-center sche-detail-title">西東京(八王子)</p>
                <?php
                $page = get_page_by_path('wtokyo',OBJECT,'sche');
                echo $page->post_content;
                ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
          </div>
        </div>
        <div id="menu0" class="tab-pane fade">
          <!--<div class="sche-tab-area visible-xs">
            <div class="btn-group btn-group-justified" role="group">
              <div class="btn-group" role="group">
                <a type="button" class="btn btn-default" href="#area-yokohama">神奈川<small>(横浜)</small></a>
              </div>
            </div>
          </div>-->
          <div class="row">
            <div class="col-xs-12 col-md-12 col-md-4 col-lg-4">
              <div id="area-yokohama" class="sche-detail">
                <p class="text-center sche-detail-title">神奈川(横浜)</p>
                <?php
                $page = get_page_by_path('yokohama',OBJECT,'sche');
                echo $page->post_content;
                ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
            <div class="col-xs-12 col-md-12 col-md-4 col-lg-4">
             <div id="area-sapporo" class="sche-detail">
                <p class="text-center sche-detail-title">栃木(宇都宮)</p>
                <?php
                $page = get_page_by_path('utsunomiya',OBJECT,'sche');
                echo $page->post_content;
                ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
          </div>
        </div>
        <div id="menu1" class="tab-pane fade">
          <div class="sche-tab-area visible-xs">
            <div class="btn-group btn-group-justified" role="group">
              <div class="btn-group" role="group">
                <a type="button" class="btn btn-default" href="#area-umeda">大阪<small>(梅田)</small></a>
              </div>
              <div class="btn-group" role="group">
                <a type="button" class="btn btn-default" href="#area-kyoto">京都</a>
              </div>
              <div class="btn-group" role="group">
                <a type="button" class="btn btn-default" href="#area-kobe">神戸<small>(六甲)</small></a>
              </div>
              <div class="btn-group" role="group">
                <a type="button" class="btn btn-default" href="#area-shiga">滋賀</a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-md-12 col-md-4 col-lg-4">
              <div id="area-umeda" class="sche-detail">
                <p class="text-center sche-detail-title">大阪(梅田)</p>
                <?php
                $page = get_page_by_path('osaka',OBJECT,'sche');
                echo $page->post_content;
                ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
            <div class="col-xs-12 col-md-12 col-md-4 col-lg-4">
              <div id="area-kyoto" class="sche-detail">
                <p class="text-center sche-detail-title">京都</p>
                <?php
                $page = get_page_by_path('kyoto',OBJECT,'sche');
                echo $page->post_content;
                ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
            <div class="col-xs-12 col-md-12 col-md-4 col-lg-4">
              <div id="area-kobe" class="sche-detail">
                <p class="text-center sche-detail-title">神戸(六甲)</p>
                <?php
                $page = get_page_by_path('kobe',OBJECT,'sche');
                echo $page->post_content;
                ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
            <div class="col-xs-12 col-md-12 col-md-4 col-lg-4">
              <div id="area-shiga" class="sche-detail">
                <p class="text-center sche-detail-title">滋賀</p>
                <?php
                $page = get_page_by_path('shiga',OBJECT,'sche');
                echo $page->post_content;
                ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
          </div>
        </div>
        <div id="menu2" class="tab-pane fade">
          <div class="sche-tab-area visible-xs">
            <div class="btn-group btn-group-justified" role="group">
              <div class="btn-group" role="group">
                <a type="button" class="btn btn-default" href="#area-nagoya">愛知<small>(名古屋)</small></a>
              </div>
<!--                <div class="btn-group" role="group">
                <a type="button" class="btn btn-default" href="#area-kanazawa">石川<small>(金沢)</small></a>
              </div> -->
              <div class="btn-group" role="group">
                <a type="button" class="btn btn-default" href="#area-fukui">福井</a>
              </div>
              <!--div class="btn-group" role="group">
                <a type="button" class="btn btn-default" href="#area-tsu">三重<small>(津)</small></a>
              </div-->
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-md-12 col-md-4 col-lg-4">
              <div id="area-nagoya" class="sche-detail">
                <p class="text-center sche-detail-title">愛知(名古屋)</p>
                <?php
                $page = get_page_by_path('nagoya',OBJECT,'sche');
                echo $page->post_content;
                ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
            <!-- <div class="col-xs-12 col-md-12 col-md-4 col-lg-4">
             <div id="area-kanazawa" class="sche-detail">
                <p class="text-center sche-detail-title">石川(金沢)</p>
                <?php
                $page = get_page_by_path('kanazawa',OBJECT,'sche');
                echo $page->post_content;
                ?>
                <?php get_template_part('entry'); ?>
              </div> 
            </div> -->
            <div class="col-xs-12 col-md-12 col-md-4 col-lg-4">
              <div id="area-fukui" class="sche-detail">
                <p class="text-center sche-detail-title">福井</p>
                <?php
                $page = get_page_by_path('fukui',OBJECT,'sche');
                echo $page->post_content;
                ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
          <!--  <div class="col-xs-12 col-md-12 col-md-4 col-lg-4">
              <div id="area-tsu" class="sche-detail">
                <p class="text-center sche-detail-title">三重(津)</p>
                <?php
                $page = get_page_by_path('tsu',OBJECT,'sche');
                echo $page->post_content;
                ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>-->
          </div>
        </div>
        <div id="menu3" class="tab-pane fade">
          <div class="sche-tab-area visible-xs">
            <div class="btn-group btn-group-justified" role="group">
              <div class="btn-group" role="group">
                <a type="button" class="btn btn-default" href="#area-fukuoka">福岡<small>(天神)</small></a>
              </div>
              <div class="btn-group" role="group">
                <a type="button" class="btn btn-default" href="#area-apu">大分<small>(APU)</small></a>
              </div>
              <div class="btn-group" role="group">
                <a type="button" class="btn btn-default" href="#area-kagoshima">鹿児島</a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-md-12 col-md-4 col-lg-4">
              <div id="area-fukuoka" class="sche-detail">
                <p class="text-center sche-detail-title">福岡(天神)</p>
                <?php
                $page = get_page_by_path('fukuoka',OBJECT,'sche');
                echo $page->post_content;
                ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
            <div class="col-xs-12 col-md-12 col-md-4 col-lg-4">
              <div id="area-apu" class="sche-detail">
                <p class="text-center sche-detail-title">大分(APU)</p>
                <?php
                $page = get_page_by_path('apu',OBJECT,'sche');
                echo $page->post_content;
                ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
            <div class="col-xs-12 col-md-12 col-md-4 col-lg-4">
              <div id="area-kagoshima" class="sche-detail">
                <p class="text-center sche-detail-title">鹿児島</p>
                <?php
                $page = get_page_by_path('kagoshima',OBJECT,'sche');
                echo $page->post_content;
                ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
          </div>
        </div>
        <div id="menu4" class="tab-pane fade">
          <div class="sche-tab-area visible-xs">
            <div class="btn-group btn-group-justified" role="group">
              <div class="btn-group" role="group">
                <a type="button" class="btn btn-default" href="#area-sapporo">北海道<small>(札幌)</small></a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-md-12 col-md-4 col-lg-4">
              <div id="area-sapporo" class="sche-detail">
                <p class="text-center sche-detail-title">北海道(札幌)</p>
                <?php
                $page = get_page_by_path('sapporo',OBJECT,'sche');
                echo $page->post_content;
                ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
          </div>
        </div>
        <div id="menu5" class="tab-pane fade">
          <div class="sche-tab-area visible-xs">
            <div class="btn-group btn-group-justified" role="group">
              <div class="btn-group" role="group">
                <a type="button" class="btn btn-default" href="#area-matsuyama">愛媛<small>(松山)</small></a>
              </div>
              <div class="btn-group" role="group">
                <a type="button" class="btn btn-default" href="#area-matsue">島根<small>(松江)</small></a>
              </div>
              <div class="btn-group" role="group">
                <a type="button" class="btn btn-default" href="#area-okayama">岡山<!--small>(松江)</small--></a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-md-12 col-md-4 col-lg-4">
              <div id="area-matsuyama" class="sche-detail">
                <p class="text-center sche-detail-title">愛媛(松山)</p>
                <?php
                $page = get_page_by_path('matsuyama',OBJECT,'sche');
                echo $page->post_content;
                ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
            <div class="col-xs-12 col-md-12 col-md-4 col-lg-4">
              <div id="area-matsue" class="sche-detail">
                <p class="text-center sche-detail-title">島根(松江)</p>
                <?php
                $page = get_page_by_path('matsue',OBJECT,'sche');
                echo $page->post_content;
                ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
                        <div class="col-xs-12 col-md-12 col-md-4 col-lg-4">
              <div id="area-okayama" class="sche-detail">
                <p class="text-center sche-detail-title">岡山</p>
                <?php
                $page = get_page_by_path('okayama',OBJECT,'sche');
                echo $page->post_content;
                ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
          </div>
        </div>
        <div id="menu7" class="tab-pane fade">
          <div class="sche-tab-area visible-xs">
            <div class="btn-group btn-group-justified" role="group">
              <!--div class="btn-group" role="group">
                <a type="button" class="btn btn-default" href="#area-aiu">秋田<small>(AIU)</small></a>
              </div-->
              <!--div class="btn-group" role="group">
                <a type="button" class="btn btn-default" href="#area-morioka">岩手<small>(盛岡)</small></a>
              </div-->
              <div class="btn-group" role="group">
                <a type="button" class="btn btn-default" href="#area-sendai">宮城<small>(仙台)</small></a>
              </div>
              <div class="btn-group" role="group">
                <a type="button" class="btn btn-default" href="#area-hirosaki">青森<small>(弘前)</small></a>
              </div>
            </div>
          </div>
          <div class="row">
            <!--<div class="col-xs-12 col-md-12 col-md-4 col-lg-4">
             <div id="area-sapporo" class="sche-detail">
                <p class="text-center sche-detail-title">秋田(AIU)</p>
                <?php
                $page = get_page_by_path('aiu',OBJECT,'sche');
                echo $page->post_content;
                ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>-->
            <div class="col-xs-12 col-md-12 col-md-4 col-lg-4">
             <div id="area-sendai" class="sche-detail">
                <p class="text-center sche-detail-title">宮城(仙台)</p>
                <?php
                $page = get_page_by_path('sendai',OBJECT,'sche');
                echo $page->post_content;
                ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
            <div class="col-xs-12 col-md-12 col-md-4 col-lg-4">
             <div id="area-hirosaki" class="sche-detail">
                <p class="text-center sche-detail-title">青森(弘前)</p>
                <?php
                $page = get_page_by_path('hirosaki',OBJECT,'sche');
                echo $page->post_content;
                ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
           <!-- <div class="col-xs-12 col-md-12 col-md-4 col-lg-4">
              <div id="area-morioka" class="sche-detail">
                <p class="text-center sche-detail-title">岩手(盛岡)</p>
                <?php
                $page = get_page_by_path('morioka',OBJECT,'sche');
                echo $page->post_content;
                ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>-->
          </div>
        </div>
        <div id="menu6" class="tab-pane fade">
          <div class="sche-tab-area visible-xs">
            <div class="btn-group btn-group-justified" role="group">
              <div class="btn-group" role="group">
                <a type="button" class="btn btn-default" href="#area-kobetsu">個別対応</a>
              </div>
              <div class="btn-group" role="group">
                <a type="button" class="btn btn-default" href="#area-online">オンライン</a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-md-12 col-md-6 col-lg-6">
              <div id="area-kobetsu" class="sche-detail">
                <p class="text-center sche-detail-title">直接会って話を聞く</p>
                <p>説明会エントリー後に日程を調整して、直接お会いしてプログラムの説明を行います。</p>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
            <div class="col-xs-12 col-md-12 col-md-6 col-lg-6">
              <div id="area-online" class="sche-detail">
                <p class="text-center sche-detail-title">WEB電話で話を聞く</p>
                <p>地方在住の方や日程調整が難しい方は、WEB電話(SkypeやLINE)を使ってプログラムの説明を受けることができます。</p>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  jQuery(function(){
  // ★　任意のズレ高さピクセル数を入力　↓
  var headerHight = 100;
   // #で始まるアンカーをクリックした場合に処理
   jQuery('a[href^=#area-]').click(function() {
    // スクロールの速度
    var speed = 400; // ミリ秒
    // アンカーの値取得
    var href= jQuery(this).attr("href");
    // 移動先を取得
    var target = jQuery(href == "#" || href == "" ? 'html' : href);
    // 移動先を数値で取得
    var position = target.offset().top-headerHight; // ※　-headerHightでズレの処理
    // スムーズスクロール
    jQuery('body,html').animate({scrollTop:position}, speed, 'swing');
    return false;
  });
 });
</script>
<?php get_footer(); ?>