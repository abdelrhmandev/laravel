@extends('backend.base.guest')
@section('title', __('login.login'))
@section('style') 
<style>
body { background-image: url('{{ asset('assets/backend/media/auth/bg10.jpeg')}}'); } 
[data-theme="dark"] body { background-image: url('{{ asset('assets/backend/media/auth/bg10-dark.jpeg')}}'); }
</style>
@stop
@section('content')
			<div class="d-flex flex-column flex-lg-row flex-column-fluid">
				<div class="d-flex flex-lg-row-fluid">
					<div class="d-flex flex-column flex-center pb-0 pb-lg-10 p-10 w-100">
						<img class="theme-light-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20" src="{{ asset('assets/backend/media/auth/agency.png')}}" alt="" />
						<img class="theme-dark-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20" src="{{ asset('assets/backend/media/auth/agency-dark.png')}}" alt="" />
						<h1 class="text-gray-800 fs-2qx fw-bold text-center mb-7">Fast, Efficient and Productive</h1>
						<div class="text-gray-600 fs-base text-center fw-semibold">In this kind of post,
						<a href="#" class="opacity-75-hover text-primary me-1">the blogger</a>introduces a person they’ve interviewed
						<br />and provides some background information about
						<a href="#" class="opacity-75-hover text-primary me-1">the interviewee</a>and their
						<br />work following this is a transcript of the interview.</div>
					</div>
				</div>
				<div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12">
					<div class="bg-body d-flex flex-center rounded-4 w-md-600px p-10">
						<div class="w-md-400px">
						 

							<form id="login" data-route-url="{{ route('admin.auth.login.submit') }} " 
							class="form w-100"            
							data-form-submit-error-message="{{ __('site.form_submit_error')}}"
							data-form-agree-label="{{ __('site.agree') }}">    



								<div class="text-center mb-11">
									<h1 class="text-dark fw-bolder mb-3">{{ __('login.login') }}</h1>
									<div class="text-gray-500 fw-semibold fs-6">Your Social Campaigns</div>
								</div>
								{{-- <div class="row g-3 mb-9">
									<div class="col-md-6">
										<a href="#" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
										<img alt="Logo" src="{{ asset('assets/backend/media/svg/brand-logos/google-icon.svg')}}" class="h-15px me-3" />Sign in with Google</a>
									</div>
									<div class="col-md-6">
										<a href="#" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
										<img alt="Logo" src="{{ asset('assets/backend/media/svg/brand-logos/apple-black.svg')}}" class="theme-light-show h-15px me-3" />
										<img alt="Logo" src="{{ asset('assets/backend/media/svg/brand-logos/apple-black-dark.svg')}}" class="theme-dark-show h-15px me-3" />Sign in with Apple</a>
									</div>
								</div> --}}
								{{-- <div class="separator separator-content my-14">
									<span class="w-125px text-gray-500 fw-semibold fs-7">Or with email</span>
								</div> --}}
								
						 
							
								<div class="fv-row mb-3 fl">
									<label class="required form-label"
										for="email">{{ __('site.email') }}</label>
									<input type="email" id="email"
									value="mmm@dasdas.com"
										name="email" class="form-control bg-transparent" 
										required
										data-fv-email-address___message="{{ __('validation.email', ['attribute' => 'email' . '&nbsp;']) }}"
										data-fv-not-empty___message="{{ __('validation.required', ['attribute' => 'email' . '&nbsp;']) }}"
										/>
								</div>
								<div class="fv-row mb-3 fl">
									<label class="required form-label"
										for="password">{{ __('site.password') }}</label>
									<input type="text" id="password"
									value="15454545454"
										name="password" class="form-control bg-transparent" autocomplete="off" required
										data-fv-not-empty___message="{{ __('validation.required', ['attribute' => 'password' . '&nbsp;']) }}"
										/>
								</div>
								<div class="fv-row mb-8">
									<label class="form-check form-check-inline">
										<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
										<span class="form-check-label fw-semibold text-gray-700 fs-base ms-1">{{ __('Remember Me') }}</span>
									</label>
								</div>
								<div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
									<div></div>
									@if (Route::has('admin.auth.password.request'))
									<a href="{{ route('admin.auth.password.request') }}" class="link-primary">{{ __('Forgot Your Password?') }}</a>
									@endif
								</div>
								<div class="d-grid mb-10">
									<button type="submit" id="btn-submit" class="btn btn-primary">
										<span class="indicator-label">{{ __('login.login') }}</span>
										<span class="indicator-progress">{{ __('site.wait')}}...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!--end::Authentication - Sign-in-->
@stop
@section('scripts')
<script src="{{ asset('assets/backend/js/custom/Tachyons.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/custom/es6-shim.min.js') }}"></script>
<script src="{{ asset('assets/backend/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<script src="{{ asset('assets/backend/js/widgets.bundle.js') }}"></script>
<script src="{{ asset('assets/backend/js/custom/handleFormSubmit.js') }}"></script>
<script>
KTUtil.onDOMContentLoaded(function() {
   handleFormSubmitFunc('login');
});
</script>
@stop