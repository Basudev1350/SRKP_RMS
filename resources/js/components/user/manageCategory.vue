<template>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-info"> Manage Product Category </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Products</li>
              <li class="breadcrumb-item active">Category</li>
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
                <h5 class="m-0 text-info text-left">Manage Product Category</h5>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-2">
                      <a href="#" class="btn btn-info btn-sm">Add New Category</a>
                    </div>
                    <div class="col-md-3 offset-md-7 mb-2">
                      <input type="text" placeholder="search by typing here" class="form-control form-control-sm">
                    </div>
                  </div>
                <table class="table table-bordered">
                    <thread>
                      <th class="text-center">SL No</th>
                      <th class="text-center">Category Name</th>
                      <th class="text-center">Status</th>
                      <th class="text-center">Action</th>
                    </thread>
                    <tbody>
                      <tr>
                      <td class="text-center">1</td>
                      <td class="text-center">Pizza</td>
                      <td  class="text-center"><span class="badge badge-pill badge-success">Active</span></td>
                      <td  class="noExport text-center">
                        <div class="btn-group">
                          <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52" aria-expanded="false" style="margin-left:-20px;">
                            <i class="fas fa-bars"></i>
                          </button>
                          <div class="dropdown-menu" role="menu" style="margin-left:-20px;">
                            <a href="#" class="dropdown-item">Edit</a>
                            <a href="#" class="dropdown-item">Delete</a>
                          </div>
                        </div>
                      </td>
                      </tr>
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