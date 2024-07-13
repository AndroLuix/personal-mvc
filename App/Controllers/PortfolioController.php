<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Mvc;

class PortfolioController extends Controller {
    public function __construct( public Mvc $mvc){
        parent::__construct($mvc);
    }

    public function index(){

        $this->render('portfolio');
    }
}