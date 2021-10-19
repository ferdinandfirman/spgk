@extends('layouts.app')

@section('content')
    <h1><b>EDIT DATA</b></h1>
    <hr>
    {!! Form::open(['action' => ['SalaryGroupController@update', $salary_group->id_golongan], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('persentase_kenaikan', 'Persentase Kenaikan')}}
            {{Form::text('persentase_kenaikan', $salary_group->persentase_kenaikan, ['class' => 'form-control', 'placeholder' => 'Masukkan persentase kenaikan'])}}
        </div>
        <hr>
        <div class="form-group">
            <a href="/salary_groups" class="btn btn-dark" 
            style="height:45px;width:150px;margin:2px 0px;font-size:18px">Kembali</a>
            {{Form::hidden('_method', 'PUT')}}
            {{Form::submit('Simpan Data', ['class' => "btn btn-success", 
            'style' => "height:45px;width:150px;margin:2px 0px;font-size:18px;float:right"])}}
        </div>
        <br><br>
    {!! Form::close() !!} 
    
@endsection