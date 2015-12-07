<html><head><title>aasd</title></head><body>
<?php
/*

echo $_POST['user'];
echo $_POST['eMail'];
echo $_POST['password'];
echo $_POST['passwordConfirm'];
*/
$pUser = $_POST['user'];
$pEMail = $_POST['eMail'];
$pPassword = $_POST['password'];
$pPasswordConfirm = $_POST['passwordConfirm'];
$ID = 0;

/*
 * Connection to database: Auslagern!
 */


// Create connection
$conn = new mysqli("localhost", "denkzettel", "some_pass", "denkzettel");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

/*
 * Überprüfung ob Eingabe korrekt und kein Daten bereits existieren: Auslagern!
 */

$sql = "SELECT * FROM user";

$db_erg = mysqli_query( $conn, $sql );
if ( ! $db_erg )
{
    die('Ungültige Abfrage: ' . mysqli_error());
}
/*
echo '<table border="1">';
while ($zeile = mysqli_fetch_array( $db_erg, MYSQL_ASSOC))
{
    echo "<tr>";
    echo "<td>". $zeile['ID_User'] . "</td>";
    echo "<td>". $zeile['userName'] . "</td>";
    echo "<td>". $zeile['eMail'] . "</td>";
    echo "<td>". $zeile['password'] . "</td>";
    echo "</tr>";
}
echo "</table>";
*/
/*
 * If user already exist, it's not possible to sign in
 */

$sqlUser = "SELECT userName FROM user";
$result = mysqli_query($conn, $sqlUser);
foreach($result as $item)
{
    if($pUser == $item['userName']){
       // echo "User existiert bereits!";
        header('Location: ../error_page.php');
        exit;
    }
}

/*
 * If E-Mail already exist, it's not possible to sign in
 */
$sqlEMail = "SELECT eMail FROM user";
$result = mysqli_query($conn, $sqlEMail);
foreach($result as $item)
{
    if($pEMail == $item['eMail']){
        //echo "E-Mail existiert bereits!";
        header('Location: ../error_page.php');
        exit;
    }
}

if($pPassword != $pPasswordConfirm)
{
    //echo "Das Passwort ist nicht korrekt";
    header('Location: ../error_page.php');
    exit;
}


$table = 'user';

$sql = "INSERT INTO $table (userName , eMail , password)
             VALUES ( '{$_REQUEST['user']}',
                      '{$_REQUEST['eMail']}',
                      '{$_REQUEST['password']}' )";
/*
$sql = "INSERT INTO user ('userName', 'eMail', 'password')
VALUES ($pUser, $pEMail, $pPassword)";
*/
if ($conn->query($sql) === TRUE) {
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
header('Location: ../redirect_page.php');
exit;

$conn->close();
?>
    </body>
</html>
<!--


-->