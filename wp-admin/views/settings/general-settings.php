<?php
	require_once "checklogin.php";
	require_once "class_quantri.php";
?>
<div class="contaier-fluid">
    <h4>CÀI ĐẶT CHUNG</h4>
    <div class="row">
        <form class="form-settings">
            <div class="col-sm-6">
                    <label for="titleSetting">Tiêu đề</label>
                    <input class="form-control" type="text" id="titleSetting" max="255" style="width: 100%" />
                    <br />
                    <label for="descriptionSetting">Mô tả</label>
                    <textarea class="form-control" id="descriptionSetting"></textarea>
                    <br />
                    <label for="locationSetting">Địa chỉ</label>
                    <textarea class="form-control" id="locationSetting"></textarea>
                    <br />
                    <label for="phoneSetting">Số điện thoại</label>
                    <input class="form-control" type="text" id="phoneSetting" max="255" style="width: 100%" />
                    <br />
                    <label for="copyrightSetting">Copyright</label>
                    <input class="form-control" type="text" id="copyrightSetting" max="255" style="width: 100%" />
                    <br />
                    <button type="submit" class="btn btn-warning submitForm btn-block w-100">Submit</button>
            </div>
            <div class="col-sm-6">
                    <label for="facebookSetting">Facebook</label>
                    <input class="form-control" type="text" id="facebookSetting" max="255" style="width: 100%" />
                    <br />
                    <label for="twitterSetting">Twitter</label>
                    <input class="form-control" type="text" id="twitterSetting" max="255" style="width: 100%" />
                    <br />
                    <label for="instagramSetting">Instagram</label>
                    <input class="form-control" type="text" id="instagramSetting" max="255" style="width: 100%" />
                    <br />
                    <label for="youtubeSetting">Youtube</label>
                    <input class="form-control" type="text" id="youtubeSetting" max="255" style="width: 100%" />
                    <br />
                    <label for="websiteSetting">Website</label>
                    <input class="form-control" type="text" id="websiteSetting" max="255" style="width: 100%" />
                    <br />
                    <label for="emailSetting">Email</label>
                    <input class="form-control" type="text" id="emailSetting" max="255" style="width: 100%" />
            </div>
        </form>
    </div>
</div>
<script>
    var titleSetting = $('#titleSetting');
    var desSetting = $('#descriptionSetting');
    var locationSetting = $('#locationSetting');
    var phoneSetting = $('#phoneSetting');
    var copyrightSetting = $('#copyrightSetting');
    var facebookSetting = $('#facebookSetting');
    var twitterSetting = $('#twitterSetting');
    var instagramSetting = $('#instagramSetting');
    var youtubeSetting = $('#youtubeSetting');
    var websiteSetting = $('#websiteSetting');
    var emailSetting = $('#emailSetting');

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
                locationSetting.val(jsonData.Location);
                phoneSetting.val(jsonData.Phone);
                copyrightSetting.val(jsonData.Copyright);
                facebookSetting.val(jsonData.Facebook);
                twitterSetting.val(jsonData.Twitter);
                instagramSetting.val(jsonData.Instagram);
                youtubeSetting.val(jsonData.Youtube);
                websiteSetting.val(jsonData.Website);
                emailSetting.val(jsonData.Mail);
            },
            error: function(jqXHR, textStatus, error) {
                toastr.error(error);
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
                location: locationSetting.val(),
                phone: phoneSetting.val(),
                copyright: copyrightSetting.val(),
                facebook: facebookSetting.val(),
                twitter: twitterSetting.val(),
                instagram: instagramSetting.val(),
                youtube: youtubeSetting.val(),
                website: websiteSetting.val(),
                email: emailSetting.val(),
                modules: "update-settings"
                
            },
            success: function(data) {
                toastr.success("Cập nhật thành công");
            },
            error: function(jqXHR, textStatus, error) {
                toastr.error(error);
            }
        })
    });
</script>
