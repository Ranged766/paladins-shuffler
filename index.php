<html>

    <head>
        <meta charset="utf-8">
        <title>PHP</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/cover.css" rel="stylesheet">



    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      p{
        color:white;
      }
      h4{
        color:black;
      }
    </style>



    </head>
      <body class="d-flex h-100 text-center text-white bg-dark">

        <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
          <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
            <header class="mb-auto">
              <div>
                <h3 class="float-md-start mb-0">Paladins shufffler</h3>
                <nav class="nav nav-masthead justify-content-center float-md-end">
                </nav>
              </div>
            </header>


              <div class="album py-5 bg-light">
                <div class="container">
              
  <main class="px-3">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

      <?php

      frontline();
      damage();
      healer();
      flank();

      switch(rand(1,4)){
        case 1:
          frontline();
        break;
        case 2:
          damage();
        break;
        case 3:
          healer();
        break;
        case 4:
          flank();
        break;
      }

        function frontline(){
          switch (rand(1,13)){
            case 1:
            //ash
            echo '
            <div class="col">
            <h4>Ash</h4>
              <div class="card shadow-sm">
             <img src="img/front/Ash.png" alt="..." class="img-thumbnail">
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
            ';
            break;

            case 2:
            //Atlas
            echo '
            <div class="col">
            <h4>Atlas</h4>
              <div class="card shadow-sm">
             <img src="img/front/Atlas.png" alt="..." class="img-thumbnail">
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
            ';
            break;
            case 3:
            //Azaan
            echo '
            <div class="col">
            <h4>Azaan</h4>
              <div class="card shadow-sm">
             <img src="img/front/Azaan.png" alt="..." class="img-thumbnail">
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
            ';
            break;
            case 4:
            //Barik
            echo '
            <div class="col">
            <h4>Barik</h4>
              <div class="card shadow-sm">
             <img src="img/front/Barik.png" alt="..." class="img-thumbnail">
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
            ';
            break;
            case 5:
            //Fernando
            echo '
            <div class="col">
            <h4>Fernando</h4>
              <div class="card shadow-sm">
             <img src="img/front/Fernando.png" alt="..." class="img-thumbnail">
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
            ';
            break;
            case 6:
            //Inara
            echo '
            <div class="col">
            <h4>Inara</h4>
              <div class="card shadow-sm">
             <img src="img/front/Inara.png" alt="..." class="img-thumbnail">
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
            ';
            break;

            case 7:
            //Khan
            echo '
            <div class="col">
            <h4>Khan</h4>
              <div class="card shadow-sm">
             <img src="img/front/Khan.png" alt="..." class="img-thumbnail">
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
            ';
            break;

            case 8:
            //Makoa
            echo '
            <div class="col">
            <h4>Makoa</h4>
              <div class="card shadow-sm">
             <img src="img/front/Makoa.png" alt="..." class="img-thumbnail">
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
            ';
            break;

            case 9:
            //Raum
            echo '
            <div class="col">
            <h4>Raum</h4>
              <div class="card shadow-sm">
             <img src="img/front/Raum.png" alt="..." class="img-thumbnail">
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
            ';
            break;

            case 10:
            //Ruckus
            echo '
            <div class="col">
            <h4>Ruckus</h4>
              <div class="card shadow-sm">
             <img src="img/front/Ruckus.png" alt="..." class="img-thumbnail">
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
            ';
            break;

            case 11:
            //Terminus
            echo '
            <div class="col">
            <h4>Terminus</h4>
              <div class="card shadow-sm">
             <img src="img/front/Terminus.png" alt="..." class="img-thumbnail">
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
            ';
            break;

            case 12:
            //Torvald
            echo '
            <div class="col">
            <h4>Torvald</h4>
              <div class="card shadow-sm">
             <img src="img/front/Torvald.png" alt="..." class="img-thumbnail">
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
            ';
            break;

            case 13:
            //Yagorath
            echo '
            <div class="col">
            <h4>Yagorath</h4>
              <div class="card shadow-sm">
             <img src="img/front/Yagorath.png" alt="..." class="img-thumbnail">
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
            ';
            break;

            default:
              echo "Welp this is embarassing, we generated a strange number and we don't know how";
              break;
          }
        }

        function damage(){
          switch (rand(1,16)){
            case 1:
            //Bomb king
            echo '
            <div class="col">
            <h4>Bomb king</h4>
              <div class="card shadow-sm">
             <img src="img/damage/BombKing.png" alt="..." class="img-thumbnail">
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
            ';
            break;

            case 2:
            //Cassie
            echo '
            <div class="col">
            <h4>Cassie</h4>
              <div class="card shadow-sm">
             <img src="img/damage/Cassie.png" alt="..." class="img-thumbnail">
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
            ';
            break;
            case 3:
            //Dredge
            echo '
            <div class="col">
            <h4>Dredge</h4>
              <div class="card shadow-sm">
             <img src="img/damage/Dredge.png" alt="..." class="img-thumbnail">
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
            ';
            break;
            case 4:
            //Drogoz
            echo '
            <div class="col">
            <h4>Drogoz</h4>
              <div class="card shadow-sm">
             <img src="img/damage/Drogoz.png" alt="..." class="img-thumbnail">
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
            ';
            break;
            case 5:
            //Imani
            echo '
            <div class="col">
            <h4>Imani</h4>
              <div class="card shadow-sm">
             <img src="img/damage/Imani.png" alt="..." class="img-thumbnail">
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
            ';
            break;
            case 6:
            //Kinessa
            echo '
            <div class="col">
            <h4>Kinessa</h4>
              <div class="card shadow-sm">
             <img src="img/damage/Kinessa.png" alt="..." class="img-thumbnail">
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
            ';
            break;

            case 7:
            //Lian
            echo '
            <div class="col">
            <h4>Lian</h4>
              <div class="card shadow-sm">
             <img src="img/damage/Lian.png" alt="..." class="img-thumbnail">
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
            ';
            break;

            case 8:
            //Octavia
            echo '
            <div class="col">
            <h4>Octavia</h4>
              <div class="card shadow-sm">
             <img src="img/damage/Octavia.png" alt="..." class="img-thumbnail">
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
            ';
            break;

            case 9:
            //Saati
            echo '
            <div class="col">
            <h4>Saati</h4>
              <div class="card shadow-sm">
             <img src="img/damage/Saati.png" alt="..." class="img-thumbnail">
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
            ';
            break;

            case 10:
            //Sha Lin
            echo '
            <div class="col">
            <h4>Sha Lin</h4>
              <div class="card shadow-sm">
             <img src="img/damage/ShaLin.png" alt="..." class="img-thumbnail">
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
            ';
            break;

            case 11:
            //Strix
            echo '
            <div class="col">
            <h4>Strix</h4>
              <div class="card shadow-sm">
             <img src="img/damage/Strix.png" alt="..." class="img-thumbnail">
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
            ';
            break;

            case 12:
            //Tiberius
            echo '
            <div class="col">
            <h4>Tiberius</h4>
              <div class="card shadow-sm">
             <img src="img/damage/Tiberius.png" alt="..." class="img-thumbnail">
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
            ';
            break;

            case 13:
            //Tyra
            echo '
            <div class="col">
            <h4>Tyra</h4>
              <div class="card shadow-sm">
             <img src="img/damage/Tyra.png" alt="..." class="img-thumbnail">
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
            ';
            break;

            case 14:
              //Viktor
              echo '
              <div class="col">
              <h4>Viktor</h4>
                <div class="card shadow-sm">
               <img src="img/damage/Viktor.png" alt="..." class="img-thumbnail">
                  <div class="card-body">
                    <p class="card-text"></p>
                    <div class="d-flex justify-content-between align-items-center">
                    </div>
                  </div>
                </div>
              </div>
              ';
              break;

              case 15:
                //Vivian
                echo '
                <div class="col">
                <h4>Vivian</h4>
                  <div class="card shadow-sm">
                 <img src="img/damage/Vivian.png" alt="..." class="img-thumbnail">
                    <div class="card-body">
                      <p class="card-text"></p>
                      <div class="d-flex justify-content-between align-items-center">
                      </div>
                    </div>
                  </div>
                </div>
                ';
                break;

                case 16:
                  //Willo
                  echo '
                  <div class="col">
                  <h4>Willo</h4>
                    <div class="card shadow-sm">
                   <img src="img/damage/Willo.png" alt="..." class="img-thumbnail">
                      <div class="card-body">
                        <p class="card-text"></p>
                        <div class="d-flex justify-content-between align-items-center">
                        </div>
                      </div>
                    </div>
                  </div>
                  ';
                  break;

            default:
              echo "Welp this is embarassing, we generated a strange number and we don't know how";
              break;
          }
        }

        function healer(){
          switch (rand(1,11)){
            case 1:
            //Corvus
            echo '
            <div class="col">
            <h4>Corvus</h4>
              <div class="card shadow-sm">
             <img src="img/heal/Corvus.png" alt="..." class="img-thumbnail">
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
            ';
            break;

            case 2:
            //Furia
            echo '
            <div class="col">
            <h4>Furia</h4>
              <div class="card shadow-sm">
             <img src="img/heal/Furia.png" alt="..." class="img-thumbnail">
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
            ';
            break;
            case 3:
            //Grohk
            echo '
            <div class="col">
            <h4>Grohk</h4>
              <div class="card shadow-sm">
             <img src="img/heal/Grohk.png" alt="..." class="img-thumbnail">
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
            ';
            break;
            case 4:
            //Grover
            echo '
            <div class="col">
            <h4>Grover</h4>
              <div class="card shadow-sm">
             <img src="img/heal/Grover.png" alt="..." class="img-thumbnail">
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
            ';
            break;
            case 5:
            //Io
            echo '
            <div class="col">
            <h4>Io</h4>
              <div class="card shadow-sm">
             <img src="img/heal/Io.png" alt="..." class="img-thumbnail">
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
            ';
            break;
            case 6:
            //Jenos
            echo '
            <div class="col">
            <h4>Inara</h4>
              <div class="card shadow-sm">
             <img src="img/heal/Jenos.png" alt="..." class="img-thumbnail">
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
            ';
            break;

            case 7:
            //Maldamba
            echo '
            <div class="col">
            <h4>Mal Damba</h4>
              <div class="card shadow-sm">
             <img src="img/heal/MalDamba.png" alt="..." class="img-thumbnail">
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
            ';
            break;

            case 8:
            //Pip
            echo '
            <div class="col">
            <h4>Pip</h4>
              <div class="card shadow-sm">
             <img src="img/heal/Pip.png" alt="..." class="img-thumbnail">
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
            ';
            break;

            case 9:
            //Rei
            echo '
            <div class="col">
            <h4>Rei</h4>
              <div class="card shadow-sm">
             <img src="img/heal/Rei.png" alt="..." class="img-thumbnail">
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
            ';
            break;

            case 10:
            //Seris
            echo '
            <div class="col">
            <h4>Seris</h4>
              <div class="card shadow-sm">
             <img src="img/heal/Seris.png" alt="..." class="img-thumbnail">
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
            ';
            break;

            case 11:
            //Ying
            echo '
            <div class="col">
            <h4>Ying</h4>
              <div class="card shadow-sm">
             <img src="img/heal/Ying.png" alt="..." class="img-thumbnail">
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
            ';
            break;

            default:
              echo "Welp this is embarassing, we generated a strange number and we don't know how";
              break;
          }
        }

        function flank(){
          switch (rand(1,12)){
            case 1:
            //Androxus
            echo '
            <div class="col">
            <h4>Androxus</h4>
              <div class="card shadow-sm">
             <img src="img/flank/Androxus.png" alt="..." class="img-thumbnail">
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
            ';
            break;

            case 2:
            //Buck
            echo '
            <div class="col">
            <h4>Buck</h4>
              <div class="card shadow-sm">
             <img src="img/flank/Buck.png" alt="..." class="img-thumbnail">
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
            ';
            break;
            case 3:
            //Evie
            echo '
            <div class="col">
            <h4>Evie</h4>
              <div class="card shadow-sm">
             <img src="img/flank/Evie.png" alt="..." class="img-thumbnail">
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
            ';
            break;
            case 4:
            //Koga
            echo '
            <div class="col">
            <h4>Koga</h4>
              <div class="card shadow-sm">
             <img src="img/flank/Koga.png" alt="..." class="img-thumbnail">
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
            ';
            break;
            case 5:
            //Lex
            echo '
            <div class="col">
            <h4>Lex</h4>
              <div class="card shadow-sm">
             <img src="img/flank/Lex.png" alt="..." class="img-thumbnail">
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
            ';
            break;
            case 6:
            //Meave
            echo '
            <div class="col">
            <h4>Meave</h4>
              <div class="card shadow-sm">
             <img src="img/flank/Meave.png" alt="..." class="img-thumbnail">
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
            ';
            break;

            case 7:
            //Moji
            echo '
            <div class="col">
            <h4>Moji</h4>
              <div class="card shadow-sm">
             <img src="img/flank/Moji.png" alt="..." class="img-thumbnail">
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
            ';
            break;

            case 8:
            //Skye
            echo '
            <div class="col">
            <h4>Skye</h4>
              <div class="card shadow-sm">
             <img src="img/flank/Skye.png" alt="..." class="img-thumbnail">
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
            ';
            break;

            case 9:
            //Talus
            echo '
            <div class="col">
            <h4>Talus</h4>
              <div class="card shadow-sm">
             <img src="img/flank/Talus.png" alt="..." class="img-thumbnail">
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
            ';
            break;

            case 10:
            //Vatu
            echo '
            <div class="col">
            <h4>Vatu</h4>
              <div class="card shadow-sm">
             <img src="img/flank/Vatu.png" alt="..." class="img-thumbnail">
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
            ';
            break;

            case 11:
            //Vora
            echo '
            <div class="col">
            <h4>Vora</h4>
              <div class="card shadow-sm">
             <img src="img/flank/Vora.png" alt="..." class="img-thumbnail">
                <div class="card-body">
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
            ';
            break;

            case 12:
              //Zhin
              echo '
              <div class="col">
              <h4>Zhin</h4>
                <div class="card shadow-sm">
               <img src="img/flank/Zhin.png" alt="..." class="img-thumbnail">
                  <div class="card-body">
                    <p class="card-text"></p>
                    <div class="d-flex justify-content-between align-items-center">
                    </div>
                  </div>
                </div>
              </div>
              ';
              break;

            default:
              echo "Welp this is embarassing, we generated a strange number and we don't know how";
              break;
          }
        }


        ?>
      </div>
      </div>
      </div>
        <footer class="mt-auto text-white-50">
          <p>Made by Ranged766 using php and Bootstrap</p>

            </main>

            <footer class="mt-auto text-white-50">

            </footer>
          </div>



            </body>
          </html>
