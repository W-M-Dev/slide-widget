<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    />

    <style>
      body {
        margin: 100px 0;
        padding: 30px;
      }

      .contain {
        margin: 0 auto;
        max-width: 1200px;
        width: 100%;
      }

      .item {
        align-items: center;
        background-color: tomato;
        color: white;
        display: flex;
        height: 300px;
        justify-content: center;
      }

      .owl-stage{padding-left:0px !important;}

      .text {
        position: absolute;
        top: 0;
        left: -100%;
        height: 100%;
        width: 100%;
        transition: 0.4s;
      }

      .image {
        position: relative;
        overflow: hidden;
      }

      img {
        width: 319px;
        height: 488px;
      }
    </style>
  </head>
  <body>
    <?php
    $pic1_1 = "italy-1-1.jpg";
    $pic1_2 = "italy-1-2.jpg";
    $pic1_3 = "italy-1-3.jpg";

    $pic2_1 = "italy-2-1.jpg";
    $pic2_2 = "italy-2-2.jpg";
    $pic2_3 = "italy-2-3.jpg";

    $pic3_1 = "italy-3-1.jpg";
    $pic3_2 = "italy-3-2.jpg";
    $pic3_3 = "italy-3-3.jpg";
    ?>

    <div class="d-lg-none">
      <div class="contain gap-1">
        <div id="owl-carousel" class="owl-carousel owl-theme">
          <div class="item">
            <img src="./assets/imgs/pic1/<?php echo $pic1_1; ?>"/>
          </div>
          <div class="item">
            <img src="./assets/imgs/pic2/<?php echo $pic2_2; ?>" />
          </div>
          <div class="item">
            <img src="./assets/imgs/pic3/<?php echo $pic3_3; ?>" />
          </div>
        </div>
      </div>
    </div>

    <div class="d-none d-lg-block">
      <div class="d-flex justify-content-center gap-3 container">
        <div>
          <div class="image" id="img1">
            <img src="./assets/imgs/pic1/<?php echo $pic1_1; ?>" class="pic11" />
            <div class="text" id="text1">
              <img src="./assets/imgs/pic1/<?php echo $pic1_1; ?>" class="pic12" />
            </div>
          </div>
        </div>

        <div>
          <div class="image" id="img2">
            <img src="./assets/imgs/pic2/<?php echo $pic2_2; ?>" class="pic21" />
            <div class="text" id="text2">
              <img src="./assets/imgs/pic2/<?php echo $pic2_2; ?>" class="pic22" />
            </div>
          </div>
        </div>

        <div>
          <div class="image" id="img3">
            <img src="./assets/imgs/pic3/<?php echo $pic3_3; ?>" class="pic31" />
            <div class="text" id="text3">
              <img src="./assets/imgs/pic3/<?php echo $pic3_3; ?>" class="pic32" />
            </div>
          </div>
        </div>
      </div>
    </div>


    

    <script>
      $(document).ready(function () {
        $("#owl-carousel").owlCarousel({
          loop: true,
          margin: 15,
          dots: true,
           stagePadding: 25,
          // dotsEach: 30,
          // nav: true,
          items: 1,
        });

        $("#img1").hover(
          function () {
            $("#text1").css({
              left: "0%",
              cursor: "pointer",
              transition: "0.0s",
            });
            $("#text2").css({
              left: "0%",
              cursor: "pointer",
              transition: "0.5s",
            });
            $("#text3").css({
              left: "0%",
              cursor: "pointer",
              transition: "0.5s",
            });
            $(".pic12").attr("src", "./assets/imgs/pic1/<?php echo $pic1_1; ?>");
            $(".pic22").attr("src", "./assets/imgs/pic1/<?php echo $pic1_2; ?>");
            $(".pic32").attr("src", "./assets/imgs/pic1/<?php echo $pic1_3; ?>");
          },
          function () {
            $("#text1").css({
              position: "absolute",
              top: "0",
              left: "-100%",
              height: "100%",
              width: "100%",
              transition: "0.4s",
            });
            $("#text2").css({
              position: "absolute",
              top: "0",
              left: "-100%",
              height: "100%",
              width: "100%",
              transition: "0.4s",
            });
            $("#text3").css({
              position: "absolute",
              top: "0",
              left: "-100%",
              height: "100%",
              width: "100%",
              transition: "0.4s",
            });
          }
        );

        $("#img2").hover(
          function () {
            $("#text1").css({
              left: "0%",
              cursor: "pointer",
              transition: "0.5s",
            });
            $("#text2").css({
              left: "0%",
              cursor: "pointer",
              transition: "0.0s",
            });
            $("#text3").css({
              left: "0%",
              cursor: "pointer",
              transition: "0.5s",
            });
            $(".pic12").attr("src", "./assets/imgs/pic2/<?php echo $pic2_1; ?>");
            $(".pic22").attr("src", "./assets/imgs/pic2/<?php echo $pic2_2; ?>");
            $(".pic32").attr("src", "./assets/imgs/pic2/<?php echo $pic2_3; ?>");
          },
          function () {
            $("#text1").css({
              position: "absolute",
              top: "0",
              left: "-100%",
              height: "100%",
              width: "100%",
              transition: "0.4s",
            });
            $("#text2").css({
              position: "absolute",
              top: "0",
              left: "-100%",
              height: "100%",
              width: "100%",
              transition: "0.4s",
            });
            $("#text3").css({
              position: "absolute",
              top: "0",
              left: "-100%",
              height: "100%",
              width: "100%",
              transition: "0.4s",
            });
          }
        );

        $("#img3").hover(
          function () {
            $("#text1").css({
              left: "0%",
              cursor: "pointer",
              transition: "0.5s",
            });
            $("#text2").css({
              left: "0%",
              cursor: "pointer",
              transition: "0.5s",
            });
            $("#text3").css({
              left: "0%",
              cursor: "pointer",
              transition: "0.0s",
            });
            $(".pic12").attr("src", "./assets/imgs/pic3/<?php echo $pic3_1; ?>");
            $(".pic22").attr("src", "./assets/imgs/pic3/<?php echo $pic3_2; ?>");
            $(".pic32").attr("src", "./assets/imgs/pic3/<?php echo $pic3_3; ?>");
          },
          function () {
            $("#text1").css({
              position: "absolute",
              top: "0",
              left: "-100%",
              height: "100%",
              width: "100%",
              transition: "0.4s",
            });
            $("#text2").css({
              position: "absolute",
              top: "0",
              left: "-100%",
              height: "100%",
              width: "100%",
              transition: "0.4s",
            });
            $("#text3").css({
              position: "absolute",
              top: "0",
              left: "-100%",
              height: "100%",
              width: "100%",
              transition: "0.4s",
            });
          }
        );
      });
    </script>

    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
      integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
      crossorigin="anonymous"
    ></script>
  </body>
</html>
