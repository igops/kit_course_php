<?php


namespace App;


class PhoneBookFacade
{
    /** @var PhoneBook */
    private $phoneBook;

    /**
     * PhoneBookFacade constructor.
     */
    public function __construct()
    {
        $storage = new SafeNameMappingStorage();
        $this->phoneBook = new PhoneBook($storage);
    }

    /**
     * @param $params
     */
    public function execute($params)
    {
        if ($params[1] === "save") {
            $this->phoneBook->save($params[2], $params[3]);
        } else if ($params[1] === "read") {
            $this->phoneBook->read($params[2]);
        }
    }
}
