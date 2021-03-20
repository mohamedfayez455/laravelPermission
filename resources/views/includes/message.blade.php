@if (session('success'))

    <script>
        new Noty({
            type: 'success',
            layout: 'topRight',
            text: "{{ session('success') }}",
            timeout: 2000,
            killer: true
        }).show();
    </script>

@endif

@if (session('error'))

    <script>
        new Noty({
            type: 'error',
            layout: 'topRight',
            text: "{{ session('error') }}",
            timeout: 2000,
            killer: true
        }).show();
    </script>

@endif


@if (count($errors->all())>0)
    <div class="row">
        <div class="col-md-2"></div>
        <div class=" col-md-8 alert alert-danger">
            <ul>
                @foreach($errors->all() as  $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        <div class="col-md-2"></div>
    </div>
@endif
