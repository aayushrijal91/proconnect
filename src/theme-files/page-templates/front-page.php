<?php
/*
 * Template Name: Front Page
 * The front page
 *
 */
get_header();
get_template_part('parts/section', 'homebanner');
?>

<div class="front_page">
    <section class="section_1 py-4">
        <div class="container">
            <div class="row gx-xl-6 align-items-center">
                <div class="col">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3537.5832942372936!2d153.01685087627644!3d-27.54440231989483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x593e1fae563d649%3A0xdf914bb9ab47ac07!2sPro%20Connect%20Design%20and%20Solutions!5e0!3m2!1sen!2sau!4v1681943148245!5m2!1sen!2sau" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="vertical_divider"></div>
                </div>
                <div class="col">
                    <div class="form_main">
                        <div class="fs-70 fw-700 text-primary">Get A Quote</div>
                        <div class="text-dark-grey fs-20 fw-500">Simply fill in our form &amp; we'll get back to you as soon as possible</div>
                        <form id="regForm" action="form.php" method="POST" enctype="multipart/form-data">
                            <div>
                                <div class="tab">
                                    <div class="row justify-content-between fw-500 text-dark-grey font-roboto fs-24">
                                        <div class="col-auto">
                                            Start by telling us your name
                                        </div>
                                        <div class="col-auto">
                                            1/4
                                        </div>
                                    </div>
                                    <div class="form-wrapper pt-4">
                                        <input type="text" class="form-control rounded-0" placeholder="Eg: John Doe" oninput="this.className = 'form-control rounded-0 '" name="name" required>
                                    </div>
                                </div>
                                <div class="tab">
                                    <div class="row justify-content-between no-gutters fw-500 h8 text-light-black font-roboto">
                                        <div class="col-auto">
                                            Your Contact Details
                                        </div>
                                        <div class="col-auto">
                                            2/4
                                        </div>
                                    </div>
                                    <div class="row form-wrapper pt-4 gx-3">
                                        <div class="col-12 col-md-4">
                                            <input type="tel" class="form-control rounded-0" placeholder="Eg: 0400 000 000" oninput="this.className = 'form-control rounded-0'" name="phone" required>
                                        </div>
                                        <div class="col-12 col-md">
                                            <input type="email" class="form-control rounded-0" placeholder="Eg: john.citizen@example.com" oninput="this.className = 'form-control rounded-0'" name="email" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab">
                                    <div class="row justify-content-between no-gutters fw-500 h8 text-light-black font-roboto">
                                        <div class="col-auto">
                                            Service Select
                                        </div>
                                        <div class="col-auto">
                                            3/4
                                        </div>
                                    </div>
                                    <div class="form-wrapper pt-4">
                                        <select class="form-control form-select rounded-0" name="service" required>
                                            <option>Powerpoints</option>
                                            <option>Switches</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="tab">
                                    <div class="row justify-content-between no-gutters fw-500 h8 text-light-black font-roboto">
                                        <div class="col-auto">
                                            Comment
                                        </div>
                                        <div class="col-auto">
                                            4/4
                                        </div>
                                    </div>
                                    <div class="form-wrapper pt-4">
                                        <input type="text" class="form-control rounded-0 not-required" placeholder="What's your say?" oninput="this.className = 'form-control rounded-0'" name="comment">
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-between align-items-end">
                                <div class="col-6 col-md-auto">
                                    <button type="button" class="btn text-grey font-roboto rounded-pill fw-700" id="prevBtn" onclick="nextPrev(-1)">
                                        <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M24.875 5.04456C25.1331 5.04456 25.3806 5.12412 25.5632 5.26574C25.7457 5.40736 25.8482 5.59944 25.8482 5.79972C25.8482 6 25.7457 6.19208 25.5632 6.3337C25.3806 6.47532 25.1331 6.55488 24.875 6.55488L4.14272 6.75516L9.3007 10.7575C9.45891 10.9029 9.5406 11.0892 9.52944 11.2792C9.51828 11.4693 9.41509 11.649 9.24051 11.7826C9.06592 11.9162 8.8328 11.9937 8.58775 11.9996C8.3427 12.0056 8.10378 11.9396 7.91875 11.8148L1.10632 6.52861C0.928005 6.38745 0.828125 6.19767 0.828125 6C0.828125 5.80233 0.928005 5.61255 1.10632 5.47139L7.91875 0.185244C8.10378 0.060432 8.3427 -0.00559191 8.58775 0.000371442C8.8328 0.0063348 9.06592 0.083846 9.24051 0.217409C9.41509 0.350972 9.51828 0.530745 9.52944 0.720788C9.5406 0.910832 9.45891 1.09714 9.3007 1.24247L4.13299 5.24484L24.875 5.04456Z" fill="#CDCDCD" />
                                        </svg>
                                        <span class='ps-2'>Back</span>
                                    </button>
                                </div>
                                <div class="col-6 col-md-9 col-lg-8 col-xl-9">
                                    <button type="button" class="btn w-100 bg-primary text-white rounded-2 fw-500 font-roboto" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                </div>
                            </div>
                        </form>
                        <div class="font-roboto fs-14 text-dark-grey fw-300 pt-4 pt-md-5 pt-lg-7">
                            <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.3382 5H11.9482V3C11.9482 2.20435 11.5088 1.44129 10.7268 0.87868C9.94476 0.31607 8.8841 0 7.77815 0C6.67219 0 5.61153 0.31607 4.8295 0.87868C4.04747 1.44129 3.60813 2.20435 3.60813 3V5H2.21813C1.84948 5 1.49592 5.10536 1.23525 5.29289C0.974571 5.48043 0.828125 5.73478 0.828125 6V11C0.828125 11.2652 0.974571 11.5196 1.23525 11.7071C1.49592 11.8946 1.84948 12 2.21813 12H13.3382C13.7068 12 14.0604 11.8946 14.321 11.7071C14.5817 11.5196 14.7282 11.2652 14.7282 11V6C14.7282 5.73478 14.5817 5.48043 14.321 5.29289C14.0604 5.10536 13.7068 5 13.3382 5ZM9.16815 5H6.38814V3C6.38814 2.73478 6.53459 2.48043 6.79526 2.29289C7.05594 2.10536 7.40949 2 7.77815 2C8.1468 2 8.50035 2.10536 8.76103 2.29289C9.0217 2.48043 9.16815 2.73478 9.16815 3V5Z" fill="#3C4A5A" />
                            </svg>
                            <span class="fw-500">Your privacy is our priority.</span> All information will remain 100% private &amp; secure
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section_2">
        <?php $section_2 = get_field('section_2') ?>
        <img src='<?= get_template_directory_uri() ?>/images/background/about.png' alt='Proconnect' class='heroImage'>
        <div class='container'>
            <div class="row">
                <div class="col-12 col-lg-8 col-xl-6">
                    <div class="row text-white gy-5">
                        <div class="col-12">
                            <div class="fs-80 fw-900 lh-0_9 pe-3"><?= $section_2['title'] ?></div>
                        </div>
                        <div class="col-12 col-xl-10 lh-1_5">
                            <div class="description lh-1_5"><?= $section_2['description'] ?></div>
                        </div>
                        <div class="col-12 col-xl-10">
                            <div class="row fw-700 aligin-items-center">
                                <div class="col-12 col-md">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <svg width="36" height="44" viewBox="0 0 36 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M18 43.0834C6.5 37.9602 0.75 32.8491 0.75 27.75V8.58335C0.75 7.11214 1.31465 6.77021 2.87736 5.82391L2.87737 5.8239C3.35052 5.53739 3.91516 5.19547 4.58333 4.75002C4.89344 4.54328 11.4128 0.916687 18 0.916687C23.7409 0.916687 28.5417 2.83335 31.4167 4.75002C32.0848 5.19547 32.6495 5.53739 33.1226 5.82391C34.6854 6.77021 35.25 7.11214 35.25 8.58335C35.2878 8.99972 35.2692 17.8545 35.2573 23.5232L35.2573 23.5311C35.2533 25.4606 35.25 27.0199 35.25 27.75C35.25 32.8611 29.5 37.9722 18 43.0834ZM31.4167 27.75C31.4167 27.3086 31.4178 26.569 31.4202 25.3632L31.4279 21.6194C31.4304 20.4083 31.4323 19.3689 31.434 18.3771C31.4411 14.0988 31.4392 10.4268 31.435 9.29115L31.1718 9.12775L31.1717 9.12773C30.5519 8.74323 29.7441 8.24208 29.2903 7.93955C26.4608 6.05319 22.332 4.75002 18 4.75002C13.8563 4.75002 8.47155 6.76497 6.70968 7.93955C6.25589 8.24208 5.44806 8.74323 4.82827 9.12774L4.58333 9.27975V27.75C4.58333 30.6412 8.85579 34.5901 18.0018 38.8705C27.1466 34.5997 31.4167 30.6523 31.4167 27.75ZM24.3114 14.8947L16.0833 23.1228L11.6886 18.7281L8.97804 21.4386L16.0833 28.5439L27.0219 17.6053L24.3114 14.8947Z" fill="white" />
                                            </svg>
                                        </div>
                                        <div class="col">Professional &amp; Reliable</div>
                                    </div>
                                </div>
                                <div class="col-12 col-md">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <svg width="49" height="49" viewBox="0 0 49 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M26.5417 38.7917V36.6053C30.5913 36.026 34.0933 33.7491 36.3036 30.5185C41.8448 29.755 44.9167 24.955 44.9167 18.375V12.25C44.9167 9.99484 43.0885 8.16667 40.8333 8.16667H38.2454C37.5394 6.94616 36.2198 6.125 34.7083 6.125H14.2917C12.7803 6.125 11.4606 6.94616 10.7546 8.16667H8.16668C5.91151 8.16667 4.08334 9.99484 4.08334 12.25V18.375C4.08334 24.955 7.1552 29.755 12.6964 30.5185C14.9067 33.7491 18.4087 36.026 22.4583 36.6053V38.7917H20.4167C18.1615 38.7917 16.3333 40.6198 16.3333 42.875H32.6667C32.6667 40.6198 30.8385 38.7917 28.5833 38.7917H26.5417ZM8.16668 12.25H10.2083V22.4583C10.2083 23.3929 10.2981 24.3065 10.4693 25.1911C8.96349 23.8357 8.16668 21.5013 8.16668 18.375V12.25ZM38.7917 12.25V22.4583C38.7917 23.3929 38.702 24.3065 38.5307 25.1911C40.0365 23.8357 40.8333 21.5013 40.8333 18.375V12.25H38.7917ZM14.2917 22.4583V10.2083H34.7083V22.4583C34.7083 28.0962 30.1379 32.6667 24.5 32.6667C18.8621 32.6667 14.2917 28.0962 14.2917 22.4583Z" fill="white" />
                                            </svg>
                                        </div>
                                        <div class="col">Highly Trained Electricians</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-xl-none pt-4"><img src="images/background/about.webp" alt="Proconnect"></div>
    </section>

    <section class="section_3">
        <?php $section_3 = get_field('section_3') ?>
        <div class="container-fluid px-0">
            <div class="fs-64 font-articulat-heavy text-center lh-1 pb-5"><?= $section_3['title'] ?></div>

            <div id="section_3_work_slider">
                <?php
                if (have_rows('section_3')) :
                    while (have_rows('section_3')) : the_row();
                        if (have_rows('image_gallery')) :
                            while (have_rows('image_gallery')) : the_row();
                                $image = get_sub_field('image');
                ?>
                                <div class='slider_card'><img src="<?= $image['url'] ?>" alt=""></div>
                <?php
                            endwhile;
                        endif;
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </section>

    <section class="section_4 bg-light-grey">
        <?php $section_4 = get_field('section_4') ?>
        <div class="container">
            <div class="fs-64 font-articulat-heavy text-center lh-1 pb-5"><?= $section_4['heading'] ?></div>

            <div class="row justify-content-center g-3">
                <?php
                if (have_rows('section_4')) :
                    while (have_rows('section_4')) : the_row();
                        if (have_rows('why_us_cards')) :
                            while (have_rows('why_us_cards')) : the_row();
                                $icon = get_sub_field('icon');
                                $title = get_sub_field('title');
                                $description = get_sub_field('description');
                ?>
                                <div class="col-md-6 col-lg-4">
                                    <div class="section_4_card">
                                        <div>
                                            <img src="<?= $icon['url'] ?>" alt="<?= $icon['alt'] ?>">
                                            <div class="py-4 fs-30 font-articulat-heavy"><?= $title ?></div>
                                            <div class="fs-18 lh-1_67"><?= $description ?></div>
                                        </div>
                                    </div>
                                </div>
                <?php
                            endwhile;
                        endif;
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </section>

    <section class="section_5">
        <?php $section_5 = get_field('section_5') ?>
        <div class="container">
            <div class="fs-64 font-articulat-heavy text-center lh-1 pb-5"><?= $section_5['heading'] ?></div>

            <div class="row gx-3 gy-5">
                <?php
                if (have_rows('section_5')) :
                    while (have_rows('section_5')) : the_row();
                        if (have_rows('services_list')) :
                            while (have_rows('services_list')) : the_row();
                                $image = get_sub_field('image');
                                $title = get_sub_field('title');
                                $see_more = get_sub_field('see_more');
                                if (!$see_more) :
                ?>
                                    <div class="col-3">
                                        <div class="section_5_card">
                                            <div class="image"><img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>"></div>
                                            <div class="title"><?= $title ?></div>
                                        </div>
                                    </div>
                <?php
                                endif;
                            endwhile;
                        endif;
                    endwhile;
                endif;
                ?>
            </div>
            <div class="see_more pt-5" id="homepage_section_5_services_see_more">
                <div class="row gx-3 gy-5">
                    <?php
                    if (have_rows('section_5')) :
                        while (have_rows('section_5')) : the_row();
                            if (have_rows('services_list')) :
                                while (have_rows('services_list')) : the_row();
                                    $image = get_sub_field('image');
                                    $title = get_sub_field('title');
                                    $see_more = get_sub_field('see_more');
                                    if ($see_more) :
                    ?>
                                        <div class="col-3">
                                            <div class="section_5_card">
                                                <div class="image"><img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>"></div>
                                                <div class="title"><?= $title ?></div>
                                            </div>
                                        </div>
                    <?php
                                    endif;
                                endwhile;
                            endif;
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
            <button type='button' id="homepage_section_5_services_show_more" class="btn btn-primary mt-5 py-4 text-center text-white rounded-0 w-100 font-lato fs-24">See More</button>
        </div>
    </section>

    <?php get_template_part('parts/section', 'contactbanner'); ?>

    <section class="section_6 pb-8">
        <?php $section_6 = get_field('section_6') ?>
        <div class="container">
            <div class="heading fs-64 font-articulat-heavy text-center lh-1"><?= $section_6['heading'] ?></div>

            <div class="row py-5">
                <?php
                if (have_rows('section_6')) :
                    while (have_rows('section_6')) : the_row();
                        if (have_rows('social_images')) :
                            while (have_rows('social_images')) : the_row();
                                $image = get_sub_field('image');
                ?>
                                <div class='col-md-6 col-lg-3'>
                                    <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
                                </div>
                <?php
                            endwhile;
                        endif;
                    endwhile;
                endif;
                ?>
                <div class="col-md-6 col-lg-3">

                </div>
                <div class="col-md-6 col-lg-3">

                </div>
                <div class="col-md-6 col-lg-3">

                </div>
                <div class="col-md-6 col-lg-3">

                </div>
            </div>

            <div class="row justify-content-center">
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
    </section>
</div>

<?php get_footer(); ?>