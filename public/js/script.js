$(function() {

    $('.tombol-data-mahasiswa').on('click', function() {
        $('#formModalLabel').html('Tambah Data Mahasiswa');
        $('.tombol').html('Tambah Data');
    });

    $('.ubah').on('click', function() {
        $('#formModalLabel').html('Ubah Data Mahasiswa');
        $('.tombol').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost:8080/phpmvc/public/mahasiswa/ubah');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost:8080/phpmvc/public/mahasiswa/getubah',
            data: {id: id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#id').val(data.id);
                $('#nama').val(data.nama);
                $('#nim').val(data.nim);
                $('#jurusan').val(data.jurusan);
                $('#email').val(data.email);
                $('#foto').val(data.foto);
            }
        });

    });

});