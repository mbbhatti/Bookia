<div class="container-fluid">
    <h1 class="page-title">
        <i class="voyager-list"></i> {{ Route::currentRouteName() == 'table.active' ? 'Active Tables' : 'Tables' }}
    </h1>
    <a href="{{ Route::currentRouteName() == 'table.active' ? route('tables', ['id' => $id]) : route('table.active', ['id' => $id]) }}" class="btn btn-success">
        <span>{{ Route::currentRouteName() == 'table.active' ? 'Tables' : 'Active Tables' }}</span>
    </a>
    <a href="{{ route('restaurants') }}" class="btn btn-success">
        <span>Restaurants</span>
    </a>
</div>
