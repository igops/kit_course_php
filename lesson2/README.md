```
*** Setting up Lesson2 ***

1. Clone or extract this repository and navigate to lesson2:
$ cd kit_course_php/lesson2

2. Start Docker container:
$ docker-compose up -d

3. Connect to Docker container:
$ docker-compose exec php /bin/bash;

4. Ensure you are at the application root:
$ cd /app

5. Build project:
$ composer install

6. Run phonebook.php:

- To add a phonebook record use:  
$ php phonebook.php save NAME PHONENUMBER 

- To find a phonebook record use:
$ php phonebook.php read NAME


*** Some useful notes ***

$argv is a reserved variable which holds an array of arguments passed to a given script, e.g.
$ myscript.php Hello World 123
will make $argv equals to 
[0 => 'myscript.php', 1 => 'Hello', 2 => 'World', 3 => '123']

phonebook.php is a frontal script where we create instances of two classes: \App\PhoneBook() and \App\PhoneBookFacade().
PhoneBook class is responsible for the management of phonebook records by providing save() and read() methods.
PhoneBookFacade class is responsible for parsing $argv array and executing appropriate methods of PhoneBook class instance.

API (Application Program Interface) of the class in OOP is a list of its public methods (*), e.g.,

API of \App\PhoneBook is
- save($name, $phone)
- read($name)

API of \App\PhoneBookFacade
- execute(PhoneBook $phoneBook, $params)

(*) explanation according to a current knowledge level

