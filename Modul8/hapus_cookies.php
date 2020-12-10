<?php
    setcookie("user","",time()-3600);
?>

<!DOCTYPE html>
<html>
<body>
    <?php
        echo "Cookie 'user' terhapus.";
    ?>
</body>
</html>