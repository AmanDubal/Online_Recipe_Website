# Food Haven – Online Recipe Book

Project Overview\
Food Haven is a web-based online recipe book that allows users to browse, view, and explore recipes. The platform provides user authentication using PHP and MySQL, ensuring secure access. The recipes are static and displayed dynamically using HTML, CSS, and JavaScript.

Features
1. User Authentication (PHP)
Users can sign up and log in securely.

Passwords are stored securely using hashing.

Authentication ensures that only registered users can access the platform.

2. Recipe Listing & Viewing (Static Recipes)
Recipes are hardcoded into the system (not stored in a database).

Users can browse and view recipes dynamically.

Each recipe displays:

Name

Preparation & Cooking Time

Serving Size

Ingredients

Directions

Nutritional Information

3. Responsive UI & Navigation
Modern, user-friendly design with a mobile-responsive layout.

JavaScript ensures dynamic interactions (e.g., viewing recipe details).

Technologies Used
Frontend:
HTML5, CSS3, JavaScript for designing and rendering the recipe pages.

Backend (Only for Authentication):
PHP handles user login and registration.

MySQL stores user credentials (not recipes).

File Structure

/food-haven/\
│── index.php                 # Homepage (Displays all recipes)\
│── fetch_recipes.js          # JavaScript file to fetch static recipes\
│── view_recipe.js            # Handles individual recipe display\
│── login.php                 # User login page\
│── register.php              # User registration page\
│── styles.css                # Stylesheet for the website\
│── db_connection.php         # Database connection for authentication\
│── scripts.js                # JavaScript functions for UI interactions\
└── README.md                 # Project Documentation\
How to Set Up and Run Locally\
Setup Instructions
1. Install WAMP Server from wampserver.com.
2. Copy project files to C:\wamp64\www\food-haven\.
3. Create MySQL database (recipe) in phpMyAdmin.
4. Create users table for authentication.
5. Configure database in db_connect.php.
6. Start WAMP Server & open http://localhost/food-haven/.

Contributing\
We welcome contributions! Open a pull request to add new features, improve the UI, or fix issues.

