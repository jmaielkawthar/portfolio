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
ce('header-home', [
    'class' => '',
    'image' => '../src/images/about-left-image.png',
    'headline' => 'Verantwortungsvoll
                Immobilien entwickeln,
                nachhaltig investieren',
    'text' => 'Elevator Message here: EU Green Deal treibt Transformation hin zu Nachhaltigkeit voran mit Zielen für Klimaneutralität, Energiewende, Ressourcenwende und soziale Standards.',
    'btn' => 'Get started',
]);
?>

<?php
//----------------------------- END CONTENT ------------------------------------
include 'Globals/foot.php';
include 'Partials/footer.php';
//------------------------------------------------------------------------------