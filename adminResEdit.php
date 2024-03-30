<?php
// Include the database connection file
include 'database.php';

// Retrieve restaurant information from the database
try {
    // Prepare and execute the query to fetch restaurant details
    $stmt_restaurant = $pdo->query("SELECT * FROM restaurant WHERE restaurantID = 1"); // Adjust the WHERE condition as needed

    // Fetch the restaurant details
    $restaurant = $stmt_restaurant->fetch(PDO::FETCH_ASSOC);

    // Prepare and execute the query to fetch menu items for the restaurant
    $stmt_menu_items = $pdo->query("SELECT * FROM menuitem WHERE menuID IN (SELECT menuID FROM menu WHERE restaurantID = 1)"); // Adjust the WHERE condition as needed

    // Fetch the menu items
    $menu_items = $stmt_menu_items->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    // If an error occurs, handle it
    die("Error fetching restaurant information: " . $e->getMessage());
}
?>

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
                <li><a href="restaurants/restaurantHome.html">Restaurants</a></li>
                <li><a href="#description">About</a></li>
                <li><a href="#food-menu">Menu</a></li>
                <li><a href="#location">Location</a></li>
                <li><a href="#contact-info">Contact</a></li>
            </ul>
            <h1 class="logo">FoodHaven</h1>
        </div>
    </nav>
    <section class="showcase-area" id="showcase" style="background-image: url('images/takeout.jpg');">
        <div class="showcase-container">
            <input type="file" accept="image/*" id="image-upload" name="uploadImg"style="display: none;">
            <label for="image-upload" class="upload-label"><img src="images/uploadButton.png" class="upload-image"></label>
        </div>
    </section>
    <section id="description">
        <div class="description-container">
            <h2 class="description-heading">About!</h2>
            <div class="description-item">
                <p class="description-paragraph" id="description-text">This place is for pussies and pussies only.</p>
                <button class="btn btn-primary" onclick="editDescription()">Edit</button>
                <button class="btn btn-success" onclick="saveDescription()" style="display: none;">Save</button>
                <button class="btn btn-danger" onclick="cancelDescription()" style="display: none;">Cancel</button>
            </div>
        </div>
    </section>
    <section id="food-menu">
        <div class="food-menu-container container">
            <h2 class="food-menu-heading">Menu</h2>
            <div class="food-menu-items">
                <!--Copy from here-->
                <div class="food-menu-item">
                    <div class="food-menu-item-image">
                        <img class="food-item-img" src="images/animeRes.jpg" alt="Spaghetti Carbonara">
                        <input type="file" accept="image/*" id="food-menu-image-upload" name="uploadImgFoodMenu"style="display: none;">
                        <label for="food-menu-image-upload" class="food-menu-upload-label"><img src="images/16.png" class="food-menu-upload-image"> Change Image</label>
                    </div>
                    <h3 class="food-item-name">Spaghetti Carbonara</h3>
                    <p class="food-item-description">Pasta with bacon, eggs, Parmesan cheese, and black pepper.</p>
                    <p class="food-item-price">$12.99</p>
                    <button class="btn btn-primary" onclick="editFoodMenuItem(1)">Edit</button>
                </div>
                <!--Until here for food menu item-->
                <div class="food-menu-item">
                    <div class="food-menu-item-image">
                        <img class="food-item-img" src="images/animeRes.jpg" alt="Spaghetti Carbonara">
                        <input type="file" accept="image/*" id="food-menu-image-upload" name="uploadImgFoodMenu"style="display: none;">
                        <label for="food-menu-image-upload" class="food-menu-upload-label"><img src="images/16.png" class="food-menu-upload-image"> Change Image</label>
                    </div>
                    <h3 class="food-item-name">Spaghetti Carbonara</h3>
                    <p class="food-item-description">Pasta with bacon, eggs, Parmesan cheese, and black pepper.</p>
                    <p class="food-item-price">$12.99</p>
                    <button class="btn btn-primary" onclick="editFoodMenuItem(2)">Edit</button>
                </div>
                <div class="food-menu-item">
                    <div class="food-menu-item-image">
                        <img class="food-item-img" src="images/animeRes.jpg" alt="Spaghetti Carbonara">
                        <input type="file" accept="image/*" id="food-menu-image-upload" name="uploadImgFoodMenu"style="display: none;">
                        <label for="food-menu-image-upload" class="food-menu-upload-label"><img src="images/16.png" class="food-menu-upload-image"> Change Image</label>
                    </div>
                    <h3 class="food-item-name">Spaghetti Carbonara</h3>
                    <p class="food-item-description">Pasta with bacon, eggs, Parmesan cheese, and black pepper.</p>
                    <p class="food-item-price">$12.99</p>
                    <button class="btn btn-primary" onclick="editFoodMenuItem(3)">Edit</button>
                </div>
                <div class="food-menu-item">
                    <div class="food-menu-item-image">
                        <img class="food-item-img" src="images/animeRes.jpg" alt="Spaghetti Carbonara">
                        <input type="file" accept="image/*" id="food-menu-image-upload" name="uploadImgFoodMenu"style="display: none;">
                        <label for="food-menu-image-upload" class="food-menu-upload-label"><img src="images/16.png" class="food-menu-upload-image"> Change Image</label>
                    </div>
                    <h3 class="food-item-name">Spaghetti Carbonara</h3>
                    <p class="food-item-description">Pasta with bacon, eggs, Parmesan cheese, and black pepper.</p>
                    <p class="food-item-price">$12.99</p>
                    <button class="btn btn-primary" onclick="editFoodMenuItem(4)">Edit</button>
                </div>
                <div class="food-menu-item">
                    <div class="food-menu-item-image">
                        <img class="food-item-img" src="images/animeRes.jpg" alt="Spaghetti Carbonara">
                        <input type="file" accept="image/*" id="food-menu-image-upload" name="uploadImgFoodMenu"style="display: none;">
                        <label for="food-menu-image-upload" class="food-menu-upload-label"><img src="images/16.png" class="food-menu-upload-image"> Change Image</label>
                    </div>
                    <h3 class="food-item-name">Spaghetti Carbonara</h3>
                    <p class="food-item-description">Pasta with bacon, eggs, Parmesan cheese, and black pepper.</p>
                    <p class="food-item-price">$12.99</p>
                    <button class="btn btn-primary" onclick="editFoodMenuItem(5)">Edit</button>
                </div>
                <div class="food-menu-item">
                    <div class="food-menu-item-image">
                        <img class="food-item-img" src="images/animeRes.jpg" alt="Spaghetti Carbonara">
                        <input type="file" accept="image/*" id="food-menu-image-upload" name="uploadImgFoodMenu"style="display: none;">
                        <label for="food-menu-image-upload" class="food-menu-upload-label"><img src="images/16.png" class="food-menu-upload-image"> Change Image</label>
                    </div>
                    <h3 class="food-item-name">Spaghetti Carbonara</h3>
                    <p class="food-item-description">Pasta with bacon, eggs, Parmesan cheese, and black pepper.</p>
                    <p class="food-item-price">$12.99</p>
                    <button class="btn btn-primary" onclick="editFoodMenuItem(6)">Edit</button>
                </div>
                <div class="food-menu-item">
                    <div class="food-menu-item-image">
                        <img class="food-item-img" src="images/animeRes.jpg" alt="Spaghetti Carbonara">
                        <input type="file" accept="image/*" id="food-menu-image-upload2" name="uploadImgFoodMenu" style="display: none;">
                        <label for="food-menu-image-upload2" class="food-menu-upload-label"><img src="images/16.png" class="food-menu-upload-image"> Change Image</label>
                    </div>
                    <h3 class="food-item-name">Spaghetti Carbonara</h3>
                    <p class="food-item-description">Pasta with bacon, eggs, Parmesan cheese, and black pepper.</p>
                    <p class="food-item-price">$12.99</p>
                    <button class="btn btn-primary" onclick="editFoodMenuItem(2)">Edit</button>
                </div>
                <div class="food-menu-item">
                    <div class="food-menu-item-image">
                        <img class="food-item-img" src="images/animeRes.jpg" alt="Spaghetti Carbonara">
                        <input type="file" accept="image/*" id="food-menu-image-upload2" name="uploadImgFoodMenu" style="display: none;">
                        <label for="food-menu-image-upload2" class="food-menu-upload-label"><img src="images/16.png" class="food-menu-upload-image"> Change Image</label>
                    </div>
                    <h3 class="food-item-name">Spaghetti Carbonara</h3>
                    <p class="food-item-description">Pasta with bacon, eggs, Parmesan cheese, and black pepper.</p>
                    <p class="food-item-price">$12.99</p>
                    <button class="btn btn-primary" onclick="editFoodMenuItem(2)">Edit</button>
                </div>
                <div class="food-menu-item">
                    <div class="food-menu-item-image">
                        <img class="food-item-img" src="images/animeRes.jpg" alt="Spaghetti Carbonara">
                        <input type="file" accept="image/*" id="food-menu-image-upload2" name="uploadImgFoodMenu" style="display: none;">
                        <label for="food-menu-image-upload2" class="food-menu-upload-label"><img src="images/16.png" class="food-menu-upload-image"> Change Image</label>
                    </div>
                    <h3 class="food-item-name">Spaghetti Carbonara</h3>
                    <p class="food-item-description">Pasta with bacon, eggs, Parmesan cheese, and black pepper.</p>
                    <p class="food-item-price">$12.99</p>
                    <button class="btn btn-primary" onclick="editFoodMenuItem(2)">Edit</button>
                </div>
                <div class="food-menu-item">
                    <div class="food-menu-item-image">
                        <img class="food-item-img" src="images/animeRes.jpg" alt="Spaghetti Carbonara">
                        <input type="file" accept="image/*" id="food-menu-image-upload2" name="uploadImgFoodMenu" style="display: none;">
                        <label for="food-menu-image-upload2" class="food-menu-upload-label"><img src="images/16.png" class="food-menu-upload-image"> Change Image</label>
                    </div>
                    <h3 class="food-item-name">Spaghetti Carbonara</h3>
                    <p class="food-item-description">Pasta with bacon, eggs, Parmesan cheese, and black pepper.</p>
                    <p class="food-item-price">$12.99</p>
                    <button class="btn btn-primary" onclick="editFoodMenuItem(2)">Edit</button>
                </div>
                <div class="food-menu-item">
                    <div class="food-menu-item-image">
                        <img class="food-item-img" src="images/animeRes.jpg" alt="Spaghetti Carbonara">
                        <input type="file" accept="image/*" id="food-menu-image-upload2" name="uploadImgFoodMenu" style="display: none;">
                        <label for="food-menu-image-upload2" class="food-menu-upload-label"><img src="images/16.png" class="food-menu-upload-image"> Change Image</label>
                    </div>
                    <h3 class="food-item-name">Spaghetti Carbonara</h3>
                    <p class="food-item-description">Pasta with bacon, eggs, Parmesan cheese, and black pepper.</p>
                    <p class="food-item-price">$12.99</p>
                    <button class="btn btn-primary" onclick="editFoodMenuItem(2)">Edit</button>
                </div>
                <!-- Add more menu items as needed -->
            </div>
        </div>
    </section>
    <br>
    <section id="location">
        <div class="location-container container">
            <h2 class="location-heading">Locations</h2>
            <div class="location-items">
                <!--Copy from here-->
                <div class="location-item">
                    <h3 class="location-name">Spaghetti Carbonara</h3>
                    <p class="location-description">Pasta with bacon, eggs, Parmesan cheese, and black pepper.</p>
                    <a href="sample@Link" class="btn btn-secondary">Google Map</a><br>
                    <button class="btn btn-primary" onclick="editLocationItem(1)">Edit</button>
                    
                </div>
                <!--Until here for location item-->
                <div class="location-item">
                    <h3 class="location-name">Spaghetti Carbonara</h3>
                    <p class="location-description">Pasta with bacon, eggs, Parmesan cheese, and black pepper.</p>
                    <a href="sample@Link" class="btn btn-secondary">Google Map</a><br>
                    <button class="btn btn-primary" onclick="editLocationItem(2)">Edit</button>
                    
                </div>
                <div class="location-item">
                    <h3 class="location-name">Spaghetti Carbonara</h3>
                    <p class="location-description">Pasta with bacon, eggs, Parmesan cheese, and black pepper.</p>
                    <a href="sample@Link" class="btn btn-secondary">Google Map</a><br>
                    <button class="btn btn-primary" onclick="editLocationItem(3)">Edit</button>
                    
                </div>
                <div class="location-item">
                    <h3 class="location-name">Spaghetti Carbonara</h3>
                    <p class="location-description">Pasta with bacon, eggs, Parmesan cheese, and black pepper.</p>
                    <a href="sample@Link" class="btn btn-secondary">Google Map</a><br>
                    <button class="btn btn-primary" onclick="editLocationItem(4)">Edit</button>
                    
                </div>
                <div class="location-item">
                    <h3 class="location-name">Spaghetti Carbonara</h3>
                    <p class="location-description">Pasta with bacon, eggs, Parmesan cheese, and black pepper.</p>
                    <a href="sample@Link" class="btn btn-secondary">Google Map</a><br>
                    <button class="btn btn-primary" onclick="editLocationItem(5)">Edit</button>
                    
                </div>
                <!-- Add more menu items as needed -->
            </div>
        </div>
    </section>
    <section id="contact-info">
        <h2 class="contact-info-heading">Contact:</h2>
        <div class="contact-info-container">
            <p class="contact-info-paragraph" id="contact-text"><a href="mailto: TakeoutIsTrash@gmail.com" target="_blank">Email!</a>  Or Call at: 1235287</p>
            <button class="btn btn-primary" onclick="editContactInfo()">Edit</button>
            <button class="btn btn-success" onclick="saveContactInfo()" style="display: none;">Save</button>
            <button class="btn btn-danger" onclick="cancelContactInfo()" style="display: none;">Cancel</button>
        </div>
    </section>

    <script>
    function editDescription() {
        var descriptionParagraph = document.getElementById("description-text");
        var editButton = document.querySelector("#description .btn-primary");
        var saveButton = document.querySelector("#description .btn-success");
        var cancelButton = document.querySelector("#description .btn-danger");

    // Hide edit button and show save and cancel buttons
        editButton.style.display = "none";
        saveButton.style.display = "inline-block";
        cancelButton.style.display = "inline-block";

    // Make paragraph editable
        descriptionParagraph.contentEditable = true;
        descriptionParagraph.focus();
    }

    function saveDescription() {
        var descriptionParagraph = document.getElementById("description-text");
        var editButton = document.querySelector("#description .btn-primary");
        var saveButton = document.querySelector("#description .btn-success");
        var cancelButton = document.querySelector("#description .btn-danger");

    // Save the edited content
        var newText = descriptionParagraph.innerText;

    // Update paragraph content
        descriptionParagraph.contentEditable = false;
        descriptionParagraph.innerText = newText;

    // Hide save and cancel buttons, show edit button
        saveButton.style.display = "none";
        cancelButton.style.display = "none";
        editButton.style.display = "inline-block";
    }

    function cancelDescription() {
        var descriptionParagraph = document.getElementById("description-text");
        var editButton = document.querySelector("#description .btn-primary");
        var saveButton = document.querySelector("#description .btn-success");
        var cancelButton = document.querySelector("#description .btn-danger");

    // Cancel editing, revert to original content
        descriptionParagraph.contentEditable = false;

    // Hide save and cancel buttons, show edit button
        saveButton.style.display = "none";
        cancelButton.style.display = "none";
        editButton.style.display = "inline-block";
        descriptionParagraph.innerText = "This place is for pussies and pussies only.";
    }

    function editContactInfo() {
        var contactInfoParagraph = document.getElementById("contact-text");
        var editButton = document.querySelector("#contact-info .btn-primary");
        var saveButton = document.querySelector("#contact-info .btn-success");
        var cancelButton = document.querySelector("#contact-info .btn-danger");

    // Hide edit button and show save and cancel buttons
        editButton.style.display = "none";
        saveButton.style.display = "inline-block";
        cancelButton.style.display = "inline-block";

    // Make paragraph editable
        contactInfoParagraph.contentEditable = true;
        contactInfoParagraph.focus();
    }

    function saveContactInfo() {
        var contactInfoParagraph = document.getElementById("contact-text");
        var editButton = document.querySelector("#contact-info .btn-primary");
        var saveButton = document.querySelector("#contact-info .btn-success");
        var cancelButton = document.querySelector("#contact-info .btn-danger");

    // Save the edited content
        var newInfo = contactInfoParagraph.innerText;

    // Update paragraph content
        contactInfoParagraph.contentEditable = false;
        contactInfoParagraph.innerText = newInfo;

    // Hide save and cancel buttons, show edit button
        saveButton.style.display = "none";
        cancelButton.style.display = "none";
        editButton.style.display = "inline-block";
    }

    function cancelContactInfo() {
        var contactInfoParagraph = document.getElementById("contact-text");
        var editButton = document.querySelector("#contact-info .btn-primary");
        var saveButton = document.querySelector("#contact-info .btn-success");
        var cancelButton = document.querySelector("#contact-info .btn-danger");

    // Cancel editing, revert to original content
        contactInfoParagraph.contentEditable = false;

    // Hide save and cancel buttons, show edit button
        saveButton.style.display = "none";
        cancelButton.style.display = "none";
        editButton.style.display = "inline-block";
        contactInfoParagraph.innerText = "Email! Or Call at: 1235287";
    }

    </script>

</body>
</html>