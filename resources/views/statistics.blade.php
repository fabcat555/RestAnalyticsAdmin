@extends('layouts.master')

@section('scripts')
    <script src="{{asset('plugins/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
@endsection

@section('content')
    <div class="panel">
        <div class="panel-heading">
            <i class="clip-bars"></i>
            <h4 class="panel-title"><span class="text-bold">{{trans('messages.Statistics')}}</span></h4>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-3">
                    <h4>{{ $statistics->getBounceRate() }} %</h4>
                    <div class="progress progress-xs transparent-black no-margin no-radius">
                        <div aria-valuetransitiongoal="{{ $statistics->getBounceRate() }}" aria-valuemax="100" class="progress-bar progress-bar-success partition-green animate-progress-bar" ></div>
                    </div>
                    {{trans('messages.BounceRate')}}
                </div>
                <div class="col-sm-3">
                    <h4>{{ $statistics->getAvgSessionTime() }} ms</h4>
                    <div class="progress progress-xs transparent-black no-margin no-radius">
                        <div aria-valuetransitiongoal="{{ $statistics->getAvgSessionTime() }}" aria-valuemax="1000" class="progress-bar progress-bar-success partition-green animate-progress-bar" ></div>
                    </div>
                    {{trans('messages.AverageSessionTime')}}
                </div>
                <div class="col-sm-3">
                    <h4>{{ $statistics->getAvgLoadingTime() }} ms</h4>
                    <div class="progress progress-xs transparent-black no-margin no-radius">
                        <div aria-valuetransitiongoal="{{ $statistics->getAvgLoadingTime() }}" aria-valuemax="1000" class="progress-bar progress-bar-success partition-green animate-progress-bar" ></div>
                    </div>
                    {{trans('messages.AverageLoadingTime')}}
                </div>
                <div class="col-sm-3">
                    <h4>{{ $statistics->getPagesPerSession() }}</h4>
                    <div class="progress progress-xs transparent-black no-margin no-radius">
                        <div aria-valuetransitiongoal="{{ $statistics->getPagesPerSession() }}" aria-valuemax="100" class="progress-bar progress-bar-success partition-green animate-progress-bar" ></div>
                    </div>
                    {{trans('messages.PagesPerSession')}}
                </div>
            </div>
        </div>
    </div>
@endsection