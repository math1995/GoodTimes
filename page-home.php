<?php /* Template Name: page-home.php */ ?> 

<?php get_header(); ?>
<body>
	<section class="slider"></section>
	<div class="container">
		<section class="moment col-xs-12">
				<article class="col-xs-4 col-md-4 morning">
					<p>Matinée</p>
				</article>

				<article class="col-xs-4 col-md-4 day">
					<p>Journée</p>
				</article>

				<article class="col-xs-4 col-md-4 night">
					<p>Soirée</p>
				</article>
		</section>
		<div class="clear"></div>

		<div class="content_home">
				<section class="recetteduj">
					<h2>La recette !</h2>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas orci ante, porta quis mollis a, efficitur
						non risus. Nulla interdum leo at massa cursus, sed eleifend sapien mollis. Mauris commodo at nunc ac consequat. 
						Integer rutrum arcu justo, eget luctus lacus mattis egestas. Sed suscipit venenatis ante, at molestie ligula accumsan non. 
						Suspendisse lectus dolor, tincidunt eu tortor laoreet, faucibus porta ipsum. Proin aliquam ultricies interdum. Aenean 
						fringilla sapien sit amet leo sagittis, vel vehicula ex placerat. Donec consectetur sapien id gravida rutrum.
						at lorem tempor, tempus odio ut, interdum est. Nulla sit amet nisl mollis, fringilla sapien non, euismod ligula.
					</p>
					<a href="#">
						<div class="moreread">
							<p>Lire la suite</p>
						</div>
					</a>
				</section>
				<section class="more_consult">
					<h2>Les plus consultés</h2>
					<article>
						<img src="http://pipsum.com/80x80.jpg"/>
						<h3>Titre</h3>
						<div class="clear">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas orci ante, porta quis mollis a, efficitur
							non risus. Nulla interdum leo at massa cursus, sed eleifend sapien mollis. 
						</p>
					</article>
					<article class="change">
						<img src="http://pipsum.com/80x80.jpg"/>
						<h3>Titre</h3>
						<div class="clear">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas orci ante, porta quis mollis a, efficitur
							non risus. Nulla interdum leo at massa cursus, sed eleifend sapien mollis. 
						</p>
					</article>
				</section>
		</section>
	</div>
</body>

<?php get_footer(); ?>