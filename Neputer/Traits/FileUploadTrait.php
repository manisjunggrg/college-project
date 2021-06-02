<?php


namespace Neputer\Traits;

use Image;
use Illuminate\Support\Facades\File;


trait FileUploadTrait
{

    public function _uploadImage($image , $request_for = 'store', $image_name = null)
    {
      $this->image_name = $image_name;

      //If image exist, file upload image
        if($image)
        {
            $this->image_name = time(). mt_rand(4100, 9999)."_".$image->getClientOriginalName();

            //check and create folder if not exist
            if(!file_exists($this->folder_path)){
                File::makeDirectory($this->folder_path, 0775 , true);
            }
            $image->move($this->folder_path, $this->image_name);

            if($request_for == 'update'){
                if($image_name){
                    if(file_exists($this->folder_path.DIRECTORY_SEPARATOR.$image_name)){
                        unlink($this->folder_path . DIRECTORY_SEPARATOR .$image_name);
                    }
                }
            }
        }
     }

    public function uploadImageThumbs( $image, $request_for = 'store', $image_name = null)
    {
        if($image){
            $image_dimension = $this->image_dimensions;
            foreach ($image_dimension as $image_dimension){
                $img = Image::make($this->folder_path . DIRECTORY_SEPARATOR .$this->image_name)->resize($image_dimension['width'], $image_dimension['height']);
                $img->save($this->folder_path . DIRECTORY_SEPARATOR . $image_dimension['width']."_".$image_dimension['height']."_".$this->image_name, 75);
            }
        }
        if ($request_for == 'update') {
            // remove old image thumb images
            foreach ($this->image_dimension as $image_dimension) {
                if (file_exists($this->folder_path . DIRECTORY_SEPARATOR . $image_dimension['width'] . '_' . $image_dimension['height'] . '_' . $image_name)) {
                    unlink($this->folder_path . DIRECTORY_SEPARATOR . $image_dimension['width'] . '_' . $image_dimension['height'] . '_' . $image_name);
                }
            }
        }
     }

    public function removeImage( $image_name )
    {
        if($image_name){
            if(file_exists($this->folder_path. DIRECTORY_SEPARATOR .$image_name)){
                unlink($this->folder_path. DIRECTORY_SEPARATOR. $image_name);
            }
        }


     }
    public function removeImageThumbs($image_name, $dimensions = null)
    {
        if ($image_name) {

            $image_dimensions = $dimensions?$dimensions:$this->image_dimensions;

            // remove old image thumb images
            foreach ($image_dimensions as $image_dimension) {
                if (file_exists($this->folder_path . DIRECTORY_SEPARATOR . $image_dimension['width'] . '_' . $image_dimension['height'] . '_' . $image_name)) {
                    unlink($this->folder_path . DIRECTORY_SEPARATOR . $image_dimension['width'] . '_' . $image_dimension['height'] . '_' . $image_name);
                }
            }

        }
    }

    public function createFolderIfNotExist()
    {
        if (!file_exists($this->folder_path)) {
            File::makeDirectory($this->folder_path, 0775, true);
        }
    }

}
