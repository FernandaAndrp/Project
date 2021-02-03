<?php
$koneksi = new mysqli("localhost","root","","db_pizza_hits");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Product Cards | With Quick Popup View</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <style>
  	@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

*{
  margin: 0;
  padding: 0;
  font-family: "Poppins", sans-serif;
}

body{
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background: #75cfb8;
}
h1{
  position: relative;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  width: 100%;
  font-family: cursive;
  font-size: 35px;
}

.container{
  position: relative;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 100vh;
}

/*Styles for product card*/

.product .product-card{
  z-index: 1;
  background: #1D212B;
  position: relative;
  width: 300px;
  height: 400px;
  margin: 40px;
  border-radius: 10px;
}

.product .product-card:before{
  content: '';
  background: rgba(255, 255, 155, 0.1);
  position: absolute;
  display: block;
  top: 0;
  left: 0;
  width: 50%;
  height: 100%;
  border-top-left-radius: 10px;
  border-bottom-left-radius: 10px;
}

.product .product-card .product-img{
  z-index: 1;
  position: absolute;
  max-width: 200px;
  top: 30%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.product .product-card .name{
  z-index: 2;
  color: #fff;
  position: absolute;
  width: 100%;
  text-align: center;
  bottom: 130px;
  font-size: 20px;
  letter-spacing: 1px;
}

.product .product-card .price{
  z-index: 2;
  color: #fff;
  position: absolute;
  width: 100%;
  text-align: center;
  bottom: 80px;
  font-size: 30px;
  font-weight: 300;
}

.product .product-card .popup-btn{
  z-index: 2;
  color: #fff;
  background: #555;
  position: absolute;
  bottom: 20px;
  left: 50%;
  transform: translateX(-50%);
  font-size: 14px;
  text-transform: uppercase;
  text-decoration: none;
  letter-spacing: 1px;
  padding: 10px 15px;
  border-radius: 20px;
  cursor: pointer;
}

/*Styles for popup view*/

.product .popup-view{
  z-index: 2;
  background: rgba(255, 255, 255, 0.5);
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  opacity: 0;
  visibility: hidden;
  transition: 0.5s;
}

.product .popup-view.active{
  opacity: 1;
  visibility: visible;
}

.product .popup-card{
  position: relative;
  display: flex;
  width: 800px;
  height: 500px;
  margin: 20px;
}

.product .popup-card .product-img{
  z-index: 2;
  background: #1D212B;
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 45%;
  height: 90%;
  transform: translateY(25px);
  border-top-left-radius: 10px;
  border-bottom-left-radius: 10px;
}

.product .popup-card .product-img img{
  z-index: 2;
  position: relative;
  width: 340px;
  left: 0px;
}

.product .popup-card .info{
  z-index: 2;
  background: #fff;
  display: flex;
  flex-direction: column;
  width: 55%;
  height: 100%;
  box-sizing: border-box;
  padding: 40px;
  border-radius: 10px;
}

.product .popup-card .close-btn{
  color: #555;
  z-index: 3;
  position: absolute;
  right: 0;
  font-size: 20px;
  margin: 20px;
  cursor: pointer;
}

.product .popup-card .info h2{
  font-size: 35px;
  line-height: 20px;
  margin: 10px;
}

.product .popup-card .info h2 span{
  font-size: 15px;
  text-transform: uppercase;
  letter-spacing: 7px;
  right: 20px;
}

.product .popup-card .info p{
  font-size: 15px;
  margin: 10px;
}

.product .popup-card .info .price{
  font-size: 45px;
  font-weight: 300;
  margin: 10px;
}

.product .popup-card .info .add-cart-btn{
  color: #fff;
  background: #009DD2;
  font-size: 16px;
  font-weight: 600;
  text-align: center;
  text-decoration: none;
  text-transform: uppercase;
  margin: 10px auto;
  padding: 10px 50px;
  border-radius: 20px;
}

.product .popup-card .info .add-wish{
  color: #009DD2;
  font-size: 16px;
  text-align: center;
  font-weight: 600;
  text-transform: uppercase;
}
.select{
  position: relative;
  align-items: center;
  display: flex;
  width: 10rem;
  height: 2rem;
  line-height: 2;
  padding-right: 2px;

}
h3{
  position: relative;
}
/*Responsive styles*/

@media (max-width: 900px){
  .product .popup-card{
    flex-direction: column;
    width: 550px;
    height: auto;
  }

  .product .popup-card .product-img{
    z-index: 3;
    width: 100%;
    height: 200px;
    transform: translateY(0);
    border-bottom-left-radius: 0;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
  }

  .product .popup-card .product-img img{
    left: initial;
    max-width: 50%;
  }

  .product .popup-card .info{
    width: 100%;
    height: auto;
    padding: 20px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
  }

  .product .popup-card .info h2{
    margin: 20px 5px 5px 5px;
    font-size: 25px;
  }

  .product .popup-card .info h2 span{
    font-size: 10px;
  }

  .product .popup-card .info p{
    margin: 5px;
    font-size: 13px;
  }

  .product .popup-card .info .price{
    margin: 5px;
    font-size: 30px;
  }

  .product .popup-card .info .add-cart-btn{
    margin: 5px auto;
    padding: 5px 40px;
    font-size: 14px;
  }

  .product .popup-card .info .add-wish{
    font-size: 14px;
  }

  .product .popup-card .close-btn{
    z-index: 4;
  }
}
  </style>
  <body>
    
    <div class="container">
      <h1>Pizza</h1>
      <?php $nomor=1;?>
      <?php $ambil_menu=$koneksi->query("SELECT * FROM menu_makanan");?>
      <?php 
      $koneksi = new mysqli("localhost","root","","db_pizza_hits");
      $query_size = "SELECT DISTINCT ukuran_menu FROM menu_makanan";
      $result_size = mysqli_query($koneksi,$query_size);

      $result_size2 = mysqli_query($koneksi, $query_size);

      $options = "";

      while($row_size2 = mysqli_fetch_array($result_size2))
      {
        $options = $options."<option>$row_size2[1]</option>";
      }
      ?> 

      <?php 
      $koneksi = new mysqli("localhost","root","","db_pizza_hits");
      $query_pinggiran = "SELECT DISTINCT nama_pinggiran, harga_pinggiran FROM pinggiran_makanan WHERE ukuran_pinggiran='$ukuran'";
      $result_pinggiran = mysqli_query($koneksi,$query_pinggiran);

      $result_pinggiran2 = mysqli_query($koneksi, $query_pinggiran);

      $options = "";

      while($row__pinggiran = mysqli_fetch_array($result__pinggiran2))
      {
        $options = $options."<option>$row__pinggiran2[1]</option>";
      }
      ?>
      <?php 
      $koneksi = new mysqli("localhost","root","","db_pizza_hits");
      $query_toping = "SELECT DISTINCT nama_toping, harga_toping FROM toping_makanan WHERE ukuran_toping='$ukuran'";
      $result_toping = mysqli_query($koneksi,$query_toping);

      $result_toping2 = mysqli_query($koneksi, $query_toping);

      $options = "";

      while($row_toping = mysqli_fetch_array($result_toping2))
      {
        $options = $options."<option>$row_toping2[1]</option>";
      }
      ?>
      <?php while($pecah = $ambil_menu->fetch_assoc()){?>
      <div class="product">

        <div class="product-card">
          <h2 class="name"><?php echo $pecah['nama_menu']; ?></h2>
          <span class="price">Rp.<?php echo $pecah['harga_menu']; ?>K</span>
          <a class="popup-btn">Quick View</a>
          <img src="<?php echo $pecah['gambar_menu']; ?>" class="product-img" alt="">
        </div>
        <div class="popup-view">
          <div class="popup-card">
            <a><i class="fas fa-times close-btn"></i></a>
            <div class="product-img">
              <img src="<?php echo $pecah['gambar_menu']; ?>" alt="">
            </div>
            
            <div class="info">
              
              <h2><?php echo $pecah['nama_menu']; ?></h2>
              <p><?php echo $pecah['deskripsi_menu']; ?></p>
              
              <h3>Ukuran</h3>
              <div class="select">
              <form action="menu.php" method="post"> 
                <select name="ukuran" id="ukuranPizza">
                  <option selected disabled>Ukuran</option>
                  <!-- <option value="Personal">Personal</option>
                  <option value="Regular">Regular</option>
                  <option value="Large">Large</option> -->
                    <?php while($row1 = mysqli_fetch_array($result_size)):;?>

                    <option value="<?php echo $row1[0];?>"><?php echo $row1[0];?></option>

                    <?php endwhile;?>
              
                </select>
              </form>
              </div>

              <h3>Pinggiran</h3>
              <div class="select">
                <select name="format" id="pilihPinggiran">
                <option selected disabled>Pinggiran</option>
                  <!-- <option value="Stuffed_Crust">Stuffed Crust</option>
                  <option value="Crown_Crust">Crown Crust</option>
                  <option value="Cheese_Bites">Cheese Bites</option>-->
                  <!-- <?php while($row1 = mysqli_fetch_array($result_pinggiran)):;?>

                    <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>

                  <?php endwhile;?> -->
                </select>
              </div>

              
              <h3>Toping</h3>
              <div class="select">
                <select name="format" id="pilih">
                  <option selected disabled>Toping</option>
                    <!-- <option value="Cheese">Cheese</option>
                    <option value="Meat">Meat</option>
                    <option value="Vegetable">Vegetable</option> -->
                    <?php while($row1 = mysqli_fetch_array($result_toping)):;?>

                    <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>

                    <?php endwhile;?>
              
                </select>
              </div>
              <span class="price">0</span>

              <a href="#" class="add-cart-btn">Add to Cart</a>
              <a href="#" class="add-wish">Add to Wishlist</a>
            </div>
          </div>
          
        </div>

      </div>
          <?php $nomor++;  ?>
          <?php } ?>
    </div>



    <script type="text/javascript">
      $(document).ready(function () {
       $("#ukuranPizza").change(function() {

        $.ajax({
          url: 'http://localhost/Kp_Pizzahits/set_option.php',
          method: "POST",
          data: {
            ukuran:$(this).val()
          },
          success: function(data)
          {
            // $('#pilihPinggiran').html(data);
            alert(data);
          }
        });
      });
     });
//       let tabHeader = document.getElementsByClassName("tab-header")[0];
// let tabIndicator = document.getElementsByClassName("tab-indicator")[0];
// let tabBody = document.getElementsByClassName("tab-body")[0];

// let tabsPane = tabHeader.getElementsByTagName("div");

// for(let i=0;i<tabsPane.length;i++){
//   tabsPane[i].addEventListener("click",function(){
//     tabHeader.getElementsByClassName("active")[0].classList.remove("active");
//     tabsPane[i].classList.add("active");
//     tabBody.getElementsByClassName("active")[0].classList.remove("active");
//     tabBody.getElementsByTagName("div")[i].classList.add("active");
    
//     tabIndicator.style.left = `calc(calc(100% / 4) * ${i})`;
//   });
// }
    var popupViews = document.querySelectorAll('.popup-view');
    var popupBtns = document.querySelectorAll('.popup-btn');
    var closeBtns = document.querySelectorAll('.close-btn');

    //javascript for quick view button
    var popup = function(popupClick){
      popupViews[popupClick].classList.add('active');
    }

    popupBtns.forEach((popupBtn, i) => {
      popupBtn.addEventListener("click", () => {
        popup(i);
      });
    });

    //javascript for close button
    closeBtns.forEach((closeBtn) => {
      closeBtn.addEventListener("click", () => {
        popupViews.forEach((popupView) => {
          popupView.classList.remove('active');
        });
      });
    });
    </script>

  </body>
</html>