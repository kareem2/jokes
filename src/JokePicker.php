<?php

namespace RandomJokes;

class JokePicker
{

    public $jokes = [
        [
            'Why should you never trust stairs?',
            'They’re always up to something'
        ],
        [
            'Why did the bullet end up losing his job?',
            'He got fired'
        ],
        [
            'What kind of shorts do clouds wear?',
            'Thunderpants'
        ],
        [
            'How do you measure a snake?',
            'In inches—they don’t have feet'
        ],
        [
            'Where does a waitress with only one leg work?',
            'IHOP'
        ],
        [
            'What does a house wear?',
            'Address!'
        ],
        [
            'Why are toilets always so good at poker?',
            'They always get a flush'
        ],
        [
            'Why is Peter Pan always flying?',
            'Because he Neverlands. (I love this joke because it never grows old.)'
        ],
    ];

    public function pick(){
        return $this->jokes[array_rand($this->jokes)];
    }
}