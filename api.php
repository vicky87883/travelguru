<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
require 'config.php';

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'GET':
        handleGetRequest($pdo);
        break;

    case 'POST':
        $input = json_decode(file_get_contents('php://input'), true);
        handlePostRequest($input, $pdo);
        break;

    default:
        http_response_code(405);
        echo json_encode(["message" => "Method Not Allowed"]);
        break;
}

// Function to handle GET requests
function handleGetRequest($pdo) {
    try {
        $stmt = $pdo->query("SELECT * FROM posts ORDER BY pubDate DESC");
        $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($posts);
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(["message" => "Failed to retrieve posts", "error" => $e->getMessage()]);
    }
}

// Function to handle POST requests
function handlePostRequest($input, $pdo) {
    if (isset($input['title']) && isset($input['description']) && isset($input['link'])) {
        try {
            $stmt = $pdo->prepare("INSERT INTO posts (title, description, link, pubDate) VALUES (:title, :description, :link, NOW())");
            $stmt->execute(['title' => $input['title'], 'description' => $input['description'], 'link' => $input['link']]);
            $newUserId = $pdo->lastInsertId();
            echo json_encode(["message" => "Post added successfully", "post_id" => $newUserId]);
        } catch (Exception $e) {
            http_response_code(500);
            echo json_encode(["message" => "Failed to add post", "error" => $e->getMessage()]);
        }
    } else {
        http_response_code(400);
        echo json_encode(["message" => "Invalid input"]);
    }
}
?>
