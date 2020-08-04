<!DOCTYPE html>
<html lang="en" dir="ltr">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
  />

  <script
    type="text/javascript"
    src="https://cdn.weglot.com/weglot.min.js"
  ></script>
  <script>
    Weglot.initialize({
      api_key: "wg_6595b397394b082513ae5269c8992a3d7",
    });
  </script>

  <head>
    <meta charset="utf-8" />

    <style>
      .background {
        background-color: #1f2833;
        height: 50%;
        padding: 3rem;
      }

      .title {
        color: #c5c6c7;
        font-family: "Century Gothic", sans-serif;
      }
      .homebtn {
        border: 1px solid white;
        background-color: rgb(105, 223, 197);
        margin: 0.5rem;
        width: 90%;
        height: 5rem;
        font-size: 20px;
        font-family: "montserrat";
        font-weight: 600;
        cursor: pointer;
        border-radius: 5px;
        transition: 0.8s;
        position: relative;
        overflow: hidden;
        color: black;
      }

      @media (min-width: 600px) {
        .homebtn {
          border: 1px solid white;
          border-radius: 5px;
          margin: 1rem;
          width: 30%;
          height: 5rem;
          font-size: 20px;
          font-family: "montserrat";
          font-weight: 600;
          cursor: pointer;
          color: black;
          background-color: rgb(105, 223, 197);
          transition: 0.8s;
          position: relative;
          overflow: hidden;
        }
      }

      .homebtn:hover {
        color: white;
        background: #51a09b;
      }

      body {
        padding: 10%;
        background-image: linear-gradient(-225deg, #e3fdf5 0%, #ffe6fa 100%);
        background-image: linear-gradient(to top, #00423f 0%, #0a0f49 100%);
        background-attachment: fixed;
        background-repeat: no-repeat;

        font-family: "Vibur", cursive;
        /*   the main font */
        font-family: "Abel", sans-serif;

        /* background-image: linear-gradient(to top, #d9afd9 0%, #97d9e1 100%); */
      }
    </style>
  </head>
  <body>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="viewport" content="height=device-height, initial-scale=1.0" />

    <div style="text-align: center;">
      <h1 style="color: white;">Thank you for submitting!</h1>
      <a href="<?php echo "dashboard.php"; ?>">
        <button class="homebtn" :hover>
          Pick Slots for another date
        </button></a
      >
    <a href="<?php echo "logout.php"; ?>">
        <button class="homebtn" :hover>
         <i class="fa fa-power-off"></i> Logout
        </button>
      </a>
    </div>
  </body>
</html>
