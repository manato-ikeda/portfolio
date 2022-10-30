<?php get_header(); ?>
    <main>
        <section class="sub__top">
            <div class="sub__top-ttl">
                <h1 class="curtain overflow-hidden">
                    ABOUT
                </h1>
            </div>
        </section>
        <section class="about mt-80">
            <div class="inner">
                <h2>about me</h2>
                <div class="about__flex">
                    <div class="about__left curtain">
                        <img src="<?php echo get_template_directory_uri() ?>/img/about-img.jpeg" alt="イメージ画像">
                    </div>
                    <div class="about__right fadein">
                        <p class="about__text mb-32">
                            世の中のIT化が劇的に進む中で、昨今のコロナが後押しとなり世の中に大きな変化が起こっております。
                        </p>
                        <p class="about__text mb-32">
                            そんな世の中の大きな変化や目まぐるしく変わる流行に、柔軟に対応し、順応することが求められています。
                        </p>
                            
                        <p class="about__text mb-32">
                            今の自分にできることは何か、そしてやらなければならないことは何なのか。<br>
                            常に自問自答をしながら日々精進しております。
                        </p>                            

                        <p class="about__text mb-32">
                            プロフィール<br>
                            池田慎（いけだまなと） <br>
                            営業出身のwebディレクター兼コーダー
                        </p>

                        <p class="about__text mb-32">
                            コーダーとして業界で活動を始め、 <br>
                            現在はディレクターも行っております。 <br>
                            <br>
                            最終ゴールは自分でサービスを開発し <br>
                            世に広めたいと思っております。
                        </p>
                        
                    </div>
                </div>
            </div>
        </section>

       
        <section class="career mt-80">
            <div class="inner career__bg">
                <h2>about career</h2>
                <table class="career__list">
                    <tr class="career__list-item">
                      <th class="overflow-hidden curtain">営業</th>
                      <td class="overflow-hidden curtain">モバイルキャリアで販促活動</td>
                    </tr>
                    <tr class="career__list-item">
                        <th class="overflow-hidden curtain">営業</th>
                        <td class="overflow-hidden curtain">リフォーム営業（ドローン使用）</td>
                    </tr>
                    <tr class="career__list-item">
                        <th class="overflow-hidden curtain">コーダー</th>
                        <td class="overflow-hidden curtain">HP制作の業務委託</td>
                    </tr>
                    <tr class="career__list-item">
                        <th class="overflow-hidden curtain">コーダー</th>
                        <td class="overflow-hidden curtain">関東制作会社に勤務</td>
                    </tr>
                    <tr class="career__list-item">
                        <th class="overflow-hidden curtain">コーダー兼<br class="sp">ディレクター</th>
                        <td class="overflow-hidden curtain">関西制作会社に勤務</td>
                    </tr>
                </table>

                <ul class="work__list">
                    <li class="work__list-item">
                        <div class="work__img curtain overflow-hidden">
                            <img src="<?php echo get_template_directory_uri() ?>/img/sales.jpg" alt="代理店営業">
                        </div>
                    </li>
                    <li class="work__list-item">
                        <div class="work__img curtain overflow-hidden">
                            <img src="<?php echo get_template_directory_uri() ?>/img/drone.jpg" alt="ドローン">
                        </div>
                    </li>
                    <li class="work__list-item">
                        <div class="work__img curtain overflow-hidden">
                            <img src="<?php echo get_template_directory_uri() ?>/img/coder.jpg" alt="コーダー">
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section class="an-career mt-80 fadein">
            <div class="inner">
                <h2>another career</h2>
                <div class="work__flex">
                    <div class="work__left curtain overflow-hidden">
                        <img src="<?php echo get_template_directory_uri() ?>/img/business.jpg" alt="ビジネス">
                    </div>
                    <div class="work__right fadein">
                        <p class="work__text mb-32">
                            現在はディレクター兼コーダーですが、営業職出身でありこの経験を元に営業の業務委託もいくつか行ってきました。
                        </p>
                        <p class="work__text mb-32">
                            B to BやB to Cの他にインバウンドからアウトバンドのテレアポなど、幅広く対応もして参りました。
                        </p>
                        <p class="work__text mb-32">
                            コミュニケーション能力は最大の武器と捉えております。    
                        </p>
                        
                        <div class="archive__link">
                            <a href="/works" class="archive__link-text">➡︎ 実績一覧</a>
                        </div>

                        
                    </div>
                </div>
                
            </div>
        </section>
<?php get_footer(); ?>       