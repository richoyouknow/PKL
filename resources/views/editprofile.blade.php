@extends('layout.master')
@push('styles')
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

    <script>

            tailwind.config = {
                prefix: 'tw-',
                darkMode: "class",
                theme: {
                    extend: {
                        colors: {
                            "primary": "#197fe6",
                            "background-light": "#f6f7f8",
                            "background-dark": "#111921",
                            "surface-light": "#ffffff",
                            "surface-dark": "#1e2936",
                            "text-primary-light": "#0e141b",
                            "text-primary-dark": "#e2e8f0",
                            "text-secondary-light": "#4e7397",
                            "text-secondary-dark": "#94a3b8",
                            "border-light": "#d0dbe7",
                            "border-dark": "#334155",
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
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&amp;display=swap" rel="stylesheet" />
    <!-- Material Symbols -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />

        <style type="text/tailwindcss">
            @layer utilities {
                .form-input-custom {
                    @apply tw-w-full tw-rounded-lg tw-border-border-light dark:tw-border-border-dark tw-bg-slate-50 dark:tw-bg-slate-800/50 tw-text-text-primary-light dark:tw-text-text-primary-dark tw-text-sm tw-px-3 tw-py-2.5 focus:tw-border-primary focus:tw-ring-1 focus:tw-ring-primary focus:tw-bg-white dark:focus:tw-bg-surface-dark tw-transition-colors;
                }

                .form-label-custom {
                    @apply tw-block tw-text-xs tw-font-bold tw-text-text-secondary-light dark:tw-text-text-secondary-dark tw-mb-1.5 tw-uppercase tw-tracking-wide;
                }
            }
        </style>
@endpush
@section('content')
    <body
        class="tw-bg-background-light dark:tw-bg-background-dark tw-font-display tw-min-h-screen tw-flex tw-flex-col tw-transition-colors tw-duration-200">
        <main class="tw-flex-1 tw-w-full tw-max-w-[1200px] tw-mx-auto tw-p-4 md:tw-p-8">
            <form action="#" enctype="multipart/form-data" method="POST">
                <div
                    class="tw-mb-8 tw-pb-6 tw-border-b tw-border-border-light dark:tw-border-border-dark tw-flex tw-flex-col md:tw-flex-row md:tw-items-end tw-justify-between tw-gap-6">
                    <div>
                        <div class="tw-flex tw-items-center tw-gap-2 tw-mb-2 tw-text-primary tw-font-semibold tw-text-sm">
                            <span class="material-symbols-outlined tw-text-[18px]">arrow_back</span>
                            <a class="hover:tw-underline" href="#">Kembali ke Profil</a>
                        </div>
                        <h1
                            class="tw-text-text-primary-light dark:tw-text-text-primary-dark tw-text-3xl md:tw-text-4xl tw-font-black tw-leading-tight tw-tracking-tight">
                            Edit Data Anggota
                        </h1>
                        <p class="tw-text-text-secondary-light dark:tw-text-text-secondary-dark tw-text-base md:tw-text-lg tw-mt-2">
                            Silakan ubah data pada kolom formulir di bawah ini
                        </p>
                    </div>
                    <div class="tw-hidden md:tw-block">
                        <span
                            class="tw-inline-flex tw-items-center tw-gap-1.5 tw-px-3 tw-py-1.5 tw-rounded-full tw-bg-blue-50 dark:tw-bg-blue-900/30 tw-text-primary tw-text-xs tw-font-bold tw-border tw-border-blue-100 dark:tw-border-blue-800">
                            <span class="material-symbols-outlined tw-text-[16px]">edit_note</span>
                            MODE EDIT
                        </span>
                    </div>
                </div>
                <div class="tw-grid tw-grid-cols-1 lg:tw-grid-cols-12 tw-gap-6">
                    <div class="lg:tw-col-span-4 xl:tw-col-span-3 tw-flex tw-flex-col tw-gap-6">
                        <div
                            class="tw-bg-surface-light dark:tw-bg-surface-dark tw-rounded-xl tw-shadow-sm tw-border tw-border-border-light dark:tw-border-border-dark tw-p-6 tw-flex tw-flex-col tw-items-center tw-sticky tw-top-6">
                            <div class="tw-relative tw-mb-6 tw-group tw-cursor-pointer">
                                <label class="tw-cursor-pointer tw-block tw-relative" for="foto-upload">
                                    <div class="tw-h-32 tw-w-32 tw-rounded-full tw-bg-cover tw-bg-center tw-border-4 tw-border-primary/20 group-hover:tw-border-primary tw-transition-colors"
                                        data-alt="Professional portrait of a male cooperative member smiling"
                                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCY0ouILk9mTLQPUooO7R9H-N1e4FfyUT1UNKCBZYZBLrfqqdFRW9Qgd8avlWS-Qi-9Kj9jNfY2j2zlkR_RJUo3GfY4AZC9gGeEQzVvG5nt4jgs1orbBmyRiXRzvvX2enHSze7wP2ETx_FGUWSl4KWYrYQIrxV3ULaaLVzNfeJpnrUsAzMIURxbl2glJobNigEULtxQPuyt9KBoIFe0M3Dx5_dFgmkX_T3nLzd0vUZe6xjoXCOkw5K67syr_kheZYAcDM181mONOFSv');">
                                    </div>
                                    <div
                                        class="tw-absolute tw-inset-0 tw-bg-black/40 tw-rounded-full tw-flex tw-items-center tw-justify-center tw-opacity-0 group-hover:tw-opacity-100 tw-transition-opacity">
                                        <span class="material-symbols-outlined tw-text-white tw-text-3xl">photo_camera</span>
                                    </div>
                                    <div
                                        class="tw-absolute tw-bottom-0 tw-right-0 tw-bg-primary tw-text-white tw-p-2 tw-rounded-full tw-shadow-md tw-border-2 tw-border-white dark:tw-border-surface-dark tw-z-10 tw-transition-transform group-hover:tw-scale-110">
                                        <span class="material-symbols-outlined tw-text-[18px] tw-block">edit</span>
                                    </div>
                                </label>
                                <input accept="image/*" class="tw-hidden" id="foto-upload" name="foto" type="file" />
                                <p class="tw-text-center tw-text-xs tw-text-text-secondary-light tw-mt-2">Klik untuk ubah foto</p>
                            </div>
                            <div class="tw-w-full tw-space-y-5 tw-mb-6">
                                <div>
                                    <label class="form-label-custom tw-text-center tw-block">Status Keanggotaan</label>
                                    <select class="form-input-custom tw-text-center tw-cursor-pointer tw-font-medium"
                                        name="status_keanggotaan">
                                        <option selected="" value="aktif">Aktif</option>
                                        <option value="non-aktif">Non-Aktif</option>
                                        <option value="cuti">Cuti</option>
                                    </select>
                                </div>
                                <div
                                    class="tw-flex tw-items-center tw-justify-center tw-gap-2 tw-py-2 tw-px-3 tw-bg-slate-50 dark:tw-bg-slate-800/50 tw-rounded-lg tw-border tw-border-border-light dark:tw-border-border-dark">
                                    <input checked=""
                                        class="tw-rounded tw-border-border-light tw-text-primary focus:tw-ring-primary tw-w-4 tw-h-4 tw-cursor-pointer"
                                        id="is_pengurus" name="is_pengurus" type="checkbox" />
                                    <label
                                        class="tw-text-sm tw-font-semibold tw-text-text-primary-light dark:tw-text-text-primary-dark tw-select-none tw-cursor-pointer"
                                        for="is_pengurus">Sebagai Pengurus</label>
                                </div>
                            </div>
                            <div class="tw-w-full tw-h-px tw-bg-border-light dark:tw-bg-border-dark tw-mb-6"></div>
                            <div class="tw-w-full tw-flex tw-flex-col tw-gap-5 tw-text-left">
                                <div class="tw-flex tw-flex-col tw-gap-1">
                                    <label class="form-label-custom">No. Anggota</label>
                                    <div class="tw-relative">
                                        <span
                                            class="material-symbols-outlined tw-text-text-secondary-light dark:tw-text-text-secondary-dark tw-absolute tw-left-3 tw-top-2.5 tw-text-[20px]">badge</span>
                                        <input class="form-input-custom tw-font-mono tw-pl-10" name="no_anggota" type="text"
                                            value="12345678" />
                                    </div>
                                </div>
                                <div class="tw-flex tw-flex-col tw-gap-1">
                                    <label class="form-label-custom">No. Rekening</label>
                                    <div class="tw-relative">
                                        <span
                                            class="material-symbols-outlined tw-text-text-secondary-light dark:tw-text-text-secondary-dark tw-absolute tw-left-3 tw-top-2.5 tw-text-[20px]">account_balance_wallet</span>
                                        <input class="form-input-custom tw-font-mono tw-pl-10" name="no_rekening" type="text"
                                            value="100-200-300" />
                                    </div>
                                </div>
                                <div class="tw-flex tw-flex-col tw-gap-1">
                                    <label class="form-label-custom">Grup Wilayah</label>
                                    <div class="tw-relative">
                                        <span
                                            class="material-symbols-outlined tw-text-text-secondary-light dark:tw-text-text-secondary-dark tw-absolute tw-left-3 tw-top-2.5 tw-text-[20px]">groups</span>
                                        <select class="form-input-custom tw-pl-10" name="grup_wilayah">
                                            <option selected="" value="pusat">Wilayah Pusat</option>
                                            <option value="utara">Wilayah Utara</option>
                                            <option value="selatan">Wilayah Selatan</option>
                                            <option value="barat">Wilayah Barat</option>
                                            <option value="timur">Wilayah Timur</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lg:tw-col-span-8 xl:tw-col-span-9 tw-flex tw-flex-col tw-gap-6">
                        <div
                            class="tw-bg-surface-light dark:tw-bg-surface-dark tw-rounded-xl tw-shadow-sm tw-border tw-border-border-light dark:tw-border-border-dark tw-overflow-hidden">
                            <div
                                class="tw-px-6 tw-py-4 tw-border-b tw-border-border-light dark:tw-border-border-dark tw-flex tw-items-center tw-gap-3 tw-bg-slate-50 dark:tw-bg-slate-800/30">
                                <div
                                    class="tw-p-2 tw-rounded-lg tw-bg-white dark:tw-bg-surface-dark tw-shadow-sm tw-border tw-border-border-light dark:tw-border-border-dark">
                                    <span class="material-symbols-outlined tw-text-primary tw-block">card_membership</span>
                                </div>
                                <h3 class="tw-text-lg tw-font-bold tw-text-text-primary-light dark:tw-text-text-primary-dark">Akun
                                    &amp; Keanggotaan</h3>
                            </div>
                            <div class="tw-p-6 tw-grid tw-grid-cols-1 md:tw-grid-cols-2 tw-gap-y-6 tw-gap-x-6">
                                <div>
                                    <label class="form-label-custom">No. Registrasi</label>
                                    <input class="form-input-custom tw-font-mono tw-bg-slate-100 dark:tw-bg-slate-900/50"
                                        name="no_registrasi" type="text" value="REG-2023-001" />
                                </div>
                                <div>
                                    <label class="form-label-custom">Tanggal Daftar</label>
                                    <input class="form-input-custom" name="tanggal_daftar" type="date"
                                        value="2020-01-12" />
                                </div>
                                <div>
                                    <label class="form-label-custom">Petugas Pendaftar</label>
                                    <input class="form-input-custom" name="petugas" type="text" value="Petugas A" />
                                </div>
                                <div>
                                    <label class="form-label-custom">Keterangan</label>
                                    <input class="form-input-custom" name="keterangan" placeholder="Tambahkan catatan..."
                                        type="text" value="Anggota prioritas" />
                                </div>
                            </div>
                        </div>
                        <div
                            class="tw-bg-surface-light dark:tw-bg-surface-dark tw-rounded-xl tw-shadow-sm tw-border tw-border-border-light dark:tw-border-border-dark tw-overflow-hidden">
                            <div
                                class="tw-px-6 tw-py-4 tw-border-b tw-border-border-light dark:tw-border-border-dark tw-flex tw-items-center tw-gap-3 tw-bg-slate-50 dark:tw-bg-slate-800/30">
                                <div
                                    class="tw-p-2 tw-rounded-lg tw-bg-white dark:tw-bg-surface-dark tw-shadow-sm tw-border tw-border-border-light dark:tw-border-border-dark">
                                    <span class="material-symbols-outlined tw-text-primary tw-block">person</span>
                                </div>
                                <h3 class="tw-text-lg tw-font-bold tw-text-text-primary-light dark:tw-text-text-primary-dark">Identitas
                                    Diri</h3>
                            </div>
                            <div class="tw-p-6 tw-grid tw-grid-cols-1 md:tw-grid-cols-2 tw-gap-y-6 tw-gap-x-6">
                                <div class="md:tw-col-span-2">
                                    <label class="form-label-custom">Nama Lengkap</label>
                                    <input class="form-input-custom tw-text-base tw-font-semibold" name="nama"
                                        type="text" value="Budi Santoso" />
                                </div>
                                <div>
                                    <label class="form-label-custom">Tempat Lahir</label>
                                    <input class="form-input-custom" name="tempat_lahir" type="text"
                                        value="Jakarta" />
                                </div>
                                <div>
                                    <label class="form-label-custom">Tanggal Lahir</label>
                                    <input class="form-input-custom" name="tanggal_lahir" type="date"
                                        value="1985-05-15" />
                                </div>
                                <div>
                                    <label class="form-label-custom">Jenis Kelamin</label>
                                    <select class="form-input-custom" name="jenis_kelamin">
                                        <option selected="" value="L">Laki-laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="form-label-custom">Agama</label>
                                    <select class="form-input-custom" name="agama">
                                        <option selected="" value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Konghucu">Konghucu</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="form-label-custom">Nama Pasangan</label>
                                    <input class="form-input-custom" name="nama_pasangan" type="text"
                                        value="Siti Aminah" />
                                </div>
                            </div>
                        </div>
                        <div class="tw-grid tw-grid-cols-1 md:tw-grid-cols-2 tw-gap-6">
                            <div
                                class="tw-bg-surface-light dark:tw-bg-surface-dark tw-rounded-xl tw-shadow-sm tw-border tw-border-border-light dark:tw-border-border-dark tw-overflow-hidden tw-flex tw-flex-col tw-h-full">
                                <div
                                    class="tw-px-6 tw-py-4 tw-border-b tw-border-border-light dark:tw-border-border-dark tw-flex tw-items-center tw-gap-3 tw-bg-slate-50 dark:tw-bg-slate-800/30">
                                    <div
                                        class="tw-p-2 tw-rounded-lg tw-bg-white dark:tw-bg-surface-dark tw-shadow-sm tw-border tw-border-border-light dark:tw-border-border-dark">
                                        <span class="material-symbols-outlined tw-text-primary tw-block">description</span>
                                    </div>
                                    <h3 class="tw-text-lg tw-font-bold tw-text-text-primary-light dark:tw-text-text-primary-dark">
                                        Dokumen Identitas</h3>
                                </div>
                                <div class="tw-p-6 tw-flex tw-flex-col tw-gap-6 tw-flex-1">
                                    <div>
                                        <label class="form-label-custom">Jenis Identitas</label>
                                        <select class="form-input-custom" name="jenis_identitas">
                                            <option selected="" value="KTP">KTP</option>
                                            <option value="SIM">SIM</option>
                                            <option value="Paspor">Paspor</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="form-label-custom">Nomor Identitas</label>
                                        <input class="form-input-custom tw-font-mono tw-tracking-wide" name="no_identitas"
                                            type="text" value="3171234567890001" />
                                    </div>
                                    <div>
                                        <label class="form-label-custom">Berlaku Sampai</label>
                                        <input class="form-input-custom" name="berlaku_sampai" type="text"
                                            value="Seumur Hidup" />
                                    </div>
                                </div>
                            </div>
                            <div
                                class="tw-bg-surface-light dark:tw-bg-surface-dark tw-rounded-xl tw-shadow-sm tw-border tw-border-border-light dark:tw-border-border-dark tw-overflow-hidden tw-flex tw-flex-col tw-h-full">
                                <div
                                    class="tw-px-6 tw-py-4 tw-border-b tw-border-border-light dark:tw-border-border-dark tw-flex tw-items-center tw-gap-3 tw-bg-slate-50 dark:tw-bg-slate-800/30">
                                    <div
                                        class="tw-p-2 tw-rounded-lg tw-bg-white dark:tw-bg-surface-dark tw-shadow-sm tw-border tw-border-border-light dark:tw-border-border-dark">
                                        <span class="material-symbols-outlined tw-text-primary tw-block">contact_phone</span>
                                    </div>
                                    <h3 class="tw-text-lg tw-font-bold tw-text-text-primary-light dark:tw-text-text-primary-dark">
                                        Kontak &amp; Alamat</h3>
                                </div>
                                <div class="tw-p-6 tw-flex tw-flex-col tw-gap-6 tw-flex-1">
                                    <div>
                                        <label class="form-label-custom">Nomor Telepon</label>
                                        <div class="tw-relative">
                                            <span
                                                class="material-symbols-outlined tw-text-sm tw-text-text-secondary-light tw-absolute tw-left-3 tw-top-3">call</span>
                                            <input class="form-input-custom tw-pl-9" name="no_telepon" type="tel"
                                                value="0812-3456-7890" />
                                        </div>
                                    </div>
                                    <div>
                                        <label class="form-label-custom">Alamat Rumah</label>
                                        <textarea class="form-input-custom tw-resize-none tw-h-32" name="alamat">Jl. Kebon Jeruk No. 45, RT 01/RW 02, Jakarta Barat, DKI Jakarta</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="tw-bg-surface-light dark:tw-bg-surface-dark tw-rounded-xl tw-shadow-sm tw-border tw-border-border-light dark:tw-border-border-dark tw-overflow-hidden">
                            <div
                                class="tw-px-6 tw-py-4 tw-border-b tw-border-border-light dark:tw-border-border-dark tw-flex tw-items-center tw-gap-3 tw-bg-slate-50 dark:tw-bg-slate-800/30">
                                <div
                                    class="tw-p-2 tw-rounded-lg tw-bg-white dark:tw-bg-surface-dark tw-shadow-sm tw-border tw-border-border-light dark:tw-border-border-dark">
                                    <span class="material-symbols-outlined tw-text-primary tw-block">work</span>
                                </div>
                                <h3 class="tw-text-lg tw-font-bold tw-text-text-primary-light dark:tw-text-text-primary-dark">Pekerjaan
                                    &amp; Keuangan</h3>
                            </div>
                            <div class="tw-p-6 tw-grid tw-grid-cols-1 md:tw-grid-cols-2 tw-gap-y-6 tw-gap-x-6">
                                <div>
                                    <label class="form-label-custom">Pekerjaan</label>
                                    <input class="form-input-custom" name="pekerjaan" type="text"
                                        value="Wiraswasta" />
                                </div>
                                <div>
                                    <label class="form-label-custom">Pendapatan Per Bulan</label>
                                    <div class="tw-relative">
                                        <span
                                            class="tw-absolute tw-left-3 tw-top-2.5 tw-text-text-secondary-light tw-text-sm tw-font-semibold">Rp</span>
                                        <input class="form-input-custom tw-pl-10" name="pendapatan" type="number"
                                            value="15000000" />
                                    </div>
                                </div>
                                <div class="md:tw-col-span-2">
                                    <label class="form-label-custom">Alamat Kantor</label>
                                    <textarea class="form-input-custom tw-resize-none" name="alamat_kantor" rows="2">Ruko Grand Wijaya Center, Jl. Wijaya II, Jakarta Selatan</textarea>
                                </div>
                            </div>
                        </div>
                        <div
                            class="tw-mt-4 tw-pt-6 tw-border-t tw-border-border-light dark:tw-border-border-dark tw-flex tw-flex-col-reverse md:tw-flex-row tw-justify-end tw-items-center tw-gap-4">
                            <button
                                class="tw-w-full md:tw-w-auto tw-px-6 tw-py-3 tw-rounded-lg tw-border tw-border-border-light dark:tw-border-border-dark tw-text-text-secondary-light dark:tw-text-text-secondary-dark tw-font-bold hover:tw-bg-slate-100 dark:hover:tw-bg-slate-800 tw-transition-colors"
                                type="button">
                                Batal
                            </button>
                            <button
                                class="tw-w-full md:tw-w-auto tw-px-8 tw-py-3 tw-rounded-lg tw-bg-primary tw-text-white tw-font-bold tw-shadow-lg tw-shadow-primary/30 hover:tw-bg-blue-600 active:tw-scale-95 tw-transition-all tw-flex tw-items-center tw-justify-center tw-gap-2"
                                type="submit">
                                <span class="material-symbols-outlined">save</span>
                                Simpan Perubahan
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </main>
        <footer class="tw-mt-12 tw-py-8 tw-border-t tw-border-border-light dark:tw-border-border-dark tw-bg-white dark:tw-bg-surface-dark">
            <div
                class="tw-max-w-[1200px] tw-mx-auto tw-px-4 md:tw-px-8 tw-flex tw-flex-col md:tw-flex-row tw-justify-between tw-items-center tw-text-sm tw-text-text-secondary-light dark:tw-text-text-secondary-dark">
                <p>© 2024 Koperasi Simpan Pinjam Sejahtera. All rights reserved.</p>
                <div class="tw-flex tw-gap-6 tw-mt-4 md:tw-mt-0">
                    <a class="hover:tw-text-primary tw-transition-colors" href="#">Kebijakan Privasi</a>
                    <a class="hover:tw-text-primary tw-transition-colors" href="#">Syarat &amp; Ketentuan</a>
                </div>
            </div>
        </footer>

    </body>

    </html>
@endsection
