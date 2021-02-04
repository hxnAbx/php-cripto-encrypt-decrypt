<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once 'PkcsKeyGenerator.php';
require_once 'DesEncryptor.php';
require_once 'PbeWithMd5AndDes.php';

$mixer = 'A99BC8325635E303';

$iterations = 19;
$segments = 1;

$encrypted = 'P9Fd/aHz0nHBWBYCTBGoZ4PJYUDeAwSgmRswSbV0+/I5iWNbqOQpAtEBVYanPzcqke+utRqVIvo=';
$keystring = 'HALFMANHALFCOCAINEWITHDUMBEYESANDHEARTBROKEN';

$decrypt = PbeWithMd5AndDes::decrypt($encrypted, $keystring,$mixer, $iterations, $segments);

echo "Key string:      $keystring<br/>" . PHP_EOL;
echo "Salt:            $mixer<br/>" . PHP_EOL;
echo "Crypt data:      $encrypted<br/>" . PHP_EOL;
echo "Decripted data:  $decrypt<br/>" . PHP_EOL;