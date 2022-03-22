<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\indikatorIKU;

class IndikatorikuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        indikatorIKU::create([
            'indikatordesc'=>'% Efektivitas koordinasi pengendalian inflasi daerah',
            'jenisiku'=>1,
            'targetdesc'=>'Pelaksanaan HLM dihadiri Pimpinan Daerah: 2x/tahun',
            'targetiku' =>'2',
            'sifatkerja'=>'Outcome',
         ]);
         indikatorIKU::create([
            'indikatordesc'=>'% Efektivitas koordinasi pengendalian inflasi daerah',
            'jenisiku'=>1,
            'targetdesc'=>'100%  penyelesaian tindaklanjut arahan rapat koordinasi pengendalian inflasi daerah',
            'targetiku' =>'100%',
            'sifatkerja'=>'Outcome',
         ]);
         indikatorIKU::create([
            'indikatordesc'=>'Efektivitas implementasi klaster ketahanan pangan',
            'jenisiku'=>1,
            'targetdesc'=>'Terlaksananya rolling out dengan platform digital',
            'targetiku' =>'-',
            'sifatkerja'=>'Outcome',
         ]);
         indikatorIKU::create([
            'indikatordesc'=>'Implementasi Kerjasama Perdagangan Antar Daerah d/r pengendalian inflasi daerah',
            'jenisiku'=>1,
            'targetdesc'=>'≥ 1 MoU KAD; dan/atau',
            'targetiku' =>'1',
            'sifatkerja'=>'Outcome',
         ]);
         indikatorIKU::create([
            'indikatordesc'=>'Implementasi Kerjasama Perdagangan Antar Daerah d/r pengendalian inflasi daerah',
            'jenisiku'=>1,
            'targetdesc'=>'penambahan ≥ 1 jenis komoditas yg ditransaksikan; dan/atau',
            'targetiku' =>'1',
            'sifatkerja'=>'Outcome',
         ]);
         indikatorIKU::create([
            'indikatordesc'=>'Implementasi Kerjasama Perdagangan Antar Daerah d/r pengendalian inflasi daerah',
            'jenisiku'=>1,
            'targetdesc'=>'penambahan volume transaksi',
            'targetiku' => 'penambahan volume transaksi',
            'sifatkerja'=>'Outcome',
         ]);
         indikatorIKU::create([
            'indikatordesc'=>'Jumlah digitalisasi UMKM (UMKM sukses digital)',
            'jenisiku'=>1,
            'targetdesc'=>'24',
            'targetiku' => '24',
            'sifatkerja'=>'Outcome',
         ]);
         indikatorIKU::create([
            'indikatordesc'=>'Jumlah UMKM  program korporatisasi',
            'jenisiku'=>1,
            'targetdesc'=>'4',
            'targetiku' => '4',
            'sifatkerja'=>'Outcome',
         ]);
         indikatorIKU::create([
            'indikatordesc'=>'Jumlah UMKM yang terhubung dengan lembaga keuangan formal',
            'jenisiku'=>1,
            'targetdesc'=>'6',
            'targetiku' => '6',
            'sifatkerja'=>'Outcome',
         ]);
         indikatorIKU::create([
            'indikatordesc'=>'Jumlah UMKM ekspor barang dan/atau dan/atau pendukung sektor pariwisata yang naik level',
            'jenisiku'=>1,
            'targetdesc'=>'0',
            'targetiku' => '0',
            'sifatkerja'=>'Outcome',
         ]);
         indikatorIKU::create([
            'indikatordesc'=>'Jumlah kelompok subsisten yang berhasil dikembangkan oleh KPwDN',
            'jenisiku'=>1,
            'targetdesc'=>'1',
            'targetiku' => '1',
            'sifatkerja'=>'Outcome',
         ]);
         indikatorIKU::create([
            'indikatordesc'=>'Jumlah UMKM yang lolos kurasi KKI',
            'jenisiku'=>1,
            'targetdesc'=>'7',
            'targetiku' => '7',
            'sifatkerja'=>'Outcome',
         ]);
         indikatorIKU::create([
            'indikatordesc'=>'Jumlah peserta yang mengikuti program edukasi dan literasi materi ekonomi dan keuangan inklusif',
            'jenisiku'=>1,
            'targetdesc'=>'90',
            'targetiku' => '90',
            'sifatkerja'=>'Output',
         ]);
         indikatorIKU::create([
            'indikatordesc'=>'Peningkatan kualitas pelaksanaan kegiatan event pengembangan UMKM di KPwDN',
            'jenisiku'=>1,
            'targetdesc'=>'≥ 10% peningkatan jumlah bisnis matching dan omset untuk event road to KKI dan/atau event UMKM lainnya',
            'targetiku' => '10%',
            'sifatkerja'=>'Outcome',
         ]);
         indikatorIKU::create([
            'indikatordesc'=>'Tingkat kepuasan konsumen terhadap layanan perlindungan konsumen penyelenggara',
            'jenisiku'=>1,
            'targetdesc'=>'≥ 85% penyelesaian penanganan pengaduan konsumen oleh penyelenggara',
            'targetiku' => '85%',
            'sifatkerja'=>'Output',
         ]);
         //22
         indikatorIKU::create([
            'indikatordesc'=>'% Stranas Pencegahan & Pemberantasan TPPU & TPPT yang ditindaklanjuti oleh KPwDN',
            'jenisiku'=>1,
            'targetdesc'=>'≥ 80',
            'targetiku' => '80%',
            'sifatkerja'=>'Outcome',
         ]);
         indikatorIKU::create([
            'indikatordesc'=>'% Hasil temuan pemeriksaan penyelenggara SP yang ditindaklanjuti sesuai jatuh tempo',
            'jenisiku'=>1,
            'targetdesc'=>'100% komitmen ditindaklanjuti',
            'targetiku' => '100%',
            'sifatkerja'=>'Outcome',
         ]);
         //25
         indikatorIKU::create([
            'indikatordesc'=>'Jumlah Sosialisasi dan edukasi yang dilakukan oleh KPwDN dalam rangka peningkatan transaksi digital penduduk dewasa',
            'jenisiku'=>1,
            'targetdesc'=>'Jumlah peserta : 100-200',
            'targetiku' => '100-200',
            'sifatkerja'=>'Output',
         ]);
         //26
         indikatorIKU::create([
            'indikatordesc'=>'Jumlah Sosialisasi dan edukasi yang dilakukan oleh KPwDN dalam rangka peningkatan transaksi digital penduduk dewasa',
            'jenisiku'=>1,
            'targetdesc'=>'Tingkat pemahaman : ≥ 60%',
            'targetiku' => '60%',
            'sifatkerja'=>'Output',
         ]);
         indikatorIKU::create([
            'indikatordesc'=>'Jumlah Sosialisasi dan edukasi yang dilakukan oleh KPwDN dalam rangka peningkatan transaksi digital penduduk dewasa',
            'jenisiku'=>1,
            'targetdesc'=>'Frekuensi pelaksanaan : ≥ 1 kali',
            'targetiku' => '1',
            'sifatkerja'=>'Output',
         ]);
         //29
         indikatorIKU::create([
            'indikatordesc'=>'Ketepatan Proyeksi EKU',
            'jenisiku'=>1,
            'targetdesc'=>'Deviasi realisasi EKU UPB & UPK terhadap rencana EKU UPB & UPK ±10%',
            'targetiku' => '10%',
            'sifatkerja'=>'Outcome',
         ]);

         indikatorIKU::create([
            'indikatordesc'=>'Optimalisasi Pengolahan Uang Rupiah dg menggunakan MSUK-R',
            'jenisiku'=>1,
            'targetdesc'=>'Realisasi pengolahan UPB dan UPK:
            a. ≥ 100% dari inflow UPB, apabila inflow dibawah kapasitas MSUK-R atau
            b. ≥ 100% dari kapasitas MSUK-R, apabila inflow diatas MSUK-R
            ',
            'targetiku' => '100%',
            'sifatkerja'=>'Outcome',
         ]);
         indikatorIKU::create([
            'indikatordesc'=>'Tingkat Pemenuhan Kebutuhan Uang',
            'jenisiku'=>1,
            'targetdesc'=>'Realisasi pemenuhan dibandingkan permintaan kebutuhan uang oleh perbankan, deviasi maksimal 10%',
            'targetiku' => 'maks 10%',
            'sifatkerja'=>'Outcome',
         ]);
         //32
         indikatorIKU::create([
            'indikatordesc'=>'Kegiatan Kas Keliling 3T',
            'jenisiku'=>1,
            'targetdesc'=>'≥ 2 Kas Keliling 3T',
            'targetiku' => '2',
            'sifatkerja'=>'Outcome',
         ]);
         //33 stabilo kuning sdh
         indikatorIKU::create([
            'indikatordesc'=>'Kas Titipan',
            'jenisiku'=>1,
            'targetdesc'=>'≥ 0 Kas Titipan',
            'targetiku' => '0',
            'sifatkerja'=>'Outcome',
         ]);
    }
}
