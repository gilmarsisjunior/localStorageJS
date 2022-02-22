<?php 
include_once('query.php');

class MakeCsv{

    public function createCsv(){
        header('Content-Type: text/csv; charset=utf-8');
        header('Content-Disposition: attachment; filename=data.csv');
        $output = fopen('php://output', 'w');
        fputcsv($output, array('id','media_id', 'media_name'));
        $csvInstance = new CsvQuery();
        $csvInstance->prepareCsv($output);
        fclose($output);
    }
}
$c = new MakeCsv();
$c->createCsv();
?>