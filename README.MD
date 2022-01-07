## Usage
see [aws php sdk](https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/getting-started_installation.html)

## yii2 configurable

```php
'components' => [
    'minio' => [
        'class' => 'yanggs07\S3Client',
        'version' => 'latest',
        'region' => 'us-east-1',
        'endpoint' => 'http://minio.server:9000',
        'use_path_style_endpoint' => true,
        'credentials' => [
            'key' => 'minioadmin',
            'secret' => 'minioadmin',
        ],
    ],
]

```
