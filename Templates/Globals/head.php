<?php $current_page_name = isset($current_page_name) && $current_page_name ? ' – ' . $current_page_name : ''; ?>
<?php $description = isset($description) ? $description : ''; ?>
<?php $bodyclass = isset($bodyclass) ? $bodyclass : '';

?>
<!DOCTYPE html>
<html lang="en_US">

<head>
    <title>TYPO3 Sitepackage <?php echo $current_page_name; ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">

    <meta name="author" content="IHA">
    <meta name="description" content="<?php echo $description; ?>">
    <title>JK</title>
    <link rel="icon" type="image/x-icon" href="../src/images/logo.svg">
    <link rel="stylesheet" href="../../dist/css/main.css">
    <?php include 'favicons.php'; ?>
</head>

<body class="<?php echo $bodyclass; ?>">