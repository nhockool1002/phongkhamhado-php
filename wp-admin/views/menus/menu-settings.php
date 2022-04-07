<?php
	require_once "checklogin.php";
	require_once "class_quantri.php";

    $sql = 'SELECT * FROM menu';

    $result = mysql_query($sql);

    $categories = array();

    while ($row = mysql_fetch_assoc($result)){
        $categories[] = $row;
    }

    function showMenuTable($categories, $parent_id = 0, $char = '')
    {
        foreach ($categories as $key => $item)
        {

            if ($item['parent_id'] == $parent_id)
            {
                echo "<tr>
                    <td width='35%'>{$char}{$item['name']}</td>
                    <td width='20%'><a href='{$item['link']}'>Đường dẫn liên kết</a></td>
                    <td width='20%' style='text-align: center;'>
                        <button type='button' class='btn btn-info editMenu' data-id='{$item['id']}'><span class='glyphicon glyphicon-pencil'></span></button>
                        <button type='submit' class='btn btn-danger deleteMenu' data-id='{$item['id']}'><span class='glyphicon glyphicon-remove-sign'></span></button>
                    </td>
                </tr>";
                unset($categories[$key]);

                showMenuTable($categories, $item['id'], $char.'<span class="spaceMenu">-</span>');
            }
        }
    }

    function showMenuOption($categories, $parent_id = 0, $char = '')
    {
        foreach ($categories as $key => $item)
        {
            if ($item['parent_id'] == $parent_id)
            {
                echo '<option value="'.$item['id'].'">';
                    echo $char . $item['name'];
                echo '</option>';

                unset($categories[$key]);

                showMenuOption($categories, $item['id'], $char.'|---');
            }
        }
    }
?>
<div class="contaier-fluid">
    <h4>CÀI ĐẶT MENU</h4>
    <div class="row">
        <div class="col-sm-6">
            <div class="alert alert-danger error-message" role="alert" style="display:none;"><b>THÊM MENU THẤT BẠI.</b></div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <form class="form-settings" id="formAll">
                <label for="parentMenu">Thư mục cha</label>
                <br />
                <select id="parentMenu" style="width: 100%">
                    <option value="0" selected></option>
                    <?php showMenuOption($categories) ?>
                </select>
                <br />
                <br />
                <label for="titleSetting">Tên Menu</label>
                <input class="form-control" type="text" id="titleMenu" max="255" style="width: 100%" required />
                <br />
                <label for="pathMenu">Đường dẫn</label>
                <textarea class="form-control" id="pathMenu" required></textarea>
                <br />
                <button type="submit" class="btn btn-warning submitForm taoMenu" id="cac">TẠO MENU</button>
                <button type="submit" class="btn btn-info editMenuForm" style="display: none;">CẬP NHẬT MENU</button>
            </form>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 menuAdminPanel">
            <table border="1" cellspacing="0" cellpadding="5">
                <tr>
                    <td colspan=3><strong>Menu</strong></td>
                </tr>
                <?php showMenuTable($categories); ?>
            </table>
        </div>
    </div>
</div>
<script>
    var parentMenu = $('#parentMenu');
    var titleMenu = $('#titleMenu');
    var pathMenu = $('#pathMenu');
    var submitForm = $('.form-settings');
    var editMenuForm = $('.editMenuForm');
    var deleteMenu = $('.deleteMenu');
    var editMenu = $('.editMenu');
    var currentId = -1;
    var mode = 0; // 0 add new 1 edit
    
        
    submitForm.submit(function(e) {
        e.preventDefault();

        if (titleMenu.val().length <= 0) return;
        if (pathMenu.val().length <= 0) return;
        if (mode == 0) {
            $.ajax({
                type: "POST",
                url: "../wp-admin/views/menus/ajax.php",
                data: {
                    title: titleMenu.val(),
                    path: pathMenu.val(),
                    parent: parentMenu.val(),
                    modules: "add-new-menu"

                },
                success: function(data) {
                    window.location.reload();
                },
                error: function(jqXHR, textStatus, error) {
                    $('.error-message').css('display', 'block');
                }
            })
        } else {
            $.ajax({
                type: "POST",
                url: "../wp-admin/views/menus/ajax.php",
                data: {
                    id: currentId,
                    title: titleMenu.val(),
                    path: pathMenu.val(),
                    parent: parentMenu.val(),
                    modules: "submit-edit-menu"

                },
                success: function(data) {
                    window.location.reload();
                },
                error: function(jqXHR, textStatus, error) {
                    $('.error-message').css('display', 'block');
                }
            })
        }
    });
    
    deleteMenu.click(function(e) {
        e.preventDefault();
        
        var id = $(this).attr('data-id');
        if (confirm("Are you sure delete it ?")) {
            $.ajax({
                type: "POST",
                url: "../wp-admin/views/menus/ajax.php",
                data: {
                    id,
                    modules: "delete-menu"

                },
                success: function(data) {
                    window.location.reload();
                },
                error: function(jqXHR, textStatus, error) {
                    $('.error-message').css('display', 'block');
                    $('.error-message').text(error);
                }
            })
        }
    });
    
    editMenu.click(function(e) {
        e.preventDefault();
        
        $('.taoMenu').css("display", "none");
        editMenuForm.css("display", "block");
        mode = 1;
        
        var id = $(this).attr('data-id');
        currentId = id;
        
        $(`#parentMenu option[value='${id}']`).each(function() {
            $(this).remove();
        });
        
        editMenu.attr('disabled', true);
        deleteMenu.attr('disabled', true);

        $.ajax({
            type: "POST",
            url: "../wp-admin/views/menus/ajax.php",
            data: {
                id,
                modules: "edit-menu"

            },
            success: function(data) {
                var jsonData = JSON.parse(data);
                parentMenu.val(jsonData.ParentId).change();
                titleMenu.val(jsonData.Title);
                pathMenu.val(jsonData.Path);
            },
            error: function(jqXHR, textStatus, error) {
                $('.error-message').css('display', 'block');
                $('.error-message').text(error);
            }
        })
    });
    
    
</script>
