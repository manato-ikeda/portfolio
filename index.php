<?php get_header(); ?>
    <main>
        <section class="top" id="slider">
            <div class="top__ttl">
                <h1 class="curtain overflow-hidden">
                    洗礼された技術、<br>
                    圧倒的なスピード、<br>
                    絶大な信頼。
                </h1>
                <span>web制作 / デザイン / 営業代行</span>
            </div>
        </section>
        <section class="about mt-80">
            <div class="inner">
                <h2>about</h2>
                <div class="about__flex">
                    <div class="about__left curtain">
                        <img src="<?php echo get_template_directory_uri() ?>/img/about-img.jpg" alt="イメージ画像">
                    </div>
                    <div class="about__right fadein">
                        <p class="about__text mb-32">
                            「人との繋がりが未来を作る」というコンセプトを胸に日々活動しております。
                        </p>
                        <p class="about__text mb-32">
                            仕事を行う上で、職種を問わず人との関りはすごく大切になります。<br>
                            その中で、いかに円滑にコミュニケーションを取りながら業務を遂行できるかが結果に大きく関わると考えています。
                        </p>
                            
                        <p class="about__text mb-32">
                            目の前の仕事を確実に完了させ、信頼を積み重ねることを大事にしております。
                        </p>                            
                            
                        <p class="about__text">
                            是非一度ご相談ください。
                        </p>                                         
                    </div>
                </div>
                <div class="about__btn">
                    <a href="/about" class="btn">View More</a>
                </div>
            </div>
        </section>
        <section class="service mt-80">
            <div class="inner">
                <h2>service</h2>
                <ul class="service__list fadein">
                    <li class="service__list-item curtain overflow-hidden">
                        <a href="/service#icon1" class="service__link">
                            <div class="service__panel">
                                <div class="service__panel-inner">
                                    <img src="<?php echo get_template_directory_uri() ?>/img/s-img-1.jpg" alt="デザイン">
                                </div>
                            </div>
                            <div class="service__panel-wrap">
                                <p class="service__ttl">デザイン</p>
                                <p class="service__desc">想いを形にするデザイン作り</p>
                            </div>
                        </a>
                    </li>
                    <li class="service__list-item curtain overflow-hidden">
                        <a href="/service#icon2" class="service__link">
                            <div class="service__panel">
                                <div class="service__panel-inner">
                                    <img src="<?php echo get_template_directory_uri() ?>/img/s-img-2.jpg" alt="コーディング">
                                </div>
                            </div>
                            <div class="service__panel-wrap">
                                <p class="service__ttl">コーディング</p>
                                <p class="service__desc">デザインカンプを基に正確なコーディング</p>
                            </div>
                        </a>
                    </li>
                    <li class="service__list-item curtain overflow-hidden">
                        <a href="/service#icon3" class="service__link">
                            <div class="service__panel">
                                <div class="service__panel-inner">
                                    <img src="<?php echo get_template_directory_uri() ?>/img/s-img-3.jpg" alt="LP・HPの構築">
                                </div>
                            </div>
                            <div class="service__panel-wrap">
                                <p class="service__ttl">LP・HPの構築</p>
                                <p class="service__desc">ビジネスを加速させるページ構築</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="service__btn">
                    <a href="/service" class="btn">View More</a>
                </div>
            </div>
        </section>
        <section class="work mt-80 fadein">
            <div class="inner">
                <h2>work</h2>
                <div class="work__flex">
                    <div class="work__left curtain overflow-hidden">
                        <img src="<?php echo get_template_directory_uri() ?>/img/work-main.jpg" alt="work">
                    </div>
                    <div class="work__right fadein">
                        <p class="work__text mb-32">
                            過去の営業職での実績、経験をもとに
                            代理店営業やSNS運用の相談も承っております。
                        </p>
                        <ol class="mb-32">
                            <li>
                                <h3>・代理店営業</h3>
                            </li>
                            <li>
                                <h3>・プロモーション</h3>
                            </li>
                            <li>
                                <h3>・採用業務</h3>
                            </li>
                            <li>
                                <h3>・ブログ運用</h3>
                            </li>
                            <li>
                                <h3>・SNS運用</h3>
                            </li>
                        </ol>
                        <p class="work__text mb-32">
                            これまで個人で培ってきた、信頼と実績で、個人のお客様や法人のお客様など
                            全ての仕事に責任を持って対応いたします。
                        </p>
                        <div class="work__btn">
                            <a href="/service#icon4" class="btn">Actual Results</a>
                        </div>
                    </div>
                </div>
                <ul class="work__list">
                    <li class="work__list-item">
                        <div class="work__img curtain overflow-hidden">
                            <img src="<?php echo get_template_directory_uri() ?>/img/work-1.jpg" alt="代理店営業">
                        </div>
                    </li>
                    <li class="work__list-item">
                        <div class="work__img curtain overflow-hidden">
                            <img src="<?php echo get_template_directory_uri() ?>/img/work-4.jpg" alt="アシスタント業務">
                        </div>
                    </li>
                    <li class="work__list-item">
                        <div class="work__img curtain overflow-hidden">
                            <img src="<?php echo get_template_directory_uri() ?>/img/work-3.jpg" alt="ブログ運用">
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section class="news mt-80">
            <div class="inner news__bg">
                <h2>news</h2>

                <?php query_posts('posts_per_page=3'); ?>
                <?php
                //記事があれば表示
                if ( have_posts() ) : ?>

                <ul class="news__list">

                <?php
                //記事数分ループ
                while ( have_posts() ) :
                the_post(); ?>

                    <li class="news__list-item overflow-hidden curtain">
                        <a href="/works">
                            <p class="news__date"><?php the_time('Y/n/j'); ?></p>
                            <p class="news__ttl"><?php the_title(); //タイトルを表示 ?></p>
                        </a>
                    </li>
                
                <?php
                endwhile;
                ?>

                </ul>

                <?php endif; ?>

                <div class="news__btn">
                    <a href="/works" class="btn">View More</a>
                </div>


            </div>
        </section>
<?php get_footer(); ?>