@extends('template.apps')

@section('konten')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Pemilihan Ketua Umum OSIS SMP Negeri 1 Cipanas</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Utility</a></li>
                        <li class="breadcrumb-item active">Starter Page</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('calon.store') }}" method="post">
                        @csrf
                        <div class="mb-3 row">
                            <label for="nama_calon" class="col-md-2 col-form-label">Nama Calon</label>
                            <div class="col-md-10">
                                <input class="form-control @error('nama_calon') is-invalid @enderror" type="text" name="nama_calon" value="{{ old('nama_calon') }}" id="nama_calon">
                                @error('nama_calon')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="jargon" class="col-md-2 col-form-label">Jargon</label>
                            <div class="col-md-10">
                                <input class="form-control @error('jargon') is-invalid @enderror" type="text" name="jargon" value="{{ old('jargon') }}" id="jargon">
                                @error('jargon')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <input type="text" name="visi_dan_misi">
                        <input type="text" name="poster">
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
