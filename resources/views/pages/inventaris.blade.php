        @extends('app')

        @section('content')

        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah Inventaris</h4>
                    <form class="form-sample" action="{{route('invetaris.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Kode Barang</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control"  name="kode" value="KDB-{{$rndm_string}}" readonly />

                                </div>
                            </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Kategori</label>
                                    <div class="col-sm-9">
                                        <select class="form-control"  name="kategori">
                                            <option value="">Pilih</option>
                                            <option value="Meja">Meja</option>
                                            <option value="Kursi">Kursi</option>
                                            <option value="Bor">Bor</option>
                                        </select>
                                        <span style="color: red">@error('kategori'){{$message}}@enderror</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Barang</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control"  name="nama"/>
                                <span style="color: red">@error('nama'){{$message}}@enderror</span>

                                </div>
                            </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Tipe</label>
                                    <div class="col-sm-9">
                                    <select class="form-control"  name="tipe">
                                        <option value="">Pilih</option>
                                        <option value="Elektrik">Elektrik</option>
                                        <option value="Non-Elektrik">Non-Elektrik</option>
                                    </select>
                                    <span style="color: red">@error('tipe'){{$message}}@enderror</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Lokasi</label>
                                    <div class="col-sm-9">
                                    <select class="form-control"  name="lokasi">
                                        <option value="">Pilih</option>
                                        <option value="gedung 1">gedung 1</option>
                                        <option value="gedung 2">gedung 2</option>
                                        <option value="gedung 3">gedung 3</option>
                                        <option value="gedung 4">gedung 4</option>
                                    </select>
                                    <span style="color: red">@error('lokasi'){{$message}}@enderror</span>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Kondisi</label>
                                    <div class="col-sm-9">
                                    <select class="form-control"  name="kondisi">
                                        <option value="">Pilih</option>
                                        <option value="Baru">Baru</option>
                                        <option value="Bekas">Bekas</option>
                                    </select>
                                    <span style="color: red">@error('kondisi'){{$message}}@enderror</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Tanggal Masuk</label>
                                    <div class="col-sm-9">
                                    <input type="date" class="form-control"  name="barang_masuk"/>
                                    <span style="color: red">@error('barang_masuk'){{$message}}@enderror</span>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Jumlah Barang</label>
                                    <div class="col-sm-9">
                                    <input type="number" class="form-control"  name="qty"/>
                                    <span style="color: red">@error('qty'){{$message}}@enderror</span>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Keterangan</label>
                                    <textarea type="text" class="form-control"  name="keterangan"></textarea>
                                    <span style="color: red">@error('keterangan'){{$message}}@enderror</span>

                            </div>
                        </div>

                        <div class="col-md-12">
                            <button type="submit" class="btn btn-outline-secondary btn-sm">Simpan</button>
                        </div>
                    </form>
                </div>
                </div>
            </div>

        {{-- close down --}}
        </div>
        @endsection
