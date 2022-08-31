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
    @if(Session::has('pesan'))
        <div class="alert-info">{{ Session::get('pesan') }}</div>
    @endif
    <div class="row">
        <div class="col-12">
            @foreach($calon as $siswa)
               <li>
                   {{$siswa->nama_calon}} <a href="{{ route('calon.edit', [$siswa->id]) }}">Edit</a> |
                   <form action="{{ route('calon.destroy', $siswa->id) }}" method="post">
                       @csrf
                       @method('DELETE')
                       <button onclick="return confirm('Anda Yakin Ingin Menghapus!')">Hapus</button>

                   </form>
               </li>
            @endforeach
        </div>
    </div>
@endsection
