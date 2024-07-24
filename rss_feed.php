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

// Fetch data from travelblog table
$sql = "SELECT title, image, link FROM travelblog";
$result = $conn->query($sql);

// Initialize RSS feed
$rss_feed = "<?xml version='1.0' encoding='UTF-8' ?>";
$rss_feed .= "<rss version='2.0'>";
$rss_feed .= "<channel>";
$rss_feed .= "<title>TravelGuru Blog</title>";
$rss_feed .= "<link>https://www.travelguru.world/blog-page</link>";
$rss_feed .= "<description>Latest TravelGuru Blog Posts</description>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $rss_feed .= "<item>";
        $rss_feed .= "<title>" . htmlspecialchars($row["title"]) . "</title>";
        $rss_feed .= "<link>" . htmlspecialchars($row["link"]) . "</link>";
        $rss_feed .= "<description><![CDATA[<img src='" . htmlspecialchars($row["image"]) . "' alt='" . htmlspecialchars($row["title"]) . "' />]]></description>";
        $rss_feed .= "</item>";
    }
}

$rss_feed .= "</channel>";
$rss_feed .= "</rss>";

// Output RSS feed
header("Content-Type: application/rss+xml");
echo $rss_feed;

$conn->close();
?>
