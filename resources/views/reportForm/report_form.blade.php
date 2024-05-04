@extends('master')
@section('content')
    <div class="main">
        <div class="flex justify-center items-center">
            <div class="w-full lg:w-[50%] h-screen bg-[#F4F4F4] p-8 mt-20 mb-15 ">
                <h2 class="font-bold text-xl text-blue-600 mb-5">Report Incident</h2>
                {{-- input 1 --}}

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-7 mb-8">

                    <div>
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

                {{-- input 1 --}}
                
                {{-- incident information --}}

                <div class="w-full h-8 bg-blue-600 text-white font-bold  text-center pt-0.5 mb-8">Incident Information</div>

                {{-- end of incident information --}}



                 {{-- input 2 --}}

                 <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-7 mb-8">

                    <div>
                        <label for="first-name" class="block text-sm font-semibold leading-6 text-black">INCIDENT TYPE</label>
                        <div class="mt-2.5">
                            <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm shadow-slate-500 ring-1 ring-inset ring-slate-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div>
                        <label for="first-name" class="block text-sm font-semibold leading-6 text-black">DATE OF INCIDENT</label>
                        <div class="mt-2.5">
                            <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm shadow-slate-500 ring-1 ring-inset ring-slate-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    
                </div>

                {{-- input 2 --}}


                {{-- input 3 --}}

                <div class="grid grid-cols-1 lg:grid-cols-1 mb-8">

                    <div>
                        <label for="first-name" class="block text-sm font-semibold leading-6 text-black">LOCATION OF INCIDENT</label>
                        <div class="mt-2.5">
                            <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm shadow-slate-500 ring-1 ring-inset ring-slate-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                  

                    
                </div>

                {{-- input 3 --}}


                {{-- inpit incident description --}}

                <div class="grid grid-cols-1 lg:grid-cols-1 mb-8">

                    <div>
                        <label for="first-name" class="block text-sm font-semibold leading-6 text-black">LOCATION OF INCIDENT</label>
                        <div class="mt-2.5">
                            <textarea placeholder="Bio" rows="4" class="textarea textarea-bordered textarea-sm w-full max-w-full rounded-md  text-gray-900 shadow-sm shadow-slate-500 ring-1 ring-inset ring-slate-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400" ></textarea>
                        </div>
                    </div>
                  

                    
                </div>

                {{-- inpit incident description --}}


            </div>
        </div>
    </div>
@endsection
