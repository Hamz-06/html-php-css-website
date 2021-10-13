<?php
$db = new mysqli('smcse-stuproj00.city.ac.uk', 'adbs887', '200012340', 'adbs887');
if ($db->connect_errno) {
    printf("Connection failed: %s\n", $db->connect_error);
    exit();

} else {

    $username =$_POST['username'];
    $firstname =$_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phonenum = $_POST['phonenum'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $hashed_pass = md5($password);
    $query_username = "SELECT Username FROM UserDetails WHERE Username = '$username'";


    $reg_username = mysqli_query($db , $query_username);
    if (mysqli_num_rows($reg_username)>0){
        echo "<script language = 'javascript'>
        alert('Username already exists. Please pick another one.');";
        header("Location: form.php");
    }
    else {
        mysqli_query($db, "INSERT INTO UserDetails (Username, First_name, Last_name, Mobile_number, Email, Password) 
        VALUES ('$username', '$firstname', '$lastname', '$phonenum', '$email', '$password')")
        //mysqli_query($db, "INSERT INTO UserDetails (First_name) VALUES ('$firstname')");
       // mysqli_query($db, "INSERT INTO UserDetails (Last_name) VALUES ('$lastname')");
        //mysqli_query($db, "INSERT INTO UserDetails (Mobile_number) VALUES ('$phonenum')");
        //mysqli_query($db, "INSERT INTO UserDetails (Email) VALUES ('$email')");
        //mysqli_query($db, "INSERT INTO UserDetails (Password) VALUES ('$password')");
        or die (mysqli_error($db));

        header("Location: home.php");

    }
        
}
?>

