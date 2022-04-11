<table>
    <thead>
        <tr>
            <th>Periode</th>
            <th>Satker</th>
            <th>Jenis IKU</th>
            <th>Indikator IKU Satker</th>
            <th>Target IKU Satker</th>
            <th>Target IKU</th>
            <th>Sifat Hasil Kerja</th>
            <th>Realisasi</th>
            <th>Status</th>
            <th>Keterangan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $dt)
            <tr>
                <td>{{$dt->periode}}</td>
                <td>KPwDN Purwokerto</td>
                <td>{{ $dt->jenisdesc }}</td>
                <td>{{ $dt->indikatordesc }}</td>
                <td>{{ $dt->targetdesc }}</td>
                <td>{{ $dt->targetiku }}</td>
                <td>{{ $dt->sifatkerja}}</td>
                <td>{{ $dt->realisasi}}</td>
                <td>{{ $dt->status}}</td>
                <td>{{ $dt->keterangan}}</td>
            </tr>
        @endforeach
    </tbody>
</table>