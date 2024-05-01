# CPSC-332 Project

Felipe Galeano Guevara

Julia Real

Nick Viste

# Setup
To correctly set up the local server for development, perform the following steps:

    1. Install xampp and navigate to its directory
    2. Clone this repo into the /htdocs folder, resulting in /htdocs/cpsc-332-project/
    3. Copy the index.php file inside of the /.OVERWRITE/ folder and paste it into /htdocs/, overwriting the old copy
        - Alternatively, edit line 8 of /htdocs/index.php to point to /cpsc-332-project/ instead of /dashboard/
    3. Copy the data inside of the /.OVERWRITE/ folder and paste it into /mysql/, overwriting the old files if any

At this point, we are ready to begin!

To test the server, open the XAMPP Control Panel and start the Apache and MySQL services. The application can be accessed via localhost in a web browser.

# Notes
- Project files stored in /xampp/htdocs/cpsc-332-project/
- SQL files stored in /xampp/mysql/data/cpsc_332_project/