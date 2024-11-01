<?php
defined( 'ABSPATH' ) || exit;
/*
Plugin Name: WS Admin Bar Hide
Description: WS Admin Bar Hide provides easy way to hide your wordpress admin bar.
Plugin URI: http://wordpress.org/extend/plugins/ws-admin-bar-hide/
Author: WebShouters
Author URI: http://www.webshouters.net/
Version: 1.0       
License: GPL2
*/                                                                  
                                                                                                     
add_filter('show_admin_bar', '__return_false');                                    
                                                                                                      