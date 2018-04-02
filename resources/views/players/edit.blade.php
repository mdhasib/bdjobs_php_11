@extends('dashboard')

@section('content')
    <div id="">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Basic Form Elements
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-8">
                                {!! Form::model($data, ['method'=>'PATCH','route' => ['players.update',$data->id],'files' => true,'id'=>'frmInsert', 'name'=>'frmInsert' ]) !!}
                                <div class="form-group">
                                    {!! Form::label('name', 'Name') !!}
                                    {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'name']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('nationality', 'Nationality') !!}
                                    {!! Form::text('nationality', null, ['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('matches', 'Matches') !!}
                                    {!! Form::number('matches', null, ['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('age', 'Age') !!}
                                    {!! Form::number('age', null, ['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('goal', 'Goal') !!}
                                    {!! Form::number('goal', null, ['class'=>'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('position', 'Position') !!}
                                    {!! Form::select('position', ['1' => 'Forward', '2' => 'Mid-Fielder', '3' => 'Defender', '4' => 'Goal-Keeper'], null, ['class'=>'form-control','placeholder' => 'Pick a Position...']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('img_path', 'Picture') !!}
                                    {!! Form::file('img_path', null, ['class'=>'form-control']) !!}
                                </div>
                                {!! Form::submit('Submit', ['class'=>'btn btn-success']) !!}
                                {!! Form::reset('Reset', ['class'=>'btn btn-warning']) !!}
                                {!! Form::close() !!}
                            </div>
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>

@endsection