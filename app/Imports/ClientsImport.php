<?php

namespace App\Imports;

use App\Client;
use Maatwebsite\Excel\Concerns\ToModel;

class ClientsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Client([
            return new User([
           'name'     => $row[1],
           'phone'    => $row[2], 
           'address'    => $row[3], 
        ]);
            //
        ]);
    }
}
