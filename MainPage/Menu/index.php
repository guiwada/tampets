<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./index.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap"
    />
  </head>
  <body>
    <div class="menu">
      <img class="logo2-2-icon" alt="" src="./public/logo2-2@2x.png" />

      <b class="seja-bem-vindoa">SEJA BEM-VINDO(A)!</b>
      <div class="menu-child"></div>
      <div class="menu-item"></div>
      <a href="/Upx/Tampets_Main/mainpage.php"><img class="boto-fechar-icon" alt="" src="./public/boto-fechar.svg"></a>


      <div class="agendar-castrao">
        <div class="agendar-castrao-child"></div>
        <img class="firstaidkit-icon" alt="" src="./public/firstaidkit.svg" />

        <button class="agendar-castrao1">
          <p class="agendar">Agendar</p>
          <p class="castrao">Castração</p>
        </button>
      </div>
      <div class="agenda">
        <div class="agendar-castrao-child"></div>
        <div class="agenda1">Agenda</div>
        <img class="calendar-icon" alt="" src="./public/calendar.svg" />
      </div>
      <div class="usurios">
        <div class="agendar-castrao-child"></div>
        <div class="usurios1">Usuários</div>
        <img class="calendar-icon" alt="" src="./public/users.svg" />
      </div>
      <div class="sair" id="sairContainer">
        <div class="agendar-castrao-child"></div>
        <div class="sair1">Sair</div>
        <img class="calendar-icon" alt="" src="./public/signout.svg" />
      </div>
    </div>

    <button id="sairContainer">Sair</button>

<script>
var sairContainer = document.getElementById("sairContainer");
if (sairContainer) {
  sairContainer.addEventListener("click", function (e) {
    window.location.href = "../../Tampets";
  });
}
</script>
  </body>
</html>
