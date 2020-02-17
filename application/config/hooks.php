<?php
$hook['post_controller_constructor'][] = array(
	'function' => 'force_ssl',
	'filename' => 'ssl.php',
	'filepath' => 'hooks'
);
