<?php

foreach ($_COOKIE as $k => $v) {
    setcookie($k,"",time()-60);
}

echo "<script>location.href='../php/login.php'</script>";
