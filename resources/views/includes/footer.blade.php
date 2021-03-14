<footer class="page-footer bg-dark">
    <div class="bg-dark">
      <div class="container">
        <div class="row py-4 d-flex align-item-center">
          <div class="col-md-12 text-center">
            <a href=""><i class="fab fa-facebook text-white mr-4"></i></a>
            <a href=""><i class="fab fa-pinterest text-white mr-4"></i></a>
            <a href=""><i class="fab fa-instagram text-white mr-4"></i></a>
            <a href=""><i class="fab fa-deviantart text-white mr-4"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-copyright text-center py-2 bgfooter">
      <p>&copy; Copyright <a href="#">TugasPWLbladetempalteengine</a></p><p>copyright-by ahmad fauzi 2021</p>
    </div>
  </footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<script>
  $(document).scroll(function(){
    if($(window).scrollTop() <= 50){
      $('#navbar').removeClass('bgfooter').addClass('bg-nontrans');
    }else if($(window).scrollTop() > 50){
      $('#navbar').removeClass('bg-nontrans').addClass('bgfooter');
    }
  });
        $(document).scroll(function(){
            if ($(window).scrollTop() > 50) {
                $('#navbar').removeClass('bg-light').addClass('bg-nontrans');
            } else if($(window).scrollTop() <= 50){
                $('#navbar').removeClass('bg-nontrans').addClass('bg-light');
            }
        });
</script>
