@extends('layouts.master')

@section('scripts')
    <script src="{{asset('js/users.js')}}"></script>
    @include('layouts.tableScripts')
@endsection

@section('content')
    <div class="panel panel-white">
        <div class="panel-heading">
            <h4 class="panel-title"><span class="text-bold">{{trans('messages.Users')}}</span> {{trans('messages.ByCriterion')}}</h4>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12 space20">
                    <div class="btn-group">
                        <a id="language" class="btn btn-azure active">
                            {{trans('messages.Language')}}
                        </a>
                        <a id="nation" class="btn btn-azure">
                            {{trans('messages.Nation')}}
                        </a>
                        <a id="browser" class="btn btn-azure">
                            {{trans('messages.Browser')}}
                        </a>
                        <a id="os" class="btn btn-azure">
                            {{trans('messages.OS')}}
                        </a>
                        <a id="screen_resolution" class="btn btn-azure">
                            {{trans('messages.ScreenResolution')}}
                        </a>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered hover" id="users-table">
                    <thead>
                    <tr>
                        <th id="keyHeading" style="text-align: center">{{trans('messages.Language')}}</th>
                        <th style="text-align: center">{{trans('messages.Users')}}</th>
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
            $('#users-table').DataTable({
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
                ajax: '{{ route('users.data') }}',
                columns: [
                    { data: 'key', name: 'key' },
                    { data: 'count', name: 'count' }
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

        function switchTableHeading(id) {
            var heading;

            switch (id) {
                case 'language':
                    heading = '{{trans('messages.Language')}}';
                    break;
                case 'nation':
                    heading = '{{trans('messages.Nation')}}';
                    break;
                case 'browser':
                    heading = '{{trans('messages.Browser')}}';
                    break;
                case 'os':
                    heading = '{{trans('messages.OS')}}';
                    break;
                case 'screen_resolution':
                    heading = '{{trans('messages.ScreenResolution')}}';
                    break;
            }

            $('#keyHeading').html(heading);
        }
    </script>
@endsection