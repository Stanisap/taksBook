@extends('layout.app')

@section('content')
{{--        end form-horizontal--}}
    <div class="card-body">
        @include('errors')
        <form action="{{ url('tasks') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <div class="row">
                <div class="form-group">
                    <label for="Task" class="col-sm-3 control-label">Title</label>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 mt-2">
                    <input type="text" name="title" id="task-title" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label for="Task" class="col-sm-3 control-label">Description</label>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 mt-2">
                    <textarea type="text" name="description" id="task-description" class="form-control"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 mt-2">
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-plus">Add task</i>
                    </button>
                </div>
            </div>
        </form>
{{--        end form-horizontal--}}
        @if(count($tasks) > 0)
            <div class="card">
                <div class="card-heading">
                    Current cards
                </div>
                <div class="card-body">
                    <table class="table table-striped task-table">
                        <thead>
                        <th>Task</th>
                        <th>&nbsp;</th>
                        </thead>
                        <tbody>
                        @foreach($tasks as $task)
                            
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
@endsection
