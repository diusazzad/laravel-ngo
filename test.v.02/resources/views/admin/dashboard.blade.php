@extends('layout.app')

@section('content')
    <div class="bodywrapper__inner">

        <div class="row align-items-center mb-30 justify-content-between">
            <div class="col-lg-6 col-sm-6">
                <h6 class="page-title">Dashboard</h6>
            </div>
            <div class="mt-3 col-lg-6 col-sm-6 text-sm-right mt-sm-0 right-part">
            </div>
        </div>


        <div class="row mb-none-30">
            <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                <div class="dashboard-w1 bg--primary b-radius--10 box-shadow">
                    <div class="icon">
                        <i class="las la-comment-dollar"></i>
                    </div>
                    <div class="details">
                        <div class="numbers">
                            <span class="amount">83</span>
                        </div>
                        <div class="desciption">
                            <span class="text--small">Active Loans</span>
                        </div>

                        <x-app.sidebar.dashboard.button.activeview />
                    </div>
                </div>
            </div><!-- dashboard-w1 end -->
            <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                <div class="dashboard-w1 bg--cyan b-radius--10 box-shadow">
                    <div class="icon">
                        <i class="las la-file-invoice-dollar"></i>
                    </div>
                    <div class="details">
                        <div class="numbers">
                            <span class="currency-sign">$</span>
                            <span class="amount">4,267.68</span>
                        </div>
                        <div class="desciption">
                            <span class="text--small">Loan Total Due</span>
                        </div>

                        <x-app.sidebar.dashboard.button.totaldue />
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                <div class="dashboard-w1 bg--orange b-radius--10 box-shadow ">
                    <div class="icon">
                        <i class="las la-coins"></i>
                    </div>
                    <div class="details">
                        <div class="numbers">
                            <span class="amount">20</span>
                        </div>
                        <div class="desciption">
                            <span class="text--small">Active Savings</span>
                        </div>

                        <x-app.sidebar.dashboard.button.activesavings />
                    </div>
                </div>
            </div><!-- dashboard-w1 end -->
            <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                <div class="dashboard-w1 bg--pink b-radius--10 box-shadow ">
                    <div class="icon">
                        <i class="las la-wallet"></i>
                    </div>
                    <div class="details">
                        <div class="numbers">
                            <span class="currency-sign">$</span>
                            <span class="amount">15,657.40</span>
                        </div>
                        <div class="desciption">
                            <span class="text--small">Payable Savings</span>
                        </div>


                        <x-app.sidebar.dashboard.button.payablesavings />
                    </div>
                </div>
            </div><!-- dashboard-w1 end -->
        </div><!-- row end-->

        <div class="mt-4 card b-radius--10">
            <div class="card-header">
                <h5 class="d-inline">Payment History</h5>
                <a href="https://script.viserlab.com/ngolab/user/payment-history/all"
                    class="float-right btn btn-sm btn--primary box--shadow1 text--small">View All</a>
            </div>
            <div class="p-0 card-body">
                <div class="table-responsive--md table-responsive">
                    <table class="table table--light style--two">
                        <thead>
                            <tr>
                                <th>S.N.</th>
                                <th>Type</th>
                                <th>Plan Name</th>
                                <th>Paid Through</th>
                                <th>Amount</th>
                                <th>Late Fee</th>
                                <th>Total Amount</th>
                                <th>Date Time</th>
                            </tr>
                        </thead>
                        <tbody>

                            {{-- <tr>
                                <td data-label="S.N">1</td>
                                <td data-label="Type">Loan</td>
                                <td data-label="Plan Name">Eagan Greene</td>
                                <td data-label="Paid Through"> Staff </td>
                                <td data-label="Amount">$5.00</td>
                                <td data-label="Late Fee">$0.00</td>
                                <td data-label="Total Amount">$5.00</td>
                                <td data-label="Date Time">2023-10-26 10:58 AM</td>
                            </tr> --}}
                            @foreach ($payments as $payment)
                            <tr>
                                <td>{{ $payment->id }}</td>
                                <td>{{ $payment->type }}</td>
                                <td>{{ $payment->plan_name }}</td>
                                <td>{{ $payment->paid_through }}</td>
                                <td>{{ $payment->amount }}</td>
                                <td>{{ $payment->late_fee }}</td>
                                <td>{{ $payment->total_amount }}</td>
                                <td>{{ $payment->date_time }}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table><!-- table end -->
                </div>
            </div>
        </div>


    </div><!-- bodywrapper__inner end -->
@endsection
