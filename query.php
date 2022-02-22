<?php
include_once('connect.php');

    class CsvQuery{

        public function prepareCsv($output){
            $connect = new Database();
            try{
                $conn = $connect->connect();
                $query = "SELECT id, media_id, media_name FROM cc_media";
                $sql = mysqli_query($conn, $query);
                while($line = mysqli_fetch_assoc($sql)){
                fputcsv($output, $line);
            }
            }
            catch(Exception $e){
                throw new Exception ('Não foi possível fazer o download do CSV, contacte um administrador '.$e);
            }
            
        }

    }

?>