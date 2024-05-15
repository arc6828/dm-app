<x-blogzine.theme>

    <!-- =======================    Inner intro START -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 col-xl-6 mx-auto">
                    <div class="p-4 p-sm-5 bg-primary bg-opacity-10 rounded">
                        <h2>ลงชื่อเข้าใช้</h2>
                        <!-- Form START -->
                        <form class="mt-4" method="POST" action="{{ route('login') }}">
                            @csrf
                            
                            <!-- Email -->
                            <div class="mb-3">
                                <label class="form-label" for="exampleInputEmail1">อีเมล์</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="user@example.com" required>
                            </div>
                            <!-- Password -->
                            <div class="mb-3">
                                <label class="form-label" for="exampleInputPassword1">รหัสผ่าน</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="มีความยาวอย่างน้อย 8 ตัวอักษร" required>
                            </div>
                            <!-- Checkbox -->
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                <label class="form-check-label" for="remember">ลงชื่อเข้าใช้เสมอ</label>
                            </div>
                            <!-- Button -->
                            <div class="row align-items-center">
                                <div class="col-sm-4">
                                    <button type="submit" class="btn btn-success">ลงชื่อเข้าใช้</button>
                                </div>
                                <div class="col-sm-8 text-sm-end">
                                    <span>ไม่มีบัญชี? <a href="{{ route('register') }}"><u>ลงทะเบียนผู้ใช้ใหม่</u></a></span>
                                </div>
                            </div>
                        </form>
                        <!-- Form END -->
                        <hr>
                        <!-- Social-media btn -->
                        <div class="text-center">
                            <p>ลงชื่อเข้าใช้ด้วยเครือข่ายโซเชียลของคุณเพื่อการเข้าถึงที่รวดเร็ว</p>
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
