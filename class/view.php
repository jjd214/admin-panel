<?php
class view extends config {

    public function view() {

      if (isset($_POST['submit_search'])) {
        $search = $_POST['search'];

        $connection = $this->openConnection();
        $stmt = $connection->prepare("SELECT * FROM `tbl_users` WHERE `id` LIKE '%$search%' OR `firstname` LIKE '%$search%' OR `lastname` LIKE '%$search%' OR `username` LIKE '%$search%'");
        $stmt->execute();
        $data = $stmt->fetchAll();
        $count = $stmt->rowCount();

        if ($count > 0) {
        
            echo "<h3>Search Results</h3>";
            echo "<table class='table table-dark table-striped table-sm'>";
            echo "<thead>
                <tr>
                  <th> ID </th>
                  <th> First Name </th>
                  <th> Last Name </th>
                  <th> Age </th>
                  <th> Phone Number </th>
                  <th> Username </th>
                  <th> User Type </th>
                  <th> Action </th>
                </tr>
             </thead><tbody>";
             # Gagamit ng foreach para makuha yung laman ng result.
             foreach ($data as $datas) {
               echo "<tr>";
               echo "<td>$datas[id]</td>";
               echo "<td>$datas[firstname]</td>";
               echo "<td>$datas[lastname]</td>";
               echo "<td>$datas[age]</td>";
               echo "<td>$datas[phone_number]</td>";
               echo "<td>$datas[username]</td>";
               echo "<td>$datas[access]</td>";
               echo "<td>
                      <a class='btn btn-success btn-sm' href='update_user.php?edit=$datas[id]'>Edit</a>
                      <a class='btn btn-danger btn-sm' href='index.php?delete=$datas[id]'>Delete</a>
                    </td>";
               echo "</tr>";
             }
            echo "</tbody></table>";
        } else {
            echo '<div class=" col-md-9 alert alert-info alert-dismissible fade show" role="alert">
            <strong></strong> No Result Found!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>';
        }
      } else {
        $connection = $this->openConnection();
        $stmt = $connection->prepare("SELECT * FROM `tbl_users` WHERE `access` = 'admin'");
        $stmt->execute();
        $data = $stmt->fetchAll();
        echo "<h3> ADMIN TABLE</h3>";
        echo "<table class='table table-dark table-striped table-sm'>";
        echo "<thead>
            <tr>
              <th> ID </th>
              <th> First Name </th>
              <th> Last Name </th>
              <th> Age </th>
              <th> Phone Number </th>
              <th> Username </th>
              <th> User Type </th>
              <th> Action </th>
            </tr>
         </thead><tbody>";
         # Gagamit ng foreach para makuha yung laman ng result.
         foreach ($data as $datas) {
           echo "<tr>";
           echo "<td>$datas[id]</td>";
           echo "<td>$datas[firstname]</td>";
           echo "<td>$datas[lastname]</td>";
           echo "<td>$datas[age]</td>";
           echo "<td>$datas[phone_number]</td>";
           echo "<td>$datas[username]</td>";
           echo "<td>$datas[access]</td>";
           echo "<td>
                  <a class='btn btn-success btn-sm' href='update_user.php?edit=$datas[id]'>Edit</a>
                  <a class='btn btn-danger btn-sm' href='index.php?delete=$datas[id]'>Delete</a>
                </td>";
           echo "</tr>";
         }
        echo "</tbody></table>";
      }
 
    }
    public function view_users () {
      if (isset($_POST['submit_search'])) {
        $search = $_POST['search'];

        $connection = $this->openConnection();
        $stmt = $connection->prepare("SELECT * FROM `tbl_users` WHERE `id` LIKE '%$search%' OR `firstname` LIKE '%$search%' OR `lastname` LIKE '%$search%' OR `username` LIKE '%$search%'");
        $stmt->execute();
        $data = $stmt->fetchAll();
        $count = $stmt->rowCount();

        if ($count > 0) {
        
            echo "<h3>Search Results</h3>";
            echo "<table class='table table-dark table-striped table-sm'>";
            echo "<thead>
                <tr>
                  <th> ID </th>
                  <th> First Name </th>
                  <th> Last Name </th>
                  <th> Age </th>
                  <th> Phone Number </th>
                  <th> Username </th>
                  <th> User Type </th>
                  <th> Action </th>
                </tr>
             </thead><tbody>";
            
             foreach ($data as $datas) {
               echo "<tr>";
               echo "<td>$datas[id]</td>";
               echo "<td>$datas[firstname]</td>";
               echo "<td>$datas[lastname]</td>";
               echo "<td>$datas[age]</td>";
               echo "<td>$datas[phone_number]</td>";
               echo "<td>$datas[username]</td>";
               echo "<td>$datas[access]</td>";
               echo "<td>
                      <a class='btn btn-success btn-sm' href='update_user.php?edit=$datas[id]'>Edit</a>
                      <a class='btn btn-danger btn-sm' href='index.php?delete=$datas[id]'>Delete</a>
                    </td>";
               echo "</tr>";
             }
            echo "</tbody></table>";
        } else {
          echo '<div class=" col-md-9 alert alert-info alert-dismissible fade show" role="alert">
          <strong></strong> No Result Found!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>';
        } 
      } else {
        $connection = $this->openConnection();
        $stmt = $connection->prepare("SELECT * FROM `tbl_users` WHERE `access` = 'user'");
        $stmt->execute();
        $data = $stmt->fetchAll();
        
        echo "<h3> USER TABLE </h3>";
        echo "<table class='table table-dark table-striped table-sm'>";
        echo "<thead>
            <tr>
              <th> ID </th>
              <th> First Name </th>
              <th> Last Name </th>
              <th> Age </th>
              <th> Phone Number </th>
              <th> Username </th>
              <th> User Type </th>
              <th> Action </th>
            </tr>
         </thead><tbody>";
         # Gagamit ng foreach para makuha yung laman ng result.
         foreach ($data as $datas) {
           echo "<tr>";
           echo "<td>$datas[id]</td>";
           echo "<td>$datas[firstname]</td>";
           echo "<td>$datas[lastname]</td>";
           echo "<td>$datas[age]</td>";
           echo "<td>$datas[phone_number]</td>";
           echo "<td>$datas[username]</td>";
           echo "<td>$datas[access]</td>";
           echo "<td>
                  <a class='btn btn-success btn-sm' href='update_user.php?edit=$datas[id]'>Edit</a>
                  <a class='btn btn-danger btn-sm' href='index.php?delete=$datas[id]'>Delete</a>
                </td>";
           echo "</tr>";
         }
        echo "</tbody></table>";
      }
    }
    public function view_userpanel ($user_id) {

        $connection = $this->openConnection();
        $stmt = $connection->prepare("SELECT * FROM `tbl_users` WHERE `id` = ?");
        $stmt->execute([$user_id]);
        $data = $stmt->fetchAll();

        $firstname = $data[0]['firstname'];

        echo "<h3> Welcome, $firstname</h3>";
        echo "<table class='table table-dark table-striped table-sm'>";
        echo "<thead>
            <tr>
              <th> ID </th>
              <th> First Name </th>
              <th> Last Name </th>
              <th> Age </th>
              <th> Phone Number </th>
              <th> Username </th>
              <th> User Type </th>
            </tr>
         </thead><tbody>";
         # Gagamit ng foreach para makuha yung laman ng result.
         foreach ($data as $datas) {
           echo "<tr>";
           echo "<td>$datas[id]</td>";
           echo "<td>$datas[firstname]</td>";
           echo "<td>$datas[lastname]</td>";
           echo "<td>$datas[age]</td>";
           echo "<td>$datas[phone_number]</td>";
           echo "<td>$datas[username]</td>";
           echo "<td>$datas[access]</td>";
           echo "</tr>";
         }
        echo "</tbody></table>";
    }  
}
?>