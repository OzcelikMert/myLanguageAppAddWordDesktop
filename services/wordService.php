<?php
namespace services;

use config;
use config\DataKeys;
use lib\WordLib;
use myLibrary\php\operations\Variable;

class WordService {
    public static function get() {
        return WordLib::readJsonFile();
    }

    public static function add($textTarget, $textNative, $comment, $wordType, $studyType) {
        $rows = WordLib::readJsonFile();

        $results = [
            DataKeys::columnId => uniqid(),
            DataKeys::columnTextTarget => $textTarget,
            DataKeys::columnTextNative => $textNative,
            DataKeys::columnComment => $comment,
            DataKeys::columnType => $wordType,
            DataKeys::columnStudyType => $studyType,
            DataKeys::columnIsStudy => 0,
        ];

        $rows[] = $results;

        WordLib::writeJsonFile(json_encode($rows));

        return $results;
    }

    public static function update($id, $textTarget, $textNative, $comment, $wordType, $studyType) {
        $rows = WordLib::readJsonFile();

        $results = [
            DataKeys::columnTextTarget => $textTarget,
            DataKeys::columnTextNative => $textNative,
            DataKeys::columnComment => $comment,
            DataKeys::columnType => $wordType,
            DataKeys::columnStudyType => $studyType,
        ];

        foreach($rows as &$row) {
            if($row[DataKeys::columnId] == $id) {
                $row = [
                    ...$row,
                    ...$results
                ];
                break;
            }
        }

        WordLib::writeJsonFile(json_encode($rows));

        return $results;
    }


    public static function delete($id) {
        $rows = WordLib::readJsonFile();
        $results = [];

        foreach($rows as $key => $row) {
            if($row[DataKeys::columnId] == $id) {
                $results = $row;
                unset($rows[$key]);
                break;
            }
        }

        $rows = array_values($rows);

        WordLib::writeJsonFile(json_encode($rows));

        return $results;
    }

    public static function deleteAll() {
        return WordLib::writeJsonFile(json_encode([]));
    }
}