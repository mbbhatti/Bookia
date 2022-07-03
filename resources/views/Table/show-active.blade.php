@extends('layout')

@section('title', 'Active Tables')

@section('page_header')
    @include('Partial/page-header')
@stop

@section('content')
    <div class="page-content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">
                        @if(count($tables) > 0)
                            <div class="table-responsive">
                                @foreach($tables as $name => $records)
                                    <div>
                                        <strong>Dining Area: </strong>{{ $name }}
                                    </div>
                                    <table class="table table-hover dataTable">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Minimum Capacity</th>
                                            <th>Maximum Capacity</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($records as $record)

                                            <tr>
                                                <td>{{ $record['name'] }}</td>
                                                <td>{{ $record['minimum_capacity'] }}</td>
                                                <td>{{ $record['maximum_capacity'] }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@include('Partial/data-table')

