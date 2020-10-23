<?php
// Kopieer dit bestand naar config.php met je eigen gegevens
// config.php wordt niet naar Github gestuurd, wel zo veilig.
// Zet dus NOOIT in dit bestand je geheime gegevens, deze dient alleen als voorbeeld

$config = [
	'DB'       => [
		'HOSTNAME' => '127.0.0.1',
		'DATABASE' => 'bap-covid19',
		'USER'     => 'root',
		'PASSWORD' => ''
	],
	'MAIL' 		=>[
		'SMTP_HOST'		=>'localhost',
		'SMTP_USER'		=>'',
		'SMTP_PASSWORD'	=>'',
		'SMTP_PORT'		=>'25'
	],
	'BASE_URL' => '/PROJ-MVC/public',  // Zet hier het pad naar de public map in, vanaf http://localhost, anders werken je routes niet!
	'BASE_HOST'=> 'https://bobvanberckel.com',
	'ROOT'     => dirname( dirname( __DIR__ ) ),
	'PRIVATE'  => dirname( __DIR__ ),
	'WEBROOT'  => dirname( dirname( __DIR__ ) ) . '/public'
];

return $config;
