<?php include 'header.php'; ?><style><?php include 'style.css'; ?></style>

<?php



// Check if the form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if file was uploaded without errors
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){

        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];

        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");

        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");

        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it

                move_uploaded_file($_FILES["photo"]["tmp_name"], "uploads/" . $filename);

                // echo "Your file was uploaded successfully.";
                // echo $photo;

                // $message = shell_exec('sh /home/students/niedzwid/tensorflow/test.sh'); WORKING
                // $message = exec('/home/students/niedzwid/tensorflow/test.sh  2>&1');

                $message = shell_exec('sh /home/students/niedzwid/tensorflow/test.sh '. $filename);
                // $message = ('python /home/students/niedzwid/tensorflow/Otest.sh ' . $filename );
                // print_r($message);
                // echo($message);

              $filePath = "uploads/$filename";


              echo " <div class='main'>
                        <div class='message'> $message </div>
                        <br>

                        <div>
                          <img class='img' src=".$filePath."  />
                        </div>

                    </div>" ;





        } else{
            echo "Error: There was a problem uploading your file. Please try again.";
        }
    } else{
        echo "Error: " . $_FILES["photo"]["error"];
    }
}

?>
















<!-- public_html/CPS4721/uploads -->
