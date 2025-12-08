@extends('layout.master')

@push('styles')
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
                darkMode: "class",
                important: "#tailwind-scope",
                corePlugins: {
                    preflight: false, // <= WAJIB untuk melindungi navbar bootstrap
                },
                theme: { // Hindari bentrok dengan .container Bootstrap
                        extend: {
                            colors: {
                                "primary": "#197fe6",
                                "background-light": "#f6f7f8",
                                "background-dark": "#111921",
                            },
                            fontFamily: {
                                "display": ["Manrope", "sans-serif"]
                            },
                            borderRadius: {
                                "DEFAULT": "0.25rem",
                                "lg": "0.5rem",
                                "xl": "0.75rem",
                                "full": "9999px"
                            },
                        },
                    },
                }
    </script>

    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
@endpush

@section('content')
    <div id="tailwind-scope">
        <div class="relative flex h-auto min-h-screen w-full flex-col group/design-root overflow-x-hidden">
            <div class="layout-container flex h-full grow flex-col">
                <main class="px-4 sm:px-6 lg:px-20 flex flex-1 justify-center py-8 md:py-12">
                    <div class="layout-content-container flex flex-col w-full max-w-6xl flex-1 gap-8">
                        <div class="flex flex-col gap-4">
                            <div class="flex flex-wrap justify-between gap-4 items-end">
                                <div class="flex min-w-72 flex-col gap-2">
                                    <p
                                        class="text-slate-900 dark:text-slate-50 text-3xl md:text-4xl font-black leading-tight tracking-[-0.033em]">
                                        Detail Pinjaman #PJN00123</p>
                                    <p class="text-slate-600 dark:text-slate-400 text-base font-normal leading-normal">
                                        Informasi lengkap mengenai status pinjaman dan riwayat pembayaran Anda.</p>
                                </div>
                                <div class="flex gap-2">
                                    <button
                                        class="flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 gap-2 bg-white dark:bg-slate-800 text-slate-900 dark:text-slate-50 text-sm font-bold leading-normal tracking-[0.015em] border border-slate-200 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-700">
                                        <span class="material-symbols-outlined text-base">help</span>
                                        <span class="truncate">Ajukan Pertanyaan</span>
                                    </button>
                                    <button
                                        class="flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 gap-2 bg-primary text-white text-sm font-bold leading-normal tracking-[0.015em] hover:bg-primary/90">
                                        <span class="material-symbols-outlined text-base">print</span>
                                        <span class="truncate">Cetak Laporan</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex p-6 @container bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800">
                            <div
                                class="flex w-full flex-col gap-4 @[520px]:flex-row @[520px]:justify-between @[520px]:items-center">
                                <div class="flex gap-4">
                                    <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full h-20 w-20 min-w-20"
                                        data-alt="Profile picture of Budi Santoso"
                                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAeGKjIfVgBsWf3wAFtMEhpIkwYGaImbcuPCicU-nDAdCB7kvygRTlOmO9H4sUSYBeXJIYEPbZ7tggeKeM4vLLpOgm9LVThUM3p5L_a64qBg74853J73nBvpBEKaorIqgEonjURazkVjaxWiep9Hd0s5FCyLLkYp7MjSsZPvRD4yNsnmDcN9ige7r1FlLBM0TJKaBGQdoacGzcYaGPN8jf5uJbZSll_S166BWx8N3MEcWYx-XNC89XU5ZZS-875s9RfrfoDNq96uT6f");'>
                                    </div>
                                    <div class="flex flex-col justify-center">
                                        <p
                                            class="text-slate-900 dark:text-slate-50 text-xl font-bold leading-tight tracking-[-0.015em]">
                                            Budi Santoso</p>
                                        <p class="text-slate-600 dark:text-slate-400 text-base font-normal leading-normal">
                                            ID Anggota: KSP-0812</p>
                                    </div>
                                </div>
                                <button
                                    class="flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-slate-100 dark:bg-slate-800 text-slate-900 dark:text-slate-50 text-sm font-bold leading-normal tracking-[0.015em] w-full max-w-[480px] @[480px]:w-auto hover:bg-slate-200 dark:hover:bg-slate-700">
                                    <span class="truncate">Lihat Profil Lengkap</span>
                                </button>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                            <div
                                class="flex flex-col gap-2 rounded-xl p-6 border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900">
                                <p class="text-slate-600 dark:text-slate-400 text-base font-medium leading-normal">Status
                                    Pinjaman</p>
                                <div class="flex items-center">
                                    <span
                                        class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-800/30 dark:text-green-500">Aktif</span>
                                </div>
                            </div>
                            <div
                                class="flex flex-col gap-2 rounded-xl p-6 border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900">
                                <p class="text-slate-600 dark:text-slate-400 text-base font-medium leading-normal">Total
                                    Pinjaman</p>
                                <p
                                    class="text-slate-900 dark:text-slate-50 tracking-light text-2xl font-bold leading-tight">
                                    Rp 12.000.000</p>
                            </div>
                            <div
                                class="flex flex-col gap-2 rounded-xl p-6 border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900">
                                <p class="text-slate-600 dark:text-slate-400 text-base font-medium leading-normal">Sisa
                                    Pinjaman</p>
                                <p
                                    class="text-slate-900 dark:text-slate-50 tracking-light text-2xl font-bold leading-tight">
                                    Rp 4.500.000</p>
                            </div>
                            <div
                                class="flex flex-col gap-2 rounded-xl p-6 border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900">
                                <p class="text-slate-600 dark:text-slate-400 text-base font-medium leading-normal">Jatuh
                                    Tempo Berikutnya</p>
                                <p
                                    class="text-slate-900 dark:text-slate-50 tracking-light text-2xl font-bold leading-tight">
                                    15 Juli 2024</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-4">
                            <h3 class="text-xl font-bold text-slate-900 dark:text-slate-50">Riwayat Pembayaran Angsuran</h3>
                            <div class="overflow-x-auto border border-slate-200 dark:border-slate-800 rounded-xl">
                                <table
                                    class="min-w-full divide-y divide-slate-200 dark:divide-slate-800 bg-white dark:bg-slate-900">
                                    <thead class="bg-slate-50 dark:bg-slate-800/50">
                                        <tr>
                                            <th class="px-6 py-3 text-left text-xs font-bold text-slate-600 dark:text-slate-400 uppercase tracking-wider"
                                                scope="col">Tanggal Bayar</th>
                                            <th class="px-6 py-3 text-left text-xs font-bold text-slate-600 dark:text-slate-400 uppercase tracking-wider"
                                                scope="col">Jumlah Dibayar</th>
                                            <th class="px-6 py-3 text-left text-xs font-bold text-slate-600 dark:text-slate-400 uppercase tracking-wider"
                                                scope="col">Saldo Pinjaman</th>
                                            <th class="px-6 py-3 text-left text-xs font-bold text-slate-600 dark:text-slate-400 uppercase tracking-wider"
                                                scope="col">Metode Pembayaran</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-slate-200 dark:divide-slate-800">
                                        <tr>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-slate-900 dark:text-slate-50">
                                                15 Juni 2024</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-slate-900 dark:text-slate-50">
                                                Rp 1.500.000</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-slate-600 dark:text-slate-400">
                                                Rp 4.500.000</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-slate-600 dark:text-slate-400">
                                                Transfer Bank</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-slate-900 dark:text-slate-50">
                                                15 Mei 2024</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-slate-900 dark:text-slate-50">
                                                Rp 1.500.000</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-slate-600 dark:text-slate-400">
                                                Rp 6.000.000</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-slate-600 dark:text-slate-400">
                                                Transfer Bank</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-slate-900 dark:text-slate-50">
                                                15 April 2024</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-slate-900 dark:text-slate-50">
                                                Rp 1.500.000</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-slate-600 dark:text-slate-400">
                                                Rp 7.500.000</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-slate-600 dark:text-slate-400">
                                                Tunai</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-slate-900 dark:text-slate-50">
                                                15 Maret 2024</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-slate-900 dark:text-slate-50">
                                                Rp 1.500.000</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-slate-600 dark:text-slate-400">
                                                Rp 9.000.000</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-slate-600 dark:text-slate-400">
                                                Transfer Bank</td>
                                        </tr>
                                        <tr>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-slate-900 dark:text-slate-50">
                                                15 Februari 2024</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-slate-900 dark:text-slate-50">
                                                Rp 1.500.000</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-slate-600 dark:text-slate-400">
                                                Rp 10.500.000</td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-slate-600 dark:text-slate-400">
                                                Tunai</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <nav aria-label="Pagination" class="flex items-center justify-between py-3">
                                <div class="hidden sm:block">
                                    <p class="text-sm text-slate-600 dark:text-slate-400">
                                        Menampilkan <span class="font-medium">1</span> sampai <span
                                            class="font-medium">5</span>
                                        dari <span class="font-medium">8</span> hasil
                                    </p>
                                </div>
                                <div class="flex flex-1 justify-between sm:justify-end gap-2">
                                    <a class="relative inline-flex items-center rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-900 px-4 py-2 text-sm font-medium text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-800"
                                        href="#">
                                        Sebelumnya
                                    </a>
                                    <a class="relative inline-flex items-center rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-900 px-4 py-2 text-sm font-medium text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-800"
                                        href="#">
                                        Berikutnya
                                    </a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
@endsection
