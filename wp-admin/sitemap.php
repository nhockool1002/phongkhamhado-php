<style>
	.sitemap{}
	.sitemap #create-sitemap{
		background: #376ea6;
		color: #fff;
		font-size: 16px;
		border: none;
		padding: 1%;
		text-transform: uppercase;
		font-weight: bold;
		outline: none;
		cursor: pointer;
	}
    .sitemap .sm-confirm{
        display: none;
        padding:1% 0;
    }
    .sitemap .sm-confirm button{
		background: #999;
		border: none;
		color: #fff;
		padding: 1% 4%;
		cursor: pointer;
    }
    .sitemap .sm-confirm button:hover{
    	background: #222;
    }
    .sitemap .sm-logs{
        font-weight: bold;
        font-size: 12px;
        overflow: scroll;
        height: 400px;
    }
    .sitemap .sm-logs::-webkit-scrollbar
	{
		width: 32px;
		background-color: #F5F5F5;
	}

	.sitemap .sm-logs::-webkit-scrollbar-thumb
	{
		-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
		background-color: #555;
	}

	.sitemap .sm-logs > div{
        padding:4px 0;
    }
    .sitemap .waiting{
        background: url(img/loader.gif) no-repeat;
        background-position: center;
        display: inline-block;
        min-width: 16px;
        min-height: 11px;
        padding-left: 10px;
    }
    .sitemap .waiting.done{
        background: none;
    }
    .sitemap .waiting.true{
        color: blue;
    }
    .sitemap .waiting.false{
        color: red;
    }
</style>

<div class="sitemap">
	<div class="container">

		<div>
			<button id="create-sitemap">Tạo sitemap</button>
			<div class="sm-confirm">
				<button data-action="yes">Có</button>
				<button data-action="no">Không</button>
			</div>
		</div>		


		<div class="sm-logs">
			
		</div>

	</div>
</div>

<script>
// rảnh quá làm màu chơi thôi, chứ 1s tạo xong cmn cái sitemap rồi :D
! function(t) {
    var e = {},
        i = {
            _t: ["cate", "post"],
            _ad: {},
            _fn: [
                
            ],
            init: function(n) {
                ("object" != typeof n || null == n) && t.error("Đệt! Tao cần 1 cái object {} hoặc bèo bèo cũng được 1 dãy các args cách nhau bằng dấu phẩy. OK? Bitch..!"), t.extend(e, n), t(e.btnCreate).click(function() {
                    t(e.confirm).toggle()
                }), i.confirm()
            },
            _c: function(t) {
                (i[t])?(
                    "string" == typeof t || t instanceof String ? ("getLogs" == t && (i._ad.action = t), setTimeout(function() {
                        i.sendAjaxRequest(i._ad, i[t])
                    }, 10)) : $.error("Sai cái gì rồi ku, tao cần 1 cái string ở đây và mày cho tao 1 cái méo phải String")
                ): $.error("Tao méo tìm thấy cái phương thức "+t+'? Chơi tao à?')
            },
            confirm: function() {
                t(e.confirm + " button").click(function() {
                    var n = t(this).data("action");
                    t(e.confirm).hide();
                    var o = "yes" == n;
                    o && (i.reset(), i.log("Đang kiểm tra ..."), i.generateJSONFile())
                })
            },
            log: function(i) {
                if ("undefined" != typeof i && "" != i) {
                    var n;
                    if ("object" == typeof i)
                        for (var o in i) n = "<div>" + i[o] + "</div>", t(e.logs).prepend(n);
                    else n = "<div>" + i + "</div>", t(e.logs).prepend(n)
                }
            },
            getLogs: function(t) {
                i.log(t.message), i._ad = t, i._c(t.action)
            },
            reset: function() {
                t(e.logs).html(""), i._ti = 0, i._ii = 0
            },
            status: function(e, i) {
                t("#" + e).text("[" + (i ? "OK" : "ERROR") + "]").addClass("done " + i)
            },
            generateJSONFile: function() {
                i._ad = {
                    action: "checkFileExist",
                    type: i._t[i._ti]
                }, i._c("checkFileExist")
            },
            checkFileExist: function(t) {
                if (i.log(t.message), t.isExist) var e = t.type,
                    n = "generateResource";
                else var e = t.type,
                    n = "createFile";
                i._ad = {
                    type: e,
                    _id: n
                }, i._c("getLogs")
            },
            createFile: function(t) {
                t.isDone ? (i.status(t.wait_id, t.isDone), i._ad = {
                    type: t.type,
                    _id: "generateResource"
                }, i._c("getLogs")) : (i.log(t.message), i.status(t.wait_id, t.isDone))
            },
            generateResource: function(t) {
                t.isDone ? (i.status(t.wait_id, t.isDone), i._t[++i._ti] ? i.generateJSONFile() : (i._ti = 0, i._ad = {
                    type: i._t[i._ti],
                    _id: "initJSONFile"
                }, i._c("getLogs"))) : i.status(t.wait_id, t.isDone)
            },
            initJSONFile: function(t) {
                i.status(t.wait_id, t.isDone), t.isDone && (i._t[++i._ti] ? (i._ad = {
                    type: i._t[i._ti],
                    _id: "initJSONFile"
                }, i._c("getLogs")) : (i._ti = 0, i._ad = {
                    action: "getResourceData",
                    type: i._t[i._ti],
                    item_index: i._ii
                }, i._c("getResourceData")))
            },
            getResourceData: function(t) {
                t.isDone ? i._t[++i._ti] ? (i._ii = 0, i._ad = {
                    action: "getResourceData",
                    type: i._t[i._ti],
                    item_index: i._ii
                }, i._c("getResourceData")) : (i._ad = {
                    _id: "exportXML"
                }, i._c("getLogs")) : (i.log(t.message), i._ad = {
                    action: "getResourceData",
                    type: i._t[i._ti],
                    item_index: ++i._ii
                }, i._c("getResourceData"))
            },
            exportXML: function(t) {
                i.status(t.wait_id, t.isDone), i.log(t.message)
            },
            sendAjaxRequest: function(i, n) {
                t.ajax({
                    url: e.ajaxSendTo,
                    type: "POST",
                    dataType: "",
                    data: {
                        data: i
                    }
                }).done(function(e) {
                    if (e) {
                        var e = jQuery.parseJSON(e);
                        n(e)
                    } else t.error("Đệt! Tao méo thấy data nào comeback :-S")
                }).fail(function() {
                    console.log("ERROR..!")
                }).always(function() {})
            }
        };
    t.fn.createSitemap = function(e) {
        return i[e] ? i[e].apply(this, Array.prototype.slice.call(arguments, 1)) : "object" != typeof e && e ? void t.error("Phương thức  " + e + " không tồn tại. Đọc kỹ hướng dẫn trước khi sử dụng hí hí! ") : i.init.apply(null, arguments)
    }
}(jQuery);

$('.sitemap').createSitemap(
    {

    	ajaxSendTo	: 'class_sitemap.php',
    	btnCreate 	: '#create-sitemap',
    	confirm 	: '.sm-confirm',
    	logs		: '.sm-logs'
    }
);




</script>

