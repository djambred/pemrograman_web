<?php

namespace Database\Seeders;

use App\Models\Indicator;
use Illuminate\Database\Seeder;

class IndicatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $indicatorData = [
            1 => [
                'other_name' => 'Tingkat Kematangan Kebijakan Internal Arsitektur SPBE Instansi Pusat/Pemerintah Daerah.',
                'detail' => 'a. Arsitektur SPBE adalah kerangka dasar yang mendeskripsikan integrasi proses bisnis, data dan informasi, infrastruktur SPBE, aplikasi SPBE, dan keamanan SPBE untuk menghasilkan layanan SPBE yang terintegrasi.
                b. Kebijakan internal Arsitektur SPBE merupakan pengaturan mengenai Arsitektur SPBE di Instansi Pusat dan Pemerintah Daerah yang bertujuan untuk memberikan panduan dalam pelaksanaan integrasi Proses Bisnis, Data dan Informasi, Infrastruktur SPBE, Aplikasi SPBE, dan Keamanan SPBE untuk menghasilkan Layanan SPBE yang terpadu.
                c. Referensi Arsitektur dan Domain Arsitektur SPBE terdiri dari:
                1. Domain Arsitektur Proses Bisnis;
                2. Domain Arsitektur Data dan Informasi;
                3. Domain Arsitektur Layanan;
                4. Domain Arsitektur Aplikasi;
                5. Domain Arsitektur Infrastruktur SPBE; dan,
                6. Domain Arsitektur Keamanan SPBE.',
                'description' => 'Penilaian dilakukan terhadap pengaturan/norma yang memenuhi keselarasan referensi Arsitektur SPBE Nasional dan 6 (enam) Domain Arsitektur SPBE melalui kebijakan yang telah ditetapkan.',
                'score_criteria' => 'Peraturan Menteri/Kepala Badan/Lembaga/Daerah/ Gubernur/Bupati/Walikota atau Keputusan Pimpinan Instansi Pusat/Pemerintah Daerah yang sudah ditetapkan sesuai ketentuan perundang-undangan. Data Pendukung dapat disampaikan lebih dari 1 (satu) jenis dokumen.',
            ],

            2 => [
                'other_name' => 'Tingkat Kematangan Kebijakan Internal Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah.',
                'detail' => 'a. Peta Rencana SPBE adalah dokumen yang mendeskripsikan arah dan langkah penyiapan dan pelaksanaan SPBE yang terintegrasi.
                b. Kebijakan internal Peta Rencana SPBE merupakan pengaturan mengenai Peta Rencana SPBE di Instansi Pusat/Pemerintah Daerah yang bertujuan untuk memberikan panduan arah dan langkah dalam penyiapan dan pelaksanaan SPBE di Instansi Pusat/Pemerintah Daerah.
                c. Peta Rencana SPBE memuat:
                1. Tata Kelola SPBE;
                2. Manajemen SPBE;
                3. Layanan SPBE;
                4. Infrastruktur SPBE;
                5. Aplikasi SPBE;
                6. Keamanan SPBE; dan,
                7. Audit TIK.',
                'description' => 'Penilaian dilakukan terhadap pengaturan/norma yang memenuhi 7 (tujuh) muatan Peta Rencana SPBE melalui kebijakan yang telah ditetapkan.',
                'score_criteria' => 'Peraturan Menteri/Kepala Badan/Lembaga/Daerah/ Gubernur/Bupati/Walikota atau Keputusan Pimpinan Instansi Pusat/Pemerintah Daerah yang sudah ditetapkan sesuai ketentuan perundang-undangan. Data Pendukung dapat disampaikan lebih dari 1 (satu) jenis dokumen.',
            ],

            3 => [
                'other_name' => 'Tingkat Kematangan Kebijakan Internal Manajemen Data.',
                'detail' => 'a. Manajemen Data bertujuan untuk menjamin terwujudnya data yang akurat, mutakhir, terintegrasi, dan dapat diakses sebagai dasar perencanaan, pelaksanaan, evaluasi, dan pengendalian pembangunan nasional.
                b. Manajemen Data dilakukan melalui serangkaian proses pengelolaan Arsitektur Data, Data Induk, Data Referensi, Basis Data, Kualitas Data dan Interoperabilitas Data.
                c. Kebijakan Internal Manajemen Data merupakan pengaturan mengenai Manajemen Data di Instansi Pusat dan Pemerintah Daerah yang bertujuan untuk memberikan panduan arah dan langkah dalam pengelolaan data di Instansi Pusat dan Pemerintah Daerah.
                d. Instansi Pusat dan Pemerintah Daerah menyusun kebijakan internal Manajemen Data mengacu pada pedoman Manajemen Data SPBE.',
                'description' => 'Penilaian dilakukan terhadap pengaturan/norma yang telah mengatur seluruh proses manajemen data melalui kebijakan yang telah ditetapkan.',
                'score_criteria' => 'Peraturan Menteri/Kepala Badan/Lembaga/Daerah/ Gubernur/Bupati/Walikota atau Keputusan Pimpinan Instansi Pusat/Pemerintah Daerah yang sudah ditetapkan sesuai ketentuan perundang-undangan. Data Pendukung dapat disampaikan lebih dari 1 (satu) jenis dokumen.',
            ],

            4 => [
                'other_name' => 'Tingkat Kematangan Kebijakan Internal Pembangunan Aplikasi SPBE.',
                'detail' => 'a. Aplikasi SPBE adalah satu atau sekumpulan program komputer dan prosedur yang dirancang untuk melakukan tugas atau fungsi Layanan SPBE.
                b. Pembangunan Aplikasi SPBE merupakan suatu proses perancangan aplikasi melalui siklus pembangunan aplikasi.
                c. Kebijakan internal Aplikasi SPBE merupakan pengaturan mengenai Pembangunan Aplikasi SPBE di Instansi Pusat dan Pemerintah Daerah yang bertujuan untuk memberikan panduan dalam pelaksanaan pembangunan aplikasi SPBE untuk menghasilkan Layanan SPBE yang terpadu.
                d. Siklus Pembangunan Aplikasi terdiri dari:
                1) Analisis kebutuhan;
                2) Perencanaan;
                3) Rancang bangun;
                4) Implementasi ;
                5) Pengujian kelaikan;
                6) Pemeliharaan; dan,
                7) Evaluasi. Siklus bisa menggunakan salah satu framework yang sudah ada seperti SDLC, RAD, Waterfall, Agile Development Cycle (SCRUM).',
                'description' => 'Penilaian dilakukan terhadap pengaturan/norma yang telah mengatur siklus pembangunan aplikasi melalui kebijakan yang telah ditetapkan.',
                'score_criteria' => 'Peraturan Menteri/Kepala Badan/Lembaga/Daerah/ Gubernur/Bupati/Walikota atau Keputusan Pimpinan Instansi Pusat/Pemerintah Daerah yang sudah ditetapkan sesuai ketentuan perundang-undangan. Data Pendukung dapat disampaikan lebih dari 1 (satu) jenis dokumen.',
            ],

            5 => [
                'other_name' => 'Tingkat Kematangan Kebijakan Internal Layanan Pusat Data.',
                'detail' => 'a. Layanan Pusat Data adalah penyediaan penyimpanan aplikasi dan data.
                b. Layanan Pusat Data bertujuan untuk menjamin ketersediaan penyimpanan data bagi Instansi Pusat dan Pemerintah Daerah.
                c. Pusat Data Nasional adalah sekumpulan pusat data yang digunakan secara bersama dan bagi pakai oleh Instansi Pusat dan Pemerintah Daerah, dan saling terhubung yang terdiri atas pusat data yang diselenggarakan oleh Instansi Pusat/Pemerintah Daerah dengan memenuhi persyaratan pusat data atau pusat data yang dibangun khusus untuk digunakan secara bersama dan bagi pakai oleh Instansi Pusat dan Pemerintah Daerah.
                d. Kebijakan Layanan Pusat Data merupakan pengaturan mengenai layanan pusat data di Instansi Pusat dan Pemerintah Daerah yang bertujuan untuk memberikan panduan dalam pelaksanaan layanan pusat data untuk menghasilkan Layanan SPBE yang terpadu. e. Instansi Pusat dan Pemerintah Daerah menyusun kebijakan internal layanan pusat data mengacu pada pedoman layanan pusat data.',
                'description' => 'Penilaian dilakukan terhadap pengaturan/norma yang memenuhi kriteria muatan Layanan Pusat Data Instansi Pusat/Pemerintah Daerah melalui kebijakan yang telah ditetapkan.',
                'score_criteria' => 'Peraturan Menteri/Kepala Badan/Lembaga/Daerah/ Gubernur/Bupati/Walikota atau Keputusan Pimpinan Instansi Pusat/Pemerintah Daerah yang sudah ditetapkan sesuai ketentuan perundang-undangan. Data Pendukung dapat disampaikan lebih dari 1 (satu) jenis dokumen.',
            ],

            6 => [
                'other_name' => 'Tingkat Kematangan Kebijakan Internal Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah',
                'detail' => 'a. Jaringan Intra adalah jaringan tertutup yang menghubungkan antar simpul jaringan dalam suatu organisasi. b. Jaringan Intra Instansi Pusat dan Pemerintah Daerah merupakan Jaringan Intra yang diselenggarakan oleh Instansi Pusat dan Pemerintah Daerah untuk menghubungkan antar simpul jaringan dalam Instansi Pusat/Pemerintah Daerah, dengan Jaringan Intra Pemerintah dan/atau Jaringan Intra Instansi Pusat/Pemerintah Daerah lain, yang selanjutnya terhubung dengan jaringan intra pemerintah.
                c. Penggunaan Jaringan Intra Instansi Pusat dan Pemerintah Daerah bertujuan untuk menjaga keamanan dalam melakukan pengiriman data dan informasi antar simpul jaringan dalam Instansi Pusat/Pemerintah Daerah, yang selanjutnya terhubung dengan jaringan intra pemerintah.
                d. Penyelenggaraan Jaringan Intra Instansi Pusat/Pemerintah Daerah sebagaimana dimaksud, dapat menggunakan jaringan fisik yang dibangun sendiri oleh Instansi Pusat/Pemerintah Daerah dan/atau yang dibangun oleh penyedia jasa layanan jaringan, yang selanjutnya terhubung dengan jaringan intra pemerintah.
                e. Kebijakan internal dalam hal ini mengatur pengoperasian jaringan intra Instansi Pusat/Pemerintah Daerah yang selanjutnya terhubung dengan jaringan intra pemerintah.',
                'description' => 'Penilaian dilakukan terhadap pengaturan/norma yang memenuhi kriteria muatan Jaringan Intra Instansi Pusat/Pemerintah Daerah melalui kebijakan yang telah ditetapkan.',
                'score_criteria' => 'Peraturan Menteri/Kepala Badan/Lembaga/Daerah/ Gubernur/Bupati/Walikota atau Keputusan Pimpinan Instansi Pusat/Pemerintah Daerah yang sudah ditetapkan sesuai ketentuan perundang-undangan. Data Pendukung dapat disampaikan lebih dari 1 (satu) jenis dokumen.',
            ],

            7 => [
                'other_name' => 'Tingkat Kematangan Kebijakan Internal Penggunaan Sistem Penghubung Layanan Instansi Pusat/ Pemerintah Daerah.',
                'detail' => 'a. Sistem Penghubung Layanan adalah perangkat integrasi/penghubung untuk melakukan pertukaran Layanan SPBE.
                b. Penggunaan Sistem Penghubung Layanan Pemerintah bertujuan untuk memudahkan dalam melakukan integrasi antar Layanan SPBE.
                c. Syarat sebuah Sistem Penghubung Layanan:
                1) Tersedia jalur/bus (sistem koneksi bukan point-to-point); 2) Tersedia metadata repository; dan
                3) Tersedia service directory.
                d. Kebijakan internal dalam hal ini mengatur penerapan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah yang selanjutnya terintegrasi dengan Sistem Penghubung Layanan Pemerintah.',
                'description' => 'Penilaian dilakukan terhadap pengaturan/norma yang memenuhi kriteria muatan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah melalui kebijakan yang telah ditetapkan.',
                'score_criteria' => 'Peraturan Menteri/Kepala Badan/Lembaga/Daerah/ Gubernur/Bupati/Walikota atau Keputusan Pimpinan Instansi Pusat/Pemerintah Daerah yang sudah ditetapkan sesuai ketentuan perundang-undangan. Data Pendukung dapat disampaikan lebih dari 1 (satu) jenis dokumen.',
            ],

            8 => [
                'other_name' => 'Tingkat Kematangan Kebijakan Internal Manajemen Keamanan Informasi.',
                'detail' => 'a. Manajemen Keamanan Informasi dilakukan melalui serangkaian proses yang meliputi penetapan ruang lingkup, penetapan penanggung jawab, perencanaan, dukungan pengoperasian, evaluasi kinerja, dan perbaikan berkelanjutan terhadap keamanan informasi dalam SPBE.
                b. Manajemen Keamanan Informasi bertujuan untuk menjamin keberlangsungan SPBE dengan meminimalkan dampak risiko keamanan informasi.
                c. Kebijakan internal dalam hal ini mengatur terkait penerapan Manajemen Keamanan Informasi pada Instansi Pusat/Pemerintah Daerah.',
                'description' => 'Penilaian dilakukan terhadap pengaturan/norma yang telah mencakup keseluruhan proses Manajemen Keamanan Informasi melalui kebijakan yang telah ditetapkan.',
                'score_criteria' => 'Peraturan Menteri/Kepala Badan/Lembaga/Daerah/ Gubernur/Bupati/Walikota atau Keputusan Pimpinan Instansi Pusat/Pemerintah Daerah yang sudah ditetapkan sesuai ketentuan perundang-undangan. Data Pendukung dapat disampaikan lebih dari 1 (satu) jenis dokumen.',
            ],

            9 => [
                'other_name' => 'Tingkat Kematangan Kebijakan Internal Audit TIK.',
                'detail' => 'a. Audit Teknologi Informasi dan Komunikasi (TIK) adalah proses yang sistematis untuk memperoleh dan mengevaluasi bukti secara objektif terhadap aset teknologi informasi dan komunikasi dengan tujuan untuk menetapkan tingkat kesesuaian antara teknologi informasi dan komunikasi dengan kriteria dan/atau standar yang telah ditetapkan.
                b. Audit TIK terdiri atas:
                1. Audit Infrastruktur SPBE;
                2. Audit Aplikasi SPBE; dan,
                3. Audit Keamanan SPBE.
                c. Audit Teknologi Informasi dan Komunikasi meliputi pemeriksaan hal pokok teknis pada:
                1. Penerapan tata kelola dan manajemen teknologi informasi dan komunikasi;
                2. Fungsionalitas teknologi informasi dan komunikasi; 3. Kinerja teknologi informasi dan komunikasi yang dihasilkan; dan,
                4. Aspek teknologi informasi dan komunikasi lainnya. d. Kebijakan internal dalam hal ini mengatur terkait penerapan Audit TIK pada Instansi Pusat/Pemerintah Daerah.',
                'description' => 'Penilaian dilakukan terhadap pengaturan/norma yang memenuhi kriteria muatan/ruang lingkup Audit TIK melalui kebijakan yang telah ditetapkan.',
                'score_criteria' => 'Peraturan Menteri/Kepala Badan/Lembaga/Daerah/ Gubernur/Bupati/Walikota atau Keputusan Pimpinan Instansi Pusat/Pemerintah Daerah yang sudah ditetapkan sesuai ketentuan perundang-undangan. Data Pendukung dapat disampaikan lebih dari 1 (satu) jenis dokumen.',
            ],

            10 => [
                'other_name' => 'Tingkat Kematangan Kebijakan Internal Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah.',
                'detail' => 'a. Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah adalah para pejabat dalam tim yang diberi tugas untuk mengendalikan, mengarahkan, dan mengevaluasi SPBE, termasuk didalamnya melaksanakan perumusan kebijakan dan penerapan SPBE di Instansi Pusat dan Pemerintah Daerah masing-masing.
                b. Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah dipimpin oleh seorang koordinator yang ditetapkan oleh pimpinan Instansi Pusat/Kepala Daerah.
                c. Kebijakan internal dalam hal ini mengatur terkait penunjukkan dan pendelegasian tugas dan fungsi Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah.',
                'description' => 'Penilaian dilakukan terhadap pengaturan yang memenuhi kriteria untuk mendukung tugas dan fungsi Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah, melalui kebijakan yang telah ditetapkan.',
                'score_criteria' => 'Peraturan Menteri/Kepala Badan/Lembaga/Daerah/ Gubernur/Bupati/Walikota atau Keputusan Pimpinan Instansi Pusat/Pemerintah Daerah yang sudah ditetapkan sesuai ketentuan perundang-undangan. Data Pendukung dapat disampaikan lebih dari 1 (satu) jenis dokumen.',
            ],

            11 => [
                'other_name' => 'Tingkat Kematangan Arsitektur SPBE Instansi Pusat/Pemerintah Daerah.',
                'detail' => 'a. Arsitektur SPBE adalah kerangka dasar yang mendeskripsikan integrasi proses bisnis, data dan informasi, infrastruktur SPBE, aplikasi SPBE, dan keamanan SPBE untuk menghasilkan layanan SPBE yang terintegrasi.
                b. Arsitektur SPBE Nasional adalah Arsitektur SPBE yang diterapkan secara nasional.
                c. Arsitektur SPBE Instansi Pusat adalah Arsitektur SPBE yang diterapkan di Instansi Pusat.
                d. Arsitektur SPBE Pemerintah Daerah adalah Arsitektur SPBE yang diterapkan di Pemerintah Daerah.
                e. Referensi Arsitektur SPBE adalah kerangka dasar yang mendeskripsikan komponen dasar arsitektur baku yang digunakan sebagai acuan untuk penyusunan setiap Domain Arsitektur SPBE.
                f. Domain Arsitektur SPBE adalah kerangka dasar yang mendeskripsikan substansi arsitektur yang memuat domain arsitektur proses bisnis, domain arsitektur data dan informasi, domain arsitektur infrastruktur SPBE, domain arsitektur aplikasi SPBE, domain arsitektur keamanan SPBE, dan domain arsitektur layanan SPBE.',
                'description' => 'Penilaian dilakukan terhadap bukti dukung dokumen Arsitektur SPBE yang memenuhi kriteria ruang lingkup Referensi Arsitektur dan Domain Arsitektur SPBE dan terdokumentasi secara formal.',
                'score_criteria' => 'Bukti dukung tingkat kematangan dilampirkan berupa dokumen sesuai huruf b yang mencakup ketentuan huruf c. Data Pendukung dapat disampaikan lebih dari 1 (satu) jenis dokumen.',
            ],

            12 => [
                'other_name' => 'Tingkat Kematangan Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah.',
                'detail' => 'a. Peta Rencana SPBE adalah dokumen yang mendeskripsikan arah dan langkah penyiapan dan pelaksanaan SPBE yang terintegrasi.
                b. Peta Rencana SPBE memuat:
                1. Tata Kelola SPBE;
                2. Manajemen SPBE;
                3. Layanan SPBE;
                4. Infrastruktur SPBE;
                5. Aplikasi SPBE;
                6. Keamanan SPBE; dan
                7. Audit TIK',
                'description' => 'Penilaian dilakukan terhadap bukti dukung dokumen Peta Rencana SPBE yang memenuhi kriteria ruang lingkup Peta Rencana SPBE dan terdokumentasi secara formal',
                'score_criteria' => 'Bukti dukung tingkat kematangan dilampirkan berupa dokumen sesuai huruf a dan b. Data Pendukung dapat disampaikan lebih dari 1 (satu) jenis dokumen.',
            ],

            13 => [
                'other_name' => 'Tingkat Kematangan Keterpaduan Rencana dan Anggaran SPBE.',
                'detail' => 'a. Rencana dan Anggaran SPBE adalah dokumen yang mendeskripsikan program, kegiatan dan pemanfaatan anggaran SPBE.
                b. Rencana dan Anggaran SPBE disusun sesuai dengan proses perencanaan dan penganggaran tahunan pemerintah.
                c. Rencana dan Anggaran SPBE Instansi Pusat/Pemerintah Daerah berpedoman pada Arsitektur SPBE Instansi Pusat/Pemerintah Daerah dan Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah',
                'description' => 'Penilaian dilakukan terhadap bukti dukung Keterpaduan Rencana dan Anggaran SPBE yang memenuhi kriteria ruang lingkup Rencana dan Anggaran SPBE dan terdokumentasi secara formal.',
                'score_criteria' => 'Bukti dukung tingkat kematangan dilampirkan berupa dokumen sesuai huruf a, b, dan c. Data Pendukung dapat disampaikan lebih dari 1 (satu) jenis dokumen.',
            ],

            14 => [
                'other_name' => 'Tingkat Kematangan Inovasi Proses Bisnis SPBE.',
                'detail' => 'a. Proses Bisnis adalah dokumen yang mendeskripsikan hubungan kerja yang efektif dan efisien antar unit organisasi untuk menghasilkan kinerja sesuai dengan tujuan pendirian organisasi agar menghasilkan keluaran yang bernilai tambah bagi pemangku kepentingan (PermenPANRB No 19 Tahun 2018).
                b. Penyusunan Proses Bisnis bertujuan untuk memberikan pedoman dalam penggunaan data dan informasi serta penerapan Aplikasi SPBE, Keamanan SPBE, dan Layanan SPBE.
                c. Instansi Pusat/Pemerintah Daerah menyusun Proses Bisnis yang selaras dengan Arsitektur SPBE Instansi Pusat/Pemerintah Daerah',
                'description' => 'Penilaian dilakukan terhadap bukti dukung penerapan Inovasi Proses Bisnis SPBE yang memenuhi kriteria ruang lingkup Proses Bisnis SPBE dan terdokumentasi secara formal.',
                'score_criteria' => 'Bukti dukung tingkat kematangan dilampirkan berupa dokumen sesuai huruf c. Data Pendukung dapat disampaikan lebih dari 1 (satu) jenis dokumen.',
            ],

            15 => [
                'other_name' => 'Tingkat Kematangan Pembangunan Aplikasi SPBE.',
                'detail' => 'a. Aplikasi SPBE adalah satu atau sekumpulan program komputer dan prosedur yang dirancang untuk melakukan tugas atau fungsi Layanan SPBE.
                b. Pembangunan Aplikasi SPBE merupakan suatu proses perancangan aplikasi melalui siklus pembangunan aplikasi.
                c. Siklus Pembangunan Aplikasi terdiri dari: 
                1. Analisis kebutuhan;
                2. Perencanaan;
                3. Rancang bangun
                4. Implementasi;
                5. Pengujian kelaikan;
                6. Pemeliharaan; dan
                7. Evaluasi.Siklus bisa menggunakan salah satu frameworkyang sudah ada seperti SDLC, RAD, Waterfall, Agile Development Cycle (SCRUM).',
                'description' => 'Penilaian dilakukan terhadap bukti dukung keterpaduan Pembangunan Aplikasi SPBE yang memenuhi kriteria ruang lingkup proses Pembangunan Aplikasi SPBE dan terdokumentasi secara formal.',
                'score_criteria' => 'Bukti dukung tingkat kematangan dilampirkan berupa dokumen sesuai huruf c. Data Pendukung dapat disampaikan lebih dari 1 (satu) jenis dokumen',
            ],

            16 => [
                'other_name' => 'Tingkat Kematangan Layanan Pusat Data.',
                'detail' => 'a. Pusat Data adalah fasilitas yang digunakan untuk penempatan sistem elektronik dan komponen terkait lainnya untuk keperluan penempatan, penyimpanan dan pengolahan data, dan pemulihan data baik yang dimiliki secara fisik dan non-fisik (cloud).
                b. Layanan Pusat Data adalah penyediaan penyimpanan aplikasi dan data.
                c. Layanan Pusat Data bertujuan untuk menjamin ketersediaan penyimpanan data bagi Instansi Pusat dan Pemerintah Daerah.
                d. Pusat Data Nasional adalah sekumpulan pusat data yang digunakan secara bersama dan bagi pakai oleh Instansi Pusat dan Pemerintah Daerah, dan saling terhubung yang terdiri atas pusat data yang diselenggarakan oleh Instansi Pusat/Pemerintah Daerah dengan memenuhi persyaratan pusat data atau pusat data yang dibangun khusus untuk digunakan secara bersama dan bagi pakai oleh Instansi Pusat dan Pemerintah Daerah',
                'description' => 'Penilaian dilakukan terhadap bukti dukung penerapan Layanan Pusat Data yang memenuhi kriteria ruang lingkup pemanfaatan dan pengoperasian, serta terdokumentasi secara formal',
                'score_criteria' => 'Bukti dukung tingkat kematangan dilampirkan berupa dokumen sesuai huruf b. Data Pendukung dapat disampaikan lebih dari 1 (satu) jenis dokumen.',
            ],

            17 => [
                'other_name' => 'Tingkat Kematangan Layanan Jaringan Intra Instansi Pusat/Pemerintah Daerah.',
                'detail' => 'a. Jaringan Intra adalah jaringan tertutup yang menghubungkan antar simpul jaringan dalam suatu organisasi.
                b. Jaringan Intra Instansi Pusat/Pemerintah Daerah merupakan Jaringan Intra yang diselenggarakan oleh Instansi Pusat/Pemerintah Daerah untuk menghubungkan antar simpul jaringan dalam Instansi Pusat/Pemerintah Daerah, dengan Jaringan Intra Pemerintah dan/atau Jaringan Intra Instansi Pusat/Pemerintah Daerah lain.
                c. Penggunaan Jaringan Intra Instansi Pusat/Pemerintah Daerah bertujuan untuk menjaga keamanan dalam melakukan pengiriman data dan informasi antar simpul jaringan dalam Instansi Pusat/Pemerintah Daerah.
                d. Penyelenggaraan Jaringan Intra Instansi Pusat/Pemerintah Daerah sebagaimana dimaksud, dapat menggunakan jaringan fisik yang dibangun sendiri oleh Instansi Pusat/Pemerintah Daerah dan/atau yang dibangun oleh penyedia jasa layanan jaringan.',
                'description' => 'Penilaian dilakukan terhadap bukti dukung implementasi Jaringan Intra Instansi Pusat/Pemerintah Daerah yang memenuhi kriteria ruang lingkup pemanfaatan, keterhubungan dan akses, serta terdokumentasi secara formal.',
                'score_criteria' => 'Bukti dukung tingkat kematangan dilampirkan berupa dokumen sesuai huruf b. Data Pendukung dapat disampaikan lebih dari 1 (satu) jenis dokumen.',
            ],

            18 => [
                'other_name' => 'Tingkat Kematangan Penggunaan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah',
                'detail' => 'a. Sistem Penghubung Layanan adalah perangkat integrasi/penghubung untuk melakukan pertukaran Layanan SPBE.
                b. Penggunaan Sistem Penghubung Layanan Pemerintah bertujuan untuk memudahkan dalam melakukan integrasi antar Layanan SPBE',
                'description' => 'Penilaian dilakukan terhadap bukti dukung penerapan sistem penghubung layanan Instansi Pusat/Pemerintah Daerah yang memenuhi kriteria ruang lingkup pemanfaatan dan pengoperasian, serta terdokumentasi secara formal',
                'score_criteria' => 'Data dukung Sistem penghubung layanan sesuai huruf a, dapat berupa: daftar API yang menggunakan service bus, dan/atau diagram arsitektur aplikasi. Data Pendukung dapat disampaikan lebih dari 1 (satu) jenis dokumen',
            ],

            19 => [
                'other_name' => 'Tingkat Kematangan Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah.',
                'detail' => 'a. Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah adalah para pejabat dalam tim yang diberi tugas untuk mengendalikan, mengarahkan, dan mengevaluasi SPBE, termasuk didalamnya melaksanakan perumusan kebijakan dan penerapan SPBE di Instansi Pusat dan Pemerintah Daerah masing-masing.
                b. Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah dapat disejajarkan dengan Tim Pengarah TIK, Komite Pengarah TIK, ataupun Steering Committee yang mempunyai tugas seperti dimaksud pada huruf a.
                c. Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah dikoordinasikan oleh Sekretaris Instansi Pusat/Pemerintah Daerah',
                'description' => 'Penilaian dilakukan terhadap bukti dukung pelaksanaan tugas/program kerja dari Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah yang ditetapkan dalam tugas dan fungsi atau rencana kerja/Peta Rencana SPBE, serta terdokumentasi secara formal.',
                'score_criteria' => 'Data bukti dukung dapat berupa: dokumentasi pelaksanaan kegiatan Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah berdasarkan tugas dan fungsi atau rencana kerja/ Sebagai kelengkapan data dukung, dapat disertakan dokumen laporan pelaksanaan, tangkapan layar, foto, dan dokumentasi lainnya terkait Tim Koordinasi SPBE Instansi Pusat/Pemerintah Daerah. Data Pendukung dapat disampaikan lebih dari 1 (satu) jenis dokumen',
            ],

            20 =>  [
                'other_name' => 'Tingkat Kematangan Kolaborasi Penerapan SPBE.',
                'detail' => 'a. Forum Kolaborasi SPBE merupakan wadah informal untuk pertukaran informasi dan peningkatan kapasitas pelaksanaan SPBE bagi Instansi Pusat, Pemerintah Daerah, perguruan tinggi, lembaga penelitian, pelaku usaha, dan masyarakat.
                b. Forum Kolaborasi SPBE dapat dimanfaatkan untuk antara lain:
                1. penyampaian ide/gagasan SPBE;
                2. pengembangan infrastruktur dan Aplikasi SPBE dari kontribusi komunitas TIK;
                3. peningkatan kompetensi teknis;
                4. perbaikan kualitas Layanan SPBE;
                5. penelitian dan kajian pengembangan SPBE; dan
                6. penyelesaian masalah untuk kepentingan bersama.
                c. Forum Kolaborasi SPBE dapat dilakukan dalam bentuk pertemuan informal dan pertemuan virtual.',
                'description' => 'Penilaian dilakukan terhadap bukti dukung pelaksanaan Forum Kolaborasi SPBE Instansi Pusat/Pemerintah Daerah yang memenuhi kriteria ruang lingkup Kolaborasi Penerapan SPBE, serta terdokumentasi secara formal.',
                'score_criteria' => 'Bukti dukung tingkat kematangan dilampirkan berupa dokumentasi hasil pelaksanaan Forum Kolaborasi SPBE Instansi Pusat/Pemerintah Daerah sesuai huruf c. Data Pendukung dapat disampaikan lebih dari 1 (satu) jenis dokumen.',
            ],

            21 => [
                'other_name' => 'Tingkat Kematangan Penerapan Manajemen Risiko SPBE.',
                'detail' => 'a. Manajemen Risiko SPBE adalah pendekatan sistematis yang meliputi proses, pengukuran, struktur, dan budaya untuk menentukan tindakan terbaik terkait Risiko SPBE;
                b. Risiko SPBE adalah peluang terjadinya suatu peristiwa yang akan mempengaruhi keberhasilan terhadap pencapaian tujuan penerapan SPBE;
                c. Manajemen Risiko bertujuan untuk menjamin keberlangsungan SPBE dengan meminimalkan dampak risiko dalam SPBE;
                d. Instansi Pusat dan Pemerintah Daerah menerapkan manajemen risiko SPBE berdasarkan pedoman Manajemen Risiko SPBE. ',
                'description' => 'Penilaian dilakukan terhadap bukti dukung penerapan manajemen risiko Instansi Pusat/Pemerintah Daerah yang memenuhi kriteria ruang lingkup, serta terdokumentasi secara formal. ',
                'score_criteria' => 'Bukti dukung tingkat kematangan dilampirkan berupa dokumentasi pemenuhan sesuai huruf d. Data Pendukung dapat disampaikan lebih dari 1 (satu) jenis dokumen.',
            ],

            22 => [
                'other_name' => 'Tingkat Kematangan Penerapan Manajemen Keamanan Informasi.',
                'detail' => 'a. Manajemen Keamanan Informasi dilakukan melalui serangkaian proses yang meliputi penetapan ruang lingkup, penetapan penanggung jawab, perencanaan, dukungan pengoperasian, evaluasi kinerja, dan perbaikan berkelanjutan terhadap Keamanan Informasi dalam SPBE.
                b. Manajemen Keamanan Informasi bertujuan untuk menjamin keberlangsungan SPBE dengan meminimalkan dampak risiko Keamanan Informasi.
                c. Penerapan Keamanan Informasi berlandaskanpenjaminan kerahasiaan, keutuhan, ketersediaan, keaslian, dan kenirsangkalan (non-repudiation) sumber daya terkait data dan informasi, Infrastruktur SPBE, dan aplikasi.',
                'description' => 'Penilaian dilakukan terhadap bukti dukung penerapan manajemen Keamanan Informasi Instansi Pusat/Pemerintah Daerah yang memenuhi kriteria ruang lingkup, serta terdokumentasi secara formal. ',
                'score_criteria' => ' Bukti dukung tingkat kematangan dilampirkan berupa dokumentasi penerapan/pemenuhan sesuai huruf a. Data Pendukung dapat disampaikan lebih dari 1 (satu) jenis dokumen.',
            ],

            23 => [
                'other_name' => 'Tingkat Kematangan Penerapan Manajemen Data',
                'detail' => 'a. Manajemen Data dilakukan melalui serangkaian proses pengelolaan arsitektur data,  data induk,data referensi, basis data, kualitas data dan interoperabilitas data. 
                b. Manajemen Data bertujuan untuk menjamin terwujudnya data yang akurat, mutakhir, terintegrasi, dan dapat diakses sebagai dasar perencanaan, pelaksanaan, evaluasi, dan pengendalian pembangunan nasional.',
                'description' => 'Penilaian dilakukan terhadap bukti dukung penerapan Manajemen Data Instansi Pusat/Pemerintah Daerah yang memenuhi kriteria ruang lingkup, serta terdokumentasi secara formal.',
                'score_criteria' => 'Bukti dukung tingkat kematangan dilampirkan berupa dokumentasi penerapan sesuai huruf a. Data Pendukung dapat disampaikan lebih dari 1 (satu) jenis dokumen.',
            ],

            24 => [
                'other_name' => 'Tingkat Kematangan Penerapan Manajemen Aset TIK.',
                'detail' => 'a. Manajemen aset teknologi informasi dan komunikasi dilakukan melalui serangkaian proses perencanaan, pengadaan, pengelolaan, dan penghapusan perangkat keras dan perangkat lunak yang digunakan dalam SPBE.
                b. Manajemen aset teknologi informasi dan komunikasi bertujuan untuk menjamin ketersediaan dan optimalisasi pemanfaatan aset teknologi informasi dan komunikasi dalam SPBE.
                c. Aset TIK mencakup perangkat lunak, perangkat keras, data dan informasi, infrastruktur, SDM, lisensi, data, SOP, outsource services, dan IT asset register.',
                'description' => 'Penilaian dilakukan terhadap bukti dukung penerapan Manajemen Aset TIK Instansi Pusat/Pemerintah Daerah yang memenuhi kriteria ruang lingkup, serta terdokumentasi secara formal.',
                'score_criteria' => 'Bukti dukung tingkat kematangan dilampirkan berupa dokumentasi penerapan sesuai huruf c, yaitu Dokumen perencanaan pelaksanaan Manajemen Aset TIK, Dokumen pedoman pelaksanaan Manajemen Aset TIK, Bukti pelaksanaan Manajemen Aset TIK, dan Bukti Evaluasi Pelaksanaan Manajemen Aset TIK.',
            ],

            25 => [
                'other_name' => 'Tingkat Kematangan Kompetensi Sumber Daya Manusia',
                'detail' => 'a. Pemenuhan kompetensi Sumber Daya Manusia SPBE bertujuan untuk menjamin keberlangsungan dan peningkatan mutu layanan dalam SPBE.
                b. Pemenuhan kompetensi Sumber Daya Manusia SPBE dilakukan melalui perencanaan, peningkatan kapasitas, pendayagunaan, dan penilaian kompetensi (kesesuaian antara persyaratan kompetensi dengan pemenuhan kompetensi) Sumber Daya Manusia dalam SPBE. 
                c. Kompetensi Sumber Daya Manusia SPBE meliputi 6 (enam) kompetensi, yaitu bidang Proses Bisnis Pemerintahan, Arsitektur SPBE, Data dan Informasi, Keamanan SPBE, Aplikasi SPBE, dan Infrastruktur SPBE. ',
                'description' => 'Penilaian dilakukan terhadap bukti dukung pemenuhan 6 (enam) kompetensi SDM SPBE Instansi Pusat/Pemerintah Daerah yang terdokumentasi secara formal.',
                'score_criteria' => 'Bukti dukung tingkat kematangan dilampirkan berupa dokumentasi pemenuhan sesuai huruf b, yaitu Dokumen perencanaan pemenuhan Kompetensi SDM SPBE, Bukti pemenuhan Kompetensi SDM SPBE, dan Bukti Evaluasi pemenuhan Kompetensi SDM SPBE.',
            ],

            26 => [
                'other_name' => 'Tingkat Kematangan Penerapan Manajemen Pengetahuan.',
                'detail' => 'Manajemen Pengetahuan adalah proses yang dilakukan untuk mendokumentasi pengalaman dan pengetahuan dalam perencanaan, implementasi, dan evaluasi SPBE guna meningkatkan kualitas Layanan SPBE dan mendukung proses pengambilan keputusan dalam SPBE.',
                'description' => ' Penilaian dilakukan terhadap bukti dukung penerapan Manajemen Pengetahuan SPBE Instansi Pusat/Pemerintah Daerah yang memenuhi kriteria ruang lingkup, serta terdokumentasi secara formal.',
                'score_criteria' => ' Bukti dukung tingkat kematangan dilampirkan berupa dokumentasi penerapan sesuai huruf a, yaitu Dokumen perencanaan pelaksanaan Manajemen Pengetahuan SPBE, Dokumen pedoman pelaksanaan Manajemen Pengetahuan SPBE, Bukti pelaksanaan Manajemen Pengetahuan SPBE, dan Bukti Evaluasi Pelaksanaan Manajemen Pengetahuan SPBE.',
            ],

            27 => [
                'other_name' => 'Tingkat Kematangan Penerapan Manajemen Perubahan.',
                'detail' => 'a. Manajemen Perubahan dilakukan melalui serangkaian proses perencanaan, analisis, pengembangan, implementasi, pemantauan dan evaluasi terhadap perubahan SPBE. 
                b. Manajemen Perubahan bertujuan untuk menjamin keberlangsungan dan meningkatkan kualitas Layanan SPBE melalui pengendalian perubahan yang terjadi dalam SPBE. 
                c. Lingkup Manajemen Perubahan SPBE:  
                1. Perubahan Aplikasi; 
                2. Perubahan Perangkat Keras; 
                3. Perubahan Perangkat Lunak; 
                4. Perubahan Infrastruktur; 
                5. Perubahan Proses Bisnis; 
                6. Perubahan Lingkungan Organisasi; 
                7. Perubahan Layanan; 
                8. Perubahan Data; 
                9. Perubahan Keamanan; 
                10. Perubahan Arsitektur.',
                'description' => 'Penilaian dilakukan terhadap bukti dukung penerapan Manajemen Perubahan SPBE Instansi Pusat/Pemerintah Daerah yang memenuhi kriteria ruang lingkup, serta terdokumentasi secara formal.',
                'score_criteria' => 'Bukti dukung tingkat kematangan dilampirkan berupa dokumentasi penerapan sesuai huruf a, yaitu Dokumen perencanaan pelaksanaan Manajemen Perubahan SPBE, Dokumen pedoman pelaksanaan Manajemen Perubahan SPBE, Bukti pelaksanaan Manajemen Perubahan SPBE, dan Bukti Evaluasi Pelaksanaan Manajemen Perubahan SPBE.',
            ],
            28 => [
                'other_name' => 'Tingkat Kematangan Penerapan Manajemen Layanan SPBE.',
                'detail' => 'a. Manajemen Layanan merupakan serangkaian proses pelayanan kepada pengguna, pengoperasian layanan, dan pengelolaan Aplikasi SPBE agar Layanan SPBE dapat berjalan berkesinambungan dan berkualitas.
                b. Manajemen Layanan bertujuan untuk menjamin keberlangsungan dan meningkatkan kualitas Layanan SPBE kepada Pengguna SPBE. 
                c. Penyelenggaraan Manajemen Layanan SPBE ditujukan untuk memberikan dukungan terhadap layanan publik berbasis elektronik dan layanan administrasi pemerintahan berbasis elektronik agar Layanan SPBE tersebut dapat berjalan secara berkesinambungan, berkualitas, responsif, dan adaptif. 
                d. Penyelenggaraan Manajemen Layanan dapat diwujudkan dengan membangun portal pusat layanan untuk menjalankan proses: 
                1. pengelolaan keluhan, gangguan, masalah, permintaan, dan perubahan Layanan SPBE dari pengguna; 
                2. pendayagunaan dan pemeliharaan Infrastruktur SPBE dan Aplikasi SPBE; dan 
                3. pembangunan dan pengembangan aplikasi yang berpedoman pada metodologi pembangunan dan pengembangan aplikasi.',
                'description' => 'Penilaian dilakukan terhadap bukti dukung penerapan Manajemen Layanan SPBE Instansi Pusat/Pemerintah Daerah yang memenuhi kriteria ruang lingkup, serta terdokumentasi secara formal.',
                'score_criteria' => 'Bukti dukung tingkat kematangan dilampirkan berupa dokumentasi penerapan sesuai huruf a, yaitu Dokumen perencanaan pelaksanaan Manajemen Layanan SPBE, Dokumen pedoman pelaksanaan Manajemen Layanan SPBE, Bukti pelaksanaan Manajemen Layanan SPBE, dan Bukti Evaluasi Pelaksanaan Manajemen Layanan SPBE.',
            ],
            29 => [
                'other_name' => 'Tingkat Kematangan Pelaksanaan Audit Infrastruktur SPBE.',
                'detail' => 'a. Audit Infrastruktur SPBE Instansi Pusat dan Pemerintah Daerah dilaksanakan berdasarkan standar dan tata cara pelaksanaan Audit Infrastruktur SPBE. 
                b. Objek Audit Infrastruktur SPBE Instansi Pusat/Pemerintah Daerah adalah infrastruktur SPBE yang dimiliki oleh Instansi Pusat/Pemerintah Daerah yang terdiri atas jaringan intra Instansi Pusat/Pemerintah Daerah dan Sistem Penghubung Layanan Instansi Pusat/Pemerintah Daerah. Audit Infrastruktur SPBE terdiri dari  pemeriksaan hal pokok teknis antara lain:  
                1. penerapan tata  kelola 
                2.   penerapan manajemen infrastruktur SPBE; 
                3. Fungsional infrastruktur SPBE; 
                4. kinerja yang dihasilkan infrastruktur SPBE; dan 
                5. aspek infrastruktur SPBE lainnya.',
                'description' => 'Penilaian dilakukan terhadap bukti dukung pelaksanaan Audit Infrastruktur SPBE Instansi Pusat/Pemerintah Daerah yang sesuai dengan pedoman audit TIK..',
                'score_criteria' => 'Bukti dukung tingkat kematangan dilampirkan berupa dokumentasi penerapan Audit Infrastruktur SPBE sesuai huruf a. Bukti dukung yang memenuhi kriteria penilaian merupakan bukti dukung pelaksanaan Audit Infrastruktur SPBE yang dilakukan dalam kurun waktu 2 (dua) tahun terakhir.',
            ],
            30 => [
                'other_name' => 'Tingkat Kematangan Pelaksanaan Audit Aplikasi SPBE.',
                'detail' => 'a. Audit Aplikasi SPBE Instansi Pusat dan Pemerintah Daerah dilaksanakan berdasarkan standar dan tata cara pelaksanaan Audit Aplikasi SPBE. 
                b. Audit Aplikasi SPBE terdiri atas:  
                1. Audit Aplikasi Umum2. Audit Aplikasi Khusus c. Standar/pedoman audit dapat berupa standar internal Instansi Pusat/Pemerintah Daerah, standar/pedoman nasional, atau standar/pedoman internasional.',
                'description' => 'Penilaian dilakukan terhadap bukti dukung pelaksanaan Audit Aplikasi SPBE Instansi Pusat/Pemerintah Daerah yang memenuhi kriteria ruang lingkup, serta terdokumentasi secara formal. Bukti dukung yang memenuhi kriteria penilaian merupakan bukti dukung pelaksanaan Audit Aplikasi SPBE yang dilakukan dalam kurun waktu 2 (dua) tahun terakhir.',
                'score_criteria' => 'Bukti dukung tingkat kematangan dilampirkan berupa dokumentasi penerapan Audit Aplikasi sesuai huruf a dan b.',
            ],

            31 => [
                'other_name' => 'Tingkat Kematangan Pelaksanaan Audit Keamanan SPBE',
                'detail' => ' a. Audit Keamanan SPBE Instansi Pusat dan  Pemerintah Daerah dilaksanakan berdasarkan standar dan tata cara pelaksanaan Audit Keamanan SPBE. 
                b. Audit Keamanan SPBE terdiri atas: 
                1. Audit Keamanan Aplikasi; dan 
                2. Audit Keamanan Infrastruktur. 
                c. Standar/pedoman audit dapat berupa standar internal Instansi Pusat/Pemerintah Daerah, standar/pedoman nasional, atau standar/pedoman internasional. ',
                'description' => 'Penilaian dilakukan terhadap bukti dukung pelaksanaan Audit Keamanan SPBE Instansi Pusat/Pemerintah Daerah yang memenuhi kriteria ruang lingkup, serta terdokumentasi secara formal.Bukti dukung yang memenuhi kriteria penilaian merupakan bukti dukung pelaksanaan Audit Keamanan SPBE yang dilakukan dalam kurun waktu 2 (dua) tahun terakhir. ',
                'score_criteria' => 'Bukti dukung tingkat kematangan dilampirkan berupa dokumentasi penerapan Audit Keamanan sesuai huruf a dan b.',
            ],

            32 => [
                'other_name' => 'Tingkat Kematangan Layanan Perencanaan',
                'detail' => 'a. Perencanaan adalah serangkaian proses untuk  menghasilkan pengelolaan perencanaan yang efektif, efisien, dan akuntabel. 
                b. Layanan Perencanaan Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan perencanaan Instansi Pusat dan/atau Pemerintah Daerah. ',
                'description' => 'Penilaian dilakukan terhadap kapabilitas fungsi/ kemampuan teknis yang dapat diberikan sistem aplikasi/layanan perencanaan berbasis elektronik kepada pengguna. ',
                'score_criteria' => 'Data pendukung berupa dokumentasi penggunaan layanan/sistem aplikasi, screenshot layanan/sistem aplikasi, URL/alamat jika dapat diakses secara online (user dan password dummy disampaikan jika ada), video penggunaan aplikasi, daftar layanan dan fitur sistem aplikasi, arsitektur aplikasi, pengelolaan repositori API, unit kerja yang menangani manajemen layanan, dan bukti terkait lainnya. Data Pendukung dapat disampaikan lebih dari 1 (satu) jenis dokumen.',
            ],

            33 => [
                'other_name' => 'Tingkat Kematangan Layanan Penganggaran',
                'detail' => 'a. Penganggaran adalah serangkaian proses untuk  menghasilkan pengelolaan penganggaran yang efektif, efisien, dan akuntabel. 
                b. Layanan Penganggaran Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan penganggaran Instansi Pusat dan/atau Pemerintah Daerah. ',
                'description' => 'Penilaian dilakukan terhadap kapabilitas fungsi/kemampuan teknis yang dapat diberikan sistem aplikasi/layanan penganggaran berbasis elektronik kepada pengguna. ',
                'score_criteria' => 'Data pendukung berupa dokumentasi penggunaan layanan/sistem aplikasi, screenshot layanan/sistem aplikasi, URL/alamat jika dapat diakses secara online (user dan password dummy disampaikan jika ada), video penggunaan aplikasi, daftar layanan dan fitur sistem aplikasi, arsitektur aplikasi, pengelolaan repositori API, unit kerja yang menangani manajemen layanan, dan bukti terkait lainnya. Data Pendukung dapat disampaikan lebih dari 1 (satu) jenis dokumen. ',
            ],

            34 => [
                'other_name' => 'Tingkat Kematangan Layanan Keuangan',
                'detail' => 'a. Keuangan adalah serangkaian proses untuk  menghasilkan pengelolaan keuangan yang efektif, efisien, dan akuntabel. 
                b. Layanan Keuangan Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan keuangan Instansi Pusat dan/atau Pemerintah Daerah. ',
                'description' => 'Penilaian dilakukan terhadap kapabilitas fungsi/kemampuan teknis yang dapat diberikan sistem aplikasi/layanan keuangan berbasis elektronik kepada pengguna. ',
                'score_criteria' => 'Data pendukung berupa dokumentasi penggunaan layanan/sistem aplikasi, screenshot layanan/sistem aplikasi, URL/alamat jika dapat diakses secara online (user dan password dummy disampaikan jika ada), video penggunaan aplikasi, daftar layanan dan fitur sistem aplikasi, arsitektur aplikasi, pengelolaan repositori API, unit kerja yang menangani manajemen layanan, dan bukti terkait lainnya. Data Pendukung dapat disampaikan lebih dari 1 (satu) jenis dokumen. ',
            ],

            35 => [
                'other_name' => 'Tingkat Kematangan Layanan Pengadaan Barang dan Jasa',
                'detail' => ' a. Pengadaan Barang/Jasa adalah serangkaian proses untuk menghasilkan pengelolaan Pengadaan barang/jasa yang efektif, efisien, dan akuntabel.
                b. Layanan Pengadaan Barang/Jasa Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan pengadaan barang/jasa Instansi Pusat dan/atau Pemerintah Daerah. 
                c. Katalog Elektronik Sektoral adalah Katalog Elektronik yang disusun dan dikelola olehKementerian/Lembaga.
                d. Katalog Elektronik Lokal adalah Katalog Elektronik yang disusun dan dikelola oleh Pemerintah Daerah.  ',
                'description' => 'Penilaian dilakukan terhadap kapabilitas fungsi/kemampuan teknis yang dapat diberikan sistem aplikasi/layanan pengadaan barang dan jasa berbasis elektronik kepada pengguna. ',
                'score_criteria' => 'Data pendukung berupa dokumentasi penggunaan layanan/sistem aplikasi, screenshot layanan/sistem aplikasi, URL/alamat jika dapat diakses secara online (user dan password dummy disampaikan jika ada), video penggunaan aplikasi, daftar layanan dan fitur sistem aplikasi, arsitektur aplikasi, pengelolaan repositori API, unit kerja yang menangani manajemen layanan, dan bukti terkait lainnya. Data Pendukung dapat disampaikan lebih dari 1 (satu) jenis dokumen. ',
            ],

            36 => [
                'other_name' => 'Tingkat Kematangan Layanan Kepegawaian',
                'detail' => ' a. Kepegawaian adalah serangkaian proses untuk menghasilkan pengelolaan kepegawaian yang efektif, efisien, dan akuntabel. 
                b. Layanan Kepegawaian Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan kepegawaian Instansi Pusat dan/atau Pemerintah Daerah. ',
                'description' => 'Penilaian dilakukan terhadap kapabilitas fungsi/kemampuan teknis yang dapat diberikan sistem aplikasi/layanan kepegawaian. ',
                'score_criteria' => 'Data pendukung berupa dokumentasi penggunaan layanan/sistem aplikasi, screenshot layanan/sistem aplikasi, URL/alamat jika dapat diakses secara online (user dan password dummy disampaikan jika ada), video penggunaan aplikasi, daftar layanan dan fitur sistem aplikasi, arsitektur aplikasi, pengelolaan repositori API, unit kerja yang menangani manajemen layanan, dan bukti terkait lainnya. Data Pendukung dapat disampaikan lebih dari 1 (satu) jenis dokumen. ',
            ],

            37 => [
                'other_name' => 'Tingkat Kematangan Layanan Kearsipan Dinamis',
                'detail' => 'a. Kearsipan adalah serangkaian proses untuk  menghasilkan pengelolaan kearsipan yang efektif, efisien, dan akuntabel.
                b. Arsip terbagi 2, yaitu Arsip Dinamis dan Arsip Statis. 
                c. Arsip dinamis merupakan dokumen/naskah dinas yang masih digunakan. 
                d. Arsip statis merupakan dokumen/naskah dinas yang telah melewati masa retensinya. 
                e. Layanan Kearsipan Dinamis Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan kearsipan dinamis Instansi Pusat dan/atau Pemerintah Daerah. ',
                'description' => 'Penilaian dilakukan terhadap kapabilitas fungsi/kemampuan teknis yang dapat diberikan sistem aplikasi/layanan kearsipan. ',
                'score_criteria' => 'Data pendukung berupa dokumentasi penggunaanlayanan/sistem aplikasi, screenshot layanan/sistem aplikasi, URL/alamat jika dapat diakses secara online (user dan password dummy disampaikan jika ada), video penggunaan aplikasi, daftar layanan dan fitur sistem aplikasi, arsitektur aplikasi, pengelolaan repositori API, unit kerja yang menangani manajemen layanan, dan bukti terkait lainnya. Data Pendukung dapat disampaikan lebih dari 1 (satu) jenis dokumen.',
            ],

            38 => [
                'other_name' => 'Tingkat Kematangan Layanan Pengelolaan Barang Milik Negara/Daerah',
                'detail' => ' a. Pengelolaan Barang Milik Negara/Daerah (BMN/BMD) adalah serangkaian proses untuk menghasilkan pengelolaan BMN yang efektif, efisien, dan akuntabel. 
                b. Layanan Pengelolaan BMN/BMD Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan BMNInstansi Pusat dan/atau BMD Pemerintah Daerah. ',
                'description' => 'Penilaian dilakukan terhadap kapabilitas fungsi/kemampuan teknis yang dapat diberikan sistem aplikasi/layanan pengelolaan barang milik Negara/Daerah. ',
                'score_criteria' => 'Data pendukung berupa dokumentasi penggunaan layanan/sistem aplikasi, screenshot layanan/sistem aplikasi, URL/alamat jika dapat diakses secara online (user dan password dummy disampaikan jika ada), video penggunaan aplikasi, daftar layanan dan fitur sistem aplikasi, arsitektur aplikasi, pengelolaan repositori API, unit kerja yang menangani manajemen layanan, dan bukti terkait lainnya. Data Pendukung dapat disampaikan lebih dari 1 (satu) jenis dokumen. ',
            ],

            39 => [
                'other_name' => 'Tingkat Kematangan Layanan Pengawasan Internal terkait Pemerintah',
                'detail' => ' a. Pengawasan Internal adalah serangkaian proses untuk menghasilkan pengelolaan pengawasan internal yang efektif, efisien, dan akuntabel. 
                b. Layanan Pengawasan Internal Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan Pengawasan Internal Instansi Pusat dan/atau Pemerintah Daerah. ',
                'description' => 'Penilaian dilakukan terhadap kapabilitas fungsi/kemampuan teknis yang dapat diberikan sistem aplikasi/layanan pengawasan internal terkait pemerintah.',
                'score_criteria' => 'Data pendukung berupa dokumentasi penggunaan layanan/sistem aplikasi, screenshot layanan/sistem aplikasi, URL/alamat jika dapat diakses secara online (user dan password dummy disampaikan jika ada), video penggunaan aplikasi, daftar layanan dan fitur sistem aplikasi, arsitektur aplikasi, pengelolaan repositori API, unit kerja yang menangani manajemen layanan, dan bukti terkait lainnya. Data Pendukung dapat disampaikan lebih dari 1 (satu) jenis dokumen. ',
            ],

            40 => [
                'other_name' => 'Tingkat Kematangan Layanan Akuntabilitas Kinerja Organisasi',
                'detail' => 'a. Akuntabilitas Kinerja Instansi Pusat/Pemerintah  Daerah adalah serangkaian proses untuk menghasilkan pengelolaan Akuntabilitas Kinerja Instansi Pusat/Pemerintah Daerah yang efektif, efisien, dan akuntabel. 
                b. Layanan Akuntabilitas Kinerja Instansi Pusat/Pemerintah Daerah Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan Akuntabilitas Kinerja Instansi Pusat/Pemerintah Daerah Instansi Pusat dan/atau Pemerintah Daerah. ',
                'description' => 'Penilaian dilakukan terhadap kapabilitas fungsi/kemampuan teknis yang dapat diberikan sistem aplikasi/layanan akuntabilitas kinerja organisasi. ',
                'score_criteria' => 'Data pendukung berupa dokumentasi penggunaan layanan/sistem aplikasi, screenshot layanan/sistem aplikasi, URL/alamat jika dapat diakses secara online (user dan password dummy disampaikan jika ada), video penggunaan aplikasi, daftar layanan dan fitur sistem aplikasi, arsitektur aplikasi, pengelolaan repositori API, unit kerja yang menangani manajemen layanan, dan bukti terkait lainnya. Data Pendukung dapat disampaikan lebih dari 1 (satu) jenis dokumen.',
            ],

            41 => [
                'other_name' => 'Tingkat Kematangan Layanan Kinerja Pegawai.',
                'detail' => 'a. Kinerja Pegawai adalah serangkaian proses untuk menghasilkan pengelolaan kinerja pegawai Instansi Pusat/Pemerintah Daerah yang efektif, efisien, dan akuntabel.
                b. Layanan Kinerja Pegawai Instansi Pusat/Pemerintah Daerah Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan kinerja pegawai di Instansi Pusat dan/atau Pemerintah Daerah.',
                'description' => 'Penilaian dilakukan terhadap kapabilitas fungsi/ kemampuan teknis yang dapat diberikan sistem aplikasi/layanan kinerja pegawai.',
                'score_criteria' => 'Data pendukung berupa dokumentasi penggunaan layanan/sistem aplikasi, screenshot layanan/sistem aplikasi, URL/alamat jika dapat diakses secara online (user dan password dummy disampaikan jika ada), video penggunaan aplikasi, daftar layanan dan fitur sistem aplikasi, arsitektur aplikasi, pengelolaan repositori API, unit kerja yang menangani manajemen layanan, dan bukti terkait lainnya. Data Pendukung dapat disampaikan lebih dari 1 (satu) jenis dokumen.',
            ],

            42 => [
                'other_name' => 'Tingkat Kematangan Layanan Pengaduan Pelayanan Publik.',
                'detail' => 'a. Pengaduan Pelayanan Publik adalah serangkaian proses untuk menghasilkan pengelolaan pengaduan pelayanan publik Instansi Pusat/Pemerintah Daerah yang efektif, efisien, dan akuntabel.
                b. Layanan Pengaduan Pelayanan Publik Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan pengaduan pelayanan publik di Instansi Pusat dan/atau Pemerintah Daerah.',
                'description' => 'Penilaian dilakukan terhadap kapabilitas fungsi/ kemampuan teknis yang dapat diberikan sistem aplikasi/layanan pengaduan publik.',
                'score_criteria' => 'Data pendukung berupa dokumentasi penggunaan layanan/sistem aplikasi, screenshot layanan/sistem aplikasi, URL/alamat jika dapat diakses secara online (user dan password dummy disampaikan jika ada), video penggunaan aplikasi, daftar layanan dan fitur sistem aplikasi, arsitektur aplikasi, pengelolaan repositori API, unit kerja yang menangani manajemen layanan, dan bukti terkait lainnya. Data Pendukung dapat disampaikan lebih dari 1 (satu) jenis dokumen.',
            ],

            43 => [
                'other_name' => 'Tingkat Kematangan Layanan Data Terbuka.',
                'detail' => 'a. Layanan Data Terbuka merupakan konsep berbagi pakai data sesuai dengan ketentuan Satu Data Indonesia. 
                b. Satu Data Indonesia adalah kebijakan tata kelola data pemerintah untuk menghasilkan data akurat, mutakhir, terpadu, dan dapat dipertanggungjawabkan, serta mudah diakses dan dibagipakaikan antar Instansi Pusat dan Pemerintah Daerah melalui pemenuhan standardata, metadata, interoperabilitas data, dan menggunakan kode referensi dan data induk.
                c. Layanan Data Terbuka Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan satu atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan data Instansi Pusat/Pemerintah Daerah dengan memanfaatkan portal Satu Data Indonesia.',
                'description' => 'Penilaian dilakukan terhadap kapabilitas fungsi/ kemampuan teknis/pemanfaatan yang dapat diberikan sistem aplikasi/layanan data terbuka.',
                'score_criteria' => 'Data pendukung berupa dokumentasi penggunaan layanan/sistem aplikasi, screenshot layanan/sistem aplikasi, URL/alamat jika dapat diakses secara online (user dan password dummy disampaikan jika ada),video penggunaan aplikasi, daftar layanan dan fitur sistem aplikasi, arsitektur aplikasi, pengelolaan repositori API, unit kerja yang menangani manajemen layanan, dan bukti terkait lainnya. Data Pendukung dapat disampaikan lebih dari 1 (satu) jenis dokumen.',
            ],

            44 => [
                'other_name' => 'Tingkat Kematangan Layanan Jaringan Dokumentasi dan Informasi Hukum (JDIH).',
                'detail' => 'a. Jaringan Dokumentasi dan Informasi Hukum adalah serangkaian proses untuk menghasilkan pengelolaan jaringan dokumentasi dan informasi hukum Instansi Pusat/Pemerintah Daerah yang efektif, efisien, dan akuntabel. 
                b. Layanan Jaringan Dokumentasi dan Informasi Hukum Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan jaringan dokumentasi dan informasi hukum Instansi Pusat/Pemerintah Daerah Instansi Pusat dan/atau Pemerintah Daerah.',
                'description' => 'Penilaian dilakukan terhadap kapabilitas fungsi/ kemampuan teknis yang dapat diberikan sistem aplikasi/layanan jaringan dokumentasi dan informasi hukum.',
                'score_criteria' => 'Data pendukung berupa dokumentasi penggunaan layanan/sistem aplikasi, screenshot layanan/sistem aplikasi, URL/alamat jika dapat diakses secara online (user dan password dummy disampaikan jika ada), video penggunaan aplikasi, daftar layanan dan fitur sistem aplikasi, arsitektur aplikasi, pengelolaan repositori API, unit kerja yang menangani manajemen layanan, dan bukti terkait lainnya. Data Pendukung dapat disampaikan lebih dari 1 (satu) jenis dokumen.',
            ],

            45 => [
                'other_name' => 'Tingkat Kematangan Layanan Publik Sektoral 1.',
                'detail' => 'a. Layanan Publik Sektor adalah serangkaian proses untuk menghasilkan pengelolaan tugas dan fungsi sektoral Instansi Pusat/Pemerintah Daerah yang efektif, efisien, dan akuntabel. 
                b. Yang dimaksud layanan publik sektoral pada indikator ini adalah berupa layanan yang bersifat Government to Citizen (G to C), Government to Business (G to B), maupun Governemt to Government (G to G) sesuai dengan tugas pokok dan fungsi Instansi Pusat/Pemerintah Daerah. 
                c. Layanan Publik Sektor Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan Layanan Publik Sektoral Instansi Pusat/Pemerintah Daerah Instansi Pusat dan/atau Pemerintah Daerah. 
                d. Layanan Publik Sektor yang dimaksud merupakan layanan sektoral selain pada indikator 32 – 44.',
                'description' => 'Penilaian dilakukan terhadap kapabilitas fungsi/ kemampuan teknis yang dapat diberikan sistem aplikasi/layanan publik sektoral yang dimiliki.',
                'score_criteria' => 'Data pendukung berupa dokumentasi penggunaan layanan/sistem aplikasi, screenshot layanan/sistem aplikasi, URL/alamat jika dapat diakses secara online (user dan password dummy disampaikan jika ada), video penggunaan aplikasi, daftar layanan dan fitur sistem aplikasi, arsitektur aplikasi, pengelolaan repositori API, unit kerja yang menangani manajemen layanan, dan bukti terkait lainnya. Data Pendukung dapat disampaikan lebih dari 1 (satu) jenis dokumen.',
            ],

            46 => [
                'other_name' => 'Tingkat Kematangan Layanan Publik Sektoral 2.',
                'detail' => 'a. Layanan Publik Sektor adalah serangkaian proses untuk menghasilkan pengelolaan tugas dan fungsi sektoral Instansi Pusat/Pemerintah Daerah yang efektif, efisien, dan akuntabel. 
                b. Yang dimaksud layanan publik sektoral pada indikator ini adalah berupa layanan yang bersifat Government to Citizen (G to C), Government to Business (G to B), maupun Governemt to Government (G to G) sesuai dengan tugas pokok dan fungsi Instansi Pusat/Pemerintah Daerah. 
                c. Layanan Publik Sektor Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan Layanan Publik Sektoral Instansi Pusat/Pemerintah DaerahInstansi Pusat dan/atau Pemerintah Daerah. 
                d. Layanan Publik Sektor yang dimaksud merupakan layanan sektoral selain pada indikator 32 – 44.',
                'description' => 'Penilaian dilakukan terhadap kapabilitas fungsi/ kemampuan teknis yang dapat diberikan sistem aplikasi/layanan publik sektoral yang dimiliki.',
                'score_criteria' => 'Data pendukung berupa dokumentasi penggunaan layanan/sistem aplikasi, screenshot layanan/sistem aplikasi, URL/alamat jika dapat diakses secara online (user dan password dummy disampaikan jika ada),video penggunaan aplikasi, daftar layanan dan fitur sistem aplikasi, arsitektur aplikasi, pengelolaan repositori API, unit kerja yang menangani manajemen layanan, dan bukti terkait lainnya. Data Pendukung dapat disampaikan lebih dari 1 (satu) jenis dokumen.',
            ],

            47 => [
                'other_name' => 'Tingkat Kematangan Layanan Publik Sektoral 3.',
                'detail' => 'a. Layanan Publik Sektor adalah serangkaian proses untuk menghasilkan pengelolaan tugas dan fungsi sektoral Instansi Pusat/Pemerintah Daerah yang efektif, efisien, dan akuntabel. 
                b. Yang dimaksud layanan publik sektoral pada indikator ini adalah berupa layanan yang bersifat Government to Citizen (G to C), Government to Business (G to B), maupun Governemt to Government (G to G) sesuai dengan tugas pokok dan fungsi Instansi Pusat/Pemerintah Daerah. 
                c. Layanan Publik Sektor Berbasis Elektronik yang dimaksud merupakan keluaran yang dihasilkan 1 (satu) atau lebih aplikasi yang memberikan nilai manfaat dalam pengelolaan Layanan Publik Sektoral Instansi Pusat/Pemerintah DaerahInstansi Pusat dan/atau Pemerintah Daerah. 
                d. Layanan Publik Sektor yang dimaksud merupakan layanan sektoral selain pada indikator 32 – 44.',
                'description' => 'Penilaian dilakukan terhadap kapabilitas fungsi/kemampuan teknis yang dapat diberikan sistem aplikasi/layanan publik sektoral yang dimiliki.',
                'score_criteria' => 'Data pendukung berupa dokumentasi penggunaan layanan/sistem aplikasi, screenshot layanan/sistem aplikasi, URL/alamat jika dapat diakses secara online (user dan password dummy disampaikan jika ada), video penggunaan aplikasi, daftar layanan dan fitur sistem aplikasi, arsitektur aplikasi, pengelolaan repositori API, unit kerja yang menangani manajemen layanan, dan bukti terkait lainnya. Data Pendukung dapat disampaikan lebih dari 1 (satu) jenis dokumen.',
            ],
        ];

        foreach ($indicatorData as $id => $data) {
            // Determine the domain and aspect based on your previous logic
            $domain_id = $this->getDomainId($id);
            $aspect_id = $this->getAspectId($id);

            Indicator::firstOrCreate(
                ['name' => 'Indikator ' . $id],
                [
                    'name' => 'Indikator ' . $id,
                    'other_name' => $data['other_name'],
                    'domain_id' => $domain_id, // Assign domain dynamically
                    'aspect_id' => $aspect_id,   // Assign aspect dynamically
                    'detail' => $data['detail'],
                    'description' => $data['description'],
                    'score_criteria' => $data['score_criteria'],
                ]
            );
        }
    }

    private function getDomainId($indicatorId)
    {
        // Your logic to get domain_id based on indicator_id
        if ($indicatorId >= 1 && $indicatorId <= 10) {
            return 1; // Example for domain_id 1
        } elseif ($indicatorId >= 11 && $indicatorId <= 20) {
            return 2; // Example for domain_id 2
        } elseif ($indicatorId >= 21 && $indicatorId <= 31) {
            return 3; // Example for domain_id 3
        } else {
            return 4; // Example for domain_id 4
        }
    }

    private function getAspectId($indicatorId)
    {
        // Your logic to get aspect_id based on indicator_id
        if ($indicatorId >= 1 && $indicatorId <= 10) {
            return 1; // Example for aspect_id 1
        } elseif ($indicatorId >= 11 && $indicatorId <= 14) {
            return 2; // Example for aspect_id 2
        } elseif ($indicatorId >= 15 && $indicatorId <= 18) {
            return 3; // Example for aspect_id 3
        } elseif ($indicatorId >= 19 && $indicatorId <= 20) {
            return 4; // Example for aspect_id 4
        } elseif ($indicatorId >= 21 && $indicatorId <= 28) {
            return 5; // Example for aspect_id 5
        } elseif ($indicatorId >= 29 && $indicatorId <= 31) {
            return 6; // Example for aspect_id 6
        } elseif ($indicatorId >= 32 && $indicatorId <= 44) {
            return 7; // Example for aspect_id 7
        } elseif ($indicatorId >= 45 && $indicatorId <= 47) {
            return 8; // Example for aspect_id 8
        }
    }
}
