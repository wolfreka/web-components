<?php
$testData = [];

$testUser1 = new stdClass;
$testUser1->username = 'testUser1';
$testUser1->userID = 12345;
$testUser1->unreadMessages = 3;
$testUser1->settings = ['profile_realname'=>'Test User'];

$testData['testUser1'] = $testUser1;

return $testData;