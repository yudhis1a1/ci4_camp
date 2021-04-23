<?= $this->extend("layouts/template"); ?>

<?= $this->section("content") ?>
<h3>Data Siswa</h3>
<table class="table-bordered table-stripe">
    <tr>
        <th>Nama</th>
        <th>NIS</th>
        <th>Tanggal Lahir</th>
    </tr>
    <tr>
        <td>Andi Saputra</td>
        <td>101</td>
        <td>2003-02-01</td>
    </tr>
    <tr>
        <td>Budi Susanto</td>
        <td>101</td>
        <td>2000-02-01</td>
    </tr>
</table>
<?= $this->endSection(); ?>