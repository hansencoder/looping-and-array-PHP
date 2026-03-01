<?php

$listings = [
    ['id' => 1,
        'title' => 'Software Engineer',
        'description' => 'Develop and maintain web applications.',
        'salary' => '80,000 - 100,000',
        'location' => 'Cavite, Philippines',
        'tags' => ['Full-time', 'Remote', 'Mid-level']
    ],
    ['id' => 2,
        'title' => 'Data Analyst',
        'description' => 'Analyze data to help make business decisions.',
        'salary' => '60,000 - 80,000',
        'location' => 'BGC, Quezon City',
        'tags' => ['Full-time', 'On-site', 'Entry-level']
    ],
    ['id' => 3,
        'title' => 'Project Manager',
        'description' => 'Manage projects and coordinate teams.',
        'salary' => '90,000 - 110,000',
        'location' => 'Cubao, Quezon City',
        'tags' => ['Contract', 'Remote', 'Senior-level']
    ],
    ['id' => 4,
        'title' => 'UX Designer',
        'description' => 'Design user interfaces and improve user experience.',
        'salary' => '70,000 - 90,000',
        'location' => 'Paranque, Metro Manila',
        'tags' => ['Full-time', 'On-site', 'Mid-level']
    ],
    ['id' => 5,
        'title' => 'Marketing Specialist',
        'description' => 'Develop and implement marketing strategies.',
        'salary' => '50,000 - 70,000',
        'location' => 'Cubao, Quezon City',
        'tags' => []
    ],
];


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kantumruy+Pro:ital,wght@0,100..700;1,100..700&family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script> 
    <script>tailwind.config = { 
        theme: {
            extend: {
                fontFamily: {
                    'sans': ['Kantumruy Pro', 'sans-serif'],
                    'serif': ['Merriweather', 'Kantumruy Pro', 'serif'],
                },
            },
        },
    }
    </script>

    <title>Job Listings</title>
</head>

<body class="bg-neutral-900">
    <header class="bg-lime-300 text-black p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">Quezon City Job Listing site</h1>
        </div>
    </header>
        <div class="container mx-auto mt-4">
        <!-- output -->
        <?php foreach ($listings as $index => $job) : ?>
            <div class="md my-4">
                <div class="<?= ($index % 2 === 0) ? 'bg-stone-700 text-white' : 'bg-lime-400 text-black' ?> rounded-lg shadow-md">
                    <div class="p-4">
                        <h2 class="text-2xl font-bold mb-2"><?= $job['title'] ?></h2>
                        <p class=" mb-2"><?= $job['description'] ?></p>
                        <ul class="mt-4">
                            <li class="mb-2">
                                <strong>Salary:</strong> <?= $job['salary'] ?>
                            </li>
                            <li class="mb-2">
                                <strong>Location:</strong> <?= $job['location'] ?>
                                <?= ($job['location'] === 'BGC, Quezon City' || $job['location'] === 'Cubao, Quezon City')  ? '<span class="inline-flex items-center text-xs text-white bg-indigo-600 rounded-full px-2 py-1 ml-2">remote</span>' : '' ?>
                                    
                            </li>
                            <li class="mb-2">
                                <?php if(!empty($job['tags'])): ?>
                                <strong>Type:</strong> <?= implode(', ', $job['tags']) ?>
                                <?php endif; ?>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
</body>

</html>