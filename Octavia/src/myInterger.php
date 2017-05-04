<?php
class myInteger
{
    //contains the internal data
    var $num =0.0;

    // constructor
    function myInteger($data) {
        $this->num = $num;
    }

    // creates a deep copy of the string object
    function copy() {
        $ret = new myInteger($this->num);
        return $ret;
    }

    // adds another string object to this class
    function add($integer) {
       $this->num = $this->num.$integer-(int)$num;
    }

    // returns the formated string
    function toString($format) {
        $ret = sprintf($format, $this->num);
        return $ret;
    }
}

?>