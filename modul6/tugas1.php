<?php
    $bilangan = 5;
    $hasil=1;
    echo "Hasil faktorial dari $bilangan adalah : ";
    for($i=$bilangan;$i>0;$i--){
        if($i!=1){
            echo "$i x ";
            $hasil *=$i;
        }else{
            echo $i;
        }
    }
    echo " = $hasil";
?>