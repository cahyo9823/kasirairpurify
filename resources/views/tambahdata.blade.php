<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Invoice
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-3 mt-3">

                <form class="pa-3">
                    <div class="row">
                        <div class="col-md-6 ma-2 ">

                            <div class="form-group mb-2">
                                <label for="formGroupExampleInput">Kode Invoice</label>
                                <input type="text" class="form-control" readonly id="" value="{{$nomor}}">
                            </div>



                            <div class="form-group mb-2">
                                <label for="formGroupExampleInput">Nama</label>
                                <input type="text" class="form-control" id="" placeholder="Nama">
                            </div>

                            <div class="form-group mb-2">
                                <label for="formGroupExampleInput2">No Telpon</label>
                                <input type="text" class="form-control" id="" placeholder="No Telpon">
                            </div>

                        </div>

                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="formGroupExampleInput2">Tanggal</label>
                                <input type="text" class="form-control" id="datepicker">
                            </div>
                            <div class="form-group mb-2">
                                <label for="exampleFormControlSelect2">Kota</label>
                                <select class="form-control" id="exampleFormControlSelect2">
                                    <option value="Jakarta">Jakarta</option>
                                    <option value="Bogor">Bogor</option>
                                    <option value="Tangerang">Tangerang</option>
                                    <option value="Bekasi">Bekasi</option>
                                    <option value="Depok">Depok</option>
                                </select>
                            </div>
                            <div class="form-group mb-4">
                                <label for="exampleFormControlTextarea1">Alamat</label>
                                <textarea class="form-control" id="" rows="1"></textarea>
                            </div>
                        </div>
                        <div class="col-md-3">
                          <select class="form-control" id="exampleFormControlSelect2">
                            <option value="Jakarta">Rumah</option>
                            <option value="Bogor">Apartemen</option>
                            <option value="Tangerang">Klinik</option>
                            <option value="Tangerang">Rumah Sakit</option>
                            <option value="Bekasi">Kantor</option>
                            <option value="Depok">Mobil</option>
                        </select>
                        </div>
                        <div class="col-md-3">
                          <input type="text" class="form-control" id="luas" placeholder="Luas"
                          onkeyup="sum();">
                        </div>
                        <div class="col-md-3">
                          <input type="text" class="form-control" id="harga" placeholder="Harga /m2"
                          onkeyup="sum();">
                        </div>
                        <div class="col-md-3">
                          <button type="button" class="btn btn-primary ">Tambah</button>
                        </div>


                        <div class="col">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Fogging</th>
                                        <th scope="col">Luas</th>
                                        <th scope="col">harga /m2</th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Action 
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>
                                            <select class="form-control" id="exampleFormControlSelect2">
                                                <option value="Jakarta">Rumah</option>
                                                <option value="Bogor">Apartemen</option>
                                                <option value="Tangerang">Klinik</option>
                                                <option value="Tangerang">Rumah Sakit</option>
                                                <option value="Bekasi">Kantor</option>
                                                <option value="Depok">Mobil</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" id="luas" placeholder="Luas"
                                                onkeyup="sum();">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" id="harga" placeholder="Harga /m2"
                                                onkeyup="sum();">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" id="jumlah" placeholder="Jumlah"
                                                readonly>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-danger ">
                                              <i class="fas fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>

                        </div>

                        <h1 class="font-semibold text-xl text-gray-800 leading-tight">Total Transaksi : </h1>
                    </div>
                    <button type="button" class="btn btn-primary mt-4">Simpan data</button>
                </form>


            </div>
        </div>
    </div>
</x-app-layout>
