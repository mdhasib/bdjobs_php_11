@extends('dashboard')

@section('content')
    <div class="row">
        <a href="{!! url('players/create') !!}" class="btn btn-success">Add New Player</a>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    DataTables Advanced Tables
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Matches</th>
                            <th>Age(s)</th>
                            <th>Goal</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $v)
                        <tr class="even gradeC">
                            <td>{!! $v->name !!}</td>
                            <td>{!! $v->matches !!}</td>
                            <td>{!! $v->age !!}</td>
                            <td class="center">{!! $v->goal !!}</td>
                            <td class="center"><a href="{!! url('players/'.$v->id.'/edit') !!}" class="btn btn-warning">Edit</a> |
                                {!! Form::open(array('method'=>'DELETE', 'route'=>array('players.destroy',$v->id)))!!}
                                {!! Form::submit('Delete', array('class'=>'btn btn-danger btn-sm','onclick' => 'return confirm("Are you sure want to Delete?");'))!!}
                                {!! Form::close()!!}
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
@endsection