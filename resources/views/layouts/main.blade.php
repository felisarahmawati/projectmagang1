
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>titipsini.com</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- tess -->

    <!-- Favicons -->


    <link href="../../../assets/img/ic2.png" rel="icon">
    <link href="../../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../../../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    

    <!-- Template Main CSS File -->
    <link href="../../../assets/css/style.css" rel="stylesheet">
    <link href="../../../assets/css/bebas.css" rel="stylesheet">
</head>

<body>
    @include('partials.header')

    <div>
        @yield('container')
    </div>

    @include('partials.footer')
    



    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="../../../assets/vendor/aos/aos.js"></script>
<script src="../../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../../assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="../../../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="../../../assets/vendor/php-email-form/validate.js"></script>
<script src="../../../assets/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Template Main JS File -->
<script src="../../../assets/js/main.js"></script>

<script>
    const plus = document.querySelector(".plus"),
      minus = document.querySelector(".minus"),
      num = document.querySelector(".num");

      let a = 1;

      plus.addEventListener("click", ()=>{
        a++;
        a = (a < 10) ? "0" + a : a;
        num.innerText = a;
        console.log(a);
      });

      minus.addEventListener("click", ()=>{
        if(a > 1){
          a--;
          a = (a < 10) ? "0" + a : a;
          num.innerText = a;
        }
        else {
          a = 0;
          num.innerText = a;
          alert("Anda yakin menghapus layanan ini ?");
        }
      });
</script>
<script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

</body>
</html>
