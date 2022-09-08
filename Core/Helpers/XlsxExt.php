<?php

namespace Core\Helpers;

use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class XlsxExt extends Xlsx
{
    public function download($fileName)
    {
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $fileName . '.xlsx"');
        header('Cache-Control: max-age=0');

        $this->save('php://output');
    }
}
