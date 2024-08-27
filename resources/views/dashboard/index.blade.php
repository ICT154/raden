@extends('templates.master')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/datatables.css') }}">
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Menu Management</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="" id="menu-management">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Menu Name</th>
                                        <th>Icon</th>
                                        <th>Parent</th>
                                        <th>Route</th>
                                        <th>Order</th>
                                        <th>Menu Action</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/datatable/datatables/jquery.datatables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#menu-management').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('menu-management.show') }}",
                    type: 'POST',
                    data: {
                        _token: "{{ csrf_token() }}"
                    }
                }
            });
        });
    </script>
@endsection
