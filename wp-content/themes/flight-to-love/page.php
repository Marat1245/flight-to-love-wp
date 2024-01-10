<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Flight_to_love
 */

get_header();
?>


                <section class="hero">
                    <div class="bg">
                        <div></div>
                        <div class="bg__top"></div>
                        <div class="bg__center"></div>
                        <div class="bg__bottom"></div>
                        <div></div>
                    </div>
                    <div class="container">
                        <div class="row align-items-center">

                            <div class="col-12">
                                <div class="content">
                                    <div class="row-left ">
                                        <!-- <div class="top-flower"></div> -->
                                        <div class="block__separate"></div>
                                        	
									
												<h1><?php the_field('hero__title'); ?></h1>
												<h2><?php the_field('hero__subtitle'); ?></h2>
											
                                        

                                        <div class="block__separate"></div>
                                        <!-- <div class="bottom-flower"></div> -->
                                    </div>
                                    <div class="main__01__wrap" >
                                        <div  class="main__01" data-speed="1.2" style="background-image: url(<?php the_field('hero__img'); ?>)">

                                            <!-- <img src="<?php echo get_template_directory_uri() ?>/img/block-01__right-img.png"" alt=""> -->


                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </section>


                <div class=" separate-line">
                </div>

                <div class="individual">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="block__title">
									
										<h3><?php the_field('personal__title'); ?></h3>
									
                                   
                                    <div class="line line-under-title">
                                        <div class="line__left"></div>
                                        <img src="<?php echo get_template_directory_uri() ?>/img/separate.gif" alt="" class="line__centre">
                                        <div class="line__right"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-md-6  col-lg-5 col-sm-12 anima__row" data-speed="1.2">

                                <img src="<?php the_field('person__img'); ?>" alt="" class="individual__img main__02">
                            </div>
                            <div
                                class="col-xl-6 col-md-6 col-lg-7 col-sm-12 d-flex justify-content-center flex-column align-items-center">
                                <div class="animation-text__row">
                                    <img src="<?php echo get_template_directory_uri() ?>/img/separate.gif" alt="" class="line__centre">
                                    <img src="<?php echo get_template_directory_uri() ?>/img/text_01.gif" alt="" class="text__gif">

                                </div>

                                <div class="block__separate"></div>
								
										
										<div class="block__text"><?php the_field('person__desc'); ?></div>
										<div class="block__separate"></div>

										<div class="block__btn block__btn__margin-top">
											<span><a href="<?php the_field('person__link'); ?>">Подробнее</a>
											</span>
										</div>
									 
                                
                                
                            </div>

                        </div>
                    </div>
                </div>

                <div class="showcase">
                    <div class="bg"></div>
                    <div class="separate-line "></div>

                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="block__title">
                                    <h3>
									<?php the_field('showcase__title'); ?>
                                    </h3>
                                    <span><?php the_field('showcase__subtitle'); ?>
                                    </span>


                                    <div class="line line-under-title">
                                        <div class="line__left"></div>
                                        <img src="<?php echo get_template_directory_uri() ?>/img/separate.gif" alt="" class="line__centre">
                                        <div class="line__right"></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="content">
                                    <div class="dresses-bg">
                                        <div class="dress__01" data-speed="1.1" style="background-image: url(<?php the_field('showcase__img_1'); ?>)" ></div>
                                        <div class="dress__02" data-speed="1.2" style="background-image: url(<?php the_field('showcase__img_2'); ?>)" ></div>
                                        <div class="dress__03" data-speed=".9" style="background-image: url(<?php the_field('showcase__img_3'); ?>)" ></div>
                                        <div class="dress__04" data-speed=".8" style="background-image: url(<?php the_field('showcase__img_4'); ?>)" ></div>
                                        <div class="dress__05" data-speed="1.1" style="background-image: url(<?php the_field('showcase__img_5'); ?>)" ></div>
                                    </div>
                                    <span class="block__text">
									<?php the_field('showcase__desc'); ?>

                                    </span>
                                    <div class="block__btn">
                                        <!-- <img src="<?php echo get_template_directory_uri() ?>/img/block__btn__rose.png" alt="" class="rose__left"> -->
                                        <span><a href="<?php the_field('showcase__link'); ?>">Подробнее</a>
                                        </span>
                                        <!-- <img src="<?php echo get_template_directory_uri() ?>/img/block__btn__rose.png" alt="" class="rose__right"> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="animation-text__row">
                            <img src="<?php echo get_template_directory_uri() ?>/img/separate.gif" alt="" class="line__centre">
                            <img src="<?php echo get_template_directory_uri() ?>/img/text_04.gif" alt="" class="text__gif">
                            <!-- <div id="animation-text__04"></div> -->
                        </div>
                    </div>
                </div>

                <div class="project">
                    <div class="bg">
                        <div class="bg__top"></div>
                        <div class="bg__center"></div>
                        <div class="bg__bottom"></div>
                    </div>
                    <div class="separate-line "></div>

                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="block__title">
                                    <h3>
									<?php the_field('project__title'); ?>
                                    </h3>

                                    <div class="line line-under-title">
                                        <div class="line__left"></div>
                                        <img src="<?php echo get_template_directory_uri() ?>/img/separate.gif" alt="" class="line__centre">
                                        <div class="line__right"></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row center">
                            <div class="col-xl-6 col-md-6 col-mg-5 col-sm-12" data-speed="1.2">
                                <img class="project__img main__03" src="<?php the_field('project__img'); ?>" alt="">
                            </div>
                            <div class="col-xl-6 col-md-6 col-mg-7 col-sm-12">
                                <div class="content">
                                    <div class="block__separate"></div>
                                    <div class="block__text"><?php the_field('project__desc'); ?></div>
                                    <div class="block__separate"></div>

                                    <div class="block__btn block__btn__margin-top">
                                        <!-- <img src="<?php echo get_template_directory_uri() ?>/img/block__btn__rose.png" alt="" class="rose__left"> -->
                                        <span><a href="<?php the_field('project__link'); ?>">Подробнее</a>
                                        </span>
                                        <!-- <img src="<?php echo get_template_directory_uri() ?>/img/block__btn__rose.png" alt="" class="rose__right"> -->
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="animation-text__row">
                            <img src="<?php echo get_template_directory_uri() ?>/img/separate.gif" alt="" class="line__centre">
                            <img src="<?php echo get_template_directory_uri() ?>/img/text_02.gif" alt="" class="text__gif">
                            <!-- <div id="animation-text__02"></div> -->
                        </div>
                    </div>
                </div>

                <div class="celebrity">
                    <div class="separate-line "></div>

                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="content">
                                    <h3>
									<?php the_field('celebrity__title'); ?>


                                    </h3>


                                    <div class="line line-under-title">
                                        <div class="line__left"></div>
                                        <img src="<?php echo get_template_directory_uri() ?>/img/separate.gif" alt="" class="line__centre">
                                        <div class="line__right"></div>
                                    </div>
                                    <span class="block__text">
										<?php the_field('celebrity__desc'); ?>
                                    </span>


                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="dresses-bg " data-speed="1.2">
                                    <img src="<?php the_field('celebrity__img-01'); ?>" alt="" class="celebrity__img-01">
                                    <img src="<?php the_field('celebrity__img-02'); ?>" alt="" class="celebrity__img-02">
                                    <img src="<?php the_field('celebrity__img-03'); ?>" alt="" class="celebrity__img-03">
                                </div>


                                <div class="block__btn">
                                    <!-- <img src="<?php echo get_template_directory_uri() ?>/img/block__btn__rose.png" alt="" class="rose__left"> -->
                                    <span><a href="<?php the_field('celebrity__link'); ?>">Подробнее</a>
                                    </span>
                                    <!-- <img src="<?php echo get_template_directory_uri() ?>/img/block__btn__rose.png" alt="" class="rose__right"> -->
                                </div>
                            </div>
                        </div>
                        <!-- <div class="animation-text__03"></div> -->
                    </div>
                </div>
                <div class="model">
                    <div class="separate-line "></div>

                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="block__title">
                                    <h3><?php the_field('model__title'); ?></h3>
                                    <div class="line line-under-title">
                                        <div class="line__left"></div>
                                        <img src="<?php echo get_template_directory_uri() ?>/img/separate.gif" alt="" class="line__centre">
                                        <div class="line__right"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="content">
                                    <div class="imgs anima__row">
                                        <img src="<?php the_field('model__img'); ?>" alt="" class="main__05" data-speed="1.2">
                                    </div>
                                    <div class="block__separate"></div>
                                    <span class="block__text">
									<?php the_field('model__desc'); ?>
                                    </span>
                                    <div class="block__separate"></div>
                                    <div class="block__btn block__btn__margin-top">
                                        <!-- <img src="<?php echo get_template_directory_uri() ?>/img/block__btn__rose.png" alt="" class="rose__left"> -->
                                        <span><a href="<?php the_field('model__link'); ?>">Подробнее</a>
                                        </span>
                                        <!-- <img src="<?php echo get_template_directory_uri() ?>/img/block__btn__rose.png" alt="" class="rose__right"> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="animation-text__03"></div> -->

                    </div>
                </div>


				<?php get_template_part( 'template-parts/content-subscribe'); ?>
				
                <div class="shadow__bottom">
                    <div class="decorate-elemet  decorate-elemet__footer">
                        <div class="decorate-elemet__circule-left"></div>
                        <div class="decorate-elemet__circule-right"></div>
                    </div>
                </div>

<?php
// get_sidebar();
get_footer();
