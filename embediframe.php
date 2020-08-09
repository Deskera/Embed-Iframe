<?php
/*
Plugin Name: Embed Iframe
Plugin URI: https://www.deskera.com/blog/wordpress-plugin-embed-iframe/
Description: Allows the insertion of code to display an external webpage within an iframe. The tag to insert the code is: <code>[iframe url width height]</code>
Version: 1.2
Author: Deskera
Author URI: https://www.deskera.com

1.0	- Initial release
1.1	- PHP7 compatibility
1.2 - User input sanitization
*/

include (dirname (__FILE__).'/plugin.php');

class EIPD_EmbedIframe extends EIPD_Plugin
{
	function __construct ()
	{
		$this->register_plugin ('embediframe', __FILE__);
		
		$this->add_filter ('the_content');
		$this->add_action ('wp_head');
	}
	
	function wp_head ()
	{
		
	}
	
	function replace ($matches)
	{
		$tmp = strpos ($matches[1], ' ');
		if ($tmp)
		{
			// Because the regex is such a nuisance
			$url  = esc_url_raw (substr ($matches[1], 0, $tmp));
			$rest = substr ($matches[1], strlen ($url));

			$width  = 400;
			$height = 500;

			$parts = array_values (array_filter (explode (' ', $rest)));
			$width = intval (sanitize_text_field ($parts[0]));
	
			unset ($parts[0]);
			$height = intval (sanitize_text_field (implode (' ', $parts)));

			return $this->capture ('iframe', array ('url' => $url, 'width' => $width, 'height' => $height));
		}
		
		return '';
	}

	function the_content ($text)
	{
	  return preg_replace_callback ("@(?:<p>\s*)?\[iframe\s*(.*?)\](?:\s*</p>)?@", array (&$this, 'replace'), $text);
	}
}

$embediframe = new EIPD_EmbedIframe;
?>
