<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel=stylesheet  href="form.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
</head>
<body>
<section>
  <div class="container">
    <form action="make.php" method="POST">
        

      <div class="step step-1 active">
      <h2>Customer Details</h2>
        <div class="form-group">
          <label for="firstName">First Name</label>
          <input type="text" id="firstName" name="first-name">
        </div>
        <div class="form-group">
          <label for="lastName">Last Name</label>
          <input type="text" id="lastName" name="last-name">
        </div>
        <div class="form-group">
          <label for="address">Address</label>
          <input type="text" id="address" name="address">
        </div>
        <div class="form-group">
          <label for="phone">Phone</label>
          <input type="number" id="phone" name="phone-number">
        </div>
        <button type="button" class="next-btn">Next</button>
      </div>

      
      <div class="step step-2">
      <h2>Technical Details</h2>
    
        <div class="form-group">
          <label for="serialNo">Serial Number</label>
          <input type="number" id="serialNo" name="serial-number">
        </div>
        <div class="form-group">
          <label for="hsnCode">HSN Code</label>
          <input type="number" id="hsnCode" name="hsn-code">
        </div>
        <div class="form-group">
        <label for="mode">Mode/Terms Of Payment</label>

        <select name="mode" id="mode">
        <option value="choose">Choose</option>
           <option value="cash">Cash</option>
           <option value="finance">Finance</option>

        </select>
        </div>

        <div class="form-group">
        <label for="financeName">Finance Name</label>

          <select name="financeName" id="financeName">
             <option value="choose">Choose</option>
             <option value="HDBFS">HDBFS</option>
             <option value="Bajaj">Bajaj</option>
             <option value="Home Credit">Home Credit</option>
          </select>
         </div>
        <div class="form-group">
          <label for="financeScheme">Finance Scheme</label>
          <input type="text" id="financeScheme" name="finance-scheme">
        </div>
        <div class="form-group">
          <label for="downPayment">Down Payment</label>
          <input type="number" id="downPayment" name="down-payment">
        </div>

        
        <button type="button" class="previous-btn">Prev</button>
        <button type="button" class="next-btn">Next</button>
      </div>

      <div class="step step-3">
      <h2>Product Details</h2>
      <div class="form-group">
        <label for="brandName">Brand Name</label>

          <select name="brandName" id="brandName">
             <option value="choose">Choose</option>
             <option value="VIVO">VIVO</option>
             <option value="OPPO">OPPO</option>
             <option value="SUMSUNG">SUMSUNG</option>
          </select>
         </div>
        <div class="form-group">
          <label for="modelName">Model Name</label>
          <input type="text" id="modelName" name="modelName">
        </div>
        <div class="form-group">
          <label for="color">Color</label>
          <input type="text" id="color" name="color">
        </div>
        <div class="form-group">
          <label for="imei">IMEI</label>
          <input type="number" id="imei" name="imei">
        </div>
        <div class="form-group">
          <label for="quantity">Quantity</label>
          <input type="number" id="quantity" name="quantity">
        </div>
        <div class="form-group">
          <label for="rate">Rate</label>
          <input type="number" id="rate" name="rate">
        </div>
        <div class="form-group">
          <label for="percentage">Discount%</label>
          <input type="number" id="percentage" name="discount">
        </div>
        <button type="button" class="previous-btn">Prev</button>
        <a href="make.php">Submit</a>
      </div>
      

    </form>
  </div>
</section>
<script src="form.js"></script>
</body>
</html>