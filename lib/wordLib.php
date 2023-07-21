<?php

namespace lib;

use config\Config;
use myLibrary\php\operations\User;

class WordLib {
    private static function initJsonFile(): bool {
        if(file_exists(Config::JsonFileName)){
            return true;
        }
        return file_put_contents(Config::JsonFileName, json_encode("{}"));
    }

    public static function writeJsonFile(string $string): bool {
        WordLib::initJsonFile();
        return file_put_contents(Config::JsonFileName, $string);
    }

    public static function readJsonFile(): array {
        WordLib::initJsonFile();
        return json_decode(file_get_contents(Config::JsonFileName), true);
    }
}
