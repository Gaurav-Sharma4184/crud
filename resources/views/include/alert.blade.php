@if(session('status'))
    <div class="alert alert-success">{{ session('status') }}</div>
@endif

@if(count($errors))
<div class="alert alert-danger">
    <strong>Please fill the mandatory fields.</strong>
    <ul>
    @foreach ($errors->all() as $error )
    <li>
      {{$error}}
    </li>
    @endforeach
    </ul>
</div>
@endif