@extends('backend.template.main')

@section('title', 'Dashboard')

@section('content')
    {{-- content --}}


    <div class="row">
        <div class="col-12 mb-4">
            <div class="card bg-yellow-100 border-0 shadow">
                <div class="card-header d-sm-flex flex-row align-items-center flex-0">
                    <div class="d-block mb-3 mb-sm-0">
                        <div class="fs-5 fw-normal mb-2">Sales Value</div>
                        <h2 class="fs-3 fw-extrabold">Rp. {{ number_format($totalPrice, 0, ',', '.') }}</h2>
                    </div>
                    <div class="d-flex ms-auto">
                        <a href="#" class="btn btn-secondary text-dark btn-sm me-2">Month</a>
                        <a href="#" class="btn btn-dark btn-sm me-3">Week</a>
                    </div>
                </div>
                <div class="card-body p-2">
                    <div class="ct-chart-sales-value ct-double-octave ct-series-g"></div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-xl-4 mb-4">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="row d-block d-xl-flex align-items-center">
                        <div
                            class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                            <div class="icon-shape icon-shape-primary rounded me-4 me-sm-0">
                                <i class="fas fa-check-circle text-primary fs-2"></i>
                            </div>
                            
                        </div>
                        <div class="col-12 col-xl-7 px-xl-0">
                            <div class="d-none d-sm-block">
                                <h2 class="h6 text-gray-400 mb-0">Success Transactions</h2>
                                <h3 class="fw-extrabold mb-2">{{ $successTransactions }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-xl-4 mb-4">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="row d-block d-xl-flex align-items-center">
                        <div
                            class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                            <div class="icon-shape icon-shape-secondary rounded me-4 me-sm-0">
                                <i class="fas fa-exclamation-triangle text-warning fs-2"></i>
                            </div>
                        </div>
                        <div class="col-12 col-xl-7 px-xl-0">
                            <div class="d-none d-sm-block">
                                <h2 class="h6 text-gray-400 mb-0">Pending Transactions</h2>
                                <h3 class="fw-extrabold mb-2">{{ $pendingTransactions }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-xl-4 mb-4">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="row d-block d-xl-flex align-items-center">
                        <div
                            class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                            <div class="icon-shape icon-shape-tertiary rounded me-4 me-sm-0">
                                <i class="fas fa-times-circle text-danger fs-2"></i>
                            </div>
                        </div>
                        <div class="col-12 col-xl-7 px-xl-0">
                            <div class="d-none d-sm-block">
                                <h2 class="h6 text-gray-400 mb-0">Failed Transactions</h2>
                                <h3 class="fw-extrabold mb-2">{{ $failedTransactions }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-xl-8">
            <div class="row">
                <div class="col-12 mb-4">
                    <div class="card border-0 shadow">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h2 class="fs-5 fw-bold mb-0">Latest Transactions</h2>
                                </div>
                                <div class="col text-end">
                                    <a href="{{ route('panel.transaction.index') }}" class="btn btn-sm btn-primary">See
                                        all</a>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="border-bottom" scope="col">Name</th>
                                        <th class="border-bottom" scope="col">Code</th>
                                        <th class="border-bottom" scope="col">Status</th>
                                        <th class="border-bottom" scope="col">Created At</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($latestTransactions as $transaction)
                                        <tr>
                                            <td>{{ $transaction->name }}</td>
                                            <td>{{ $transaction->code }}</td>
                                            <td>
                                                @if ($transaction->status == 'pending')
                                                    <span class="badge bg-warning">Pending</span>
                                                @elseif ($transaction->status == 'failed')
                                                    <span class="badge bg-danger">Failed</span>
                                                @else
                                                    <span class="badge bg-success">Success</span>
                                                @endif
                                            </td>
                                            <td>{{ $transaction->created_at }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3" class="text-center">No Data Available</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div class="col-12 col-xl-4">
            <div class="col-12 px-0 mb-4">
                <div class="card border-0 shadow">
                    <div class="card-header d-flex flex-row align-items-center flex-0 border-bottom">
                        <div class="d-block">
                            <div class="h6 fw-normal text-gray mb-2">Total Transactions</div>
                            <h2 class="h3 fw-extrabold">{{ $totalTransactions }}</h2>
                        </div>
                        <div class="d-block ms-auto">
                            <div class="d-flex align-items-center text-end mb-2">
                                <span class="dot rounded-circle bg-gray-800 me-2"></span>
                                <span class="fw-normal small">September</span>
                            </div>
                            <div class="d-flex align-items-center text-end">
                                <span class="dot rounded-circle bg-secondary me-2"></span>
                                <span class="fw-normal small">October</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-2">
                        <div class="ct-chart-ranking ct-golden-section ct-series-a"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

    <div class="card theme-settings bg-gray-800 theme-settings-expand" id="theme-settings-expand">
        <div class="card-body bg-gray-800 text-white rounded-top p-3 py-2">
            <span class="fw-bold d-inline-flex align-items-center h6">
                <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                        clip-rule="evenodd"></path>
                </svg>
                Settings
            </span>
        </div>
    </div>
    {{-- end content --}}
@endsection
