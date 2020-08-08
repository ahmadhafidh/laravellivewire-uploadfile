<!DOCTYPE html>
<html>
<head>
    <title>Laravel Livewire File Upload Example From Scratch - Tutsmake.com</title>
    @livewireStyles
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container ">
        <div class="row mt-5">
            <div class="col-md-8 offset-2">
                <div class="card mt-5">
                  <div class="card-header bg-success">
                    <h2 class="text-white">Laravel Livewire File Upload Example From Scratch - tutsmake.com</h2>
                  </div>
                  <div class="card-body">
                    @livewire('lara-file-upload')
                  </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
@livewireScripts
</html> 