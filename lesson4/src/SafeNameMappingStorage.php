<?php


namespace App;


use Cocur\Slugify\Slugify;
use League\Csv\Reader;
use League\Csv\Writer;

class SafeNameMappingStorage
{
    /**
     * @param $unsafeName
     * @return string
     */
    public function save($unsafeName): string
    {
        $safeName = $this->sanitizeName($unsafeName);

        $writer = Writer::createFromString(file_get_contents('./mapping.csv'));
        $writer->insertOne([
            'unsafeName' => $unsafeName,
            'safeName' => $safeName,
        ]);
        file_put_contents('./mapping.csv', $writer->getContent());

        return $safeName;
    }

    /**
     * @param $unsafeName
     * @return string
     */
    public function get($unsafeName): string
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

    /**
     * @param string $name
     * @return string
     */
    private function sanitizeName($name) {
        $slugify = new Slugify();
        return $slugify->slugify($name);
    }
}
