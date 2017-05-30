@extends('layouts.master')

@section('scripts')
    <script src="{{asset('js/sessions.js')}}"></script>
    <script src="{{asset('plugins/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <script>
        function getUsersHeading(count) {
            if (count=='1')
                return '{{trans('messages.user')}}';
            else
                return '{{lcfirst(trans('messages.Users'))}}';
        }

    </script>
@endsection

@section('content')
<div class="panel">
    <div class="panel-heading">
        <i class="clip-bars"></i>
        <h4 class="panel-title">{{trans('messages.Users')}} <span class="text-bold">{{trans('messages.ByPeriod')}}</span></h4>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12 space20">
                <div class="btn-group">
                    <a id="realTime" class="btn btn-azure active">
                        {{trans('messages.RealTime')}}
                    </a>
                    <a id="day" class="btn btn-azure">
                        {{trans('messages.Day')}}
                    </a>
                    <a id="week" class="btn btn-azure">
                        {{trans('messages.Week')}}
                    </a>
                    <a id="month" class="btn btn-azure">
                        {{trans('messages.Month')}}
                    </a>
                    <a id="year" class="btn btn-azure">
                        {{trans('messages.Year')}}
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <h4 id="activeSessionsValue">{{ $activeSessions }} {{ $activeSessions==1 ? trans('messages.user') : lcfirst(trans('messages.Users')) }}</h4>
                <div class="progress progress-xs transparent-black no-margin no-radius">
                    <div aria-valuetransitiongoal="{{ $activeSessions*10 }}" aria-valuemax="1000" class="progress-bar progress-bar-success partition-green animate-progress-bar" ></div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection