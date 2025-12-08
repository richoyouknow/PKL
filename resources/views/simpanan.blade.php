@extends('layout.master')

@push('styles')
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>

    <script>
        tailwind.config = {
            darkMode: "class",
            important: "#tailwind-scope",
            theme: {
                extend: {
                    colors: {
                        primary: "#197fe6",
                        "background-light": "#f6f7f8",
                        "background-dark": "#111921",
                    },
                },
            },
        }
    </script>

    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined&display=swap" rel="stylesheet" />
@endpush

@section('content')
    <!-- Hero Start -->
    <div class="container-fluid pb-5 bg-primary hero-header">
        <div class="container py-5">
            <div class="row g-3 align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="display-1 mb-0 animated slideInLeft">About</h1>
                </div>
                <div class="col-lg-6 animated slideInRight">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center justify-content-lg-end mb-0">
                            <li class="breadcrumb-item"><a class="text-primary" href="#!">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-primary" href="#!">Pages</a></li>
                            <li class="breadcrumb-item text-secondary active" aria-current="page">About</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <!-- About Start -->
    <div id="tailwind-scope">
        <div class="relative min-h-screen w-full bg-background-light dark:bg-background-dark py-10">
            <div class="max-w-9xl mx-auto px-4">

                <!-- HEADER -->
                <div class="flex flex-wrap justify-between items-start gap-4 mb-8 animated slideInDown">
                    <div>
                        <h1 class="text-4xl font-black text-slate-900 dark:text-slate-50">
                            Detail Simpanan Anggota
                        </h1>
                        <p class="text-slate-500 dark:text-slate-400">
                            Lihat rincian lengkap simpanan dan riwayat transaksi Anda.
                        </p>
                    </div>

                    <div class="flex gap-3">
                        <button
                            class="h-10 px-4 rounded-lg bg-slate-200 dark:bg-slate-700
                   text-sm font-semibold flex items-center gap-2 leading-none">
                            <span class="material-symbols-outlined text-lg">download</span>
                            Download PDF
                        </button>

                        <button
                            class="h-10 px-4 rounded-lg bg-primary text-white
                   text-sm font-semibold flex items-center gap-2 leading-none">
                            <span class="material-symbols-outlined text-lg">print</span>
                            Cetak Laporan
                        </button>
                    </div>

                </div>

                <!-- DETAIL SIMPANAN -->
                <div
                    class="bg-white dark:bg-slate-800/50 rounded-xl p-6 shadow-sm border border-slate-200 dark:border-slate-700 animated slideInUp">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

                        {{-- Contoh Data (Anda bisa looping dari controller) --}}
                        <div class="flex flex-col border-t py-4">
                            <p class="text-slate-500 text-sm">Tanggal</p>
                            <p class="text-slate-800 dark:text-slate-200 text-sm font-medium">23/10/2023</p>
                        </div>

                        <div class="flex flex-col border-t py-4">
                            <p class="text-slate-500 text-sm">No Rek</p>
                            <p class="text-slate-800 dark:text-slate-200 text-sm font-medium">0123456789</p>
                        </div>

                        <div class="flex flex-col border-t py-4">
                            <p class="text-slate-500 text-sm">Produk Simpanan</p>
                            <p class="text-slate-800 dark:text-slate-200 text-sm font-medium">Simpanan Wajib</p>
                        </div>

                        <div class="flex flex-col border-t py-4">
                            <p class="text-slate-500 text-sm">Nomor Anggota</p>
                            <p class="text-slate-800 dark:text-slate-200 text-sm font-medium">KSP-001</p>
                        </div>

                        <div class="flex flex-col border-t py-4">
                            <p class="text-slate-500 text-sm">Nama Anggota</p>
                            <p class="text-slate-800 dark:text-slate-200 text-sm font-medium">Budi Santoso</p>
                        </div>

                        <div class="flex flex-col border-t py-4">
                            <p class="text-slate-500 text-sm">No Identitas</p>
                            <p class="text-slate-800 dark:text-slate-200 text-sm font-medium">3301010101010001</p>
                        </div>

                        <div class="flex flex-col border-t py-4 col-span-2 lg:col-span-1">
                            <p class="text-slate-500 text-sm">Alamat</p>
                            <p class="text-slate-800 dark:text-slate-200 text-sm font-medium">
                                Jl. Merdeka No. 12, Jakarta
                            </p>
                        </div>

                        <div class="flex flex-col border-t py-4">
                            <p class="text-slate-500 text-sm">Status Anggota</p>
                            <p class="text-slate-800 dark:text-slate-200 text-sm font-medium">Aktif</p>
                        </div>

                        <div class="flex flex-col border-t py-4">
                            <p class="text-slate-500 text-sm">Tanggal Daftar Rekening</p>
                            <p class="text-slate-800 dark:text-slate-200 text-sm font-medium">01/01/2020</p>
                        </div>

                        <div class="flex flex-col border-t py-4 bg-primary/10 dark:bg-primary/20 rounded-lg col-span-2 p-4">
                            <p class="text-slate-500 dark:text-slate-300 text-sm">Saldo Terakhir</p>
                            <p class="text-primary dark:text-sky-300 text-2xl font-bold">Rp 15.000.000</p>
                        </div>

                    </div>
                </div>

                <!-- RIWAYAT TRANSAKSI -->
                <h2 class="text-xl font-bold text-slate-900 dark:text-slate-50 mt-10 mb-3 animated slideInDown">Riwayat Transaksi</h2>

                <div
                    class="bg-white dark:bg-slate-800/50 rounded-xl shadow-sm border border-slate-200 dark:border-slate-700 overflow-hidden animated slideInUp">

                    <div class="overflow-x-auto">
                        <table class="w-full text-sm text-left">
                            <thead class="bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300 uppercase">
                                <tr>
                                    <th class="px-6 py-3">Tanggal</th>
                                    <th class="px-6 py-3">Jenis Transaksi</th>
                                    <th class="px-6 py-3 text-right">Debit</th>
                                    <th class="px-6 py-3 text-right">Kredit</th>
                                    <th class="px-6 py-3 text-right">Saldo</th>
                                </tr>
                            </thead>

                            <tbody>
                                {{-- Contoh Baris --}}
                                <tr class="border-b dark:border-slate-700">
                                    <td class="px-6 py-4 font-medium">20/10/2023</td>
                                    <td class="px-6 py-4">Setoran Tunai</td>
                                    <td class="px-6 py-4 text-right text-red-600">Rp 0</td>
                                    <td class="px-6 py-4 text-right text-green-600">Rp 1.000.000</td>
                                    <td class="px-6 py-4 text-right font-semibold">Rp 15.000.000</td>
                                </tr>

                                {{-- Tambahkan Loop Untuk Data Asli --}}
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- About End -->
@endsection
