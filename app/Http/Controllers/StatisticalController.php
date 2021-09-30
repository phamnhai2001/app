<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\DoctorModel;
use App\Models\SpecialistModel;
use App\Models\CustomerModel;
use App\Models\AppointmentModel;
use App\Charts\AdminChart;
use App\Http\Controllers\SpecialistController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AppointmentController;
use DB;
class StatisticalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specialist = DB::table('specialist')->count();
        $doctor = DB::table('doctors')->count();
        $customer = DB::table('customer')->count();
        $news = DB::table('news')->count();
        $appointment = DB::table('appointment_schedule')->get();
        $rest = DB::table('rest_schedule')->get();
        if(request()->date_from && request()->date_to){
            // $rest = DB::table('rest_schedule')
            // ->selectRaw('rest_schedule.id_doctor,sum(id_time) as total')
            // ->whereBetween('date',[request()->date_from,request()->date_to])
            // ->join('doctors','doctors.id_doctor','=','rest_schedule.id_doctor')
            // ->groupByRaw('rest_schedule.id_doctor')
            // // ->get();
            $rest = DB::table('appointment_schedule')
            ->select(array('doctors.full_name as full_name', DB::raw('COUNT(appointment_schedule.id_time) as times')))
            ->whereBetween('date',[request()->date_from,request()->date_to])
            ->join('doctors', 'doctors.id_doctor', '=', 'appointment_schedule.id_doctor')
            ->groupBy('appointment_schedule.id_doctor','full_name')
            ->orderBy('full_name', 'asc')
            ->get();
           
        }
        $data = array();
        foreach ($rest as $value) {
            $data[] = $value;
        }
        $data = json_encode($data);
        return view('admin.statistical.index', compact('specialist','doctor','customer','news','appointment','data'));
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
