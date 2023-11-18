<!--========== SCROLL REVEAL ==========-->
<script src="https://unpkg.com/scrollreveal"></script>

<!--========== MAIN JS ==========-->
<script src="assets/js/main.js"></script>

<!--========== SWIPER JS ==========-->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>

@if($page == 'Home')
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    effect: "cards",
    grabCursor: true,
  });
</script>
@endif

@if($page == 'Produk Berbinar')
    <script src="{{ asset('assets/js/products.js') }}"></script>
@endif

@if($page == 'Psikotes')
    <script src="{{ asset('assets/js/psikotest.js') }}"></script>
@endif

@if($page == 'Konseling')
    <script src="{{ asset('assets/js/konseling.js') }}"></script>
@endif

@if($page == 'Tentang Kami')
    <script src="{{ asset('assets/js/about-us.js') }}"></script>
@endif

@if($page == 'Kelas')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/kelas.js') }}"></script>
@endif