<script type="text/javascript">
	
function formhash(form, password) {
    // Create a new element input, this will be our hashed password field. 
    var p = document.createElement("input");
 
    // Add the new element to our form. 
    form.appendChild(p);
    p.name = "p";
    p.type = "hidden";
    p.value = hex_sha512(password.value);
 
    // Make sure the plaintext password doesn't get sent. 
    password.value = "";
 
    // Finally submit the form. 
    form.submit();
}
 

</script>

<!DOCTYPE html>
<html>

<body>
<form action="../includes/process_login_get.php" method="get">
	<input type="text" id="email" class="form-control" name="email">
 <input type="password" class="form-control" name="password" id="password">
 <button onclick="formhash(this.form, this.form.password)">hello</button> 

</form>
	
</form>
</body>
</html>