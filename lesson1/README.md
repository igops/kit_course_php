```
*** Setting up Lesson1 ***

1. Clone or extract this repository and navigate to lesson1:
$ cd kit_course_php/lesson1

2. Start Docker container:
$ docker-compose up -d

3. Connect to Docker container:
$ docker-compose exec php /bin/bash;

4. Ensure you are at the application root:
$ cd /app

5. Build project:
$ composer install

6. Run index.php:
$ php index.php

7. If you see a welcome message, your setup is correct



*** Some notes on docker-compose ***

Docker-compose provides easier management of the docker containers when running them locally.

In our case, we use the following docker image (see docker-compose.yml):
    image: 'bitnami/php-fpm:7.3'

Current directory (.) will be mounted as /app inside a container (see docker-compose.yml):
    volumes:
      - .:/app

so /app will contain everyting from lesson1 and vice versa



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
```
