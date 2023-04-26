<?php get_template_part('parts/section', 'nav'); ?>

<header class="homepage_banner">
    <div class="container-fluid px-0">
        <div class="row align-items-center">
            <div class="col-6">
                <div class="row justify-content-center">
                    <div class="col-9">
                        <div class="heading fs-90 text-tertiary text-uppercase fw-700 lh-1">Pro<span class="text-primary">Connect</span></div>
                        <div class="description text-grey py-3">
                            With years of experience within the Electrical Industry, Pro Connect is here for all your electrical, air conditioning, and solar needs. <strong>All our jobs meet the Australian wiring standards AS/NZS 3000.</strong>
                        </div>
                        <div class="row pt-4">
                            <div class="col-auto">
                                <a href="tel:<?= get_field('general', 'options')['phone_number'] ?>" class="btn btn-dark rounded-10 text-white fs-20 fw-700 px-4 gap-2">
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.9833 6.49167C10.7833 8.85 8.85 10.775 6.49167 11.9833L4.65833 10.15C4.43333 9.925 4.1 9.85 3.80833 9.95C2.875 10.2583 1.86667 10.425 0.833334 10.425C0.375 10.425 0 10.8 0 11.2583V14.1667C0 14.625 0.375 15 0.833334 15C8.65833 15 15 8.65833 15 0.833333C15 0.375 14.625 0 14.1667 0H11.25C10.7917 0 10.4167 0.375 10.4167 0.833333C10.4167 1.875 10.25 2.875 9.94167 3.80833C9.85 4.1 9.91667 4.425 10.15 4.65833L11.9833 6.49167Z" fill="white" />
                                    </svg>
                                    <?= get_field('general', 'options')['phone_number'] ?>
                                </a>
                            </div>
                            <div class="col-auto">
                                <a href="tel:<?= get_field('general', 'options')['phone_number'] ?>" class="btn btn-primary rounded-10 text-white fs-20 fw-700 px-4 px-xl-5 text-uppercase">
                                    Contact Us
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 position-relative">
                <div class="_shadow"></div>
                <div id="banner_gallery_slider">
                    <?php
                    if (have_rows('banner')) :
                        while (have_rows('banner')) : the_row();
                            if (have_rows('slider')) :
                                while (have_rows('slider')) : the_row();
                                    $image = get_sub_field('image');
                    ?>
                                    <div><img src="<?= $image['url'] ?>" alt="<?= $image['url'] ?>"></div>
                    <?php
                                endwhile;
                            endif;
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="divider"></div>
    </div>
</header>