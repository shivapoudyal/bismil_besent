<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class CloudUploadModel extends CI_Model {
 
function amazons3Upload( $image_name , $fileTempName, $upload_folder ){
 
    $awsAccessKey = 'AKIAJOXC3IOJXJ72Y4WA'; //AWS account access key
    $awsSecretKey = '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'; //AWS account secret key
    $bucket_name  = 'shivabucketaug';  //Bucket name 
    $s3           = new S3($awsAccessKey, $awsSecretKey);
    $s3->putBucket($bucket_name);
        
    //move the file
    if ($s3->putObjectFile($fileTempName, $bucket_name, $upload_folder.'/'.$image_name, S3::ACL_PUBLIC_READ)) {
      return '1'; //return 1 it will success
    }else{
      return '7';
    }
  }
}