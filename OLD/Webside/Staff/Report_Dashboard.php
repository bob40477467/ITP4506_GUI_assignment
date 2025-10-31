<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Smile & Sunshine Toy - Report Dashboard</title>

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
      padding: 5px 15px;
      text-align: center;
      display: inline-block;
      border-radius: 5px;
      cursor: pointer;
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

    /* Modal Styles */
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
      border: 1px solid #888;
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
        <th>Order Report</th>
        <th></th>
      </tr>
      <tr>
        <td>Order ID:001 Report</td>
        <td><button class="viewReport_Button button" onclick="showReport('001')">View</button></td>
      </tr>
    </table>
    <table>
      <tr>
        <th>Product Report</th>
      </tr>
    </table>
    <table>
      <tr>
        <th>Material Report</th>
      </tr>
    </table>
  </div>

  <!-- Modal Dialog for Report -->
  <div id="reportModal" class="modal">
    <div class="modal-content">
      <button class="close-btn" onclick="closeModal()">Close</button>
      <h2>Order Report</h2>
      <p><strong>Order ID:</strong> <span id="reportOrderId"></span></p>
      <p><strong>Product Name:</strong> <span id="reportProductName"></span></p>
      <p><strong>Product Image:</strong><br><img id="reportProductImage" src="" alt="Product Image"></p>
      <p><strong>Total Number for Each Order Item:</strong> <span id="reportTotalQuantity"></span></p>
      <p><strong>Total Sales Amount ($):</strong> <span id="reportTotalSales"></span></p>
    </div>
  </div>

  <script>
    // Sample report data
    const reports = {
      '001': {
        orderId: "001",
        productName: "Toy Car",
        productImage: "./img/product/1.jpg",
        totalQuantity: "5", // Total quantity ordered for this item across all orders
        totalSales: "$50.00" // Price * Total Quantity (e.g., $10 * 5)
      }
      // Add more report data here as needed
    };

    function showReport(orderId) {
      const report = reports[orderId];
      if (report) {
        // Populate the report fields
        document.getElementById("reportOrderId").textContent = report.orderId;
        document.getElementById("reportProductName").textContent = report.productName;
        document.getElementById("reportProductImage").src = report.productImage;
        document.getElementById("reportTotalQuantity").textContent = report.totalQuantity;
        document.getElementById("reportTotalSales").textContent = report.totalSales;

        // Show the modal
        document.getElementById("reportModal").style.display = "block";
      }
    }

    function closeModal() {
      document.getElementById("reportModal").style.display = "none";
    }

    // Close modal when clicking outside of it
    window.onclick = function(event) {
      const modal = document.getElementById("reportModal");
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>
</body>
</html>