<?php include("header.php");
include'config.php';

$sql = "SELECT * FROM tbl_booking  WHERE CustomerID='$_SESSION[CustomerID]'";;
$result = $conn->query($sql);
?>
<script>
    /* core styles for table */

.table{
  width: 100%;
  border-spacing: 0;
  border-collapse: collapse;
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .12), 0 1px 2px 0 rgba(0, 0, 0, .24);
  background-color: var(--tableBgColor, #fff);
}

.table__thead{
  background-color: var(--tableTitleBgColor);
  color: var(--tableTitleTextColor);
}

.table__mobile-caption{
  display: none;
}

.table__td, .table__th{
  padding: var(--tableCellPadding, 20px);
  box-sizing: border-box;
}

@media screen and (min-width: 769px){

  .table__tr:hover{
    background-color: var(--tableRowBgColorHover);
  }

  .table__td:first-child, .table__th:first-child{
    width: 30%;
    text-align: left;
  }

  .table__td, .table__th{
    text-align: center;
  }
}

@media screen and (max-width: 768px){

  .table, .table__thead, .table__tbody, .table__tr{
    display: block;
  }

  .table__td{
    display: flex;
  }

  .table__head{
    display: none;
  }

  .table__mobile-title{
    background-color: var(--tableTitleBgColor);
    color: var(--tableTitleTextColor);
  }

  .table__td{
    border-bottom: 1px solid var(--tableSeparatorColor);
  }

  .table__td:last-of-type{
    border-bottom: none;
  }

  .table__mobile-caption, .table__value{
    display: block;
    width: 50%;
    box-sizing: border-box;
  }

  .table__mobile-caption{
    padding-right: 2%;
  }
}

/* demo styles for table */

.table{
  --tableCellPadding: 2rem;
  --tableTitleBgColor: #5668ca;
  --tableTitleTextColor: #fff;
  --tableRowBgColorHover: #f0f0f0;
  --tableSeparatorColor: #eee;
}

/*
* demo page
*/

@media screen and (min-width: 768px){

  html{
    font-size: 62.5%;
  }
}

@media screen and (max-width: 767px){

  html{
    font-size: 50%;
  }
}

body{
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Open Sans", "Ubuntu", "Fira Sans", "Helvetica Neue", sans-serif;
  font-size: 1.4rem;
  background-color: #f0f0f0;
  color: #222;
  margin: 0;
  -webkit-overflow-scrolling: touch;   
}

a{
  text-decoration: none;
  color: #5668ca;
}

a:hover, a:focus{
  text-decoration: underline;
}

.page{
  min-height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content: space-around;
}

.page__demo{
  flex-grow: 1;
}

.main-container{
  padding-left: 1rem;
  padding-right: 1rem;
  max-width: 1000px;
  
  margin-right: auto;
  margin-left: auto;
}

.page__container{
  margin-top: 4rem;
  margin-bottom: 4rem;
}

.footer{
  padding-top: 1rem;
  padding-bottom: 1rem;
  text-align: center;  
  font-size: 1.4rem;
}

@media screen and (min-width: 641px){

  .footer__container{
    display: flex;
    justify-content: space-between;
  }

  .melnik909{
    margin-left: 2rem;
  }  
}

@media screen and (max-width: 640px){

  .melnik909{
    display: none;
  } 
}
    </script>

 <!-- Page Header Start -->
 <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2><b>BOOKING HISTORY</b></h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
<?phpif ($result){ ?>
 
 <div class="gallery"> 
   <div class="service">
     <div class="container">
	   <div class="row">
	   
 <?php while($row = $result->fetch_assoc()){ ?>


<div class="page">
  <div class="page__demo">
    <div class="main-container page__container">
      <table class="table">
        <thead class="table__thead">
          <tr class="table__head">
 
            <th class="table__th">Booking.ID</th>
            <th class="table__th">Service.Type</th>
            <th class="table__th">Booking.Price</th>
            <th class="table__th">Residence.Type</th>
            <th class="table__th">Bedroom.Number</th>
            <th class="table__th">Bathroom.Number</th>
            <th class="table__th">Extra.Service</th>
            <th class="table__th">Additional.Notes</th>
            <th class="table__th">Start.Time</th>
            <th class="table__th">Start.Date</th>

    
          </tr>
        </thead>
        <tbody class="table__tbody">
          <tr class="table__tr">
            <td class="table__td table__mobile-title">
              <span><?php echo ($row['booking_id']) ; ?></span>
            </td>
            <td class="table__td table__mobile-title">
              <span><?php echo ($row['service_type']); ?></span>
            </td>
            <td class="table__td table__mobile-title">
              <span><?php echo ($row['booking_price']); ?></span>
            </td>
            <td class="table__td table__mobile-title">
              <span><?php echo ($row['residence_type']); ?></span>
            </td>
            <td class="table__td table__mobile-title">
              <span><?php echo ($row['bedroom_num']); ?></span>
            </td>
            <td class="table__td table__mobile-title">
              <span><?php echo ($row['bathroom_num']); ?></span>
            </td>
            <td class="table__td table__mobile-title">
              <span><?php echo ($row['extra_service']); ?></span>
            </td>
            <td class="table__td table__mobile-title">
              <span><?php echo ($row['additional_notes']); ?></span>
            </td>
            <td class="table__td table__mobile-title">
              <span><?php echo ($row['start_time']); ?></span>
            </td>
            <td class="table__td table__mobile-title">
              <span><?php echo ($row['start_date']); ?></span>
            </td>
          </tr>
        
        </tbody>
      </table>
    </div>
  </div>

</div>
        
                    
						
						
						
    
 <?php } ?>
      </div>
    </div>
  </div>
</div>

<?php
$conn->close();
  ?>

 
</body>

</html>