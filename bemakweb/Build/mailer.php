<?php
/* Set e-mail recipient */
$myemail = "contacto@bemak.es";

/* Check all form inputs using check_input function */
$name = check_input($_POST['name'], "Escribe tu nombre");
$empresa = check_input($_POST['empresa'], "Escribe tu empresa");
$email = check_input($_POST['email']);
$phone = check_input($_POST['phone'], "Escribe tu telefono");
$message = check_input($_POST['message'], "Write your message");

/* If e-mail is not valid show error message */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
show_error("E-mail address not valid");
}
/* Let's prepare the message for the e-mail */
$message = "

Nombre: $name
Empresa: $empresa
Email: $email
Telefono: $phone

Message:
$message

";

/* Send the message using mail() function */
mail($myemail, $empresa, $message);

/* Redirect visitor to the thank you page */
header('Location: contacto-tnx.html#perfecto');
exit();

/* Functions we used */
function check_input($data, $problem='')
{
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
if ($problem && strlen($data) == 0)
{
show_error($problem);
}
return $data;
}

function show_error($myError)
{
?>
<html>
<body>

<p>Please correct the following error:</p>
<strong><?php echo $myError; ?></strong>
<p>Hit the back button and try again</p>

</body>
</html>
<?php
exit();
}
?>