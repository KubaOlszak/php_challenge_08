<?php

echo "<div width=\"300px\">" . "Merci " . $_POST['user_firstname'] . ' ' . $_POST['user_lastname'] . " de nous avoir contacté à propos de " . $_POST['subject_choice'] . ".
<br><br>
Un de nos conseiller vous contactera soit à l’adresse " . $_POST['user_mail'] . " ou par téléphone au " . $_POST['user_phone'] . " dans les plus brefs délais pour traiter votre demande :". 
"<br><br>
<i>" . $_POST['user_message'] . "<i>
<br>
</div><br>";
?>
