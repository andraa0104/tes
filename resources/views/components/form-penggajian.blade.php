<x-layout>
    {{-- <x-slot:title>{{ $title }}</x-slot:title> --}}
    <div class="page-wrapper">
        <div class="content">

            <div class="comp-section">
                <div class="section-header">
                    <h3 class="section-title">Formulir Pembayaran Gaji</h3>
                    <div class="line"></div>
                </div>
                <div class="row">
                    <div class="card bg-white">
                        <div class="card-body">
                            <div id="progrss-wizard" class="twitter-bs-wizard">
                                <ul class="nav nav-tabs nav-tabs-solid  nav-justified">
                                    <li class="nav-item">
                                        <a href="#progress-seller-details" class="nav-link" data-toggle="tab">
                                            <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="User Details"> Data Pegawai
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#progress-company-document" class="nav-link" data-toggle="tab">
                                            <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Address Detail">
                                                Absensi </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#progress-bank-detail" class="nav-link" data-toggle="tab">
                                            <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Payment Details">
                                                Gaji Pokok dan Tunjangan </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#progress-bank-detail1" class="nav-link" data-toggle="tab">
                                            <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Payment Details">
                                                Potongan </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#progress-bank-detail2" class="nav-link" data-toggle="tab">
                                            <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Payment Details">
                                                Pendapatan Bersih </div>
                                        </a>
                                    </li>

                                </ul>

                                <div id="bar" class="progress mt-4">
                                    <div class="progress-bar bg-success progress-bar-striped progress-bar-animated">
                                    </div>
                                </div>
                                <div class="tab-content twitter-bs-wizard-tab-content">
                                    <div class="tab-pane" id="progress-seller-details">
                                        <form>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="progresspill-firstname-input">Nomor Induk
                                                            Kepegawaian</label>
                                                        <input type="text" class="form-control"
                                                            id="progresspill-firstname-input">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="progresspill-lastname-input">Nama
                                                            Lengkap</label>
                                                        <input type="text" class="form-control"
                                                            id="progresspill-lastname-input">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="progresspill-phoneno-input">Jabatan</label>
                                                        <input type="text" class="form-control"
                                                            id="progresspill-phoneno-input">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="progresspill-phoneno-input">Departemen</label>
                                                        <input type="text" class="form-control"
                                                            id="progresspill-phoneno-input">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="progresspill-email-input">Penempatan</label>
                                                        <input type="email" class="form-control"
                                                            id="progresspill-email-input">
                                                    </div>
                                                </div>




                                            </div>
                                        </form>
                                        <ul class="pager wizard twitter-bs-wizard-pager-link">
                                            <li class="next"><a href="javascript: void(0);" class="btn btn-primary"
                                                    onclick="nextTab()">Next <i
                                                        class="bx bx-chevron-right ms-1"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="progress-company-document">
                                        <div>
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="progresspill-pancard-input"
                                                                class="form-label">Hari Kerja</label>
                                                            <input type="text" class="form-control"
                                                                id="progresspill-pancard-input">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="progresspill-vatno-input"
                                                                class="form-label">Sakit</label>
                                                            <input type="text" class="form-control"
                                                                id="progresspill-vatno-input">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="progresspill-cstno-input"
                                                                class="form-label">Izin</label>
                                                            <input type="text" class="form-control"
                                                                id="progresspill-cstno-input">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="progresspill-servicetax-input"
                                                                class="form-label">Alfa</label>
                                                            <input type="text" class="form-control"
                                                                id="progresspill-servicetax-input">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="progresspill-servicetax-input"
                                                                class="form-label">Cuti</label>
                                                            <input type="text" class="form-control"
                                                                id="progresspill-servicetax-input">
                                                        </div>
                                                    </div>

                                                </div>
                                            </form>



                                            <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                <li class="previous"><a href="javascript: void(0);"
                                                        class="btn btn-primary" onclick="nextTab()"><i
                                                            class="bx bx-chevron-left me-1"></i> Previous</a></li>
                                                <li class="next"><a href="javascript: void(0);"
                                                        class="btn btn-primary" onclick="nextTab()">Next <i
                                                            class="bx bx-chevron-right ms-1"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="progress-bank-detail">
                                        <div>
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="progresspill-pancard-input"
                                                                class="form-label">Gaji Pokok</label>
                                                            <input type="text" class="form-control"
                                                                id="progresspill-pancard-input">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="progresspill-vatno-input"
                                                                class="form-label">Tunjangan Makan</label>
                                                            <input type="text" class="form-control"
                                                                id="progresspill-vatno-input">
                                                        </div>
                                                    </div>
                                                </div>


                                            </form>

                                            <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                <li class="previous"><a href="javascript: void(0);"
                                                        class="btn btn-primary" onclick="nextTab()"><i
                                                            class="bx bx-chevron-left me-1"></i> Previous</a></li>
                                                <li class="next"><a href="javascript: void(0);"
                                                        class="btn btn-primary" onclick="nextTab()">Next <i
                                                            class="bx bx-chevron-right ms-1"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="progress-bank-detail1">
                                        <div>
                                            <form>
                                                <div class="mb-4 card-header">

                                                    <h5 card-title mb-0>BPJS</h5>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="progresspill-pancard-input"
                                                                class="form-label">BPJS Kesehatan 1%</label>
                                                            <input type="text" class="form-control"
                                                                id="progresspill-pancard-input">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="progresspill-vatno-input"
                                                                class="form-label">BPJS TK JKK 1,74%</label>
                                                            <input type="text" class="form-control"
                                                                id="progresspill-vatno-input">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="progresspill-cstno-input"
                                                                class="form-label">BPJS TK JKM 0,3%</label>
                                                            <input type="text" class="form-control"
                                                                id="progresspill-cstno-input">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="progresspill-cstno-input"
                                                                class="form-label">BPJS TK JHT 2%</label>
                                                            <input type="text" class="form-control"
                                                                id="progresspill-cstno-input">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="progresspill-servicetax-input"
                                                                class="form-label">BPJS TK JP 2%</label>
                                                            <input type="text" class="form-control"
                                                                id="progresspill-servicetax-input">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-4 card-header">

                                                    <h5 card-title mb-0>Potongan Lainnya</h5>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="progresspill-pancard-input"
                                                                class="form-label">PPh 21</label>
                                                            <input type="text" class="form-control"
                                                                id="progresspill-pancard-input">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="progresspill-vatno-input"
                                                                class="form-label">Pinjaman Uang</label>
                                                            <input type="text" class="form-control"
                                                                id="progresspill-vatno-input">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="mb-3">
                                                            <label for="progresspill-cstno-input"
                                                                class="form-label">Cicilan Per Bulan</label>
                                                            <input type="text" class="form-control"
                                                                id="progresspill-cstno-input">
                                                        </div>
                                                    </div>

                                                </div>



                                            </form>

                                            <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                <li class="previous"><a href="javascript: void(0);"
                                                        class="btn btn-primary" onclick="nextTab()"><i
                                                            class="bx bx-chevron-left me-1"></i> Previous</a></li>
                                                <li class="next"><a href="javascript: void(0);"
                                                        class="btn btn-primary" onclick="nextTab()">Next <i
                                                            class="bx bx-chevron-right ms-1"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>


                                    <div class="tab-pane" id="progress-bank-detail2">
                                        <div>
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="progresspill-namecard-input"
                                                                class="form-label">Pendapatan Kotor</label>
                                                            <input type="text" class="form-control"
                                                                id="progresspill-namecard-input">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="progresspill-expiration-input"
                                                                class="form-label">Potongan</label>
                                                            <input type="text" class="form-control"
                                                                id="progresspill-expiration-input">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="mb-3">
                                                        <label for="progresspill-expiration-input"
                                                            class="form-label">Gaji yang Ditransfer</label>
                                                        <input type="text" class="form-control"
                                                            id="progresspill-expiration-input">
                                                    </div>

                                                </div>

                                            </form>
                                        </div>
                                        <ul class="pager wizard twitter-bs-wizard-pager-link">
                                            <li class="previous"><a href="javascript: void(0);"
                                                    class="btn btn-primary" onclick="nextTab()"><i
                                                        class="bx bx-chevron-left me-1"></i> Previous</a></li>
                                            <li class="float-end"><a href="javascript: void(0);"
                                                    class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target=".confirmModal">Save Changes</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    </div>

</x-layout>
