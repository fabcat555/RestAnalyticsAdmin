@extends('layouts.master')

@section('scripts')
    @include('layouts.tableScripts')
@endsection

@section('content')
    <div class="panel panel-white">
        <div class="panel-heading">
            <h4 class="panel-title">
                @if(App::isLocale('en'))
                    {{trans('messages.MostVisited')}} <span class="text-bold">{{lcfirst(trans('messages.Pages'))}}</span>
                @else
                    <span class="text-bold">{{trans('messages.Pages')}}</span> {{trans('messages.MostVisited')}}
                @endif
            </h4>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered hover" id="pages-table">
                    <thead>
                    <tr>
                        <th style="text-align: center">{{trans('messages.URL')}}</th>
                        <th style="text-align: center">{{trans('messages.Visits')}}</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('table')
    <script>
        $(function() {
            $('#pages-table').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'copyHtml5',
                        text: '{{trans('messages.DataTableCopy')}}',
                        copySuccess: {
                            1: '{{trans('messages.DataTableCopy1Row')}}',
                            _: '{{trans('messages.DataTableCopyNRow')}}'
                        },
                        copyTitle: '{{trans('messages.DataTableCopyClipboard')}}'
                    },
                    'excelHtml5',
                    'csvHtml5',
                    'pdfHtml5'
                ],
                processing: true,
                serverSide: false,
                ajax: '{{ route('pages.data') }}',
                columns: [
                    { data: 'url', name: 'url' },
                    { data: 'visits', name: 'visits' }
                ],
                language: {
                    emptyTable:     '{{trans('messages.DataTableEmpty')}}',
                    info:           '{{trans('messages.DataTableInfo')}}',
                    infoEmpty:      '{{trans('messages.DataTableInfoEmpty')}}',
                    loadingRecords: '{{trans('messages.DataTableLoadingRecords')}}',
                    processing:     '{{trans('messages.DataTableProcessing')}}',
                    search:         '{{trans('messages.DataTableSearch')}}',
                    zeroRecords:    '{{trans('messages.DataTableZeroRecords')}}',
                    "paginate": {
                        "first":    '{{trans('messages.DataTableFirst')}}',
                        "last":     '{{trans('messages.DataTableLast')}}',
                        "next":     '{{trans('messages.DataTableNext')}}',
                        "previous": '{{trans('messages.DataTablePrevious')}}'
                    },
                    buttons: {
                        copySuccess: {
                            1: '{{trans('messages.DataTableCopy1Row')}}',
                            _: '{{trans('messages.DataTableCopyNRow')}}'
                        },
                        copyTitle: '{{trans('messages.DataTableCopyClipboard')}}'
                    }
                },
                "aaSorting": [[1,'desc']]
            });
        });
    </script>
@endsection