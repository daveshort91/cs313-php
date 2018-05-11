<html>
<body>
<form action="03Response.php" method="post">

<div>Name: <input name="name" type="text"></input></div>
<div>Email: <input name="email" type="text"></input></div>
<div><input name="major" type="radio" value="Computer Science">Computer Science</div>
<div><input name="major" type="radio" value="Computer Science">Web Design and Development</div>
<div><input name="major" type="radio" value="Computer Science">Computer Information Technology</div>
<div><input name="major" type="radio" value="Computer Science">Computer Engineering</div>
<input name="continent[]" type="checkbox" value="North America">North America</input>
<input name="continent[]" type="checkbox" value="South America">South America</input>
<input name="continent[]" type="checkbox" value="Europe">Europe</input>
<input name="continent[]" type="checkbox" value="Asia">Asia</input>
<input name="continent[]" type="checkbox" value="Australia">Australia</input>
<input name="continent[]" type="checkbox" value="Africa">Africa</input>
<input name="continent[]" type="checkbox" value="Antarctica">Antarctica</input>

<div><input name="comment" type="textarea"></input></div>

<div><button type="submit" value="Submit">Submit</button></div>

</form>
</body>
</html>
