<?php

class Task {

public $description; // Só funciona na classe porque está protected se for public funciona em qualquer lugar.

public $completed = false;

public function __construct($description) { // Construct automatically triggered on instantion

   $this->description = $description;

}

public function Complete() {
    $this->completed = true;
}

public function isComplete() {
    return $this->completed;
} 

}

$Task = new Task('Go to the store'); // A new task object.

//var_dump($Task);

$Task->Complete(); //Complete the task.

//var_dump($Task->isComplete());

$tasks = [
new Task('Go to the store'),
new Task('Finish my screencast'),
new Task('Clean my room')
];

echo '<br><br><br>';

//var_dump($tasks);

$tasks[0]->Complete();

