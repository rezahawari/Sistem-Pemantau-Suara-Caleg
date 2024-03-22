<!DOCTYPE HTML>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{asset('lp/Images/gerindra.png')}}">

    <!-- Bootstrap and CSS -->
    <link href="{{asset('lp/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('lp/styles/style.css')}}" rel="stylesheet">

    <!--Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('template/dist/css/adminlte.min.css')}}">
    <script src="https://cdn.tiny.cloud/1/qurvw945m40vowtns7i4jw562zs3uvgpk48ccf9ogucj6c43/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script>
        tinymce.init({
        selector: '#isi',  // change this value according to your HTML
        plugin: 'a_tinymce_plugin',
        a_plugin_option: true,
        a_configuration_option: 400,
        // inline: true,
        toolbar: '',
        menubar: false,
        statusbar: false,
        readonly:true,

  
});
tinymce.init({
    selector: '#textberita1',
    plugin: 'a_tinymce_plugin',
    a_plugin_option: true,
    a_configuration_option: 400,
    
    // inline: true,
    toolbar: '',
    menubar: false,
    statusbar: false,
    readonly:true,
    height:'180',
    // width : "100",
});
tinymce.init({
    selector: '#textberita2',
    plugin: 'a_tinymce_plugin',
    a_plugin_option: true,
    a_configuration_option: 400,
    // inline: true,
    toolbar: '',
    menubar: false,
    statusbar: false,
    readonly:true,
    height:'180',
});
tinymce.init({
    selector: '#textberita3',
    plugin: 'a_tinymce_plugin',
    a_plugin_option: true,
    a_configuration_option: 400,
    // inline: true,
    toolbar: '',
    menubar: false,
    statusbar: false,
    readonly:true,
    height:'180',
});
tinymce.init({
    selector: '#textberita4',
    plugin: 'a_tinymce_plugin',
    a_plugin_option: true,
    a_configuration_option: 400,
    // inline: true,
    toolbar: '',
    menubar: false,
    statusbar: false,
    readonly:true,
    height:'180',
    // border: false,
});
tinymce.init({
    selector: '#textberita5',
    plugin: 'a_tinymce_plugin',
    a_plugin_option: true,
    a_configuration_option: 400,
    // inline: true,
    toolbar: '',
    menubar: false,
    statusbar: false,
    readonly:true,
    height:'180',
});
tinymce.init({
    selector: '#textberita6',
    plugin: 'a_tinymce_plugin',
    a_plugin_option: true,
    a_configuration_option: 400,
    // inline: true,
    toolbar: '',
    menubar: false,
    statusbar: false,
    readonly:true,
    height:'180',
});
tinymce.init({
    selector: '#textberita',
    plugin: 'a_tinymce_plugin',
    a_plugin_option: true,
    a_configuration_option: 400,
    // inline: true,
    toolbar: '',
    menubar: false,
    statusbar: false,
    readonly:true,
    height:'180',
});




    </script>
    
    <title>Home</title>
</head>

<body>
  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="{{asset('lp/Images/gerindra.png')}}" alt="AdminLTELogo" height="150" width="150">
    </div>
    @yield('content')

    <!-- footer -->

    <div class="container-lg">
        <div class="footer">

        </div>
    </div>


</body>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

<!--javascript-->
<script src="{{asset('template/plugins/jquery/jquery.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script type=" text/javascript" src="{{asset('lp/js/bootstrap.min.js')}}"></script>
<script type=" text/javascript" src="{{asset('lp/styles/custom.js')}}"></script>
<script src="{{asset('template/dist/js/adminlte.js')}}"></script>


</html>