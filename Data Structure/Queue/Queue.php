<?php
/* Queue Implementation in PHP */

//Queue Class
class Queue {
    private $_items = array();

    public function enqueue($value = NULL) {
        array_unshift($this->_items, $value);
    }

    public function dequeue() {
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
