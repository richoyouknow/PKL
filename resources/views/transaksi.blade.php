 @extends('layout.master')

 @push('styles')
     <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

     <script>
         tailwind.config = {
             darkMode: "class",
             important: "#tailwind-scope",
             corePlugins: {
                 preflight: false, // <= WAJIB untuk melindungi navbar bootstrap
             },
             theme: {

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

     <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700;800;900&amp;display=swap"
         rel="stylesheet" />
     <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
         rel="stylesheet" />
     <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
         rel="stylesheet" />
     <style>
         .material-symbols-outlined {
             font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
         }
     </style>
 @endpush

 @section('content')

     <body class="bg-background-light dark:bg-background-dark font-display text-gray-800 dark:text-gray-200">
         <div id="tailwind-scope">
             <div class="relative flex h-auto min-h-screen w-full flex-col">
                 <div class="flex-1">
                     <main class="p-6 md:p-8">
                         <div class="mx-auto max-w-7xl">
                             <!-- Page Heading -->
                             <div class="flex flex-wrap items-center justify-between gap-4 mb-6">
                                 <div class="flex flex-col gap-1">
                                     <h1
                                         class="text-3xl font-black leading-tight tracking-tight text-gray-900 dark:text-white">
                                         Riwayat Transaksi Umum</h1>
                                     <p class="text-gray-500 dark:text-gray-400">Lihat semua transaksi keuangan Anda di satu
                                         tempat.</p>
                                 </div>
                                 <button
                                     class="flex h-10 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-primary pl-4 pr-3 text-sm font-bold text-white">
                                     <span class="material-symbols-outlined text-base">download</span>
                                     <span>Export CSV</span>
                                 </button>
                             </div>
                             <!-- Filters Section -->
                             <div
                                 class="mb-6 rounded-xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900/50 p-4">
                                 <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 items-end">
                                     <div class="flex flex-col gap-1.5 w-full">
                                         <label class="text-sm font-medium text-gray-700 dark:text-gray-300"
                                             for="date-range">Rentang Tanggal</label>
                                         <button
                                             class="flex h-12 w-full cursor-pointer items-center justify-between overflow-hidden rounded-lg border border-gray-200 dark:border-gray-700 bg-background-light dark:bg-gray-800 px-4 text-sm font-medium text-gray-700 dark:text-gray-300"
                                             id="date-range">
                                             <span>Pilih Tanggal</span>
                                             <span class="material-symbols-outlined text-lg">calendar_today</span>
                                         </button>
                                     </div>
                                     <div class="flex flex-col gap-1.5 w-full">
                                         <label class="text-sm font-medium text-gray-700 dark:text-gray-300"
                                             for="transaction-type">Jenis Transaksi</label>
                                         <div class="relative">
                                             <select
                                                 class="form-select w-full h-12 rounded-lg border-gray-200 dark:border-gray-700 bg-background-light dark:bg-gray-800 text-gray-700 dark:text-gray-300 focus:ring-primary focus:border-primary"
                                                 id="transaction-type">
                                                 <option>Semua</option>
                                                 <option>Setoran</option>
                                                 <option>Penarikan</option>
                                                 <option>Pinjaman</option>
                                             </select>
                                         </div>
                                     </div>
                                     <div class="lg:col-span-2 flex flex-col gap-1.5 w-full">
                                         <label class="text-sm font-medium text-gray-700 dark:text-gray-300"
                                             for="search">Cari
                                             Deskripsi</label>
                                         <div class="relative flex w-full">
                                             <span
                                                 class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-gray-400">search</span>
                                             <input
                                                 class="form-input flex w-full h-12 min-w-0 flex-1 resize-none overflow-hidden rounded-lg border-gray-200 dark:border-gray-700 bg-background-light dark:bg-gray-800 text-gray-800 dark:text-gray-200 placeholder:text-gray-400 dark:placeholder:text-gray-500 pl-11 pr-4 text-base font-normal leading-normal focus:ring-primary focus:border-primary"
                                                 id="search" placeholder="Cari berdasarkan deskripsi..."
                                                 value="" />
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <!-- Transactions Table -->
                             <div
                                 class="overflow-x-auto rounded-xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900/50">
                                 <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                     <thead class="bg-gray-50 dark:bg-gray-800">
                                         <tr>
                                             <th class="px-6 py-3 text-left text-xs font-bold uppercase tracking-wider text-gray-500 dark:text-gray-400"
                                                 scope="col">
                                                 <div class="flex items-center gap-1">Tanggal <span
                                                         class="material-symbols-outlined text-base">swap_vert</span></div>
                                             </th>
                                             <th class="px-6 py-3 text-left text-xs font-bold uppercase tracking-wider text-gray-500 dark:text-gray-400"
                                                 scope="col">
                                                 Jenis Transaksi
                                             </th>
                                             <th class="px-6 py-3 text-left text-xs font-bold uppercase tracking-wider text-gray-500 dark:text-gray-400"
                                                 scope="col">
                                                 Deskripsi
                                             </th>
                                             <th class="px-6 py-3 text-right text-xs font-bold uppercase tracking-wider text-gray-500 dark:text-gray-400"
                                                 scope="col">
                                                 <div class="flex items-center justify-end gap-1">Jumlah <span
                                                         class="material-symbols-outlined text-base">swap_vert</span></div>
                                             </th>
                                         </tr>
                                     </thead>
                                     <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                         <tr>
                                             <td
                                                 class="whitespace-nowrap px-6 py-4 text-sm text-gray-600 dark:text-gray-300">
                                                 15
                                                 Agu 2023</td>
                                             <td class="whitespace-nowrap px-6 py-4 text-sm">
                                                 <span
                                                     class="inline-flex items-center rounded-md bg-green-100 dark:bg-green-900/50 px-2.5 py-1 text-xs font-semibold text-green-800 dark:text-green-300">Setoran
                                                     Tunai</span>
                                             </td>
                                             <td
                                                 class="whitespace-nowrap px-6 py-4 text-sm text-gray-800 dark:text-gray-200 font-medium">
                                                 Setoran bulanan</td>
                                             <td
                                                 class="whitespace-nowrap px-6 py-4 text-right text-sm font-semibold text-green-600 dark:text-green-400">
                                                 + Rp 500.000</td>
                                         </tr>
                                         <tr>
                                             <td
                                                 class="whitespace-nowrap px-6 py-4 text-sm text-gray-600 dark:text-gray-300">
                                                 14
                                                 Agu 2023</td>
                                             <td class="whitespace-nowrap px-6 py-4 text-sm">
                                                 <span
                                                     class="inline-flex items-center rounded-md bg-red-100 dark:bg-red-900/50 px-2.5 py-1 text-xs font-semibold text-red-800 dark:text-red-300">Penarikan
                                                     ATM</span>
                                             </td>
                                             <td
                                                 class="whitespace-nowrap px-6 py-4 text-sm text-gray-800 dark:text-gray-200 font-medium">
                                                 Penarikan darurat</td>
                                             <td
                                                 class="whitespace-nowrap px-6 py-4 text-right text-sm font-semibold text-red-600 dark:text-red-400">
                                                 - Rp 250.000</td>
                                         </tr>
                                         <tr>
                                             <td
                                                 class="whitespace-nowrap px-6 py-4 text-sm text-gray-600 dark:text-gray-300">
                                                 10
                                                 Agu 2023</td>
                                             <td class="whitespace-nowrap px-6 py-4 text-sm">
                                                 <span
                                                     class="inline-flex items-center rounded-md bg-blue-100 dark:bg-blue-900/50 px-2.5 py-1 text-xs font-semibold text-blue-800 dark:text-blue-300">Pembayaran
                                                     Pinjaman</span>
                                             </td>
                                             <td
                                                 class="whitespace-nowrap px-6 py-4 text-sm text-gray-800 dark:text-gray-200 font-medium">
                                                 Angsuran ke-3 Pinjaman #123</td>
                                             <td
                                                 class="whitespace-nowrap px-6 py-4 text-right text-sm font-semibold text-red-600 dark:text-red-400">
                                                 - Rp 1.250.000</td>
                                         </tr>
                                         <tr>
                                             <td
                                                 class="whitespace-nowrap px-6 py-4 text-sm text-gray-600 dark:text-gray-300">
                                                 05
                                                 Agu 2023</td>
                                             <td class="whitespace-nowrap px-6 py-4 text-sm">
                                                 <span
                                                     class="inline-flex items-center rounded-md bg-yellow-100 dark:bg-yellow-900/50 px-2.5 py-1 text-xs font-semibold text-yellow-800 dark:text-yellow-300">Bunga
                                                     Simpanan</span>
                                             </td>
                                             <td
                                                 class="whitespace-nowrap px-6 py-4 text-sm text-gray-800 dark:text-gray-200 font-medium">
                                                 Bunga simpanan Juli 2023</td>
                                             <td
                                                 class="whitespace-nowrap px-6 py-4 text-right text-sm font-semibold text-green-600 dark:text-green-400">
                                                 + Rp 15.750</td>
                                         </tr>
                                         <tr>
                                             <td
                                                 class="whitespace-nowrap px-6 py-4 text-sm text-gray-600 dark:text-gray-300">
                                                 02
                                                 Agu 2023</td>
                                             <td class="whitespace-nowrap px-6 py-4 text-sm">
                                                 <span
                                                     class="inline-flex items-center rounded-md bg-green-100 dark:bg-green-900/50 px-2.5 py-1 text-xs font-semibold text-green-800 dark:text-green-300">Setoran
                                                     Tunai</span>
                                             </td>
                                             <td
                                                 class="whitespace-nowrap px-6 py-4 text-sm text-gray-800 dark:text-gray-200 font-medium">
                                                 Setoran bulanan</td>
                                             <td
                                                 class="whitespace-nowrap px-6 py-4 text-right text-sm font-semibold text-green-600 dark:text-green-400">
                                                 + Rp 500.000</td>
                                         </tr>
                                         <tr>
                                             <td
                                                 class="whitespace-nowrap px-6 py-4 text-sm text-gray-600 dark:text-gray-300">
                                                 28
                                                 Jul 2023</td>
                                             <td class="whitespace-nowrap px-6 py-4 text-sm">
                                                 <span
                                                     class="inline-flex items-center rounded-md bg-red-100 dark:bg-red-900/50 px-2.5 py-1 text-xs font-semibold text-red-800 dark:text-red-300">Penarikan
                                                     ATM</span>
                                             </td>
                                             <td
                                                 class="whitespace-nowrap px-6 py-4 text-sm text-gray-800 dark:text-gray-200 font-medium">
                                                 Biaya kebutuhan</td>
                                             <td
                                                 class="whitespace-nowrap px-6 py-4 text-right text-sm font-semibold text-red-600 dark:text-red-400">
                                                 - Rp 300.000</td>
                                         </tr>
                                     </tbody>
                                 </table>
                             </div>
                             <!-- Pagination -->
                             <div class="mt-6 flex items-center justify-between">
                                 <span class="text-sm text-gray-600 dark:text-gray-400">
                                     Menampilkan <span class="font-semibold text-gray-900 dark:text-white">1</span>-<span
                                         class="font-semibold text-gray-900 dark:text-white">6</span> dari <span
                                         class="font-semibold text-gray-900 dark:text-white">24</span>
                                 </span>
                                 <div class="flex items-center gap-2">
                                     <button
                                         class="flex h-9 w-9 items-center justify-center rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700">
                                         <span class="material-symbols-outlined text-lg">chevron_left</span>
                                     </button>
                                     <button
                                         class="flex h-9 w-9 items-center justify-center rounded-lg border border-primary bg-primary/20 text-primary">
                                         1
                                     </button>
                                     <button
                                         class="flex h-9 w-9 items-center justify-center rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700">
                                         2
                                     </button>
                                     <button
                                         class="flex h-9 w-9 items-center justify-center rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700">
                                         3
                                     </button>
                                     <button
                                         class="flex h-9 w-9 items-center justify-center rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700">
                                         <span class="material-symbols-outlined text-lg">chevron_right</span>
                                     </button>
                                 </div>
                             </div>
                         </div>
                     </main>
                 </div>
             </div>
         </div>
     </body>
 @endsection
