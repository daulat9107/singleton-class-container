<?php

return [
	'app' =>[
		'url'=>'http://localhost/adminDInvensis/',
		'hash' =>[
			'algo' =>CRYPT_BLOWFISH,
			'cost' =>10
		]
	],
	'db' =>[
		'driver' =>'mysql',
		'host' =>'127.0.0.1',
		'name' =>'ides_new',
		'username'=>'root',
		'password'=>'',
		'charset' =>'utf8',
		'collation'=>'utf8_unicode_ci',
		'prefix'=>''
	],
	'auth'=>[
		'session'=>'user_id',
		'remember' =>'user_r',

	],
	'mail' =>[
		'smtp_auth'=>true,
		'smtp_secure'=>'tls',
		'host'=>'smtp.gmail.com',
		'username'=>'mail@gmail.com',
		'password'=>'something',
		'port'=>587,
		'html'=>true
	],
	'twig'=>[
	'debug' =>true
	],
	'csrf'=>[
		'session' => 'csrf_token'
	]

];