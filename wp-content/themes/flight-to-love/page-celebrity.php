<?php
/*
Template Name: Шаблон "Ателье для звёзд"
*/
get_header();
?>


<div class="celebrity__main other-page">
        <div class="celebrity">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="content">
                            <h1><?php the_field('celebrity__title', 9); ?></h1>



                            <span class="block__text">
                            <?php the_field('celebrity__main__desc'); ?>
                            </span>


                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="dresses-bg " data-speed="1.2">
                            <img src="<?php the_field('celebrity__img-01', 9); ?>" alt="" class="celebrity__img-01">
                            <img src="<?php the_field('celebrity__img-02', 9); ?>" alt="" class="celebrity__img-02">
                            <img src="<?php the_field('celebrity__img-03', 9); ?>" alt="" class="celebrity__img-03">
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content text-center content__center">
                        <div class="line__left"></div>
                        <span class="block__text">
                        <?php the_field('celebrity__main__desc-02'); ?>

                        </span>
                        <div class="line__left"></div>
                    </div>

                </div>
            </div>
        </div>


        <div class="individual ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-6  col-lg-5 col-sm-12 anima__row">

                        <img src="<?php the_field('celebrity__main__block-02__img'); ?>" alt="" class="individual__img"
                            data-speed="1.2">
                    </div>
                    <div class="col-xl-6 col-md-6 col-lg-7 col-sm-12 ">
                        <div class="block__text-right">
                            <div class="animation-text__row celebrity__main__animation-text__row">
                                <img src="<?php echo get_template_directory_uri() ?>/img/separate.gif" alt="" class="line__centre">
                                <img src="<?php echo get_template_directory_uri() ?>/img/text_05.gif" alt="" class="text__gif">
                                
                            </div>

                            <div class="block__separate"></div>
                            <div class="block__text block__text-right__descr"><?php the_field('celebrity__main__block-02__desc'); ?>

                            </div>
                            <div class="block__separate"></div>
                        </div>



                    </div>

                </div>
            </div>

        </div>
    </div>

        <?php get_template_part( 'template-parts/content-subscribe'); ?>
        <?php get_template_part( 'template-parts/content-bottom-menu'); ?>
        

<?php
// get_sidebar();
get_footer();
