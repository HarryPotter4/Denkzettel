
<html><head><title>aasd</title></head><body>
<?php
echo $_POST['lUser'];
echo $_POST['lPassword'];

$lUser = $_POST['lUser'];
$lPassword = $_POST['lPassword'];

/*
 * Connection to database: Auslagern!
 */


// Create connection
$conn = new mysqli("193.196.7.22", "denkzettel", "some_pass", "denkzettel");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

/*
 * Überprüfung ob Eingabe korrekt und kein Daten bereits existieren: Auslagern!
 */

$sql = "SELECT userName,password FROM user WHERE userName = '{$lUser}'";

$result = mysqli_query( $conn, $sql );
if (!$result)
{
    die('Ungültige Abfrage: ' . mysqli_error());
}
/*
echo '<table border="1">';
while ($zeile = mysqli_fetch_array( $result, MYSQL_ASSOC))
{
    echo "<tr>";
    echo "<td>". $zeile['userName'] . "</td>";
    echo "<td>". $zeile['password'] . "</td>";
    echo "</tr>";
}
echo "</table>";
*/
foreach($result as $item)
{
    if($lPassword == $item['password']){

        header('Location: ../redirect_home.php');
        exit;
    }
    else{
       // echo "Das Password ist falsch";
        header('Location: ../error_page.php');
        exit;
    }
}

$conn->close();



?>




</body>
</html>