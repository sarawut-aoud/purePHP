<style>
    .bg {
        background-image: url('../../assets/image/logo.jpg');
        background-repeat: round;
        background-size: 100%;
        height: 100vh;
    }

    .login-box {
        padding: 1em;
        border-radius: 1em;
        background-color: #ffffff85;
        backdrop-filter: blur(5px);
    }
</style>
<div class="bg">
    <div class="position-relative h-100">
        <div class="d-flex justify-content-center w-100 position-absolute" style="top: 35%;">
            <div class="login-box">
                <div class="d-flex gap-3 align-items-center">
                    <div class="logo" style="width: 200px;;">
                        <img src="<?= base_url('/assets/image/banswong.jpg') ?>" class="w-100" style="border-radius: 50%">
                    </div>
                    <div>
                        <div class="mb-3 text-center">
                            <div class="font-xxl text-black">Banswong Cafe`</div>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label text-black">Username</label>
                            <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="Username">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label text-black">Password</label>
                            <input type="password" class="form-control" name="" id="" aria-describedby="helpId" placeholder="Password">
                        </div>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-primary " type="button"> Login</button>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

</div>