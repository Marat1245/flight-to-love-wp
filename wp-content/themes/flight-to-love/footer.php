<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Flight_to_love
 */

?>
<div class="shadow__bottom">
    <div class="decorate-elemet  decorate-elemet__footer">
        <div class="decorate-elemet__circule-left"></div>
        <div class="decorate-elemet__circule-right"></div>
    </div>
</div>
<footer>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-sm-12 col-md-6">
                                <div class="content">
                                    <span class="text">
                                        Оставить заявку
                                    </span>


                                    <form action="<?php echo get_template_directory_uri() ?>/mail.php" method="POST" id="contact" type="submit">
                                        <input class="v_name" name="user_name" type="text" value="" placeholder="Ваше имя">
                                        <input class="v_tel" minlength="16" minlength="16" required name="user_phone"
                                            type="text" value="" placeholder="Телефон">
                                        <div class="center row__checkbox">
                                            <input type="checkbox" id="" name="checkbox" checked class="checkbox">
                                            <label for="checkbox" class="for-checkbox">Согласие
                                                на <a href="<?php echo get_template_directory_uri() ?>/page-politika-konfidencialnosti.php">обработку персональных данных </a></label>
                                        </div>
                                        <div class="separate-line "></div>
                                        <button type="submit" id="callback-send" class="btn">Отправить</button>
                                        <div class="separate-line "></div>
                                    </form>

                                   

                                </div>
                            </div>
                            <div class="col-xl-6 col-sm-12 col-md-6">
                                <div class="content footer__contact">
                                    <span class="text">
                                        Наши контакты
                                    </span>
                                    
                                   
									<?php if( have_rows('contact-data',"options") ): ?>
									<?php while( have_rows('contact-data',"options") ): the_row(); ?>
										<span class="footer__contact-name"><?php the_sub_field("name","options"); ?></span>
										<a href="tel:<?php the_sub_field("phone-number","options"); ?>" class="number"><?php the_sub_field("phone-number","options"); ?></a>

									<?php endwhile; ?>
									<?php endif; ?> 

                                    <span class="social-desc">
										<?php the_field("logo__text","options"); ?>
                                    </span>
                                    <div class="row__social">
									<?php if(get_field('social__row',"options")): ?>
										<?php while(has_sub_field('social__row',"options")) : ?>
											<a href="<?php the_sub_field("social__link","options"); ?>">
												<img src="<?php the_sub_field("social__img","options"); ?>">
											</a>
									<?php endwhile; ?>
									<?php endif; ?>
                                       
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl content">
                                <span class="copyright">© 2022 Flight to Love</span>
                            </div>
                        </div>
                    </div>

                </footer>
            </div>
        </div>

</body>

<script defer src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.10.2/lottie.min.js"
    integrity="sha512-fTTVSuY9tLP+l/6c6vWz7uAQqd1rq3Q/GyKBN2jOZvJSLC5RjggSdboIFL1ox09/Ezx/AKwcv/xnDeYN9+iDDA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script defer src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

<!-- маска для обратной формы -->

<script defer src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.min.js"
    type="text/javascript"></script>
<!-- маска для обратной формы END-->
<script defer src="<?php echo get_template_directory_uri() ?>/libs/gsap/gsap.min.js"></script>
<script defer src="<?php echo get_template_directory_uri() ?>/libs/gsap/ScrollTrigger.min.js"></script>
<script defer src="<?php echo get_template_directory_uri() ?>/libs/gsap/ScrollSmoother.min.js"></script>



<script defer src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- <script defer src="<?php echo get_template_directory_uri() ?>/js/animations_all.js"></script> -->
<script defer src="<?php echo get_template_directory_uri() ?>/js/main.js"> </script>

</html>
