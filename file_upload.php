<?php
    function file_upload($picture, $action = "create"){
        $result = new stdClass();
        $result->fileName = "defaultpicture.jpg";
        $result->error = true;
        $fileName = $picture["name"];
        $fileType = $picture["type"];
        $fileError = $picture["error"];
        $fileSize = $picture["size"];
        $fileTempName = $picture["tmp_name"];
        $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        $filesAccepted = ["png", "jpg", "jpeg"];

        if($fileError == 4){
            $result->errorMessage = "No picture selected, a picture by default was added";
            return $result;
        }else{
            if(in_array($fileExtension, $filesAccepted)){
                if($fileError == 0){
                    if($fileSize < 500000){
                        $fileNewName = uniqid("") . "." . $fileExtension;

                        
                        if($action == "create"){
                            $to = "../pictures/$fileNewName";
                        }else {
                            $to = "pictures/$fileNewName";
                        }
                        if(move_uploaded_file($fileTempName, $to)){
                            $result->error = false;
                            $result->fileName = $fileNewName;
                            return $result;
                        }
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