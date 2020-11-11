<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <style>
      body, html
      {
        width: 100%;
        height: 100%;
        margin: 0;
      }

      .container
      {
        width: 100%;
        height: 100%;
      }

      .leftpane
      {
        width: 32%;
        height: 100%;
        float: left;
      }

      .leftpane h1
      {
        margin-top: 65%;
      }

      .middlepane
      {
        width: 36%;
        height: 100%;
        float: left;
      }

      .middlepane .form
      {
        margin-left: 33%;
        margin-top: 38%;
      }

      .rightpane
      {
        width: 32%;
        eight: 100%;
        position: relative;
        float: right;
      }

      .rightpane .form
      {
        margin-left: 33%;
        margin-top: 42%;
      }
</style>

    <title>Assignment Number 1</title>
  </head>
        <body>
          <div class="container">
            <div class="leftpane">
              <center><h1>John Russel Dacanay</h1></center>
            </div>
            <div class="middlepane">
              <form class="form" action="index.php" method="post">
                <h2>Calculator</h2>
                <p>Input first number:</p>
                <input type="number" name="num1" value="">
                <p>Input second number:</p>
                <input type="number" name="num2" value="">
                <br>
                <br>
                    <input type="submit" name="add" value="+">
                    <input type="submit" name="subtract" value="-">
                    <input type="submit" name="multiply" value="*">
                    <input type="submit" name="divide" value="/">
                <br>
                <br>
                  <?php
                    if(isset($_POST['add']))
                    {
                          if(empty($_POST['num1']) && empty($_POST['num2']))
                          {
                            echo "NO NUMBER!";
                          }
                          elseif (empty($_POST['num1']))
                          {
                            echo "NO 1ST NUMBER!";
                          }
                          elseif (empty($_POST['num2']))
                          {
                            echo "NO 2ND NUMBER!";
                          }
                          elseif (!empty($_POST['num1']) && !empty($_POST['num2']))
                          {
                            $num1 = $_POST['num1'];
                            $num2 = $_POST['num2'];
                            $add = $num1 + $num2;
                            echo $num1 . " + " . $num2 . " = " . $add;
                          }

                    }
                    elseif(isset($_POST['subtract']))
                    {
                          if(empty($_POST['num1']) && empty($_POST['num2']))
                          {
                            echo "NO NUMBER!";
                          }
                          elseif(empty($_POST['num1']))
                          {
                            echo "NO 1ST NUMBER!";
                          }
                          elseif(empty($_POST['num2']))
                          {
                            echo "NO 2ND NUMBER!";
                          }
                          elseif(!empty($_POST['num1']) && !empty($_POST['num2']))
                          {
                            $num1 = $_POST['num1'];
                            $num2 = $_POST['num2'];
                            $difference = $num1 - $num2;
                            echo $num1 . " - " . $num2 . " = " . $difference;
                          }
                    }
                    elseif(isset($_POST['multiply']))
                    {
                          if(empty($_POST['num1']) && empty($_POST['num2']))
                          {
                            echo "NO NUMBER!";
                          }
                          elseif(empty($_POST['num1']))
                          {
                            echo "NO 1ST NUMBER!";
                          }
                          elseif(empty($_POST['num2']))
                          {
                            echo "NO 2ND NUMBER!";
                          }
                          elseif(!empty($_POST['num1']) && !empty($_POST['num2']))
                          {
                            $num1 = $_POST['num1'];
                            $num2 = $_POST['num2'];
                            $product = $num1 * $num2;
                            echo $num1 . " * " . $num2 . " = " . $product;
                          }
                    }
                    elseif(isset($_POST['divide']))
                    {
                          if(empty($_POST['num1']) && empty($_POST['num2']))
                          {
                            echo "NO NUMBER!";
                          }
                          elseif(empty($_POST['num1']))
                          {
                            echo "NO 1ST NUMBER!";
                          }
                          elseif(empty($_POST['num2']))
                          {
                            echo "NO 2ND NUMBER!";
                          }
                          elseif(!empty($_POST['num1']) && !empty($_POST['num2']))
                          {
                            $num1 = $_POST['num1'];
                            $num2 = $_POST['num2'];
                            $quotient = $num1 / $num2;
                            echo $num1 . " / " . $num2 . " = " . $quotient;
                          }

                    }
                  ?>
                </p>
              </form>
            </div>
            <div class="rightpane">
                <form class="form" action="index.php" method="post">
                    <h2>GCD</h2>
                    <p>Input first number:</p>
                      <input type="number" name="num1" value="">
                    <p>Input second number:</p>
                      <input type="number" name="num2" value="">
                    <br>
                    <br>
                      <input type="submit" name="submit" value="Submit">
                    <br>
                    <br>
                    <?php
                    if(isset($_POST['submit']))
                    {
                      if(empty($_POST['num1']) && empty($_POST['num2']))
                      {
                        echo "NO NUMBER!";
                      }
                      elseif(empty($_POST['num1']))
                      {
                        echo "NO 1ST NUMBER!";
                      }
                      elseif(empty($_POST['num2']))
                      {
                        echo "NO 2ND NUMBER!";
                      }
                      elseif(!empty($_POST['num1']) && !empty($_POST['num2']))
                      {
                        $num1 = $_POST['num1'];
                        $num2 = $_POST['num2'];

                        if ($num1 > $num2)
                        {
                          $temp = $num1;
                          $num1 = $num2;
                          $num2 = $temp;
                        }
                        for($i = 1; $i < ($num1+1); $i++)
                        {
                          if ($num1%$i == 0 and $num2%$i == 0)
                            $gcd = $i;
                        }
                        echo "GCD of $num1 and $num2 is: $gcd";
                      }
                    }
                    ?>
                </form>
            </div>
          </div>
        </body>
</html>
