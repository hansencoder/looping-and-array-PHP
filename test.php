<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?php echo $title = 'William Shakespeare Blog'; ?></title>
</head>

<body class="bg-gray-100">
    <header class="bg-amber-900 text-white p-6">
        <div class="container mx-auto">
            <h1 class="text-4xl font-bold"><?php echo $header = "William Shakespeare"; ?></h1>
            <p class="text-amber-100 mt-2"><?php echo $subtitle = "1564 - 1616 | The Bard of Avon"; ?></p>
        </div>
    </header>
    
    <div class="container mx-auto px-4 py-8 max-w-4xl">
        <!-- Main Image Section -->
        <div class="bg-white rounded-lg shadow-lg p-6 mb-8 flex justify-center">
            <div class="w-full md:w-1/2">
                <img src="https://upload.wikimedia.org/wikipedia/commons/a/a2/Shakespeare.jpg" 
                        alt="William Shakespeare Portrait" 
                        class="w-full h-auto object-contain rounded-lg shadow-md">
                <p class="text-gray-600 text-sm mt-4 text-center"><?php echo $imageCaption = "The Chandos portrait of William Shakespeare"; ?></p>
            </div>
        </div>

        <!-- Biography Section -->
        <div class="bg-white rounded-lg shadow-lg p-8 mb-8 border-amber-800">
            <h2 class="text-3xl font-bold mb-6 text-amber-800"><?php echo $bioTitle = "About The Bard"; ?></h2>
            <p class="text-gray-700 leading-relaxed text-lg"><?php echo $biography = "William Shakespeare was an English playwright, poet, and actor, widely regarded as the greatest writer in the English language and the world's pre-eminent dramatist."; ?></p>
            <p class="mt-6 text-gray-700 leading-relaxed text-lg"><?php echo $moreBio = "He wrote approximately 39 plays, 154 sonnets, two long narrative poems, and a few other verses. His plays have been translated into every major living language."; ?></p>
        </div>
        
        <div class="bg-white rounded-lg shadow-lg p-8 mb-8 border-emerald-600">
            <h2 class="text-3xl font-bold mb-8 text-emerald-800"><?php echo $worksTitle = "Famous Works"; ?></h2>
            
            <?php
                $tragedies = "Hamlet, Macbeth, Othello, King Lear, Romeo and Juliet";
                $comedies = "A Midsummer Night's Dream, Much Ado About Nothing, Twelfth Night, As You Like It";
                $histories = "Henry V, Richard III, Julius Caesar, Antony and Cleopatra";
            ?>
            
            <div class="mb-8 pb-8 border-b border-gray-200">
                <h3 class="text-2xl font-semibold text-amber-700 mb-3"><?php echo $tragedyTitle = "Tragedies"; ?></h3>
                <p class="text-gray-700 leading-relaxed text-lg"><?php echo $tragedies; ?></p>
            </div>
            
            <div class="mb-8 pb-8 border-b border-gray-200">
                <h3 class="text-2xl font-semibold text-emerald-700 mb-3"><?php echo $comedyTitle = "Comedies"; ?></h3>
                <p class="text-gray-700 leading-relaxed text-lg"><?php echo $comedies; ?></p>
            </div>
            
            <div>
                <h3 class="text-2xl font-semibold text-blue-700 mb-3"><?php echo $historyTitle = "Histories"; ?></h3>
                <p class="text-gray-700 leading-relaxed text-lg"><?php echo $histories; ?></p>
            </div>
        </div>

        
        <div class="bg-white rounded-lg shadow-lg p-8 mb-8 ">
            <h2 class="text-3xl font-bold mb-8 text-blue-800"><?php echo $quotesTitle = "Famous Quotes"; ?></h2>
            
            <?php
                $quote1 = "To be, or not to be: that is the question.";
                $quote2 = "All the world's a stage, and all the men and women merely players.";
                $quote3 = "What's in a name? That which we call a rose by any other name would smell as sweet.";
                $quote4 = "The course of true love never did run smooth.";
            ?>
            
            <div class="space-y-6">
                <div class=" pl-6 py-4 bg-amber-50 rounded-r-lg">
                    <p class="italic text-gray-800 text-lg"><?php echo $quote1; ?></p>
                    <p class="text-sm text-gray-600 mt-2 font-medium">- Hamlet</p>
                </div>
                
                <div class=" pl-6 py-4 bg-emerald-50 rounded-r-lg">
                    <p class="italic text-gray-800 text-lg"><?php echo $quote2; ?></p>
                    <p class="text-sm text-gray-600 mt-2 font-medium">- As You Like It</p>
                </div>
                
                <div class="pl-6 py-4 bg-blue-50 rounded-r-lg">
                    <p class="italic text-gray-800 text-lg"><?php echo $quote3; ?></p>
                    <p class="text-sm text-gray-600 mt-2 font-medium">- Romeo and Juliet</p>
                </div>
                
                <div class=" pl-6 py-4 bg-purple-50 rounded-r-lg">
                    <p class="italic text-gray-800 text-lg"><?php echo $quote4; ?></p>
                    <p class="text-sm text-gray-600 mt-2 font-medium">- A Midsummer Night's Dream</p>
                </div>
            </div>
        </div>

        
        <div class="bg-gradient-to-br from-amber-50 to-amber-100 rounded-lg shadow-lg p-8 ">
            <h2 class="text-3xl font-bold mb-8 text-amber-800"><?php echo $infoTitle = "Quick Facts"; ?></h2>
            
            <?php
                $born = "April 1564, Stratford-upon-Avon, England";
                $died = "23 April 1616 (aged 52), Stratford-upon-Avon";
                $occupation = "Playwright, Poet, Actor";
                $spouse = "Anne Hathaway (m. 1582)";
                $children = "Susanna Hall, Hamnet Shakespeare, Judith Quiney";
            ?>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="space-y-4">
                    <p class="text-lg"><span class="font-bold text-amber-900">Born:</span> <span class="text-gray-700"><?php echo $born; ?></span></p>
                    <p class="text-lg"><span class="font-bold text-amber-900">Died:</span> <span class="text-gray-700"><?php echo $died; ?></span></p>
                </div>
                <div class="space-y-4">
                    <p class="text-lg"><span class="font-bold text-amber-900">Spouse:</span> <span class="text-gray-700"><?php echo $spouse; ?></span></p>
                    <p class="text-lg"><span class="font-bold text-amber-900">Children:</span> <span class="text-gray-700"><?php echo $children; ?></span></p>
                </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>