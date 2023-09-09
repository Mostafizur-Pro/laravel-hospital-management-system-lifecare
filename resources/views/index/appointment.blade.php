<div class="grid grid-cols-2 justify-center mx-auto gap-10 ">
    <!-- Card 1 -->
    <form class="card card-compact hover:bg-white pt-20 max-w-md mx-auto  rounded-lg shadow-lg" method="POST">
    <div class="mb-4">
        <label for="name" class="block text-gray-700 font-semibold mb-2">Your Name</label>
        <input type="text" id="name" name="name" required
            class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
    </div>

    <div class="mb-4">
        <label for="email" class="block text-gray-700 font-semibold mb-2">Your Email *</label>
        <input type="email" id="email" name="email" required
            class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
    </div>

    <div class="mb-4">
        <label for="phone" class="block text-gray-700 font-semibold mb-2">Your Phone</label>
        <input type="tel" id="phone" name="phone"
            class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
    </div>

    <div class="mb-4">
        <label for="patient_info" class="block text-gray-700 font-semibold mb-2">Tell us about Patient</label>
        <textarea id="patient_info" name="patient_info" rows="4"
            class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500"></textarea>
    </div>

    <button type="submit"
        class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
        Submit Query
    </button>
</form>




    <!-- Card 2 -->
    <div class="card card-compact hover:bg-white  pt-20">
        <!-- <figure><img class="w-20" src="{{ url('assets/about/image3.png') }}" alt="Medical Specialties" /></figure> -->
        <div class="card-body text-left">
            <p class="text-blue-400 font-semibold">Need a Doctor for Check-up</p>
            <h2 class="text-3xl font-bold">Just Make an Appointment
                and You’re Done!</h2>
            <p class="text-gray-500 mt-5">Get Your Quote or Call :</p>
            <h2 class="text-2xl font-bold">+880 1950 165017</h2>
            <h2 class="text-4xl text-blue-900 font-bold mt-8">Opening Hours</h2>
            <div class="text-lg w-5/6">
                <div class="flex mt-2">
                    <p class="flex items-center"><img class="w-5 h-5 mr-2" src="{{ url('assets/about/clock.png') }}" alt="Years of Experience" /> Monday - Thursday</p>
                    <p class="text-end">08:00 - 20:00</p>
                </div>
                <hr class="border-dashed my-2 border-gray-300" />
                <div class="flex ">
                    <p class="flex items-center"><img class="w-5 h-5 mr-2" src="{{ url('assets/about/clock.png') }}" alt="Years of Experience" />Friday</p>
                    <p class="text-end">09:00 - 19:00</p>
                </div>
                <hr class="border-dashed my-2 border-gray-300" />
                <div class="flex ">
                    <p class="flex items-center"><img class="w-5 h-5 mr-2" src="{{ url('assets/about/clock.png') }}" alt="Years of Experience" />Saturday - Thursday</p>
                    <p class="text-end">09:00 - 18:00</p>
                </div>
                <hr class="border-dashed my-2 border-gray-300" />
                <div class="flex ">
                    <p class="flex items-center"><img class="w-5 h-5 mr-2" src="{{ url('assets/about/clock.png') }}" alt="Years of Experience" />Sunday - Thursday</p>
                    <p class="text-end">09:00 - 18:00</p>
                </div>
            </div>
        </div>
    </div>


</div>