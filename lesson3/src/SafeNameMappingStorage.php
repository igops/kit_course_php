<?php


namespace App;


use League\Csv\Reader;
use League\Csv\Writer;

class SafeNameMappingStorage
{

    public function save($unsafeName, $safeName)
    {
        $writer = Writer::createFromString(file_get_contents('./mapping.csv'));
        $writer->insertOne([
            'unsafeName' => $unsafeName,
            'safeName' => $safeName,
        ]);
        file_put_contents('./mapping.csv', $writer->getContent());

    }

    public function get($unsafeName)
    {
        $reader = Reader::createFromPath('./mapping.csv', 'r');
        $reader->setHeaderOffset(0);

        foreach ($reader->getRecords() as $record) {
            if ($unsafeName === $record['nameUnsafe']) {
                $safeName = $record['nameSafe'];
            }
        }

        return $safeName;
    }

}
