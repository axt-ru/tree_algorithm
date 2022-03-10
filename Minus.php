<?php

class Minus extends Section {
    public function calc() {
        return $this->childrenLeft->calc()-$this->childrenRight->calc();
    }
}