class ObsOption
{
    public static function getInitialData()
    {
        $data = [
            'accessKey' => 'your_access_key',
            'secretKey' => 'your_secret_key',
            'endpoint' => 'obs.cn-north-1.myhuaweicloud.com',
            'bucket' => 'your_bucket_name',
            'region' => 'cn-north-1',
            // Add more options as needed
        ];

        return $data;
    }
}
