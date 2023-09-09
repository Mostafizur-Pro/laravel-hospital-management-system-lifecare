<style>
        .card {
            background-color: #f0f0f0;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s, color 0.3s;
            
        }

        .card:hover  {
            background-color: #3498db; /* Change to the desired background color on hover */
            color: white; /* Change to the desired text color on hover */
        }
        
        /* Add your existing CSS classes for other styles here */

        /* Rest of your CSS styles for the card */
    </style>
<div class="text-center pt-20 bg-base-200">
    <p class="text-gray-400">OUR Pricing</p>
    <h1 class="text-3xl font-bold">Pricing Plan</h1>
    <div class="flex justify-center">
        <img src="{{ asset('assets/home/our-medical/lifeline.png') }}" class="w-20 rounded-lg items-center" />
    </div>
</div>

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 justify-center mx-auto gap-10 bg-base-200">
    <!-- image 1 -->
    <div class="card bg-base-100 shadow-xl hover:-top-10">
        <div class="card-body">
            <div class="text-center p-10 ">
                <h2 class="text-4xl font-bold ">$299</h2>
                <p>Per Month</p>
            </div>
            <div class="text-center my-3">
                <h2 class="text-3xl pb-2 font-bold ">Cardiology</h2>
                <hr />
            </div>
            <div>
                <h1 class="text-lg pb-2"><span class="text-2xl text-blue-400">√</span> Functional Diagnostics</h1>
                <hr class="border-dashed  border-gray-200" />
                <h1 class="text-lg pb-2"><span class="text-2xl text-blue-400">√</span> Allergens Drugs</h1>
                <hr class="border-dashed  border-gray-200" />
                <h1 class="text-lg pb-2"><span class="text-2xl text-blue-400">√</span> Pollens Allergens</h1>
                <hr class="border-dashed  border-gray-200" />
                <h1 class="text-lg pb-2"><span class="text-2xl text-blue-400">√</span> Food Allergens</h1>
            </div>
            <div class="card-actions justify-center">
                <button class="btn btn-outline border-blue-400 hover:bg-blue-200  text-lg">Get Offer</button>
            </div>
        </div>
    </div>
    <!-- image 2 -->
    <div class="card bg-base-100 shadow-xl hover:-top-10">
        <div class="card-body">
            <div class="text-center p-10 ">
                <h2 class="text-4xl font-bold ">$120</h2>
                <p>Per Month</p>
            </div>
            <div class="text-center my-3">
                <h2 class="text-3xl pb-2 font-bold ">Detal Care</h2>
                <hr />
            </div>
            <div>
                <h1 class="text-lg pb-2"><span class="text-2xl text-blue-400">√</span> Tooth implantation</h1> 
                <hr class="border-dashed  border-gray-200" />
                <h1 class="text-lg pb-2"><span class="text-2xl text-blue-400">√</span> Lase Dentistry</h1>
                <hr class="border-dashed  border-gray-200" />
                <h1 class="text-lg pb-2"><span class="text-2xl text-blue-400">√</span> Tests and Treatment</h1>
                <hr class="border-dashed  border-gray-200" />
                <h1 class="text-lg pb-2"><span class="text-2xl text-blue-400">√</span> Medical Consultation</h1>
            </div>
            <div class="card-actions justify-center">
                <button class="btn btn-outline border-blue-400 hover:bg-blue-200  text-lg">Get Offer</button>
            </div>
        </div>
    </div>
    <!-- image 3 -->
    <div class="card bg-base-100 shadow-xl hover:-top-10">
        <div class="card-body">
            <div class="text-center p-10 ">
                <h2 class="text-4xl font-bold ">$150</h2>
                <p>Per Month</p>
            </div>
            <div class="text-center my-3">
                <h2 class="text-3xl pb-2 font-bold ">Body Checkup</h2>
                <hr />
            </div>
            <div>
                <h1 class="text-lg pb-2"><span class="text-2xl text-blue-400">√</span> Tests and Treatment</h1>
                <hr class="border-dashed  border-gray-200" />
                <h1 class="text-lg pb-2"><span class="text-2xl text-blue-400">√</span> Tests and Treatment</h1>
                <hr class="border-dashed  border-gray-200" />
                <h1 class="text-lg pb-2"><span class="text-2xl text-blue-400">√</span> Laboratory Services</h1>
                <hr class="border-dashed  border-gray-200" />
                <h1 class="text-lg pb-2"><span class="text-2xl text-blue-400">√</span> Food Allergens</h1>
            </div>
            <div class="card-actions justify-center">
                <button class="btn btn-outline border-blue-400 hover:bg-blue-200  text-lg">Get Offer</button>
            </div>
        </div>
    </div>
    <!-- image 4 -->
    <div class="card bg-base-100 shadow-xl hover:-top-10">
        <div class="card-body">
            <div class="text-center p-10 ">
                <h2 class="text-4xl font-bold ">$100</h2>
                <p>Per Month</p>
            </div>
            <div class="text-center my-3">
                <h2 class="text-3xl pb-2 font-bold ">Blood Test</h2>
                <hr />
            </div>
            <div>
                <h1 class="text-lg pb-2"><span class="text-2xl text-blue-400">√</span> Blood Test Service</h1>
                <hr class="border-dashed  border-gray-200" />
                <h1 class="text-lg pb-2"><span class="text-2xl text-blue-400">√</span> Safety Training Tips</h1>
                <hr class="border-dashed  border-gray-200" />
                <h1 class="text-lg pb-2"><span class="text-2xl text-blue-400">√</span> Tests and Treatment</h1>
                <hr class="border-dashed  border-gray-200" />
                <h1 class="text-lg pb-2"><span class="text-2xl text-blue-400">√</span> Food Allergens</h1>
            </div>
            <div class="card-actions justify-center">
                <button class="btn btn-outline border-blue-400 hover:bg-blue-200  text-lg">Get Offer</button>
            </div>
        </div>
    </div>
</div>
