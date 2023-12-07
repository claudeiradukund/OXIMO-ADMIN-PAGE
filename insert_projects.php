
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert project-admin dashboard</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <!-- css file -->
    <link rel="stylesheet" href="style.css">
    <style>
      .bglight{
         background-color:#f0ad4e;
      }.text-center{
          text-align: center;
      }.form-label{
          padding-left: 35%;
          margin-top: 10px;
      }.form-control{
          height: 25px;
          width: 500px;
          margin-left: 35%;
      }
    </style>
</head>
<body class="bglight">  
   <div class="container mt-3">
      <h1 class="text-center">Insert Projects</h1>
        <!-- form -->
        <form action="" method="POST"  enctype="multipart/form-data">
            <!-- title -->
           <div class="form-outline mb-4 w-50 m-auto">
              <label for="product_title" class="form-label">project title</label><br>
              <input type="text" name="product_title" id="product_title" class="form-control" placeholder="enter product title" autocomplete="off" required="required" style="height:35px; width: 600px;">
           </div>
            <!-- description -->
            <div class="form-outline mb-4 w-50 m-auto">
              <label for="description" class="form-label">Project description</label><br>
              <input type="text" name="description" id="description" class="form-control" placeholder="enter product description" autocomplete="off" required="required" style="height:35px; width: 600px;">
           </div>
             <!--keyword -->
             <div class="form-outline mb-4 w-50 m-auto">
              <label for="product_keywords" class="form-label">product keywords</label><br>
              <input type="text" name="product_keywords" id="product_keywords" class="form-control" placeholder="enter product keywords" autocomplete="off" required="required" style="height:35px; width: 600px;">
           </div>
            <!-- location -->
            <div class="form-outline mb-4 w-50 m-auto">
              <label for="product_title" class="form-label">project location</label><br>
              <input type="text" name="product_title" id="product_title" class="form-control" placeholder="enter product title" autocomplete="off" required="required" style="height:35px; width: 600px;">
           </div>
            <!--image1-->
            <div class="form-outline mb-4 w-50 m-auto">
              <label for="product_image1" class="form-label">project image1</label><br>
              <input type="file" name="product_image1" id="product_image1" class="form-control" required="required" style="height:35px; width: 200px;">
           </div>
            <!--image2-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image2" class="form-label">project image2</label><br>
              <input type="file" name="product_image2" id="product_image2" class="form-control" required="required" style="height:35px; width: 200px;">
           </div>
            <!--image3-->
            <div class="form-outline mb-4 w-50 m-auto">
              <label for="product_image3" class="form-label">project image3</label><br>
              <input type="file" name="product_image3" id="product_image3" class="form-control" required="required" style="height:35px; width: 200px;">
           </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_product" class="btn btn-info mb-3 px-3" value="insert products" style="margin-left: 35%; background-color:aqua; height: 35px; width: 98px;">
            </div>
        </form>
   </div>
    
</body>
</html>