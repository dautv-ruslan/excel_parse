<?php

namespace App\Models;

use CodeIgniter\Model;
use Shuchkin\SimpleXLSX;

class ExcelParserModel extends Model
{
    public function excel_parse($filename)
    {
        ini_set('error_reporting', E_ALL);
        ini_set('display_errors', true);

        // require_once __DIR__.'/src/SimpleXLSX.php';

        if ( $xlsx = SimpleXLSX::parse($filename) ) {
            return json_encode($xlsx->rows());
        } else {
            return SimpleXLSX::parseError();
        }
    }
}

?>