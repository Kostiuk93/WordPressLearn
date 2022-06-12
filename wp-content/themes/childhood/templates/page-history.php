<?php 
    /*
    Template Name: Наша история
    */
?>

<?php
    get_header();
?>

<div class="aboutus">
    <div class="container">
        <h1 class="title"><?php the_field('aboutus_title', 2); ?></h1>
        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                <?php the_field('aboutus_subtitle1', 2); ?>
                </div>
                <div class="aboutus__text">
                <?php the_field('aboutus_descr1', 2); ?>
                </div>
            </div>
            <div class="col-lg-6">
                <?php
                    $image = get_field('aboutus_img1', 2);

                    if (!empty($image)) : ?>
                        <img
                        class="aboutus__img"
                        src="<?php echo $image['url']; ?>"
                        alt="<?php echo $image['alt']; ?>">
                    <?php endif;
                ?>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <?php
                    $image = get_field('aboutus_img2', 2);

                    if (!empty($image)) : ?>
                        <img
                        class="aboutus__img"
                        src="<?php echo $image['url']; ?>"
                        alt="<?php echo $image['alt']; ?>">
                    <?php endif;
                ?>
            </div>
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('aboutus_subtitle2', 2); ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('aboutus_descr2', 2); ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('aboutus_subtitle3', 2); ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('aboutus_descr3', 2); ?>
                </div>
            </div>
            <div class="col-lg-6">
                <?php
                    $image = get_field('aboutus_img3', 2);

                    if (!empty($image)) : ?>
                        <img
                        class="aboutus__img"
                        src="<?php echo $image['url']; ?>"
                        alt="<?php echo $image['alt']; ?>">
                    <?php endif;
                ?>
            </div>
        </div>
    </div>
</div>

<?php
    get_footer();
?>