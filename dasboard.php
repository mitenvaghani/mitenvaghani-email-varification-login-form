<?php    
session_start();
if (!isset($_SESSION['check_login'])){
    header("location:index.php");
}
?>
<h1>
    welcome ot <?php echo $_SESSION['name']; ?>
</h1>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="styles.css">
</head>

<style>

* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    font-family: Arial, sans-serif;
}

header {
    background-color: #333;
    color: white;
    padding: 10px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

nav ul {
    list-style: none;
    display: flex;
}

nav ul li {
    margin: 0 15px;
}

nav ul li a {
    color: white;
    text-decoration: none;
}

.user-icon {
    width: 30px;
    height: 30px;
}

section {
    padding: 20px;
}

.portfolio-item {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
}

.portfolio-image {
    width: 100px;
    height: auto;
    margin-right: 15px;
}

.portfolio-details {
    display: flex;
    flex-direction: column;
}

.cart-content {
    width: 100%;
    background-color: #f4f4f4;
    padding: 20px;
    border: 1px solid #ccc;
}

.cart-item {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
}

.item-logo {
    width: 100px;
    height: auto;
    margin-right: 15px;
}

.item-details {
    display: flex;
    flex-direction: column;
}

.item-name {
    font-weight: bold;
}

footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 10px 0;
    position: relative;
    bottom: 0;
    width: 100%;
}

@media (max-width: 600px) {
    nav ul {
        flex-direction: column;
        align-items: flex-start;
    }
}
</style>


<body>
    <header>
        <div class="logo">My Website</div>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#personal-details">Personal Details</a></li>
                <li><a href="#cart" class="cart-icon">🛒</a></li>
                <li><a href="#login"><img src="user-icon.png" alt="User " class="user-icon"></a></li>
            </ul>
        </nav>
    </header>

    <section id="home">
        <h1>Welcome to My Website</h1>
    </section>

    <section id="portfolio">
        <h2>Portfolio</h2>
        <div class="portfolio-item">
            <img src="user-image.jpg" alt="User " class="portfolio-image">
            <div class="portfolio-details">
                <h3>Name: John Doe</h3>
                <p>Email: john.doe@example.com</p>
                <p>Phone: (123) 456-7890</p>
                <p>Birth Date: January 1, 1990</p>
                <p>Residence Address: 123 Main St, Anytown, USA</p>
                <p>Total Coins: 100</p>
            </div>
        </div>
    </section>

    <section id="personal-details">
        <h2>Personal Details</h2>
        <p>About me...</p>
    </section>

    <section id="cart">
        <h2>Cart</h2>
        <div class="cart-content">
            <div class="cart-item">
                <img src="item1.png" alt="Item 1" class="item-logo">
                <div class="item-details">
                    <span class="item-name">Item 1</span>
                    <span class="item-price">$10.00</span>
                </div>
            </div>
            <div class="cart-item">
                <img src="item2.png" alt="Item 2" class="item-logo">
                <div class="item-details">
                    <span class="item-name">Item 2</span>
                    <span class="item-price">$15.00</span>
                </div>
            </div>
            <div class="cart-item">
                <img src="item3.png" alt="Item 3" class="item-logo">
                <div class="item-details">
                    <span class="item-name">Item 3</span>
                    <span class="item-price">$20.00</span>
                </div>
            </div>
            <div class="cart-item">
                <img src="item4.png" alt="Item 4" class="item-logo">
                <div class="item-details">
                    <span class="item-name">Item 4</span>
                    <span class="item-price">$25.00</span>
                </div>
            </div>
            <div class="cart-item">
                <img src="item5.png" alt="Item 5" class="item-logo">
                <div class="item-details">
                    <span class="item-name">Item 5</span>
                    <span class="item-price">$30.00</span>
                </div>
            </div>
            <div class="cart-item">
                <img src="item6.png" alt="Item 6" class="item-logo">
                <div class="item-details">
                    <span class="item-name">Item 6</span>
                    <span class="item-price">$35.00</span>
                </div>
            </div>
            <div class="cart-item">
                <img src="item7.png" alt="Item 7" class="item-logo">
                <div class="item-details">
                    <span class="item-name">Item 7</span>
                    <span class="item-price">$40.00</span>
                </div>
            </div>
            <div class="cart-item">
                <img src="item8.png" alt="Item 8" class="item-logo">
                <div class="item-details <span class="item-name">Item 8</span>
                    <span class="item-price">$45.00</span>
                </div>
            </div>
            <div class="cart-item">
                <img src="item9.png" alt="Item 9" class="item-logo">
                <div class="item-details">
                    <span class="item-name">Item 9</span>
                    <span class="item-price">$50.00</span>
                </div>
            </div>
            <div class="cart-item">
                <img src="item10.png" alt="Item 10" class="item-logo">
                <div class="item-details">
                    <span class="item-name">Item 10</span>
                    <span class="item-price">$55.00</span>
                </div>
            </div>
        </div>
    </section>

    <section id="login">
        <h2>User Login</h2>
        <form>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Login</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2023 My Website. All rights reserved.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>












    <a href="logout.php">Logout</a>