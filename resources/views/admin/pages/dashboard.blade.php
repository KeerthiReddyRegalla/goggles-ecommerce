@extends('admin.index')
@section('page-title', 'Overview')
@section('content')
    <div class="row">
        <div class="col-4">
            @if(session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                <br>
            @endif

            <form action="{{ route('two-factor.enable') }}" method="POST">
                @csrf

                @php
                    $mfa =  \Illuminate\Support\Facades\DB::table('users')->where('id', auth()->user()->id)->first();
                @endphp
                @if($mfa->two_factor_secret)
                    @method('DELETE')
                    <button type="submit" class="btn btn-primary">Disable MFA</button>
                @else
                    <button type="submit" class="btn btn-primary">Enable MFA</button>
                @endif
            </form>
            <br>
            <div>
                @if($mfa->two_factor_secret)
                 {!! auth()->user()->twoFactorQrCodeSvg() !!}
                @endif
            </div>
        </div>
        <div class="col-8">

        </div>
    </div>



@endsection
