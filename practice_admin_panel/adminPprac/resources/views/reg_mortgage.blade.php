<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Morgage Registration</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        .box{
            width: 50%;
            border: 2px solid black;
            border-radius: 20px;
            padding: 20px;
            margin: 80px auto;
        }
    </style>
</head>

<body>
    <h3>Mortgage register</h3>
    <a class="navbar-brand" href="/home">BACK TO HOME</a>
    <div class="box">
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <input type="text" class="form-control" id="name" name="name" placeholder="Client Name">
        </div>
            <div class="mb-3">
            <input type="number" class="form-control" placeholder="Mobile No." id="mobile" name="mobile">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" placeholder="Mortgager Name" id="mortname" name="mortname">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" placeholder="Mortgager Mobile no." id="mortnumber" name="mortnumber">
        </div>
        <div class="mb-4">
            <label for="mortaadhar" class="form-label">Add aadhar card Mortgager</label>
            <input class="form-control" type="file" name="mortaadhar">
        </div>
        <div class="mb-3">
            <label for="mortpan" class="form-label">Add PAN card Mortgager</label>
            <input class="form-control" type="file" name="mortpan">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" placeholder="Witness 1 Name." id="wit1name" name="wit1name">
        </div>
        <div class="mb-4">
            <label for="wit1aadhar" class="form-label">Add aadhar card WITNESS 1</label>
            <input class="form-control" type="file" name="wit1aadhar">
        </div>
        <div class="mb-3">
            <label for="wit1pan" class="form-label">Add PAN card WITNESS 1</label>
            <input class="form-control" type="file" name="wit1pan">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" placeholder="Witness 2 Name." id="wit2name" name="wit2name">
        </div>
        <div class="mb-4">
            <label for="wit2aadhar" class="form-label">Add aadhar card WITNESS 2</label>
            <input class="form-control" type="file" name="wit2aadhar">
        </div>
        <div class="mb-3">
            <label for="wit2pan" class="form-label">Add PAN card WITNESS 2</label>
            <input class="form-control" type="file" name="wit2pan">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" placeholder="Borrower Name" id="borname" name="borname">
        </div>
        <br>
        <div class="mb-3">
            <label for="qrcode" class="form-label">QR code image upload here</label>
            <input class="form-control" type="file" name="qrcode">
        </div>

{{--    @foreach ($banker_id as $value)
        <select class="form-select" aria-label="Default select example">
            <option selected>Banker Option</option>
            <option value="{{ $value->banker_id }}">{{ $value->bankername }}</option>
        </select>
        @endforeach --}}

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>
</body>

</html>
