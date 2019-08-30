<?php
    $logiName = filter_input(INPUT_POST,"login");
    $senha=filter_input(INPUT_POST,"pass");
    include 'sqlCode.php';
    logarADM($logiName,$senha);

?>