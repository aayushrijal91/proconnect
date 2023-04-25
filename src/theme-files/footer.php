<?php $general = get_field('general', 'options'); ?>
<footer>
    <section class="footer_top bg-primary py-6 text-white">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-auto">
                    <div class='pb-2'><img src="<?= $general['footer_logo']['url'] ?>" alt="<?= $general['footer_logo']['url'] ?>"></div>
                    <div class="pt-4">
                        <a href='tel:<?= $general['phone_number'] ?>' class="text-decoration-none text-white d-flex align-items-center gap-3 fw-600">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.1919 17.9974C12.1444 18.0393 11.1289 17.5623 10.1209 17.0945C5.38468 14.896 2.12348 11.3259 0.31449 6.43524C-0.634887 3.86857 0.635513 1.0965 3.1786 0.111367C3.83053 -0.141192 4.3463 0.0352947 4.68862 0.646153C5.27666 1.69367 5.86013 2.74422 6.43904 3.79706C6.78288 4.42237 6.73572 4.94042 6.27776 5.47749C5.84263 5.9887 5.39685 6.49153 4.94194 6.98524C4.79817 7.14119 4.7898 7.26671 4.87728 7.45384C6.07846 10.038 7.96884 11.9276 10.5545 13.1265C10.747 13.2155 10.8695 13.1935 11.0224 13.0535C11.5168 12.5994 12.0197 12.1536 12.5301 11.7177C13.0512 11.2734 13.5807 11.2171 14.1794 11.5458C15.255 12.1353 16.3276 12.7317 17.3957 13.335C17.951 13.6484 18.1267 14.1626 17.9099 14.7583C17.2047 16.6936 15.3562 17.9929 13.1919 17.9967V17.9974Z" fill="white" />
                            </svg>
                            <?= $general['phone_number'] ?>
                        </a>
                    </div>
                    <div class='pt-4'>
                        <a href='mailto:<?= $general['admin_email'] ?>' class="text-decoration-none text-white d-flex align-items-center gap-3 fw-600">
                            <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.2 0H1.8C0.81 0 0.00899999 0.7875 0.00899999 1.75L0 12.25C0 13.2125 0.81 14 1.8 14H16.2C17.19 14 18 13.2125 18 12.25V1.75C18 0.7875 17.19 0 16.2 0ZM16.2 3.5L9 7.875L1.8 3.5V1.75L9 6.125L16.2 1.75V3.5Z" fill="white" />
                            </svg>
                            <?= $general['admin_email'] ?>
                        </a>
                    </div>
                    <div class="row pt-5">
                        <?php
                        if (have_rows('general', 'options')) :
                            while (have_rows('general', 'options')) : the_row();
                                if (have_rows('socials', 'options')) :
                                    while (have_rows('socials', 'options')) : the_row();
                                        $icon = get_sub_field('icon');
                                        $link = get_sub_field('link');
                        ?>
                                        <div class="col-auto">
                                            <a href=<?= $link['url'] ?> target=<?= $link['target'] ?> class="social_icon"><img src=<?= $icon['url'] ?> alt=<?= $icon['alt'] ?>></a>
                                        </div>
                        <?php
                                    endwhile;
                                endif;
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>

                <div class="col-5">
                    <div class="row">
                        <div class="col-4">
                            <div class="fs-20 fw-700 pb-4">Quick Links</div>

                            <ul class='footer_nav'>
                                <li><a href="" class="footer_nav_link">Home</a></li>
                                <li><a href="" class="footer_nav_link">About Us</a></li>
                                <li><a href="" class="footer_nav_link">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col-4">
                            <div class="fs-20 fw-700 pb-4">Services</div>

                            <ul class='footer_nav'>
                                <li><a href="" class="footer_nav_link">Electrical</a></li>
                                <li><a href="" class="footer_nav_link">Air Conditioning</a></li>
                                <li><a href="" class="footer_nav_link">Solar</a></li>
                            </ul>
                        </div>
                        <div class="col-4">
                            <div class="fs-20 fw-700 pb-4">Support</div>

                            <ul class='footer_nav'>
                                <li><a href="" class="footer_nav_link">Contact Us</a></li>
                                <li><a href="" class="footer_nav_link">Privacy Policies</a></li>
                                <li><a href="" class="footer_nav_link">Terms &amp; Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="footer_bottom bg-jet-black">
        <div class="container">
            <div class="row justify-content-between align-items-center py-4">
                <div class="col-auto">
                    <div class='text-grey fs-12 d-flex gap-5'>
                        <div>Copyright <?= date('Y') ?></div>
                        <div class="text-primary">|</div>
                        <div>Proconnect</div>
                        <div class="text-primary">|</div>
                        <div>All Rights Reserved</div>
                    </div>
                </div>
                <div class="col-auto">
                    <a href="https://aiims.com.au/" target='_blank'><img src="<?= get_template_directory_uri() ?>/images/logo/aiims_logo.png" alt=""></a>
                </div>
            </div>
        </div>
    </section>
</footer>

<?php wp_footer(); ?>

</body>

</html>