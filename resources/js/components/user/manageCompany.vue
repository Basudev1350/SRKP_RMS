<template>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-info">Manage Company Info</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Company Info</li>
              <li class="breadcrumb-item active">Invoice Info</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <h5 class="m-0 text-info text-left"> Update company information(for invoice) </h5>
                </div>
                <div class="card-body">
                    <form action=" ">
                   <div class="row">
                       <div class="col-md-3">
                           <div class="form-group">
                               <label>Company Name</label>
                               <input type="text" class="form-control form-control-sm" value="The Food Factory">
                           </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-group">
                        <label>Gst Tax(%)</label>
                        <input type="text" class="form-control form-control-sm" value="0">
                        </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text" class="form-control form-control-sm" value="1234567890">
                        </div>
                       </div>
                       <div class="col-md-3">
                           <div class="form-group">
                            <label>Payment Methods</label>
                            <textarea class="form-control form-control-sm">Cash</textarea>
                           </div>
                       </div>
                   </div>
                   <div class="row">
                       <div class="col-md-3">
                           <div class="form-group">
                               <label>Address</label>
                               <textarea class="form-control form-control-sm">14, B. C. ROY PATH, GANGULIPARA, SHYAMNAGAR, 743127</textarea>
                           </div>
                       </div>
                       <div class="col-md-3">
                        <div class="form-group">
                            <label>Message</label>
                            <textarea class="form-control form-control-sm">***THANK YOU, VISIT AGAIN***</textarea>
                        </div>
                       </div>
                       <div class="col-md-3">
                           <div class="form-group">
                               <input type="submit" class="btn btn-info btn-sm" value="Save Changes" style="margin-top:30px;">
                           </div>
                       </div>
                   </div>
                   </form>
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