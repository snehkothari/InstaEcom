<?php
$name=$_POST["name"];
$surname=$_POST["surname"];
$email=$_POST["email1"];
$password=$_POST["password"];
$address=$_POST["ADDRESS"];
$buyer=$_POST["BS"];
// Create connection
$conn = mysqli_connect("localhost", "id7509572_root", "sidsneh", "id7509572_mydb"); 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


//Insert In table of buyer 
if ($buyer =="buyer"){
$sql="select * from Buyer where email='$email';";
        $res=mysqli_query($conn,$sql);
        if (!$res||mysqli_num_rows($res) < 1) {

$sqlInsert = "INSERT INTO Buyer (firstname, lastname, email,address,psword)
VALUES ('$name', '$surname', '$email','$address','$password')";

if ($conn->query($sqlInsert) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sqlInsert . "<br>" . $conn->error;
}
}
else{

      exit("Record already exsits");
}}
if ($buyer =="seller"){
    $sql="select * from Seller where email='$email';";
        $res=mysqli_query($conn,$sql);
        if (!$res||mysqli_num_rows($res) < 1) {
    $sqlInsert = "INSERT INTO Seller (firstname, lastname, email,address,psword)
    VALUES ('$name', '$surname', '$email','$address','$password')";
    
    if ($conn->query($sqlInsert) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sqlInsert . "<br>" . $conn->error;
    }
}
else
{
        exit("Record already exsits");
}}
    $conn->close();
?>
    <html>
        <h1>Welcome  <?php echo $name ?></h1>
 <?php  
$connect = mysqli_connect("localhost", "id7509572_root", "sidsneh", "id7509572_mydb");    
 if(isset($_POST["insert"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO tbl_images(name) VALUES ('$file')";
      $pt=$_POST['product'];
      $pd=$_POST['PD'];
      $tags=$_POST['TAGS'];
      $price=$_POST['price'];
      $pd_info="Insert Into tbl_images(pt,pd,tags,price) VALUES('$pt','$pd','$tags','$price')";
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
      }  
      if(mysqli_query($connect, $pd_info))  
      {  
      }  
 }  
 ?>
