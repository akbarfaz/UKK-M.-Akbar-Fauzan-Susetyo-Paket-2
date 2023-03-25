@extends('masyarakat.layouts.template')

@section('content')
<main id="main" class="main">
<section class="section">
  <div class="col-12">
      <div class="card recent-sales overflow-auto">
           <div class="card">
                      @if (session('alert'))
                      <div class="alert alert-success">
                          {{ session('alert') }}
                      </div>
                  @endif
        <div class="card-body">
          <h5 class="card-title" style="color:goldenrod">Pengaduan <span> Masyarakat</span></h5>

          <table class="table table-borderless">
            <thead>
              <tr>
                  <tr>
                      <th scope="col">No</th>
                      <th scope="col">NIK</th>
                      <th scope="col">Isi Laporan</th>
                      <th scope="col">Tanggal Pengaduan</th>
                      <th scope="col">Foto</th>
                      <th scope="col">Status</th>
                      <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($datas as $item)
              @if ($item->nik == Auth::user()->nik)
                <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $item->nik }}</td>
                  <td>{{ $item->isi_laporan }}</td>
                  <td>{{ $item->tgl_pengaduan }}</td>
                  <td>
                      @if ($item->foto)
                    <img style="width:50px; height:50px; ofervlow:hidden;" src="{{ asset('storage/' . $item->foto) }}" alt=" ">
                    @else
                    <img style="width:50px; height:50px; ofervlow:hidden;" src="{{ asset('assets/img/card.jpg') }}" alt="">
                    @endif
                  </td>
                  <td>{{ $item->status }}</td>
                 <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-default">Action</button>
                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon"
                      data-bs-toggle="dropdown" aria-expanded="false">
                  </button>
                  <div class="dropdown-menu" role="menu" style="">
                        @if ($item->status == 'selesai')
                    <a class="dropdown-item" href="{{ route('list-pengaduan.show', $item->id_pengaduan) }}">Show</a>
                    @endif
                    </form>
                    </div>
               </div>
            </td>
            @endif
           </tr>
          @endforeach
            </tbody>
          </table>
        </div>

      </div>
    </div>
    </section>
</main>
@endsection
