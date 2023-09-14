<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>td, th { font-size: 11px;}</style>
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div class="card" style="margin: 2rem 0rem;">
            <div class="card-header">Venturo</div>
    </div>
    <div class="card-body">
        <form action method="get">
            <div class="row">
                <div class="col-2">
                    <div class="form-group">
                        <select id="my-select" class="form-control" name="tahun">
                            <option value=>Pilih Tahun</option>
                            <option value="2022" href="/laporan2023">2022</option>
                            <option value="2023" href="/laporan2022">2023</option>
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <button type="submit" class="btn btn-primary">Tampilkan</button>
                </div>
            </div>
        </form>
    </div>
</div>
<br>
    <div class="container-fluid">
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Menu</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Total Penjualan</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($penjualan as $item)
                <tr align="center">
                    <td class="align-middle"><?= $loop->iteration ?></td>
                    {{-- <td class="align-middle"><?= $item->id ?></td> --}}
                    <td class="text-start align-middle"><?= $item->menu ?></td>
                    <td class="text-start align-middle"><?= $item->kategori ?></td>
                    <td class="text-start align-middle"><?= $item->total_penjualan ?></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>