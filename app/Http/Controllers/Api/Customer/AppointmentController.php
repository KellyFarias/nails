<?php

namespace App\Http\Controllers\Api\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Satoritech44\UploadFiles\UploadFiles;

class AppointmentController extends Controller
{
    public function list(){
        $url=UploadFiles::storeFile();
    }
    
    public function create(){

    }
}
