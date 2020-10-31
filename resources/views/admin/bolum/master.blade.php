<!DOCTYPE html>
<html lang="tr">

<head>
    <title>Admin Panel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Cmd Medya" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/plugins/select2.min.css">
    <link rel="stylesheet" href="/assets/css/style.css?v=1">

    <link rel="stylesheet" href="/assets/css/plugins/dropzone.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.1.3/css/fileinput.css">
</head>
<body class="">
<div class="loader-bg">
    <div class="loader-track">
        <div class="loader-fill"></div>
    </div>
</div>

@include('admin.bolum.sidebar')
@include('admin.bolum.header')
@yield('content')


<script src="/assets/js/vendor-all.min.js"></script>
<script src="/assets/js/plugins/bootstrap.min.js"></script>
<script src="/assets/js/ripple.js"></script>
<script src="/assets/js/pcoded.min.js"></script>
<script src="/assets/js/menu-setting.min.js"></script>
<script src="/assets/js/plugins/dropzone-amd-module.min.js"></script>
<script src="/assets/js/plugins/select2.full.min.js"></script>
<script src="/assets/js/pages/form-select-custom.js"></script>
<script src="/assets/js/plugins/apexcharts.min.js"></script>
<script src="/assets/js/pages/dashboard-main.js"></script>
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.1.3/js/fileinput.min.js"></script>
<sciprt src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></sciprt>
<script src="/assets/js/script.js"></script>
<script>

    jQuery(document).ready(function() {
        $(".open-dialog").fancybox({});
    });
    function confirmDel() {
        var agree=confirm("Bu içeriği silmek istediğinizden emin misiniz?\nBu işlem geri alınamaz!");
        if (agree) {
            return true ; }
        else {
            return false ;}
    }

    $(document).ready(function() {
        CKEDITOR.replace('aciklama');
        checkCookie();
    });


    $('#file-1').fileinput({
        theme: 'fa',
        uploadUrl: "/resimKaydet",
        uploadExtraData: function () {
            return {
                _token:$("input[name='_token']").val()
            };
        },
        allowedFileExtensions:['jpg', 'gif', 'png', 'svg', 'jpeg'],
        overwriteInitial: false,
        maxFilesize: 200000,
        maxFileNum:88,
        slugCallback: function (filename) {
            return filename.replace('(','_').replace(']','_');
        }
    });

    /*
    * function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toGMTString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }
    * */
</script>

@yield('footer')
</body>

</html>
