@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type =“img/extensión” src = "">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.3.1/tailwind.min.css'>
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <title>Swort Art Online</title>
</head>
<body>



  <!--INTRO--------->

  <div class="mt-8 w-full flex flex-col-reverse  md:flex-row lg:flex items-center lg:mt-32">
    <div class="w-2/2 lg:w-3/4 block">
<img class="w-2/2 lg:w-1/1 " src="img/sao.jpg " alt="">
    </div>
    <div class="w-full pb-8  lg:w-2/2 block px-8">
      <h1 id="intro" class="font-bold text-4xl ">Introducción</h1>
      <p class="text-justify font-semibold">Un enorme castillo de piedra y acero flotando en un cielo sin fin. Eso fue todo este mundo.

        A un grupo de artesanos les tomó un mes inspeccionar el lugar; el diámetro del piso base era de unos 10 kilómetros, lo suficientemente grande como para caber dentro de Setagaya-ku. Arriba, había 100 pisos apilados hacia arriba; Su gran tamaño era increíble. Era imposible adivinar cuántos datos contenía.</p>
    </div>
  </div>

<br><br><br><br><br><br><br>



  <!--CARDS DE LOS PERSONAJES-->

  <div class="w-full text-center bg-gray-900"><hr><h1 class="text-5xl text-white">Personajes</h1></div>
  
  <br><hr><br>

  <div class=" w-full flex flex-col-reverse  md:flex-row lg:flex items-center mb-8">


    <div class="w-full md:w-1/2 lg:w-2/5  block ">


      <div class="max-w-sm w-full lg:max-w-full lg:flex">
        <div class="h-48 lg:h-auto lg:w-40 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('img/1.png')" title="kirito">
        </div>
        <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
          <div class="mb-8">
       
            <div class="text-gray-900 font-bold text-xl mb-2">Kazuto Kirigaya</div>
            <p class="text-gray-700 text-base">Kazuto Kirigaya (ヶ谷和人, Kirigaya Kazuto), también conocido como Kirito (キリト Kirito), cuyo apodo es una contracción de su nombre escrito según la onomástica japonesa es decir Kirigaya Kazuto, es el protagonista de la franquicia Sword Art Online y un ávido jugador de MMOs</p>
          </div>
          <div class="flex items-center">
            <img class="w-10 h-10 rounded-full mr-4" src="img/min2.png" alt="Avatar of Jonathan Reinink">
            <div class="text-sm">
              <p class="text-gray-900 leading-none">Edad</p>
              <p class="text-gray-600">17 años</p>
            </div>
          </div>
        </div>


      </div>
    </div>


    <div class="w-full md:w-1/2 lg:w-2/5  block ml-2/5 ml-auto  ">


      <div class="max-w-sm w-full lg:max-w-full lg:flex">
        <div class="h-48 lg:h-auto lg:w-40 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('img/2.jpg')" title="azuna">
        </div>
        <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
          <div class="mb-8">
         
            <div class="text-gray-900 font-bold text-xl mb-2">Asuna Yuuki</div>
            <p class="text-gray-700 text-base">Asuna . Ella fue uno de los 10.000 jugadores atrapados en el juego de la muerte Sword Art Online. En el mundo real, su nombre es Asuna Yuuki , siendo el único usuario conocido en usar su nombre real. Ella mantiene una relación con el protagonista Kazuto Kirigaya.</p>
          </div>
          <div class="flex items-center">
            <img class="w-10 h-10 rounded-full mr-4" src="img/min1.jpg" alt="Avatar of Jonathan Reinink">
            <div class="text-sm">
              <p class="text-gray-900 leading-none">Edad</p>
              <p class="text-gray-600">18 (durante GGO)</p>
            </div>
          </div>
        </div>


      </div>
    </div>


  </div>


  <div class=" w-full flex flex-col-reverse  md:flex-row lg:flex items-center  mb-8">


    <div class="w-full md:w-1/2 lg:w-2/5  block ">


      <div class="max-w-sm w-full lg:max-w-full lg:flex">
        <div class="h-48 lg:h-auto lg:w-40 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('img/3.png')" title="kAkihiko Kayaba">
        </div>
        <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
          <div class="mb-8">
           
            <div class="text-gray-900 font-bold text-xl mb-2">Akihiko Kayaba</div>
            <p class="text-gray-700 text-base">Akihiko Kayaba  es el creador de Sword Art Online, el primer VRMMORPG y el diseñador del NerveGear, el Sistema Cardinal y La semilla. Él fue participe de su propia creación como Game Master y como el líder de los Caballeros de la Hermandad de la Sangre Heathcliff (ヒースクリフ Hīsukurifu).</p>
          </div>
          <div class="flex items-center">
            <img class="w-10 h-10 rounded-full mr-4" src="img/min5.png" alt="Akihiko Kayaba">
            <div class="text-sm">
              <p class="text-gray-900 leading-none">Edad </p>
              <p class="text-gray-600">28</p>
            </div>
          </div>
        </div>


      </div>
    </div>


    <div class="w-full md:w-1/2 lg:w-2/5  block ml-auto ">


      <div class="max-w-sm w-full lg:max-w-full lg:flex">
        <div class="h-48 lg:h-auto lg:w-40 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('img/4.jpg')" title="yui">
        </div>
        <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
          <div class="mb-8">
           
            <div class="text-gray-900 font-bold text-xl mb-2">Yui</div>
            <p class="text-gray-700 text-base">Yui (ユイ Yui) Es una forma de inteligencia artificial con el aspecto de una niña pequeña capaz de emular emociones. Su nombre oficial es Yui-MHCP001, la forma abreviada de Mental Health Counselling Program 001 del Sistema Cardinal.</p>
          </div>
          <div class="flex items-center">
            <img class="w-10 h-10 rounded-full mr-4" src="img/min3.png" alt="Avatar of Jonathan Reinink">
            <div class="text-sm">
              <p class="text-gray-900 leading-none">Edad</p>
              <p class="text-gray-600">no definido</p>
            </div>
          </div>
        </div>


      </div>
    </div>


  </div>


  <div class=" w-full flex flex-col-reverse  md:flex-row lg:flex items-center  mb-8">


    <div class="w-full md:w-1/2 lg:w-2/5  block ">


      <div class="max-w-sm w-full lg:max-w-full lg:flex">
        <div class="h-48 lg:h-auto lg:w-40 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('img/5.png')" title="klein">
        </div>
        <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
          <div class="mb-8">
           
            <div class="text-gray-900 font-bold text-xl mb-2">Ryoutarou Tsuboi</div>
            <p class="text-gray-700 text-base">Ryoutarou Tsuboi (壷井遼太郎 Tsuboi Ryōtarō) es uno de los 10.000 jugadores que quedaron atrapados en Sword Art Online. El nombre de su avatar es Klein (クライン Kurain). Es el primer amigo de Kirito en SAO y es el líder del gremio Fuurinkazan. Él alcanza el nivel 88 en SAO y usa una katana de una mano.</p>
          </div>
          <div class="flex items-center">
            <img class="w-10 h-10 rounded-full mr-4" src="img/min4.png" alt="Avatar of Jonathan Reinink">
            <div class="text-sm">
              <p class="text-gray-900 leading-none">Edad</p>
              <p class="text-gray-600">24 años </p>
            </div>
          </div>
        </div>


      </div>
    </div>


    <div class="w-full md:w-1/2 lg:w-2/5  block ml-auto ">


      <div class="max-w-sm w-full lg:max-w-full lg:flex">
        <div class="h-48 lg:h-auto lg:w-40 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('img/6.png')" title="sinon">
        </div>
        <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
          <div class="mb-8">
           
            <div class="text-gray-900 font-bold text-xl mb-2">Shino Asada</div>
            <p class="text-gray-700 text-base">Shino Asada (朝田詩乃, Asada Shino) es uno de los personajes principales de la serie, el cual es introducido en el arco Phantom Bullet. Ella conoce a Kirito en un juego llamado Gun Gale Online donde lleva el nombre de Sinon (シノン Shinon). Su arma más valiosa en el juego es PGM Ultima Ratio Hecate II, gracias a la cual se ganó el apodo de Hecate.</p>
          </div>
          <div class="flex items-center">
            <img class="w-10 h-10 rounded-full mr-4" src="img/main6.png" alt="Avatar of Jonathan Reinink">
            <div class="text-sm">
              <p class="text-gray-900 leading-none">Edad</p>
              <p class="text-gray-600">16 años</p>
            </div>
          </div>
        </div>


      </div>
    </div>


  </div>
<!--VIDEO-->

  <div id="trailer" class="flex-center bg-gray-900 w-1/1 text-center">
    <br><br>
    <h1 class="text-5xl text-white">trailer</h1>
    <br>
    <video class="mx-auto" src="img/trailer.mp4" width="80%" height="200px" poster="img/vids.png" controls></video>
  </div>



  <!--FORMULARIO-->

  <div class="mt-20 flex-center bg-gray-900 w-1/1 text-center">
    <br>
    <h1 class="text text-m lg:text-5xl text-white">Llena el formulario y gana dos entradas <br> a la nueva temporada </h1>
    <br>
  </div>

  <div class="mt-20 flex-center bg-gray-900 w-1/1 text-center -my-64">
  <form class=" flex flex-col w-full  lg:w-1/2 mx-auto ">

    <div class=" min-h-screen flex items-center  w-full -my-30 ">
      <input class=" text text-m sm:text-4xl appearance-none bg-transparent  border-b border-b-2 border-teal-500 w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" placeholder="Nombre" aria-label="Full name">
      <a href="#parte2"><button class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-xl border-4 text-white py-1 px-2 rounded" type="button">
      Siguiente
      </button></a>
      
    </div>

    <div id="parte2" class="min-h-screen flex items-center py-2 w-full">
      <input class=" text text-m sm:text-4xl appearance-none bg-transparent  border-b border-b-2 border-teal-500 w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" placeholder="Apellido" aria-label="Full name">
      <a href="#parte3"><button class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-xl border-4 text-white py-1 px-2 rounded" type="button">
      Siguiente
      </button></a>
      
    </div>

    <div id="parte3" class="min-h-screen flex items-center py-2 w-full">
      <input class=" text text-m sm:text-4xl appearance-none bg-transparent  border-b border-b-2 border-teal-500 w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="email" placeholder="@correo" aria-label="Full name">
      <a href="#parte4"><button class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-xl border-4 text-white py-1 px-2 rounded" type="button">
      Siguiente
      </button></a>
      
    </div>

    <div id="parte4" class="min-h-screen flex items-center py-2 w-full">
      <input class=" text text-m sm:text-4xl appearance-none bg-transparent  border-b border-b-2 border-teal-500 w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="password" placeholder="contraseña  *******" aria-label="Full name">
      
     <a href="#parte5"> <button class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-xl border-4 text-white py-1 px-2 rounded" type="button">
      Siguiente
      </button></a>
      
    </div>



    <div id="parte5" class=" min-h-screen  flex flex-wrap flex items-center w-full mb-0">
      <div class="w-full h-4 md:w-1/4 px-3  md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
          ciudad
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="San Salvador">
      </div>
      <div class="w-full  h-4 md:w-1/4 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
          Departamento
        </label>
        <div class="relative">
          <select class=" block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
            <option>Ahuachapán</option>
            <option>Cabañas</option>
            <option>Chalatenango</option>
            <option>Cuscatlán</option>
            <option>La Libertad</option>
            <option>La Paz</option>
            <option>La Unión</option>
            <option>Morazán</option>
            <option>San Miguel</option>
            <option>San Salvador</option>
            <option>San Vicente</option>
            <option>Santa Ana</option>
            <option>Sonsonate</option>
            <option>Usulután</option>
            
          </select>
          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
          </div>
        </div>
      </div>
      <div class="w-full  h-4 md:w-1/4 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
          numero 
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="number" type="text" placeholder="+503">
      </div>
      <div class=" w-full h-4 md:w-1/4 px-3 mb-6 mt-16">
      <button class="w-32 md: flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-xl border-4 text-white py-1 px-2 rounded" type="submit">
        enviar
        </button>
      </div>
    </div>


  </form>
</div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>
@endsection
