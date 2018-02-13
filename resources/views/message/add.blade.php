@extends('helloapp')

@section('title','Message.add')

@section('menubar')
  @parent
  投稿ページ
@endsection

@section('content')
  <table>
    <form action="add" method="post">
      {{ csrf_field() }}
      <tr><th>person id:</th><td><input type="number" name="person_id"></td></tr>
      <tr><th>title:</th><td><input type="text" name="title"></td></tr>
      <tr><th>message_in:</th><td><input type="text" name="message_in"></td></tr>
      <tr><th></th><td><input type="submit" value="send"></td></tr>
  </table>
@endsection

@section('footer')
copyright 2017 tuyano
@endsection
