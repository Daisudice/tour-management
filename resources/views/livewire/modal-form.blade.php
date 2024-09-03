<div class="modal fade" tabindex="-1" aria-labelledby="exampleModal Label" aria-hidden="true" id="{{$modalId}}">
    <!-- Modal content goes here -->

    <div class="modal-dialog modal-xl">
        <div class="modal-content h-auto w-3/4">
          <div class="modal-body  overflow-y-auto">
                @if($modalId === "registerModal")
                <span class="px-4 font-bold">Register User</span>
                @elseif ($modalId === "updateModal")
                <span class="px-4 font-bold">Update User</span>
                @endif

                    <div class="px-4 py-4 flex flex-column">

                        @if($modalId === "registerModal")
                        <x-register-script/>
                        @elseif ($modalId === "updateModal")
                        <livewire:travel-agent-update/>

                        @endif

                    </div>


          </div>
        </div>
    </div>
</div>

