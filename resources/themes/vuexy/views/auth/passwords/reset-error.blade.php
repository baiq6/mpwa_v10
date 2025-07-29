<x-layout-auth>
    @slot('title', __('Reset Password'))
    <div class="authentication-wrapper authentication-cover">
        <div class="authentication-inner row m-0 justify-content-center align-items-center" style="min-height: 100vh;">
            <div class="col-12 col-xl-5 d-flex align-items-center justify-content-center">
                <div class="w-100" style="max-width: 420px;">
                    <div class="alert alert-danger text-center mb-4">
                        <i class="icon-base ti tabler-alert-triangle mb-2" style="font-size:2rem;"></i><br>
                        {{ $msg }}
                    </div>
                    <div class="text-center">
                        <a href="{{ route('password.request') }}" class="btn btn-primary mt-2">{{ __('Request Password Reset Again') }}</a>
                        <br>
                        <a href="{{ route('login') }}" class="btn btn-link mt-2">{{ __('Back to login') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout-auth>