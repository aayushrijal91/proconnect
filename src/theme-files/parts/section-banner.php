<?php
get_template_part('parts/section', 'nav');

// if (!empty(get_field('banner')['heading']) && !is_home()) {
//     $heading = get_field('banner')['heading'];
//     $description = get_field('banner')['description'];
// } elseif (is_home()) {
//     $heading = "Our Blog";
//     $sub_heading = "Our team will assist you in researching, organising, and negotiating loans on your behalf. View our services below.";
// }
?>
<?php
if (!is_404()) :
    $banner = get_field('banner');
?>
    <header class="subpage_banner position-relative">
    <div class="background_image position-absolute h-100"><img src=<?= $banner['background_image']['url'] ?> alt=<?= $banner['background_image']['alt'] ?> class='h-100' /></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="fs-80 lh-1 fw-800 heading"><?= $banner['heading'] ?></div>
                    <div class="description fs-22">
                        <?= $banner['description'] ?>
                    </div>
                </div>
            </div>
        </div>
    </header>
<?php endif; ?>