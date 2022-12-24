<?php
use Ratchet\Server\IoServer;
use App\SocketCore;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;

    require dirname(__DIR__) . '/vendor/autoload.php';

    $server = IoServer::factory(
        new HttpServer(
            new WsServer(
                new SocketCore()
            )
        ),
        getenv('PORT', 8080)
    );

    $server->run();