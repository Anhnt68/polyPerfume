<x-guest-layout>
    <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
        {{-- <img src="{{ asset('assets/images/logo.png') }}" alt=""> --}}
        <h1>Chào mừng bạn đến với trang admin</h1>
    </div>
    <div class="formbg">
        <div class="formbg-inner padding-horizontal--48">
            <span class="padding-bottom--15">Đăng kí</span>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <!-- Name -->
                <div class="field padding-bottom--24">
                    <label for="email">Name</label>
                    <input type="text" name="name" placeholder="Name ..." value="{{ old('name') }}">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" style="color: red" />
                </div>
                <!-- Email Address -->
                <div class="field padding-bottom--24">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Email ..." value="{{ old('email') }}">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" style="color: red" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <div class="field padding-bottom--24">
                        <label for="email">Password</label>
                        <input type="password" name="password" placeholder="Password ..." value="{{ old('password') }}">
                        <x-input-error :messages="$errors->get('password')" class="mt-2" style="color: red" />
                    </div>
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <div class="field padding-bottom--24">
                        <label for="email">Confirm Password</label>
                        <input type="password" name="password_confirmation" placeholder="Confirm Password ..."
                            value="{{ old('password_confirmation') }}">
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" style="color: red" />
                    </div>
                </div>
                <div class="mt-4">
                    <div class="field padding-bottom--24">
                        <label for="email">Address</label>
                        <input type="text" name="address" placeholder="Address ..." value="{{ old('address') }}">
                        <x-input-error :messages="$errors->get('address')" class="mt-2" style="color: red" />
                    </div>
                </div>
                <div class="mt-4">
                    <div class="field padding-bottom--24">
                        <label for="email">Phone</label>
                        <input type="text" name="phone" placeholder="Phone" value="{{ old('phone') }}">
                        <x-input-error :messages="$errors->get('phone')" class="mt-2" style="color: red" />
                    </div>
                </div>
                <div class="mt-4">
                    <input id="phone" class="block mt-1 w-full" type="hidden" name="role" value="1" />
                </div>

                <div class="flex items-center justify-end mt-4">

                    <div class="field padding-bottom--24">
                        <input type="submit" name="submit" value="Đăng kí">
                    </div>
                    {{-- <x-primary-button class="ml-4 ">
                        {{ __('Register') }}
                    </x-primary-button> --}}
                </div>
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('loginUser') }}">
                    {{ __('Bạn đã có tài khoản rồi?') }}
                </a>
            </form>
        </div>
    </div>
</x-guest-layout>
