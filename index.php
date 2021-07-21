<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/navbar.css">

    <title>Basic Banking System</title>

    <style>
    .hero{
  display: flex;
  justify-content: center;
  align-items: center;    
	background-image: url("https://image.freepik.com/free-vector/tiny-people-depositing-taking-money-from-government-bank-flat-illustration_74855-17121.jpg");
	height: 90vh; 
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
}
.hero h1{
  font-size: 4em;
  color: #242424;
  text-align:center;
  vertical-align: middle;
  transition: 0.5s;
}
button{
  padding: 0.8em 1.8em;
  border: 1px solid #fff;
  border-radius: 8px;
  background-color: #24a0ed;
  color: #fff;
  font-size:1.2em;
  font-weight: bold;
}
button:hover{
  background-color: #1976d2;
}

footer{
	color:#586776;
	background-color: #2f2f2f;
	/* background-color:#EAF0F1; */
	letter-spacing: 0.5px;
	padding: 2em;
}
footer p{
	/* margin: 0; */
	font-size: 1.2em;
}
    </style>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  <!-- https://www.google.com/url?sa=i&url=https%3A%2F%2Fpixabay.com%2Fimages%2Fsearch%2Fmoney%2F&psig=AOvVaw1ZmgaB9jKmYkYrNHux799o&ust=1626510515058000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCJiw6JGW5_ECFQAAAAAdAAAAABAD -->
  <!-- https://image.freepik.com/free-vector/tiny-people-depositing-taking-money-from-government-bank-flat-illustration_74855-17121.jpg -->
      <div class="hero">
      <h1>Welcome<br> to <br>GMore Bank</h1>
      </div>

     
      <div class="container-fluid">
      <div class="text-center mx-auto my-5">
        <h1>Our Services</h1>
      </div>
      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="img/user.jpg" class="img-fluid">
                    <br>
                    <a href="createuser.php"><button>Create a User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/transfer.jpg" class="img-fluid">
                    <br>
                    <a href="transfermoney.php"><button>Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/history.jpg" class="img-fluid">
                    <br>
                    <a href="transactionhistory.php"><button>Transaction History</button></a>
                  </div>
            </div>
      </div>

      <section>
      <div class="text-center mx-auto my-5" style="font-weight:bold;font-size:2.5em;">
          Latest Offers      
      </div>
      <div class="d-flex flex-wrap justify-content-around my-5">
      
        <div class="card text-center border-secondary mb-3" style="max-width: 24rem;">
        <img class="card-img-top" loading="lazy" src="data:image/jpeg;base64,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" alt="Amazon offer">
        <div class="card-body text-secondary">
        <h5 class="card-title font-weight-bold">Amazon Offer</h5>
        <p class="card-text">Flat 10% discount on orders above Rs.5000 on Amazon using GMORE Credit/Debit Cards.</p>
        </div>
      </div>

      <div class="card text-center border-secondary mb-3" style="max-width: 24rem;">
        <img class="card-img-top" loading="lazy" src="https://hotdealszone.com/wp-content/uploads/2021/04/Flipkart-Bank-Cashback-Offer-1024x576.jpg" alt="Flipkart Offer">
        <div class="card-body text-secondary">
        <h5 class="card-title font-weight-bold">Flipkart Offer</h5>
        <p class="card-text">Flat 5% discount on orders above Rs.2000 on Amazon using GMORE Credit/Debit Cards.</p>
        </div>
      </div>

      <div class="card text-center border-secondary mb-3" style="max-width: 24rem;">
      <img class="card-img-top" loading="lazy" src="https://hotdealszone.com/wp-content/uploads/2020/08/1mg-Bank-Offers-1024x574.jpg" alt="Flipkart Offer">
        <div class="card-body text-secondary">
        <h5 class="card-title font-weight-bold">1mg Offer</h5>
        <p class="card-text">Flat 15% discount on orders above Rs.1000 + Extra 10% off for New 1mg users using GMORE Credit/Debit Cards.</p>
        </div>
      </div>
      </div>
      </section>
      <?php
  include 'footer.php';
  ?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>