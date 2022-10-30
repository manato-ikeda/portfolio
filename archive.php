<?php get_header(); ?>
    <main>
        <section class="sub__top">
            <div class="sub__top-ttl">
                <h1 class="curtain overflow-hidden">
                    ARCHIVE
                </h1>
            </div>
        </section>
      
        <section class="archive__wrap mt-80">
            <div class="inner">
                <h2>過去の案件実績</h2>
                
                <div class="archive__body">
                    <div class="archive__main">
                        
                    <?php
                    //記事があれば表示
                    if ( have_posts() ) : ?>

                        <div class="archive__list">
                        <?php
                        //記事数分ループ
                        while ( have_posts() ) :
                        the_post(); ?>
                        
                            <article class="archive__item">
                                <div class="archive__img">
                                    
                                    <?php
                                    // カテゴリー１つ目の名前を表示
                                    $category = get_the_category();
                                    if ($category[0] ) {
                                    echo '<span class="article__tag"><a href="#">' . $category[0]->cat_name . '</a> <!-- カテゴリー --></span>';
                                    }
                                    ?>
                                        
                                    <a href="#"> <!-- サムネ -->
                                        <img src="<?php echo get_template_directory_uri() ?>/img/s-img-1.jpg" alt="" width="730" height="410">
                                    </a>
                                </div>
                                <p class="archive__date"><?php the_time('Y/n/j'); ?></p> <!-- 日付 -->
                                <h3><?php the_title(); //タイトルを表示 ?></h3> <!-- タイトル -->
                                <p class="archive__text"> <!-- 案件の概要 -->
                                    <?php the_content(); ?>
                                </p>

                                
                            </article>
    
                            <?php
                            endwhile;
                            ?>
                        </div>
                       
                        <?php endif; ?>
                    </div>
        
                    <div class="archive__sidebar">
                        <p class="archive__box-ttl mb-20">ABOUT US</p>
                        <div class="archive__box">
                            <div class="archive__box-img mb-20">
                                <img src="<?php echo get_template_directory_uri() ?>/img/profile.jpg" alt="">
                            </div>
                            <p class="archive__box-text mb-20">
                                WEB制作と営業のお仕事承っております。
                            </p>
                            <p class="archive__box-text mb-20">
                                ▼WEBスキル<br>
                                [言語] HTML/CSS/JavaScript/PHP<br>
                                [フレームワーク等] Bootstrap/jQuery/WordPress
                            </p>
                               
                            <p class="archive__box-text mb-20">
                                ▼WEB業務<br>
                                ・LPの作成<br>
                                ・コーポレートサイトの作成<br>
                                ・ECサイトの作成<br>
                                ・WordPressのカスタマイズ
                            </p>

                            <p class="archive__box-text mb-20">
                                ▼営業業務<br>
                                ・ドローン撮影<br>
                                ・テレアポ<br>
                                ・営業代行
                            </p>
                                
                            <p class="archive__box-text mb-20">
                                見積もりは無料ですので、<br>お気軽にご相談ください。
                            </p>
                                
                            <a href="https://www.lancers.jp/profile/manato0305" class="archive__link-item">
                                ランサーズ評価ページはこちら
                            </a>
                            <a href="https://crowdworks.jp/public/employees/4004463/contracts" class="archive__link-item">
                                クラウドワークス評価ページはこちら
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
<?php get_footer(); ?>