<form action="" id="register-travel-agent">
    @csrf
    <span class="text-2xl">Personal Information {{$use}}</span>
    <div class="flex flex-column py-4">
            <div class="flex flex-row gap-3 py-2">

            <div class="flex flex-column w-6/12">
            <label for="fullname" class="text-sm py-1 text-slate-600">Full Name</label>
            <input type="text" class="w-full rounded border-gray-300 h-8" placeholder="please enter your full name" name="fullname" id="fullname">
            </div>




            </div>

            <div class="flex flex-row gap-4 py-2">


            <div class="flex flex-column w-3/4">
            <label for="street" class="text-sm py-1 text-slate-600">Address</label>
            <input type="text" class="w-full rounded border-gray-300 h-8" placeholder="Please Enter the full address here" name="address" id="address">
            </div>

            <div class="flex flex-column w-1/4">
            <label for="birth-date" class="text-sm py-1 text-slate-600">Birth Date</label>
            <input type="date" class=" h-8 w-full rounded border-gray-300" name="birth-date" id="birth-date">
            </div>


            </div>


            <div class="flex flex-row gap-4 py-2">

                <div id="gendcheck" class="flex flex-column w-2/12">
                <label for="gender-button" class="text-sm py-1 text-slate-600">Gender</label>
                <div class="dropdown">
                <button id="gender-button" class="px-2 py-1 w-full rounded border-gray-300 h-8 dropdown-toggle border-1"
                data-bs-toggle="dropdown" aria-expanded="false">Gender</button>
                <ul class="dropdown-menu cursor-pointer" aria-labelledby="gender-button">
                    <li><a class="dropdown-item genderOption" data-value="male">Male</a></li>
                    <li><a class="dropdown-item genderOption" data-value="female">Female</a></li>
                    <li><a class="dropdown-item genderOption" data-value="non-binary">Non-Binary</a></li>
                    <li><a class="dropdown-item genderOption" data-value="secret">secret</a></li>
                </ul>
                </div>
                <input type="hidden" name="gender" id="gender" value="">
                </div>


            </div>

            <div class="flex flex-row gap-4 py-4">

                <div class="flex flex-column w-2/12">
                <label for="id-type-button" class="text-sm py-1 text-slate-600">ID type</label>
                <button id="id-type-button" class="w-full px-1 py-1 h-8 rounded border-gray-300 dropdown-toggle border-1"
                data-bs-toggle="dropdown" aria-expanded="false">ID Type</button>
                <ul class="dropdown-menu cursor-pointer" aria-labelledby="id-type-button">
                    <li><a class="dropdown-item IdOption" data-value="Drivers ID">Drivers ID</a></li>
                    <li><a class="dropdown-item IdOption" data-value="National ID">National ID</a></li>
                    <li><a class="dropdown-item IdOption" data-value="Postal ID">Postal ID</a></li>

                </ul>
                <input type="hidden" name="id-type" id="id-type" value="">
                </div>

                <div class="flex flex-column w-1/4">
                <label for="id-number" class="text-sm py-1 text-slate-600">ID number</label>
                <input type="text" class=" h-8 w-full rounded border-gray-300" placeholder="please enter ID number" name="id-number" id="id-number">
                </div>
            </div>


            <div class="flex flex-row gap-4 py-4">

                <div class="flex flex-column w-1/2">
                <label for="email" class="text-sm py-1 text-slate-600">Email</label>
                <input type="email" class=" h-8 w-full rounded border-gray-300" placeholder=" please enter email" name="email" id="email">
                </div>

                <div class="flex flex-column w-1/2">
                <label for="contact-no" class="text-sm py-1 text-slate-600">Contact No.</label>
                <input type="text" class="h-8 w-full rounded border-gray-300" placeholder="please enter contact no." name="contact-no" id="contact-no">
                </div>

            </div>

    </div>

    <div class="flex flex-row justify-end py-4 gap-4">
    {{-- @if ($checktype === "registerModal") --}}

        <x-button kind="normal-submit">Register</x-button>
    {{-- @elseif ($checktype === "updateModal")
    <button type="submit" class="btn btn-warning px-4 py-3s text-lg">Delete</button>
    <button type="submit" class="btn btn-primary px-4 py-3s text-lg">Update</button>
    @endif --}}

    <x-button kind="cancel-modal">Cancel</x-button>
    </div>
</form>

<script>
    document.querySelectorAll('.genderOption').forEach(function (item){
        item.addEventListener('click',function(event){
            console.log('genderOption.value');
            var optionGender = event.target.getAttribute('data-value');
             document.getElementById('gender-button').innerText = optionGender;
             document.getElementById('gender').value = optionGender;
             console.log(document.getElementById('gender').value);
        });
    });



    document.querySelectorAll('.IdOption').forEach(function(item){
        item.addEventListener('click',function(event){
            console.log('sdfdf');
            var optionId = event.target.getAttribute('data-value');
            document.getElementById('id-type-button').innerText = optionId;
            document.getElementById('id-type').value = optionId;
        });
    });
</script>

<script>
    document.getElementById('register-travel-agent').addEventListener('submit',function(event)
        {
            event.preventDefault();
            console.log('sdfsd');
            var fullName  = document.getElementById('fullname');
            var agecheck = document.getElementById('birth-date');
            var addresscheck = document.getElementById('address');
            var sexcheck = document.getElementById('gender');
            var idtype = document.getElementById('id-type');
            var idnumber = document.getElementById('id-number');
            var emailcheck = document.getElementById('email');
            var mobilecheck = document.getElementById('contact-no');
            console.log(fullName.value);
            console.log(agecheck.value);
            console.log(addresscheck.value);
            console.log(sexcheck.value);
            console.log(idtype.value);
            console.log(idnumber.value);
            console.log(emailcheck.value);
            console.log(mobilecheck.value);


            // validation

            if(fullName.value === ""){

                            console.log('fullnamegoods');
                            const label = document.querySelector('label[for="fullname"]');
                            label.classList.remove('text-slate-600');
                            label.classList.add('text-red-500');
                            fullName.style.borderColor =  "red";
                            fullName.classList.add('placeholder:text-red-500');
                            fullName.placeholder = "empty";
            }



            if(addresscheck.value === "")
            {
                console.log('addressgoods');
                const label = document.querySelector('label[for="street"]');
                label.classList.remove('text-slate-600');
                label.classList.add('text-red-500');
                addresscheck.style.borderColor = "red";
                addresscheck.classList.add('placeholder:text-red-500');
                addresscheck.placeholder = "empty";
            }

            if(agecheck.value === ""){

                console.log('agecheck');
                const label = document.querySelector('label[for="birth-date"]');
                label.classList.remove('text-slate-600');
                label.classList.add('text-red-500');
                agecheck.style.borderColor = "red";
                agecheck.classList.add('text-red-500');

            }


        if(sexcheck.value === ""){

            console.log('sexgoods');
            const label = document.querySelector('label[for="gender-button"]');
            label.classList.remove('text-slate-600');
            label.classList.add('text-red-500');
            document.getElementById('gender-button').classList.remove('border-gray-300');
            document.getElementById('gender-button').classList.add('border-red-500');
            document.getElementById('gender-button').classList.add('text-red-500');


            }

            if(idtype.value === "")
            {
            console.log('idtype-goods');
            const label = document.querySelector('label[for="id-type-button"]');
            label.classList.remove('text-slate-600');
            label.classList.add('text-red-500');
            document.getElementById('id-type-button').classList.remove('border-gray-300');
            document.getElementById('id-type-button').classList.add('border-red-500');
            document.getElementById('id-type-button').classList.add('text-red-500');

            }

            if(idnumber.value === "")
            {
            console.log('idnumbergoods');
            const label = document.querySelector('label[for="id-number"]');
            label.classList.remove('text-slate-600');
            label.classList.add('text-red-500');
            idnumber.classList.remove('border-gray-300');
            idnumber.classList.add('border-red-500');
            idnumber.classList.add('placeholder-red-500');
            idnumber.placeholder = "empty";

            }


            if(emailcheck.value === "")
            {

            console.log('emailgoods');
            const label = document.querySelector('label[for="email"]');
            label.classList.remove('text-slate-600');
            label.classList.add('text-red-500');
            emailcheck.classList.remove('border-gray-300');
            emailcheck.classList.add('border-red-500');
            emailcheck.classList.add('placeholder-red-500');
            emailcheck.placeholder = "empty";
            }

            if(mobilecheck.value === "")
            {
            console.log('dmobilegoods');
            const label = document.querySelector('label[for="contact-no"]');
            label.classList.remove('text-slate-600');
            label.classList.add('text-red-500');
            mobilecheck.classList.remove('border-gray-300');
            mobilecheck.classList.add('border-red-500');
            mobilecheck.classList.add('placeholder-red-500');
            mobilecheck.placeholder = "empty";
            }


            let formData = new FormData(this);

$.ajax({
            url:'{{ route('register-travel-agent') }}' ,
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
            data: formData,
            processData: false,
            contentType: false,
            success: function(data) {

                location.reload();
                console.log('gwaposs');
                console.log(data); // Log server response
            },
    error: function(xhr, status, error) {
    console.error(error); // Log any errors
        }
        });


        });

</script>

{{-- update script --}}
{{-- submit register or update --}}
<script>

document.getElementById('register-travel-agent').addEventListener('submit',function(event)
{

    });
</script>


