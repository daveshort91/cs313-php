<?php
  function get_db() {
  	$db = NULL;
  	try {
      $dbUrl = getenv('DATABASE_URL');
  		if (!isset($dbUrl) || empty($dbUrl)) {

  			$dbUrl = "postgres://coojwhvzpsggyt:ac510fc22c734d804f00cd3d140cd581169d8afdc2a92e8d4838b9c26817e35d@ec2-54-204-39-46.compute-1.amazonaws.com:5432/ddablnlhhmt81l";

  		}
      // $dbopts = parse_url($dbUrl);
  		// $dbHost = $dbopts["ec2-54-204-39-46.compute-1.amazonaws.com"];
  		// $dbPort = $dbopts["5432"];
  		// $dbUser = $dbopts["coojwhvzpsggyt"];
  		// $dbPassword = $dbopts["ac510fc22c734d804f00cd3d140cd581169d8afdc2a92e8d4838b9c26817e35d"];
  		// $dbName = ltrim($dbopts["ddablnlhhmt81l"],'/');

      // $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
      $db = new PDO("$dbUrl", $dbUrl);


      $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    }
    catch (PDOException $ex) {

  		echo "Couldn't connect: $ex";
  		die();
  	}

    return $db;

  }
?>
