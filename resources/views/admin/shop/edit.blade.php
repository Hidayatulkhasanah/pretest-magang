@extends('admin.layouts.app')

@section('contents')
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12 mt-4">
                <div class="d-flex flex-wrap gap-4 mb-4">
                    @csrf
                    <form id="editForm">
                        <fieldset>
                            <legend>Edit Product</legend>
                            <div class="mb-3">
                                <label for="TextInput" class="form-label">Nama Product</label>
                                <input type="text" name="nama" id="TextInput" class="form-control" placeholder="Masukkan Nama Product">
                            </div>
                            <div class="mb-3">
                                <label for="TextInput" class="form-label">Deskripsi Product</label>
                                <textarea rows='3' name="deskripsi" id="TextInput" class="form-control" placeholder="Masukkan Deskripsi Product" ></textarea>
                            </div>
                            <div class="input-group mb-3">
                                <input type="file" name="photo" class="form-control" id="inputGroupFile04 photo"
                                    aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                {{-- <button class="btn btn-outline-primary" type="button"
                                    id="inputGroupFileAddon04">Upload</button> --}}
                            </div>
                            <label for="TextInput" class="form-label">Size</label>
                            <div class="input-group mb-3">
                                <select name="size" class="form-select" aria-label="Size">
                                    <option selected>Pilih ukuran disini</option>
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                    <option value="XXL">XXL</option>
                                  </select>
                            </div>
                            <div class="mb-3">
                                <label for="TextInput" class="form-label">Harga</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        Rp.
                                    </span>
                                    <input type="number" name="harga" id="TextInput" class="form-control" placeholder="Masukkan">
                                </div>
                            </div>

                            <div class="d-grid gap-2 d-md-block">
                                <button class="btn btn-danger" type="button" id="btnKembali">Kembali</button>
                               
                                <button class="btn btn-primary" type="button" id="btnSimpan">Simpan</button>
                               
                            </div>
                    </form>
                    </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $('#btnSimpan').on('click', function(event) {
                event.preventDefault();

                let productId = window.location.pathname.split('/')[2];

                
                let payload = {
                    nama: $("[name='nama']").val(), 
                    deskripsi: $("[name='deskripsi']").val(),
                    photo: $("[name='photo']").prop('files')[0], 
                    size: $("[name='size']").val(),
                    harga: Number($("[name='harga']").val())
                }
                let formData = new FormData();
                formData.append('nama', payload.nama);
                formData.append('deskripsi', payload.deskripsi);
                formData.append('photo', payload.photo);
                formData.append('size', payload.size);
                formData.append('harga', payload.harga);

                $.ajax({
                    type: 'PUT', 
                    url : 'https://b335-116-206-14-20.ngrok-free.app/api/v1/product/' + productId,
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        alert('Data berhasil diperbarui');
                        return window.history.back();
                     
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        alert('Terjadi kesalahan saat memperbarui data');
                    }
                });
            });

            $('#btnKembali').click(() => {
                window.history.back();
            });
        });
    </script>
@endsection
