@extends('helloapp')

@section('title','Person.index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <input type="submit" value="検索" onclick="window.open('person/find')">
  <table >
    <tr><th>Person</th><th>Message</th></tr>
    @foreach($items as $item)
      <tr>
        <td>{{$item->getData()}}</td>
        <td>
          @if($item->messages !=null)
          <table width="100%">
            @foreach($item->messages as $obj)
              <tr><td>{{$obj->getData()}}</td></tr>
            @endforeach
          </table>
          @endif
      </td>
      </tr>
    @endforeach
  </table>
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection
