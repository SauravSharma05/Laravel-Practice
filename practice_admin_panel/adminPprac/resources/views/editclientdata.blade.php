<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Banker_Edit Client data </title>
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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="/userlist">Back</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </nav>

      <div class="box">
    <form action="{{url('/editclientdata/'.$data->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <input type="text" class="form-control" value="{{$data->name}}" id="name" name="name" placeholder="Client Name">
        </div>
            <div class="mb-3">
            <input type="number" class="form-control" value="{{$data->mobile}}"  placeholder="Mobile No." id="mobile" name="mobile">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" value="{{$data->mortname}}"  placeholder="Mortgager Name" id="mortname" name="mortname">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" value="{{$data->mortnumber}}"  placeholder="Mortgager Mobile no." id="mortnumber" name="mortnumber">
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
            <input type="text" value="{{$data->wit1name}}" class="form-control" placeholder="Witness 1 Name." id="wit1name" name="wit1name">
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
            <input type="text" readonly class="form-control" value="{{$data->wit2name}}" placeholder="Witness 2 Name." id="wit2name" name="wit2name">
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
            <input type="text"  class="form-control" value="{{$data->borname}}"  placeholder="Borrower Name" id="borname" name="borname">
        </div>
        <br>
        <div class="mb-3">
            <label for="qrcode" class="form-label">QR code image upload here</label>
            <input class="form-control" type="file" name="qrcode">
        </div>

        {{-- <div class="mb-3">
            <input type="text"  class="form-control"  placeholder="Bank Name" id="bankname" name="bankname">
        </div>
        <div class="mb-3">
            <input type="text"  class="form-control"  placeholder="customer mobile " id="cusmobile" name="cusmobile">
        </div>
        <div class="mb-3">
            <input type="text"  class="form-control"  placeholder="Banker Name" id="bankername" name="bankername">
        </div>
        <div class="mb-3">
            <input type="text"  class="form-control"  placeholder="Banker number" id="bankerno" name="bankerno">
        </div>
        <div class="mb-3">
            <label for="sancletter" class="form-label">Sanction Letter upload here</label>
            <input class="form-control" type="file" name="sancletter">
        </div>
        <div class="mb-3">
            <label for="legreport" class="form-label">Legal Report upload here</label>
            <input class="form-control" type="file" name="legreport">
        </div> --}}

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>

    </form>
</div>
</body>
</html>
