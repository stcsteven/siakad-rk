@extends('layouts.master')

@section('title','Nilai Ulangan Harian')
@section('header','Rekap Nilai Ulangan Harian')

@section('content')
<table class="table table-bordered" style="text-align:center;">
  <tr>
    <td rowspan="2"><b>No.</b></td>
    <td rowspan="2"><b>Mata Pelajaran</b></td>
    <td colspan="7"><b>Nilai Ulangan Harian</b></td>
    <td rowspan="2" style="width:125px;word-wrap: break-word;"><b>Jumlah Ulangan Harian</b></td>
    <td rowspan="2"><b>Rata-rata</b></td>
  </tr>
  <tr>
    @for($i=1;$i<=7;$i++)
      <td><b>{{ $i }}</b></td>
    @endfor
  </tr>
  @foreach($mp as $mp)
  <tr>
    <td>{{$mp->id}}</td>
    <td>{{$mp->pelajaran}}</td>
    @for($i=1;$i<=7;$i++)
      <td>0</td>
    @endfor
    <td>0</td>
    <td>0</td>
  </tr>
  @endforeach
</table>
@stop