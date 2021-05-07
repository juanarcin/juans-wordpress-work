<?php /* Template Name: HomeAnimation */ ?>
<?php get_header(); ?>

<section class="panel active" id="home">		
	<div class="home-page">
		<div class="intro">
			<h2 id="hi">Hello</h2>
			<p>I'm Juan Arciniega.
			<span class="hidden-text">I build websites with love <i class="fa fa-heart" aria-hidden="true"></i></span></p>
		</div>
		<div class="video-background">
			<div class="video-overlay bringIn"></div>
			<div class="video-foreground">
				<video playsinline="" autoplay="" muted="" loop="" id="bgvid">
					<source src="https://www.juans.work/shared/background.mp4" type="video/mp4">
				</video>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>