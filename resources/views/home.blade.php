@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                    <h1 style="text-align: center;color:red">โปรติดต่อเจ้าหน้าที่เพื่อชำระเงิน</h1>
                <?php echo '<h1 style="text-align: center;color:red">โปรติดต่อเจ้าหน้าที่เพื่อชำระเงิน</h1>' ?>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
