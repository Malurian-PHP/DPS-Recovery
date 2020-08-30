<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Searchable\Search;
use App\Models\Tblcase;
use App\Models\Tbladrse;
use App\Models\Tblltrhist;
use Carbon\Carbon;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        $name = $request->name;
        $zip = $request->zip;

        $nameResults = Tblcase::where('caseNameLast', $name)->get();

        // if($name && $zip ){

            // $zipResults = Tbladrse::where('adrsZip', $zip)->get();
            //dd($zipResults);
            // $results = Tblcase::where('caseNameLast', $name)->get();
            // dd($results[1]->zip);
            // for ($x = 0; $x < count($results); $x++){
            //     dd($results[$x]);
            // }
        //     $users = array();

        //         foreach ($zipResults as $nameResults) {
        //             foreach ($nameResults->user as $single){
        //                 array_push($users, $single);
        //                 dd($users);
        //             }
        //             if ($nameResults->user->caseNameLast == $name) {
        //                 return array_push($users, Tblcase::where('cmtUID', $nameResults->adrsCmtUID));
        //             }
        //             dd('what');

        //             if ($results->zip->adrsZip == $zip) {
        //                 dd($results);
        //                 return $nameResults;
        //                 // view('search', compact('nameResults'));
        //             } elseif ($nameResults->zip->adrsZip != $zip) {
        //                 $results = $nameResults;
        //                 return view('search', compact('nameResults'));
        //             }
        //         }


        // }elseif($name) {

        //     dd('working');
        //     $nameResults = Tblcase::where('caseNameLast', $name)->get();
        //     return view('search', compact('users'));

        // }elseif($zip){

        //     dd('Please go back and enter your last name');

        // }



        // $nameResults = Tblcase::where('caseNameLast', $name)->get();

        // foreach ($results as $nameResults) {

        //     if($nameResults->zip->adrsZip == $zip) {
        //         $nameResults;
        //         return view('search', compact('nameResults'));
        //     }elseif($nameResults->zip->adrsZip != $zip){
        //         $results = $nameResults;
        //         return view('search', compact('nameResults'));
        //     }


        // }

        //$zipResults = Tbladrse::where('adrsZip', $zip)->get();

        // foreach($nameResults as $result){
        //     dd($result->cmtUID);
        // }
        //dd($nameResults);

        // return view('search', compact('users'));

    // }

    return view('search', compact('nameResults'));
    }

    public function storeId(Request $request)
    {
        // $idResults = Tblltrhist::get();
        $x = $request->letter_id;
        $id = substr($x, 0, 9);
        $other_id = substr($x, 9);
        // $other_id = substr(0, 9, $request->letter_id);
        // $idResults = tblltrhist::whereRaw(('ltrhistBatchId' . 'ltrhistLtrId'), $id)->get();
        $idResults = Tblltrhist::where([
            ['ltrhistBatchID', '=', $id],
            ['ltrhistLtrId', '=', $other_id]
            ])->get();

        // if(isset($other_id)):
        //     $idResults = $idResults->where('ltrhistLtrId', $other_id)->get();

        // endif;

        //dd($search);
        //$idResults = Tblltrhist::where('ltrhistBatchID', $id)->where('ltrhistLtrId', $other_id)->get();
            //dd($idResults);
        return view('search', compact('idResults'));
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
