@extends('base')

@section('content')

<style>

    th {
        background-color: #4CAF50;
        color: white;
    }

    tr:hover {
        background-color: #f5f5f5;
    }
    
</style>

<h1>Learners</h1>
<table class="table table-bordered table-striped table-sm">
    <thead>
        <tr>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Level</th>
            <th>Status</th>
        </tr>
    </thead>

    <tbody>
        @foreach($learners as $learner)

        <tr>
            <td>{{$learner->lname}}</td>
            <td>{{$learner->fname}}</td>
            <td>{{$learner->level}}</td>
            <td>{{$learner->status}}</td>
        </tr>

        @endforeach
    </tbody>
</table>

@stop