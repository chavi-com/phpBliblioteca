<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Biblioteca</title>
        
        <meta charset="utf-8" />
        
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css" />
        <link rel="stylesheet" href="assets/js/jquery-ui/jquery-ui.min.css" />
        <link rel="stylesheet" href="assets/css/style.css" />
        <link href="plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        
        <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
         <script src="plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
          <style>
   body
   {
    
    margin:0;
    padding:0;
    background-image: url(https://www.iberbibliotecas.org/wp-content/uploads/2021/01/CRPERMED_interactura_con_comunidad.jpg);
    background-size: 100%;
    
  }
   .box
   {
    width:1270px;
    padding:20px;
    background:rgba(103, 225, 172, 0.832);/*#f7ffb2;*/
   /* border:1px solid #ccc;*/
    border-radius:5px;
    margin-top:25px;
    box-shadow:2px 1px 8px  1px #FE4164;
    border: 2px solid #FE4164;
   }
   h1{
    text-align: center;
    color:blue;
    text-shadow: 5px 3px 2px #FE4164;
   }
   .btn
{
  color:while ;
	text-decoration: none;
	width: 100px;
	background: blue;
	padding: 4px;
	border-radius: 4px;
	margin-bottom: 10px;
	border: 1px solid #1f53c5;
	font-family: 'calibri';
	font-size: 18px;
	
}
.btn:hover
{
	color:#FE4164 ;
	text-decoration: none;
	width: 100px;
	background: #40f2fe;
	padding: 4px;
	border-radius: 4px;
	margin-bottom: 10px;
	border: 1px solid #1f53c5;
	font-family: 'calibri';
	font-size: 18px;
  box-shadow:2px 1px 4px  1px #40f2fe;
}
.btn-danger{
  color:black ;
	text-decoration: none;
	width: 100px;
	background: red;
	padding: 4px;
	border-radius: 4px;
	margin-bottom: 10px;
	border: 1px solid #1f53c5;
	font-family: 'calibri';
	font-size: 18px;

}
.btn-danger:hover{
  color:black ;
	text-decoration: none;
	width: 99px;
	background:#FE4164;
	padding: 4px;
	border-radius: 4px;
	margin-bottom: 10px;
	border: 1px solid #1f53c5;
	font-family: 'calibri';
	font-size: 18px;
  box-shadow:2px 1px 4px  1px  #FE4164;

}
.btn-primary{
  
  color:#FE4164 ;
	text-decoration: none;
	width: 100px;
	background: #06f119;
	padding: 4px;
	border-radius: 4px;
	margin-bottom: 10px;
	border: 1px solid #1f53c5;
	font-family: 'calibri';
	font-size: 18px;
  margin-top:40px;
  

}
.btn-primary:hover{
  
  color:#FE4164 ;
	text-decoration: none;
	width: 100px;
	background : #02f567;
	padding: 4px;
	border-radius: 4px;
	margin-bottom: 10px;
	border: 1px solid #1f53c5;
	font-family: 'calibri';
	font-size: 18px;
  box-shadow:2px 1px 4px  1px  #02f567;

}
.form-control{
  border:2px solid #FE4164;
  box-shadow: 2px 1px 4px 1px #FE4164;
  background:/*#eb91a247*/ #fe4164e4;
}
.col-sm-6{
  margin-left:20px;
  padding-top:-70px;
  width: 340px;
  height: 30px;
  font-size: 18px;
  color:blue;
  text-shadow: 2px 2px 1px #FE4164; 
  
}/*.page-header{
  background-tr
}*/
#frm-alumno{
  width: 500px;
  height: 700px;
  text-align: center;
  margin:auto;
}
.breadcrumb{
  text-align:center;
  color:blue;
}
.table-striped>tbody>tr:nth-of-type(odd) {
    background-color: rgb(225, 255, 242);
}
.odd:hover {
    background: rgba(122, 245, 192, 0.925);
}
tr:hover{
  background:rgba(122, 245, 192, 0.925)
}
.col-sm-7{
  margin:auto;
  text-align:center;
  width: 300px;
}
.col-sm-5{
  width: 455px;
}



  </style>
	</head>
    <body>
        
  <div class="container box">