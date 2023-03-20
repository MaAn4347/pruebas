window.onload = function () {

  var alphabet = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h',
  'i', 'j', 'k', 'l', 'm', 'n','ñ', 'o', 'p', 'q', 'r', 's',
  't', 'u', 'v', 'w', 'x', 'y', 'z'];
  
  var categories;         // Matriz de temas
  var chosenCategory;     // Categoría seleccionada
  var getHint ;           // Palabra getHint
  var word ;              /// palabra seleccionada
  var guess ;             // Geuss
  var geusses = [ ];      // Adivinanzas almacenadas
  var lives ;             // Vidas
  var counter ;           // Contar conjeturas correctas
  var space;              // Número de espacios en la palabra '-'

  // Get elements
  var showLives = document.getElementById("mylives");
  var showCatagory = document.getElementById("catagoryName");
  var getHint = document.getElementById("hint");
  var showClue = document.getElementById("clue");



  // create alphabet ul
  var buttons = function () {
    myButtons = document.getElementById('buttons');
    letters = document.createElement('ul');

    for (var i = 0; i < alphabet.length; i++) {
      letters.id = 'alphabet';
      list = document.createElement('li');
      list.id = 'letter';
      list.innerHTML = alphabet[i];
      check();
      myButtons.appendChild(letters);
      letters.appendChild(list);
    }
  }
    
  
  // Select Catagory
  var selectCat = function () {
    if (chosenCategory === categories[0]) {
      catagoryName.innerHTML = "La categoría elegida es: Origen de la mercadotecnia";
    } else if (chosenCategory === categories[1]) {
      catagoryName.innerHTML = "La categoría elegida es: Las cuatro P";
    } else if (chosenCategory === categories[2]) {
      catagoryName.innerHTML = "La categoría elegida es: Componentes de la mercadotecnia";
    }
    else if (chosenCategory === categories[3]) {
      catagoryName.innerHTML = "La categoría elegida es: Características de la mercadotecnia ";
    }
    else if (chosenCategory === categories[4]) {
      catagoryName.innerHTML = "La categoría elegida es: Conceptos fundamentales de la mercadotecnia ";
    }
    else if (chosenCategory === categories[5]) {
      catagoryName.innerHTML = "La categoría elegida es: Mezcla de mercadotecnia ";
    }
    else if (chosenCategory === categories[6]) {
      catagoryName.innerHTML = "La categoría elegida es: Empresas de servicios turísticos ";
    }
  }

  // Create geusses ul
   result = function () {
    wordHolder = document.getElementById('hold');
    correct = document.createElement('ul');

    for (var i = 0; i < word.length; i++) {
      correct.setAttribute('id', 'my-word');
      guess = document.createElement('li');
      guess.setAttribute('class', 'guess');
      if (word[i] === "-") {
        guess.innerHTML = "-";
        space = 1;
      } else {
        guess.innerHTML = "_";
      }

      geusses.push(guess);
      wordHolder.appendChild(correct);
      correct.appendChild(guess);
    }
  }
  
  // Show lives
   comments = function () {
    showLives.innerHTML = "Tienes " + lives + " Vidas";
    if (lives < 1) {
      showLives.innerHTML = "Juego terminado";
    }
    for (var i = 0; i < geusses.length; i++) {
      if (counter + space === geusses.length) {
        showLives.innerHTML = "¡Tú ganas!";
      }
    }
  }

      // Animate man
  var animate = function () {
    var drawMe = lives ;
    drawArray[drawMe]();
  }

  
   // Hangman
  canvas =  function(){

    myStickman = document.getElementById("stickman");
    context = myStickman.getContext('2d');
    context.beginPath();
    context.strokeStyle = "black";
    context.lineWidth = 2;
  };
  
    head = function(){
      myStickman = document.getElementById("stickman");
      context = myStickman.getContext('2d');
      context.beginPath();
      context.arc(60, 25, 10, 0, Math.PI*2, true);
      context.stroke();
    }
    
  draw = function($pathFromx, $pathFromy, $pathTox, $pathToy) {
    
    context.moveTo($pathFromx, $pathFromy);
    context.lineTo($pathTox, $pathToy);
    context.stroke(); 
}

   frame1 = function() {
     draw (0, 150, 150, 150);
   };
   
   frame2 = function() {
     draw (10, 0, 10, 600);
   };
  
   frame3 = function() {
     draw (0, 5, 70, 5);
   };
  
   frame4 = function() {
     draw (60, 5, 60, 15);
   };
  
   torso = function() {
     draw (60, 36, 60, 70);
   };
  
   rightArm = function() {
     draw (60, 46, 100, 50);
   };
  
   leftArm = function() {
     draw (60, 46, 20, 50);
   };
  
   rightLeg = function() {
     draw (60, 70, 100, 100);
   };
  
   leftLeg = function() {
     draw (60, 70, 20, 100);
   };
  
  drawArray = [rightLeg, leftLeg, rightArm, leftArm,  torso,  head, frame4, frame3, frame2, frame1]; 


  // OnClick Function
   check = function () {
    list.onclick = function () {
      var geuss = (this.innerHTML);
      this.setAttribute("class", "active");
      this.onclick = null;
      for (var i = 0; i < word.length; i++) {
        if (word[i] === geuss) {
          geusses[i].innerHTML = geuss;
          counter += 1;
        } 
      }
      var j = (word.indexOf(geuss));
      if (j === -1) {
        lives -= 1;
        comments();
        animate();
      } else {
        comments();
      }
    }
  }
  
    
  // Play
  play = function () {
    categories = [
        ["mercadotecnia", "publicidad", "consumidores", "segmentacion", "estrategias", "competitivo"],
        ["producto", "precio", "plaza", "promocion", "mezcla-de-mercadotecnia"],
        ["investigacion", "segmentacion", "posicionamiento", "promocion", "distribucion"],
        ["mercado","consumidores","promocion","precio","innovacion"],
        ["segmentacion","investigacion","posicionamiento","marketing-mix","fidelizacion"],
        ["promocion","distribucion","demanda"],
        ["hoteles","agencias","restaurantes","transporte"]
    ];

    chosenCategory = categories[Math.floor(Math.random() * categories.length)];
    word = chosenCategory[Math.floor(Math.random() * chosenCategory.length)];
    word = word.replace(/\s/g, "-");
    console.log(word);
    buttons();

    geusses = [ ];
    lives = 10;
    counter = 0;
    space = 0;
    result();
    comments();
    selectCat();
    canvas();
  }

  play();
  
  // Hint

    hint.onclick = function() {

      hints = [
        ["Disciplina que se encarga de promocionar y vender productos y servicios", "Herramienta utilizada para atraer a los consumidores y promover las ventas", "Personas que compran o utilizan productos y servicios", "Proceso de dividir el mercado en grupos más pequeños para atender mejor las necesidades de cada grupo", "Planes y tácticas utilizados para alcanzar los objetivos de la mercadotecnia", "Situación en la que varias empresas compiten por los mismos clientes o mercado."],
        ["Palabra que se refiere al bien o servicio que la empresa ofrece al mercado.", "Término que se refiere al valor monetario asignado al producto o servicio.", "También conocido como distribución, se refiere a cómo se llevará el producto al mercado.", "Estrategias de comunicación utilizadas para promocionar y vender el producto o servicio.", "Elementos fundamentales que una empresa debe considerar al diseñar y ejecutar su estrategia de marketing."],
        ["Proceso de recolección y análisis de información sobre los consumidores y el mercado en general.", "División del mercado en grupos más pequeños de consumidores con necesidades y deseos similares.", "Creación de una imagen y una posición en el mercado que diferencie a la empresa de su competencia.", "Actividades que las empresas realizan para promocionar sus productos y servicios.", "Forma en que los productos y servicios se entregan a los consumidores."],
        ["Es el lugar donde se desarrollan las actividades comerciales y se intercambian bienes y servicios.","Personas que adquieren bienes o servicios para satisfacer sus necesidades o deseos.","Actividades que se realizan para dar a conocer los productos o servicios de la empresa y persuadir al cliente para que los adquiera.","Valor monetario que se asigna a los productos o servicios de la empresa.","Proceso de creación de nuevas ideas o productos para mejorar la satisfacción del cliente y la competitividad de la empresa."],
        ["Estrategia para dividir el mercado en grupos de consumidores similares.","Herramienta clave para entender las necesidades y preferencias del cliente.","Percepción que una empresa quiere crear en la mente del consumidor.","Conjunto de herramientas de marketing utilizadas para promocionar y vender productos o servicios.","Proceso de crear relaciones duraderas con los clientes para lograr su lealtad y repetición de compra."],
        ["Herramienta clave de la mezcla de mercadotecnia para comunicar y persuadir al mercado sobre los productos o servicios de la empresa.","ariable controlable de la mezcla de mercadotecnia que se enfoca en la entrega y disponibilidad de los productos o servicios al mercado objetivo.","Palabra clave que describe el objetivo de la mezcla de mercadotecnia: influir en la demanda del mercado del producto o servicio de la empresa."],
        ["Establecimientos que brindan alojamiento a turistas y viajeros.","Empresas que se encargan de planificar y organizar viajes para individuos y grupos.","Lugares donde se ofrecen comidas y bebidas a los turistas y viajeros.","Empresas que brindan servicios de movilidad a los turistas y viajeros."]
    ];

    var catagoryIndex = categories.indexOf(chosenCategory);
    var hintIndex = chosenCategory.indexOf(word);
    showClue.innerHTML = "Pista: - " +  hints [catagoryIndex][hintIndex];
  };

   // Reset

  document.getElementById('Reiniciar').onclick = function() {
    correct.parentNode.removeChild(correct);
    letters.parentNode.removeChild(letters);
    showClue.innerHTML = "";
    context.clearRect(0, 0, 400, 400);
    play();
  }
}


