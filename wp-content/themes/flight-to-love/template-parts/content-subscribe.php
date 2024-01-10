<?php
/**
 * Template part for subscribe
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Flight_to_love
 */

?>

<div class="subscribe">
	<div class="container">
		<div class="">
			<div class="content">
				<div class="decorate-elemet">
					<div class="decorate-elemet__circule-left"></div>
					<div class="decorate-elemet__circule-right"></div>
				</div>
				<div class="col content">
					<div class="separate-line "></div>
					<div class="subscribe__content__row">
						<div class="subscribe__content" data-speed="1.2">
							<div class="text">Переходите в соц сети и
								подписывайтесь</div>
							<div class="subscribe__link-media">
								<div class="subscribe__link-media">
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
						<div class="animation-text__row">
							<img src="<?php echo get_template_directory_uri() ?>/img/separate.gif" alt="" class="line__centre">
							<img src="<?php echo get_template_directory_uri() ?>/img/text_03.gif" alt="" class="text__gif">
							<!-- <div id="animation-text__03"></div> -->
						</div>
					</div>

					<div class="separate-line white-line__bottom"></div>
				</div>



				<div class="decorate-elemet decorate-elemet__bottom">
					<div class="decorate-elemet__circule-left"></div>
					<div class="decorate-elemet__circule-right"></div>
				</div>
			</div>

		</div>
	</div>

</div>
