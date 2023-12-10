<!DOCTYPE html>
<html lang="en">
    <head>
        <title>{{ $pageTitle }}</title>
        @include('admin.dependency.cdn')
    </head>
<body id="admin_bg" style="font-family: 'Prompt', sans-serif;">

    <header>
        @include('admin.includes.navbar')
    </header>


    <div class="container-fluid shadow-sm border-top bg-light">
        <div class="container">
            <h5 class="fw-bold py-3">{{ $pageTitle }}</h5>
        </div>
    </div>
    <div class="container shadow-sm rounded bg-light p-4 mt-4 mb-4">
        @if (Auth::viaRemember())
        <p>ยินดีต้อนรับกลับ! คุณเข้าสู่ระบบผ่าน "จดจำฉัน"</p>
        @else
        <p>ยินดีต้อนรับ! คุณเข้าสู่ระบบได้ตามปกติ</p>{{ Auth::user()->position }}
        @endif
    </div>

    {{-- ============= <script></script> tag below code ============= --}}
    @include('admin.includes.scripttag_below')

    {{-- ============= Footer Copyright ============= --}}
    @include('admin.includes.footer')


</body>
</html>