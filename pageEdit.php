<?php
require 'database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        // Retrieve the values from the form
        $description = $_POST['description-edit'];
        $rating = $_POST['rating-text'];
        
        // Prepare and execute the SQL statement to update the database
        $stmt = $pdo->prepare("UPDATE restaurant SET description = :description, rating = :rating WHERE restaurantID = :restaurantID");
        $stmt->execute(['description' => $description, 'rating' => $rating, 'restaurantID' => 1]);
        
        // Redirect back to the original page after successful update
        header('Location: adminTakeout.php');
        exit();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FoodHaven</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
        <section class="page-edit-showcase-area" style="background-image: url('images/showcaseLogin.jpg');">
        <div class="page-edit-container">
            <form class="page-edit-form" action="pageEdit.php" method="POST">
                <h2>FoodHaven</h2>
                <h3><span>Page Edit</span></h3>
                <div class="page-edit-form-group">
                    <label for="description-edit">New Description</label>
                    <input type="text" id="description-edit" name="description-edit">
                </div>
                <div class="page-edit-form-group">
                    <label for="rating">New Rating</label>
                    <input type="text" id="rating-text" name="rating-text">
                </div>
            <button type="page-edit-submit" class="btn btn-primary">Save</button>
            </form>
            <button type="page-edit-redirect" class="btn btn-primary" onclick="goBack()">Back to Page</button>
        </div>
    </section>

    <script>
        function goBack() {
            var urlParams = new URLSearchParams(window.location.search);
            var returnPage = urlParams.get('return');
            if (returnPage) {
                window.location.href = returnPage;
            } else {
                window.location.href = 'restaurantHome.html';
            }
        }
    </script>

    </body>
</html>
