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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ApplyCertificate请求参数结构体
 *
 * @method string getDvAuthMethod() 获取验证方式：DNS_AUTO = 自动DNS验证，DNS = 手动DNS验证，FILE = 文件验证。
 * @method void setDvAuthMethod(string $DvAuthMethod) 设置验证方式：DNS_AUTO = 自动DNS验证，DNS = 手动DNS验证，FILE = 文件验证。
 * @method string getDomainName() 获取域名。
 * @method void setDomainName(string $DomainName) 设置域名。
 * @method integer getProjectId() 获取项目 ID。
 * @method void setProjectId(integer $ProjectId) 设置项目 ID。
 * @method string getPackageType() 获取证书类型，目前仅支持类型83。83 = TrustAsia C1 DV Free。
 * @method void setPackageType(string $PackageType) 设置证书类型，目前仅支持类型83。83 = TrustAsia C1 DV Free。
 * @method string getContactEmail() 获取邮箱。
 * @method void setContactEmail(string $ContactEmail) 设置邮箱。
 * @method string getContactPhone() 获取手机。
 * @method void setContactPhone(string $ContactPhone) 设置手机。
 * @method string getValidityPeriod() 获取有效期，默认3个月，目前仅支持3个月。
 * @method void setValidityPeriod(string $ValidityPeriod) 设置有效期，默认3个月，目前仅支持3个月。
 * @method string getCsrEncryptAlgo() 获取加密算法，支持 RSA及ECC。
 * @method void setCsrEncryptAlgo(string $CsrEncryptAlgo) 设置加密算法，支持 RSA及ECC。
 * @method string getCsrKeyParameter() 获取密钥对参数，RSA仅支持2048。ECC仅支持prime256v1。加密算法选择ECC时，此参数必填
 * @method void setCsrKeyParameter(string $CsrKeyParameter) 设置密钥对参数，RSA仅支持2048。ECC仅支持prime256v1。加密算法选择ECC时，此参数必填
 * @method string getCsrKeyPassword() 获取CSR 的加密密码。
 * @method void setCsrKeyPassword(string $CsrKeyPassword) 设置CSR 的加密密码。
 * @method string getAlias() 获取备注名称。
 * @method void setAlias(string $Alias) 设置备注名称。
 * @method string getOldCertificateId() 获取原证书 ID，用于重新申请。
 * @method void setOldCertificateId(string $OldCertificateId) 设置原证书 ID，用于重新申请。
 * @method string getPackageId() 获取权益包ID，用于免费证书扩容包使用
 * @method void setPackageId(string $PackageId) 设置权益包ID，用于免费证书扩容包使用
 * @method boolean getDeleteDnsAutoRecord() 获取签发后是否删除自动域名验证记录， 默认为否；仅域名为DNS_AUTO验证类型支持传参
 * @method void setDeleteDnsAutoRecord(boolean $DeleteDnsAutoRecord) 设置签发后是否删除自动域名验证记录， 默认为否；仅域名为DNS_AUTO验证类型支持传参
 * @method array getDnsNames() 获取域名数组（多域名证书可以上传）。	
 * @method void setDnsNames(array $DnsNames) 设置域名数组（多域名证书可以上传）。	
 */
class ApplyCertificateRequest extends AbstractModel
{
    /**
     * @var string 验证方式：DNS_AUTO = 自动DNS验证，DNS = 手动DNS验证，FILE = 文件验证。
     */
    public $DvAuthMethod;

    /**
     * @var string 域名。
     */
    public $DomainName;

    /**
     * @var integer 项目 ID。
     */
    public $ProjectId;

    /**
     * @var string 证书类型，目前仅支持类型83。83 = TrustAsia C1 DV Free。
     */
    public $PackageType;

    /**
     * @var string 邮箱。
     */
    public $ContactEmail;

    /**
     * @var string 手机。
     */
    public $ContactPhone;

    /**
     * @var string 有效期，默认3个月，目前仅支持3个月。
     */
    public $ValidityPeriod;

    /**
     * @var string 加密算法，支持 RSA及ECC。
     */
    public $CsrEncryptAlgo;

    /**
     * @var string 密钥对参数，RSA仅支持2048。ECC仅支持prime256v1。加密算法选择ECC时，此参数必填
     */
    public $CsrKeyParameter;

    /**
     * @var string CSR 的加密密码。
     */
    public $CsrKeyPassword;

    /**
     * @var string 备注名称。
     */
    public $Alias;

    /**
     * @var string 原证书 ID，用于重新申请。
     */
    public $OldCertificateId;

    /**
     * @var string 权益包ID，用于免费证书扩容包使用
     */
    public $PackageId;

    /**
     * @var boolean 签发后是否删除自动域名验证记录， 默认为否；仅域名为DNS_AUTO验证类型支持传参
     */
    public $DeleteDnsAutoRecord;

    /**
     * @var array 域名数组（多域名证书可以上传）。	
     */
    public $DnsNames;

    /**
     * @param string $DvAuthMethod 验证方式：DNS_AUTO = 自动DNS验证，DNS = 手动DNS验证，FILE = 文件验证。
     * @param string $DomainName 域名。
     * @param integer $ProjectId 项目 ID。
     * @param string $PackageType 证书类型，目前仅支持类型83。83 = TrustAsia C1 DV Free。
     * @param string $ContactEmail 邮箱。
     * @param string $ContactPhone 手机。
     * @param string $ValidityPeriod 有效期，默认3个月，目前仅支持3个月。
     * @param string $CsrEncryptAlgo 加密算法，支持 RSA及ECC。
     * @param string $CsrKeyParameter 密钥对参数，RSA仅支持2048。ECC仅支持prime256v1。加密算法选择ECC时，此参数必填
     * @param string $CsrKeyPassword CSR 的加密密码。
     * @param string $Alias 备注名称。
     * @param string $OldCertificateId 原证书 ID，用于重新申请。
     * @param string $PackageId 权益包ID，用于免费证书扩容包使用
     * @param boolean $DeleteDnsAutoRecord 签发后是否删除自动域名验证记录， 默认为否；仅域名为DNS_AUTO验证类型支持传参
     * @param array $DnsNames 域名数组（多域名证书可以上传）。	
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
        if (array_key_exists("DvAuthMethod",$param) and $param["DvAuthMethod"] !== null) {
            $this->DvAuthMethod = $param["DvAuthMethod"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("PackageType",$param) and $param["PackageType"] !== null) {
            $this->PackageType = $param["PackageType"];
        }

        if (array_key_exists("ContactEmail",$param) and $param["ContactEmail"] !== null) {
            $this->ContactEmail = $param["ContactEmail"];
        }

        if (array_key_exists("ContactPhone",$param) and $param["ContactPhone"] !== null) {
            $this->ContactPhone = $param["ContactPhone"];
        }

        if (array_key_exists("ValidityPeriod",$param) and $param["ValidityPeriod"] !== null) {
            $this->ValidityPeriod = $param["ValidityPeriod"];
        }

        if (array_key_exists("CsrEncryptAlgo",$param) and $param["CsrEncryptAlgo"] !== null) {
            $this->CsrEncryptAlgo = $param["CsrEncryptAlgo"];
        }

        if (array_key_exists("CsrKeyParameter",$param) and $param["CsrKeyParameter"] !== null) {
            $this->CsrKeyParameter = $param["CsrKeyParameter"];
        }

        if (array_key_exists("CsrKeyPassword",$param) and $param["CsrKeyPassword"] !== null) {
            $this->CsrKeyPassword = $param["CsrKeyPassword"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("OldCertificateId",$param) and $param["OldCertificateId"] !== null) {
            $this->OldCertificateId = $param["OldCertificateId"];
        }

        if (array_key_exists("PackageId",$param) and $param["PackageId"] !== null) {
            $this->PackageId = $param["PackageId"];
        }

        if (array_key_exists("DeleteDnsAutoRecord",$param) and $param["DeleteDnsAutoRecord"] !== null) {
            $this->DeleteDnsAutoRecord = $param["DeleteDnsAutoRecord"];
        }

        if (array_key_exists("DnsNames",$param) and $param["DnsNames"] !== null) {
            $this->DnsNames = $param["DnsNames"];
        }
    }
}
