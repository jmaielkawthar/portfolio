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
    'class' => '',
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
            'image' => '../src/images/hero-header.png',
            'headline' => 'Web Development',
            'text' => 'Lorem Ipsum is simply dummy text of the printing typesetting industry. simply dummy  ',
            'btn' => 'Details',
        ],
        [
            'class' => '',
            'image' => '',
            'headline' => 'Web Design',
            'text' => ' Lorem Ipsum is simply dummy text of the printing typesetting industry. simply dummy  ',
            'btn' => 'Details',
        ],
        [
            'class' => '',
            'image' => '',
            'headline' => 'Video Editing',
            'text' => ' Lorem Ipsum is simply dummy text of the printing typesetting industry. simply dummy  ',
            'btn' => 'Details',
        ],
        [
            'class' => '',
            'image' => '',
            'headline' => 'Photography',
            'text' => ' Lorem Ipsum is simply dummy text of the printing typesetting industry. simply dummy  ',
            'btn' => 'Details',
        ],
        [
            'class' => '',
            'image' => '',
            'headline' => 'App Developing',
            'text' => ' Lorem Ipsum is simply dummy text of the printing typesetting industry. simply dummy  ',
            'btn' => 'Details',
        ],
        [
            'class' => '',
            'image' => '',
            'headline' => 'SEO Expart',
            'text' => ' Lorem Ipsum is simply dummy text of the printing typesetting industry. simply dummy  ',
            'btn' => 'Details',
        ],
    ],
]);
?>

<?php
ce('headline', [
    'class' => '',
    'subline' => 'About me',
    'headline' => 'Hi there!',
    'text' => "I'm kawthar, i'm a tunisien citizen, i have graduated since 2017, 
    i have an it engenireing diploma and a Lincence on computer scince, i have more than 4 years of experince in web developement",
]);
?>

<?php
ce('about', [
    'class' => '',
    'image' => '',
    'subline' => 'introduction',
    'headline' => 'Hello every one',
    'text' => 'Elevator Message here: EU Green Deal treibt Transformation hin zu Nachhaltigkeit voran mit Zielen für Klimaneutralität, Energiewende, Ressourcenwende und soziale Standards.',
    'btn' => 'Details',
]);
?>

<?php
ce('protfolio', [
    'class' => '',
    'subline' => 'our portfolio',
    'headline' => 'portfolio',
    'text' => 'we proived portfolio',
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
            'image' => '',
            'headline' => 'Kreativ Quartier Potsdam',
            'text' => 'Das KreativQuartier Potsdam - KRQ in bester Lage wird ein lebendiges, nachhaltiges Quartier für Unternehmen, Kreative sowie Kunst und Kultur, welches weit über Potsdam hinaus Anziehungskraft haben wird.  ',
            'btn' => 'Details',
        ],
    ]
]);
?>

<?php
ce('skills', [
    'class' => '',
    'subline' => 'our services',
    'headline' => 'services',
    'headline' => 'we proived services',
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
            'image' => '',
            'headline' => 'Kreativ Quartier Potsdam',
            'text' => 'Das KreativQuartier Potsdam - KRQ in bester Lage wird ein lebendiges, nachhaltiges Quartier für Unternehmen, Kreative sowie Kunst und Kultur, welches weit über Potsdam hinaus Anziehungskraft haben wird.  ',
            'btn' => 'Details',
        ],
    ]
]);
?>

<?php
//----------------------------- END CONTENT ------------------------------------
include 'Globals/foot.php';
include 'Partials/footer.php';
//------------------------------------------------------------------------------