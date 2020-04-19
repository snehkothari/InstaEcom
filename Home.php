<HTML>
<HEAD>
<TITLE>HOME</TITLE>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
</HEAD>
<BODY >
<H1>WELCOME TO INSTACOMMERCE</H1>
<ul>
  <li><a href="home.php">HOME</a></li>
  <li><a href="about.php">ABOUT</a></li>
  <li><a href="upload.php">UPLOAD PRODUCT</a></li>
  <li><a href="contact.php">CONTACT</a></li>
</ul>
<link rel="stylesheet" type="text/css" href="ext.css">
                <?php  
                $connect = mysqli_connect("localhost", "id7509572_root", "sidsneh", "id7509572_mydb"); 
                $query = "SELECT * FROM tbl_images ORDER BY id DESC";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                          <tr style="padding: 10px;">  
                               <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="200" class="img-thumnail" />  
                                 
                                    <h1>'.($row['tags']).'</h1>
                                    <h1>'.($row['pd']).'</h1>
                                    <h1>'.($row['pt']).'</h1>
                                    <h1>'.($row['price']).'</h1>
                                    </td>
                          </tr>  
                     ';  
                  
                     
                }  
                
                ?>
