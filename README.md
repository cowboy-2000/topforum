Topforum Website

Overview

The Topforum website is built using SCSS and follows the BEM methodology for CSS structuring. It consists of the main page and several additional pages:

Sponsors

Exhibitors

Speakers

Media

Contacts

Registration

Activities

Individual pages for each sponsor and speaker

Installation and Setup

To set up the website locally, follow these steps:

Prerequisites

Ensure you have the following installed on your system:

A web server (e.g., Apache or Nginx)

PHP (version 7.4 or higher)

MySQL or MariaDB

WordPress installed on your server

Steps

Download the Files

Download the website files from cowboy-2000.github.io/topforum/.

Copy Required Folders
Copy the following folders into your WordPress installation:

themes: Place this folder inside wp-content/themes/.

plugins: Place this folder inside wp-content/plugins/.

uploads: Place this folder inside wp-content/uploads/.

Import the Database

Locate the topforum.sql file.

Import the file into your MySQL database using a tool like phpMyAdmin or the MySQL CLI:

mysql -u username -p database_name < path/to/topforum.sql

Configure WordPress

Update the wp-config.php file in your WordPress installation with the database credentials used during the import.

Update the site URL and home URL in the database (if needed) to reflect your local or server environment.

Example SQL query to update the site URL:

UPDATE wp_options SET option_value = 'http://your-local-url' WHERE option_name IN ('siteurl', 'home');

Check Permissions
Ensure that the uploads folder has the correct permissions so WordPress can access the uploaded files.

Launch the Website
Open the website in your browser to confirm everything is working:

http://your-local-url

Structure

The project uses the following conventions and technologies:

SCSS: Stylesheets are written in SCSS for modular and maintainable CSS.

BEM: Follows the Block-Element-Modifier methodology for CSS naming.

Pages:

Each page (e.g., sponsors, exhibitors) is a WordPress template.

Individual pages for sponsors and speakers are dynamically generated using custom post types.

Features

Customizable design using SCSS.

Clean and semantic BEM-based structure.

Dynamic pages for sponsors and speakers.

Easily extendable with WordPress plugins.

Support

For any issues or questions, please contact the developer.

