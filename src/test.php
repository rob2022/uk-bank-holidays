<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Rob2022\UkBankHolidays\Retriever;

$retriever = new Retriever(new GuzzleHttp\Client());

print_r($retriever->retrieve());
