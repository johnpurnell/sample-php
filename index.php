<h1>Demonstration of PHP app with an ASCII cow</h1>

<?php
require __DIR__ . '/vendor/autoload.php';

use Cowsayphp\Farm;

header('Content-Type: text/plain');

$text = "Set a message by adding ?message=<message here> to the URL";
if(isset($_GET['message']) && $_GET['message'] != '') {
	$text = htmlspecialchars($_GET['message']);
}
?>

<?php
$cow = Farm::create(\Cowsayphp\Farm\Cow::class);
echo $cow->say($text);
