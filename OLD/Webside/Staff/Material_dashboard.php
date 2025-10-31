<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Smile & Sunsine Toy</title>


  <style>
    body{
      margin: 0 ;
    }
    .header{
      overflow: hidden;
      background-color: antiquewhite;
      font-size: 30PX;
      padding: 12px 15px;


    }

    .titleName{
      float: left;
      display: inline;

    }
    
    .titleName a{
      text-decoration: none;
      color: black;
    }

    .header .right{
      float: right;
    }

    .header .right a{
      text-decoration: none;
      color: black;

    }

    .button {
      background-color: azure;
      border: 1px solid #ccc; 
      text-align: center;
      display: inline-block; 
      border-radius: 5px;
     
    }

    .button:hover {
      background-color: #e0f7fa; 
    }
    /* .container {
        display: grid;
        grid-template-columns: 2fr 8fr  ;
        grid-template-rows: auto;
        background-color: rgb(255, 255, 255);
       
   
    }
    .container div {
        background-color: #f1f1f1;
        border: 1px solid black;
        padding: 10px;
        font-size: 30px;
        text-align: center;
    } */
    
    .navbar {
        display: flex;
        justify-content: center;
        background-color: #4e4d4d;
        padding: 10px;
    }
    .navbar a {
        color: white;
        text-decoration: none;
        padding: 14px 20px;
        text-align: center;
    }

    .navbar a:hover {
        background-color: #ddd;
        color: black;
    }



    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    table, th, td {
        border: 1px solid black;
    }
    th, td {
        padding: 15px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
    }  
   
    .insert_button {
        text-align: right;
        margin-top: 20px;
        margin-right: 100px;
      }





      dialog {
            padding: 20px;
            border-radius: 10px;
            border: 10px solid #ccc;
            width: 400px;
        }


        dialog::backdrop {
            background: rgba(0, 0, 0, 0.4);
        }


        .form-group {
          margin-bottom: 15px;
          margin-right: 15px;
        }


        .form-group label {
            display: block;
            margin-bottom: 5px;
        }


        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }


        dialog button {
            background-color: #e4ce6e;
            color: rgb(0, 0, 0);
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }


        dialog button:hover {
            background-color: #e4ce6e;
        }
  </style>


</head>
<body>

<div class="header">
  <div class="titleName"><a href="./index.html">  Smile & Sunsine Toy</a></div>

  <div class="right">
    <a href="#" class="button">Logout</a>
  </div>

</div>


<div>
    <div class="navbar">
      <a href="Main_dashboard.html">Home</a>
      <a href="Product_dashboard.html">Product Dashboard</a>
      <a href="Material_dashboard.html">Material Dashboard</a>
      <a href="Order_dashboard.html">Order Dashboard</a>
      <a href="Report_dashboard.html">Report Dashboard</a>
    </div>
</div>





<div>
  <table>
     
      <tr>
          <th> ID</th>
          <th> Image</th>
          <th> Name</th>
          <th> Physical Quantity</th>
          <th> Reserved Quantity</th>
          <th> Unit </th>
          <th> Re-order level </th>
          <th></th>
        </tr>


      <tr>
        <th>001</th>
        <th><img src="/Staff/img/material/1.jpg" alt="Material Image" width="100" height="100"></th>
        <th>Steel</th>
        <th>100</th>
        <th>30</th>
        <th>KG</th>
        <th>low</th>
        <th>
          <button class="button update_Button"> Update</button>
          <button class="button delete_button">Delete</button>
        </th>
      </tr>
      <tr>
        <th>002</th>
        <th><img src="/Staff/img/material/2.jpg" alt="Material Image" width="100" height="100"></th>
        <th>cotton</th>
        <th>200</th>
        <th>100</th>
        <th>KG</th>
        <th>Low</th>
        <th>
          <button class="button update_Button"> Update</button>
          <button class="button delete_button">Delete</button>


        </th>
      </tr>
      <tr>
        <th>003</th>
        <th><img src="/Staff/img/material/3.jpg" alt="Material Image" width="100" height="100"></th>
        <th>wood</th>
        <th>3000</th>
        <th>100</th>
        <th>KG</th>
        <th>Low</th>
        <th>
          <button class="button update_Button"> Update</button>
          <button class="button delete_button">Delete</button>
       
        </th>
      </tr>
      <tr>
        <th>004</th>
        <th><img src="/Staff/img/material/4.jpg" alt="Material Image" width="100" height="100"></th>
        <th>flour</th>
        <th>30000</th>
        <th>100</th>
        <th>KG</th>
        <th>Low</th>
        <th>
          <button class="button update_Button"> Update</button>
          <button class="button delete_button">Delete</button>
        </th>
      </tr>
      <tr>
        <th>005</th>
        <th><img src="/Staff/img/material/5.jpg" alt="Material Image"width="100" height="100"></th>
        <th>screw</th>
        <th>50000</th>
        <th>10000</th>
        <th>unit</th>
        <th>High</th>
        <th>
          <button class="button update_Button"> Update</button>
          <button class="button delete_button">Delete</button></th>
        </tr>


  </table>
 
<div class="insert_button">
  <button class="button insert_button" >Insert product</button>
</div>


<dialog id="productDialog">
  <form id="productForm">
      <div class="form-group">
          <label for="Material_name">Material Name:</label>
          <input type="text" id="Material_name" name="Material_name" required>
      </div>
      <div class="form-group">
          <label for="Material_PhysicalQuantity">Physical Quantity:</label>
          <input type="number" id="Physical_Quantity" name="Physical_Quantity" step="0.01" required>
      </div>
      <div class="form-group">
          <label for="Reserved_ReservedQuantity">Reserved Quantity:</label>
          <input type="number" id="Reserved_Quantity" name="Reserved_Quantity" required>
      </div>
      <div class="form-group">
          <label for="product_Unit">Unit:</label>
          <input type="text" id="product_description" name="product_description" required>
      </div>
      <div class="form-group">
        <label for="product_material">Product Material:</label>
        <input type="text" id="product_material" name="product_material" required>  
    </div>
      <div class="form-group">
          <label for="product_image">Product Image:</label>
          <input type="file" id="product_image" name="product_image" accept="image/*">
      </div>


     
      <button type="submit">Submit</button>
      <button type="button" id="cancelButton">Cancel</button>
  </form>
</dialog>


<script>
  const dialog = document.querySelector('#productDialog');
  const showDialogButton = document.querySelector('.insert_button ');
  const cancelButton = document.querySelector('#cancelButton');
  const form = document.querySelector('#productForm');


  showDialogButton.addEventListener('click', (e) => {
      e.preventDefault();
      dialog.showModal();
  });


  cancelButton.addEventListener('click', () => {
      dialog.close();
      form.reset();
  });


  form.addEventListener('submit', (e) => {
      e.preventDefault();

      console.log('Form submitted with values:', {
          name: form.product_name.value,
          price: form.product_price.value,
          quantity: form.product_quantity.value,
          description: form.product_description.value
      });
      dialog.close();
      form.reset();
  });



  dialog.addEventListener('click', (e) => {
      if (e.target === dialog) {
          dialog.close();
          form.reset();
      }
  });
</script>


<div>
  <dialog  id = "deleteProductDialog">
    <form id="deleteProductForm">
        <p>Are you sure you want to delete this product?</p>
 
        <button id="confirmDelete">Yes</button>
        <button id="cancelDelete">No</button>
    </form>


  </dialog>
</div>


<script>
  const delete_dialog = document.querySelector('#deleteProductDialog');
  const showDeleteConfirm = document.querySelectorAll('.delete_button');
  const close_yesButton = document.querySelector('#confirmDelete');
  const close_noButton = document.querySelector('#cancelDelete');




  showDeleteConfirm.forEach(button => {
            button.addEventListener('click', () => {
              delete_dialog.showModal();
            });
        });

  close_yesButton.addEventListener('click', () => {
      delete_dialog.close();
      window.alert('Product deleted successfully!');
  });

  close_noButton.addEventListener('click', () => {
      delete_dialog.close();
  });


</script>

<div>
  <dialog id="updateProductDialog">
    <form id="UpdataProduct_Form">
      <div class="form-group">
          <label for="product_name">Material Name:</label>
          <input type="text" id="product_name" name="product_name" required>
      </div>
      <div class="form-group">
          <label for="product_price">	Physical Quantity:</label>
          <input type="number" id="product_price" name="product_price" step="0.01" required>
      </div>
      <div class="form-group">
          <label for="product_quantity">Reserved Quantity:</label>
          <input type="number" id="product_quantity" name="product_quantity" required>
      </div>
      <div class="form-group">
          <label for="product_description">Unit:</label>
          <input type="text" id="product_description" name="product_description" required>
      </div>
      <div class="form-group">
        <label for="product_material">Re-order level:</label>
        <input type="text" id="product_material" name="product_material" required>  
    </div>
      <div class="form-group">
          <label for="product_image">Product Image:</label>
          <input type="file" id="product_image" name="product_image" accept="image/*">
      </div>
 
      <button type="submit" id ="confirmUpdate">Submit</button>
      <button type="button" id="cancelUpdate">Cancel</button>
  </form>
  </dialog>
</div>

<script>
  const update_dialog = document.querySelector('#updateProductDialog');
  const showUpdateConfirm = document.querySelectorAll('.update_Button');
  const close_update_yesButton = document.querySelector('#confirmUpdate');
  const close_update_noButton = document.querySelector('#cancelUpdate');
  const updateForm = document.querySelector('#UpdataProduct_Form');

    showUpdateConfirm.forEach(button => {
            button.addEventListener('click', () => {
              update_dialog.showModal();
            });
        });

  close_update_yesButton.addEventListener('click', () => {
      update_dialog.close();
      updateForm.reset();
      window.alert('Product updated successfully!');
  });

  close_update_noButton.addEventListener('click', () => {
      update_dialog.close();
      updateForm.reset();
  });

</script>


<!-- <div>
  <div class="footer" style="background-color: antiquewhite; padding: 10px; text-align: center; font-size: 20px;">
    &copy; 2025 Simle & Sunsine Toy. All rights reserved.
  </div>    
</div> -->


</body>
</html>




