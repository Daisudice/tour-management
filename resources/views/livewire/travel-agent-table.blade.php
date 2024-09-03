<table class="min-w-full divide-y divide-gray-200">
    <thead class="bg-gray-50">
        <tr>
            <th scope="col" class="lg:px-16 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
            <th scope="col" class="lg:px-24 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
            <th scope="col" class="lg:px-28 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Address</th>
            <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Employee Type</th>
            <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Contact No.</th>
            <th scope="col" class="px-5 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">action</th>

        </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
        @foreach ($user as $users)
        <tr>

        <td class="px-4 py-3 whitespace-nowrap text-xs text-center tt">{{$users->id}}</td>
        <td class="px-2 py-3 whitespace-nowrap text-xs text-center tt">{{$users->name}}</td>
        <td class="px-5 py-3 whitespace-nowrap text-xs text-center tt">{{$users->address}}</td>
        <td class="px-3 py-3 whitespace-nowrap text-xs text-center tt">{{$users->type}}</td>
        <td class="px-4 py-3 whitespace-nowrap text-xs text-center tt">{{$users->contact_no}}</td>
        <td class="px-4 py-3 whitespace-nowrap text-xs text-center tt"> <button class="text-center bg-blue-500 text-white px-2 py-1 rounded find"
            data-bs-toggle="modal" data-bs-target="#updateModal" name="find" wire:click.prevent="selectTravelAgent({{$users->id}})">edit profile</button></td>

    </tr>

        @endforeach
        <livewire:modal-form modalId="updateModal"/>
        <input type="hidden" id="selectID" value="">
        <x-travel-agent-form modalid="updateModal" id="selec"/>
    </tbody>
</table>
