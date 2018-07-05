 <script src="sha512.js"></script> 
<script type="text/javascript">
	
 var url_string = window.location.href;
var url = new URL(url_string);
var email = url.searchParams.get("email");
var password= url.searchParams.get("password");

var p = hex_sha512(password);

var ur1=""
var ur2="email="
var ur3="&"
var href = `https://helping-hand.azurewebsites.net/includes/process_login_get.php?email=${email}&password=&p=${p}`;
window.location.replace(href); 
</script>

<!DOCTYPE html>
<html>

<body>
	
</form>
</body>
</html>