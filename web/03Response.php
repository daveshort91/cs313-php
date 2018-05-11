<html>
<body>

<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$major = $_POST['major'];
	$comment = $_POST['comment'];

	echo '<div> Name: ' . $name . '</div>';
	echo '<div> Email: <a href="mailto:' . $email . '">' . $email . '</a></div>';
	echo '<div> Major: ' . $major . '</div>';

		echo '</br><div>Continents Visited:</div>';

		// if (isset($_POST['continent'])){
		// 	echo $_POST['continent']; // Displays value of checked checkbox.
		// }
		foreach($_POST['continent'] as $selected){
			echo $selected."</br>";
		}
		echo '</br>';
//	}

	echo '<div>Comments: ' . $comment . '</div>';
?>

</body>
</html>
