@extends('master')
@section('content')

<div class="main">
    <div class="flex justify-center items-center">
        <div class="w-full lg:w-[40%] h-1/2 bg-[#f2f1f1] p-8 mt-20 mb-20 shadow-2xl sha rounded-xl">
            <h2 class="font-bold text-4xl text-blue-600 mb-10">Contact Us</h2>
            {{-- input 1 --}}

            <div class="grid grid-cols-1 lg:grid-cols-1 gap-x-7 mb-8 pe-5">

                <div class="mb-5">
                    <label for="first-name" class="block text-sm font-semibold leading-6 text-black">REPORTED BY</label>
                    <div class="mt-2.5">
                        <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm shadow-slate-500 ring-1 ring-inset ring-slate-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div>
                    <label for="first-name" class="block text-sm font-semibold leading-6 text-black">DATE OF REPORT</label>
                    <div class="mt-2.5">
                        <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm shadow-slate-500 ring-1 ring-inset ring-slate-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6">
                    </div>
                </div>

                
            </div>

            <button class="btn bg-blue-500 py-2 px-12 mx-24 lg:mx-[190px] my-5 text-white">Submit</button>

            {{-- input 1 --}}
            
            


        </div>
    </div>
</div>
@endsection