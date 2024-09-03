<div class="bg-gray-800 h-screen text-white w-64 flex-shrink-0 mx-0 transform transition-transform duration-300 ease-in-out position-fixed me-40 mt-16">
    <ul class="py-2">
        <a href="{{route('admin-dashboard')}}"><li class="px-4 py-2 hover:bg-gray-700 default:bg-red-900 text-sm"><i class="fas fa-home mr-2"></i>Dash Board</li></a>
       <div class="drop-em">
      <li class="px-4 py-2 hover:bg-gray-700" id="drope"><a class="hover:cursor-pointer dropdown-toggle" id="dropEmployee"><i class="fas fa-clock mr-2 text-sm"></i>Employee Management</a></li>
            <ul class="dropdown-emp ps-12 text-sm hidden" aria-labelledby=" id="dropE">
                <a href="{{route('admin-travel-agent')}}"><li class="emp-item hover:bg-gray-700 px-4 py-2">Travel Agent</li></a>
                <li class="emp-item hover:bg-gray-700 px-4 py-2">Vehicle Operators</li>
                <li class="emp-item hover:bg-gray-700 px-4 py-2">Schedules</li>
            </ul>
        </div>
        <div>
      <li class="px-4 py-2 hover:bg-gray-700" id="dropB"><a class=" hover:cursor-pointer dropdown-toggle" id="dropBooking"><i class="fas fa-comment-dots mr-2 text-sm"></i>Booking Management</a></li>
      <ul class="dropdown-book ps-12 text-sm hidden" id="dropE">
        <li class="booking-item hover:bg-gray-700 px-4 py-2">Manage Package</li>
        <li class="booking-item hover:bg-gray-700 px-4 py-2">Manage Accommodation</li>
        <li class="booking-item hover:bg-gray-700 px-4 py-2">Manage Traveler</li>
        <li class="booking-item hover:bg-gray-700 px-4 py-2">Set Bookings</li>
        <li class="booking-item hover:bg-gray-700 px-4 py-2">Monitor Bookings</li>
        <li class="booking-item hover:bg-gray-700 px-4 py-2">Monitor Payments</li>
        <li class="booking-item hover:bg-gray-700 px-4 py-2">Booking History</li>
        <li class="booking-item hover:bg-gray-700 px-4 py-2">Cancelled Appointments</li>
    </div>
    </ul>
  </div>

  <script>
    document.getElementById('dropEmployee').addEventListener('click',function(){

          $('#drope').next('.dropdown-emp').slideToggle();
         });

    document.getElementById('dropBooking').addEventListener('click',function(){

      $('#dropB').next('.dropdown-book').slideToggle();
    });
  </script>
