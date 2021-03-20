<?php

namespace App\DataTables;

use App\Models\Doctor_model;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
class Doctor_modelDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        
        //  echo " sdf";   
        // return $query;
        return datatables()
            ->eloquent($query)
            ->addColumn('action', 'doctor_model.action');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Doctor_model $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Doctor_model $model)
    {
        // print_r($model->newQuery());
        return $model->newQuery()->Where('isDelete','No');
    }   
    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('datatable')
                    // ->columns(['id','First Name','Last Name','Mobile','Alternate Mobile','Email','Alternate  email','Role','Status'])
                    ->columns([
                            "iUserID"=>['title'=>'id'],
                           "vFirstName"=>['title'=>'First Name'],
                           "vLastName"=>['title'=>'Last Name'],
                           "vMobile"=>['title'=>'Mobile'],
                           "vAlternateNo"=>['title'=>'Alternate Mobile'],
                           "vEmail"=>['title'=>'Email'],
                           "vAlternateEmail"=>['title'=>'Alternate Email'],
                           "eRole"=>['title'=>'Role']
                           ])
                    ->minifiedAjax()
                    ->orderBy(0,'asc')
                    ->responsive(1)
                    ->dom('Bfrtip')
                    ->addColumn([
                        'targets'=> '0',
                        'name' => 'iUserID',
                        'data' => 'eStatus',
                        'title' => 'Status',
                        'searchable' => false,
                        'orderable' => false,
                        'render' => "function(){
                            if(data=='Active') 
                            return '<span class=\"badge badge-success\" style=\"cursor:pointer\" onclick=\"ChangeStatus('+full.iUserID +',\'Inactive\',\'tbl_users\',\'eStatus\',\'iUserID\')\">'+data+'</span>';
                            else
                            return '<span class=\"badge badge-danger\" style=\"cursor:pointer\" onclick=\"ChangeStatus('+full.iUserID +',\'Active\',\'tbl_users\',\'eStatus\',\'iUserID\')\">'+data+'</span>';
                        }", 
                        'footer' => 'Id',
                        'exportable' => true,
                        'printable' => true,
                    ])
                    ->addColumn([
                        'targets'=> '0',
                        'name' => 'iUserID',
                        'data' => 'iUserID',
                        'title' => 'Action',
                        'searchable' => false,
                        'orderable' => false,
                        'render' => "function(){ 
                            var url_temp='".url('doctor/edit/')."/';
                            return '<a href='+url_temp+1+' class=\"btn btn-outline-success btn-sm\"><i class=\"fa fa-edit\"></i></a> <button onclick=\"Delete('+data+',\'iUserID\',\'tbl_users\')\"  class=\"btn btn-outline-danger btn-sm\"><i class=\"fa fa-trash\"></i></button></button>';
                        }", 
                        'footer' => 'Id',
                        'exportable' => true,
                        'printable' => true,
                    ])
                    ->autoWidth(0);
                    
                    
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return ['iUserID','vFirstName','vLastName','vMobile','vAlternateNo','vEmail','vAlternateEmail','eRole','eStatus'];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Doctor_model_' . date('YmdHis');
    }
    /**
     * @param $data
     * @return string
     */

}
