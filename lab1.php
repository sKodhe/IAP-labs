<?php
include_once 'DBConnector.php';
include_once 'user.php';
include_once 'fileUploader.php';
$con = new DBConnector;

if (isset($_POST['btn-save'])) {
    
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $city = $_POST['city_name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $utc_timestamp=$_POST['utc_timestamp'];
    $offset=$_POST['time_zone_offset'];



    $user = new User($first_name, $last_name, $city, $username, $password);
 
    $uploader=new FileUploader();
    if(!$user->validateForm()){
        $user->createFormErrorSessions();
        header("Refresh:0");
        die();
    }
    $res = $user->save();
    //call uploadFile() function, which returns
    $file_upload_response=$uploader->uploadFile();
    //check if save() operation was successful
    if($res && $file_upload_response){
        echo "Save operation was successful ***";
    }else{
        
    }
    // LAB 2

    if (!$user->validateForm()) {
        $user->createFormErrorSessions();
        header("Refresh:0");
        die();
    }

}
?>

<html>

<head>
    <title> LAB ONE </title>
    <!-- name="user_details" id="user_details" onsubmit="return validateForm()" action="<?= $_SERVER['PHP_SELF'] ?>" -->
    <script type="text/javascript" src="validate.js"></script>
    <link rel="stylesheet" type="text/css" href="validate.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="timexone.js"></script>
</head>

<body>
    <form method="POST" enctype="multipart/form-data">
        <table align="center">
            <tr>
                <td>
                    <div id="form-errors">
                        <?php
                        session_start();
                        if (!empty($_SESSION['form_errors'])) {
                            echo "" . $_SESSION['form_errors'];
                            unset($_SESSION['form_errors']);
                        }
                        ?>
                    </div>
                </td>
            </tr>
            <tr>
                <td><input type="text" name="first_name" placeholder="First Name"></td>
            </tr>
            <tr>
                <td><input type="text" name="last_name" placeholder="Last Name"></td>
            </tr>
            <tr>
                <td><input type="text" name="city_name" placeholder="City"></td>
            </tr>
            <tr>
                <td><input type="text" name="username" placeholder="Username"></td>
            </tr>
            <tr>
                <td><input type="password" name="password" placeholder="Password"></td>
            </tr>
            <tr>
                <td>Profile image: <input type="file" name="fileToUpload" id="fileToUpload"></td>
            </tr>

            <tr>
                <td><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
            </tr>

            <input type="hidden" name="utc_timestamp" id="utc_timestamp" value="">
            <input type="hidden" name="time_zone_offset" id="time_zone_offset" value="">
            
            <tr>
                <td><a href="login.php">Login</a></td>
            </tr>
        </table>
    </form>

</body>

</html>