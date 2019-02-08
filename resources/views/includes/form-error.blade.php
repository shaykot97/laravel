{{-- Show alert if has any --}}

<div class="errors" style="margin-top:50px;">
    @if (count($errors) > 0)
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger"> {{ $error }} </div>
        @endforeach
    @endif
</div>