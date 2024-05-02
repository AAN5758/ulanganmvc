$(function () {
  $(".tombolTambahData").on("click", function () {
    $("#formModalLabel").html("Tambah Data Mahasiswa");
    $(".modal-footer button[type=submit]").html("Tambah Data");
    $("#nama_lengkap").val("");
    $("#kelas").val("");
    $("#email").val("");
    $("#whatsapp").val("");
    $("#jenis_kelamin").val("");
    $("#alamat").val("");
    $("#id").val("");
  });

  $(".tampilModalUbah").on("click", function () {
    $("#formModalLabel").html("Ubah Data Mahasiswa");
    $(".modal-footer button[type=submit]").html("Ubah Data");
    $(".modal-body form").attr("action", "http://localhost/boilerplatemvc/public/mahasiswa/ubah");

    const id = $(this).data("id");

    $.ajax({
      url: "http://localhost/boilerplatemvc/public/mahasiswa/getubah",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#nama_lengkap").val(data.nama_lengkap);
        $("#kelas").val(data.kelas);
        $("#email").val(data.email);
        $("#whatsapp").val(data.whatsapp);
        $("#jenis_kelamin").val("data.jenis_kelamin");
        $("#alamat").val("data.alamat");
        $("#id").val("data.id");
      },
    });
  });
});
