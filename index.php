<?php 

//����phpqrcode���ļ�

include('phpqrcode.php'); 

// ��ά������ 

$data = 'Ҷ����123165465465456��21461616516151'; 

// ���ɵ��ļ��� 

$filename = 'baidu.png'; 

// ������L��M��Q��H 

$errorCorrectionLevel = 'L';  

// ��Ĵ�С��1��10 

$matrixPointSize = 4;  

//����һ����ά���ļ� 

QRcode::png($data, $filename, $errorCorrectionLevel, $matrixPointSize, 2);

//�����ά�뵽�����

QRcode::png($data); 
?>