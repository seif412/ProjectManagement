<!DOCTYPE html>
<html lang="en" dir="ltr">
<!-- Mirrored from nsdbytes.com/template/soccer/project/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Mar 2023 16:24:17 GMT -->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <title>:: Soccer :: Project Dashboard</title>

    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css" />

    <link rel="stylesheet" href="assets/plugins/charts-c3/c3.min.css" />

    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/theme1.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="font-montserrat">
    <div class="page-loader-wrapper">
        <div class="loader"></div>
    </div>
    <div id="main_content">

        @include('layouts.leftsidebar')
        @include('layouts.sidenav')

        <div class="page">
            @include('layouts.header')

            <div id="content-block">
                @yield('content')
            </div>
            @include('layouts.footer')

        </div>
    </div>

    <script
      src="assets/bundles/lib.vendor.bundle.js"
      type="0f11e9258e342af34f11a5b3-text/javascript"
    ></script>
    <script
      src="assets/bundles/apexcharts.bundle.js"
      type="0f11e9258e342af34f11a5b3-text/javascript"
    ></script>
    <script
      src="assets/bundles/counterup.bundle.js"
      type="0f11e9258e342af34f11a5b3-text/javascript"
    ></script>
    <script
      src="assets/bundles/knobjs.bundle.js"
      type="0f11e9258e342af34f11a5b3-text/javascript"
    ></script>
    <script
      src="assets/bundles/c3.bundle.js"
      type="0f11e9258e342af34f11a5b3-text/javascript"
    ></script>
    <script
      src="assets/js/core.js"
      type="0f11e9258e342af34f11a5b3-text/javascript"
    ></script>




    <script src="assets/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="0f11e9258e342af34f11a5b3-|49" defer=""></script>
    <script>
        (function() {
            var js =
                "window['__CF$cv$params']={r:'7a861651ddfb11a0',m:'4b.Ik_y6L.3MkB2bkM5EmoLS16c6xLAUVlBE1XOByU4-1678897262-0-AYnkWHKUT1LyVQJfDmmuTQ15Tpfwg4JIp89qHmvTn8kMT0AJLmPHZEYjVw5OrxNAHnWBCVxT/BJxcpGECneEXnWQZuA57fYz2IWQ8xiCFou/5MKzMXkkfadFmURerzzgmaD10ek69XA3fmNrP55jtD9VSHGxhSrmWXVrwetWQtst',s:[0x170017f7dc,0xbda24ee28a],u:'/cdn-cgi/challenge-platform/h/b'};var _cpo=document.createElement('script');_cpo.nonce='',_cpo.src='assets/cdn-cgi/challenge-platform/h/b/scripts/cb/invisible6e6d.js?cb=7a861651ddfb11a0',document.getElementsByTagName('head')[0].appendChild(_cpo);";
            var _0xh = document.createElement("iframe");
            _0xh.height = 1;
            _0xh.width = 1;
            _0xh.style.position = "absolute";
            _0xh.style.top = 0;
            _0xh.style.left = 0;
            _0xh.style.border = "none";
            _0xh.style.visibility = "hidden";
            document.body.appendChild(_0xh);

            function handler() {
                var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;
                if (_0xi) {
                    var _0xj = _0xi.createElement("script");
                    _0xj.nonce = "";
                    _0xj.innerHTML = js;
                    _0xi.getElementsByTagName("head")[0].appendChild(_0xj);
                }
            }
            if (document.readyState !== "loading") {
                handler();
            } else if (window.addEventListener) {
                document.addEventListener("DOMContentLoaded", handler);
            } else {
                var prev = document.onreadystatechange || function() {};
                document.onreadystatechange = function(e) {
                    prev(e);
                    if (document.readyState !== "loading") {
                        document.onreadystatechange = prev;
                        handler();
                    }
                };
            }
        })();
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993"
        integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA=="
        data-cf-beacon='{"rayId":"7a861651ddfb11a0","version":"2023.2.0","r":1,"token":"f79813393a9345e8a59bb86abc14d67d","si":100}'
        crossorigin="anonymous"></script>
</body>

<!-- Mirrored from nsdbytes.com/template/soccer/project/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Mar 2023 16:24:26 GMT -->

</html>
