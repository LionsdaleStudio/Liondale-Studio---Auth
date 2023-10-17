<?php require '../layouts/header.php'; ?>

<div class="landing-video">
    <video src="../assets/videos/landing.mp4" loop muted autoplay>
    </video>
</div>

<div class="row">
    <div class="col-3">
        <div class="card border-primary m-3">
          <img class="card-img-top img-fluid" src="../assets/images/placeholder.png" alt="Placeholder">
          <div class="card-body">
            <h4 class="card-title">Example title of product</h4>
            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt praesentium quas adipisci! Modi quidem aspernatur id eum dolorem. Eaque similique nihil non commodi quae minus sunt dignissimos, ullam totam rerum!</p>
          </div>
          <div class="mt-2 mb-2 text-center">
            <form action="">
                <input class="form-control" type="number" name="qty" id="qty" value="1">
                <button class="mt-2 cartIcon"><i class="fa-solid fa-cart-shopping"></i></button>
            </form>
          </div>
        </div>
    </div>
</div>

<?php require '../layouts/footer.php'; ?>