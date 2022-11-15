<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package PMM
 */

?>

<article class="bg-slate-900" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header text-slate-200 bg-gradient-to-r from-slate-900 to-blue-900">
		<div class="text-center py-24">
			<div class="py-10">
				<span class="px-4 py-3 bg-white/30 backdrop-blur-md text-font-color font-fot rounded-lg"><?php echo date(get_option('date_format')); ?></span>
			</div>
			<div class="flex justify-center gap-24">
				<div class="flex justify-center items-center gap-4 flex-col px-10">
					<img src="<?php the_field('home') ?>" alt="">
					<h1 class="text-xl font-fot"><?php the_field('home_team') ?> </h1>
				</div>
				<span class="flex items-center px-10 font-bold text-4xl font-fot">VS</span>
				<div class="flex justify-center items-center gap-4 flex-col px-10">
					<img src="<?php the_field('away') ?>" alt="">
					<h1 class="text-xl font-fot"><?php the_field('away_team') ?> </h1>
				</div>
			</div>
		</div>
	</header><!-- .entry-header -->
	<div class="rounded mx-auto mt-2 container px-40">
  <!-- Tabs -->
  <ul id="tabs" class="inline-flex pt-2 px-1 w-full border-b border-slate-700">
    <li class="bg-bg-button1 px-4 text-yellow-500 font-semibold py-2 rounded-t border-t border-r border-l -mb-px">
		<a id="default-tab" href="#first">HD-1</a></li>
    <li class="px-4 text-yellow-500 font-semibold py-2 rounded-t"><a href="#second">HD-2</a></li>
    <li class="px-4 text-yellow-500 font-semibold py-2 rounded-t"><a href="#third">HD-3</a></li>
  </ul>

  <!-- Tab Contents -->
  <div id="tab-contents">
    <div id="first" class="p-4">
		<h1><?php the_field('hd-1') ?></h1>
    </div>
    <div id="second" class="hidden p-4">
		<h1><?php the_field('hd-2') ?></h1>
    </div>
    <div id="third" class="hidden p-4">
		<h1><?php the_field('hd-3') ?></h1>
    </div>
  </div>
</div>
	<div class="flex justify-center bg-bg-color py-10 text-font-color font-fot container mx-auto rounded-lg">
		<div class="prose-h1:text-xl prose-h1:py-4 prose-p:leading-normal prose-p:text-justify flex flex-col justify-center w-1/2">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'pmm' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'pmm' ),
				'after'  => '</div>',
			)
		);
		?>
		</div>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
