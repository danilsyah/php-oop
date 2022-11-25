<?php

// mencocokan string dengan keyword
$matches = [];
$subject = "hai nama saya danil syah arihardjo";
$result = preg_match_all("/danil|haykal|ari|jo/i", $subject, $matches);

var_dump($result);
var_dump($matches);

// replace kata-kata dengan *** berdasarkan keyword
$strSubject = "dasar lu anjing dan seorang bangsat";
$result = preg_replace("/anjing|bangsat/i","***", $strSubject);
var_dump($result);

// split string berdasarkan keyword
$result = preg_split("/[\s,-.]/","Danil syah arihardjo,Programmer, Backend-Devel.oper");
var_dump($result);

