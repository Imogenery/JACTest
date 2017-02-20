<?php
/**
 * Template Name: Front Page Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<!-- Slick carousel place holder -->
<img class="carousel" src="<?= get_template_directory_uri() . '/dist/images/carousel-place-holder.jpg'; ?>">

<!--<div class="carousel">
	<div><img src="<?= get_template_directory_uri() . '/dist/images/photo.jpeg'; ?>"></div>
	<div><img src="<?= get_template_directory_uri() . '/dist/images/photo2.jpeg'; ?>"></div>
</div>-->

<div id="front-page-text-block">
	<div>
		<h4>WHAT WE DO</h4>
		<p>
		Pellentesque tempus, elit et vulputate egestas, quam justo tristique risus, sit amet laoreet turpis nunc non leo. Donec sollicitudin quam eu justo malesuada scelerisque. Donec pretium rhoncus feugiat. Donec quis ultrices arcu.
		</p>
	</div>
</div>

<!--<div id="front-page-services">
	<ul>
		<li><a>Public Relations + Issues Management</a></li>
		<li><a>Content + COmmerce Strategy</a></li>
		<li><a>Brand Storytelling</a></li>
		<li><a>Town Teaches</a></li>
		<li><a>Social Listening</a></li>
	</ul>
</div>-->



