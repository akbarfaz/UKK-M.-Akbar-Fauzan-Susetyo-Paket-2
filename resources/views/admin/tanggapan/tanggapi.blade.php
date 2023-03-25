@extends('admin.layouts.main')

@section('content')
<main id="main" class="main">
  <section class="section">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title" style="color:green">Data Tanggapan</h5>

              <form class="row g-3" action="{{ route('tanggapan.store', $item->id_pengaduan)}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row mb-3">
                    <label for="tgl_tanggapan" class="col-sm-2 col-form-label">Tanggal Tanggapan</label>
                    <div class="col-sm-10">
                      <input type="date" name="tgl_tanggapan" class="form-control">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="tanggapan" class="col-sm-2 col-form-label">Beri Tanggapan</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" name="tanggapan" style="height: 100px"></textarea>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Submit Button</label>
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-primary">Submit Form</button>
                    </div>
              </form>
            </div>
          </div>
          </section>
</main>
@endsection
