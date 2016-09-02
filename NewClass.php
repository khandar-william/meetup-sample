<?php

class NewClass {
    private $by = 'Alice';

    public function version() {
        return $this->by . 'v1.0.1';
    }
}