@extends('layouts.app')

@section('content')
<div class="container">
<div class="row ">
    <form action="">
        <div>
        <label for=""> Enter key</label>
        <input type="text" class="form-control" name="query" placeholder="Search ...." />
        <select>
        <select name="select_search">
            <option value="0">name</option>
            <option value="1">comment</option>
            <option value="2">post</option>
        </select>
    </div>
    <div>
        <button type="submit" class="btn btn-primary"> Search</button>
    </div>
</form>
</div>
</div>