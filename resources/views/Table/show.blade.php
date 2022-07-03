@extends('layout')

@section('title', 'Tables')

@section('page_header')
    @include('Partial/page-header')
@stop

@section('content')
    <div class="page-content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">
                        @if(count($records) > 0)
                            <div class="table-responsive">
                                <table class="table table-hover dataTable">
                                    <thead>
                                    <tr>
                                        @foreach($columns as $column)
                                            <th>{{ $column }}</th>
                                        @endforeach
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($records as $record)
                                        <tr>
                                            @foreach($record as $key => $row)
                                                <td>
                                                    @if ($key === 'Status')
                                                        @if ($row)
                                                            <span class="btn btn-sm btn-success">Active</span>
                                                        @else
                                                            <span class="btn btn-sm btn-danger">Not Active</span>
                                                        @endif
                                                    @else
                                                        {{ $row }}
                                                    @endif
                                                </td>
                                            @endforeach
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="pagination pull-right">
                                    {!! $table->links() !!}
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@include('Partial/data-table')
