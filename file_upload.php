<?php
function file_upload($picture){
        $result = new stdClass();
        $result->fileName = "defaultpicture.jpg";
        $result->error = 1;
        $fileName = $picture["title"];
        $fileType = $picture["type"];
        $fileError = $picture["error"];
        $fileSize = $picture["size"];

        $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        $filesAccepted = ["png", "jpg", "jpeg"];

        if($fileError == 4){
            $result->errorMessage = "No picture selected, a picture by default was added";
            return $result;
        }else{
            if(in_array($fileExtension, $filesAccepted)){
                if($fileError == 0){
                    if($fileSize < 500000){
                        $fileNewName = uniqid();
                    }else {
                        $result->errorMessage = "Please choose a smaller picture. Maximum = 500kb";
                    }
                }else {
                    $result->errorMessage = "There was an error while uploading file $fileError";
                }

            }else {
                $result->errorMessage = "Invalid file, please select a different one";
                return $result;
            }
        }
}


?>