<div>
    <div>
        <div>
            @include('livewire.pemasukanumumshow')
            @include('livewire.pemasukanumumedit')
              <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                  <h1 class="h2">List Pemasukan {{ $pembayaran->name }}  : {{ $departemen->name }}</h1>
                </div>

                  <div class="row">
                  <div class="col-sm-4">
                  <div class="card">
                  <div class="card-body p-3 position-relative">
                  <div class="row">
                  <div class="col-7 text-start">
                  <p class="text-sm mb-1 text-capitalize font-weight-bold">{{ $pembayaran->name }}</p>
                  <h5 class="font-weight-bolder mb-0">
                    @currency($hari)
                  </h5>
                  <span class="font-weight-normal text-secondary">Hari Ini</span></span>
                  </div>
                  <div class="col-5">
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  <div class="col-sm-4 mt-sm-0 mt-4">
                  <div class="card">
                  <div class="card-body p-3 position-relative">
                  <div class="row">
                  <div class="col-7 text-start">
                  <p class="text-sm mb-1 text-capitalize font-weight-bold">{{ $pembayaran->name }}</p>
                  <h5 class="font-weight-bolder mb-0">
                    @currency($bulan)
                  </h5>
                  <span class="font-weight-normal text-secondary">Bulan Ini</span></span>
                  </div>
                  <div class="col-5">

                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  <div class="col-sm-4 mt-sm-0 mt-4">
                  <div class="card">
                  <div class="card-body p-3 position-relative">
                  <div class="row">
                  <div class="col-7 text-start">
                  <p class="text-sm mb-1 text-capitalize font-weight-bold">{{ $pembayaran->name }}</p>
                  <h5 class="font-weight-bolder mb-0">
                    @currency($semua)
                  </h5>
                 </span>Total Semua</span>
                  </div>
                  <div class="col-5">
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>


                  @if(session()->has('success'))
                  <div class="alert alert-success col-3" role="alert">
                      {{ session('success') }}
                    </div>
                  @endif
                  @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
              <div class="card-body">
                @if (session()->has('message'))
                    <div class="alert alert-success text-center">{{ session('message') }}</div>
                @endif

                      @include('livewire.pemasukanumumcreate')

                      <div class="card-body px-0 pt-0 pb-2">
                          <div class="table-responsive p-0">
                              {{-- <a href="/sikeu/pengeluaran/create" class="btn btn-primary mb-2">Buat pengeluaran</a> --}}

                              <div class="row justify-content-strat ">
                                <div class="col-3">
                                  <input type="text" wire:model="search" class="form-control mt-3" placeholder=" Cari Nama Penyumbang" aria-label="Example text with button addon" aria-describedby="button-addon1">
                              </div>

                              <div class="row justify-content-between">
                                  <div class="col-4">
                                    <label for="show">Show :</label>
                                    <select wire:model="paginate" class="form-control form-control-sm w-auto" name="show">
                                        <option value="10">10</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                        <option value="{{ $ttl }}">Semua</option>
                                    </select>
                                  </div>
                                  <div class="col-3 mt-3">

                                    <button wire:click="export({{ $pembayaran->id }})" wire:loading.attr="disabled" class="btn btn-success" > <i class="bi bi-download"></i> Excel</button>

                                </div>
                              </div>
                              <table class="table table-striped table-sm mb-0 bg-gray-200">

                              <thead>
                                <tr>
                                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No.</th>
                                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jenis Pembayaran</th>
                                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jumlah</th>
                                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" >Uraian</th>
                                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal</th>
                                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                                  <th class="text-secondary opacity-7"></th>
                                </tr>
                              </thead>
                              <tbody>
                                @if(count($sumbangans) > 0)
                                @foreach ($sumbangans as $sumbangan)
                                <tr>
                                  <td>
                                    <div class="d-flex px-2 py-1">
                                      <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">{{ $loop->iteration }}</h6>
                                      </div>
                                    </div>
                                  </td>
                                  <td>
                                    <div class="d-flex px-2 py-1">
                                      <div class="d-flex flex-column justify-content-center">
                                        {{ $sumbangan->kategori->name }}
                                      </div>
                                    </div>
                                  </td>
                                  <td>
                                    <div class="d-flex px-2 py-1">
                                      <div class="d-flex flex-column justify-content-center">
                                        @if(!empty($sumbangan->siswa->nama))
                                        <h6 class="mb-0 text-sm">{{ $sumbangan->siswa->nama }}</h6>
                                        @else
                                        <h6 class="mb-0 text-sm">{{ $sumbangan->nama_penyumbang }}</h6>
                                        @endif
                                      </div>
                                    </div>
                                  </td>
                                  <td>

                                    <div class="d-flex px-2 py-1">
                                      <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">
                                          @currency($sumbangan->jumlah)
                                        </h6>
                                      </div>
                                    </div>
                                  </td>

                                  <td style="max-width: 500px; overflow: hidden;">
                                    <div class="d-flex py-1">
                                      <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">{{ $sumbangan->uraian }}</h6>
                                      </div>
                                    </div>
                                  </td>
                                  <td>
                                    <div class="d-flex py-1">
                                      <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">{{ $sumbangan->created_at->format('j F, Y') }}</h6>
                                      </div>
                                    </div>
                                  </td>




                                  <td class="col text-center">
                                      <button class="btn btn-block bg-gradient-info  border-0" data-bs-toggle="modal" data-bs-target="#modal-notification" wire:click="viewStudentDetails({{ $sumbangan->id }})"><i class="bi bi-eye"></i> Detail</button>
                                        @can('smp')
                                        <button class="btn btn-block bg-gradient-warning  border-0" data-bs-toggle="modal"  data-bs-target="{{ !empty($sumbangan->siswa_id) ? '#edit-notification' : '#edit-notification2' }}" wire:click="editStudents({{ $sumbangan->id }})"><i class="bi bi-pencil-square"></i> Edit</button>
                                     <button class="btn btn-block bg-gradient-danger  border-0r" data-bs-toggle="modal" data-bs-target="#delete-notification"  wire:click="deleteConfirmation({{ $sumbangan->id }})"><i class="bi bi-trash"></i> Hapus</button>
                                        @endcan

                                     </form>
                                 </td>
                                </tr>
                                @endforeach
                               @else
                                <tr>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td>Data tidak ditemukan</td>
                                  <td></td>
                                  <td></td>
                                </tr>
                                @endif
                              </tbody>

                            </table>

                          </div>
                      </div>
                      {{ $sumbangans->links() }}
                      <div class="card bg-secondary mt-2">
                        <!-- Card image -->
                        <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
                          <hr class="horizontal dark" />
                          <h6 class="ms-4 text-uppercase text-xs font-weight-bolder opacity-6">Total {{ $pembayaran->name }}</h6>
                          <!-- List group -->
                          <ul class="list-group list-group-flush mt-2">
                             <li class="list-group-item ">Total {{ $pembayaran->name }} Hari Ini : <span class="text-bold ">@currency($hari)</span> </li>
                             <li class="list-group-item">Total {{ $pembayaran->name }} Bulan Ini : <span class="text-bold">@currency($bulan)</span> </li>
                             <li class="list-group-item">Total Semua {{ $pembayaran->name }} : <span class="text-bold">@currency($semua)</span> </li>
                          </ul>
                          <hr class="horizontal dark mt-5" />
                          <h6 class="ms-4 text-uppercase text-xs font-weight-bolder opacity-6">Grand Total</h6>

                          <ul class="list-group list-group-flush">
                             <li class="list-group-item">Total Semua Pemasukan: <span class="text-bold">@currency($ttlpemasukan)</span></li>
                             <li class="list-group-item">Total Semua Pengeluaran : <span class="text-bold">@currency($ttlpengeluaran)</span></li>
                             <li class="list-group-item">Jumlah Kas: <span class="text-bold">@currency($kas)</span></li>
                          </ul>
                         </div>
                        <!-- Card body -->
                     </div>


                  <div wire:ignore.self  class="modal fade" id="delete-notification" tabindex="-1" role="dialog" aria-labelledby="delete-notification" aria-hidden="true">
                    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h6 class="modal-title" id="modal-title-notification">Hapus Data</h6>
                          <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="py-3 text-center">
                            <i class="ni ni-bell-55 ni-3x"></i>
                            <h4 class="text-gradient text-danger mt-4">Anda Yakin ingin Menghapus?</h4>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger text-white" data-bs-dismiss="modal" wire:click="deleteStudentData()">Hapus</button>
                          <button type="button" class="btn btn-link text-dark ml-auto" data-bs-dismiss="modal" wire:click.prevent="cancel()">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>

                  </div>

    </div>

</div>
