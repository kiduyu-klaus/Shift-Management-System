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

      $connect = mysqli_connect("localhost", "root", "") or die("couldn't connect to the database!");

      // connect to mysql database
      mysqli_select_db($connect, "shiftmanagent") or die("couldn't find database!");

      $query = ("SELECT * FROM job");
      $result = mysqli_query($connect, $query) or die(mysqli_error($connect));
      echo "<div class='container'><table width='' class='table table-bordered' border='1' >
                            <tr>
                                <th>Name</th>
                                <th>Business</th>
                                 <th>Action</th>
                            </tr>";
      while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['business'] . "</td>";
        echo "<td><form class='form-horizontal' method='post' action='joblist.php'>
                        <input name='id' type='hidden' value='" . $row['id'] . "';>
                        <input type='submit' class='btn btn-danger' name='delete' value='Delete'>
                        </form></td>";
        echo "</tr>";
      }
      echo "</table>";

      echo "</td>           
        </tr>";

      // delete record
      if ($_SERVER['REQUEST_METHOD'] == "POST") {
        echo '<script type="text/javascript">
                      alert("row Successfuly Deleted");
                         location="list.php";
                           </script>';
      }
      if (isset($_POST['id'])) {
        $faculty_id = mysqli_real_escape_string($connect, $_POST['id']);
        $sql = mysqli_query($connect, "DELETE FROM job WHERE id='$id'");
        if (!$sql) {
          echo ("Could not delete rows" . mysqli_error($connect));
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
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "footer.php";
include_once("footer.php");

?>