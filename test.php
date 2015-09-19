<?php
$PuttyLocation = 'd:\users\jtodd\desktop\plink.exe';

$ServerName = "192.168.11.9";
$UserName = "jtodd";
$Password = "groovy";
$Command = "ls -l";



$CommandName = $PuttyLocation . " -ssh " . $UserName . "@" . $ServerName . " -pw " . $Password . " ls -la /home/jtodd/SimpleHelpDesk; exit;";
print "\n\n";
print $CommandName;
print "\n\n";

