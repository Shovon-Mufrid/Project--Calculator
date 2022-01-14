<?php

require_once('header.php');
//error_reporting(0);
?>

<div class="container">
  <div class="row">
    <div class="col-lg6-m-auto">
      <div class="card mt-3">
        <div class="card-header bg-danger text-white">
          CALCULATOR
        </div>

        <div class="card-body">
          <form action="calc.php" method="post">

            <div class="form-row mb-2 bg-black text-white">
              <input type="number" class="form-control" placeholder="First Number" name="val1">
            </div>

            <div class="form-row mb-2">
              <select name="operators">
                <option value="add">+</option>
                <option value="sub">-</option>
                <option value="mul">*</option>
                <option value="div">/</option>
                <option value="mod">%</option>
              </select>
            </div>

            <div class="form-row mb-2">
              <input type="number" class="form-control" placeholder="Second Number" name="val2">
            </div>

            <div class="form-row mb-2">
              <input type="submit" name="calculate" value="Calculate">
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
</div>

<?php
require_once('footer.php');
?>