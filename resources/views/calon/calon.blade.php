@extends('template.apps')

@section('konten')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">{{ $judul }}s</h4>

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
            @if(Session::has('pesan'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    {!! Session::get('pesan') !!}
                </div>
            @endif
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">

                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Calon</th>
                                <th>Visi dan Misi</th>
                                <th>Jargon</th>
                                <th>Poster</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($calon as $key => $siswa)
                                <tr>
                                    <th scope="row">{{ $key + 1 }}</th>
                                    <td>{{ $siswa->nama_calon }}</td>
                                    <td>{{ $siswa->visi_dan_misi }}</td>
                                    <td>{{ $siswa->jargon }}</td>
                                    <td>{{ $siswa->poster }}</td>
                                    <td>
{{--                                        <button type="button" class="btn btn-outline-success btn-sm">Edit</button>--}}
{{--                                        <button type="button" class="btn btn-outline-danger btn-sm">Cancel</button>--}}
                                        <a href="{{ route('calon.edit', [$siswa->id]) }}" class="btn btn-outline-success btn-sm">Edit</a>
                                        <form action="{{ route('calon.destroy', $siswa->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-outline-danger btn-sm" onclick="return confirm('Anda Yakin Ingin Menghapus!')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
