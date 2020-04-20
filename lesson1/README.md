```
*** Setting up Lesson1 ***

1. Clone or extract this repository and navigate to its root:
$ cd kit_course_php

2. Start Docker container:
$ docker-compose up -d

3. Connect to Docker container:
$ docker-compose exec php /bin/bash;

4. Navigate to lesson1:
$ cd /app/lesson1

5. Build project:
$ composer install

6. Run index.php:
$ php index.php

7. If you see a welcome message, your setup is correct



*** Useful commands for docker compose (host) ***

docker ps . . . . . . . . . . . . . . . . . . show all running containers
docker-compose exec %service% /bin/bash;. . . connect to a service %service% (see docker-compose.yml)
docker kill %container_id%. . . . . . . . . . stop container %container_id%



*** Useful commands inside Debian (guest) ***

ls . . . . . . . . . . list current directory contents
pwd. . . . . . . . . . print working directory
cd %path%. . . . . . . change directory to %path%
apt update . . . . . . update system repositories
apt install nano . . . install nano editor
nano %path%. . . . . . edit or create text file in %path%



*** Some notes on composer-based project ***

Place this line at the beginning of your executable script:
require_once __DIR__ . "/vendor/autoload.php";
This will handle the autoloading of your application classes, so you could create new instances easily.

When creating classes, set namespaces according to the directories (see autoload section in composer.json):
    "autoload": {
        "psr-4": {
            "App\\": ["src/"]
        }
    }
Literally it means that every class in /src directory will have App\ namespace.

Consider class names as street numbers and namespaces as postal addresses.
Well designed namespaces provide easy navigation in large projects.
```
