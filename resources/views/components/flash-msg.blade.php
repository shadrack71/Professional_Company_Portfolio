@if(session()->has('msg'))
<div class=" alert alert-{{$flashAlert}}">
    <p>
        {{session('msg')}}
    </p>
</div>
@endif