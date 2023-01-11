@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <!--Realizar formulario-->
                    <div class="card-body">
                        <form action="#" method="POST" id="paymentForm">
                            @csrf

                            <div class="row">
                                <div class="col-auto">
                                    <label>How much you want to pay?</label>
                                    <input type="number" min="5" step="0.01" class="form-control" name="value"
                                        value="{{ mt_rand(500, 100000) / 100 }}">
                                    <small class="form-text text-muted">
                                        Use alues with up to two decimal positions, using dot "."
                                    </small>
                                </div>
                            </div>
                            <div class="text-center mt-3">
                                <button type="submit" id="payButton" class="btn btn-primary btn-lg"> Pay </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
