<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Product
{
    protected $storageFile;

    private $name;
    private $qtd;
    private $value;
    private $dateTime;

    public function __construct($name, $qtd, $value)
    {
        $this->storageFile = storage_path().'/app/products.json';

        if(
            isset($name) &&
            isset($qtd) &&
            isset($value)
        ) {
            $this->name = $name;
            $this->qtd = $qtd;
            $this->value = $value;
            $this->dateTime = now();
        }

        return $this;
    }

    /**
     * Save Product to json FILE
     * @return [type] [description]
     */
    public function save()
    {
        $file = fopen($this->storageFile, 'a');
        fwrite($file, "\n".$this->toJson());
    }

    /**
     * Return Product as Json
     * @return json
     */
    private function toJson()
    {
        return json_encode([
            'name' => $this->name,
            'qtd' => $this->qtd,
            'value' => $this->value,
            'dateTime' => $this->dateTime
        ]);
    }
}
