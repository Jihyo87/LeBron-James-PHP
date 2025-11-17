<?php
// this is for my template and helpers
include_once $_SERVER['DOCUMENT_ROOT'] . '/CMS TASK/includes/helpers.php';;
include 'template/template.php';
include_once 'includes/db.inc.php';
echo $head;
echo $header;
echo $nav;

// insert
if (isset($_POST['submit'])) {
    try {
        $sql = 'INSERT INTO feedback SET
            full_name = :full_name,
            email = :email,
            message = :message,
            image = :image,
            submitted_at = NOW()';
        $s = $pdo->prepare($sql);
        $s->bindValue(':full_name', $_POST['fullname']);
        $s->bindValue(':email', $_POST['email']);
        $s->bindValue(':message', $_POST['feedback']);
        $s->bindValue(':image', $imagePath);
        $s->execute();

        header('Location: .');
        exit();
    } catch (PDOException $e) {
        echo 'Error inserting feedback: ' . $e->getMessage();
        exit();
    }
}

// delete feedback
if (isset($_POST['deletejoke'])) {
    try {
        $sql = 'DELETE FROM `feedback` WHERE feedback_id = :id';
        $s = $pdo->prepare($sql);
        $s->bindValue(':id', $_POST['deletejoke']);
        $s->execute();

        header('Location: .');
        exit();
    } catch (PDOException $e) {
        echo 'Error deleting joke: ' . $e->getMessage();
        exit();
    }
}

// Add image
$imagePath = null;

if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
    $uploadDir = 'uploads/';
    $imageName = uniqid() . '_' . basename($_FILES['image']['name']);
    $targetFile = $uploadDir . $imageName;

    $fileType = mime_content_type($_FILES['image']['tmp_name']);
    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];

    if (in_array($fileType, $allowedTypes)) {
        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
            $imagePath = $imageName;
        } else {
            echo "Failed to upload the image.";
        }
    }
}

// community feedback list
try {
    $sql = 'SELECT feedback_id, full_name, email, message, image, submitted_at FROM feedback ORDER BY submitted_at DESC';
    $result = $pdo->query($sql);

    $feedback = [];
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $feedback[] = $row;
    }
} catch (PDOException $e) {
    echo 'Error fetching feedback: ' . $e->getMessage();
    exit();
}

echo $main1;
include 'feedback.html.php';
echo $main2;
echo $footer;
