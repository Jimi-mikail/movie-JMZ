<?php

use App\Http\Controllers\Logincontroller;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Usercontroller;
use App\Http\Livewire\admindepartemen;
use App\Http\Livewire\Allbarcode;
use App\Http\Livewire\Asseterp;
use App\Http\Livewire\Assetwwtp;
use App\Http\Livewire\BarcodeController;
use App\Http\Livewire\CartonGap;
use App\Http\Livewire\CartonGapPrint;
use App\Http\Livewire\CartonGu;
use App\Http\Livewire\CartonGuPrint;
use App\Http\Livewire\CartonHnm;
use App\Http\Livewire\CartonJcp;
use App\Http\Livewire\Cartontarget;
use App\Http\Livewire\Cekph;
use App\Http\Livewire\Cekphstp;
use App\Http\Livewire\Consumbaleerp;
use App\Http\Livewire\Createorder;
use App\Http\Livewire\Dashboardyayasan;
use App\Http\Livewire\Detailitem;
use App\Http\Livewire\FilmId;
use App\Http\Livewire\Filmpopular;
use App\Http\Livewire\GrafikFilter;
use App\Http\Livewire\Grafikstockwwtp;
use App\Http\Livewire\Grafikwwtp;
use App\Http\Livewire\Hnmprint;
use App\Http\Livewire\ItemWwtp;
use App\Http\Livewire\Kategoriyayasan;
use App\Http\Livewire\Laporanpemasukan;
use App\Http\Livewire\Listorder;
use App\Http\Livewire\MovieId;
use App\Http\Livewire\Orderlist;
use App\Http\Livewire\Pemakaianitem;
use App\Http\Livewire\Pemakaianstp;
use App\Http\Livewire\Pemasukanyysn;
use App\Http\Livewire\Pengeluaranyayasan;
use App\Http\Livewire\Popolarmovie;
use App\Http\Livewire\Siswalivewire;
use App\Http\Livewire\Summaryprint;
use App\Http\Livewire\Summarywwtp;
use App\Models\form;
use App\Models\item_wwtp;
use App\Models\Pemakaianwwtp;
use App\Models\ph;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/login', [Logincontroller::class, 'index'])->name('login');
Route::post('/sikeu/logout', [Logincontroller::class, 'logout']);
Route::post('/login', [Logincontroller::class, 'authenticate']);
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/sikeu/home', Siswalivewire::class)->middleware('auth');
Route::resource('/sikeu/departemen', '\App\Http\Controllers\DepartemenController')->middleware('auth');
Route::resource('/sikeu/users', Usercontroller::class);

// barcode
Route::get('sikeu/allbarcode/', Allbarcode::class)->middleware('auth');

// Aksesoris
Route::get('sikeuy/permintaan', BarcodeController::class)->middleware('auth')->name('list_acce');
Route::get('sikeu/createorder', Createorder::class)->middleware('auth');
Route::get('sikeu/order', Listorder::class)->middleware('auth');
Route::get('gudang/lisaccecories', Pemasukanyysn::class)->middleware('auth');
Route::get('gudang/order', Orderlist::class)->middleware('auth');
Route::get('/gudang/user', Pengeluaranyayasan::class);
Route::get('/gudang/edit/{form}/{user}', Laporanpemasukan::class)->middleware('auth');
Route::get('/form/{form}', function ($form) {
    $forms = form::where('id', $form)->first();

    return view('invoice.form', [
        'forms' => $forms,
    ]);
})->middleware('auth');

Route::get('/npb/{npb}', function ($npb) {

    $npbs = form::with('npb')->where('id', $npb)->first();
    $kabag = User::where('departemen_id', auth()->user()->departemen_id)->where('is_admin', 5)->first();
    return view('invoice.npb', [
        'npbs' => $npbs,
        'kabag' => $kabag,
    ]);
})->middleware('auth');
Route::get('gudang/detail', Detailitem::class)->middleware('auth');

// WWTP
Route::get('wwtp/barang-masuk', ItemWwtp::class)->middleware('auth');
Route::get('pemakaian', Pemakaianitem::class)->middleware('auth');
Route::get('pemakaianstp', Pemakaianstp::class)->middleware('auth');
Route::get('wwtpprint/{start}/{end}', function ($start, $end) {
    $total_wwtp = Pemakaianwwtp::where('pemakaianwwtps.status', 1)->whereBetween('tanggal', [$start, $end])
        ->leftJoin('item_wwtps', 'pemakaianwwtps.item_wwtp_id', '=', 'item_wwtps.id')
        ->selectRaw('SUM(pemakaianwwtps.qty * item_wwtps.harga_po) as total')
        ->first();
    $total_stp = Pemakaianwwtp::where('pemakaianwwtps.status', 2)->whereBetween('tanggal', [$start, $end])
        ->leftJoin('item_wwtps', 'pemakaianwwtps.item_wwtp_id', '=', 'item_wwtps.id')
        ->selectRaw('SUM(pemakaianwwtps.qty * item_wwtps.harga_po) as total')
        ->first();

    $grantototal = Pemakaianwwtp::whereBetween('tanggal', [$start, $end])
        ->leftJoin('item_wwtps', 'pemakaianwwtps.item_wwtp_id', '=', 'item_wwtps.id')
        ->selectRaw('SUM(pemakaianwwtps.qty * item_wwtps.harga_po) as total')
        ->first();

    $items = item_wwtp::where('status', 1)->orWhere('status', 3)->get();
    $pemakaianwwtps = Pemakaianwwtp::where('status', 1)->whereBetween('tanggal', [$start, $end])->get();

    $grouped = $pemakaianwwtps->groupBy('tanggal')->map(function ($items) {
        return [
            'inlet' => $items[0]->inlet,
            'outlet' => $items[0]->outlet,
            'tanggal' => $items[0]->tanggal,
            'item_wwtp_ids' => $items->pluck('item_wwtp_id')->toArray(),
            'qtys' => $items->pluck('qty')->toArray(),
        ];
    });

    return view('invoice.wwtp', [
        'items' => $items,
        'pemakaianwwtps' => $pemakaianwwtps,
        'grouped' => $grouped,
        'total_wwtp' => $total_wwtp,
        'total_stp' => $total_stp,
        'grantototal' => $grantototal,
        'start' => $start,
        'end' => $end,
    ]);
})->middleware('auth');
Route::get('stpprint/{start}/{end}', function ($start, $end) {

    $total_wwtp = Pemakaianwwtp::where('pemakaianwwtps.status', 1)->whereBetween('tanggal', [$start, $end])
        ->leftJoin('item_wwtps', 'pemakaianwwtps.item_wwtp_id', '=', 'item_wwtps.id')
        ->selectRaw('SUM(pemakaianwwtps.qty * item_wwtps.harga_po) as total')
        ->first();
    $total_stp = Pemakaianwwtp::where('pemakaianwwtps.status', 2)->whereBetween('tanggal', [$start, $end])
        ->leftJoin('item_wwtps', 'pemakaianwwtps.item_wwtp_id', '=', 'item_wwtps.id')
        ->selectRaw('SUM(pemakaianwwtps.qty * item_wwtps.harga_po) as total')
        ->first();

    $grantototal = Pemakaianwwtp::whereBetween('tanggal', [$start, $end])
        ->leftJoin('item_wwtps', 'pemakaianwwtps.item_wwtp_id', '=', 'item_wwtps.id')
        ->selectRaw('SUM(pemakaianwwtps.qty * item_wwtps.harga_po) as total')
        ->first();
    $items = item_wwtp::where('status', 2)->orWhere('status', 3)->get();
    $pemakaianwwtps = Pemakaianwwtp::where('status', 2)->whereBetween('tanggal', [$start, $end])->get();

    $grouped = $pemakaianwwtps->groupBy('tanggal')->map(function ($items) {
        return [
            'stp' => $items[0]->stp,
            'tanggal' => $items[0]->tanggal,
            'item_wwtp_ids' => $items->pluck('item_wwtp_id')->toArray(),
            'qtys' => $items->pluck('qty')->toArray(),
        ];
    });
    return view('invoice.stp', [
        'items' => $items,
        'pemakaianwwtps' => $pemakaianwwtps,
        'grouped' => $grouped,
        'total_wwtp' => $total_wwtp,
        'total_stp' => $total_stp,
        'grantototal' => $grantototal,
        'start' => $start,
        'end' => $end,
    ]);
})->middleware('auth');

Route::get('wwtp/printpemasukanwwtp', function () {
    return view('invoice.pemasukanwwtp', [
        "items" => item_wwtp::withSum('po_wwtp as total_qty', 'qty_po')->withSum('pemakaianwwtp as total_pemakaian', 'qty')->get(),
        "ceks",
    ]);
});
Route::get('grafik/wwtp', Grafikwwtp::class)->middleware('auth');
Route::get('grafik/wwtp/{awal}/{akhir}', GrafikFilter::class)->middleware('auth');
Route::get('reportwwtpprint/{awal}/{akhir}', Grafikstockwwtp::class)->middleware('auth');
Route::get('consumable/', Consumbaleerp::class)->middleware('auth');
Route::get('asset/', Asseterp::class)->middleware('auth');
Route::get('cekph/', Cekph::class)->middleware('auth');
Route::get('cekphstp/', Cekphstp::class)->middleware('auth');
Route::get('phprint/{start}/{end}/{jenis}', function ($start, $end, $jenis) {

    $cekph1 = ph::where('shift', 1)->where('status', $jenis)->whereBetween('tanggal', [$start, $end])->orderBy('tanggal', 'asc')->get();
    $cekph2 = ph::where('shift', 2)->where('status', $jenis)->whereBetween('tanggal', [$start, $end])->orderBy('tanggal', 'asc')->get();
    $group = ph::groupBy('tanggal')->where('status', $jenis)->whereBetween('tanggal', [$start, $end])->orderBy('tanggal', 'asc')->pluck('tanggal');
    return view('invoice.ph', [
        'cekph1' => $cekph1,
        'cekph2' => $cekph2,
        'group' => $group,
        'jenis' => $jenis,
    ]);
})->middleware('auth');
Route::get('phpdf/{start}/{end}/{jenis}', function ($start, $end, $jenis) {

    $cekph1 = ph::where('shift', 1)->where('status', $jenis)->whereBetween('tanggal', [$start, $end])->orderBy('tanggal', 'asc')->get();
    $cekph2 = ph::where('shift', 2)->where('status', $jenis)->whereBetween('tanggal', [$start, $end])->orderBy('tanggal', 'asc')->get();
    $group = ph::groupBy('tanggal')->whereBetween('tanggal', [$start, $end])->orderBy('tanggal', 'asc')->pluck('tanggal');
    return view('invoice.phpdf', [
        'cekph1' => $cekph1,
        'cekph2' => $cekph2,
        'group' => $group,
        'start' => $start,
        'end' => $end,
        'jenis' => $jenis,
    ]);
    $pdf = Pdf::loadView('invoice.phpdf');
    return $pdf->download('ph.pdf');
})->middleware('auth');

Route::get('/invoice-pdf/{start}/{end}/{jenis}', function ($start, $end, $jenis) {
    // return view('invoice-pdf');

    $cekph1 = ph::where('shift', 1)->where('status', $jenis)->whereBetween('tanggal', [$start, $end])->orderBy('tanggal', 'asc')->get();
    $cekph2 = ph::where('shift', 2)->where('status', $jenis)->whereBetween('tanggal', [$start, $end])->orderBy('tanggal', 'asc')->get();
    $group = ph::groupBy('tanggal')->whereBetween('tanggal', [$start, $end])->orderBy('tanggal', 'asc')->pluck('tanggal');
    $data = array(
        'cekph1' => $cekph1,
        'cekph2' => $cekph2,
        'group' => $group,
    );
    $pdf = PDF::loadView('invoice-pdf', $data);
    return $pdf->download('invoice.pdf');
});
Route::get('summarywwtp', Summarywwtp::class)->middleware('auth');
Route::get('summaryprint', Summaryprint::class)->middleware('auth');
Route::get('assetwwtp', Assetwwtp::class)->middleware('auth');

// dashboard
Route::get('dashboard/', Dashboardyayasan::class)->middleware('auth');

// Carton
Route::get('carton-gap/', CartonGap::class)->middleware('auth');
Route::get('cartongapprint/{search}', CartonGapPrint::class)->middleware('auth');
Route::get('carton-gu/', CartonGu::class)->middleware('auth');
Route::get('cartonguprint/{search}', CartonGuPrint::class)->middleware('auth');
Route::get('carton-hnm/', CartonHnm::class)->middleware('auth');
Route::get('hnmprint/{awal}/{akhir}', Hnmprint::class)->middleware('auth');
Route::get('carton-target/', Cartontarget::class)->middleware('auth');
Route::get('carton-jcp/', CartonJcp::class)->middleware('auth');

// lang english

Route::get('locale/{locale}', function ($locale) {
    \Session::put('locale', $locale);
    return redirect()->back();
});

Route::get('/', admindepartemen::class);

Route::get('/test', Kategoriyayasan::class);
Route::get('/test/{query}', MovieId::class);
Route::get('/testfilm/{query}', FilmId::class);
Route::get('/movie/{genre}', Popolarmovie::class);
Route::get('/film/{genre}', Filmpopular::class);
