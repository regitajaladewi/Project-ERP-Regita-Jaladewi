<?php
/**
 * Menu Items
 * All Project Menu
 * @category  Menu List
 */

class Menu{
	
	
			public static $navbartopleft = array(
		array(
			'path' => 'home', 
			'label' => 'Home', 
			'icon' => '<i class="fa fa-home "></i>'
		),
		
		array(
			'path' => 'commodities', 
			'label' => 'Commodities', 
			'icon' => '','submenu' => array(
		array(
			'path' => 'commodities/Index', 
			'label' => 'Commodities', 
			'icon' => ''
		),
		
		array(
			'path' => 'commodities/commodity', 
			'label' => 'Commodity', 
			'icon' => ''
		)
	)
		),
		
		array(
			'path' => 'commodity_locations', 
			'label' => 'Commodity Locations', 
			'icon' => ''
		),
		
		array(
			'path' => 'failed_jobs', 
			'label' => 'Failed Jobs', 
			'icon' => ''
		),
		
		array(
			'path' => 'migrations', 
			'label' => 'Migrations', 
			'icon' => ''
		),
		
		array(
			'path' => 'password_resets', 
			'label' => 'Password Resets', 
			'icon' => ''
		),
		
		array(
			'path' => 'school_operational_assistances', 
			'label' => 'School Operational Assistances', 
			'icon' => ''
		),
		
		array(
			'path' => 'users', 
			'label' => 'Users', 
			'icon' => ''
		)
	);
		
	
	
}