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


    {{-- ============= 1. update Personal Info หน้า Profile ============= --}}
    <div class="container shadow-sm rounded bg-light p-4 mt-4">
        <p><span class="fw-bold">ข้อมูลโปรไฟล์</span><br><span class="text-secondary">อัปเดตข้อมูลโปรไฟล์และที่อยู่อีเมลของบัญชีของคุณ</span></p>
        @if(session('error'))
            <div class="alert alert-danger text-danger text-center">{{ session('error') }}</div>
        @endif
        <form action="{{ route('update-profile', Auth::user()->id) }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-3 mb-3">
                    <label for="editFirstname" class="form-label">ชื่อ <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="editFirstname" id="editFirstname" value="{{ Auth::user()->firstname }}" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="editLastname" class="form-label">นามสกุล <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="editLastname" id="editLastname" value="{{ Auth::user()->lastname }}" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="editPosition" class="form-label">ตำแหน่ง <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="editPosition" id="editPosition" value="{{ Auth::user()->position }}" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="editEmail" class="form-label">อีเมล <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" name="editEmail" id="editEmail" value="{{ Auth::user()->email }}" required>
                </div>
            </div>

            <div class="col-md-2">
                <button type="submit" class="btn btn-dark px-3 shadow-sm">บันทึก</button>
            </div>
        </form>
    </div>


    
    {{-- ============= 2. update password หน้า Profile ============= --}}
    <div class="container shadow-sm rounded bg-light p-4 mt-4">
        <p><span class="fw-bold">อัปเดตรหัสผ่าน</span><br><span class="text-secondary">ตรวจสอบให้แน่ใจว่าบัญชีของคุณใช้รหัสผ่านแบบสุ่มที่ยาวเพื่อความปลอดภัย</span></p>
        @if(session('success'))
            <div class="alert alert-success text-success text-center">{{ session('success') }}</div>
        @endif
        <form action="{{ route('update-password', Auth::user()->id) }}" method="POST">
            @csrf
            <div class="col-md-6 mb-3">
                <label for="currentPassword" class="form-label">รหัสผ่านปัจจุบัน <span class="text-danger">*</span></label>
                <input type="password" class="form-control @error('currentPassword') is-invalid @enderror" name="currentPassword" id="currentPassword">
                @error('currentPassword')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="newPassword" class="form-label">รหัสผ่านใหม่ <span class="text-danger">*</span></label>
                <input type="password" class="form-control @error('newPassword') is-invalid @enderror" name="newPassword" id="newPassword">
                @error('newPassword')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="confirmPassword" class="form-label">ยืนยันรหัสผ่าน <span class="text-danger">*</span></label>
                <input type="password" class="form-control" name="newPassword_confirmation" id="confirmPassword">
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-dark px-3 shadow-sm">บันทึก</button>
            </div>
        </form>
    </div>



    {{-- ============= 3. delete account หน้า Profile ============= --}}
    <div class="container shadow-sm rounded bg-light p-4 mt-4 mb-4">
        <div class="col-md-6">
            @if(session('passwordIncorrect'))
                <div class="alert alert-danger text-center text-danger">{{ session('passwordIncorrect') }}</div>
            @endif
            <p><span class="fw-bold">ลบบัญชี</span><br><span class="text-secondary">เมื่อบัญชีของคุณถูกลบ ทรัพยากรและข้อมูลทั้งหมดจะถูกลบอย่างถาวร ก่อนที่จะลบบัญชีของคุณ โปรดดาวน์โหลดข้อมูลใด ๆ ที่คุณต้องการเก็บไว้</span></p>
        </div>
        <button type="submit" class="btn btn-danger px-4" data-bs-toggle="modal" data-bs-target="#exampleModal">ลบบัญชี</button>
    </div>
    <div class="modal modal-lg fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="{{ route('delete-account', Auth::user()->id) }}" method="POST">
                    @csrf
                    <div class="modal-body p-4">
                        <p><span class="fw-bold">คุณแน่ใจหรือไม่ว่าต้องการลบบัญชีของคุณ ?</span><br><span class="text-secondary">เมื่อบัญชีของคุณถูกลบ ทรัพยากรและข้อมูลทั้งหมดจะถูกลบอย่างถาวร โปรดป้อนรหัสผ่านของคุณเพื่อยืนยันว่าคุณต้องการลบบัญชีของคุณอย่างถาวร</span></p>
                        <div class="col-md-8">
                            <input type="password" class="form-control mt-3 mb-1" name="deletePassword" placeholder="Your password" required>
                        </div>
                    </div>
                    <div class="modal-footer px-4">
                        <button type="button" class="btn btn-outline-secondary px-4 shadow-sm" data-bs-dismiss="modal">ยกเลิก</button>
                        <button type="submit" class="btn btn-danger px-4 shadow-sm">ลบบัญชี</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    {{-- ============= <script></script> tag below code ============= --}}
    @include('admin.includes.scripttag_below')

    {{-- ============= Footer Copyright ============= --}}
    @include('admin.includes.footer')


</body>
</html>