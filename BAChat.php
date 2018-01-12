<?php
use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
use BAChat\BAChat;
require('vendor/autoload.php');
require('BAChat/BAChat.php');

$server = IoServer::factory(
	new HttpServer(
		new WsServer(
			new BAChat()
		)
	),
	58756
);

$server->run();
?>