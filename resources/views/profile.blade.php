<x-blogzine.theme>
    <!-- =======================    Main contain START -->
    <section class="py-4">
        <div class="container">

            <div class="row g-4">
                <!-- Profile cover and info START -->
                <div class="col-12">
                    <div class="card mb-4 position-relative z-index-9">
                        <!-- Cover image -->
                        <div class="py-5 h-200 rounded"
                            style="background-image:url(blogzine/big/07.jpg); background-position: center bottom; background-size: cover; background-repeat: no-repeat;">
                        </div>
                        <div class="card-body pt-3 pb-0">
                            <div class="row d-flex justify-content-between">
                                <!-- Avatar -->
                                <div class="col-sm-12 col-md-auto text-center text-md-start">
                                    <div class="avatar avatar-xxl mt-n5">
                                        <img class="avatar-img rounded-circle border border-white border-3 shadow"
                                            src="{{ Auth::user()->avatar }}" alt="">
                                    </div>
                                </div>
                                <!-- Profile info -->
                                <div
                                    class="col-sm-12 col-md text-center text-md-start d-md-flex justify-content-between align-items-center">
                                    <div>
                                        <h4 class="my-1">
                                            {{ Auth::user()->name }}
                                            <i class="bi bi-patch-check-fill text-info small"></i>
                                        </h4>
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="bi bi-person-fill me-1"></i>
                                                บัญชีผู้ใช้งาน</li>
                                            <li class="list-inline-item"><i class="bi bi-geo-alt me-1"></i> ประเทศไทย
                                            </li>
                                            <li class="list-inline-item"><i class="bi bi-calendar2-plus me-1"></i>
                                                เข้าร่วมเมื่อ {{ Auth::user()->created_at }} </li>
                                        </ul>
                                        <p class="m-0"></p>
                                    </div>
                                    <!-- Links -->
                                    <div
                                        class="d-flex align-items-center justify-content-center justify-content-md-end">
                                        <a href="#" class="btn btn-primary-soft me-3">Follow</a>
                                        <!-- Card action START -->
                                        <div class="dropdown ms-3">
                                            <a class="text-secondary" href="#" id="profileDropdown" role="button"
                                                data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                aria-expanded="false">
                                                <!-- Dropdown Icon -->
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle fill="currentColor" cx="3" cy="12" r="2.5">
                                                    </circle>
                                                    <circle fill="currentColor" opacity="0.5" cx="12"
                                                        cy="12" r="2.5"></circle>
                                                    <circle fill="currentColor" opacity="0.3" cx="21"
                                                        cy="12" r="2.5"></circle>
                                                </svg>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="profileDropdown">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="bi bi-share me-2 fw-icon"></i>Share profile</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="bi bi-volume-mute me-2 fw-icon"></i>Mute
                                                        notification</a></li>
                                                <li><a class="dropdown-item text-danger" href="#"><i
                                                            class="bi bi-slash-circle me-2 fw-icon"></i>Delete
                                                        profile</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="bi bi-flag me-2 fw-icon"></i>Report a bug</a></li>
                                            </ul>
                                        </div>
                                        <!-- Card action END -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Profile info END -->
            </div>

            <div class="row g-4">
                <!-- Left sidebar START -->
                <div class="col-lg-7 col-xxl-8">
                    <!-- Profile START -->
                    <form method="post" action="{{ route('profile.update') }}"  >
                        @csrf
                        @method('PATCH')
                        <div class="card border mb-4">
                            <div class="card-header border-bottom p-3">
                                <h5 class="card-header-title mb-0">โปรไฟล์ผู้ใช้งาน</h5>
                            </div>
                            <div class="card-body">
                                <!-- Full name -->
                                <div class="mb-3">
                                    <label class="form-label">ชื่อ - นามสกุล</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="name" id="name" value="{{ Auth::user()->name }}"
                                            placeholder="name">
                                    </div>
                                </div>
                                <!-- Username -->
                                <div class="mb-3 d-none">
                                    <label class="form-label">Username</label>
                                    <div class="input-group">
                                        <span class="input-group-text">webestica.com</span>
                                        <input type="text" class="form-control" value="louisferguson">
                                    </div>
                                </div>
                                <!-- Profile picture -->
                                <div class="mb-3">
                                    <label class="form-label">รูปโปรไฟล์</label>
                                    <!-- Avatar upload START -->
                                    <div class="d-flex align-items-center">
                                        <div class="position-relative me-3">
                                            <!-- Avatar edit -->
                                            <div class="position-absolute top-0 end-0  z-index-9">
                                                <a class="btn btn-sm btn-light btn-round mb-0 mt-n1 me-n1" href="#">
                                                    <i class="bi bi-pencil"></i> </a>
                                            </div>
                                            <!-- Avatar preview -->
                                            <div class="avatar avatar-xl">
                                                <img class="avatar-img rounded-circle border border-white border-3 shadow"
                                                    src="{{ Auth::user()->avatar }}" alt="">
                                            </div>
                                        </div>
                                        <!-- Avatar remove button -->
                                        <div class="avatar-remove">
                                            <button type="button" class="btn btn-light">Delete</button>
                                        </div>
                                    </div>
                                    <!-- Avatar upload END -->
                                </div>
                                <!-- Sex -->
                                <div class="mb-3">
                                    <label class="form-label">เพศ</label>
                                    {{-- <input class="form-control" type="text" value="ชาย"> --}}
                                    <select class="form-select" name="sex" id="sex" >
                                        <option value="" selected>ระบุเพศ ...</option>
                                        <option value="ชาย">ชาย</option>
                                        <option value="หญิง">หญิง</option>
                                    </select>
                                    <script>
                                        document.querySelector("#sex").value = "{{ Auth::user()->patient->sex }}";
                                    </script>
                                </div>
                                <!-- dm-type -->
                                <div class="mb-3">
                                    <label class="form-label">ประเภทเบาหวานที่เป็น</label>
                                    {{-- <input class="form-control" type="text" value="เบาหวานประเภทที่ 2"> --}}
                                    <select class="form-select" name="dm_type" id="dm_type" >
                                        <option value="" selected>ระบุประเภทเบาหวาน ...</option>
                                        <option value="เบาหวานประเภทที่ 1">เบาหวานประเภทที่ 1</option>
                                        <option value="เบาหวานประเภทที่ 2">เบาหวานประเภทที่ 2</option>
                                        <option value="เบาหวานขณะตั้งครรภ์">เบาหวานขณะตั้งครรภ์</option>
                                    </select>
                                    <script>
                                        document.querySelector("#dm_type").value = "{{ Auth::user()->patient->dm_type }}";
                                    </script>
                                </div>
                                <!-- drug_allery -->
                                <div class="mb-3">
                                    <label class="form-label">แพ้ยา</label>
                                    <textarea class="form-control" rows="3" name="drug_allergy" id="drug_allergy" placeholder="แพ้ยา ...">{{ Auth::user()->patient->drug_allergy }}</textarea>
                                    <div class="form-text">โปรดระบุอย่างละเอียด (ถ้ามี)</div>
                                </div>
                                <!-- drug -->
                                <div class="mb-3">
                                    <label class="form-label">ยาที่ใช้</label>
                                    <textarea class="form-control" rows="3" name="drug" id="drug" placeholder="ยาที่ใช้ ...">{{ Auth::user()->patient->drug }}</textarea>
                                    <div class="form-text">โปรดระบุอย่างละเอียด (ถ้ามี)</div>
                                </div>
                                <!-- Birthday -->
                                <div>
                                    <label class="form-label">วันเกิด</label>
                                    <input type="date" class="form-control flatpickr-input" placeholder="DD/MM/YYYY" name="date_of_birth" id="date_of_birth" value="{{ Auth::user()->patient->date_of_birth }}">
                                </div>
                                <!-- Save button -->
                                <div class="d-flex justify-content-end mt-4">
                                    <a href="#" class="btn text-secondary border-0 me-2">Discard</a>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- Profile END -->

                    <!-- Personal information START -->
                    <div class="card border mb-4 d-none">
                        <div class="card-header border-bottom p-3">
                            <h5 class="card-header-title mb-0">Personal information</h5>
                        </div>
                        <div class="card-body">
                            <!-- Skype -->
                            <div class="mb-3">
                                <label class="form-label">Skype</label>
                                <input class="form-control" type="text" value="iamlouisferguson">
                            </div>
                            <!-- Email -->
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input class="form-control" type="email" value="loriferguson@wbs.com">
                            </div>
                            <!-- Address -->
                            <div class="mb-3">
                                <label class="form-label">Address</label>
                                <input class="form-control" type="text"
                                    value="750 Sing Sing Rd, Horseheads, NY, 14845 ">
                            </div>
                            <!-- Save button -->
                            <div class="d-flex justify-content-end mt-4">
                                <a href="#" class="btn btn-primary">Save changes</a>
                            </div>
                        </div>
                    </div>
                    <!-- Personal information END -->

                    <!-- Social links START -->
                    <div class="card border mb-4  d-none">
                        <div class="card-header border-bottom p-3">
                            <h5 class="card-header-title mb-0"> Social links</h5>
                        </div>
                        <div class="card-body">
                            <!-- Skype -->
                            <div class="mb-3">
                                <label class="form-label">Facebook</label>
                                <input class="form-control" type="text" value="https://facebook.com/">
                            </div>
                            <!-- Email -->
                            <div class="mb-3">
                                <label class="form-label">linkedin</label>
                                <input class="form-control" type="email" value="https://www.linkedin.com/">
                            </div>
                            <!-- Address -->
                            <div class="mb-3">
                                <label class="form-label">Twitter</label>
                                <input class="form-control" type="text" value="https://twitter.com/ ">
                            </div>
                            <!-- Save button -->
                            <div class="d-flex justify-content-end mt-4">
                                <a href="#" class="btn btn-primary">Save changes</a>
                            </div>
                        </div>
                    </div>
                    <!-- Social links END -->

                    <!-- Update password START -->
                    <div class="card border  d-none">
                        <div class="card-header border-bottom p-3">
                            <h5 class="card-header-title mb-0">Update password</h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Current password</label>
                                <input class="form-control" type="password" placeholder="Enter current password">
                            </div>
                            <!-- New password -->
                            <div class="mb-3">
                                <label class="form-label" id="psw-strength-message"></label>
                                <div class="input-group">
                                    <input class="form-control fakepassword" type="password" id="psw-input"
                                        placeholder="Enter new password">
                                    <span class="input-group-text p-0">
                                        <i class="fakepasswordicon far fa-eye cursor-pointer p-2 w-40px"></i>
                                    </span>
                                </div>
                                <div class="rounded mt-1" id="psw-strength"></div>
                            </div>
                            <!-- New password -->
                            <div>
                                <label class="form-label">Confirm new password</label>
                                <input class="form-control" type="password" placeholder="Enter new password">
                            </div>
                            <div class="d-flex justify-content-end mt-4">
                                <a href="#" class="btn btn-primary">Change password</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Left sidebar END -->

                <!-- Right sidebar START -->
                <div class="col-lg-5 col-xxl-4">
                    <!-- Profile Setting START -->
                    <div class="card border mb-4">
                        <div class="card-header border-bottom p-3">
                            <h5 class="card-header-title mb-0">Profile Setting</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-check form-switch form-check-md mb-3">
                                <input class="form-check-input" type="checkbox" id="availabilityCheck"
                                    checked="">
                                <label class="form-check-label" for="availabilityCheck">Visible profile to
                                    everyone</label>
                            </div>
                            <div class="form-check form-switch form-check-md mb-3">
                                <input class="form-check-input" type="checkbox" id="proCheck" disabled="">
                                <label class="form-check-label" for="proCheck">Disable ads <span
                                        class="badge bg-primary align-middle">Pro</span></label>
                            </div>
                        </div>
                    </div>
                    <!-- Profile Setting END -->

                    <!-- Notifications START -->
                    <div class="card border mb-4">
                        <div class="card-header border-bottom p-3">
                            <h5 class="card-header-title mb-0">Notifications</h5>
                        </div>
                        <!-- Card body START -->
                        <div class="card-body">
                            <p>Choose type of notifications you want to receive</p>
                            <div class="form-check form-switch form-check-md mb-3">
                                <input class="form-check-input" type="checkbox" id="withdrawalCheck" checked="">
                                <label class="form-check-label" for="withdrawalCheck">Withdrawal activity</label>
                            </div>
                            <div class="form-check form-switch form-check-md mb-3">
                                <input class="form-check-input" type="checkbox" id="weeklyCheck">
                                <label class="form-check-label" for="weeklyCheck">Weekly report</label>
                            </div>
                            <div class="form-check form-switch form-check-md mb-3">
                                <input class="form-check-input" type="checkbox" id="passwordCheck" checked="">
                                <label class="form-check-label" for="passwordCheck">Password change</label>
                            </div>
                            <div class="form-check form-switch form-check-md mb-3">
                                <input class="form-check-input" type="checkbox" id="dataCheck">
                                <label class="form-check-label" for="dataCheck">Data usage alert</label>
                            </div>
                        </div>
                        <!-- Card body END -->
                    </div>
                    <!-- Notifications START -->

                    <!-- Deactivate account START -->
                    <div class="card border mb-4">
                        <div class="card-header border-bottom p-3">
                            <h5 class="card-header-title mb-0">Deactivate Account</h5>
                        </div>
                        <div class="card-body">
                            <h6>Before you go...</h6>
                            <ul>
                                <li>Take backup of your data <a href="#">Here</a> </li>
                                <li>Account deletion is final. There will be no way to restore your account</li>
                            </ul>
                            <div class="form-check form-check-md my-3">
                                <input class="form-check-input" type="checkbox" value=""
                                    id="deleteaccountCheck">
                                <label class="form-check-label" for="deleteaccountCheck">Yes, I'd really like to
                                    delete my account</label>
                            </div>
                            <a href="#" class="btn btn-success-soft my-1">Keep my account</a>
                            <a href="#" class="btn btn-danger my-1">Delete my account</a>
                        </div>
                    </div>
                    <!-- Deactivate account START -->
                    <p><i class="bi bi-info-circle me-2"></i>This account was created on Jan 15, 2018</p>

                    <div class="card bg-transparent border rounded-3 mt-4 d-none">
                        <!-- Card header -->
                        <div class="card-header bg-transparent border-bottom p-3">
                            <h5 class="card-header-title mb-0">Linked account</h5>
                        </div>
                        <!-- Card body START -->
                        <div class="card-body">
                            <!-- Google -->
                            <div
                                class="position-relative mb-3 mt-3 d-sm-flex bg-success bg-opacity-10 border border-success p-3 rounded">
                                <!-- Title and content -->
                                <h2 class="fs-1 mb-0 me-3"><i class="fab fa-google text-google-icon"></i></h2>
                                <div>
                                    <div
                                        class="position-absolute top-0 start-100 translate-middle bg-white rounded-circle lh-1 h-15">
                                        <i class="bi bi-check-circle-fill text-success fs-5"></i>
                                    </div>
                                    <h6 class="mb-1">Google</h6>
                                    <p class="mb-1 small">You are successfully connected to your Google account</p>
                                    <!-- Button -->
                                    <button type="button" class="btn btn-sm btn-danger mb-0 me-2">Invoke</button>
                                    <a href="#" class="btn btn-sm btn-link text-body mb-0">Learn more</a>
                                </div>
                            </div>

                            <!-- Blogger -->
                            <div class="mb-3 d-sm-flex border p-3 rounded">
                                <!-- Title and content -->
                                <h2 class="fs-1 mb-0 me-3"><i class="fab fa-blogger text-warning"></i></h2>
                                <div>
                                    <h6 class="mb-1">Blogger</h6>
                                    <p class="mb-1 small">Connect with Blogger account for a personalized experience
                                    </p>
                                    <!-- Button -->
                                    <button type="button" class="btn btn-sm btn-primary mb-0 me-2">Connect Blogger
                                    </button>
                                    <a href="#" class="btn btn-sm btn-link text-body mb-0">Learn more</a>
                                </div>
                            </div>

                            <!-- Facebook -->
                            <div class="d-sm-flex border p-3 rounded mb-2">
                                <!-- Title and content -->
                                <h2 class="fs-1 mb-0 me-3"><i class="fab fa-facebook text-facebook"></i></h2>
                                <div>
                                    <h6 class="mb-1">Facebook</h6>
                                    <p class="mb-1 small">Connect with Facebook account for a personalized experience
                                    </p>
                                    <!-- Button -->
                                    <button type="button" class="btn btn-sm btn-primary mb-0 me-2">Connect
                                        Facebook</button>
                                    <a href="#" class="btn btn-sm btn-link text-body mb-0">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card body END -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================    Main contain END -->

</x-blogzine.theme>
