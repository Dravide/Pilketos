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
            <form action="{{ route('calon.store') }}" method="post">
                @csrf
                <input type="text" name="nama_calon" >
                <input type="text" name="jargon">
                <input type="text" name="visi_dan_misi">
                <input type="text" name="poster">
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection
