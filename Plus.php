<?php

class Plus extends Section {
    public function calc() {
        return $this->childrenLeft->calc()+$this->childrenRight->calc();
    }
}
