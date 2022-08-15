<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\InitializeResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $transactionId;

    /**
     * @var string
     */
    public $clientCfg;
    protected $_name = [
        'transactionId' => 'TransactionId',
        'clientCfg'     => 'clientCfg',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->transactionId) {
            $res['TransactionId'] = $this->transactionId;
        }
        if (null !== $this->clientCfg) {
            $res['clientCfg'] = $this->clientCfg;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TransactionId'])) {
            $model->transactionId = $map['TransactionId'];
        }
        if (isset($map['clientCfg'])) {
            $model->clientCfg = $map['clientCfg'];
        }

        return $model;
    }
}
