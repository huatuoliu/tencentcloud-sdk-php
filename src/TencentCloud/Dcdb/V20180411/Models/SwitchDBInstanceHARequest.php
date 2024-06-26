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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SwitchDBInstanceHA请求参数结构体
 *
 * @method string getInstanceId() 获取实例Id，形如 tdsql-ow728lmc。
 * @method void setInstanceId(string $InstanceId) 设置实例Id，形如 tdsql-ow728lmc。
 * @method string getZone() 获取切换的目标区域，会自动选择该可用区中延迟最低的节点。
 * @method void setZone(string $Zone) 设置切换的目标区域，会自动选择该可用区中延迟最低的节点。
 * @method array getShardInstanceIds() 获取指定分片实例id进行切换
 * @method void setShardInstanceIds(array $ShardInstanceIds) 设置指定分片实例id进行切换
 */
class SwitchDBInstanceHARequest extends AbstractModel
{
    /**
     * @var string 实例Id，形如 tdsql-ow728lmc。
     */
    public $InstanceId;

    /**
     * @var string 切换的目标区域，会自动选择该可用区中延迟最低的节点。
     */
    public $Zone;

    /**
     * @var array 指定分片实例id进行切换
     */
    public $ShardInstanceIds;

    /**
     * @param string $InstanceId 实例Id，形如 tdsql-ow728lmc。
     * @param string $Zone 切换的目标区域，会自动选择该可用区中延迟最低的节点。
     * @param array $ShardInstanceIds 指定分片实例id进行切换
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ShardInstanceIds",$param) and $param["ShardInstanceIds"] !== null) {
            $this->ShardInstanceIds = $param["ShardInstanceIds"];
        }
    }
}
