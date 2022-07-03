@extends('layout')

@section('title', 'Restaurants')

@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="voyager-list"></i> Restaurants
        </h1>
    </div>
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
                                        <th class="actions">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($records as $record)
                                        <tr>
                                            @foreach($record as $key => $row)
                                                <td>
                                                    {{ $row }}
                                                </td>
                                            @endforeach
                                            <td class="no-sort no-click bread-actions">
                                                <a href="{{ route('tables', ['id' => $record['id']]) }}" title="Tables" class="btn btn-sm btn-success">
                                                    <span class="hidden-xs hidden-sm">Tables</span>
                                                </a>
                                                <a href="{{ route('table.active', ['id' => $record['id']]) }}" title="Active Tables" class="btn btn-sm btn-success">
                                                    <span class="hidden-xs hidden-sm">Active Tables</span>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="pagination pull-right">
                                    {!! $restaurant->links() !!}
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
