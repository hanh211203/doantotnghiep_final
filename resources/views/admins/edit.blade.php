<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/font/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/admins.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/majors_fix.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/create.css') }}">
    <title>Quản Trị Viên - Chỉnh sửa</title>
</head>

<body>
    <div class="root">
        <div class="header">
            <div class="name-block">
                <h1 class="company-name">BKM</h1>
            </div>
            <div class="sub-head">
                <div id="date"></div>
                <img src="{{ URL('image/avatar.png') }}" alt="" class="user-pic" onclick="toggleMenu()"
                    style="width: 30px" height="30px">

                <div class="sub-menu-wrap" id="subMenu">
                    <div class="sub-menu">
                        <div class="user-info">
                            <img src="{{ URL('image/avatar.png') }}" alt="" class="user-info"
                                style="width: 30px" height="30px">
                            <h2>
                                @if (session()->has('admin'))
                                    Chào, {{ session('admin')->admin_name }}
                                @endif
                            </h2>
                        </div>
                        <hr>

                        <a href="{{ route('admins.logout') }}" class="sub-menu-link">
                            <img src="{{ URL('image/logout.png') }}" alt="" class="user-info">
                            <p>Đăng xuất</p>
                            <span>></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="main">
            <div class="sidebar">
                <ul class="category">
                    <li>
                        <a href="{{ route('dashboards.index') }}">
                            <span><i class="fas fa-tachometer-alt"></i>Thống Kê</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admins.index') }}">
                            <span><i class="fa fa-user"></i>Quản Trị Viên</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('students.academics') }}">
                            <span><i class="fas fa-user-graduate"></i>Sinh Viên</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('academics.index') }}">
                            <span><i class="fas fa-calendar"></i>Niên Khoá</span>
                        </a>
                    </li>
                    <li>
                        <a href=" {{ route('study_classes.index') }}">
                            <span><i class="fas fa-home"></i>Lớp Học</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('majors.index') }}">
                            <span><i class="fas fa-network-wired"></i>Chuyên Ngành</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('accountants.index') }}">
                            <span><i class="fas fa-file-plus"></i>Kế Toán Viên</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('payment_methods.index') }}">
                            <span><i class="fas fa-cash-register"></i>Phương Thức Thanh Toán</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('basic_fees.index') }}">
                            <span><i class="fas fa-money-bill"></i>Học Phí Cơ Bản</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('scholarships.index') }}">
                            <span><i class="fas fa-gift"></i>Mức Học Bổng</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('payment_types.index') }}">
                            <span><i class="fas fa-meteor"></i>Kiểu Đóng</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('blogs.index') }}">
                            <span><i class="fas fa-bell"></i>Bài Đăng</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="content2">
                <h3 class="table-name2">Sửa Quản Trị Viên</h3>
                <div class="add-form">
                    <form method="post">
                        <div class="form-heading">Điền Các Trường Thông Tin</div>
                        @csrf
                        @method('PUT')
                        @foreach ($admins as $admin)
                            <div class="inputs-list">
                                <div class="mt-3 mb-3">
                                    <label for="admin_name">Họ tên</label>
                                    <input value="{{ $admin->admin_name }}" name="admin_name" type="text"
                                        id="admin_name" class="form-control form-control-sm" />
                                    @if ($errors->has('admin_name'))
                                        <span class="text-danger">{{ $errors->first('admin_name') }}</span>
                                    @endif
                                </div>
                                <div class="mt-3 mb-3">
                                    <label for="admin_phone">Số điện thoại</label>
                                    <input value={{ $admin->admin_phone }} name="admin_phone" type="text"
                                        id="admin_phone" class="form-control form-control-sm" />
                                    @if ($errors->has('admin_phone'))
                                        <span class="text-danger">{{ $errors->first('admin_phone') }}</span>
                                    @endif
                                </div>

                                <div class="mt-3 mb-3">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                            <span>Địa chỉ thường trú:</span>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                            <label for="province">Thành phố</label>
                                            <input value="{{ $admin->province }}" name="province" type="text"
                                                id="province" class="form-control form-control-sm" />
                                            @if ($errors->has('province'))
                                                <span class="text-danger">{{ $errors->first('province') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                            <label for="district">Quận</label>
                                            <input value="{{ $admin->district }}" name="district" type="text"
                                                id="district" class="form-control form-control-sm" />
                                            @if ($errors->has('district'))
                                                <span class="text-danger">{{ $errors->first('district') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                            <label for="street">Đường</label>
                                            <input value="{{ $admin->street }}" name="street" type="text"
                                                id="street" class="form-control form-control-sm" />
                                            @if ($errors->has('street'))
                                                <span class="text-danger">{{ $errors->first('street') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3 mb-3">
                                    <label for="email">Email</label>
                                    <input value="{{ $admin->email }}" name="email" type="text" id="email"
                                        class="form-control form-control-sm" />
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="mt-3 mb-3">
                                    <label for="password">Mật khẩu</label>
                                    <input value="{{ $admin->password }}" name="password" type="password"
                                        id="password" class="form-control form-control-sm" />
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div>
                                    <button class="btn btn-success btn-sm">Lưu</button>
                                </div>
                            </div>
                        @endforeach
                    </form>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <script>
        var today = new Date();
        var date = today.getDate() + '/' + (today.getMonth() + 1) + '/' + today.getFullYear();
        document.getElementById("date").innerHTML = date;
    </script>

    <script>
        let subMenu = document.getElementById("subMenu");

        function toggleMenu() {
            subMenu.classList.toggle("open-menu");
        }

        window.onclick = (event) => {
            if (!event.target.matches('.user-pic')) {
                if (subMenu.classList.contains('open-menu')) {
                    subMenu.classList.remove('open-menu')
                }
            }
        }

        subMenu.addEventListener('click', (event) => event.stopPropagation());
    </script>
</body>

</html>
