<?php

require_once('vendor/autoload.php');

use Palam\TextReverse\TextReverse;

$textRevers = new TextReverse();
if  (isset($_GET['string'])) {
    echo "<h1>" . $_GET ['string'] . "</h1>";
    echo "<h1>" . $textRevers->reverse($_GET['string']) . "</h1>";
}
?>
<form class="guruweba_example_form" name="feedback" method="GET" action="index.php">
    <div class="guruweba_example_caption">Text Reverse App</div>
    </br>
    <div>Ввод</div>
    <input type="text" name="string" required="required">
    <input type="submit" name="submit_btn" value="Отправить">
</form>




























