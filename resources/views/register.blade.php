<!-- resource/views/register.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Registrasi</title>
    {{-- booststrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container mt-5">
        <h2>Form Registrasi</h2>
        <form action="/submit" method="POST" class="mt-4">
            @csrf
            <div class="form-group mb-2">
                <input type="text" name="nama" id="" class="form-control" placeholder="Nama Lengkap" required>
            </div>
            <div class="form-group mb-2">
                <input type="email" name="email" class="form-control" placeholder="Email" id="" required>
            </div>
            <div class="form-group mb-2">
                <input type="text" name="username" class="form-control" placeholder="Username" id="" required>
            </div>
            <div class="form-group mb-2">
                <input type="password" name="password" class="form-control" placeholder="Password" id="" required>
            </div>
            <div class="form-group mb-2">
                <select class="form-control" name="profesi">
                    <option value="Developer">Developer</option>
                    <option value="Desainer">Desainer</option>
                    <option value="Arschitect">Architect</option>
                    <option value="Manager">Manager</option>
                </select>
            </div>
            <div class="form-group mb-2">
                <input type="radio" name="jenis_kelamin" value="Laki-Laki" required>Laki - Laki 
                <input type="radio" name="jenis_kelamin" value="Perempuan" id="" required> Perempuan
            </div>
            <div class="form-check mb-3">
                <input type="checkbox" name="setuju" id="setuju" required>
                <label for="setuju">Saya setuju dengan ketentuan dan kebijakan</label>
            </div>
            <button type="submit" class="btn btn-primary" id="daftarBtn">Daftar</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 
</body>
</html>