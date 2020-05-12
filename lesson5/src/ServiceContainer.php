<?php


namespace App;


// General singleton class.
class ServiceContainer {

    // Hold the class instance.
    private static $instance = null;

    /** @var object[] */
    private $services;

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

    /**
     * @return PhoneBook
     */
    public function getPhoneBook()
    {
        if (!isset($this->services['phoneBook'])) {
            $this->services['phoneBook'] = new PhoneBook();
        }
        return $this->services['phoneBook'];
    }

    /**
     * @return SafeNameMappingStorage
     */
    public function getMappingStorage() {
        if (!isset($this->services['mappingStorage'])) {
            $this->services['mappingStorage'] = new SafeNameMappingStorage();
        }
        return $this->services['mappingStorage'];
    }

}
