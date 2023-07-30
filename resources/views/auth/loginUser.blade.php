<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    {{-- <x-input-error :messages="$errors->get('password')" class="mt-2" /> --}}

    <div class="formbg">
        <div class="formbg-inner padding-horizontal--48">
            <span class="padding-bottom--15">Đăng nhập</span>
            <form id="stripe-login" action="{{ route('loginUser') }}" method="post">
                @csrf

                <div class="field padding-bottom--24">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Email ..." value="{{ old('email') }}">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class="field padding-bottom--24">
                    <div class="grid--50-50">
                        <label for="password">Mật khẩu</label>

                    </div>
                    <input type="password" name="password" placeholder="Mật khẩu ...">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />

                </div>
                <div class="field padding-bottom--24">
                    <input type="submit" name="submit" value="Đăng nhập">
                </div>
            </form>
        </div>
    </div>

</x-guest-layout>
