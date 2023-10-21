<?php 


class SampleModel {
    public function sample_query(){
        $data = (object) [
            [
                "id" => 1,
                "name" => "John Smith",
                "postion" => "Web Developer"
            ],
            [
                "id" => 2,
                "name" => "Samantha Lou",
                "postion" => "Project Manager"
            ],
            [
                "id" => 1,
                "name" => "Mark Cooper",
                "postion" => "Senior Programmer"
            ]
            ];

        return $data;
    }
}

?>