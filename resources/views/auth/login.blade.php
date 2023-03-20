@extends('layouts.master')
@section('content') 
<div class="w-full max-w-xs mx-auto w-10 mt-9">
    <div class="card bg-gray-100">
        <div class="card-body">
            <form class="w-full max-w-sm" action="{{route("login")}}" method="POST">
                @csrf
                <div class="md:flex md:items-center mb-6">
                  <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
                      Email
                    </label>
                  </div>
                  <div class="md:w-2/3">
                    <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-password" type="email" name="email" value="{{ old('email') }}">
                    @error('email')
                        <span class="text-red-500 font-semibold">
                            {{ $message }}
                        </span>
                    @enderror
                  </div>
                </div>
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
                        Password
                      </label>
                    </div>
                    <div class="md:w-2/3">
                      <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-password" type="password" name="password" value="{{ old('password') }}">
                        @error('password')
                            <span class="text-red-500 font-semibold">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                  </div>
                <div class="md:flex md:items-center">
                  <div class="md:w-1/3"></div>
                  <div class="md:w-2/3">
                    <button class="shadow bg-purple-400 hover:bg-purple-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded-md float-right mt-3" type="submit">
                        Login
                    </button>
                    <a href="{{route('password.request')}}" class="btn text-xs mt-3">Forget your password?</a>
                  </div>
                </div>
              </form>
        </div>
    </div>
</div>
@endsection