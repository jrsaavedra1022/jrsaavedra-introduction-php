<?php

namespace App\Controllers;
// imports
use App\Models\{Job, Project};

class IndexController extends BaseController {
    public function indexAccion(){
        $jobs = Job::all();
        $projects = Project::all();

        $name = 'Hector Benitez';
        $limitMonths = 2000;
        
        return $this->renderHTML('index.twig',  [
            'name' => $name,
            'jobs' => $jobs,
            'projects' => $projects,
        ]);
    }
}