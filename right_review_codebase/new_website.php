<head>
<?php
  include "pagetools/head.php";
 ?>
</head>
<body>
    <?php
      $page = "new_webpage";
      include "pagetools/page-top.php";
     ?>
<div class="holder">
  <form class="" action="index.html" method="post">
    <table>
      <tr>
        <td>
          <label for="item_name">Website Name</label>
        </td><td class="inputcol">
          <input type="text" name="item_name" value=""></input>
        </td>
      </tr>
      <tr>
        <td>
        <label for="item_image">Image URL:</label>
        </td><td class="inputcol">
        <input type="text" name="item_image" value=""></input>
        </td>
      <tr>
      <tr>
        <tr>
          <td>
            <label for="Description"> Description </label>
          </td><td class="inputcol">
            <textarea name="Description" value=""></textarea>
          </td>
        </tr>


      </table>
    <button type="button" name="submit" id="submit_webpage">Submit Website</button>
    <!-- item_id and date_created generated automatically -->
  </form>
</div>
</body>
<script type="text/javascript"src="js/add_item.js">

</script>
