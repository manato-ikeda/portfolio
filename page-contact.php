<?php get_header(); ?>
    <main>
        <section class="sub__top">
            <div class="sub__top-ttl">
                <h1 class="curtain overflow-hidden">
                    CONTACT
                </h1>
            </div>
        </section>
      
        <section class="form__wrap mt-80">
            <div class="inner">

                <div class="form__body">
                    <h2>form</h2>
                
                    <p class="form__ttl">
                        サイトをご覧頂きましてありがとうございます。<br>
                        <br>
                        お問い合わせ、ご質問等ありましたら<br>
                        必要項目をご入力頂き送信してください。
                    </p>

                    <?php echo do_shortcode('[contact-form-7 id="30" title="コンタクトフォーム 1"]'); ?>

                </div>
               
            </div>
        </section>
<?php get_footer(); ?>
        