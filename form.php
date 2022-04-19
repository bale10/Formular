<!DOCTYPE html>
<html>
  <head>
      <title>Vehicle rental agreement &vreceipt invoice</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
      <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <body>
    <div class="container header">
    <h2 align="center">Vehicle rental agreement &vreceipt invoice</h2>

    <form method="post" action="php/customer.php">
      
      <fieldset>
        <legend>Customer information</legend>

        <label for="name"> Name: </label>
        <input id="name" type="text" name="firstname" placeholder="name" required>

        <label for="surname">Surname:</label>
        <input id="surname" type="text" name="surname" placeholder="Surname" required>

        <label for="id_passport">ID/Passport number:</label>
        <input id="id_passport" type="text" min="1" max="10" step="0" name="id_passport">

        <label for="Phone number">Phone number:</label>
        <input id="phone" type="tel" name="phone" placeholder="07X-XXX-XXX" ><br>
        <br>

        <label for="address">Address:</label>
        <input id="address" type="text" name="address">

        <input type="checkbox" required >
        <label for="customer"> User agreements</label>
        
      </fieldset>

      <div id="button" align="center">
        <input type="submit" value="Send">
        <input type="reset" value="Reset">
      </div>

    </form>

    <form method="post" action="php/vehicle.php">
      
      <fieldset>

        <legend> Vehicle information</legend>
        <label for="Type of vehicle"> Type of vehicle: </label>
        <input id="type" type="text" name="type" placeholder="predefined options from the company" required>

        <label for="Vehicle model">Vehicle model:</label>
        <input id="model" type="text" name="model" placeholder="predefined options from the company" required>

        <input type="checkbox" required >
        <label for="vehicle"> User agreements</label><br>

      </fieldset>

      <div id="button" align="center">
        <input type="submit" value="Send">
        <input type="reset" value="Reset">
      </div>

    </form>

    <form method="post" action="php/calculate.php">

      <fieldset>
        <legend> Payment calculation</legend>
        
        <label for="Check in date">Check in date:</label>
        <input id="in" type="time" name="check_in" value="08:00"/>
        
        <label for="Check out date">Check out date </label>
        <input id="out" type="time" name="check_out" value="20:00"/>
        
        <label for="Payment method"> Payment method</label>
        <select id="payment" name="payment_method" required>
          <option value="0"> Card </option>
          <option selected value="1"> Cash</option>
        </select> 
      
          <label for="cash">Insert price </label>
          <input id="value" type="number" name="insert_price" /><br>
          <br>
        <div id="show_0" class="hidden" align="center">
          <label for="name">Name of card* </label>
          <input id="name" type="text" name="name_card" /> <br>
          <br>
          <label for="number">Number card* </label>
          <input id="number" type="number" name="number_card" /><br>
          <br>
          <label for="cvb">CVC* </label>
          <input id="cvb" type="number" name="cvc" /><br>
          <br>
          <label for="Date">Expiration date*:</label>
          <input id="valid" type="date" name="expiration_date" value="2022-01-01" min="2019-01-01" max="2024-04-01" required/><br>
          <br>
          <label for="NOTE">Fields with * are required! </label>
        </div>

        <input type="checkbox" required >
        <label for="calculation"> User agreements</label>
      </fieldset>
      
      <div id="button" align="center">
        <input type="submit" value="Send">
        <input type="reset" value="Reset">
      </div>
    </form>
  </div>  
  </body>
  <script>
    $(document).ready(function(){
        $('#payment').on('change', function(){
            var demovalue = $(this).val(); 
            $("div.hidden").hide();
            $("#show_"+demovalue).show();
        });
    });
    </script>
</html>