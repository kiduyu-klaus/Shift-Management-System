<?php
   include_once("header.php");
   include_once("navbar.php");
?>
<html>
<head>
<style>

body {
    background-image: url();
    background-color: white;
}
th {
    text-align: center;
}
tr {
     height: 30px;
}
td {
    padding-top: 5px;
    padding-left: 20px; 
    padding-bottom: 5px;    
    height: 20px;
}


</style>
</head>
<body><br>
<div class="container">

<body>
    <?php
     echo "<tr>
            <td>";
              // php select option value from database

            $hostname = "localhost";
            $username = "root";
            $password = "";
            $databaseName = "insertion";

            $connect = mysqli_connect("localhost", "root", "") or die("couldn't connect to the database!");

            // connect to mysql database
            mysqli_select_db($connect, "shiftmanagent") or die("couldn't find database!");

                    $query = ("SELECT * FROM user");
                    $result = mysqli_query($connect,$query) or die(mysqli_error($connect));
                    echo "<div class='container'><table width='' class='table table-bordered' border='1' >
                            <tr>
                                <th>FullName</th>
                                <th>Id Number</th>
                                <th>Action</th>
                            </tr>";
                        while($row = mysqli_fetch_array($result))
                        {
                        echo "<tr>";
                        
                        echo "<td>" . $row['fullname'] . "</td>";
                        echo "<td>" . $row['idnumber'] . "</td>";
                        echo "<td><form class='form-horizontal' method='post' action='employeeslist.php'>
                        <input name='id' type='hidden' value='".$row['id']."';>
                        <input type='submit' class='btn btn-danger' name='delete' value='Delete'>
                        </form></td>";
                        echo "</tr>";
                        }
                    echo "</table>";

            echo "</td>           
        </tr>";

       // delete record
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        
    }
    if(isset($_POST['id']))
    {
    $course_id = mysqli_real_escape_string($connect,$_POST['id']);
    $sql = mysqli_query($connect,"DELETE FROM course WHERE id='$course_id'");
    if(!$sql)
    {
        echo ("Could not delete rows" .mysqli_error($connect));
    } else{
        echo '<script type="text/javascript">
                      alert("Schedule Successfuly Deleted");
                         location="list.php";
                           </script>';
    }
    
    }
    ?>
</fieldset>
</form>
</div>
</div>
</div>
</div>
    </body>
    </html>
    
<?php
   include_once("footer.php");

?>
