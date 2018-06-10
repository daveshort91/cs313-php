<?php

$email = $_POST['email'];
$entry = $_POST['fileToUpload'];
$title = $_POST['title'];



require "connectdb.php";
$db = get_db();

try
{
  $query = 'INSERT INTO entries (title, image, user_id) VALUES(:title, :image, (SELECT u.id FROM users u INNER JOIN emails e ON u.email_id = e.id WHERE e.email = :email))';
	$statement = $db->prepare($query);

  $statement->bindValue(':title', $title);
	$statement->bindValue(':image', $entry);
	$statement->bindValue(':email', $email);

  $statement->execute();



}
catch (Exception $ex)
{
  echo "Counldn't Insert Row: $ex";
  die();
}

header('Location: confirmation.php');

?>
