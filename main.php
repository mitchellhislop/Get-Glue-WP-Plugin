/*
Plugin Name: Get Glue WP Plugin
Plugin URI: http://mitchellhislop.com
Version: 0.1a
Author: Mitchell Hislop
Description: Displays Get Glue information on your blog as a widget
*/
include ('php/ggwidget.php');
if (!class_exists("GetGlue")) 
{
    class GetGlue {
    	function GetGlueConst() { //constructor
           
        						
        						}
   
    			}
 
}

if (class_exists("GetGlue")) 
{
    $glue = new GetGlue();
}

if (isset($glue))
	{
	
		//actions
		add_action('admin_menu', 'get_glue_menu');
		add_action('widgets_init', create_function('', 'return register_widget("FooWidget");'));
		function get_glue_menu() {

 		 add_options_page('Get Glue Options', 'Get Glue', 'manage_options', 'my-unique-identifier', 'get_glue_options');

}

function get_glue_options() {

  if (!current_user_can('manage_options'))  {
    wp_die( __('You do not have sufficient permissions to access this page.') );
  }

  echo '<div class="wrap">';
  echo '<p>Here is where the form would go if I actually had options.</p>';
  echo '</div>';

}

		//filters
		
	}