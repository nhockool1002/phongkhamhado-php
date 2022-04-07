<?php
	require_once "checklogin.php";
	require_once "class_quantri.php";
?>
<div class="contaier-fluid">
    <h4>CÀI ĐẶT CHUNG</h4>
    <div class="row">
        <div class="col-sm-6">
            <div class="alert alert-success success-message" role="alert" style="display:none;"><b>CẬP NHẬT THÀNH CÔNG !!! </b></div>
            <div class="alert alert-danger error-message" role="alert" style="display:none;"><b>CẬP NHẬT THẤT BẠI !!! </b></div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <form class="form-settings">
                <label for="titleSetting">Tiêu đề</label>
                <input class="form-control" type="text" id="titleSetting" max="255" style="width: 100%" />
                <br />
                <label for="descriptionSetting">Mô tả</label>
                <textarea class="form-control" id="descriptionSetting"></textarea>
                <br />
                <button type="submit" class="btn btn-warning submitForm">Submit</button>
            </form>
        </div>
    </div>
</div>
<script>
    var titleSetting = $('#titleSetting');
    var desSetting = $('#descriptionSetting');

    $(document).ready(function() {
        $.ajax({
            type: "POST",
            url: "../wp-admin/views/settings/ajax.php",
            data: {
                modules: "onload-settings"
                
            },
            success: function(data) {
                var jsonData = JSON.parse(data);
                titleSetting.val(jsonData.Title);
                desSetting.val(jsonData.Description);
            },
            error: function(jqXHR, textStatus, error) {
                console.log(error);
                alert("ERROR LOAD");
            }
        })
    });

    $(".form-settings").submit(function(e) {
        e.preventDefault();

        $.ajax({
            type: "POST",
            url: "../wp-admin/views/settings/ajax.php",
            data: {
                title: titleSetting.val(),
                description: desSetting.val(),
                modules: "update-settings"
                
            },
            success: function(data) {
                $('.success-message').css('display', 'block');
            },
            error: function(jqXHR, textStatus, error) {
                $('.error-message').css('display', 'block');
            }
        })
    });
</script>
