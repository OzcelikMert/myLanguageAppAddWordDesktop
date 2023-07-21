<?php
namespace myLibrary\php;

class ProjectConfig {
    const projectRootName = "myLanguageAppAddWordDesktop";

    public static function projectRootPath() { return $_SERVER["DOCUMENT_ROOT"] . "/" . ProjectConfig::projectRootName; }

}