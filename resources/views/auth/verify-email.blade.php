@extends('layouts.master')
@section('content') 
<div class="w-full max-w-xs mx-auto w-10 mt-9">
    <div class="card bg-gray-100">
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success">
                    Email Verification succesfully sent
                </div>
            @endif
            Before proceeding, please check your email for verification.
            Or
            <form class="w-full max-w-sm" action="{{route('verification.send')}}" method="POST">
                <div class="md:flex md:items-center">
                  <div class="md:w-1/3"></div>
                  <div class="md:w-2/3">
                    @csrf
                    <button class="shadow bg-purple-400 hover:bg-purple-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded mt-3" type="submit">
                        {{_("click here to request")}}
                    </button>
                  </div>
                </div>
              </form>
        </div>
    </div>
</div>
@endsection