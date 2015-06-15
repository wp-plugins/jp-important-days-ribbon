<?php

/**
 * Plugin Name: JP Important Days Ribbon
 * Plugin URI: http://skjoy.info/plugins/jp-important-days-of-bangladesh.html
 * Description: This plugin will automatically inform you to know the Bangladeshis Observance day.After activating this plugin, it will inform you the Stated day.At the top of right corner of your site you see a Ribbon.There some of informaiton of the mentioned day.You can arbitrary change your Ribbon style from plugin option panel.
 * Version: 1.0
 * Author: Skjoy
 * Author URI: http://skjoy.info
 * Requires at least: 3.0
 * Tested Up to: 4.1.1
 * Stable Tag: 2.0
 * License: GPL v2
 * Shortname: jidr or jidr_
 */

include("class.php");
 
$settings = new jp_important_days_settings( __FILE__ );
 
 /* Store important days */
 
function jp_important_days_of_bd() {
	
	$day = date("d");
	$month = date("m");
	$ribbon_bg_color = get_option('jp_ribbon_bg_color');
	$ribon_text_color = get_option('jp_ribbon_text_color');
	$ribbon_font_size = get_option('jp_ribbon_font_size');
	
	if(empty($ribbon_bg_color)) {
		$ribbon_bg_color = '#FF0000';
	}
	if(empty($ribon_text_color)) {
		$ribon_text_color = '#FFF';
	}
	if(empty($ribbon_font_size)) {
		$ribbon_font_size = '17px';
	}
	
	//Ribbon Style
	$ribbonleft = '<div style="background: none repeat scroll 0 0 '.$ribbon_bg_color.';
			color: '.$ribon_text_color.';
			font-size: '.$ribbon_font_size.';
			padding: 5px !important;
			position: fixed !important;
			margin: 0 !important;
			right: -54px !important;
			text-align: center !important;
			top: 73px !important;
			transform: rotate(43deg) !important;
			width: 300px !important;
			z-index: 100000 !important;
			text-shadow: 1px 0px 1px green !important;">';
	$ribbonright = '</div>';
	
	//Store important days of Bangladesh
	
	if($day == '10' && $month == '01') {
		$mess = "আজ বঙ্গবন্ধুর স্বদেশ প্রত্যাবর্তন দিবস";
		echo $ribbonleft.$mess.$ribbonright;
	}
	if($day == '19' && $month == '01') {
		$mess = "আজ জাতীয় শিক্ষক দিবস";
		echo $ribbonleft.$mess.$ribbonright;
	}
	if($day == '20' && $month == '01') {
		$mess = "আজ শহীদ আসাদ দিবস";
		echo $ribbonleft.$mess.$ribbonright;
	}
	if($day == '24' && $month == '01') {
		$mess = "আজ গণঅভ্যুত্থান দিবস";
		echo $ribbonleft.$mess.$ribbonright;
	}
	if($day == '25' && $month == '01') {
		$mess = "আজ কম্পিউটারে বাংলা প্রচলন দিবস";
		echo $ribbonleft.$mess.$ribbonright;
	}
	if($day == '14' && $month == '02') {
		$mess = "আজ সুন্দরবন এবং ভালবাসা দিবস";
		echo $ribbonleft.$mess.$ribbonright;
	}
	if($day == '21' && $month == '02') {
		$mess = "আজ শহীদ দিবস";
		echo $ribbonleft.$mess.$ribbonright;
	}
	if($day == '28' && $month == '02') {
		$mess = "আজ জাতীয় ডায়াবেটিস সচেতনতা দিবস";
		echo $ribbonleft.$mess.$ribbonright;
	}
	if($day == '02' && $month == '03') {
		$mess = "আজ জাতীয় পতাকা দিবস";
		echo $ribbonleft.$mess.$ribbonright;
	}
	if($day == '17' && $month == '03') {
		$mess = "আজ শিশু দিবস";
		echo $ribbonleft.$mess.$ribbonright;
	}
	if($day == '23' && $month == '03') {
		$mess = "আজ পতাকা উত্তোলন দিবস";
		echo $ribbonleft.$mess.$ribbonright;
	}
	if($day == '26' && $month == '03') {
		$mess = "আজ স্বাধীনতা দিবস";
		echo $ribbonleft.$mess.$ribbonright;
	}
	if($day == '31' && $month == '03') {
		$mess = "আজ জাতীয় দুর্যোগ প্রস্তুতি দিবস";
		echo $ribbonleft.$mess.$ribbonright;
	}
	if($day == '02' && $month == '04') {
		$mess = "আজ জাতীয় প্রতিবন্ধী দিবস";
		echo $ribbonleft.$mess.$ribbonright;
	}
	if($day == '17' && $month == '04') {
		$mess = "আজ মুজিবনগর দিবস";
		echo $ribbonleft.$mess.$ribbonright;
	}
	if($day == '01' && $month == '05') {
		$mess = "আজ মহান মে দিবস";
		echo $ribbonleft.$mess.$ribbonright;
	}
	if($day == '16' && $month == '05') {
		$mess = "আজ ফারাক্কা দিবস";
		echo $ribbonleft.$mess.$ribbonright;
	}
	if($day == '28' && $month == '05') {
		$mess = "আজ নিরাপদ মাতৃত্ব দিবস";
		echo $ribbonleft.$mess.$ribbonright;
	}
	if($day == '07' && $month == '06') {
		$mess = "আজ ছয় দফা দিবস";
		echo $ribbonleft.$mess.$ribbonright;
	}
	if($day == '01' && $month == '07') {
		$mess = "আজ ঢাকা বিশ্ববিদ্যালয় দিবস";
		echo $ribbonleft.$mess.$ribbonright;
	}
	if($day == '03' && $month == '07') {
		$mess = "আজ জন্ম নিবন্ধন দিবস";
		echo $ribbonleft.$mess.$ribbonright;
	}
	if($day == '08' && $month == '27') {
		$mess = "আজ দিঘলিয়ার দেয়াড়া গণহত্যা দিবস";
		echo $ribbonleft.$mess.$ribbonright;
	}
	if($day == '15' && $month == '09') {
		$mess = "আজ জাতীয় আয়কর দিবস";
		echo $ribbonleft.$mess.$ribbonright;
	}
	if($day == '17' && $month == '09') {
		$mess = "আজ মহান শিক্ষা দিবস";
		echo $ribbonleft.$mess.$ribbonright;
	}
	if($day == '18' && $month == '09') {
		$mess = "আজ কৃষ্ণপুর গণহত্যা দিবস";
		echo $ribbonleft.$mess.$ribbonright;
	}
	if($day == '23' && $month == '09') {
		$mess = "আজ প্রীতিলতার আত্মাহুতি দিবস";
		echo $ribbonleft.$mess.$ribbonright;
	}
	if($day == '29' && $month == '09') {
		$mess = "আজ মাহমুদপুর গণহত্যা দিবস";
		echo $ribbonleft.$mess.$ribbonright;
	}
	if($day == '02' && $month == '10') {
		$mess = "আজ পথশিশু দিবস";
		echo $ribbonleft.$mess.$ribbonright;
	}
	if($day == '03' && $month == '11') {
		$mess = "আজ জেলহত্যা দিবস";
		echo $ribbonleft.$mess.$ribbonright;
	}
	if($day == '04' && $month == '11') {
		$mess = "আজ সংবিধান দিবস";
		echo $ribbonleft.$mess.$ribbonright;
	}
	if($day == '07' && $month == '11') {
		$mess = "আজ জাতীয় বিপ্লব ও সংহতি দিবস";
		echo $ribbonleft.$mess.$ribbonright;
	}
	if($day == '10' && $month == '11') {
		$mess = "আজ স্বৈরাচার বিরোধী দিবস";
		echo $ribbonleft.$mess.$ribbonright;
	}
	if($day == '21' && $month == '11') {
		$mess = "আজ সশস্ত্রবাহিনী দিবস";
		echo $ribbonleft.$mess.$ribbonright;
	}
	if($day == '01' && $month == '12') {
		$mess = "আজ মুক্তিযোদ্ধা এবং জাতীয় যুব দিবস";
		echo $ribbonleft.$mess.$ribbonright;
	}
	if($day == '06' && $month == '12') {
		$mess = "আজ স্বৈরাচার পতন দিবস";
		echo $ribbonleft.$mess.$ribbonright;
	}
	if($day == '19' && $month == '01') {
		$mess = "আজ জাতীয় শিক্ষক দিবস";
		echo $ribbonleft.$mess.$ribbonright;
	}
	if($day == '09' && $month == '12') {
		$mess = "আজ রোকেয়া দিবস";
		echo $ribbonleft.$mess.$ribbonright;
	}
	if($day == '14' && $month == '12') {
		$mess = "আজ শহীদ বুদ্ধিজীবি দিবস";
		echo $ribbonleft.$mess.$ribbonright;
	}
	if($day == '16' && $month == '12') {
		$mess = "আজ বিজয় দিবস";
		echo $ribbonleft.$mess.$ribbonright;
	}
	if($day == '19' && $month == '12') {
		$mess = "আজ বাংলা ব্লগ দিবস";
		echo $ribbonleft.$mess.$ribbonright;
	}
	

}

add_action('wp_footer','jp_important_days_of_bd');

?>