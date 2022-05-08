<?php
require_once 'Inc/functions.php';

$current_page_name = '';
$bodyclass = '';

//------------------------------------------------------------------------------

include 'Globals/head.php';
include 'Partials/header.php';
//------------------------------ START CONTENT ---------------------------------
?>
<?php
ce('home', [
    'class' => '',
    'image' => '../src/images/hero-header.png',
    'subline' => 'Welcome to my potfolio website',
    'headline' => 'Hello every one',
    'text' => " i'm kawthar, professional web developer with long time experience in this field ",
    'btn' => 'Download Resume',
]);
?>

<?php
ce('headline', [
    'class' => 'pink-violet ',
    'subline' => 'our services',
    'headline' => 'Provided services',
    'text' => 'we provied templates for your business website ',
]);
?>

<?php
ce('services', [
    'class' => '',
    'items' => [
        [
            'class' => '',
            'image' => '../src/images/icons/broswer.png',
            'headline' => 'Web Development',
            'text' => 'Lorem Ipsum is simply dummy text of the printing typesetting industry. simply dummy  ',
            'btn' => 'Details',
        ],
        [
            'class' => '',
            'image' => '../src/images/icons/beaute.png',
            'headline' => 'Web Design',
            'text' => ' Lorem Ipsum is simply dummy text of the printing typesetting industry. simply dummy  ',
            'btn' => 'Details',
        ],
        [
            'class' => '',
            'image' => '../src/images/icons/video.png',
            'headline' => 'Video Editing',
            'text' => ' Lorem Ipsum is simply dummy text of the printing typesetting industry. simply dummy  ',
            'btn' => 'Details',
        ],
        [
            'class' => '',
            'image' => '../src/images/icons/camera.png',
            'headline' => 'Photography',
            'text' => ' Lorem Ipsum is simply dummy text of the printing typesetting industry. simply dummy  ',
            'btn' => 'Details',
        ],
        [
            'class' => '',
            'image' => '../src/images/icons/voiture.png',
            'headline' => 'App Developing',
            'text' => ' Lorem Ipsum is simply dummy text of the printing typesetting industry. simply dummy  ',
            'btn' => 'Details',
        ],
        [
            'class' => '',
            'image' => '../src/images/icons/chercher.png',
            'headline' => 'SEO Expart',
            'text' => ' Lorem Ipsum is simply dummy text of the printing typesetting industry. simply dummy  ',
            'btn' => 'Details',
        ],
    ],
]);
?>

<?php
ce('about', [
    'class' => '',
    'subline' => "web developper",
    'headline' => "what's about me",
    'image' => '../src/images/about-left-image.png',
    'textes' =>[
        [
            'text' => "I'm kawthar, i'm a tunisien citizen, i have graduated since 2017, i have an it engenireing diploma and a Lincence on computer scince, i have more than 4 years of experince in web developement",
        ],
        [
            'text' => "Lorem Ipsum is simply dummy text of the printing typesetting industry. simply dummy",
        ],

    ],
    'items' =>[
        [
            'headline' => 'Name ',
            'text' => 'kawthar ',
        ],
        [
            'headline' => 'Phone ',
            'text' => '+216 22 215 851 ',
        ],

        [
            'headline' => 'Email ',
            'text' => 'info@gmail.com ',
        ],

        [
            'headline' => 'LinkedIn ',
            'text' => 'link.linkedin',
        ],

    ],
   
]);
?>

<?php
ce('headline', [
    'class' => 'orange ',
    'subline' => 'My protfolio',
    'headline' => 'Portfolio Showcase',
    'text' => "Here some projects during my experience ",
]);
?>

<?php
ce('portfolio', [
    'class' => '',
    'items' => [
        [
            'class' => '',
            'image' => '',
            'headline' => 'Kreativ Quartier Potsdam',
            'text' => 'Das KreativQuartier Potsdam - KRQ in bester Lage wird ein lebendiges, nachhaltiges Quartier für Unternehmen, Kreative sowie Kunst und Kultur, welches weit über Potsdam hinaus Anziehungskraft haben wird.  ',
            'btn' => 'Details',
        ],
        [
            'class' => '',
            'image' => '',
            'headline' => 'Zille Campus',
            'text' => 'Das KreativQuartier Potsdam - KRQ in bester Lage wird ein lebendiges, nachhaltiges Quartier für Unternehmen, Kreative sowie Kunst und Kultur, welches weit über Potsdam hinaus Anziehungskraft haben wird.  ',
            'btn' => 'Details',
        ],
        [
            'class' => '',
            'image' => '',
            'headline' => 'Kreativ Quartier Potsdam',
            'text' => 'Das KreativQuartier Potsdam - KRQ in bester Lage wird ein lebendiges, nachhaltiges Quartier für Unternehmen, Kreative sowie Kunst und Kultur, welches weit über Potsdam hinaus Anziehungskraft haben wird.  ',
            'btn' => 'Details',
        ],
        [
            'class' => '',
            'lineClass' => 'blue',
            'image' => '',
            'headline' => 'Kreativ Quartier Potsdam',
            'text' => 'Das KreativQuartier Potsdam - KRQ in bester Lage wird ein lebendiges, nachhaltiges Quartier für Unternehmen, Kreative sowie Kunst und Kultur, welches weit über Potsdam hinaus Anziehungskraft haben wird.  ',
            'btn' => 'Details',
        ],
    ]
]);
?>
<?php
ce('headline', [
    'class' => '',
    'lineClass' => 'blue',
    'subline' => 'have you any  question',
    'headline' => "contact me",
    'text' => "please fill these fields below",
]);
?>
      <?php
        ce('contact', [
            'class' => '',
            'image' => '../src/images/map.jpg',
            'btn' => 'Details',
        ]);
        ?>


<?php
// ce('headline', [
//     'class' => '',
//     'subline' => 'My skills',
//     'headline' => 'advanced skills',
//     'text' => "Here some advanced skills that i ameliorate during my experience ",
// ]);
?>
<?php
// ce('skills', [
//     'class' => '',
//     'items' => [
//         [
//             'class' => '',
//             'image' => '',
//             'headline' => 'Kreativ Quartier Potsdam',
//             'text' => 'Das KreativQuartier Potsdam - KRQ in bester Lage wird ein lebendiges, nachhaltiges Quartier für Unternehmen, Kreative sowie Kunst und Kultur, welches weit über Potsdam hinaus Anziehungskraft haben wird.  ',
//             'btn' => 'Details',
//         ],
//         [
//             'class' => '',
//             'image' => '',
//             'headline' => 'Zille Campus',
//             'text' => 'Das KreativQuartier Potsdam - KRQ in bester Lage wird ein lebendiges, nachhaltiges Quartier für Unternehmen, Kreative sowie Kunst und Kultur, welches weit über Potsdam hinaus Anziehungskraft haben wird.  ',
//             'btn' => 'Details',
//         ],
//         [
//             'class' => '',
//             'image' => '',
//             'headline' => 'Kreativ Quartier Potsdam',
//             'text' => 'Das KreativQuartier Potsdam - KRQ in bester Lage wird ein lebendiges, nachhaltiges Quartier für Unternehmen, Kreative sowie Kunst und Kultur, welches weit über Potsdam hinaus Anziehungskraft haben wird.  ',
//             'btn' => 'Details',
//         ],
//         [
//             'class' => '',
//             'image' => '',
//             'headline' => 'Kreativ Quartier Potsdam',
//             'text' => 'Das KreativQuartier Potsdam - KRQ in bester Lage wird ein lebendiges, nachhaltiges Quartier für Unternehmen, Kreative sowie Kunst und Kultur, welches weit über Potsdam hinaus Anziehungskraft haben wird.  ',
//             'btn' => 'Details',
//         ],
//     ]
// ]);
?>

<?php
//----------------------------- END CONTENT ------------------------------------
include 'Globals/foot.php';
include 'Partials/footer.php';
//------------------------------------------------------------------------------