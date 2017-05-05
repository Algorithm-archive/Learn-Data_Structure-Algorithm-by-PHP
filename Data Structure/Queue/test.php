<?php
/***************** Testing the Queue ***************/
include('Queue.php');

$queue = new Queue();
$queue->enqueue(10);
$queue->enqueue(15);

echo $queue->isEmpty() ? 'Empty' : 'Not Empty';
echo PHP_EOL;

echo $queue->peek();
echo PHP_EOL;

echo $queue->dequeue();
echo PHP_EOL;

echo $queue->dequeue();
echo PHP_EOL;

echo $queue->dequeue();
echo PHP_EOL;

echo $queue->isEmpty() ? 'Empty' : 'Not Empty';
echo PHP_EOL;

?>
