<?php
/*
Template Name: Шаблон "Индивидуальный пошив"
*/
get_header();
?>


<div class="individual individual__main other-page">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="block__title">
                        <h1><?php the_field('personal__title', 9); ?></h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 anima__row" data-speed="1.2">
                    
                    <img src="<?php echo get_template_directory_uri() ?>/img/block-2__img.png" alt="" class="individual__img">
                </div>
                <div
                    class="col-xl-7 col-lg-7 col-md-7 col-sm-12 d-flex justify-content-center flex-column align-items-center">


                    <div class="block__separate"></div>
                    <div class="block__text"><?php the_field('individual__main__desc'); ?>
                    </div>
                    <div class="block__separate"></div>
                    <div class="animation-text__row">
                        <img src="<?php echo get_template_directory_uri() ?>/img/separate.gif" alt="" class="line__centre">
                        <img src="<?php echo get_template_directory_uri() ?>/img/text_01.gif" alt="" class="text__gif">
                        <!-- <div id="animation-text__01"></div> -->
                    </div>

                </div>

            </div>
        </div>
    </div>
    <div class="separate-line "></div>

    <div class="individual individual__block-02">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <div class="individual__block-02__wrap">
                        <div>
                            <div class="block__text-right">
                                <div class="block__text block__text-right__descr"><?php the_field('individual__main-02__desc-1'); ?> </div>
                                <div class="block__separate"></div>
                            </div>

                            <div class="block__text-left">
                                <div class="block__separate"></div>
                                <div class="block__text block__text-left__descr"><?php the_field('individual__main-02__desc-2'); ?>

                                </div>
                                <div class="block__separate"></div>
                            </div>
                            <div class="block__text-right">
                                <div class="block__separate"></div>
                                <div class="block__text block__text-right__descr"><?php the_field('individual__main-02__desc-3'); ?>
                                </div>
                                <div class="block__separate"></div>
                            </div>
                        </div>
                        <div class="individual__block-02__wrap-img">
                            <img src="<?php the_field('individual__main-03__img'); ?>" alt=""
                                class=" individual__main__img" >
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
