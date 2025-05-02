<style>
        body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: url('assets/bg-merah.jpg') no-repeat center center/cover;
        }
        .login-container {
            background: white;
            display: flex;
            margin-right: 332px;
            width: 100%;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .login-image-left {
            flex: 1;
            background: url('assets/surat.png') no-repeat center center/cover;
        }
        .login-form {
            flex: 1;
            padding: 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .form-group i {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #888;
        }
        .input-group {
            position: relative;
        }
        .input-group input {
            padding-left: 30px;
        }
        .btn-primary {
            background: #fa2307;
            border: none;
        }
    </style>

<div class="login-container">
        <div class="login-image-left"></div>
        <div class="login-form mt-4 mb-5">
            <h4 class="text-center mb-2">Aplikasi Surat Keluar FST </h4>
            <?= $this->session->flashdata('message');?>

             <form class="user" method="post" action="<?= base_url('auth');?>">
                <div class="form-group input-group">
                    <i class="fas fa-envelope"></i>
                    <input type="email" class="form-control" id="email" name="email" value="<?= set_value('email'); ?>"placeholder="Masukan Email Anda...">
                    <?= form_error('email','<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" class="form-control"id="password" name="password" placeholder="Masukan Password Anda...">
                    <?= form_error('password','<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <!-- <div class="form-group text-right">
                    <a href="#">Forgot password?</a>
                </div> -->
                <button type="submit" class="btn btn-primary mb-2 btn-block">Login</button>
                <small class="text-left mt-5">
                    <b>Created By : Andy</b> <a href="https://github.com/yohan20-coder" target="_blank" rel="noopener noreferrer">My Github</a>
                </small>
            </form>
        </div>
    </div>
