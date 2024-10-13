<?php

declare(strict_types = 1);

$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;

define('APP_PATH', $root . 'app' . DIRECTORY_SEPARATOR);
define('FILES_PATH', $root . 'transaction_files' . DIRECTORY_SEPARATOR);
define('VIEWS_PATH', $root . 'views' . DIRECTORY_SEPARATOR);

include_once(APP_PATH . "App.php");
$totalExpense = 0;
$totalIncome = 0;
$transactionArray = parseFiles(returnDirFiles(FILES_PATH), FILES_PATH)[0];


foreach($transactionArray as $transaction) {
    $dollarAmount = $transaction["Amount"];

    // Update totalIncome or totalExpense
    if (isPositive($dollarAmount)) {
        $totalIncome += dollarToInt($dollarAmount, 1);
    } else {
        $totalExpense -= dollarToInt($dollarAmount, 2);
    }
}

$netTotal = $totalIncome + $totalExpense; // Already negative expense


$netTotal = formatDollarAmount($netTotal);
$totalIncome = formatDollarAmount($totalIncome);
$totalExpense = formatDollarAmount($totalExpense);


include_once(VIEWS_PATH . "transactions.php");



/* YOUR CODE (Instructions in README.md) */
