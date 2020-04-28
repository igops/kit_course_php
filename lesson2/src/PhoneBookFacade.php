<?php


namespace App;


class PhoneBookFacade
{
    /**
     * @param PhoneBook $phoneBook
     * @param $params
     */
    public function execute($phoneBook, $params)
    {
        if ($params[1] === "save") {
            $phoneBook->save($params[2], $params[3]);
        } else if ($params[1] === "read") {
            $phoneBook->read($params[2]);
        }
    }
}
