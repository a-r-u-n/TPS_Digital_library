<?php



  $servername ="localhost";
  $username= "root";
  $password= "root";
  $dbname= "digitalLib";


$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT book_title, author, description, filepath,image_link FROM ebooks";
$result = $conn->query($sql);
echo '<section class="ebooks-content">
<h3 style="text-align:left; color:white; background-color:#3A3386; padding:15px 10px;">The eBooks provided on this platform include Public Domain Books and Copyrighted Books, shared under the principles of fair use for educational purposes only. These materials are intended to support teaching and learning within our school community. Any unauthorized circulation or distribution of these materials may violate copyright laws. We encourage all users to respect the intellectual property rights of authors and publishers.</h3>
      <table class="ebooks-table">
      <thead>
       <!-- <tr>
        <th></th>
        <th>Book Title</th>
           <th>Author</th>
            <th>Description</th> 
       </tr> -->
    </thead>
   <tbody>';

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
       /* echo "<td>";
        echo "<h2><a href='" . $row["filepath"] . "'>" . $row["book_title"] . "</a></h2>";
        echo "<p>Author: " . $row["author"] . "</p>";
        echo "<p>Description: " . $row["description"] . "</p>";
        echo "</td>";
        echo "<br>";
        */
     $booklink=$row['filepath'];
                echo '<tr>';

                  //<td><a  href='. $row["filepath"].'>'. $row["book_title"] . '</a></td>
                //  echo '<td><img id="bookimg" src='.$row["image_link"].'></td>';
                  
                 //echo '<td><a href="'. $row["filepath"] .'" onclick="toggleSection();">'.'<img id="bookimg" src='.$row["image_link"].'</a></td>';
                 echo '<td><a href="' . $row["filepath"] . '" onclick="toggleSection();"><img id="bookimg" src="' . $row["image_link"] . '"></a></td>';
                 echo '<td><a style="font-size:25px;" href="'. $row["filepath"] .'" onclick="toggleSection();">'. $row["book_title"] . '</a><br><br>';
               
                 echo  'Author:'.$row["author"].'<br><br>'  ;
                 echo     $row["description"].'</td>
                 </tr>
                 <tr>';
        
   
    }
    echo "</tbody>";
    echo "</table>";
    echo "</section>";
} else {
    echo "0 results";
}

$conn->close();
?>