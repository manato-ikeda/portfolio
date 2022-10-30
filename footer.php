<section class="contact mt-80">
            <div class="inner">
                <div class="contact__wrap">
                    <h2>contact</h2>
                    <p class="contact__text">
                        サービスに関するお問い合わせは<br class="sp">下記お問合せフォーム<br>
                        またはお問い合わせ専用LINEから、<br class="sp">お気軽にご連絡ください。
                    </p>

                    <ul class="contact__list">
                        <li class="contact__list-item">
                            <a href="https://lin.ee/mviXhqT" class="btn color-green">
                                LINE
                            </a>
                        </li>
                        <li class="contact__list-item">
                            <a href="/contact" class="btn">
                                Form
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="inner">
            <div class="footer__left">
                <ul class="footer__list">
                    <li class="footer__list-item">
                        <a href="/about">about</a>
                    </li>
                    <li  class="footer__list-item">
                        <a href="/service">service</a>
                    </li>
                    <li class="footer__list-item">
                        <a href="/service#icon4">work</a>
                    </li>
                    <li class="footer__list-item">
                        <a href="/works">news</a>
                    </li>
                    <li class="footer__list-item">
                        <a href="/contact">contact</a>
                    </li>
                </ul>
            </div>

            <div class="footer__right">
                <div class="footer__logo">
                    <img src="<?php echo get_template_directory_uri() ?>/img/h-logo.png" alt="Scrum">
                </div>
                <div class="footer__sns">
                    <a href="https://twitter.com/manabou119235">
                        <img src="<?php echo get_template_directory_uri() ?>/img/twitter-icon.png" alt="twitter">
                    </a>
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri() ?>/img/github-icon.png" alt="github">
                    </a>
                </div>
            </div>
            
            <div class="start__btn">
                <a href="#">
                    <img src="<?php echo get_template_directory_uri() ?>/img/start-icon.png" alt="ボタン">
                </a>
            </div>

            <div class="footer__copy">
                <p><small>&copy;2022 Scrum</small></p>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vegas/2.4.4/vegas.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/script.min.js"></script>

    <?php wp_footer(); ?>
</body>
</html>