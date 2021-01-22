<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?= urlAssets("img/favicon.png") ?>">
    <link rel="stylesheet" href="<?= urlAssets("css/main.css")?>">
    <?=$this->section('styles') ?>
    <title>Twitter</title>
</head>
<body>
    <?=$this->section('content') ?>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <?=$this->section('scripts') ?>
</body>
</html>