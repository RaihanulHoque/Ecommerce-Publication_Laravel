<?php

namespace App\Http\Controllers;

use App\Merchant;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use function PHPSTORM_META\argumentsSet;

class MerchantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Merchant::latest()->paginate(50);
        $users = DB::table('users')->orderBy('id')->get();
        return view('admin.merchant.index', compact('users','data'))->with('i',(request()->input('page', 1) -1) *50);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Merchant::saveMerchantInfo($request);

        // return redirect('admin.Merchant.index')->with('success', 'Merchant Added Successfully!');
        return redirect('admin/merchants')->with('success', 'Merchant Added Successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @param  \App\Merchant $Merchant
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Merchant::findOrFail($id);
        // return view('admin.Merchant.index', compact('shData','sh'));
        return view('admin.merchant.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @param  \App\Merchant $Merchant
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Merchant::findOrFail($id);
        $users = DB::table('users')->orderBy('id')->get();
        return view('admin.merchant.edit', compact('users','data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Merchant $Merchant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        Merchant::updateMerchantInfo($request, $id);

        // return redirect('admin.Merchant.index')->with('success', 'Merchant Added Successfully!');
        return redirect('admin/merchants')->with('success', 'Merchant Updated Successfully!');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Merchant $Merchant
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Merchant::findOrFail($id);
        $data->delete();

        //return redirect('admin.Merchant.index')->with('success', 'Merchant Updated Successfully!');
        return redirect('admin/merchants')->with('success', 'Merchant Deleted Successfully!');

    }

    public function delete(Request $request){
        $Merchant = Merchant::find($request->id);
        $Merchant->delete();
        return redirect('admin/merchants')->with('success', 'Merchant Deleted Successfully!');

    }
}
