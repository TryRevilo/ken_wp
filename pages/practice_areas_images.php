<?php

function practice_area_img($img_path)
{
	$pages_base = get_home_path();
	$server_pages_base = get_site_url() . '/';

	$files = glob($img_path . "/*.*");
	for ($i=0; $i<count($files); $i++)
	{         
		$url = str_replace($pages_base, $server_pages_base, $files[$i]);
		$items = "";
		$num = basename($files[$i]);

		$items .= <<<HTML

		<div class="item">						
			<img src="{$url}" class="img-responsive" alt="">
		</div>
HTML;
	}
	return $items;
}