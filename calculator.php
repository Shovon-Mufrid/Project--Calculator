<?php

require_once 'header.php';

?>
<div class="container text-center">
  <div class="row">
    <div class="col-lg-6 m-auto">
      <div class="card mt-3">
        <div class="card-header bg-dark text-white">
          <h1>Calculator</h1>
        </div>
        <div class="card-body">
              <form action="result.php" method="post">
                  <div class="form-row mb-3">
                    <input type="text" class="form-control" placeholder="enter first number" name="num1" >
                  </div>
                  
                  <div class="form-row mb-3">
                    <input type="text" class="form-control" placeholder="enter second number" name="num2" >
                  </div>
                  
                  <div class="form-row mb-3">
                      <button name="operator" class="btn btn-primary" type="submit" value="add">ADD</button>
                      <button name="operator" class="btn btn-primary" type="submit" value="sub">SUB</button>
                      <button name="operator" class="btn btn-primary" type="submit" value="mul">MUL</button>
                      <button name="operator" class="btn btn-primary" type="submit" value="div">DIV</button>
                      <button name="operator" class="btn btn-primary" type="submit" value="mod">MOD</button>
                  </div>                  
              </form>
        </div>
        <div class="card-footer">
          <h6>Copyright</h6>
        </div>
      </div>
    </div>
  </div>
</div>


<?php
 
 require_once "footer.php";

?>