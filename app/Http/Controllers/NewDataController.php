<?php

namespace App\Http\Controllers;

use App\Exports\CsvExport;
use App\Http\Requests\FormValidationRequest;
use App\newData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\Contracts\DataTable;

class NewDataController extends Controller
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


    public function store(Request $request)
    {

        $adult = $request->input("adults");
        $children = $request->input("children");
        $persons = ($adult) + ($children);
//        $validator = $request->validate([
//            'name'=> 'required',
//            'mobile'=>'required|unique:new_data,mobile|min:10'
//        ]);
//        $validator = Validator::make(
//            ['name' => 'required'],
//            ['mobile' => ['required|unique:new_data,mobile|min:10']]
//        );
//        if ($validator->fails()) {
//            return \redirect('/')->withErrors($validator)->withInput();
//        }
//        else {
        $data=newData::updateOrCreate(
            ['mobile' => $request->input("mobile")],
            [
                'name' => $request->input("name"),
                'mobile' => $request->input("mobile"),
                'email' => $request->input("email"),
                'post' => $request->input("post"),
                'street' => $request->input("street"),
                'adults' => $request->input("adults"),
                'children' => $request->input("children"),
                'donations' => $request->input("donations"),
                'amount' => $request->input("amount"),
                'persons' => $persons

            ]
        );

        return \redirect('/')->with('success', 'Details Added Successfully..');
//        return  \redirect('/')->withErrors($validator)->withInput();
//        }
    }

    /**
     * @param * @param newData $newData
     * @return \Illuminate\Http\JsonResponse|mixed
     * @throws* @throws \Exception
     * @created by adarsh_ep on (23 Jan 2020 at 5:40 PM)
     */
    public function show(newData $newData)
    {
        $data = newData::query();
        return DataTables($data->orderBy('updated_at', "desc"))
            ->make(true);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\newData $newData
     * @return \Illuminate\Http\Response
     */
    public function edit(newData $newData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\newData $newData
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, newData $newData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\newData $newData
     * @return \Illuminate\Http\Response
     */
    public function destroy(newData $newData)
    {
        //
    }

    public function viewFullData()
    {
        $data = newData::all()->sortByDesc('updated_at');
        $totalAdults = $data->sum('adults');
        $totalChildren = $data->sum('children');
        $totalPersons = $totalChildren + $totalAdults;
        $totalAmount = $data->sum('amount');;
        return view('show-data', compact('data', 'totalAdults', 'totalChildren', 'totalPersons', 'totalAmount'));
    }

    public function downloadCsv()
    {
        $data = newData::all();
        $totalAdults = $data->sum('adults');
        $totalChildren = $data->sum('children');
        return response()->streamDownload(function () use ($data) {
            echo view('excel', compact('data'))->render();;
        }, 'members.csv');

    }

    public function downloadExcel()
    {
        return Excel::download(new CsvExport, 'members.xlsx');
    }
}
