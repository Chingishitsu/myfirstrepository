@extends('helloapp')

@section('title','Person.find')

@section('menubar')
  @parent
  検索ページ
@endsection

@section('content')
  Name<input action="" name="sname" method="get"><br>
  Age<input action="" name="min" method="get">~<input action="" name="max" method="get">
@endsection

@section('footer')
copyright 2017 tuyano
@endsection
