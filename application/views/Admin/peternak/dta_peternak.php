<!-- DataTables -->
<script src="/assets/AdminLTE/plugins/datatables/jquery.dataTables.js"></script>
<script src="/assets/AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script>
    $(document).ready(function(){
        $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
                {
                    return {
                        "iStart": oSettings._iDisplayStart,
                        "iEnd": oSettings.fnDisplayEnd(),
                        "iLength": oSettings._iDisplayLength,
                        "iTotal": oSettings.fnRecordsTotal(),
                        "iFilteredTotal": oSettings.fnRecordsDisplay(),
                        "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
                        "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
                    };
                };
                
                var t = $("#mytable").dataTable({
                    dom: '<"top"if>rt<"bottom"p>',
                    initComplete: function() {
                        var api = this.api();
                        $('#mytable_filter input')
                            .off('.DT')
                            // melakukan proses ketika ada input otomatis
                            .on('input.DT', function() {
                                api.search(this.value).draw();
                            });
                    },
                    oLanguage: {
                        sProcessing: "Sedang Mengambil Data"
                    },
                    processing: true,
                    serverSide: true, 
                    searching: true, //untuk fitur search
                    ajax: {"url": "<?php echo base_url().'index.php/Peternak/tampil_data'?>", "type": "POST"},
                    columns: [
                        {
                            "data": "idfarm",
                            "orderable": false
                        },
                        {"data" : "nosiup"},
                        {"data" : "namafarm"},
                        {"data" : "alamatfarm"},
                        {"data" : "notelpfarm"},
                        {"data" : "namakelompok"},
                        {"data": "namakoperasi"},
                        {"data": "detail"}
                    ],
                    order: [[1, 'asc']],
                    rowCallback: function(row, data, iDisplayIndex) {
                        var info = this.fnPagingInfo();
                        var page = info.iPage;
                        var length = info.iLength;
                        var index = page * length + (iDisplayIndex + 1);
                        $('td:eq(0)', row).html(index);
                    }
                });

                 $('#mytable').on('click','.hapus_pengguna',function(){
                    var user_id=$(this).data('user_id');
                    $('#Modalhapus').modal('show');
                    $('[name="user_id"]').val(user_id);
                });
    // akhir fungsi 
    });


</script>
</body>
</html>