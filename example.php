<?php

require 'vendor/autoload.php';

use RandomJokes\JokePicker;


$jokesPicker = new JokePicker();

print_r($jokesPicker->pick());
