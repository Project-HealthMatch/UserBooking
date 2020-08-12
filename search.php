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
     <script
    type="text/javascript"
    src="https://cdn.weglot.com/weglot.min.js"
  ></script>
  <script>
    Weglot.initialize({
      api_key: "wg_6595b397394b082513ae5269c8992a3d7",
    });
  </script>

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

@media(max-width:900px){
    input[type="email"]{

width: 99%;
margin: 0;

    }  
} 

          </style>




  </head>
  <body>
 


    

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





            </style>
            <style>
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

          width: 65%;
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

        .date{
          width: 55%;
        }

                .show{
margin-left: 43%;
width:21rem;}

.card{
  border-radius: 5px;
font-size: 2rem;
margin:0.5rem;
color: rgb(34, 34, 34);
text-align: center;
height: 15rem;
width: 90%;
text-align: center;
background-color:white;
padding-top: 1rem;
box-shadow: 2px 2px 3px #bc94dc;
border: solid #bc94dc;
border-width: 0.05rem;
border-radius: 5px;
margin-left: 5%;
}
.card:hover{



  background-color: rgb(197, 191, 191);


}

@media(min-width:900px){

  .timegrid{
    display:grid;
  grid-template-columns:1fr 1fr  ;
    grid-template-rows:1fr 1fr  ;
  }
}



.readonly{

  margin-left: 37%;
  }

  .headerread {
        font-size: 2.1em;
        font-weight: 500;
margin-left: 12rem;
        font-family: "Century Gothic", sans-serif;
        color:black;
      }

      .headerdate {
            font-size: 2.1em;
            font-weight: 500;
    margin-left: 15rem;
            font-family: "Century Gothic", sans-serif;
            color:black;
          }

          .slotbox{

            border:solid 0.05rem #bc94dc;
            margin:1rem;
            font-size: 1.5rem;
            background-color: white;
            width: 30rem;
            height:5rem;
            border-radius: 5px;
            padding-top: 1.5rem;
            margin-left: 39%;
             box-shadow: 2px 2px 3px #bc94dc;
            }

            .slotbox:hover{
              background-color:#a1a1a17e;
            }

            @media(max-width:900px)
            {
               .slotbox{

            border:solid 0.05rem #bc94dc;
            margin:1rem;
            font-size: 1.5rem;
            background-color: white;
            width: 99%;
            height:5rem;
            border-radius: 5px;
            padding-top: 1.5rem;
            margin-left: 1%;
            }

            .slotbox:hover{
              background-color:#a1a1a17e;
            }

            
.readonly{

  margin-left: 1rem;
  }

  
     input[type="email"],input[type="text"],input[type="tel"]{
        width:99%;
         color:black;
         font-size: 2rem;
          }::placeholder{
            color:rgb(51, 51, 51);
            font-size: 2rem;
          }

           .headerread {
       
margin-left: 12rem;
        
      }

      .headerdate {
        
    margin-left: 15rem;
         
          }
            }
              
              @media(max-width:900px){
                  .slotbox{

      
           
            padding-top: 1rem;
            margin-left: 1%;
            }

              }

                  </style>

            <body>
            <div style="text-align: left;">
        <img src="logo.png" class="logo">
        </div>

                    <form action="process.php" method="POST" autocomplete="off">
                  <div class="readonly">
                  <input type="text" class="form-control" id="date"
      name = "date" value = "<?php echo $_POST['date'];?>" readonly>

               
                <input type="text" class="form-control" id="timeZoneId"
    name = "timezoneid" style="font-size: 1.2rem;" value = "<?php echo $_POST['timeZoneId'];?>" readonly>
    </div>
<div style="text-align: center;">
              <h3 class="headerdoctor">
              Please select your preferred timeslot:
            </h3>
            <?php

  $link = mysqli_connect("healthmatch-server.mysql.database.azure.com","HEALTHMATCH@healthmatch-server","Hackathon2020", "appointment");

  // Check connection
  if($link === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }
  $date = $_POST['date'];
  $timeZoneId = $_POST['timeZoneId'];
  $emptyarray = array();
  // Attempt select query execution
  $sql = "SELECT * FROM bookings WHERE date='$date' AND timeZoneId = '$timeZoneId'";

  if($result = mysqli_query($link, $sql)){
      if(mysqli_num_rows($result) > 0){
          echo "<table>";


          while($row = mysqli_fetch_array($result)){
              echo "<tr>";
              $str =(explode(",",$row['slot']));

          $emptyarray=array_merge($emptyarray,$str);



              echo "</tr>";
          }

          echo "</table>";
  sort($emptyarray);

  $i=0 ;
  $j=0;
$k=0;
$n=sizeof($emptyarray);

  for($i=0; $i<$n; $i++)
     {
         for($j=$i+1; $j<$n; $j++)
         {
             /* If any duplicate found */
             if($emptyarray[$i] == $emptyarray[$j])
             {
                 /* Delete the current duplicate element */
                 for($k=$j; $k<$n; $k++)
                 {
                     $emptyarray[$k] = $emptyarray[$k + 1];
                 }

                 /* Decrement size after removing duplicate element */
                 $n--;

                 /* If shifting of elements occur then don't increment j */
                 $j--;
             }
         }
     }

     for($i=0; $i<$n; $i++)
     { if($emptyarray[$i]=='')
       {
       }
else
        { echo'<div style="text-align:center;">';
         
          echo'<div class="slotbox">';
  echo '<input type="radio" id="slot" name="slot" style="margin-right: 0.8rem;" value= '.$emptyarray[$i].'>', $emptyarray[$i] ;
  echo'</div>';
  echo'</div>';
}
     }

          // Close result set
          mysqli_free_result($result);
      } else{
        echo'<div style="text-align:center;">';
          echo "Sorry!No matching slots were found.";
          echo'</div>';
      }
  } else{
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
  }

  // Close connection
  mysqli_close($link);
  ?>



    <h4 class="titleform" style="margin-left: 0;">ENTER DETAILS:</h4>
    <br>


                    <div class="form-group">

                      <input
                        required
                        type="text"
                        name="name"
                       placeholder="First Name"
                      />
                    </div>
  
                    <div class="form-group">

                      <input
                        required
                        type="text"
                        name="lastname"
                       placeholder="Last Name"
                      />
                    </div>
                    <div class="form-group" class="headervolunteer">

                      <input
                        required
                        type="email"
                        name="email"
                     placeholder="Email"
                      />
                    </div>


    <input id="showHiddenBlock"type="button" class="optionalbtn" value="OPTIONAL">
    <div id="initiallyHiddenBlock" >
                     <h4 class="titleform">OPTIONAL DETAILS:</h4>
       <br>
            <div class="inset">
                <p>
  <select name="countryCode" id="" aria-placeholder="Code" type="text"  class="selectwidth">

   <option data-countryCode="US" value="1">USA (+1)</option>
  <option data-countryCode="GB" value="44" >UK (+44)</option>
     <option data-countryCode="DZ" value="213">Algeria (+213)</option>
     <option data-countryCode="AD" value="376">Andorra (+376)</option>
     <option data-countryCode="AO" value="244">Angola (+244)</option>
     <option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
     <option data-countryCode="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
     <option data-countryCode="AR" value="54">Argentina (+54)</option>
     <option data-countryCode="AM" value="374">Armenia (+374)</option>
     <option data-countryCode="AW" value="297">Aruba (+297)</option>
     <option data-countryCode="AU" value="61">Australia (+61)</option>
     <option data-countryCode="AT" value="43">Austria (+43)</option>
     <option data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
     <option data-countryCode="BS" value="1242">Bahamas (+1242)</option>
     <option data-countryCode="BH" value="973">Bahrain (+973)</option>
     <option data-countryCode="BD" value="880">Bangladesh (+880)</option>
     <option data-countryCode="BB" value="1246">Barbados (+1246)</option>
     <option data-countryCode="BY" value="375">Belarus (+375)</option>
     <option data-countryCode="BE" value="32">Belgium (+32)</option>
     <option data-countryCode="BZ" value="501">Belize (+501)</option>
     <option data-countryCode="BJ" value="229">Benin (+229)</option>
     <option data-countryCode="BM" value="1441">Bermuda (+1441)</option>
     <option data-countryCode="BT" value="975">Bhutan (+975)</option>
     <option data-countryCode="BO" value="591">Bolivia (+591)</option>
     <option data-countryCode="BA" value="387">Bosnia Herzegovina (+387)</option>
     <option data-countryCode="BW" value="267">Botswana (+267)</option>
     <option data-countryCode="BR" value="55">Brazil (+55)</option>
     <option data-countryCode="BN" value="673">Brunei (+673)</option>
     <option data-countryCode="BG" value="359">Bulgaria (+359)</option>
     <option data-countryCode="BF" value="226">Burkina Faso (+226)</option>
     <option data-countryCode="BI" value="257">Burundi (+257)</option>
     <option data-countryCode="KH" value="855">Cambodia (+855)</option>
     <option data-countryCode="CM" value="237">Cameroon (+237)</option>
     <option data-countryCode="CA" value="1">Canada (+1)</option>
     <option data-countryCode="CV" value="238">Cape Verde Islands (+238)</option>
     <option data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
     <option data-countryCode="CF" value="236">Central African Republic (+236)</option>
     <option data-countryCode="CL" value="56">Chile (+56)</option>
     <option data-countryCode="CN" value="86">China (+86)</option>
     <option data-countryCode="CO" value="57">Colombia (+57)</option>
     <option data-countryCode="KM" value="269">Comoros (+269)</option>
     <option data-countryCode="CG" value="242">Congo (+242)</option>
     <option data-countryCode="CK" value="682">Cook Islands (+682)</option>
     <option data-countryCode="CR" value="506">Costa Rica (+506)</option>
     <option data-countryCode="HR" value="385">Croatia (+385)</option>
     <option data-countryCode="CU" value="53">Cuba (+53)</option>
     <option data-countryCode="CY" value="90392">Cyprus North (+90392)</option>
     <option data-countryCode="CY" value="357">Cyprus South (+357)</option>
     <option data-countryCode="CZ" value="42">Czech Republic (+42)</option>
     <option data-countryCode="DK" value="45">Denmark (+45)</option>
     <option data-countryCode="DJ" value="253">Djibouti (+253)</option>
     <option data-countryCode="DM" value="1809">Dominica (+1809)</option>
     <option data-countryCode="DO" value="1809">Dominican Republic (+1809)</option>
     <option data-countryCode="EC" value="593">Ecuador (+593)</option>
     <option data-countryCode="EG" value="20">Egypt (+20)</option>
     <option data-countryCode="SV" value="503">El Salvador (+503)</option>
     <option data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
     <option data-countryCode="ER" value="291">Eritrea (+291)</option>
     <option data-countryCode="EE" value="372">Estonia (+372)</option>
     <option data-countryCode="ET" value="251">Ethiopia (+251)</option>
     <option data-countryCode="FK" value="500">Falkland Islands (+500)</option>
     <option data-countryCode="FO" value="298">Faroe Islands (+298)</option>
     <option data-countryCode="FJ" value="679">Fiji (+679)</option>
     <option data-countryCode="FI" value="358">Finland (+358)</option>
     <option data-countryCode="FR" value="33">France (+33)</option>
     <option data-countryCode="GF" value="594">French Guiana (+594)</option>
     <option data-countryCode="PF" value="689">French Polynesia (+689)</option>
     <option data-countryCode="GA" value="241">Gabon (+241)</option>
     <option data-countryCode="GM" value="220">Gambia (+220)</option>
     <option data-countryCode="GE" value="7880">Georgia (+7880)</option>
     <option data-countryCode="DE" value="49">Germany (+49)</option>
     <option data-countryCode="GH" value="233">Ghana (+233)</option>
     <option data-countryCode="GI" value="350">Gibraltar (+350)</option>
     <option data-countryCode="GR" value="30">Greece (+30)</option>
     <option data-countryCode="GL" value="299">Greenland (+299)</option>
     <option data-countryCode="GD" value="1473">Grenada (+1473)</option>
     <option data-countryCode="GP" value="590">Guadeloupe (+590)</option>
     <option data-countryCode="GU" value="671">Guam (+671)</option>
     <option data-countryCode="GT" value="502">Guatemala (+502)</option>
     <option data-countryCode="GN" value="224">Guinea (+224)</option>
     <option data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
     <option data-countryCode="GY" value="592">Guyana (+592)</option>
     <option data-countryCode="HT" value="509">Haiti (+509)</option>
     <option data-countryCode="HN" value="504">Honduras (+504)</option>
     <option data-countryCode="HK" value="852">Hong Kong (+852)</option>
     <option data-countryCode="HU" value="36">Hungary (+36)</option>
     <option data-countryCode="IS" value="354">Iceland (+354)</option>
     <option data-countryCode="IN" value="91">India (+91)</option>
     <option data-countryCode="ID" value="62">Indonesia (+62)</option>
     <option data-countryCode="IR" value="98">Iran (+98)</option>
     <option data-countryCode="IQ" value="964">Iraq (+964)</option>
     <option data-countryCode="IE" value="353">Ireland (+353)</option>
     <option data-countryCode="IL" value="972">Israel (+972)</option>
     <option data-countryCode="IT" value="39">Italy (+39)</option>
     <option data-countryCode="JM" value="1876">Jamaica (+1876)</option>
     <option data-countryCode="JP" value="81">Japan (+81)</option>
     <option data-countryCode="JO" value="962">Jordan (+962)</option>
     <option data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
     <option data-countryCode="KE" value="254">Kenya (+254)</option>
     <option data-countryCode="KI" value="686">Kiribati (+686)</option>
     <option data-countryCode="KP" value="850">Korea North (+850)</option>
     <option data-countryCode="KR" value="82">Korea South (+82)</option>
     <option data-countryCode="KW" value="965">Kuwait (+965)</option>
     <option data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
     <option data-countryCode="LA" value="856">Laos (+856)</option>
     <option data-countryCode="LV" value="371">Latvia (+371)</option>
     <option data-countryCode="LB" value="961">Lebanon (+961)</option>
     <option data-countryCode="LS" value="266">Lesotho (+266)</option>
     <option data-countryCode="LR" value="231">Liberia (+231)</option>
     <option data-countryCode="LY" value="218">Libya (+218)</option>
     <option data-countryCode="LI" value="417">Liechtenstein (+417)</option>
     <option data-countryCode="LT" value="370">Lithuania (+370)</option>
     <option data-countryCode="LU" value="352">Luxembourg (+352)</option>
     <option data-countryCode="MO" value="853">Macao (+853)</option>
     <option data-countryCode="MK" value="389">Macedonia (+389)</option>
     <option data-countryCode="MG" value="261">Madagascar (+261)</option>
     <option data-countryCode="MW" value="265">Malawi (+265)</option>
     <option data-countryCode="MY" value="60">Malaysia (+60)</option>
     <option data-countryCode="MV" value="960">Maldives (+960)</option>
     <option data-countryCode="ML" value="223">Mali (+223)</option>
     <option data-countryCode="MT" value="356">Malta (+356)</option>
     <option data-countryCode="MH" value="692">Marshall Islands (+692)</option>
     <option data-countryCode="MQ" value="596">Martinique (+596)</option>
     <option data-countryCode="MR" value="222">Mauritania (+222)</option>
     <option data-countryCode="YT" value="269">Mayotte (+269)</option>
     <option data-countryCode="MX" value="52">Mexico (+52)</option>
     <option data-countryCode="FM" value="691">Micronesia (+691)</option>
     <option data-countryCode="MD" value="373">Moldova (+373)</option>
     <option data-countryCode="MC" value="377">Monaco (+377)</option>
     <option data-countryCode="MN" value="976">Mongolia (+976)</option>
     <option data-countryCode="MS" value="1664">Montserrat (+1664)</option>
     <option data-countryCode="MA" value="212">Morocco (+212)</option>
     <option data-countryCode="MZ" value="258">Mozambique (+258)</option>
     <option data-countryCode="MN" value="95">Myanmar (+95)</option>
     <option data-countryCode="NA" value="264">Namibia (+264)</option>
     <option data-countryCode="NR" value="674">Nauru (+674)</option>
     <option data-countryCode="NP" value="977">Nepal (+977)</option>
     <option data-countryCode="NL" value="31">Netherlands (+31)</option>
     <option data-countryCode="NC" value="687">New Caledonia (+687)</option>
     <option data-countryCode="NZ" value="64">New Zealand (+64)</option>
     <option data-countryCode="NI" value="505">Nicaragua (+505)</option>
     <option data-countryCode="NE" value="227">Niger (+227)</option>
     <option data-countryCode="NG" value="234">Nigeria (+234)</option>
     <option data-countryCode="NU" value="683">Niue (+683)</option>
     <option data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
     <option data-countryCode="NP" value="670">Northern Marianas (+670)</option>
     <option data-countryCode="NO" value="47">Norway (+47)</option>
     <option data-countryCode="OM" value="968">Oman (+968)</option>
     <option data-countryCode="PW" value="680">Palau (+680)</option>
     <option data-countryCode="PA" value="507">Panama (+507)</option>
     <option data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
     <option data-countryCode="PY" value="595">Paraguay (+595)</option>
     <option data-countryCode="PE" value="51">Peru (+51)</option>
     <option data-countryCode="PH" value="63">Philippines (+63)</option>
     <option data-countryCode="PL" value="48">Poland (+48)</option>
     <option data-countryCode="PT" value="351">Portugal (+351)</option>
     <option data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
     <option data-countryCode="QA" value="974">Qatar (+974)</option>
     <option data-countryCode="RE" value="262">Reunion (+262)</option>
     <option data-countryCode="RO" value="40">Romania (+40)</option>
     <option data-countryCode="RU" value="7">Russia (+7)</option>
     <option data-countryCode="RW" value="250">Rwanda (+250)</option>
     <option data-countryCode="SM" value="378">San Marino (+378)</option>
     <option data-countryCode="ST" value="239">Sao Tome &amp; Principe (+239)</option>
     <option data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
     <option data-countryCode="SN" value="221">Senegal (+221)</option>
     <option data-countryCode="CS" value="381">Serbia (+381)</option>
     <option data-countryCode="SC" value="248">Seychelles (+248)</option>
     <option data-countryCode="SL" value="232">Sierra Leone (+232)</option>
     <option data-countryCode="SG" value="65">Singapore (+65)</option>
     <option data-countryCode="SK" value="421">Slovak Republic (+421)</option>
     <option data-countryCode="SI" value="386">Slovenia (+386)</option>
     <option data-countryCode="SB" value="677">Solomon Islands (+677)</option>
     <option data-countryCode="SO" value="252">Somalia (+252)</option>
     <option data-countryCode="ZA" value="27">South Africa (+27)</option>
     <option data-countryCode="ES" value="34">Spain (+34)</option>
     <option data-countryCode="LK" value="94">Sri Lanka (+94)</option>
     <option data-countryCode="SH" value="290">St. Helena (+290)</option>
     <option data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
     <option data-countryCode="SC" value="1758">St. Lucia (+1758)</option>
     <option data-countryCode="SD" value="249">Sudan (+249)</option>
     <option data-countryCode="SR" value="597">Suriname (+597)</option>
     <option data-countryCode="SZ" value="268">Swaziland (+268)</option>
     <option data-countryCode="SE" value="46">Sweden (+46)</option>
     <option data-countryCode="CH" value="41">Switzerland (+41)</option>
     <option data-countryCode="SI" value="963">Syria (+963)</option>
     <option data-countryCode="TW" value="886">Taiwan (+886)</option>
     <option data-countryCode="TJ" value="7">Tajikstan (+7)</option>
     <option data-countryCode="TH" value="66">Thailand (+66)</option>
     <option data-countryCode="TG" value="228">Togo (+228)</option>
     <option data-countryCode="TO" value="676">Tonga (+676)</option>
     <option data-countryCode="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
     <option data-countryCode="TN" value="216">Tunisia (+216)</option>
     <option data-countryCode="TR" value="90">Turkey (+90)</option>
     <option data-countryCode="TM" value="7">Turkmenistan (+7)</option>
     <option data-countryCode="TM" value="993">Turkmenistan (+993)</option>
     <option data-countryCode="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
     <option data-countryCode="TV" value="688">Tuvalu (+688)</option>
     <option data-countryCode="UG" value="256">Uganda (+256)</option>
     <option data-countryCode="UA" value="380">Ukraine (+380)</option>
     <option data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
     <option data-countryCode="UY" value="598">Uruguay (+598)</option>
     <option data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
     <option data-countryCode="VU" value="678">Vanuatu (+678)</option>
     <option data-countryCode="VA" value="379">Vatican City (+379)</option>
     <option data-countryCode="VE" value="58">Venezuela (+58)</option>
     <option data-countryCode="VN" value="84">Vietnam (+84)</option>
     <option data-countryCode="VG" value="84">Virgin Islands - British (+1284)</option>
     <option data-countryCode="VI" value="84">Virgin Islands - US (+1340)</option>
     <option data-countryCode="WF" value="681">Wallis &amp; Futuna (+681)</option>
     <option data-countryCode="YE" value="969">Yemen (North)(+969)</option>
     <option data-countryCode="YE" value="967">Yemen (South)(+967)</option>
     <option data-countryCode="ZM" value="260">Zambia (+260)</option>
     <option data-countryCode="ZW" value="263">Zimbabwe (+263)</option>

  </select><div class="optiontitle">
                <input
                  type="tel"
                  name="phonenumber"
              class="border"
                  placeholder="Phone Number"


                /><br>
                </p>

                Age:
                  <select name="age" class="selectwidth" type="number">
                    <option value="1">1</option>
                     <option value="2">2</option>
                     <option value="3">3</option>
                     <option value="4">4</option>
                     <option value="5">5</option>
                     <option value="6">6</option>
                     <option value="7">7</option>
                     <option value="8">8</option>
                      <option value="9">9</option>
                       <option value="10">10</option>
                     <option value="11">11</option>
                     <option value="12">12</option>
                     <option value="13">13</option>
                     <option value="14">14</option>
                     <option value="15">15</option>
                     <option value="16">16</option>
                     <option value="17">17</option>
                     <option value="18">18</option>
                     <option value="19">19</option>
                     <option value="20">20</option>
                     <option value="21">21</option>
                     <option value="22">22</option>
                      <option value="23">23</option>
                     <option value="24">24</option>
                     <option value="25">25</option>
                     <option value="26">26</option>
                     <option value="27">27</option>
                     <option value="28">28</option>
                     <option value="29">29</option>
                     <option value="30">30</option>
                     <option value="31">31</option>
                     <option value="32">32</option>
                     <option value="33">33</option>
                     <option value="34">34</option>
                     <option value="35">35</option>
                     <option value="36">36</option>
                     <option value="37">37</option>
                     <option value="38">38</option>
                     <option value="39">39</option>
                     <option value="40">40</option>
                     <option value="41">41</option>
                     <option value="42">42</option>
                     <option value="43">43</option>
                     <option value="44">44</option>
                     <option value="45">45</option>
                     <option value="46">46</option>
                     <option value="47">47</option>
                     <option value="48">48</option>
                     <option value="49">49</option>
                     <option value="50">50</option>
                     <option value="51">51</option>
                     <option value="52">52</option>
                     <option value="53">53</option>
                     <option value="54">54</option>
                     <option value="55">55</option>
                     <option value="56">56</option>
                     <option value="57">57</option>
                     <option value="58">58</option>
                     <option value="59">59</option>
                     <option value="60">60</option>
                     <option value="61">61</option>
                     <option value="62">62</option>
                     <option value="63">63</option>
                     <option value="64">64</option>
                     <option value="65">65</option>
                     <option value="66">66</option>
                     <option value="67">67</option>
                     <option value="68">68</option>
                     <option value="69">69</option>
                     <option value="70">70</option>
                     <option value="71">71</option>
                     <option value="72">72</option>
                     <option value="73">73</option>
                     <option value="74">74</option>
                     <option value="75">75</option>
                     <option value="76">76</option>
                     <option value="77">77</option>
                     <option value="78">78</option>
                     <option value="79">79</option>
                     <option value="80">80</option>
                      <option value="81">81</option>
                     <option value="82">82</option>
                     <option value="83">83</option>
                     <option value="84">84</option>
                     <option value="85">85</option>
                     <option value="86">86</option>
                     <option value="87">87</option>
                     <option value="88">88</option>
                     <option value="89">89</option>
                     <option value="90">90</option>
                     <option value="91">91</option>
                     <option value="92">92</option>
                     <option value="93">93</option>
                     <option value="94">94</option>
                     <option value="95">95</option>
                     <option value="96">96</option>
                     <option value="97">97</option>
                     <option value="98">98</option>
                     <option value="99">99</option>
                     <option value="100">100</option>


                  </select>

                Gender:

                <select name="gender" class="selectwidth"  type="text">
                  <option value="RNS">Rather not say</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <option value="Other">Other</option>
                  </div>
                </select>
              </div>


                    <h5 class="headerquestion">What do you want to talk about?</h5>
                <input
                 class="write"
                  type="text"
                  name="optional"
                  id="optional"

                /><h5 class="headerquestion">Anything we should know?</h5>
                <input
                class="write"
                  type="text"
                  name="opt"
                  id="optional"

                />



              </div>
            </div>
  </div>
  <div style="text-align: center;">


      <button type="submit" class=" submits " value="Submit"> Submit</button>
  </div>


  </form>


      <script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"
      ></script>


     <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
     <script>
     $(document).ready(function() {
      $('#showHiddenBlock').click(function() {
          $('#initiallyHiddenBlock').show();
      });
  });
  </script>
</form>

</body>
</html>
