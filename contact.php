<?php
error_reporting(E_ALL); ini_set('display_errors', 1);
$title = "Contact";
$description ="Description of the Contact page";


require("templates/header.php");


?>
<!-- To read the data from a form, you use a few superglobal variables.
A superglobal is a built - in PHP variable that is available in any scope: at the
top level of your script, within a function, or within a class method.  the $GLOBALS
superglobal array,  contains a list of all global variables used in your applications. Here, you learn
about three new superglobal arrays:

"Superglobal Array"	"Description"
"$_GET"	"Contains a list of all the field names and values sent by a form using the get  method"
"$_POST"	"Contains a list of all the field names and values sent by a form using the post  method"
"$_REQUEST"	"Contains the values of both the $_GET and $_POST  arrays combined, along with the values of the $_COOKIE  superglobal array" -->

<main class="px-5">
	 <?php
	 // $_POST = array();
	 // print_r ($_POST);
	 //
	 // if (isset($_POST)) {
	 // 	$name =  $_POST["name"];
	 // 	$email = $_POST["email"];
	 // 	$subject = $_POST["subject"];
	 // }
	 	?>
<!-- 	The enctype attribute specifies how the form-data should be encoded when submitting it to the server.
The enctype attribute can be used only if method="post". -->


<!-- The $_SERVER["PHP_SELF"] is a super global variable that returns the filename of the currently executing script.
So, the $_SERVER["PHP_SELF"] sends the submitted form data to the page itself, instead of jumping to a different page.
This way, the user will get error messages on the same page as the form. -->
	<form action="contact.php" method="post" class="px-0 my-5">
		<label for = "name"> Name </label>
		<input class="rounded-pill mx-3" type="text" id="name" name="name"> <br> <br>

		<label for = "email"> Email </label>
		<input class="rounded-pill mx-4" type="text" id="email" name="email"><br> <br>


		<label for = "subject"> Subject </label>
		<input class="rounded-pill mx-2" type="text" id="subject" name="subject" size="35"><br> <br>
	<!-- 	 <label for="upload">Upload an Image</label>
            <input type="file" id="upload" name="image" class="form-control-file"> -->


		<input type="submit"  class="px-3 rounded-pill">

	</form>


</main>


<?php
require("templates/footer.php");

?>
