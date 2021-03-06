<?php 

/* 
 * this is a simple endpoint to get data source
 */

include('../../vendor/autoload.php');

//include doValidateToken, if token is invalid, 
//then the next line will not executed
include('doValidateToken.php');

use \Firebase\JWT\JWT;

$config = file_get_contents("../../config.json");
$config = json_decode($config);

$response = [];

//TODO: fetch data here
//for example purpose, we use below dataset
$data = [
	[
		'NPM' => 187006038,
		'nama' => 'Dhea'
	],
	[
		'NPM' => 2,
		'nama' => 'Sriwahyuni'
	],
	[
		'NPM' => 3,
		'nama' => 'Contoh'
	],
	[
		'NPM' => 4,
		'nama' => 'Wah'
	]
];

$response['status'] = true;
$response['payload'] = [
	'data' => $data
];
$response['jwt'] = $jwtPayload;

header("Content-Type: application/json");
echo json_encode($response);