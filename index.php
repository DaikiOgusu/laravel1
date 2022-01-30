<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php

use Illuminate\Support\Facades\Route;

Route::get('/building' {
    return '建物です';
});

Route::get('/building/{room?}', function($room = '') {
    return '部屋番号は'.$room.'です'});
    ?>
</body>
</html>
