{{-- adding a success message if it has successfully been added in the db --}}
@if(session()->has('success'))

<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('success')}} {{-- message --}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

@endif  {{-- end if--}}
