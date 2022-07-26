<?php
        if(isset($_COOKIE['status'])){
                 
?>

<html>
  <head>
    <title>Insurance</title>
  </head>
  <body>
    <form method="post">
      <fieldset>
          <center>
            <legend><h1><b>Insurance</b></h1></legend>
            <div class="content">
            <table>

            <h5>Choose Suitable Insurance</h5><br>
            <tr>
              <td>
            <input type="radio" name="text" value="">CIIPP >>> Protect you against 52 critical illnesses including Cancer, Stroke, First Heart Attack and Kidney disease. >>>>> 6000 taka/6 months <br />
          </td>
          </tr>
          <tr>
            <td>
            <input type="radio" name="text" value="">CI ROP >>> Super Stay protected from 10 critical illnesses for 10 years with life insurance coverage from MetLife. >>>>> 10000 taka/10 Years <br />
          </td>
        </tr>
        <tr>
            <td>
            <input type="radio" name="text" value="">MediCare >>> MediCare is a supplementary health insurance plan for you and your family members that will provide financial benefit during hospitalization. >>>>> 500 taka/per month <br />
            </td>
          </tr>
            <tr>
            <td>
            <input type="radio" name="text" value="">Critical Care >>> A specialized scheme from MetLife Bangladesh which provides immediate financial help to combat 25 critical illnesses. >>>>> 5000 taka/6 months<br />
            </td>
          </tr>
            <tr>
            <td>
            <input type="radio" name="text" value="">Hospital Care >>> This offering from Bangladesh provides essential daily financial support should you, or your family, have to stay in hospital. >>>>> 3000 taka/6 months<br />
            </td>
          </tr>
          <tr>
            <td>
          <center><br> <button type='submit' name='insurance' value='$id'>Buy</button>

                <a href="paitentHome.php">Back</a>
          
          </td>
            </tr>
               
 </table>
</div>
 </fieldset>
</body>
        
</html>
<?php
        }
                 
?>