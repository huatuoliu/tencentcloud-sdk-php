<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Gs\V20191118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAndroidInstancesAppBlacklist请求参数结构体
 *
 * @method array getAndroidInstanceIds() 获取实例ID列表，数量上限100
 * @method void setAndroidInstanceIds(array $AndroidInstanceIds) 设置实例ID列表，数量上限100
 * @method array getAppList() 获取应用列表
 * @method void setAppList(array $AppList) 设置应用列表
 * @method string getOperation() 获取ADD、REMOVE、CLEAR
 * @method void setOperation(string $Operation) 设置ADD、REMOVE、CLEAR
 */
class ModifyAndroidInstancesAppBlacklistRequest extends AbstractModel
{
    /**
     * @var array 实例ID列表，数量上限100
     */
    public $AndroidInstanceIds;

    /**
     * @var array 应用列表
     */
    public $AppList;

    /**
     * @var string ADD、REMOVE、CLEAR
     */
    public $Operation;

    /**
     * @param array $AndroidInstanceIds 实例ID列表，数量上限100
     * @param array $AppList 应用列表
     * @param string $Operation ADD、REMOVE、CLEAR
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("AndroidInstanceIds",$param) and $param["AndroidInstanceIds"] !== null) {
            $this->AndroidInstanceIds = $param["AndroidInstanceIds"];
        }

        if (array_key_exists("AppList",$param) and $param["AppList"] !== null) {
            $this->AppList = $param["AppList"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }
    }
}
