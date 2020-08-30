@extends('layouts.layout')

@section('content')

<section class="page-section">
    @if($user == '' )
        No User
    @else
    <div class="row">
        <div class="container">
            <div class="card text-center">
                <div class="card-header">
                    Welcome {{ $user->caseNameFirst }} {{ $user->caseNameLast }}
                </div>
                <div class="card-body">
                    <h5 class="card-title">Please Confirm <span style="color: red; font-weight: bold;">
                        {{ $user->letter_id->ltrhistBatchId }}/{{ $user->letter_id->ltrhistLtrId }}
                    </span> is your Letter ID</h5>
                    <p class="card-text">Also confirm the fee you're about to pay is ${{ $user->balance->balAmtCrntBal }}.</p>
                    <a href={{ url("https://www.myfloridacounty.com/myflc-pay/OpenPay.do/?&UserID=56032&serviceID=10911")}}
                    class="btn btn-primary" target="_blank">Pay ${{ $user->balance->balAmtCrntBal }}</a>
                </div>
                <div class="card-footer text-muted">
                     @if( $user->caseDate == '')
                        <div class="">
                            No Date Recorded
                        </div>
                    @else

                        Due {{ $user->caseDate->diffForHumans() }}

                    @endif
                </div>
            </div>
        </div>
    </div>
    @endif
</section>
@endsection
