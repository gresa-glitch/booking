 <!-- Content -->

 <div class="container-xxl">
     <div class="authentication-wrapper authentication-basic container-p-y">
         <div class="authentication-inner">
             <!-- Register -->
             <div class="card">
                 <div class="card-body">
                     <!-- alert jika gagal login -->
                     <!-- end alert gagal login -->
                     <h4 class="mb-2">Welcome to Studio!</h4>
                     <?php if ($this->session->flashdata('error_log_in')): ?>
                         <div class="alert alert-danger" role="alert">
                             <?= $this->session->flashdata('error_log_in') ?>
                         </div>
                     <?php else: ?>
                         <p class="mb-4">Please sign-in to your account and start the adventure</p>
                     <?php endif ?>
                     <form id="formAuthentication" class="mb-3" action="<?= base_url('auth/login'); ?>" method="POST">
                         <div class="mb-3">
                             <label for="username" class="form-label">Username</label>
                             <input
                                 type="text"
                                 class="form-control"
                                 id="username"
                                 name="username"
                                 placeholder="Enter your username"
                                 autofocus required />
                         </div>
                         <div class="mb-3 form-password-toggle">
                             <div class="d-flex justify-content-between">
                                 <label class="form-label" for="password">Password</label>
                                 <a href="#">
                                     <small>Forgot Password?</small>
                                 </a>
                             </div>
                             <div class="input-group input-group-merge">
                                 <input
                                     type="password"
                                     id="password"
                                     class="form-control"
                                     name="password"
                                     placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                     aria-describedby="password" required />
                                 <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                             </div>
                         </div>
                         <div class="mb-3">
                             <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </div>

 <!-- / Content -->