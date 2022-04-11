<?php
    require_once "func.php";

    $advises = getAllAdviseAdmin();
?>
<div class="contaier-fluid">
    <h4>DANH SÁCH TƯ VẤN</h4>
    <div class="row">
        <div class="col-sm-12">
            <table id="table_id" class="display">
                <thead>
                    <tr>
                        <th>Họ và tên</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>
                        <th>Chuyên khoa</th>
                        <th>Nguồn</th>
                        <th>Trạng thái</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($advises as $item) { ?>
                        <tr>
                        <td><?php echo $item['HoTen']; ?></td>
                        <td><?php echo $item['SoDienThoai']; ?></td>
                        <td><?php echo $item['Email']; ?></td>
                        <td><?php echo $item['ChuyenKhoa']; ?></td>
                        <td><?php echo $item['Source']; ?></td>
                        <td>
                            <?php 
                                if ($item['TrangThai'] == 1) {
                                    echo "Đã xử lý";
                                }  else {
                                    echo "<button class='btn btn-info xuliAdvise' data-id={$item['id']}>Xử lý</button>";
                                } 
                            ?>
                        </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<style>
    #table_id {
        width: 100% !important;
    }
    #content table th, #content table tr:first-child {
        background-color: unset !important;
        color: black;
    }
    table.dataTable.display tbody tr.odd>.sorting_1, table.dataTable.order-column.stripe tbody tr.odd>.sorting_1 {
        background-color: unset !important;
    }
</style>
<script>
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );

    $('.xuliAdvise').click(function() {
       var id = $(this).attr('data-id');
       $.ajax({
            type: "POST",
            url: "../wp-admin/views/advise/ajax.php",
            data: {
                modules: "exec-advise",
                id
            },
            success: function(data) {
                toastr.success("Xử lý Tư Vấn thành công");
                window.location.reload();
            },
            error: function(jqXHR, textStatus, error) {
                toastr.error(error);
            }
        })
    });
</script>