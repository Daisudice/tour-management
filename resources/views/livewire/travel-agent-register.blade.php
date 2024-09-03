<form action="" wire:submit="createAccount">
    @csrf
    <span class="text-2xl">Personal Information</span>
    <div class="flex flex-column py-4">
            <div class="flex flex-row gap-3 py-2">

            <div class="flex flex-column w-6/12">
            <label for="fullname" class="text-sm py-1 text-slate-600">Full Name</label>
            <input type="text" class="w-full rounded border-gray-300 h-8" placeholder="please enter your full name"wire:model="fullname"  name="fullname" id="fullname">
            </div>




            </div>

            <div class="flex flex-row gap-4 py-2">


            <div class="flex flex-column w-3/4">
            <label for="street" class="text-sm py-1 text-slate-600">Address</label>
            <input type="text" class="w-full rounded border-gray-300 h-8" placeholder="Please Enter the full address here" wire:model="address" name="address" id="address">
            </div>

            <div class="flex flex-column w-1/4">
            <label for="birth-date" class="text-sm py-1 text-slate-600">Birth Date</label>
            <input type="date" class=" h-8 w-full rounded border-gray-300" wire:model='date' name="birth-date" id="birth-date">
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
