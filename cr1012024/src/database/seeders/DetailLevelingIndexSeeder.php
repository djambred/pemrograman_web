<?php

namespace Database\Seeders;

use App\Models\DetailLevelingIndex;
use Illuminate\Database\Seeder;

class DetailLevelingIndexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            1 => [
                1 => [
                    'detail' => 'Konsep kebijakan internal terkait siklus Pembangunan Aplikasi SPBE di Instansi Pusat/Pemerintah Daerah belum atau telah tersedia.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah belum atau sudah pemenuhan memiliki konsep kebijakan internal pembangunan Aplikasi SPBE dimaksud atau masih dalam proses pengesahan.',
                    'criteria_evidence' => 'Draf kebijakan berupa rancangan Peraturan atau rancangan Keputusan atau Surat Edaran/dokumen yang berisi pengaturan/norma mengenai Arsitektur SPBE; dan/atau Notulensi/catatan/laporan hasil penyusunan kebijakan internal Arsitektur SPBE; dan/atau dapat dilengkapi dengan bukti undangan rapat penyusunan kebijakan internal Arsitektur SPBE; dan/atau dokumentasi aktivitas-aktivitas penyusunan kebijakan internal Arsitektur SPBE.'
                ],
                2 => [
                    'detail' => 'Kebijakan internal Arsitektur SPBE Instansi Pusat/Pemerintah Daerah telah ditetapkan. Kondisi: Kebijakan internal Arsitektur SPBE Instansi Pusat/ Pemerintah Daerah tersebut belum memuat secara lengkap pengaturan mengenai referensi Arsitektur dan domain Arsitektur SPBE (Proses Bisnis, Data dan Informasi, Infrastruktur SPBE, Aplikasi SPBE, Keamanan SPBE, dan Layanan SPBE).',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki kebijakan internal Arsitektur SPBE yang telah ditetapkan dan pengaturan Arsitektur SPBE mencakup sebagian domain Arsitektur SPBE.',
                    'criteria_evidence' => 'Konteks pengaturan/norma penerapan Arsitektur SPBE yang terdapat sebagian muatan mengenai referensi Arsitektur dan domain Arsitektur SPBE tertuang dalam dokumen kebijakan Instansi Pusat/Pemerintah Daerah.'
                ],
                3 => [
                    'detail' => 'Kriteria tingkat 2 telah terpenuhi dan kebijakan internal Arsitektur SPBE Instansi Pusat/Pemerintah Daerah telah memuat secara lengkap pengaturan mengenai referensi Arsitektur dan domain Arsitektur SPBE (Proses Bisnis, Data dan Informasi, Infrastruktur SPBE, Aplikasi SPBE, Keamanan SPBE, dan Layanan SPBE).',
                    'description' => 'Kebijakan internal yang ada telah mendukung pengaturan Arsitektur SPBE yang mencakup keseluruhan domain Arsitektur SPBE.',
                    'criteria_evidence' => 'Konteks pengaturan/norma bagi seluruh unit kerja/perangkat daerah untuk melakukan konsultasi terkait siklus Pembangunan Aplikasi SPBE dengan unit kerja/perangkat daerah yang menjalankan fungsi pengelolaan TIK tertuang dalam dokumen kebijakan Instansi Pusat/Pemerintah Daerah.'
                ],
                4 => [
                    'detail' => 'Kriteria tingkat 3 telah terpenuhi, kebijakan internal terkait siklus Pembangunan Aplikasi SPBE di Instansi Pusat/Pemerintah Daerah telah mengatur keterpaduan dan pengendalian Pembangunan Aplikasi SPBE oleh unit kerja/perangkat daerah yang menjalankan fungsi pengelolaan TIK di Instansi Pusat/Pemerintah Daerah. Selain itu, kebijakan internal Pembangunan Aplikasi SPBE direviu dan dievaluasi secara periodik.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki kebijakan keterpaduan dan pengendalian pembangunan aplikasi oleh unit kerja/perangkat daerah yang menjalankan fungsi pengelolaan TIK di Instansi Pusat/Pemerintah Daerah. Selain itu, kebijakan internal Pembangunan Aplikasi SPBE direviu dan/atau dievaluasi secara periodik.',
                    'criteria_evidence' => '1) Konteks pengaturan/norma Pembangunan Aplikasi SPBE yang memuat seluruh siklus Pembangunan Aplikasi SPBE dan keterpaduan serta pengendalian pembangunan aplikasi oleh unit kerja/perangkat daerah yang menjalankan fungsi pengelolaan TIK di Instansi Pusat/Pemerintah Daerah tertuang dokumen kebijakan Instansi Pusat/Pemerintah Daerah; 2) Terdapat notulensi/catatan/laporan hasil evaluasi/reviu terkait kebijakan internal Pembangunan Aplikasi SPBE yang masih berlaku (<2 tahun); 3) Hasil evaluasi/reviu yang berisi konten isu/permasalahan dan rekomendasi perbaikan yang aktual; dan 4) Bukti undangan rapat evaluasi kebijakan internal Pembangunan Aplikasi SPBE, dan/atau dokumentasi aktivitas-aktivitas evaluasi kebijakan internal Pembangunan Aplikasi SPBE (opsional).'
                ],
                5 => [
                    'detail' => 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi kebijakan internal Pembangunan Aplikasi SPBE di Instansi Pusat/Pemerintah Daerah SPBE telah ditindaklanjuti dengan kebijakan baru.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah menindaklanjuti hasil reviu dan/atau evaluasi kebijakan Pembangunan Aplikasi SPBE dengan menetapkan suatu kebijakan sebagai bentuk optimalisasi pelaksanaan kebijakan Pembangunan Aplikasi SPBE, sesuai dengan kebutuhan Instansi Pusat/Pemerintah Daerah ataupun perubahan lingkungan dan teknologi. Tingkat kematangan level 5 (lima) dapat dipertahankan: a) dengan melakukan reviu terhadap kebijakan internal Pembangunan Aplikasi SPBE; penyempurnaan terhadap kebijakan internal Pembangunan Aplikasi SPBE sesuai hasil reviu dan b) dengan melakukan tindak lanjut atas hasil reviu berupa penyempurnaan terhadap kebijakan internal Pembangunan Aplikasi SPBE dengan menetapkan kebijakan baru dan/atau turunan kebijakan (SK, SE, SOP, dan lain sebagainya), dan kebijakan lainnya sesuai hasil reviu.',
                    'criteria_evidence' => '1) Dokumen kebijakan internal penerapan SPBE Instansi Pusat/Pemerintah Daerah yang memuat kebijakan Pembangunan Aplikasi dan telah optimal (memenuhi kriteria tingkat kematangan level 1 – 4); 2) Terdapat dokumentasi aktivitas reviu/penyempurnaan kebijakan internal Pembangunan Aplikasi yang memuat rekomendasi; 3) Dokumen formal kebijakan internal Instansi Pusat/Pemerintah Daerah sebagai optimalisasi yang sesuai dengan rekomendasi hasil reviu/penyempurnaan; dan 4) Optimalisasi kebijakan dapat dipenuhi dengan menetapkan turunan kebijakan (SK, SE, SOP), dan kebijakan lainnya yang memuat substansi indikator sesuai arah rekomendasi reviu serta ditetapkan setidaknya 1 tahun setelah reviu dilakukan.'
                ],
            ],
        
            2 => [
                1 => [
                    'detail' => 'Konsep kebijakan internal terkait Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah belum tersedia atau masih dalam bentuk draft.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah belum atau sudah memiliki konsep kebijakan internal Layanan Pusat Data dimaksud atau masih dalam proses pengesahan.',
                    'criteria_evidence' => 'Draf kebijakan berupa rancangan Peraturan atau rancangan Keputusan atau Surat Edaran/dokumen yang berisi pengaturan/norma mengenai Peta Rencana SPBE; Notulensi/catatan/laporan hasil penyusunan kebijakan internal Peta Rencana SPBE; bukti undangan rapat penyusunan kebijakan internal Peta Rencana SPBE; dan/atau dokumentasi aktivitas-aktivitas penyusunan kebijakan internal Peta Rencana SPBE.'
                ],
                2 => [
                    'detail' => 'Kebijakan internal Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah telah ditetapkan. Kondisi: Kebijakan internal Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah tersebut belum mengatur muatan Peta Rencana SPBE secara lengkap (Tata Kelola SPBE, Manajemen SPBE, Layanan SPBE, Infrastruktur SPBE, Aplikasi SPBE, Keamanan SPBE, dan Audit TIK).',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki kebijakan internal Peta Rencana SPBE yang telah ditetapkan dan pengaturan Peta Rencana SPBE mencakup sebagian muatan Peta Rencana SPBE.',
                    'criteria_evidence' => 'Konteks pengaturan/norma pelaksanaan Layanan Pusat Data yang memuat rangkaian proses pengelolaan data/sistem informasi bagi sebagian unit kerja/perangkat daerah tertuang dalam peraturan/kebijakan kepala unit kerja/perangkat daerah atau dokumen kebijakan Instansi Pusat/Pemerintah Daerah.'
                ],
                3 => [
                    'detail' => 'Kriteria tingkat 2 telah terpenuhi dan kebijakan internal Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah telah mengatur seluruh muatan Peta Rencana SPBE secara lengkap (Tata Kelola SPBE, Manajemen SPBE, Layanan SPBE, Infrastruktur SPBE, Aplikasi SPBE, Keamanan SPBE, dan Audit TIK).',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah memiliki kebijakan internal yang mendukung pengaturan Peta Rencana SPBE yang mencakup keseluruhan muatan Peta Rencana SPBE.',
                    'criteria_evidence' => 'Konteks pengaturan/norma pelaksanaan Layanan Pusat Data yang memuat rangkaian proses pengelolaan layanan pusat data/sistem informasi bagi seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah tertuang dalam dokumen kebijakan Instansi Pusat/Pemerintah Daerah.'
                ],
                4 => [
                    'detail' => 'Kriteria tingkat 3 telah terpenuhi, kebijakan internal terkait Layanan Pusat Data yang digunakan di Instansi Pusat/Pemerintah Daerah telah mengatur interkoneksi Layanan Pusat Data dengan Pusat Data Nasional dan/atau mengatur penggunaan Layanan Pusat Data Nasional. Selain itu, kebijakan internal terkait penggunaan Layanan Pusat Data di Instansi Pusat/Pemerintah Daerah telah direviu dan dievaluasi secara periodik.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki arah kebijakan pengaturan penyusunan Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah selaras dengan Peta Rencana SPBE Nasional.',
                    'criteria_evidence' => '1) Konteks pengaturan/norma penerapan Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah selaras dengan Peta Rencana SPBE Nasional tertuang dalam dokumen kebijakan Instansi Pusat/Pemerintah Daerah; 2) Terdapat notulensi/catatan/laporan hasil evaluasi/reviu terkait kebijakan internal Peta Rencana SPBE yang masih berlaku (<2 tahun); 3) Hasil evaluasi/reviu yang berisi konten isu/permasalahan dan rekomendasi perbaikan yang aktual; dan 4) Bukti undangan rapat evaluasi kebijakan internal Peta Rencana SPBE, dan/atau dokumentasi aktivitas-aktivitas evaluasi kebijakan internal Peta Rencana SPBE (opsional).'
                ],
                5 => [
                    'detail' => 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi kebijakan internal terkait Layanan Pusat Data yang digunakan di Instansi Pusat/Pemerintah Daerah SPBE telah ditindaklanjuti dengan kebijakan baru.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah menindaklanjuti hasil evaluasi kebijakan Peta Rencana SPBE dengan menetapkan suatu kebijakan sebagai bentuk optimalisasi pelaksanaan kebijakan Peta Rencana SPBE, sesuai dengan kebutuhan instansi Pusat/Pemerintah Daerah ataupun perubahan lingkungan dan teknologi. Tingkat kematangan level 5 (lima) dapat dipertahankan: c) dengan melakukan reviu terhadap kebijakan internal Peta Rencana SPBE; penyempurnaan terhadap kebijakan internal Peta Rencana SPBE sesuai hasil reviu; dan d) dengan melakukan tindak lanjut atas hasil reviu berupa penyempurnaan terhadap kebijakan internal Peta Rencana SPBE dengan menetapkan kebijakan baru dan/atau turunan kebijakan (SK, SE, SOP, dan lain sebagainya), dan kebijakan lainnya sesuai hasil reviu.',
                    'criteria_evidence' => '1) Dokumen kebijakan internal penerapan SPBE Instansi Pusat/Pemerintah Daerah yang memuat kebijakan Peta Rencana SPBE dan telah optimal (memenuhi kriteria tingkat kematangan level 1 – 4); 2) Terdapat dokumentasi aktivitas reviu/penyempurnaan kebijakan internal Peta Rencana SPBE yang memuat rekomendasi; 3) Dokumen formal kebijakan internal Instansi Pusat/Pemerintah Daerah sebagai optimalisasi yang sesuai dengan rekomendasi hasil reviu/penyempurnaan; dan 4) Optimalisasi kebijakan dapat dipenuhi dengan menetapkan turunan kebijakan (SK, SE, SOP), dan kebijakan lainnya yang memuat substansi indikator sesuai arah rekomendasi reviu serta ditetapkan 1 tahun setelah reviu dilakukan.'
                ],
            ],

            3 => [
                1 => [
                    'detail' => 'Konsep kebijakan internal terkait Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah belum atau telah tersedia.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah belum atau sudah memiliki konsep kebijakan internal pengoperasian Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah dimaksud atau masih dalam proses pengesahan.',
                    'criteria_evidence' => 'Draf kebijakan berupa rancangan Peraturan atau Dukung rancangan Keputusan atau Surat Edaran/dokumen yang berisi pengaturan/norma mengenai Manajemen Data SPBE; Notulensi/catatan/laporan hasil penyusunan kebijakan internal Manajemen Data SPBE; bukti undangan rapat penyusunan kebijakan internal Manajemen Data SPBE; dan/atau dokumentasi aktivitas-aktivitas penyusunan kebijakan internal Manajemen Data SPBE.'
                ],
                2 => [
                    'detail' => 'Kebijakan internal Manajemen Data di Instansi Pusat/Pemerintah Daerah telah ditetapkan.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki kebijakan internal terkait Manajemen/pengelolaan Data yang telah ditetapkan.',
                    'criteria_evidence' => 'Konteks pengaturan/norma penerapan Manajemen/pengelolaan Data SPBE yang menggambarkan proses pengelolaan/Manajemen Data dalam dokumen kebijakan Instansi Pusat/Pemerintah Daerah.'
                ],
                3 => [
                    'detail' => 'Kondisi: Kebijakan internal Manajemen Data di Instansi Pusat/Pemerintah Daerah tersebut hanya mengatur sebagian dari rangkaian proses pengelolaan arsitektur data, data induk, data referensi, basis data, kualitas data dan interoperabilitas data.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah memiliki kebijakan internal yang mendukung pengaturan Manajemen Data yang didalamnya mencakup sebagian proses pengelolaan Manajemen Data.',
                    'criteria_evidence' => 'Konteks pengaturan/norma penerapan Manajemen Dukung Data SPBE yang menguraikan sebagian rangkaian proses pengelolaan Manajemen Data tertuang dalam dokumen kebijakan Instansi Pusat/Pemerintah Daerah.'
                ],
                4 => [
                    'detail' => 'Kriteria tingkat 2 telah terpenuhi dan kebijakan internal Manajemen Data di Instansi Pusat/Pemerintah Daerah telah mengatur seluruh rangkaian proses pengelolaan arsitektur data, data induk, data referensi, basis data, kualitas data dan interoperabilitas data.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah memiliki pemenuhan kebijakan internal yang mendukung pengaturan Level Manajemen Data yang didalamnya mencakup seluruh proses pengelolaan Manajemen Data.',
                    'criteria_evidence' => 'Konteks pengaturan/norma penerapan Manajemen Dukung Data SPBE yang menguraikan seluruh rangkaian proses pengelolaan Manajemen Data tertuang dalam dokumen kebijakan Instansi Pusat/Pemerintah Daerah.'
                ],
                5 => [
                    'detail' => 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi kebijakan internal terkait Layanan Pusat Data yang digunakan di Instansi Pusat/Pemerintah Daerah SPBE telah ditindaklanjuti dengan kebijakan baru.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah menindaklanjuti hasil evaluasi kebijakan Peta Rencana SPBE dengan menetapkan suatu kebijakan sebagai bentuk optimalisasi pelaksanaan kebijakan Peta Rencana SPBE, sesuai dengan kebutuhan Instansi Pusat/Pemerintah Daerah ataupun perubahan lingkungan dan teknologi. Tingkat kematangan level 5 (lima) dapat dipertahankan: c) dengan melakukan reviu terhadap kebijakan internal Peta Rencana SPBE; penyempurnaan terhadap kebijakan internal Peta Rencana SPBE sesuai hasil reviu; dan d) dengan melakukan tindak lanjut atas hasil reviu berupa penyempurnaan terhadap kebijakan internal Peta Rencana SPBE dengan menetapkan kebijakan baru dan/atau turunan kebijakan (SK, SE, SOP, dan lain sebagainya), dan kebijakan lainnya sesuai hasil reviu.',
                    'criteria_evidence' => '1) Dokumen kebijakan internal penerapan SPBE Instansi Pusat/Pemerintah Daerah yang memuat kebijakan Peta Rencana SPBE dan telah optimal (memenuhi kriteria tingkat kematangan level 1 – 4); 2) Terdapat dokumentasi aktivitas reviu/penyempurnaan kebijakan internal Peta Rencana SPBE yang memuat rekomendasi; 3) Dokumen formal kebijakan internal Instansi Pusat/Pemerintah Daerah sebagai optimalisasi yang sesuai dengan rekomendasi hasil reviu/penyempurnaan; dan 4) Optimalisasi kebijakan dapat dipenuhi dengan menetapkan turunan kebijakan (SK, SE, SOP), dan kebijakan lainnya yang memuat substansi indikator sesuai arah rekomendasi reviu serta ditetapkan 1 tahun setelah reviu dilakukan.'
                ],
            ],
        
            4 => [
                1 => [
                    'detail' => 'Konsep kebijakan internal terkait siklus Pembangunan Aplikasi SPBE di Instansi Pusat/Pemerintah Daerah belum atau telah tersedia.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah belum atau sudah memiliki konsep kebijakan internal Manajemen Data dimaksud atau masih dalam proses pengesahan.',
                    'criteria_evidence' => 'Draf kebijakan berupa rancangan Peraturan atau rancangan Keputusan atau Surat Edaran/dokumen yang berisi pengaturan/norma mengenai Manajemen Data SPBE; Notulensi/catatan/laporan hasil penyusunan kebijakan internal Manajemen Data SPBE; bukti undangan rapat penyusunan kebijakan internal Manajemen Data SPBE; dan/atau dokumentasi aktivitas-aktivitas penyusunan kebijakan internal Manajemen Data SPBE.'
                ],
                2 => [
                    'detail' => 'Kebijakan internal terkait siklus Pembangunan Aplikasi SPBE di Instansi Pusat/Pemerintah Daerah telah ditetapkan.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki kebijakan internal pembangunan Aplikasi SPBE yang telah ditetapkan dan telah mengatur siklus pembangunan aplikasi yang setidaknya mencakup siklus perencanaan, analisis, desain, implementasi, dan pemeliharaan.',
                    'criteria_evidence' => 'Konteks pengaturan/norma Pembangunan Aplikasi Dukung SPBE yang memuat seluruh siklus Pembangunan Aplikasi SPBE tertuang dalam dokumen kebijakan Instansi Pusat/Pemerintah Daerah.'
                ],
                3 => [
                    'detail' => 'Kriteria tingkat 2 telah terpenuhi dan Kebijakan internal terkait siklus Pembangunan Aplikasi SPBE telah mengatur proses konsultasi terkait siklus Pembangunan Aplikasi SPBE dengan unit kerja/perangkat daerah yang menjalankan fungsi pengelolaan TIK di Instansi Pusat/Pemerintah Daerah.',
                    'description' => 'Kebijakan internal yang ada telah mengatur proses konsultasi terkait siklus pembangunan aplikasi SPBE dengan unit kerja/perangkat daerah yang menjalankan fungsi pengelolaan TIK.',
                    'criteria_evidence' => 'Konteks pengaturan/norma bagi seluruh unit kerja/perangkat daerah untuk melakukan konsultasi terkait siklus Pembangunan Aplikasi SPBE dengan unit kerja/perangkat daerah yang menjalankan fungsi pengelolaan TIK tertuang dalam dokumen kebijakan Instansi Pusat/Pemerintah Daerah.'
                ],
                4 => [
                    'detail' => 'Kriteria tingkat 3 telah terpenuhi, kebijakan internal terkait siklus Pembangunan Aplikasi SPBE di Instansi Pusat/Pemerintah Daerah telah mengatur keterpaduan dan pengendalian Pembangunan Aplikasi SPBE oleh unit kerja/perangkat daerah yang menjalankan fungsi pengelolaan TIK di Instansi Pusat/Pemerintah Daerah. Selain itu, kebijakan internal Pembangunan Aplikasi SPBE direviu dan dievaluasi secara periodik.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki kebijakan keterpaduan dan pengendalian pembangunan aplikasi oleh unit kerja/perangkat daerah yang menjalankan fungsi pengelolaan TIK di Instansi Pusat/Pemerintah Daerah. Selain itu, kebijakan internal Pembangunan Aplikasi SPBE direviu dan/atau dievaluasi secara periodik.',
                    'criteria_evidence' => '1) Konteks pengaturan/norma Pembangunan Aplikasi SPBE yang memuat seluruh siklus Pembangunan Aplikasi SPBE dan keterpaduan serta pengendalian pembangunan aplikasi oleh unit kerja/perangkat daerah yang menjalankan fungsi pengelolaan TIK di Instansi Pusat/Pemerintah Daerah tertuang dokumen kebijakan Instansi Pusat/Pemerintah Daerah; 2) Terdapat notulensi/catatan/laporan hasil evaluasi/reviu terkait kebijakan internal Pembangunan Aplikasi SPBE yang masih berlaku (<2 tahun); 3) Hasil evaluasi/reviu yang berisi konten isu/permasalahan dan rekomendasi perbaikan yang aktual; dan 4) Bukti undangan rapat evaluasi kebijakan internal Pembangunan Aplikasi SPBE, dan/atau dokumentasi aktivitas-aktivitas evaluasi kebijakan internal Pembangunan Aplikasi SPBE (opsional).'
                ],
                5 => [
                    'detail' => 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi kebijakan internal Pembangunan Aplikasi SPBE di Instansi Pusat/Pemerintah Daerah SPBE telah ditindaklanjuti dengan kebijakan baru.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah menindaklanjuti hasil reviu dan/atau evaluasi kebijakan Pembangunan Aplikasi SPBE dengan menetapkan suatu kebijakan sebagai bentuk optimalisasi pelaksanaan kebijakan Pembangunan Aplikasi SPBE, sesuai dengan kebutuhan Instansi Pusat/Pemerintah Daerah ataupun perubahan lingkungan dan teknologi. Tingkat kematangan level 5 (lima) dapat dipertahankan: a) dengan melakukan reviu terhadap kebijakan internal Pembangunan Aplikasi SPBE; penyempurnaan terhadap kebijakan internal Pembangunan Aplikasi SPBE sesuai hasil reviu; dan b) dengan melakukan tindak lanjut atas hasil reviu berupa penyempurnaan terhadap kebijakan internal Pembangunan Aplikasi SPBE dengan menetapkan kebijakan baru dan/atau turunan kebijakan (SK, SE, SOP, dan lain sebagainya), dan kebijakan lainnya sesuai hasil reviu.',
                    'criteria_evidence' => '1) Dokumen kebijakan internal penerapan SPBE Instansi Pusat/Pemerintah Daerah yang memuat kebijakan Pembangunan Aplikasi dan telah optimal (memenuhi kriteria tingkat kematangan level 1 – 4); 2) Terdapat dokumentasi aktivitas reviu/penyempurnaan kebijakan internal Pembangunan Aplikasi yang memuat rekomendasi; 3) Dokumen formal kebijakan internal Instansi Pusat/Pemerintah Daerah sebagai optimalisasi yang sesuai dengan rekomendasi hasil reviu/penyempurnaan; dan 4) Optimalisasi kebijakan dapat dipenuhi dengan menetapkan turunan kebijakan (SK, SE, SOP), dan kebijakan lainnya yang memuat substansi indikator sesuai arah rekomendasi reviu serta ditetapkan setidaknya 1 tahun setelah reviu dilakukan.'
                ],
            ],

            5 => [
                1 => [
                    'detail' => 'Konsep kebijakan internal terkait Layanan Pusat Data yang digunakan di Instansi Pusat/Pemerintah Daerah belum atau telah tersedia.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah belum atau sudah memiliki konsep kebijakan internal Layanan Pusat Data dimaksud atau masih dalam proses pengesahan.',
                    'criteria_evidence' => 'Draf kebijakan berupa rancangan Peraturan atau rancangan Keputusan atau Surat Edaran/dokumen yang berisi pengaturan/norma mengenai Layanan Pusat Data; Notulensi/catatan/laporan hasil penyusunan kebijakan internal Layanan Pusat Data; bukti undangan rapat penyusunan kebijakan internal Layanan Pusat Data; dan/atau dokumentasi aktivitas-aktivitas penyusunan kebijakan internal Layanan Pusat Data.'
                ],
                2 => [
                    'detail' => 'Kebijakan internal terkait Layanan Pusat Data telah ditetapkan. Kondisi: Kebijakan internal terkait Layanan Pusat Data telah mengatur penggunaan Layanan Pusat Data untuk sebagian unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki kebijakan internal Layanan Pusat Data yang telah ditetapkan dan mengatur penggunaannya pada sebagian unit kerja/perangkat daerah.',
                    'criteria_evidence' => 'Konteks pengaturan/norma pelaksanaan Layanan Pusat Data yang memuat rangkaian proses pengelolaan data/sistem informasi bagi sebagian unit kerja/perangkat daerah tertuang dalam peraturan/kebijakan kepala unit kerja/perangkat daerah atau dokumen kebijakan Instansi Pusat/Pemerintah Daerah lainnya.'
                ],
                3 => [
                    'detail' => 'Kriteria tingkat 2 telah terpenuhi dan kebijakan internal terkait Layanan Pusat Data telah mengatur penggunaan Layanan Pusat Data untuk seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki kebijakan internal Layanan Pusat Data yang telah ditetapkan dan mengatur penggunaannya pada seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.',
                    'criteria_evidence' => 'Konteks pengaturan/norma pelaksanaan Layanan Pusat Data yang memuat rangkaian proses pengelolaan layanan pusat data/sistem informasi bagi seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah tertuang dalam dokumen kebijakan Instansi Pusat/Pemerintah Daerah.'
                ],
                4 => [
                    'detail' => 'Kriteria tingkat 3 telah terpenuhi, kebijakan internal terkait Layanan Pusat Data yang digunakan di Instansi Pusat/Pemerintah Daerah telah mengatur interkoneksi Layanan Pusat Data dengan Pusat Data Nasional dan/atau mengatur penggunaan Layanan Pusat Data Nasional. Selain itu, kebijakan internal terkait penggunaan Layanan Pusat Data di Instansi Pusat/Pemerintah Daerah telah direviu dan dievaluasi secara periodik.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki arah kebijakan interkoneksi Layanan Pusat Data yang digunakan pada Instansi Pusat/Pemerintah Daerah dengan Layanan Pusat Data Nasional atau mengatur penggunaan Layanan Pusat Data Nasional oleh Instansi Pusat/Pemerintah Daerah, serta telah melakukan reviu dan/atau evaluasi terhadap kebijakan tersebut.',
                    'criteria_evidence' => '1) Konteks pengaturan/norma arah kebijakan interoperabilitas pengelolaan data/sistem informasi yang digunakan pada Layanan Pusat Data Instansi Pusat/Pemerintah Daerah dengan Layanan Pusat Data Nasional atau mengatur pengelolaan data/sistem informasi Instansi Pusat/Pemerintah Daerah pada Layanan Pusat Data Nasional tertuang dalam dokumen kebijakan Instansi Pusat/Pemerintah Daerah; 2) Terdapat notulensi/catatan/laporan hasil evaluasi/reviu terkait kebijakan internal Layanan Pusat Data yang masih berlaku (<2 tahun); 3) Hasil evaluasi/reviu yang berisi konten isu/permasalahan dan rekomendasi perbaikan yang aktual; dan 4) Bukti undangan rapat evaluasi kebijakan internal Layanan Pusat Data, dan/atau dokumentasi aktivitas-aktivitas evaluasi kebijakan internal Layanan Pusat Data (opsional).'
                ],
                5 => [
                    'detail' => 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi kebijakan internal terkait Layanan Pusat Data yang digunakan di Instansi Pusat/Pemerintah Daerah SPBE telah ditindaklanjuti dengan kebijakan baru.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah menindaklanjuti hasil reviu dan/atau evaluasi kebijakan Layanan Pusat Data yang telah memanfaatkan layanan Pusat Data Nasional dengan menetapkan suatu kebijakan sebagai bentuk optimalisasi pelaksanaan kebijakan Layanan Pusat Data, sesuai dengan kebutuhan Instansi Pusat/Pemerintah Daerah ataupun perubahan lingkungan dan teknologi.',
                    'criteria_evidence' => '1) Dokumen kebijakan internal penerapan SPBE Instansi Pusat/Pemerintah Daerah yang memuat kebijakan Layanan Pusat Data yang telah memanfaatkan layanan Pusat Data Nasional dan telah optimal (memenuhi kriteria tingkat kematangan level 1 – 4); 2) Terdapat dokumentasi aktivitas reviu/penyempurnaan kebijakan internal Layanan Pusat Data yang memuat rekomendasi; 3) Dokumen formal kebijakan internal Instansi Pusat/Pemerintah Daerah sebagai optimalisasi yang sesuai dengan rekomendasi hasil reviu/penyempurnaan; dan 4) Optimalisasi kebijakan dapat dipenuhi dengan menetapkan turunan kebijakan (SK, SE, SOP), dan kebijakan lainnya yang memuat substansi indikator sesuai arah rekomendasi reviu serta ditetapkan setidaknya 1 tahun setelah reviu dilakukan.'
                ],
            ],
            6 => [
                1 => [
                    'detail' => 'Konsep kebijakan internal terkait Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah belum atau telah tersedia.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah belum atau sudah memiliki konsep kebijakan internal pengoperasian Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah dimaksud atau masih dalam proses pengesahan.',
                    'criteria_evidence' => 'Draf kebijakan berupa rancangan Peraturan atau rancangan Keputusan atau Surat Edaran/dokumen yang berisi pengaturan/norma mengenai pengoperasian jaringan intra Instansi Pusat/Pemerintah Daerah; Notulensi/catatan/laporan hasil penyusunan kebijakan internal pengoperasian jaringan intra Instansi Pusat/Pemerintah Daerah; bukti undangan rapat penyusunan kebijakan internal pengoperasian jaringan intra Instansi Pusat/Pemerintah Daerah; dan/atau dokumentasi aktivitas-aktivitas penyusunan kebijakan internal pengoperasian jaringan intra Instansi Pusat/Pemerintah Daerah.'
                ],
                2 => [
                    'detail' => 'Kebijakan internal terkait Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah telah ditetapkan. Kondisi: Kebijakan internal terkait Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah telah mengatur Layanan Jaringan Intra untuk sebagian unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki kebijakan internal pengoperasian Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah yang telah ditetapkan dan mengatur penggunaannya pada sebagian unit kerja/perangkat daerah.',
                    'criteria_evidence' => 'Konteks pengaturan/norma pengoperasian Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah bagi sebagian unit kerja/perangkat daerah tertuang dalam peraturan/kebijakan kepala unit kerja/perangkat daerah atau dokumen kebijakan Instansi Pusat/Pemerintah Daerah lainnya.'
                ],
                3 => [
                    'detail' => 'Kriteria tingkat 2 telah terpenuhi dan kebijakan internal terkait Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah telah mengatur Layanan Jaringan Intra untuk seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki kebijakan internal pengoperasian Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah yang telah ditetapkan dan mengatur penggunaannya pada seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.',
                    'criteria_evidence' => 'Konteks pengaturan/norma pelaksanaan pengoperasian Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah bagi seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah tertuang dalam dokumen kebijakan Instansi Pusat/Pemerintah Daerah.'
                ],
                4 => [
                    'detail' => 'Kriteria tingkat 3 telah terpenuhi dan kebijakan internal terkait Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah telah mengatur interkoneksi Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah dengan Jaringan Intra Pemerintah dan/atau Jaringan Intra Instansi Pusat/Pemerintah Daerah lain. Selain itu, kebijakan internal terkait Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah telah direviu dan dievaluasi secara periodik.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah menerapkan kebijakan internal terkait pengoperasian Jaringan Intra Instansi Pusat/Pemerintah Daerah secara menyeluruh dan telah mengatur keterhubungan dan akses Jaringan Intra Instansi Pusat/Pemerintah Daerah dengan Jaringan Intra Pemerintah dan/atau Jaringan Intra Instansi Pusat/Pemerintah Daerah lainnya, serta telah melakukan reviu dan/atau evaluasi terhadap kebijakan tersebut.',
                    'criteria_evidence' => '1) Konteks pengaturan/norma arah kebijakan interkoneksi pengoperasian Jaringan Intra Instansi Pusat/Pemerintah Daerah dengan Jaringan Intra Pemerintah dan/atau Jaringan Intra Instansi Pusat/Pemerintah Daerah lainnya tertuang dalam dokumen kebijakan Instansi Pusat/Pemerintah Daerah; 2) Terdapat notulensi/catatan/laporan hasil evaluasi/reviu terkait kebijakan internal Layanan Jaringan Intra yang masih berlaku (<2 tahun); 3) Hasil evaluasi/reviu yang berisi konten isu/permasalahan dan rekomendasi perbaikan yang aktual; dan 4) Bukti undangan rapat evaluasi kebijakan internal Layanan Jaringan Intra, dan/atau dokumentasi aktivitas-aktivitas evaluasi kebijakan internal Layanan Jaringan Intra (opsional).'
                ],
                5 => [
                    'detail' => 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi kebijakan internal terkait Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah telah ditindaklanjuti dengan kebijakan baru.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah menindaklanjuti hasil reviu dan/atau evaluasi kebijakan pengoperasian Jaringan Intra Instansi Pusat/Pemerintah Daerah dengan menetapkan suatu kebijakan sebagai bentuk optimalisasi pelaksanaan kebijakan Layanan Jaringan Intra, sesuai dengan kebutuhan Instansi Pusat/Pemerintah Daerah ataupun perubahan lingkungan dan teknologi.',
                    'criteria_evidence' => '1) Dokumen kebijakan internal penerapan SPBE Instansi Pusat/Pemerintah Daerah yang memuat kebijakan Layanan Jaringan Intra dan telah optimal (memenuhi kriteria tingkat kematangan level 1 – 4); 2) Terdapat dokumentasi aktivitas reviu/penyempurnaan kebijakan internal Layanan Jaringan Intra yang memuat rekomendasi; 3) Dokumen formal kebijakan internal Instansi Pusat/Pemerintah Daerah sebagai optimalisasi yang sesuai dengan rekomendasi hasil reviu/penyempurnaan; dan 4) Optimalisasi kebijakan dapat dipenuhi dengan menetapkan turunan kebijakan (SK, SE, SOP), dan kebijakan lainnya yang memuat substansi indikator sesuai arah rekomendasi reviu serta ditetapkan setidaknya 1 tahun setelah reviu dilakukan.'
                ],
            ],
            
            7 => [
                1 => [
                    'detail' => 'Konsep kebijakan internal terkait Penggunaan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah belum atau telah tersedia.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah belum atau telah memiliki konsep pengaturan Sistem Penghubung Layanan Pemerintah Pusat/Pemerintah Daerah namun masih bersifat sementara dan/atau hanya diterapkan di sebagian unit kerja.',
                    'criteria_evidence' => 'Draf kebijakan berupa rancangan Peraturan atau rancangan Keputusan atau Surat Edaran/dokumen yang berisi pengaturan/norma mengenai penggunaan Sistem Penghubung Layanan Pemerintah Pusat/Pemerintah Daerah; Notulensi/ catatan/laporan hasil penyusunan kebijakan internal penggunaan Sistem Penghubung Layanan Pemerintah Pusat/Pemerintah Daerah; bukti undangan rapat penyusunan kebijakan internal penggunaan 			Sistem Penghubung Layanan Pemerintah Pusat/Pemerintah Daerah; dan/atau dokumentasi aktivitas-aktivitas penyusunan kebijakan internal penggunaan 			Sistem Penghubung Layanan Pemerintah Pusat/Pemerintah Daerah'
                ],
                2 => [
                    'detail' => 'Kebijakan internal terkait Penggunaan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah telah ditetapkan. Kondisi: Kebijakan internal terkait Penggunaan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah telah mengatur penggunaan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah untuk sebagian unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah memiliki pengaturan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah namun hanya diterapkan pada sebagian unit kerja.',
                    'criteria_evidence' => 'Konteks pengaturan/norma penggunaan Sistem Penghubung Layanan Pemerintah Pusat/Pemerintah Daerah bagi sebagian unit kerja/perangkat daerah tertuang dalam peraturan/kebijakan kepala unit kerja/perangkat daerah atau dokumen kebijakan Instansi Pusat/Pemerintah Daerah lainnya;'
                ],
                3 => [
                    'detail' => 'Kriteria tingkat 2 telah terpenuhi dan kebijakan internal terkait Penggunaan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah telah mengatur penggunaan Sistem Penghubung Layanan untuk seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah memiliki pengaturan penggunaan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah yang diterapkan pada seluruh unit kerja.',
                    'criteria_evidence' => 'Konteks pengaturan/norma penggunaan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah bagi seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah tertuang dalam dokumen kebijakan Instansi Pusat/Pemerintah Daerah'
                ],
                4 => [
                    'detail' => 'Konteks pengaturan/norma penggunaan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah bagi seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah tertuang dalam dokumen kebijakan Instansi Pusat/Pemerintah Daerah',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah menerapkan kebijakan internal terkait Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah secara menyeluruh dan telah mengatur keterhubungan dengan Sistem Penghubung Layanan Pemerintah serta telah melakukan reviu dan/atau evaluasi terhadap kebijakan tersebut secara periodik.',
                    'criteria_evidence' => '1) Konteks pengaturan/norma arah kebijakan interkoneksi penggunaan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah dengan Sistem Penghubung Layanan Pemerintah tertuang dalam dokumen kebijakan Instansi Pusat/Pemerintah Daerah;
                    2) Terdapat notulensi/catatan/laporan hasil evaluasi/reviu terkait kebijakan internal penggunaan Sistem Penghubung Layanan yang masih berlaku (<2 tahun);
                    3) Hasil evaluasi/reviu yang berisi konten isu/permasalahan dan rekomendasi perbaikan yang aktual; dan
                    4) Bukti undangan rapat evaluasi kebijakan internal penggunaan Sistem Penghubung Layanan, dan/atau dokumentasi aktivitas-aktivitas evaluasi kebijakan Sistem Penghubung Layanan (opsional).'
                ],
                5 => [
                    'detail' => 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi kebijakan internal terkait Penggunaan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah telah ditindaklanjuti dengan kebijakan baru.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah menindaklanjuti hasil reviu dan/atau evaluasi kebijakan pengoperasian Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah dengan menetapkan suatu kebijakan sebagai bentuk optimalisasi pelaksanaan kebijakan penggunaan Sistem Penghubung Layanan, sesuai dengan kebutuhan Instansi Pusat/Pemerintah Daerah ataupun perubahan lingkungan dan teknologi, yang selanjutnya terintegrasi dengan Sistem Penghubung Layanan Pemerintah di tingkat nasional. Tingkat kematangan level 5 (lima) dapat dipertahankan: 
                    a) dengan melakukan reviu terhadap kebijakan internal pengoperasian Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah; penyempurnaan terhadap kebijakan pengoperasian Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah sesuai hasil reviu; dan
                    b) dengan melakukan tindak lanjut atas hasil reviu berupa penyempurnaan terhadap kebijakan pengoperasian Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah dengan menetapkan kebijakan baru dan/atau turunan kebijakan (SK, SE, SOP, dan lain sebagainya), dan kebijakan lainnya sesuai hasil reviu.',
                    'criteria_evidence' => '1) Dokumen kebijakan internal penerapan SPBE Instansi Pusat/Pemerintah Daerah yang memuat kebijakan Penggunaan Sistem Penghubung Layanan yang terintegrasi dengan Sistem Penghubung Layanan Pemerintah di tingkat nasional dan telah optimal (memenuhi kriteria tingkat kematangan level 1 – 4); 
                    2) Terdapat dokumentasi aktivitas reviu/penyempurnaan kebijakan internal Penggunaan Sistem Penghubung Layanan yang memuat rekomendasi;-37- jdih.menpan.go.id
                    3) Dokumen formal kebijakan internal Instansi Pusat/Pemerintah Daerah sebagai optimalisasi yang sesuai dengan rekomendasi hasil reviu/penyempurnaan; dan4) Optimalisasi kebijakan dapat dipenuhi dengan menetapkan turunan kebijakan (SK, SE, SOP), dan kebijakan lainnya yang memuat substansi indikator sesuai arah rekomendasi reviu serta ditetapkan setidaknya 1 tahun setelah reviu dilakukan.'
                ],
            ],

            8 => [
                1 => [
                    'detail' => 'Konsep kebijakan internal terkait Manajemen Keamanan Informasi telah tersedia.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah belum atau telah memiliki konsep kebijakan mengenai Manajemen Keamanan Informasi.',
                    'criteria_evidence' => 'Draf kebijakan berupa rancangan Peraturan atau rancangan Keputusan atau Surat Edaran/dokumen yang berisi pengaturan/norma mengenai penerapan Manajemen Keamanan Informasi; Notulensi/ catatan/laporan hasil penyusunan kebijakan internal penerapan Manajemen Keamanan Informasi; bukti undangan rapat penyusunan kebijakan internal penerapan Manajemen Keamanan Informasi; dan/atau dokumentasi aktivitas-aktivitas penyusunan kebijakan internal penerapan Manajemen Keamanan Informasi.'
                ],
                2 => [
                    'detail' => 'Kebijakan internal terkait Manajemen Keamanan Informasi telah ditetapkan. Kondisi: Kebijakan internal terkait Manajemen Keamanan Informasi belum mengatur secara lengkap mengenai cakupan Manajemen Keamanan Informasi (penetapan ruang lingkup, penetapan penanggung jawab, perencanaan, dukungan pengoperasian, evaluasi kinerja, dan perbaikan berkelanjutan terhadap Keamanan Informasi).',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah menetapkan kebijakan mengenai Manajemen Keamanan Informasi namun belum mengatur secara lengkap cakupan Manajemen Keamanan Informasi (penetapan ruang lingkup, penetapan penanggung jawab, perencanaan, dukungan pengoperasian,evaluasi kinerja, dan perbaikan berkelanjutan terhadap Keamanan Informasi).',
                    'criteria_evidence' => 'Konteks pengaturan/norma penerapan Manajemen Keamanan Informasi, dimana terdapat sebagian cakupan Manajemen Keamanan Informasi yang tertuang dalam dokumen kebijakan Instansi Pusat/Pemerintah Daerah;'
                ],
                3 => [
                    'detail' => 'Kriteria tingkat 2 telah terpenuhi dan kebijakan internal terkait Manajemen Keamanan Informasi mengatur seluruh cakupan Manajemen Keamanan Informasi secara lengkap (penetapan ruang lingkup, penetapan penanggung jawab, perencanaan, dukungan pengoperasian, evaluasi kinerja, dan perbaikan berkelanjutan terhadap Keamanan Informasi).',
                    'description' => 'Kebijakan mengenai Manajemen Keamanan Informasi telah mengatur seluruh uraian pelaksanaan teknis di lingkungan Instansi Pusat/Pemerintah Daerah berdasarkan cakupan Manajemen Keamanan Informasi secara lengkap.',
                    'criteria_evidence' => 'Konteks pengaturan/norma penerapan Manajemen Keamanan Informasi berisi cakupan (penetapan ruang lingkup, penetapan penanggung jawab, perencanaan, dukungan pengoperasian, evaluasi kinerja, dan perbaikan berkelanjutan terhadap Keamanan Informasi) diuraikan secara lengkap yang tertuang dalam dokumen kebijakan Instansi Pusat/Pemerintah Daerah;'
                ],
                4 => [
                    'detail' => 'Kriteria tingkat 3 telah terpenuhi dan kebijakan internal terkait Manajemen Keamanan Informasi telah mengatur penerapan untuk seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah. Selain itu, kebijakan internal terkait Manajemen Keamanan Informasi telah direviu dan dievaluasi secara periodik.',
                    'description' => 'Kebijakan telah mengatur penerapan Manajemen Keamanan Informasi untuk seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah dan kebijakan telah direviu dan/atau dievaluasi secara periodik.',
                    'criteria_evidence' => '1) Konteks pengaturan/norma penerapan Manajemen Keamanan Informasi bagi seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah yang tertuang dalam dokumen kebijakan Instansi Pusat/Pemerintah Daerah;
                    2) Terdapat notulensi/catatan/laporan hasil evaluasi/reviu terkait kebijakan internal Manajemen Keamanan Informasi yang masih berlaku (<2 tahun);
                    3) Hasil evaluasi/reviu yang berisi konten isu/permasalahan dan rekomendasi perbaikan yang aktual; dan
                    4) Bukti undangan rapat evaluasi kebijakan internal Manajemen Keamanan Informasi, dan/atau dokumentasi aktivitas-aktivitas evaluasi kebijakan internal Manajemen Keamanan Informasu (opsional).'
                ],
                5 => [
                    'detail' => 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi kebijakan internal terkait Manajemen Keamanan Informasi telah ditindaklanjuti dengan kebijakan baru.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah menindaklanjuti hasil reviu dan/atau evaluasi kebijakan penerapan Manajemen Keamanan Informasi dengan menetapkan suatu kebijakan sebagai bentuk optimalisasi pelaksanaan kebijakan Manajemen Keamanan Informasi, sesuai dengan kebutuhan Instansi Pusat/Pemerintah Daerah ataupun perubahan lingkungan dan teknologi. Tingkat kematangan level 5 (lima) dapat dipertahankan: 
                    a) dengan melakukan reviu terhadap kebijakan penerapan Manajemen Keamanan Informasi; penyempurnaan terhadap kebijakan internal penerapan Manajemen Keamanan Informasi sesuai hasil reviu; dan
                    b) dengan melakukan tindak lanjut atas hasil reviu berupa penyempurnaan terhadap kebijakan penerapan Manajemen Keamanan Informasi dengan menetapkan kebijakan baru dan/atau turunan kebijakan (SK, SE, SOP, dan lain sebagainya), dan kebijakan lainnya sesuai hasil reviu.',
                    'criteria_evidence' => '1) Dokumen kebijakan internal penerapan SPBE Instansi Pusat/Pemerintah Daerah yang memuat kebijakan Manajemen Keamanan Informasi dan telah optimal (memenuhi kriteria tingkat kematangan level 1 – 4); 
                    2) Terdapat dokumentasi aktivitas reviu/penyempurnaan kebijakan internal Manajemen Keamanan Informasi yang memuat rekomendasi; 
                    3) Dokumen formal kebijakan internal Instansi Pusat/Pemerintah Daerah sebagai optimalisasi yang sesuai dengan rekomendasi hasil reviu/penyempurnaan; dan
                    4) Optimalisasi kebijakan dapat dipenuhi dengan menetapkan turunan kebijakan (SK, SE, SOP), dan kebijakan lainnya yang memuat substansi indikator sesuai arah rekomendasi reviu serta ditetapkan setidaknya 1 tahun setelah reviu dilakukan.'
                ],
            ],

            9 => [
                1 => [
                    'detail' => 'Konsep kebijakan internal terkait Audit TIK belum atau telah tersedia.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah belum atau telah memiliki konsep kebijakan mengenai Audit TIK.',
                    'criteria_evidence' => 'Draf kebijakan berupa rancangan Peraturan atau rancangan Keputusan atau Surat Edaran/dokumen yang berisi pengaturan/norma mengenai pelaksanaan Audit TIK; Notulensi/catatan/laporan hasil penyusunan kebijakan internal pelaksanaan Audit TIK; bukti undangan rapat penyusunan kebijakan internal pelaksanaan Audit TIK; dan/atau dokumentasi aktivitas-aktivitas penyusunan kebijakan internal pelaksanaan Audit TIK.'
                ],
                2 => [
                    'detail' => 'Kebijakan internal Audit TIK telah ditetapkan. Kondisi: Kebijakan internal terkait Audit TIK hanya mengatur pelaksanaan sebagian Audit TIK (Audit Infrastruktur SPBE, Audit Aplikasi SPBE, dan Audit Keamanan SPBE).',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah menetapkan kebijakan mengenai Audit TIK namun belum mengatur secara lengkap cakupan Audit TIK (Audit Infrastruktur SPBE, Audit Aplikasi SPBE, dan Audit Keamanan SPBE).',
                    'criteria_evidence' => 'Konteks pengaturan/norma penerapan Audit TIK, dimana terdapat sebagian cakupan Audit TIK yang tertuang dalam dokumen kebijakan Instansi Pusat/Pemerintah Daerah;'
                ],
                3 => [
                    'detail' => 'Kriteria tingkat 2 telah terpenuhi dan kebijakan internal terkait Audit TIK telah mengatur pelaksanaan seluruh Audit TIK (Audit Infrastruktur SPBE Audit Aplikasi SPBE, dan Audit Keamanan SPBE).',
                    'description' => 'Kebijakan mengenai Audit TIK telah mengatur cakupan Audit TIK secara lengkap.',
                    'criteria_evidence' => 'Konteks pengaturan/norma penerapan Audit TIK berisi cakupan (Audit Infrastruktur SPBE, Audit Aplikasi SPBE, dan Audit Keamanan SPBE) diuraikan secara lengkap yang tertuang dalam dokumen kebijakan Instansi Pusat/Pemerintah Daerah.'
                ],
                4 => [
                    'detail' => 'Kriteria tingkat 3 telah terpenuhi dan kebijakan internal terkait Audit TIK telah direviu dan dievaluasi secara periodik.',
                    'description' => 'Kriteria tingkat 3 telah terpenuhi dan kebijakan internal terkait Audit TIK telah direviu dan/atau dievaluasi secara periodik.',
                    'criteria_evidence' => '1) Konteks pengaturan/norma penerapan Audit TIK bagi seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah yang tertuang dalam dokumen kebijakan Instansi Pusat/Pemerintah Daerah;
                    2) Terdapat notulensi/catatan/laporan hasil evaluasi/reviu terkait kebijakan internal Audit TIK yang masih berlaku (<2 tahun);
                    3) Hasil evaluasi/reviu yang berisi konten isu/permasalahan dan rekomendasi perbaikan yang aktual; dan
                    4) Bukti undangan rapat evaluasi kebijakan internal Arsitektur SPBE, dan/atau dokumentasi aktivitas-aktivitas evaluasi kebijakan internal Audit TIK (opsional). '
                ],
                5 => [
                    'detail' => 'Kriteria tingkat 4 telah terpenuhi, serta hasil reviu dan evaluasi kebijakan internal terkait Audit TIK telah ditindaklanjuti dengan kebijakan baru.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah menindaklanjuti hasil reviu dan/atau evaluasi kebijakan Audit TIK dengan menetapkan suatu kebijakan sebagai bentuk optimalisasi pelaksanaan kebijakan Audit TIK, sesuai dengan kebutuhan Instansi Pusat/Pemerintah Daerah ataupun perubahan lingkungan dan teknologi.Tingkat kematangan level 5 (lima) dapat dipertahankan: 
                    a) dengan melakukan reviu terhadap kebijakan Audit TIK; penyempurnaan terhadap kebijakan Audit TIK sesuai hasil reviu; dan
                    b) dengan melakukan tindak lanjut atas hasil reviu berupa penyempurnaan terhadap kebijakan Audit TIK dengan menetapkan kebijakan baru dan/atau turunan kebijakan (SK, SE, SOP, dan lain sebagainya), dan kebijakan lainnya sesuai hasil reviu. ',
                    'criteria_evidence' => '1) Dokumen kebijakan internal penerapan SPBE Instansi Pusat/Pemerintah Daerah yang memuat kebijakan Audit TIK dan telah optimal (memenuhi kriteria tingkat kematangan level 1 – 4); 
                    2) Terdapat dokumentasi aktivitas reviu/penyempurnaan kebijakan internal Audit TIK yang memuat rekomendasi;
                    3) Dokumen formal kebijakan internal Instansi Pusat/Pemerintah Daerah sebagai optimalisasi yang sesuai dengan rekomendasi hasil reviu/penyempurnaan; dan
                    4) Optimalisasi kebijakan dapat dipenuhi dengan menetapkan turunan kebijakan (SK, SE, SOP), dan kebijakan lainnya yang memuat susbstansi indikator sesuai arah rekomendasi reviu serta ditetapkan setidaknya 1 tahun setelah reviu dilakukan. '
                ],
            ],

            10 => [
                1 => [
                    'detail' => 'Konsep kebijakan internal terkait Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah belum atau telah tersedia.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah belum atau sudah memiliki konsep kebijakan internal (belum ditetapkan) untuk mendukung tugas dan fungsi Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah.',
                    'criteria_evidence' => 'Draf kebijakan berupa rancangan Peraturan atau rancangan Keputusan atau Surat Edaran/dokumen yang berisi pengaturan/norma mengenai pelaksanaan tugas dan fungsi Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah; Notulensi/ catatan/laporan hasil penyusunan 			kebijakan internal pelaksanaan tugas dan fungsi Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah; bukti undangan rapat penyusunan kebijakan 			internal pelaksanaan tugas dan fungsi Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah; dan/atau dokumentasi aktivitas-aktivitas penyusunan 			kebijakan internal pelaksanaan tugas dan fungsi Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah.'
                ],
                2 => [
                    'detail' => 'Kebijakan internal Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah telah ditetapkan. Kondisi: Kebijakan internal terkait Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah telah mencakup pengaturan tugas-tugas Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah 			yang mendukung penerapan SPBE pada sebagian unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki kebijakan internal yang ditetapkan dan mencakup tugas-tugas Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah yang diterapkan hanya pada sebagian unit kerja atau sebagian perangkat daerah.',
                    'criteria_evidence' => 'Konteks pengaturan/norma pelaksanaan tugas dan fungsi Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah, dimana hanya mencakup sebagian unit kerja/perangkat daerah yang tertuang dalam dokumen kebijakan unit kerja/perangkat daerah atau kebijakan Instansi 			Pusat/Pemerintah Daerah lainnya;'
                ],
                3 => [
                    'detail' => 'Kriteria tingkat 2 telah terpenuhi dan kebijakan internal terkait Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah telah mencakup pengaturan tugas-tugas Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah yang mendukung penerapan SPBE pada seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.',
                    'description' => 'Kebijakan internal mencakup pengaturan tugas-tugas Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah yang diterapkan di semua unit kerja atau semua perangkat daerah.',
                    'criteria_evidence' => 'Konteks pengaturan/norma pelaksanaan tugas dan fungsi Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah yang telah mendukung penerapan SPBE pada seluruh unit kerja/perangkat daerah yang tertuang dalam dokumen kebijakan Instansi Pusat/Pemerintah Daerah.'
                ],
                4 => [
                    'detail' => 'Kriteria tingkat 3 telah terpenuhi, kebijakan internal terkait Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah yang mendukung penerapan SPBE antar Instansi Pusat, antar Pemerintah Daerah, dan/atau antar Instansi Pusat dan Pemerintah Daerah, dan kebijakan internal terkait Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah telah direviu dan dievaluasi secara periodik.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki arah koordinasi, kerja sama, atau integrasi penerapan SPBE dengan Instansi Pusat/Pemerintah Daerah lain, yang dituangkan pada tugas-tugas Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah dalam kebijakan internal.',
                    'criteria_evidence' => '1) Konteks pengaturan/norma pelaksanaan tugas dan fungsi Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah yang mengatur arah koordinasi, kerja sama, atau integrasi penerapan SPBE antar Instansi Pusat, antar Pemerintah Daerah, dan/atau antar Instansi Pusat dan Pemerintah Daerah dokumen kebijakan Instansi Pusat/ Pemerintah Daerah; 
                    2) Terdapat notulensi/catatan/laporan hasil evaluasi/reviu terkait kebijakan internal terkait Tim Koordinasi SPBE yang masih berlaku (<2 tahun);
                    3) Hasil evaluasi/reviu yang berisi konten isu/permasalahan dan rekomendasi perbaikan yang aktual; dan
                    4) Bukti undangan rapat evaluasi kebijakan internal terkait Tim Koordinasi SPBE, dan/atau dokumentasi aktivitas-aktivitas evaluasi kebijakan internal terkait Tim Koordinasi SPBE (opsional). '
                ],
                5 => [
                    'detail' => 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi kebijakan internal terkait Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah telah ditindaklanjuti dengan kebijakan baru.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah menindaklanjuti hasil reviu dan/atau evaluasi kebijakan Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah dengan menetapkan suatu kebijakan sebagai bentuk optimalisasi pelaksanaan kebijakan Tim Koordinasi SPBE, sesuai dengan kebutuhan Instansi Pusat/Pemerintah Daerah. Tingkat kematangan level 5 (lima) dapat dipertahankan: 
                    a) dengan melakukan reviu terhadap kebijakan Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah; penyempurnaan terhadap kebijakan Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah sesuai hasil reviu; dan
                    b) dengan melakukan tindak lanjut atas hasil reviu berupa penyempurnaan terhadap kebijakan Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah dengan menetapkan kebijakan baru dan/atau turunan kebijakan (SK, SE, SOP, dan lain sebagainya), dan kebijakan lainnya sesuai hasil reviu.',
                    'criteria_evidence' => '1) Dokumen kebijakan internal penerapan SPBE Instansi Pusat/Pemerintah Daerah yang memuat kebijakan Tim Koordinasi SPBE dan telah optimal (memenuhi kriteria tingkat kematangan level 1 – 4); 
                    2) Terdapat dokumentasi aktivitas reviu/penyempurnaan kebijakan internal Tim Koordinasi SPBE yang memuat rekomendasi; 
                    3) Dokumen formal kebijakan internal Instansi Pusat/Pemerintah Daerah sebagai optimalisasi yang sesuai dengan rekomendasi hasil reviu/penyempurnaan; dan
                    4) Optimalisasi kebijakan dapat dipenuhi dengan menetapkan turunan kebijakan (SK, SE, SOP), dan kebijakan lainnya yang memuat substansi indikator sesuai arah rekomendasi reviu ditetapkan setidaknya 1 tahun setelah reviu dilakukan.'
                ],
            ],

            11 => [
                1 => [
                    'detail' => 'Konsep dokumen Arsitektur SPBE belum atau telah tersedia.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah belum/sudah memiliki konsep dokumen Arsitektur SPBE dimaksud atau masih dalam proses penyusunan.',
                    'criteria_evidence' => 'Dokumen berupa draft/rancangan yang memuat Arsitektur SPBE; Terdapat notulensi/catatan/laporan hasil penyusunan rancangan Arsitektur SPBE, bukti undangan rapat penyusunan rancangan Arsitektur SPBE, dan/atau dokumentasi aktivitas-aktivitas penyusunan Arsitektur SPBE.'
                ],
                2 => [
                    'detail' => 'Dokumen Arsitektur SPBE telah tersedia. Kondisi: Dokumen Arsitektur SPBE hanya mencakup sebagian dari referensi dan domain Arsitektur SPBE Instansi Pusat/Pemerintah Daerah (Proses Bisnis, Data dan Informasi, Infrastruktur SPBE, Aplikasi SPBE, Keamanan SPBE, dan Layanan SPBE).',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki dokumen Arsitektur SPBE atau sudah memiliki konten metadata Arsitektur SPBE pada Sistem Informasi Arsitektur SPBE nasional mutakhir yang mencakup sebagian Referensi Arsitektur dan Domain Arsitektur SPBE',
                    'criteria_evidence' => 'Dokumentasi yang memuat Arsitektur SPBE as-is yang menggambarkan sebagian Referensi Arsitektur SPBE dan Domain Arsitektur SPBE serta telah didokumentasikan secara formal.'
                ],
                3 => [
                    'detail' => 'Kriteria tingkat 2 telah terpenuhi dan dokumen Arsitektur SPBE telah mencakup seluruh referensi dan domain Arsitektur SPBE Instansi Pusat/Pemerintah Daerah (Proses Bisnis, Data dan Informasi, Infrastruktur SPBE, Aplikasi SPBE, Keamanan SPBE, dan Layanan SPBE).',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah memiliki dokumen Arsitektur SPBE mutakhir yang menggambarkan keseluruhan Referensi Arsitektur dan Domain Arsitektur SPBE',
                    'criteria_evidence' => 'Dokumentasi yang memuat Arsitektur SPBE as-is yang didalamnya mencakup seluruh Referensi Arsitektur dan Domain Arsitektur serta telah didokumentasikan secara formal.'
                ],
                4 => [
                    'detail' => 'Kriteria tingkat 3 telah terpenuhi dan dokumen Arsitektur SPBE Instansi Pusat/Pemerintah Daerah telah berpedoman pada Arsitektur SPBE Nasional. Selain itu, dokumen Arsitektur SPBE Instansi Pusat/Pemerintah Daerah telah dilakukan reviu dan evaluasi secara periodik.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah memiliki dokumen Arsitektur SPBE sesuai standar dan selaras dengan Arsitektur SPBE Nasional yang sudah ditetapkan melalui Keputusan pimpinan Instansi Pusat/Kepala Daerah dan sudah memiliki konten metadata Arsitektur SPBE pada Sistem Informasi Arsitektur SPBE nasional mutakhir, serta telah dilakukan reviu dan/atau evaluasi secara periodik.',
                    'criteria_evidence' => '1) Dokumentasi yang memuat Arsitektur SPBE as-is yang berisi seluruh Referensi Arsitektur dan Domain Arsitektur SPBE secara lengkap serta telah sesuai dan selaras dengan standar Arsitektur SPBE Nasional;
                    2) Terdapat notulensi/catatan/laporan hasil evaluasi/reviu terkait Arsitektur SPBE yang masih berlaku (<2 tahun);
                    3) Hasil evaluasi/reviu yang berisi konten isu/permasalahan dan rekomendasi perbaikan yang aktual; dan
                    4) Bukti undangan rapat evaluasi Arsitektur SPBE, dan/atau dokumentasi aktivitas-aktivitas evaluasi Arsitektur SPBE (opsional).'
                ],
                5 => [
                    'detail' => 'Kriteria tingkat 4 telah terpenuhi dan dokumen Arsitektur SPBE Instansi Pusat/Pemerintah Daerah telah dilakukan pemutakhiran sebagai tindak lanjut hasil reviu dan evaluasi.',
                    'description' => 'Dokumen Arsitektur SPBE Instansi Pusat/Pemerintah Daerah telah dilakukan pemutakhiran sebagai tindak lanjut rekomendasi hasil reviu dan/atau evaluasi. Tingkat kematangan level 5 (lima) dapat dipertahankan:
                    a) dengan melakukan reviu terhadap Arsitektur SPBE; dan
                    b) dengan melakukan tindak lanjut berupa penyempurnaan terhadap Arsitektur SPBE to-be sesuai hasil reviu.',
                    'criteria_evidence' => '1) Terdapat notulensi/catatan/laporan hasil reviu/evaluasi dan rekomendasi tindak lanjut Arsitektur SPBE, yang dilengkapi dengan bukti undangan rapat pembahasan penyempurnaan Arsitektur SPBE, dan/atau dokumentasi aktivitas-aktivitas analisis komparasi atau penyempurnaan Arsitektur SPBE; 2) Dokumen Arsitektur SPBE as-is Instansi Pusat/Pemerintah Daerah yang berlaku; dan
                    3) Dokumen Arsitektur SPBE Instansi Pusat/Pemerintah Daerah to-be atau penyempurnaan yang telah diberlakukan.'
                ],
            ],

            12 => [
                1 => [
                    'detail' => 'Konsep dokumen Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah belum atau telah tersedia.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah belum atau sudah memiliki konsep dokumen Peta Rencana SPBE dimaksud atau masih dalam proses penyusunan.',
                    'criteria_evidence' => 'Dokumen berupa draft/rancangan Peta Rencana SPBE; Terdapat notulensi/catatan/laporan hasil penyusunan rancangan Peta Rencana SPBE, bukti undangan rapat penyusunan rancangan Peta Rencana SPBE, dan/atau dokumentasi aktivitas-aktivitas penyusunan Peta Rencana SPBE.'
                ],
                2 => [
                    'detail' => 'Dokumen Peta Rencana SPBE telah tersedia. Kondisi: dokumen Peta Rencana SPBE belum mengatur muatan Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah secara lengkap (Tata Kelola SPBE, Manajemen SPBE, Layanan SPBE, Infrastruktur SPBE, Aplikasi SPBE, Keamanan SPBE, Audit Teknologi SPBE dan Audit TIK).',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki dokumen Peta Rencana SPBE yang mencakup sebagian muatan Peta Rencana SPBE.',
                    'criteria_evidence' => 'Dokumen yang memuat Peta Rencana SPBE yang didalamnya mencakup sebagian muatan Peta Rencana SPBE serta telah didokumentasikan secara formal.'
                ],
                3 => [
                    'detail' => 'Kriteria tingkat 2 telah terpenuhi dan dokumen Peta Rencana SPBE telah mengatur seluruh muatan Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah secara lengkap (Tata Kelola SPBE, Manajemen SPBE, Layanan SPBE, Infrastruktur SPBE, Aplikasi SPBE, Keamanan SPBE, Audit Teknologi SPBE dan Audit TIK).',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah memiliki dokumen Peta Rencana SPBE yang mencakup keseluruhan muatan Peta Rencana SPBE.',
                    'criteria_evidence' => 'Dokumen yang memuat Peta Rencana SPBE yang didalamnya mencakup seluruh muatan Peta Rencana SPBE serta telah didokumentasikan secara formal.'
                ],
                4 => [
                    'detail' => 'Kriteria tingkat 3 telah terpenuhi dan dokumen Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah telah diterapkan secara konsisten melalui rencana kerja dan anggaran 3 (tiga) tahun terakhir. Selain itu, dokumen Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah telah dilakukan reviu dan evaluasi secara periodik.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah memiliki dokumen Peta Rencana SPBE yang dituangkan dalam rencana kerja dan anggaran dan telah dilakukan reviu dan/atau evaluasi secara periodik.',
                    'criteria_evidence' => '1) Dokumen yang memuat Peta Rencana SPBE yang didalamnya mencakup seluruh muatan Peta Rencana SPBE dan Dokumen Rencana Kerja dan Anggaran 3 (tiga) tahun terakhir yang didalamnya tercantum program/kegiatan yang selaras dengan Peta Rencana SPBE tersebut;
                    2) Terdapat notulensi/catatan/laporan hasil evaluasi/reviu terkait Peta Rencana SPBE yang masih berlaku (<2 tahun);
                    3) Hasil evaluasi/reviu yang berisi konten isu/permasalahan dan rekomendasi perbaikan yang aktual; dan
                    4) Bukti undangan rapat evaluasi Peta Rencana SPBE, dan/atau dokumentasi aktivitas-aktivitas evaluasi Peta Rencana SPBE (opsional).'
                ],
                5 => [
                    'detail' => 'Kriteria tingkat 4 telah terpenuhi dan dokumen Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah telah dilakukan pemutakhiran sebagai tindak lanjut hasil reviu dan evaluasi.',
                    'description' => 'Dokumen Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah telah dilakukan pemutakhiran dan/atau telah terdapat upaya perbaikan berkelanjutan terhadap Peta Rencana SPBE sebagai tindak lanjut rekomendasi hasil reviu dan/atau evaluasi. Tingkat kematangan level 5 (lima) dapat dipertahankan:
                    a) dengan melakukan reviu terhadap Peta Rencana SPBE; dan
                    b) dengan melakukan tindak lanjut berupa penyempurnaan terhadap Peta Rencana SPBE sesuai hasil reviu.',
                    'criteria_evidence' => '1) Terdapat notulensi/catatan/laporan hasil reviu/evaluasi dan rekomendasi tindak lanjut Peta Rencana SPBE, yang dapat dilengkapi dengan bukti undangan rapat pembahasan penyempurnaan Peta Rencana SPBE, dan/atau dokumentasi aktivitas-aktivitas analisis komparasi atau penyempurnaan Peta Rencana SPBE;
                    2) Dokumen yang memuat Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah yang berlaku sebelumnya dan dokumen yang memuat Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah yang telah disempurnakan dan telah ditetapkan; atau
                    3) Dokumentasi hasil upaya penguatan tata kelola Peta Rencana SPBE sesuai dengan rekomendasi hasil reviu dan/atau evaluasi.'
                ],
            ],

            13 => [
                1 => [
                    'detail' => 'Rencana dan Anggaran SPBE belum atau telah tertuang dalam rencana kerja dan anggaran tahunan.',
                    'description' => 'Rencana dan Anggaran SPBE Instansi Pusat/Pemerintah Daerah belum atau sudah tertuang dalam RKA/DIPA.',
                    'criteria_evidence' => 'Dokumen RKA/KL atau DPA-SKPD yang berisi program/kegiatan penerapan SPBE; Terdapat notulensi/catatan/laporan hasil pembahasan penyusunan Rencana dan Anggaran SPBE, bukti undangan rapat penyusunan Rencana dan Anggaran SPBE, dan/atau dokumentasi aktivitas-aktivitas penyusunan Rencana dan Anggaran SPBE.'
                ],
                2 => [
                    'detail' => 'Kriteria tingkat 1 telah terpenuhi dan sebagian Rencana dan Anggaran SPBE pada unit kerja/perangkat daerah dikonsultasikan kepada unit pengelola TIK di Instansi Pusat/Pemerintah Daerah.',
                    'description' => 'Rencana dan Anggaran SPBE Instansi Pusat/Pemerintah Daerah sebagian dikonsultasikan kepada unit pengelola TIK di Instansi Pusat/Pemerintah Daerah.',
                    'criteria_evidence' => 'Dokumen RKA/KL atau DPA-SKPD yang memuat anggaran SPBE; Dokumen yang berisi hasil konsultasi sebagian anggaran SPBE dengan unit pengelola TIK dan didokumentasikan secara formal.'
                ],
                3 => [
                    'detail' => 'Kriteria tingkat 2 telah terpenuhi dan seluruh Rencana dan Anggaran SPBE pada unit kerja/perangkat daerah dikonsultasikan kepada unit pengelola TIK di Instansi Pusat/Pemerintah Daerah.',
                    'description' => 'Seluruh Rencana dan Anggaran SPBE Instansi Pusat/Pemerintah Daerah dikonsultasikan kepada unit pengelola TIK di Instansi Pusat/Pemerintah Daerah.',
                    'criteria_evidence' => 'Dokumen RKA/KL atau DPA-SKPD dan/atau Dokumen SOP terkait proses penyusunan Anggaran SPBE terpadu serta dokumen hasil konsultasi anggaran SPBE yang seluruhnya telah dikonsultasikan dengan unit pengelola TIK dan didokumentasikan secara formal.'
                ],
                4 => [
                    'detail' => 'Kriteria tingkat 3 telah terpenuhi. Seluruh Rencana dan Anggaran SPBE Instansi Pusat/Pemerintah Daerah telah terpadu dan dapat dikendalikan oleh unit kerja/perangkat daerah yang menjalankan fungsi perencanaan dan penganggaran. Selain itu, Rencana dan Anggaran SPBE telah direviu dan dievaluasi secara periodik.',
                    'description' => 'Seluruh Rencana dan Anggaran SPBE Instansi Pusat/Pemerintah Daerah telah terpadu dan terkendali pada unit kerja/perangkat daerah yang menjalankan fungsi perencanaan dan penganggaran di Instansi Pusat/Pemerintah Daerah yang dituangkan dalam rencana kerja dan anggaran dan telah dilakukan reviu dan/atau evaluasi secara periodik.',
                    'criteria_evidence' => '1) Dokumen SOP terkait proses penyusunan Anggaran SPBE terpadu dan/atau Dokumen RKA/KL atau DPA-SKPD terkait Rencana dan Anggaran SPBE terpadu yang dikendalikan oleh unit kerja/perangkat daerah yang menjalankan fungsi perencanaan dan penganggaran dan didokumentasikan secara formal;
                    2) Terdapat notulensi/catatan/laporan hasil evaluasi/reviu terkait Rencana dan Anggaran SPBE yang masih berlaku (<2 tahun);
                    3) Hasil evaluasi/reviu yang berisi konten isu/permasalahan dan rekomendasi perbaikan yang aktual; dan
                    4) Bukti undangan rapat evaluasi Rencana dan Anggaran SPBE, dan/atau dokumentasi aktivitas-aktivitas evaluasi Rencana dan Anggaran SPBE (opsional).'
                ],
                5 => [
                    'detail' => 'Kriteria tingkat 4 telah terpenuhi serta Rencana dan Anggaran SPBE telah dilakukan revisi untuk tahun anggaran berikutnya sebagai tindak lanjut hasil reviu dan evaluasi.',
                    'description' => 'Rencana dan Anggaran SPBE Instansi Pusat/Pemerintah Daerah telah dilakukan revisi pada tahun anggaran berikutnya dan/atau telah terdapat upaya perbaikan berkelanjutan terhadap Rencana dan Anggaran SPBE SPBE sebagai tindak lanjut rekomendasi hasil reviu dan/atau evaluasi. Tingkat kematangan level 5 (lima) dapat dipertahankan:
                    a) dengan melakukan reviu terhadap Rencana dan Anggaran SPBE; dan
                    b) dengan melakukan tindak lanjut berupa penyempurnaan terhadap Rencana dan Anggaran SPBE sesuai hasil reviu.',
                    'criteria_evidence' => '1) Terdapat notulensi/catatan/laporan hasil reviu/evaluasi dan rekomendasi tindak lanjut Rencana dan Anggaran SPBE, yang dapat dilengkapi dengan bukti undangan rapat pembahasan revisi Rencana dan Anggaran SPBE, dan/atau dokumentasi aktivitas-aktivitas analisis komparasi atau revisi Rencana dan Anggaran SPBE;
                    2) Dokumen yang memuat Rencana dan Anggaran SPBE Instansi Pusat/Pemerintah Daerah yang berlaku sebelumnya;
                    3) Dokumen yang memuat Rencana dan Anggaran SPBE Instansi Pusat/Pemerintah Daerah yang telah disempurnakan dan telah ditetapkan; atau
                    4) Dokumentasi hasil upaya penguatan tata kelola Rencana dan Anggaran SPBE sesuai dengan hasil reviu dan/atau evaluasi.'
                ],
            ],

            14 => [
                1 => [
                    'detail' => 'Dokumen Proses Bisnis Instansi Pusat/Pemerintah Daerah belum atau telah tersedia. Kondisi: Dokumen Proses Bisnis Instansi Pusat/Pemerintah Daerah belum memenuhi standar.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah belum atau sudah memiliki konsep dokumen Proses Bisnis yang dimaksud atau masih dalam proses penyusunan atau memiliki dokumen Proses Bisnis namun belum sesuai pedoman yang berlaku.',
                    'criteria_evidence' => 'Dokumen berupa draft/rancangan model Peta Proses Bisnis dan/atau Peta Proses Bisnis; Terdapat notulensi/catatan/laporan hasil penyusunan rancangan model Proses Bisnis, bukti undangan rapat penyusunan rancangan model Proses Bisnis, dan/atau dokumentasi aktivitas-aktivitas penyusunan Proses Bisnis.'
                ],
                2 => [
                    'detail' => 'Kriteria tingkat 1 telah terpenuhi dan dokumen Proses Bisnis Instansi Pusat/Pemerintah Daerah telah memenuhi standar.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki dokumen Proses Bisnis sesuai pedoman yang berlaku.',
                    'criteria_evidence' => 'Dokumen model Peta Proses Bisnis masing-masing level dan pendukung yang sesuai dengan pedoman yang berlaku dan didokumentasikan secara formal.'
                ],
                3 => [
                    'detail' => 'Kriteria tingkat 2 telah terpenuhi dan Proses Bisnis Instansi Pusat/Pemerintah Daerah telah dilakukan perbaikan sebagai bentuk inovasi Proses Bisnis.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah melakukan perbaikan pada proses bisnis sebagai bentuk penerapan Inovasi Proses Bisnis.',
                    'criteria_evidence' => 'Dokumen model Peta Proses Bisnis yang telah dilakukan perbaikan dan didokumentasikan secara formal.'
                ],
                4 => [
                    'detail' => 'Kriteria tingkat 3 telah terpenuhi, Inovasi Proses bisnis telah diterapkan ke dalam Sistem Elektronik serta telah dilakukan reviu dan evaluasi secara periodik.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah melakukan penerapan Inovasi Proses Bisnis yang semula diterapkan melalui mekanisme non elektronik/non aplikasi, kemudian diubah dengan menggunakansistem elektronik/aplikasi, serta telah dilakukan reviu dan/atau evaluasi secara periodik.',
                    'criteria_evidence' => '1) Dokumentasi pengembangan model Inovasi Proses Bisnis yang telah diterapkan melalui sistem elektronik/aplikasi, yang direpresentasikan dengan Business Process Model and Notation (BPMN) as-is dan to-be;
                    2) Terdapat notulensi/catatan/laporan hasil evaluasi/reviu terkait Inovasi Proses Bisnis SPBE yang masih berlaku (<2 tahun);
                    3) Hasil evaluasi/reviu yang berisi konten isu/permasalahan dan rekomendasi perbaikan yang aktual; dan 4) Bukti undangan rapat evaluasi Inovasi Proses Bisnis SPBE, dan/atau dokumentasi aktivitas-aktivitas evaluasi Inovasi Proses Bisnis SPBE (opsional).'
                ],
                5 => [
                    'detail' => 'Kriteria tingkat 4 telah terpenuhi dan telah melakukan perbaikan Inovasi Proses Bisnis yang diterapkan ke dalam Sistem elektronik sebagai tindak lanjut hasil reviu dan evaluasi.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah melakukan perbaikan Inovasi Proses Bisnis yang diterapkan melalui sistem elektronik dan/atau telah terdapat upaya perbaikan berkelanjutan terhadap Proses Bisnis SPBE sebagai tindak lanjut rekomendasi hasil reviu dan/atau evaluasi. Tingkat kematangan level 5 (lima) dapat dipertahankan:
                    a) dengan melakukan reviu terhadap Inovasi Proses Bisnis; dan
                    b) dengan melakukan tindak lanjut berupa penyempurnaan terhadap Inovasi Proses Bisnis sesuai hasil reviu.',
                    'criteria_evidence' => '1) Terdapat notulensi/catatan/laporan hasil reviu/evaluasi dan rekomendasi tindak lanjut Inovasi Proses Bisnis, yang dapat dilengkapi dengan bukti undangan rapat pembahasan penyempurnaan Proses Bisnis, dan/atau dokumentasi aktivitas-aktivitas analisis komparasi atau penyempurnaan Proses Bisnis;
                    2) Dokumen yang memuat Inovasi Proses Bisnis Instansi Pusat/Pemerintah Daerah yang berlaku sebelumnya;
                    3) Dokumen yang memuat Inovasi Proses Bisnis Instansi Pusat/Pemerintah Daerah yang telah disempurnakan dan telah ditetapkan; atau
                    4) Dokumentasi hasil upaya penguatan tata kelola Inovasi Proses Bisnis SPBE sesuai dengan rekomendasi hasil reviu dan/atau evaluasi. '
                ],
            ],

            15 => [
                1 => [
                    'detail' => 'Proses pembangunan Aplikasi SPBE belum atau telah dilakukan secara adhoc (sewaktu-waktu, tidak terencana). Kondisi: Proses pembangunan Aplikasi SPBE belum memenuhi siklus pembangunan aplikasi.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah belum atau sudah melakukan proses Pembangunan Aplikasi SPBE namun belum memenuhi siklus pembangunan aplikasi. Dokumentasi proses pembangunan/pengembangan Aplikasi SPBE, notulen/catatan/laporan hasil pembahasan pembangunan Aplikasi SPBE, dan/atau undangan rapat pembangunan/ pengembangan Aplikasi SPBE.',
                    'criteria_evidence' => 'Dokumentasi proses pembangunan/pengembangan Aplikasi SPBE, notulen/catatan/laporan hasil pembahasan pembangunan Aplikasi SPBE, dan/atau undangan rapat pembangunan/ pengembangan Aplikasi SPBE.'
                ],
                2 => [
                    'detail' => 'Kriteria tingkat 1 telah terpenuhi dan proses pembangunan Aplikasi SPBE telah dilakukan sesuai siklus pembangunan aplikasi.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah melakukan proses pembangunan Aplikasi SPBE dan telah memenuhi siklus pembangunan aplikasi yang setidaknya mencakup siklus perencanaan, analisis, desain, implementasi, dan pemeliharaan.',
                    'criteria_evidence' => 'Dokumentasi proses pembangunan/pengembangan Aplikasi SPBE, dan/atau notulen/catatan/laporan proses pembangunan Aplikasi SPBE yang didalamnya mencakup siklus pembangunan aplikasi, serta didokumentasikan secara formal.'
                ],
                3 => [
                    'detail' => 'Kriteria tingkat 2 telah terpenuhi dan proses pembangunan aplikasi SPBE telah dikonsultasikan kepada unit kerja/perangkat daerah yang melaksanakan fungsi pengelolaan TIK di Instansi Pusat/Pemerintah Daerah.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah melakukan proses pembangunan Aplikasi SPBE dan telah dikonsultasikan kepada unit kerja/perangkat daerah yang menjalankan fungsi pengelolaan TIK.',
                    'criteria_evidence' => 'Dokumentasi proses pembangunan/pengembangan Aplikasi SPBE yang didalamnya mencakup siklus pembangunan aplikasi dan didokumentasikan secara formal; Terdapat notulensi/catatan/laporan hasil pembahasan pembangunan Aplikasi SPBE antara unit pengusul di Instansi Pusat/Pemerintah Daerah dengan Unit pengelola TIK.'
                ],
                4 => [
                    'detail' => 'Kriteria tingkat 3 telah terpenuhi dan Pembangunan Aplikasi SPBE Instansi Pusat/Pemerintah Daerah telah terpadu dan dapat dikendalikan oleh unit kerja/perangkat daerah yang menjalankan fungsi pengelolaan TIK di Instansi Pusat/Pemerintah Daerah. Selain itu, Pembangunan Aplikasi SPBE telah direviu dan dievaluasi secara periodik.',
                    'description' => 'Pembangunan Aplikasi di Instansi Pusat/Pemerintah Daerah telah dilaksanakan secara terpadu dan dapat dikendalikan serta dilakukan reviu dan/atau evaluasi secara periodik.',
                    'criteria_evidence' => '1) Dokumentasi aktivitas-aktivitas pembangunan/ pengembangan Aplikasi SPBE yang terkendali dan terpadu pada unit kerja/perangkat daerah yang menjalankan fungsi pengelolaan TIK;
                    2) Terdapat notulensi/catatan/laporan hasil evaluasi/reviu terkait Pembangunan Aplikasi SPBE yang masih berlaku (<2 tahun);
                    3) Hasil evaluasi/reviu yang berisi konten isu/permasalahan dan rekomendasi perbaikan yang aktual; dan
                    4) Bukti undangan rapat evaluasi Pembangunan Aplikasi SPBE, dan/atau dokumentasi aktivitas-aktivitas evaluasi Pembangunan Aplikasi SPBE (opsional).'
                ],
                5 => [
                    'detail' => 'Kriteria tingkat 4 telah terpenuhi dan Aplikasi SPBE telah dikembangkan secara optimal untuk meningkatkan efektivitas dan efisiensi terhadap perubahan lingkungan, teknologi, dan kebutuhan Instansi Pusat/Pemerintah Daerah sebagai tindak lanjut hasil reviu dan evaluasi.',
                    'description' => 'Aplikasi SPBE telah dikembangkan secara optimal sesuai dengan kebutuhan Instansi Pusat/Pemerintah Daerah ataupun perubahan lingkungan dan teknologi dan/atau telah terdapat upaya perbaikan berkelanjutan terhadap tata kelola Pembangunan Aplikasi SPBE sebagai tindak lanjut rekomendasi hasil reviu dan/atau evaluasi. Tingkat kematangan level 5 (lima) dapat dipertahankan: a) dengan melakukan reviu terhadap Pembangunan Aplikasi SPBE; dan
                    b) dengan melakukan tindak lanjut berupa penyempurnaan terhadap Pembangunan Aplikasi SPBE sesuai hasil reviu.',
                    'criteria_evidence' => '1) Terdapat notulensi/catatan/laporan hasil evaluasi dan rekomendasi tindak lanjut pembangunan Aplikasi SPBE serta dapat dilengkapi dengan bukti undangan rapat penyempurnaan pembangunan Aplikasi SPBE.
                    2) Dokumen yang memuat pengembangan Aplikasi SPBE Instansi Pusat/Pemerintah Daerah yang berlaku sebelumnya;
                    3) Dokumen yang memuat pengembangan Aplikasi SPBE Instansi Pusat/Pemerintah Daerah yang telah disempurnakan dan telah ditetapkan; atau
                    4) Dokumentasi hasil upaya penguatan tata kelola Pembangunan Aplikasi SPBE sesuai dengan rekomendasi hasil reviu dan/atau evaluasi.'
                ],
            ],

            16 => [
                1 => [
                    'detail' => 'Layanan Pusat Data belum atau telah tersediadigunakan oleh Instansi Pusat/Pemerintah Daerah. ',
                    'description' => 'Instansi Pusat/Pemerintah Daerah belum atau sudah memiliki layanan pusat data dimaksud.',
                    'criteria_evidence' => 'Dokumentasi pemanfaatan Layanan Pusat Data, SOP penggunaan pusat data, notulensi/catatan/laporan hasil pembangunan Layanan Pusat Data, dan/atau bukti undangan rapat pembangunan Layanan Pusat Data. '
                ],
                2 => [
                    'detail' => 'l Kriteria tingkat 1 telah terpenuhi. Kondisi: Layanan Pusat Data telah digunakan oleh sebagian unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki layanan pusat data yang dimanfaatkan oleh sebagian unit kerja/perangkat daerah.',
                    'criteria_evidence' => 'Dokumentasi operasional dan pemanfaatan Layanan Pusat Data pada sebagian unit kerja/perangkat daerah yang menggunakan dan/atau SOP penggunaan pusat data, serta didokumentasikan secara formal.'
                ],
                3 => [
                    'detail' => 'Kriteria tingkat 2 telah terpenuhi dan Layanan Pusat Data telah digunakan oleh seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah. Selain itu, terdapat prosedur pengoperasian baku Layanan Pusat Data.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki layanan pusat data yang memiliki prosedur pengoperasian baku pusat data yang dimanfaatkan oleh seluruh unit kerja/perangkat daerah.',
                    'criteria_evidence' => 'Dokumentasi operasional dan pemanfaatan Layanan Pusat Data pada seluruh unit kerja/perangkat daerah Bukti pemanfaatan Layanan Pusat Data pada seluruh unit kerja/perangkat daerah dapat dipenuhi dengan pemanfaatan pada keseluruhan populasi unit kerja/perangkat daerah dan/atau dengan membandingkan antara capaian dan target cakupan penerapan yang ditetapkan pada tahun berjalan. Dokumentasi operasional dapat berupa SOP, SLA, dan sebagainya. Sedangkan dokumentasi pemanfaatan layanan dapat menggambarkan utilisasi dari penggunaan Pusat Data oleh unit kerja/perangkat daerah. '
                ],
                4 => [
                    'detail' => 'Kriteria tingkat 3 telah terpenuhi dan terdapat interkoneksi Layanan Pusat Data dengan Pusat Data Nasional/Pusat Data Instansi Pusat/Pusat Data Pemerintah Daerah lain dan/atau penggunaan Layanan Pusat Data Nasional. Selain itu, penggunaan Layanan Pusat Data di Instansi Pusat/Pemerintah Daerah telah direviu dan dievaluasi secara periodik.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah memiliki layanan pusat data yang mendukung interkoneksi/keterhubungan/integrasi dengan pusat data yang diselenggarakan oleh Instansi Pusat/Pemerintah Daerah lain atau Pusat Data Nasional, serta telah dilakukan reviu dan/atau evaluasi secara berkala.',
                    'criteria_evidence' => '1) Dokumentasi pemanfaatan Layanan Pusat Data, SOP penggunaan pusat data, dokumentasi interkoneksi dengan pusat data Instansi Pusat/Pemerintah Daerah lain dan/atau Pusat Data Nasional;
                    3) Hasil evaluasi/reviu yang berisi konten isu/permasalahan dan rekomendasi perbaikan yang aktual; dan
                    2) Terdapat notulensi/catatan/laporan hasil evaluasi/reviu terkait Layanan Pusat Data yang masih berlaku (<2 tahun);
                    4) Bukti undangan rapat evaluasi Layanan Pusat Data, dan/atau dokumentasi aktivitas-aktivitas evaluasi Layanan Pusat Data SPBE (opsional).'
                ],
                5 => [
                    'detail' => 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi penggunaan Layanan Pusat Data di Instansi Pusat/Pemerintah Daerah telah ditindaklanjuti dengan melakukan perbaikan terhadap Layanan Pusat Data.',
                    'description' => 'Layanan Pusat Data Instansi Pusat/Pemerintah Daerah telah dilakukan perbaikan atau peningkatan dan/atau telah terdapat upaya perbaikan berkelanjutan terhadap Layanan Pusat Data sebagai tindak lanjut rekomendasi hasil reviu dan/atau evaluasi. Tingkat kematangan level 5 (lima) dapat dipertahankan:
                    a) dengan melakukan reviu terhadap Layanan Pusat Data; dan
                    b) dengan melakukan tindak lanjut berupa penyempurnaan terhadap Layanan Pusat Data sesuai hasil reviu. ',
                    'criteria_evidence' => '1) Terdapat notulensi/catatan/laporan hasil evaluasi dan rekomendasi tindak lanjut Layanan Pusat Data, yang dapat dilengkapi dengan bukti undangan rapat evaluasi Layanan Pusat Data, dan/atau dokumentasi aktivitas-aktivitas analisis komparasi atau penyempurnaan Layanan Pusat Data;
                    3) Dokumen yang memuat pemanfaatan Layanan Pusat Data, SOP penggunaan pusat data, dokumentasi interkoneksi Layanan Pusat Data Instansi Pusat/Pemerintah Daerah yang telah disempurnakan dan telah ditetapkan; atau
                    2) Dokumen yang memuat pemanfaatan Layanan Pusat Data, SOP penggunaan pusat data, dokumentasi interkoneksi Layanan Pusat Data Instansi Pusat/Pemerintah Daerah yang berlaku sebelumnya; 
                    4) Dokumentasi hasil upaya penguatan tata kelola Layanan Pusat Data sesuai dengan rekomendasihasil reviu dan/atau evaluasi. '
                ],
            ],

            17 => [
                1 => [
                    'detail' => 'Layanan Jaringan Intra Instansi Pusat/PemerintahDaerah belum atau telah tersedia.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah belum atau telah menerapkan pengoperasian Jaringan Intra Instansi Pusat/Pemerintah Daerah namun masih bersifat ad hoc (sementara). ',
                    'criteria_evidence' => 'Terdapat notulensi/catatan/laporan pembangunan Jaringan Intra Instansi Pusat/Pemerintah Daerah, pengoperasian Jaringan Intra Instansi Pusat/Pemerintah Daerah pada sebagian unit kerja/perangkat daerah, dan/atau bukti undangan rapat pembangunan Jaringan Intra Instansi Pusat/Pemerintah Daerah. '
                ],
                2 => [
                    'detail' => 'Kriteria tingkat 1 telah terpenuhi. Kondisi: Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah telah diterapkan di sebagian unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah menerapkan pengoperasian Jaringan Intra Instansi Pusat/Pemerintah Daerah di sebagian unit kerja/perangkat daerah, namun belum mengatur keterhubungan dan akses Jaringan Intra Instansi Pusat/Pemerintah Daerah dengan Jaringan Intra pemerintah.',
                    'criteria_evidence' => 'Dokumentasi operasional dan pemanfaatan Layanan Jaringan Intra pada sebagian unit kerja/perangkat daerah yang menggunakan dan/atau SOP penggunaan jaringan intra, serta didokumentasikan secara formal.'
                ],
                3 => [
                    'detail' => 'Kriteria tingkat 2 telah terpenuhi dan Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah telah diterapkan di seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah menerapkan pengoperasian Jaringan Intra Instansi Pusat/ Pemerintah Daerah pada seluruh unit kerja/perangkat daerah.',
                    'criteria_evidence' => 'Dokumentasi operasional dan pemanfaatan Layanan Jaringan Intra pada seluruh unit kerja/perangkat daerah. Bukti pemanfaatan Layanan Jaringan Intra pada seluruh unit kerja/perangkat daerah dapat dipenuhi dengan pemanfaatan pada keseluruhan populasi unit kerja/perangkat daerah dan/atau dengan membandingkan antara capaian dan target cakupan penerapan yang ditetapkan pada tahun berkenaan. Dokumentasi operasional dapat berupa SOP, SLA, dan sebagainya. Sedangkan dokumentasi pemanfaatan layanan dapat menggambarkan utilisasi dari penggunaan Jaringan Intra oleh unit kerja/perangkat daerah.'
                ],
                4 => [
                    'detail' => ' Kriteria tingkat 3 telah terpenuhi dan terdapat interkoneksi Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah dengan Jaringan Intra Pemerintah dan/atau Jaringan Intra Instansi Pusat/Pemerintah Daerah lain. Selain itu, Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah telah direviu dan dievaluasi secara periodik.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah menerapkan pengoperasian Jaringan Intra Instansi Pusat/Pemerintah Daerah secara menyeluruh dan telah mengatur interkoneksi/keterhubungan dan akses dengan Jaringan Intra Instansi Pusat/Pemerintah Daerah lainnya atau dengan Jaringan Intra Pemerintah, serta telah melakukan reviu dan/atau evaluasi terhadap pengoperasiannya.',
                    'criteria_evidence' => '1) Dokumentasi pengoperasian dan/atau Standard Operating Procedure (SOP) Jaringan Intra Instansi Pusat/Pemerintah Daerah secara menyeluruh yang terhubung dengan Jaringan Intra Instansi Pusat/Pemerintah Daerah lainnya dan/atau dengan Jaringan Intra Pemerintah.
                    2) Terdapat notulensi/catatan/laporan hasil evaluasi/reviu terkait Layanan Jaringan Intra yang masih berlaku (<2 tahun);
                    3) Hasil evaluasi/reviu yang berisi konten isu/permasalahan dan rekomendasi perbaikan yang aktual; dan
                    4) Bukti undangan rapat evaluasi Layanan Jaringan Intra, dan/atau dokumentasi aktivitas-aktivitas Layanan Jaringan Intra (opsional).'
                ],
                5 => [
                    'detail' => 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah telah ditindaklanjuti dengan melakukan perbaikan terhadap Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah serta terhubung dengan Jaringan Intra Pemerintah di tingkat nasional.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah melakukan peningkatan/perbaikan terhadap pengoperasian Jaringan Intra Instansi Pusat/Pemerintah Daerah dan/atau telah terdapat upaya perbaikan berkelanjutan terhadap Layanan Jaringan Intra sebagai tindak lanjut rekomendasi hasil reviu dan/atau evaluasi. Tingkat kematangan level 5 (lima) dapat dipertahankan:
                    c) dengan melakukan reviu terhadap Layanan Jaringan Intra; dan
                    d) dengan melakukan tindak lanjut berupa penyempurnaan terhadap Layanan Jaringan Intra sesuai hasil reviu. ',
                    'criteria_evidence' => '1) Terdapat notulensi/catatan/laporan hasil evaluasi dan rekomendasi tindak lanjut pengoperasian Jaringan Intra Instansi Pusat/Pemerintah Daerah, yang dapat dilengkapi dengan bukti undangan rapat pembahasan penyempurnaan Jaringan Intra Instansi Pusat/Pemerintah Daerah, dan/atau dokumentasi aktivitas-aktivitas analisis komparasi atau penyempurnaan Jaringan Intra Instansi Pusat/Pemerintah Daerah;
                    2) Dokumen yang memuat pengoperasian Jaringan Intra Instansi Pusat/Pemerintah Daerah yang berlaku sebelumnya;
                    3) Dokumen yang memuat pengoperasian Jaringan Intra Instansi Pusat/Pemerintah Daerah yang telah disempurnakan dan telah ditetapkan serta terhubung dengan Jaringan Intra Pemerintah di tingkat nasional; atau
                    4) Dokumentasi hasil upaya penguatan tata kelola Layanan Jaringan Intra sesuai dengan rekomendasi hasil reviu dan/atau evaluasi. '
                ],
            ],

            18 => [
                1 => [
                    'detail' => 'Sistem Penghubung Layanan Instansi Pusat/ Pemerintah Daerah belum atau telah tersedia.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah belum atau sudah menggunakan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah.',
                    'criteria_evidence' => 'Berupa tautan/dokumentasi pengoperasian Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah, tangkapan layar integrasi antar aplikasi/data/ layanan SPBE, Terdapat notulensi/catatan/laporan penggunaan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah, dan/atau bukti undangan rapat terkait penerapan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah.'
                ],
                2 => [
                    'detail' => 'Kriteria tingkat 1 telah terpenuhi. Kondisi: Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah telah diterapkan di sebagian unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah menerapkan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah pada sebagaian unit kerja/perangkat daerah.',
                    'criteria_evidence' => 'Berupa dokumentasi operasional dan pemanfaatan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah, tangkapan layar integrasi antar aplikasi/data/ layanan SPBE yang digunakan pada sebagian unit kerja/perangkat daerah dan telah didokumentasikan secara formal.'
                ],
                3 => [
                    'detail' => 'Kriteria tingkat 2 telah terpenuhi dan Sistem Penghubung Layanan Instansi Pusat dan Pemerintah Daerah telah diterapkan di seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah menerapkan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah pada seluruh unit kerja/perangkat daerah.',
                    'criteria_evidence' => 'Dokumentasi operasional dan pemanfaatan Sistem Penghubung Layanan pada seluruh unit kerja/perangkat daerah. Bukti pemanfaatan Sistem Penghubung Layanan pada seluruh unit kerja/perangkat daerah dapat dipenuhi dengan pemanfaatan pada keseluruhan populasi unit kerja/perangkat daerah dan/atau dengan membandingkan antara capaian dan target cakupan penerapan yang ditetapkan pada tahun berkenaan. Dokumentasi operasional dapat berupa SOP, SLA, dan sebagainya. Sedangkan dokumentasi pemanfaatan layanan dapat menggambarkan utilisasi dari penggunaan Sistem Penghubung Layanan oleh unit kerja/perangkat daerah.'
                ],
                4 => [
                    'detail' => 'Kriteria tingkat 3 telah terpenuhi, Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah telah terintegrasi dengan Sistem Penghubung Layanan Intra Instansi Pusat/Pemerintah Daerah lain. Selain itu, Sistem Penghubung Layanan Pusat/Pemerintah Daerah telah direviu dan dievaluasi secara periodik.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah menggunakan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah yang telah terintegrasi dengan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah lainnya dan/atau memanfaatkan Sistem Penghubung Layanan Pemerintah (SPLP), serta telah melakukan reviu dan/atau evaluasi secara berkala.',
                    'criteria_evidence' => '1) Berupa tautan/dokumentasi pengoperasian Sistem Penghubung Layanan Pusat/Pemerintah Daerah dengan Sistem Penghubung Layanan Pusat/Pemerintah Daerah lainnya, dan/atau Standard Operating Procedure (SOP) integrasi data atau layanan SPBE dengan menggunakan Sistem Penghubung Layanan;
                    2) Terdapat notulensi/catatan/laporan hasil evaluasi/reviu terkait penggunaan Sistem Penghubung Layanan yang masih berlaku (<2 tahun);
                    3) Hasil evaluasi/reviu yang berisi konten isu/permasalahan dan rekomendasi perbaikan yang aktual; dan
                    4) Bukti undangan rapat evaluasi penggunaan Sistem Penghubung Layanan, dan/atau dokumentasi aktivitas-aktivitas evaluasi penggunaan Sistem Penghubung Layanan (opsional).'
                ],
                5 => [
                    'detail' => 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah telah ditindaklanjuti dengan melakukan perbaikan serta terintegrasi dengan SPLP di tingkat nasional.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah menggunakan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah dan telah menindaklanjuti hasil reviu dan/atau evaluasi dengan melakukan perbaikan atau peningkatan kapabilitas fungsi/kualitas sistem penghubung layanan Instansi Pusat/Pemerintah Daerah dan/atau telah terdapat upaya perbaikan berkelanjutan terhadap penggunaan Sistem Penghubung Layanan sebagai tindak lanjut rekomendasi hasil reviu dan/atau evaluasi. Tingkat kematangan level 5 (lima) dapat dipertahankan:
                    a) dengan melakukan reviu terhadap Penggunaan Sistem Penghubung Layanan; dan
                    b) dengan melakukan tindak lanjut berupa penyempurnaan terhadap Penggunaan Sistem Penghubung Layanan sesuai hasil reviu. ',
                    'criteria_evidence' => '1) Terdapat notulensi/catatan/laporan hasil evaluasi dan rekomendasi tindak Sistem Penghubung Layanan Instansi Pusat /Pemerintah Daerah, bukti undangan rapat pembahasan penyempurnaan Sistem Penghubung Layanan Instansi Pusat /Pemerintah Daerah, dan/atau dokumentasi aktivitas-aktivitas analisis komparasi atau penyempurnaan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah;
                    2) Dokumentasi berupa tautan dan/atau tangkapan layar Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah yang sebelumnya dan yang berisi penyempurnaan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah; atau
                    3) Dokumentasi hasil upaya penguatan tata kelola Penggunaan Sistem Penghubung Layanan sesuai dengan rekomendasi hasil reviu dan/atau evaluasi. '
                ],
            ],

            19 => [
                1 => [
                    'detail' => 'Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah belum atau telah terbentuk. Kondisi: Tugas/program kerja Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah dilaksanakan tanpa perencanaan.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah belum atau sudah memiliki Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah yang bekerja secara ad-hoc tanpa ada perencanaan.',
                    'criteria_evidence' => 'Notulensi/catatan/laporan hasil pembentukan Tim Koordinasi SPBE, bukti undangan rapat pembentukan Tim Koordinasi SPBE, dan/atau dokumentasi aktivitas-aktivitas pembentukan Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah.'
                ],
                2 => [
                    'detail' => 'Kriteria tingkat 1 telah terpenuhi dan tugas/program kerja Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah telah dilaksanakan sesuai perencanaan. Kondisi: tugas/program kerja Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah belum dilaksanakan seluruhnya.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki Tim Koordinasi SPBE yang ditetapkan dan mencakup tugas/program kerja Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah namun belum dilaksanakan seluruhnya.',
                    'criteria_evidence' => 'Dokumentasi pelaksanaan tugas/program kerja Tim Koordinasi SPBE yang telah dilaksanakan, dan atau tangkapan layar, foto, dan dokumentasi lainnya terkait pelaksanaan sebagian tugas/program kerja Tim Koordinasi SPBE. '
                ],
                3 => [
                    'detail' => 'Kriteria tingkat 2 telah terpenuhi dan tugas/program kerja Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah telah dilaksanakan seluruhnya. Kondisi: program kerja Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah belum dikomunikasikan/dikoordinasikan kepada semua unit kerja/perangkat daerah terkait di Instansi Pusat/Pemerintah Daerah.',
                    'description' => 'Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah telah melaksanakan keseluruhan tugas/program kerja namun belum dikomunikasikan/dikoordinasikan kepada seluruh unit kerja/perangkat daerah. ',
                    'criteria_evidence' => 'Dokumentasi pelaksanaan tugas/program kerja Tim Koordinasi SPBE, tangkapan layar, foto, dan dokumentasi lainnya terkait pelaksanaan keseluruhan tugas/program kerja yang diuraikan sesuai amanat penetapan Tim Koordinasi SPBE Instansi Pusat/ Pemerintah Daerah. '
                ],
                4 => [
                    'detail' => 'Kriteria tingkat 3 telah terpenuhi dan program kerja Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah telah dikomunikasikan/dikoordinasikan kepada semua unit kerja/perangkat daerah terkait di Instansi Pusat/Pemerintah Daerah. Selain itu, tugas/program kerja Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah telah dilakukan reviu dan evaluasi.',
                    'description' => 'Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah telah mengomunikasikan/mengoordinasikan tugas/ program kerja kepada seluruh unit kerja/perangkat daerah, serta melakukan reviu dan/atau evaluasi terhadap tugas/program kerja tersebut. ',
                    'criteria_evidence' => '1) Dokumentasi aktivitas-aktivitas rapat koordinasi pelaksanaan tugas/program kerja dengan seluruh unit kerja/perangkat;
                    2) Terdapat notulensi/catatan/laporan hasil evaluasi/reviu terkait tugas/program kerja Tim Koordinasi SPBE yang masih berlaku (<2 tahun);
                    3) Hasil evaluasi/reviu yang berisi konten isu/permasalahan dan rekomendasi perbaikan yang aktual; dan
                    4) Bukti undangan rapat evaluasi tugas/program kerja Tim Koordinasi SPBE, dan/atau dokumentasi aktivitas-aktivitas evaluasi Tim Koordinasi SPBE (opsional).'
                ],
                5 => [
                    'detail' => 'Kriteria tingkat 4 telah terpenuhi dan hasil reviu dan evaluasi tugas/program kerja Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah telah ditindaklanjuti melalui perbaikan tugas/program kerja Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah dan pelaksanaannya.',
                    'description' => 'Tugas/program kerja dari Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah telah dilakukan peningkatan/perbaikan dan/atau telah terdapat upaya perbaikan berkelanjutan terhadap Tim Koordinasi SPBE sebagai tindak lanjut rekomendasi hasil reviu dan/atau evaluasi. Tingkat kematangan level 5 (lima) dapat dipertahankan:
                    a) dengan melakukan reviu terhadap tugas/program kerja Tim Koordinasi SPBE; dan
                    b) dengan melakukan tindak lanjut berupa penyempurnaan terhadap tugas/program kerja Tim Koordinasi SPBE sesuai hasil reviu. ',
                    'criteria_evidence' => '1) Terdapat notulensi/catatan/laporan hasil evaluasi dan rekomendasi tindak lanjut perbaikan tugas/program kerja dari Tim Koordinasi SPBE serta bukti undangan rapat peningkatan kinerja Tim Koordinasi SPBE;
                    2) Dokumentasi tugas/program kerja Tim Koordinasi SPBE yang sebelumnya dan yang berisi peningkatan tugas/program kerja Tim Koordinasi SPBE; atau
                    3) Dokumentasi hasil upaya penguatan tata kelola Tim Koordinasi SPBE sesuai dengan rekomendasi hasil reviu dan/atau evaluasi. '
                ],
            ],

            20 => [
                1 => [
                    'detail' => 'Kolaborasi antar unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah dalam penerapan SPBE belum atau telah dilaksanakan. Kondisi: Kolaborasi antar unit kerja/perangkat daerah di Instansi Pusat/ Pemerintah Daerah dalam penerapan SPBE dilaksanakan tanpa perencanaan.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah belum atau sudah membangun Forum Kolaborasi Penerapan SPBE namun bersifat sementara (ad-hoc).',
                    'criteria_evidence' => 'Notulensi/catatan/laporan hasil pembentukan Forum Kolaborasi Penerapan SPBE, bukti undangan rapat pembentukan Forum Kolaborasi Penerapan SPBE, dan/atau dokumentasi aktivitas-aktivitas pembentukan Forum Kolaborasi Penerapan SPBE.'
                ],
                2 => [
                    'detail' => 'Kriteria tingkat 1 telah terpenuhi dan kolaborasi antar unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah dalam penerapan SPBE telah dilaksanakan sesuai perencanaan. Kondisi: Kolaborasi antar unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah dalam penerapan SPBE tidak dibentuk secara formal.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah melakukan kolaborasi penerapan SPBE antar unit kerja/perangkat daerah dan telah menyusun perencanaan, namun belum ditetapkan secara formal.',
                    'criteria_evidence' => 'Dokumentasi aktivitas kolaborasi penerapan SPBE antar unit kerja/perangkat daerah sesuai dengan yang telah direncanakan oleh Instansi Pusat/Pemerintah Daerah dan/atau dilengkapi bukti-bukti undangan rapat notulensi/catatan/laporan kolaborasi penerapan SPBE.'
                ],
                3 => [
                    'detail' => 'Kriteria tingkat 2 telah terpenuhi dan kolaborasi antar unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah dalam penerapan SPBE telah dilaksanakan oleh tim yang dibentuk secara formal. Kondisi: Kolaborasi antar unit kerja/perangkat daerah dalam penerapan SPBE telah dilaksanakan pada sebagian unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah (dibentuk berdasarkan kegiatan).',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah menetapkan Forum Kolaborasi Penerapan SPBE secara formal, serta sudah melakukan pertemuan secara rutin namun masih dalam bentuk kegiatan.',
                    'criteria_evidence' => 'Dokumentasi aktivitas-aktivitas penetapan dan/atau kegiatan Forum Kolaborasi Penerapan SPBE, notulensi/catatan/laporan kegiatan rutin Forum Kolaborasi Penerapan SPBE, dan/atau bukti undangan kegiatan Forum Kolaborasi Penerapan SPBE.'
                ],
                4 => [
                    'detail' => ' Kriteria tingkat 3 telah terpenuhi dan kolaborasi antar unit kerja/perangkat daerah dalam penerapan SPBE telah dilaksanakan secara terpadu pada semua unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah yang dikoordinasikan oleh menteri/kepala lembaga/kepala daerah atau sekretaris kementerian/lembaga/pemerintah daerah. Selain itu, kolaborasi dalam penerapan SPBE telah dilakukan reviu dan evaluasi. ',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah membangun Forum Kolaborasi SPBE secara terpadu seluruh unit kerja/perangkat daerah, serta sudah melakukan pertemuan secara rutin yang dikoordinasikan oleh Pimpinan Instansi Pusat/Kepala Daerah. Selain itu telah dilakukan reviu dan/atau evaluasi secara berkala terkait efektifitas kolaborasi penerapan SPBE.',
                    'criteria_evidence' => '1) Dokumentasi aktivitas-aktivitas rapat koordinasi Forum Kolaborasi SPBE pelaksanaan tugas/program kerja dengan seluruh unit kerja/perangkat daerah;
                    2) Terdapat notulensi/catatan/laporan hasil evaluasi/reviu terkait Kolaborasi SPBE yang masih berlaku (<2 tahun);
                    3) Hasil evaluasi/reviu yang berisi konten isu/permasalahan dan rekomendasi perbaikan yang aktual; dan 4) Bukti undangan rapat evaluasi pelaksanaan Kolaborasi SPBE, dan/atau dokumentasi aktivitas-aktivitas evaluasi pelaksanaan Kolaborasi SPBE (opsional).'
                ],
                5 => [
                    'detail' => 'Kriteria tingkat 4 telah terpenuhi dan hasil reviu dan evaluasi kolaborasi dalam penerapan SPBE telah ditindaklanjuti melalui perbaikan pelaksanaan kolaborasi dalam penerapan SPBE.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah melakukan perbaikan pelaksanaan kolaborasi penerapan SPBE dan/atau telah terdapat upaya perbaikan berkelanjutan terhadap Kolaborasi Penerapan SPBE sebagai tindak lanjut atas rekomendasi hasil reviu dan/atau evaluasi. Tingkat kematangan level 5 (lima) dapat dipertahankan:
                    a) dengan melakukan reviu terhadap Kolaborasi Penerapan SPBE; dan
                    b) dengan melakukan tindak lanjut berupa penyempurnaan terhadap Kolaborasi Penerapan SPBE sesuai hasil reviu. ',
                    'criteria_evidence' => '1) Terdapat notulensi/catatan/laporan hasil evaluasi dan rekomendasi tindak lanjut pelaksanaan kolaborasi penerapan SPBE serta bukti undangan rapat Forum Kolaborasi SPBE;
                    2) Dokumentasi pelaksanaan kolaborasi penerapan SPBE yang sebelumnya dan yang berisi perbaikan pelaksanaan kolaborasi penerapan SPBE; atau
                    3) Dokumentasi hasil upaya penguatan tata kelola Kolaborasi Penerapan SPBE sesuai dengan rekomendasi hasil reviu dan/atau evaluasi. '
                ],
            ],

            21 => [
                1 => [
                    'detail' => 'Kegiatan Manajemen Risiko SPBE belum atau telah diterapkan. Kondisi: Kegiatan Manajemen Risiko SPBE diterapkan tanpa program kegiatan yang terarah dan terencana.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah belum atau sudah menerapkan kegiatan Manajemen Risiko SPBE tanpa program kegiatan yang terarah dan terencana.',
                    'criteria_evidence' => 'Draf/rancangan penerapan Manajemen Risiko SPBE, notulensi/catatan penyusunan rancangan penerapan Manajemen Risiko SPBE SPBE, bukti undangan rapat penyusunan rancangan penerapan Manajemen Risiko SPBE, dan/atau dokumentasi aktivitas-aktivitas penyusunan Manajemen Risiko SPBE.'
                ],
                2 => [
                    'detail' => 'Kriteria tingkat 1 telah terpenuhi dan kegiatan Manajemen Risiko SPBE diterapkan dengan program kegiatan yang terarah dan terencana. Kondisi: Penerapan Manajemen Risiko SPBE dilaksanakan tanpa mengacu pada pedoman manajemen risiko SPBE.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah menerapkan kegiatan Manajemen Risiko SPBE sesuai dan selaras dengan program kegiatan yang tercantum dalam Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah, namun pelaksanaannya belum mengacu pada pedoman yang berlaku.',
                    'criteria_evidence' => 'Perencanaan program kerja/aktivitas kegiatan penerapan Manajemen Risiko SPBE tertuang di dalam dokumen Peta Rencana SPBE yang masih berlaku dan terdokumentasi secara formal, namun penerapannya belum mengacu pada pedoman/standar Manajemen Risiko yang telah ditentukan/ditetapkan.'
                ],
                3 => [
                    'detail' => 'Kriteria tingkat 2 telah terpenuhi dan Manajemen Risiko SPBE telah dilaksanakan dengan mengacu pada pedoman Manajemen Risiko SPBE.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah menerapkan Manajemen Risiko SPBE sesuai dengan pedoman Manajemen Risiko SPBE yang berlaku.',
                    'criteria_evidence' => 'Konteks penerapan Manajemen Risiko SPBE yang menguraikan seluruh pemenuhannya sesuai dengan pedoman/standar Manajemen Risiko yang telah ditentukan/ditetapkan yang terdokumentasi secara formal dan dilengkapi komitmen berupa pakta integritas.'
                ],
                4 => [
                    'detail' => 'Kriteria tingkat 3 telah terpenuhi dan kebijakan strategis Manajemen Risiko SPBE telah ditetapkan oleh Komite Manajemen Risiko SPBE atau Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah dan diterapkan ke seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah. Selain itu, penerapan Manajemen Risiko SPBE telah direviu dan dievaluasi secara periodik.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah menyusun kebijakan strategis Manajemen Risiko SPBE yang ditetapkan oleh Komite Manajemen Risiko SPBE/Tim Koordinasi SPBE kepada seluruh unit kerja/perangkat daerah, serta telah dilakukan reviu dan/atau evaluasi secara berkala',
                    'criteria_evidence' => '1) Konteks penerapan Manajemen Risiko SPBE yang menguraikan seluruh pemenuhannya sesuai dengan pedoman/standar Manajemen Risiko yang telah ditentukan/ditetapkan dan terdokumentasi secara formal.
                    2) Terdapat dokumentasi formal arah kebijakan strategis Manajemen Risiko SPBE yang ditetapkan oleh Komite Manajemen Risiko SPBE/Tim Koordinasi SPBE kepada seluruh unit kerja/perangkat daerah.
                    3) Terdapat notulensi/catatan/laporan hasil evaluasi/reviu terkait penerapan Manajemen Risiko SPBE yang masih berlaku (<2 tahun).
                    4) Hasil evaluasi/reviu yang berisi konten isu/permasalahan dan rekomendasi perbaikan yang aktual.
                    5) Bukti undangan rapat evaluasi penerapan Manajemen Risiko SPBE, dan/atau dokumentasi aktivitas-aktivitas evaluasi penerapan Manajemen Risiko SPBE (opsional).'
                ],
                5 => [
                    'detail' => 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi Manajemen Risiko SPBE ditindaklanjuti melalui perbaikan penerapan Manajemen Risiko SPBE. ',
                    'description' => 'Instansi Pusat/Pemerintah Daerah melakukan perbaikan penerapan manajemen risiko SPBE dan/atau telah terdapat upaya perbaikan berkelanjutan terhadap Manajemen Risiko SPBE sebagai tindak lanjut rekomendasi atas hasil reviu dan/atau evaluasi. Tingkat kematangan level 5 (lima) dapat dipertahankan:
                    a) dengan melakukan reviu terhadap Manajemen Risiko SPBE; dan
                    b) dengan melakukan tindak lanjut berupa penyempurnaan terhadap Manajemen Risiko SPBE sesuai hasil reviu.',
                    'criteria_evidence' => '1) Terdapat notulensi/catatan/laporan hasil reviu/evaluasi dan rekomendasi tindak lanjut penerapan Manajemen Risiko SPBE, bukti undangan rapat pembahasan penyempurnaan penerapan Manajemen Risiko SPBE, dan/atau dokumentasi aktivitas-aktivitas analisis komparasi atau penyempurnaan penerapan Manajemen Risiko SPBE;
                    2) Dokumentasi penerapan Manajemen Risiko SPBE yang sebelumnya dan yang berisi penyempurnaan penerapan Manajemen Risiko SPBE; atau
                    3) Dokumentasi hasil upaya penguatan Manajemen Risiko SPBE sesuai dengan rekomendasi hasil reviu dan/atau evaluasi. '
                ],
            ],

            22 => [
                1 => [
                    'detail' => 'Pengendalian Keamanan Informasi belum atau telah tersedia dalam tahap pembangunan.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah belum atau sedang membangun pengendalian Keamanan Informasi. ',
                    'criteria_evidence' => 'Draf/rancangan penerapan Keamanan Informasi, notulensi/catatan penyusunan rancangan penerapan Keamanan Informasi, bukti undangan rapat penyusunan rancangan penerapan Keamanan Informasi, dan/atau dokumentasi aktivitas-aktivitas penyusunan Keamanan Informasi.'
                ],
                2 => [
                    'detail' => 'Pengendalian Keamanan Informasi telah tersedia. Kondisi: Pengendalian Keamanan Informasi telah dilaksanakan pada sebagian unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah terdapat pengendalian Keamanan Informasi yang sesuai dan selaras dengan program kegiatan yang tercantum dalam Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah, namun pelaksanaannya belum mengacu pada pedoman yang berlaku. ',
                    'criteria_evidence' => 'Perencanaan program kerja/aktivitas kegiatan penerapan Manajemen Keamanan Informasi tertuang di dalam dokumen Peta Rencana SPBE yang masih berlaku dan terdokumentasi secara formal, namun penerapannya belum mengacu pada pedoman/standar Manajemen Keamanan Informasi yang telah ditentukan/ditetapkan.'
                ],
                3 => [
                    'detail' => 'Kriteria tingkat 2 telah terpenuhi dan pengendalian Keamanan Informasi telah dilaksanakan pada semua unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah terdapat pengendalian keamanan informasi yang dilaksanakan pada seluruh unit kerja/perangkat daerah.',
                    'criteria_evidence' => 'Konteks pengendalian Keamanan Informasi yang selaras dengan arah dan perencanaan programnya dan terdokumentasi secara formal, dan pelaksanaannya sudah dilakukan oleh seluruh unit kerja/perangkat daerah serta pelaksanaannya sesuai dengan pedoman yang berlaku.'
                ],
                4 => [
                    'detail' => 'Kriteria tingkat 3 telah terpenuhi dan pengendalian Keamanan Informasi dilakukan melalui strategi Keamanan Informasi yang ditetapkan oleh Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah dengan berdasarkan Risiko SPBE. Selain itu, pengendalian Keamanan Informasi telah dilakukan reviu dan evaluasi secara periodik.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah menyusun strategi Keamanan Informasi yang ditetapkan oleh Tim Koordinasi SPBE berdasarkan risiko SPBE, serta telah dilakukan reviu dan/atau evaluasi secara berkala.',
                    'criteria_evidence' => '1) Konteks pengendalian Keamanan Informasi yang menguraikan seluruh pemenuhannya sesuai dengan pedoman/standar Keamanan Informasi yang telah ditentukan/ditetapkan dan terdokumentasi secara formal.
                    2) Terdapat dokumentasi formal arah kebijakan strategis Keamanan Informasi yang ditetapkan oleh Tim Koordinasi SPBE kepada seluruh unit kerja/perangkat daerah dan/atau membentuk Tim CSIRT.3) Terdapat notulensi/catatan/laporan hasil evaluasi/reviu terkait penerapan Manajemen Keamanan Informasi yang masih berlaku (<2 tahun).
                    4) Hasil evaluasi/reviu yang berisi kontenisu/permasalahan dan rekomendasi perbaikan yang aktual.
                    5) Bukti undangan rapat evaluasi penerapan Manajemen Keamanan Informasi, dan/atau dokumentasi aktivitas-aktivitas evaluasi penerapan Manajemen Keamanan Informasi (opsional).'
                ],
                5 => [
                    'detail' => 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi pengendalian Keamanan Informasi ditindaklanjuti melalui perbaikan penerapan proses pengendalian Keamanan Informasi.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah melakukan perbaikan penerapan proses pengendalian Keamanan Informasi dan/atau telah terdapat upaya perbaikan berkelanjutan terhadap Manajemen Keamanan Informasi sebagai tindak lanjut rekomendasi hasil reviu dan/atau evaluasi. Tingkat kematangan level 5 (lima) dapat dipertahankan:
                    a) dengan melakukan reviu terhadap Penerapan Manajemen Keamanan Informasi; dan
                    b) dengan melakukan tindak lanjut berupa penyempurnaan terhadap Penerapa Manajemen Keamanan Informasi sesuai hasil reviu. ',
                    'criteria_evidence' => '1) Terdapat notulensi/catatan/laporan hasil reviu/evaluasi dan rekomendasi tindak lanjut penerapan Keamanan Informasi, bukti undangan rapat pembahasan penyempurnaan penerapan Keamanan Informasi, dan/atau dokumentasi aktivitas-aktivitas analisis komparasi atau penyempurnaan penerapan Keamanan Informasi;
                    2) Dokumentasi penerapan Keamanan Informasi yang sebelumnya dan yang berisi penyempurnaan penerapan Keamanan Informasi; atau 3) Dokumentasi hasil upaya penguatan Manajemen Keamanan Informasi sesuai dengan rekomendasi hasil reviu dan/atau evaluasi.'
                ],
            ],

            23 => [
                1 => [
                    'detail' => 'Kegiatan Manajemen Data belum atau telah diterapkan. Kondisi: Kegiatan Manajemen Data diterapkan tanpa program kegiatan yang terarah dan terencana.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah belum atau sudah menerapkan kegiatan Manajemen Data tanpa program kegiatan yang terarah dan terencana.',
                    'criteria_evidence' => 'Draf/rancangan penerapan Manajemen Data, notulensi/catatan penyusunan rancangan penerapan Manajemen Data, bukti undangan rapat penyusunan rancangan penerapan Manajemen Data, dan/atau dokumentasi aktivitas-aktivitas penyusunan Manajemen Data.'
                ],
                2 => [
                    'detail' => 'Kriteria tingkat 1 telah terpenuhi dan kegiatan Manajemen Data diterapkan dengan program kegiatan yang terarah dan terencana. Kondisi: Manajemen Data dilaksanakan tanpa mengacu pada pedoman Manajemen Data.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah menerapkan kegiatan Manajemen Data sesuai dan selaras dengan program kegiatan yang tercantum dalam Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah, namun pelaksanaannya belum mengacu pada pedoman yang berlaku.',
                    'criteria_evidence' => 'Perencanaan program kerja/aktivitas kegiatan penerapan Manajemen Data SPBE tertuang di dalam dokumen Peta Rencana SPBE yang masih berlaku dan terdokumentasi secara formal, namun penerapannya belum mengacu pada pedoman/standar Manajemen Data yang telah ditentukan/ditetapkan.'
                ],
                3 => [
                    'detail' => 'Kriteria tingkat 2 telah terpenuhi dan Manajemen Data telah dilaksanakan dengan mengacu pada pedoman Manajemen Data (Pengelolaan arsitektur data, data induk, data referensi, basis data, kualitas data dan interoperabilitas data).',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah menerapkan Manajemen Data sesuai dengan pedoman Manajemen Data yang berlaku yang memuat seluruh rangkaian proses pedoman Manajemen Data.',
                    'criteria_evidence' => 'Konteks pengendalian Manajemen Data yang selaras dengan arah dan perencanaan programnya dan terdokumentasi secara formal, dan pelaksanaannya sudah terhadap seluruh rangkaian proses pedoman Manajemen Data.'
                ],
                4 => [
                    'detail' => 'Kriteria tingkat 3 telah terpenuhi dan Manajemen Data dilaksanakan melalui strategi pengelolaan data yang ditetapkan Forum Satu Data atau Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah dan diterapkan ke seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah. Selain itu, penerapan Manajemen Data telah direviu dan dievaluasi secara periodik',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah menyusun strategi pengelolaan data yang ditetapkan oleh Forum Satu Data/Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah yang diterapkan kepada seluruh unit kerja/perangkat daerah, serta telah dilakukan reviu dan/atau evaluasi secara berkala. ',
                    'criteria_evidence' => '1) Konteks pengendalian Manajemen Data yang menguraikan seluruh pemenuhannya sesuai dengan pedoman/standar Manajemen Data yang telah ditentukan/ditetapkan dan terdokumentasi secara formal.
                    2) Terdapat dokumentasi formal arah kebijakan strategis Manajemen Data yang ditetapkan oleh Tim Koordinasi SPBE kepada seluruh unit kerja/perangkat daerah.
                    3) Terdapat notulensi/catatan/laporan hasil evaluasi/reviu terkait penerapan Manajemen Data yang masih berlaku (<2 tahun).
                    4) Hasil evaluasi/reviu yang berisi konten isu/permasalahan dan rekomendasi perbaikan yang aktual.
                    5) Bukti undangan rapat evaluasi penerapan Manajemen Data, dan/atau dokumentasi aktivitasaktivitas evaluasi penerapan Manajemen Data(opsional). '
                ],
                5 => [
                    'detail' => 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi Manajemen Data ditindaklanjuti melalui perbaikan penerapan Manajemen Data serta selaras dengan kerangka regulasi SDI.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah melakukan perbaikan penerapan Manajemen Data dan/atau telah terdapat upaya perbaikan berkelanjutan terhadap Manajemen Data sebagai tindak lanjut rekomendasi hasil reviu dan/atau evaluasi. Tingkat kematangan level 5 (lima) dapat dipertahankan:
                    a) dengan melakukan reviu terhadap Penerapan Manajemen Data; dan
                    b) dengan melakukan tindak lanjut berupa penyempurnaan terhadap Penerapan Manajemen Data sesuai hasil reviu.',
                    'criteria_evidence' => '1) Terdapat notulensi/catatan/laporan hasil reviu/evaluasi dan rekomendasi tindak lanjut penerapan Manajemen Data, bukti undangan rapat pembahasan penyempurnaan penerapan Manajemen Data, dan/atau dokumentasi aktivitasaktivitas analisis komparasi atau penyempurnaan penerapan Manajemen Data;
                    2) Dokumentasi penerapan Manajemen Data yang sebelumnya dan yang berisi penyempurnaan penerapan Manajemen Data; atau
                    3) Dokumentasi hasil upaya penguatan Manajemen Data sesuai dengan rekomendasi hasil reviu dan/atau evaluasi.'
                ],
            ],

            24 => [
                1 => [
                    'detail' => 'Kegiatan Manajemen Aset TIK belum atau sudah diterapkan. Kondisi: Kegiatan Manajemen Aset TIK diterapkan tanpa program kegiatan yang terarah dan terencana.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah belum atau sudah menerapkan kegiatan Manajemen Aset TIK tanpa program kegiatan yang terarah dan terencana.',
                    'criteria_evidence' => 'Draf/rancangan penerapan Manajemen Aset TIK, notulensi/catatan penyusunan rancangan penerapan Manajemen Aset TIK, bukti undangan rapat penyusunan rancangan penerapan Manajemen Aset TIK, dan/atau dokumentasi aktivitas-aktivitas penyusunan Manajemen Aset TIK.'
                ],
                2 => [
                    'detail' => 'Kriteria tingkat 1 telah terpenuhi dan kegiatan Manajemen Aset TIK diterapkan dengan program kegiatan yang terarah dan terencana. Kondisi: Manajemen Aset TIK dilaksanakan tanpa mengacu pada pedoman Manajemen Aset TIK (proses perencanaan, pengadaan, pengelolaan, dan penghapusan aset TIK).',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah menerapkan kegiatan Manajemen Aset TIK sesuai dan selaras dengan program kegiatan yang tercantum dalam Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah, namun pelaksanaannya belum mengacu pada pedoman yang berlaku.',
                    'criteria_evidence' => 'Perencanaan program kerja/aktivitas kegiatan penerapan Manajemen Aset TIK tertuang di dalam dokumen Peta Rencana SPBE yang masih berlaku dan terdokumentasi secara formal, namun penerapannya belum mengacu pada pedoman/standar Manajemen Aset TIK yang telah ditentukan/ditetapkan mulai dari proses perencanaan, pengadaan, pengelolaan, dan penghapusan aset TIK.'
                ],
                3 => [
                    'detail' => 'Kriteria tingkat 2 telah terpenuhi dan Manajemen Aset TIK telah dilaksanakan dengan mengacu pada pedoman Manajemen Aset TIK (proses perencanaan, pengadaan, pengelolaan, dan penghapusan aset TIK).',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah menerapkan Manajemen Aset TIK sesuai dengan pedoman yang berlaku yang memuat seluruh proses manajemen aset TIK.',
                    'criteria_evidence' => '1. Konteks pengendalian Manajemen Aset TIK yang selaras dengan arah dan perencanaan programnya dan terdokumentasi secara formal, dan pelaksanaannya sudah mengacu pada pedoman Manajemen Aset TIK yang menggambarkan output seluruh proses mulai dari perencanaan, pengadaan, pengelolaan, dan penghapusan aset TIK.
                    2. Melampirkan dokumen pedoman Manajemen Aset TIK yang digunakan, jika belum terdapat pedoman nasional yang sudah ditetapkan.'
                ],
                4 => [
                    'detail' => 'Kriteria tingkat 3 telah terpenuhi, Manajemen Aset TIK dilaksanakan melalui strategi pengelolaan aset TIK oleh unit kerja/perangkat daerah yang menjalankan fungsi pengelolaan TIK di Instansi Pusat/Pemerintah Daerah dan diterapkan ke seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah. Selain itu, penerapan Manajemen Aset TIK telah direviu dan dievaluasi secara periodik.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah menyusun strategi pengelolaan Aset TIK yang ditetapkan oleh Tim Koordinasi SPBE, diterapkan kepada seluruh unit kerja/perangkat daerah, serta telah dilakukan reviu dan/atau evaluasi secara berkala.',
                    'criteria_evidence' => '1) Konteks pengendalian Manajemen Aset TIK yang menguraikan seluruh pemenuhannya sesuai dengan pedoman/standar Manajemen Aset TIK yang telah ditentukan/ditetapkan dan terdokumentasi secara formal.
                    2) Terdapat dokumentasi formal arah kebijakan strategis Manajemen Aset TIK yang ditetapkan oleh Tim Koordinasi SPBE kepada seluruh unit kerja/perangkat daerah.
                    3) Terdapat notulensi/catatan/laporan hasil evaluasi/reviu terkait penerapan Manajemen Aset TIK yang masih berlaku (<2 tahun).
                    4) Hasil evaluasi/reviu yang berisi konten isu/permasalahan dan rekomendasi perbaikan yang aktual.
                    5) Bukti undangan rapat evaluasi penerapan Manajemen Aset TIK, dan/atau dokumentasi aktivitas-aktivitas evaluasi penerapan Manajemen Aset TIK (opsional).'
                ],
                5 => [
                    'detail' => 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi Manajemen Aset TIK ditindaklanjuti melalui perbaikan penerapan Manajemen Aset TIK.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah melakukan perbaikan penerapan manajemen Aset TIK dan/atau telah terdapat upaya perbaikan berkelanjutan terhadap Manajemen Aset TIK sebagai tindak lanjut rekomendasi hasil reviu dan/atau evaluasi. Tingkat kematangan level 5 (lima) dapat dipertahankan:
                    a) dengan melakukan reviu terhadap Penerapan Manajemen Aset TIK; dan
                    b) dengan melakukan tindak lanjut berupa penyempurnaan terhadap Penerapan Manajemen Aset TIK sesuai hasil reviu.',
                    'criteria_evidence' => '1) Terdapat notulensi/catatan/laporan hasil reviu/evaluasi dan rekomendasi tindak lanjut penerapan Manajemen Aset TIK, bukti undangan rapat pembahasan penyempurnaan penerapan Manajemen Aset TIK, dan/atau dokumentasi aktivitas-aktivitas analisis komparasi atau penyempurnaan penerapan Manajemen Aset TIK;
                    2) Dokumentasi penerapan Manajemen Aset TIK yang sebelumnya dan yang berisi penyempurnaan penerapan Manajemen Aset TIK; atau
                    3) Dokumentasi hasil upaya penguatan Manajemen Aset TIK sesuai dengan rekomendasi hasil reviu dan/atau evaluasi.'
                ],
            ],

            25 => [
                1 => [
                    'detail' => 'Pemenuhan kompetensi Sumber Daya Manusia belum atau telah diupayakan. Kondisi: Pemenuhan kompetensi Sumber Daya Manusia SPBE dilakukan tanpa perencanaan Sumber Daya Manusia.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah belum atau sudah menerapkan kegiatan Manajemen SDM SPBE tanpa program kegiatan yang terarah dan terencana.',
                    'criteria_evidence' => 'Draf/rancangan penerapan Manajemen SDM SPBE, notulensi/catatan penyusunan rancangan penerapan Manajemen SDM SPBE, bukti undangan rapat penyusunan rancangan penerapan Manajemen SDM SPBE, dan/atau dokumentasi aktivitas-aktivitas penyusunan Manajemen SDM SPBE.'
                ],
                2 => [
                    'detail' => 'Kriteria tingkat 1 telah terpenuhi dan pemenuhan kompetensi Sumber Daya Manusia SPBE dilakukan sesuai dengan perencanaan Sumber Daya Manusia. Kondisi: Kompetensi Sumber Daya Manusia SPBE belum terpenuhi seluruhnya (kompetensi di bidang Proses Bisnis Pemerintahan, Arsitektur SPBE, Data dan Informasi, Keamanan SPBE, Aplikasi SPBE, dan Infrastruktur SPBE).',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah menerapkan kegiatan Manajemen Sumber Daya Manusia SPBE sesuai dan selaras dengan program kegiatan yang tercantum dalam Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah, namun belum memenuhi seluruh kompetensi sumber daya manusia SPBE.',
                    'criteria_evidence' => 'Perencanaan program kerja/aktivitas kegiatan penerapan Manajemen Sumber Daya Manusia SPBE tertuang di dalam dokumen Peta Rencana SPBE yang masih berlaku dan terdokumentasi secara formal, namun penerapannya hanya terhadap sebagian unsur kompetensi sumber daya manusia SPBE.'
                ],
                3 => [
                    'detail' => 'Kriteria tingkat 2 telah terpenuhi dan kompetensi Sumber Daya Manusia SPBE telah terpenuhi seluruhnya (kompetensi di bidang Proses Bisnis Pemerintahan, Arsitektur SPBE, Data dan Informasi, Keamanan SPBE, Aplikasi SPBE, dan Infrastruktur SPBE).',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah menerapkan Manajemen SDM SPBE yang memuat serangkaian proses manajemen SDM SPBE mulai dari perencanaan, pengembangan, pembinaan, dan pendayagunaan sumber daya manusia dalam SPBE dan telah memenuhi seluruh kompetensi sumber daya manusia SPBE.',
                    'criteria_evidence' => 'Konteks penerapan Manajemen SDM SPBE yang selaras dengan arah dan perencanaan programnya dan terdokumentasi secara formal, dan pelaksanaannya sudah memenuhi seluruh kompetensi sumber daya manusia SPBE.'
                ],
                4 => [
                    'detail' => 'Kriteria tingkat 3 telah terpenuhi, peningkatan dan penilaian kompetensi Sumber Daya Manusia SPBE telah dilakukan. Selain itu, pemenuhan kompetensi Sumber Daya Manusia SPBE telah dilakukan reviu dan evaluasi secara periodik.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah menyusun strategi pelaksanaan Manajemen SDM SPBE yang ditetapkan oleh Tim Koordinasi SPBE, diterapkan kepada seluruh unit kerja/perangkat daerah, serta telah dilakukan reviu dan/atau evaluasi secara berkala.',
                    'criteria_evidence' => '1) Terdapat dokumentasi formal arah kebijakan strategis Manajemen SDM SPBE yang ditetapkan oleh Tim Koordinasi SPBE kepada seluruh unit kerja/perangkat daerah.
                    2) Terdapat notulensi/catatan/laporan hasil evaluasi/reviu terkait penerapan Manajemen SDMSPBE yang masih berlaku (<2 tahun).
                    3) Hasil evaluasi/reviu yang berisi konten isu/permasalahan dan rekomendasi perbaikan yang aktual.
                    4) Bukti undangan rapat evaluasi penerapan Manajemen SDM SPBE, dan/atau dokumentasi aktivitas-aktivitas evaluasi penerapan Manajemen SDM SPBE (opsional).'
                ],
                5 => [
                    'detail' => 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi telah ditindaklanjuti melalui perbaikan perencanaan dan model kompetensi Sumber Daya Manusia SPBE.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah melakukan perbaikan penerapan Manajemen SDM SPBE dan/atau telah terdapat upaya perbaikan berkelanjutan terhadap Manajemen SDM SPBE sebagai tindak lanjut rekomendasi hasil reviu dan/atau evaluasi. Tingkat kematangan level 5 (lima) dapat dipertahankan:
                    a) dengan melakukan reviu terhadap Kompetensi Sumber Daya Manusia; dan
                    b) dengan melakukan tindak lanjut berupa penyempurnaan terhadap Kompetensi Sumber Daya Manusia sesuai hasil reviu.',
                    'criteria_evidence' => '1) Terdapat notulensi/catatan/laporan hasil reviu/evaluasi dan rekomendasi tindak lanjut penerapan Manajemen SDM SPBE, bukti undangan rapat pembahasan penyempurnaan penerapan Manajemen SDM SPBE, dan/atau dokumentasi aktivitas-aktivitas analisis komparasi atau penyempurnaan penerapan Manajemen SDM SPBE;
                    2) Dokumentasi penerapan Manajemen SDM SPBE yang sebelumnya dan yang berisi penyempurnaanpenerapan Manajemen SDM SPBE; atau
                    3) Dokumentasi hasil upaya penguatan Manajemen SDM SPBE sesuai dengan rekomendasi hasil reviu dan/atau evaluasi.'
                ],
            ],

            26 => [
                1 => [
                    'detail' => 'Manajemen Pengetahuan SPBE belum atau telah diterapkan. Kondisi: Manajemen Pengetahuan SPBE dilaksanakan tanpa perencanaan.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah belum atau sudah menerapkan kegiatan Manajemen Pengetahuan tanpa program kegiatan yang terarah dan terencana.',
                    'criteria_evidence' => 'Kriteria tingkat 1 telah terpenuhi dan dilaksanakan dengan perencanaan.'
                ],
                2 => [
                    'detail' => 'Kriteria tingkat 1 telah terpenuhi dan dilaksanakan dengan perencanaan. Kondisi: Manajemen Pengetahuan SPBE telah dilaksanakan tanpa pedoman di Instansi Pusat/Pemerintah Daerah.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah menerapkan kegiatan Manajemen Pengetahuan SPBE sesuai dan selaras dengan program kegiatan yang tercantum dalam Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah, namun pelaksanaannya belum mengacu pada pedoman yang berlaku.',
                    'criteria_evidence' => 'Perencanaan program kerja/aktivitas kegiatan penerapan Manajemen Pengetahuan SPBE tertuang di dalam dokumen Peta Rencana SPBE yang masih berlaku dan terdokumentasi secara formal, namun penerapannya belum mengacu pada pedoman/standar Manajemen Pengetahuan yang telah ditentukan/ditetapkan.'
                ],
                3 => [
                    'detail' => 'Kriteria tingkat 2 telah terpenuhi, Manajemen Pengetahuan SPBE dilaksanakan dengan mengacu pada pedoman di Instansi Pusat/Pemerintah Daerah dan Manajemen Pengetahuan SPBE diterapkan menggunakan sistem aplikasi manajemen pengetahuan.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah menerapkan Manajemen Pengetahuan SPBE dan telah tersedia pedoman pelaksanaan manajemen pengetahuan yang disusun sesuai dengan pedoman manajemen pengetahuan SPBE di tingkat nasional, di mana struktur pengelola serta penugasan diuraikan dengan jelas. Selain itu, manajemen pengetahuan SPBE diterapkan menggunakan sistem aplikasi manajemen pengetahuan.',
                    'criteria_evidence' => '1. Dokumen pedoman pelaksanaan Manajemen Pengetahuan SPBE Instansi Pusat/Pemerintah Daerah yang memuat struktur pengelola serta penugasan diuraikan dengan jelas..
                    2. Dokumentasi pelaksanaan Manajemen Pengetahuan SPBE di Instansi Pusat/Pemerintah Daerah melalui pemanfaatan sistem aplikasi manajemen pengetahuan SPBE.'
                ],
                4 => [
                    'detail' => 'Kriteria tingkat 3 telah terpenuhi, semua unit kerja/perangkat daerah telah menerapkan Manajemen Pengetahuan SPBE dengan menggunakan sistem aplikasi manajemen pengetahuan yang terintegrasi serta telah dilakukan reviu dan evaluasi terhadap penerapan Manajemen Pengetahuan SPBE.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah menerapkan Manajemen Pengetahuan SPBE di seluruh unit kerja/perangkat daerah dengan memanfaatkan aplikasi sistem manajemen pengetahuan SPBE yang telah terintegrasi dengan sistem manajemen pengetahuan SPBE di tingkat nasional, serta telah dilakukan reviu dan/atau evaluasi secara berkala.',
                    'criteria_evidence' => '1) Konteks penerapan Manajemen Pengetahuan yang menguraikan seluruh pemenuhannya sesuai dengan pedoman/standar Manajemen Pengetahuan yang telah ditentukan/ditetapkan dan terdokumentasi secara formal.
                    2) Bukti hasil penerapan manajemen pengetahuan berupa pengetahuan-pengetahuan baru yang telah dibagi pakai.
                    3) Terdapat notulensi/catatan/laporan hasil reviu/evaluasi terkait penerapan Manajemen Pengetahuan SPBE yang masih berlaku (<2 tahun).
                    4) Hasil reviu/evaluasi yang berisi konten isu/permasalahan dan rekomendasi perbaikan yang aktual.
                    5) Bukti undangan rapat reviu/evaluasi penerapan Manajemen Pengetahuan SPBE, dan/atau dokumentasi aktivitas-aktivitas evaluasi penerapan Manajemen Pengetahuan SPBE (opsional).'
                ],
                5 => [
                    'detail' => 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi terhadap penerapan Manajemen Pengetahuan SPBE telah ditindaklanjuti melalui perbaikan Manajemen Pengetahuan SPBE.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah melakukan perbaikan penerapan Manajemen Pengetahuan dan/atau telah terdapat upaya perbaikan berkelanjutan terhadap Manajemen Pengetahuan SPBE sebagai tindak lanjut rekomendasi hasil evaluasi. Tingkat kematangan level 5 (lima) dapat dipertahankan:
                    a) dengan melakukan reviu terhadap Penerapan Manajemen Pengetahuan SPBE; dan
                    b) dengan melakukan tindak lanjut berupa penyempurnaan terhadap Penerapan Manajemen Pengetahuan SPBE sesuai hasil reviu.',
                    'criteria_evidence' => '1) Terdapat notulensi/catatan/laporan hasil reviu/evaluasi dan rekomendasi tindak lanjut penerapan Manajemen Pengetahuan, bukti undangan rapat pembahasan penyempurnaan penerapan Manajemen Pengetahuan, dan/atau dokumentasi aktivitas-aktivitas analisis komparasi atau penyempurnaan penerapan Manajemen Pengetahuan;
                    2) Dokumentasi penerapan Manajemen Pengetahuan yang sebelumnya dan yang berisi penyempurnaan penerapan Manajemen Pengetahuan; atau
                    3) Dokumentasi hasil upaya penguatan Manajemen Pengetahuan SPBE sesuai dengan rekomendasi hasil evaluasi.'
                ],
            ],

            27 => [
                1 => [
                    'detail' => 'Kegiatan Manajemen Perubahan SPBE belum atau telah dilaksanakan. Kondisi: Kegiatan Manajemen Perubahan SPBE dilaksanakan tanpa perencanaan.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah belum atau sudah menerapkan kegiatan Manajemen Perubahan tanpa program kegiatan yang terarah dan terencana.',
                    'criteria_evidence' => 'Draf/rancangan penerapan Manajemen Perubahan, notulensi/catatan penyusunan rancangan penerapan Manajemen Perubahan, bukti undangan rapat penyusunan rancangan penerapan Manajemen Perubahan, dan/atau dokumentasi aktivitas-aktivitas penyusunan Manajemen Perubahan'
                ],
                2 => [
                    'detail' => 'Kriteria tingkat 1 telah terpenuhi dan kegiatan Manajemen Perubahan SPBE dilaksanakan dengan perencanaan. Kondisi: Kegiatan Manajemen Perubahan SPBE tidak/belum dilaksanakan oleh seluruh unit kerja/perangkat daerah terkait di Instansi Pusat/Pemerintah Daerah dengan caranya masingmasing.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah menerapkan kegiatan Manajemen Perubahan SPBE sesuai dan selaras dengan program kegiatan yang tercantum dalam Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah, namun pelaksanaannya belum mengacu pada pedoman yang berlaku dan belum dilaksanakan oleh seluruh unit kerja/perangkat daerah.',
                    'criteria_evidence' => 'Dukung Perencanaan program kerja/aktivitas kegiatan penerapan Manajemen Perubahan SPBE tertuang di dalam dokumen Peta Rencana SPBE yang masih berlaku dan terdokumentasi secara formal, namun penerapannya belum mengacu pada pedoman/standar Manajemen Perubahan SPBE yang telah ditentukan/ditetapkan, serta pelaksanaannya hanya baru terhadap sebagian unit kerja/perangkat daerah.'
                ],
                3 => [
                    'detail' => 'Kriteria tingkat 2 telah terpenuhi dan kegiatan Manajemen Perubahan SPBE dilaksanakan oleh semua unit kerja/perangkat daerah terkait di Instansi Pusat/Pemerintah Daerah sesuai pedoman perubahan.',
                    'description' => 'Semua unit kerja/perangkat daerah Instansi Pusat/Pemerintah Daerah telah menerapkan Manajemen Perubahan sesuai dengan pedoman yang berlaku yang memuat serangkaian proses manajemen perubahan mulai dari perencanaan, analisis, pengembangan, implementasi, pemantauan dan evaluasi terhadap perubahan SPBE.',
                    'criteria_evidence' => '1. Konteks penerapan Manajemen Perubahan SPBE yang selaras dengan arah dan perencanaan programnya dan terdokumentasi secara formal, dan pelaksanaannya sudah mengacu pada pedoman Manajemen Perubahan SPBE yang menggambarkan output seluruh proses mulai dari perencanaan, analisis, pengembangan, implementasi, pemantauan dan evaluasi terhadap perubahan SPBE.
                    2. Melampirkan dokumen pedoman Manajemen Perubahan SPBE yang digunakan, jika belum terdapat pedoman nasional yang sudah ditetapkan.'
                ],
                4 => [
                    'detail' => 'Kriteria tingkat 3 telah terpenuhi dan kegiatan Manajemen Perubahan SPBE telah dilakukan reviu dan evaluasi.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah menyusun strategi pelaksanaan Manajemen Perubahan yang ditetapkan oleh Tim Koordinasi SPBE, diterapkan kepada seluruh unit kerja/perangkat daerah, serta telah dilakukan evaluasi secara berkala.',
                    'criteria_evidence' => '1) Konteks penerapan Manajemen Perubahan yang menguraikan seluruh pemenuhannya sesuai dengan pedoman/standar Manajemen Perubahan yang telah ditentukan/ditetapkan dan terdokumentasi secara formal.
                    2) Terdapat dokumentasi formal arah kebijakan strategis Manajemen Perubahan yang ditetapkan oleh Tim Koordinasi SPBE kepada seluruh unit kerja/perangkat daerah.
                    3) Terdapat notulensi/catatan/laporan hasil evaluasi/reviu terkait penerapan ManajemenPerubahan SPBE yang masih berlaku (<2 tahun).
                    4) Hasil evaluasi/reviu yang berisi konten isu/permasalahan dan rekomendasi perbaikan yang aktual.
                    5) Bukti undangan rapat evaluasi penerapan Manajemen Perubahan SPBE, dan/atau dokumentasi aktivitas-aktivitas evaluasi penerapan Manajemen Perubahan SPBE (opsional).'
                ],
                5 => [
                    'detail' => 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi telah ditindaklanjuti melalui perbaikan Manajemen Perubahan SPBE.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah melakukan perbaikan penerapan Manajemen Perubahan dan/atau telah terdapat upaya perbaikan berkelanjutan terhadap Manajemen Perubahan SPBE sebagai tindak lanjut rekomendasi hasil evaluasi. Tingkat kematangan level 5 (lima) dapat dipertahankan:
                    a) dengan melakukan reviu terhadap Penerapan Manajemen Perubahan SPBE; dan
                    b) dengan melakukan tindak lanjut berupa penyempurnaan terhadap Penerapan Manajemen Perubahan SPBE sesuai hasil reviu.',
                    'criteria_evidence' => '1) Terdapat notulensi/catatan/laporan hasil reviu/evaluasi dan rekomendasi tindak lanjut penerapan Manajemen Perubahan, bukti undangan rapat pembahasan penyempurnaan penerapan Manajemen Perubahan, dan/atau dokumentasi aktivitas-aktivitas analisis komparasi atau penyempurnaan penerapan Manajemen Perubahan;
                    2) Dokumentasi penerapan Manajemen Perubahan yang sebelumnya dan yang berisi penyempurnaan penerapan Manajemen Perubahan; atau 3) Dokumentasi hasil upaya penguatan Manajemen Perubahan sesuai dengan rekomendasi hasil evaluasi.'
                ],
            ],

            28 => [
                1 => [
                    'detail' => 'Manajemen Layanan SPBE belum atau telah dilaksanakan. Kondisi: Manajemen Layanan SPBE dilaksanakan tanpa perencanaan.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah belum atau sudah menerapkan kegiatan Manajemen Layanan SPBE tanpa program kegiatan yang terarah dan terencana.',
                    'criteria_evidence' => 'Draf/rancangan penerapan Manajemen Layanan SPBE, notulensi/catatan penyusunan rancangan penerapan Manajemen Layanan SPBE, bukti undangan rapat penyusunan rancangan penerapan Manajemen Layanan SPBE, dan/atau dokumentasi aktivitas-aktivitas penyusunan Manajemen Layanan SPBE.'
                ],
                2 => [
                    'detail' => 'Kriteria tingkat 1 telah terpenuhi dan Manajemen Layanan SPBE dilaksanakan dengan perencanaan. Kondisi: Manajemen Layanan SPBE dilaksanakan pada sebagian proses Manajemen Layanan SPBE (Pelayanan Pengguna SPBE dan Pengoperasian Layanan SPBE).',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah menerapkan kegiatan Manajemen Layanan SPBE sesuai dan selaras dengan program kegiatan yang tercantum dalam Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah, namun pelaksanaannya hanya mencakup sebagian proses Manajemen Layanan SPBE.',
                    'criteria_evidence' => 'Perencanaan program kerja/aktivitas kegiatan penerapan Manajemen Layanan SPBE tertuang di dalam dokumen Peta Rencana SPBE yang masih berlaku dan terdokumentasi secara formal, namun pelaksanaannya baru pada sebagian proses Manajemen Layanan SPBE.'
                ],
                3 => [
                    'detail' => 'Kriteria tingkat 2 telah terpenuhi dan Manajemen Layanan SPBE dilaksanakan pada semua proses Manajemen Layanan SPBE (Pelayanan Pengguna SPBE dan Pengoperasian Layanan SPBE).',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah menerapkan Manajemen Layanan SPBE yang memuat serangkaian proses manajemen layanan mulai dari pelayanan Pengguna SPBE dan pengoperasian Layanan SPBE.',
                    'criteria_evidence' => '1. Konteks penerapan Manajemen Layanan SPBE yang selaras dengan arah dan perencanaan programnya dan terdokumentasi secara formal, dan pelaksanaannya sudah menggambarkan output seluruh proses mulai dari pelayanan pengguna SPBE dan pengoperasian layanan SPBE.
                    2. Melampirkan dokumen pedoman Manajemen Layanan SPBE yang digunakan, jika belum terdapat pedoman nasional yang sudah ditetapkan.'
                ],
                4 => [
                    'detail' => 'Kriteria tingkat 3 telah terpenuhi, Manajemen Layanan SPBE telah diterapkan dengan menggunakan sistem aplikasi manajemen layanan, dan kegiatan Manajemen Layanan SPBE telah dilakukan reviu dan evaluasi.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah menyusun strategi pelaksanaan Manajemen Layanan SPBE yang ditetapkan oleh Tim Koordinasi SPBE, pelaksanaannya sudah terhadap seluruh proses Manajemen Layanan SPBE dan didukung oleh penggunaan Sistem Aplikasi Manajemen Layanan, serta telah dilakukan evaluasi secara berkala.',
                    'criteria_evidence' => '1) Konteks penerapan Manajemen Layanan SPBE yang menguraikan seluruh pemenuhannya terhadap semua proses Manajemen Layanan SPBE yang telah ditentukan/ditetapkan dan terdokumentasi secara formal.
                    2) Terdapat dokumentasi formal arah kebijakan strategis Manajemen Layanan SPBE yang ditetapkan oleh Tim Koordinasi SPBE kepada seluruh unit kerja/perangkat daerah didukung oleh penggunaan Sistem Aplikasi Manajemen Layanan.
                    3) Terdapat notulensi/catatan/laporan hasil evaluasi/reviu terkait penerapan Manajemen Layanan SPBE yang masih berlaku (<2 tahun).
                    4) Hasil evaluasi/reviu yang berisi konten isu/permasalahan dan rekomendasi perbaikan yang aktual.'
                ],
                5 => [
                    'detail' => 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi telah ditindaklanjuti melalui perbaikan Manajemen Layanan SPBE.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah melakukan perbaikan penerapan Manajemen Layanan SPBE dan/atau terdapat upaya perbaikan berkelanjutan terhadap Manajemen Layanan SPBE sebagai tindak lanjut rekomendasi hasil evaluasi secara berkesinambungan. Tingkat kematangan level 5 (lima) dapat dipertahankan:
                    a) dengan melakukan reviu terhadap Penerapan Manajemen Layanan SPBE; dan
                    b) dengan melakukan tindak lanjut berupa penyempurnaan terhadap Penerapan Manajemen Layanan SPBE sesuai hasil reviu.',
                    'criteria_evidence' => '1) Terdapat notulensi/catatan/laporan hasil reviu/evaluasi dan rekomendasi tindak lanjut penerapan Manajemen Layanan SPBE, bukti undangan rapat pembahasan penyempurnaan penerapan Manajemen Layanan SPBE, dan/atau dokumentasi aktivitas-aktivitas analisis komparasi atau penyempurnaan penerapan Manajemen Layanan SPBE; 2) Dokumentasi penerapan Manajemen Layanan SPBE yang sebelumnya dan yang berisi penyempurnaan penerapan Manajemen Layanan SPBE; atau 3) Dokumentasi hasil upaya penguatan Manajemen Layanan SPBE sesuai dengan rekomendasi hasil evaluasi.'
                ],
            ],

            29 => [
                1 => [
                    'detail' => 'Kegiatan Audit Infrastruktur SPBE belum atau telah dilaksanakan.Kondisi: Kegiatan Audit Infrastruktur dilaksanakan tanpa perencanaan yang berkesinambungan.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah melakukan kegiatan Audit Infrastruktur SPBE namun masih bersifat sementara (adhoc).',
                    'criteria_evidence' => 'Draf/rancangan pelaksanaan Audit Infrastruktur SPBE, notulensi/catatan penyusunan rancangan pelaksanaan Audit Infrastruktur SPBE, bukti undangan rapat penyusunan rancangan pelaksanaan Audit Infrastruktur SPBE, dan/atau dokumentasi aktivitas-aktivitas pelaksanaan Audit Infrastruktur SPBE.'
                ],
                2 => [
                    'detail' => 'Kriteria tingkat 1 telah terpenuhi dan kegiatan Audit Infrastruktur dilaksanakan sesuai dengan perencanaan yang berkesinambungan.Kondisi: Kegiatan Audit Infrastruktur dilaksanakan tanpa pedoman.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah melakukan Audit Infrastruktur SPBE melalui program kegiatan yang sesuai dan selaras dengan Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah, namun pemeriksaan hanya meliputi sebagian hal pokok teknis yang disyaratkan. Pelaksanaan Audit Infrastruktur SPBE dilakukan secara rutin minimal 2 tahun sekali .',
                    'criteria_evidence' => 'Perencanaan program kerja/aktivitas kegiatan pelaksanaan Audit Infrastruktur SPBE tertuang di dalam dokumen Peta Rencana SPBE yang masih berlaku dan terdokumentasi secara formal, namun penerapannya belum mengacu pada pedoman/standar Audit Infrastruktur SPBE yang telah ditentukan/ditetapkan dan hanya terhadap sebagian dari hal pokok teknis yang disyaratkan.'
                ],
                3 => [
                    'detail' => 'Kriteria tingkat 2 telah terpenuhi dan kegiatan Audit Infrastruktur dilaksanakan sesuai dengan pedoman. Kondisi: kegiatan Audit Infrastruktur dilaksanakan oleh auditor TIK/Sistem Informasi internal Instansi Pusat/Pemerintah Daerah.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah melakukan Audit Infrastruktur SPBE minimal 2 tahun sekali dan pemeriksaan sudah meliputi seluruh hal pokok teknis yang disyaratkan.',
                    'criteria_evidence' => 'Konteks pelaksanaan Audit Infrastruktur SPBE yang selaras dengan arah dan perencanaan programnya dan terdokumentasi secara formal, dan pelaksanaannya sudah terhadap seluruh hal pokok teknis namun dilaksanakan oleh auditor TIK internal.'
                ],
                4 => [
                    'detail' => 'Kriteria tingkat 3 telah terpenuhi dan kegiatan Audit Infrastruktur dilaksanakan oleh auditor TIK/Sistem Informasi eksternal yang memiliki sertifikasi auditor TIK/Sistem Informasi.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah melakukan Audit Infrastruktur SPBE minimal 2 tahun sekali dan pemeriksaan sudah meliputi seluruh hal pokok teknis yang disyaratkan dan/atau telah melakukan evaluasi terhadap hasil Audit Infrastruktur SPBE.',
                    'criteria_evidence' => '1) Konteks pelaksanaan Audit Infrastruktur SPBE yang selaras dengan arah dan perencanaan programnya dan terdokumentasi secara formal, dan pelaksanaannya sudah terhadap seluruh hal pokok teknis dan sudah dilaksanakan oleh auditor TIK eksternal tersertifikasi atau dilaksanakan oleh lembaga yang menyelenggarakan tugas pemerintahan di bidang riset dan inovasi nasional
                    2) Terdapat notulensi/catatan/laporan hasil evaluasi/reviu terkait pelaksanaan Audit Infrastruktur SPBE yang masih berlaku (<2 tahun).
                    3) Hasil evaluasi/reviu yang berisi konten isu/permasalahan dan rekomendasi perbaikan yang aktual.4) Bukti undangan rapat evaluasi pelaksanaan Audit Infrastruktur SPBE, dan/atau dokumentasi aktivitas-aktivitas evaluasi penerapan Audit Infrastruktur SPBE (opsional).'
                ],
                5 => [
                    'detail' => 'Kriteria tingkat 4 telah terpenuhi dan hasil audit Infrastruktur SPBE telah ditindaklanjuti melalui perbaikan penerapan Infrastruktur SPBE.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah melakukan Audit Infrastruktur SPBE secara rutin minimal 2 tahun sekali dan pemeriksaan sudah meliputi seluruh hal pokok teknis yang disyaratkan, dan telah melakukan evaluasi terhadap hasil audit, serta telah menindaklanjuti hasil evaluasi secara berkesinambungan. Tingkat kematangan level 5 (lima) dapat dipertahankan: a) dengan melakukan reviu terhadap Audit Infrastruktur SPBE; danb) dengan melakukan tindak lanjut berupa penyempurnaan terhadap hasil Audit Infrastruktur SPBE sesuai hasil reviu',
                    'criteria_evidence' => '1) Terdapat notulensi/catatan/laporan hasil reviu/evaluasi dan rekomendasi tindak lanjut hasil pelaksanaan Audit Infrastruktur SPBE, bukti undangan rapat pembahasan tindak lanjut hasil pelaksanaan Audit Infrastruktur SPBE, dan/atau dokumentasi aktivitas-aktivitas analisis komparasi atau penyempurnaan dari hasil pelaksanaan Audit Infrastruktur SPBE;2) Dokumentasi penerapan infrastruktur SPBE yang sebelumnya dan yang berisi penyempurnaan penerapan Infrastruktur SPBE.'
                ],
            ],

            30 => [
                1 => [
                    'detail' => 'Kegiatan Audit Aplikasi SPBE belum atau telah dilaksanakan.Kondisi: Kegiatan Audit Aplikasi dilaksanakan tanpa perencanaan yang berkesinambungan',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah melakukan kegiatan Audit Aplikasi namun masih bersifat sementara (adhoc).',
                    'criteria_evidence' => 'Draf/rancangan pelaksanaan Audit Aplikasi, notulensi/catatan penyusunan rancangan pelaksanaan Audit Aplikasi, bukti undangan rapat penyusunan rancangan pelaksanaan Audit Aplikasi, dan/atau dokumentasi aktivitas-aktivitas pelaksanaan Audit Aplikasi'
                ],
                2 => [
                    'detail' => 'Kriteria tingkat 1 telah terpenuhi dan kegiatan Audit Aplikasi dilaksanakan sesuai dengan perencanaan yang berkesinambungan.Kondisi: Kegiatan Audit Aplikasi dilaksanakan tanpa standar/pedoman.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah melakukan Audit Aplikasi SPBE melalui program kegiatan yang sesuai dan selaras dengan Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah, namun pemeriksaan hanya meliputi sebagian hal pokok teknis yang disyaratkan. Pelaksanaan Audit Aplikasi SPBE dilakukan secara rutin minimal 2 tahun sekali.',
                    'criteria_evidence' => 'Perencanaan program kerja/aktivitas kegiatan pelaksanaan Audit Aplikasi SPBE tertuang di dalam dokumen Peta Rencana SPBE yang masih berlaku dan terdokumentasi secara formal, namun penerapannya belum mengacu pada pedoman/standar Audit Aplikasi SPBE yang telah ditentukan/ditetapkan dan hanya terhadap sebagian dari hal pokok teknis yang disyaratkan'
                ],
                3 => [
                    'detail' => 'Kriteria tingkat 2 telah terpenuhi dan kegiatan Audit Aplikasi dilaksanakan sesuai dengan standar/ pedoman. Kondisi: kegiatan Audit Aplikasi dilaksanakan oleh auditor TIK/Sistem Informasi internal Instansi Pusat/Pemerintah Daerah',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah melakukan Audit Aplikasi Khusus secara rutin minimal 2 tahun sekali dan audit telah dilakukan pada seluruh hal pokok teknis yang disyaratkan',
                    'criteria_evidence' => 'Konteks pelaksanaan Audit Aplikasi yang selaras dengan arah dan perencanaan programnya dan terdokumentasi secara formal, dan pelaksanaannya sudah terhadap seluruh hal pokok teknis yang disyaratkan namun baru dilaksanakan oleh auditor TIK internal'
                ],
                4 => [
                    'detail' => 'Kriteria tingkat 3 telah terpenuhi dan kegiatan Audit Aplikasi dilaksanakan oleh auditor TIK/Sistem Informasi eksternal yang memiliki sertifikasi auditor TIK/Sistem Informasi',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah melakukan Audit Aplikasi secara rutin minimal 2 tahun sekali dan audit telah dilakukan terhadap seluruh hal pokok teknis yang disyaratkan, dan/atau telah melakukan evaluasi terhadap hasil Audit Aplikasi SPBE.',
                    'criteria_evidence' => '1) Konteks pelaksanaan Audit Aplikasi yang selaras dengan arah dan perencanaan programnya dan terdokumentasi secara formal, dan pelaksanaannya sudah terhadap seluruh hal pokok teknis yang disyaratkan dan sudah dilaksanakan oleh auditor TIK eksternal tersertifikasi atau dilaksanakan oleh lembaga yang menyelenggarakan tugas pemerintahan di bidang riset dan inovasi nasional
                    2) Terdapat notulensi/catatan/laporan hasil evaluasi/reviu terkait pelaksanaan Audit Aplikasi SPBE yang masih berlaku (<2 tahun).
                    3) Hasil evaluasi/reviu yang berisi konten isu/permasalahan dan rekomendasi perbaikan yang aktual.
                    4) Bukti undangan rapat evaluasi pelaksanaan Audit Aplikasi SPBE, dan/atau dokumentasi aktivitasaktivitas evaluasi pelaksanaan Audit Aplikasi SPBE (opsional)'
                ],
                5 => [
                    'detail' => 'Kriteria tingkat 4 telah terpenuhi dan hasil audit Aplikasi SPBE telah ditindaklanjuti melalui perbaikan penerapan Aplikasi SPBE.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah melakukan Audit Aplikasi secara rutin minimal 2 tahun sekali dan audit telah dilakukan pada seluruh hal pokok teknis yang disyaratkan, dan telah melakukan evaluasi terhadap hasil audit, serta telah menindaklanjuti hasil evaluasi secara berkesinambungan.Tingkat kematangan level 5 (lima) dapat dipertahankan: 
                    a) dengan melakukan reviu terhadap Audit Aplikasi SPBE; dan
                    b) dengan melakukan tindak lanjut berupa penyempurnaan terhadap hasil Audit Aplikasi SPBE sesuai hasil reviu.',
                    'criteria_evidence' => '1) Terdapat notulensi/catatan/laporan hasil reviu/evaluasi dan rekomendasi tindak lanjut hasil pelaksanaan Audit Aplikasi, bukti undangan rapat pembahasan tindak lanjut hasil pelaksanaan Audit Aplikasi, dan/atau dokumentasi aktivitas-aktivitas analisis komparasi atau penyempurnaan dari hasil pelaksanaan Audit Aplikasi; 
                    2) Dokumentasi penerapan Aplikasi yang sebelumnya dan yang berisi penyempurnaan penerapan Aplikasi.'
                ],
            ],

            31 => [
                1 => [
                    'detail' => 'Kegiatan Audit Keamanan SPBE belum atau telah dilaksanakan. Kondisi: Kegiatan Audit Keamanan dilaksanakan tanpa perencanaan yang berkesinambungan.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah melakukan kegiatan Audit Keamanan SPBE namun masih bersifat sementara (adhoc).',
                    'criteria_evidence' => 'Draf/rancangan pelaksanaan Audit Keamanan SPBE, notulensi/catatan penyusunan rancangan pelaksanaan Audit Keamanan SPBE, bukti undangan rapat penyusunan rancangan pelaksanaan Audit Keamanan SPBE dan/atau dokumentasi aktivitas-aktivitas pelaksanaan Audit Keamanan SPBE.'
                ],
                2 => [
                    'detail' => 'Kriteria tingkat 1 telah terpenuhi dan kegiatan Audit Keamanan dilaksanakan sesuai dengan perencanaan yang berkesinambungan. Kondisi: Kegiatan Audit Keamanan dilaksanakan tanpa standar/pedoman.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah melakukan Audit Keamanan SPBE melalui program kegiatan yang sesuai dan selaras dengan Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah, namun pemeriksaan hanya meliputi sebagian hal pokok teknis yang disyaratkan. Pelaksanaan Audit Keamanan SPBE dilakukan secara rutin minimal 2 tahun sekali.',
                    'criteria_evidence' => 'Perencanaan program kerja/aktivitas kegiatan pelaksanaan Audit Keamanan SPBE tertuang di dalam dokumen Peta Rencana SPBE yang masih berlaku dan terdokumentasi secara formal, namun penerapannya belum mengacu pada pedoman/standar Audit Keamanan SPBE yang telah ditentukan/ditetapkan dan hanya terhadap sebagian dari hal pokok teknis yang disyaratkan.'
                ],
                3 => [
                    'detail' => 'Kriteria tingkat 2 telah terpenuhi dan kegiatan Audit Keamanan dilaksanakan sesuai dengan standar/pedoman. Kondisi: kegiatan Audit Keamanan dilaksanakan oleh auditor TIK/Sistem Keamanan Informasi internal Instansi Pusat/Pemerintah Daerah.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah melakukan Audit Keamanan SPBE pada Aplikasi dan Infrastruktur SPBE secara rutin minimal 2 tahun sekali dan audit telah dilakukan terhadap seluruh hal pokok teknis yang disyaratkan.',
                    'criteria_evidence' => 'Konteks pelaksanaan Audit Keamanan SPBE yang selaras dengan arah dan perencanaan programnya dan terdokumentasi secara formal, dan pelaksanaannya sudah terhadap seluruh hal pokok teknis yang disyaratkan pada aplikasi dan/atau infrastruktur yang ada namun dilaksanakan oleh auditor TIK internal.'
                ],
                4 => [
                    'detail' => 'Kriteria tingkat 3 telah terpenuhi dan kegiatan Audit Keamanan dilaksanakan oleh auditor TIK/Sistem Keamanan Informasi eksternal yang memiliki sertifikasi auditor TIK/Sistem Keamanan Informasi.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah melakukan Audit Keamanan SPBE secara rutin minimal 2 tahun sekali dan audit telah dilakukan terhadap seluruh hal pokok teknis yang disyaratkan, dan/atau telah melakukan evaluasi terhadap hasil Audit Keamanan SPBE.',
                    'criteria_evidence' => '1) Konteks pelaksanaan Audit Keamanan SPBE yang selaras dengan arah dan perencanaan programnya dan terdokumentasi secara formal, dan pelaksanaannya sudah terhadap terhadap seluruh hal pokok teknis yang disyaratkan yang ada dan sudah dilaksanakan oleh auditor TIK eksternal tersertifikasi dan atau dilaksanakan oleh lembaga yang menyelenggarakan tugas pemerintahan di bidang keamanan siber. 
                    2) Terdapat notulensi/catatan/laporan hasil evaluasi/reviu terkait pelaksanaan Audit Keamanan SPBE yang masih berlaku (<2 tahun). 
                    3) Hasil evaluasi/reviu yang berisi konten isu/permasalahan dan rekomendasi perbaikan yang aktual. 
                    4) Bukti undangan rapat evaluasi pelaksanaan Audit Keamanan SPBE, dan/atau dokumentasi aktivitas-aktivitas evaluasi pelaksanaan Audit Keamanan SPBE (opsional).'
                ],
                5 => [
                    'detail' => 'Kriteria tingkat 4 telah terpenuhi dan hasil audit Keamanan SPBE telah ditindaklanjuti melalui perbaikan penerapan Keamanan SPBE',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah melakukan Audit Keamanan SPBE secara rutin minimal 2 tahun sekali dan audit telah dilakukan terhadap seluruh hal pokok teknis yang disyaratkan, dan telah melakukan evaluasi terhadap hasil audit, serta telah menindaklanjuti hasil evaluasi secara berkesinambungan. Tingkat kematangan level 5 (lima) dapat dipertahankan:  
                    a) dengan melakukan reviu terhadap Audit Keamanan SPBE; dan 
                    b) dengan melakukan tindak lanjut berupa penyempurnaan terhadap hasil Audit Keamanan SPBE sesuai hasil reviu.',
                    'criteria_evidence' => '1) Terdapat notulensi/catatan/laporan hasil reviu/evaluasi dan rekomendasi tindak lanjut hasil pelaksanaan Audit Keamanan SPBE, bukti undangan rapat pembahasan tindak lanjut hasil pelaksanaan Audit Keamanan SPBE, dan/atau dokumentasi aktivitas-aktivitas analisis komparasi atau penyempurnaan dari hasil pelaksanaan Audit Keamanan SPBE;  
                    2) Dokumentasi penerapan Keamanan SPBE yang sebelumnya dan yang berisi penyempurnaan penerapan Keamanan SPBE.'
                ],
            ],

            32 => [
                1 => [
                    'detail' => 'Layanan Perencanan Berbasis Elektronik hanya memberikan layanan informasi terkait perencanaan kegiatan pemerintah',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Perencanaan Berbasis Elektronik yang menyediakan layanan diseminasi informasi yang bersifat satu arah kepada pengguna layanan seperti informasi jumlah laporan perencanaan kegiatan yang tersedia.',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya informasi perencanaan kegiatan Instansi Pusat/Pemerintah Daerah yang ditayangkan oleh sistem aplikasi.'
                ],
                2 => [
                    'detail' => 'Kriteria tingkat 1 telah terpenuhi dan Layanan Perencanan Berbasis Elektronik memberikan layanan interaksi terkait perencanaan kegiatan pemerintah seperti pencarian informasi, pengunggahan dokumen perencanaan, dan pengunduhan dokumen perencanaan.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Perencanaan Berbasis Elektronik yang menyediakan layanan interaksi seperti mencari informasi dan mengunduh e-dokumen terkait perencanaan kegiatan',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi untuk berinteraksi dengan pengguna, seperti adanya fitur upload (unggah) dan/atau download (unduh).'
                ],
                3 => [
                    'detail' => 'Kriteria tingkat 2 telah terpenuhi dan Layanan Perencanaan Berbasis Elektronik memberikan layanan transaksi kepada pengguna terkait perencanaan kegiatan pemerintah seperti transaksi basis data, validasi data, mekanisme persetujuan, dan analitik data.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Perencanaan Berbasis Elektronik yang menyediakan layanan transaksi dimana pengguna dapat mengunduh atau mengunggah informasi perencanaan kegiatan, dan sistem dapat merespon kepada pengguna seperti mekanisme persetujuan dan validasi perencanaan kegiatan tersebut. ',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi untuk transaksi, dimana selain adanya fitur upload (unggah) dan/atau download (unduh) untuk mendukung input dan output data/informasi, maka sistem aplikasi memiliki fungsi mekanisme transaksi data/informasi, validasi data/informasi, approval (persetujuan) data/informasi, dan/atau analitik data baik antar pengguna maupun automasi.'
                ],
                4 => [
                    'detail' => 'Kriteria tingkat 3 telah terpenuhi dan Layanan Perencanaan Berbasis Elektronik memberikan layanan kolaborasi dengan layanan elektronik lain, misalnya layanan penganggaran Berbasis Elektronik, layanan keuangan Berbasis Elektronik, layanan pengadaan Berbasis Elektronik, layanan perencanaan Berbasis Elektronik Instansi Pusat/Pemerintah Daerah lain, dan/atau layanan SPBE Instansi Pusat/Pemerintah Daerah lain.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Perencanaan Berbasis Elektronik yang dapat berkolaborasi dengan layanan SPBE lainnya, seperti layanan penganggaran, keuangan, dan/atau Layanan Perencanaan Instansi Pusat/Pemerintah Daerah lainnya.',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi dapat berbagai pakai sumber data/informasi dengan layanan SPBE lainnya, sebagai hasil integrasi layanan/middleware/basis data seperti ditunjukkan pada Arsitektur aplikasinya, pengelolaan repositori API, dan dokumentasi integrasi layanan SPBE lainnya.'
                ],
                5 => [
                    'detail' => ' Kriteria tingkat 4 telah terpenuhi dan Layanan Perencanaan Berbasis Elektronik telah dilakukan perbaikan berdasarkan hasil reviu dan evaluasi terhadap perubahan lingkungan, peraturan perundang-undangan, teknologi atau kebutuhan Instansi Pusat/Pemerintah Daerah.',
                    'description' => '1. Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Perencanaan Berbasis Elektronik dan/atau yang dapat ditingkatkan/dikembangkan menyesuaikan terhadap perubahan lingkungan, teknologi dan kebutuhan instansi, dan/atau telah memiliki layanan perencanaan yang terhubung dengan portal nasional administrasi pemerintahan, dan/atau memiliki layanan yang terkonsolidasi di dalam satu portal pelayanan administrasi pemerintahan Instansi Pusat/Pemerintah Daerah. 
                    2. Optimalisasi dapat dilakukan melalui penguatan kebijakan layanan, perbaikan tata kelola layanan, dan penerapan manajemen dari layanan (help desk) sesuai dengan hasil reviu/evaluasi. 
                    3. Tingkat kematangan level 5 (lima) dapat dipertahankan:  
                    a. dengan melakukan reviu kapabilitas fungsi dan/atau penerapan layanan; dan 
                    b. dengan melakukan tindak lanjut atas hasil reviu berupa penyempurnaan terhadap kapabilitas fungsi layanan, penguatan kebijakan layanan, perbaikan tata kelola layanan, dan penerapan manajemen dari layanan (help desk) sesuai dengan hasil reviu.',
                    'criteria_evidence' => '1) Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi telah ditingkatkan/ dikembangkan layanannya dan/atau dengan melakukan optimalisasi melalui penguatan kebijakan layanan, perbaikan tata kelola layanan, dan penerapan manajemen dari layanan (help desk) dan/atau bukti layanan yang terhubung dengan portal nasional administrasi pemerintahan, dan/atau bukti layanan yang telah terkonsolidasi di dalam portal pelayanan administrasi pemerintahan Instansi Pusat/Pemerintah Daerah. 
                    2) Terdapat notulensi/catatan/laporan hasil evaluasi/reviu terkait layanan perencanaan yang masih berlaku (<2 tahun). 
                    3) Hasil evaluasi/reviu yang berisi konten isu/permasalahan dan rekomendasi perbaikan yang aktual. 
                    4) Bukti undangan rapat evaluasi layanan perencanaan, dan/atau dokumentasi aktivitas-aktivitas evaluasi layanan perencanaan (opsional).'
                ],
            ],

            33 => [
                1 => [
                    'detail' => 'Layanan Penganggaran Berbasis Elektronik hanya memberikan layanan informasi terkait penganggaran kegiatan pemerintah',
                    'description' => 'Instansi Pusat/Pemerintah Daerah belum atau sudah memiliki Layanan Penganggaran Berbasis Elektronik yang menyediakan layanan diseminasi informasi yang bersifat satu arah kepada pengguna layanan seperti informasi jumlah laporan penganggaran yang tersedia.',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya informasi penganggaran kegiatan Instansi Pusat/Pemerintah Daerah yang ditayangkan oleh sistem aplikasi.'
                ],
                2 => [
                    'detail' => 'Kriteria tingkat 1 telah terpenuhi dan Layanan Penganggaran Berbasis Elektronik memberikan layanan interaksi terkait penganggaran kegiatan pemerintah seperti pencarian informasi, pengunggahan dokumen penganggaran, dan pengunduhan dokumen penganggaran.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Penganggaran Berbasis Elektronik yang menyediakan layanan interaksi seperti mencari informasi dan mengunduh e-dokumen terkait anggaran kegiatan.',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi untuk berinteraksi dengan pengguna, seperti adanya fitur pencarian, upload (unggah) dan/atau download (unduh) dokumen penganggaran.'
                ],
                3 => [
                    'detail' => 'Kriteria tingkat 2 telah terpenuhi dan Layanan Penganggaran Berbasis Elektronik memberikan layanan transaksi kepada pengguna terkait perencanaan kegiatan pemerintah seperti transaksi basis data, validasi data, mekanisme persetujuan, dan analitik data.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Penganggaran Berbasis Elektronik yang menyediakan layanan transaksi dimana pengguna dapat mengunduh atau mengunggah informasi penganggaran, dan sistem dapat merespon kepada pengguna seperti mekanisme persetujuan dan validasi persetujuan anggaran kegiatan.',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi untuk transaksi, dimana selain adanya fitur upload (unggah) dan/atau download (unduh) untuk mendukung input dan output data/informasi, maka sistem aplikasi memiliki fungsi mekanisme transaksi data/informasi, validasi data/informasi, approval (persetujuan) data/informasi, dan/atau analitik data baik antar pengguna maupun automasi.'
                ],
                4 => [
                    'detail' => 'Kriteria tingkat 3 telah terpenuhi dan Layanan Penganggaran Berbasis Elektronik memberikan layanan kolaborasi dengan layanan elektronik lain, misalnya Layanan Perencanaan Berbasis Elektronik, Layanan Keuangan Berbasis Elektronik, Layanan Pengadaan Berbasis Elektronik, Layanan Penganggaran Berbasis Elektronik Instansi Pusat/Pemerintah Daerah Lain, Dan/Atau Layanan SPBE Instansi Pusat/Pemerintah Daerah lain.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Penganggaran Berbasis Elektronik yang dapat berkolaborasi dengan layanan SPBE lainnya, seperti layanan perencanaan, keuangan, dan/atau layanan penganggaran Instansi Pusat/Pemerintah Daerah lainnya.',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi dapat berbagai pakai sumber data/informasi dengan layanan SPBE lainnya, sebagai hasil integrasi layanan/middleware/basis data seperti ditunjukkan pada Arsitektur aplikasinya, pengelolaan repositori API, dan dokumentasi integrasi layanan SPBE lainnya.'
                ],
                5 => [
                    'detail' => ' Kriteria tingkat 4 telah terpenuhi dan Layanan Penganggaran Berbasis Elektronik telah dilakukan perbaikan berdasarkan hasil reviu dan evaluasi terhadap perubahan lingkungan, peraturan perundang-undangan, teknologi atau kebutuhan Instansi Pusat/Pemerintah Daerah.',
                    'description' => '1. Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Penganggaran Berbasis Elektronik yang dapat ditingkatkan/dikembangkan menyesuaikan terhadap perubahan lingkungan, teknologi dan kebutuhan instansi, dan/atau telah memiliki layanan penganggaran yang terhubung dengan portal nasional administrasi pemerintahan dan/atau memiliki layanan yang terkonsolidasi di dalam satu portal pelayanan administrasi pemerintahan Instansi Pusat/Pemerintah Daerah. 
                    2. Optimalisasi dapat dilakukan melalui penguatan kebijakan layanan, perbaikan tata kelola layanan, dan penerapan manajemen dari layanan (help desk) sesuai dengan hasil reviu/evaluasi. 
                    3. Tingkat kematangan level 5 (lima) dapat dipertahankan:  
                    a. dengan melakukan reviu kapabilitas fungsi dan/atau penerapan layanan; dan 
                    b. dengan melakukan tindak lanjut atas hasil reviu berupa penyempurnaan terhadap kapabilitas fungsi layanan, penguatan kebijakan layanan, perbaikan tata kelola layanan, dan penerapan manajemen dari layanan (help desk) sesuai dengan hasil reviu.',
                    'criteria_evidence' => '1) Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi telah ditingkatkan/ dikembangkan layanannya dan/atau dengan melakukan optimalisasi melalui penguatan kebijakan layanan, perbaikan tata kelola layanan, dan penerapan manajemen dari layanan (help desk) dan/atau bukti layanan yang terhubung dengan portal nasional administrasi pemerintahan, dan/atau bukti layanan yang telah terkonsolidasi di dalam portal pelayanan administrasi pemerintahan Instansi Pusat/Pemerintah Daerah. 
                    2) Terdapat notulensi/catatan/laporan hasil evaluasi/reviu terkait layanan penganggaran yang masih berlaku (<2 tahun). 
                    3) Hasil evaluasi/reviu yang berisi konten isu/permasalahan dan rekomendasi perbaikan yang aktual. 
                    4) Bukti undangan rapat evaluasi layanan penganggaran, dan/atau dokumentasi aktivitas-aktivitas evaluasi layanan penganggaran (opsional).'
                ],
            ],

            34 => [
                1 => [
                    'detail' => 'Layanan Keuangan Berbasis Elektronik hanya memberikan layanan informasi terkait keuangan di Instansi Pusat/Pemerintah Daerah',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Keuangan Berbasis Elektronik yang menyediakan layanan diseminasi informasi yang bersifat satu arah kepada pengguna layanan seperti informasi laporan pengelolaan keuangan per triwulan.',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya informasi keuangan Instansi Pusat/Pemerintah Daerah yang ditayangkan oleh sistem aplikasi.'
                ],
                2 => [
                    'detail' => 'Kriteria tingkat 1 telah terpenuhi dan Layanan Keuangan Berbasis Elektronik memberikan layanan interaksi terkait keuangan seperti pencarian informasi, pengunggahan dan pengunduhan dokumen',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Keuangan Berbasis Elektronik yang menyediakan layanan interaksi seperti mencari informasi dan mengunduh e-dokumen terkait laporan pengelolaan keuangan.',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi untuk berinteraksi dengan pengguna, seperti adanya fitur pencarian, upload (unggah) dan/atau download (unduh) dokumen keuangan.'
                ],
                3 => [
                    'detail' => 'Kriteria tingkat 2 telah terpenuhi dan Layanan Keuangan Berbasis Elektronik memberikan layanan transaksi kepada pengguna terkait keuangan seperti transaksi basis data, validasi data, mekanisme persetujuan, dan analitik data.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Keuangan Berbasis Elektronik yang menyediakan layanan transaksi dimana pengguna dapat mengunduh atau mengunggah informasi pengelolaan keuangan, dan sistem dapat merespon kepada pengguna seperti mekanisme persetujuan dan validasi pencairan dana kegiatan.',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi untuk transaksi, dimana selain adanya fitur upload (unggah) dan/atau download (unduh) untuk mendukung input dan output data/informasi, maka sistem aplikasi memiliki fungsi mekanisme transaksi data/informasi, validasi data/informasi, kemajuan status approval (persetujuan) data/informasi, dan/atau analitik data baik antar pengguna maupun automasi.'
                ],
                4 => [
                    'detail' => 'Kriteria tingkat 3 telah terpenuhi dan Layanan Keuangan Berbasis Elektronik memberikan layanan kolaborasi dengan layanan elektronik lain, misalnya Layanan Penganggaran Berbasis Elektronik, Layanan Pengadaan Berbasis Elektronik, Layanan Perencanaan Berbasis Elektronik, Layanan Keuangan Berbasis Elektronik Instansi Pusat/Pemerintah Daerah lain, dan/atau layanan SPBE Instansi Pusat/Pemerintah Daerah lain.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Keuangan Berbasis Elektronik yang dapat berkolaborasi dengan layanan SPBE lainnya, seperti layanan perencanaan, penganggaran, dan/atau layanan keuangan Instansi usat/Pemerintah Daerah lainnya.',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi dapat berbagai pakai sumber data/informasi dengan layanan SPBE lainnya, sebagai hasil integrasi layanan/middleware/basis data seperti ditunjukkan pada Arsitektur aplikasinya, pengelolaan repositori API, dan dokumentasi integrasi layanan SPBE lainnya.'
                ],
                5 => [
                    'detail' => ' Kriteria tingkat 4 telah terpenuhi dan Layanan Keuangan Berbasis Elektronik telah dilakukan perbaikan berdasarkan hasil reviu dan evaluasi terhadap perubahan lingkungan, peraturan perundang-undangan, teknologi atau kebutuhan Instansi Pusat/Pemerintah Daerah.',
                    'description' => '1. Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Keuangan Berbasis Elektronik yang dapat ditingkatkan/dikembangkan menyesuaikan terhadap perubahan lingkungan, teknologi dan kebutuhan instansi, dan/atau telah memiliki layanan keuangan yang terhubung dengan portal nasional administrasi pemerintahan dan/atau memiliki layanan yang terkonsolidasi di dalam satu portal pelayanan administrasi pemerintahan Instansi Pusat/Pemerintah Daerah. 
                    2. Optimalisasi dapat dilakukan melalui penguatan kebijakan layanan, perbaikan tata kelola layanan, dan penerapan manajemen dari layanan (help desk) sesuai dengan hasil reviu/evaluasi.
                    3. Tingkat kematangan level 5 (lima) dapat dipertahankan:  
                    a. dengan melakukan reviu kapabilitas fungsi dan/atau penerapan layanan; dan 
                    b. dengan melakukan tindak lanjut atas hasil reviu berupa penyempurnaan terhadap kapabilitas fungsi layanan, penguatan kebijakan layanan, perbaikan tata kelola layanan, dan penerapan manajemen dari layanan (help desk) sesuai dengan hasil reviu.',
                    'criteria_evidence' => '1) Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi telah ditingkatkan/ dikembangkan layanannya dan/atau dengan melakukan optimalisasi melalui penguatan kebijakan layanan, perbaikan tata kelola layanan, dan penerapan manajemen dari layanan (help desk) dan/atau bukti layanan yang terhubung dengan portal nasional administrasi pemerintahan, dan/atau bukti layanan yang telah terkonsolidasi di dalam portal pelayanan administrasi pemerintahan Instansi Pusat/Pemerintah Daerah. 
                    2) Terdapat notulensi/catatan/laporan hasil evaluasi/reviu terkait layanan keuangan yang masih berlaku (<2 tahun). 
                    3) Hasil evaluasi/reviu yang berisi konten isu/permasalahan dan rekomendasi perbaikan yang aktual. 
                    4) Bukti undangan rapat evaluasi layanan keuangan, dan/atau dokumentasi aktivitas-aktivitas evaluasi layanan keuangan (opsional).'
                ],
            ],

            35 => [
                1 => [
                    'detail' => 'Layanan Pengadaan Barang dan Jasa Berbasis Elektronik hanya memberikan layanan informasi terkait pengadaan barang dan jasa di Instansi Pusat/Pemerintah Daerah.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Pengadaan Barang/Jasa Berbasis Elektronik yang menyediakan layanan diseminasi informasi yang bersifat satu arah kepada pengguna layanan seperti informasi laporan atau progres pengadaan barang/jasa.',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya informasi pengadaan barang dan jasa pada Instansi Pusat/Pemerintah Daerah yang ditayangkan oleh sistem aplikasi.'
                ],
                2 => [
                    'detail' => 'Kriteria tingkat 1 telah terpenuhi dan Layanan Pengadaan Barang dan Jasa Berbasis Elektronik memberikan layanan interaksi terkait pengadaan barang dan jasa seperti pencarian informasi, pengunggahan dan pengunduhan dokumen',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Pengadaan Barang/Jasa Berbasis Elektronik yang menyediakan layanan interaksi seperti mencari informasi dan mengunduh e-dokumen terkait laporan pengelolaan pengadaan barang/jasa.',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi untuk berinteraksi dengan pengguna, seperti adanya fitur pencarian, upload (unggah) dan/atau download (unduh) dokumen pengadaan barang dan jasa.'
                ],
                3 => [
                    'detail' => 'Kriteria tingkat 2 telah terpenuhi dan Layanan Pengadaan Barang dan Jasa Berbasis Elektronik memberikan layanan transaksi kepada pengguna terkait pengadaan barang dan jasa seperti transaksi basis data, validasi data, mekanisme persetujuan, dan analitik data.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Pengadaan Barang/Jasa Berbasis Elektronik yang menyediakan layanan transaksi dimana pengguna dapat mengunduh atau mengunggah informasi pengelolaan pengadaan barang/jasa, dan sistem dapat merespon kepada pengguna seperti mekanisme persetujuan dan validasi dalam penetapan pemenang pengadaan barang/jasa.',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi untuk transaksi, dimana selain adanya fitur upload (unggah) dan/atau download (unduh) untuk mendukung input dan output data/informasi, maka sistem aplikasi memiliki fungsi mekanisme transaksi data/informasi, validasi data/informasi, kemajuan status approval (persetujuan) data/informasi, dan/atau analitik data baik antar pengguna maupun automasi.'
                ],
                4 => [
                    'detail' => 'Kriteria tingkat 3 telah terpenuhi dan Layanan Pengadaan Barang dan Jasa Berbasis Elektronik memberikan layanan kolaborasi dengan layanan elektronik lain, misalnya Layanan Penganggaran Berbasis Elektronik, Layanan Perencanaan Berbasis Elektronik, Layanan Keuangan Berbasis Elektronik, Layanan Pengadaan Barang dan Jasa Berbasis Elektronik Instansi Pusat/Pemerintah Daerah lain, dan/atau layanan SPBE Instansi Pusat/Pemerintah Daerah lain.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Pengadaan Barang/Jasa Berbasis Elektronik yang dapat berkolaborasi dengan layanan SPBE lainnya, seperti layanan perencanaan, penganggaran, dan/atau layanan pengadaan barang/jasa Instansi Pusat/Pemerintah Daerah lainnya.',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi dapat berbagai pakai sumber data/informasi dengan layanan SPBE lainnya, sebagai hasil integrasi layanan/middleware/basis data seperti ditunjukkan pada Arsitektur aplikasinya, pengelolaan repositori API, dan dokumentasi integrasi layanan SPBE lainnya.'
                ],
                5 => [
                    'detail' => 'Kriteria tingkat 4 telah terpenuhi dan Layanan Pengadaan Barang dan Jasa Berbasis Elektronik telah dilakukan perbaikan berdasarkan hasil reviu dan evaluasi terhadap perubahan lingkungan, peraturan perundang-undangan, teknologi atau kebutuhan Instansi Pusat/Pemerintah Daerah',
                    'description' => '1. Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Pengadaan Barang/Jasa Berbasis Elektronik yang dapat ditingkatkan/dikembangkan menyesuaikan terhadap perubahan lingkungan, teknologi dan kebutuhan instansi, dan/atau telah memiliki layanan pengadaan barang dan jasa yang terhubung dengan portal nasional administrasi pemerintahan dan/atau memiliki layanan yang terkonsolidasi di dalam satu portal pelayanan administrasi pemerintahan Instansi Pusat/Pemerintah Daerah. 
                    2. Optimalisasi dapat dilakukan melalui penguatan kebijakan layanan, perbaikan tata kelola layanan, dan penerapan manajemen dari layanan (help desk) sesuai dengan hasil reviu/evaluasi. 
                    3. Tingkat kematangan level 5 (lima) dapat dipertahankan:  
                    a. dengan melakukan reviu kapabilitas fungsi dan/atau penerapan layanan; dan 
                    b. dengan melakukan tindak lanjut atas hasil reviu berupa penyempurnaan terhadap kapabilitas fungsi layanan, penguatan kebijakan layanan, perbaikan tata kelola layanan, dan penerapan manajemen dari layanan (help desk) sesuai dengan hasil reviu. ',
                    'criteria_evidence' => '1) Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi telah ditingkatkan/ dikembangkan layanannya dan/atau dengan melakukan optimalisasi melalui penguatan kebijakan layanan, perbaikan tata kelola layanan, dan penerapan manajemen dari layanan (help desk) dan/atau bukti layanan yang terhubung dengan portal nasional administrasi pemerintahan, dan/atau bukti layanan yang telah terkonsolidasi di dalam portal pelayanan administrasi pemerintahan Instansi Pusat/Pemerintah Daerah.   
                    2) Terdapat notulensi/catatan/laporan hasil evaluasi/reviu terkait layanan pengadaan barang dan jasa yang masih berlaku (<2 tahun). 
                    3) Hasil evaluasi/reviu yang berisi konten isu/permasalahan dan rekomendasi perbaikan yang aktual. 
                    4) Bukti undangan rapat evaluasi layanan pengadaan barang dan jasa, dan/atau dokumentasi aktivitas-aktivitas evaluasi layanan pengadaan barang dan jasa (opsional).'
                ],
            ],

            36 => [
                1 => [
                    'detail' => 'Layanan Kepegawaian Berbasis Elektronik hanya memberikan layanan informasi terkait kepegawaian. ',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Kepegawaian Berbasis Elektronik yang menyediakan layanan diseminasi informasi yang bersifat satu arah kepada pengguna layanan seperti informasi laporan atau progres pengadaan barang/jasa.',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya informasi kepagawaian pada Instansi Pusat/Pemerintah Daerah yang ditayangkan oleh sistem aplikasi. '
                ],
                2 => [
                    'detail' => 'Kriteria tingkat 1 telah terpenuhi dan Layanan Kepegawaian Berbasis Elektronik memberikan layanan interaksi terkait kepegawaian seperti pencarian informasi, pengunggahan dan pengunduhan dokumen. ',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Kepegawaian Berbasis Elektronik yang menyediakan layanan interaksi seperti mencari informasi dan mengunduh e-dokumen terkait pengelolaan kepegawaian seperti Daftar Riwayat Hidup (DRH) Pegawai.',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi untuk berinteraksi dengan pengguna, seperti adanya fitur pencarian, upload (unggah) dan/atau download (unduh) dokumen administrasi kepegawaian.'
                ],
                3 => [
                    'detail' => 'Kriteria tingkat 2 telah terpenuhi dan Layanan Kepegawaian Berbasis Elektronik memberikan layanan transaksi kepada pengguna terkait kepegawaian seperti transaksi basis data, validasi data, mekanisme persetujuan, dan analitik data.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Kepegawaian Berbasis Elektronik yang menyediakan layanan transaksi dimana pengguna dapat mengunduh atau mengunggah informasi kepegawaian, dan sistem dapat merespon kepada pengguna seperti mekanisme persetujuan dan validasi dalam permohonan cuti tahunan, tugas belajar, dsb.',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi untuk transaksi, dimana selain adanya fitur upload (unggah) dan/atau download (unduh) untuk mendukung input dan output data/informasi, maka sistem aplikasi memiliki fungsi mekanisme transaksi data/informasi, validasi data/informasi, kemajuan status approval (persetujuan) data/informasi, dan/atau analitik data baik antar pengguna maupun automasi. '
                ],
                4 => [
                    'detail' => 'Kriteria tingkat 3 telah terpenuhi dan Layanan Kepegawaian Berbasis Elektronik memberikan layanan kolaborasi dengan layanan elektronik lain, misalnya Layanan Kinerja Berbasis Elektronik,Layanan Keuangan Berbasis Elektronik, Layanan Kepegawaian Berbasis Elektronik Instansi Pusat/Pemerintah Daerah lain, dan/atau layanan SPBE Instansi Pusat/Pemerintah Daerah lain.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Kepegawaian Berbasis Elektronik yang dapat berkolaborasi dengan layanan SPBE lainnya, seperti layanan perencanaan, kearsipan, dan/atau layanan kepegawaian Instansi Pusat/Pemerintah Daerah lainnya. ',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi dapat berbagai pakai sumber data/informasi dengan layanan SPBE lainnya, sebagai hasil integrasi layanan/middleware/basis data seperti ditunjukkan pada Arsitektur aplikasinya, pengelolaan repositori API, dan dokumentasi integrasi layanan SPBE lainnya.'
                ],
                5 => [
                    'detail' => 'Kriteria tingkat 4 telah terpenuhi dan Layanan Kepegawaian Berbasis Elektronik telah dilakukan perbaikan berdasarkan hasil reviu dan evaluasi terhadap perubahan lingkungan, peraturan perundang-undangan, teknologi atau kebutuhan Instansi Pusat/Pemerintah Daerah.',
                    'description' => '1. Instansi Pusat/Pemerintah Daerah sudah Memiliki Layanan Kepegawaian Berbasis Elektronik yang dapat ditingkatkan/dikembangkan menyesuaikan terhadap perubahan lingkungan, teknologi dan kebutuhan instansi, dan/atau telah memiliki layanan kepegawaian yang terhubung dengan portal nasional administrasi pemerintahan dan/atau memiliki layanan yang terkonsolidasi di dalam satu portal pelayanan administrasi pemerintahan Instansi Pusat/Pemerintah Daerah. 
                    2. Optimalisasi dapat dilakukan melalui penguatan kebijakan layanan, perbaikan tata kelola layanan, dan penerapan manajemen dari layanan (help desk) sesuai dengan hasil reviu/evaluasi.3. Tingkat kematangan level 5 (lima) dapat dipertahankan:  
                    a. dengan melakukan reviu kapabilitas fungsi dan/atau penerapan layanan; dan 
                    b. dengan melakukan tindak lanjut atas hasil reviu berupa penyempurnaan terhadap kapabilitas fungsi layanan, penguatan kebijakan layanan, perbaikan tata kelola layanan, dan penerapan manajemen dari layanan (help desk) sesuai dengan hasil reviu.',
                    'criteria_evidence' => '1) Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi kepegawaian, dan/atau dokumentasi aktivitasaktivitas evaluasi layanan kepegawaian (opsional).   telah ditingkatkan/ dikembangkan layanannya dan/atau dengan melakukan optimalisasi melalui penguatan kebijakan layanan, perbaikan tata kelola layanan, dan penerapan manajemen dari layanan (help desk) dan/atau bukti layanan yang terhubung dengan portal nasional administrasi pemerintahan, dan/atau bukti layanan yang telah terkonsolidasi di dalam portal pelayanan administrasi pemerintahan Instansi Pusat/Pemerintah Daerah.  
                    2) Terdapat notulensi/catatan/laporan hasil evaluasi/reviu terkait layanan kepegawaian yang masih berlaku (<2 tahun). 
                    3) Hasil evaluasi/reviu yang berisi konten isu/permasalahan dan rekomendasi perbaikan yang aktual. 
                    4) Bukti '
                ],
            ],

            37 => [
                1 => [
                    'detail' => 'Layanan Kearsipan Berbasis Elektronik hanya memberikan layanan informasi terkait kearsipan. ',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Kearsipan Berbasis Elektronik yang menyediakan layanan diseminasi informasi yang bersifat satu arah kepada pengguna layanan seperti informasi laporan atau statistik arsip.',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya informasi kearsipan pada Instansi Pusat/Pemerintah Daerah yang ditayangkan oleh sistem aplikasi. '
                ],
                2 => [
                    'detail' => 'Kriteria tingkat 1 telah terpenuhi dan Layanan Kearsipan Berbasis Elektronik memberikan layanan interaksi terkait kearsipan seperti pencarianinformasi, pengunggahan dan pengunduhan dokumen. ',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Kearsipan Berbasis Elektronik yang menyediakan layanan interaksi seperti mencari informasi dan mengunduh e-dokumen terkait pengelolaan arsip seperti naskah dinas. ',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi untuk berinteraksi dengan pengguna, seperti adanya fitur pencarian, upload (unggah) dan/atau download (unduh) dokumen terkait kearsipan.'
                ],
                3 => [
                    'detail' => 'Kriteria tingkat 2 telah terpenuhi dan Layanan Kearsipan Berbasis Elektronik memberikan layanan transaksi kepada pengguna terkait kearsipan seperti transaksi basis data, validasi data, mekanisme persetujuan, dan analitik data.  ',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Kearsipan Berbasis Elektronik yang menyediakan layanan transaksi dimana pengguna dapat mengunduh atau mengunggah informasi pengelolaan kearsipan dinamis, dan sistem dapat merespon kepada pengguna seperti mekanisme persetujuan dan validasi surat masuk dan surat keluar dalam alur tata naskah dinas.',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi untuk transaksi, dimana selain adanya fitur upload (unggah) dan/atau download (unduh) untuk mendukung input dan output data/informasi, maka sistem aplikasi memiliki fungsi mekanisme transaksi data/informasi, validasi data/informasi, kemajuan status approval (persetujuan) data/informasi, dan/atau analitik data baik antar pengguna maupun automasi.'
                ],
                4 => [
                    'detail' => 'Kriteria tingkat 3 telah terpenuhi dan Layanan Kearsipan Berbasis Elektronik memberikan layanan kolaborasi dengan layanan elektronik lain, misalnya Layanan Perencanaan Berbasis Elektronik,Layanan Keuangan Berbasis Elektronik, Layanan Kearsipan Berbasis Elektronik Instansi Pusat/Pemerintah Daerah lain, dan/atau layanan SPBE Instansi Pusat/Pemerintah Daerah lain.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Kearsipan Berbasis Elektronik yang dapat berkolaborasi dengan layanan SPBE lainnya, seperti layanan perencanaan, penganggaran, dan/atau dengan layanan kearsipan Instansi Pusat/Pemerintah Daerah lainya.',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi dapat berbagai pakai sumber data/informasi dengan layanan SPBE lainnya, sebagai hasil integrasi layanan/middleware/basis data seperti ditunjukkan pada Arsitektur aplikasinya, pengelolaan repositori API, dan dokumentasi integrasi layanan SPBE lainnya.'
                ],
                5 => [
                    'detail' => 'Kriteria tingkat 4 telah terpenuhi dan Layanan Kearsipan Berbasis Elektronik telah dilakukan perbaikan berdasarkan hasil reviu dan evaluasi terhadap perubahan lingkungan, peraturan perundang-undangan, teknologi atau kebutuhan Instansi Pusat/Pemerintah Daerah. ',
                    'description' => '1. Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Kearsipan Berbasis Elektronik yang dapat ditingkatkan/dikembangkan menyesuaikan terhadap perubahan lingkungan, teknologi dan kebutuhan instansi, dan/atau telah memiliki layanan kearsipan yang terhubung dengan portal nasional administrasi pemerintahan dan/atau memiliki layanan yang terkonsolidasi di dalam satu portal pelayanan administrasi pemerintahan Instansi Pusat/Pemerintah Daerah. 
                    2. Optimalisasi dapat dilakukan melalui penguatan kebijakan layanan, perbaikan tata kelola layanan, dan penerapan manajemen dari layanan (help desk) sesuai dengan hasil reviu/evaluasi.3. Tingkat kematangan level 5 (lima) dapat dipertahankan:  
                    a. dengan melakukan reviu kapabilitas fungsi dan/atau penerapan layanan; dan 
                    b. dengan melakukan tindak lanjut atas hasil reviu berupa penyempurnaan terhadap kapabilitas fungsi layanan, penguatan kebijakan layanan, perbaikan tata kelola layanan, dan penerapan manajemen dari layanan (help desk) sesuai dengan hasil reviu.',
                    'criteria_evidence' => '1) Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi dokumentasi aktivitas-aktivitas evaluasi layanan kearsipan (opsional). telah ditingkatkan/ dikembangkan layanannya dan/atau dengan melakukan optimalisasi melalui penguatan kebijakan layanan, perbaikan tata kelola layanan, dan penerapan manajemen dari layanan (help desk) dan/atau bukti layanan yang terhubung dengan portal nasional administrasi pemerintahan, dan/atau bukti layanan yang telah terkonsolidasi di dalam portal pelayanan administrasi pemerintahan Instansi Pusat/Pemerintah Daerah.  
                    2) Terdapat notulensi/catatan/laporan hasil evaluasi/reviu terkait layanan kearsipan yang masih berlaku (<2 tahun). 
                    3) Hasil evaluasi/reviu yang berisi konten isu/permasalahan dan rekomendasi perbaikan yang aktual. 
                    4) Bukti undangan rapat evaluasi kearsipan, dan/atau'
                ],
            ],

            38 => [
                1 => [
                    'detail' => 'Layanan Pengelolaan Barang Milik Negara/Daerah Berbasis Elektronik hanya memberikan layanan informasi terkait pengelolaan barang milik negara/daerah.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Pengelolaan BMN/BMD berbasis elektronik yang menyediakan layanan diseminasi informasi yang bersifat satu arah kepada pengguna layanan seperti informasi laporan atau statistik Pengelolaan BMN/BMD.',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya informasi barang milik Negara/Daerah pada Instansi Pusat/Pemerintah Daerah yang ditayangkan oleh sistem aplikasi.  '
                ],
                2 => [
                    'detail' => 'Kriteria tingkat 1 telah terpenuhi dan Layanan Pengelolaan Barang Milik Negara/Daerah Berbasis Elektronik memberikan layanan interaksi terkait pengelolaan barang milik negara/daerah seperti pencarian informasi, pengunggahan dan pengunduhan dokumen.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Pengelolaan BMN/BMD berbasis elektronik yang menyediakan layanan interaksi seperti mencari informasi dan mengunduh e-dokumen terkait Pengelolaan BMN/BMD seperti daftar inventarisasi ruangan.',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi untuk berinteraksi dengan pengguna, seperti adanya fitur pencarian, upload (unggah) dan/atau download (unduh) dokumen inventarisasi barang miliki Negara/Daerah. '
                ],
                3 => [
                    'detail' => 'Kriteria tingkat 2 telah terpenuhi dan Layanan Pengelolaan Barang Milik Negara/Daerah Berbasis Elektronik memberikan layanan transaksi kepada pengguna terkait pengelolaan barang milik negara/daerah seperti transaksi basis data, validasi data, mekanisme persetujuan, dan analitik data.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah Memiliki Layanan Pengelolaan BMN/BMD berbasis elektronik yang menyediakan layanan transaksi dimana pengguna dapat mengunduh atau mengunggah informasi Pengelolaan BMN/BMD, dan sistem dapat merespon kepada pengguna seperti mekanisme persetujuan dan validasi penghapusan BMN/BMD.',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi untuk transaksi, dimana selain adanya fitur upload (unggah) dan/atau download (unduh) untuk mendukung input dan output data/informasi, maka sistem aplikasi memiliki fungsi mekanisme transaksi data/informasi, validasi data/informasi, kemajuan status approval (persetujuan) data/informasi, dan/atau analitik data baik antar pengguna maupun automasi. '
                ],
                4 => [
                    'detail' => 'Kriteria tingkat 3 telah terpenuhi dan Layanan Pengelolaan Barang Milik Negara/Daerah Berbasis Elektronik memberikan layanan kolaborasi dengan layanan elektronik lain, misalnya Layanan Penganggaran Berbasis Elektronik, Layanan Pengadaan Barang dan Jasa Berbasis Elektronik, Layanan Perencanaan Berbasis Elektronik,  Layanan Keuangan Berbasis Elektronik, Layanan Pengelolaan Barang Milik Negara/Daerah Berbasis Elektronik Instansi Pusat/Pemerintah Daerah lain, dan/atau layanan SPBE Instansi Pusat/Pemerintah Daerah lain.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Pengelolaan BMN berbasis elektronik yang dapat berkolaborasi dengan layanan SPBE lainnya, seperti layanan perencanaan, penganggaran, dan/atau dengan Layanan Pengelolaan BMN Instansi Pusat dan BMD Pemerintah Daerah lainya.',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi dapat berbagai pakai sumber data/informasi dengan layanan SPBE lainnya, sebagai hasil integrasi layanan/middleware/basis data seperti ditunjukkan pada Arsitektur aplikasinya, pengelolaan repositori API, dan dokumentasi integrasi layanan SPBE lainnya.'
                ],
                5 => [
                    'detail' => 'Kriteria tingkat 4 telah terpenuhi dan Layanan Pengelolaan Barang Milik Negara/Daerah Berbasis Elektronik telah dilakukan perbaikan berdasarkan hasil reviu dan evaluasi terhadap perubahan lingkungan, peraturan perundang-undangan, teknologi atau kebutuhan Instansi Pusat/Pemerintah Daerah.',
                    'description' => '1. Instansi Pusat/Pemerintah Daerah sudah Memiliki Layanan Pengelolaan BMN/BMD berbasis elektronik yang dapat ditingkatkan/dikembangkan menyesuaikan terhadap perubahan lingkungan, teknologi dan kebutuhan instansi, dan/atau telah memiliki layanan pengelolaan barang milik negara/daerah yang terhubung dengan portal nasional administrasi pemerintahan dan/atau memiliki layanan yang terkonsolidasi di dalam satu portal pelayanan administrasi pemerintahan Instansi Pusat/Pemerintah Daerah. 
                    2. Optimalisasi dapat dilakukan melalui penguatan kebijakan layanan, perbaikan tata kelola layanan, dan penerapan manajemen dari layanan (help desk) sesuai dengan hasil reviu/evaluasi. 
                    3. Tingkat kematangan level 5 (lima) dapat dipertahankan:  
                    a. dengan melakukan reviu kapabilitas fungsi dan/atau penerapan layanan; dan 
                    b. dengan melakukan tindak lanjut atas hasil reviu berupa penyempurnaan terhadap kapabilitas fungsi layanan, penguatan kebijakan layanan, perbaikan tata kelola layanan, dan penerapan manajemen dari layanan (help desk) sesuai dengan hasil reviu.',
                    'criteria_evidence' => '1) Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi telah ditingkatkan/ dikembangkan layanannya dan/atau dengan melakukan optimalisasi melalui penguatan kebijakan layanan, perbaikan tata kelola layanan, dan penerapan manajemen dari layanan (help desk) dan/atau bukti layanan yang terhubung dengan portal nasional administrasi pemerintahan, dan/atau bukti layanan yang telah terkonsolidasi di dalam portal pelayanan administrasi pemerintahan Instansi Pusat/Pemerintah Daerah.  
                    2) Terdapat notulensi/catatan/laporan hasil evaluasi/reviu terkait layanan pengelolaan barang milik negara/daerah yang masih berlaku (<2 tahun). 
                    3) Hasil evaluasi/reviu yang berisi konten isu/permasalahan dan rekomendasi perbaikan yang aktual. 
                    4) Bukti undangan rapat evaluasi layanan pengelolaan barang milik negara/daerah, dan/atau dokumentasi aktivitas-aktivitas evaluasi layanan pengelolaan barang milik negara/daerah (opsional).'
                ],
            ],

            39 => [
                1 => [
                    'detail' => 'Layanan Pengawasan Internal Pemerintah Berbasis Elektronik hanya memberikan layanan informasi terkait pengawasan internal pemerintah.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Pengawasan Internal Berbasis Elektronik yang menyediakan layanan diseminasi informasi yang bersifat satu arah kepada pengguna layanan seperti informasi laporan atau statistik pengawasan internal.',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya informasi pengawasan internal pada Instansi Pusat/Pemerintah Daerah yang ditayangkan oleh sistem aplikasi.'
                ],
                2 => [
                    'detail' => 'Kriteria tingkat 1 telah terpenuhi dan Layanan Pengawasan Internal Pemerintah Berbasis Elektronik memberikan layanan interaksi terkait pengawasan internal pemerintah seperti pencarian informasi, pengunggahan dan pengunduhan dokumen.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Pengawasan Internal Berbasis Elektronik yang menyediakan layanan interaksi seperti mencari informasi dan mengunduh e-dokumen terkait pengawasan internal seperti daftar inventarisasi pengelolaan laporan.',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi untuk berinteraksi dengan pengguna, seperti adanya fitur pencarian, upload (unggah) dan/atau download (unduh) pelaporan pada layanan pengawasan internal. '
                ],
                3 => [
                    'detail' => 'Kriteria tingkat 2 telah terpenuhi dan Layanan Pengawasan Internal Pemerintah Berbasis Elektronik memberikan layanan transaksi kepada pengguna terkait pengawasan internal pemerintah seperti transaksi basis data, validasi data, mekanisme persetujuan, dan analitik data.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Pengawasan Internal Berbasis Elektronik yang menyediakan layanan transaksi dimana pengguna dapat mengunduh atau mengunggah informasi pengawasan internal, dan sistem dapat merespon kepada pengguna seperti mekanisme persetujuan dan validasi pengawasan internal. ',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi untuk transaksi, dimana selain adanya fitur upload (unggah) dan/atau download (unduh) untuk mendukung input dan output data/informasi, maka sistem aplikasi memiliki fungsi mekanisme transaksi data/informasi, validasi data/informasi, kemajuan status approval (persetujuan) data/informasi, dan/atau analitik data baik antar pengguna maupun automasi. '
                ],
                4 => [
                    'detail' => 'Kriteria tingkat 3 telah terpenuhi dan Layanan Pengawasan Internal Pemerintah Berbasis Elektronik memberikan layanan kolaborasi dengan layanan elektronik lain, misalnya Layanan Penganggaran Berbasis Elektronik, Layanan Pengadaan Berbasis Elektronik, Layanan Perencanaan Berbasis Elektronik,  Layanan Keuangan Berbasis Elektronik, Layanan Pengawasan Internal Pemerintah Berbasis Elektronik Instansi Pusat/Pemerintah Daerah lain, dan/atau layanan SPBE Instansi Pusat/Pemerintah Daerah lain. ',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Pengawasan Internal Berbasis Elektronik yang dapat berkolaborasi dengan layanan SPBE lainnya, seperti layanan perencanaan, penganggaran, dan/atau dengan Layanan Pengawasan Internal Instansi Pusat/Pemerintah Daerah lainya',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi dapat berbagai pakai sumber data/informasi dengan layanan SPBE lainnya, sebagai hasil integrasi layanan/middleware/basis data seperti ditunjukkan pada Arsitektur aplikasinya, pengelolaan repositori API, dan dokumentasi integrasi layanan SPBE lainnya.'
                ],
                5 => [
                    'detail' => 'Kriteria tingkat 4 telah terpenuhi dan Layanan Pengawasan Internal Berbasis Elektronik telah dilakukan perbaikan berdasarkan hasil reviu dan evaluasi terhadap perubahan lingkungan, peraturan perundang-undangan, teknologi atau kebutuhan Instansi Pusat/Pemerintah Daerah.',
                    'description' => '1. Instansi Pusat/Pemerintah Daerah sudah Memiliki Layanan Pengawasan Internal Berbasis Elektronik yang dapat ditingkatkan/dikembangkan menyesuaikan terhadap perubahan lingkungan, teknologi dan kebutuhan instansi, dan/atau telah memiliki layanan pengawasan internal yang terhubung dengan portal nasional administrasi pemerintahan.  
                    2. Optimalisasi dapat dilakukan melalui penguatan kebijakan layanan, perbaikan tata kelola layanan, dan penerapan manajemen dari layanan (help desk) sesuai dengan hasil reviu/evaluasi dan/atau memiliki layanan yang terkonsolidasi di dalam satu portal pelayanan administrasi pemerintahan Instansi Pusat/Pemerintah Daerah. 
                    3. Tingkat kematangan level 5 (lima) dapat dipertahankan:  
                    a. dengan melakukan reviu kapabilitas fungsi dan/atau penerapan layanan; dan 
                    b. dengan melakukan tindak lanjut atas hasil reviu berupa penyempurnaan terhadap kapabilitas fungsi layanan, penguatan kebijakan layanan, perbaikan tata kelola layanan, dan penerapan manajemen dari layanan (help desk) sesuai dengan hasil reviu. ',
                    'criteria_evidence' => '1) Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi telah ditingkatkan/ dikembangkan layanannya dan/atau dengan melakukan optimalisasi melalui penguatan kebijakan layanan, perbaikan tata kelola layanan, dan penerapan manajemen dari layanan (help desk) dan/atau bukti layanan yang terhubung dengan portal nasional administrasi pemerintahan, dan/atau bukti layanan yang telah terkonsolidasi di dalam portal pelayanan administrasi pemerintahan Instansi Pusat/Pemerintah Daerah.  
                    2) Terdapat notulensi/catatan/laporan hasil evaluasi/reviu terkait layanan pengawasan internal yang masih berlaku (<2 tahun). 
                    3) Hasil evaluasi/reviu yang berisi konten isu/permasalahan dan rekomendasi perbaikan yang aktual.4) Bukti undangan rapat evaluasi layanan pengawasan internal, dan/atau dokumentasi aktivitas-aktivitas evaluasi layanan pengawasan internal (opsional). '
                ],
            ],

            40 => [
                1 => [
                    'detail' => 'Layanan Akuntabilitas Kinerja Instansi Pusat/Pemerintah Daerah Berbasis Elektronik hanya memberikan layanan informasi terkait akuntabilitas kinerja Instansi Pusat/Pemerintah Daerah.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Akuntabilitas Kinerja Berbasis Elektronik yang menyediakan layanan diseminasi informasi yang bersifat satu arah kepada pengguna layanan seperti informasi laporan atau statistik pengawasan internal.',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya informasi akuntabilitas kinerja pada Instansi Pusat/Pemerintah Daerah yang ditayangkan oleh sistem aplikasi. '
                ],
                2 => [
                    'detail' => 'Kriteria tingkat 1 telah terpenuhi dan Layanan Akuntabilitas Kinerja Instansi Pusat/Pemerintah Daerah Berbasis Elektronik memberikan layanan interaksi terkait akuntabilitas kinerja Instansi Pusat/Pemerintah Daerah seperti pencarian informasi, pengunggahan dan pengunduhan dokumen.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Akuntabilitas Kinerja Berbasis Elektronik yang menyediakan layanan transaksi dimana pengguna dapat mengunduh atau mengunggah informasi akuntabilitas kinerja, dan sistem dapat merespon kepada pengguna seperti mekanisme persetujuan dan validasi laporan akuntabilitas kinerja.',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi untuk berinteraksi dengan pengguna, seperti adanya fitur pencarian, upload (unggah) dan/atau download (unduh) pelaporan pada layanan akuntabilitas kinerja organisasi.'
                ],
                3 => [
                    'detail' => 'Kriteria tingkat 2 telah terpenuhi dan Layanan Akuntabilitas Kinerja Instansi Pusat/Pemerintah Daerah Berbasis Elektronik memberikan layanan transaksi kepada pengguna terkait akuntabilitas kinerja Instansi Pusat/Pemerintah Daerah seperti transaksi basis data, validasi data, mekanisme persetujuan, dan analitik data.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Akuntabilitas Kinerja Berbasis Elektronik yang menyediakan layanan transaksi dimana pengguna dapat mengunduh atau mengunggah informasi akuntabilitas kinerja, dan sistem dapat merespon kepada pengguna seperti mekanisme persetujuan dan validasi laporan akuntabilitas kinerja.',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi untuk transaksi, dimana selain adanya fitur upload (unggah) dan/atau download (unduh) untuk mendukung input dan output data/informasi, maka sistem aplikasi memiliki fungsi mekanisme transaksi data/informasi, validasi data/informasi, kemajuan status approval (persetujuan) data/informasi, dan/atau analitik data baik antar pengguna maupun automasi.'
                ],
                4 => [
                    'detail' => 'Kriteria tingkat 3 telah terpenuhi dan Layanan Akuntabilitas Kinerja Instansi Pusat/Pemerintah Daerah Berbasis Elektronik memberikan layanan kolaborasi dengan layanan elektronik lain, misalnya Layanan Penganggaran Berbasis Elektronik, Layanan Pengadaan Berbasis Elektronik, Layanan Perencanaan Berbasis Elektronik,  Layanan Keuangan Berbasis Elektronik, Layanan Akuntabilitas Kinerja Instansi Pusat/Pemerintah Daerah Berbasis Elektronik Instansi Pusat/Pemerintah Daerah lain, dan/atau layanan SPBE Instansi Pusat/Pemerintah Daerah lain.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Akuntabilitas Kinerja Berbasis Elektronik yang dapat berkolaborasi dengan layanan SPBE lainnya, seperti layanan perencanaan, penganggaran, dan/atau dengan layanan akuntabilitas kinerja Instansi Pusat/Pemerintah Daerah lainya. ',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi dapat berbagai pakai sumber data/informasi dengan layanan SPBE lainnya, sebagai hasil integrasi layanan/middleware/basis data seperti ditunjukkan pada Arsitektur aplikasinya, pengelolaan repositori API, dan dokumentasi integrasi layanan SPBE lainnya. '
                ],
                5 => [
                    'detail' => 'Kriteria tingkat 4 telah terpenuhi dan Layanan Akuntabilitas Kinerja Instansi Pusat/Pemerintah Daerah Berbasis Elektronik telah dilakukan perbaikan berdasarkan hasil reviu dan evaluasi terhadap perubahan lingkungan, peraturan perundang-undangan, teknologi atau kebutuhan Instansi Pusat/Pemerintah Daerah. ',
                    'description' => '1. Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Akuntabilitas Kinerja Berbasis Elektronik yang dapat ditingkatkan/dikembangkan menyesuaikan terhadap perubahan lingkungan, teknologi dan kebutuhan instansi, dan/atau telah memiliki layanan akuntabilitas kinerja Instansi Pusat/Pemerintah Daerah yang terhubung dengan portal nasional administrasi pemerintahan dan/atau memiliki layanan yang terkonsolidasi di dalam satu portal pelayanan administrasi pemerintahan Instansi Pusat/Pemerintah Daerah. 
                    2. Optimalisasi dapat dilakukan melalui penguatan kebijakan layanan, perbaikan tata kelola layanan, dan penerapan manajemen dari layanan (help desk) sesuai dengan hasil reviu/evaluasi. 
                    3. Tingkat kematangan level 5 (lima) dapat dipertahankan:  
                    a. dengan melakukan reviu kapabilitas fungsi dan/atau penerapan layanan; dan 
                    b. dengan melakukan tindak lanjut atas hasil reviu berupa penyempurnaan terhadap kapabilitas fungsi layanan, penguatan kebijakan layanan, perbaikan tata kelola layanan, dan penerapan manajemen dari layanan (help desk) sesuai dengan hasil reviu.',
                    'criteria_evidence' => '1) Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi telah ditingkatkan/ dikembangkan layanannya dan/atau dengan melakukan optimalisasi melalui penguatan kebijakan layanan, perbaikan tata kelola layanan, dan penerapan manajemen dari layanan (help desk)dan/atau bukti layanan yang terhubung dengan portal nasional administrasi pemerintahan, dan/atau bukti layanan yang telah terkonsolidasi di dalam portal pelayanan administrasi pemerintahan Instansi Pusat/Pemerintah Daerah.  
                    2) Terdapat notulensi/catatan/laporan hasil evaluasi/reviu terkait layanan akuntabilitas kinerja instansi pemerintah yang masih berlaku (<2 tahun). 
                    3) Hasil evaluasi/reviu yang berisi konten isu/permasalahan dan rekomendasi perbaikan yang aktual. 
                    4) Bukti undangan rapat evaluasi layanan akuntabilitas kinerja instansi pemerintah, dan/atau dokumentasi aktivitas-aktivitas evaluasi layanan akuntabilitas kinerja instansi pemerintah (opsional).'
                ],
            ],

            41 => [
                1 => [
                    'detail' => 'Layanan Kinerja Pegawai Berbasis Elektronik hanya memberikan layanan informasi terkait kinerja pegawai.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Kinerja Pegawai Berbasis Elektronik yang menyediakan layanan diseminasi informasi yang bersifat satu arah kepada pengguna layanan seperti informasi laporan atau penilaian kinerja pegawai.',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya informasi kinerja pegawai pada Instansi Pusat/Pemerintah Daerah yang ditayangkan oleh sistem aplikasi.'
                ],
                2 => [
                    'detail' => 'Kriteria tingkat 1 telah terpenuhi dan Layanan Kinerja Pegawai Berbasis Elektronik memberikan layanan interaksi terkait kinerja pegawai seperti pencarian informasi, pengunggahan dan pengunduhan dokumen.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Kinerja Pegawai Berbasis Elektronik yang menyediakan layanan interaksi seperti mencari informasi dan mengunduh e-dokumen terkait kinerja pegawai seperti daftar penilaian kinerja pegawai.',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi untuk berinteraksi dengan pengguna, seperti adanya fitur pencarian, upload (unggah) dan/atau download (unduh) pelaporan pada layanan kinerja pegawai.'
                ],
                3 => [
                    'detail' => 'Kriteria tingkat 2 telah terpenuhi dan Layanan Kinerja Pegawai Berbasis Elektronik memberikan layanan transaksi kepada pengguna terkait kinerja pegawai seperti transaksi basis data, validasi data, mekanisme persetujuan, dan analitik data. ',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Kinerja Pegawai Berbasis Elektronik yang menyediakan layanan transaksi dimana pengguna dapat mengunduh atau mengunggah informasi kinerja pegawai, dan sistem dapat merespon kepada pengguna seperti mekanisme persetujuan dan validasi hasil kinerja pegawai.',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi untuk transaksi, dimana selain adanya fitur upload (unggah) dan/atau download (unduh) untuk mendukung input dan output data/informasi, maka sistem aplikasi memiliki fungsi mekanisme transaksi data/informasi, validasi data/informasi, kemajuan status approval(persetujuan) data/informasi, dan/atau analitik data baik antar pengguna maupun automasi.'
                ],
                4 => [
                    'detail' => 'Kriteria tingkat 3 telah terpenuhi dan Layanan Kinerja Pegawai Berbasis Elektronik memberikan layanan kolaborasi dengan layanan elektronik lain, misalnya Layanan Perencanaan Berbasis Elektronik, Layanan Akuntabilitas Berbasis Elektronik, Layanan Kinerja Pegawai Berbasis Elektronik Instansi Pusat/Pemerintah Daerah lain, dan/atau layanan SPBE Instansi Pusat/Pemerintah Daerah lain.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki layanan kinerja pegawai berbasis elektronik yang dapat berkolaborasi dengan layanan SPBE lainnya, seperti layanan perencanaan, penganggaran, dan/atau dengan layanan kinerja pegawai Instansi Pusat/Pemerintah Daerah lainya.',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi dapat berbagai pakai sumber data/informasi dengan layanan SPBE lainnya, sebagai hasil integrasi layanan/middleware/basis data seperti ditunjukkan pada Arsitektur aplikasinya, pengelolaan repositori API, dan dokumentasi integrasi layanan SPBE lainnya.'
                ],
                5 => [
                    'detail' => 'Kriteria tingkat 4 telah terpenuhi dan Layanan Kinerja Pegawai Berbasis Elektronik telah dilakukan perbaikan berdasarkan hasil reviu dan evaluasi terhadap perubahan lingkungan, peraturan perundang-undangan, teknologi atau kebutuhan Instansi Pusat/Pemerintah Daerah.',
                    'description' => '1. Instansi Pusat/Pemerintah Daerah sudah memiliki layanan kinerja pegawai berbasis elektronik yang dapat ditingkatkan/dikembangkan menyesuaikan terhadap perubahan lingkungan, teknologi dan kebutuhan instansi, dan/atau telah memiliki layanan kinerja pegawai yang terhubung dengan portal nasional administrasi pemerintahan dan/atau memiliki layanan yang terkonsolidasi di dalam satu portal pelayanan administrasi pemerintahan Instansi Pusat/Pemerintah Daerah.
                    2. Optimalisasi dapat dilakukan melalui penguatan kebijakan layanan, perbaikan tata kelola layanan, dan penerapan manajemen dari layanan (help desk)sesuai dengan hasil reviu/evaluasi.
                    3. Tingkat kematangan level 5 (lima) dapat dipertahankan:
                    a. dengan melakukan reviu kapabilitas fungsi dan/atau penerapan layanan; dan
                    b. dengan melakukan tindak lanjut atas hasil reviu berupa penyempurnaan terhadap kapabilitas fungsi layanan, penguatan kebijakan layanan, perbaikan tata kelola layanan, dan penerapan manajemen dari layanan (help desk) sesuai dengan hasil reviu.',
                    'criteria_evidence' => '1) Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi telah ditingkatkan/ dikembangkan layanannya dan/atau dengan melakukan optimalisasi melalui penguatan kebijakan layanan, perbaikan tata kelola layanan, dan penerapan manajemen dari layanan (help desk)dan/atau bukti layanan yang terhubung dengan portal nasional administrasi pemerintahan, dan/atau bukti layanan yang telah terkonsolidasi di dalam portal pelayanan administrasi pemerintahan Instansi Pusat/Pemerintah Daerah.
                    2) Terdapat notulensi/catatan/laporan hasil evaluasi/reviu terkait layanan kinerja pegawai yang masih berlaku (<2 tahun).
                    3) Hasil evaluasi/reviu yang berisi konten isu/permasalahan dan rekomendasi perbaikan yang aktual.
                    4) Bukti undangan rapat evaluasi layanan kinerja pegawai, dan/atau dokumentasi aktivitas-aktivitas evaluasi layanan kinerja pegawai (opsional).'
                ],
            ],

            42 => [
                1 => [
                    'detail' => 'Layanan Pengaduan Pelayanan Publik Berbasis Elektronik hanya memberikan layanan informasi terkait pengaduan pelayanan publik.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Pengaduan Pelayanan Publik Berbasis Elektronik yang menyediakan layanan diseminasi informasi yang bersifat satu arah kepada pengguna layanan seperti informasi laporan atau statistik pengaduan pelayanan publik.',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya informasi pengaduan pelayanan publik pada Instansi Pusat/Pemerintah Daerah yang ditayangkan oleh sistem aplikasi.'
                ],
                2 => [
                    'detail' => 'Kriteria tingkat 1 telah terpenuhi dan Layanan Pengaduan Pelayanan Publik Berbasis Elektronik memberikan layanan interaksi terkait pengaduan pelayanan publik seperti pencarian informasi, pengunggahan dan pengunduhan dokumen.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Pengaduan Pelayanan Publik Berbasis Elektronik yang menyediakan layanan interaksi seperti mencari informasi dan mengunduh e-dokumen terkait pengaduan pelayanan publik seperti daftar pengaduan pelayanan publik.',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi untuk berinteraksi dengan pengguna, seperti adanya fitur pencarian, upload (unggah) dan/atau download (unduh) pelaporan pada layanan pengaduan publik.'
                ],
                3 => [
                    'detail' => 'Kriteria tingkat 2 telah terpenuhi dan Layanan Pengaduan Pelayanan Publik Berbasis Elektronik memberikan layanan transaksi kepada pengguna terkait pengaduan pelayanan publik seperti transaksi basis data, validasi data, mekanisme persetujuan, dan analitik data.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Pengaduan Pelayanan Publik Berbasis Elektronik yang menyediakan layanan transaksi dimana pengguna dapat mengunduh atau mengunggah informasi pengaduan pelayanan publik, dan sistem dapat merespon kepada pengguna seperti mekanisme persetujuan dan validasi pengaduan pelayanan publik.',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi untuk transaksi, dimana selain adanya fitur upload (unggah) dan/atau download (unduh) untuk mendukung input dan output data/informasi, maka sistem aplikasi memiliki fungsi mekanisme transaksi data/informasi, validasi data/informasi, kemajuan status approval(persetujuan) data/informasi, dan/atau analitik data baik antar pengguna maupun automasi.'
                ],
                4 => [
                    'detail' => 'Kriteria tingkat 3 telah terpenuhi dan Layanan Pengaduan Pelayanan Publik Berbasis Elektronik memberikan layanan kolaborasi dengan layanan elektronik lain, misalnya Layanan Pengaduan Pelayanan Publik Berbasis Elektronik Instansi Pusat/Pemerintah Daerah lain, dan/atau layanan SPBE Instansi Pusat/Pemerintah Daerah lain.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Pengaduan Pelayanan Publik Berbasis Elektronik yang dapat berkolaborasi dengan layanan SPBE lainnya, seperti layanan kependudukan, perizinan, dan/atau dengan layanan pengaduan pelayanan publik Instansi Pusat/Pemerintah Daerah lainya.',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi dapat berbagai pakai sumber data/informasi dengan layanan SPBE lainnya, sebagai hasil integrasi layanan/middleware/basis data seperti ditunjukkan pada Arsitektur aplikasinya, pengelolaan repositori API, dan dokumentasi integrasi layanan SPBE lainnya.'
                ],
                5 => [
                    'detail' => 'Kriteria tingkat 4 telah terpenuhi dan Layanan Pengaduan Pelayanan Publik Berbasis Elektronik telah dilakukan perbaikan berdasarkan hasil reviu dan evaluasi terhadap perubahan lingkungan, peraturan perundang-undangan, teknologi atau kebutuhan Instansi Pusat/Pemerintah Daerah.',
                    'description' => '1. Instansi Pusat/Pemerintah Daerah sudah memiliki layanan pengaduan pelayanan publik berbasis elektronik yang dapat ditingkatkan/dikembangkan menyesuaikan terhadap perubahan lingkungan, teknologi dan kebutuhan instansi dan/atau memiliki layanan yang telah terhubung dengan Portal Nasional Pelayanan Publik, dan/atau memiliki layanan publik yang terkonsolidasi di dalam satu portal pelayanan publik Instansi Pusat/Pemerintah Daerah.
                    2. Optimalisasi dapat dilakukan melalui penguatan kebijakan layanan, perbaikan tata kelola layanan, dan penerapan manajemen dari layanan (help desk)sesuai dengan hasil reviu/evaluasi.
                    3. Tingkat kematangan level 5 (lima) dapat dipertahankan:
                    a. dengan melakukan reviu kapabilitas fungsi dan/atau penerapan layanan; dan
                    b. dengan melakukan tindak lanjut atas hasil reviu berupa penyempurnaan terhadap kapabilitas fungsi layanan, penguatan kebijakan layanan, perbaikan tata kelola layanan, dan penerapan manajemen dari layanan (help desk) sesuai dengan hasil reviu.',
                    'criteria_evidence' => '1) Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi telah ditingkatkan/ dikembangkan layanannya dan/atau dengan melakukan optimalisasi melalui penguatan kebijakan layanan, perbaikan tata kelola layanan, dan penerapan manajemen dari layanan (help desk)dan/atau bukti layanan yang terhubung dengan Portal Nasional pelayanan publik, dan/atau bukti layanan yang telah terkonsolidasi di dalam portal pelayanan publik Instansi Pusat/Pemerintah Daerah.
                    2) Terdapat notulensi/catatan/laporan hasil evaluasi/reviu terkait layanan pengaduan pelayanan publik yang masih berlaku (<2 tahun).
                    3) Hasil evaluasi/reviu yang berisi konten isu/permasalahan dan rekomendasi perbaikan yang aktual.
                    4) Bukti undangan rapat evaluasi layanan pengaduan pelayanan publik, dan/atau dokumentasi aktivitasaktivitas evaluasi layanan pengaduan pelayanan publik (opsional).'
                ],
            ],

            43 => [
                1 => [
                    'detail' => 'Layanan Data Terbuka Berbasis Elektronik hanya memberikan layanan informasi terkait data terbuka.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah Memiliki Layanan Data Terbuka Berbasis Elektronik yang menyediakan layanan diseminasi informasi yang bersifat satu arah kepada pengguna layanan seperti informasi laporan atau statistik penggunaan data terbuka.',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya informasi data terbuka pada Instansi Pusat/Pemerintah Daerah yang ditayangkan oleh sistem aplikasi.'
                ],
                2 => [
                    'detail' => 'Kriteria tingkat 1 telah terpenuhi dan Layanan Data Terbuka Berbasis Elektronik memberikan layanan interaksi terkait data terbuka seperti pencarian informasi, pengunggahan dan pengunduhan dokumen.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Data Terbuka Berbasis Elektronik yang menyediakan layanan interaksi seperti mencari informasi dan mengunduh e-dokumen terkait data terbuka seperti daftar inventarisasi data yang dibagi pakai.',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi untuk berinteraksi dengan pengguna, seperti adanya fitur pencarian, upload (unggah) dan/atau download (unduh) data terbuka.'
                ],
                3 => [
                    'detail' => 'Kriteria tingkat 2 telah terpenuhi dan Layanan Data Terbuka Berbasis Elektronik memberikan layanan transaksi kepada pengguna terkait data terbuka seperti transaksi basis data, validasi data, mekanisme persetujuan, dan analitik data. ',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Data Terbuka Berbasis Elektronik yang menyediakan layanan transaksi dimana pengguna dapat mengunduh atau mengunggah informasi data terbuka, dan sistem dapat merespon kepada pengguna seperti mekanisme persetujuan dan validasidata terbuka.',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi untuk transaksi, dimana selain adanya fitur upload (unggah) dan/atau download (unduh) untuk mendukung input dan output data/informasi, maka sistem aplikasi memiliki fungsi mekanisme transaksi data/informasi, validasi data/informasi, kemajuan status approval(persetujuan) data/informasi, dan/atau analitik data baik antar pengguna maupun automasi.'
                ],
                4 => [
                    'detail' => 'Kriteria tingkat 3 telah terpenuhi dan Layanan Data Terbuka Berbasis Elektronik memberikan layanan kolaborasi dengan layanan elektronik lain, misalnya Layanan Data Terbuka Berbasis Elektronik Instansi Pusat/Pemerintah Daerah lain, dan/atau layanan SPBE Instansi Pusat/Pemerintah Daerah lain.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Data Terbuka Berbasis Elektronik yang dapat berkolaborasi dengan layanan SPBE lainnya, seperti layanan kependudukan, perizinan, dan/atau dengan layanan data terbuka Instansi Pusat/Pemerintah Daerah lainya.',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi dapat berbagai pakai sumber data/informasi dengan layanan SPBE lainnya, sebagai hasil integrasi layanan/middleware/basis data seperti ditunjukkan pada Arsitektur aplikasinya, pengelolaan repositori API, dan dokumentasi integrasi layanan SPBE lainnya.'
                ],
                5 => [
                    'detail' => 'Kriteria tingkat 4 telah terpenuhi dan Layanan Data Terbuka Berbasis Elektronik telah dilakukan perbaikan berdasarkan hasil reviu dan evaluasi terhadap perubahan lingkungan, peraturan perundang-undangan, teknologi atau kebutuhan Instansi Pusat/Pemerintah Daerah.',
                    'description' => '1. Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Data Terbuka Berbasis Elektronik yang dapat ditingkatkan/dikembangkan menyesuaikan terhadap perubahan lingkungan, teknologi dan kebutuhan instansi dan/atau memiliki layanan yang telah terhubung dengan Portal Nasional Pelayanan Publik, dan/atau memiliki layanan publik yang terkonsolidasi di dalam satu portal pelayanan publik Instansi Pusat/Pemerintah Daerah.
                    2. Optimalisasi dapat dilakukan melalui penguatan kebijakan layanan, perbaikan tata kelola layanan, dan penerapan manajemen dari layanan (help desk)sesuai dengan hasil reviu/evaluasi.
                    3. Tingkat kematangan level 5 (lima) dapat dipertahankan:
                    a. dengan melakukan reviu kapabilitas fungsi dan/atau penerapan layanan; dan
                    b. dengan melakukan tindak lanjut atas hasil reviu berupa penyempurnaan terhadap kapabilitas fungsi layanan, penguatan kebijakan layanan, perbaikan tata kelola layanan, dan penerapan manajemen dari layanan (help desk) sesuai dengan hasil reviu.',
                    'criteria_evidence' => '1) Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi telah ditingkatkan/ dikembangkan layanannya dan/atau dengan melakukan optimalisasi melalui penguatan kebijakan layanan, perbaikan tata kelola layanan, dan penerapan manajemen dari layanan (help desk)dan/atau bukti layanan yang terhubung dengan Portal Nasional pelayanan publik, dan/atau bukti layanan yang telah terkonsolidasi di dalam portal pelayanan publik Instansi Pusat/Pemerintah Daerah. 
                    2) Terdapat notulensi/catatan/laporan hasil evaluasi/reviu terkait layanan data terbuka yang masih berlaku (<2 tahun).
                    3) Hasil evaluasi/reviu yang berisi konten isu/permasalahan dan rekomendasi perbaikan yang aktual.
                    4) Bukti undangan rapat evaluasi layanan data terbuka, dan/atau dokumentasi aktivitas-aktivitas evaluasi layanan data terbuka (opsional);'
                ],
            ],

            44 => [
                1 => [
                    'detail' => 'Layanan Jaringan Dokumentasi dan Informasi Hukum Berbasis Elektronik hanya memberikan layanan informasi terkait jaringan dokumentasi dan informasi hukum.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah belum atau sudah memiliki Layanan Jaringan Dokumentasi Dan Informasi Hukum Berbasis Elektronik yang menyediakan layanan diseminasi informasi yang bersifat satu arah kepada pengguna layanan seperti informasi laporan atau statistik dokumentasi dam informasi hukum.',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya informasi produk hukum pada Instansi Pusat/Pemerintah Daerah yang ditayangkan oleh sistem aplikasi.'
                ],
                2 => [
                    'detail' => 'Kriteria tingkat 1 telah terpenuhi dan Layanan Jaringan Dokumentasi dan Informasi Hukum Berbasis Elektronik memberikan layanan interaksi terkait jaringan dokumentasi dan informasi hukum seperti pencarian informasi, pengunggahan dan pengunduhan dokumen.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Jaringan Dokumentasi Dan Informasi Hukum Berbasis Elektronik yang menyediakan layanan interaksi seperti mencari informasi dan mengunduh edokumen terkait informasi hukum seperti dokumen kebijakan atau dokumen hukum IPPD.',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi untuk berinteraksi dengan pengguna, seperti adanya fitur pencarian, upload (unggah) dan/atau download (unduh) produk hukum.'
                ],
                3 => [
                    'detail' => 'Kriteria tingkat 2 telah terpenuhi dan Layanan Jaringan Dokumentasi dan Informasi Hukum Berbasis Elektronik memberikan layanan transaksi kepada pengguna terkait jaringan dokumentasi dan informasi hukum seperti transaksi basis data, validasi data, mekanisme persetujuan, dan analitik data.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Jaringan Dokumentasi Dan Informasi Hukum Berbasis Elektronik yang menyediakan layanan transaksi dimana pengguna dapat mengunduh atau mengunggah informasi jaringan dokumentasi dam informasi hukum, dan sistem dapat merespon kepada pengguna seperti mekanisme persetujuan dan validasi dokumentasi dan informasi hukum.',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi untuk transaksi, dimana selain adanya fitur upload (unggah) dan/atau download (unduh) untuk mendukung input dan output data/informasi, maka sistem aplikasi memiliki fungsi mekanisme transaksi data/informasi, validasi data/informasi, kemajuan status approval(persetujuan) data/informasi, dan/atau analitik data baik antar pengguna maupun automasi.'
                ],
                4 => [
                    'detail' => 'Kriteria tingkat 3 telah terpenuhi dan Layanan Jaringan Dokumentasi dan Informasi Hukum Berbasis Elektronik memberikan layanan kolaborasi dengan layanan elektronik lain, misalnya Layanan Jaringan Dokumentasi dan Informasi Hukum Berbasis Elektronik Instansi Pusat/Pemerintah Daerah lain, dan/atau layanan SPBE Instansi Pusat/Pemerintah Daerah lain.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah Memiliki Layanan Jaringan Dokumentasi Dan Informasi Hukum Berbasis Elektronik yang dapat berkolaborasi dengan layanan SPBE lainnya, seperti layanan kearsipan, perpustakaan, dan/atau dengan layanan jaringan dokumentasi dan informasi hukum Instansi Pusat/Pemerintah Daerah lainya.',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi dapat berbagai pakai sumber data/informasi dengan layanan SPBE lainnya, sebagai hasil integrasi layanan/middleware/basis data seperti ditunjukkan pada Arsitektur aplikasinya, pengelolaan repositori API, dan dokumentasi integrasi layanan SPBE lainnya.'
                ],
                5 => [
                    'detail' => 'Kriteria tingkat 4 telah terpenuhi dan Layanan Jaringan Dokumentasi dan Informasi Hukum Berbasis Elektronik telah dilakukan perbaikan berdasarkan hasil reviu dan evaluasi terhadap perubahan lingkungan, peraturan perundangundangan, teknologi atau kebutuhan Instansi Pusat/Pemerintah Daerah.',
                    'description' => '1. Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Jaringan Dokumentasi Dan Informasi Hukum Berbasis Elektronik yang dapat ditingkatkan/dikembangkan menyesuaikan terhadap perubahan lingkungan, teknologi dan kebutuhan instansi dan/atau memiliki layananyang telah terhubung dengan Portal Nasional Pelayanan Publik, dan/atau memiliki layanan publik yang terkonsolidasi di dalam satu portal pelayanan publik Instansi Pusat/Pemerintah Daerah. 
                    2. Optimalisasi dapat dilakukan melalui penguatan kebijakan layanan, perbaikan tata kelola layanan, dan penerapan manajemen dari layanan (help desk)sesuai dengan hasil reviu/evaluasi.
                    3. Tingkat kematangan level 5 (lima) dapat dipertahankan:
                    a. dengan melakukan reviu kapabilitas fungsi dan/atau penerapan layanan; dan
                    b. dengan melakukan tindak lanjut atas hasil reviu berupa penyempurnaan terhadap kapabilitas fungsi layanan, penguatan kebijakan layanan, perbaikan tata kelola layanan, dan penerapan manajemen dari layanan (help desk) sesuai dengan hasil reviu.',
                    'criteria_evidence' => '1) Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi telah ditingkatkan/ dikembangkan layanannya dan/atau dengan melakukan optimalisasi melalui penguatan kebijakan layanan, perbaikan tata kelola layanan, dan penerapan manajemen dari layanan (help desk)dan/atau bukti layanan yang terhubung dengan Portal Nasional pelayanan publik, dan/atau bukti layanan yang telah terkonsolidasi di dalam portal pelayanan publik Instansi Pusat/Pemerintah Daerah.
                    2) Terdapat i/reviu yang berisi konten isu/permasalahan dan rekomendasi perbaikan yang aktual.
                    4) Bukti undanganotulensi/catatan/laporan hasil evaluasi/reviu terkait layanan jaringan dokumentasi dan informasi hukum yang masih berlaku (<2 tahun).
                    3) Hasil evaluasn rapat evaluasi layanan jaringan dokumentasi dan informasi hukum, dan/atau dokumentasi aktivitas-aktivitas evaluasi layanan jaringan dokumentasi dan informasi hukum (opsional).'
                ],
            ],

            45 => [
                1 => [
                    'detail' => 'Layanan Publik Sektoral Berbasis Elektronik hanya memberikan layanan informasi terkait Publik Sektoral kegiatan pemerintah.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah belum atau sudah memiliki Layanan Publik Sektor Berbasis Elektronik yang menyediakan layanan diseminasi informasi yang bersifat satu arah kepada pengguna layanan seperti informasi laporan atau statistik layanan publik sektoral.',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya informasi layanan sektoral pada Instansi Pusat/Pemerintah Daerah yang ditayangkan oleh sistem aplikasi.'
                ],
                2 => [
                    'detail' => 'Kriteria tingkat 1 telah terpenuhi dan Layanan Publik Sektoral Berbasis Elektronik memberikan layanan interaksi terkait Publik Sektoral kegiatan pemerintah seperti pencarian informasi, pengunggahan dokumen Publik Sektoral, dan pengunduhan dokumen Publik Sektoral.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Publik Sektor Berbasis Elektronik yang menyediakan layanan interaksi seperti mencari informasi dan mengunduh e-dokumen terkait layanan publik sektor seperti perizinan.',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi untuk berinteraksi dengan pengguna, seperti adanya fitur pencarian, upload (unggah) dan/atau download (unduh).'
                ],
                3 => [
                    'detail' => 'Kriteria tingkat 2 telah terpenuhi dan Layanan Publik Sektoral Berbasis Elektronik memberikan layanan transaksi kepada pengguna terkait Publik Sektoral kegiatan pemerintah seperti transaksi basis data, validasi data, mekanisme persetujuan, dan analitik data. ',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Publik Sektor Berbasis Elektronik yang menyediakan layanan transaksi dimana pengguna dapat mengunduh atau mengunggah informasi terkait layanan publik sektor, dan sistem dapat merespon kepada pengguna seperti mekanisme persetujuan dan validasi terkait Layanan Publik Sektor.',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi untuk transaksi, dimana selain adanya fitur upload (unggah) dan/atau download (unduh) untuk mendukung input dan output data/informasi, maka sistem aplikasi memiliki fungsi mekanisme transaksi data/informasi, validasi data/informasi, kemajuan status approval(persetujuan) data/informasi, dan/atau analitik data baik antar pengguna maupun automasi.'
                ],
                4 => [
                    'detail' => 'Kriteria tingkat 3 telah terpenuhi dan Layanan Publik Sektoral Berbasis Elektronik memberikan layanan kolaborasi dengan layanan elektronik lain, misalnya Layanan Publik Sektoral Berbasis Elektronik Instansi Pusat/Pemerintah Daerah lain, dan/atau layanan SPBE Instansi Pusat/Pemerintah Daerah lain.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki layanan publik sektor berbasis elektronik yang dapat berkolaborasi dengan layanan SPBE lainnya, seperti layanan kependudukan, perizinan, dan/atau dengan Layanan Publik Sektor Instansi Pusat/Pemerintah Daerah lainya, dan/atau telah menerapkan Mal Pelayanan Publik (MPP) Digital.',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi dapat berbagai pakai sumber data/informasi dengan layanan SPBE lainnya, sebagai hasil integrasi layanan/middleware/basis data seperti ditunjukkan pada Arsitektur aplikasinya, pengelolaan repositori API, dan dokumentasi integrasi layanan SPBE lainnya, dan/atau bukti penerapan Mal Pelayanan Publik (MPP) Digital.'
                ],
                5 => [
                    'detail' => 'Kriteria tingkat 4 telah terpenuhi dan Layanan Publik Sektoral Berbasis Elektronik telah dilakukan perbaikan berdasarkan hasil reviu dan evaluasi terhadap perubahan lingkungan, peraturan perundang-undangan, teknologi dan kebutuhan Instansi Pusat/Pemerintah Daerah.',
                    'description' => '1. Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Publik Sektor Berbasis Elektronik yang dapat ditingkatkan/dikembangkan menyesuaikan terhadap perubahan lingkungan, teknologi dan kebutuhan instansi dan/atau telah memanfaatkan layanan yang mendukung penerapan Reformasi Birokrasi (RB) Tematik yaitu Akselarasi Digitalisasi Administrasi Pemerintahan, Pengentasan Kemiskinan, Kemudahan Investasi, dan Tematik Prioritas Presiden (inflasi, stunting, penggunaan produk dalam negeri, dll), dan/atau sudah menerapkan Mal Pelayanan Publik (MPP) Digital dengan layanan yang telah terintegrasi dengan berbagai layanan, dan/atau peningkatan pemanfaatan hingga 80% dari pengguna layanan, dan/atau telah melakukan survei Pengguna SPBE dengan menggunakan instrumen survei yang ditentukan, dan/atau memiliki layanan yang telah terhubung dengan Portal Nasional Pelayanan Publik, dan/atau memiliki layanan publik yang terkonsolidasi di dalam satu portal pelayanan publik Instansi Pusat/Pemerintah Daerah.
                    2. Optimalisasi dapat dilakukan melalui penguatan kebijakan layanan, perbaikan tata kelola layanan, dan penerapan manajemen dari layanan (help desk)sesuai dengan hasil reviu/evaluasi.
                    3. Tingkat kematangan level 5 (lima) yang dicapai melalui proses optimalisasi (tindak lanjut) dapat dipertahankan:
                    a. dengan melakukan reviu kapabilitas fungsi dan/atau penerapan layanan; dan
                    b. dengan melakukan tindak lanjut atas hasil reviu berupa penyempurnaan terhadap kapabilitas fungsi layanan, penguatan kebijakan layanan, perbaikan tata kelola layanan, dan penerapan manajemen dari layanan (help desk) sesuai dengan hasil reviu; atau',
                    'criteria_evidence' => '1) Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi telah ditingkatkan/ dikembangkan layanannya, dan/atau dengan melakukan optimalisasi melalui penguatan kebijakan layanan, perbaikan tata kelola layanan, dan penerapan manajemen dari layanan (help desk), dan/atau bukti pemanfaatan layanan berbasis elektronik yang mendukung penerapan RB Tematik, dan/atau bukti penerapan Mal Pelayanan Publik (MPP) Digital dengan layanan yang telah terintegrasi dan/atau pemanfaatan layanan oleh pengguna dan/atau bukti laporan survei Pengguna SPBE, dan/atau bukti layanan yang terhubung dengan Portal Nasional pelayanan publik, dan atau bukti layanan yang telah terkonsolidasi di dalam portal pelayanan publik Instansi Pusat/Pemerintah Daerah.
                    2) Terdapat notulensi/catatan/laporan hasil evaluasi/reviu terkait layanan publik sektor yang masih berlaku (<2 tahun).
                    3) Hasil evaluasi/reviu yang berisi konten isu/permasalahan dan rekomendasi perbaikan yang aktual.
                    4) Bukti undangan rapat evaluasi layanan publik sektor, dan/atau dokumentasi aktivitas-aktivitas evaluasi layanan publik sektor (opsional).'
                ],
            ],

            46 => [
                1 => [
                    'detail' => 'Layanan Publik Sektoral Berbasis Elektronik hanya memberikan layanan informasi terkait Publik Sektoral kegiatan pemerintah.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah belum atau sudah memiliki Layanan Publik Sektor Berbasis Elektronik yang menyediakan layanan diseminasi informasi yang bersifat satu arah kepada pengguna layanan seperti informasi laporan atau statistik layanan publik sektoral.',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya informasi layanan sektoral pada Instansi Pusat/Pemerintah Daerah yang ditayangkan oleh sistem aplikasi.'
                ],
                2 => [
                    'detail' => 'Kriteria tingkat 1 telah terpenuhi dan Layanan Publik Sektoral Berbasis Elektronik memberikan layanan interaksi terkait Publik Sektoral kegiatan pemerintah seperti pencarian informasi, pengunggahan dokumen Publik Sektoral, dan pengunduhan dokumen Publik Sektoral.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Publik Sektor Berbasis Elektronik yang menyediakan layanan interaksi seperti mencari informasi dan mengunduh e-dokumen terkait layanan publik sektor seperti perizinan.',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi untuk berinteraksi dengan pengguna, seperti adanya fitur pencarian, upload (unggah) dan/atau download (unduh).'
                ],
                3 => [
                    'detail' => 'Kriteria tingkat 2 telah terpenuhi dan Layanan Publik Sektoral Berbasis Elektronik memberikan layanan transaksi kepada pengguna terkait Publik Sektoral kegiatan pemerintah seperti transaksi basis data, validasi data, mekanisme persetujuan, dan analitik data.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Publik Sektor Berbasis Elektronik yang menyediakan layanan transaksi dimana pengguna dapat mengunduh atau mengunggah informasi terkait layanan publik sektor, dan sistem dapat merespon kepada pengguna seperti mekanisme persetujuan dan validasi terkait Layanan Publik Sektor.',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi untuk transaksi, dimana selain adanya fitur upload (unggah) dan/atau download (unduh) untuk mendukung input dan output data/informasi, maka sistem aplikasi memiliki fungsi mekanisme transaksi data/informasi, validasi data/informasi, kemajuan status approval(persetujuan) data/informasi, dan/atau analitik data baik antar pengguna maupun automasi.'
                ],
                4 => [
                    'detail' => 'Kriteria tingkat 3 telah terpenuhi dan Layanan Publik Sektoral Berbasis Elektronik memberikan layanan kolaborasi dengan layanan elektronik lain, misalnya Layanan Publik Sektoral Berbasis Elektronik Instansi Pusat/Pemerintah Daerah lain, dan/atau layanan SPBE Instansi Pusat/Pemerintah Daerah lain.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki layanan publik sektor berbasis elektronik yang dapat berkolaborasi dengan layanan SPBE lainnya, seperti layanan kependudukan, perizinan, dan/atau dengan Layanan Publik Sektor Instansi Pusat/Pemerintah Daerah lainya, dan/atau telah menerapkan Mal Pelayanan Publik (MPP) Digital.',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi dapat berbagai pakai sumber data/informasi dengan layanan SPBE lainnya, sebagai hasil integrasi layanan/middleware/basis data seperti ditunjukkan pada Arsitektur aplikasinya, pengelolaan repositori API, dan dokumentasi integrasi layanan SPBE lainnya,dan/atau bukti penerapan Mal Pelayanan Publik (MPP) Digital.'
                ],
                5 => [
                    'detail' => 'Kriteria tingkat 4 telah terpenuhi dan Layanan Publik Sektoral Berbasis Elektronik telah dilakukan perbaikan berdasarkan hasil reviu dan evaluasi terhadap perubahan lingkungan, peraturan perundang-undangan, teknologi dan kebutuhan Instansi Pusat/Pemerintah Daerah.',
                    'description' => '1. Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Publik Sektor Berbasis Elektronik yang dapat ditingkatkan/dikembangkan menyesuaikan terhadap perubahan lingkungan, teknologi dan kebutuhan instansi dan/atau telah memanfaatkan layanan yang mendukung penerapan Reformasi Birokrasi (RB) Tematik yaitu Akselarasi Digitalisasi Administrasi Pemerintahan, Pengentasan Kemiskinan, Kemudahan Investasi, dan Tematik Prioritas Presiden (inflasi, stunting, penggunaan produk dalam negeri, dll), dan/atau sudah menerapkan Mal Pelayanan Publik (MPP) Digital dengan layanan yang telah terintegrasi dengan berbagai layanan, dan/atau peningkatan pemanfaatan hingga 80% dari pengguna layanan, dan/atau telah melakukan survei Pengguna SPBE dengan menggunakan instrumen survei yang ditentukan, dan/atau memiliki layanan yang telah terhubung dengan Portal Nasional Pelayanan Publik, dan/atau memiliki layanan publik yang terkonsolidasi di dalam satu portal pelayanan publik pemerintah daerah.
                    2. Optimalisasi dapat dilakukan melalui penguatan kebijakan layanan, perbaikan tata kelola layanan, dan penerapan manajemen dari layanan (help desk)sesuai dengan hasil reviu/evaluasi.
                    3. Tingkat kematangan level 5 (lima) yang dicapai melalui proses optimalisasi (tindak lanjut) dapat dipertahankan:a. dengan melakukan reviu kapabilitas fungsi dan/atau penerapan layanan; dan
                    b. dengan melakukan tindak lanjut atas hasil reviu berupa penyempurnaan terhadap kapabilitas fungsi layanan, penguatan kebijakan layanan, perbaikan tata kelola layanan, dan penerapan manajemen dari layanan (help desk) sesuai dengan hasil reviu; atau',
                    'criteria_evidence' => '1) Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi telah ditingkatkan/ dikembangkan layanannya, dan/atau dengan melakukan optimalisasi melalui penguatan kebijakan layanan, perbaikan tata kelola layanan, dan penerapan manajemen dari layanan (help desk), dan/atau bukti pemanfaatan layanan berbasis elektronik yang mendukung penerapan RB Tematik, dan/atau bukti penerapan Mal Pelayanan Publik (MPP) Digital dengan layanan yang telah terintegrasi dan/atau pemanfaatan layanan oleh pengguna dan/atau bukti laporan survei Pengguna SPBE, dan/atau bukti layanan yang terhubung dengan Portal Nasional pelayanan publik, dan atau bukti layanan yang telah terkonsolidasi di dalam portal pelayanan publik Instansi Pusat/Pemerintah Daerah.
                    2) Terdapat notulensi/catatan/laporan hasil evaluasi/reviu terkait layanan publik sektor yang masih berlaku (<2 tahun).
                    3) Hasil evaluasi/reviu yang berisi konten isu/permasalahan dan rekomendasi perbaikan yang aktual.
                    4) Bukti undangan rapat evaluasi layanan publik 
                    sektor, dan/atau dokumentasi aktivitas-aktivitas evaluasi layanan publik sektor (opsional).'
                ],
            ],
            47 => [
                1 => [
                    'detail' => 'Layanan Publik Sektoral Berbasis Elektronik hanya memberikan layanan informasi terkait Publik Sektoral kegiatan pemerintah.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah belum atau sudah memiliki Layanan Publik Sektor Berbasis Elektronik yang menyediakan layanan diseminasi informasi yang bersifat satu arah kepada pengguna layanan seperti informasi laporan atau statistik layanan publik sektoral.',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya informasi layanan sektoral pada Instansi Pusat/Pemerintah Daerah yang ditayangkan oleh sistem aplikasi.'
                ],
                2 => [
                    'detail' => 'Kriteria tingkat 1 telah terpenuhi dan Layanan Publik Sektoral Berbasis Elektronik memberikan layanan interaksi terkait Publik Sektoral kegiatan pemerintah seperti pencarian informasi, pengunggahan dokumen Publik Sektoral, dan pengunduhan dokumen Publik Sektoral.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Publik Sektor Berbasis Elektronik yang menyediakan layanan interaksi seperti mencari informasi dan mengunduh e-dokumen terkait layanan publik sektor seperti perizinan.',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi untuk berinteraksi dengan pengguna, seperti adanya fitur pencarian, upload (unggah) dan/atau download (unduh).'
                ],
                3 => [
                    'detail' => 'Kriteria tingkat 2 telah terpenuhi dan Layanan Publik Sektoral Berbasis Elektronik memberikan layanan transaksi kepada pengguna terkait Publik Sektoral kegiatan pemerintah seperti transaksi basis data, validasi data, mekanisme persetujuan, dan analitik data.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Publik Sektor Berbasis Elektronik yang menyediakan layanan transaksi dimana pengguna dapat mengunduh atau mengunggah informasi terkait layanan publik sektor, dan sistem dapat merespon kepada pengguna seperti mekanisme persetujuan dan validasi terkait Layanan Publik Sektor.',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi untuk transaksi, dimana selain adanya fitur upload (unggah) dan/atau download (unduh) untuk mendukung input dan output data/informasi, maka sistem aplikasi memiliki fungsi mekanisme transaksi data/informasi, validasi data/informasi, kemajuan status approval(persetujuan) data/informasi, dan/atau analitik data baik antar pengguna maupun automasi.'
                ],
                4 => [
                    'detail' => 'Kriteria tingkat 3 telah terpenuhi dan Layanan Publik Sektoral Berbasis Elektronik memberikan layanan kolaborasi dengan layanan elektronik lain, misalnya Layanan Publik Sektoral Berbasis Elektronik Instansi Pusat/Pemerintah Daerah lain, dan/atau layanan SPBE Instansi Pusat/Pemerintah Daerah lain.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki layanan publik sektor berbasis elektronik yang dapat berkolaborasi dengan layanan SPBE lainnya, seperti layanan kependudukan, perizinan, dan/atau dengan Layanan Publik Sektor Instansi Pusat/Pemerintah Daerah lainya, dan/atau telah menerapkan Mal Pelayanan Publik (MPP) Digital.',
                    'criteria_evidence' => 'Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi dapat berbagai pakai sumber data/informasi dengan layanan SPBE lainnya, sebagai hasil integrasi layanan/middleware/basis data seperti ditunjukkan pada Arsitektur aplikasinya, pengelolaan repositori API, dan dokumentasi integrasi layanan SPBE lainnya, dan/atau bukti penerapan Mal Pelayanan Publik (MPP) Digita'
                ],
                5 => [
                    'detail' => 'Kriteria tingkat 4 telah terpenuhi dan Layanan Publik Sektoral Berbasis Elektronik telah dilakukan perbaikan berdasarkan hasil reviu dan evaluasi terhadap perubahan lingkungan, peraturan perundang-undangan, teknologi dan kebutuhan Instansi Pusat/Pemerintah Daerah.',
                    'description' => '1. Instansi Pusat/Pemerintah Daerah sudah memiliki Layanan Publik Sektor Berbasis Elektronik yang dapat ditingkatkan/dikembangkan menyesuaikan terhadap perubahan lingkungan, teknologi dan kebutuhan instansi dan/atau telah memanfaatkan layanan yang mendukung penerapan Reformasi Birokrasi (RB) Tematik yaitu Akselarasi Digitalisasi Administrasi Pemerintahan, Pengentasan Kemiskinan, Kemudahan Investasi, dan Tematik Prioritas Presiden (inflasi, stunting, penggunaan produk dalam negeri, dll), dan/atau sudah menerapkan Mal Pelayanan Publik (MPP) Digital dengan layanan yang telah terintegrasi dengan berbagai layanan dan/atau peningkatan pemanfaatan hingga 80% dari pengguna layanan, dan/atau telah melakukan survei Pengguna SPBEdengan menggunakan instrumen survei yang ditentukan, dan/atau memiliki layanan yang telah terhubung dengan Portal Nasional Pelayanan Publik, dan/atau memiliki layanan publik yang terkonsolidasi di dalam satu portal pelayanan publik pemerintah daerah.
                    2. Optimalisasi dapat dilakukan melalui penguatan kebijakan layanan, perbaikan tata kelola layanan, dan penerapan manajemen dari layanan (help desk)sesuai dengan hasil reviu/evaluasi.
                    3. Tingkat kematangan level 5 (lima) yang dicapai melalui proses optimalisasi (tindak lanjut) dapat dipertahankan:
                    a. dengan melakukan reviu kapabilitas fungsi dan/atau penerapan layanan; dan
                    b. dengan melakukan tindak lanjut atas hasil reviu berupa penyempurnaan terhadap kapabilitas fungsi layanan, penguatan kebijakan layanan, perbaikan tata kelola layanan, dan penerapan manajemen dari layanan (help desk) sesuai dengan hasil reviu; atau',
                    'criteria_evidence' => '1) Dokumentasi yang menggambarkan adanya fungsi yang disajikan oleh sistem aplikasi telah ditingkatkan/ dikembangkan layanannya, dan/atau dengan melakukan optimalisasi melalui penguatan kebijakan layanan, perbaikan tata kelola layanan, dan penerapan manajemen dari layanan (help desk), dan/atau bukti pemanfaatan layanan berbasis elektronik yang mendukung penerapan RB Tematik, dan/atau bukti penerapan Mal Pelayanan Publik (MPP) Digital dengan layanan yang telah terintegrasi dan/atau pemanfaatan layanan oleh pengguna, dan/atau bukti laporan survei Pengguna SPBE, dan/atau bukti layanan yang terhubung dengan Portal Nasional pelayanan publik, dan atau bukti layanan yang telah terkonsolidasi di dalam portal pelayanan publik Instansi Pusat/Pemerintah Daerah.
                    2) Terdapat notulensi/catatan/laporan hasil evaluasi/reviu terkait layanan publik sektor yang masih berlaku (<2 tahun).
                    3) Hasil evaluasi/reviu yang berisi konten isu/permasalahan dan rekomendasi perbaikan yang aktual.
                    4) Bukti undangan rapat evaluasi layanan publik sektor, dan/atau dokumentasi aktivitas-aktivitas evaluasi layanan publik sektor (opsional).'
                ],
            ],
        ];

        foreach ($data as $indicatorId => $levels) {
            foreach ($levels as $levelingIndexId => $info) {
                DetailLevelingIndex::create([
                    'indicator_id' => $indicatorId,
                    'leveling_index_id' => $levelingIndexId,
                    'detail' => $info['detail'],
                    'description' => $info['description'],
                ]);
            }
        }
    }
}
