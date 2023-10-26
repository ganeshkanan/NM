
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS LINKS-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <!-- FONT AEWSOME-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
 

<!-- 
  <div class="fixed-top">
  <nav class="navbar navbar-light bg-light">
  <div class="container-fluid"> -->

   
<?php
include 'dbConfig.php';

$special=$_POST['blood'];
$place=$_POST['city']; 

$query = $db->query("SELECT *from donor where blood='$special' and city='$place'");
if($query->num_rows > 0){
while($row = $query->fetch_assoc()){
$user=$row["name"];
?>



<section class="vh-100" style="background-color: #f4f5f7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-6 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
            <div class="col-md-12">
              <div class="card-body p-4">
                <h6>Information</h6>
                <hr class="mt-0 mb-4">
                
                <div class="row pt-1">

                <div class="col-6 mb-3">
                    <h6>Name</h6>
                    <p class="text-muted"><?php echo $row['name'] ?></p>
                  </div>

                  
                <div class="col-6 mb-3">
                    <h6>Gender</h6>
                    <p class="text-muted"><?php echo $row['gender'] ?></p>
                  </div>

                  <div class="col-6 mb-3">
                    <h6>Blood</h6>
                    <p class="text-muted"><?php echo $row['blood'] ?></p>
                  </div>

                  <div class="col-6 mb-3">
                    <h6>Age</h6>
                    <p class="text-muted"><?php echo $row['age'] ?></p>
                  </div>

                  <div class="col-6 mb-3">
                    <h6>Phone</h6>
                    <p class="text-muted"><a href="tel:<?php echo $row['mobile'] ?>" style="color: #008000;">
              <?php echo $row['mobile'] ?></a></p>
                  </div>

                  <div class="col-6 mb-3">
                    <h6>Email</h6>
                    <p class="text-muted"> <a href="mailto:<?php echo $row['email'] ?>"  style="color: #;">
   
              <?php echo $row['email'] ?></a>  </p>
                  </div>
                  
                </div>
                <h6>Other Details</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                <div class="col-6 mb-3">
                    <h6>Paid</h6>
                    <p class="text-muted"><?php echo $row['paid'] ?></p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Location</h6>
                    <p class="text-muted"><?php echo $row['location'] ?></p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>city</h6>
                    <p class="text-muted"><?php echo $row['city'] ?></p>
                  </div>

                  <div class="col-6 mb-3">
                    <h6>Pincode</h6>
                    <p class="text-muted"><?php echo $row['pincode'] ?></p>
                  </div>

               

                </div>
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




<?php }
}else{ ?>
    <p><br><br><br><br><br>No records found......</p>
<?php } ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body></html>