<!-- ======= HTML <head> ======= -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="icon" href="{{ asset('icons/logo_ph.png') }}" type="image/x-icon">

<!-- ======= Jquery 3.7.1 ======= -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<!-- ======= Bootstrap5 CDN ======= -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<!-- ======= Font Awesome Icon ======= -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" type="text/css">

<!-- ======= DataTables CDN ======= -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css">
<script>
    $(document).ready( function () {
        $('#myTable').DataTable(
            {
                "oLanguage": {
                    "sLengthMenu": "แสดง _MENU_ เร็คคอร์ด ต่อหน้า",
                    "sZeroRecords": "ไม่เจอข้อมูลที่ค้นหา",
                    "sInfo": "แสดง _START_ ถึง _END_ ของ _TOTAL_ เร็คคอร์ด",
                    "sInfoEmpty": "แสดง 0 ถึง 0 ของ 0 เร็คคอร์ด",
                    "sInfoFiltered": "(จากเร็คคอร์ดทั้งหมด _MAX_ เร็คคอร์ด)",
                    "sSearch": "ค้นหา :",
                    "aaSorting" :[[0,'desc']],
                    "oPaginate": {
                        "sFirst":    "หน้าแรก",
                        "sPrevious": "ก่อนหน้า",
                        "sNext":     "ถัดไป",
                        "sLast":     "หน้าสุดท้าย"
                        },
                }
            }
        );
    });
</script>
<style>
    .css-serial {
        counter-reset: serial-number;
    }
    .css-serial td:first-child:before {
        counter-increment: serial-number;
        content: counter(serial-number);
    }
</style>
<!-- ======= End DataTables CDN ======= -->

<!-- ======= Google Fonts ======= -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;1,200&display=swap" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css2?family=Maitree:wght@200;400;600&family=Prompt:ital,wght@0,100;0,200;0,300;1,100;1,300&display=swap" rel="stylesheet">


<!-- ======= Custom CSS ======= -->
<!-- ======= Bootstrap5 Color ======= -->
<link rel="stylesheet" href="{{ asset('css/custom_bootstrap5_color.css') }}">
<!-- ======= Style Google Fonts ======= -->
<link rel="stylesheet" href="{{ asset('css/custom_fonts.css') }}">