<!-- / .main-navbar -->
<div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">List</span>
                <h3 class="page-title">Cart</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="row">
              <div class="col">
                <div class="card card-small mb-4">
                  <div class="card-body p-0 pb-3 text-center">
                    <table id="table" class="table mb-0">
                      <thead class="bg-light">
                        <tr>
                          <th scope="col" class="border-0">No</th>
                          <th scope="col" class="border-0">User</th>
                          <th scope="col" class="border-0">Product</th>
                          <th scope="col" class="border-0">Qty</th>
                          <th scope="col" class="border-0">Color</th>
                          <th scope="col" class="border-0">Order</th>
                          <th scope="col" class="border-0">Date</th>
                          <th scope="col" class="border-0">#</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                          $no = 1 + $this->uri->segment(3);
                          foreach($user as $u){
                      ?>
                      <tr>
                          <td><?=$no++?></td>
                          <td><?=$u->UserName?></td>
                          <td><?=$u->ProductName ?></td>
                          <td><?=$u->qty?></td>
                          <td><?=$u->color?></td>
                          <td><?=$u->orderid?></td>
                          <td><?=date('d M Y H:i:s', strtotime($u->created_at))?></td>
                          <td>
                              <a href="<?php echo base_url('cart/edit/'.$u->id_cart) ?>" class="btn btn-sm btn-outline-primary mr-1">Edit</a>
                              <a href="<?php echo base_url('cart/delete/'.$u->id_cart) ?>" class="btn btn-sm btn-outline-primary mr-1">Delete</a>
                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                      
                     <tfoot>
                      <div class="paging">
                        <?php 
                          echo $this->pagination->create_links();
                        ?>
                      </div>
                     </tfoot>
                    </table>
                  </div>
                </div>
                
              </div>
            </div>
            <!-- End Default Light Table -->
            
          </div>
