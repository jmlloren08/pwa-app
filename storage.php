<?php

putenv("GOOGLE_APPLICATION_CREDENTIALS=C:\\xampp\\htdocs\\pwa-app\\credentials\\pwa-app-project-386102-f7b3fc0556cc.json");
require __DIR__ . '/vendor/autoload.php';
use Google\Cloud\Storage\StorageClient;
$projectId = 'pwa-app-project';
$storage = new StorageClient([
    'projectId' => $projectId
]);
$bucketName = 'pwa-app-bucket';
$bucket = $storage->createBucket($bucketName);