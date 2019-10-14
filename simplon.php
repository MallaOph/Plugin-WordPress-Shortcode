<?php
/*
Plugin Name: Simplon Shortcode
Plugin URI: 
Description: This plugin is a shortcode to display a paragraph about the job digital referent.
Author: Ophelie Mallard
Version: 1.0
Author URI:
*/

function simplon_shortcode(){
	$code_html='<hr style="max-width: 100%">
	<p>Destinée aux chercheurs d’emplois en situation de reconversion, la formation <span style="font-weight: bold">Référent.e Numérique Entreprise</span> prépare en 8 mois aux métiers du numérique et est couronnée par l\'obtention de <span style="color: red">3 certifications </span>.</p>
	<p>Le métier de référent numérique consiste à accompagner les structures dans la mise en place de solutions numériques adaptées à leurs besoins.</p>
	<p>La formation est menée conjointement par :</p>
	<ul>
		<li><a href="https://www.insa-rouen.fr/">l\'INSA ; </a></li>
		<li><a href="https://www.cesi.fr/">le CESI ; </a></li>
		<li><a href="https://simplonline.co/">Simplon.co.</a></li>
	</ul>
	<hr style="max-width: 100%">';
	return $code_html;
}

add_shortcode('simplon', 'simplon_shortcode');