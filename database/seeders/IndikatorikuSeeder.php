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
         indikatorIKU::create([
            'indikatordesc'=>'Tingkat pemahaman masyarakat thdp konsep Cinta Bangga Paham Rupiah',
            'jenisiku'=>1,
            'targetdesc'=>'Cinta: ≥ Awareness (level 1 dari 4)',
            'targetiku' => '1',
            'sifatkerja'=>'Output',
         ]);
         indikatorIKU::create([
            'indikatordesc'=>'Tingkat pemahaman masyarakat thdp konsep Cinta Bangga Paham Rupiah',
            'jenisiku'=>1,
            'targetdesc'=>'Bangga: ≥ Awareness (level 1 dari 4)',
            'targetiku' => '1',
            'sifatkerja'=>'Output',
         ]);
         indikatorIKU::create([
            'indikatordesc'=>'Tingkat pemahaman masyarakat thdp konsep Cinta Bangga Paham Rupiah',
            'jenisiku'=>1,
            'targetdesc'=>'Paham: ≥ Awareness (level 1 dari 4)',
            'targetiku' => '1',
            'sifatkerja'=>'Output',
         ]);
         indikatorIKU::create([
            'indikatordesc'=>'Pemda dengan kategori digital dalam elektronifikasi transaksi Pemerintah',
            'jenisiku'=>1,
            'targetdesc'=>'≥ 1 Pemda yang berada di tahap digital',
            'targetiku' => '1',
            'sifatkerja'=>'Outcome',
         ]);
         indikatorIKU::create([
            'indikatordesc'=>'Implementasi Elektronifikasi transaksi di Daerah',
            'jenisiku'=>1,
            'targetdesc'=>'Tingkat kepatuhan laporan ETPD pada SIP2DD (Modul Indeks ETPD) yang dilakukan 2x setahun',
            'targetiku' => '2',
            'sifatkerja'=>'Output',
         ]);
         indikatorIKU::create([
            'indikatordesc'=>'Efektivitas literasi dan sosialisasi Pelaku Pasar Keuangan dalam rangka Pembiayaan Ekonomi',
            'jenisiku'=>1,
            'targetdesc'=>'Rata-rata tingkat pemahaman peserta atas post test  ≥ 65%',
            'targetiku' => '65%',
            'sifatkerja'=>'Output',
         ]);
         indikatorIKU::create([
            'indikatordesc'=>'Pemberdayaan Pelaku Usaha Syariah',
            'jenisiku'=>1,
            'targetdesc'=>'3 ponpes baru',
            'targetiku' => '3',
            'sifatkerja'=>'Outcome',
         ]);
         indikatorIKU::create([
            'indikatordesc'=>'Pemberdayaan Pelaku Usaha Syariah',
            'jenisiku'=>1,
            'targetdesc'=>'1 ponpes eksiting',
            'targetiku' => '1',
            'sifatkerja'=>'Outcome',
         ]);
         indikatorIKU::create([
            'indikatordesc'=>'Implementasi model korporatisasi UMKM Syariah termasuk diantaranya Hebitren',
            'jenisiku'=>1,
            'targetdesc'=>'≥ 1 lembaga (HEBITREN wilayah/ daerah/ cabang; koperasi sekunder)',
            'targetiku' => '1',
            'sifatkerja'=>'Outcome',
         ]);
         indikatorIKU::create([
            'indikatordesc'=>'Jumlah produk pelaku usaha syariah tersertifikasi layak halal',
            'jenisiku'=>1,
            'targetdesc'=>'≥ 8 produk pelaku usaha',
            'targetiku' => '8',
            'sifatkerja'=>'Outcome',
         ]);
         indikatorIKU::create([
            'indikatordesc'=>'Fasilitasi pelaku usaha syariah (UMKM syariah yang lolos IKRA',
            'jenisiku'=>1,
            'targetdesc'=>'≥ 1 UMKM lolos IKRA',
            'targetiku' => '1',
            'sifatkerja'=>'Outcome',
         ]);
         indikatorIKU::create([
            'indikatordesc'=>'Fasilitasi pelaksanaan/penyelenggaran kegiatan Fesyar dan atau road to fesyar',
            'jenisiku'=>1,
            'targetdesc'=>'(i) KPw penyelenggara FESyar:
            a. Peningkatan ≥ 5% business matching & omset penjualan (dari capaian Fesyar 2021)
            b. ≥ 1 kegiatan Fesyar, dengan 5 forum (2 Fesyar Jawa, 2 Fesyar Sumatera, dan 1 Fesyar KTI) dan 40.000 pengunjung  (15.000 Fesyar Jawa, 15.000 Fesyar Sumatera, dan 10.000 Fesyar KTI)
            
            (ii) KPw Road To FESyar
            a. Peningkatan ≥ 5% business matching & omset penjualan (dari capaian Road to Fesyar sebelumnya)
            b. Jumlah business matching, jumlah pengunjung, dan omset penjualan*)
            
            *) Berlaku bagi KPwDN yg pertama kali menyelenggarakan Road to Fesyar"',
            'targetiku' => ' ',
            'sifatkerja'=>'Outcome',
         ]);
         indikatorIKU::create([
            'indikatordesc'=>'Efektivitas literasi/edukasi ekonomi dan keuangan syariah, termasuk investasi keuangan sosial syariah',
            'jenisiku'=>1,
            'targetdesc'=>'Rata-rata tingkat pemahaman peserta atas post test minimal 60%',
            'targetiku' => '60%',
            'sifatkerja'=>'Output',
         ]);
         indikatorIKU::create([
            'indikatordesc'=>'Implementasi Self Governance KPwDN di area utama',
            'jenisiku'=>1,
            'targetdesc'=>'7 dari 7 area utama (area utama : PUR, Pengadaan barang/jasa, Pengelolaan aset, Pengamanan, Keuangan Intern, Pengawasan SP, dan PSBI)',
            'targetiku' => '7',
            'sifatkerja'=>'Output',
         ]);
         indikatorIKU::create([
            'indikatordesc'=>'Efektivitas realisasi seluruh anggaran PSBI dibandingkan dengan rencana',
            'jenisiku'=>1,
            'targetdesc'=>'90% ≤ x ≤ 100%',
            'targetiku' => '90% ≤ x ≤ 100%',
            'sifatkerja'=>'Output',
         ]);
         indikatorIKU::create([
            'indikatordesc'=>'Pencapaian sertifikasi ISO 15489 Record Management',
            'jenisiku'=>1,
            'targetdesc'=>'Mempertahankan ISO 15489',
            'targetiku' => '100%',
            'sifatkerja'=>'Outcome',
         ]);
         indikatorIKU::create([
            'indikatordesc'=>'Tersedianya rekomendasi dalam rangka mendukung efektivitas implementasi kebijakan BI di wilayah kerja KPwDN',
            'jenisiku'=>2,
            'targetdesc'=>'100% laku',
            'targetiku' => '100%',
            'sifatkerja'=>'Output',
         ]);
         //54
         indikatorIKU::create([
            'indikatordesc'=>'Tersedianya assessmen dalam rangka mendukung efektivitas implementasi kebijakan BI di wilayah kerja KPwDN',
            'jenisiku'=>3,
            'targetdesc'=>'100% laku',
            'targetiku' => '100%',
            'sifatkerja'=>'Output',
         ]);
         indikatorIKU::create([
            'indikatordesc'=>'Tersedianya Net Risk Assessment APU PPT di daerah',
            'jenisiku'=>3,
            'targetdesc'=>'≥ 75% tersedia',
            'targetiku' => '75%',
            'sifatkerja'=>'Output',
         ]);
         indikatorIKU::create([
            'indikatordesc'=>'Kualitas data dan informasi dalam rangka mendukung efektivitas implementasi kebijakan BI di wilayah kerja KPwDN',
            'jenisiku'=>4,
            'targetdesc'=>'100% laku',
            'targetiku' => '100%',
            'sifatkerja'=>'Output',
         ]);
         indikatorIKU::create([
            'indikatordesc'=>'Kualitas data liaison',
            'jenisiku'=>4,
            'targetdesc'=>'≥ 5 (skala 1-6)',
            'targetiku' => '5',
            'sifatkerja'=>'Output',
         ]);
         //58
         indikatorIKU::create([
            'indikatordesc'=>'Realisasi anggaran Satker',
            'jenisiku'=>5,
            'targetdesc'=>'90% ≤ x ≤ 100%',
            'targetiku' => '90% ≤ x ≤ 100%',
            'sifatkerja'=>'Output',
         ]);
         indikatorIKU::create([
            'indikatordesc'=>'Efisiensi anggaran Satker',
            'jenisiku'=>5,
            'targetdesc'=>'100% ≤ x ≤ 111%',
            'targetiku' => '100% ≤ x ≤ 111%',
            'sifatkerja'=>'Output',
         ]);
         indikatorIKU::create([
            'indikatordesc'=>'Kepatuhan pertanggungjawaban uang muka kegiatan',
            'jenisiku'=>5,
            'targetdesc'=>'90% ≤ x ≤ 100%',
            'targetiku' => '90% ≤ x ≤ 100%',
            'sifatkerja'=>'Output',
         ]);
         indikatorIKU::create([
            'indikatordesc'=>'Kepatuhan pertanggungjawaban uang muka perjalanan dinas',
            'jenisiku'=>5,
            'targetdesc'=>'90% ≤ x ≤ 100%',
            'targetiku' => '90% ≤ x ≤ 100%',
            'sifatkerja'=>'Output',
         ]);
         indikatorIKU::create([
            'indikatordesc'=>'Ketepatan Waktu Penyampaian Laporan Pajak',
            'jenisiku'=>5,
            'targetdesc'=>'83% ≤ x ≤ 100%',
            'targetiku' => '83% ≤ x ≤ 100%',
            'sifatkerja'=>'Output',
         ]);
         indikatorIKU::create([
            'indikatordesc'=>'Ketepatan Pencatatan/Pembebanan dan Pembayaran Transaksi Keuangan',
            'jenisiku'=>5,
            'targetdesc'=>'Jumlah transaksi cancel maksimal 3% dari transaksi pada periode penilaian',
            'targetiku' => 'maks 3%',
            'sifatkerja'=>'Output',
         ]);
         indikatorIKU::create([
            'indikatordesc'=>'% Penyelesaian tindak lanjut temuan audit internal & eksternal',
            'jenisiku'=>5,
            'targetdesc'=>'≥ 100%',
            'targetiku' => '100%',
            'sifatkerja'=>'Output',
         ]);
         indikatorIKU::create([
            'indikatordesc'=>'Kepatuhan pegawai menyampaikan LHKPN',
            'jenisiku'=>5,
            'targetdesc'=>'≥ 100%',
            'targetiku' => '100%',
            'sifatkerja'=>'Output',
         ]);
         indikatorIKU::create([
            'indikatordesc'=>'Kepatuhan pegawai menyampaikan surat pernyataan tahunan kode etik BI',
            'jenisiku'=>5,
            'targetdesc'=>'≥ 100%',
            'targetiku' => '100%',
            'sifatkerja'=>'Output',
         ]);
         indikatorIKU::create([
            'indikatordesc'=>'Ketaatan pengisian evaluasi akhir tahun periode tahun lalu, IKI tahunan, dan evaluasi tengah tahun',
            'jenisiku'=>5,
            'targetdesc'=>'≥ 100%',
            'targetiku' => '100%',
            'sifatkerja'=>'Output',
         ]);
         indikatorIKU::create([
            'indikatordesc'=>'Keberhasilan Satker dalam Penatausahaan Aset (Aset logistik dan aset SI)',
            'jenisiku'=>5,
            'targetdesc'=>'≥ 100%',
            'targetiku' => '100%',
            'sifatkerja'=>'Output',
         ]);

    }
}
