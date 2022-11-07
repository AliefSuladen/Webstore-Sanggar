<footer id="footer" class="mt-5">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Layanan Kami</h4>
              <ul>
              <?php foreach ($kategori as $key => $value) { ?>
                <li><i class="bx bx-chevron-right"></i> <a href="<?=base_url('home/kategori/'.$value->id_kategori)?>"><?=$value->nama_kategori?></a></li>
                <?php }?>
              </ul>
            </div>
            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Hubungi Kami</h4>
              <p>
                Palembang, <br />
                Sumatera Selatan<br /><br />
                <strong>Phone :</strong> +62 853 1617 1021 <br /> 
                &emsp;&emsp;&emsp; :  +62 819 785 9138 <br>
                <strong>Email :</strong> Sanggarmutiazayyana1@gmail.com<br />
              </p>
            </div>
            <div class="col-lg-3 col-md-6 footer-contact">
              <h3>About MutiaZayyana</h3> 
              <p>Mutia Zayyana Merupakan Penyedia Layanan Pernikahan Mulai dari Dekorasi pelaminan, Pakaian, Dan Makeup Pengantin, Makeup Keluarga, Penari Adat Dan Kreasi, Fotografer Dan Videografer, Catering Service</p>
            </div>
            <div class="col-lg-3 col-md-6 footer-info">
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a> <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="copyright">
          © Copyright
          <strong><span><a href="https://galaxitechnology.com/">Galaxi Technology</a></span></strong>
        </div>
      </div>
    </footer>
    <script src="<?= base_url(); ?>template/front_end/assets/js/step.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="<?= base_url(); ?>template/front_end/assets/js/home.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
    <script src="<?= base_url(); ?>template/front_end/assets/js/nav.js"></script>
  </body>
</html>