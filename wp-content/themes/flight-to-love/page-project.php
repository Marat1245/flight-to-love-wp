<?php
/*
Template Name: Шаблон "Проектные заказы"
*/
get_header();
?>


<div class="project__main other-page">
                <div class="project">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="block__title">
                                    <h1><?php the_field('project__title', 9); ?></h1>
                                </div>
                            </div>
                        </div>
                        <div class="row center">
                            <div class="col-xl-6 col-md-6 col-mg-5 col-sm-12">
                                <img class="project__img" src="<?php the_field('project__img', 9); ?>" alt="" data-speed="1.2">
                            </div>
                            <div class="col-xl-6 col-md-6 col-mg-7 col-sm-12">
                                <div class="content project__main__main-text">
                                    <div class="block__separate"></div>
                                    <div class="block__text"> <?php the_field('project__main__desc'); ?> </div>
                                    <div class="block__separate"></div>
                                </div>

                            </div>

                        </div>
                        <div class="animation-text__row">
                            <img src="<?php echo get_template_directory_uri() ?>/img/separate.gif" alt="" class="line__centre">
                            <img src="<?php echo get_template_directory_uri() ?>/img/text_02.gif" alt="" class="text__gif">
                            
                        </div>
                    </div>
                </div>
                <div class="separate-line "></div>
                <div class="project project__main__block-02">
                    <div class="container">
                        <div class="row center">
                            <div class="col-xl-6 col-md-6 col-mg-7 col-sm-12">
                                <div class="content">
                                    <div class="block__separate"></div>
                                    <div class="block__text"><?php the_field('project__block-2__desc-1'); ?> 
                                    </div>
                                    <div class="block__separate"></div>

                                    <div class="block__text"><?php the_field('project__block-2__desc-2'); ?> 
                                    </div>
                                    <div class="block__separate project__main__separate"></div>
                                </div>

                            </div>
                            <div class="col-xl-6 col-md-6 col-mg-5 col-sm-12">
                                <img class="project__img" src="<?php the_field('project__block-2__img'); ?>" alt="" data-speed="1.1">
                            </div>


                        </div>

                    </div>
                </div>
                <div class="project__main__block-03">
                    <div class="container">
                        <div class="row center">
                            <div class="col-12">
                                <div class="line">

                                    <div class="line__left"></div>
                                    <img src="<?php echo get_template_directory_uri() ?>/img/separate.gif" alt="" class="line__centre">
                                    <div class="line__right"></div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="flower__anima__row" data-speed="1.2">
                                    <img src="<?php the_field('project__block-3__img'); ?> " alt="" class="individual__img">
                                </div>


                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="content text-center">
                                    <div class="line__left"></div>
                                    <span class="block__text">
                                    <?php the_field('project__block-3__desc-1'); ?> 


                                    </span>
                                    <div class="line__left"></div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="project__main__bg-left"></div>
                <div class="project__main__bg-right"></div>
            </div>


        <?php get_template_part( 'template-parts/content-subscribe'); ?>
        <?php get_template_part( 'template-parts/content-bottom-menu'); ?>
       

<?php
// get_sidebar();
get_footer();
