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
                        <div class="archive__list">
                            <?php
                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                            $the_query = new WP_Query( array(
                                'post_status' => 'publish',
                                'paged' => $paged,
                                'posts_per_page' => 30, // 表示件数
                                'orderby'     => 'date',
                                'order' => 'DESC'
                            ) );
                            
                            
                            if ($the_query->have_posts()) :?><?php
                               while ($the_query->have_posts()) : $the_query->the_post();?>
                            
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
                                            <?php
                                            if (has_post_thumbnail() ) {
                                            // アイキャッチ画像が設定されてれば大サイズで表示
                                            the_post_thumbnail('large');
                                            } else {
                                            // なければnoimage画像をデフォルトで表示
                                            echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="" width="730" height="410">';
                                            }
                                            ?>
                                        </a>
                                    </div>
                                    <p class="archive__date mb-20"><?php the_time('Y/n/j'); ?></p> <!-- 日付 -->
                                    <h3 class="mb-20"><?php the_title(); //タイトルを表示 ?></h3> <!-- タイトル -->
                                    <div class="archive__text mb-20"> <!-- 案件の概要 -->
                                        <table>
                                            <?php if ( get_field( 'span' ) ) : ?>
                                            <tr>
                                              <th>対応期間</th>
                                              <td><?php the_field( 'span' ); ?></td>
                                            </tr>
                                            <?php endif; ?>
                                            <?php if ( get_field( 'type' ) ) : ?>
                                            <tr>
                                              <th>担当範囲</th>
                                              <td><?php the_field( 'type' ); ?></td>
                                            </tr>
                                            <?php endif; ?>
                                            <?php if ( get_field( 'about' ) ) : ?>
                                            <tr>
                                              <th>案件概要</th>
                                              <td><?php the_field( 'about' ); ?></td>
                                            </tr>
                                            <?php endif; ?>
                                            
                                            <?php 
                                            $link = get_field('link');
                                            if( $link ): 
                                                $link_url = $link['url'];
                                                $link_title = $link['title'];
                                                $link_target = $link['target'] ? $link['target'] : '_self';
                                                ?>
                                                <tr>
                                                <th>実際のページ</th>
                                                    <td>
                                                    <a  href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                                    </td>
                                                </tr>
                                            <?php endif; ?>
                                        </table>
                                    </div>
                                    
                                    
                                </article>

                            <?php endwhile;?><?php endif; ?>
                        </div>
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




