<?php
/* Stack Implementation in PHP */

//Stack Class
class Stack {
    private $_items = array();

    public function push($value = NULL) {
        array_push($this->_items, $value);
    }

    public function pop() {
        return array_pop($this->_items);
    }

    public function peek() {
        return end($this->_items);
    }

	public function size() {
		return count($this->_items);
	}

	public function isEmpty() {
		return empty($this->_items);
	}
}

?>
