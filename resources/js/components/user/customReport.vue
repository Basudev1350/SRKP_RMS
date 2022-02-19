<template>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-info">Custom report</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Reports</li>
              <li class="breadcrumb-item active">Custom Report</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="row">
          <div class="col-md-6">
            <div class="card">
            <div class="card-header">
            <h6 class="m-0 text-info text-left"> Generate report by selecting dates </h6>
            </div>
            <div class="card-body">
            <form class="mt-3"> 
             <div class="row">
                 <div class="col-md-5">
                    <div class="form-group">
                        <label class="text-grey">Start Date</label>
                        <input type="date" class="form-control form-control-sm" >
                    </div>
                 </div>
                 <div class="col-md-2">
                   <h6 class="text-center text-info mt-4">to</h6>
                 </div>
                 <div class="col-md-5">
                    <div class="form-group">
                        <label class="text-grey">End Date</label>
                        <input type="date" class="form-control form-control-sm" >
                    </div>
                 </div>
             </div>
             <div class="row">
                <div class="col-md-5">
                <div class="form-group">
                    <label class="text-grey">Select Store</label>
                    <select class="form-control form-control-sm">
                        <option selected=""> -- Select Store -- </option>
                        <option value="option1">Option 1</option>
                        <option value="option2">Option 2</option>
                    </select>
                 </div>
                </div>
             </div>
             <div class="col-md-4 offset-md-4">
             <input type="submit" class="btn btn-info btn-sm mt-3" value="Generate Report">
             </div>
            </form>
            </div>
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header">
            <h5 class="m-0 text-info text-left"> Sales Report: </h5>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-3 offset-md-9 mb-2">
                  <input type="text" placeholder="search by typing here" class="form-control form-control-sm">
                </div>
              </div>
                <table class="table table-bordered">
                    <thread>
                      <th>SL</th>
                      <th>Category</th>
                      <th>Product</th>
                      <th>Size</th>
                      <th>Price</th>
                      <th>Quantity</th>
                      <th>Amount</th>
                    </thread>
                    <tbody>
                      
                    </tbody>
                </table>
            </div>
            </div>
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