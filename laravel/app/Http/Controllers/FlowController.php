<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

use DB;

class FlowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        /********************************/
        /*     Jesper Svensson  START    */
        /********************************/

        $get_public_challenges = DB::table('challenges')
                ->join('users', 'challenges.admin' , '=', 'users.id')
                ->where('challenges.secrecy', '=', '1')
                ->get(); //Get all public challengers

        $get_public_users_acceptions = DB::table('users_challenges')
                ->join('challenges', 'users_challenges.challenge_id', '=','challenges.id')
                ->where('challenges.secrecy', '=', '1')
                ->get(); //Get all users in new public challengers

        $get_public_results = DB::table('users_challenges_results')
                ->join('challenges', 'users_challenges_results.challenge_id', '=', 'challenges.id')
                ->join('results', 'users_challenges_results.result_id', '=', 'results.id')
                ->join('users', 'users_challenges_results.challenge_id', '=', 'users.id')
                ->join('users_challenges', 'users_challenges_results.challenge_id', '=', 'users_challenges.challenge_id')
                ->where('challenges.secrecy', '=', '1')->where('users_challenges.active', '=', '0')
                ->get(); //Get user results of closed challenegers


        $data = array_merge($get_public_challenges, $get_public_users_acceptions, $get_public_results);

        return json_encode($data);//$challange->toJson();
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

    public function show($id){
        /********************************/
        /*     Jesper Svensson  START    */
        /********************************/
        //$user_id = Session::get('user_id');
        $user_id = 1;
        
        $get_private_user_challenges = DB::table('users_challenges')
                ->join('challenges', 'users_challenges.challenge_id', '=', 'challenges.id')
                ->where('users_challenges.user_id', '=', $user_id)
                ->get();//Get all YOUR challlenges
        $get_private_user_results = DB::table('results') 
                ->join('users_challenges_results', 'results.id', '=', 'users_challenges_results.result_id') 
                ->where('users_challenges_results.user_id', '=', $user_id)
                ->get();//Get all YOUR results 
        $get_connection_challenges = DB::table('connections')
                ->join('users_connections', 'connections.id', '=', 'users_connections.connection_id')
                ->join('users_challenges', 'users_connections.friend_id', '=', 'users_challenges.user_id')
                ->join('challenges', 'users_challenges.challenge_id', '=', 'challenges.id')
                ->where('challenges.secrecy', '<=', '2')
                ->where('connections.user_id', '=', $user_id)
                ->get(); //Get all friends you connected to
        $get_connection_results = DB::table('connections')
                ->join('users_connections', 'connections.id', '=', 'users_connections.connection_id')
                ->join('users_challenges_results', 'users_connections.friend_id', '=', 'users_challenges_results.user_id')
                ->join('results', 'users_challenges_results.result_id', '=', 'results.id')
                ->where('results.secrecy', '<=', '2')
                ->get();
        
        $json_get_private_user_challenges = json_encode($get_private_user_challenges);
        $json_get_private_user_results = json_encode($get_private_user_results);
        $json_get_connection_challenges = json_encode($get_connection_challenges);
        $json_get_connection_results = json_encode($get_connection_results);

        $datarray = array(
            'get_private_user_challenges' => $get_private_user_challenges,
            'get_private_user_results' => $get_private_user_results,
            'get_connection_challenges' => $get_connection_challenges,
            'get_connection_results' => $get_connection_results
            );
        /********************************/
        /*     Jesper Svensson  STOP    */
        /********************************/
            return json_encode($datarray);


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
