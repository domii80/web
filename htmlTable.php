<?php

class htmlTable {

    var $width;
    var $length;

    function setWidth($w) {
        $this->width = $w;
    }

    function setLength($l) {
        $this->length = $l;
    }

    function getWidth() {
        return $this->width;
    }

    function getLength() {
        return $this->length;
    }

    function forLoop($cnt) {
        $str = "qq";
        for ($n = $cnt; $n > 10; $n--) {
            $str .= " asd";
        }
        print $str;
    }

}


