<h1>Reset Password</h1>
<p>You are receiving this email because we received a password reset request for your this mail account.</p>
Click below to reset your password
<a class="btn btn-primary" href="{{ route('customer.getPasswordResetForm', ['token' => $token]) }}">Reset Password</a>
{{-- <a class="btn btn-primary " style="padding: 10px 15px; background:rgb(67, 8, 230); text-decoration:none; display:block;" href="{{ route('customer.getPasswordResetForm', ['email' => $email, 'token' => $token]) }}">Reset Password</a> --}}




{{-- @component('mail::message')
# Dear, {{$customer['name']}}

You are receiving this email because we received a signup request for your this mail account.

@component('mail::button', ['url' => "{{ route('customer.getPasswordResetForm', ['token' => $customer['token']]) }}"])
@component('mail::button', ["url" => url('/get-reset-password/'.$customer['token'])])
    
@endcomponent
Reset Password
@endcomponent


Thanks,
{{ config('app.name') }}
@endcomponent --}}