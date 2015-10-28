<?php /* Template Name: page-home.php */ ?> 

<?php get_header(); ?>
<body>
	<section class="slider">
		<?php
		//$args = array('post', 'posts' => 3);
        //$the_query = new WP_Query($args); ?>
		 <?php //if ($the_query->have_posts()) :
		// 	  	while($the_query->have_posts()) : $the_query->the_post();
		// 	  		the_post_thumbnail('homepage-slider');
		// 	   endwhile;
		//    endif; wp_reset_postdata(); 
		?>
	</section>        
                  
	<div class="container">
		<section class="moment">
			<div class="row">
			// <?php
			// 	$args = array( 'hide_empty' => 0 );

			// 	$terms = get_terms( 'my_term', $args );
			// 	if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
			// 	    $count = count( $terms );
			// 	    $i = 0;
			// 	    $term_list = '<p class="my_term-archive">';
			// 	    foreach ( $terms as $term ) {
			// 	        $i++;
			// 	    	$term_list .= '<a href="' . get_term_link( $term ) . '" title="' . sprintf( __( 'View all post filed under %s', 'my_localization_domain' ), $term->name ) . '">' . $term->name . '</a>';
			// 	    	if ( $count != $i ) {
			// 	            $term_list .= ' &middot; ';
			// 	        }
			// 	        else {
			// 	            $term_list .= '</p>';
			// 	        }
			// 	    }
			// 	    echo $term_list;
			// 	}

				?>
				
				<article class="col-xs-12 col-sm-4 col-md-4 col-lg-4 morning">	
					<a href="#">
						<img class="img-circle" src="http://pipsum.com/200x200.jpg"></img>
						<p>Matinée</p>
					</a>
				</article>
				<article class="col-xs-12 col-sm-4 col-md-4 col-lg-4 day">
					<a href="#">
						<img class="img-circle" src="http://pipsum.com/200x200.jpg"></img>
						<p>Journée</p>
					</a>
				</article>

				<article class="col-xs-12 col-sm-4 col-md-4 col-lg-4 night">
					<a href="#">
						<img class="img-circle" src="http://pipsum.com/200x200.jpg"></img>
						<p>Soirée</p>
					</a>
				</article>
			</div>
		</section>
		
		<div class="clear"></div>

			<div class="content_home">
					<section class="col-md-6 col-lg-6 recipe">
						<h2>La recette du jour !</h2>
						<p class="content_recipe">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas orci ante, porta quis mollis a, efficitur
							non risus. Nulla interdum leo at massa cursus, sed eleifend sapien mollis. Mauris commodo at nunc ac consequat. 
							Integer rutrum arcu justo, eget luctus lacus mattis egestas.
						</p>

						<div class="moreread">
							<a href="#">
								<p>Lire la suite</p>
							</a>
						</div>

					</section>

					<section class="col-md-6 col-lg-6 more_consult">


						<h2>Les plus consultés</h2>
							<a href="#">
								<article>
									<div class="left_picture">
										<img src="http://pipsum.com/80x80.jpg"/>
									</div>
									<div class="right_text">
										<h3>Titre</h3>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit.  
										</p>
									</div>
								</article>
							</a>
							<a href="#">	
								<article class="change">
									<div class="left_picture">
										<img src="http://pipsum.com/80x80.jpg"/>
									</div>
									<div class="right_text">
										<h3>Titre</h3>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
										</p>
									</div>
								</article>
							</a>
							<a href="">
								<article>
									<div class="left_picture">
										<img src="http://pipsum.com/80x80.jpg"/>
									</div>
									<div class="right_text">
										<h3>Titre</h3>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit.  
										</p>
									</div>
								</article>
							</a>
							<a href="#">
								<article class="change">
									<div class="left_picture">
										<img src="http://pipsum.com/80x80.jpg"/>
									</div>
									<div class="right_text">
										<h3>Titre</h3>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
										</p>
									</div>
								</article>
							</a>
					</section>
			</div>
		</div>
</body>

<?php get_footer(); ?>