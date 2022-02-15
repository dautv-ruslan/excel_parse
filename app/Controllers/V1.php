<?php namespace App\Controllers;


class V1 extends BaseController
{
	public function index()
	{
		return view('excel_parser');
	}

	public function excel()
	{
		$filename = '';
		if ($_POST) {
            $uploaddir = '';
            $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

            if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
                $filename = $uploadfile;
            }
		}

		$model = new \App\Models\ExcelParserModel();
		$json_object = $model->excel_parse($filename);
		$data['json_object'] = $json_object;
        return view('excel_parser', $data);
	}

    public function excel_parse_file()
    {
        $filename = '';
        if ($_POST) {
            $uploaddir = '';
            $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

            if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
                $filename = $uploadfile;
            } else {
                return false;
            }
        }

        $model = new \App\Models\ExcelParserModel();
        $json_object = $model->excel_parse($filename);
        return $json_object;
    }
}
