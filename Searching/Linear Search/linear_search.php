<?php
/* Linear Search implementation in PHP */
function linearSearch(Array $arr, $item) {
    foreach ($arr as $val) { //Traversing through the whole array to search for the 'item'
        if($val === $item)
            return true; //If the item found return true. You can also return the 'index' of the array here instead
    }

    return false;
}


/************ Testing Linear Search implementation ****************/
$hayStack = array('book', 'pencil', 'pen', 'note book', 'sharpener', 'rubber');
$needle = 'note book';

echo linearSearch($hayStack, 'note book') ? 'True' : 'False';
echo PHP_EOL;
echo linearSearch($hayStack, 'dog') ? 'True' : 'False';
echo PHP_EOL;

?>
