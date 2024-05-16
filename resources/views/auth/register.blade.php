<x-blogzine.theme>

    <!-- =======================    Inner intro START -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 col-xl-6 mx-auto">
                    <div class="bg-primary bg-opacity-10 rounded p-4 p-sm-5">
                        <h2>ลงทะเบียนผู้ใช้ใหม่ (ฟรี)</h2>
                        <!-- Form START -->
                        <form class="mt-4"method="POST" action="{{ route('register') }}">
                            @csrf
                            <!-- Name -->
                            <div class="mb-3">
                                <label class="form-label" for="name">ชื่อ-นามสกุล</label>
                                <input type="text" class="form-control" id="name" name="name" aria-describedby="name" placeholder="name" required>                                
                            </div>
                            <!-- Email -->
                            <div class="mb-3">
                                <label class="form-label" for="email">อีเมล์</label>
                                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="E-mail" required>
                                <small id="emailHelp" class="form-text">เราจะไม่เปิดเผยอีเมลของคุณกับบุคคลอื่น</small>
                            </div>
                            <!-- Password -->
                            <div class="mb-3">
                                <label class="form-label" for="password">รหัสผ่าน</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="มีความยาวอย่างน้อย 8 ตัวอักษร" required>
                            </div>
                            <!-- Password -->
                            <div class="mb-3">
                                <label class="form-label" for="password_confirmation">ยืนยันรหัสผ่าน</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="มีความยาวอย่างน้อย 8 ตัวอักษร">
                            </div>
                            <!-- Checkbox -->
                            <div class="mb-3 form-check d-none">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Yes i'd also like to sign up for
                                    additional subscription</label>
                            </div>
                            <!-- Button -->
                            <div class="row align-items-center">
                                <div class="col-sm-4">
                                    <button type="submit" class="btn btn-success">ลงทะเบียนผู้ใช้ใหม่</button>
                                </div>
                                <div class="col-sm-8 text-sm-end">
                                    <span>มีบัญชีอยู่แล้ว? <a href="signin.html"><u>ลงชื่อเข้าใช้</u></a></span>
                                </div>
                            </div>
                        </form>
                        <!-- Form END -->
                        <hr>
                        <!-- Social-media btn -->
                        <div class="text-center">
                            <p>ลงทะเบียนด้วยเครือข่ายโซเชียลของคุณเพื่อการเข้าถึงที่รวดเร็ว</p>
                            <ul class="list-unstyled d-sm-flex mt-3 justify-content-center">
                                <li class="mx-2">
                                    <a href="{{ url('auth/line/redirect') }}" class="btn d-inline-block text-white fs-6" style="background-color: #00B900;">
                                        <img src="{{ asset('/img/Line.png') }}" alt="line" style="height:30px;" border="0"> 
                                        ลงชื่อเข้าใช้ด้วย Line
                                    </a>
                                </li>
                                {{-- <li class="mx-2">
                                    <a href="#" class="btn bg-facebook d-inline-block"><i
                                            class="fab fa-facebook-f me-2"></i> Sign in with Facebook</a>
                                </li>
                                <li class="mx-2">
                                    <a href="#" class="btn bg-google d-inline-block"><i
                                            class="fab fa-google me-2"></i> Sign in with google</a>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================    Inner intro END -->

</x-blogzine.theme>
