<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>Toko Kesehatan</title>
  </head>
  <body>
    <div class="container">
      <br><br>
      <h1>Halo Admin {{Session::get('username')}} !</h1>
      <a href="{{url('/adminlogout')}}" class="btn btn-danger">Keluar</a>
      <br><br>
      <table class="table table-striped table-bordered ">
        <thead class="thead-dark">
          <tr>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($produk as $p)
          <tr>
            <td>{{$p->nama}}</td>
            <td>{{$p->harga}}</td>
            <td>
              <form action="{{url('/delete',$p->id)}}" method="post">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <a href="{{url('/admin/edit',$p->id)}}" class="btn-primary btn">Ubah</a>
                <button class="btn btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <a href="{{url('/admin/addproduk')}}" class="btn btn-primary">Tambah Data</a>

    </div>
  </body>
</html>
