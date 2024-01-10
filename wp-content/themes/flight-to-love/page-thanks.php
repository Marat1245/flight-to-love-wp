<?php
/*
Template Name: Шаблон "Спасибо"
*/
get_header(); 
?>


<div class="showcase__main other-page thanks">
        <div class="showcase">
            <div class="bg"></div>

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="block__title">
                            <h1>
                                <?php the_field('thanks__title'); ?>
                            </h1>
                            <span><?php the_field('thanks__subtitle'); ?></span>

                        </div>
                    </div>
                </div>
                

            </div>

        </div>

        
        

    </div>

   



<?php
// get_sidebar();
get_footer();
