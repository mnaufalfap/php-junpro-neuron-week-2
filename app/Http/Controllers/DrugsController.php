<?php

namespace App\Http\Controllers;

use App\Models\Drugs;
use App\Http\Requests\StoreDrugsRequest;
use App\Http\Requests\UpdateDrugsRequest;
use Illuminate\Http\Request;

class DrugsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->query('search');

        if (!empty($search)) {
            $dataDrugs = Drugs::where('drugs.drugs_id', 'like', '%' . $search . '%')
                ->orWhere('drugs.drugs_name', 'like', '%' . $search . '%')
                ->paginate(10)->onEachSide(2)->fragment('drugs');
        } else {
            $dataDrugs = Drugs::paginate(10)->onEachSide(2)->fragment('drugs');
        }
        return view('drugs.data')->with([
            'drugs' => $dataDrugs,
            'search' => $search
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDrugsRequest $request)
    {
        $validate = $request->validated();

        $drugs = new Drugs;
        $drugs->drugs_id = $request->drugs_id;
        $drugs->drugs_name = $request->drugs_name;
        $drugs->drugs_class = $request->drugs_class;
        $drugs->drugs_type = $request->drugs_type;
        $drugs->drugs_unit = $request->drugs_unit;
        $drugs->drugs_prices = $request->drugs_prices;
        $drugs->save();

        return redirect('drugs')->with('msg', 'Add data successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Drugs $drugs, $drugs_id)
    {
        $data = $drugs->find($drugs_id);
        return view('drugs.formEdit')->with([
            'drugs_id' => $drugs_id,
            'drugs_name' => $data->drugs_name,
            'drugs_class' => $data->drugs_class,
            'drugs_type' => $data->drugs_type,
            'drugs_unit' => $data->drugs_unit,
            'drugs_prices' => $data->drugs_prices
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDrugsRequest $request, Drugs $drugs, $drugs_id)
    {
        $data = $drugs->find($drugs_id);
        $data->drugs_id = $request->drugs_id;
        $data->drugs_name = $request->drugs_name;
        $data->drugs_class = $request->drugs_class;
        $data->drugs_type = $request->drugs_type;
        $data->drugs_unit = $request->drugs_unit;
        $data->drugs_prices = $request->drugs_prices;
        $data->save();

        return redirect('drugs')->with('msg', 'Data with ' . $data->drugs_name . ' has beed updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Drugs $drugs, $drugs_id)
    {
        $data = $drugs->find($drugs_id);
        $data->delete();

        return redirect('drugs')->with('msg', 'Data with ' . $data->drugs_name . ' has beed deleted!');
    }
}
