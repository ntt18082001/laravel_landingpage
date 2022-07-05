@php
$staff_data = [
    [
        'name' => 'Hoàng Vân',
        'job_title' => 'GIÁM ĐỐC TỔNG PHÂN PHỐI HỒ CHÍ MINH',
        'avt' => 'hoang-van.jpg',
    ],
    [
        'name' => 'Minh Thu',
        'job_title' => 'giám đốc kinh doanh',
        'avt' => 'minh-thu.jpg',
    ],
    [
        'name' => 'Ha Hanh',
        'job_title' => 'GIÁM ĐỐC KHU VỰC PHÚ THỌ',
        'avt' => 'ha-hanh.jpg',
    ],
    [
        'name' => 'Thu Lê',
        'job_title' => 'GIÁM ĐỐC VÙNG KIÊN GIANG',
        'avt' => 'thu-le.jpg',
    ],
    [
        'name' => 'Tiên Đinh',
        'job_title' => 'GIÁM ĐỐC KINH DOANH KHU VỰC HẬU GIANG',
        'avt' => 'tien-dinh.jpg',
    ],
    [
        'name' => 'Quỳnh Lam',
        'job_title' => 'GIÁM ĐỐC KINH DOANH KHU VỰC HỒ CHÍ MINH',
        'avt' => 'quynh-lam.jpg',
    ],
    [
        'name' => 'Trúc Linh',
        'job_title' => 'GIÁM ĐỐC KINH DOANH KHU VỰC AN GIANG',
        'avt' => 'truc-linh.jpg',
    ],
    [
        'name' => 'Minh Em',
        'job_title' => 'GIÁM ĐỐC KINH DOANH',
        'avt' => 'minh-em.jpg',
    ],
    [
        'name' => 'Kim Dung',
        'job_title' => 'GIÁM ĐỐC KHU VỰC ĐẮK NÔNG',
        'avt' => 'kim-dung.jpg',
    ],
    [
        'name' => 'Ngọc Hân',
        'job_title' => 'CHUYÊN VIÊN CHĂM SÓC KHÁCH HÀNG',
        'avt' => 'ngoc-han.jpg',
    ],
    [
        'name' => 'Giang Mỹ Mỹ',
        'job_title' => 'CHUYÊN VIÊN CHĂM SÓC KHÁCH HÀNG',
        'avt' => 'giang-my-my.jpg',
    ],
    [
        'name' => 'Trương Mai',
        'job_title' => 'GIÁM ĐỐC KHU VỰC HÀ TĨNH',
        'avt' => 'truong-mai.jpg',
    ],
    [
        'name' => 'Ngọc Ý Huỳnh',
        'job_title' => 'GIÁM ĐỐC KINH DOANH KHU VỰC HẬU GIANG',
        'avt' => 'ngoc-y-huynh.jpg',
    ],
];
@endphp

<div class="container product" id="staff" style="overflow: hidden;">
    <div class="mt-5">
        <h3 class="product-title">ĐỘI NGŨ NHÂN SỰ</h3>
        <h3 class="product-sub-title m-auto w-md-50">
            Đây là những "hạt nhân" đầu tiên, đóng góp phần việc xây dựng và phát triển nền móng hùng mạnh cho
            <strong>Công Ty
                TNHH
                MTV Thương Mại - Dịch Vụ Nam Bắc</strong>
        </h3>
        <div class="row mt-4 justify-content-center">
            @foreach ($staff_data as $staff)
                <div class="col-md-3 mb-4 col-sm-6 staff-item text-center staff">
                    <div class="staff-box-img mb-3">
                        <img class="staff-item-img" src="{{ asset('assets/img/staff/' . $staff['avt']) }}" alt="">
                    </div>
                    <h4 class="staff-item-name">{{ $staff['name'] }}</h4>
                    <h4 class="staff-item-sub text-uppercase">{{ $staff['job_title'] }}</h4>
                </div>    
            @endforeach
        </div>
    </div>
</div>
