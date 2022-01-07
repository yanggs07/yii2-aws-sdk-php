<?php
namespace yanggs07;
/**
 * @property string $version aws version, when use minio, fill it with `latest`
 * @property string $region aws region, when use minio, fill it with `us-east-1`
 * @property string $endpoint
 * @property bool $use_path_style_endpoint
 * @property array $credentials
 */
class S3Client extends \Aws\S3\S3Client implements \yii\base\Configurable
{
}

