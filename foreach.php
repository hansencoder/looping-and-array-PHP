<?php
  $names = ['Alice', 'Bob', 'Charlie', 'Diana'];
  $users = [
    [ 'name' => 'Alice', 'email' => 'alice@example.com' ],
    [ 'name' => 'Bob', 'email' => 'bob@example.com' ],
    [ 'name' => 'Charlie', 'email' => 'charlie@example.com' ],
    [ 'name' => 'Diana', 'email' => 'diana@example.com' ]
  ];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP From Scratch</title>
</head>


<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
  <div class="container mx-auto">
  <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
  </div>
  </header>
<div class="container mx-auto p-4 mt-4">
  <div class="bg-white rounded-lg shadow-md p-6 mt-6">
    <!- Output ->


    <h1 class="text-3xl">Welcome</h1>
    <h3 class="text-xl font-semibold mb-4">if-else statement</h3>
    <ul class="mb-6">
      <?php 
        $age = 20;
        if ($age >= 18) {
          echo "<p>You are an adult.</p>";
        } else {
          echo "<p>You are a minor.</p>";
        }
        ?>
    </ul>

    <h3 class="text-xl font-semibold mb-4">if-else if-else statement</h3>
    <ul class="mb-6">
      <?php
        $score = 85;
        if ($score >= 90) {
          echo "<p>Grade: A</p>";
        } elseif ($score >= 80) {
          echo "<p>Grade: B</p>";
        } elseif ($score >= 70) {
          echo "<p>Grade: C</p>";
        } else {
          echo "<p>Grade: F</p>";
        }
        ?>
    </ul>

    <h3 class="text-xl font-semibold mb-4"> switch statement</h3>
    <ul class="mb-6">
      <?php
        $day = 'Tuesday';
        switch ($day) {
          case 'Monday':
            echo "<p>It's Monday!</p>";
            break;
          case 'Tuesday':
            echo "<p>It's Tuesday!</p>";
            break;
          case 'Wednesday':
            echo "<p>It's Wednesday!</p>";
            break;
          default:
            echo "<p>It's another day.</p>";
            break;
        }
        ?>
    </ul>
  
    <!-- FOR LOOP---->
    <h3 class="text-xl font-semibold mb-4">Using a for loop</h3>

    <ul class="mb-6">
      <?php for ($i = 0; $i < count($names); $i++) { ?>
        <li><?php echo $names[$i]; ?></li>
      <?php } ?>
    </ul>

    <h3 class="text-xl font-semibold mb-4">Using a foreach loop</h3>
      <ul class="mb-6">
        <?php foreach ($names as $name) : ?>
          <li><?= $name ?></li>
        <?php endforeach; ?>
      </ul>

    <h3 class="text-xl font-semibold mb-4">Using a foreach loop with index</h3>
      <ul class="mb-6">
        <?php foreach ($names as $index => $name) : ?>
          <li><?= $index . ': ' . $name ?></li>
        <?php endforeach; ?>
      </ul>

    <h3 class="text-xl font-semibold mb-4">Using a foreach loop with associative array</h3>
      <ul class="mb-6"></ul>
        <?php foreach ($users as $user) : ?>
          <li><?= $user['name'] . ' - ' . $user['email'] ?></li>
        <?php endforeach; ?>
        
    <h3 class="text-xl font-semibold mb-4">Getting key names and values from associative array</h3>
      <ul class="mb-6"></ul>
        <?php foreach ($users as $user) : ?>
          <?php foreach ($user as $key => $value) : ?>
            <li><?= $key . ': ' . $value ?></li>
          <?php endforeach; ?>
        <?php endforeach; ?>
  </div>
</div>
</body>
</html>