<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package PMM
 */

get_header();
?>

<div class="continer px-4 lg:px-10 auto py-24 bg-gradient-to-r from-slate-900 to-gray-900 font-fot">
	<div class="container mx-auto text-slate-100 py-10">
		<h1 class="text-6xl text-slate-200 font-bold uppercase">Today Live</h1>
		<p>Live football reporting every big and small match of all tournaments around the world at 
			<a class="text-yellow-500">zxotips.com</a></p>
	</div>
<div class="lg:grid lg:grid-cols-2 lg:gap-10 flex flex-col gap-6 relative">
<?php

if (have_posts()) :
	while (have_posts()) : the_post(); ?>
	<div class="flex lg:h-64 h-48 justify-center ring-2 ring-slate-600 rounded-2xl 
	bg-white/20 lg:px-4 lg:py-4 flex-col backdrop-blur-md bg-gradient-to-r
	 from-bg-color to-text-color">
		<div class="flex justify-center text-font-color absolute top-0 right-0 mt-3
		 text-sm bg-slate-600 px-2 py-1 mr-2 rounded-full">
			<p class="text-xs lg:text-base"><?php echo date(get_option('date_format')); ?></p>
			<p class="px-4 animate-pulse lg:text-base text-xs">( <?php the_field('date'); ?> )</p>
		 </div>
		<div class="flex justify-center
			drop-shadow-lg">
		 <div class="flex items-center lg:gap-16 gap-10">
			<div class="flex flex-col gap-4 items-center">
				<img class="lg:w-16 w-10 object-cover" src="<?php the_field('home') ?>" alt="">
				<h2 class="text-font-color text-base lg:text-2xl"><?php the_field('home_team') ?></h2>
			</div>
			<span class="text-font-color text-sm lg:text-2xl font-bold">VS</span>
			<div class="flex flex-col items-center gap-4">
				<img class="object-cover lg:w-16 w-10" src="<?php the_field('away') ?>" alt="">
				<h2 class="text-font-color text-base lg:text-2xl"><?php the_field('away_team') ?></h2>
			</div>
		 </div>
		</div>
		<div class="absolute bottom-0 right-0 mr-6">
				<a class="ml-2 bg-bg-button text-font-color hover:bg-black 
				uppercase lg:py-3 lg:px-6 py-2 px-3 lg:text-base text-sm rounded-lg transition duration-700 ease-in-out" href="<?php the_permalink() ?>">Watch Now</a>
				<a class=" text-font-color py-2 px-3 lg:py-3 lg:px-6 lg:text-base text-sm hover:bg-blue-700 bg-blue-900
				 rounded-lg transition duration-700" href="https://1xbet.com/en">1xbet</a>
				 <a class=" text-font-color py-2 px-3 lg:py-3 lg:px-6 lg:text-base text-sm bg-sky-600
				 rounded-lg" href="<?php the_permalink() ?>">TIPS</a>
			</div>
	</div>
	<?php endwhile;

	else :
		echo '<p>There are no posts!</p>';

	endif;

	?>
	</div>
</div>
<?php
get_footer();
