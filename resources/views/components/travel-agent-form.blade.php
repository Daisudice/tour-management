{{-- @props(['modalid','value'  => 'defaultValue'])
@php
    $checktype = $modalid;
    $checkId = $value;
@endphp

<div class="modal fade" tabindex="-1" aria-labelledby="exampleModal Label" aria-hidden="true" id="{{$modalid}}">
    <!-- Modal content goes here -->
    <div class="modal-dialog modal-xl">
        <div class="modal-content h-auto w-3/4">
          <div class="modal-body  overflow-y-auto">
                @if($checktype === "registerModal")
                <span class="px-4 font-bold">Register User</span>
                @elseif ($checktype === "updateModal")
                <span class="px-4 font-bold">Update User</span>
                @endif

                    <div class="px-4 py-4 flex flex-column">

                        @if($checktype === "registerModal")
                        <x-register-script/>
                        @elseif ($checktype === "updateModal")
                        <input type="hidden" value="$value" id="sle">
                        <x-update-travel-agent :value="$checkId"/>

                        @endif

                    </div>


          </div>
        </div>
    </div>


</div>
<script>
console.log(document.getElementById('sle'));
</script>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script> --}}

