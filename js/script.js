//画像の設定

var windowwidth = window.innerWidth || document.documentElement.clientWidth || 0;
		if (windowwidth > 768){
			var responsiveImage = [//PC用の画像
				{ src: 'wp-content/themes/new-scrum php/img/top_01.jpg'},
				{ src: 'wp-content/themes/new-scrum php/img/top_02.jpg'},
				{ src: 'wp-content/themes/new-scrum php/img/top_03.jpg'}
			];
		} else {
			var responsiveImage = [//タブレットサイズ（768px）以下用の画像
				{ src: 'wp-content/themes/new-scrum php/img/top_01.jpg'},
				{ src: 'wp-content/themes/new-scrum php/img/top_02.jpg'},
				{ src: 'wp-content/themes/new-scrum php/img/top_03.jpg'}
			];
		}

//Vegas全体の設定

$('#slider').vegas({
	overlay: true,//画像の上に網線やドットのオーバーレイパターン画像を指定。
	transition: 'blur',//切り替わりのアニメーション。http://vegas.jaysalvat.com/documentation/transitions/参照。fade、fade2、slideLeft、slideLeft2、slideRight、slideRight2、slideUp、slideUp2、slideDown、slideDown2、zoomIn、zoomIn2、zoomOut、zoomOut2、swirlLeft、swirlLeft2、swirlRight、swirlRight2、burnburn2、blurblur2、flash、flash2が設定可能。
	transitionDuration: 2000,//切り替わりのアニメーション時間をミリ秒単位で設定
	delay: 10000,//スライド間の遅延をミリ秒単位で。
	animationDuration: 20000,//スライドアニメーション時間をミリ秒単位で設定
	animation: 'kenburns',//スライドアニメーションの種類。http://vegas.jaysalvat.com/documentation/transitions/参照。kenburns、kenburnsUp、kenburnsDown、kenburnsRight、kenburnsLeft、kenburnsUpLeft、kenburnsUpRight、kenburnsDownLeft、kenburnsDownRight、randomが設定可能。
	slides: responsiveImage,//画像設定を読む
	//timer:false,// プログレスバーを非表示したい場合はこのコメントアウトを外してください
});

// curtain
$(window).on('load scroll', function(){

	var elem = $('.curtain');
  
	elem.each(function () {
  
	  var isPlay = 'isPlay';
	  var elemOffset = $(this).offset().top;
	  var scrollPos = $(window).scrollTop();
	  var wh = $(window).height();
  
	  if(scrollPos > elemOffset - wh + (wh / 4)){
		$(this).addClass(isPlay);
	  }
	});
  });
  
  // fadein
  $(function(){
	  $(window).scroll(function (){
		  $('.fadein').each(function(){
			  var elemPos = $(this).offset().top;
			  var scroll = $(window).scrollTop();
			  var windowHeight = $(window).height();
			  if (scroll > elemPos - windowHeight + 200){
				  $(this).addClass('scrollin');
			  }
		  });
	  });
  });


  $(".openbtn").click(function () {//ボタンがクリックされたら
    $(this).toggleClass('active');//ボタン自身に activeクラスを付与し
    $(".sp__nav").toggleClass('panelactive');//ナビゲーションにpanelactiveクラスを付与
    $(".main").toggleClass('showUp');//ナビゲーションにpanelactiveクラスを付与
});
  
  $(".sp__nav.header__sp-item").click(function () {//ナビゲーションのリンクがクリックされたら
    $(".openbtn").removeClass('active');//ボタンの activeクラスを除去し
    $(".sp__nav").removeClass('panelactive');//ナビゲーションのpanelactiveクラスも除去
    $(".main").removeClass('showUp');//ナビゲーションのpanelactiveクラスも除去
});


//スクロール
$(function () {
    $('a[href^="#"]').click(function () { 
        var adjust = 0;
        //スクロール速度
        var speed = 500;
        //hrefで指定されたidを取得
        var href = $(this).attr("href");
        //移動先を取得
        var target = $(href == "#" || href == "" ? 'html' : href);
        //移動先を調整
        var position = target.offset().top - 100;
        //スムーススクロール
        $('body,html').animate(
            {
                scrollTop: position
            },
            speed, 'swing'
        );
        return false;
    });

});