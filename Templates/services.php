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
//----------------------------- END CONTENT ------------------------------------
include 'Globals/foot.php';
include 'Partials/footer.php';
//------------------------------------------------------------------------------