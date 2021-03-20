<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\Doctor_modelDataTable;
use App\Models\Doctor_model;
use Illuminate\Support\Facades\Crypt;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;
use ParagonIE\ConstantTime\Base64;

class Doctor extends Controller
{
    function index(Doctor_modelDataTable $dataTable)
    {
        $data['title']='Doctor';
        $users = DB::table('tbl_users')
            ->select(['iUserID','vFirstName','vLastName','vMobile','vAlternateNo','vEmail','vAlternateEmail','eRole','eStatus']);
        return $dataTable->render('doctor.doctor_view',$data);
    }

    function add()
    {
        $data['title']='Add New Doctor';
        return view('doctor.doctor_add_view',$data);
    }

    function save(Request $request)
    {
        $data = $request->input();
        $vProfileimg = 'a.png';  
        $path=$request->file('vProfile')->store('Doctor');
        $ImgName = explode('Doctor/', $path)[1];
        $Doctor = new Doctor_model;
        $Doctor->vFirstName = $data['vFirstName'];
        $Doctor->vLastName = $data['vLastName'];
        $Doctor->vMobile = $data['vMobile'];
        $Doctor->vAlternateNo = $data['vAlternateNo'];
        $Doctor->vEmail = $data['vEmail'];
        $Doctor->vAlternateEmail = $data['vAlternateEmail'];
        $Doctor->dtDOB = $data['dtDOB'];
        $Doctor->vPassword = Crypt::encryptString($data['vPassword']);
        $Doctor->vProfileimg = $ImgName;
        $Doctor->save();
        return redirect('doctor')->with('success',"Insert successfully");
    }

    function edit($id)
    {
        $this->Doctor_model = new Doctor_model;
        $data['title']='Add New Doctor';
        $data['EditData']=$this->Doctor_model->getAllDataByID($id);
        return view('doctor.doctor_add_view',$data);
    }
}