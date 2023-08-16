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
    $textTarget = trim(User::post("textTarget"));
    $textNative = trim(User::post("textNative"));
    $comment = trim(User::post("comment"));
    $studyType = User::post("studyType");
    $wordType = User::post("wordType");

    if (
        !Variable::isEmpty($textTarget) ||
        !Variable::isEmpty($textNative) ||
        !Variable::isEmpty($studyType) ||
        !Variable::isEmpty($wordType)
    ) {
        $echo->rows = WordService::add($textTarget, $textNative, $comment, $wordType, $studyType);
        $echo->status = true;
    }
}

$echo->return();
