
<?php

$data = array("hello", 15, 1.234, array(1,2,3), (object)[2,34]);

foreach ($data as $value) {
    echo var_dump($value), "\n ";
}

?>
