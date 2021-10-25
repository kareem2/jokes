<?php

require 'vendor/autoload.php';

use RandomJokes\JokPicker;


$jokesPicker = new JokPicker();

print_r($jokesPicker->pick());
