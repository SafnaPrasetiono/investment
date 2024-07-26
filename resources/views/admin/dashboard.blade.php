@extends('admin.layouts.panel')

@section('head')
    <title>Wellcome to Dashboard of Avrist Investment System</title>
@endsection

@section('pages')
<div class="container-fluid">
    <div class="row g-2 mb-3">
        <div class="col-12">
            <div class="d-block bg-white rounded shadow p-3">
                <h2>Investment</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum labore maiores facilis
                    optio illo tempora quod omnis veniam dolores. Est porro omnis, quae numquam velit
                    accusantium perferendis inventore sint consectetur.</p>
            </div>
        </div>
    </div>

    <div class="row g-3 mb-3">
        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
            <div class="card p-2 shadow">
                <div class="d-flex align-items-center px-2">
                    <i class="fa fa-plane float-start fa-3x py-auto" aria-hidden="true"></i>
                    <div class="card-body text-end">
                        <h5 class="card-title">122</h5>
                        <p class="card-text">Pleanning</p>
                    </div>
                </div>
                <div class="card-footer bg-white">
                    <small class="text-start fw-bold">Your Planning</small>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
            <div class="card p-2 shadow">
                <div class="d-flex align-items-center px-2">
                    <i class="fa fa-money fa-3x py-auto" aria-hidden="true"></i>
                    <div class="card-body text-end">
                        <h5 class="card-title">$ 123.05</h5>
                        <p class="card-text">Money</p>
                    </div>
                </div>
                <div class="card-footer bg-white">
                    <small class="text-start fw-bold">Your Money</small>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
            <div class="card p-2 shadow">
                <div class="d-flex align-items-center px-2">
                    <i class="fa fa-calendar float-start fa-3x py-auto" aria-hidden="true"></i>
                    <div class="card-body text-end">
                        <h5 class="card-title">122</h5>
                        <p class="card-text">Pleanning</p>
                    </div>
                </div>
                <div class="card-footer bg-white">
                    <small class="text-start fw-bold">Your Schedule</small>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
            <div class="card p-2 shadow">
                <div class="d-flex align-items-center px-2">
                    <i class="fa fa-users float-start fa-3x py-auto" aria-hidden="true"></i>
                    <div class="card-body text-end">
                        <h5 class="card-title">122</h5>
                        <p class="card-text">Customer</p>
                    </div>
                </div>
                <div class="card-footer bg-white">
                    <small class="text-start fw-bold">Your Customer</small>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-2">
        <div class="col-12 col-lg-6">
            <div class="d-block rounded shadow bg-white p-3">
                <canvas id="myChartOne"></canvas>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <div class="d-block rounded shadow bg-white p-3">
                <canvas id="myChartTwo"></canvas>
            </div>
        </div>
    </div>

</div>
@endsection

@section('script')
@endsection