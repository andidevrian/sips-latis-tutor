@extends('layouts.app')

@section('title', 'Siswa')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="bg-white shadow-2xl rounded-2xl overflow-hidden">
        <!-- Header -->
        <div class="bg-gradient-to-r from-blue-600 to-blue-800 px-8 py-6">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between">
                <h1 class="text-3xl font-bold text-white">Data Siswa</h1>
                <a href="{{ route('siswa.create') }}"
                   class="mt-4 sm:mt-0 inline-flex items-center px-6 py-3 bg-white text-blue-700 font-bold rounded-xl shadow-lg hover:shadow-xl transition transform hover:-translate-y-1">
                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                    </svg>
                    Tambah Siswa
                </a>
            </div>
        </div>

        <!-- Filter & Export -->
        <div class="p-6 bg-gray-50 border-b">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">Filter Lembaga</label>
                    <select id="lembagaFilter" class="w-full px-4 py-3 border-2 border-gray-300 rounded-xl focus:ring-4 focus:ring-blue-300 focus:border-blue-500 transition">
                        <option value="">-- Semua Lembaga --</option>
                        @foreach($lembagas as $l)
                            <option value="{{ $l->id }}">{{ $l->nama_lembaga }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex items-end">
                    <button id="exportExcel" class="px-8 py-3 bg-green-600 hover:bg-green-700 text-white font-bold rounded-xl shadow-lg flex items-center transition transform hover:scale-105">
                        <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m-4-6v6m8-6v6m-8 4h8a2 2 0 002-2V6a2 2 0 00-2-2H8a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        Export Excel
                    </button>
                </div>
            </div>
        </div>

        <!-- Tabel -->
        <div class="overflow-x-auto">
            <table id="siswaTable" class="min-w-full divide-y divide-gray-300">
                <thead class="bg-gray-900">
                    <tr>
                        <th class="px-6 py-4 text-left text-xs font-bold text-white uppercase tracking-wider">NIS</th>
                        <th class="px-6 py-4 text-left text-xs font-bold text-white uppercase tracking-wider">Nama</th>
                        <th class="px-6 py-4 text-left text-xs font-bold text-white uppercase tracking-wider">Email</th>
                        <th class="px-6 py-4 text-center text-xs font-bold text-white uppercase tracking-wider">Foto</th>
                        <th class="px-6 py-4 text-center text-xs font-bold text-white uppercase tracking-wider">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200 text-gray-800">
                    <!-- Data diisi otomatis -->
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // CSRF Token
    $.ajaxSetup({
        headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' }
    });
</script>

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.tailwindcss.min.js"></script>

<script>
$(document).ready(function() {
    $('#siswaTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: '{{ route('siswa.index') }}',
            data: function(d) {
                d.lembaga_id = $('#lembagaFilter').val();
            }
        },
        columns: [
            { data: 'nis', className: 'px-6 py-4 font-semibold text-gray-900' },
            { data: 'nama', className: 'px-6 py-4 text-gray-700' },
            { data: 'email', className: 'px-6 py-4 text-gray-600' },
            {
                data: 'foto',
                orderable: false,
                searchable: false,
                className: 'px-6 py-4 text-center',
                render: function(data) {
                    return data
                        ? '<img src="/storage/' + data + '" class="w-20 h-28 object-cover shadow-2xl border-4 border-white mx-auto rounded-xl" alt="Foto siswa">'
                        : '<div class="w-20 h-28 bg-gradient-to-br from-gray-200 to-gray-300 border-4 border-dashed border-gray-400 mx-auto rounded-xl flex items-center justify-center"><span class="text-gray-500 font-medium">Tanpa Foto</span></div>';
                }
            },
            {
                data: null,
                orderable: false,
                searchable: false,
                className: 'px-6 py-4 text-center',
                render: function(data, type, row) {
                    return `
                        <div class="flex gap-3 justify-center">
                            <a href="/siswa/${row.id}/edit" class="px-6 py-3 bg-amber-500 hover:bg-amber-600 text-white font-bold text-sm rounded-xl shadow-lg transition transform hover:scale-105">
                                Edit
                            </a>
                            <form action="/siswa/${row.id}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus siswa ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-6 py-3 bg-red-600 hover:bg-red-700 text-white font-bold text-sm rounded-xl shadow-lg transition transform hover:scale-105">
                                    Hapus
                                </button>
                            </form>
                        </div>
                    `;
                }
            }
        ],
        language: {
            processing:     "Memuat data...",
            emptyTable:     "Tidak ada data siswa",
            info:           "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
            infoEmpty:      "Menampilkan 0 data",
            lengthMenu:     "Tampilkan _MENU_ entri",
            zeroRecords:    "Tidak ada data yang cocok",
            paginate: {
                first:      "Awal",
                previous:   "‹",
                next:       "›",
                last:       "Akhir"
            }
        },
        pageLength: 10,
        lengthMenu: [10, 25, 50, 100],
        dom: '<"flex justify-between items-center mb-4"lf>t<"flex justify-between items-center mt-4"ip>',
        drawCallback: function() {
            $('.paginate_button').addClass('px-4 py-2 mx-1 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 transition');
            $('.paginate_button.current').addClass('bg-blue-600 text-white border-blue-600');
        }
    });

    // Filter & Export
    $('#lembagaFilter').on('change', function() {
        $('#siswaTable').DataTable().ajax.reload();
    });

    $('#exportExcel').on('click', function() {
        const id = $('#lembagaFilter').val();
        window.location = '{{ route('siswa.export') }}' + (id ? '?lembaga_id=' + id : '');
    });
});
</script>
@endpush