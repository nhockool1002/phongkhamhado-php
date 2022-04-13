// tintuc slide
var multipleCardCarousel = document.querySelector(
    "#tintucCarousel"
);
if (window.matchMedia("(min-width: 768px)").matches) {
    var carousel = new bootstrap.Carousel(multipleCardCarousel, {
        interval: false,
    });
    var carouselWidth = $("#tintucCarousel .carousel-inner")[0].scrollWidth;
    var cardWidth = $(" #tintucCarousel .carousel-item").width();
    var scrollPosition = 0;
    $("#tintucCarousel .carousel-control-next").on("click", function () {
        if (scrollPosition < carouselWidth - cardWidth * 4) {
            scrollPosition += cardWidth;
            $("#tintucCarousel .carousel-inner").animate(
                { scrollLeft: scrollPosition },
                600
            );
        }
    });
    $("#tintucCarousel .carousel-control-prev").on("click", function () {
        if (scrollPosition > 0) {
            scrollPosition -= cardWidth;
            $("#tintucCarousel .carousel-inner").animate(
                { scrollLeft: scrollPosition },
                600
            );
        }
    });
} else {
    $(multipleCardCarousel).addClass("slide");
}


// khach hang noi

$(document).ready(function () {

    $('.khachhangnoi-items').slick({
        dots: true,
        infinite: true,
        speed: 800,
        autoplay: true,
        autoplaySpeed: 2000,
        slidesToShow: 3,
        slidesToScroll: 3,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }

        ]
    });
});

// menu mobile 
$(document).ready(function() {
    $(".menu-mb .button").click(function() {
        var button = $(".menu-mb .button");
        var boxMenu = $(".menu-mb .main-wrap-mb");
        var body =  $('body');
        if (button.hasClass("mbActive")) {
            button.removeClass("mbActive");
            body.css('overflow', 'unset');
            boxMenu.css('display', 'none');
        } else {
            button.addClass("mbActive");
            body.css('overflow', 'hidden');
            boxMenu.css('display', 'block');
        }
    });
});

// toastr
toastr.options = {
    "closeButton": true,
    "newestOnTop": false,
    "progressBar": true,
    // "positionClass": "toast-bottom-center",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "2000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
}


var hotenFrmDangKy = $('.hoten-frmdangky');
var dtFrmDangKy = $('.dt-frmdangky');
var ckFrmDangKy = $('.ck-frmdangky');
var subFrmDangKy = $('.submit-formdangki');

function convertValueCktoString(value) {
    if (value == 1) return "Ngoại tiết niệu";
    if (value == 2) return "Phụ khoa";
    if (value == 3) return "Sản khoa";
    if (value == 4) return "Ngoại khoa";
    if (value == 5) return "Nội khoa";
    if (value == 6) return "Da liễu";
    if (value == 7) return "Xét nghiệm";
    return "";
}

subFrmDangKy.click(function() {
    if (!hotenFrmDangKy.val().length) {
        toastr.error('Vui lòng nhập họ tên');
        return;
    }

    if (!dtFrmDangKy.val().length) {
        toastr.error('Vui lòng nhập điện thoại');
        return;
    }

    if (ckFrmDangKy.val() == 0) {
        toastr.error('Vui lòng chọn chuyên khoa');
        return;
    }

    $.ajax({
        type: "POST",
        url: "include/function/advise/ajax.php",
        data: {
            modules: "new-advise",
            hoten: hotenFrmDangKy.val(),
            dienthoai: dtFrmDangKy.val(),
            chuyenkhoa: convertValueCktoString(ckFrmDangKy.val()),
            source: window.location.href,
        },
        success: function(data) {
            hotenFrmDangKy.val('');
            dtFrmDangKy.val('');
            ckFrmDangKy.val(0).change();
            toastr.success("Thông tin tư vấn đã được gửi");
        },
        error: function(jqXHR, textStatus, error) {
            toastr.error(error);
        }
    })
});
