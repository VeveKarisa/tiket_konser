<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="<?= base_url('assets/') . "img/Cladtek logo icon (blue).png" ?>">

    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <!-- <script src="../assets/js/script.js"></script> -->

    <!-- <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script> -->
    <script src="<?= base_url('application/libraries/ckeditor5-build-classic/ckeditor.js') ?>"></script>

    <!-- Datatables -->
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" /> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" /> <!-- COLVIS -->
    <!-- <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script> -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script> <!-- COLVIS -->
    <link type="text/css" href="//gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/css/dataTables.checkboxes.css" rel="stylesheet" />
    <script type="text/javascript" src="//gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/js/dataTables.checkboxes.min.js"></script>


    <!-- for Button -->
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>

    <!-- Select2 CSS, the JS file will be called in single page -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <!-- Export to Excel  -->
    <!-- <script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>

    <!-- Export to Excel with colvis -->
    <link href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css" rel="stylesheet" /> <!-- COLVIS -->
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.colVis.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Alpine JS -->
    <!-- <script defer src="https://unpkg.com/alpinejs@3.2.1/dist/cdn.min.js"></script> -->

    <!-- <?php /* BOOTSTRAP FOR DATE PICKER */ ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"> -->


    <script>
        tailwind.config = {
            content: ['./public/**/*.{html,js}'],
            darkMode: 'class',
            theme: {
                container: {
                    center: true,
                    padding: '16px',
                },
                extend: {
                    colors: {
                        // primary: '#1C9AD6',
                        primary: '#1099D6',
                        secondary: '#64748b',
                        dark: '#0f172a',
                    },
                    screens: {
                        'sm': '640px',
                        // => @media (min-width: 640px) { ... }

                        'md': '768px',
                        // => @media (min-width: 768px) { ... }

                        'lg': '1024px',
                        // => @media (min-width: 1024px) { ... }

                        'xl': '1280px',
                        // => @media (min-width: 1280px) { ... }

                        '2xl': '1536px',
                        // => @media (min-width: 1536px) { ... }
                    },
                    fontFamily: {
                        'montserrat': ['Montserrat', 'ui-sans-serif', 'system-ui'],
                    },
                },
            },
            plugins: [],
        };
    </script>
    <title><?= (($title) ?? 'Concert Ticketing') ?></title>

    <script>
        $(function() {
            $(this).bind("contextmenu", function(e) {
                e.preventDefault();
            });
        });
    </script>
    <!-- <script>
        document.onkeydown = function(e) {
            if (e.ctrlKey && (e.keyCode === 85 || e.keyCode === 117 || e.keyCode === 73 || e.keyCode === 74 || e.keyCode === 67)) {
                <?php /* block ctrl+u, ???, ctrl+i, ctrl+j, ctrl+c */ ?>
                return false;
            } else if (e.keyCode === 121 || e.keyCode === 123) {
                <?php /* block F10 AND F12 */ ?>
                return false;
            } else {
                return true;
            }
        };
        $(document).keypress("u", function(e) {
            if (e.ctrlKey) {
                return false;
            } else {
                return true;
            }
        });
    </script> -->
</head>