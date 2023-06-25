<?php
$urls = [
 
  "https://cyberfiction.io/result3/male0274.png",
  "https://cyberfiction.io/result3/male0275.png",
  "https://cyberfiction.io/result3/male0276.png",
  "https://cyberfiction.io/result3/male0277.png",
  "https://cyberfiction.io/result3/male0278.png",
  "https://cyberfiction.io/result3/male0279.png",
  "https://cyberfiction.io/result3/male0280.png",
  "https://cyberfiction.io/result3/male0281.png",
  "https://cyberfiction.io/result3/male0282.png",
  "https://cyberfiction.io/result3/male0283.png",
  "https://cyberfiction.io/result3/male0284.png",
  "https://cyberfiction.io/result3/male0285.png",
  "https://cyberfiction.io/result3/male0286.png",
  "https://cyberfiction.io/result3/male0287.png",
  "https://cyberfiction.io/result3/male0288.png",
  "https://cyberfiction.io/result3/male0289.png",
  "https://cyberfiction.io/result3/male0290.png",
  "https://cyberfiction.io/result3/male0291.png",
  "https://cyberfiction.io/result3/male0292.png",
  "https://cyberfiction.io/result3/male0293.png",
  "https://cyberfiction.io/result3/male0294.png",
  "https://cyberfiction.io/result3/male0295.png",
  "https://cyberfiction.io/result3/male0296.png",
  "https://cyberfiction.io/result3/male0297.png",
  "https://cyberfiction.io/result3/male0298.png",
  "https://cyberfiction.io/result3/male0299.png",
  "https://cyberfiction.io/result3/male0300.png",
    // Add all the image URLs here
    // ...
];

$directory = "img/"; // Directory to save the downloaded images

// Create the directory if it doesn't exist
if (!is_dir($directory)) {
    mkdir($directory, 0755, true);
}

foreach ($urls as $url) {
    $filename = basename($url); // Get the filename from the URL

    // Download the image using file_get_contents
    $image = file_get_contents($url);

    // Save the image to the directory with the original filename
    file_put_contents($directory . $filename, $image);

    echo "Downloaded: " . $filename . "<br>";
}

echo "All images downloaded successfully!";
?>
