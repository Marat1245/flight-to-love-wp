<?php
/**
 * Template part for buttom menu
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Flight_to_love
 */

?>

<div class="bottom__menu">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="block__title">
                                <h3>
                                    Остальные услуги
                                </h3>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="bottom__menu__row">
							<?php if(get_field('bottom__menu',"options")): ?>
							<?php while(has_sub_field('bottom__menu',"options")) : ?>
								<?php if(get_sub_field('bottom__menu__link',"options") != get_permalink()){ ?> 
									
								<a class="bottom__menu__item" href="<?php the_sub_field('bottom__menu__link',"options"); ?>" data-speed="1.1">
                                    <img src="<?php echo get_template_directory_uri() ?>/img/separate.gif" alt="" class="line__centre">
                                    <span><?php the_sub_field('bottom__menu__name',"options"); ?></span>
                                    <img src="<?php the_sub_field('bottom__menu__img',"options"); ?>" alt="">
                                    <div class="bottom__menu__btn">подробнее</div>
                                </a>

									<?php	} ?> 
								
								
							<?php endwhile; ?>
							<?php endif; ?>

                              
                            </div>

                        </div>
                    </div>
                </div>
            </div>
