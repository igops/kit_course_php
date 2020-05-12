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
        $this->phoneBook = \App\ServiceContainer::getInstance()->getPhoneBook();
    }

    /**
     * @param $params
     * Analyze params => execute appropriate modules => process modules exceptions
     */
    public function execute($params)
    {
        try {
            if ($params[1] === "save") {
                $this->phoneBook->save($params[2], $params[3]);
            } else if ($params[1] === "read") {
                $this->phoneBook->read($params[2]);
            }
        } catch (InvalidInputException $e) {
            echo "Invalid input: " . $e->getMessage() . PHP_EOL;
        }
    }
}
