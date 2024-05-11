@extends('master')
@section('content')
    <div class="main">
        <form action="{{ route('store.form') }}" method="post">
            @csrf
            <div class="flex justify-center items-center">
                <div class="w-full lg:w-[50%] h-auto bg-[#f04646] p-8 mt-20 mb-32 ">
                    <h2 class="font-bold text-xl text-blue-600 mb-5">Report Incident</h2>
                    {{-- input 1 --}}

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-7 mb-8">

                        <div>
                            <label for="first-name" class="block text-sm font-semibold leading-6 text-black">REPORTED
                                BY</label>
                            <div class="mt-2.5">
                                <input type="text" name="report_by" id="first-name" autocomplete="given-name"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm shadow-slate-500 ring-1 ring-inset ring-slate-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div>
                            <label for="first-name" class="block text-sm font-semibold leading-6 text-black">DATE OF
                                REPORT</label>
                            <div class="mt-2.5">
                                <input type="date" name="report_date" id="first-name" autocomplete="given-name"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm shadow-slate-500 ring-1 ring-inset ring-slate-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6">
                            </div>
                        </div>


                    </div>

                    {{-- input 1 --}}

                    {{-- incident information --}}

                    <div class="w-full h-8 bg-blue-600 text-white font-bold  text-center pt-0.5 mb-8">Incident Information
                    </div>

                    {{-- end of incident information --}}



                    {{-- input 2 --}}

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-7 mb-8">

                        <div>

                            <label for="first-name" class="block text-sm font-semibold leading-6 text-black">INCIDENT
                                TYPE</label>

                            <select name="incident_type"
                                class="select select-bordered w-full max-w-xs mt-2.5   mb-5  text-gray-900 shadow-sm shadow-slate-500 ring-1 ring-inset ring-slate-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6 rounded-md">
                                <option disabled selected>Who shot first?</option>
                                <option value="cyber_fraud">Cyber Fraud</option>
                                <option value="identity_theft">Identity Theft</option>
                                <option value="vandalism">Vandalism</option>
                                <option value="shoplifting">Shoplifting</option>
                                <option value="embezzlement">Embezzlement</option>
                                <option value="drug_possession">Drug Possession</option>
                                <option value="drunk_driving">Drunk Driving</option>
                                <option value="domestic_violence">Domestic Violence</option>
                                <option value="robbery">Robbery</option>
                                <option value="art_theft">Art Theft</option>
                                <option value="other">Other (Specify)</option>
                            </select>

                            <div id="other_crime_input" style="display: none;" class="mb-5">
                                <label for="other_crime_description"
                                    class="block text-sm font-semibold leading-6 text-black">Describe the Crime:</label>
                                <input type="text" id="other_crime_description" name="other_crime_description">
                            </div>


                        </div>

                        <div>
                            <label for="first-name" class="block text-sm font-semibold leading-6 text-black">DATE OF
                                INCIDENT</label>
                            <div class="mt-2.5">
                                <input type="date" name="date_incident" id="first-name" autocomplete="given-name"
                                    class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm shadow-slate-500 ring-1 ring-inset ring-slate-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6">
                            </div>
                        </div>


                    </div>

                    {{-- input 2 --}}


                    {{-- input 3 --}}

                    <div class="grid grid-cols-1 lg:grid-cols-2 mb-8">

                        <div class="mb-5">
                            <label for="first-name"
                                class="block text-sm font-semibold leading-6 text-black">PROVINCE</label>
                            <div class="mt-2.5">
                                <input type="text" name="province" id="first-name" autocomplete="given-name"
                                    class="block w-[90%] rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm shadow-slate-500 ring-1 ring-inset ring-slate-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="ms-5">
                            <label for="first-name" class="block text-sm font-semibold leading-6 text-black">LOCATION OF
                                INCIDENT</label>
                            <div class="mt-2.5">
                                <input type="text" name="incident_location" id="first-name" autocomplete="given-name"
                                    class="block w-[99%] rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm shadow-slate-500 ring-1 ring-inset ring-slate-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6">
                            </div>
                        </div>



                    </div>

                    {{-- input 3 --}}

                    <input type="hidden" id="latitude" name="lat">
                    <input type="hidden" id="longitude" name="long">


                    {{-- inpit incident description --}}

                    <div class="grid grid-cols-1 lg:grid-cols-1 mb-12">

                        <div class="mb-10">
                            <label for="first-name" class="block text-sm font-semibold leading-6 text-black">LOCATION OF
                                INCIDENT</label>
                            <div class="mt-2.5">
                                <textarea placeholder="Bio" rows="4" name="incident_description"
                                    class="textarea textarea-bordered textarea-sm w-full max-w-full rounded-md  text-gray-900 shadow-sm shadow-slate-500 ring-1 ring-inset ring-slate-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400"></textarea>
                            </div>
                        </div>



                        <div id="map" style="height: 500px;"></div>



                        <button type="submit"
                            class="btn bg-blue-500 py-2 px-16 mx-20 lg:mx-[190px]  text-white">Submit</button>

                    </div>

                    {{-- inpit incident description --}}



                </div>



            </div>
        </form>
    </div>

    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoibGVhbmdzaXYiLCJhIjoiY2x3MG1kNHhlMDJoazJrcXQxOXd5ZWxreCJ9.nuX5dafVJ73pbiOWKd21hQ';

        // Get the user's current location
        navigator.geolocation.getCurrentPosition((position) => {
            const latitude = position.coords.latitude;
            const longitude = position.coords.longitude;

            // Create a new map centered on the user's location
            const map = new mapboxgl.Map({
                container: 'map',
                style: 'mapbox://styles/mapbox/outdoors-v12',
                center: [longitude, latitude],
                zoom: 14
            });


            // Map full screen
            map.addControl(new mapboxgl.FullscreenControl());


            const geocoder = new MapboxGeocoder({
                accessToken: mapboxgl.accessToken, // Set the access token  
                mapboxgl: mapboxgl, // Set the mapbox-gl instance  
                zoom: 16, // Set the zoom level for geocoding results  
                placeholder: 'Enter an address or place name', // This placeholder text will display in the search bar  
                marker: false  // Disable the marker
            });
            // Add the geocoder to the map  
            map.addControl(geocoder, 'top-left'); // Add the search box to the top left


            // Create a marker at the user's location
            const marker = new mapboxgl.Marker({
                    draggable: true
                })
                .setLngLat([longitude, latitude])
                .addTo(map);

            // Add event listeners for drag and click
            marker.on('dragend', (e) => {
                const lngLat = e.target.getLngLat();
                console.log('New latitude:', lngLat.lat);
                console.log('New longitude:', lngLat.lng);
                document.getElementById('latitude').value = lngLat.lat;
                document.getElementById('longitude').value = lngLat.lng;
            });

            marker.on('click', (e) => {
                const lngLat = e.lngLat;
                console.log('Latitude:', lngLat.lat);
                console.log('Longitude:', lngLat.lat);
                document.getElementById('latitude').value = lngLat.lat;
                document.getElementById('longitude').value = lngLat.lng;
            });

            // Add event listener for map load
            map.on('load', () => {
                const lngLat = marker.getLngLat();
                console.log('Initial latitude:', lngLat.lat);
                console.log('Initial longitude:', lngLat.lng);
                document.getElementById('latitude').value = lngLat.lat;
                document.getElementById('longitude').value = lngLat.lng;
            });

            // Add event listener for map click
            map.on('click', (e) => {
                const lngLat = e.lngLat;
                marker.setLngLat(lngLat);
                console.log('New latitude:', lngLat.lat);
                console.log('New longitude:', lngLat.lng);
                document.getElementById('latitude').value = lngLat.lat;
                document.getElementById('longitude').value = lngLat.lng;
            });
        });
    </script>
@endsection
