<?php

namespace lib;

use config\Config;
use myLibrary\php\operations\User;
use myLibrary\php\ProjectConfig;

class WordLib {
    private static function initJsonFile(): bool {
        if(file_exists(Config::jsonFilePath())){
            return true;
        }
        return file_put_contents(Config::jsonFilePath(), json_encode([]));
    }

    public static function writeJsonFile(string $string): bool {
        WordLib::initJsonFile();
        return file_put_contents(Config::jsonFilePath(), $string);
    }

    public static function readJsonFile(): array {
        WordLib::initJsonFile();
        return json_decode(file_get_contents(Config::jsonFilePath()), true);
    }
}
