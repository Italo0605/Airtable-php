<?php
namespace App\Airtable;
class Test{
   private $apiKey = 'patFDp7NFWwXIVZyH.9c7a3275adb495a2a53a9a5e635d514e9da4687786fa125db4f736f874d7dd50'; //It's possible use the bearer authetication type  but not's necessary use the word bearer before the bearer key
   private $database = 'appmqpS7OnG2HoMdQ';
   private $tableName = 'tbl1ddfcvVHCEwtkv';

   function getAllData(){
        $client = new \Zadorin\Airtable\Client($this->apiKey, $this->database);
        $recordSet = $client->table($this->tableName)
            ->select('*')
            ->execute();
        return $recordSet->asArray();
   }
}

?>