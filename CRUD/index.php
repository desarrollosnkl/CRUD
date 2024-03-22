
<?php include("template/header.php"); ?>

<style>

@media screen and (max-width:800px) {
  .img {
    width: 100%;
    height: 320px;
  }
}

@media screen and (max-width:550px) {
  .img {
    width: 100%;
  }
}
</style>

<div class="contenedor text-center">
  
  <img src="img/laravel.jpg" alt="" width="100%">

  <center> 
         <div class="reloj me-3">
          <h6 style="color:red;" class="fw-bold"><span id="tiempo">00 : 00 : 00</span></h6>
            </div>
</center>

  
</div>

<?php include("template/footer.php"); ?>