<?php

// Interface
interface Playable {
    public function play(): string;
    public function pause(): string;
}

// Abstract Class
abstract class Account implements Playable {
    protected $username;
    protected $plan;

    public function __construct($username, $plan){
        $this->username = $username;
        $this->plan = $plan;
    }

    public function getUsername(){
        return $this->username;
    }

    public function getPlan(){
        return $this->plan;
    }
}

// Free Account
class FreeAccount extends Account {

    public function play(): string {
        return "Playing music... Ads may appear.";
    }

    public function pause(): string {
        return "Music paused.";
    }

    public function feature(){
        return "Contains advertisements.";
    }
}

// Premium Account
class PremiumAccount extends Account {

    public function play(): string {
        return "Playing music with no ads 🎵";
    }

    public function pause(): string {
        return "Music paused.";
    }

    public function feature(){
        return "Unlimited listening. No ads.";
    }
}

$free = new FreeAccount("Hans", "Free");
$premium = new PremiumAccount("Flores", "Premium");

$message = "";

if(isset($_POST['action'])){
    if($_POST['account']=="free"){
        if($_POST['action']=="play"){
            $message = $free->play();
        }else{
            $message = $free->pause();
        }
    }

    if($_POST['account']=="premium"){
        if($_POST['action']=="play"){
            $message = $premium->play();
        }else{
            $message = $premium->pause();
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Music Account Demo</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white text-gray-900 min-h-screen">

  <div class="max-w-2xl mx-auto px-4 py-8 sm:px-6 sm:py-12">
    <h1 class="text-2xl sm:text-3xl font-light text-center mb-2">Music Accounts</h1>
    <p class="text-center text-gray-500 text-sm mb-8">Choose your plan</p>
    <?php if($message!=""){ ?>
    <div class="bg-gray-100 p-4 rounded text-center mb-8 text-sm">
      <?php echo $message; ?>
    </div>
    <?php } ?>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <!-- Free Account -->
      <div class="border border-gray-200 p-6 rounded">
      <h2 class="text-lg font-medium mb-6">Free</h2>
      <p class="text-sm text-gray-600 mb-4"><?php echo $free->getUsername(); ?></p>
      <p class="text-sm text-gray-600 mb-6"><?php echo $free->feature(); ?></p>
      <form method="POST" class="space-y-3">
        <input type="hidden" name="account" value="free">
        <div class="flex gap-2">
          <button name="action" value="play" class="flex-1 px-4 py-2 border border-gray-300 rounded text-sm hover:bg-gray-50">
          Play
          </button>
          <button name="action" value="pause" class="flex-1 px-4 py-2 border border-gray-300 rounded text-sm hover:bg-gray-50">
          Pause
          </button>
        </div>
        </form>
      </div>
      <!-- Premium Account -->
      <div class="bg-gradient-to-br from-green-50 to-emerald-50 border border-green-200 p-6 rounded relative overflow-hidden">
        <div class="absolute top-0 right-0 w-20 h-20 bg-green-200 rounded-full opacity-20 -mr-10 -mt-10"></div>
        <h2 class="text-lg font-medium mb-2 text-green-900">Premium ✨</h2>
        <p class="text-xs text-green-600 mb-6 font-medium">UNLIMITED ACCESS</p>
        <p class="text-sm text-gray-700 mb-4"><?php echo $premium->getUsername(); ?></p>
        <p class="text-sm text-gray-700 mb-6 font-medium"><?php echo $premium->feature(); ?></p>
        <form method="POST" class="space-y-3">
        <input type="hidden" name="account" value="premium">
        <div class="flex gap-2">
          <button name="action" value="play" class="flex-1 px-4 py-2 bg-green-500 text-white rounded text-sm hover:bg-green-600 transition-colors font-medium">
          Play
          </button>
          <button name="action" value="pause" class="flex-1 px-4 py-2 bg-green-500 text-white rounded text-sm hover:bg-green-600 transition-colors font-medium">
          Pause
          </button>
        </div>
        </form>
      </div>
    </div>
  </div>

</body>
</html>