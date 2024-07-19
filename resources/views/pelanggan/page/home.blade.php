@extends('pelanggan.layout.index')

@section('content')
    <h4 class="mt-5">Best Seller</h4>
    <div class="content mt-5 d-flex flex-lg-wrap gap-4" id="bestSellerList">
        <div class="row align-items-center">
            <div class="row mt-4">
                <div class="col-md-12 d-flex flex-wrap gap-4 mb-4">
                    @if (!empty($data) || !is_null($data))
                        @foreach ($data as $d)
                            @foreach ($d as $product)
                                <div class="card mx-auto" style="width: 220px;">
                                    <div class="card-header m-auto" style="border-radius: 5px;">
                                        <img src="https://b335-116-206-14-20.ngrok-free.app/uploads/{{ $product['Photos'] }}"
                                            alt="baju 1" style="width: 100px;">
                                    </div>
                                    <div class="card-body">
                                        <p class="m-0"> {{ $product['Nama'] }}
                                        </p>
                                        <p>{{ $product['Deskripsi'] }}</p>
                                        <p class="m-0">{{ $product['Size'] }}</p>
                                    </div>
                                    <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                                        <p class="m-0" style="font-size: 16px; font-weight: 600;">Rp.
                                            {{ $product['Harga'] }}
                                        </p>
                                        <button class="btn btn-outline-primary" style="font-size:24px">
                                            <i class="fa-solid fa-cart-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            @endforeach
                        @endforeach
                    @endif


                </div>
            </div>
            <nav class="justify">
                <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <h4 class="mt-5">New Product</h4>
    <div class="content mt-5 d-flex flex-lg-wrap gap-4" id="newProductList">
        <div class="row align-items-center">
            <div class="row mt-4">
                <div class="col-md-12 d-flex flex-wrap gap-4 mb-4">
                    @if (!empty($data) || !is_null($data))
                        @foreach ($data as $d)
                            @foreach ($d as $product)
                                <div class="card mx-auto" style="width: 220px;">
                                    <div class="card-header m-auto" style="border-radius: 5px;">
                                        <img src="https://b335-116-206-14-20.ngrok-free.app/uploads/{{ $product['Photos'] }}"
                                            alt="baju 1" style="width: 100px;">
                                    </div>
                                    <div class="card-body">
                                        <p class="m-0"> {{ $product['Nama'] }}
                                        </p>
                                        <p>{{ $product['Deskripsi'] }}</p>
                                        <p class="m-0">{{ $product['Size'] }}</p>
                                    </div>
                                    <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                                        <p class="m-0" style="font-size: 16px; font-weight: 600;">Rp.
                                            {{ $product['Harga'] }}
                                        </p>
                                        <button class="btn btn-outline-primary" style="font-size:24px">
                                            <i class="fa-solid fa-cart-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            @endforeach
                        @endforeach
                    @endif


                </div>
            </div>
            <nav class="justify">
                <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
    </div>
@endsection
