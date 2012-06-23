<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* A simple funtion that allows us to output the list items
* for an ordered or unorderd html list
*
* @access public
* @param string $base the starting url to use
* @param string $cur the uri of the current page which allows us to toggle the active class
* @param array $items an array where the key will be used for the href and the value will be displayed
* @param int the number of tabs we should indent our list items
* @return string
*/
function list_nav($base, $cur, $items, $num=1)
{
	$nav = '';
	$tab = '';

	for($i=1; $i<=$num; $i+=1)
	{
		$tab .= "\t";
	}

	foreach($items as $key=>$value)
	{
		$ref = base_url().$base.$key;
		switch($cur)
		{
			case ltrim($key,'/'):$active = ' class="active"';break;
			default:$active = '';
		}
		$nav .= $tab.'<li><a'.$active.' href="'.$ref.'">'.$value."</a></li>\n";
	}
	return $nav;
}

/* End of file nav_helper.php */
/* Location: ./application/helpers/nav_helper.php */