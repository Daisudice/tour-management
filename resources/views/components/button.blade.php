@props(['id','kind' => 'normal'])
    <!-- You must be the change you wish to see in the world. - Mahatma Gandhi -->
    @if ($kind === 'normal-submit')
    <button type="submit" class="btn btn-primary px-4 py-3s text-lg">{{$slot}}</button>
    @elseif ($kind === 'delete')
    <button type="button" class="btn btn-warning px-4 py-3s text-lg">Delete</button>
    @elseif ($kind === 'cancel-modal')
    <button type="button" class="btn btn-secondary px-4 py-3 text-lg" data-bs-dismiss="modal" id="cancelModal">{{$slot}}</button>
    @endif

<script>
            document.getElementById('cancelModal').addEventListener('click',function()
                        {
                            location.reload();

                        });

</script>
