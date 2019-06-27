@if ($errors->any())
    <div class="uk-alert-danger" data-uk-alert>
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif