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


    {{-- ============= 1. Add User หน้า User Management ============= --}}
    <div class="container shadow-sm rounded bg-light p-4 mt-4">
        <p><span class="fw-bold">เพิ่มบัญชีผู้ใช้</span><br><span class="text-secondary">เพิ่มข้อมูลบัญชีผู้ใช้และที่อยู่อีเมล</span></p>
        @if(session('error'))
            <div class="alert alert-danger text-danger text-center" role="alert">{{ session('error') }}</div>
        @endif
        <form action="{{ route('add-users') }}" method="POST">
            @csrf
            <div class="row">
                <!-- Firstname input -->
                <div class="col-md-4 mb-2">
                    <label for="firstname">ชื่อ <span class="text-danger">*</span></label>
                    <input type="text" name="firstname" id="firstname" class="form-control" placeholder="..." required>
                </div>

                <!-- Lastname input -->
                <div class="col-md-4 mb-2">
                    <label for="lastname">นามสกุล <span class="text-danger">*</span></label>
                    <input type="text" name="lastname" id="lastname" class="form-control" placeholder="..." required>
                </div>

                <!-- Position input -->
                <div class="col-md-4 mb-2">
                    <label for="position">ตำแหน่ง <span class="text-danger">*</span></label>
                    <input type="text" name="position" id="position" class="form-control" placeholder="..." required>
                </div>
            </div>
            <div class="row">
                <!-- Email input -->
                <div class="col-md-4 mb-3">
                    <label for="email">อีเมล <span class="text-danger">*</span></label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="..." required>
                </div>

                <!-- Password input -->
                <div class="col-md-4 mb-3">
                    <label for="password">รหัสผ่าน <span class="text-danger">*</span></label>
                    <input type="password" name="password" id="password" class="form-control" min="4" placeholder="..." required>
                </div>

                <!-- Password input -->
                <div class="col-md-4 mb-3">
                    <label for="password_confirmation">ยืนยันรหัสผ่าน <span class="text-danger">*</span></label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" min="4" placeholder="..." required>
                </div>
            </div>

            <div class="col-md-2">
                <button type="submit" class="btn btn-dark px-3 shadow-sm">บันทึก</button>
            </div>
        </form>
    </div>


    
    {{-- ============= 2. User account table หน้า Profile ============= --}}
    <div class="container shadow-sm rounded bg-light p-4 mt-4 mb-4">
        <p><span class="fw-bold">ตารางการจัดการผู้ใช้</span><br><span class="text-secondary">คุณสามารถจัดการบัญชีผู้ใช้ทั้งหมดในตารางนี้ได้</span></p>
        @if(session('error_delete'))
            <div class="alert alert-danger text-danger text-center" role="alert">{{ session('error_delete') }} <a href="{{ route('user_profile') }}" class="link-primary fw-bold">Go to My Profile</a></div>
        @endif
        @if(session('error_duplicateEmail'))
            <div class="alert alert-danger text-danger text-center" role="alert">{{ session('error_duplicateEmail') }}</div>
        @endif

        <table class="table table-striped table-hover css-serial" id="myTable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>ชื่อ</th>
                    <th>นามสกุล</th>
                    <th>ตำแหน่ง</th>
                    <th>อีเมล</th>
                    <th>การกระทำ</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $all_users)
                    <tr>
                        <td></td>
                        <td>{{ $all_users->firstname }}</td>
                        <td>{{ $all_users->lastname }}</td>
                        <td>{{ $all_users->position }}</td>
                        <td>{{ $all_users->email }}</td>
                        <td>
                            <div class="input-group">
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#editModal{{ $all_users->id }}"><i class="fas fa-edit"></i></button>
                                    <button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $all_users->id }}"><i class="fas fa-trash"></i></button>
                                </div>
                            </div>
                        </td>
                    </tr>


                    <!-- Modal Edit Users -->
                    <div class="modal fade" id="editModal{{ $all_users->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header bg-primary">
                                    <h5 class="modal-title text-light" id="exampleModalLabel">แก้ไขบัญชีผู้ใช้ ?</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="{{ route('edit-users', $all_users->id) }}" method="POST">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="mb-0">
                                            <label for="editFirstname">ชื่อ <span class="text-danger"> *</span></label>
                                            <input type="text" class="form-control" name="editFirstname" id="editFirstname" value="{{ $all_users->firstname }}" placeholder="Firstname" required>
                                        </div>
                                        <div class="mb-0 mt-2">
                                            <label for="editLastname">นามสกุล <span class="text-danger"> *</span></label>
                                            <input type="text" class="form-control" name="editLastname" id="editLastname" value="{{ $all_users->lastname }}" placeholder="Lastname" required>
                                        </div>
                                        <div class="mb-0 mt-2">
                                            <label for="editPosition">ตำแหน่ง <span class="text-danger"> *</span></label>
                                            <input type="text" class="form-control" name="editPosition" id="editPosition" value="{{ $all_users->position }}" placeholder="Position" required>
                                        </div>
                                        <div class="mb-0 mt-2">
                                            <label for="editEmail">อีเมล</label>
                                            <input type="email" class="form-control" id="editEmail" aria-describedby="emailHelp" value="{{ $all_users->email }}" disabled>
                                            <small id="emailHelp" class="form-text text-muted">หากต้องการเปลี่ยนอีเมล โปรดเข้าสู่ระบบบัญชีนี้เพื่อดำเนินการต่อ</small>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">ยกเลิก</button>
                                        <button type="submit" class="btn btn-primary"><i class="fas fa-edit"></i> แก้ไข</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                    <!-- Modal Delete Users -->
                    <div class="modal fade" id="deleteModal{{ $all_users->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header bg-danger">
                                    <h5 class="modal-title text-light" id="exampleModalLabel">ลบบัญชีผู้ใช้ ?</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                โปรดยืนยันที่จะลบบัญชีนี้ ? <br><br>
                                    ชื่อ-นามสกุล : {{ $all_users->firstname. ' ' .$all_users->lastname}} <br>
                                    อีเมล : {{ $all_users->email }} <br>
                                    ตำแหน่ง : {{ $all_users->position }}
                                </div>
                                <div class="modal-footer">
                                    <form action="{{ route('delete-users', $all_users->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">ยกเลิก</button>
                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> ลบ</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </tbody>
        </table>

    </div>






    {{-- ============= <script></script> tag below code ============= --}}
    @include('admin.includes.scripttag_below')

    {{-- ============= Footer Copyright ============= --}}
    @include('admin.includes.footer')


</body>
</html>