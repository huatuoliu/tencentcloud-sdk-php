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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVideoDownloadUrl请求参数结构体
 *
 * @method string getChannelId() 获取通道 ID
 * @method void setChannelId(string $ChannelId) 设置通道 ID
 * @method string getBeginTime() 获取下载的开始时间，UTC 秒数，开始和结束时间段最长为60分钟，且不能跨天。
注意：实际下载的文件时长可能会大于该时段时长，通过指定IsRespActualTime参数可以获取实际下载的开始时间和结束时间。 原因是下载是TS切片对齐的，其目的也是为了保证用户下载数据的完整性，完全包含其指定的时间段。
 * @method void setBeginTime(string $BeginTime) 设置下载的开始时间，UTC 秒数，开始和结束时间段最长为60分钟，且不能跨天。
注意：实际下载的文件时长可能会大于该时段时长，通过指定IsRespActualTime参数可以获取实际下载的开始时间和结束时间。 原因是下载是TS切片对齐的，其目的也是为了保证用户下载数据的完整性，完全包含其指定的时间段。
 * @method string getEndTime() 获取下载的结束时间，UTC 秒数，开始和结束时间段最长为60分钟，且不能跨天。
注意：实际下载的文件时长可能会大于该时段时长，通过指定IsRespActualTime参数可以获取实际下载的开始时间和结束时间。 原因是下载是TS切片对齐的，其目的也是为了保证用户下载数据的完整性，完全包含其指定的时间段。
 * @method void setEndTime(string $EndTime) 设置下载的结束时间，UTC 秒数，开始和结束时间段最长为60分钟，且不能跨天。
注意：实际下载的文件时长可能会大于该时段时长，通过指定IsRespActualTime参数可以获取实际下载的开始时间和结束时间。 原因是下载是TS切片对齐的，其目的也是为了保证用户下载数据的完整性，完全包含其指定的时间段。
 * @method string getFileType() 获取文件格式，"mp4"：mp4格式，"ts"：ts文件格式
 * @method void setFileType(string $FileType) 设置文件格式，"mp4"：mp4格式，"ts"：ts文件格式
 * @method boolean getIsRespActualTime() 获取响应data中是否携带实际下载录像的开始时间与结束时间
 * @method void setIsRespActualTime(boolean $IsRespActualTime) 设置响应data中是否携带实际下载录像的开始时间与结束时间
 * @method boolean getIsInternal() 获取是否返回内网下载URL，默认是false，返回公网下载URL，true则返回内网下载URL
 * @method void setIsInternal(boolean $IsInternal) 设置是否返回内网下载URL，默认是false，返回公网下载URL，true则返回内网下载URL
 */
class DescribeVideoDownloadUrlRequest extends AbstractModel
{
    /**
     * @var string 通道 ID
     */
    public $ChannelId;

    /**
     * @var string 下载的开始时间，UTC 秒数，开始和结束时间段最长为60分钟，且不能跨天。
注意：实际下载的文件时长可能会大于该时段时长，通过指定IsRespActualTime参数可以获取实际下载的开始时间和结束时间。 原因是下载是TS切片对齐的，其目的也是为了保证用户下载数据的完整性，完全包含其指定的时间段。
     */
    public $BeginTime;

    /**
     * @var string 下载的结束时间，UTC 秒数，开始和结束时间段最长为60分钟，且不能跨天。
注意：实际下载的文件时长可能会大于该时段时长，通过指定IsRespActualTime参数可以获取实际下载的开始时间和结束时间。 原因是下载是TS切片对齐的，其目的也是为了保证用户下载数据的完整性，完全包含其指定的时间段。
     */
    public $EndTime;

    /**
     * @var string 文件格式，"mp4"：mp4格式，"ts"：ts文件格式
     */
    public $FileType;

    /**
     * @var boolean 响应data中是否携带实际下载录像的开始时间与结束时间
     */
    public $IsRespActualTime;

    /**
     * @var boolean 是否返回内网下载URL，默认是false，返回公网下载URL，true则返回内网下载URL
     */
    public $IsInternal;

    /**
     * @param string $ChannelId 通道 ID
     * @param string $BeginTime 下载的开始时间，UTC 秒数，开始和结束时间段最长为60分钟，且不能跨天。
注意：实际下载的文件时长可能会大于该时段时长，通过指定IsRespActualTime参数可以获取实际下载的开始时间和结束时间。 原因是下载是TS切片对齐的，其目的也是为了保证用户下载数据的完整性，完全包含其指定的时间段。
     * @param string $EndTime 下载的结束时间，UTC 秒数，开始和结束时间段最长为60分钟，且不能跨天。
注意：实际下载的文件时长可能会大于该时段时长，通过指定IsRespActualTime参数可以获取实际下载的开始时间和结束时间。 原因是下载是TS切片对齐的，其目的也是为了保证用户下载数据的完整性，完全包含其指定的时间段。
     * @param string $FileType 文件格式，"mp4"：mp4格式，"ts"：ts文件格式
     * @param boolean $IsRespActualTime 响应data中是否携带实际下载录像的开始时间与结束时间
     * @param boolean $IsInternal 是否返回内网下载URL，默认是false，返回公网下载URL，true则返回内网下载URL
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
        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("IsRespActualTime",$param) and $param["IsRespActualTime"] !== null) {
            $this->IsRespActualTime = $param["IsRespActualTime"];
        }

        if (array_key_exists("IsInternal",$param) and $param["IsInternal"] !== null) {
            $this->IsInternal = $param["IsInternal"];
        }
    }
}
