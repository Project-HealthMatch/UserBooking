

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Datepicker</title>
    <link
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css"
      rel="stylesheet"
      id="bootstrap-css"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.css"
      rel="stylesheet"
      id="bootstrap-css"
    />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <style>






.show{

  width: 20%;
  height: 100%;
 border-radius: 25px;
  outline: none;
  border: none;
  background-image: linear-gradient(to right, #054969, #01b8d8, #003f58);
  background-size: 200%;
  font-size: 2rem;
  color: white;
  font-family: "Poppins", sans-serif;
  text-transform: uppercase;

  cursor: pointer;
  transition: 0.5s;
}
.show:hover {
  background-position: right;
}



/*       Forgot Password button FAF3DD  */

/*     Sign Up button  */





@media(max-width:800px)
{.submits {

  width: 50%;
  height:30%;
  color:white;
}

.table {
  border-collapse: separate;

  text-align: center;
 font-size: 1.5rem;
}


}




@media(max-width:800px){
  .dategrid{
  display: grid;
  grid-template-rows:1fr 1fr;
  grid-template-columns: 1fr ;
}
}


@media(min-width:800px)
{
  .box{

  border-radius:5px ;
  background-color: white;
width:72% ;
height: 100%;



}
}



    </style>


      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Datepicker</title>
      <link
        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css"
        rel="stylesheet"
        id="bootstrap-css"
      />
      <link
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.css"
        rel="stylesheet"
        id="bootstrap-css"
      />
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <style>
      .back{
        width: 600px;
        padding: 5rem;
        height: 700px;
        text-align:center;

        background-image: linear-gradient( rgb(255, 255, 255) 10%, rgb(204, 190, 240)100%);

        border-radius: 5px;
      }


            .title{
              color: white;
              font-size: 2rem;
              font-weight: 600;
            }
            .cardtitle{
              font-size: 1.3rem;

            }
            .viewbtn{
              display: block;
              width: 100px;
              height: 35px;
              border-radius: 25px;
              outline: none;
              border: none;
              background-image: linear-gradient(to right, #45a29e, #5bcadd, #3292be);
              background-size: 200%;
              font-size: 1.2rem;
              color: #fff;
              font-family: "Poppins", sans-serif;
              text-transform: uppercase;
              margin: 1rem 0;
              cursor: pointer;
              transition: 0.5s;
            }
            .viewbtn:hover {
              background-position: right;
            }

            .head{
             height:20%;
             width:100%;
             background-color: #bc94dc;
             color: white;
             padding: 0.5rem;
             text-align: center;
             font-size: 1.5rem;
            }

            .grid{
              display: grid;
              grid-template-columns: 1fr 1fr;
              grid-template-rows: 1fr;
            }
            .card {

              margin-bottom: 1rem;
              border-radius: 5px;
            }


            label{
              font-size: 1.2rem;
            }





            input[type="text"] {
              font-family: "Abel", sans-serif;

              border-radius: 5px 5px 5px 5px;

            margin:0;
              outline: none;
              border: none;
            background-color:rgba(255, 255, 255, 0.788);
              height: 5rem;
             margin-bottom: 1rem;
              transition: 0.2s linear;
             color:black;
              width:90%;
      font-size: 2rem;
            }

            @media(min-width:800px){
       #username{
         margin-left: 3rem;
          color:black;

      }
            }




      .submits {

        width: 20%;
        height: 70%;
       border-radius: 5px 5px 5px 5px;
        outline: none;
        border: none;
        background-image: linear-gradient(to right, #007e71, #86cedb, #1a0549);
        background-size: 200%;
        font-size: 2rem;
        color: white;
        font-family: "Poppins", sans-serif;
        text-transform: uppercase;
        margin: 1rem 0;
        cursor: pointer;
        transition: 0.5s;
      }
      .submits:hover {
        background-position: right;
      }


      .optionalbtn{

        width: 10%;
        height: 70%;
       border-radius: 25px;
        outline: none;
        border: none;
        background-image: linear-gradient(to right, #ffffff, #e8f4f7, #d4d4d4);
        background-size: 200%;
        font-size: 2rem;
        color: black;
        font-family: "Poppins", sans-serif;
        text-transform: uppercase;
        margin: 1rem 0;
        cursor: pointer;
        transition: 0.5s;
      }
      .optionalbtn:hover {
        background-position: right;
      }

      @media(max-width: 900px)
      {
        .optionalbtn{

        width: 30%;
      }

      }


      /*       Forgot Password button FAF3DD  */

      /*     Sign Up button  */

        input[type="email"] {
              background-color:rgba(255, 255, 255, 0.788);

              font-family: "Abel", sans-serif;

              outline: none;
              border: none;
              height: 5rem;
              width: 90%;
              border-radius: 5px 5px 5px 5px;
              transition: 0.2s linear;
               color:black;
      font-size: 2rem;
            }

        .headerdoctor {
              font-size: 2.1em;
              font-weight: 500;
              text-align: center;
              font-family: "Century Gothic", sans-serif;
              color:black;
            }

            .headerquestion
            {
              font-size: 1.5em;
              font-weight: 600;
              text-align: center;
              font-family: "Century Gothic", sans-serif;
              color:black;
            }

            .titleform
            {
              font-size: 2em;
              font-weight: 500;
              text-align: center;
              font-family: "Century Gothic", sans-serif;
              color:black;
            }

          body {

              background-attachment: fixed;
              background-repeat: no-repeat;
      background-color: rgb(232, 227, 245);
              font-family: "Vibur", cursive;
              /*   the main font */
              font-family: "Abel", sans-serif;

              /* background-image: linear-gradient(to top, #d9afd9 0%, #97d9e1 100%); */
            }




      .table {

        padding:2rem;
        border-collapse: separate;

        text-align: center;
       font-size: 2rem;
       height: 80%;
        color:black;
      }





      td {
       padding-left:3rem ;
        text-align: left;
      padding-right: 3rem;
      }


      .grid{
        display: grid;
        grid-template-columns:1fr 1fr 1fr 1fr ;
      padding-left: 10%;
      padding-right: 10%;
        grid-template-rows: 1fr 1fr 1fr 1fr 1fr 1fr;

      }
      .time{

        border-radius: 5px;
      font-size: 2rem;
        margin:0.5rem;
        color: rgb(34, 34, 34);
      text-align: center;
      height: 4rem;
      width: 90%;
      text-align: center;
      background-color:white;
      padding-top: 1rem;
       box-shadow: 2px 2px 3px #bc94dc;
        border: solid #bc94dc;
        border-width: 0.05rem;
        border-radius: 5px;

      }

      .time:hover{

        background-color: rgb(197, 191, 191);
      }


      @media(min-width:900px){
        .time{

        border-radius: 5px;
      font-size: 2rem;
        margin:0.5rem;
        color: rgb(34, 34, 34);

      height: 7rem;
      width: 80%;
      text-align: center;
      background-color:white;
      padding-top: 7%;
       box-shadow: 2px 2px 3px #bc94dc;
        border: solid #bc94dc;
        border-width: 0.05rem;
        border-radius: 5px;
      }
      }
      select{ background-color:rgba(255, 255, 255, 0.788);
      height:5rem;
      font-size: 1.5rem;
      border-radius:5px;
      width:80%;
      color:black;

      }

      @media(max-width:800px)
      {.submits {

        width: 50%;
        height:30%
      }
        .grid{
        display: grid;
        padding-left: 10%;
        padding-right: 10%;
        grid-template-columns:1fr  ;
        grid-template-rows:1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr  1fr 1fr 1fr 1fr 1fr 1fr  1fr 1fr 1fr 1fr 1fr 1fr  ;
      }
      .table {
        border-collapse: separate;

        text-align: center;
       font-size: 1.5rem;
      }
        input[type="email"] {
              background-color:rgba(255, 255, 255, 0.788);

              font-family: "Abel", sans-serif;


              outline: none;


                      height: 5rem;
              width: 100%;
              border-radius: 5px 5px 5px 5px;
              transition: 0.2s linear;
              font-size: 2rem;

               color:black;
            }


      }


        input[type="email"],input[type="text"]{
      width:90%;
       color:black;
       font-size: 2rem;
        }::placeholder{
          color:rgb(51, 51, 51);
          font-size: 2rem;
        }

        @media(min-width:800px){

        input[type="email"],input[type="text"],input[type="tel"]{
      width:40%;
      color:black;
      font-size: 2rem;
        }
        }
       table {

        border-radius: 5px;
         background-image: linear-gradient(-225deg, #a28ccc 0%, 	#bc94dc 80%);
       color: rgb(34, 34, 34);


      }

      td{

        font-size: 2rem;
      }

      th{
        font-size: 3rem;
        color:rgb(15, 7, 53);
      }

      .logo{
        width:30%;
        margin-top: 1rem;
        margin-left: 1rem;
      }



      @media(min-width:800px){
        .logo{
        width: 15%;
        margin-top: 3rem;
        margin-left: 3rem;
      }

      }

      .username{
        width: 80%;
      }

      .write,
      input[type="tel"] {
       font-family: "Abel", sans-serif;
              color:black;
              outline: none;
              border: none;
              background-color: rgba(255, 255, 255, 0.788);
              border-radius: 5px 5px 5px 5px;
              transition: 0.2s linear;
      font-size: 2rem;
              height:5rem;
              width: 40%;



      }::placeholder{
        font-size: 2rem;
      }

      .selectwidth{
        width:30%
      }

      @media(min-width:900px){
        .selectwidth{
        width:10%
      }

      }

      .datetext{

        width: 99%;

        border-style: solid;
        border-width: 0.05rem;
        border-radius: 5px;
         color:black;

      }
      .timezonetext{

        width: 100%;
      }


      @media(min-width:800px){

        .container{
        padding-left: 23%;
      }

        .datetext{

        width: 70%;
        border-style: solid;
        border-width: 0.1rem;
        border-radius: 5px;
         color:black;
         margin-left:0;
      }
      .timezonetext{

        width: 68%;
        padding-left: 33%;

      }
      }
      #initiallyHiddenBlock {
          display: none;
      }




      .head{
       height:20%;
       width:100%;
       background-color: #bc94dc;
       color: white;
       padding: 0.5rem;
       text-align: center;
       font-size: 1.5rem;
      }


      .card {
        width:650px;
        margin-bottom: 1rem;
        border-radius: 5px;
      }

      form{
        padding-left: 2rem;
        padding-right: 2rem;
        width:99%;
        font-weight:600;
      }

      label{
        font-size: 1.2rem;
      }

      input{
        color: grey;
        background-color: white;
        font-size: 1rem;
      }

      .back{
        width: 600px;
        padding: 5rem;
        height: 700px;
        text-align:center;

        background-image: linear-gradient( rgb(255, 255, 255) 10%, rgb(204, 190, 240)100%);

        border-radius: 5px;
      }
@media(min-width:900px){
     .date{
        width: 60%;
      }
      select{
        width:30%;
      }

}
      

          </style>




  </head>
  <body>
    <div style="text-align: left;">
<img src="logo.png" class="logo">
</div>
<h3 class="headerdoctor">
              Please select your preferred date for consultation:
            </h3>


           <div class="container">



	        	<form action="search.php" method="post" name ="send">
		            <div class="form-group">
		                <div class='input-group date' id='datepicker'>
		                    <input type='text' name='date'class="form-control" />
		                    <span class="input-group-addon" style="height: 5rem;">
		                        <span class="glyphicon glyphicon-calendar"></span>
		                    </span>
		                </div>
		            </div>



    </div>
    <div>
    <h3 class="headerdoctor">
              Please select your timezone:
            </h3>
<div style="text-align: center;">
<select name="timeZoneId">
	<option gmtAdjustment="GMT-12:00" useDaylightTime="0" value="International Date Line West (GMT-12:00)">International Date Line West (GMT-12:00) </option>
	<option  gmtAdjustment="GMT-11:00" useDaylightTime="0" value="Midway Island, Samoa (GMT-11:00)"> Midway Island, Samoa (GMT-11:00)</option>
	<option  gmtAdjustment="GMT-09:00" useDaylightTime="1" value="Alaska (GMT-09:00)"> </option>
	<option gmtAdjustment="GMT-08:00" useDaylightTime="1" value="Pacific Time (US & Canada)(GMT-08:00)"> Pacific Time (US & Canada)(GMT-08:00)</option>
	<option  gmtAdjustment="GMT-08:00" useDaylightTime="1" value="Tijuana, Baja California(GMT-08:00)"> Tijuana, Baja California(GMT-08:00)</option>
	<option  gmtAdjustment="GMT-07:00" useDaylightTime="0" value="Arizona(GMT-07:00"> Arizona(GMT-07:00)</option>
	<option  gmtAdjustment="GMT-07:00" useDaylightTime="1" value="Chihuahua, La Paz, Mazatlan(GMT-07:00)"> Chihuahua, La Paz, Mazatlan(GMT-07:00)</option>
	<option  gmtAdjustment="GMT-07:00" useDaylightTime="1" value="Mountain Time (US & Canada)(GMT-07:00)"> Mountain Time (US & Canada)(GMT-07:00)</option>
	<option gmtAdjustment="GMT-06:00" useDaylightTime="0" value="Central America(GMT-06:00)"> Central America(GMT-06:00)</option>
	<option  gmtAdjustment="GMT-06:00" useDaylightTime="1" value="Central Time (US & Canada)(GMT-06:00"> Central Time (US & Canada)(GMT-06:00)</option>
	<option  gmtAdjustment="GMT-06:00" useDaylightTime="1" value=" Guadalajara, Mexico City, Monterrey(GMT-06:00)"> Guadalajara, Mexico City, Monterrey(GMT-06:00)</option>
	<option  gmtAdjustment="GMT-06:00" useDaylightTime="0" value="Saskatchewan(GMT-06:00) ">Saskatchewan(GMT-06:00) </option>
	<option  gmtAdjustment="GMT-05:00" useDaylightTime="0" value="Bogota, Lima, Quito, Rio Branco(GMT-05:00"> Bogota, Lima, Quito, Rio Branco(GMT-05:00)</option>
	<option  gmtAdjustment="GMT-05:00" useDaylightTime="1" value="Eastern Time (US & Canada)(GMT-05:00)"> Eastern Time (US & Canada)(GMT-05:00)</option>
	<option  gmtAdjustment="GMT-05:00" useDaylightTime="1" value="Indiana (East)(GMT-05:00)">Indiana (East)(GMT-05:00) </option>
	<option  gmtAdjustment="GMT-04:00" useDaylightTime="1" value="Atlantic Time (Canada)(GMT-04:00)"> Atlantic Time (Canada)(GMT-04:00)</option>
	<option  gmtAdjustment="GMT-04:00" useDaylightTime="0" value="Caracas, La Paz(GMT-04:00)"> Caracas, La Paz(GMT-04:00)</option>
	<option  gmtAdjustment="GMT-04:00" useDaylightTime="0" value="Manaus(GMT-04:00)"> Manaus(GMT-04:00)</option>
	<option  gmtAdjustment="GMT-04:00" useDaylightTime="1" value="Santiago(GMT-04:00)"> Santiago(GMT-04:00)</option>
	<option  gmtAdjustment="GMT-03:30" useDaylightTime="1" value="Newfoundland(GMT-03:30)"> Newfoundland(GMT-03:30)</option>
	<option  gmtAdjustment="GMT-03:00" useDaylightTime="1" value="Brasilia(GMT-03:00)"> Brasilia(GMT-03:00)</option>
	<option  gmtAdjustment="GMT-03:00" useDaylightTime="0" value="Buenos Aires, Georgetown(GMT-03:00)">Buenos Aires, Georgetown(GMT-03:00) </option>
	<option  gmtAdjustment="GMT-03:00" useDaylightTime="1" value="Greenland(GMT-03:00)"> Greenland(GMT-03:00)</option>
	<option gmtAdjustment="GMT-03:00" useDaylightTime="1" value="Montevideo(GMT-03:00)"> Montevideo(GMT-03:00)</option>
	<option  gmtAdjustment="GMT-02:00" useDaylightTime="1" value="Mid-Atlantic(GMT-02:00)"> Mid-Atlantic(GMT-02:00)</option>
	<option gmtAdjustment="GMT-01:00" useDaylightTime="0" value="Cape Verde Is.,Azores(GMT-01:00)"> Cape Verde Is.,Azores(GMT-01:00)</option>
	<option gmtAdjustment="GMT+00:00" useDaylightTime="0" value="Casablanca, Monrovia, Reykjavik">Casablanca, Monrovia, Reykjavik</option>
	<option  gmtAdjustment="GMT+00:00" useDaylightTime="1" value="Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London(GMT+00:00)">Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London(GMT+00:00) </option>
	<option gmtAdjustment="GMT+01:00" useDaylightTime="1" value="Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna(GMT+01:00)"> Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna(GMT+01:00)</option>
	<option gmtAdjustment="GMT+01:00" useDaylightTime="1" value="Belgrade, Bratislava, Budapest, Ljubljana, Prague(GMT+01:00)">Belgrade, Bratislava, Budapest, Ljubljana, Prague(GMT+01:00)</option>
	<option  gmtAdjustment="GMT+01:00" useDaylightTime="1" value="Brussels, Copenhagen, Madrid, Paris(GMT+01:00)">Brussels, Copenhagen, Madrid, Paris(GMT+01:00) </option>

	<option  gmtAdjustment="GMT+05:30" useDaylightTime="0" value="Chennai, Kolkata, Mumbai, New Delhi(GMT+05:30)">Chennai, Kolkata, Mumbai, New Delhi(GMT+05:30) </option>
	<option  gmtAdjustment="GMT+05:45" useDaylightTime="0" value="Kathmandu(GMT+05:45)"> Kathmandu(GMT+05:45)</option>
	<option  gmtAdjustment="GMT+06:00" useDaylightTime="1" value="Almaty, Novosibirsk(GMT+06:00)"> Almaty, Novosibirsk(GMT+06:00)</option>
	<option  gmtAdjustment="GMT+06:00" useDaylightTime="0" value="Astana, Dhaka(GMT+06:00) ">Astana, Dhaka(GMT+06:00) </option>
	<option  gmtAdjustment="GMT+06:30" useDaylightTime="0" value="Yangon (Rangoon)(GMT+06:30) ">Yangon (Rangoon)(GMT+06:30) </option>
	<option  gmtAdjustment="GMT+07:00" useDaylightTime="0" value="Bangkok, Hanoi, Jakarta(GMT+07:00)"> Bangkok, Hanoi, Jakarta(GMT+07:00)</option>
	<option  gmtAdjustment="GMT+07:00" useDaylightTime="1" value="Krasnoyarsk(GMT+07:00)"> Krasnoyarsk(GMT+07:00)</option>
	<option  gmtAdjustment="GMT+08:00" useDaylightTime="0" value="Beijing, Chongqing, Hong Kong, Urumqi(GMT+08:00)">Beijing, Chongqing, Hong Kong, Urumqi(GMT+08:00) </option>
	<option gmtAdjustment="GMT+08:00" useDaylightTime="0" value="Kuala Lumpur, Singapore(GMT+08:00)">Kuala Lumpur, Singapore(GMT+08:00) </option>
	<option  gmtAdjustment="GMT+08:00" useDaylightTime="0" value="Irkutsk, Ulaan Bataar(GMT+08:00)"> Irkutsk, Ulaan Bataar(GMT+08:00)</option>
	<option  gmtAdjustment="GMT+08:00" useDaylightTime="0" value="Perth(GMT+08:00)"> Perth(GMT+08:00)</option>
	<option  gmtAdjustment="GMT+08:00" useDaylightTime="0" value="Taipei(GMT+08:00)">Taipei(GMT+08:00) </option>
	<option gmtAdjustment="GMT+09:00" useDaylightTime="0" value="Osaka, Sapporo, Tokyo(GMT+09:00)"> Osaka, Sapporo, Tokyo(GMT+09:00)</option>
	<option  gmtAdjustment="GMT+09:00" useDaylightTime="0" value="Seoul(GMT+09:00)">Seoul(GMT+09:00) </option>
	<option gmtAdjustment="GMT+09:00" useDaylightTime="1" value="Yakutsk (GMT+09:00)"> Yakutsk (GMT+09:00)</option>
	<option gmtAdjustment="GMT+09:30" useDaylightTime="0" value="Adelaide(GMT+09:30)">Adelaide(GMT+09:30) </option>
	<option  gmtAdjustment="GMT+09:30" useDaylightTime="0" value="Darwin(GMT+09:30)">Darwin(GMT+09:30) </option>
	<option  gmtAdjustment="GMT+10:00" useDaylightTime="0" value="Brisbane(GMT+10:00)"> Brisbane(GMT+10:00)</option>
	<option gmtAdjustment="GMT+10:00" useDaylightTime="1" value="Canberra, Melbourne, Sydney(GMT+10:00)"> Canberra, Melbourne, Sydney(GMT+10:00)</option>
	<option  gmtAdjustment="GMT+11:00" useDaylightTime="1" value="Magadan, Solomon Is., New Caledonia(GMT+11:00)"> </option>
	<option  gmtAdjustment="GMT+12:00" useDaylightTime="1" value="Fiji, Kamchatka, Marshall Is.(GMT+12:00)"> Auckland, Wellington(GMT+12:00)</option>
	<option  gmtAdjustment="GMT+12:00" useDaylightTime="0" value="Fiji, Kamchatka, Marshall Is.(GMT+12:00)"> </option>


</select>
</div>


  </div>



<br>
<div style="text-align: center;">


    <button type="submit" class=" submits " value="Submit"> Select Slots</button>
</div>
            </form>


    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"
    ></script>
    <script>
      $(function () {
        $("#datepicker").datepicker({
          format: "dd/mm/yyyy",
          autoclose: true,
          todayHighlight: true,
          showOtherMonths: true,
          selectOtherMonths: true,
          autoclose: true,
          changeMonth: true,
          changeYear: true,
          orientation: "button",
        });
      });
    </script>
  </body>
</html>
