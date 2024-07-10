<?php
$output = null;

/*
- Y - this year
- m - this month
- d - this day
- D - the day of the week - short name
- l - the day of the week - long name
- h - the hour
- i - the minute
- s - the second
- a - AM/PM
*/

// get year
$output = date('Y');

// get year with timestamp
$output = date('Y', 936345600);

// get timestamp from strtotime
$output = date('Y', strtotime('2015-01-01'));

// get month
$output = date('m');

// get day
$output = date('D');
$output = date('l');

// get month-day-year
$output = date('Y-m-d');
$output = date('d-m-Y');

// get hour
$output = date('h');

// get min
$output = date('i');

// get second
$output = date('s');

// get am/pm
$output = date('a');

// all together
$output = date('Y-m-d h:i:s a');
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
            <!-- Output -->
            <p class="text-xl"><?php echo $output; ?></p>
        </div>
    </div>
</body>

</html>