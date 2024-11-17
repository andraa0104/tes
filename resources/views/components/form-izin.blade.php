<x-layout>
    {{-- <x-slot:title>{{ $title }}</x-slot:title> --}}
    <div class="page-wrapper">
        <div class="content">

            <div class="comp-section">
                <div class="section-header">
                    <h3 class="section-title">Formulir Pengajuan Izin</h3>
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
                                                Pengajuan Izin </div>
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

                                                            <div class="form-group">
                                                                <label class="d-block">Jenis Izin:</label>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="gender" id="gender_male"
                                                                        value="Izin" />
                                                                    <label class="form-check-label"
                                                                        for="gender_male">Izin</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="gender" id="gender_female"
                                                                        value="Sakit" />
                                                                    <label class="form-check-label"
                                                                        for="gender_female">Sakit</label>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label>Tanggal Izin </label>
                                                            <div class="input-groupicon">
                                                                <input type="date" placeholder="Choose Date"
                                                                    class=" myID form-control" id="myID"
                                                                    for="myID">
                                                                <script>
                                                                    flatpickr(".myID");
                                                                </script>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label>Tanggal Aktif Kerja </label>
                                                            <div class="input-groupicon">
                                                                <input type="date" placeholder="Choose Date"
                                                                    class=" myID form-control" id="myID"
                                                                    for="myID">
                                                                <script>
                                                                    flatpickr(".myID");
                                                                </script>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-0">
                                                        <div class="mb-3">
                                                            <div class="form-group">
                                                                <label>Alasan</label>
                                                                <textarea rows="5" cols="5" class="form-control" placeholder="Enter message"></textarea>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </form>



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
    </div>

</x-layout>
