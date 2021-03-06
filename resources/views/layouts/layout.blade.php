<!DOCTYPE html>
<head>
<meta name="viewport" content="width=decide-width">

    <link rel="stylesheet" media="screen and (min-width:0px) and (max-width:399px)" href="{{ asset('css/error.css') }}">
    <link rel="stylesheet" media="screen and (min-width:400px) and (max-width:599px)" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" media="screen and (min-width:600px) and (max-width:999px)" href="{{ asset('css/mainTablet.css') }}">
    <link rel="stylesheet" media="screen and (min-width:1000px)" href="{{ asset('css/mainComputer.css') }}">
    <title>ACME</title>

    @yield('style')

</head>

<body>
    <header class="hid">
        <h2>Welcome to center</h2>
        <nav>
            <ul>
                <li> <a href="/" id="mall">Malls</a></li>
                <li><a href="/shop" id="all">Shops</a></li>
                <li><a href="/add" id="add">Create</a></li>
            </ul>
        </nav>
    </header>
    <div style="width: 100vw">
    @yield('content')
    </div>
    <footer id="footer" class="hid">
        <h5>Email:mallInfo@acme.com</h5>
        <h5>Number:635 87 68 25</h5>
    </footer>

    <script type="text/javascript">
        function map1() {
            window.open("https://goo.gl/maps/Vr2b5jsRawU4JwuW7", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=400,height=400");
        }

        function map2() {
            window.open("https://goo.gl/maps/pXzkvs72y4uzE3Nm9", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=400,height=400");
        }
    </script>
</body>
</html>
