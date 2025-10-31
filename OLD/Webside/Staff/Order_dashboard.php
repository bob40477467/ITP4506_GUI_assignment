<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Smile & Sunshine Toy</title>

  <style>
    body {
      margin: 0;
    }
    .header {
      overflow: hidden;
      background-color: antiquewhite;
      font-size: 30px;
      padding: 12px 15px;
    }
    .titleName {
      float: left;
      display: inline;
    }
    .titleName a {
      text-decoration: none;
      color: black;
    }
    .header .right {
      float: right;
      text-decoration: none;
    }
    .header .right a {
      text-decoration: none;
      color: black;
    }
    .button {
      background-color: azure;
      border: 1px solid #ccc;
      padding: 1px 15px;
      text-align: center;
      display: inline-block;
      border-radius: 5px;
    }
    .button:hover {
      background-color: #e0f7fa;
    }
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


    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
    }
    .modal-content {
      background-color: #fff;
      margin: 5% auto;
      padding: 20px;
      border: 5px solid #888;
      width: 80%;
      max-width: 600px;
      border-radius: 5px;
      position: relative;
    }
    .close-btn {
      background-color: #dc3545;
      color: white;
      border: none;
      padding: 5px 10px;
      border-radius: 3px;
      cursor: pointer;
      position: absolute;
      top: 10px;
      right: 10px;
    }
    .close-btn:hover {
      background-color: #c82333;
    }
    .modal-content h2 {
      margin-top: 0;
    }
    .modal-content p {
      margin: 5px 0;
    }
    .modal-content img {
      max-width: 100px;
      height: auto;
      margin-top: 5px;
    }
    .low-stock {
      color: #dc3545;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="header">
    <div class="titleName"><a href="./index.html">Smile & Sunshine Toy</a></div>
    <div class="right">
      <a href="#" class="button">Logout</a>
    </div>
  </div>

  <div class="navbar">
    <a href="Main_dashboard.html">Home</a>
    <a href="Product_dashboard.html">Product Dashboard</a>
    <a href="Material_dashboard.html">Material Dashboard</a>
    <a href="Order_dashboard.html">Order Dashboard</a>
    <a href="Report_dashboard.html">Report Dashboard</a>
  </div>

  <div>
    <table>
      <tr>
        <th>ID</th>
        <th>Customer Name</th>
        <th>Product ID</th>
        <th>Quantity</th>
        <th>Total Price</th>
        <th>Status</th>
        <th></th>
      </tr>
      <tr>
        <td>1</td>
        <td>Chane da man</td>
        <td>Toy Car</td>
        <td>2</td>
        <td>$20.00</td>
        <td>Accept</td>
        <td><button class="button" onclick="showDetails(1)">View</button></td>
      </tr>
      <tr>
        <td>2</td>
        <td>Chane siu man</td>
        <td>Toy Train</td>
        <td>1</td>
        <td>$15.00</td>
        <td>Accept</td>
        <td><button class="button" onclick="showDetails(2)">View</button></td>
      </tr>
    </table>
  </div>

  
  <div id="orderModal" class="modal">
    <div class="modal-content">
      <button class="close-btn" onclick="closeModal()">Close</button>
      <h2>Order Details</h2>
      <p><strong>Order ID:</strong> <span id="detailOrderId"></span></p>
      <p><strong>Order Date:</strong> <span id="detailOrderDate"></span></p>
      <p><strong>Product ID:</strong> <span id="detailProductId"></span></p>
      <p><strong>Product Image:</strong><br><img id="detailProductImage" src="" alt="Product Image"></p>
      <p><strong>Order Quantity:</strong> <span id="detailOrderQuantity"></span></p>
      <p><strong>Total Order Amount:</strong> <span id="detailTotalOrderAmount"></span></p>
      <p><strong>Customer’s Contact Name:</strong> <span id="detailContactName"></span></p>
      <p><strong>Customer’s Contact Number:</strong> <span id="detailContactNumber"></span></p>
      <p><strong>Delivery Address:</strong> <span id="detailDeliveryAddress"></span></p>
      <p><strong>Delivery Date:</strong> <span id="detailDeliveryDate"></span></p>
      <p><strong>Order Status:</strong> <span id="detailOrderStatus"></span></p>
      <p><strong>Material Name:</strong> <span id="detailMaterialName"></span></p>
      <p><strong>Used Materials in the Order:</strong> <span id="detailUsedMaterials"></span></p>
      <p><strong>Material Physical Quantity:</strong> <span id="detailMaterialPhysicalQty"></span></p>
      <p><strong>Material Available Quantity:</strong> <span id="detailMaterialAvailableQty"></span></p>
      <p><strong>Unit of the Material:</strong> <span id="detailMaterialUnit"></span></p>
      <p><strong>Material Low Stock Alert:</strong> <span id="detailLowStockAlert"></span></p>
    </div>
  </div>

  <script>

    const orders = {
      1: {
        orderId: "ORD001",
        orderDate: "2025-03-30",
        productId: "Toy Car",
        productImage: "/Staff/img/product/1.jpg",
        orderQuantity: "2",
        totalOrderAmount: "$200.00",
        contactName: "Chane da man",
        contactNumber: "3333 4444",
        deliveryAddress: "yyyyyyyyyyyyyy",
        deliveryDate: "2025-04-02",
        orderStatus: "Shipped",
        materialName: "Plastic",
        usedMaterials: "Plastic (4 units), Rubber (2 units)",
        materialPhysicalQty: "50",
        materialAvailableQty: "46",
        materialUnit: "units",
        materialLowStockAlert: "10"
      },
      2: {
        orderId: "ORD002",
        orderDate: "2025-03-31",
        productId: "Toy airplane",
        productImage: "/Staff/img/product/2.jpg",
        orderQuantity: "1",
        totalOrderAmount: "$100.00",
        contactName: "Chane siu man",
        contactNumber: "1111 2222",
        deliveryAddress: "xxxxxxxxxxxxxxxx",
        deliveryDate: "2025-04-05",
        orderStatus: "Processing",
        materialName: "Wood",
        usedMaterials: "Wood (3 units), Metal (1 unit)",
        materialPhysicalQty: "30",
        materialAvailableQty: "8",
        materialUnit: "units",
        materialLowStockAlert: "10"
      }
    };

    function showDetails(orderId) {
      const order = orders[orderId];
      if (order) {
        // Populate all 17 fields
        document.getElementById("detailOrderId").textContent = order.orderId;
        document.getElementById("detailOrderDate").textContent = order.orderDate;
        document.getElementById("detailProductId").textContent = order.productId;
        document.getElementById("detailProductImage").src = order.productImage;
        document.getElementById("detailOrderQuantity").textContent = order.orderQuantity;
        document.getElementById("detailTotalOrderAmount").textContent = order.totalOrderAmount;
        document.getElementById("detailContactName").textContent = order.contactName;
        document.getElementById("detailContactNumber").textContent = order.contactNumber;
        document.getElementById("detailDeliveryAddress").textContent = order.deliveryAddress;
        document.getElementById("detailDeliveryDate").textContent = order.deliveryDate;
        document.getElementById("detailOrderStatus").textContent = order.orderStatus;
        document.getElementById("detailMaterialName").textContent = order.materialName;
        document.getElementById("detailUsedMaterials").textContent = order.usedMaterials;
        document.getElementById("detailMaterialPhysicalQty").textContent = order.materialPhysicalQty;
        document.getElementById("detailMaterialAvailableQty").textContent = order.materialAvailableQty;
        document.getElementById("detailMaterialUnit").textContent = order.materialUnit;
        document.getElementById("detailLowStockAlert").textContent = order.materialLowStockAlert;

        // Highlight low stock if applicable
        const available = parseInt(order.materialAvailableQty);
        const alertThreshold = parseInt(order.materialLowStockAlert);
        const availableSpan = document.getElementById("detailMaterialAvailableQty");
        availableSpan.className = (available <= alertThreshold) ? "low-stock" : "";

        // Show the modal
        document.getElementById("orderModal").style.display = "block";
      }
    }

    function closeModal() {
      document.getElementById("orderModal").style.display = "none";
    }

    // Close modal when clicking outside of it
    window.onclick = function(event) {
      const modal = document.getElementById("orderModal");
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>
</body>
</html>