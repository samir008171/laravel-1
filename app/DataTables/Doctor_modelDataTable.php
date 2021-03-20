<?php

namespace App\DataTables;

use App\Models\Doctor_model;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

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
        return $model->newQuery();
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
                           "eRole"=>['title'=>'Role'],
                           "eStatus"=>['title'=>'Status'],
                           ])
                    // ->minifiedAjax()
                    ->orderBy(0,'asc')
                    ->responsive(1)
                    ->dom('Bfrtip')
                    ->addColumn([
                        'targets'=> '0',
                        'name' => 'id',
                        'data' => 'iUserID',
                        'title' => 'Action',
                        'searchable' => true,
                        'orderable' => true,
                        'render' => 'function(){ 
                            return "<a href=\'"+data+"\' class=\'btn btn-outline-success btn-sm\'><i class=\'fa fa-edit\'></i></a> <button onclick=\'delete("+data+",\'iUserID\',\'tbl_users\')\' class=\'btn btn-outline-danger btn-sm\'><i class=\'fa fa-trash\'></i></button>";
                        }', 
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
    protected function getActionColumn($data): string
    {
        // $showUrl = route('admin.brands.show', $data->iUserID);
        // $editUrl = route('admin.brands.edit', $data->iUserID);
        return "<button class='waves-effect btn deepPink-bgcolor delete'  ><i class='material-icons'>delete</i>Delete</button>";
    }
}
