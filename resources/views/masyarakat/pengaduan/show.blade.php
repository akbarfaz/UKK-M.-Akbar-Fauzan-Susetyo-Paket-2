@extends('masyarakat.layouts.template')

@section('content')
<main id="main" class="main">

<div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Data Pengaduan</h5>
        @foreach ($data as $item)
    {{ $item->isi_laporan }}
    {{ $item->tgl_laporan }}
    @endforeach
      </div>
    </div>
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Tanggapan</h5>
      @foreach ($data as $item)
          {{ $item->tanggapan->tanggapan }}
      @endforeach
            </div>
          </div>
  </div>
</main>

@endsection
