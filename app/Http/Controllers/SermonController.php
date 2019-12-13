<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SermonService;
use GuzzleHttp\Client;

class SermonController extends Controller
{
    protected $request;
    protected $sermons;

    public function __construct(Request $request, SermonService $sermons){
        $this->request = $request;
        $this->sermons = $sermons;
    }

    public function index(){
        $take = $this->request->query->get('take') ?? 10;
        $page = $this->request->query->get('page');
        $response = $this->sermons->getSermons($page, $take);

        return view('pages.sermons.index', [
            'response' => $response
        ]);
    }
}
