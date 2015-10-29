<?php /* Template Name: single.php */ ?>


<?php get_header(); ?>
</div>
</div>

<div class="headerCategory">
    <div class="headerPic"></div>
    <div class="navbarCategory">
        <div class="container">
        <h2>Soirées > Soirée Cocktail</h2>
        </div>
    </div>
    </div>
</div>

<div class="container">
    <?php if (have_post() : )
            while (have_post($post)) ?>
    <div class="singleLeft col-xs-12 col-md-9">
        <section class="singleEventItem">
            <div class="singleEventHeader">
                <h2><?php the_title(); ?></h2>
            </div>
            <div class="singleEventContent">
                <div class="singleEventThumbnail col-xs-12 col-md-3">
                    <div class="bgimage"></div>
                </div>
                <div class="singleEventInfos col-xs-12 col-md-9">
                    <ul class="ingredients col-xs-6">
                        <span>Ingrédients :</span>
                        <?php while (have_ingredients() :) 
                        ?>
                        <li><?php echo tag(); ?></li>
                        <?php endwhile; ?>
                    </ul>
                    <ul class="metadata col-xs-6">
                        <li><span class="red">Postée le : </span><?php echo get_the_date(); ?></li>
                        <li><span class="red">Préparation : </span><?php the_field('time_of_preparation'); ?></li>
                        <li><span class="red">Pour : </span><?php echo "De " . nbr_person1() . "à" . nbr_person2() . "personnes"?></li>
                        <li><span class="red">Difficulté :</span><?php the_field('difficulty'); ?>
                    </ul>
                </div>
                <div class="singleEventTxt col-xs-12">
                    <p><?php the_excerpt(); ?></p>
                </div>
            </div>   
        <div class="clear"></div>
        </section>
    <?php endif; ?>
    <?php endwhile; ?>
    </div>

   <section class="sidebar singleSidebar col-xs-12 col-md-3">
        <div class="searchbar">
            <input type="text" class="searchbarContent" placeholder="&#xf002;" style="font-family:FontAwesome;">
            </input>
        </div>
        <div class="categoriesContent">
            <h3>Recettes similaires</h3>
            <ul class="categoriesList">
                <?php
                $args = array(
                    'title',
                    'thumbnail');
                $the_query = new WP_Query($args);

                if (post_type('projet') :
                    while (have_post($the_query) <= 4) ?>

                <li class="categoriesItem"><img src="http://lorempixel.com/40/40"><a href=""><?php the_title(); ?></a></li>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
        </div>
    </section>
