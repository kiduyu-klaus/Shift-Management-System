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


</body>
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

                    $query = ("SELECT * FROM subject");
                    $result = mysqli_query($connect,$query) or die(mysqli_error($connect));
                    echo "<div class='container'><table width='' class='table table-bordered' border='1' >
                            <tr>
                                <th>Code</th>
                                <th>Subject</th>
                                <th>Action</th>
                            </tr>";
                        while($row = mysqli_fetch_array($result))
                        {
                        echo "<tr>";
                        echo "<td>" . $row['subject_code'] . "</td>";
                        echo "<td>" . $row['subject_description'] . "</td>";
                        echo "<td><form class='form-horizontal' method='post' action='sublist.php'>
                        <input name='subject_id' type='hidden' value='".$row['subject_id']."';>
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
        echo '<script type="text/javascript">
                      alert("Schedule Successfuly Deleted");
                         location="list.php";
                           </script>';
    }
    if(isset($_POST['subject_id']))
    {
    $subject_id = mysqli_real_escape_string($connect,$_POST['subject_id']);
    $sql = mysqli_query($connect,"DELETE FROM subject WHERE subject_id='$subject_id'");
    if(!$sql)
    {
        echo ("Could not delete rows" .mysqli_error($connect));
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
