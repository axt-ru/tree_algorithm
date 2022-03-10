<?php

class Multiply extends Section {
    public function calc() {
        return $this->childrenLeft->calc()*$this->childrenRight->calc();
    }
}