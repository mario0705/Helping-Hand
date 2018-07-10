<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
if (login_check($mysqli) == true) {
$logged = 'in';
} else {
$logged = 'out';
}
$stmt = $mysqli->prepare("SELECT round FROM round WHERE id ='0'");
$stmt->execute();
$stmt->bind_result($round);
$stmt->fetch();
?>
<?php
include("head.php")
?>
<!--Main layout-->
<main>
<body><form>
  <h3>Join Us:</h3>
  <p>
    “Be the change that you want to see in the world.” – Margaret Mead<br><br>

Too often in life, we wait around for someone else to instigate the changes we want to see. We doubt our own ability and become paralyzed to action, thinking either we are not solely capable of bringing the changes about, or that someone else will get around to it.<br><br>

But this inability to act alone is all in our head. Because history bears witness that the most extraordinary things were done by the most ordinary people.<br><br>

And this individual action is certainly the need of the hour for India – the land of great contrasts! While the country has 53 billionaires, it also has 17 million child labourers. While it has a galloping GDP growth, it also has 2 million children dying before their first birthday due to the lack of immunizations and medical facilities.<br><br>

So if we have ever wished to be able to do something for the greater good, the time could not be more right. We don’t have to make radical changes for our efforts to count, because the small changes make a big difference. Contribute today!
  </p></form>
<br>
</main>
<?php
include("foot.php")
?>
<!--/Main layout-->
<!--Footer-->