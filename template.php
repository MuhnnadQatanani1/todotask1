
<!DOCTYPE HTML PUBLIC>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@200;400;700&display=swap"
       rel="stylesheet">
    <title>
    </title>
    <style>
        .font-source-code-pro {
    font-family: 'Source Code Pro', monospace;
        }
    </style>
</head>
<body>
<div id="main" class="min-h-screen bg-gray-200 p-8">
    <!-- ::put the (todo, completed, or archived) content here;; -->
    <?php
    if(isset($content)){

        echo $content;
    }
    else
    {
        echo "[BAD USAGE] of template, \$content variable should be defined and has the result";
    }
    ?>
</div>
</body>
</html>
