# login Account Management System

## Overview
This project is a simple web application for managing user accounts in a cryptocurrency platform. It includes functionalities for user registration, OTP verification, login, and an admin dashboard.

## File Structure
- `admin.php`: Admin dashboard to view user data.
- `chackotp.php`: OTP verification page.
- `dasboard.php`: User dashboard after login.
- `db.php`: Database connection file.
- `index.php`: User login page.
- `logout.php`: Logout functionality.
- `register.php`: User registration page.
- `styles.css`: Styles for the application.
- `varified.php`: Page for verifying user registration after OTP confirmation.

## Prerequisites
- **XAMPP**: A free and open-source cross-platform web server solution stack package.
- **PHP**: Server-side scripting language (comes with XAMPP).
- **MySQL**: Database management system (comes with XAMPP).
- **PHPMailer**: For sending emails (included in the project).

## Installation Steps

### Step 1: Install XAMPP
1. **Download XAMPP**:
   - Go to the [XAMPP official website](https://www.apachefriends.org/index.html).
   - Download the version suitable for your operating system.

2. **Install XAMPP**:
   - Run the downloaded installer.
   - Follow the installation instructions and select components (ensure Apache and MySQL are selected).
   - Complete the installation.

### Step 2: Start XAMPP
1. **Open XAMPP Control Panel**:
   - Launch the XAMPP Control Panel.
   
2. **Start Apache and MySQL**:
   - Click on the "Start" button next to Apache and MySQL to run the web server and database server.

### Step 3: Create the Database
1. **Access phpMyAdmin**:
   - Open your web browser and go to `http://localhost/phpmyadmin`.

2. **Create a New Database**:
   - Click on the "Databases" tab.
   - In the "Create database" field, enter `crypto` and click "Create".

3. **Create the User Table**:
   - Select the `crypto` database from the left sidebar.
   - Click on the "SQL" tab and run the following SQL query to create the `user` table:

   ```sql
   CREATE TABLE `user` (
       `id` INT NOT NULL AUTO_INCREMENT,
       `name` VARCHAR(100) NOT NULL,
       `email` VARCHAR(100) NOT NULL UNIQUE,
       `password` VARCHAR(255) NOT NULL,
       PRIMARY KEY (`id`)
   );

   ## Functionality

### 1. User Registration (`register.php`)
- Users can register by providing their email.
- An OTP is generated and sent to the user's email for verification.
- If the email is already registered, an error message is displayed.

### 2. OTP Verification (`chackotp.php`)
- Users enter the OTP received via email.
- If the OTP matches the generated OTP, the user is redirected to the verification page (`varified.php`).
- If the OTP is incorrect, an error message is displayed.

### 3. User Verification (`varified.php`)
- After successful OTP verification, users can set their name and password.
- The user data is stored in the database.

### 4. User Login (`index.php`)
- Users can log in using their email and password.
- If the credentials are correct, the user is redirected to their dashboard (`dasboard.php`).

### 5. User Dashboard (`dasboard.php`)
- Displays a welcome message and user details.
- Contains sections for portfolio, personal details, and cart.

### 6. Admin Dashboard (`admin.php`)
- Admin can view all registered users in a DataTable format.

### 7. Logout (`logout.php`)
- Users can log out, which clears their session.

## Technologies Used
- PHP: Server-side scripting language.
- MySQL: Database management system.
- HTML/CSS: Frontend structure and styling.
- PHPMailer: For sending emails.

## Installation
1. Clone the repository or download the files.
2. Set up a MySQL database named `crypto` and create the `user` table.
3. Update the database connection details in `db.php`.
4. Run the application on a local server (e.g., XAMPP, WAMP).

## Usage
- Navigate to `index.php` to start the registration or login process.
- Follow the prompts to create an account or log in.

## License
This project is open-source and available for modification and distribution.
