<?php

class Exponent extends Section {
    public function calc() {
        return pow ($this->childrenLeft->calc(), $this->childrenRight->calc());
    }
}