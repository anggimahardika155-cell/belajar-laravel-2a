<!-- kerangka utama halaman -->
<!DOCTYPE html>
<html>
<head> 
    <meta charset="utf-8">
    <title>{{$judul}}</title>
    <!-- memuat file css untuk tampilan halaman -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/templating.css') }}">
</head>
<body> 
    <!-- wadah pembungkus seluruh konten -->
    <div class="container">
        <!-- memuat bagian header dari file terpisah -->
        @include('template.header') 
        <div class="isi">
            <!-- memuat bagian sidebar dari file terpisah -->
            @include('template.sidebar') 
            <!-- tempat konten dinamis akan ditampilkan -->
            <div class="content">
                @yield('content') 
            </div>
        </div>
    </div> 
</body>
</html>

