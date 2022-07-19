<li>
    <!-- Begin Snackers section -->
    <div class="collapsible-header" style="background-color:#E4B7A0; color: #A45C40; font-weight: bold;"><i class="material-icons">local_dining</i>Snackers</div>
    <div class="collapsible-body" style="background-color:#F6EEE0">
        <span>
            <!-- Begin span content -->
            <table class="highlight" style="color: #555;">
                <thead>
                  <tr>
                      <th style="width:70%;">Name</th>
                      <th style="width:30%;">Price</th>
                      <th>Photo</th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td><?php echo $snackers_name[0];?></td>
                    <td><?php echo $snackers_price[0];?></td>
                    <td><img class="materialboxed" width="70" src="<?php echo $snackers_image[0];?>"></td>
                  </tr>
                  <tr>
                    <td><?php echo $snackers_name[1];?></td>
                    <td><?php echo $snackers_price[1];?></td>
                    <td><img class="materialboxed" width="70" src="<?php echo $snackers_image[1];?>"></td>
                  </tr>
                </tbody>
              </table>
              <!-- End span content -->
        </span>
    </div>
    <!-- End Snackers section -->
</li>