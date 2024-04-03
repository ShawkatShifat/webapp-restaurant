<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FoodHaven</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <nav class="navbar">
        <div class="navbar-container container">
            <input type="checkbox" name="" id="">
            <div class="hamburger-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>
            <ul class="menu-items">
                <li><a href="index.html">Home</a></li>
                <li><a href="restaurantHome.html">Restaurants</a></li>
                <li><a href="#description">About</a></li>
                <li><a href="#food-menu">Menu</a></li>
                <li><a href="#location">Location</a></li>
                <li><a href="#contact-info">Contact</a></li>
            </ul>
            <h1 class="logo">FoodHaven</h1>
        </div>
    </nav>
    <section class="showcase-area" id="showcase" style="background-image: url('images/takeout.jpg');">
    </section>

    <section id="description">
        <div class="decription-container">
            <h2 class="description-heading">About!</h2>
            <div class="description-item">
                <?php
                require 'database.php';
                try {
                    $stmt = $pdo->prepare("SELECT description FROM restaurant WHERE restaurantID = :restaurantID");
                    $stmt->execute(['restaurantID' => 1]);
                    $row = $stmt->fetch();
                    $description = $row['description'];
                    echo '<p class="description-paragraph">' . $description . '</p>';
                } catch (PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }
                ?>
            </div>
        </div>
    </section>

    <section id="food-menu">
        <div class="food-menu-container container">
            <h2 class="food-menu-heading">Menu</h2>
            <div class="food-menu-items">
                <!--Copy from here-->
                <div class="food-menu-item">
                    <img class="food-item-img" src="images/animeRes.jpg" alt="Spaghetti Carbonara">
                    <h3 class="food-item-name">Spaghetti Carbonara</h3>
                    <p class="food-item-description">Pasta with bacon, eggs, Parmesan cheese, and black pepper.</p>
                    <p class="food-item-price">$12.99</p>
                </div>
                <!--Until here for food menu item-->
                <div class="food-menu-item">
                    <img class="food-item-img" src="images/animeRes.jpg" alt="Spaghetti Carbonara">
                    <h3 class="food-item-name">Spaghetti Carbonara</h3>
                    <p class="food-item-description">Pasta with bacon, eggs, Parmesan cheese, and black pepper.</p>
                    <p class="food-item-price">$12.99</p>
                </div>
                <div class="food-menu-item">
                    <img class="food-item-img" src="images/animeRes.jpg" alt="Spaghetti Carbonara">
                    <h3 class="food-item-name">Spaghetti Carbonara</h3>
                    <p class="food-item-description">Pasta with bacon, eggs, Parmesan cheese, and black pepper.</p>
                    <p class="food-item-price">$12.99</p>
                </div>
                <div class="food-menu-item">
                    <img class="food-item-img" src="images/animeRes.jpg" alt="Spaghetti Carbonara">
                    <h3 class="food-item-name">Spaghetti Carbonara</h3>
                    <p class="food-item-description">Pasta with bacon, eggs, Parmesan cheese, and black pepper.</p>
                    <p class="food-item-price">$12.99</p>
                </div>
                <div class="food-menu-item">
                    <img class="food-item-img" src="images/animeRes.jpg" alt="Spaghetti Carbonara">
                    <h3 class="food-item-name">Spaghetti Carbonara</h3>
                    <p class="food-item-description">Pasta with bacon, eggs, Parmesan cheese, and black pepper.</p>
                    <p class="food-item-price">$12.99</p>
                </div>
                <div class="food-menu-item">
                    <img class="food-item-img" src="images/animeRes.jpg" alt="Spaghetti Carbonara">
                    <h3 class="food-item-name">Spaghetti Carbonara</h3>
                    <p class="food-item-description">Pasta with bacon, eggs, Parmesan cheese, and black pepper.</p>
                    <p class="food-item-price">$12.99</p>
                </div>
                <!-- Add more menu items as needed -->
            </div>
        </div>
    </section>
    <section id="location">
    <div class="location-container container">
        <h2 class="location-heading">Locations</h2>
        <div class="location-items">
            <?php
            require 'database.php'; // Include your database connection file

            try {
                // Fetch the location details
                $stmt = $pdo->prepare("SELECT location, address, map FROM locations WHERE restaurantID = :restaurantID");
                $stmt->execute(['restaurantID' => 1]); // Replace 1 with the actual restaurant ID

                while ($row = $stmt->fetch()) {
                    $location = $row['location'];
                    $address = $row['address'];
                    $map = $row['map'];

                    echo '<div class="location-item">';
                    echo '<h3 class="location-name">' . $location . '</h3>';
                    echo '<p class="location-description">' . $address . '</p>';
                    echo '<a href="' . $map . '" target="_blank" " class="btn btn-secondary">Google Map</a>';
                    echo '</div>';
                }

            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
            ?>
        </div>
    </div>
</section>

    <section id="contact-info">
        <h2 class="contact-info-heading">Contact:</h2>
        <div class="contact-info-container">
            <p class="contact-info-paragraph" id="contact-text">TakeoutIsTrash@gmail.com <big><font color="#117964">Or</font></big> Call at: 1235287</p>
        </div>
    </section>  
</body>
</html>