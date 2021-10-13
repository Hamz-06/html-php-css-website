<?php
$db = new mysqli('smcse-stuproj00.city.ac.uk', 'adbs887', '200012340', 'adbs887');
if ($db->connect_errno) {
    printf("Connection failed: %s\n", $db->connect_error);
    exit();

} else {

    $email = $_POST['email-booking'];
    $date = $_POST['date'];
    $time = $_POST['time'];
 


    $query_date = "SELECT Date FROM booking WHERE Date = '$date'";
    $query_time = "SELECT Time FROM booking WHERE Time = '$time'";
  
    $reg_time = mysqli_query($db , $query_time);
    $reg_date = mysqli_query($db , $query_date);

    if (mysqli_num_rows($reg_date)>0 ){

        echo "<script language = 'javascript'>
        alert('Date and time already booked. Pick another date');";
        header("Location: booking.php");
    }
    else {
        mysqli_query($db, "INSERT INTO booking (Email, Date, Time) 
        VALUES ('$email', '$date', '$time')")
        //mysqli_query($db, "INSERT INTO UserDetails (First_name) VALUES ('$firstname')");
       // mysqli_query($db, "INSERT INTO UserDetails (Last_name) VALUES ('$lastname')");
        //mysqli_query($db, "INSERT INTO UserDetails (Mobile_number) VALUES ('$phonenum')");
        //mysqli_query($db, "INSERT INTO UserDetails (Email) VALUES ('$email')");
        //mysqli_query($db, "INSERT INTO UserDetails (Password) VALUES ('$password')");
        or die (mysqli_error($db));

      
       
            
            
    
        header("Location: booking.php");



    }
        
}
?>