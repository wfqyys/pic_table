<?php

namespace App\Enums\Strategy;

final class ObsOption
{
    /** @var string 访问地址 */
    const Endpoint = 'endpoint';

    /** @var string secretKey */
    const SecretKey = 'secretKey';

    /** @var string accessKey */
    const AccessKey = 'accessKey';
    /** @var string 储存桶名称 */
    const Bucket = 'bucket';
}
