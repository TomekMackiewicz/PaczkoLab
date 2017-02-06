<?php

include('../config/connection.php');

$status = $connection->getAttribute(PDO::ATTR_CONNECTION_STATUS);

var_dump($status);

?>