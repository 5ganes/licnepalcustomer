<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Premium Insurance Calculator</title>
  
  <!-- Custom fonts for this template-->
  <link href="css/font-awesome/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/style.css" rel="stylesheet">

  <style type="text/css">
    .form-control{
      display: inline;
    }
  </style>
  <script type="text/javascript">
    // calculator form validation
    function maxExpectedBonusCheck(object){
      if (object.value.length > object.maxLength)
        object.value = object.value.slice(0, object.maxLength);
      if(Number.isInteger(object.value)){}
      else{
        object.value = Math.abs(object.value);
        if(object.value == 0) object.value = '';
      }
    }
    // calculator form validation ends
  </script>

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark static-top nav-bar" style="background: white">
    <div class="row">
      <div class="col-sm-3 logo">
        <img src="images/lic-logo.png" width="50%">
      </div>
      <div class="col-sm-5 text-center title-text">
        <h1 class="title-1">LIC Nepal Limited</h1>
        <h3 class="text-warning">Agent Portal</h3>
      </div>
      <div class="col-sm-4 logout">
        <div class="container-fluid" style="background: none">
          <!-- Breadcrumbs-->
          <ol class="breadcrumb float-right logout-div" style="background: none">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">
              <a href="resetpswd.html">Change Password</a>
            </li>
            <li class="breadcrumb-item active"><a href="logout.html">Logout</a></li>
          </ol>
        </div>
        <hr class="hor-line hr-line-logout">
      </div>
    </div>
  </nav>

  <div id="wrapper">

    <div id="content-wrapper" style="padding-top: 0">

      <hr class="hor-line margintop0">

      <!-- Navigation-->
      <div class="container">
        <div class="row"  style="margin: 0 auto">

          <div class="card card-login mx-auto mt-10 calculator-result">
            <div class="card-header mt-3" style="margin-top: 0 !important">
              Insurance Calculator Result
              <span class="btn btn-primary calculator-back">Back</span>
            </div>
            <div class="card-body" style=" background: #79DAFF;padding: 0;">
              <div class="table-responsive">
                <table class="table" style="text-align: center;" id="result-table">
                  
                </table>
              </div>
            </div>
          </div>

          <div class="card card-login mx-auto mt-10 calculator-form">
            <div class="card-header mt-3">
              Insurance Calculator <span id="loading" style="display: none;"><img src="loading.gif" style="width: 23px;float: right;"></span>
            </div>
            <div class="card-body">
              <form action="" method="POST">
                <div class="form-group">
                  <div class="form-label-group">
                    <select name="plan_name" id="plan_name" class="form-control" required="">
                      <option value="Dhan Vristi">Dhan Bristi</option>
                      <option value="Endowment Plan">Endowment Plan</option>
                      <option value="Jeevan Saathi">Jeevan Saathi</option>
                      <option value="Childrens Endowment Plan">Children's Endowment Plan</option>
                       <option value="Jeevan Tarang">Jeevan Tarang</option>
                      <option value="Child Plan-Bal Mamta">Child Plan-Bal Mamta</option>
                      <option value="Child Plan-Bal Sneha">Child Plan-Bal Sneha</option>
                      <option value="Jeevan Anand">Jeevan Anand</option>
                      <option value="Amulya Jeevan">Amulya Jeevan</option>
                      <option value="Bima Kiran Plan">Bima Kiran Plan</option>
                      <option value="Jeevan Astha Plan">Jeevan Astha Plan</option>
                      <option value="Money Back Plan">Money Back Plan</option>
                  </select>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-label-group">
                    Sum Assured
                    <input type="number" placeholder="Sum Assured" name="sumAssured" id="sumAssured" class="form-control" style="padding: 2% 3%" required="">
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-label-group">
                    Age
                    <select name="age" id="age" class="form-control" required="">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                      <option value="13">13</option>
                      <option value="14">14</option>
                      <option value="15">15</option>
                      <option value="16">16</option>
                      <option value="17">17</option>
                      <option value="18">18</option>
                      <option value="19">19</option>
                      <option value="20">20</option>
                      <option value="21">21</option>
                      <option value="22">22</option>
                      <option value="23">23</option>
                      <option value="24">24</option>
                      <option value="25">25</option>
                      <option value="26">26</option>
                      <option value="27">27</option>
                      <option value="28">28</option>
                      <option value="29">29</option>
                      <option value="30">30</option>
                      <option value="31">31</option>
                      <option value="32">32</option>
                      <option value="33">33</option>
                      <option value="34">34</option>
                      <option value="35">35</option>
                      <option value="36">36</option>
                      <option value="37">37</option>
                      <option value="38">38</option>
                      <option value="39">39</option>
                      <option value="40">40</option>
                      <option value="41">41</option>
                      <option value="42">42</option>
                      <option value="43">43</option>
                      <option value="44">44</option>
                      <option value="45">45</option>
                      <option value="46">46</option>
                      <option value="47">47</option>
                      <option value="48">48</option>
                      <option value="49">49</option>
                      <option value="50">50</option>
                      <option value="51">51</option>
                      <option value="52">52</option>
                      <option value="53">53</option>
                      <option value="54">54</option>
                      <option value="55">55</option>
                      <option value="56">56</option>
                      <option value="57">57</option>
                      <option value="58">58</option>
                      <option value="59">59</option>
                      <option value="60">60</option>
                      <option value="61">61</option>
                      <option value="62">62</option>
                      <option value="63">63</option>
                      <option value="64">64</option>
                      <option value="65">65</option>
                      <option value="66">66</option>
                      <option value="67">67</option>
                      <option value="68">68</option>
                      <option value="69">69</option>
                      <option value="70">70</option>
                      <option value="71">71</option>
                      <option value="72">72</option>
                      <option value="73">73</option>
                      <option value="74">74</option>
                      <option value="75">75</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-label-group">
                    Term
                    <select name="term" id="term" class="form-control" required="">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                      <option value="13">13</option>
                      <option value="14">14</option>
                      <option value="15">15</option>
                      <option value="16">16</option>
                      <option value="17">17</option>
                      <option value="18">18</option>
                      <option value="19">19</option>
                      <option value="20">20</option>
                      <option value="21">21</option>
                      <option value="22">22</option>
                      <option value="23">23</option>
                      <option value="24">24</option>
                      <option value="25">25</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-label-group">
                    Expected Bonus
                    <input type="number" min="1" max="99" maxlength="2" oninput="maxExpectedBonusCheck(this)" id="expectedBonus" placeholder="Expected Bonus" name="expectedBonus" class="form-control" style="padding: 2% 3%" required="">
                  </div>
                </div>
                <div class="row submit-reset-group">  
                  <div class="submit-calculator">
                    <input type="button" name="cal_btn" id="cal_btn" value="Calculate" class="btn btn-block submit">
                  </div>
                  <div class="reset-calculator">
                    <input type="reset" value="Clear" class="btn btn-block submit">
                  </div>
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>

      <hr class="hor-line">

      <!-- Sticky Footer -->
      <footer class="container-fluid">
        <div class="my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © LIC Nepal, 2019. All Rights Reserved</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="js/bootstrap/jquery.min.js"></script>
  <script src="js/bootstrap/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="js/jquery.easing.min.js"></script>

  <!-- Jquery form validator -->
  <script type="text/javascript" src="js/validateforms.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/admin.min.js"></script>

  <script type="text/javascript">
    // calculator ajax call
    $('#cal_btn').click(function(){
      $('#loading').show();
      var xmlHttp = new XMLHttpRequest();
      xmlHttp.open('POST', 'process3.php', true);
      xmlHttp.onreadystatechange = function() {
        if (xmlHttp.readyState > 3) {
          $('#loading').hide();
          $('.calculator-form').hide();
          $('.calculator-result').show();
          $('#result-table').html(xmlHttp.responseText);
          // alert(xmlHttp.responseText);
        }
      };
      var data = new FormData();
      data.append('plan_name', $("#plan_name").val());
      data.append('term', $("#term").val());
      data.append('age', $("#age").val());
      data.append('sumAssured', $("#sumAssured").val());
      xmlHttp.send(data);
    });
    // calculator ajax call ends
  
    // calculator back button jquery
    $('.calculator-back').click(function(){
      $('.calculator-result').hide();
      $('.calculator-form').show();
    });
    // calculator back button jquery ends

  </script>

</body>

</html>
