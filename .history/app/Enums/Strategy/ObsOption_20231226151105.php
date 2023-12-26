<?php

namespace App\Enums\Strategy;

final class CosOption
{
    /** @var string 访问地址 */
    const Endpoint = 'endpoint';

    /** @var string secretKey */
    const SecretKey = 'secretKey';

    /** @var string accessKey */
    const AccessKey = 'accessKey';

    /** @var string 所属地域 */
    const Region = 'region';

    /** @var string 储存桶名称 */
    const Bucket = 'bucket';
}
