<?php
/*
 * Template Name: About
 * The about us
 *
 */
get_header();
get_template_part('parts/section', 'banner');
?>

<div class="about_page">
    <section class="section_1">
        <?php $section_1 = get_field('section_1') ?>
        <div class="container-fluid px-0">
            <div class="row align-items-center">
                <div class="col-auto">
                    <img src="<?= $section_1['image']['url'] ?>" alt="<?= $section_1['image']['url'] ?>">
                </div>
                <div class="col">
                    <div class="text-white fs-24 lh-1_67 ps-xl-6 pe-xl-9"><?= $section_1['description'] ?></div>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('parts/section', 'services'); ?>

</div>

<?php get_footer(); ?>