<!DOCTYPE html>
<html>
<head>
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- CSS Eksternal -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <title>{{ $judul }}</title>
</head>
<body>
    <div class="kalkulator-box">
        <h2>{{ $judul }}</h2>
        
        <form action="/kalkulator/segitiga/proses" method="post">
            @csrf
            
            <label>Alas:</label><br>
            <input type="text" name="alas" value="{{ $alas }}"><br>
            
            <label>Tinggi:</label><br>
            <input type="text" name="tinggi" value="{{ $tinggi }}"><br>
            
            @if ($alas !== '' && $tinggi !== '')
                <p id="hasil-luas"><b>Luas Segitiga: {{ $luas }}</b></p>
            @endif
            
            <button type="submit">HITUNG LUAS</button>
        </form>
    </div>

    <script>
        const alas = document.querySelector('input[name="alas"]');
        const tinggi = document.querySelector('input[name="tinggi"]');
        const hasil = document.getElementById('hasil-luas');

        function periksaInput() {
            if (!hasil) return;
            
            if (alas.value.trim() === '' || tinggi.value.trim() === '') {
                hasil.innerHTML = '<b>Luas Segitiga: 0</b>';
            }
        }

        alas.addEventListener('input', periksaInput);
        tinggi.addEventListener('input', periksaInput);
    </script>
</body>
</html>
