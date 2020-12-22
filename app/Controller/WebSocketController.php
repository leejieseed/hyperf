<?php
/**
 * Copyright (C), 2016-2018, Shall Buy Life info. Co., Ltd.
 * FileName: WebSocketController.php
 * Description: 说明
 * @author leejie
 * @Create Date 2020/12/22 10:43
 * @Update Date 2020/12/22 10:43 BY leejie
 * @version v1.0
 */

declare(strict_types=1);
namespace App\Controller;


use Hyperf\Contract\OnCloseInterface;
use Hyperf\Contract\OnMessageInterface;
use Hyperf\Contract\OnOpenInterface;
use Swoole\Http\Request;
use Swoole\Http\Response;
use Swoole\WebSocket\Frame;
use Swoole\WebSocket\Server;

class WebSocketController implements OnMessageInterface, OnOpenInterface, OnCloseInterface
{

    public function onMessage($server, Frame $frame): void
    {
        // TODO: Implement onMessage() method.
        $server->push($frame->fd, 'Recv: ' . $frame->data);
    }

    public function onClose($server, int $fd, int $reactorId): void
    {
        // TODO: Implement onClose() method.
        var_dump('closed');
    }

    public function onOpen($server, Request $request): void
    {
        // TODO: Implement onOpen() method.
        $server->push($request->fd, 'Opened');
    }
}