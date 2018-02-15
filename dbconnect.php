<?

session_start();

$servername = //servername ;
$username = //username;
$db = //dbname;


$conn = new mysqli($servername, $username, $password);

/*check connection */

if ($conn->connect_error)
{
	die("Connection failed: ".  $conn->connect_error)
}
echo "Connected";
?>