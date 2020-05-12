```*** Setting up Lesson5 ***

1. Clone or extract this repository and navigate to lesson5:

$ cd kit_course_php/lesson4

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

Service Container is a special class which holds references to the business objects being used across the classes of the application.

Dependency Injection allows us to refer to the business objects held by Service Container.

Lazy initialization allows us to minimize creation of the object instances:

    /** @var object[] */
    private $services;

    /**
     * @return PhoneBookFacade
     */
    public function getPhoneBookFacade()
    {
        if (!isset($this->services['phoneBookFacade'])) {
            $this->services['phoneBookFacade'] = new PhoneBookFacade();
        }
        return $this->services['phoneBookFacade'];
    }

Singleton:

    // The constructor is private
    // to prevent initiation with outer code.
    private function __construct()
    {
        // The expensive process (e.g.,db connection) goes here.
    }

    // The object is created from within the class itself
    // only if the class has no instance.
    public static function getInstance()
    {
        if (self::$instance == null)
        {
            self::$instance = new ServiceContainer();
        }

        return self::$instance;
    }

Exceptions: TODO

```
