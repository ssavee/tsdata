<?php session_start();?>
<?php
include('h.php');
?>
<style type="text/css">
#btn{
width:100%;
}
</style>
<body style="background-color:#4169E1"></body>
<div class="container" style="padding-top:200px">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4" style="background-color:#F8F8FF">
     <p></p>
      <form  name="formlogin" action="checklogin.php" method="POST" id="login" class="form-horizontal">
        <div class="form-group">
          <div class="col-sm-12">
            <input type="text"  name="username" class="form-control" required placeholder="ชื่อผู้ใช้" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <input type="password" name="password" class="form-control" required placeholder="รหัสผ่าน" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-success" id="btn">
            <span class="glyphicon glyphicon-log-in"> </span>
             Login </button>
               <label>
                <input type="checkbox" checked="checked" name="remember"> จดจำชื่อผู้ใช้
               </label>
          </div>
        </div>
      </form>
    </div>
  </div>

  <div style="color:#FFF5EE;text-align:center;"><p></p>
  <h3>
  <a href="index.php">กลับหน้าหลัก</a></div>
</h3>
</div>