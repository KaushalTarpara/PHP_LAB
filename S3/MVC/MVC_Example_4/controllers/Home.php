<?php

class Home extends Controller{

    public function index($data=[]){
        echo $this->render->view('home', $data);
    }
    public function load_data(){

        $model = $this->load_model('SampleModel');

        $data = $model->sample_query();

        $this->render->view("load_data", ["query_data" => $data]);

    }

}