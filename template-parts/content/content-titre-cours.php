<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>
<?php

	if(substr(get_the_title(), 4, 1) == 1){
		the_title( sprintf( '<h2 class="entry-title blue"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
	}	

	if(substr(get_the_title(), 4, 1) == 2){
		the_title( sprintf( '<h2 class="entry-title green"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
	}	

	if(substr(get_the_title(), 4, 1) == 3){
		the_title( sprintf( '<h2 class="entry-title red"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
	}

	if(substr(get_the_title(), 4, 1) == 4){
		the_title( sprintf( '<h2 class="entry-title yellow"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
	}

	if(substr(get_the_title(), 4, 1) == 5){
		the_title( sprintf( '<h2 class="entry-title purple"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
	}

	if(substr(get_the_title(), 4, 1) == 6){
		the_title( sprintf( '<h2 class="entry-title orange"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
	}

	/*the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );*/
?>
