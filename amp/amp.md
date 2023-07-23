

# AMP Stack
Create a website using PHP, that reads data from a MySQL database. There should be a separate database administration tool running, that allows interaction with the database through a web based UI.

___

## Acceptance Criteria:

___

### Webserver:

- Displays a given index.php page by default, with arbitrary pages being reachable on the server
- Can reach the database container through the container network
- The pages are dynamically editable without needing to restart the webserver
- Reachable on port 80 of the host

**Image:** php:8.0-apache

### Database:

- Reachable by both the webserver and the database admin service
- Data is permanently stored; on restart the data in the database should not be deleted
- Port can be freely assigned, but must be reachable by the other services

**Image:** mysql:latest

### Admin UI:

- Can reach the database through the container network
- Data is permanently stored; access to configured databases should remain on restart without needing to reconfigure
- Reachable on port 3000 of the host

**Image:** phpmyadmin/phpmyadmin


The data for the database as well as the website itself will be provided; only the services and the underlying network needs to be configured.