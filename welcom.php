
<?php $isloggedin = true; 
  $name = "hanski";
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
    <h1 class="text-3xl font-semibold">Condition Statement</h1>
  </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <!- Output ->

      <?php  if ($isloggedin): ?>
        <?php if(isset($name)): ?>
      <h1 class="text-3xl">Welcome, <?php echo $name; ?>!</h1>
        <?php else: ?>
      <h1 class="text-3xl">Welcome, Guest!</h1>
        <?php endif; ?>
      <?php else: ?>
      <h1 class="text-3xl">Please log in to continue.</h1>
      <?php endif; ?>
      <hr class="my-4"> 
      <?php if ($isloggedin && $name): ?>
        <p class="text-lg">You are logged in as <?php echo $name; ?>.</p>
      <?php endif; ?>
    </div>
  </div>
</body>
</html>