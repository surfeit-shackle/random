<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Quote App</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }
    </style>
</head>
<body>
    <h1>Inspirational Quote Generator</h1>
    <p><?php echo generateQuote(); ?></p>
</body>
</html>

<?php
// Function to generate a random quote
function generateQuote() {
    $quotes = [
        "The only way to do great work is to love what you do. - Steve Jobs",
        "In three words I can sum up everything I've learned about life: it goes on. - Robert Frost",
        "Believe you can and you're halfway there. - Theodore Roosevelt",
        "Life is what happens when you're busy making other plans. - John Lennon",
        "The future belongs to those who believe in the beauty of their dreams. - Eleanor Roosevelt"
    ];

    $randomIndex = array_rand($quotes);
    return $quotes[$randomIndex];
}
?>
