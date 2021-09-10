<div class="container">
  <h2><?php echo $title; ?></h2>
        
  <table class="table table-striped">
    <thead>
      <tr>
        <th>id</th>
        <th>First Name</th>        
        <th>Last Name</th>
        <th>Email</th>        
        <th>Photo</th>               
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach ($allUser->data as $data_item): ?>
        <tr>
            <td><?php echo $data_item->id; ?></td>
            <td><?php echo $data_item->first_name; ?></td>
            <td><?php echo $data_item->last_name; ?></td> 
            <td><?php echo $data_item->email; ?></td>   
            <td><img src=<?php echo $data_item->avatar; ?> style="height: 70px;"/></td>
            <td>
                <a href=<?php echo site_url('home/user/'.$data_item->id);?> class="btn btn-info" role="button">Update</a>
                <a href=# class="btn btn-danger" role="button">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
  </table>
  
   

    <ul class="pagination">
        <?php
            if($allUser->page>1){
                $prev = $allUser->page - 1;
            }else{                
                $prev = 1;
            }
        ?>
        <li class="page-item"><a class="page-link" href=<?php echo site_url('home/alluser/'.$prev);?>>Previous</a></li>
        <?php
            for ($x = 1; $x <= $allUser->total_pages ; $x++) { 
                if($x == $allUser->page){
                    $active = "active";
                } else { $active = "";}
                ?>
                <li class="page-item <?php echo $active;?>"><a class="page-link" href=<?php echo site_url('home/alluser/'.$x);?>><?php echo $x; ?></a></li>
        <?php   }    
        ?>
        <?php
            if($allUser->page < $allUser->total_pages){
                $next = $allUser->page + 1;
            }else{                
                $next = $allUser->total_pages;
            }
        ?>
        <li class="page-item"><a class="page-link" href=<?php echo site_url('home/alluser/'.$next);?>>Next</a></li>
    </ul>

</div>
