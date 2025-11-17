LeBron James Fan Website

A dynamic PHP website celebrating LeBron James. Fans can submit feedback, upload images, and the administrator can manage the site securely.

Features

User Feedback & Image Upload:
Fans can submit their comments and upload images through a form.

Admin Control Panel:
Only the admin can edit site content, manage feedback, and approve or delete user submissions.

Front-end Technologies:
HTML and CSS are used for the user interface and styling.

Database Support:
SQL (MySQL or MariaDB) stores user feedback, images, and site data.

Secure Access:
Admin-only pages are protected with login credentials.

Installation

Clone the repository:

git clone https://github.com/Jihyo87/LeBron-James-PHP.git


Place the files in your PHP server folder (e.g., C:\laragon\www\LeBron-James-PHP).

Import the database:

-- Use the provided SQL file (database.sql) to create necessary tables


Configure the database connection in config.php (or your designated config file).

Start your PHP server (Laragon, XAMPP, etc.).

Open the site in your browser:

http://localhost/LeBron-James-PHP


Admin login is required to access editing features.

Usage

Users:

Submit feedback and optionally upload images.

View submitted content (if enabled).

Admin:

Log in to edit pages, approve or delete feedback, and manage uploaded images.

Folder Structure
LeBron-James-PHP/
├─ index.php          # Main homepage
├─ admin/             # Admin dashboard
├─ uploads/           # Uploaded images
├─ css/               # Stylesheets
├─ js/                # Scripts (optional)
├─ config.php         # Database configuration
├─ database.sql       # Database setup file
└─ README.md

Contributing

Fork the repo, make changes, and submit a pull request.

Maintain existing PHP, HTML, CSS, and SQL structure.

License

Educational and fan-use project. Not affiliated with or endorsed by LeBron James.
