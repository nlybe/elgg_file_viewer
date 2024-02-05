<?php

$entity = elgg_extract('entity', $vars);

if (!$entity instanceof ElggFile) {
	return;
}

$url = urlencode(elgg_file_viewer_get_public_url($entity));
$iframe_url = "https://docs.google.com/viewer?url=$url&embedded=true&overridemobile=true";

$attr = elgg_format_element('iframe', [
	'src' => $iframe_url,
	'name' => $entity->title,
	'height' => 780,
	'width' => "100%",
	'seamless' => true,
], '');

echo '<div class="elgg-col elgg-col-1of1 clearfloat">';
echo $attr;
echo '</div>';