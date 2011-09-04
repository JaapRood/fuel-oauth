<?php
/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.0
 * @OAuthor     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2011 Fuel Development Team
 * @link       http://fuelphp.com
 */


//Autoloader::add_core_namespace('OAuth');

Autoloader::add_classes(array(
	'OAuth\\OAuth'           => __DIR__.'/classes/oauth.php',
	'OAuth\\Exception'  	=> __DIR__.'/classes/oauth.php',

	'OAuth\\Consumer'  => __DIR__.'/classes/consumer.php',
	'OAuth\\Provider'  => __DIR__.'/classes/provider.php',
	
	'OAuth\\Provider_Twitter'  => __DIR__.'/classes/provider/twitter.php',
	'OAuth\\Provider_Google'  => __DIR__.'/classes/provider/google.php',
	
	'OAuth\\Request'  => __DIR__.'/classes/request.php',
	
	'OAuth\\Request_Access' => __DIR__.'/classes/request/access.php',
	'OAuth\\Request_Authorize' => __DIR__.'/classes/request/authorize.php',
	'OAuth\\Request_Token'  => __DIR__.'/classes/request/token.php',
	
	'OAuth\\Response'  => __DIR__.'/classes/response.php',
	'OAuth\\Server'  => __DIR__.'/classes/server.php',
	'OAuth\\Signature'  => __DIR__.'/classes/signature.php',
	'OAuth\\Token'  => __DIR__.'/classes/token.php',
	'OAuth\\Token_Access'  => __DIR__.'/classes/token/access.php',
	'OAuth\\Token_Request'  => __DIR__.'/classes/token/request.php',
	
	'OAuth\\Signature_HMAC_SHA1'  => __DIR__.'/classes/signature/hmac/sha1.php',
	
));


/* End of file bootstrap.php */