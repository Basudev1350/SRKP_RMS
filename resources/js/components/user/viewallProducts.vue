<template>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-info">All Products</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Products</li>
              <li class="breadcrumb-item active">View Products</li>
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
          <h5 class="m-0 text-info text-left">Category: Sandwich</h5>
          </div>
          <div class="card-body">
           <table class="table table-bordered">
             <thread>
               <tr>
                 <th>Product Name</th>
                 <th>Half</th>
                 <th>Full</th>
               </tr>
             </thread>
             <tbody>
               <tr>
                 <td>Veg Cheese Sandwich</td>
                 <td>-</td>
                 <td>60</td>
               </tr>
               <tr>
                <td>Paneer Cheese Sandwich</td>
                <td>-</td>
                <td>70</td>
              </tr>
              <tr>
                <td>Chicken Sandwich</td>
                <td>-</td>
                <td>90</td>
              </tr>
             </tbody>
           </table>
          </div>
          </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
          <h5 class="m-0 text-info text-left">Category: Rooti / Naan</h5>
          </div>
          <div class="card-body">
           <table class="table table-bordered">
             <thread>
               <tr>
                <th>Product Name</th>
                 <th>Half</th>
                 <th>Full</th>
               </tr>
             </thread>
             <tbody>
              <tr>
                <td>Tandoori Rooti</td>
                <td>-</td>
                <td>10</td>
              </tr>
               <tr>
                 <td>Butter Tandoori Rooti</td>
                 <td>-</td>
                 <td>15</td>
               </tr>
               <tr>
                <td>Lacchha Parota</td>
                <td>-</td>
                <td>25</td>
              </tr>
             </tbody>
           </table>
          </div>
          </div>
      </div>
     </div>
     <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
          <h5 class="m-0 text-info text-left">Category: Salad</h5>
          </div>
          <div class="card-body">
           <table class="table table-bordered">
             <thread>
               <tr>
                 <th>Product Name</th>
                 <th>Half</th>
                 <th>Full</th>
               </tr>
             </thread>
             <tbody>
               <tr>
                 <td>Green Salad</td>
                 <td>-</td>
                 <td>40</td>
               </tr>
               <tr>
                <td>Onion Salad</td>
                <td>-</td>
                <td>50</td>
              </tr>
              <tr>
                <td>Fruit Salad</td>
                <td>-</td>
                <td>60</td>
              </tr>
             </tbody>
           </table>
          </div>
          </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
          <h5 class="m-0 text-info text-left">Category: Chinese(Non Veg)</h5>
          </div>
          <div class="card-body">
           <table class="table table-bordered">
             <thread>
               <tr>
                <th>Product Name</th>
                 <th>Half</th>
                 <th>Full</th>
               </tr>
             </thread>
             <tbody>
              <tr>
                <td>Chilli Chicken (4Pcs/8Pcs)</td>
                <td>110</td>
                <td>160</td>
              </tr>
               <tr>
                 <td>Chicken Manchurian(4Pcs/8Pcs)</td>
                 <td>170</td>
                 <td>180</td>
               </tr>
               <tr>
                <td>Chilli Chicken With Bone(4Pcs/8Pcs)</td>
                <td>110</td>
                <td>150</td>
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