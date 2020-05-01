<?php


namespace App;


class PhoneBook
{
    /** @var SafeNameMappingStorage */
    private $mappingStorage;

    /**
     * PhoneBook constructor.
     * @param SafeNameMappingStorage $mappingStorage
     */
    public function __construct(SafeNameMappingStorage $mappingStorage)
    {
        $this->mappingStorage = $mappingStorage;
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
     */
    public function read($name) {

        $safeName = $this->mappingStorage->get($name);

        if ($this->checkIfNameExists($safeName)) {
            $phone = file_get_contents("./records/" . $safeName . ".txt");
            echo "Your phone is " . $phone . PHP_EOL;
        } else {
            echo "Name is not found";
        }
    }

    private function checkIfNameExists($name) {
        // TODO add the implementation
        return true;
    }

}
