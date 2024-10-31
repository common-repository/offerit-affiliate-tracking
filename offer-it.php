<?php
/*
Plugin Name: OfferIT Affiliate Tracking
Plugin URI: http://www.esecure.cc/offerit-affiliate-tracking-wordpress-plugin/
Description: This plugin integrates <a href="http://offerit.com">OfferIT.com</a> Affiliate Tracking system with WordPress, by storing affiliate tracking code in session as visitor navigates through the site, pushing events to Google Analytics and processing conversion POST to allow OfferIT fully integrate with any WordPress site.
Version: 1.1
Author: Mark Hilton
Author URI: http://www.esecure.cc/
License: GPL2
*/

/*  Copyright 2013 OfferIT Affiliate Tracking (email : mark@esecure.cc)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

	// load libraries
	require_once('offer-it.class.php');


	$offer_it = new offer_it;

	add_action('init', array($offer_it, 'init'), 1);

	register_activation_hook(   __FILE__, array($offer_it, 'offer_it_install')); 
	register_deactivation_hook( __FILE__, array($offer_it, 'offer_it_uninstall'));

?>