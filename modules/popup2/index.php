<link rel="stylesheet" href="modules/popup2/css/style.css">
<style type="text/css">
	.popup{
		position: fixed;
		left: 50%;
		top: 50%;
		transform: translate(-50%, -50%);
		-ms-transform: translate(-50%, -50%); /* IE 9 */
		-webkit-transform: translate(-50%, -50%); /* Chrome, Safari, Opera */
		z-index: 99999;
	}
	.popup > div {
		position: relative;
	}
	.popup .close{
		cursor: pointer;
		position: absolute;
		display: block;
		top: 11%;
		right: 20%;
		background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3FpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDozZWEyNDI5ZC0yYmI3LWYzNDMtYjBjZi1jMGJjYTE4ODRmZjkiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6OUY2REUyNDQxNDE2MTFFNThBNEJENTVFNDA2QjFFOUEiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6OUY2REUyNDMxNDE2MTFFNThBNEJENTVFNDA2QjFFOUEiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjVmYzc3OTY1LWUxNWUtNGU0Ni04ODFjLTBlOTQ3YjBmMzBmNyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDozZWEyNDI5ZC0yYmI3LWYzNDMtYjBjZi1jMGJjYTE4ODRmZjkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz56uyuzAAABfUlEQVR42sSXvU7DMBDHYxCdw8IDMMCWTDwCdClznLcJr9BUfYs+ALDSqXMisTD3S4K1MBx3kS1ZVuqvNslf+kuRfL5f5OTsMwOAyEFX6DH6Ef2AvkXHYuwH/YVeod/Rr+g/a0YCGxyjC/QW3LUTc2JTbhOUo9cQrrXI4Qy+RM/hfJqLnEYwBSzg/FrocB1cQneaHQNn0L0yyWOinKg0PtE3Ubfaou+bEhRvUEB/KuRSj2x1muc51HVtzUgxnHNbGLFGBJ7YIquqgjRNjXAaS5KkiXXQhMBTl0gT3BNKKgn84RrdBg+AkpaR5z7cAAhEwEBo850JfPCdJeGBUNLhIqQYGWOtz17yXWp1edVlD1nqZQi07Zv7/lzTUOgJ8NJpA5FQU2JP+LPcMvfGIyXLnBISnGJdt8xBDom+j8Ud+k49FvtqBPix1mc2ROszaLM3WHurN/SbE4Ab34Zev8K82Opc017MMV5hmOel7Um5tF2LsW/l0vYm/GtL+C/AAAHy+OD95QLeAAAAAElFTkSuQmCC);
	    width: 30px;
	    height: 30px;
	}
	.popup  .img{
	}
	.popup .close-btn{
		position: absolute;
		width: 23%;
		height: 8%;
		top: 65%;
		left: 43%;
		cursor: pointer;
	}
	.popup .tuvan-btn{
		position: absolute;
		width: 23%;
		height: 8%;
		top: 65%;
		left: 67%;
		cursor: pointer;
	}
</style>

<?php  include_once 'blocks/popup.php'; ?>

<!--<div class="popup">
	<div>
		<span class="close"></span>
		<a href="<?php //  echo $link_chat;?>" target="_blank">
			<img src="modules/popup/img/popup.gif" class="img">
		</a>
		<a class="close-btn"></a>
		<a href="<?php echo $link_chat;?>" class="tuvan-btn" target="_blank"></a>
	</div>
</div>-->
<!-- <script src="modules/popup2/js/popup.js"></script> -->