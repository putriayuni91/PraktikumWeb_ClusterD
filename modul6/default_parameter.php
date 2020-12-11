<?php
    function bar($color='black'){
        echo '<font color="'.$color.'">this is some text!</font><br>';
    }
    $warna='yellow';
    bar();
    bar('red');
    bar('green');
    bar('blue');
    bar($warna);
?>