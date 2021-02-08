<?php
/**
 * Copyright (C), 2016-2018, Shall Buy Life info. Co., Ltd.
 * FileName: WebSocketController.php
 * Description: 说明
 * @author leejie
 * @Create Date 2021/02/04 15:32
 * @Update Date 2021/02/04 15:32 BY leejie
 * @version v1.0
 */
declare(strict_types=1);
namespace App\Controller;
use Hyperf\Contract\OnCloseInterface;
use Hyperf\Contract\OnMessageInterface;
use Hyperf\Contract\OnOpenInterface;
use Swoole\Http\Request;
use Swoole\Http\Response;
use Swoole\Server;
use Swoole\Websocket\Frame;
use Swoole\WebSocket\Server as WebSocketServer;


class WebSocketController implements OnMessageInterface, OnOpenInterface, OnCloseInterface
{

    public function onMessage($server, Frame $frame): void
    {
        var_dump($frame);
        $server->push($frame->fd, 'Recv: ' . $frame->data);

    }

    public function onClose($server, int $fd, int $reactorId): void
    {
        var_dump('closed');
    }

    public function onOpen($server, Request $request): void
    {
        $server->push($request->fd, 'Opened');
    }
}