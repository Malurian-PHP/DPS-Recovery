@extends('layouts.layout')

@section('content')


@if(isset($nameResults))
<section class="page-section">
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card p-5">
                <div class="card-header">Found {{ $nameResults->count() }} results.
                {{-- <div class="card-header">Found {{ $results->count() }} results. --}}
                    <div class="btn-actions-pane-right">
                        <div role="group" class="btn-group-sm btn-group">
                            {{-- <button class="active btn btn-focus">Last Week</button>
                            <button class="btn btn-focus">All Month</button> --}}
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">Last Name</th>
                            {{-- <th class="text-center">Balance</th> --}}
                            <th class="text-center">Zip Code</th>
                            <th class="text-center">Case Status</th>
                            <th class="text-center">Offense</th>
                            <th class="text-center">Date</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($nameResults as $result)

                                    <tr>
                                        <td class="text-center text-muted">{{ $result->caseNameLast }}</td>
                                        {{-- <td class="text-center">
                                            <div class="widget-content p-0">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left flex2">
                                                        <div class="widget-heading">${{ $result->balance->balAmtPlcd }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td> --}}
                                        <td class="text-center">{{ $result->zip->adrsZip }}</td>
                                        <td class="text-center">
                                            @if( $result->caseSecStatus == 'skiptrace')
                                            <div class="badge badge-danger">
                                                {{ $result->caseSecStatus }}
                                            </div>
                                            @else

                                            <div class="badge badge-success">
                                                {{ $result->caseSecStatus }}
                                            </div>

                                            @endif
                                        </td>
                                        <td class="text-center">{{ $result->caseNarrative }}</td>
                                        <td class="text-center">
                                            @if( $result->caseDate == '')
                                            <div class="">
                                                No Date Recorded
                                            </div>
                                            @else

                                            Due {{ $result->caseDate->diffForHumans() }}

                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm"> <a style="color:white;" href="{{ url('pay/'. $result->caseUID) }}">Make Payment</a></button>
                                        </td>
                                    </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@else
<section class="page-section">
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card p-5">
                <div class="card-header">Found {{ $idResults->count() }} results.
                {{-- <div class="card-header">Found {{ $results->count() }} results. --}}
                    <div class="btn-actions-pane-right">
                        <div role="group" class="btn-group-sm btn-group">
                            {{-- <button class="active btn btn-focus">Last Week</button>
                            <button class="btn btn-focus">All Month</button> --}}
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">Last Name</th>
                            {{-- <th class="text-center">Balance</th> --}}
                            <th class="text-center">Zip Code</th>
                            <th class="text-center">Case Status</th>
                            <th class="text-center">Offense</th>
                            <th class="text-center">Date</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($idResults as $result)

                                <tr>
                                    <td class="text-center text-muted">{{ $result->user->caseNameLast }}</td>
                                    {{-- <td class="text-center">
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left flex2">
                                                    <div class="widget-heading">${{ $result->user->balance->balAmtPlcd }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </td> --}}
                                    <td class="text-center">{{ $result->user->zip->adrsZip }}</td>
                                    <td class="text-center">
                                        @if( $result->user->caseSecStatus == 'skiptrace')
                                        <div class="badge badge-danger">
                                            {{ $result->user->caseSecStatus }}
                                        </div>
                                        @else

                                        <div class="badge badge-success">
                                            {{ $result->user->caseSecStatus }}
                                        </div>

                                        @endif
                                    </td>
                                    <td class="text-center">{{ $result->user->caseNarrative }}</td>
                                    <td class="text-center">
                                        @if( $result->user->caseDate == '')
                                        <div class="">
                                            No Date Recorded
                                        </div>
                                        @else

                                        Due {{ $result->user->caseDate->diffForHumans() }}

                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm"> <a style="color:white;" href="{{ url('pay/'. $result->user->caseUID) }}">Make Payment</a></button>
                                    </td>
                                </tr>
                            @endforeach

                            {{-- @foreach ($nameResults as $result)
                                <ul>
                                <li>{{ $result }}</li>
                                </ul>
                            @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

@endsection
