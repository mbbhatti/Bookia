@section('javascript')
    <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.dataTable').DataTable({
                "bPaginate": false,
                "paging": false,
                "bInfo": false,
                "bFilter": true,
                "order": []
            });
        });
    </script>
@stop
