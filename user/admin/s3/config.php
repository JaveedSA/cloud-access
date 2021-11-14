<?php
// Bucket Name
$bucket="miniproject1-siva";
require_once('S3.php');			
//AWS access info
$awsAccessKey = 'AKIATLVA32RJ5NHNNNMS';
$awsSecretKey = '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';
//instantiate the class
$s3 = new S3($awsAccessKey, $awsSecretKey);
$s3->putBucket($bucket, S3::ACL_PUBLIC_READ);
?>