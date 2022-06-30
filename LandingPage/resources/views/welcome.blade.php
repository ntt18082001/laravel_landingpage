<x-layout>
    <x-banner />

    <x-product1 />

    <x-product2 />

    <x-buy-now />

    <x-about />

    <x-staff />

    <x-register />

    <!-- Modal -->
    <div class="modal fade" id="modalOrder" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Nhập thông tin</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="form_save" method="post" autocomplete="off">
                        @csrf
                        <x-input name="fullname" label="Họ và tên" />
                        <x-input name="email" label="Email" />
                        <x-input name="phone_number" label="Số điện thoại" />
                        <div class="form-group mb-3 mt-3 text-end">
                            <button type="button" class="btn btn-primary btn-submit">
                                <i class="fa-solid fa-plus"></i>
                                Đặt mua
                            </button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
