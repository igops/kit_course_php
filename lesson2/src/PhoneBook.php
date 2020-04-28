<?php


namespace App;


class PhoneBook
{
    public function save($name, $phone)
    {
        $safeName = $this->sanitizeName($name);
        file_put_contents("./records/" . $safeName . ".txt", $phone);
        echo "Your number is saved" . PHP_EOL;
    }

    public function read($name) {
        if ($this->checkIfNameExists($name)) {
            $phone = file_get_contents("./records/" . $name . ".txt");
            echo "Your phone is " . $phone . PHP_EOL;
        } else {
            echo "Name is not found";
        }
    }

    public function welcome(): void
    {
        echo "**************************\n";
        echo "* Welcome to Phone Book! *\n";
        echo "**************************\n";
    }

    private function sanitizeName($name) {
        // TODO add the implementation
        return $name;
    }

    private function checkIfNameExists($name) {
        // TODO add the implementation
        return true;
    }

}
