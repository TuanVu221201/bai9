<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Untitled Document</title>
    </head>
    <body>
        <form action="" method="post" enctype="multipart/form-data" name="froml" id="forml">
            <input type="hidden" name="MAX_FILE-SIZE" value="5000000">
            <label>
                Upload
                <input type="file" name="ufile" id="ufile" />
            </label>
            <p> <input type="submit" name="upload" id="upload" value="Up load" /> </p>
        </form>
        <?php
            $target_path = "upload/";
            if(isset($_FILES['ufile'])){
                $target_path = $target_path.basename($_FILES['ufile']['name']);
                if (!preg_match('/\.(jpg|gif)$/i', basename($_FILES['ufile']['name']))){
                    echo "Khong phai file anh";
                }
                else{
                    if(file_exists($target_path)){
                        echo basename($_FILES['ufile']['name'])."has been upload";
                    }
                    else{
                        echo "There was an error uploading the file, please try again";
                    }
                }
            }
        ?>
    </body>
</html>
