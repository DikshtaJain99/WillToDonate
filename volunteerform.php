<!DOCTYPE html>
<html>
<body>

<h2 font-size:24px>VOLUNTEER REGISTRATION</h2>

<form method="POST" action="">
  <div style="display: flex; padding-bottom: 18px;width : 450px;">
  <div style=" margin-left : 0; margin-right : 1%; width : 49%;">First name<span style="color: red;"> *</span><br/>
  <input type="text" id="data_2" name="data_2" style="width: 100%;" class="form-control"/>
  </div>
  <div style=" margin-left : 1%; margin-right : 0; width : 49%;">Last name<span style="color: red;"> *</span><br/>
  <input type="text" id="data_3" name="data_3" style="width: 100%;" class="form-control"/>
  </div>
  </div><div style="padding-bottom: 18px;">Email<br/>
  <input type="text" id="data_4" name="data_4" style="width : 450px;" class="form-control"/>
  </div>
  <div style="padding-bottom: 18px;">Phone<br/>
  <input type="text" id="data_5" name="data_5" style="width : 250px;" class="form-control"/>
  </div>
  <br>
  What can you help us with?
  <p><input type="button" name = "data_6"
            style="margin:10px 0;" 
                onclick="Select()" 
                    value="Click to see options" /></p>
                    <!--The SELECT element.-->
    <select id="sel" onchange="show(this)">
        <option value="">-- Select --</option>
    </select>

    <p id="msg"></p>

   <br>
  <div style="padding-bottom: 18px;">Why do you want to join our campaign?<br/>
  <textarea id="data_8" false name="data_8" style="width : 450px;" rows="6" class="form-control"></textarea>
  </div>
  <input type="SUBMIT" name = "submit" value = "Register" >
</form>
</body>
  <?php
    if(isset($_POST["submit"])){
      dbentry();
    }
    function dbentry(){
      $servername="localhost";
      $username="root";
      $password="dikshita99";
      $dbname="will_to_donate";
      $conn=new mysqli($servername,$username,$password,$dbname);
      if($conn->connect_error){
        die("Connection failed: " .$conn->connect_error);
      }
      $fname=$_POST["data_2"];
      $lname=$_POST["data_3"];
      $email=$_POST["data_4"];
      $phone=$_POST["data_5"];
      $opt=$_POST["data_6"];
      $why=$_POST["data_8"];
      
      $sql="insert into volunteer (vol_fname, vol_lname, email , phone, opt, why) values( \"".$fname."\",\"".$lname."\",\"".$email."\",\"".(int)$phone."\",\"".$opt."\",\"".$why."\")";
      if($conn->query($sql) === TRUE){
        echo "<script type=\"text/javascript\"> alert(\"Volunteer Registered.\"); window.location.href=\"http://localhost/WilltoDonate-master/home.html\";</script>";
      }
      else{
        echo "Error" .$sql. "<br>" .$conn->error;
      }
      $conn->close();
      }
  ?>
<script>
    function Select() {
        // THE JSON ARRAY.
        var options = [
            {
                "ID": "001",
                "op": "Publicity"
            },
            {
                "ID": "002",
                "op": "Digital Marketing"
            },
            {
                "ID": "003",
                "op": "Taking phone calls"
            },
            {
                "ID": "004",
                "op": "Database Team"
            },
            {
                "ID": "005",
                "op": "Pickup and delivery"
            },
            {
                "ID": "006",
                "op": "NGO connect"
            },
        ];

        var ele = document.getElementById('sel');
        for (var i = 0; i < options.length; i++) {
            // POPULATE SELECT ELEMENT WITH JSON.
            ele.innerHTML = ele.innerHTML +
                '<option value="' + options[i]['ID'] + '">' + options[i]['op'] + '</option>';
        }
    }

    function show(ele) {
        // GET THE SELECTED VALUE FROM <select> ELEMENT AND SHOW IT.
        var msg = document.getElementById('msg');
        msg.innerHTML = 'Selected Option: <b>' + ele.options[ele.selectedIndex].text + '</b> </br>' +
            'ID: <b>' + ele.value + '</b>';
    }
</script>
</html>
