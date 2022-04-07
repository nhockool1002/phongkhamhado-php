<style>
    .hoancau-alo-phone{
        position: fixed;
        /*visibility: hidden;*/
        background-color: transparent;
        width: 200px;
        height: 200px;
        cursor: pointer;
        z-index: 200 !important;
        -webkit-backface-visibility: hidden;
        -webkit-transform: translateZ(0);
        -webkit-transition: visibility .5s;
        -moz-transition: visibility .5s;
        -o-transition: visibility .5s;
        transition: visibility .5s;
        /*right: 150px;*/
        top: 120px;
        right: 0;
    }
    .hoancau-alo-ph-circle {
        width: 160px;
        height: 160px;
        top: 20px;
        left: 20px;
        position: absolute;
        background-color: transparent;
        -webkit-border-radius: 100%;
        -moz-border-radius: 100%;
        border-radius: 100%;
        border: 2px solid rgba(30,30,30,0.4);
        border: 2px solid #bfebfc 9;
        opacity: .1;
        -webkit-animation: hoancau-alo-circle-anim 1.2s infinite ease-in-out;
        -moz-animation: hoancau-alo-circle-anim 1.2s infinite ease-in-out;
        -ms-animation: hoancau-alo-circle-anim 1.2s infinite ease-in-out;
        -o-animation: hoancau-alo-circle-anim 1.2s infinite ease-in-out;
        animation: hoancau-alo-circle-anim 1.2s infinite ease-in-out;
        -webkit-transition: all .5s;
        -moz-transition: all .5s;
        -o-transition: all .5s;
        transition: all .5s;
        -webkit-transform-origin: 50% 50%;
        -moz-transform-origin: 50% 50%;
        -ms-transform-origin: 50% 50%;
        -o-transform-origin: 50% 50%;
        transform-origin: 50% 50%;
        border-color: #ff0000;
        opacity: .5;
    }

    @-moz-keyframes hoancau-alo-circle-anim {
        0% {
            -moz-transform: rotate(0) scale(.5) skew(1deg);
            opacity: .1;
            -moz-opacity: .1;
            -webkit-opacity: .1;
            -o-opacity: .1
        }
        30% {
            -moz-transform: rotate(0) scale(.7) skew(1deg);
            opacity: .5;
            -moz-opacity: .5;
            -webkit-opacity: .5;
            -o-opacity: .5
        }
        100% {
            -moz-transform: rotate(0) scale(1) skew(1deg);
            opacity: .6;
            -moz-opacity: .6;
            -webkit-opacity: .6;
            -o-opacity: .1
        }
    }

    @-webkit-keyframes hoancau-alo-circle-anim {
        0% {
            -webkit-transform: rotate(0) scale(.5) skew(1deg);
            -webkit-opacity: .1
        }
        30% {
            -webkit-transform: rotate(0) scale(.7) skew(1deg);
            -webkit-opacity: .5
        }
        100% {
            -webkit-transform: rotate(0) scale(1) skew(1deg);
            -webkit-opacity: .1
        }
    }

    @-o-keyframes hoancau-alo-circle-anim {
        0% {
            -o-transform: rotate(0) kscale(.5) skew(1deg);
            -o-opacity: .1
        }
        30% {
            -o-transform: rotate(0) scale(.7) skew(1deg);
            -o-opacity: .5
        }
        100% {
            -o-transform: rotate(0) scale(1) skew(1deg);
            -o-opacity: .1
        }
    }


    .hoancau-alo-ph-circle-fill {
        width: 100px;
        height: 100px;
        top: 50px;
        left: 50px;
        position: absolute;
        background-color: #000;
        -webkit-border-radius: 100%;
        -moz-border-radius: 100%;
        border-radius: 100%;
        border: 2px solid transparent;
        opacity: .1;
        -webkit-animation: hoancau-alo-circle-fill-anim 2.3s infinite ease-in-out;
        -moz-animation: hoancau-alo-circle-fill-anim 2.3s infinite ease-in-out;
        -ms-animation: hoancau-alo-circle-fill-anim 2.3s infinite ease-in-out;
        -o-animation: hoancau-alo-circle-fill-anim 2.3s infinite ease-in-out;
        animation: hoancau-alo-circle-fill-anim 2.3s infinite ease-in-out;
        -webkit-transition: all .5s;
        -moz-transition: all .5s;
        -o-transition: all .5s;
        transition: all .5s;
        -webkit-transform-origin: 50% 50%;
        -moz-transform-origin: 50% 50%;
        -ms-transform-origin: 50% 50%;
        -o-transform-origin: 50% 50%;
        transform-origin: 50% 50%;
        background-color: rgba(255,0,0,0.5);
         opacity: .75 !important;
    }
@-moz-keyframes hoancau-alo-circle-fill-anim {
    0% {
        -moz-transform: rotate(0) scale(.7) skew(1deg);
        opacity: .2
    }
    50% {
        -moz-transform: rotate(0) -moz-scale(1) skew(1deg);
        opacity: .2
    }
    100% {
        -moz-transform: rotate(0) scale(.7) skew(1deg);
        opacity: .2
    }
}

@-webkit-keyframes hoancau-alo-circle-fill-anim {
    0% {
        -webkit-transform: rotate(0) scale(.7) skew(1deg);
        opacity: .2
    }
    50% {
        -webkit-transform: rotate(0) scale(1) skew(1deg);
        opacity: .2
    }
    100% {
        -webkit-transform: rotate(0) scale(.7) skew(1deg);
        opacity: .2
    }
}

@-o-keyframes hoancau-alo-circle-fill-anim {
    0% {
        -o-transform: rotate(0) scale(.7) skew(1deg);
        opacity: .2
    }
    50% {
        -o-transform: rotate(0) scale(1) skew(1deg);
        opacity: .2
    }
    100% {
        -o-transform: rotate(0) scale(.7) skew(1deg);
        opacity: .2
    }
}


.hoancau-alo-ph-img-circle {
    width: 60px;
    height: 60px;
    top: 70px;
    left: 70px;
    position: absolute;
    background: rgba(30,30,30,0.1) url(modules/hoancauphone/img/call.png) no-repeat center center;
    -webkit-border-radius: 100%;
    -moz-border-radius: 100%;
    border-radius: 100%;
    border: 2px solid transparent;
    opacity: .7;
    -webkit-animation: hoancau-alo-circle-img-anim 1s infinite ease-in-out;
    -moz-animation: hoancau-alo-circle-img-anim 1s infinite ease-in-out;
    -ms-animation: hoancau-alo-circle-img-anim 1s infinite ease-in-out;
    -o-animation: hoancau-alo-circle-img-anim 1s infinite ease-in-out;
    animation: hoancau-alo-circle-img-anim 1s infinite ease-in-out;
    -webkit-transform-origin: 50% 50%;
    -moz-transform-origin: 50% 50%;
    -ms-transform-origin: 50% 50%;
    -o-transform-origin: 50% 50%;
    transform-origin: 50% 50%;

    background-color: #ff0000;
    
}
.hoancau-alo-phone:hover .hoancau-alo-ph-circle-fill{
	background-color: rgba(66,168,221,0.5) !important;
}
.hoancau-alo-phone:hover  .hoancau-alo-ph-circle{border-color:#42a7dd}
.hoancau-alo-phone:hover .hoancau-alo-ph-img-circle {
    background-color: #42a7dd;

}

@-moz-keyframes hoancau-alo-circle-img-anim {
    0% {
        transform: rotate(0) scale(1) skew(1deg)
    }
    10% {
        -moz-transform: rotate(-25deg) scale(1) skew(1deg)
    }
    20% {
        -moz-transform: rotate(25deg) scale(1) skew(1deg)
    }
    30% {
        -moz-transform: rotate(-25deg) scale(1) skew(1deg)
    }
    40% {
        -moz-transform: rotate(25deg) scale(1) skew(1deg)
    }
    50% {
        -moz-transform: rotate(0) scale(1) skew(1deg)
    }
    100% {
        -moz-transform: rotate(0) scale(1) skew(1deg)
    }
}

@-webkit-keyframes hoancau-alo-circle-img-anim {
    0% {
        -webkit-transform: rotate(0) scale(1) skew(1deg)
    }
    10% {
        -webkit-transform: rotate(-25deg) scale(1) skew(1deg)
    }
    20% {
        -webkit-transform: rotate(25deg) scale(1) skew(1deg)
    }
    30% {
        -webkit-transform: rotate(-25deg) scale(1) skew(1deg)
    }
    40% {
        -webkit-transform: rotate(25deg) scale(1) skew(1deg)
    }
    50% {
        -webkit-transform: rotate(0) scale(1) skew(1deg)
    }
    100% {
        -webkit-transform: rotate(0) scale(1) skew(1deg)
    }
}
@-o-keyframes hoancau-alo-circle-img-anim {
    0% {
        -o-transform: rotate(0) scale(1) skew(1deg)
    }
    10% {
        -o-transform: rotate(-25deg) scale(1) skew(1deg)
    }
    20% {
        -o-transform: rotate(25deg) scale(1) skew(1deg)
    }
    30% {
        -o-transform: rotate(-25deg) scale(1) skew(1deg)
    }
    40% {
        -o-transform: rotate(25deg) scale(1) skew(1deg)
    }
    50% {
        -o-transform: rotate(0) scale(1) skew(1deg)
    }
    100% {
        -o-transform: rotate(0) scale(1) skew(1deg)
    }
}



#hoancau-alo-wrapper {
    position: fixed;
    width: 100%;
    bottom: 0;
    top: 0;
    left: 0;
    z-index: 2000000;
    overflow: visible;
    display: none;
    color: #383838;
}


#hoancau-alo-wrapper .hoancau-alo-overlay {
    position: fixed;
    width: 100%;
    height: 100%;
    background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlOZyTXzhgAAAApJREFUCB1jYAAAAAIAAc/INeUAAAAASUVORK5CYII=");
    top: 0;
    left: 0;
    z-index: 200000
}

#hoancau-alo-wrapper .hoancau-alo-table {
    display: table;
    width: 100%;
    height: 100%;
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 999999
}

#hoancau-alo-wrapper .hoancau-alo-cell {
    display: table-cell;
    vertical-align: middle;
    text-align: center
}

#hoancau-alo-wrapper .hoancau-alo-popup-close {
    -webkit-border-radius: 2px !important;
    -moz-border-radius: 2px !important;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    position: absolute !important;
    right: -15px !important;
    top: -15px !important;
    height: 30px !important;
    width: 30px !important;
    background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3FpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDozZWEyNDI5ZC0yYmI3LWYzNDMtYjBjZi1jMGJjYTE4ODRmZjkiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NjRGMTI2QTcxNDBFMTFFNUFENEZCRDVFQ0JDQjQyQzIiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NjRGMTI2QTYxNDBFMTFFNUFENEZCRDVFQ0JDQjQyQzIiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjVmYzc3OTY1LWUxNWUtNGU0Ni04ODFjLTBlOTQ3YjBmMzBmNyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDozZWEyNDI5ZC0yYmI3LWYzNDMtYjBjZi1jMGJjYTE4ODRmZjkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz5iCEbHAAABl0lEQVR42sSXS07DMBCGnSKyDorEAVjACTgCIEVlXU5R9QjlCk3VAzTrLhMJ2NIVJ2DDuo9EsKUszEw0kaIQbI+bxy/9UhRP5pMcjz12pJTCQKfgO/AN+Bp8AfZo7Av8AX4Dv4CfwD/ajAhW2ANPwTtprj1946lyq6AP4I2014ZyGINPwAvZnBaUUwnGgJVsXqsqvAoOZXua/wceyfY1KngOlROWxjv4XLSrHfgKS3BALyYdQAUxJkUdu7o6jeNYZlmmnUeMwViNkOUieKiLTNNURlGkhOPYcrnMYw00RPDMJFIFZ0JRIYJfTaPr4BZQ1Fow9+EcgCAEWkLz/4zl9A1rzOUsTQCKJEny5yAIhO/73NV9GNjUhOM4tc8scae6PL3laedONYLXNtC6f85dXDNb6BHw0GgDKaCqxEz4fbFlpk1smQjnbJmCeqSuNO3jWNyDL8vHIrao4w6OxTGx/rQ+8z5an16bvd7a22pDvz0CuOU29NUrzKOuzqvlTN8orzAO89J2W7q0ndHYZ+nS9kw+6BL+CjAAEvDTBJC9qhAAAAAASUVORK5CYII=");
    background-position: center center;
    background-repeat: no-repeat;
    cursor: pointer !important;
    -webkit-transition: .3s ease-out !important;
    -moz-transition: .3s ease-out !important;
    -o-transition: .3s ease-out !important;
    transition: .3s ease-out !important;
}

#hoancau-alo-wrapper .hoancau-alo-popup-close:hover {
    opacity: .6 !important
}

#hoancau-alo-wrapper .hoancau-alo-popup {
    display: inline-block;
    position: relative;
   /* -webkit-border-radius: 16px;
    -moz-border-radius: 16px;
    border-radius: 16px; */
    -webkit-transition: .6s ease-out;
    -moz-transition: .6s ease-out;
    -o-transition: .6s ease-out;
    transition: .6s ease-out;
    margin: 0 auto;
    z-index: 200001;
    text-align: center;
    padding: 39px 67px;
	width:555px;
	background:url(modules/hoancauphone/img/bgtuvan.jpg)no-repeat;
	max-height:437px;
}

#hoancau-alo-wrapper .hoancau-alo-popup h4 {
    font-size: 24px;
    margin: 0 0 40px;
    font-family: 'Arial',sans-serif;
    font-weight: 300;
	text-align:justify;
    line-height: 1.8
}

#hoancau-alo-wrapper .hoancau-alo-popup .hoancau-alo-submit-moz-focus-inner {
    border: 0
}

#hoancau-alo-wrapper .hoancau-alo-popup .hoancau-alo-submitavtive,
#hoancau-alo-wrapper .hoancau-alo-popup .hoancau-alo-submitvisited {
    outline: none !important
}

#hoancau-alo-wrapper .hoancau-alo-popup .hoancau-alo-submit {
    border: none;
    border-width: 0;
    background:url(modules/hoancauphone/img/nutsubmit.png)no-repeat;
    width:222px;height:73px;
	font-family: Arial, Helvetica, sans-serif;
    font-size: 20px;
    color: #fff;
    cursor: pointer;
    outline: none !important;float:right;
	margin-right:110px;
	
}
#hoancau-alo-wrapper .hoancau-alo-popup .hoancau-alo-input-wrapper input[type="text"].valid-invalid {
    color: #ff496b
}

#hoancau-alo-wrapper .hoancau-alo-popup .hoancau-alo-input-wrapper input[type="text"]:focus {
    border: #00bed5 solid 3px;
	padding: 6px 120px;
	margin:0 auto;
	    margin-left: 5px;
   outline:5px solid #fff; 
}

#hoancau-alo-wrapper .hoancau-alo-popup .hoancau-alo-input-wrapper input[type="text"]::-webkit-input-placeholder {
    color: #d1d1d1
}

#hoancau-alo-wrapper .hoancau-alo-popup .hoancau-alo-input-wrapper input[type="text"]::-moz-placeholder {
    color: #d1d1d1
}

#hoancau-alo-wrapper .hoancau-alo-popup .hoancau-alo-input-wrapper input[type="text"]::-ms-input-placeholder {
    color: #d1d1d1
}

#hoancau-alo-wrapper .hoancau-alo-popup .hoancau-alo-input-wrapper input[type="text"]::-moz-placeholder {
    color: #d1d1d1
}

#hoancau-alo-wrapper .hoancau-alo-popup .hoancau-alo-input-wrapper .label,
#hoancau-alo-wrapper .hoancau-alo-popup .hoancau-alo-input-wrapper .label + .input {
    float: left;
    width: 49%
}
#hoancau-alo-wrapper .hoancau-alo-popup .hoancau-alo-message {
    height:25px;
  
    text-align: center;
    clear: both;
    font-size: 14px;
}
#hoancau-alo-wrapper .hoancau-alo-popup input[type=text].hoancau-alo-number {
    color: #00bed5;
    font-size: 25px;
    font-family: 'Arial', sans-serif;
    font-weight: normal;
    background-color: transparent;
    padding: 0;
    padding-bottom: 10px;
    margin: 0 auto;
    width: 195px;
	float:left;
	margin-left:5px;
}



#hoancau-alo-wrapper .hoancau-alo-popup input[type=text].hoancau-alo-number::-ms-clear {
    display: none;
    width: 0;
    height: 0
}

#hoancau-alo-wrapper .hoancau-alo-popup .hoancau-alo-request-time {
    font-family: Arial, Helvetica, sans-serif;
    padding: 6px 12px;
    font-size: 18px;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
  
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s
}

#hoancau-alo-wrapper .hoancau-alo-popup .hoancau-alo-powered {
    font-size: .8em;
    position: absolute;
    bottom: 10px;
    right: 15px;
    font-family: 'Open Sans';
}

#hoancau-alo-wrapper .hoancau-alo-popup .hoancau-alo-powered a {
    font-weight: bold;
    color: #383838;
    text-decoration: none;
}

#hoancau-alo-wrapper .hoancau-alo-popup .hoancau-alo-powered a:hover {
    text-decoration: underline
}

#hoancau-alo-wrapper.night-mode {
    color: #fff;
}

#hoancau-alo-wrapper.night-mode .hoancau-alo-popup-close {
    background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3FpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDozZWEyNDI5ZC0yYmI3LWYzNDMtYjBjZi1jMGJjYTE4ODRmZjkiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6OUY2REUyNDQxNDE2MTFFNThBNEJENTVFNDA2QjFFOUEiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6OUY2REUyNDMxNDE2MTFFNThBNEJENTVFNDA2QjFFOUEiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjVmYzc3OTY1LWUxNWUtNGU0Ni04ODFjLTBlOTQ3YjBmMzBmNyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDozZWEyNDI5ZC0yYmI3LWYzNDMtYjBjZi1jMGJjYTE4ODRmZjkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz56uyuzAAABfUlEQVR42sSXvU7DMBDHYxCdw8IDMMCWTDwCdClznLcJr9BUfYs+ALDSqXMisTD3S4K1MBx3kS1ZVuqvNslf+kuRfL5f5OTsMwOAyEFX6DH6Ef2AvkXHYuwH/YVeod/Rr+g/a0YCGxyjC/QW3LUTc2JTbhOUo9cQrrXI4Qy+RM/hfJqLnEYwBSzg/FrocB1cQneaHQNn0L0yyWOinKg0PtE3Ubfaou+bEhRvUEB/KuRSj2x1muc51HVtzUgxnHNbGLFGBJ7YIquqgjRNjXAaS5KkiXXQhMBTl0gT3BNKKgn84RrdBg+AkpaR5z7cAAhEwEBo850JfPCdJeGBUNLhIqQYGWOtz17yXWp1edVlD1nqZQi07Zv7/lzTUOgJ8NJpA5FQU2JP+LPcMvfGIyXLnBISnGJdt8xBDom+j8Ud+k49FvtqBPix1mc2ROszaLM3WHurN/SbE4Ab34Zev8K82Opc017MMV5hmOel7Um5tF2LsW/l0vYm/GtL+C/AAAHy+OD95QLeAAAAAElFTkSuQmCC")
}

#hoancau-alo-wrapper.night-mode .hoancau-alo-popup {
    background-color: #fff;
}

#hoancau-alo-wrapper.night-mode .hoancau-alo-popup h4 {
    margin-bottom: 10px;
    text-transform: uppercase;
    max-width: 535px;
    font-weight: bold;
    line-height: 40px;
    color: #fff;
}
#hoancau-alo-wrapper.night-mode .hoancau-alo-popup h4.info {
    margin:15px 0;
	font-weight:normal;
	 text-transform:none;
	max-width:525px;
	color:#fff;
	font-size:20px;
	letter-spacing:0.8px;
}



#hoancau-alo-wrapper.night-mode .hoancau-alo-popup .hoancau-alo-input-wrapper label {
    color: #616161;
    font-size: 18px;
    height: 28px;
    line-height: 28px;
    padding-right: 15px
}

#hoancau-alo-wrapper.night-mode .hoancau-alo-popup .hoancau-alo-input-wrapper input[type="text"]::-webkit-input-placeholder {
    color: #60615f
}

#hoancau-alo-wrapper.night-mode .hoancau-alo-popup .hoancau-alo-input-wrapper input[type="text"]::-moz-placeholder {
    color: #60615f
}

#hoancau-alo-wrapper.night-mode .hoancau-alo-popup .hoancau-alo-input-wrapper input[type="text"]::-ms-input-placeholder {
    color: #60615f
}

#hoancau-alo-wrapper.night-mode .hoancau-alo-popup .hoancau-alo-input-wrapper input[type="text"]::-moz-placeholder {
    color: #60615f
}

#hoancau-alo-wrapper.night-mode .hoancau-alo-popup .hoancau-alo-powered a {
    color: #fff
}

#hoancau-alo-wrapper.night-mode input[type="text"].hoancau-alo-number {
    border: #00bed5 solid 1px;
    background: #fff;
	text-align: center;
	padding: 8px 120px;
	outline:5px solid #fff !important;
}

#hoancau-alo-wrapper.night-mode .hoancau-alo-message {
    padding-bottom: 0
}

#hoancau-alo-wrapper.night-mode h4 {
    font-size: 29px
}

#hoancau-alo-wrapper.night-mode .hoancau-alo-request-time {
    color: #fff;
    background-color: #515350;
    border: 1px solid #606260
}

#hoancau-alo-wrapper.night-mode .hoancau-alo-form .hoancau-alo-select-wrapper {
    margin-bottom: 35px
}


.hoancau-alo-blur {
    -webkit-filter: blur(3px);
    -ms-filter: blur(3px);
    -moz-filter: blur(3px);
    -o-filter: blur(3px);
    filter: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxmaWx0ZXIgaWQ9ImJsdXIiPjxmZUdhdXNzaWFuQmx1ciBzdGREZXZpYXRpb249IjMiLz48L2ZpbHRlcj48L3N2Zz4jYmx1cg==#blur")
}

#hoancau-countdown {
    padding-top: 20px;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 28px;
    font-weight: 300
}

#hoancau-alo-wrapper.alo-mobile .hoancau-alo-cell {
    background-color: #fff;
    z-index: 9999999;
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%
}

#hoancau-alo-wrapper.alo-mobile .hoancau-alo-header {
    padding-bottom: 30px;
    position: relative
}

#hoancau-alo-wrapper.alo-mobile .hoancau-alo-popup-close {
    width: 50px !important;
    height: 19px !important;
    position: absolute !important;
    top: -30px !important;
    left: 50% !important;
    margin-left: -15px !important;
    background-image: none !important;
}

#hoancau-alo-wrapper.alo-mobile .hoancau-alo-popup-close .arrow {
    margin-top: 7px;
    position: relative;
    text-align: center !important;
    margin-bottom: 6px !important;
    height: 4px;
    width: 100%;
}

#hoancau-alo-wrapper.alo-mobile .hoancau-alo-popup-close .arrow:before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 50%;
    background: #333;
    -webkit-transform: skew(0, 30deg);
    -moz-transform: skew(0, 30deg);
    -ms-transform: skew(0, 30deg);
    -o-transform: skew(0, 30deg);
    transform: skew(0, 30deg);
    -webkit-transition: transform 1s;
    transition: transform 1s
}

#hoancau-alo-wrapper.alo-mobile .hoancau-alo-popup-close .arrow:after {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    height: 100%;
    width: 50%;
    background: #333;
    -webkit-transform: skew(0, -30deg);
    -moz-transform: skew(0, -30deg);
    -ms-transform: skew(0, -30deg);
    -o-transform: skew(0, -30deg);
    transform: skew(0, -30deg)
}

#hoancau-alo-wrapper.alo-mobile.night-mode .hoancau-alo-popup {
    background-image: none
}

#hoancau-alo-wrapper.alo-mobile.night-mode .hoancau-alo-cell {
    background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3wYZCyAMHYpuhwAAAA1JREFUCNdjMDY2/gwAAsMBjX/tf+YAAAAASUVORK5CYII=")
}

.hoancau-report{

}
.hoancau-report.error{
    color:#191d20;
	font-size:18px;
	padding:5px 10px;
}
.hoancau-report.success{
    color:#191d20;
	font-size:18px;
    padding:5px 10px;
}
</style>
<div class="hoancau-alo-phone">
    <div class="hoancau-alo-ph-circle"></div>
    <div class="hoancau-alo-ph-circle-fill"></div>
    <div class="hoancau-alo-ph-img-circle delaiso"></div>
</div>

<div id="hoancau-alo-wrapper" class="night-mode">
    <div class="hoancau-alo-overlay"></div>
    <div class="hoancau-alo-table" style="left: 0px; top: 0px; transform: scale(1, 1); transform-origin: left top 0px;">
        <div class="hoancau-alo-cell">
            <div class="hoancau-alo-popup">
                <div class="hoancau-alo-header"><span class="hoancau-alo-popup-close"></span></div>
                <div class="hoancau-alo-form" id="hoancauong-alo-form">
                    <h4>Nhập số điện thoại của bạn,<br/> Bác Sĩ sẽ gọi lại trong 30 giây</h4>
                    <h4 class="info">Mọi Thông Tin Hoàn Toàn Bảo Mật ***</h4>
                    <div class="hoancau-alo-input-wrapper">
                        <div class="input">
                            <input type="text" class="hoancau-alo-number" placeholder="Số điện thoại" name="sodienthoai">
                        </div>
                    </div>
                    <div class="hoancau-alo-message"></div>

                    <div>
                        <button class="hoancau-alo-submit">Click để được gọi lại</button>
                    </div>
					<div class="clear"></div>
                    <div class="hoancau-report error">&nbsp;</div>
                    <div class="hoancau-report success">&nbsp;</div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$('.delaiso').click(function(){
	$("#hoancau-alo-wrapper").show();
});
$(".hoancau-alo-submit").click(function(){
		$.ajax({
                    url: 'modules/hoancauphone/ajax.php',
                    type: 'POST',
                    dataType: '',
                    data: {
                        sodienthoai : $('.hoancau-alo-number').val(),
                        url : "<?php echo $actual_link?>"
                    },
                })
                .done(function(msg) {
                    if(msg=='error_wrong_number')
                    {
                        $('.error').text('Số điện thoại không hợp lệ! Vui lòng nhập lại!');
						$('.success').text('');
                    }
                    if(msg=='save_phone_success'){
						$('.success').text('Số điện thoại đã được gửi, bác sĩ tư vấn sẽ gọi lại cho bạn ngay');
                        $('.error').text('');
                      
						
                        setTimeout(function(){$("#hoancau-alo-wrapper").hide();},3000);
                    }
                    console.log(msg);
                })
                .fail(function() {
                    console.log("Lỗi gì chưa biết. Tự tìm đi");
                })
                .always(function() {
                    //console.log("complete");
                });
			
		});	


$(".hoancau-alo-popup-close").click(function(){
		$("#hoancau-alo-wrapper").hide();
	});
		
	
</script>