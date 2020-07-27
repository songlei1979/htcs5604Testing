<?php

$users = new Collection([
    'one', 'two', 'three'
]);

echo $users->count();

foreach ($users as $user){
    echo $user->getFullName();
}
