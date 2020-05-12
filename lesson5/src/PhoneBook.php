<?php


namespace App;


class PhoneBook
{
    /** @var SafeNameMappingStorage */
    private $mappingStorage;

    /**
     * PhoneBook constructor.
     */
    public function __construct()
    {
        $this->mappingStorage = ServiceContainer::getInstance()->getMappingStorage();
    }

    /**
     * @param string $name
     * @param string $phone
     */
    public function save($name, $phone)
    {
        $safeName = $this->mappingStorage->save($name);

        file_put_contents("./records/" . $safeName . ".txt", $phone);
        echo "Your number is saved" . PHP_EOL;
    }

    /**
     * @param string $name
     * @throws InvalidInputException
     */
    public function read($name) {
        $safeName = $this->mappingStorage->get($name);
        $phone = file_get_contents("./records/" . $safeName . ".txt");
        echo "Your phone is " . $phone . PHP_EOL;
    }
}
