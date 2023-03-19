<?php 

    $movies = [

        [

            'Posters' => 'unfriended.jpg',
            'Titles' => 'Unfriended',
            'Years' => 2014,
            'Genres' => [

                'Horror, ',
                'Mystery, ',
                'Thriller'

            ],
            'Actors' => [

                'Heather Sossaman, ',
                'Matthew Bohrer, ', 
                'Courtney Halverson'

            ],
            'Directors' => ['Levan Gabriadze']

        ],

        [

            'Posters' => 'transformers.jpg',
            'Titles' => 'Transformers: Revenge of The Fallen',
            'Years' => 2009,
            'Genres' => [

                'Action, ',
                'Adventure, ',
                'Sci-Fi'

            ],
            'Actors' => [

                'Shia LaBeouf, ',
                'Megan Fox, ',
                'Josh Duhamel'

            ],
            'Directors' => ['Michael Bay']


        ],

        [

            'Posters' => 'angry birds.jpg',
            'Titles' => 'The Angry Birds Movie 2',
            'Years' => 2019,
            'Genres' => [

                'Animation, ',
                'Action, ',
                'Adventure'

            ],
            'Actors' => [

                'Jason Sudeikis, ',
                'Josh Gad, ',
                'Leslie Jones'

            ],
            'Directors' => [

                    'Thurop Van Orman, ',
                    'John Rice'

                ]


        ],

        [

            'Posters' => 'hotel transylvania.jpg',
            'Titles' => 'Hotel Transylvania 3: Summer Vacation',
            'Years' => 2018,
            'Genres' => [

                'Animation, ',
                'Adventure, ',
                'Comedy'

            ],
            'Actors' => [

                'Adam Sandler, ',
                'Andy Samberg, ',
                'Selena Gomez'

            ],
            'Directors' => ['Genndy Tartakovsky']


        ],

        [

            'Posters' => 'thor.jpg',
            'Titles' => 'Thor: Ragnarok',
            'Years' => 2017,
            'Genres' => [

                'Action, ',
                'Adventure, ',
                'Comedy'

            ],
            'Actors' => [

                'Chris Hemsworth, ',
                'Tom Hiddleston, ',
                'Cate Blanchett'

            ],
            'Directors' => ['Taika Waititi']


        ],

        [

            'Posters' => 'big hero 6.jpeg',
            'Titles' => 'Big Hero 6',
            'Years' => 2014,
            'Genres' => [

                'Animation, ',
                'Action, ',
                'Adventure'

            ],
            'Actors' => [

                'Ryan Potter, ',
                'Scott Adsit, ',
                'Jamie Chung'

            ],
            'Directors' => [

                'Don Hall, ',
                'Chris Williams'

            ],

        ],

        [

            'Posters' => 'jumanji.jpg',
            'Titles' => 'Jumanji: The Next Level',
            'Years' => 2019,
            'Genres' => [

                'Action, ',
                'Adventure, ',
                'Comedy'

            ],
            'Actors' => [

                'Dwayne Johnson, ',
                'Jack Black, ',
                'Kevin Hart'

            ],
            'Directors' => [

                'Jake Kasdan'

            ],

        ],

        [

            'Posters' => '2gether.jpeg',
            'Titles' => '2gether: The Movie',
            'Years' => 2021,
            'Genres' => [

                'Comedy, ',
                'Musical, ',
                'Romance'

            ],
            'Actors' => [

                'Vachirawit Chivaree, ',
                'Metawin Opas-Iamkajorn, ',
                'Sattabut Laedeke'

            ],
            'Directors' => [

                'Nopparnach Chaiwimol, ',
                'Kanittha Kwanyu, ',
                'Weerachit Thongjila'

            ],

        ],

        [

            'Posters' => 'captain phillips.jpg',
            'Titles' => 'Captain Phillips',
            'Years' => 2013,
            'Genres' => [

                'Action, ',
                'Biography, ',
                'Crime'

            ],
            'Actors' => [

                'Tom Hanks'

            ],
            'Directors' => [

                'Paul Greengrass'

            ],

        ],

        [

            'Posters' => 'scary movie 5.jpg',
            'Titles' => 'Scary Movie 5',
            'Years' => 2013,
            'Genres' => [

                'Comedy, ',
                'Horror'

            ],
            'Actors' => [

                'Simon Rex, ',
                'Ashley Tisdale, ',
                'Charlie Sheen'

            ],
            'Directors' => [

                'Malcolm D. Lee'

            ],

        ]

    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        ul li img {

            width: 175px;

        }

    </style>
</head>
<body>
    
    <h2>Daftar Film</h2>

    <ul>

        <?php 
        
            foreach ($movies as $i => $movie) {



            
        
        ?>
        
        <li>
    
            <img src="img/<?= $movie['Posters']; ?>" alt="">
    
        </li>

        <br>

        <li><?= "Title: " . $movie['Titles']; ?></li>

        <br>

        <li><?= "Year: " . $movie['Years']; ?></li>

        <br>

        <li><?= "Genre: "; ?>
    
            <?php 
            
                foreach ($movie['Genres'] as $genre) {

                    echo $genre;

                }
            
            ?>

        </li>

        <br>

        <li><?= "Actor: "; ?>
    
            <?php 
            
                foreach ($movie['Actors'] as $actor) {

                    echo $actor;

                }
            
            ?>
    
        </li> 

        <br>

        <li><?= "Director: "; ?>
    
            <?php 
            
                foreach ($movie['Directors'] as $director) {

                    echo $director;

                }
            
            ?>
                
        </li>
        
        <br>

        <br>

        <hr>

        <br>

        <?php 
        
            }
        
        ?>

    </ul>



</body>
</html>