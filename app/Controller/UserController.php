<?php
/**
 * Copyright (C), 2016-2018, Shall Buy Life info. Co., Ltd.
 * FileName: UserController.php
 * Description: 说明
 * @author leejie
 * @Create Date 2021/02/07 11:17
 * @Update Date 2021/02/07 11:17 BY leejie
 * @version v1.0
 */

namespace App\Controller;


use App\Service\UserService;
use Phper666\JWTAuth\JWT;

class UserController
{
    public function getToken(UserService $userService,JWT $JWT){
        $userData = [
            'id'=>1,
            'name'=>'admin'
        ];
        return $JWT->getToken($userData);
    }
    public function login(){

    }
}