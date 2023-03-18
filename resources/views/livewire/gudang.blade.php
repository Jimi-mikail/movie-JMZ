<div>

    @include('livewire.navbar_warehouse')
    @if (session()->has('message'))
          <div class="alert alert-success text-center">{{ session('message') }}</div>
      @endif
  <div class="row mt-4">
      <div class="col-lg-12 col-12">
       <div class="card">
      <div class="card-header p-3">
      <div class="row">
      <div class="col-md-6">
      <h6 class="mb-0">Item Order</h6>
      </div>
      <div class="col-md-6 d-flex justify-content-end align-items-center">
      <small>{{  now()->toDateTimeString() }}</small>
      </div>
      </div>
      <hr class="horizontal dark mb-0">
      </div>
      <div class="card-body p-3 pt-0">
      <ul class="list-group list-group-flush" data-toggle="checklist">
      <li class="list-group-item border-0 flex-column align-items-start ps-0 py-0 mb-3">
      <div class="checklist-item checklist-item-primary ps-2 ms-3">
      <div class="d-flex align-items-center">


      <div class="dropstart float-lg-end ms-auto pe-0">

      </div>
      </div>


      <livewire:pemasukanumum/>
              {{-- <div class="form-group">
                  <h6 class="mb-0 text-dark font-weight-bold text-sm mb-2">Keterangan</h6>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required wire:model="keterangan"></textarea>
                </div> --}}
          </div>
      </div>
      <hr class="horizontal dark mt-4 mb-0">
      </li>
      <li class="list-group-item border-0 flex-column align-items-start ps-0 py-0 mb-3">
      <div class="checklist-item checklist-item-dark ps-2 ms-3">
      <div class="d-flex align-items-center">
      <h6 class="mb-0 text-dark font-weight-bold text-sm mb-3">Item List</h6>

      </div>
      <div class="form-group">
          <div class="input-group input-group-sm">
            <input type="text" wire:model='po' class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Cari" autofocus>
          </div>
      </div>
      <div class="row justify-content-between mt-2">
        <div class="col-1">

          <label for="show">Show :</label>
          <select wire:model="paginate" class="form-control form-control-sm w-auto" name="show">
              <option value="20">20</option>
              <option value="50">50</option>
              <option value="100">100</option>
              <option value="">Semua</option>
          </select>
            </div>
  {{-- foreac --}}
  <div class="table-responsive">
    <table class="table table-flush" id="datatable-search">
    <thead class="thead-light">
        <tr>

          <th class="text-uppercase  text-xxs font-weight-bolder opacity-7">Name</th>
          <th class="text-uppercase  text-xxs font-weight-bolder opacity-7">Spec</th>
          <th class="text-uppercase  text-xxs font-weight-bolder opacity-7">Desc</th>
          <th class="text-uppercase  text-xxs font-weight-bolder opacity-7">Size</th>
          <th class="text-uppercase  text-xxs font-weight-bolder opacity-7">Color</th>
          <th class="text-uppercase  text-xxs font-weight-bolder opacity-7">PO</th>
          <th class="text-uppercase  text-xxs font-weight-bolder opacity-7">IDP</th>
          <th class="text-uppercase  text-xxs font-weight-bolder opacity-7">Buyer</th>
          <th class="text-uppercase  text-xxs font-weight-bolder opacity-7">Location</th>
          <th class="text-uppercase  text-xxs font-weight-bolder opacity-7">Stock</th>
          <th class="text-uppercase  text-xxs font-weight-bolder opacity-7">Unit</th>
          <th class="text-uppercase  text-xxs font-weight-bolder opacity-7">Order Qty</th>
          <th class="text-uppercase  text-xxs font-weight-bolder opacity-7">Action</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($items as $item)
              <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="my-2 text-xs">{{ $item['_Acce_Name'] }}</h6>
                        </div>
                      </div>
                    </td>
                    <td style="max-width: 300px ; overflow-x:scroll">
                          <h6 class="my-2 text-xs">{{ $item['xSpec'] }}</h6>
                    </td>
                    <td style="max-width: 300px ; overflow-x:scroll">
                          <h6 class="my-2 text-xs">{{ $item['xDesc'] }}</h6>
                    </td>
                    <td style="max-width: 300px ; overflow-x:scroll">
                          <h6 class="my-2 text-xs">{{ $item['xSize'] }}</h6>
                    </td>
                    <td style="max-width: 300px ; overflow-x:scroll">
                          <h6 class="my-2 text-xs">{{ $item['xColor'] }}</h6>
                    </td>
                    <td style="max-width: 300px ; overflow-x:scroll">
                            <h6 class="my-2 text-xs">{{ $item['xBuyNo'] }}</h6>
                      </td>
                    <td style="max-width: 300px ; overflow-x:scroll">
                            <h6 class="my-2 text-xs">{{ $item['xPO'] }}</h6>
                      </td>
                    <td style="max-width: 300px ; overflow-x:scroll">
                            <h6 class="my-2 text-xs">{{ $item['_Cust_Symbol'] }}</h6>
                      </td>
                        <td style="max-width: 300px ; overflow-x:scroll">
                                <h6 class="my-2 text-xs">{{ $item['xdepot_detail'] }}</h6>

                          </td>

                          <td>
                          <h6 class="my-2 text-xs">{{ $item['xtQty'] }}</h6>
                    </td>
                    <td style="max-width: 50px;" >

                            <h6  class="my-2 text-xs">{{ $item['sUnit'] }}</h6>

                      </td>
                    {{-- <td>

                        <input type="number" wire:model="quantity.{{  $item['sIndex'] }}"
                        class="text-sm sm:text-base px-2 pr-2 rounded-lg border border-gray-400 py-1 focus:outline-none focus:border-blue-400"
                        style="width: 50px" />

                    </td> --}}
                    <td>

                        <input type="number"  class="form-control"
                        style="width: 100px" wire:model.defer="qty">

                            <select class="form-control form-control-sm" style="width: 100px"  wire:model.defer="unit">
                            <option>Pilih Unit</option>
                            <option value="pcs">pcs</option>
                            <option value="set">set</option>
                            <option value="doz">doz</option>
                            <option value="gross">gross</option>
                            <option value="rolls">rolls</option>
                            <option value="cone">cone</option>
                            <option value="rim">rim</option>
                            <option value="liter">liter</option>
                            <option value="box">box</option>
                            <option value="tube">tube</option>
                            <option value="unit">unit</option>
                            <option value="btg">btg</option>
                            <option value="lembar">lembar</option>
                            <option value="ikat">ikat</option>
                            <option value="pack">pack</option>
                            <option value="bags">bags</option>
                            <option value="mobil">mobil</option>
                            <option value="kaleng">kaleng</option>
                            <option value="galon">galon</option>
                            <option value="pail">pail</option>
                            <option value="ml">ml</option>
                            <option value="drum(200l)">drum(200l)</option>
                            <option value="bottle">bottle</option>
                            <option value="ls">ls</option>
                            <option value="drigen">drigen</option>
                            <option value="pack(10)">pack(10)</option>
                            <option value="bucket">bucket</option>
                            <option value="meter">meter</option>
                            <option value="yard">yard</option>
                            <option value="Inch">Inch</option>
                            <option value="batang">batang</option>
                            <option value="kilogram">kilogram</option>
                            <option value="package">package</option>
                            <option value="Job">Job</option>
                            <option value="Line">Line</option>
                            <option value="kset">kset</option>
                            <option value="kst2">kst2</option>

                        </select>

                    </td>
                    <td>

                          <button type="submit"  class="btn btn-icon btn-2 btn-info mt-2" wire:click="addToCart({{ $item['sIndex'] }})" ><span class="btn-inner--icon">Add</span></button>


                    </td>
                </tr>
      @endforeach

          </tbody>
          </table>
        </div>
          {{ $items->withQueryString()->links() }}
              {{-- {{ $items->links() }} --}}
      {{-- endforec --}}

      </div>

      </li>

      </ul>
      </div>
      </div>





  </div>
  {{-- @livewire('cart-counter') --}}

  {{-- <div class="col-lg-3 col-12 mt-4 mt-lg-0">
      <div class="card">
          <div class="card-header pb-0">
          <h6>Order Item</h6>
          </div>
          <div class="card-body p-3">
          <div class="timeline timeline-one-side" data-timeline-axis-style="dotted">
              @foreach ($prod as $cart)
          <div class="timeline-block mb-3">
          <span class="timeline-step">
          <i class="ni ni-cart text-info text-gradient"></i>
          </span>
          <div class="timeline-content">
          <h6 class="text-dark text-sm font-weight-bold mb-0">{{ $cart->name }},   Order qty : {{ $cart->quantity }}</h6>
          <h6 class="text-dark text-sm font-weight-bold mb-0">{{ $cart->attributes->spec }}</h6>
          <h6 class="text-dark text-sm font-weight-bold mb-0">{{ $cart->attributes->desc }}</h6>
          <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">{{  now()->toDateTimeString() }}</p>
          <p class="text-sm mt-3 mb-2">
          {{ $keterangan }}
          </p>
          <p class="text-sm mt-3 mb-2">
             Lokasi : {{ $lokasi }}
              </p>
          <button class="btn btn-block bg-danger text-light btn-sm  border-0" wire:click="remove({{ $cart->id }})">Remove</button>

          </div>
          </div>
          @endforeach
      </div>
      <button type="button" class="btn btn-primary btn-lg w-100" wire:click="checkout()">Save</button>
          </div>
          </div>
      </div> --}}

  </div>
  </div>
