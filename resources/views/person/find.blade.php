@extends('helloapp')

@section('title','Person.find')

@section('menubar')
  @parent
  検索ページ
@endsection

@section('content')
  <form action="find" method="get">
    {{ csrf_field() }}
    Name<input type="text" name="input" value="{{$input}}">
    <input type="submit" value="find"> 
  </form>
  @if (isset($item))
  <table border="1">
    <tr><th>Data</th></tr>
    <tr>
      <td>{{$item->getData()}}</td>
    </tr>
  </table>
  @endif
@endsection

@section('footer')
copyright 2017 tuyano
@endsection
