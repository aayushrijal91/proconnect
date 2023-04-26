<section class="servicesList">
        <?php $services = get_field('services', 'options') ?>
        <div class="container">
            <div class="fs-64 font-articulat-heavy text-center lh-1 pb-5"><?= $services['heading'] ?></div>

            <div class="row gx-3 gy-5">
                <?php
                if (have_rows('services', 'options')) :
                    while (have_rows('services', 'options')) : the_row();
                        if (have_rows('services_list', 'options')) :
                            while (have_rows('services_list', 'options')) : the_row();
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
            <div class="see_more pt-5" id="services_see_more">
                <div class="row gx-3 gy-5">
                    <?php
                    if (have_rows('services', 'options')) :
                        while (have_rows('services', 'options')) : the_row();
                            if (have_rows('services_list', 'options')) :
                                while (have_rows('services_list', 'options')) : the_row();
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
            <button type='button' id="services_show_more" class="btn btn-primary mt-5 py-4 text-center text-white rounded-0 w-100 font-lato fs-24">See More</button>
        </div>
    </section>