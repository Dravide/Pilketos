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
                    <form action="{{ route('calon.store') }}" method="post" enctype="multipart/form-data">
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
                        <div class="mb-3 row">
                            <label for="visi_dan_misi" class="col-md-2 col-form-label">Visi dan Misi</label>
                            <div class="col-md-10">
                                <textarea class="form-control @error('visi_dan_misi') is-invalid @enderror" type="text" name="visi_dan_misi"  id="visi_dan_misi">{{ old('visi_dan_misi') }}</textarea>
                                @error('visi_dan_misi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="poster" class="col-md-2 col-form-label">Poster</label>
                            <div class="col-md-10">
                                <input class="form-control @error('poster') is-invalid @enderror" type="file" name="poster" id="poster">
                                @error('poster')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
