<?php
/***************** Testing the Stack ***************/
include('Stack.php');

$stack = new Stack();
$stack->push(10);
$stack->push(15);

echo $stack->isEmpty() ? 'Empty' : 'Not Empty';
echo PHP_EOL;

echo $stack->peek();
echo PHP_EOL;

echo $stack->pop();
echo PHP_EOL;

echo $stack->pop();
echo PHP_EOL;

echo $stack->pop();
echo PHP_EOL;

echo $stack->isEmpty() ? 'Empty' : 'Not Empty';
echo PHP_EOL;

?>
