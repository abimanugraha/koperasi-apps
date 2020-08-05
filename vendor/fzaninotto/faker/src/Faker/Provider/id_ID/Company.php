<?php

namespace Faker\Provider\id_ID;

class Company extends \Faker\Provider\Company
{
    protected static $formats = array(
        '{{companyPrefix}} {{lastName}}',
        '{{companyPrefix}} {{lastName}} {{lastName}}',
        '{{companyPrefix}} {{lastName}} {{companySuffix}}',
        '{{companyPrefix}} {{lastName}} {{lastName}} {{companySuffix}}',
    );

    /**
     * @link http://id.wikipedia.org/wiki/Jenis_badan_usaha
     */
    protected static $companyPrefix = array('PT', 'CV', 'UD', 'PD', 'Perum');

    /**
     * @link http://id.wikipedia.org/wiki/Jenis_badan_usaha
     */
    protected static $companySuffix = array('(Persero) Tbk', 'Tbk');

    /**
     * Get company prefix
     *
     * @return string company prefix
     */
    public static function companyPrefix()
    {
        return static::randomElement(static::$companyPrefix);
    }

    /**
     * Get company suffix
     *
     * @return string company suffix
     */
    public static function companySuffix()
    {
        return static::randomElement(static::$companySuffix);
    }

    protected static $jobTitleFormat = array(
        'Belum / Tidak Bekerja',
        'Mengurus Rumah Tangga',
        'Pelajar / Mahasiswa',
        'Pensiunan',
        'Pegawai Negeri Sipil',
        'Tentara Nasional Indonesia',
        'Kepolisian RI',
        'Perdagangan',
        'Petani / Pekebun',
        'Peternak',
        'Nelayan / Perikanan',
        'Industri',
        'Konstruksi',
        'Transportasi',
        'Karyawan Swasta',
        'Karyawan BUMN',
        'Karyawan BUMD',
        'Karyawan Honorer',
        'Buruh Harian Lepas',
        'Buruh Tani / Perkebunan',
        'Buruh Nelayan / Perikanan',
        'Buruh Peternakan',
        'Pembantu Rumah Tangga',
        'Tukang Cukur',
        'Tukang Listrik',
        'Tukang Batu',
        'Tukang Kayu',
        'Tukang Sol Sepatu',
        'Tukang Las / Pandai Besi',
        'Tukang Jahit',
        'Penata Rambut',
        'Penata Rias',
        'Penata Busana',
        'Mekanik',
        'Tukang Gigi',
        'Seniman',
        'Tabib',
        'Paraji',
        'Perancang Busana',
        'Penterjemah',
        'Imam Masjid',
        'Pendeta',
        'Pastur',
        'Wartawan',
        'Ustadz / Mubaligh',
        'Juru Masak',
        'Promotor Acara',
        'Anggota DPR-RI',
        'Anggota DPD',
        'Anggota BPK',
        'Presiden',
        'Wakil Presiden',
        'Anggota Mahkamah Konstitusi',
        'Anggota Kabinet / Kementerian',
        'Duta Besar',
        'Gubernur',
        'Wakil Gubernur',
        'Bupati',
        'Wakil Bupati',
        'Walikota',
        'Wakil Walikota',
        'Anggota DPRD Propinsi',
        'Anggota DPRD Kabupaten / Kota',
        'Dosen',
        'Guru',
        'Pilot',
        'Pengacara',
        'Notaris',
        'Arsitek',
        'Akuntan',
        'Konsultan',
        'Dokter',
        'Bidan',
        'Perawat',
        'Apoteker',
        'Psikiater / Psikolog',
        'Penyiar Televisi',
        'Penyiar Radio',
        'Pelaut',
        'Peneliti',
        'Sopir',
        'Pialang',
        'Paranormal',
        'Pedagang',
        'Perangkat Desa',
        'Kepala Desa',
        'Biarawati',
        'Wiraswasta'
    );
}
