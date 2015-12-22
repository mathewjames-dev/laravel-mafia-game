@if ($errors->any())
    <ul class="alert alert-danger" style="margin-left: 100px; margin-right: 100px;">
        @foreach ($errors->all() as $error)
            <li>{{ $error  }}</li>
        @endforeach
    </ul>
@endif

<style>
    ul{
        list-style-type: circle;
        list-style-position:inside;
    }
</style>