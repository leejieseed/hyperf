<?php
/**
 * Copyright (C), 2016-2018, Shall Buy Life info. Co., Ltd.
 * FileName: UserService.php
 * Description: 说明
 * @author leejie
 * @Create Date 2021/02/07 11:18
 * @Update Date 2021/02/07 11:18 BY leejie
 * @version v1.0
 */

namespace App\Service;
use Phper666\JWTAuth\JWT;

class UserService
{
    /**
     * FunctionName: getToken
     * Description:说明
     * CreateTime:2021/02/07 11:21
     * UpdateTime:2021/02/07 11:21
     * Author: leejie
     * @param $uid
     * @param $userName
     * @param JWT $JWT
     * @throws \Psr\SimpleCache\InvalidArgumentException
     */
    public function getToken($uid,$userName){
        $JWT = new JWT('index');
        $userData = [
            'id'=>$uid,
            'name'=>$userName
        ];
        return $JWT->getToken($userName);
    }
}