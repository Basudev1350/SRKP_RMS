<template>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-info">Manage Users</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Company Info</li>
              <li class="breadcrumb-item active">Users</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
     <div class="row">
         <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                <h5 class="m-0 text-info text-left"> Fill up this form to add a user </h5>
                </div>
                <div class="card-body">
                  <form action="">
                   <div class="row">
                       <div class="col-md-6">
                         <div class="form-group">
                             <label>Groups</label>
                             <select class="form-control form-control-sm">
                                 <option selected=""> -- Select User Group -- </option>
                                 <option value="cashier">Cashier</option>
                                 <option value="accountant">Accountant</option>
                             </select>
                         </div>
                       </div>
                       <div class="col-md-6">
                        <div class="form-group">
                            <label>Groups</label>
                            <select class="form-control form-control-sm">
                                <option selected=""> -- Select Store -- </option>
                                <option value="2FF-1">2FF-1</option>
                            </select>
                        </div>
                       </div>
                   </div>
                   <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                          <label>User Id</label>
                          <input type="text" class="form-control form-control-sm" placeholder="Enter User Id">
                      </div>
                    </div>
                    <div class="col-md-6">
                     <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control form-control-sm" placeholder="Enter User Name">
                     </div>
                    </div>
                   </div>
                   <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                          <label>Phone Number</label>
                          <input type="text" class="form-control form-control-sm" placeholder="Type Phone Number">
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Gender</label>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="radio1">
                              <label class="form-check-label">Male</label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="radio1">
                              <label class="form-check-label">Female</label>
                            </div>
                          </div>
                    </div>
                   </div>
                   <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                          <label>Password</label>
                          <input type="password" class="form-control form-control-sm" placeholder="Enter Password">
                      </div>
                    </div>
                    <div class="col-md-6">
                        <label>Confirm Password</label>
                        <input type="text" class="form-control form-control-sm" placeholder="Confirm Password">
                   </div>
                   </div>
                   <div class="form-group">
                       <input type="submit" class="btn btn-info" value="Add User +">
                   </div>
                  </form>
                </div>
            </div>
         </div>
         <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <h5 class="m-0 text-info text-left"> Users list </h5>
                </div>
                <div class="card-body">
                  <div class="row">
                      <div class="col-md-3 offset-md-9">
                          <input type="text" class="form-control form-control-sm mb-2" placeholder="Search By Typing Here" id="myInput" onkeyup="myFunction()">
                      </div>
                  </div>
                  <table class="table table-bordered" id="myTable">
                    <thread>
                      <tr>
                        <th  class="text-center">Sl No</th>
                        <th class="text-center">Group</th>
                        <th class="text-center">Store</th>
                        <th class="text-center">Username</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Ph No</th>
                        <th class="text-center">Action</th>
                      </tr>
                    </thread>
                    <tbody>
                     <tr>
                       <td class="text-center">1</td>
                       <td class="text-center">Cashier</td>
                       <td class="text-center">2FF-1</td>
                       <td class="text-center">cashier</td>
                       <td class="text-center">Employee</td>
                       <td class="text-center">1234567890</td>
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
                     <tr>
                        <td class="text-center">2</td>
                        <td class="text-center">Cashier1</td>
                        <td class="text-center">2FF-1</td>
                        <td class="text-center">cashier1</td>
                        <td class="text-center">Employee1</td>
                        <td class="text-center">123456780</td>
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