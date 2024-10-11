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
        // Define indicator data with detail, description, and score criteria
        $indicatorData = [
            1 => [
                'other_name' => 'Tingkat Kematangan Kebijakan Internal Arsitektur 
SPBE Instansi Pusat/Pemerintah Daerah.',
                'detail' => 'a. Arsitektur SPBE adalah kerangka dasar yang 
mendeskripsikan integrasi proses bisnis, data dan 
informasi, infrastruktur SPBE, aplikasi SPBE, dan 
keamanan SPBE untuk menghasilkan layanan SPBE 
yang terintegrasi. 
b. Kebijakan internal Arsitektur SPBE merupakan 
pengaturan mengenai Arsitektur SPBE di Instansi 
Pusat dan Pemerintah Daerah yang bertujuan untuk memberikan panduan dalam pelaksanaan integrasi 
Proses Bisnis, Data dan Informasi, Infrastruktur 
SPBE, Aplikasi SPBE, dan Keamanan SPBE untuk 
menghasilkan Layanan SPBE yang terpadu. 
c. Referensi Arsitektur dan Domain Arsitektur SPBE 
terdiri dari:  
1. Domain Arsitektur Proses Bisnis; 
2. Domain Arsitektur Data dan Informasi; 
3. Domain Arsitektur Layanan; 
4. Domain Arsitektur Aplikasi; 
5. Domain Arsitektur Infrastruktur SPBE; dan, 
6. Domain Arsitektur Keamanan SPBE. ',
                'description' => 'Penilaian dilakukan terhadap pengaturan/norma yang 
memenuhi keselarasan referensi Arsitektur SPBE 
Nasional dan 6 (enam) Domain Arsitektur SPBE melalui 
kebijakan yang telah ditetapkan. ',
                'score_criteria' => 'Peraturan Menteri/Kepala Badan/Lembaga/Daerah/ 
Gubernur/Bupati/Walikota atau Keputusan Pimpinan 
Instansi Pusat/Pemerintah Daerah yang sudah 
ditetapkan sesuai ketentuan perundang-undangan. 
Data Pendukung dapat disampaikan lebih dari 1 (satu) 
jenis dokumen. ',
            ],
            2 => [
                'other_name' => 'Tingkat Kematangan Kebijakan Internal Peta 
Rencana SPBE Instansi Pusat/Pemerintah Daerah.',
                'detail' => 'a. Peta Rencana SPBE adalah dokumen yang 
mendeskripsikan arah dan langkah penyiapan dan 
pelaksanaan SPBE yang terintegrasi. 
b. Kebijakan internal Peta Rencana SPBE merupakan 
pengaturan mengenai Peta Rencana SPBE di 
Instansi Pusat/Pemerintah Daerah yang bertujuan 
untuk memberikan panduan arah dan langkah 
dalam penyiapan dan pelaksanaan SPBE di Instansi 
Pusat/Pemerintah Daerah. 
c. Peta Rencana SPBE memuat:  
1. Tata Kelola SPBE;2. Manajemen SPBE; 
3. Layanan SPBE; 
4. Infrastruktur SPBE; 
5. Aplikasi SPBE; 
6. Keamanan SPBE; dan, 
7. Audit TIK. ',
                'description' => 'Penilaian dilakukan terhadap pengaturan/norma yang 
memenuhi 7 (tujuh) muatan Peta Rencana SPBE 
melalui kebijakan yang telah ditetapkan.',
                'score_criteria' => 'Peraturan Menteri/Kepala Badan/Lembaga/Daerah/ 
Gubernur/Bupati/Walikota atau Keputusan Pimpinan 
Instansi Pusat/Pemerintah Daerah yang sudah 
ditetapkan sesuai ketentuan perundang-undangan. 
Data Pendukung dapat disampaikan lebih dari 1 (satu) 
jenis dokumen. ',
            ],
            // Continue for other indicators...
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
