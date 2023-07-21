<?php

use myLibrary\php\operations\User;
use myLibrary\php\page\creator;

class PageIndex extends Creator {
    private string $v;

    public function __construct() {
        $this->v = "?v=".date("YmdHis");
        $this->page_title = "Home";
        parent::__construct();
    }

    protected function customData(): array {
        return [];
    }

    protected function pageBody(): string {
        return static::setInclude(array(
            "./components/pages/index/add.php",
            "./components/pages/index/list.php",
            "./components/pages/index/edit.php"
        ));
    }

    protected function customScripts(): string {
        return '<script src="assets/js/pages/index.js'.$this->v.'"></script>';

    }
}

$index = new PageIndex();