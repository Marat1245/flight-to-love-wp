<?php
/*
Template Name: Шаблон "Образ «под ключ»"
*/
get_header();
?>


<div class="model__main other-page">
                <div class="model">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="block__title">
                                    <h1><?php the_field('model__title', 9); ?></h1>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="content">
                                    <div class="imgs anima__row">

                                        <div class="imgs anima__row">
                                            <img src="<?php the_field('model__img', 9); ?>" alt="" class="main__05" data-speed="1.2">
                                        </div>
                                    </div>
                                    <div class="block__separate"></div>
                                    <span class="block__text">
                                    <?php the_field('model__main__desc'); ?>
                                    </span>
                                    <div class="block__separate"></div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="project__main__block-03 model__main__block-02">
                <div class="bg">

                    <div class="bg__top"></div>
                    <div class="bg__center"></div>
                    <div class="bg__bottom"></div>

                </div>
                <div class="container">
                    <div class="row center">
                        <div class="col-12">
                            <div class="separate-line"></div>
                        </div>

                        <div class="col-12">
                            <div class="flower__anima__row">
                                <img data-speed="1.1" src="<?php the_field('model__main__block-02__img'); ?>" alt=""
                                    class="individual__img">
                            </div>


                        </div>
                    </div>
                    <div class="row">

                        <div class="col-12">
                            <div class="content text-center">

                                <div class="line__left"></div>
                                <span class="block__text">
                                <?php the_field('model__main__block-02__desc'); ?>
                                </span>
                                <div class="line__left"></div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <div class="project model__main__block-03">
                <div class="container">
                    <div class="row center">
                        <div class="col-xl-6 col-md-6 col-mg-7 col-sm-12">
                            <div class="content project__main__main-text">
                                <div class="block__separate"></div>
                                <div class="block__text"><?php the_field('model__main__block-03__desc'); ?>

                                </div>
                                <div class="block__separate"></div>
                                <div class="animation-text__row">

                                    <img src="<?php echo get_template_directory_uri() ?>/img/separate.gif" alt="" class="line__centre">
                                    <img src="<?php echo get_template_directory_uri() ?>/img/text_02.gif" alt="" class="text__gif">
                                    
                                </div>
                            </div>

                        </div>
                        <div class="col-xl-6 col-md-6 col-mg-5 col-sm-12">
                            <img data-speed="1.2" class="project__img" src="<?php the_field('model__block-03__img'); ?>" alt="">
                        </div>


                    </div>

                </div>
            </div>


        <?php get_template_part( 'template-parts/content-subscribe'); ?>
        <?php get_template_part( 'template-parts/content-bottom-menu'); ?>
       

<?php
// get_sidebar();
get_footer();
