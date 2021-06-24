<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

/*
*@Created by Swapna
*
*Uploads image to given path with given file name
*/

class Image_Upload extends Model
{
    /*
    * @$image file that is to be uploaded
    * @$destination_path destination path for image upload
    * @$image_name image name to upload image
    */
    public function upload_image($image_file,$destination_path,$image_name)
    {
        if($image_file->isValid()) {
            $image_file->move($destination_path, $image_name);
            return true;
        } else {
            return  false;
        }
    }
    
    /*
    * @$files file that is to be uploaded
    * @$dest_folder destination folder path for image upload
    * 
    * return $image_name uploaded image name;
    */
    public function uploadImage($files,$dest_folder) {
        $root_path = $_SERVER['DOCUMENT_ROOT'].'/';
        // /vegitable_admin/public/
         $destinationPath = $dest_folder."/"; // upload path
        $image_name = date('YmdHis') . "." . $files->getClientOriginalExtension();

        $target_file = $destinationPath . $image_name;
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
        // Check if file already exists
        if (file_exists($root_path.$target_file)) {
          return "Error";
          $uploadOk = 0;
        }
        
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
          return "Error";
          $uploadOk = 0;
        }
        
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
          return "Error";
        // if everything is ok, try to upload file
        } else {
          if (move_uploaded_file($files, $root_path.$target_file)) {
            return $target_file;
          } else {
            return "Error";
          }
        }
            
    }

    public function deleteImage($file_name) {
      $root_path = $_SERVER['DOCUMENT_ROOT'].'/contractor_api/public/';
      $filename = $root_path . $file_name;

      if (file_exists($filename)) {
        unlink($filename);
        return 'File '.$filename.' has been deleted';
      } else {
        return 'Error';
      }
    }
    
}

?>
