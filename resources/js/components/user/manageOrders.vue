<template>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-info">Manage Orders</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Orders</li>
              <li class="breadcrumb-item active">Manage Orders</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
     <div class="card">
         <div class="card-header">
             <div class="row">
               <div class="col-md-2">
                   <h6 class="text-info mt-2">View Old Bills By Date</h6>
               </div>
               <div class="col-md-2">
                <input type="date" class="form-control form-control-sm">
               </div>
               <div class="col-md-1">
                   <button class="btn btn-info">Search</button>
               </div>
               <div class="col-md-1">
                <p class="orders-heading mt-2">Total Bills: 0</p>
               </div>
               <div class="col-md-1">
                <p class="orders-heading mt-2">Total Sales: 0</p>
               </div>
               <div class="col-md-2">
                <p class="orders-heading mt-2">Total Items Sold: 0</p>
               </div>
               <div class="col-md-3">
                <p class="orders-heading mt-2">Total Percentage Change: 0</p>
               </div>
             </div>
         </div>
         <div class="card-body">
            <table class="table table-bordered">
                <thread>
                  <th>SL No</th>
                  <th>Bill No</th>
                  <th>Date</th>
                  <th>Time</th>
                  <th>Store</th>
                  <th>Net Amount</th>
                  <th>Action</th>
                </thread>
                <tbody>
                  <tr>
                  <td>1</td>
                  <td>12345</td>
                  <td>27-11-2021</td>
                  <td>05:20 PM</td>
                  <td>1</td>
                  <td>1200</td>
                  <td style="text-align: center;" class="noExport">
                    <div class="btn-group">
                      <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52" aria-expanded="false" style="margin-left:-20px;">
                        <i class="fas fa-bars"></i>
                      </button>
                      <div class="dropdown-menu" role="menu" style="margin-left:-20px;">
                        <a href="#" class="dropdown-item">View/ Edit</a>
                        <a href="#" class="dropdown-item">Delete</a>
                        <a href="#" class="dropdown-item">View Transactions</a>
                        <a href="#" class="dropdown-item">Print as PDF</a>
                        <a href="#" class="dropdown-item">Preview</a>
                        <a href="#" class="dropdown-item">Deactivate</a>
                      </div>
                    </div>
                  </td>
                  </tr>
                </tbody>
            </table>
         </div>
     </div>
    </section>
    <!-- /.content -->
  </div>
</template>

<script>
// import Sidebar from './layout/sidebar.vue'
// import TopNavigation from './layout/topNavigation.vue'
// import BtmFooter from './layout/footer.vue'
export default {
//   components:{
//     'sidebar':Sidebar,
//     'top-navigation':TopNavigation,
//     'btm-footer':BtmFooter
//   },
  data(){
    return {
      message: 'Some Message'
    };
  },
  methods:{
    logout()
    {
      axios.post('logout').then(function()
      {
        document.location.href = "/login";
      })
    },
  },
}
</script>