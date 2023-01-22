@extends('layouts.header')
@section('content')
<h2>
    Схемы
    <form action="schemes/add" method="POST" enctype="multipart/form-data">
    @csrf    
    <input type="file" name="pdf" accept="document/*">
    <input type="submit">
    </form>
</h2>
@endsection