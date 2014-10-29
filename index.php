<?php
// echo rand(0, 999999999);

/*
$id = 337800042;
for ($i = $id; $i < $id + 1000; $i++) {
    echo '<img src="https://graph.facebook.com/' . $i . '/picture?type=large">';
}
*/

for ($i = 0; $i < 1000; $i++) {
    $rand = rand(0, 999999999);

    echo '<img src="https://graph.facebook.com/' . $rand . '/picture?type=large">';
}

?>



<img src="https://graph.facebook.com/722218402/picture?type=large">
