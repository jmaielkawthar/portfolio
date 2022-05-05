<html>
<head>
    <title>protfolio - Pages list</title>
    <style>
        *{
			box-sizing: border-box;
		}
        body{
            background-color: #eee;
        }
        
        h1{
            color :#4D4D4D;
        }
	
        .content {
            width: 600px;
            margin: 100px auto;
            font-family: Arial, sans-serif;

        }

        .content ul {
            list-style: none;
            margin: 0;
            padding: 0;
            background: #F4F4F4;
        }

        .content li:hover {
            background-color: #9B2813;
        }

        .content li:hover a {
            color: #fff;
        }

        .content a {
            text-decoration: none;
            color: #0B2650;
            font-weight: bold;
            font-family: Arial, sans-serif;
            padding: 20px;
            width: 100%;
            display: block;
        }

        li{
            list-style: none;
            border: 1px solid;
            margin-bottom: 20px;
        }
    </style>

</head>
<body>

<div class="content">
    <h1>Pages list</h1>
    <?php
    $t = dirname($_SERVER['SCRIPT_NAME']);
    if ($handle = opendir('.')) {
        while (false !== ($entry = readdir($handle))) {
            $ext = substr($entry, strrpos($entry, '.') + 1);
            if ($entry != "." && $entry != ".." && in_array($ext, array("php", "html")) && $entry != basename($_SERVER["SCRIPT_FILENAME"])) {
                $arr[] = $entry;
            }
        }
        if (isset($arr) && count($arr) != 0) {
            sort($arr);
            foreach ($arr as $entry1) {
                echo '<li><a href="' . $t . '/' . $entry1 . '" target="_blank">' . $entry1 . '</a></li>';
            }
        }

        echo '</ul>';
        closedir($handle);

    }
    ?>
</div>

</body>
</html>
