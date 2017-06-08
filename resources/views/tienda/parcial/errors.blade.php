@if (count($errors) > 0)
    <div class="alert alert-danger text-center">
        <ul>
            @foreach ($errors->all() as $error)
                <li><a href="" class="fa fa-exclamation-circle"></a> {{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif