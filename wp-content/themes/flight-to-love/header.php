<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Flight_to_love
 */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/bootstrap.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bona+Nova&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/main.css">
</head>

<body>
    <div class="menu__scroll">
        <div class="header__right">
            <div class="header__right__text">Меню</div>
            <div class="header__right__btn">
                <div class="header__btn__1"></div>
                <div class="header__btn__2"></div>
                <div class="header__btn__3"></div>
            </div>
        </div>
    </div>
    <div class="menu">
        <div class="menu__close"></div>
        <div class="menu__list">
        <a href="/../">Главная</a>
        <?php if(get_field('bottom__menu',"options")): ?>
        <?php while(has_sub_field('bottom__menu',"options")) : ?>
            
            <a href="<?php the_sub_field('bottom__menu__link',"options"); ?>"><?php the_sub_field('bottom__menu__name',"options"); ?></a>
           
                
        <?php endwhile; ?>
        <?php endif; ?>
           
        </div>
        <div>
            <div class="menu__number">
            <?php if( have_rows('contact-data',"options") ): ?>
            <?php while( have_rows('contact-data',"options") ): the_row(); ?>
                <a href="tel:<?php the_sub_field("phone-number","options"); ?>" class="number"><?php the_sub_field("phone-number","options"); ?></a>
            <?php endwhile; ?>
            <?php endif; ?> 
            </div>
            <div class="menu__link-media">
                <div class="subscribe__link-media">
                <?php if(get_field('social__row',"options")): ?>
                    <?php while(has_sub_field('social__row',"options")) : ?>
                        
                        <a href="<?php the_sub_field("social__link","options"); ?>" ><img src="<?php the_sub_field("social__img_burger","options"); ?>" alt=""></a>
                <?php endwhile; ?>
                <?php endif; ?>                    
                </div>
            </div>
        </div>


    </div>
	<div class="wrapper__gsap">
        <div class="content__gsap">
            <div class="main-block">
                <div class="menu__bg"></div>
                <header class="header">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="header__row">
                                    <div class="header__left">
                                        <div class="header__left__logo">
                                            <a href="/../">
											
											<img src="<?php the_field("logo","options"); ?>" >
                                            </a>
                                        </div>
                                        <div class="header__left__call-act"><?php the_field("logo__text","options"); ?>
                                        </div>
                                        <div class="header__left__icon">
										<?php if(get_field('social__row',"options")): ?>
										<?php while(has_sub_field('social__row',"options")) : ?>
											<a href="<?php the_sub_field("social__link","options"); ?>" class="header__left__icon">
												<img src="<?php the_sub_field("social__img","options"); ?>" alt="">
											</a>
											
										<?php endwhile; ?>
										<?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="header__right">
                                        <div class="header__right__text">Меню</div>
                                        <div class="header__right__btn">
                                            <div class="header__btn__1"></div>
                                            <div class="header__btn__2"></div>
                                            <div class="header__btn__3"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </header>


                <div class="decorate-elemet decorate-elemet__top">
                    <div class="decorate-elemet__circule-left"></div>
                    <div class="decorate-elemet__circule-right"></div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="line">
                                <div class="line__left"></div>
                                <img src="<?php echo get_template_directory_uri() ?>/img/separate.gif" alt="" class="line__centre">

                                <div class="line__right"></div>
                            </div>

                        </div>
                    </div>
                </div>













                <?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Flight_to_love
 */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bona+Nova&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/main.css">
</head>

<body>
    <div class="menu__scroll">
        <div class="header__right">
            <div class="header__right__text">Меню</div>
            <div class="header__right__btn">
                <div class="header__btn__1"></div>
                <div class="header__btn__2"></div>
                <div class="header__btn__3"></div>
            </div>
        </div>
    </div>
    <div class="menu">
        <div class="menu__close"></div>
        <div class="menu__list">
        <a href="/../">Главная</a>
        <?php if(get_field('bottom__menu',"options")): ?>
        <?php while(has_sub_field('bottom__menu',"options")) : ?>
            
            <a href="<?php the_sub_field('bottom__menu__link',"options"); ?>"><?php the_sub_field('bottom__menu__name',"options"); ?></a>
           
                
        <?php endwhile; ?>
        <?php endif; ?>
           
        </div>
        <div>
            <div class="menu__number">
            <?php if( have_rows('contact-data',"options") ): ?>
            <?php while( have_rows('contact-data',"options") ): the_row(); ?>
                <a href="tel:<?php the_sub_field("phone-number","options"); ?>" class="number"><?php the_sub_field("phone-number","options"); ?></a>
            <?php endwhile; ?>
            <?php endif; ?> 
            </div>
            <div class="menu__link-media">
                <div class="subscribe__link-media">
                <?php if(get_field('social__row',"options")): ?>
                    <?php while(has_sub_field('social__row',"options")) : ?>
                        
                        <a href="<?php the_sub_field("social__link","options"); ?>" ><img src="<?php the_sub_field("social__img_burger","options"); ?>" alt=""></a>
                <?php endwhile; ?>
                <?php endif; ?>                    
                </div>
            </div>
        </div>


    </div>
	<div class="wrapper__gsap">
        <div class="content__gsap">
            <div class="main-block">
                <div class="menu__bg"></div>
                <header class="header">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="header__row">
                                    <div class="header__left">
                                        <div class="header__left__logo">
                                            <a href="/../">
											
											<img src="<?php the_field("logo","options"); ?>" >
                                            </a>
                                        </div>
                                        <div class="header__left__call-act"><?php the_field("logo__text","options"); ?>
                                        </div>
                                        <div class="header__left__icon">
										<?php if(get_field('social__row',"options")): ?>
										<?php while(has_sub_field('social__row',"options")) : ?>
											<a href="<?php the_sub_field("social__link","options"); ?>" class="header__left__icon">
												<img src="<?php the_sub_field("social__img","options"); ?>" alt="">
											</a>
											
										<?php endwhile; ?>
										<?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="header__right">
                                        <div class="header__right__text">Меню</div>
                                        <div class="header__right__btn">
                                            <div class="header__btn__1"></div>
                                            <div class="header__btn__2"></div>
                                            <div class="header__btn__3"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </header>


                <div class="decorate-elemet decorate-elemet__top">
                    <div class="decorate-elemet__circule-left"></div>
                    <div class="decorate-elemet__circule-right"></div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="line">
                                <div class="line__left"></div>
                                <img src="<?php echo get_template_directory_uri() ?>/img/separate.gif" alt="" class="line__centre">

                                <div class="line__right"></div>
                            </div>

                        </div>
                    </div>
                </div>














