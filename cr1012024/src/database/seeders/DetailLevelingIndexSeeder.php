<?php

namespace Database\Seeders;

use App\Models\DetailLevelingIndex;
use Illuminate\Database\Seeder;

class DetailLevelingIndexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $data = [
            1 => [
                1 => [
                    'detail' => 'Konsep kebijakan internal terkait Arsitektur SPBE. Instansi Pusat/Pemerintah Daerah belum atau telah tersedia.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah belum atau sudah memiliki konsep kebijakan internal Arsitektur SPBE dimaksud atau masih dalam proses pengesahan.',
                    'criteria_evidence' => 'Draf kebijakan berupa rancangan Peraturan atau rancangan Keputusan atau Surat Edaran/dokumen yang berisi pengaturan/norma mengenai Arsitektur SPBE; dan/atau Notulensi/catatan/laporan hasil penyusunan kebijakan internal Arsitektur SPBE; dan/atau dapat dilengkapi dengan bukti undangan rapat penyusunan kebijakan internal Arsitektur SPBE; dan/atau dokumentasi aktivitas-aktivitas penyusunan kebijakan internal Arsitektur SPBE.'
                ],
                2 => [
                    'detail' => 'Kebijakan internal Arsitektur SPBE Instansi Pusat/Pemerintah Daerah telah ditetapkan. Kondisi: Kebijakan internal Arsitektur SPBE Instansi Pusat/ Pemerintah Daerah tersebut belum memuat secara lengkap pengaturan mengenai referensi Arsitektur dan domain Arsitektur SPBE (Proses Bisnis, Data dan Informasi, Infrastruktur SPBE, Aplikasi SPBE, Keamanan SPBE, dan Layanan SPBE).',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki kebijakan internal Arsitektur SPBE yang telah ditetapkan dan pengaturan Arsitektur SPBE mencakup sebagian domain Arsitektur SPBE.',
                    'criteria_evidence' => 'Konteks pengaturan/norma penerapan Arsitektur SPBE yang terdapat sebagian muatan mengenai referensi Arsitektur dan domain Arsitektur SPBE tertuang dalam dokumen kebijakan Instansi Pusat/Pemerintah Daerah'
                ],
                3 => [
                    'detail' => 'Kriteria tingkat 2 telah terpenuhi dan kebijakan internal Arsitektur SPBE Instansi Pusat/Pemerintah Daerah telah memuat secara lengkap pengaturan mengenai referensi Arsitektur dan domain Arsitektur SPBE (Proses Bisnis, Data dan Informasi, Infrastruktur SPBE, Aplikasi SPBE, Keamanan SPBE, dan Layanan SPBE).',
                    'description' => 'Kebijakan internal yang ada telah mendukung pengaturan Arsitektur SPBE yang mencakup keseluruhan domain Arsitektur SPBE',
                    'criteria_evidence' => 'Konteks pengaturan/norma penerapan Arsitektur SPBE yang terdapat referensi Arsitektur dan domain Arsitektur SPBE diuraikan secara lengkap tertuang dalam dokumen kebijakan Instansi Pusat/Pemerintah Daerah'
                ],
                4 => [
                    'detail' => 'Kriteria tingkat 3 telah terpenuhi, kebijakan internal Arsitektur SPBE Instansi Pusat/Pemerintah Daerah telah mengatur integrasi SPBE antar Instansi Pusat, antar Pemerintah Daerah, dan/atau antar Instansi Pusat dan Pemerintah Daerah, dan kebijakan internal Arsitektur SPBE Instansi Pusat/Pemerintah Daerah telah direviu dan dievaluasi secara periodik.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki arah kebijakan internal yang mengatur Arsitektur SPBE sebagai pedoman integrasi penerapan SPBE pada Instansi Pusat/Pemerintah Daerah. ',
                    'criteria_evidence' => '1) Konteks pengaturan/norma untuk menyelaraskan penyusunan Arsitektur SPBE dengan referensi Arsitektur dan 6 (enam) domain Arsitektur SPBE secara lengkap, serta mengatur integrasi SPBE antar Instansi Pusat, antar Pemerintah Daerah, dan/atau antar Instansi Pusat dan Pemerintah Daerah dalam dokumen kebijakan Instansi Pusat/Pemerintah Daerah; 2) Terdapat notulensi/catatan/laporan hasil evaluasi/reviu terkait kebijakan internal Arsitektur SPBE yang masih berlaku (<2 tahun); 3) Hasil evaluasi/reviu yang berisi konten isu/permasalahan dan rekomendasi perbaikan yang aktual; dan 4) Bukti undangan rapat evaluasi kebijakan internal Arsitektur SPBE, dan/atau dokumentasi aktivitasaktivitas evaluasi kebijakan internal Arsitektur SPBE (opsional).'
                ],
                5 => [
                    'detail' => 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu dan evaluasi kebijakan internal Arsitektur Instansi Pusat/Pemerintah Daerah SPBE telah ditindaklanjuti dengan kebijakan baru.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah menindaklanjuti hasil  evaluasi kebijakan Arsitektur SPBE dengan menetapkan suatu kebijakan sebagai bentuk optimalisasi pelaksanaan kebijakan Arsitektur SPBE, sesuai dengan kebutuhan Instansi Pusat/Pemerintah Daerah ataupun perubahan lingkungan dan teknologi.  Tingkat kematangan level 5 (lima) dapat dipertahankan:  a) dengan melakukan reviu terhadap kebijakan internal Arsitektur SPBE; penyempurnaan  terhadap kebijakan internal Arsitektur SPBE sesuai hasil reviu; dan b) dengan melakukan tindak lanjut atas hasil reviu berupa penyempurnaan terhadap kebijakan internal Arsitektur SPBE dengan menetapkan kebijakan baru dan/atau turunan kebijakan (SK, SE, SOP, dan lain sebagainya), dan kebijakan lainnya sesuai hasil reviu.',
                    'criteria_evidence' => '1) Dokumen kebijakan internal penerapan SPBE Instansi Pusat/Pemerintah Daerah yang memuat kebijakan Arsitektur SPBE dan telah optimal (memenuhi kriteria tingkat kematangan level 1 - 4);  2) Terdapat dokumentasi aktivitas reviu/penyempurnaan kebijakan internal Arsitektur SPBE yang memuat rekomendasi; 3) Dokumen formal kebijakan internal Instansi Pusat/Pemerintah Daerah sebagai optimalisasi yang sesuai dengan rekomendasi hasil reviu/penyempurnaan; dan 4) Optimalisasi kebijakan dapat dipenuhi dengan menetapkan turunan kebijakan (SK, SE, SOP), dan kebijakan lainnya yang memuat substansi indikator sesuai arah rekomendasi reviu serta ditetapkan 1 tahun setelah reviu dilakukan'
                ],
            ],
            2 => [
                1 => [
                    'detail' => 'Konsep kebijakan internal terkait Peta Rencana SPBE Instansi Pusat/Pemerintah Daerah belum tersedia atau masih dalam bentuk draft.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah belum atau sudah memiliki konsep kebijakan internal Peta Rencana SPBE dimaksud atau masih dalam proses pengesahan.',
                    'criteria_evidence' => 'Draf kebijakan berupa rancangan Peraturan atau rancangan Keputusan atau Surat Edaran/dokumen yang berisi pengaturan/norma mengenai Peta Rencana SPBE; Notulensi/catatan/laporan hasil penyusunan kebijakan internal Peta Rencana SPBE; bukti undangan rapat penyusunan kebijakan internal Peta Rencana SPBE; dan/atau dokumentasi aktivitas aktivitas penyusunan kebijakan internal Peta Rencana SPBE. '
                ],
                2 => [
                    'detail' => 'Kebijakan internal Peta Rencana SPBE Instansi 
Pusat/Pemerintah Daerah telah ditetapkan.  
Kondisi: Kebijakan internal Peta Rencana SPBE 
Instansi Pusat/Pemerintah Daerah tersebut belum 
mengatur muatan Peta Rencana SPBE secara 
lengkap (Tata Kelola SPBE, Manajemen SPBE, 
Layanan SPBE, Infrastruktur SPBE, Aplikasi SPBE, 
Keamanan SPBE, dan Audit TIK). 
',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki 
kebijakan internal Peta Rencana SPBE yang telah 
ditetapkan dan pengaturan Peta Rencana SPBE 
mencakup sebagian muatan Peta Rencana SPBE. ',
                    'criteria_evidence' => 'Konteks pengaturan/norma penerapan Peta Rencana 
SPBE yang terdapat sebagian muatan Peta Rencana 
SPBE tertuang dalam dokumen kebijakan Instansi 
Pusat/Pemerintah Daerah; '
                ],
                3 => [
                    'detail' => 'Kriteria tingkat 2 telah terpenuhi dan kebijakan 
internal Peta Rencana SPBE Instansi 
Pusat/Pemerintah Daerah telah mengatur seluruh 
muatan Peta Rencana SPBE secara lengkap (Tata 
Kelola SPBE, Manajemen SPBE, Layanan SPBE, 
Infrastruktur SPBE, Aplikasi SPBE, Keamanan 
SPBE, dan Audit TIK). ',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah memiliki 
kebijakan internal yang mendukung pengaturan Peta 
Rencana SPBE yang mencakup keseluruhan muatan 
Peta Rencana SPBE.',
                    'criteria_evidence' => 'Konteks pengaturan/norma penerapan Peta Rencana 
SPBE yang memuat secara lengkap muatan Peta 
Rencana SPBE tertuang dalam dokumen kebijakan 
Instansi Pusat/Pemerintah Daerah;'
                ],
                4 => [
                    'detail' => 'Kriteria tingkat 3 telah terpenuhi, kebijakan 
internal Peta Rencana SPBE Instansi 
Pusat/Pemerintah Daerah telah mengatur 
keselarasan antara Peta Rencana SPBE Instansi 
Pusat/Pemerintah Daerah dan Peta Rencana SPBE 
Nasional. Selain itu, Kebijakan internal Peta 
Rencana SPBE Instansi Pusat/Pemerintah Daerah 
telah direviu dan dievaluasi secara periodik.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki 
arah kebijakan pengaturan penyusunan Peta Rencana 
SPBE Instansi Pusat/Pemerintah Daerah selaras 
dengan Peta Rencana SPBE Nasional.',
                    'criteria_evidence' => '1) Konteks pengaturan/norma penerapan Peta 
Rencana SPBE Instansi Pusat/Pemerintah Daerah 
selaras dengan Peta Rencana SPBE Nasional tertuang dalam dokumen kebijakan Instansi 
Pusat/Pemerintah Daerah;  
2) Terdapat notulensi/catatan/laporan hasil 
evaluasi/reviu terkait kebijakan internal Peta 
Rencana SPBE yang masih berlaku (<2 tahun); 
3) Hasil evaluasi/reviu yang berisi konten 
isu/permasalahan dan rekomendasi perbaikan 
yang aktual; dan 
4) Bukti undangan rapat evaluasi kebijakan internal 
Peta Rencana SPBE, dan/atau dokumentasi 
aktivitas-aktivitas evaluasi kebijakan internal Peta 
Rencana SPBE (opsional).'
                ],
                5 => [
                    'detail' => 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu 
dan evaluasi kebijakan internal Peta Rencana 
Instansi Pusat/Pemerintah Daerah SPBE telah 
ditindaklanjuti dengan kebijakan baru.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah 
menindaklanjuti hasil  evaluasi kebijakan Peta 
Rencana SPBE dengan menetapkan suatu kebijakan 
sebagai bentuk optimalisasi pelaksanaan kebijakan 
Peta Rencana SPBE, sesuai dengan kebutuhan 
Instansi Pusat/Pemerintah Daerah ataupun 
perubahan lingkungan dan teknologi.  
Tingkat kematangan level 5 (lima) dapat 
dipertahankan:  
c) dengan melakukan reviu terhadap kebijakan 
internal Peta Rencana SPBE; penyempurnaan  
terhadap kebijakan internal Peta Rencana SPBE 
sesuai hasil reviu; dan 
d) dengan melakukan tindak lanjut atas hasil reviu 
berupa penyempurnaan terhadap kebijakan 
internal Peta Rencana SPBE dengan menetapkan 
kebijakan baru dan/atau turunan kebijakan 
(SK, SE, SOP, dan lain sebagainya), dan 
kebijakan lainnya sesuai hasil reviu. ',
                    'criteria_evidence' => '1) Dokumen kebijakan internal penerapan SPBE 
Instansi Pusat/Pemerintah Daerah yang memuat kebijakan Peta Rencana SPBE dan telah optimal 
(memenuhi kriteria tingkat kematangan level 1 - 4);  
2) Terdapat dokumentasi aktivitas 
reviu/penyempurnaan kebijakan internal Peta 
Rencana SPBE yang memuat rekomendasi; 
3) Dokumen formal kebijakan internal Instansi 
Pusat/Pemerintah Daerah sebagai optimalisasi 
yang sesuai dengan rekomendasi hasil 
reviu/penyempurnaan; dan 
4) Optimalisasi kebijakan dapat dipenuhi dengan 
menetapkan turunan kebijakan (SK, SE, SOP), dan 
kebijakan lainnya yang memuat susbstansi 
indikator sesuai arah rekomendasi reviu serta 
ditetapkan 1 tahun setelah reviu dilakukan.'
                ],
            ],
            3 => [
                1 => [
                    'detail' => 'Konsep kebijakan internal terkait Manajemen Data di Instansi Pusat/Pemerintah Daerah belum atau telah tersedia.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah belum atau sudah 
memiliki konsep kebijakan internal Manajemen Data 
dimaksud atau masih dalam proses pengesahan. ',
                    'criteria_evidence' => 'Draf kebijakan berupa rancangan Peraturan atau 
rancangan Keputusan atau Surat Edaran/dokumen 
yang berisi pengaturan/norma mengenai Manajemen 
Data SPBE; Notulensi/catatan/laporan hasil 
penyusunan kebijakan internal Manajemen Data SPBE; 
bukti undangan rapat penyusunan kebijakan internal 
Manajemen Data SPBE; dan/atau dokumentasi 
aktivitas-aktivitas penyusunan kebijakan internal 
Manajemen Data SPBE. '
                ],
                2 => [
                    'detail' => 'Kebijakan internal Manajemen Data di Instansi 
Pusat/Pemerintah Daerah telah ditetapkan.',
                    'description' => 'Instansi Pusat/Pemerintah Daerah sudah memiliki 
kebijakan internal terkait Manajemen/pengelolaan Data 
yang telah ditetapkan.',
                    'criteria_evidence' => 'Konteks pengaturan/norma penerapan 
Manajemen/pengelolaan Data SPBE yang 
menggambarkan proses pengelolaan/Manajemen Data 
dalam dokumen kebijakan Instansi Pusat/Pemerintah 
Daerah; '
                ],
                3 => [
                    'detail' => 'Kondisi: Kebijakan internal Manajemen Data di 
Instansi Pusat/Pemerintah Daerah tersebut hanya 
mengatur sebagian dari rangkaian proses 
pengelolaan arsitektur data, data induk, data referensi, basis data, kualitas data dan 
interoperabilitas data. ',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah memiliki 
kebijakan internal yang mendukung pengaturan 
Manajemen Data yang didalamnya mencakup sebagian  
proses pengelolaan Manajemen Data.',
                    'criteria_evidence' => 'Konteks pengaturan/norma penerapan Manajemen 
Data SPBE yang menguraikan sebagian rangkaian 
proses pengelolaan Manajemen Data tertuang dalam 
dokumen kebijakan Instansi Pusat/Pemerintah Daerahonteks pengaturan/norma penerapan Manajemen 
Data SPBE yang menguraikan sebagian rangkaian 
proses pengelolaan Manajemen Data tertuang dalam 
dokumen kebijakan Instansi Pusat/Pemerintah Daerah'
                ],
                4 => [
                    'detail' => 'Kriteria tingkat 2 telah terpenuhi dan kebijakan 
internal Manajemen Data di Instansi 
Pusat/Pemerintah Daerah telah mengatur seluruh 
rangkaian proses pengelolaan arsitektur data, data 
induk, data referensi, basis data, kualitas data dan 
interoperabilitas data. ',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah memiliki 
kebijakan internal yang mendukung pengaturan 
Manajemen Data yang didalamnya mencakup seluruh 
proses pengelolaan Manajemen Data.',
                    'criteria_evidence' => 'Konteks pengaturan/norma penerapan Manajemen 
Data SPBE yang menguraikan seluruh rangkaian proses 
pengelolaan Manajemen Data tertuang dalam dokumen 
kebijakan Instansi Pusat/Pemerintah Daerah; '
                ],
                5 => [
                    'detail' => 'Kriteria tingkat 4 telah terpenuhi serta hasil reviu 
dan evaluasi kebijakan internal Manajemen Data di 
Instansi Pusat/Pemerintah Daerah telah 
ditindaklanjuti dengan kebijakan baru. ',
                    'description' => 'Instansi Pusat/Pemerintah Daerah telah melakukan 
reviu yang masih berlaku (<2 tahun) dan evaluasi dan 
menindaklanjuti hasil reviu dan/atau evaluasi atas 
kebijakan Manajemen Data SPBE sebelumnya dengan 
menetapkan suatu kebijakan atau turunan kebijakan 
sebagai bentuk optimalisasi pelaksanaan kebijakan 
Manajemen Data SPBE, sesuai dengan kebutuhan 
Instansi Pusat/Pemerintah Daerah ataupun perubahan 
lingkungan dan teknologi.  
Tingkat kematangan level 5 (lima) dapat dipertahankan a) dengan melakukan reviu terhadap kebijakan 
internal Manajemen Data; penyempurnaan  
terhadap kebijakan internal Manajemen Data 
sesuai hasil reviu; dan 
b) dengan melakukan tindak lanjut atas hasil reviu 
berupa penyempurnaan terhadap kebijakan 
internal Manajemen Data dengan menetapkan 
kebijakan baru dan/atau turunan kebijakan (SK, 
SE, SOP, dan lain sebagainya), dan kebijakan 
lainnya sesuai hasil reviu. ',
                    'criteria_evidence' => '1) Dokumen kebijakan internal penerapan SPBE 
Instansi Pusat/Pemerintah Daerah yang memuat 
kebijakan Manajemen Data dan telah optimal 
(memenuhi kriteria tingkat kematangan level 1 – 4);  
2) Terdapat dokumentasi aktivitas 
reviu/penyempurnaan kebijakan internal 
Manajemen Data yang memuat rekomendasi; 
3) Hasil evaluasi/reviu yang berisi konten 
isu/permasalahan dan rekomendasi perbaikan yang 
aktual ; 
4) Bukti undangan rapat evaluasi kebijakan internal 
Manajemen Data, dan/atau dokumentasi aktivitas
aktivitas evaluasi kebijakan internal Manajemen 
Data (opsional); 
5) Dokumen formal kebijakan internal Instansi 
Pusat/Pemerintah Daerah sebagai optimalisasi yang 
sesuai dengan rekomendasi hasil 
reviu/penyempurnaan; dan 
6) Optimalisasi kebijakan dapat dipenuhi dengan 
menetapkan turunan kebijakan (SK, SE, SOP), dan 
kebijakan lainnya yang memuat substansi indikator 
sesuai arah rekomendasi reviu serta ditetapkan 1 
tahun setelah reviu dilakukan. '
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
