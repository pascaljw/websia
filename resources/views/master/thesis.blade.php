@extends('layout.master.index')

@section('content')    
    
<section id="tugas-akhir" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Tugas Akhir Mahasiswa</h2>

        @if($data->count())
        <div class="table-responsive">
            <table class="table table-bordered table-striped text-center">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Judul</th>
                        <th>Pembimbing</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $i => $item)
                        <tr>
                            <td>{{ $i + 1 }}</td>
                            <td>{{ $item->nama_mahasiswa }}</td>
                            <td>{{ $item->nim }}</td>
                            <td class="text-start">{{ $item->judul }}</td>
                            <td>{{ $item->pembimbing }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @else
        <p class="text-center text-muted">Belum ada data tugas akhir.</p>
        @endif
    </div>
</section>



@endsection  
 