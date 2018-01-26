(function($) {
    $.fn.stonewall = function(options) {
        var target = this;
        var defaults = {
            margin: 15
        };
        var setting = $.extend(defaults, options);
 
        // 配置する要素の幅
        var panelWidth = target.children().outerWidth();
 
        // 配置する要素の初期設定
        target.children().css({
            position: 'absolute',
            float: 'none'
        });
 
        // 配置させる関数
        function panelFit(type) {
            // 親要素の幅
            var parentWidth = target.width();
            // 列数
            var line = Math.floor(parentWidth / (panelWidth + setting.margin))
            if(((line + 1) * panelWidth) + (line * setting.margin) <= parentWidth) {
                line += 1;
            }
            // 各列の高さ管理用
            var spotArr = [];
            for(var i = 0; i < line; i++) {
                spotArr[i] = 0;
            }
 
            var compare = 0;
            var parentHeight = 0;
            target.children().each(function(e) {
                // 各列から現在一番高さの低いものを探す
                for(var i = 0; i < spotArr.length; i++) {
                    compare = Math.min(compare, spotArr[i]);
                }
                // 対象要素をどの列に入れるか
                lineIndex = $.inArray(compare, spotArr);
 
                if(type != 'animation') {
                    // アクセス時はアニメーションなしで配置
                    $(this).css({
                        top: spotArr[lineIndex],
                        left: (panelWidth + setting.margin) * lineIndex
                    });
                } else {
                    // 対象要素を配置位置までアニメーション
                    $(this).stop().animate({
                        top: spotArr[lineIndex],
                        left: (panelWidth + setting.margin) * lineIndex
                    });
                }
                // 追加した列に対象要素の高さ分追加
                spotArr[lineIndex] += $(this).outerHeight() + setting.margin;
                compare = spotArr[lineIndex];
 
                parentHeight = Math.max(parentHeight, compare);
 
                // 親要素の高さを設定
                if(e == target.children().length - 1) {
                    target.css({
                        height: parentHeight + setting.margin
                    });
                }
            });
        }
 
        panelFit('stop');
        var timer = null;
        // ページ読み込み時とリサイズ時に配置処理を実行
        $(window).on('load resize',function() {
            // リサイズ中ずっと処理させると負荷がかかるので
            // 0.2秒リサイズ処理が発生しなかったら実行
            clearTimeout(timer);
            timer = setTimeout(function() {
                panelFit('animation');
            }, 200);
        });
    }
})(jQuery);