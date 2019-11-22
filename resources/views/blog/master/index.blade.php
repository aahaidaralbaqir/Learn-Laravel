<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.css') }}" />
</head>

<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <!-- bagian title -->
                <h3 class="text-center">@yield('judul_halaman')</h3>

                <!-- bagian kontent -->
                @yield('konten')
            </div>
        </div>
    </div>
</body>
</html>