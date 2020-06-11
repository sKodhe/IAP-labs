<?php
class FileUploader{
    //Member Variables
    private static $target_directory="uploads/";
    private static $size_limit=50000;//size in bytes
    private $uploadOk= false;
    private $file_original_name;
    private $file_type;
    private $file_size;
    private $final_file_name;

    //getters and setters
    public function setOriginalName($name)
    {
        $this->file_original_name=$name;
        
    }

    public function getOriginalName($name)
    {
        return $this->file_original_name;
    }

    public function setFileType($type)
    {
         $this->file_type=$type;   
    }

    public function getFileType($type)
    {
        return $this->file_type;
    }

    public function setFileSize($size)
    {
        $this->file_size=$size;
    }

    public function getFileSize($size)
    {
        return $this->file_size;
    }

    public function setFinalName($final_name)
    {
        $this->final_file_name=$final_name;
    }

    public function getFinalName($final_name)
    {
        return $this->final_file_name;
    }

    //methods
    public function uploadFile()
    {   
        $this->fileAlreadyExists();
        
        
    }

    public function fileAlreadyExists()
    {
        $fileObj=new FileUploader;
        $name=$_FILES["fileToUpload"]["name"];
        $fileObj->setOriginalName($name);
        $target_file = self::$target_directory . basename($name);
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
        }else {
                $this->fileTypeIsCorrect();
        }
        
    }

    public function saveFilePathTo()
    {
        $name=$_FILES["fileToUpload"]["name"];
        $file_path=self::$target_directory.$name;
    }

    public function moveFile()
    {   
        $name=$_FILES["fileToUpload"]["name"];
        $target_file = self::$target_directory . basename($name);
       
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        }
    }

    public function fileTypeIsCorrect()
    {
        $fileObj=new FileUploader;
        $name=$_FILES["fileToUpload"]["name"];
        $target_file = self::$target_directory . basename($name);
        $imageFIleType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
        if ($imageFIleType!="jpg" && $imageFIleType!="png"&& $imageFIleType !="jpeg" && $imageFIleType !="gif") {
            echo $fileObj->uploadOk;
        }
        
       $check=getimagesize(($_FILES['fileToUpload']['tmp_name']));
       if ($check!==false) {
           echo "File is an image - ".$check["mime"].".";
           $fileObj->uploadOk=true;
           $this->fileSizeIsCorrect();
             
       } else {
          echo "File is not an Image";
          return $fileObj->uploadOk;
       }
       
        
    }

    public function fileSizeIsCorrect()
    {   
        $fileObj=new FileUploader;
        $size=$_FILES['fileToUpload']['size'];
        $fileObj->setFileSize($size);
        if ($size>self::$size_limit) {
            echo "Oops!File Too large!";
            $fileObj->uploadOk;
        }else{
            echo "File Size check OK ***";
            $fileObj->uploadOk=true;
            $this->moveFile();
            
        }
    }

    public function fileWasSelected()
    {
        
    }
}
