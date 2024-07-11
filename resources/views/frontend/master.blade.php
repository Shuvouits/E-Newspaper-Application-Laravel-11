<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title> Lara E-Paper | A PHP Laravel Script </title>
    <meta name="Author" content="ThemesBazar.Com" />
    <meta name="Developed By" content="ThemesBazar.Com" />
    <meta name="Developer" content="ThemesBazar.Com" />
    <meta name="keywords"
        content="ThemesBazar, Online newspaper, bangla newspaper, bangla newspapers, bangla newspapers, bangla paper, bd newspaper, newspaper bd, newspaper bangladesh" />
    <meta http-equiv="Cache-Control" content="no-cache" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta name="distribution" content="Global">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Language" content="bn" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">


    <meta property="og:title" content="Epaper-ThemesBazar" />

    <meta property="og:image"
        content="https://laraepaper.themebazar.xyz/uploads/epaper/2024/03/06/images/page65e9a50a9f4b6-65e9a7593fc84.jpg" />

    <link rel="image_src"
        href="https://laraepaper.themebazar.xyz/uploads/epaper/2024/03/06/images/page65e9a50a9f4b6-65e9a7593fc84.jpg" />

    <meta property="og:url" content="shared/2024/03/06/images/page65e9a50a9f4b6-65e9a7593fc84.jpg" />

    <meta property="og:image:type" content="image/jpeg" />
    <meta name="description" content="This Is Epaper Website, if You Read full News Plz Click here." />



    <meta property="twitter:title" content="Epaper-ThemesBazar" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image"
        content="https://laraepaper.themebazar.xyz/uploads/epaper/2024/03/06/images/page65e9a50a9f4b6-65e9a7593fc84.jpg" />

    <meta property="twitter:url" content="shared/2024/03/06/images/page65e9a50a9f4b6-65e9a7593fc84.jpg" />
    <meta property="twitter:image:type" content="image/jpeg" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">








    <!-- icon -->
    <link rel="icon" type="image/png" href="https://laraepaper.themebazar.xyz/assets/images/32x32.png" />
    <!-- font awesome css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/asset/css/fontawesome.css') }}" />
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('frontend/asset/css/main.css') }}" />

    <link rel="stylesheet" href="{{ asset('frontend/asset/css/themebazar.css') }}" />

    <link rel="stylesheet" href="{{ asset('frontend/asset/css/common.css') }}" />

    <!-- fonts -->
    <link rel="stylesheet" href="{{ asset('frontend/asset/css/style.css') }}" />
    <!-- jquery js -->
    <script src="{{ asset('frontend/asset/js/main.js') }}"></script>
    <!-- maplight js -->
    <script src="{{ asset('frontend/asset/js/map-highlight.js') }}"></script>
    <script type="text/javascript">
        $(function() {
            $('.map').maphilight();
        });
    </script>
    <!-- main js -->
    <script type="text/javascript" src="{{ asset('frontend/asset/js/jquery.min.js') }}"></script>
    <!-- datepicker -->
    <link rel="stylesheet" href="{{ asset('frontend/asset/js/jquery-ui.js') }}">
    <script src="{{ asset('frontend/asset/css/jquery-ui.css') }}"></script>
    <style type="text/css">
        .ui-datepicker-inline {
            width: auto !important;
            border-radius: 0px;
        }
    </style>

    <style type="text/css">
        @media (min-width: 0px) and (max-width: 400px) {
            .footerLogo {
                display: none !important;
            }
        }
    </style>
</head>

<body id="body">




    <div class="main-container" style="box-shadow: rgba(0, 3, 6, 1) 0 5px 15px;margin-top: 10px;margin-bottom: 10px;">
        <div class="header-div">

            @include('frontend.section.header')

            </br>

            @include('frontend.section.left-sidebar')


            <!-- main paper div -->
            @yield('content')


            <!-- right sidebar -->
            @include('frontend.section.right-sidebar')

        </div>


        @include('frontend.section.footer')


    </div>



    <!-- datepicker -->
    <script type="text/javascript">
        jQuery(function() {
            var enableDays = ["2020-02-03", "2020-02-07", "2020-02-08", "2020-05-07", "2020-05-08", "2020-05-08",
                "2020-05-08", "2020-05-27", "2020-05-26", "2023-06-21", "2023-06-22", "2023-06-23",
                "2023-06-23", "2023-07-08", "2024-03-06"
            ];

            function enableAllTheseDays(date) {
                var sdate = $.datepicker.formatDate('yy-mm-dd', date)
                if ($.inArray(sdate, enableDays) != -1) {
                    return [true];
                }
                return [false];
            }
            $('#Datepicker1').datepicker({
                dateFormat: 'yy-mm-dd',
                beforeShowDay: enableAllTheseDays
            });
        })


        $(function() {
            $("#Datepicker1").datepicker();
            $("#Datepicker1").on("change", function() {
                var archive_date = $(this).val();
                var site_url = $(".site_url").val();
                if (archive_date == '') {
                    alert('Please Select A Valid Date !');
                    window.reload();
                }
                if (archive_date != null) {
                    var request_url = site_url + '/nogor-edition/' + archive_date + '/1';
                    window.location = request_url;
                }
            });
        });
    </script>


    <!-- search result not found -->
    <script type="text/javascript">
        $(function() {
            $('<div class="alert-box message_body">আপনি যে বিষয়টি অনুসন্ধান করছেন তা খুজে পাওয়া যায়নি !! আপনাকে ধন্যবাদ খবর অনুসন্ধান করার জন্য ।</div>')
                .insertBefore('#message_not_found')
                .delay(3000)
                .fadeOut(4000, function() {
                    $(this).remove();
                });
        });
    </script>

   @stack('scripts')

</body>

</html>
