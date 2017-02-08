<?php
$phpfiles = glob("*.php");

foreach($phpfiles as $phpfile){

    echo '<a href='.$phpfile.' target=_blank>'.$phpfile.'</a><br>';

}