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

namespace TencentCloud\Domain\V20180808;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Domain\V20180808\Models as Models;

/**
 * @method Models\BatchModifyDomainInfoResponse BatchModifyDomainInfo(Models\BatchModifyDomainInfoRequest $req) 本接口 ( BatchModifyDomainInfo ) 用于批量域名信息修改 。
 * @method Models\BidPreDomainsResponse BidPreDomains(Models\BidPreDomainsRequest $req) 用户合作商预释放出价
 * @method Models\CheckBatchStatusResponse CheckBatchStatus(Models\CheckBatchStatusRequest $req) 本接口 ( CheckBatchStatus ) 用于查询批量操作日志状态 。
 * @method Models\CheckDomainResponse CheckDomain(Models\CheckDomainRequest $req) 检查域名是否可以注册。
 * @method Models\CreateCustomDnsHostResponse CreateCustomDnsHost(Models\CreateCustomDnsHostRequest $req) 创建自定义DNS Host
 * @method Models\CreateDomainBatchResponse CreateDomainBatch(Models\CreateDomainBatchRequest $req) 本接口 ( CreateDomainBatch ) 用于批量域名注册 。
 * @method Models\CreateDomainRedemptionResponse CreateDomainRedemption(Models\CreateDomainRedemptionRequest $req) 创建赎回订单。
 * @method Models\CreatePhoneEmailResponse CreatePhoneEmail(Models\CreatePhoneEmailRequest $req) 此接口用于创建有效的手机、邮箱
 * @method Models\CreateTemplateResponse CreateTemplate(Models\CreateTemplateRequest $req) 本接口 ( CreateTemplate ) 用于添加域名信息模板 。
 * @method Models\DeleteCustomDnsHostResponse DeleteCustomDnsHost(Models\DeleteCustomDnsHostRequest $req) 删除自定义DNS Host
 * @method Models\DeletePhoneEmailResponse DeletePhoneEmail(Models\DeletePhoneEmailRequest $req) 此接口用于删除已验证的手机邮箱
 * @method Models\DeleteReservedPreDomainInfoResponse DeleteReservedPreDomainInfo(Models\DeleteReservedPreDomainInfoRequest $req) 用于清除多余的预定域名信息
 * @method Models\DeleteTemplateResponse DeleteTemplate(Models\DeleteTemplateRequest $req) 本接口 ( DeleteTemplate ) 用于删除信息模板。
 * @method Models\DescribeBatchOperationLogDetailsResponse DescribeBatchOperationLogDetails(Models\DescribeBatchOperationLogDetailsRequest $req) 本接口 ( DescribeBatchOperationLogDetails ) 用于获取批量操作日志详情。
 * @method Models\DescribeBatchOperationLogsResponse DescribeBatchOperationLogs(Models\DescribeBatchOperationLogsRequest $req) 本接口 ( DescribeBatchOperationLogs ) 用于获取批量操作日志 。
 * @method Models\DescribeCustomDnsHostSetResponse DescribeCustomDnsHostSet(Models\DescribeCustomDnsHostSetRequest $req) 查询自定义DNS Host
 * @method Models\DescribeDomainBaseInfoResponse DescribeDomainBaseInfo(Models\DescribeDomainBaseInfoRequest $req) 本接口 (  DescribeDomainBaseInfo) 获取域名基本信息。
 * @method Models\DescribeDomainNameListResponse DescribeDomainNameList(Models\DescribeDomainNameListRequest $req) 本接口 (  DescribeDomainNameList ) 我的域名列表。
 * @method Models\DescribeDomainPriceListResponse DescribeDomainPriceList(Models\DescribeDomainPriceListRequest $req) 按照域名后缀获取对应的价格列表
 * @method Models\DescribeDomainSimpleInfoResponse DescribeDomainSimpleInfo(Models\DescribeDomainSimpleInfoRequest $req) 获取域名实名信息详情
 * @method Models\DescribePhoneEmailListResponse DescribePhoneEmailList(Models\DescribePhoneEmailListRequest $req) 本接口用于获取已验证的手机邮箱列表
 * @method Models\DescribePreDomainListResponse DescribePreDomainList(Models\DescribePreDomainListRequest $req) 用户服务商提前获取预释放域名数据，查询数据根据结束时间进行倒序。
 * @method Models\DescribeReservedBidInfoResponse DescribeReservedBidInfo(Models\DescribeReservedBidInfoRequest $req) 接口用于获取合作商竞价过程中竞价详情数据
 * @method Models\DescribeReservedPreDomainInfoResponse DescribeReservedPreDomainInfo(Models\DescribeReservedPreDomainInfoRequest $req) 合作商用于查询预约预释放状态信息内容
 * @method Models\DescribeTemplateResponse DescribeTemplate(Models\DescribeTemplateRequest $req) 本接口 (DescribeTemplate) 用于获取模板信息。
 * @method Models\DescribeTemplateListResponse DescribeTemplateList(Models\DescribeTemplateListRequest $req) 本接口 (DescribeTemplateList) 用于获取信息模板列表。
 * @method Models\DescribeTldListResponse DescribeTldList(Models\DescribeTldListRequest $req) 用于获取域名注册当前支持注册的后缀
 * @method Models\ModifyCustomDnsHostResponse ModifyCustomDnsHost(Models\ModifyCustomDnsHostRequest $req) 修改自定义DNS Host
 * @method Models\ModifyDomainDNSBatchResponse ModifyDomainDNSBatch(Models\ModifyDomainDNSBatchRequest $req) 本接口 ( ModifyDomainDNSBatch) 用于批量域名 DNS 修改 。
 * @method Models\ModifyDomainOwnerBatchResponse ModifyDomainOwnerBatch(Models\ModifyDomainOwnerBatchRequest $req) 本接口 ( ModifyDomainOwnerBatch) 用于域名批量账号间转移 。
 * @method Models\ModifyIntlCustomDnsHostResponse ModifyIntlCustomDnsHost(Models\ModifyIntlCustomDnsHostRequest $req) 国际站-修改DNS Host
 * @method Models\ModifyTemplateResponse ModifyTemplate(Models\ModifyTemplateRequest $req) 修改模板信息
 * @method Models\RenewDomainBatchResponse RenewDomainBatch(Models\RenewDomainBatchRequest $req) 本接口 ( RenewDomainBatch ) 用于批量续费域名 。

 * @method Models\ReservedPreDomainsResponse ReservedPreDomains(Models\ReservedPreDomainsRequest $req) 用于合作商对预释放域名进行预留。
 * @method Models\SendPhoneEmailCodeResponse SendPhoneEmailCode(Models\SendPhoneEmailCodeRequest $req) 此接口用于发送手机邮箱验证码。
 * @method Models\SetDomainAutoRenewResponse SetDomainAutoRenew(Models\SetDomainAutoRenewRequest $req) 本接口 ( SetDomainAutoRenew ) 用于设置域名自动续费。
 * @method Models\SyncCustomDnsHostResponse SyncCustomDnsHost(Models\SyncCustomDnsHostRequest $req) 同步自定义DNS Host
 * @method Models\TransferInDomainBatchResponse TransferInDomainBatch(Models\TransferInDomainBatchRequest $req) 本接口 ( TransferInDomainBatch ) 用于批量转入域名 。
 * @method Models\TransferProhibitionBatchResponse TransferProhibitionBatch(Models\TransferProhibitionBatchRequest $req) 本接口 ( TransferProhibitionBatch ) 用于批量禁止域名转移 。
 * @method Models\UpdateProhibitionBatchResponse UpdateProhibitionBatch(Models\UpdateProhibitionBatchRequest $req) 本接口 ( UpdateProhibitionBatch ) 用于批量禁止更新锁。
 * @method Models\UploadImageResponse UploadImage(Models\UploadImageRequest $req) 本接口 ( UploadImage ) 用于证件图片上传 。
 */

class DomainClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "domain.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "domain";

    /**
     * @var string
     */
    protected $version = "2018-08-08";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("domain")."\\"."V20180808\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
