<?php

namespace App\Http\Controllers;

use App\Models\Indicator;
use App\Http\Requests\StoreIndicatorRequest;
use App\Http\Requests\UpdateIndicatorRequest;

class IndicatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $indicators = Indicator::Where('id', '=', 1)->first();
        /*
        if (request()->ajax()) {
            $indicators = Indicator::get();

            return datatables()
            ->of($indicators)
            ->addColumn('edit', 'admin/indicador/actions')
            ->rawcolumns(['edit'])
            ->toJson();
        }*/
        return view('admin.indicator.index', compact('indicators'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.indicator.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreIndicatorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIndicatorRequest $request)
    {
        $indicator = new Indicator();
        $indicator->name                   = 'DIAN';
        $indicator->nit                    = '800197268';
        $indicator->dv                     = '4';
        $indicator->resolution             = $request->resolution;
        $indicator->date_from              = $request->date_from;
        $indicator->date_to                = $request->date_to;
        $indicator->prefix                 = $request->prefix;
        $indicator->from                   = $request->from;
        $indicator->to                     = $request->to;
        $indicator->software_id            = $request->software_id;
        $indicator->pin                    = $request->pin;
        $indicator->technical_key          = $request->technical_key;
        $indicator->document_version       = $request->document_version;
        $indicator->form_version           = $request->form_version;
        $indicator->country_code           = $request->country_code;
        $indicator->country                = $request->country;
        $indicator->currency               = $request->currency;
        $indicator->economic_activity      = $request->economic_activity;
        $indicator->postal_code            = $request->postal_code;
        $indicator->mercantil_registration = $request->mercantil_registration;
        $indicator->save();

        return redirect('indicator');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Indicator  $indicator
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $indicator = Indicator::findOrFail($id);
        return view('admin.indicator.edit', compact('indicator'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Indicator  $indicator
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $indicator = Indicator::findOrFail($id);
        return view('admin.indicator.edit', compact('indicator'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIndicatorRequest  $request
     * @param  \App\Models\Indicator  $indicator
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIndicatorRequest $request, $id)
    {
        $indicator                         = Indicator::findOrfail($id);
        $indicator->name                   = 'DIAN';
        $indicator->nit                    = '800197268';
        $indicator->dv                     = '4';
        $indicator->resolution             = $request->resolution;
        $indicator->date_from              = $request->date_from;
        $indicator->date_to                = $request->date_to;
        $indicator->prefix                 = $request->prefix;
        $indicator->from                   = $request->from;
        $indicator->to                     = $request->to;
        $indicator->software_id            = $request->software_id;
        $indicator->pin                    = $request->pin;
        $indicator->technical_key          = $request->technical_key;
        $indicator->document_version       = $request->document_version;
        $indicator->form_version           = $request->form_version;
        $indicator->country_code           = $request->country_code;
        $indicator->country                = $request->country;
        $indicator->currency               = $request->currency;
        $indicator->economic_activity      = $request->economic_activity;
        $indicator->postal_code            = $request->postal_code;
        $indicator->mercantil_registration = $request->mercantil_registration;
        $indicator->update();

        return redirect('indicator');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Indicator  $indicator
     * @return \Illuminate\Http\Response
     */
    public function destroy(Indicator $indicator)
    {
        //
    }
}
