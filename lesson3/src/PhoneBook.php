<?php


namespace App;


use Cocur\Slugify\Slugify;


class PhoneBook
{
    public function save($name, $phone)
    {
        $safeName = $this->sanitizeName($name);

        $mappingStorage = new SafeNameMappingStorage();
        $mappingStorage->save($name, $safeName);

        file_put_contents("./records/" . $safeName . ".txt", $phone);
        echo "Your number is saved" . PHP_EOL;
    }

    public function read($name) {

        $mappingStorage = new SafeNameMappingStorage();
        $safeName = $mappingStorage->get($name);

        if ($this->checkIfNameExists($safeName)) {
            $phone = file_get_contents("./records/" . $safeName . ".txt");
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
        $slugify = new Slugify();
        return $slugify->slugify($name);
    }

    private function checkIfNameExists($name) {
        // TODO add the implementation
        return true;
    }

}
