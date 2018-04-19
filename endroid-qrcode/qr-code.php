<?php
require_once '../vendor/autoload.php';

$qrCode = new \Endroid\QrCode\QrCode('Life is too short to be generating QR Code');
header('Content-Type: '.$qrCode->getContentType());
echo $qrCode->writeString();
