<?php

namespace Model;

class Serie extends Media
{
    protected $datas = [[
        "id" => "0",
        "Poster" => "https://picsum.photos/400/600?random=1",
        'Title' => 'Le camaleon',
        "Realisator" => "Leroy Porter",
        'Release Year' => 1992,
        'Synopsis' => 'T\'as pas de personnalité?, vole en une',
        'Genre' => 'psycologie/action',
        'Rating' => '99 ',
        'Seasons' => '4',
        'Episodes' => ['S01E01 : Lorem ipsum blablabla', 'S01E02 : Lorem ipsum blablabla', 'S01E03 : Lorem ipsum blablabla', 'S01E04 : Lorem ipsum blablabla', 'S02E01 : Lorem ipsum blablabla', 'S02E02 : Lorem ipsum blablabla', 'S02E03 : Lorem ipsum blablabla', 'S02E04 : Lorem ipsum blablabla' ,'S03E01 : Lorem ipsum blablabla', 'S03E02 : Lorem ipsum blablabla', 'S03E03 : Lorem ipsum blablabla', 'S03E04 : Lorem ipsum blablabla', 'S04E01 : Lorem ipsum blablabla', 'S04E02 : Lorem ipsum blablabla', 'S04E03 : Lorem ipsum blablabla']
    ],
        [
            "id" => "1",
            "Poster" => "https://picsum.photos/400/600?random=2",
            'Title' => 'X Files',
            "Realisator" => "Leroy Porter",
            'Release Year' => 1998,
            'Synopsis' => 'Petits bonhommes vert',
            'Genre' => 'enquetes',
            'Rating' => '78',
            'Seasons' => '4',
            'Episodes' => ['S01E01 : Lorem ipsum blablabla', 'S01E02 : Lorem ipsum blablabla', 'S01E03 : Lorem ipsum blablabla', 'S01E04 : Lorem ipsum blablabla', 'S02E01 : Lorem ipsum blablabla', 'S02E02 : Lorem ipsum blablabla', 'S02E03 : Lorem ipsum blablabla', 'S02E04 : Lorem ipsum blablabla' ,'S03E01 : Lorem ipsum blablabla', 'S03E02 : Lorem ipsum blablabla', 'S03E03 : Lorem ipsum blablabla', 'S03E04 : Lorem ipsum blablabla', 'S04E01 : Lorem ipsum blablabla', 'S04E02 : Lorem ipsum blablabla', 'S04E03 : Lorem ipsum blablabla']
        ],
        [
            "id" => "2",
            "Poster" => "https://picsum.photos/400/600?random=3",
            'Title' => 'the walking dead',
            "Realisator" => "Cally O'brien",
            'Release Year' => 2021,
            'Synopsis' => 'GROOOOAARRRRR ',
            'Genre' => 'action/zombie',
            'Rating' => '90 ',
            'Seasons' => '4',
            'Episodes' => ['S01E01 : Lorem ipsum blablabla', 'S01E02 : Lorem ipsum blablabla', 'S01E03 : Lorem ipsum blablabla', 'S01E04 : Lorem ipsum blablabla', 'S02E01 : Lorem ipsum blablabla', 'S02E02 : Lorem ipsum blablabla', 'S02E03 : Lorem ipsum blablabla', 'S02E04 : Lorem ipsum blablabla' ,'S03E01 : Lorem ipsum blablabla', 'S03E02 : Lorem ipsum blablabla', 'S03E03 : Lorem ipsum blablabla', 'S03E04 : Lorem ipsum blablabla', 'S04E01 : Lorem ipsum blablabla', 'S04E02 : Lorem ipsum blablabla', 'S04E03 : Lorem ipsum blablabla']
        ],
        [
            "id" => "3",
            "Poster" => "https://picsum.photos/400/600?random=4",
            'Title' => 'BlackList',
            "Realisator" => "Cally O'brien",
            'Release Year' => 2021,
            'Synopsis' => 'l\'art de retourner les cerveaux',
            'Genre' => 'enquetes',
            'Rating' => '88 ',
            'Seasons' => '4',
            'Episodes' => ['S01E01 : Lorem ipsum blablabla', 'S01E02 : Lorem ipsum blablabla', 'S01E03 : Lorem ipsum blablabla', 'S01E04 : Lorem ipsum blablabla', 'S02E01 : Lorem ipsum blablabla', 'S02E02 : Lorem ipsum blablabla', 'S02E03 : Lorem ipsum blablabla', 'S02E04 : Lorem ipsum blablabla' ,'S03E01 : Lorem ipsum blablabla', 'S03E02 : Lorem ipsum blablabla', 'S03E03 : Lorem ipsum blablabla', 'S03E04 : Lorem ipsum blablabla', 'S04E01 : Lorem ipsum blablabla', 'S04E02 : Lorem ipsum blablabla', 'S04E03 : Lorem ipsum blablabla']
        ],
        [
            "id" => "4",
            "Poster" => "https://picsum.photos/400/600?random=5",
            'Title' => 'love death and robots',
            "Realisator" => "Benjamin Whitehead",
            'Release Year' => 2021,
            'Synopsis' => '..... WTF BRUUUH',
            'Genre' => 'indescriptible',
            'Rating' => '77 ',
            'Seasons' => '4',
            'Episodes' => ['S01E01 : Lorem ipsum blablabla', 'S01E02 : Lorem ipsum blablabla', 'S01E03 : Lorem ipsum blablabla', 'S01E04 : Lorem ipsum blablabla', 'S02E01 : Lorem ipsum blablabla', 'S02E02 : Lorem ipsum blablabla', 'S02E03 : Lorem ipsum blablabla', 'S02E04 : Lorem ipsum blablabla' ,'S03E01 : Lorem ipsum blablabla', 'S03E02 : Lorem ipsum blablabla', 'S03E03 : Lorem ipsum blablabla', 'S03E04 : Lorem ipsum blablabla', 'S04E01 : Lorem ipsum blablabla', 'S04E02 : Lorem ipsum blablabla', 'S04E03 : Lorem ipsum blablabla']
        ],
        [
            "id" => "5",
            "Poster" => "https://picsum.photos/400/600?random=6",
            'Title' => 'BigBang Theorie',
            "Realisator" => "Benjamin Whitehead",
            'Release Year' => 2018,
            'Synopsis' => 'il y\'a une vraie fille ici ?',
            'Genre' => 'humour',
            'Rating' => '86 ',
            'Seasons' => '4',
            'Episodes' => ['S01E01 : Lorem ipsum blablabla', 'S01E02 : Lorem ipsum blablabla', 'S01E03 : Lorem ipsum blablabla', 'S01E04 : Lorem ipsum blablabla', 'S02E01 : Lorem ipsum blablabla', 'S02E02 : Lorem ipsum blablabla', 'S02E03 : Lorem ipsum blablabla', 'S02E04 : Lorem ipsum blablabla' ,'S03E01 : Lorem ipsum blablabla', 'S03E02 : Lorem ipsum blablabla', 'S03E03 : Lorem ipsum blablabla', 'S03E04 : Lorem ipsum blablabla', 'S04E01 : Lorem ipsum blablabla', 'S04E02 : Lorem ipsum blablabla', 'S04E03 : Lorem ipsum blablabla']
        ]
    ];
}