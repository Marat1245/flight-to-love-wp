<?php
/*
Template Name: Шаблон "Витрина готовых моделей"
*/
get_header();
?>


<div class="showcase__main other-page">
        <div class="showcase">
            <div class="bg"></div>

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="block__title">
                            <h1>
                                <?php the_field('showcase__title', 9); ?>
                            </h1>
                            <span><?php the_field('showcase__subtitle', 9); ?></span>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="content">
                            <div class="dresses-bg">
                            <div class="dress__01" data-speed="1.1" style="background-image: url(<?php the_field('showcase__img_1', 9); ?>)" ></div>
                            <div class="dress__02" data-speed="1.2" style="background-image: url(<?php the_field('showcase__img_2', 9); ?>)" ></div>
                            <div class="dress__03" data-speed=".9" style="background-image: url(<?php the_field('showcase__img_3', 9); ?>)" ></div>
                            <div class="dress__04" data-speed=".8" style="background-image: url(<?php the_field('showcase__img_4', 9); ?>)" ></div>
                            <div class="dress__05" data-speed="1.1" style="background-image: url(<?php the_field('showcase__img_5', 9); ?>)" ></div>
                            </div>
                            <span class="block__text">
                             <?php the_field('showcase__main__block-1__desc-1'); ?>

                            </span>
                        </div>
                    </div>
                </div>
                <div class="animation-text__row">
                    <img src="<?php echo get_template_directory_uri() ?>/img/separate.gif" alt="" class="line__centre">
                    <img src="<?php echo get_template_directory_uri() ?>/img/text_04.gif" alt="" class="text__gif">
                </div>

            </div>

        </div>

        <div class="container">
            <div class="row showcase__main__row">
                <div class="col-12">
                    <div class="line">
                        <div class="line__left"></div>
                        <img src="<?php echo get_template_directory_uri() ?>/img/separate.gif" alt="" class="line__centre">
                        <div class="line__right"></div>
                    </div>
                </div>
                <div class="col-12">
                    <h3 class="showcase__main__h3"><?php the_field('showcase__main__block-1__desc-2'); ?></h3>
                </div>
                <div class="col-12">
                    <div class="line">
                        <div class="line__left"></div>
                        <img src="<?php echo get_template_directory_uri() ?>/img/separate.gif" alt="" class="line__centre">
                        <div class="line__right"></div>
                    </div>
                </div>
            </div>

        </div>
        <div class="showcase__main__block-02__bg">

            <div class="bg">
                <div></div>
                <div class="bg__top"></div>
                <div class="bg__center"></div>
                <div class="bg__bottom"></div>
                <div></div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="project showcase__main__block-02">
                        <div class="container">
                            <div class="row center">
                                <div class="col-xl-6 col-md-6 col-mg-7 col-sm-12">
                                    <div class="content">
                                        <div class="animation-text__row">
                                            <img src="<?php echo get_template_directory_uri() ?>/img/separate.gif" alt="" class="line__centre">
                                            <img src="<?php echo get_template_directory_uri() ?>/img/text_06.gif" alt="" class="text__gif">


                                        </div>

                                    </div>

                                </div>
                                <div class="col-xl-6 col-md-6 col-mg-5 col-sm-12">
                                    <img data-speed="1.2" class="project__img"
                                        src="<?php the_field('showcase__main__block-2__img'); ?>" alt="">
                                </div>


                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="content text-center">
                            <div class="line__left"></div>
                            <span class="block__text">
                                <?php the_field('showcase__main__block-2__desc-1'); ?>

                            </span>
                            <div class="line__left"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Slider main container -->
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <?php if(get_field('showcase__main__lib')): ?>
                <?php while(has_sub_field('showcase__main__lib')) : ?>
                    <div class="swiper-slide slide__img " style="background-image: url(<?php the_sub_field('showcase__main__lib-img'); ?>);"></div>
                <?php endwhile; ?>
            <?php endif; ?>



        </div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>


    </div>


<?php get_template_part( 'template-parts/content-subscribe'); ?>
<?php get_template_part( 'template-parts/content-bottom-menu'); ?>


<?php
// get_sidebar();
get_footer();
