<?php /* Template Name: page-home.php */ ?> 

<?php get_header(); ?>
<body>
	<section class="slider">
	<?php
		$args = array( 'post_type' => "Recettes", 'posts_per_page' => 5 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
			    the_title();
			    the_post_thumbnail('medium');
			    the_excerpt();
			endwhile;
		?>
	</section>        
                  
	<div class="container">
		<section class="moment">
			<div class="row">
			<?php echo get_the_term_list( $post->ID, 'type', 'Matinée: ', ', ' ); ?>



				
				<!-- <article class="col-xs-12 col-sm-4 col-md-4 col-lg-4 morning">	
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
				</article> -->
			</div>
		</section>
		
		<div class="clear"></div>

			<div class="content_home">
					<section class="col-md-6 col-lg-6 recipe">
						<h2>La recette du jour !</h2>
						<p class="content_recipe">
							<?php my_get_recipee_post(); ?>
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