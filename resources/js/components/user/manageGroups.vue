<template>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-info">Manage Groups</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Company Info</li>
              <li class="breadcrumb-item active">Groups</li>
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
                <h5 class="m-0 text-info text-left">Fill up this form to add a group</h5>
                </div>
                <div class="card-body">
                  <div class="row">
                      <div class="col-md-4">
                          <div class="form-group">
                              <label>Group Name</label>
                              <input type="text" class="form-control form-control-sm" placeholder="enter group name"> 
                          </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control form-control-sm">
                                <option>Active</option>
                                <option>Inactive</option>
                            </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                          <input type="submit" class="btn btn-info btn-sm" value="Save Changes" style="margin-top:30px;">
                      </div>
                  </div>
                  <label class="text-left mt-2">Permission Label:</label>
                  <table class="table table-bordered">
                    <thread>
                      <tr>
                        <th  class="text-center"></th>
                        <th class="text-center">Create</th>
                        <th class="text-center">Update</th>
                        <th class="text-center">View</th>
                        <th class="text-center">Delete</th>
                      </tr>
                    </thread>
                    <tbody>
                     <tr>
                       <td class="text-center">Tables</td>
                       <td class="text-center"><input type="checkbox"></td>
                       <td class="text-center"><input type="checkbox"></td>
                       <td class="text-center"><input type="checkbox"></td>
                       <td class="text-center"><input type="checkbox"></td>
                     </tr>
                     <tr>
                        <td class="text-center">Category</td>
                        <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><input type="checkbox"></td>
                      </tr>
                      <tr>
                        <td class="text-center">Orders</td>
                        <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><input type="checkbox"></td>
                      </tr>
                      <tr>
                        <td class="text-center">Report</td>
                        <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><input type="checkbox"></td>
                      </tr>
                      <tr>
                        <td class="text-center">Inventory</td>
                        <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><input type="checkbox"></td>
                        <td class="text-center"><input type="checkbox"></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
            </div>
         </div>
         <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                <h5 class="m-0 text-info text-left"> Groups list </h5>
                </div>
                <div class="card-body">
                  <div class="col-md-4 offset-md-8">
                      <input type="text" class="form-control form-control-sm mb-2" placeholder="Search By Typing Here">
                  </div>
                  <table class="table table-bordered">
                    <thread>
                      <tr>
                        <th  class="text-center">Sl No</th>
                        <th class="text-center">Group Name</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Action</th>
                      </tr>
                    </thread>
                    <tbody>
                     <tr>
                       <td class="text-center">1</td>
                       <td class="text-center">Cashier</td>
                       <td class="text-center"><span class="badge badge-pill badge-success">Active</span></td>
                       <td  class="noExport text-center">
                         <div class="btn-group">
                           <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52" aria-expanded="false" style="margin-left:-20px;">
                             <i class="fas fa-bars"></i>
                           </button>
                           <div class="dropdown-menu" role="menu">
                             <a href="#" class="dropdown-item">Edit</a>
                             <a href="#" class="dropdown-item">Delete</a>
                           </div>
                         </div>
                       </td>
                     </tr>
                      <tr>
                        <td class="text-center">2</td>
                        <td class="text-center">Accountant</td>
                        <td class="text-center"><span class="badge badge-pill badge-success">Active</span></td>
                        <td  class="noExport text-center">
                          <div class="btn-group">
                            <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52" aria-expanded="false" style="margin-left:-20px;">
                              <i class="fas fa-bars"></i>
                            </button>
                            <div class="dropdown-menu" role="menu">
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