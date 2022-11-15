<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PMM
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo( 'name' ); ?></title>
	<script src="https://cdn.tailwindcss.com"></script>
	<?php wp_head() ?>
</head>

<body <?php body_class(); ?>>

<header class="bg-bg-color font-fot border-b-2 border-slate-500 fixed w-full z-50 top-0">
	<div class="container px-24 py-4 flex justify-between">
		<h1 class="font-bold uppercase text-3xl py-2 text-yellow-500"><a href="<?php echo home_url(); ?>">
		<?php bloginfo( 'name' ); ?></a></h1>
		<nav class="text-font-color lg:flex gap-4 items-center hidden">
			<span class="uppercase">
					<a href="#">
						Home
					</a>
			</span>
			<button class="px-4 py-3 bg-bg-button rounded-lg">LIVE</button>
		</nav>
	</div>
</header>

<header id='mobile' class="bg-blue/30 backdrop-blur-lg fixed bottom-0 z-50 w-full py-4 lg:hidden">
	<div class="text-slate-100 container mx-auto">
		<div class="px-6 flex gap-14 items-center justify-between uppercase font-fot">
			<a class="flex gap-2 flex-col justify-center items-center">
			<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
			<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
			</svg>
			<span class="text-xs text-slate-200">Home</span>
			</a>
			<a class="flex gap-2 flex-col justify-center items-center">
			<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
			class="w-6 h-6 animate-pulse">
			<path stroke-linecap="round" stroke-linejoin="round" d="M6 20.25h12m-7.5-3v3m3-3v3m-10.125-3h17.25c.621 0 1.125-.504 1.125-1.125V4.875c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125z" />
			</svg>
			<span class="text-xs text-slate-200">Live</span>
			</a>
			<a class="flex gap-2 flex-col justify-center items-center">
			<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
			<path stroke-linecap="round" stroke-linejoin="round" d="M8.625 9.75a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 01.778-.332 48.294 48.294 0 005.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
			</svg>
			<span class="text-xs text-slate-200">TIPS</span>
			</a>
			<a class="flex gap-2 flex-col justify-center items-center">
			<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
			<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
			</svg>
			<span class="text-xs text-slate-200">Telegram</span>
			</a>
		</div>
	</div>
</header>


