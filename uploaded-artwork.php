<?php
  $page = 'Uploaded Artwork';
  include('inc/header.php'); 
  $artistid = $_SESSION['UserID'];
  $artistproduct = $obj->GetProductByArtistId($artistid);
  
  ?>
  <style>
/* Default styles for larger screens */


/* Media query for smaller devices (e.g., tablets) */
@media (max-width: 992px) {
  .equal-sized-image {
    height: 150px; /* Adjust the height for smaller devices */
  }
}

/* Media query for even smaller devices (e.g., smartphones) */
@media (max-width: 768px) {
  .equal-sized-image {
    height: 100px; /* Adjust the height for even smaller devices */
  }
}

  </style>
<body>
  <main class="main-container">
    <div class="contain-wrapper">
      <!-- header -->
      
 
        <!--upload artwork-->
        <section class="upload-art-work">
          <div class="upload-art-content">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
              <ul class="d-flex upload-art-list list-unstyled">
                <li><a  href="#">My Artwork</a></li>
                <li><a  href="#">My Products</a></li>
                <li><a  href="#">My Earning</a></li>
              </ul>
              <ul class="d-flex upload-art-list list-unstyled align-items-center flex-wrap">
                <li><a  href="#">View My Shop</a></li>
                <li><a  href="#">Help</a></li>
                <li>
                  <a  href="#">
                    My Account
                    <svg viewBox="0 0 24 24">
                      <path fill="currentColor" d="M7,10L12,15L17,10H7Z" />
                    </svg>
                  </a>
                </li>
                <a href="upload-art.php">
                <button type="button" class="btn btn-dark px-3 artwork-btn">Add New Artwork</button>
                </a>
              </ul>
            </div>
          </div>
          <div class="upload-arts-container">
            <div class="upload-arts-content p-4 text-right">
              <span class="fw-bold">Filter:</span>
              <select class=" " aria-label="Default select example" style="width:120px ; padding: 5px">
                <option selected>All</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
              <span class="inp-srch-svg position-relative ">
                <input type="input" class="border search-inp-tag" placeholder="Search titles and tags" />
                <svg  viewBox="0 0 24 24">
                  <path fill="currentColor" d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" />
                </svg>
              </span>
            </div>
          </div>
          
          
          <div class="artworks-uploaded p-5">
            <div class="artworks-uploaded-content">
              <div>
                  
                  
    <div class="row">
  <?php while($row = mysqli_fetch_array($artistproduct)) {?>
    <div class="col-md-3 col-upload-arts">
      <div class="bg-white rounded">
        <div class="upload-img-container">
          <a href="product?id=<?=$row['id'];?>">
  <img class="w-100 rounded equal-sized-image img-fluid" src="admin/assets/images/Artwork/<?=$row['image'];?>" alt="psychedelic img" />
</a>

          <div class="upload-img-content p-2">
            <p class="m-0 fw-bold"><?=$row['title'];?></p>
            
            <?php
            $created_at = $row['Created_at'];
            // Convert the date string to a timestamp and then format it as "12 March 2022"
            $formatted_date = date("j F Y", strtotime($created_at));
            ?>
            <p class="m-0">Publish since <?=$formatted_date;?></p>
           
            <p class="m-0">
              <a href="seller-edit-product?Id=<?php echo $row['id'];?>" style="color: black;">
                View and Edit Product
                <svg viewBox="0 0 24 24">
                  <path fill="currentColor" d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
                </svg>
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>
</div>

              </div>
            </div>
          </div>
        </section>
      </div>
        <!-- footer -->
        <?php
          include('inc/footer.php'); 
          ?>
   
  </main>
</body>
</html>