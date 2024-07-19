@extends('admin.layouts.app')

@section('title', 'List Product')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <a href="{{ route('product-add') }}" class="btn btn-primary">Add Product</a>
    </div>
    <br>
    <table class="table">
        <thead class="table-primary">
            <tr>
                <th scope="col">Gambar</th>
                <th scope="col">Nama</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Ukuran</th>
                <th scope="col">Harga</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody id="table-produk">
            @if (!empty($data) || !is_null($data))
                @foreach ($data as $db)
                    @foreach ($db as $hida)
                        <tr>
                            <td class="align-middle ">
                                <img
                                    src="https://b335-116-206-14-20.ngrok-free.app/uploads/{{ $hida['Photos'] }}" class="w-25"> 
                            <td class="align-middle">{{ $hida['Nama'] }}</td>
                            <td class="align-middle">{{ $hida['Deskripsi'] }}</td>
                            <td class="align-middle">{{ $hida['Size'] }}</td>
                            <td class="align-middle">{{ $hida['Harga'] }}</td>
                            <td class="align-middle">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{ route('product-edit', $hida['Id']) }}" type="button" class="btn btn-warning">Edit</a>
                                    <button type="button" class="btn btn-delete btn-danger" onclick="handleDelete(JSON.stringify({{ $hida['Id'] }}))">Delete</button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endforeach
            @endif

        </tbody>
    </table>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script>
    $(document).ready(() => {
        getData();
    });

    const handleDelete = (data) => {
        if (confirm("Apakah Anda yakin ingin menghapus produk ini?")) {
            $.ajax({
                type: 'DELETE',
                url: 'https://b335-116-206-14-20.ngrok-free.app/api/v1/product/' + data,
                success: function (response) {
                    console.log("Produk berhasil dihapus");
                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        }
    }

    const getData = () => {
        $.ajax({
            type: 'get',
            url : 'https://b335-116-206-14-20.ngrok-free.app/api/v1/product/',
            beforeSend: (request) => {
                request.setRequestHeader('Access-Control-Allow-Origin', '*');
            },
            success: (response) => {
                console.log(response)
            },
            error: (error) => {
                console.error(error)
            }
        });
    }
</script>
@endsection