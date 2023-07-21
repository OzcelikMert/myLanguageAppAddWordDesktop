<?php

namespace api\queries;

require "../myLibrary/php/autoLoader.php";

use lib\WordLib;
use myLibrary\php\api\ErrorCodes;
use myLibrary\php\api\Result;
use myLibrary\php\operations\User;
use myLibrary\php\operations\Variable;
use services\WordService;

$echo = new Result();

if ($_POST) {
    Variable::clearAllData($_POST);

    $wordId = User::post("wordId");

    if (
        !Variable::isEmpty($wordId)
    ) {
        $echo->rows = WordService::delete($wordId);
        $echo->status = true;
    }
}

$echo->return();
