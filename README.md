# 🎵 GetMusic – Music Website

Welcome to **GetMusic**, a sleek, dark-themed music streaming website that lets users dive into the world of music with style and control. Whether you're a casual listener or a playlist curator, GetMusic provides a smooth experience with full customization and admin control.

## 🌟 Features

- 🎧 **User Playlist Creation** – Users can create, manage their own playlists.
- 🔍 **Explore Music** – Browse and search tracks by genre, artist, mood, or popularity.
- 🌓 **Dark Mode UI** – A modern dark-themed frontend for immersive listening.
- ⚙️ **Full Admin Panel** – Admins can:
  - Upload, edit, or delete songs and albums
  - Manage user accounts and permissions
  - Monitor website activity and user analytics
  - Feature curated content on the homepage
- 🔒 **Authentication System** – Secure sign-up, login, and password management.

## 🛠️ Tech Stack

- **Frontend:** HTML, CSS (Dark Theme), JavaScript
- **Backend:** PHP, SQL
- **Database:** MySQL

## 🚀 Getting Started

  ### 1. Clone the repository  
   ```bash
   git clone https://github.com/CyberlordSY/GetMusic-Legacy.git
   cd GetMusic-Legacy
  ```
   ### 2. Start Localhost Server

  Start **XAMPP**, **WAMP**, or any local server environment you prefer.  
  Make sure the following services are running:

  - **Apache**
  - **MySQL**

  You can start them from the XAMPP/WAMP control panel.



  ### 3. Import the Database

  1. Open [phpMyAdmin](http://localhost/phpmyadmin) in your browser.
  2. Create a new database (e.g., name it `getmusic`).
  3. Import the provided SQL file into the new database:
    - Select the newly created database from the left sidebar.
    - Click on the **Import** tab at the top.
    - Choose the file `database.sql` from the project folder.
    - Click **Go** to import the database successfully.



  ### 4. Configure Database Credentials

  Locate the PHP file where the database connection is defined:

  - `/includes/config.php`  

  Update the credentials to match your local environment:

```php
$servername = "localhost";
$username = "root";
$password = ""; // use your password if set
$dbname = "getmusic"; // Use the same name as the database you created
```
Save the file after editing.

### 5. Run the Project

After saving the configuration changes, deploy the project by following these steps:

1. Move the project folder `GetMusic-Legacy` to your web server’s root directory:
   - **For XAMPP:** Place it inside the `htdocs/` folder  
   - **For WAMP:** Place it inside the `www/` folder  

2. Launch your browser and visit:
```
http://localhost/GetMusic-Legacy
```
The website should now be live on your local server.



## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.