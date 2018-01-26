<script>
  $(function(){
    $(".dropdown").hover(            
      function() {
        $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
        $(this).toggleClass('open');
        $('b', this).toggleClass("caret caret-up");                
      },
      function() {
        $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
        $(this).toggleClass('open');
        $('b', this).toggleClass("caret caret-up");                
      });
  });
</script>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <?php if ( is_front_page() ) : ?>
            <h1 class="logo"><a href="/" title="海外ビジネス武者修行プログラム"><img class="img-responsive logo-img" src="<?php bloginfo('template_directory'); ?>/img/mushashugyo-logo.png" width="200" alt="海外ビジネス武者修行プログラム"></a></h1>
          <?php else : ?>
            <a href="/" title="海外ビジネス武者修行プログラム"><img class="img-responsive logo-img" src="<?php bloginfo('template_directory'); ?>/img/mushashugyo-logo.png" width="200" alt="海外ビジネス武者修行プログラム"></a>
          <?php endif; ?>
        </div>
        <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
          <ul id="gnav" class="nav navbar-nav navbar-right ">
            <li class="dropdown hidden-xs">
              <a href="/about/" data-toggle="dropdown">武者修行とは <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="/about/">プログラム内容</a></li>
                <li><a href="/about/ex/">得られること</a></li>
                <li><a href="/about/hoian/">ベトナムについて</a></li>
              </ul>
            </li>
            <li class="visible-xs"><a>武者修行とは</a></li>
            <li class="visible-xs"><a href="/about/"><i class="fa fa-angle-right"></i>&nbsp;プログラム内容</a></li>
            <li class="visible-xs"><a href="/about/ex/"><i class="fa fa-angle-right"></i>&nbsp;得られること</a></li>
            <li class="visible-xs"><a href="/about/hoian/"><i class="fa fa-angle-right"></i>&nbsp;ベトナムについて</a></li>
            <li><a href="/facilitator">ファシリテーター</a></li>
            <li><a href="/column/">参加者の声</a></li>
            <li class="gnav-entry"><a href="/sche">説明会エントリー</a></li>
            <li class="hidden-sm hidden-md hidden-lg"><a href="/company/">運営会社</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div>
    </div><!-- /.container-fluid -->
  </div>
</nav>