<?php 
$data = array(
	array(
		'filename' => 'test-1.png',
		'width' => 200,
		'height' => 200,
		'layer' => 2000,
		'top' => 50,
		'left' => 00,
	),
	array(
		'filename' => 'test-2.png',
		'width' => 200,
		'height' => 200,
		'layer' => 2000,
		'top' => 0,
		'left' => 100,
	),
	array(
		'filename' => 'test-3.png',
		'width' => 200,
		'height' => 200,
		'layer' => 2000,
		'top' => 100,
		'left' => 200,
	),
);
echo json_encode($data);