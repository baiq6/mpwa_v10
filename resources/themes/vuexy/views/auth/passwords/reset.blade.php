<x-layout-auth>
  @slot('title', __("Reset Password"))
  <div class="authentication-wrapper authentication-cover">
    <!-- Logo -->
    <a href="{{ url('/') }}" class="app-brand auth-cover-brand mb-4 mt-4 d-block text-center">
      <span class="app-brand-logo demo">
        <span class="text-primary">
          <x-logo></x-logo>
        </span>
      </span>
    </a>
    <!-- /Logo -->
    <div class="authentication-inner row m-0 justify-content-center align-items-center" style="min-height: 100vh;">
      <!-- Left Illustration (hidden on mobile) -->
      <div class="d-none d-xl-flex col-xl-7 p-0 align-items-center justify-content-center">
        <div class="auth-cover-bg d-flex flex-column justify-content-center align-items-center w-100 h-100">
          <img src="{{ asset('img/illustrations/auth-reset-password-illustration-light.png') }}" alt="auth-reset-password-cover" class="my-5 auth-illustration" style="max-width: 400px; width: 100%; height: auto;" data-app-light-img="illustrations/auth-reset-password-illustration-light.png" data-app-dark-img="illustrations/auth-reset-password-illustration-dark.png" />
          <img src="{{ asset('img/illustrations/bg-shape-image-light.png') }}" alt="auth-reset-password-bg" class="platform-bg" style="max-width: 300px; width: 100%; height: auto;" data-app-light-img="illustrations/bg-shape-image-light.png" data-app-dark-img="illustrations/bg-shape-image-dark.png" />
        </div>
      </div>
      <!-- /Left Illustration -->

      <!-- Reset Password Form -->
      <div class="col-12 col-xl-5 d-flex align-items-center justify-content-center">
        <div class="w-100" style="max-width: 420px; position: relative;">
          <!-- Language Switcher -->
          <div class="mb-4 text-end">
            <div class="dropdown">
              <a class="btn btn-sm btn-outline-secondary dropdown-toggle" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="icon-base ti tabler-language"></i>
                {{ LaravelLocalization::getSupportedLocales()[app()->getLocale()]['native'] ?? __('Language') }}
              </a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="languageDropdown">
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <li>
                  <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                    <span class="flag-icon flag-icon-{{ strtolower($localeCode) }}"></span> {{ $properties['native'] }}
                  </a>
                </li>
                @endforeach
              </ul>
            </div>
          </div>
          <!-- /Language Switcher -->


          @php
          $alertData = session('alert') ?? old('alert') ?? (isset($alert) ? $alert : null);
          $resetSuccess = session('reset_success') ?? old('reset_success');
          @endphp
          @if ($alertData)
          <x-alert>
            @slot('type', $alertData['type'])
            @slot('msg', $alertData['msg'])
          </x-alert>
          @endif

          @if ($resetSuccess)
          <div class="alert alert-success text-center mb-4">
            <i class="icon-base ti tabler-check mb-2" style="font-size:2rem;"></i><br>
            {{ __('Your password has been reset successfully.') }}<br>
            <a href="{{ route('login') }}" class="btn btn-primary mt-3">{{ __('Back to login') }}</a>
          </div>
          @else
          <form id="formAuthentication" class="mb-4" action="{{ route('password.update') }}" method="POST">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <div class="mb-4">
              <label class="form-label" for="email">{{ __('Email') }}</label>
              <input type="email" id="email" name="email" value="{{ request('email', old('email')) }}" placeholder="{{ __('email') }}" aria-describedby="email" readonly class="form-control @error('email') is-invalid @enderror" />
              @error('email')
              <div class="invalid-feedback d-block">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-4">
              <label class="form-label" for="password">{{ __('Enter new password') }}</label>
              <div class="input-group input-group-merge">
                <input type="password" id="password" name="password" placeholder="{{ __('Enter new password') }}" aria-describedby="password" class="form-control @error('password') is-invalid @enderror" />
                <span class="input-group-text cursor-pointer"><i class="icon-base ti tabler-eye-off"></i></span>
              </div>
              @error('password')
              <div class="invalid-feedback d-block">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-4">
              <label class="form-label" for="confirm-password">{{ __('Confirm new password') }}</label>
              <div class="input-group input-group-merge">
                <input type="password" id="confirm-password" name="password_confirmation" placeholder="{{ __('Confirm new password') }}" aria-describedby="password" class="form-control @error('password_confirmation') is-invalid @enderror" />
                <span class="input-group-text cursor-pointer"><i class="icon-base ti tabler-eye-off"></i></span>
              </div>
              @error('password_confirmation')
              <div class="invalid-feedback d-block">{{ $message }}</div>
              @enderror
            </div>
            <button class="btn btn-primary d-grid w-100 mb-3">{{ __('Reset') }}</button>
            <div class="text-center">
              <a href="{{ route('login') }}" class="d-flex justify-content-center align-items-center">
                <i class="icon-base ti tabler-chevron-left scaleX-n1-rtl me-1_5"></i> {{ __('Back to login') }}
              </a>
            </div>
          </form>
          @endif
        </div>
      </div>
      <!-- /Reset Password Form -->
    </div>
  </div>
</x-layout-auth>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
  // Debug: Output session data to browser console
  console.log('reset_debug', {
    reset_success: @json(session('reset_success')),
    alert: @json(session('alert'))
  });
  $(document).on('click', '.input-group-text.cursor-pointer', function() {
    var input = $(this).closest('.input-group').find('input');
    if (input.attr('type') === 'password') {
      input.attr('type', 'text');
      $(this).html('<i class="icon-base ti tabler-eye"></i>');
    } else {
      input.attr('type', 'password');
      $(this).html('<i class="icon-base ti tabler-eye-off"></i>');
    }
  });
</script>