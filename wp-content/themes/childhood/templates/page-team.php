<?php 
    /*
    Template Name: Наша команда
    */
?>

<?php
    get_header();
?>

<div class="specialists" >
    <div class="container">
        <div class="title"><?php the_field('specialists_title', 2); ?></div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div >
                    <?php
                        $image = get_field('specialists_img', 2);

                        if (!empty($image)) : ?>
                            <img
                            class="specialists__img"
                            src="<?php echo $image['url']; ?>"
                            alt="<?php echo $image['alt']; ?>">
                        <?php endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    get_footer();
?>