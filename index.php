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

<div class="continer px-4 lg:px-10 auto xl:px-24 py-10 lg:py-24 bg-gradient-to-r from-slate-900 to-gray-900 font-fot">
	<div class="container mx-auto text-slate-100 py-4 lg:py-10">
		<h1 class="lg:text-6xl text-xl text-slate-200 font-bold uppercase">Today Live</h1>
		<p>Live football reporting every big and small match of all tournaments around the world at 
			<a class="text-yellow-500">zxotips.com</a></p>
	</div>
<div class="lg:grid lg:grid-cols-2 lg:gap-10 flex flex-col gap-6 relative">
<?php

if (have_posts()) :
	while (have_posts()) : the_post(); ?>
	<div class="flex lg:h-64 h-48 justify-center ring-2 ring-slate-600 rounded-2xl 
	bg-white/20 lg:px-4 lg:py-4 flex-col backdrop-blur-md bg-gradient-to-r
	 from-bg-color to-text-color cursor-pointer hover:bg-black transition duration-300 ease-in-out">
		<div class="flex justify-center text-font-color absolute top-0 right-0 mt-3
		 text-sm bg-slate-600 px-2 py-1 mr-2 rounded-full">
			<p class="text-xs lg:text-base"><?php echo date(get_option('date_format')); ?></p>
			<p class="px-4 animate-pulse lg:text-base text-xs uppercase">( <?php the_field('time'); ?> )</p>
		 </div>
		<div class="flex justify-center
			drop-shadow-lg">
		 <div class="flex items-center lg:gap-16 gap-10">
			<div class="flex flex-col gap-4 items-center">
				<img class="lg:w-auto w-10 object-cover" src="<?php the_field('home') ?>" alt="">
				<h2 class="text-font-color text-base lg:text-base xl:text-2xl"><?php the_field('home_team') ?></h2>
			</div>
			<span class="text-font-color text-sm lg:text-2xl font-bold">VS</span>
			<div class="flex flex-col items-center gap-4">
				<img class="object-cover lg:w-auto w-10" src="<?php the_field('away') ?>" alt="">
				<h2 class="text-font-color text-base lg:text-base xl:text-2xl"><?php the_field('away_team') ?></h2>
			</div>
		 </div>
		</div>
		<div class="absolute bottom-0 right-0 mr-6">
				<a class="ml-2 bg-bg-button text-font-color hover:bg-black 
				uppercase lg:py-3 lg:px-6 py-2 px-3 lg:text-base text-sm rounded-lg 
				transition duration-700 ease-in-out" href="<?php the_permalink() ?>">Watch Now</a>
				<a class=" text-font-color py-2 px-3 lg:py-3 lg:px-6 lg:text-base text-sm hover:bg-blue-700 bg-blue-900
				 rounded-lg transition duration-700" href="https://1xbet.com/en">1xbet</a>
			</div>
	</div>
	<?php endwhile;

	else :
		echo '<p>There are no posts!</p>';

	endif;

	?>

	</div>
		<!-- content -->
		<div>
			<div class="text-slate-100 text-base lg:text-2xl text-center py-4 px-10 bg-gradient-to-r from-blue-900 to-purple-900 mt-20 rounded-lg">
				<h1>Live Stream</h1>
			</div>
			<div class="text-slate-100 text-justify py-4 text-sm lg:text-base">
				<p>
				zxotips may be a highly regarded soccer free live streaming portal that operates in countries like USA , UK , France, italy, Deutschland and additional however is accessed by a worldwide audience. Most of those free live streams square measure proprietary by the broadcasters (zxotips) our websites UN agency pay millions for live TV streaming rights - to make sure you get the simplest viewing expertise, 
				you must cross-check our website and follow the links to the official live streams out there, zxotips.com.
				</p>
			</div>
			<div class="text-slate-100 text-base lg:text-2xl text-center py-4 px-10 bg-gradient-to-r from-blue-900 to-purple-900 mt-10 rounded-lg">
				<h1>zxotip is free and is available legally</h1>
			</div>
			<div class="text-slate-100 text-justify py-4 text-sm lg:text-base">
				<p>
				Are you notice searching for zxotips Live Streaming to look at Live Football? attempt to find zxotips broadcast links of the most important soccer competitions like English Premier League , Champions League , Galilean League , La Liga or Serie A with the most important groups in Europe like Manchester United , Liverpool , 
				Man City , Real Spanish capital , Paris Saint-Germain , Tottenham or Arsenal Or Chelsea.
				</p>
			</div>
			<div class="text-slate-100 text-base lg:text-2xl text-center py-4 px-10 bg-gradient-to-r from-blue-900 to-purple-900 mt-10 rounded-lg">
				<h1>About zxotips Live Streams</h1>
			</div>
			<div class="text-slate-100 text-justify py-4 text-sm lg:text-base">
				<p>
				zxotips.com may be a free streaming web site that operates lawfully across the center east and worldwide - Pay-per-view TV broadcasters like socolive or beIN Sports pay some amounts of cash for the live broadcast rights to point out Live soccer, like the EPL Premier League.
				zxotips users ought to remember that accessing the live broadcast is functioning lawfully we have a tendency to|and that we} have all the copyrights to broadcast the soccer matches and that we assure all our guests that we bear any legal repercussions on our own. we have a tendency to additionally 
				renew that zxotips owns all the exclusive rights to broadcast today's matches.
				</p>
			</div>
			<div class="text-slate-100 text-base lg:text-2xl text-center py-4 px-10 bg-gradient-to-r from-blue-900 to-purple-900 mt-10 rounded-lg">
				<h1>Is there an alternative to zxotips.com?</h1>
			</div>
			<div class="text-slate-100 text-justify py-4 text-sm lg:text-base">
				<p>
				We extremely suggest looking live sports (in the UK) via our official web site, that permits fans to observe all Sky Sports soccer channels (eg Sky Sports Main Event, Sky Sports Premier League and Sky Sports Football).
				 we tend to conjointly broadcast matches within the most generally spoken languages within the world.
				</p>
			</div>
			<div class="text-slate-100 text-base lg:text-2xl text-center py-4 px-10 bg-gradient-to-r from-blue-900 to-purple-900 mt-10 rounded-lg">
				<h1>What Live Football is currently available on TV right now?</h1>
			</div>
			<div class="text-slate-100 text-justify py-4 text-sm lg:text-base">
				<p>
				Use our Match schedule links below 
				to search out out what forthcoming soccer is being broadcast on TV and via ower official streams: 
					<a href="<?php echo home_url(); ?>" class="text-yellow-500">Today's Matches</a>
				</p>
			</div>
		</div>
</div>
<?php
get_footer();
