 <?php
require_once('../site/connect.php');
$username = $_POST["username"];
$password = $_POST["password"];
if (!empty($username)) {
    if (!empty($password)) {
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "lucrare_an";
        // Create connection
        $query =mysqli_query($conn,"SELECT * from users where username ='$username'");

        if(mysqli_num_rows($query)>0)
        {
            echo "user is already exist";

        }
        $sql="INSERT INTO users (username,password)VALUES($username,$password,$dbname)";
if(mysqli_query($conn,$sql))
{
    echo"data inserted";
}
else
{
    echo"data not inserted";

} 

                //   $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
         if (mysqli_connect_error()) {
            die('Connect Error (' . mysqli_connect_errno() . ') '
                . mysqli_connect_error());
         } else {
             $sql = "INSERT INTO users (username, password)
 values ('$username','$password')";
             if ($conn->query($sql)) {
                 echo "New record is inserted sucessfully";
             } else {
                 echo "Error: " . $sql . " " . $conn->error;
                }
             $conn->close();
         }
     } else {
         echo "Password should not be empty";
        die();
     }
 }
 if($conn->query($sql)==($conn->query($sql)))  {
    echo"user already exist";

}
 else {
     echo "Username should not be empty";
    die();
}
 


