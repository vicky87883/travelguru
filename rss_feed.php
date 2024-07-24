<?php
$servername = "localhost";
$username = "vikram";
$password = "Parjapat@123";
$dbname = "coder";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Insert blog data into the travelblog table
foreach ($blogs as $blog) {
    $title = $conn->real_escape_string($blog["title"]);
    $image = $conn->real_escape_string($blog["image"]);
    $link = $conn->real_escape_string($blog["link"]);

    $sql = "INSERT INTO travelblog (title, image, link) VALUES ('$title', '$image', '$link')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Create RSS XML
$rss_feed = "<?xml version='1.0' encoding='UTF-8' ?>";
$rss_feed .= "<rss version='2.0'>";
$rss_feed .= "<channel>";
$rss_feed .= "<title>TravelGuru Blog</title>";
$rss_feed .= "<link>https://www.travelguru.world/blog-page</link>";
$rss_feed .= "<description>Latest TravelGuru Blog Posts</description>";

foreach ($blogs as $blog) {
    $rss_feed .= "<item>";
    $rss_feed .= "<title>" . htmlspecialchars($blog["title"]) . "</title>";
    $rss_feed .= "<link>" . htmlspecialchars($blog["link"]) . "</link>";
    $rss_feed .= "<description><![CDATA[<img src='" . htmlspecialchars($blog["image"]) . "' />]]></description>";
    $rss_feed .= "</item>";
}

$rss_feed .= "</channel>";
$rss_feed .= "</rss>";

// Save RSS feed to a file
file_put_contents("rss_feed.xml", $rss_feed);

echo "RSS feed created successfully.";

$conn->close();
?>
