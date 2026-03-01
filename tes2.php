<?php
$User = [
    'name' => 'Alice',
    'email' => 'alice@example.com',
    'password' => '123456',
    'hobbies' => ['reading', 'traveling', 'coding']
];

$fruits = [
  ['apple', 'red',],
  ['orange','orange'],
  ['banana','yellow'],
];
$users = [
  ['name' => 'hans','email'=> 'hans@example.com','password'=> '123456'],
  ['name'=> 'sandra','email'=> 'sandra@example.com','password'=> '123456'],
  ['name'=> 'dam','email'=> 'damn@example.com','password'=> '123456']
];


$fruits[] = ['grapes', 'purple'];

$output = $User['name'];
$output = $User['email'];
$output = $User['hobbies'][1];
$output = $fruits[0][1];


$output = $users[1]['email'];
$User['address'] = '123 main st';
$users[] = ['maria', 'maria@sample.com', '12345'];

unset($users[2]);

$output = count($users);


// 

$output1 = date('Y'); // 4 digit year
$output2 = date('m'); // 2 digit month
$output3 = date('F'); // full month name
$output4 = date('d'); // 2 digit day of the month
$output5 = date('D'); // 3 letter day name  
$output6 = date('l'); // full day name
$output7 = date('h'); // 12-hour format of hour with leading zeros
$output8 = date('i'); // minutes with leading zeros
$output9 = date('s'); // seconds with leading zeros
$output10 = date('a'); // am or pm


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Asso & Multi</title>
  </head>
    <body class="bg-gray-100">
      <p class="text-xl"><?= $output1 ?></p>
      <p class="text-xl"><?= $output2 ?></p>
      <p class="text-xl"><?= $output3 ?></p>
      <p class="text-xl"><?= $output4 ?></p>
      <p class="text-xl"><?= $output5 ?></p>
      <p class="text-xl"><?= $output6 ?></p>
      <p class="text-xl"><?= $output7 ?></p>
      <p class="text-xl"><?= $output8 ?></p>
      <p class="text-xl"><?= $output9 ?></p>
      <p class="text-xl"><?= $output10 ?></p>







      <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
          <h1 class="text-3xl font-semibold">PHP</h1>
        </div>
      </header>
        <div class="container mx-auto p-4 mt-4">
          <div class="bg-white rounded-lg shadow-md p-6 mt-6">
            <p class="text-xl"><?= $output ?></p>
            <h2 class="text-xl font-semibold my-4">User Array</h2>
            <p>
              <pre><?= print_r($fruits) ?></pre>
              <pre><?= print_r($users) ?></pre>
            </p>

          </div>
        </div> 
    </body>
</html>