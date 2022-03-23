<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\IKU;
use Carbon\Carbon;
class IkuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dt = Carbon::now();
        IKU::create([
            'indikator'=>'1',
            'realisasi'=>'1',
            'status'=>'On Track',
            'keterangan'=>'Telah dilaksanakan HLM TPID Banyumas pada tanggal 12 Februari 2022 untuk membahas isu kelangkaan dan inflasi pada komoditas minyak goreng yang didahului dengan sidak ke distributor minyak goreng di Purwokerto.',
            'periode'=>$dt->setDateTime(2022, 2, 1, 11, 32, 5),
         ]);
         IKU::create([
            'indikator'=>'2',
            'realisasi'=>'50%',
            'status'=>'On Track',
            'keterangan'=>'Seluruh kesepakatan HLM yaitu pelaksanaan operasi pasar telah ditindaklanjuti sebagai berikut:
            • Pada 23 Februari 2022 sebanyak 25.200 liter di 3 pasar yaitu Pasar Wage, Pasar Larangan dan Pasar Sokaraja.
            • Pada 28 Februari 2022 sebanyak 7.200 liter di 3 pasar yaitu Pasar Proliman, Pasar Sangkalputung dan Pasar Kemukusan.
            Untuk memastikan efektivitas pelaksanaannya, maka pedagang diwajibkan menandatangani surat pernyataan untuk mengikuti HET.
            ',
            'periode'=>$dt->setDateTime(2022, 2, 1, 11, 32, 5),
         ]);
         IKU::create([
            'indikator'=>'3',
            'realisasi'=>' ',
            'status'=>'On Track',
            'keterangan'=>'Telah melakukan survei terhadap umkm pangan potensial di 3 Kabupaten yaitu Gapoktan Karya Tani Cilacap, Kelompok Tani Marsudi Among Tani Cilacap dan Gapoktan Mekar Tani Purbalingga serta telah dilakukan penjajakan melalui zoom meeting dengan Praktisi Digital Farming yaitu Bpk Andri dari Semarang yang telah mengembangkan program digital farming berbasis web dengan nama Parijatayu.',
            'periode'=>$dt->setDateTime(2022, 2, 1, 11, 32, 5),
         ]);
         IKU::create([
            'indikator'=>'4',
            'realisasi'=>'0',
            'status'=>'On Track',
            'keterangan'=>'Penjajakan b-to-b KAD antara KTT Lembu Sari Cilacap dengan Koperasi Cahaya Mandiri Jaya NTT telah dilakukan pada Februari 2022. Penandatanganan MoU direncanakan pada Maret 2022.',
            'periode'=>$dt->setDateTime(2022, 2, 1, 11, 32, 5),
         ]);
         IKU::create([
            'indikator'=>'5',
            'realisasi'=>'0',
            'status'=>'On Track',
            'keterangan'=>'Penyusunan PKS baru antara Gapoktan Sumber Makmur Maos Kidul dengan PT. Food Station dengan menambahkan komoditas beras merah masih on progress. Penandatanganan akan dilaksanakan pada bulan April 2022',
            'periode'=>$dt->setDateTime(2022, 2, 1, 11, 32, 5),
         ]);
         IKU::create([
            'indikator'=>'6',
            'realisasi'=>' ',
            'status'=>' ',
            'keterangan'=>' ',
            'periode'=>$dt->setDateTime(2022, 2, 1, 11, 32, 5),
         ]);
         IKU::create([
            'indikator'=>'7',
            'realisasi'=>'0',
            'status'=>'On Track',
            'keterangan'=>'Pelaksanaan OnBoarding terhadap 24 UMKM akan dilaksanakan pada Minggu I April 2022. Per Februari 2022 telah dilakukan penjajakan kepada calon pemateri dan vendor pelaksana kegiatan sebanyak 4 kandidat. Sementara itu, kurasi UMKM peserta on boarding akan dilakukan secara mandiri oleh KPw.',
            'periode'=>$dt->setDateTime(2022, 2, 1, 11, 32, 5),
         ]);
         IKU::create([
            'indikator'=>'8',
            'realisasi'=>'0',
            'status'=>'On Track',
            'keterangan'=>'Program korporatisasi ditargetkan selesai pada bulan Mei 2022. Sampai dengan Februari 2022 telah dilaksanakan kurasi dan asesmen terhadap beberapa kelompok',
            'periode'=>$dt->setDateTime(2022, 2, 1, 11, 32, 5),
         ]);
         IKU::create([
            'indikator'=>'9',
            'realisasi'=>'0',
            'status'=>'On Track',
            'keterangan'=>'Kegiatan BM dilakukan pada tanggal 16 Februari 2022 secara virtual/online melalui platform zoom meeting, didahului pemaparan oleh perbankan (BSI dan BRI) dilanjutkan BM terarah pada breakout room.
            BM pada breakout room :
            Bank Syariah Indonesia – 35 UMKM
            Bank Rakyat Indonesia – 125 UMKM
            Jumlah UMKM yang mengajukan pembiayaan pasca BM sampai Maret :
            Bank Syariah Indonesia – 6 UMKM (Tersebar pada 4 Kabupaten)
            Bank Rakyat Indonesia – 26 UMKM (Tersebar pada 4 Kabupaten)',
            'periode'=>$dt->setDateTime(2022, 2, 1, 11, 32, 5),
         ]);
         IKU::create([
            'indikator'=>'10',
            'realisasi'=>' ',
            'status'=>' ',
            'keterangan'=>'1. Showcase produk UMKM :
                Winter Fancy Food Show (WFFS) 2022 pada tanggal 6-8 Februari 2022 di Las Vegas, USA 
                
                2. Business Matching Export:
                a. BM antara Koperasi Sikopel Mitreka satata (Kopi Kailasa) dan 6Oz Caffee Singapore difasilitasi KPwBI Purwokerto dan KPwLN Singapore
                b. Pengiriman sampel produk kopi kailasa kepada potensial buyer yang difasilitasi oleh DUPK"
                ',
            'periode'=>$dt->setDateTime(2022, 2, 1, 11, 32, 5),
         ]);
         IKU::create([
            'indikator'=>'11',
            'realisasi'=>'0',
            'status'=>'On Track',
            'keterangan'=>'Program Pengembangan UMKM Subsisten KUBE Legen Sari (Banyumas):
            Pada tanggal 23 Februari 2022, KUBE Legen Sari telah mengikuti pelatihan Penyuluh Keamanan Pangan sebagai syarat pembuatan PIRT sebagai salah satu jaminan kepada konsumen terkait produk gula semut yang diproduksi. Target selanjutnya yaitu pengurusan PIRT dan Halal.',
            'periode'=>$dt->setDateTime(2022, 2, 1, 11, 32, 5),
         ]);
         //18
         IKU::create([
            'indikator'=>'12',
            'realisasi'=>'0',
            'status'=>'On Track',
            'keterangan'=>'Kurasi KKI 2022 :
            Pada bulan Februari telah dilakukan pendaftaran UMKM guna pelaksanaan KKI 2022 yang dilakukan bersinergi dengan KPw Se Jawa Tengah. Jumlah UMKM diwilayah eks Karesidenan Banyumas yang mendaftar sebanyak 209 UMKM. Pada bulan maret akan dilakukan seleksi tahap dua menjadi 50 UMKM terpilih yang selanjutnya akan dikurasi secara offline.',
            'periode'=>$dt->setDateTime(2022, 2, 1, 11, 32, 5),
         ]);
         IKU::create([
            'indikator'=>'13',
            'realisasi'=>'123',
            'status'=>'On Track',
            'keterangan'=>'Telah dilaksanakan edukasi ekonomi dan keuangan inklusif pada tanggal 11 Februari 2022 terhadap 123 peserta secara hybrid. 36 peserta enumerator survei dari STIE Muhammadiyah Cilacap dan CV. Mitra Lestari Risetindo hadir secara offline di Hotel Braling Purbalingga dan 87 Peserta dari GenBI hadir secara online melalui platform zoom meeting.',
            'periode'=>$dt->setDateTime(2022, 2, 1, 11, 32, 5),
         ]);
         IKU::create([
            'indikator'=>'14',
            'realisasi'=>' ',
            'status'=>'On Track',
            'keterangan'=>'Kegiatan BM dilakukan pada tanggal 16 Februari 2022 merupakan BM yang dilakukan dalam rangka kegiatan road to GBBI, KKI dan FesmaBI 2022. Kegiatan BM dilakukan secara virtual/online melalui platform zoom meeting.
            Jumlah UMKM yang mengajukan pembiayaan pasca BM sampai Maret 2022 :
            Bank Syariah Indonesia – 6 UMKM (Tersebar pada 4 Kabupaten)
            Bank Rakyat Indonesia – 26 UMKM (Tersebar pada 4 Kabupaten)',
            'periode'=>$dt->setDateTime(2022, 2, 1, 11, 32, 5),
         ]);
         //21
         IKU::create([
            'indikator'=>'15',
            'realisasi'=>' ',
            'status'=>'On Track',
            'keterangan'=>'Hingga bulan februari 2022 belum terdapat pengaduan konsumen',
            'periode'=>$dt->setDateTime(2022, 2, 1, 11, 32, 5),
         ]);
         IKU::create([
            'indikator'=>'16',
            'realisasi'=>' ',
            'status'=>'On Track',
            'keterangan'=>'- Telah menyampaikan kompilasi laporan pengawasan bulan Juli-Desember 2022
            - Akan dilakukan sosialisasi dan capacity building mengenai TPPu & TPPT pada bulan April 2022',
            'periode'=>$dt->setDateTime(2022, 2, 1, 11, 32, 5),
         ]);
         IKU::create([
            'indikator'=>'17',
            'realisasi'=>'50%',
            'status'=>'On Track',
            'keterangan'=>'Telah dilaksanakan pemeriksaan kepada 3 KUPVA BB (PT. ABS, PT. WAJ dan PT. SAMC, dan hasil temuan sudah ditindaklanjuti sesuai jatuh tempo',
            'periode'=>$dt->setDateTime(2022, 2, 1, 11, 32, 5),
         ]);
         IKU::create([
            'indikator'=>'18',
            'realisasi'=>'124',
            'status'=>'On Track',
            'keterangan'=>'Telah dilaksanakan DEWEJANG DIGITAL I, merupakan sosialisasi transaksi digital kepada surveyor rekanan KPwBI Purwokerto dan Mahasiswa Unsoed dan STIE Cilacap berjumlah 124 orang. Pada akhir acara telah dilaksanakan survey pemahaman kepada seluruh peserta dengan tingkat pemahaman sebesar 81%',
            'periode'=>$dt->setDateTime(2022, 2, 1, 11, 32, 5),
         ]);
         IKU::create([
            'indikator'=>'19',
            'realisasi'=>'81%',
            'status'=>'On Track',
            'keterangan'=>'Telah dilaksanakan DEWEJANG DIGITAL I, merupakan sosialisasi transaksi digital kepada surveyor rekanan KPwBI Purwokerto dan Mahasiswa Unsoed dan STIE Cilacap berjumlah 124 orang. Pada akhir acara telah dilaksanakan survey pemahaman kepada seluruh peserta dengan tingkat pemahaman sebesar 81%',
            'periode'=>$dt->setDateTime(2022, 2, 1, 11, 32, 5),
         ]);
         IKU::create([
            'indikator'=>'20',
            'realisasi'=>'1',
            'status'=>'On Track',
            'keterangan'=>'Telah dilaksanakan DEWEJANG DIGITAL I, merupakan sosialisasi transaksi digital kepada surveyor rekanan KPwBI Purwokerto dan Mahasiswa Unsoed dan STIE Cilacap berjumlah 124 orang. Pada akhir acara telah dilaksanakan survey pemahaman kepada seluruh peserta dengan tingkat pemahaman sebesar 81%',
            'periode'=>$dt->setDateTime(2022, 2, 1, 11, 32, 5),
         ]);
         IKU::create([
            'indikator'=>'21',
            'realisasi'=>' ',
            'status'=>'On Track',
            'keterangan'=>'"Realisasi outflow Jan-Februari 2022 terhadap proyeksi Jan-Des 2022 (saldo dalam jutaan) UPB 8,31% dan UPK 5,57%
            Realisasi Februari 2022 terhadap proyeksi Februari 2022
            UPB 301.095, Realisasi 720.625 (239,33%)
            UPK 9.207, Realisasi 9.270 (100,68%)
            Realisasi Jan-Feb 2022 terhadap proyeksi Jan-Feb 2022
            UPB 507.070, Realisasi 835.999 (164,87%)
            UPK 33.609, Realisasi 22.940 (68,26%)
            Realisasi Jan-Feb 2022 terhadap proyeksi Jan-Des 2022
            UPB 10.064.914, Realisasi 835.999 (8,31%)
            UPK 411.802, Realisasi 22.940 (5.57%)
            
            Realisasi inflow Jan-Feb 2022 terhadap proyeksi Jan-Des 2022 (saldo dalam jutaan) UPB 14,69% dan UPK 3,06%
            Realisasi Februari 2022 terhadap proyeksi Februari 2022
            UPB 988.511, Realisasi 639.707 (64,71%)
            UPK 45.541, Realisasi 168 (0,37%)
            Realisasi Jan-Feb 2022 terhadap proyeksi Jan-Feb 2022
            UPB  2.773.693, Realisasi 2.291.248 (82,61%)
            UPK 107.988, Realisasi 32.480 (30,08%)
            Realisasi Jan-Feb 2022 terhadap proyeksi Jan-Des 2022
            UPB 15.597.617, Realisasi 2.291.248 (14,69%)
            UPK 1.060.340, Realisasi 32.480 (3,06%)
            
            Realisasi pemusnahan Jan-Feb 2022 terhadap proyeksi Jan-Des 2022 (saldo dalam jutaan) UPB 5,87% dan UPK 4,73%
            Realisasi Februari 2022 terhadap proyeksi Februari 2022
            UPB 198.747, Realisasi 0 (0%)
            UPK 35.423, Realisasi 0 (0%);
            Realisasi Jan-Feb 2022 terhadap proyeksi Jan-Feb 2022
            UPB 755.928, Realisasi 201.629 (26,67%)
            UPK 82,519, Realisasi 33.090 (40,10%)
            Realisasi Jan-Feb 2022 terhadap proyeksi Jan-Des 2022
            UPB 3.436.224, Realisasi 201.629 (5,87%)
            UPK 698.983, Realisasi 33.090 (4.73%"
            ',
            'periode'=>$dt->setDateTime(2022, 2, 1, 11, 32, 5),
         ]);
         //30
         IKU::create([
            'indikator'=>'22',
            'realisasi'=>'19.50%',
            'status'=>'On Track',
            'keterangan'=>'Realisasi Pengolahan MSUK-R Jan-Feb 2022 terhadap proyeksi Jan-Des 2022 (dalam brood) sebesar 13.010 brood atau 19,5%
            Realisasi Februari 2022 terhadap proyeksi Februari 2022
            Target 5.550, Realisasi 7.550 (136%)
            Realisasi Jan-Feb 2022 terhadap proyeksi Jan-Feb 2022
            Target 11.100, Realisasi 13.010 (117,2%)
            Realisasi Jan-Feb 2022 terhadap proyeksi Jan-Des 2022
            Target 66.600, Realisasi 13.010 (19,5%)',
            'periode'=>$dt->setDateTime(2022, 2, 1, 11, 32, 5),
         ]);
         IKU::create([
            'indikator'=>'23',
            'realisasi'=>'0.05%',
            'status'=>'On Track',
            'keterangan'=>'Deviasi s.d  Februari 20212adalah 0,05%
            Realisasi pemenuhan dibandingkan permintaan kebutuhan uang oleh perbankan pada bulan Februari r 2022 mengalami deviasi sebesar 0%, sedangkan dari bulan Januari s.d. Februari 2022 mengalami deviasi sebesar 0,05% dengan deviasi maksimal sebesar 10%. HSBC pada bulan JanuariI gagal melakukan penarikan karena reference code dari BISILK tidak terkirim ke CBS.',
            'periode'=>$dt->setDateTime(2022, 2, 1, 11, 32, 5),
         ]);
         IKU::create([
            'indikator'=>'24',
            'realisasi'=>' ',
            'status'=>'On Track',
            'keterangan'=>'Direncanakan akan dilaksanakan  1 (satu) kali pada Bulan Maret 2022',
            'periode'=>$dt->setDateTime(2022, 2, 1, 11, 32, 5),
         ]);
         //sampe kuning
         IKU::create([
            'indikator'=>'25',
            'realisasi'=>' ',
            'status'=>' ',
            'keterangan'=>' ',
            'periode'=>$dt->setDateTime(2022, 2, 1, 11, 32, 5),
         ]);
         IKU::create([
            'indikator'=>'26',
            'realisasi'=>' ',
            'status'=>'On Track',
            'keterangan'=>'Sampai dengan bulan Februari 2022 sudah dilaksanakan CBP 1  (satu) kali pada bulan Januari, direncanakanpada bulan maret akan dilaksanakan CBP sebanyak 2 (dua) kali',
            'periode'=>$dt->setDateTime(2022, 2, 1, 11, 32, 5),
         ]);
         IKU::create([
            'indikator'=>'27',
            'realisasi'=>' ',
            'status'=>'On Track',
            'keterangan'=>'Sampai dengan bulan Februari 2022 sudah dilaksanakan CBP 1  (satu) kali pada bulan Januari, direncanakanpada bulan maret akan dilaksanakan CBP sebanyak 2 (dua) kali',
            'periode'=>$dt->setDateTime(2022, 2, 1, 11, 32, 5),
         ]);
         IKU::create([
            'indikator'=>'28',
            'realisasi'=>' ',
            'status'=>'On Track',
            'keterangan'=>'Sampai dengan bulan Februari 2022 sudah dilaksanakan CBP 1  (satu) kali pada bulan Januari, direncanakanpada bulan maret akan dilaksanakan CBP sebanyak 2 (dua) kali',
            'periode'=>$dt->setDateTime(2022, 2, 1, 11, 32, 5),
         ]);
         IKU::create([
            'indikator'=>'29',
            'realisasi'=>'0',
            'status'=>'On Track',
            'keterangan'=>'Telah dilaksanakan Workshop TP2DD yang dihadiri oleh anggota TP2DD seluruh Kabupaten yang berada di wilayah Kerja. Tujuannya untuk menyusun peta jalan dan rencana kerja TP2DD dalam rangka mencapai predikat Pemda Digital. Dalam workshop ini juga dilaksanakan deklarasi Pemda Digital',
            'periode'=>$dt->setDateTime(2022, 2, 1, 11, 32, 5),
         ]);
         IKU::create([
            'indikator'=>'30',
            'realisasi'=>'0',
            'status'=>'On Track',
            'keterangan'=>'- Penginputan SIP2DD baru akan dilakukan pada Bulan Juni dan Desember.
            - Untuk mempersiapkan, secara rutin sudah dilakukan sosialisasi kepada tim teknis TP2DD untuk mempersiapkan data-data yang dibutuhkan
            - Melaksanakan workshop pengisian SIP2DD pada bulan Mei dan November',
            'periode'=>$dt->setDateTime(2022, 2, 1, 11, 32, 5),
         ]);
         IKU::create([
            'indikator'=>'31',
            'realisasi'=>' ',
            'status'=>'On Track',
            'keterangan'=>'Pada tanggal 16 Februari 2022 telah dilakukan edukasi pembiayaan UMKM pada 200 UMKM dari 4 Kabupaten di wilayah eks Karesidenan Banyumas. Adapun materi edukasi yaitu :
            1. Pembiayaan usaha dengan skema KUR konvensional
            2. Pembiayaan UMKM dengan skema KUR Syariah
            3. Pembiayaan UMKM dengan skema SME Syariah Funding
            ',
            'periode'=>$dt->setDateTime(2022, 2, 1, 11, 32, 5),
         ]);
         IKU::create([
            'indikator'=>'32',
            'realisasi'=>'0',
            'status'=>'On Track',
            'keterangan'=>'Telah dilakukan survey pada calon pesantren yang akan menjadi program pengembangan pelaku usaha syariah yaitu:
            1. PP. Tanghibul Ghafilin / Alif ba (Banjarnegara)
            2. PP. Darussalam (Banyumas)
            3. PP. Roudlotul Ilmi (Banyumas) 
            4. PP.  Baitaul Quran As Suyuthi  Maribaya (Purbalingga)',
            'periode'=>$dt->setDateTime(2022, 2, 1, 11, 32, 5),
         ]);
         IKU::create([
            'indikator'=>'33',
            'realisasi'=>'0',
            'status'=>'On Track',
            'keterangan'=>'Telah dilakukan monitoring pada ponpes eksisting dengan hasil monitoring sbb:
            1. PP MBS Wanayasa (Banjarnegara) : telah dilakukan pelatihan penyemaian, penanaman, aplikasi kolam dan perawatan kolam serta telah dilakukan panen pokcoy (sayuran hidroponik) perdana
            2. PP Darul Ulum (Banyumas) : hasil budidaya lele dengan metode bioflok berjalan baik, rencana selanjutnya adalah pengadaan freezer guna penyimpanan hasil olahan ikan.
            3. PP Darul Aitam Nurul Iman (Cilacap) : budidaya ayam berjalan dengan baik, rencana selanjutnya yaitu pembuatan Rumah Potong Ayam (RPA)
            4. PP At Taujieh Al Islamy : survey rencana program unit usaha pengolahan air minum (gedung prosesing dan pengemasan botol)',
            'periode'=>$dt->setDateTime(2022, 2, 1, 11, 32, 5),
         ]);
         IKU::create([
            'indikator'=>'34',
            'realisasi'=>'1',
            'status'=>'On Track',
            'keterangan'=>'Telah dilaksanakan pengukuhan Pengurus Hebitren Korda Banyumas oleh Ketua Umum DPP Hebitren KH. Drs. Moh Hasib Wahab pada tanggal 26 Februari 2022 di Ponpes Miftahul Huda Rawalo Kab. Banyumas sesuai dengan Surat Keputusan DPP Hebitren No 002.001/SK-Korda/DPP-Hebitren/II/2022 tgl 22 Februari 2022 Tentang Pembentukan dan Susunan Personalia Pengurus Koordinator Daerah Himpunan Ekonomi Bisnis Pesantren (Korda Hebitren) Banyumas, Provinsi Jawa Tengah Untuk Pertama Kali Periode 2022-2027',
            'periode'=>$dt->setDateTime(2022, 2, 1, 11, 32, 5),
         ]);
         IKU::create([
            'indikator'=>'35',
            'realisasi'=>'0',
            'status'=>'On Track',
            'keterangan'=>'Telah dilakukan kurasi dan penyampaian data sebanyak 25 UMKM yang akan diikutsertakan dalam proses sertifikasi layak halal bersama KPwBI Prov Jateng melalui Memo No 24/88/Pwt/M.01/B tgl 23 Februari 2022 perihal Sinergi Program Dalam Rangka Sertifikasi Halal Produk UMKM Binaan/ Mitra Kantor Perwakilan Bank Indonesia Se- Jawa Tengah Tahun 2022',
            'periode'=>$dt->setDateTime(2022, 2, 1, 11, 32, 5),
         ]);
         IKU::create([
            'indikator'=>'36',
            'realisasi'=>'0',
            'status'=>'On Track',
            'keterangan'=>'Telah dilakukan survey dan pendataan awal kepada UMKM calon IKRA 2022 sektor food yaitu :
            1. CV Kebontops/ PT. SOA (Banyumas)
            2. Abon Koki (Purbalingga)',
            'periode'=>$dt->setDateTime(2022, 2, 1, 11, 32, 5),
         ]);
         IKU::create([
            'indikator'=>'37',
            'realisasi'=>' ',
            'status'=>'On Track',
            'keterangan'=>'Akan dilaksanakan FESMABI di bulan Agustus 2022 sebagai bagian dari Road To FESyar',
            'periode'=>$dt->setDateTime(2022, 2, 1, 11, 32, 5),
         ]);
         IKU::create([
            'indikator'=>'38',
            'realisasi'=>'80,37%',
            'status'=>'On Track',
            'keterangan'=>'Telah dilaksanakan edukasi ekonomi dan keuangan syariah kali yatu  pada tanggal 26 Februari 2022 terhadap 40  peserta yang terdiri dari santri dan pengurus RMI putri Kabupaten Banyumas .dengan hasil nilai pemahaman peserta sebesar 80,37 %',
            'periode'=>$dt->setDateTime(2022, 2, 1, 11, 32, 5),
         ]);
         IKU::create([
            'indikator'=>'39',
            'realisasi'=>' ',
            'status'=>'On Track',
            'keterangan'=>'Pelaksanaan self governance dan pemantauan tahunan akan dilakukan pada periode Maret 2022. Area pemantauan pada triwulan I akan dilakukan pada 3 area utama yaitu pengadaan barang dan jasa, keuangan intern, serta pengelolaan aset.',
            'periode'=>$dt->setDateTime(2022, 2, 1, 11, 32, 5),
         ]);
         IKU::create([
            'indikator'=>'40',
            'realisasi'=>'0%',
            'status'=>'On Track',
            'keterangan'=>'Rencana penyaluran PSBI mulai dilakukan pada bulan Maret 2022:
            - Pembayaran beasiswa Tahap 1 SMK N 1 Purwokerto Rp.90.000.000.000,00 (Maret)
            - Pembayaran beasiswa Tahap 1 UIN Saizu Purwokerto Rp.300.000.00,00 (Maret)
            - Pembayaran bantuan PSBI Kecamatan Kampung Laut Rp.144.897.700,00 (Maret)
            - Pembayaran bantuan PSBI TK Aisyiah Rp.3.759.500 (Maret)',
            'periode'=>$dt->setDateTime(2022, 2, 1, 11, 32, 5),
         ]);
         //52
         IKU::create([
            'indikator'=>'41',
            'realisasi'=>'10%',
            'status'=>'Off Track',
            'keterangan'=>'1. Pelaksanaan ISO Surveillance Arsip menunggu jadwal yang akan diinfromasikan oleh Satker CM.
            2. Sebagai langkah persiapan dalam rangka surveillance ISO Arsip, telah dilakukan penatausahaan dokumen secara mendiri dan melakukan penguatan dengan melakukan rekrutmen tenaga pedukung arsip dalam percepatan penyelesaian penatausahaan arsip.',
            'periode'=>$dt->setDateTime(2022, 2, 1, 11, 32, 5),
         ]);

         IKU::create([
            'indikator'=>'42',
            'realisasi'=>'10%',
            'status'=>'On Track',
            'keterangan'=>'Telah disampaikan informasi dan rekomendasi mengenai pengembangan perekonomian dan inflasi kepada Pemerintah Daerah pada awal bulan Januari dan Februari 2022',
            'periode'=>$dt->setDateTime(2022, 2, 1, 11, 32, 5),
         ]);
         IKU::create([
            'indikator'=>'43',
            'realisasi'=>'10%',
            'status'=>'On Track',
            'keterangan'=>'Telah dilakukan penyusunan asesmen mengenai perkembangan inflasi Purwokerto dan Cilacap pada awal bulan Januari dan Februari 2022 serta mengenai isu strategis REKDA Januari 2022.',
            'periode'=>$dt->setDateTime(2022, 2, 1, 11, 32, 5),
         ]);

         IKU::create([
            'indikator'=>'44',
            'realisasi'=>'20%',
            'status'=>'On Track',
            'keterangan'=>'Telah tersedianya net risk assesment AP PPT khususnya untuk KUPVA BB yang telah dilakukan pemeriksaan yaitu PT. ABS, PT. WAJ dan PT. SAMC',
            'periode'=>$dt->setDateTime(2022, 2, 1, 11, 32, 5),
         ]);
         IKU::create([
            'indikator'=>'45',
            'realisasi'=>'16.67%',
            'status'=>'On Track',
            'keterangan'=>'Seluruh data hasil survei PIHPS sampai dengan bulan Februari 2022 telah disampaikan/di-upload dan divalidasi tepat waktu (sebelum pukul 12.00 WIB) dan sesuai dengan ToR (100%).
            Kualitas data Survei PIHPS Pasar Tradisional (bobot : 50%) = 6 
            Kualitas data Survei PIHPS Pasar Modern (bobot : 25%) = 6
            Kualitas data Survei PIHPS Pedagang Besar (bobot : 25%) = 6
            ',
            'periode'=>$dt->setDateTime(2022, 2, 1, 11, 32, 5),
         ]);
         IKU::create([
            'indikator'=>'46',
            'realisasi'=>'0',
            'status'=>'On Track',
            'keterangan'=>'Kegiatan liaison pada triwulan I-2022 telah berjalan 80%. Adapun laporan triwulanan akan disubmit pada tanggal 24 Maret 2022.',
            'periode'=>$dt->setDateTime(2022, 2, 1, 11, 32, 5),
         ]);
         IKU::create([
            'indikator'=>'47',
            'realisasi'=>'9.47%',
            'status'=>'Off Track',
            'keterangan'=>'"1. Realisasi anggaran Satker di Bulan Februari yaitu sebesar Rp1,1 miliar atau secara kumulatif sebesar Rp1,7 miliar dengan persentase sebagai berikut:
                a) Realisasi anggaran terhadap RPPB = 74,07% (target 100%)
                b) Realisasi anggaran terhadap PKARI = 9,47% (target 13%)
                2. Terdapat program kerja pada beberapa unit yang masih berjalan dan belum dilakukan pembebanan anggaran dengan nominal yang realtif cukup besar."
                ',
            'periode'=>$dt->setDateTime(2022, 2, 1, 11, 32, 5),
         ]);
         IKU::create([
            'indikator'=>'48',
            'realisasi'=>'9.47%',
            'status'=>'On Track',
            'keterangan'=>'Telah disusun rencana realisasi anggaran masing-masing unit kerja dengan target realisasi sebesar 90%',
            'periode'=>$dt->setDateTime(2022, 2, 1, 11, 32, 5),
         ]);
         IKU::create([
            'indikator'=>'49',
            'realisasi'=>'100%',
            'status'=>'On Track',
            'keterangan'=>'Tidak terdapat penarikan uang muka kegiatan pada periode Februari 2022',
            'periode'=>$dt->setDateTime(2022, 2, 1, 11, 32, 5),
         ]);
         IKU::create([
            'indikator'=>'50',
            'realisasi'=>'100%',
            'status'=>'On Track',
            'keterangan'=>'Jumlah Penarikan Uang Muka pada periode Februari 2022 yaitu sebanyak 26 Uang Muka. Dari jumlah tersebut, terdapat 4 uang muka yang belum dipertanggungjawabkan namun belum melebihi 7 hari kerja',
            'periode'=>$dt->setDateTime(2022, 2, 1, 11, 32, 5),
         ]);
         IKU::create([
            'indikator'=>'51',
            'realisasi'=>'100%',
            'status'=>'On Track',
            'keterangan'=>'Penyampaian laporan pajak untuk periode Januari 2022 telah dilaporkan sesuai dengan batas waktu yang ditentukan (tidak melebihi batas waktu pelaporan tanggal 20 Februari 2022) dengan tanggal penyampaian:
            - 14 Februari 2022 untuk PPh Ps 23
            - 18 Februari 2022 untuk PPh Ps 21',
            'periode'=>$dt->setDateTime(2022, 2, 1, 11, 32, 5),
         ]);
         IKU::create([
            'indikator'=>'52',
            'realisasi'=>'0%',
            'status'=>'On Track',
            'keterangan'=>'Tidak terdapat transaksi cancel dari 67 transaksi pada periode Februari 2022.',
            'periode'=>$dt->setDateTime(2022, 2, 1, 11, 32, 5),
         ]);
         IKU::create([
            'indikator'=>'53',
            'realisasi'=>'100%',
            'status'=>'On Track',
            'keterangan'=>'Pada periode Februari 2022 telah dilakukan pemenuhan dokumen permintaan audit terkait dengan pengelolaan aset dan dokumen pengadaan asuransi. Sehubungan dengan hal tersebut, maka seluruh dokumen permintaan audit telah dipenuhi.',
            'periode'=>$dt->setDateTime(2022, 2, 1, 11, 32, 5),
         ]);
         IKU::create([
            'indikator'=>'54',
            'realisasi'=>'76.7%',
            'status'=>'Off Track',
            'keterangan'=>'"1. Penyampaian laporan LHKPN pada periode Februari 2022 tercapai 76,7% atau 33 pegawai yang telah melaporkan dari jumlah keseluruhan 43 pegawai.
            2. Menghimbau kepada pegawai yang belum menyampaikan laporan LHKPN dengan target batas waktu penyelesaian pada minggu ke 3 Bulan Maret 2022"
            ',
            'periode'=>$dt->setDateTime(2022, 2, 1, 11, 32, 5),
         ]);
         IKU::create([
            'indikator'=>'55',
            'realisasi'=>'100%',
            'status'=>'On Track',
            'keterangan'=>'Seluruh pegawai telah menyampaikan Surat Pernyataan Tahunan dan telah dilaporkan kepada DSDM',
            'periode'=>$dt->setDateTime(2022, 2, 1, 11, 32, 5),
         ]);
         IKU::create([
            'indikator'=>'56',
            'realisasi'=>'35%',
            'status'=>'On Track',
            'keterangan'=>'Seluruh pegawai telah melakukan pengisian IKI akhir tahun periode tahun lalu. Sedangkan untuk pengisian IKI Tahunan pegawai masih dalam proses pengisian sesuai dengan batas waktu yang ditentukan',
            'periode'=>$dt->setDateTime(2022, 2, 1, 11, 32, 5),
         ]);
         IKU::create([
            'indikator'=>'57',
            'realisasi'=>'10%',
            'status'=>'Off Track',
            'keterangan'=>'- Melaksanakan stock opname secara periodik.
            - Pelaksanaan pelaporan penatusahaan untuk periode I dilakukan pada Bulan Juni 2022 dan/atau menunggu arahan Satker CM',
            'periode'=>$dt->setDateTime(2022, 2, 1, 11, 32, 5),
         ]);
    }
}
