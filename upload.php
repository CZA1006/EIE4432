<?php

function doUpload($files)
{

    //Suffix to allow uploading files
    $allowedExts = [
        "gif",
        "jpeg",
        "jpg",
        "png"
    ];

    $allowedType = [
        'image/gif',
        'image/jpeg',
        'image/jpg',
        'image/pjpeg',
        'image/x-png',
        'image/png',
    ];

    $allowedMaxSize = 2097152;

    if ($files['profileimage']['size'] > $allowedMaxSize) {
        return [
            'code' => 0,
            'msg' =>  "This picture is too large, please upload a picture within 2 MB",
            'file_path' => '',
        ];

    }

    $temp = explode(".", $files["profileimage"]["name"]); //
    $extension = end($temp);        // Get file suffix

    if (in_array($files['profileimage']['type'],$allowedType) && in_array($extension,$allowedExts) && $files['profileimage']['size'] < $allowedMaxSize) {
        //error
        if ($files["profileimage"]["error"] > 0)
        {
            return [
                'code' => 0,
                'msg' => "error：: " . $files["profileimage"]["error"],
                'file_path' => '',
            ];
        }


        $fileName = md5(time().rand(1000,9999)) . '.'. $extension;
        move_uploaded_file($files["profileimage"]["tmp_name"],"../upload/" . $fileName);


        return [
            'code' => 1,
            'msg' => "success",
            'file_path' => "upload/" .$fileName,
        ];
    } else {
        return [
            'code' => 0,
            'msg' => "error:Picture is too large",
            'file_path' => "",
        ];
    }

}
