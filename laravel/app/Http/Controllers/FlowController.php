<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use App\Challenge;
use App\Friend;
use App\Answers;

class FlowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $get_public_challenges = Challenge::where('secrecy', '=', '1')
                        ->orderBy('created_at', 'DESC')
                        ->get(); // Get all open challenges

        $count_public_challenges = count($get_public_challenges); //Count challenges

        $get_closed_public_results = Answers::where('secrecy', '=', '1')
                        ->orderBy('created_at', 'DESC')
                        ->get();

        dd($get_closed_public_results);

        $get_user_open_flow;




        //$user = User::find(1);

        //$user->challenges()->attach(1);//Skriver koppling till tabel
        

        //$user1 = Challenge::find(1)->users; //Hämta alla challenges  som user 1 tillhör
        //print_r($user1[0]->id);
        
        //$challenges1=User::find(1)->challenges;// Hämtar alla challenges som user med id 1 är med i
        //print_r($challenges1[0]->secrecy.$challenges1[1]->name);

        //dd($challenges1);
        /*
        $challange = DB::table('challenges')
                        ->where('secrecy', '=', '1')
                        ->orderBy('created_at', 'DESC')
                        ->get();
        $counter = count($challange);

        for ($i=0; $i < $counter; $i++) { 
            $first[$i] = $challange[$i];
        }               

        var_dump($first);*/
        
        return ;//$challange->toJson();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
