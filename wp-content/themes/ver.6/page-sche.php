<?php
/*
Template Name: page-sche.php
*/
?>
<?php get_header(); ?>
<div class="container">
  <?php get_template_part('pankuzu'); ?>
  <div class="row">
    <div class="sche col-xs-12 col-sm-12 col-md-12 col-lg-12 mt10">
      <div class="bg-fff mb10">
        <h1 class="pl15 pb5 bold">説明会参加方法</h1>
        <p class="mt10">全国各地やオンラインでの無料説明会を実施中です。プログラムのことを説明会でより詳しく知っていただいた上で、武者修行プログラムに申し込んでいただくことができます。まずはお気軽に説明会にご参加ください。</p>
        <div class="row mb20">
          <script type="text/javascript">
              $(function() {
              $('.box-hight').matchHeight();
              });
          </script>
          <div class="hidden-xs hidden-sm col-md-3 col-lg-3 mb20">
            <h2>定期<small>説明会会場</small></h2>
            <div class="box box-hight">
            <p>定期的に説明会を行っています。</p>
              <ul class="float sche-areas">
                <li class="sche-area bold">関東</a>
                <li class="sche-area"><a href="#tokyo" title="">東京会場</li></a>
                <li class="sche-area"><a href="#yokohama" title="">神奈川・横浜会場</li></a>
              </ul>
              <ul class="float sche-areas">
                <li class="sche-area bold">関西</a>
                <li class="sche-area"><a href="#osaka" title="">大阪会場</li></a>
                <li class="sche-area"><a href="#kyoto" title="">京都会場</li></a>
                <li class="sche-area"><a href="#kobe" title="">神戸会場</li></a>
              </ul>
              <ul>
                <li class="sche-area bold">その他</a>
                <li class="sche-area"><a href="#aichi" title="">愛知会場</li></a>
                <li class="sche-area"><a href="#apu" title="">大分(APU)会場</li></a>
              </ul>
            </div>
          </div>
          <div class="hidden-xs hidden-sm col-md-6 col-lg-6 mb20">
            <h2>個別<small>説明会会場</small></h2>
            <div class="box box-hight">
            <p>大学周辺で、過去の武者修行参加者がお会いして、ご説明します。</p>
              <ul class="float sche-areas">
                <li class="sche-area bold">関東</a>
                <li class="sche-area"><a href="#kobetu" title="">東京大学</a></li>
                <li class="sche-area"><a href="#kobetu" title="">首都大学東京</a></li>
                <li class="sche-area"><a href="#kobetu" title="">早稲田大学</a></li>
              </ul>
              <ul class="float sche-areas">
                <li class="sche-area bold">関西</a>
                <li class="sche-area"><a href="#kobetu" title="">近畿大学</a></li>
                <li class="sche-area"><a href="#kobetu" title="">大阪大学</a></li>
                <li class="sche-area"><a href="#kobetu" title="">関西学院大学</a></li>
                <li class="sche-area"><a href="#kobetu" title="">関西大学</a></li>
                <li class="sche-area"><a href="#kobetu" title="">兵庫県立大学</a></li>
                <li class="sche-area"><a href="#kobetu" title="">神戸大学</a></li>
              </ul>
              <ul class="float sche-areas">
                <li class="sche-area bold">その他</a>
                <li class="sche-area"><a href="#kobetu" title="">北海道大学</li></a>
                <li class="sche-area"><a href="#kobetu" title="">小樽商科大学</a></li>
                <li class="sche-area"><a href="#kobetu" title="">福島大学</a></li>
                <li class="sche-area"><a href="#kobetu" title="">福岡大学</a></li>
                <li class="sche-area"><a href="#kobetu" title="">島根大学</a></li>
                <li class="sche-area"><a href="#kobetu" title="">都留文化大学</a></li>
              </ul>
            </div>
          </div>
          <div class="hidden-xs hidden-sm col-md-3 col-lg-3 mb20">
          <h2>オンライン<small>説明会</small></h2>
            <div class="box box-hight">
            <p>日程の都合がつかない方、各会場へのアクセスが難しい方には、SkypeやLINE通話での説明会も実施しています。</p>
            <ul><li class="sche-area"><a href="#skype" title="">オンライン説明会詳細</a></li></ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-12 hidden-md hidden-lg">
            <div class="btn-group btn-group-justified" role="group" aria-label="Justified button group with nested dropdown">
              <div class="btn-group" role="group">
                <a href="#" class="fs10 btn btn-default dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">定期説明会 <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="#tokyo">東京会場</a></li>
                  <li><a href="#yokohama">神奈川・横浜会場</a></li>
                  <li><a href="#osaka">大阪会場</a></li>
                  <li><a href="#kyoto">京都会場</a></li>
                  <li><a href="#aichi">愛知会場</a></li>
                  <li><a href="#apu">大分会場(APU)</a></li>
                  <li><a href="#fukuoka">福岡会場</a></li>
                </ul>
              </div>
              <div class="btn-group" role="group">
                <a href="#" class="fs10 btn btn-default dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">個別説明会 <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="#kobetu">北海道大学</a></li>
                  <li><a href="#kobetu">小樽商科大学</a></li>
                  <li><a href="#kobetu">福岡大学</a></li>
                  <li><a href="#kobetu">立命館アジア太平洋大学</a></li>
                  <li><a href="#kobetu">福島大学</a></li>
                  <li><a href="#kobetu">島根大学</a></li>
                  <li><a href="#kobetu">都留文化大学</a></li>
                  <li><a href="#kobetu">東京大学</a></li>
                  <li><a href="#kobetu">首都大学東京</a></li>
                  <li><a href="#kobetu">早稲田大学</a></li>
                  <li><a href="#kobetu">近畿大学</a></li>
                  <li><a href="#kobetu">大阪大学</a></li>
                  <li><a href="#kobetu">関西学院大学</a></li>
                  <li><a href="#kobetu">関西大学</a></li>
                  <li><a href="#kobetu">兵庫県立大学</a></li>
                  <li><a href="#kobetu">神戸大学</a></li>
                </ul>
              </div>
              <a href="#skype" class="fs10 btn btn-default" role="button">Skype説明会</a>
            </div>
          </div>
        </div>
      </div>
      <div id="tokyo" class="area">
        <div class="">
          <h2 class="pl15 pb5">東京会場</h2>
        </div>
        <div class="row bt mb10">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <h3 class="bold pb5">説明会日程</h3>
            <div class="table-responsive">
              <table class="table">
              <tr><td>11/30(月)19:00-21:00</td></tr>
              <tr><td>12/2(水)19:00-21:00</td></tr>
              <tr><td>12/4(金)19:00-21:00</td></tr>
              <tr><td>12/6(日)10:00-12:00</td></tr>
              <tr><td>12/7(月)19:00-21:00</td></tr>
              <tr><td>12/8(火)19:00-21:00</td></tr>
              <tr><td>12/9(水)19:00-21:00</td></tr>
              <tr><td>12/11(金)19:00-21:00</td></tr>
              <tr><td>12/13(日)10:00-12:00</td></tr>
              <tr><td>12/14(月)19:00-21:00</td></tr>
              </table>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <h3 class="bold pb5">会場詳細</h3>
            <div class="box">
              <h4 class="bold">早稲田大学インキュベーションセンター</h4>
              <p class="pl15">東京都新宿区西早稲田1&#45;22&#45;3<br>早稲田大学インキュベーションセンター</p>
              <a class="pl15" href="http://www.waseda.jp/inst/inc/center/access/">http://www.waseda.jp/inst/inc/center/access/</a>
              <div class="bt mt10">
                <h5><i class="fa fa-train"></i> アクセス</h5>
                <p class="pl15">【都電荒川線】早稲田駅より徒歩1分<br>【地下鉄東西線】早稲田駅より徒歩9分</p>
              </div>
              <div class="embed-responsive embed-responsive-16by9">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12958.324192346754!2d139.717522!3d35.711926!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe3f4a383e1e3446a!2z5pep56iy55Sw5aSn5a2m44Kk44Oz44Kt44Ol44OZ44O844K344On44Oz5o6o6YCy5a6k!5e0!3m2!1sja!2sjp!4v1432312254475" width="600" height="150" frameborder="0" style="border:0"></iframe>
              </div>
            </div>
          </div>
          <div class="text-center"><a class="mt10 fs16 btn btn-success btn-lg text-center" href="/entry/" role="button">無料説明会エントリー</a></div>
        </div>
      </div>
      <div id="yokohama" class="area">
        <div class="">
          <h2 class="pl15 pb5">神奈川・横浜会場</h2>
        </div>
        <div class="row bt mb10">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <h3 class="bold pb5">説明会日程</h3>
            <div class="table-responsive">
              <table class="table">
                <tr><td>12/1(火)18:00-20:00</td></tr>
                <tr><td>12/5(土)10:00-12:00</td></tr>
                <tr><td>12/6(日)10:00-12:00</td></tr>
                <tr><td>12/12(土)10:00-12:00</td></tr>
                <tr><td>12/19(土)10:00-12:00</td></tr>
                <tr><td>12/20(日)10:00-12:00</td></tr>
                <tr><td>12/26(土)10:00-12:00</td></tr>
                <tr><td>12/27(日)10:00-12:00</td></tr>
              </table>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <h3 class="bold pb5">会場詳細</h3>
              <div class="box">
                <h4 class="bold">ルノアール横浜西口北幸店</h4>
                <p class="pl15">〒220-0004  神奈川県横浜市西区北幸1丁目8-6 三栄ビル1階</p>
                <a class="pl15" href="http://standard.navitime.biz/renoir/Spot.act?dnvSpt=S0107.63">http://standard.navitime.biz/renoir/Spot.act?dnvSpt=S0107.63</a>
                <div class="bt mt10">
                  <h5><i class="fa fa-train"></i> アクセス</h5>
                  <p class="pl15">JR、京浜急行電鉄、東横線・みなとみらい線「横浜駅」 徒歩5分</p>
                </div>
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3249.549128678377!2d139.61659321525286!3d35.46595508024498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60185c0de22e8b15%3A0x4547c1a4941395e6!2z44CSMjIwLTAwMDQg56We5aWI5bed55yM5qiq5rWc5biC6KW_5Yy65YyX5bm477yR5LiB55uu77yY4oiS77yW!5e0!3m2!1sja!2sjp!4v1448598409529" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
          </div>
          <div class="text-center"><a class="mt10 fs16 btn btn-success btn-lg text-center" href="/entry/" role="button">無料説明会エントリー</a></div>
        </div>
      </div>
      <div id="osaka" class="area">
        <h2 class="pl15 pb5">大阪会場</h2>
        <div class="row bt">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <h3 class="bold pb5">説明会日程</h3>
            <div class="table-responsive mb10">
              <table class="table">
              <tr><td>12/3(木)18:00-20:00</td></tr>
              <tr><td>12/6(日)16:00-18:00</td></tr>
              <tr><td>12/9(水)18:00-20:00</td></tr>
              <tr><td>12/12(土)16:00-18:00</td></tr>
              <tr><td>12/17(木)18:00-20:00</td></tr>
              <tr><td>12/20(日)16:00-18:00</td></tr>
              <tr><td>12/24(木)18:00-20:00</td></tr>
              </table>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mb10">
            <h3>会場詳細</h3>
            <div class="box">
              <h4 class="bold">パートナーズオフィス</h4>
              <p class="pl15">〒530&#45;0001大阪府大阪市北区梅田1&#45;11&#45;4大阪駅前第4ビル20F</p>
              <a class="pl15" href="http://www.partners-office.jp/">http://www.partners-office.jp/</a>
              <div class="bt mt10">
                <h5><i class="fa fa-train"></i> アクセス</h5>
                <p class="pl15">JR大阪駅徒歩3分, 阪神梅田駅徒歩2分<br>御堂筋線梅田駅徒歩3分, 阪急梅田駅徒歩5分<br>四ツ橋線西梅田駅徒歩3分, JR北新地駅徒歩2分<br>谷町線東梅田駅徒歩1分</p>
              </div>
              <div class="embed-responsive embed-responsive-16by9 mb10">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.208851307774!2d135.4988634!3d34.69991185000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e6ed222827a5%3A0x4484b92ae435519f!2z44CSNTMwLTAwMDEg5aSn6Ziq5bqc5aSn6Ziq5biC5YyX5Yy65qKF55Sw77yR5LiB55uu77yR77yR4oiS77yUIOWkp-mYqumnheWJjeesrDTjg5Pjg6s!5e0!3m2!1sja!2sjp!4v1442913425100" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
            </div>
          </div>
            <div class="text-center"><a class="mt10 fs16 btn btn-success btn-lg text-center" href="/entry/" role="button">無料説明会エントリー</a></div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          </div>
        </div>
      </div>
      <div id="kyoto" class="area">
        <h2 class="pl15 pb5">京都会場</h2>
        <div class="row bt">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <h3 class="bold pb5">説明会日程</h3>
            <div class="table-responsive mb10">
              <table class="table">

              <tr><td>12/12(土)16:00-18:00</td></tr>
              <tr><td>12/15(火)18:00-20:00</td></tr>
              <tr><td>12/26(土)13:00-15:00</td></tr>
              </table>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mb10">
            <h3>会場詳細</h3>
            <div class="box">
              <h4 class="bold">向塾</h4>
              <p class="pl15">京都市上京区西堀川通元誓願寺上る竪門前町414　西陣産業会館　地下</p>
              <a class="pl15" href="http://koujuku.jp/">http://koujuku.jp/</a>
              <div class="bt mt10">
                <h5><i class="fa fa-train"></i> アクセス</h5>
                
              </div>
            <div class="embed-responsive embed-responsive-16by9 mb10">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3267.815595406222!2d135.75771531524072!3d35.01132098035597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60010885db3f32eb%3A0xf6a0c4b8400d5bcd!2z5ZCR5aG-!5e0!3m2!1sja!2sjp!4v1444057533291" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            </div>
          </div>
          <div class="text-center"><a class="mt10 fs16 btn btn-success btn-lg text-center" href="/entry/" role="button">無料説明会エントリー</a></div>
        </div>
      </div>
      <div id="kobe" class="area">
        <h2 class="pl15 pb5">神戸会場</h2>
        <div class="row bt">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <h3 class="bold pb5">説明会日程</h3>
            <div class="table-responsive mb10">
              <table class="table">
                <tr><td><tr><td>12/6(日)14:00-16:00</td></tr>
                <tr><td>12/10(木)18:00-20:00</td></tr>
                <tr><td>12/20(日)14:00-16:00</td></tr>
                <tr><td>12/27(日)14:00-16:00</td></tr>
              </table>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mb10">
            <h3>会場詳細</h3>
            <div class="box">
              <h4 class="bold">勉強カフェ神戸三宮スタジオ</h4>
              <p class="pl15">〒651&#45;0088神戸市中央区小野柄通7&#45;1&#45;5&nbsp;マキビル７F</p>
              <div class="bt mt10">
                <h5><i class="fa fa-train"></i> アクセス</h5>
                <p class="pl15">JR六甲道駅徒歩4分神戸三宮駅徒歩２分</p>
              </div>
              <div class="bt mt10">
              <p class="bold mt10">学びカフェnotte<small>(10/27会場)</small></p>
                <p class="pl15">〒657&#45;0028兵庫県神戸市灘区森後町2-3-11&nbsp;学びカフェnotte</p>
                <p class="pl15">JR六甲道駅徒歩4分</p>
              </div>
              <div class="embed-responsive embed-responsive-16by9 mb10">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.473313052171!2d135.194294865232!3d34.693240030436456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60008ef00b6da245%3A0xe403f86c5a743804!2z44CSNjUxLTAwODgg5YW15bqr55yM56We5oi45biC5Lit5aSu5Yy65bCP6YeO5p-E6YCa77yX5LiB55uu77yR4oiS77yVIOODnuOCreODk-ODq-ODh-OCo-ODs-OCsA!5e0!3m2!1sja!2sjp!4v1445699445536" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
            </div>
            <div class="text-center"><a class="mt10 fs16 btn btn-success btn-lg text-center" href="/entry/" role="button">無料説明会エントリー</a></div>
          </div>
        </div>
      </div>
      <div id="aichi" class="area">
        <h2 class="pl15 pb5">愛知会場</h2>
        <div class="row bt">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <h3 class="bold pb5">説明会日程</h3>
            <div class="table-responsive mb10">
              <table class="table">
                <tr><td>12/5(土)14:00-16:00</td></tr>
                <tr><td>12/9(水)18:00-20:00</td></tr>
                <tr><td>12/14(月)18:00-20:00</td></tr>
                <tr><td>12/17(木)18:00-20:00</td></tr>
                <tr><td>12/21(月)18:00-20:00</td></tr>
                <tr><td>12/26(土)14:00-16:00</td></tr>         
              </table>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mb10">
            <h3>会場詳細</h3>
            <div class="box">
              <h4 class="bold">MYCAFE名古屋駅前店</h4>
              <p class="pl15">〒450&#45;0002愛知県名古屋市中村区名駅4-26-10&nbsp;名駅ファーストビル6F</p>
              <p class="pl15"><a href="http://www.nagoya-mycafe.com/info_meieki.html">http://www.nagoya-mycafe.com/info_meieki.html</a></p>
              <div class="bt mt10">
                <h5><i class="fa fa-train"></i> アクセス</h5>
                <p class="pl15">名古屋駅から徒歩5分</p>
              </div>
            <div class="embed-responsive embed-responsive-16by9 mb10">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6523.074167358014!2d136.886816!3d35.168164!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1623d66380b18019!2zTVlDQUZFIOWQjeWPpOWxi-mnheWJjeW6l3zlkI3pp4XjgYvjgonlvpLmrak15YiG44Gu6Zu75rqQ44O754Sh57eaTEFO44GM5L2_44GI44KL44Kz44Ov44O844Kt44Oz44Kw44K544Oa44O844K5!5e0!3m2!1sja!2sus!4v1445564557124" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            </div>
          </div>
            <div class="text-center"><a class="mt10 fs16 btn btn-success btn-lg text-center" href="/entry/" role="button">無料説明会エントリー</a></div>
        </div>
      </div>
      <div id="apu" class="area">
        <h2 class="pl15 pb5">福岡会場</h2>
        <div class="row bt">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <h3 class="bold pb5">説明会日程</h3>
            <div class="table-responsive mb10">
              <table class="table">
                <tr><td>12/2(水)17:00-19:00</td></tr>
                <tr><td>12/7(月)19:00-21:00</td></tr>
                <tr><td>12/8(火)17:00-19:00<small>*8日のみ会場が異なります。</small><br><b class="red">※この日限定、ファシリテーターが説明会を担当します！</b></td></tr>
                <tr><td>12/9(水)17:00-19:00</td></tr>
                <tr><td>12/14(月)19:00-21:00</td></tr>
                <tr><td>12/16(水)17:00-19:00</td></tr>
                <tr><td>12/21(月)19:00-21:00</td></tr>
                <tr><td>12/25(金)19:00-21:00</td></tr>
              </table>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mb10">
            <h3>会場詳細</h3>
            <div class="box">
              <h4 class="bold">カフェ・ベローチェ 博多駅筑紫口店前</h4>
              <p class="pl15">〒812-0013福岡県福岡市博多区博多駅東1-12-6 花村ﾋﾞﾙ1F</p>
              <p class="pl15"><a href="http://chatnoir-company.com/chatnoir/ShopSearch?shop_code=362">http://chatnoir-company.com/chatnoir/ShopSearch?shop_code=362</a></p>
            <div class="embed-responsive embed-responsive-16by9 mb10">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d830.8917763924877!2d130.42211428812513!3d33.590587298789984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x354191c8588a5c07%3A0xcc5079340143f49!2z44Kr44OV44Kn44OZ44Ot44O844OB44KnIOWNmuWkmumnheetkee0q-WPo-W6lw!5e0!3m2!1sja!2sjp!4v1448249264862" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            </div>

            <div class="box mt10">
              <h4 class="bold">12/8会場 天神仕事基地</h4>
              <p class="pl15">〒810-0001　福岡県福岡市中央区天神3-15-1　にちりんビル3F</p>
              <p class="pl15"><a href="http://shigoto-kichi.com/tenjin/access/">http://shigoto-kichi.com/tenjin/access/</a></p>
              <p class="pl15">12/8は武者修行プログラムのファシリテーターの村上卓さんが特別にお越しいただき、ワークショップ＆説明会が開催されます。</p>
            </div>
          </div>
          <div class="text-center"><a class="mt10 fs16 btn btn-success btn-lg text-center" href="/entry/" role="button">無料説明会エントリー</a></div>  
        </div>
      </div>
      <div id="apu" class="area">
        <h2 class="pl15 pb5">立命館アジア太平洋大学会場</h2>
        <div class="row bt">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <h3 class="bold pb5">説明会日程</h3>
            <div class="table-responsive mb10">
              <table class="table">
              <tr><td>12/9(水)19:00-21:00</td></tr>
              <tr><td>12/17(木)19:00-21:00</td></tr>
              <tr><td>12/18(金)19:00-21:00</td></tr>
              <tr><td>12/21(月)19:00-21:00</td></tr>
              </table>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mb10">
            <h3>会場詳細</h3>
            <div class="box">
              <h4 class="bold">立命館アジア太平洋大学周辺</h4>
              <p class="pl15">会場の詳細は説明会申込者に個別にご連絡致します。</p>
            </div>
          </div>
        </div>
        <div class="text-center"><a class="mt10 fs16 btn btn-success btn-lg text-center" href="/entry/" role="button">無料説明会エントリー</a></div>
      </div>
      <div id="kobetu" class="area">
        <h2 class="pl15 pb5">個別説明会</h2>
        <div class="row bt">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h3 class="bold pb5">希望の大学周辺で、過去の武者修行参加者がご説明します。</h3>
            <p>エントリーフォームからお住まいの近くの地域をご選択のうえ、大学、説明会希望日を3つコメント欄に記入しお申し込みください。</p>
          </div>
        </div>
        <div class="text-center"><a class="mt10 fs16 btn btn-success btn-lg text-center" href="/entry/" role="button">無料説明会エントリー</a></div>
      </div>
      <div id="skype" class="area">
        <h2 class="pl15 pb5">オンライン説明会</h2>
        <div class="row bt">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h3 class="bold pb5">SkypeやLINE等でオンライン説明会を行います。</h3>
            <p>エントリーフォームからオンライン説明会希望日程を3つコメント欄に記入しお申し込みください。</p>
          </div>
        </div>
        <div class="text-center"><a class="mt10 fs16 btn btn-success btn-lg text-center" href="/entry/" role="button">無料説明会エントリー</a></div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>